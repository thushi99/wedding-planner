<?php
    $con=mysqli_connect("localhost","root","","dreams");

    if(!$con)
    {
        die("Connection Error");
    }

    if(isset($_GET['Del']))
    {
        $UserID=$_GET['Del'];
        $query="DELETE FROM users WHERE id='".$UserID."'";
        $result=mysqli_query($con,$query);

        if($result)
        {
            header("Location:users.php");
        }
        else
        {
            header("Location:users.php");
        }
    }
?>