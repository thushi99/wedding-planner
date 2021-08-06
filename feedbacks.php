<!DOCTYPE html>
<html>
<head>
    <title>Dreams Wedding Planners</title>
    <link rel="shortcut icon" type="image/x-icon" href="images/titleicon.png">
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="styles/adminstyle.css">
    <script src="script.js"></script>
    <style>
        a
        {
            text-decoration: none;
        }

        .display
        {
            border:1px yellowgreen solid;
            padding:3px 6px 3px 6px;
            color:lightgreen ;
            font-size: 17px;
            border-radius: 3px;
        }

        .delete
        {
            border:1px red solid;
            padding:3px 6px 3px 6px;
            color: lightcoral;
            font-size: 17px;
            border-radius: 3px;
        }

        .display:hover
        {
            border: 2px solid yellowgreen;
            text-shadow: 0px 0px 3px lightgreen;
        }

        .delete:hover
        {
            border: 2px solid red;
            text-shadow: 0px 0px 3px lightcoral;
        }
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
                <li><img src="images/icons/feedback.png" width="20px"><a href="#">&nbsp;Feedbacks</a></li>
                <li><img src="images/icons/products.png" width="20px"><a href="products.php">&nbsp;Products</a></li>
                <li><img src="images/icons/logout.png" width="21px"><a href="adminlogout.php">&nbsp;Logout</a></li>
            </ul>
        </div>
    </div>
    </header>
    <hr>
<!----------------------------------------------------------------------------->
<center>
        <h1 class="admin-h1">Pending Customer Feedbacks / FAQ</h1>
        <div class="table">
            <table border="1" width="95%" style="border-collapse: collapse;">
                <tr>
                    <th width="12%">Feedback ID</th>
                    <th>Date</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Message</th>
                    <th>Display</th>
                    <th>Delete</th>
                </tr><br>
                <?php
                    $connection=mysqli_connect('localhost','root','','dreams');

                        $query="SELECT * FROM feedback";

                        $query_run=mysqli_query($connection,$query);

                        while($row = mysqli_fetch_array($query_run)) 
                        {
                            ?>
                            <tr>
                                <td style="width: 10%;"><?php echo $row['feedbackID']; ?></td>
                                <td style="width: 10%;"><?php echo $row['date']; ?></td>
                                <td style="width: 10%;"><?php echo $row['name']; ?></td>
                                <td style="width: 22%;"><?php echo $row['email']; ?></td>
                                <td ><?php echo $row['message']; ?></td>
                                <td style="width: 4%;">
                                    <center>
                                        <a href="faq.php?GetID=<?php echo $row['feedbackID']; ?>" class="display">Display</a>
                                    </center>
                                </td>
                                <td style="width: 6%;">
                                    <center>
                                        <a href="deletefeedback.php?Del=<?php echo $row['feedbackID']; ?>" onclick="return confirm('Are you Sure want to Delete?');" class="delete">Delete</a>
                                    </center>
                                </td>
                            </tr>
                            <?php
                        }
                ?>
            </table>
        </div>
    </center>

    <center>
        <h1 class="admin-h1">Frequently Asked Questions - FAQ</h1>
        <div class="table">
            <table border="1" width="95%" style="border-collapse: collapse;">
                <tr>
                    <th width="12%">Feedback ID</th>
                    <th>Date</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Message</th>
                    <th>Answers</th>
                    <th>Delete</th>
                </tr><br>
                <?php
                    $connection=mysqli_connect('localhost','root','','dreams');

                        $query="SELECT * FROM faq";

                        $query_run=mysqli_query($connection,$query);

                        while($row = mysqli_fetch_array($query_run)) 
                        {
                            ?>
                            <tr>
                                <td style="width: 10%;"><?php echo $row['feedbackID']; ?></td>
                                <td style="width: 9%;"><?php echo $row['date']; ?></td>
                                <td style="width: 10%;"><?php echo $row['name']; ?></td>
                                <td style="width: 18%;"><?php echo $row['email']; ?></td>
                                <td style="width: 17%;"><?php echo $row['message']; ?></td>
                                <td ><?php echo $row['answers']; ?></td>

                                <td style="width: 6%;">
                                    <center>
                                        <a href="deletefaq.php?Del=<?php echo $row['feedbackID']; ?>" onclick="return confirm('Are you Sure want to Delete?');" class="delete">Delete</a>
                                    </center>
                                </td>
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
