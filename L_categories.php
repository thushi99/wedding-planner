<?php

try
    {
        $db=new mysqli("localhost","root","","dreams");
    }
    catch (Exception $exe){
        echo $exe->getTraceAsString();
    }

    if(isset($_POST['event_date']) && isset($_POST['customer-email']) && 
    isset($_POST['venue']) && isset($_POST['photography']) && 
    isset($_POST['catering']) && isset($_POST['noofguest']))
    {
        $eventdate = $_POST['event_date'];
        $venue = $_POST['venue'];
        $photography = $_POST['photography'];
        $catering = $_POST['catering'];
        $noofguest = $_POST['noofguest'];
        $email = $_POST['customer-email'];

        if (empty($venue)) { array_push($errors, exit());}
        if (empty($photography)) { array_push($errors, exit());}
        if (empty($catering)) { array_push($errors, exit());}
        
        $is_insert = $db->query("INSERT INTO orders (customerEmail,eventDate,hotel,photography,catering,noofguests) VALUES ('$email','$eventdate','$venue','$photography','$catering','$noofguest')");

        if($is_insert == TRUE)
        {
            echo"<script>alert('Your Order Placed Successfully')</script>";
        }
        else
        {
            echo"<script>alert('Order Unsuccessful')</script>";
        }
    }
?>
<!DOCTYPE html>
<html>
<head>
    <title>Dreams Wedding Planners</title>
    <link rel="shortcut icon" type="image/x-icon" href="images/titleicon.png">
    <link rel="stylesheet" href="styles/style.css">
    <script src="script/signupscript.js" onsubmit="return checkPasswords()"></script>
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="styles/venues.css">
    <link rel="stylesheet" href="styles/photography.css">
    <link rel="stylesheet" href="styles/catering.css">
    <link rel="stylesheet" href="styles/orders.css">
    <link rel="stylesheet" href="styles/categories.css">
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
        <div class="nav-menu">
            <ul>
              <li><img src="images/icons/home.png" width="20px"><a href="L_index.php">&nbsp;Home</a></li>
              <li><img src="images/icons/categories.png" width="20px"><a href="#">&nbsp;Categories</a></li>
              <li><img src="images/icons/aboutus.png" width="20px"><a href="L_aboutus.html">&nbsp;About Us</a></li>
              <li><img src="images/icons/contactus.png" width="20px"><a href="L_contactus.php">&nbsp;Contact Us</a></li>
              <li><img src="images/icons/profile.png" width="20px"><a href="profile.php">&nbsp;Profile</a></li>
              <li><img src="images/icons/logout.png" width="20px"><a href="logout.php">&nbsp;Logout</a></li>
            </ul>
        </div>
    </div>
    </header>
    <hr>
<!----------------------------------------------------------------------------->
<!--CATEGORIES SECTION-->
<center>
    <div class="categories">
        <a href="#venues-section"><img src="images/categories/venues.png" width="56%"></a>
        <a href="#photography-section"><img src="images/categories/photography.png" width="56%"></a>
        <a href="#catering-section"><img src="images/categories/catering.png" width="56%"></a>
    </div>
    <img src="images/divider.png" width="90%"><br>
</center>
<br>
<a href="#venues-section" class="myBtn ven">View Venues</a>
<a href="#photography-section" class="myBtn pto">View Photography</a>
<a href="#catering-section" class="myBtn ctr">View Catering</a>
<a href="#orders-payment" class="myBtn odr"><img src="images/icons/orders.png" width="20px">&nbsp;View Orders</a>

