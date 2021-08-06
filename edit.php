<?php
    $con=mysqli_connect("localhost","root","","dreams");

    if(!$con)
    {
        die("Connection Error");
    }

    $UserID=$_GET['GetID'];
    $query="SELECT * FROM users WHERE id='".$UserID."' ";
    $result=mysqli_query($con,$query);

    while($row=mysqli_fetch_assoc($result))
    {
        $userID=$row['id'];
        $fname=$row['first_name'];
        $lname=$row['last_name'];
        $email=$row['email'];
        $password=$row['password'];
        $mobile=$row['mobile'];
        $gender=$row['gender'];
        $dob=$row['dob'];
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
            <img src="images/profile_pic.png" width="150px" style="margin: auto;filter:drop-shadow(0 0 5px blue);">
        </legend>
        <form action="update.php?UID=<?php echo $UserID ?>" method="post">
            <table style="padding: 5px;" >
                <tr class="row">
                    <td class="td-1">First Name</td>
                    <td class="td-2">:</td>
                    <td class="td-3">
                        <input type="text" name="fname" value="<?php echo $fname ?>" required>
                </td>
                </tr>
                <tr class="row">
                    <td class="td-1">Last Name</td>
                    <td class="td-2">:</td>
                    <td class="td-3">
                        <input type="text" name="lname" value="<?php echo $lname ?>" required>
                </td>
                </tr>
                <tr class="row">
                    <td class="td-1">Email</td>
                    <td class="td-2">:</td>
                    <td class="td-3">
                        <input type="text" name="email" value="<?php echo $email ?>" required>
                </td>
                </tr>
                <tr class="row">
                    <td class="td-1">Password</td>
                    <td class="td-2">:</td>
                    <td class="td-3 pass">
                        <input type="password" name="password" id="showPassword" value="<?php echo $password ?>" required>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td class="td-3">
                        <input type="checkbox" onclick="myFunction()" ><label class="show-password">&nbsp;Show Password</label>
                    </td>
                </tr>
                <tr class="row">
                    <td class="td-1">Mobile</td>
                    <td class="td-2">:</td>
                    <td class="td-3">
                        <input type="text" name="mobile" value="<?php echo $mobile ?>" required>
                    </td>
                </tr>
                <tr class="row">
                    <td class="td-1">Gender</td>
                    <td class="td-2">:</td>
                    <td class="td-3"><input type="text" name="gender" value="<?php echo $gender ?>" list="gender" required>
                        <datalist id="gender">
                            <option value="Male">
                            <option value="Female">
                        </datalist>
                    </td>
                </tr>
                <tr class="row">
                    <td class="td-1">Date of Birth</td>
                    <td class="td-2">:</td>
                    <td class="td-3">
                        <input type="date" name="dob" value="<?php echo $dob ?>" required>
                </td>
                </tr>
            </table>
            <button type="submit" name="update" id="update">Update</button>
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
