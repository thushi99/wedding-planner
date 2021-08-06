<!DOCTYPE html>
<head>
    <html>
    <title>Dreams Wedding Planners</title>
    <link rel="shortcut icon" type="image/x-icon" href="images/titleicon.png">
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="styles/adminstyle.css">
    <style>
        a
        {
            text-decoration: none;
        }

        .edit
        {
            border:1px blue solid;
            padding:3px 6px 3px 6px;
            color:lightblue ;
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

        .edit:hover
        {
            border: 2px solid blue;
            text-shadow: 0px 0px 3px lightblue;
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
        <!-- Search Bar -->
        <form class="search">
            <input type="text" placeholder="Search.." name="search2">
            <button type="submit"><img src="images/icons/search.png" width="12px"></button>
        </form>

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
    <center>
        <h1 class="admin-h1">User Database</h1>
        <div class="table">
            <table border="1" width="95%" style="border-collapse: collapse;">
                <tr>
                    <th>ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Password in Hash</th>
                    <th>Gender</th>
                    <th>Date of Birth</th>
                    <th>Phone</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr><br>
                <?php
                    $connection=mysqli_connect('localhost','root','','dreams');

                        $query="SELECT * FROM users";

                        $query_run=mysqli_query($connection,$query);

                        while($row = mysqli_fetch_array($query_run))
                        {
                            $hashpassword=md5($row['password']);
                            ?>
                            <tr>
                                
                                <td><?php echo $row['id']; ?></td>
                                <td><?php echo $row['first_name']; ?></td>
                                <td><?php echo $row['last_name']; ?></td>
                                <td><?php echo $row['email']; ?></td>
                                <td><?php echo "$hashpassword"; ?></td>
                                <td><?php echo $row['gender']; ?></td>
                                <td><?php echo $row['dob']; ?></td>
                                <td><?php echo $row['mobile']; ?></td>
                                <td>
                                    <center>
                                        <a href="edit.php?GetID=<?php echo $row['id']; ?>" class="edit">Edit</a>
                                    </center>
                                </td>
                                <td>
                                    <center>
                                        <a href="delete.php?Del=<?php echo $row['id']; ?>" onclick="return confirm('Are you Sure want to Delete?');" class="delete">Delete</a>
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
