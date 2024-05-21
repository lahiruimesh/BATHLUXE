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
<header class="header-main">
    <nav>
        <a  href="../Home/nav.html" class="logo">
            <img src="logo.png" alt="websiteLogo" width="60px" height="50px">
        </a>
        <ul>
            <li><a href="../Home/nav.html">HOME</a></li>
            <li><a href="#">PRODUCTS</a>
                <ul>
                    <li><a href="../Product collection/Tile/Tile collecrion.html">Tile collection</a></li>
                    <li><a href="../Product collection/Bathware/Bathware.html">Bathware collection</a></li>
                    <li><a href="../Product collection/Accessories/Accessories.html">Accesseries collection</a></li>
                </ul>
            </li>
            <li><a href="../Home/nav.html">ABOUT US</a></li>
            
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
          <li style="margin-top: 12px;"><a href="cart/cart.php"><img class="cart" src="cart2.png" width="30px" height="30px"></a></li>
          <li style="margin-top: 12px;"><a id="logout" href="../signup/signup.php">LOG OUT</a></li>  
      </ul>
  </div>  
</header>
<!--  header end  -->

<!--  Cart Start  -->



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
<script>
    document.getElementById("logout").addEventListener("click" function(){
        window.location.href = "../index/index.php"
    });
</script>
</body>
</html>

<?php
// Close the database connection
$stmt->close();
$conn->close();
?>
