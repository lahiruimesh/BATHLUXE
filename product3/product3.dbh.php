<?php
include '../dbconnection.php';

// SQL query to fetch productCode, imageName, and imagePath
$sql = "SELECT productCode, imageName, imagePath, productName,productType FROM product WHERE productType = 'AAC'";
$result = $conn->query($sql);

// Create an array to hold the product data
$product = [];

if ($result->num_rows > 0) {
    // Fetch data of each row
    while ($row = $result->fetch_assoc()) {
        $product[] = $row;
    }
} else {
    echo "0 results";
}

// Close connection
$conn->close();

// Return product data
return $product;
?>
