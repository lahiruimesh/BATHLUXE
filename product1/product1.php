<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Product List</title>
    <style>
        .product-list {
            display: grid;
            grid-template-columns: repeat(4, 1fr); /* Four products per line */
            gap: 20px; /* Space between products */
            justify-items: center;
            padding: 20px;
            margin: auto;
            max-width: 100%;
            background-color: #f9f9f9;
        }
        .product-item {
            border: 1px solid #ccc;
            border-radius: 10px;
            padding: 10px;
            width: 250px;
            text-align: center;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .product-item img {
            width: 150px;
            height: 150px;
            object-fit: cover;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <h1 align="center">Product List</h1>
    <div class="product-list">
        <?php
        // Include the file to fetch product data
        $product = include 'product1.dbh.php';
        
        // Display each product
        foreach ($product as $product) {
            echo "<a href='../product1details/priduct1details.php?productCode=" . htmlspecialchars($product['productCode']) . "'>";
            echo "<div class='product-item'>";
            echo "<img src='" . htmlspecialchars($product['imagePath']) . "' alt='" . htmlspecialchars($product['imageName']) . "'>";
            echo "<p>" . htmlspecialchars($product['productCode']) . "</p>";
            echo "<p>" . htmlspecialchars($product['productName']) . "</p>";
            echo "</div>";
            echo "</a>";
        }
        ?>
    </div>
</body>
</html>
