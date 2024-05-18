<?php 
include 'cart.dbh.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<p>Code: <?php echo htmlspecialchars($product['productCode']); ?></p>
        <p>Price: $<?php echo htmlspecialchars($product['productPrice']); ?></p>
        <p>Details: <?php echo htmlspecialchars($product['description']); ?></p>
</body>
</html>