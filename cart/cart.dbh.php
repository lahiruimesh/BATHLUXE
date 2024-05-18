<?php
include '../dbconnection.php';

// Get the product code from the URL
$productCode = isset($_GET['productCode']) ? $_GET['productCode'] : '';

// Fetch the product details from the database
$sql = "SELECT * FROM product WHERE productCode = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $productCode);
$stmt->execute();
$result = $stmt->get_result();

// Check if the product exists
if ($result->num_rows > 0) {
    $product = $result->fetch_assoc();
} else {
    echo "Product not found.";
    exit;
}

// Close the database connection
$stmt->close();
$conn->close();
?>