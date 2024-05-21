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
    <link rel="stylesheet" href="buy.css">
</head>
<body>

<header class="header-main">
        <nav>
            <a  href="../home/home.php" class="logo">
                <img src="logo.png" alt="websiteLogo" width="60px" height="50px">
            </a>
            <ul>
                <li><a href="../home/home.php">HOME</a></li>
                <li><a href="#">PRODUCTS</a>
                    <ul>
                        <li><a href="../Product2/product2.php">Tile collection</a></li>
                        <li><a href="../Product1/product1.php">Bathware collection</a></li>
                        <li><a href="../Product3/product3.php">Accesseries collection</a></li>
                    </ul>
                </li>
                <li><a href="../home/home.php">ABOUT US</a></li>
                
            </ul>
        </nav>
    
        <div class="topnav-right">
          <ul class="menu-items">
              <li>
                  <div class="container">
                      <input type="text" name="text" class="input" required="" >
                      <div class="icon">
                          <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512">
                              <title>Search</title>
                              <path d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"></path>
                              <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M338.29 338.29L448 448"></path>
                          </svg>
                      </div>
                  </div>
              </li>
              <li style="margin-top: 12px;"><a href="../cart/cart.php"><img class="cart" src="cart2.png" width="30px" height="30px"></a></li>
              <li style="margin-top: 12px;"><a id="logout" href="../login/login.php">LOG OUT</a></li>  
          </ul>
      </div>  
    </header>
    <!--  header end  -->



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
