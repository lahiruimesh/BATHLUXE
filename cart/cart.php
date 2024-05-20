<?php
session_start();
include '../dbconnection.php';

// Check if user is logged in
if (!isset($_SESSION['userId'])) {
    header("Location: ../login/login.php");
    exit;
}

// Get the user ID from the session
$userId = $_SESSION['userId'];

// Fetch the cart items for the user
$sql = "SELECT product.productName, product.productCode, product.productPrice, product.imagePath, product.imageName 
        FROM cart 
        JOIN product ON cart.productCode = product.productCode 
        WHERE cart.userId = ?";
$stmt = $conn->prepare($sql);

if ($stmt === false) {
    die('Prepare failed: ' . htmlspecialchars($conn->error));
}

$stmt->bind_param("i", $userId);

if (!$stmt->execute()) {
    die('Execute failed: ' . htmlspecialchars($stmt->error));
}

$result = $stmt->get_result();

if ($result === false) {
    die('Get result failed: ' . htmlspecialchars($stmt->error));
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Your Cart</title>
    <link rel="stylesheet" href="cart.css">
</head>
<body>
<h1>Your Cart</h1>

<table class="table" border="1">
    <tr>
        <th>Product Image</th>
        <th>Product Name</th>
        <th>Product Code</th>
        <th>Price</th>
        <th>Quantity</th>
    </tr>
    <?php
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>";
        $imagePath = isset($row['imagePath']) ? $row['imagePath'] : '';
        $imageName = isset($row['imageName']) ? $row['imageName'] : '';

        $imagePathSafe = htmlspecialchars($imagePath, ENT_QUOTES, 'UTF-8');
        $imageNameSafe = htmlspecialchars($imageName, ENT_QUOTES, 'UTF-8');

        if (!empty($imagePathSafe)) {
            echo '<img src="' . $imagePathSafe . '" alt="' . $imageNameSafe . '" class="image" style="max-width: 100px; max-height: 100px;">';
        } else {
            echo 'No image available';
        }
        echo "</td>";
        echo "<td>" . htmlspecialchars($row['productName']) . "</td>";
        echo "<td>" . htmlspecialchars($row['productCode']) . "</td>";
        echo "<td>$" . htmlspecialchars($row['productPrice']) . "</td>";
        echo "</tr>";
    }
    ?>
</table>

</body>
</html>

<?php
// Close the database connection
$stmt->close();
$conn->close();
?>
