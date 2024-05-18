<?php
    include 'product1details.dbh.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo htmlspecialchars($product['productName']); ?></title>
    <style>
        .product-detail {
            max-width: 600px;
            margin: auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 10px;
            background-color: #f9f9f9;
            text-align: center;
        }
        .product-detail img {
            width: 200px;
            height: 200px;
            object-fit: cover;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <div class="product-detail">
        <h1><?php echo htmlspecialchars($product['productName']); ?></h1>
        <img src="<?php echo htmlspecialchars($product['imagePath']); ?>" alt="<?php echo htmlspecialchars($product['imageName']); ?>">
        <p>Code: <?php echo htmlspecialchars($product['productCode']); ?></p>
        <p>Price: $<?php echo htmlspecialchars($product['productPrice']); ?></p>
        <p>Details: <?php echo htmlspecialchars($product['description']); ?></p>
    </div>
</body>
</html>