<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Product List</title>
    <link rel="stylesheet" href="product1.css">
</head>
<body>
/*HEADER PART START */

<header class="header-main">
        
        <div class="topnav-left">
            <ul class="menu-items">
              <li><a href="#"><img src="logo.png" width="20px" height="20px"></a></li>
                <li><a href="../home/home.php">Home</a></li>
                <li><a href="#">Products</a>
                    <ul class="sub-menu">
                        <li><a href="../product2/product2.php">Tile collection</a></li>
                        <li><a href="../product1/product1.php">Bathware collection</a></li>
                        <li><a href="../product3/product3.php">Accesseries collection</a></li>
                    </ul>
                </li>  
                <li><a href="../home/home.php">About Us</a></li> 
            </ul>       
        </div>  
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
                <li style="margin-top: 12px;"><a href="#search">Login</a></li>
                <li style="margin-top: 12px;"><a href="#about">Signup</a></li>  
            </ul>
        </div>        
    </header>





/*BODY PART START */
    <h1 class="product-tittle">BATHWARE COLLECTION</h1>
    <div class="product-list">
        <?php
        // Include the file to fetch product data
        $product = include 'product1.dbh.php';
        
        // Display each product
        /*foreach ($product as $product) {
            echo "<a href='../product1details/priduct1details.php?productCode=" . htmlspecialchars($product['productCode']) . "'>";
            echo "<div class='product-item'>";
            echo "<img src='" . htmlspecialchars($product['imagePath']) . "' alt='" . htmlspecialchars($product['imageName']) . "'>";
            echo "<p>" . htmlspecialchars($product['productCode']) . "</p>";
            echo "<p>" . htmlspecialchars($product['productName']) . "</p>";
            echo "</div>";
            echo "</a>";
        }*/
        // Display each product
        foreach ($product as $product) {
            echo "<a href='../product1details/priduct1details.php?productCode=" . htmlspecialchars($product['productCode']) . "'>";
            echo"<div class='tile_sec1'>";
                echo"<div class='tiles'>";
                    echo"<div class='card'>";
                        echo"<div class='grid'>";
                        echo "<img src='" . htmlspecialchars($product['imagePath']) . "' alt='" . htmlspecialchars($product['imageName']) . "'>";
                        echo"</div>";
                    echo"<div class='details'>";
                    echo"<label>" . htmlspecialchars($product['productName']) . "</label>";
                    
                    echo "<p><br>" . htmlspecialchars($product['productCode']) . "</p>";
                    echo"</div>";
                    echo"</div>";
                    echo"</div>";
                    echo"</div>";
        
        echo "</a>";
        }
        ?>
    </div>
</body>
</html>
