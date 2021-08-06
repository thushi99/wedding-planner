<!DOCTYPE html>
<html>
<head>
    <title>Dreams Wedding Planners</title>
    <link rel="shortcut icon" type="image/x-icon" href="images/titleicon.png">
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="styles/adminstyle.css">
    <script src="script.js"></script>
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
                <li><img src="images/icons/profile.png" width="20px"><a href="users.php">&nbsp;Users</a></li>
                <li><img src="images/icons/booking.png" width="20px"><a href="bookings.php">&nbsp;Bookings</a></li>
                <li><img src="images/icons/payment.png" width="20px"><a href="#">&nbsp;Payments</a></li>
                <li><img src="images/icons/feedback.png" width="20px"><a href="feedbacks.php">&nbsp;Feedbacks</a></li>
                <li><img src="images/icons/products.png" width="20px"><a href="products.php">&nbsp;Products</a></li>
                <li><img src="images/icons/logout.png" width="21px"><a href="adminlogout.php">&nbsp;Logout</a></li>
            </ul>
        </div>
    </div>
    </header>
    <hr>
<!----------------------------------------------------------------------------->
<center>
        <h1 class="admin-h1">User Database</h1>
        <div class="table">
            <table border="1" width="95%" style="border-collapse: collapse;">
                <tr>
                    <th>Payment ID</th>
                    <th>Name on Card</th>
                    <th>Card Number</th>
                    <th>Expiry Date</th>
                    <th>Address</th>
                    <th>City</th>
                    <th>Zip Code</th>
                    <th>CVV</th>
                </tr><br>
                <?php
                    $connection=mysqli_connect('localhost','root','','dreams');

                        $query="SELECT * FROM payments";

                        $query_run=mysqli_query($connection,$query);

                        while($row = mysqli_fetch_array($query_run)) 
                        {
                            ?>
                            <tr>
                                <td><?php echo $row['paymentID']; ?></td>
                                <td><?php echo $row['nameOnCard']; ?></td>
                                <td><?php echo $row['cardNumber']; ?></td>
                                <td><?php echo $row['expiryDate']; ?></td>
                                <td><?php echo $row['address']; ?></td>
                                <td><?php echo $row['city']; ?></td>
                                <td><?php echo $row['zipCode']; ?></td>
                                <td><?php echo $row['cvvNumber']; ?></td>
                    
                            </tr>
                            <?php
                        }
                ?>
            </table>
        </div>
    </center>

<!----------------------------------------------------------------------------->
<hr>
    
<footer>
<div class="bottom">
    <center><span>&copy; 2020 Dreams Wedding Planners. All Rights Reserved</span></center>
</div>
</footer>
</body>
</html>
