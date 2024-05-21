<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BATHLUXE</title>
    <style>
        .header-main {
    width: 100%;
    padding: 0 30px;
    height: 60px;
    background-color: #fffdd2;
    display: flex;
    justify-content: space-between;
    align-items: center; /* Ensure all items are centered vertically */
    position: fixed;
    top: 0;
    z-index: 100;
  }
  
  .header-main nav {
    display: flex;
  }
  
  .header-main .logo {
    height: 50px;
    width: fit-content;
    align-self: center;
    cursor: pointer;
  }
  
  .header-main ul {
    height: 100%;
    padding-left: 40px;
    list-style: none;
    display: flex;
    align-self: center;
  }
  
  .header-main ul li {
    position: relative;
    background-color: #fffdd2;
  }
  
  .header-main ul li a {
    display: block;
    padding: 0 15px;
    height: 100%;
    line-height: 60px;
    font-size: 1rem;
    color: #000000;
    text-transform: uppercase;
    text-decoration: none;
  }
  
  /* DROPDOWN STYLING START */
  
  .header-main ul li ul {
    visibility: hidden;
    opacity: 0;
    display: none;
    position: absolute;
    left: -40px;
    transition: all ease-in-out 100ms;
  }
  
  .header-main ul li ul li a {
    white-space: nowrap;
  }
  
  .header-main ul li ul li {
    margin: 5px;
    width: 250px;
    height: 40px;
    text-align: left;
    padding: 0px 25px 15px 4px;
  }
  
  ul li:hover > ul {
    visibility: visible;
    opacity: 1;
    display: block;
  }
  
  /* DROPDOWN STYLING END */
  
  .header-main .left-menu {}
  
  .header-main .search {
    align-self: center;
    display: flex;
    margin-right: 50px;
  }
  
  .header-main form {
    height: 35px;
    padding-right: 0px;
    display: flex;
    border: 1px #E5AF52;
    border-radius: 30px;
    width: fit-content;
    align-self: center;
  }
  
  .header-main form input {
    height: 32px;
    width: 170px;
    padding: 0 10px;
    border-radius: 0 30px 30px 0;
    font-size: 1rem;
    color: #E5AF52;
    border-color: #E5AF52;
  }
  
  .header-main form input:focus {
    border: 1px solid #E5AF52;
  }
  
  .header-main form button {
    border-radius: 30px 0 0 30px;
  }
  
  .header-main form button img {
    height: 24px;
    padding-top: 15%;
    cursor: pointer;
  }
  
  .header-main .account {
    height: 60px;
    width: fit-content;
    display: flex;
    align-items: center;
  }
  
  .cart {
    margin-top: 15px;
    opacity: 70%;
  }
  
  @media (min-width: 768px) {
    .header-main {
      width: 100%;
      height: 60px;
      background-color: #fffdd2;
      display: flex;
      justify-content: space-between;
      align-items: center;
      position: fixed;
      top: 0;
      z-index: 100;
    }
  
    .menu-items {
      margin: 0 15px;
      list-style: none;
      display: flex;
    }
  
    .menu-items li a {
      color: rgb(8, 8, 8);
      font-weight: 500;
      text-align: center;
      padding: 14px 16px;
      text-decoration: none;
      font-size: 16px;
      text-transform: uppercase;
      white-space: nowrap;
    }
  
    .menu-items li {
      margin: 0;
      padding: 0;
    }
  
    .topnav-left {
      float: left;
    }
  
    .topnav-right {
      float: right;
      margin-right: 25px;
    }
  }
  
  /* DROPDOWN LIST STYLING START */
  .sub-menu {
    display: none;
    position: absolute;
    z-index: 1;
    left: 150px;
    top: 85%;
  }
  
  .sub-menu li {
    text-align: left;
    padding: 13px 16px 5px 5px;
    color: #1b1919;
    margin: 5px;
    width: 250px;
    height: 30px;
    list-style: none;
    background-color: #967951;
    top: 80%;
  }
  
  .menu-items li:hover .sub-menu {
    display: block;
  }
  
  /* DROPDOWN LIST STYLING END */
  
  /* SEARCH STYLING START */
  .container {
    position: relative;
    --size-button: 25px;
    color: black;
    margin-right: 20px;
    margin-top: 20px;
  }
  
  .input {
    padding: 2px 3px;
    height: 35px;
    font-size: 15px;
    border: none;
    color: rgb(36, 34, 34);
    outline: none;
    width: 35px;
    transition: all ease 0.3s;
    background-color: #fffdd2;
    opacity: 70%;
    border-radius: 15px;
    cursor: pointer;
  }
  
  .input:focus,
  .input:not(:invalid) {
    width: 130px;
    cursor: text;
    background-color: #f3d584;
    padding: 2px 40px;
  }
  
  .input:focus + .icon,
  .input:not(:invalid) + .icon {
    pointer-events: all;
    cursor: pointer;
  }
  
  .container .icon {
    position: absolute;
    width: var(--size-button);
    height: var(--size-button);
    top: 0;
    left: 0;
    padding: 8px;
    pointer-events: none;
    background-color: #fffdd2;
  }
  
  .container .icon svg {
    width: 100%;
    height: 100%;
  }
  
  .cart {
    margin: 15px 5px -5px 5px;
    opacity: 90%;
  }
  
  .table {
    margin: auto;
    width: 90%;
  }
  


    </style>
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
          <li style="margin-top: 12px;"><a href="../signup/signup.php">LOG OUT</a></li>  
      </ul>
  </div>  
    </header>
    </body>
    </html>
