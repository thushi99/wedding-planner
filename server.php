<?php
session_start();
 
// initializing variables 
$email    = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'dreams');

// REGISTER USER
if (isset($_POST['signup'])) {
  // receive all input values from the form
  $fname = mysqli_real_escape_string($db, $_POST['fname']);
  $lname = mysqli_real_escape_string($db, $_POST['lname']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);
  $gender = mysqli_real_escape_string($db, $_POST['gender']);
  $dob = mysqli_real_escape_string($db, $_POST['dob']);
  $mobile = mysqli_real_escape_string($db, $_POST['mobile']);

  // form validation
  if (empty($fname)) { array_push($errors, "Firstname is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }

  /* first check the database to make sure a user does not already exist with the same username and/or email */
  $user_check_query = "SELECT * FROM users WHERE password='$password_1' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists

    if ($user['email'] === $email) {
      array_push($errors, "<script>alert('Email already exists')</script>");
    }

    if ($user['password'] === $password_1) {
      array_push($errors, "<script>alert('Password already taken')</script>");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$query = "INSERT INTO users (first_name, last_name, email, password,gender,dob,mobile) 
  			  VALUES('$fname','$lname', '$email', '$password_1','$gender','$dob','$mobile')";
  	mysqli_query($db, $query);
  	header('location: login.php');
  }
}
?>
