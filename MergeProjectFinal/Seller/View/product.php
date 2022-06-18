<?php
include_once '../Controller/users.php';
require_once '../Controller/products.php';
$products = getAllProducts();
session_start();
if (!isset($_SESSION['current_user'])) {
  header('location: login.php');
}
$current_user = $_SESSION['current_user'];
?>
<!DOCTYPE html>
<html>
<head>

</head>
<body>
<a href="seller_dash.php">Go Back</a>
<br>
<a href="create_product.php">Add New Product</a>

<h2>Product Table</h2><hr>
<?= $current_user ?>
<table border="1">
  <tr>
    <th>Product ID</th>
    <th>Product Name</th>
    <th>Description</th>
    <th>Price</th>
    <th>Brand</th>
    <th>Catagory</th>
    <th>Actions</th>
</tr>
<?php foreach($products as $product) {?>
  <tr>
    <td><?php echo $product['ID'] ?></td>
    <td><?php echo $product['Product_tittle'] ?></td>
    <td><?php echo $product['Full_description'] ?></td>
    <td><?php echo $product['Pricing'] ?></td>
    <td><?php echo $product['Brand_name'] ?></td>
    <td><?php echo $product['Catagory'] ?></td>
    <td>
      <a href="#">View</a>
      <a href="#">Update</a>
      <a href="#">Delete</a>
    </td>
  </tr>
<?php } ?>

</table>
 
</body>
</html>