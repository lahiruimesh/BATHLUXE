<?php
session_start();
include '../dbconnection.php';

// Check if user is logged in
if (!isset($_SESSION['userId'])) {
    echo "You must be logged in to add to cart.";
    header("Location:../login/login.php");
    exit;
}

// Get the user ID from the session
$userId = $_SESSION['userId'];

// Get the product code from the POST request
$productCode = isset($_POST['productCode']) ? $_POST['productCode'] : '';

if ($productCode) {
    // Insert the product into the cart table
    $sql = "INSERT INTO cart (userId, productCode) VALUES (?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("is", $userId, $productCode);
    
    if ($stmt->execute()) {
        // Redirect to cart.php after successful insertion
        header("Location: ../cart/cart.php");
        exit;
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the statement
    $stmt->close();
}

// Close the database connection
$conn->close();
?>