<!--VENUES SECTION-->
<section id="venues-section">
    <br>
    <div class="venues-heading">
        <h1>Venues</h1>
    </div>

    <div class="venues">
        <div class="product">
            <img src="images/venues/Hilton.jpg" alt="hilton" style="width:100%">
            <div class="venue-container">
                <center><h2>Hilton Hotel</h2></center>
                <hr>
                <br>
                <ul>
                    <li>- Max Capacity : 1000 Guests</li>
                    <li>- Full A/C</li>
                </ul>
                <br>
                <hr>
                <p>300,000 LKR</p>
            <center>
                <button  class="first" onclick="window.location.href='#orders-payment';"> Book Now</button>
            </center>
            </div>
        </div>

        <div class="product">
            <img src="images/venues/Marble.jpg" alt="Marble" style="width:100%">
            <div class="venue-container">
                <center><h2>Marble Beach</h2></center>
                <hr>
                <br>
                <ul>
                    <li>- Max Capacity : 500 Guests</li>
                    <li>- Non A/C</li>
                </ul>
                <br>
                <hr>
                <p>250,000 LKR</p>
            <center>
                <button  class="first" onclick="window.location.href='#orders-payment';"> Book Now</button>
            </center>
            </div>
        </div>

        <div class="product">
            <img src="images/venues/barracuda.jpg" alt="barracuda" style="width:100%">
            <div class="venue-container">
            <center><h2>Barracuda Resort</h2></center>
            <hr>
            <br>
                <ul>
                    <li>- Max Capacity : 800 Guests</li>
                    <li>- Non A/C</li>
                </ul>
                <br>
                <hr>
                <p>200,000 LKR</p>
            <center>
                <button  class="first" onclick="window.location.href='#orders-payment';"> Book Now</button>
            </center>
            </div>
        </div>
    </div>
    <div class="venues">
        <div class="product">
            <img src="images/venues/cinnamon.jpg" alt="cinnamon" style="width:100%">
            <div class="venue-container">
            <center><h2>Cinnamon Hotel</h2></center>
            <hr>
            <br>
                <ul>
                    <li>- Max Capacity : 1200 Guests</li>
                    <li>- Full A/C</li>
                </ul>
                <br>
                <hr>
                <p>350,000 LKR</p>
            <center>
                <button  class="first" onclick="window.location.href='#orders-payment';"> Book Now</button>
            </center>
            </div>
        </div>

        <div class="product">
            <img src="images/venues/Marine.jpg" alt="marine" style="width:100%">
            <div class="venue-container">
            <center><h2>Marine Beach</h2></center>
            <hr>
            <br>
                <ul>
                    <li>- Max Capacity : 700 Guests</li>
                    <li>- Non A/C</li>
                </ul>
                <br>
                <hr>
                <p>230,000 LKR</p>
            <center>
                <button  class="first" onclick="window.location.href='#orders-payment';"> Book Now</button>
            </center>
            </div>
        </div>

        <div class="product">
            <img src="images/venues/avenra.png" alt="avenra" style="width:100%">
            <div class="venue-container">
                <center><h2>Avenra Resort</h2></center>
                <hr>
                <br>
                <ul>
                    <li>- Max Capacity : 750 Guests</li>
                    <li>- Non A/C</li>
                </ul>
                <br>
                <hr>
                <p>280,000 LKR</p>
            <center>
                <button  class="first" onclick="window.location.href='#orders-payment';"> Book Now</button>
            </center>
            </div>
        </div>
    </div>
</section>
<center>
    <br><p><img src="images/divider.png" width="90%"></p>
</center>

