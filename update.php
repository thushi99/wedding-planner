<?php
     $con=mysqli_connect("localhost","root","","dreams");

     if(!$con)
     {
         die("Connection Error");
     }

     if(isset($_POST['update']))
     {
        $UserID=$_GET['UID'];
        $fname=$_POST['fname'];
        $lname=$_POST['lname'];
        $email=$_POST['email'];
        $password=$_POST['password'];
        $mobile=$_POST['mobile'];
        $gender=$_POST['gender'];
        $dob=$_POST['dob'];

        $query="UPDATE users SET first_name='".$fname."',last_name='".$lname."',email='".$email."',password='".$password."',mobile='".$mobile."',gender='".$gender."',dob='".$dob."' WHERE id='".$UserID."' ";

        $result=mysqli_query($con,$query);
        $user = mysqli_fetch_assoc($result);
  
        if ($user)
        {
            if ($user['email'] === $email) {
                array_push($errors, "<script>alert('Email already exists')</script>");}
        }

        if($result)
        {
            header("location:users.php");
        }
        else
        {
            echo'Please Check Your Query';
        }
     }
     else
     {
         header("location:users.php");
     }
?>