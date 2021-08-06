<?php
    $con=mysqli_connect("localhost","root","","dreams");

    if(!$con)
    {
        die("Connection Error");
    }

    $FeedbackID=$_GET['GetID'];
    $query="SELECT * FROM feedback WHERE feedbackID='".$FeedbackID."' ";
    $result=mysqli_query($con,$query);

    while($row=mysqli_fetch_assoc($result))
    {
        $fID=$row['feedbackID'];
        $date=$row['date'];
        $name=$row['name'];
        $email=$row['email'];
        $message=$row['message'];
    }

?>
<!DOCTYPE html>
<head>
    <html>
    <title>Dreams Wedding Planners</title>
    <link rel="shortcut icon" type="image/x-icon" href="images/titleicon.png">
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="styles/adminstyle.css">
    <link rel="stylesheet" href="styles/edit.css">
    <script src="script/showpassword.js"></script>
</head>
<body>
    <!-- Header Part of the Webpage -->
    <header>
    <div class="header">
        <!-- Website Logo -->
        <div class="logo">
            <img src="images/adminlogo.png" alt="logo" width="300px">
            <h1 class="admin-heading" style="display: inline-block;">Admin Mode</h1>
        </div>

        <!-- Navigation Menu -->
        <div class="nav-menu admin-nav">
            <ul>
                <li><img src="images/icons/profile.png" width="20px"><a href="#">&nbsp;Users</a></li>
                <li><img src="images/icons/booking.png" width="20px"><a href="bookings.php">&nbsp;Bookings</a></li>
                <li><img src="images/icons/payment.png" width="20px"><a href="payments.php">&nbsp;Payments</a></li>
                <li><img src="images/icons/feedback.png" width="20px"><a href="feedbacks.php">&nbsp;Feedbacks</a></li>
                <li><img src="images/icons/products.png" width="20px"><a href="products.php">&nbsp;Products</a></li>
                <li><img src="images/icons/logout.png" width="21px"><a href="adminlogout.php">&nbsp;Logout</a></li>
            </ul>
        </div>
    </div>
    </header>
    <hr>
<!----------------------------------------------------------------------------->
<div class="profile">
    <center>
    <fieldset style="width: 40%;">
        <legend align="center">
            <h1 style="margin: auto;filter:drop-shadow(0 0 5px blue);">FAQ Answer</h1>
        </legend>
        <form action="displayfaq.php?fID=<?php echo $FeedbackID ?>" method="post">
            <table style="padding: 5px;" >
                <tr class="row">
                    <td class="td-1">Feedback ID</td>
                    <td class="td-2">:</td>
                    <td class="td-3"><input type="text" id="feedback" name="Fid" value="<?php echo $fID ?>" required></td>
                </tr>
                <tr class="row">
                    <td class="td-1">Date</td>
                    <td class="td-2">:</td>
                    <td class="td-3"><input type="text" id="feedback" name="Fdate" value="<?php echo $date ?>" required></td>
                </tr>
                <tr class="row">
                    <td class="td-1">Name</td>
                    <td class="td-2">:</td>
                    <td class="td-3"><input type="text" id="feedback" name="Fname" value="<?php echo $name ?>" required></td>
                </tr>
                <tr class="row">
                    <td class="td-1">Email</td>
                    <td class="td-2">:</td>
                    <td class="td-3"><input type="text" id="feedback" name="Femail" value="<?php echo $email ?>" required></td>
                </tr>
                <tr class="row">
                    <td class="td-1">Message</td>
                    <td class="td-2">:</td>
                    <td class="td-3"><input type="text" id="feedback" name="Fmessage" value="<?php echo $message ?>" required></td>
                </tr>
                <tr class="row">
                    <td class="td-1">Answer</td>
                    <td class="td-2">:</td>
                    <td class="td-3">
                        <textarea class="feedbackDisplay" name="FAQanswer" required></textarea>
                    </td>
                </tr>
            </table>
            <button type="submit" name="display" id="display">Display</button>
        </form>
    </fieldset>
    </center>
        </div> 
<!----------------------------------------------------------------------------->
    <hr>
    <footer>
    
        <div class="bottom">
            <center><span>&copy; 2020 Dreams Wedding Planners. All Rights Reserved</span></center>
        </div>
    </footer>
</body>
</html>