<!--PHOTOGRAPHY SECTION-->
<section id="photography-section">
    <div class="photography-heading">
        <h1>Photography</h1>
    </div>

    <div class="photography">
        <div class="product">
            <img src="images/photography/danushka.jpg" alt="danushka-sandeera" style="width:100%">
            <div class="venue-container">
                <center><h2>Danushka Sandeera Photography</h2></center>
                <hr>
                <br>
                <ul>
                    <li>- Platinum : 300,000 LKR</li>
                    <li>- Golden : 250,000 LKR</li>
                    <li>- Silver : 200,000 LKR</li>
                    <br>
                    <li><a href="https://www.facebook.com/danufoto/" target="parent">View Gallery</a></li>
                </ul>
                <hr>
                <p>Book Now</p>
                <center>
                    <button id="platinum" onclick="window.location.href='#orders-payment';">Platinum</button>
                    <button id="golden" onclick="window.location.href='#orders-payment';">Golden</button>
                    <button id="silver" onclick="window.location.href='#orders-payment';">Silver</button>
                </center>
            </div>
        </div>

        <div class="product">
            <img src="images/photography/capturex.JPG" alt="capturex" style="width:100%">
            <div class="venue-container">
                <center><h2>Studio CaptureX Photography</h2></center>
                <hr>
                <br>
                <ul>
                    <li>- Platinum : 200,000 LKR</li>
                    <li>- Golden : 150,000 LKR</li>
                    <li>- Silver : 1000,000 LKR</li>
                    <br>
                    <li><a href="https://www.facebook.com/studiocapturexphotography/" target="parent">View Gallery </a></li>
                </ul>
                <hr>
                <p>Book Now</p>
                <center>
                    <button id="platinum" onclick="window.location.href='#orders-payment';">Platinum</button>
                    <button id="golden" onclick="window.location.href='#orders-payment';">Golden</button>
                    <button id="silver" onclick="window.location.href='#orders-payment';">Silver</button>
                </center>
            </div>
        </div>

        <div class="product">
            <img src="images/photography/colorvision.JPG" alt="colorvision" style="width:100%">
            <div class="venue-container">
            <center><h2>Color Vision Photography</h2></center>
            <hr>
            <br>
                <ul>
                    <li>- Platinum : 400,000 LKR</li>
                    <li>- Golden : 350,000 LKR</li>
                    <li>- Silver : 300,000 LKR</li>
                    <br>
                    <li><a href="https://www.facebook.com/colourvisionfoto/" target="parent">View Gallery </a></li>
                </ul>
                <hr>
                <p>Book Now</p>
                <center>
                    <button id="platinum" onclick="window.location.href='#orders-payment';">Platinum</button>
                    <button id="golden" onclick="window.location.href='#orders-payment';">Golden</button>
                    <button id="silver" onclick="window.location.href='#orders-payment';">Silver</button>
                </center>
            </div>
        </div>
    </div>
    <div class="photography">
        <div class="product">
            <img src="images/photography/naveen.JPG" alt="naween" style="width:100%">
            <div class="venue-container">
            <center><h2>Naween Aluthge Photography</h2></center>
            <hr>
            <br>
                <ul>
                    <li>- Platinum : 270,000 LKR</li>
                    <li>- Golden : 130,000 LKR</li>
                    <li>- Silver : 180,000 LKR</li>
                    <br>
                    <li><a href="https://www.facebook.com/naweenaluthgephotography/" target="parent">View Gallery </a></li>
                </ul>
                <hr>
                <p>Book Now</p>
                <center>
                    <button id="platinum" onclick="window.location.href='#orders-payment';">Platinum</button>
                    <button id="golden" onclick="window.location.href='#orders-payment';">Golden</button>
                    <button id="silver" onclick="window.location.href='#orders-payment';">Silver</button>
                </center>
            </div>
        </div>

        <div class="product">
            <img src="images/photography/sai.JPG" alt="sai" style="width:100%">
            <div class="venue-container">
            <center><h2>Sai<br>Photography</h2></center>
            <hr>
            <br>
                <ul>
                    <li>- Platinum : 420,000 LKR</li>
                    <li>- Golden : 370,000 LKR</li>
                    <li>- Silver : 320,000 LKR</li>
                    <br>
                    <li><a href="https://www.facebook.com/photography.sai1/" target="parent">View Gallery </a></li>
                </ul>
                <hr>
                <p>Book Now</p>
                <center>
                    <button id="platinum" onclick="window.location.href='#orders-payment';">Platinum</button>
                    <button id="golden" onclick="window.location.href='#orders-payment';">Golden</button>
                    <button id="silver" onclick="window.location.href='#orders-payment';">Silver</button>
                </center>
            </div>
        </div>

        <div class="product">
            <img src="images/photography/studiosiyak.jpg" alt="studiosiyak" style="width:100%">
            <div class="venue-container">
                <center><h2>Studio Siyak Photography</h2></center>
                <hr>
                <br>
                <ul>
                    <li>- Platinum : 300,000 LKR</li>
                    <li>- Golden : 200,000 LKR</li>
                    <li>- Silver : 150,000 LKR</li>
                    <br>
                    <li><a href="https://www.facebook.com/studiosiyakroo/" target="parent">View Gallery</a></li>
                </ul>
                <hr>
                <p>Book Now</p>
                <center>
                    <button id="platinum" onclick="window.location.href='#orders-payment';">Platinum</button>
                    <button id="golden" onclick="window.location.href='#orders-payment';">Golden</button>
                    <button id="silver" onclick="window.location.href='#orders-payment';">Silver</button>
                </center>
            </div>
        </div>
    </div>
    <center>
        <br><p><img src="images/divider.png" width="90%"></p>
    </center>
