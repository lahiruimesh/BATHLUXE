<?php
session_start();
include '../dbconnection.php';

// Check if user is logged in
if (!isset($_SESSION['userId'])) {
    header("Location: ../login/login.php");
    exit;
}

$userId = $_SESSION['userId'];
$productCode = $_POST['productCode'] ?? '';
$productName = $_POST['productName'] ?? '';
$productPrice = $_POST['productPrice'] ?? '';
$quantity = $conn->real_escape_string($_POST['quantity']);

if ($productCode && $quantity) {
    // Here you can add code to handle the purchase, such as inserting the order into an orders table

    // For now, we will redirect to a confirmation page
    header("Location: ../buy/buy.php?productCode=" . urlencode($productCode) . "&quantity=" . urlencode($quantity) . "&productName=" . urlencode($productName) . "&productPrice=" . urlencode($productPrice));
    exit;
}

$conn->close();
?>
