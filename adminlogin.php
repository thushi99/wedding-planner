<?php
session_start();

// initializing variables

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'dreams');

// REGISTER USER
if (isset($_POST['Login'])) {
  // receive all input values from the form
  $adminUsername = $_POST['adminUsername'];
  $adminPassword = $_POST['adminPassword'];


  $sql="SELECT * FROM admin WHERE adminUsername='$adminUsername' AND  adminPassword='$adminPassword'";
  $result=mysqli_query($db,$sql);

  if(mysqli_num_rows($result)==1)
  {
	$_SESSION['adminID']=$adminUsername;
    header("location:users.php");
  }
  else
  {
    echo'<script type="text/javascript">
    alert ("Invalid Username and Password");
    </script>';
  }
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Dreams Wedding Planners</title>
    <link rel="shortcut icon" type="image/x-icon" href="images/titleicon.png">
    <link rel="stylesheet" href="styles/style.css">
    <script src="script.js"></script>
    <style>
        #adminUsername,#adminPassword
        {
            width: 100%;
        }
    </style>
</head>
<body>
    <!-- Header Part of the Webpage -->
    <header>
    <div class="header">
        <!-- Search Bar -->
        <form class="search">
            <input type="text" placeholder="Search.." name="search2">
            <button type="submit"><img src="images/icons/search.png" width="12px"></button>
        </form>

        <!-- Website Logo -->
        <div class="logo">
            <img src="images/logo.png" alt="logo" width="300px">
        </div>

    </div>
    </header>
    <hr>
<!----------------------------------------------------------------------------->

<div class="signup">
    <form class="Login" action="" method="POST">
        <h1>Admin Login</h1>
        <hr>
        <input type="text" id="adminUsername" placeholder="Username" name="adminUsername" required>
        <input type="password" id="adminPassword" placeholder="Password" name="adminPassword" required>
        <br>
        <input type="submit" id="submit" value="Login" name="Login">
    </form>
</div>



<!----------------------------------------------------------------------------->
<hr>
<!-- Footer Part of the Webpage -->
<footer>
    <div class="main-content">

        <!--Sitemap section-->
        <div class="left section">
            <h3>Quick Links</h3>
            <div class="content">
            <p>
                <a href="index.html">Home</a><br>
                <a href="aboutus.html">About Us</a><br>
                <a href="policy.html">Privacy & Policy</a><br>
                <a href="terms.html">Terms & Conditions</a><br>
                <a href="refundpolicy.html">Refund Policy</a><br>
            </p>
            </div>
        </div>

        <!--Contact Details-->
        <div class="center section">
            <h3>Contact Us</h3>
            <div class="content">
            <p>
                <div class="contact-icon">
                    <img src="images/icons/phone.png" width="20px">
                </div>&nbsp;+94 771234567<br>
                <div class="contact-icon">
                    <img src="images/icons/mail2.png" width="20px">
                </div>&nbsp;support@dreamswp.com<br>
                <div class="contact-icon">
                    <img src="images/icons/address.png" width="20px">
                </div>&nbsp;New Kandy Road,<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Malabe.<br>
            </p>
            </div>
        </div>

        <!--Maps-->
        <div class="right section">
            <h3>Find Us </h3>
            <div class="content">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.798467112139!2d79.9707558143667!3d6.914682820411325!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae256db1a6771c5%3A0x2c63e344ab9a7536!2sSri%20Lanka%20Institute%20of%20Information%20Technology!5e0!3m2!1sen!2slk!4v1599656719062!5m2!1sen!2slk" width="140" height="140" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

            <!--Social media links-->
            <div class="social">
                <a href="#">
                    <div class="facebook">
                        <img src="images/icons/facebook.png" width="10px">
                    </div>
                </a>

                <a href="#">
                    <div class="twitter">
                        <img src="images/icons/twitter.png" width="20px">
                    </div>
                </a>

                <a href="#">
                    <div class="instagram">
                        <img src="images/icons/instagram.png" width="19px">
                    </div>
                </a>

                <a href="#">
                    <div class="youtube">
                        <img src="images/icons/youtube.png" width="20px">
                    </div>
                </a>

            </div>
            </div>
        </div>
    </div>
    <div class="bottom">
        <center>
            <span>
                &copy; 2020 Dreams Wedding Planners. All Rights Reserved
            </span>
        </center>
    </div>
</footer>
</body>
</html>