</section>

<!--CATERING SECTION-->
<section id="catering-section">
    <div class="catering-heading">
        <h1>Catering</h1>
    </div>
    <div class="catering">
        <div class="product">
            <img src="images/catering/sponge.jpg" alt="sponge" style="width:100%">
            <div class="catering-container">
                <center><h2>Sponge Caters</h2></center>
                <hr>
                <br>
                <ul>
                    <li>- Food (Veg/Non-Veg)</li>
                    <li>- Cake Piece</li>
                    <li>- Juice</li>
                    <br>
                </ul>
                <hr>
                <p>700 LKR / Person</p>
            <center>
                <input type="submit" value="Book Now" onclick="window.location.href='#orders-payment';">
            </center>
            </div>
        </div>

        <div class="product">
            <img src="images/catering/royal.jpg" alt="royal" style="width:100%">
            <div class="catering-container">
                <center><h2>Royal Catering</h2></center>
                <hr>
                <br>
                <ul>
                    <li>- Food (Veg/Non-Veg)</li>
                    <li>- Cake Piece</li>
                    <li>- Juice</li>
                    <br>
                </ul>
                <hr>
                <p>800 LKR / Person</p>
                <center>
                    <input type="submit" value="Book Now" onclick="window.location.href='#orders-payment';">
                </center>
            </div>
        </div>

        <div class="product">
            <img src="images/catering/raffles.jpg" alt="raffles" style="width:100%">
            <div class="catering-container">
            <center><h2>Raffles Catering</h2></center>
            <hr>
            <br>
                <ul>
                    <li>- Food (Veg/Non-Veg)</li>
                    <li>- Cake Piece</li>
                    <li>- Juice</li>
                    <br>
                </ul>
                <hr>
                <p>640 LKR / Person</p>
            <center>
                <input type="submit" value="Book Now" onclick="window.location.href='#orders-payment';">
            </center>
            </div>
        </div>
    </div>
    <div class="catering">
        <div class="product">
            <img src="images/catering/mangos.jpg" alt="naween" style="width:100%">
            <div class="catering-container">
            <center><h2>Mangos Caters</h2></center>
            <hr>
            <br>
                <ul>
                    <li>- Food (Veg/Non-Veg)</li>
                    <li>- Cake Piece</li>
                    <li>- Juice</li>
                    <br>
                </ul>
                <hr>
                <p>500 LKR / Person</p>
            <center>
                <input type="submit" value="Book Now" onclick="window.location.href='#orders-payment';">
            </center>
            </div>
        </div>

        <div class="product">
            <img src="images/catering/ps.jpg" alt="sai" style="width:100%">
            <div class="catering-container">
            <center><h2>P&S Catering</h2></center>
            <hr>
            <br>
                <ul>
                    <li>- Food (Veg/Non-Veg)</li>
                    <li>- Cake Piece</li>
                    <li>- Juice</li>
                    <br>
                </ul>
                <hr>
                <p>550 LKR / Person</p>
            <center>
                <input type="submit" value="Book Now" onclick="window.location.href='#orders-payment';">
            </center>
            </div>
        </div>

        <div class="product">
            <img src="images/catering/tasty.jpg" alt="tasty" style="width:100%">
            <div class="catering-container">
                <center><h2>Tasty Caterers</h2></center>
                <hr>
                <br>
                <ul>
                    <li>- Food (Veg/Non-Veg)</li>
                    <li>- Cake Piece</li>
                    <li>- Juice</li>
                    <br>
                </ul>
                <hr>
                <p>680 LKR / Person</p>
            <center>
                <input type="submit" value="Book Now" onclick="window.location.href='#orders-payment';">
            </center>
            </div>
        </div>
    </div>
    <center>
        <br><p><img src="images/divider.png" width="90%"></p>
    </center>
