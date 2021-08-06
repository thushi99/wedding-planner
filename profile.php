<?php
require_once("db.php");
session_start();
if(isset($_SESSION['id']))
{
?>
<!DOCTYPE html>
<html>
<head>
    <title>Dreams Wedding Planners</title>
    <link rel="shortcut icon" type="image/x-icon" href="images/titleicon.png">
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="styles/orders.css">
    <script src="modal.js"></script>
    <style>
        @import "https://fonts.googleapis.com/css2?family=Merriweather&display=swap";

        table
        {
            width: 100%;
        }

        .td-1
        {
            width: 30%;
            color: rgb(255, 255, 255);
            font-size: 20px;
            filter:drop-shadow(0 0 8px #ffffff);
            font-family: 'Merriweather', serif;
        }

        .td-2
        {
            width: 5%;
            color: rgb(255, 255, 255);
            filter:drop-shadow(0 0 8px #ffffff);
        }

        .td-3
        {

            border:solid 1px none;
            border-radius: 3px;
            background-color:rgb(41, 41, 41);
        }

        .profile
        {
            padding: 30px;
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

        <!-- Navigation Menu -->
			
			<?php
			echo'
        <div class="nav-menu">
            <ul>
                <li><img src="images/icons/home.png" width="20px"><a href="L_index.php">&nbsp;Home</a></li>
                <li><img src="images/icons/categories.png" width="20px"><a href="L_categories.php">&nbsp;Categories</a></li>
                <li><img src="images/icons/aboutus.png" width="20px"><a href="L_aboutus.html">&nbsp;About Us</a></li>
                <li><img src="images/icons/contactus.png" width="20px"><a href="L_contactus.php">&nbsp;Contact Us</a></li>
                <li><img src="images/icons/profile.png" width="21px"><a href="#">&nbsp;Profile</a></li>
                <li><img src="images/icons/logout.png" width="20px"><a href="logout.php">&nbsp;Logout</a></li>
            </ul>
        </div>';}?>
</div>
    </header>
	

<!----------------------------------------------------------------------------->
<?php

$pdo_statement = $pdo_conn->prepare("select * from users where email='" . $_SESSION['id'] . "'");
	$pdo_statement->execute();
	$result = $pdo_statement->fetchAll();
		if(!empty($result)) { 
		foreach($result as $row) {
	echo '
<hr>
	
<div class="profile">
    <center>
    <fieldset style="width: 40%;">
        <legend align="center">
            <img src="images/profile_pic.png" width="150px" style="margin: auto;filter:drop-shadow(0 0 5px #ff00ea);">
        </legend>
        <form method="post">
            <table style="padding: 5px;" >

                <tr class="row">
                    <td class="td-1">First Name</td>
                    <td class="td-2">:</td>
                    <td class="td-3"> '.$row["first_name"].'</td>
                </tr>

                <tr class="row">
                    <td class="td-1">Last Name</td>
                    <td class="td-2">:</td>
                    <td class="td-3">'.$row["last_name"].'</td>
                </tr>

                <tr class="row">
                    <td class="td-1">Email</td>
                    <td class="td-2">:</td>
                    <td class="td-3">'.$row["email"].'</td>
                </tr>

                <tr class="row">
                    <td class="td-1">Password</td>
                    <td class="td-2">:</td>
                    <td class="td-3">'.$row["password"].'
                    <div class="reset-icon">
                        <a href="resetpass.php">
                            <img src="images/icons/resetpassword.png" width="25px">
                        </a>
                        </div>
                    </td>
                </tr>

                <tr class="row">
                    <td class="td-1">Mobile</td>
                    <td class="td-2">:</td>
                    <td class="td-3">'.$row["mobile"].'</td>
                </tr>

                <tr class="row">
                    <td class="td-1">Date of Birth</td>
                    <td class="td-2">:</td>
                    <td class="td-3">'.$row["dob"].'</td>
                </tr>
                
            </table>
        </form>
    </fieldset>
    </center>
        </div> 
		';}}
?>
<hr>    
<!----------------------------------------------------------------------------->

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
