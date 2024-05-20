<!DOCTYPE html>
<html lang="en">
<head>
    <title>LogIn</title>
    <link rel="stylesheet" href="login.css">
</head>
<body background="bg.jpeg">
    
    <div class="form-container">
        <a href="../index/index.php"><button class="back">
            <svg height="1.2em" class="arrow" viewBox="0 0 512 512"><path d="M278.6 105.4c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-192 192c-12.5 12.5-12.5 32.8 0 45.3l192 192c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L146.6 256l132-132.6z"></path></svg>
            <p  class="text">Back to Home</p>
        </button></a>
        <h3>Welcome Back !</h3>

        <form class="form" method="post" action="login.dbh.php">
            <input type="text" class="input" name="username" placeholder="Username">
            <input type="password" class="input" name="password" placeholder="Password">
            <a class="forgot-password" href="#">Forgot Password?</a>

            <button class="logIn-btn">Log In</button>
        </form>

        <div class="separator">
            <div></div>
            <span>OR</span>
            <div></div>
        </div>

        <div class="google-login">
            <img src="google.jpeg">
              <span ><a href="#">Log In with Google</a></span>
        </div>
        

        <p class="sign-up-label">
            Don't have an account?<a href="../signup/signup.php">Sign up</a>
          </p>
    
    </div>
</body>
</html>