</section>
<section id="orders-payment">
    <br>
    <div class="signup">
        <form action="L_categories.php" method="POST" id="demoForm" class="demoForm" >

            <h1 style="font-size: 30px;">Orders</h1>
            <hr><br>
            <!--EVENT DATE-->
            <center>
            <div class="event-date">
                <h1>Enter the Date</h1>
                <input type="text" id="event-date" name="event_date" placeholder="Selece Event Date" min="<?php
         echo date('Y-m-d');
     ?>" onfocus="(this.type='date')" required>
                <input type="email" id="customer-email" name="customer-email" placeholder="Email" required>
            </div>
            </center>
            <table width="100%" style="border-collapse: collapse;">
                <tr class="heading">
                    <th border="none">Description</th>
                </tr>

                <tr>
                    <td >
                        <select class="description" id="hotel" name ="venue" >
                            <option selected disabled>-Select Venue-</option>
                            <option value="Hilton Hotel">Hilton Hotel</option>
                            <option value="Marble Beach">Marble Beach</option>
                            <option value="Barracuda Resort">Barracuda Resort</option>
                            <option value="Cinnamon Hotel">Cinnamon Hotel</option>
                            <option value="Marine Beach">Marine Beach</option>
                            <option value="Avenra Resort">Avenra Resort</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td >
                        <select class="description" id="photography" name="photography">
                            <option selected disabled>-Select Photography-</option>
                            <option value="Danushka Sandeera Photography - Platinum" >Danushka Sandeera Photography - Platinum</option>
                            <option value="Danushka Sandeera Photography - Golden" >Danushka Sandeera Photography - Golden</option>
                            <option value="Danushka Sandeera Photography - Silver" >Danushka Sandeera Photography - Silver</option>

                            <option disabled>--------------------------------------------</option>

                            <option value="Studio CaptureX Photography - Platinum">Studio CaptureX Photography - Platinum</option>
                            <option value="Studio CaptureX Photography - Golden">Studio CaptureX Photography - Golden</option>
                            <option value="Studio CaptureX Photography - Silver">Studio CaptureX Photography - Silver</option>

                            <option disabled>--------------------------------------------</option>

                            <option value="Color Vision Photography - Platinum">Color Vision Photography - Platinum</option>
                            <option value="Color Vision Photography - Golden">Color Vision Photography - Golden</option>
                            <option value="Color Vision Photography - Silver">Color Vision Photography - Silver</option>

                            <option disabled>--------------------------------------------</option>

                            <option value="Naween Aluthge Photography - Platinum">Naween Aluthge Photography - Platinum</option>
                            <option value="Naween Aluthge Photography - Golden">Naween Aluthge Photography - Golden</option>
                            <option value="Naween Aluthge Photography - Silver">Naween Aluthge Photography - Silver</option>

                            <option disabled>--------------------------------------------</option>

                            <option value="Sai Photography - Platinum">Sai Photography - Platinum</option>
                            <option value="Sai Photography - Golden">Sai Photography - Golden</option>
                            <option value="Sai Photography - Silver">Sai Photography - Silver</option>

                            <option disabled>--------------------------------------------</option>

                            <option value="Studio Siyak Photography - Platinum">Studio Siyak Photography - Platinum</option>
                            <option value="Studio Siyak Photography - Golden">Studio Siyak Photography - Golden</option>
                            <option value="Studio Siyak Photography - Silver">Studio Siyak Photography - Silver</option>
                        </select>
                    </td>
                </tr>

                <tr>
                    <td >
                        <select class="description" id="catering" name="catering" >
                            <option selected disabled>-Select Catering-</option>
                            <option value="Sponge Caterers">Sponge Caterers</option>
                            <option value="Royal Catering">Royal Catering</option>
                            <option value="Raffles Catering">Raffles Catering</option>
                            <option value="Mangos Caterers">Mangos Caterers</option>
                            <option value="P&S Catering">P&S Catering</option>
                            <option value="Tasty Caterers">Tasty Caterers</option>
                        </select>
                        <input type="text"  id="noofguest" placeholder="No of Guests" name="noofguest" required>
                    </td>
                    
                </tr>
            </table>
            <input type="submit" id="order" value="Place Order" name='order'>
        </form>
    </div>

    <div class="signup">
        <form method="POST" action="">
            <h1>Payment Details</h1>
            <hr>
            <!--NAME FIELD-->
            <input type="text" id="city" placeholder="Order ID" name="orderID" maxlength="5" required>

            <!--NAME FIELD-->
            <input type="text" id="city" placeholder="Total Amount" name="totalAmount" maxlength="10" required>

            <!--NAME FIELD-->
            <input type="text" id="card-name" placeholder="Name on Card" name="card-name"required>

            <!--CARD NUMBER FIELD-->
            <input type="text" id="card-number" autocomplete="off" placeholder="Card Number" name="card-number" minlength="" maxlength="20" pattern="[0-9]{16}" required>
            <img width="300px" src="images/cardtypes.png" alt="card_types" id="card-type">

            <!--ADDRESS FIELD-->
            <br>
            <br>
            <input type="text" id="address" placeholder="Address" name="address"required>

            <input type="text" id="city" placeholder="City" name="city"required>

            <input type="text" id="zip" placeholder="Zip" name="zip"required>
            <br>
            <br>

            <!--EXPIRY DATE-->
            <input type="text" id="expiry-date" onkeyup="this.value=this.value.replace(/^(\d\d)(\d)$/g,'$1/$2').replace(/^(\d\d\/\d\d)(\d+)$/g,'$1/$2').replace(/[^\d\/]/g,'')" maxlength="5" name="expiry-date" placeholder="MM/YY">

            <!--CVV PIN-->
            <input type="text" id="cvv" name="cvv" placeholder="CVV">
            <br>

            <!--POLICY ACCEPTANCE CHECK-->
            <div class="policycheck">
            <input type="checkbox" id="policy" onclick="enableButton()" required>&nbsp;I accept the <a href="refundpolicy.html">Refund Policy & Conditions</a>
            </div>

            <!--SUBMIT-->
            <input type="submit" id="pay" value="Pay" name="pay">

        </form>
    </div>
