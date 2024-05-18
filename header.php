<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BATHLUXE</title>
    <style>
        @media (min-width: 768px) {}
.header-main {
    width: 100%;
    height: 60px;
    background-color:  #967951;
    display: flex;
    justify-content: space-between;
    align-items: center;
    position: fixed;
    top: 0;
    z-index: 100;
    
}
.menu-items {
    margin: 0 15px 0 15px;
    list-style: none;
    display: flex;
}

.menu-items li a {
    color: whitesmoke;
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
    
}


/*----- DROPDOWN LIST STYLING START ------*/

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
    background-color:  #967951;
    top: 80%;
    
}

.menu-items li:hover .sub-menu {
    display: block;
}

/*------- DROPDOWN LIST STYLING END ------*/

/*--------SEARCH STYLING START -------*/

.container {
    position: relative;
    --size-button: 25PX;
    color: white;
    margin-right: 20px;
    
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
    background-color: #967951;
    opacity: 40%;
    border-radius: 15px;
    cursor: pointer;
  }
  
  .input:focus,
  .input:not(:invalid) {
    width: 130px;
    cursor: text;
    background-color: rgb(241, 199, 144);
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
  }
   
  .container .icon svg {
    width: 100%;
    height: 100%;
  }




    </style>
</head>
<body>
    
<header class="header-main">
        
        <div class="topnav-left">
            <ul class="menu-items">
                <li><a href="#"><img src="logo.png" width="20px" height="20px"></a></li>
                <li><a href="nav.html">Home</a></li>
                <li><a href="#">Products</a>
                    <ul class="sub-menu">
                        <li><a href="../Product collection/Tile/Tile collecrion.html">Tile collection</a></li>
                        <li><a href="../Product collection/Bathware/Bathware.html">Bathware collection</a></li>
                        <li><a href="../Product collection/Accessories/Accessories.html">Accesseries collection</a></li>
                    </ul>
                </li>  
                <li><a href="">About Us</a></li> 
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
    </body>
    </html>
