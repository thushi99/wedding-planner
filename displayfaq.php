<?php
     $con=mysqli_connect("localhost","root","","dreams");

     if(!$con)
     {
         die("Connection Error");
     }

     if(isset($_POST['display']))
     {
        $fid=$_GET['fID'];
        $fdate=$_POST['Fdate'];
        $fname=$_POST['Fname'];
        $femail=$_POST['Femail'];
        $fmessage=$_POST['Fmessage'];
        $faqanswer=$_POST['FAQanswer'];

        $query="INSERT INTO faq (feedbackID, date, name, email, message, answers) 
        VALUES('$fid','$fdate', '$fname', '$femail','$fmessage','$faqanswer')";
        $query2="DELETE FROM feedback WHERE feedbackID='".$fid."' ";

        $result=mysqli_query($con,$query);
        $result2=mysqli_query($con,$query2);
        if($result && $query2)
        {
            header("location:feedbacks.php");
        }
        else
        {
            echo'Please Check Your Query';
        }
     }
     else
     {
         header("location:displayfaq.php");
     }
?>