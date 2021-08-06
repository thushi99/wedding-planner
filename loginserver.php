<?php
session_start();

// initializing variables

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'dreams');

// REGISTER USER
if (isset($_POST['Login'])) {
  // receive all input values from the form
  $email = $_POST['email'];
  $password = $_POST['password'];
  $adminaccess="adminaccess";


  $sql="SELECT * FROM users WHERE email='$email' AND  password='$password'OR'$adminaccess'";
  $result=mysqli_query($db,$sql);

  if(mysqli_num_rows($result)==1)
  {
	$_SESSION['id']=$email;
    header("location:L_index.php");
  }
  else 
  {
    echo'<script type="text/javascript">
    alert ("Invalid Username and Password");
    </script>';
  }
}

?>