</section>
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
</script>
</body>
</html>
<?php
    try
    {
        $db=new mysqli("localhost","root","","dreams");
    }
    catch (Exception $exe){
        echo $exe->getTraceAsString();
    }

    if(isset($_POST['orderID']) && isset($_POST['totalAmount']) && isset($_POST['card-name']) && isset($_POST['card-number']) && isset($_POST['address']) && isset($_POST['city']) && isset($_POST['zip']) && isset($_POST['expiry-date']) && isset($_POST['cvv']))
    {
        $orderid=$_POST['orderID'];
        $totalamount=$_POST['totalAmount'];
        $cardname=$_POST['card-name'];
        $cardnumber=$_POST['card-number'];
        $address = $_POST['address'];
        $city = $_POST['city'];
        $zip = $_POST['zip'];
        $expirydate = $_POST['expiry-date'];
        $cvv = $_POST['cvv'];
        

        $is_insert = $db->query("INSERT INTO `payments`(`orderID`,`totalAmount`, `nameOnCard`, `cardNumber`,`address`,`city`,`zipCode`,`expiryDate`,`cvvNumber`) 
        VALUES ('$orderid','$totalamount','$cardname','$cardnumber','$address','$city','$zip','$expirydate','$cvv')");

        if($is_insert == TRUE)
        {
            echo"<script>alert('Thanks, Your Payment Submitted Successfully')</script>";
            exit();
        }
        else
        {
            echo"<script>alert('Unsuccessful')</script>";
        }
    }
?>