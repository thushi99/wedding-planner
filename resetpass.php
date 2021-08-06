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
    <script src="script/showpassword.js"></script>
    <script>
        function checkPasswords2()
        {
            if(document.getElementById("new-password").value!=document.getElementById("confirm-password").value)
            {
                alert("Warning!!! Passwords are Mismatched.");
                return false;
            }
            else
            { 
                return true;
            }
        }               
    </script>
    <style>
        @import "https://fonts.googleapis.com/css2?family=Merriweather&display=swap";

        table
        {
            width: 100%;
        }

        .td-1
        {
            width: 40%;
            color: rgb(255, 255, 255);
            font-size: 20px;
            filter:drop-shadow(0 0 8px #ffffff);
            font-family: 'Merriweather', serif;
        }

        .td-2
        {
            width: 2%;
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

        .signup
        {
            width: 30%;
        }

        #old-password,#new-password,#confirm-password
        {
            width:100% ;
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
                <li><img src="images/icons/profile.png" width="21px"><a href="profile.php">&nbsp;Profile</a></li>
                <li><img src="images/icons/logout.png" width="20px"><a href="logout.php">&nbsp;Logout</a></li>
            </ul>
        </div>';}?>
</div>
    </header>
	<hr>

<!----------------------------------------------------------------------------->

<?php

$pdo_statement = $pdo_conn->prepare("SELECT * FROM users WHERE email='" . $_SESSION['id'] . "'");
	$pdo_statement->execute();
    $result = $pdo_statement->fetchAll();

    $oqr="SELECT password FROM users WHERE id='".$_SESSION['id']."' ";

		if(!empty($result)) { 
        foreach ($result as $row) {
            echo '
    <div class="signup">
        <form class="login" method="POST"  action="resetsubmit.php?getID='.$row["id"].'" onsubmit="return checkPasswords2()">
            <h1>Change Password</h1>
            <hr>
            <input type="password" id="old-password" placeholder="Old Password" name="oldPass" value='.$row["password"].' required>
            
            <input type="password" id="new-password" placeholder="New Password" name="newPass" required>

            <input type="password" id="confirm-password" placeholder="Confirm Password" name="confirmPass" required>

            <input type="checkbox" onclick="resetPassword()" ><label class="show-password">&nbsp;Show Password</label>

            <input type="submit" id="submit" name="change" value="Submit">
        </form>
    </div>
    ';
        }}
        ?>
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
