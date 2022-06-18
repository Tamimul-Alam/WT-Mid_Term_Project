<?php
include("../control/buyerSession_check.php");
include("../control/buyerCookie.php");
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>customer dashboard</title>
</head>
<body>
    <header>
            <h2 align="center">Shopping Ecommerce System </h2><hr>
    </header>
    <!-- <a href="buyer_dashboard.php">Dashboard</a><br><br> -->
        <a href="buyer_profile.php">Profile</a><br><br>
        <!-- <a href="buyer_dashboard.php">Order History</a><br><br>
        <a href="buyer_dashboard.php">Contact Us</a><br><br> -->
        <a href="../control/buyer_logout.php" name ="Logout">Logout</a>
       
</body>
</html>