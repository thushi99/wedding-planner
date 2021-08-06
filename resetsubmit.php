<?php
     $con=mysqli_connect("localhost","root","","dreams");

     if(!$con)
     {
         die("Connection Error");
     }

     if(isset($_POST['change']))
     {
        $getID=$_GET['getID'];
        $npass=$_POST['newPass'];
        $cpass=$_POST['confirmPass'];
        $query="UPDATE users SET password='$npass' WHERE id='".$getID."' ";

        $result=mysqli_query($con,$query);

        if($result)
        {
            header("location:profile.php");
        }
        else
        {
            echo'Please Check Your Query';
        }
     }
     else
     {
         header("location:resetpass.php");
     }
?>