<?php
session_start();
include '../dbconnection.php';

$productCode = $_GET['productCode'] ?? '';
$productName = $_GET['productName'] ?? '';
$productPrice = $_GET['productPrice'] ?? '';
$imageName = $_GET['imageName'] ?? '';
$imagePath = $_GET['imagePath'] ?? '';
$quantity = $_GET['quantity'] ?? '';
$total = $productPrice * $quantity;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Purchase Confirmation</title>
    <link rel="stylesheet" href="cart.css">
</head>
<body>

<h1>Purchase Confirmation</h1>
<form>
<p>Product Code: <?php echo htmlspecialchars($productCode); ?></p>
<p>Product Name: <?php echo htmlspecialchars($productName); ?></p>
<p>Price: $ <?php echo htmlspecialchars($productPrice); ?></p>
<p>Quantity: <?php echo htmlspecialchars($quantity); ?></p>
<p>Total Price: $ <?php echo htmlspecialchars($total); ?></p>

</form>
<form>
    <p><input type="text" class="input" id="address" name="address" placeholder="Full Name"><p>
    <p><input type="text" class="input" id="address" name="address" placeholder="Address"><p>
    <p><input type="text" class="input" id="address" name="address" placeholder="Credit Card No"><p>
    <p><input type="text" class="input" id="address" name="address" placeholder="CVV"><p>
    <p><input type="text" class="input" id="address" name="address" placeholder="Date/Year"><p>
<button type="submit">COMFORM</button>
<button type="submit"><a href="../cart/cart.php">BACK</button>
</form>
</body>
</html>
