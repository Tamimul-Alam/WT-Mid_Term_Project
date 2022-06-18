<?php

session_start();
require_once '../Controller/users.php';
$user = findUser($_SESSION['current_user']);
if (!$user) {
    header('location: login.php');
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Seller Dashboard</title>
</head>
<body>
    <center>
    <h2>Wellcome Back, <?php echo $user['First_Name'] ?></h2>
    <?php if (isset($user['Image'])) { ?>
        <img style="width: 21rem;" src="../File/<?php echo $user['Image'] ?>" alt="Profile Pic">
    <?php } ?>
        <br>
        <a href="../Controller/logout.php">Logout</a>
        <br>
        <a href="create_product.php">Add Products</a>
        <br>
        <a href="../View/product.php">Show Products</a>
        <br>
        <a href="https://github.com/Sajid186/WT_Summer">Contact Admin</a>
        <br>
</body>
</html>