<?php
    include 'product1details.dbh.php';
    include '../header.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo htmlspecialchars($product['productName']); ?></title>
    <link rel="stylesheet" href="product1details.css">
</head>
<body>
<h1 class="item-name"><?php echo htmlspecialchars($product['productName']); ?></h1>
    <div class="product-detail">
        
        <img src="<?php echo htmlspecialchars($product['imagePath']); ?>" alt="<?php echo htmlspecialchars($product['imageName']); ?>" class="image">
        <div class="sub-details">
        
        <p>Code: <?php echo htmlspecialchars($product['productCode']); ?></p>
        <p>Price: $<?php echo htmlspecialchars($product['productPrice']); ?></p>
        <p>Details: <?php echo htmlspecialchars($product['description']); ?></p>
                    <p style="display: flex;"><h3 style="color: #706c69;">Quantity :</h3>
                    <button class="btn" onclick="decreaseQuantity()">-</button>
                    <input type="text" class="quantity-input" value="1" id="quantity">
                    <button class="btn" onclick="increaseQuantity()">+</button></p>
                        <button class="btn1"><?php  echo "<a href='../cart/cart.php?productCode=" . htmlspecialchars($product['productCode']) . "'>";?>ADD TO CART</button>
                        <button class="btn2">BUY NOW</button>
                  
    </div></div>

    <script>
        function increaseQuantity() {
            var quantityInput = document.getElementById('quantity');
            var currentValue = parseInt(quantityInput.value);
            quantityInput.value = currentValue + 1;
        }

        function decreaseQuantity() {
            var quantityInput = document.getElementById('quantity');
            var currentValue = parseInt(quantityInput.value);
            if (currentValue > 1) {
                quantityInput.value = currentValue - 1;
            }
        }
    </script>


</body>
</html>

<?php
    include '../footer.php';
?>