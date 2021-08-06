<!DOCTYPE html>
<html>
<head>
    <title>Dreams Wedding Planners</title>
    <link rel="shortcut icon" type="image/x-icon" href="images/titleicon.png">
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="styles/adminstyle.css">
    <script src="script.js"></script>
    <style>
        
    </style>
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
                <li><img src="images/icons/payment.png" width="20px"><a href="payments.php">&nbsp;Payments</a></li>
                <li><img src="images/icons/feedback.png" width="20px"><a href="feedbacks.php">&nbsp;Feedbacks</a></li>
                <li><img src="images/icons/products.png" width="20px"><a href="#">&nbsp;Products</a></li>
                <li><img src="images/icons/logout.png" width="21px"><a href="adminlogout.php">&nbsp;Logout</a></li>
            </ul>
        </div>
    </div>
    </header>
    <hr>
<!----------------------------------------------------------------------------->
<center>
    <h1 class="admin-h1">Products Database</h1>
    <div class="table">
        <table border="1" width="95%" style="border-collapse: collapse;">
            <tr>
                <th>Product ID</th>
                <th>Product Type</th>
                <th>Product Name</th>
                <th>Price</th>
            </tr><br>
            <?php
                $connection=mysqli_connect('localhost','root','','dreams');

                    $query="SELECT * FROM products";

                    $query_run=mysqli_query($connection,$query);

                    while($row = mysqli_fetch_array($query_run)) 
                    {
                        ?>
                        <tr>
                            <td><?php echo $row['pID']; ?></td>
                            <td><?php echo $row['pType']; ?></td>
                            <td><?php echo $row['pName']; ?></td>
                            <td><?php echo $row['pPrice']. "&nbsp;&nbsp;LKR"; ?></td>
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
