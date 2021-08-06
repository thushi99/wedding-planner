<?php
    $con=mysqli_connect("localhost","root","","dreams");

    if(!$con)
    {
        die("Connection Error");
    }

    if(isset($_GET['Del']))
    {
        $fID=$_GET['Del'];
        $query="DELETE FROM feedback WHERE feedbackID='".$fID."'";
        $result=mysqli_query($con,$query);

        if($result)
        {
            header("Location:feedbacks.php");
        }
        else
        {
            header("Location:feedbacks.php");
        }
    }
?>