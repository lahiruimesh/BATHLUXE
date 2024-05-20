<!DOCTYPE html>
<html lang="en">
<head>
    <title>SignUp</title>
    <link rel="stylesheet" href="signup.css">
    <script>
        function validateForm() {
            var firstName = document.getElementById("firstName").value;
            var lastName = document.getElementById("lastName").value;
            var email = document.getElementById("email").value;
            var address = document.getElementById("address").value;
            var telephoneNo = document.getElementById("telephoneNo").value;
            var username = document.getElementById("username").value;
            var password = document.getElementById("password").value;
            var repassword = document.getElementById("re-password").value;

            if (password !== repassword) {
                alert("Passwords do not match.");
                return false;
            }

            if (!email.endsWith('@gmail.com')) {
                alert("Email is not correct method");
                return false;
            }

            
            if (!telephoneNo.startsWith(0)) {
                alert("Telephone number is not correct method");
                return false;
            }

            if (telephoneNo.length !== 10 || isNaN(telephoneNo)) {
                alert("Telephone number must be 10 digits.");
                return false;
            }

            return true;
        }
    </script>
</head>
<body background="signupbg.jpg">
        <div class="form-container">
        <a href="../index/index.php"><button class="back">
            <svg height="1.2em" class="arrow" viewBox="0 0 512 512"><path d="M278.6 105.4c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-192 192c-12.5 12.5-12.5 32.8 0 45.3l192 192c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L146.6 256l132-132.6z"></path></svg>
            <p  class="text">Back to Home</p>
        </button></a>
        <h3>Create Your Account</h3>

        <form class="form" action="signup.dbh.php" method="post" onsubmit="return validateForm()">
            <div class="two-fields">
                <input type="text" class="input" id="firstName" name="firstName" placeholder="First name" >
                <input type="text" class="input" id="lastName" name ="lastName" placeholder="Last name">
                </div>
                <div class="two-fields">
                <input type="tel" class="input" id="email" name="email" placeholder="Email">
                <input type="text" class="input" id="address" name="address" placeholder="Address">
                </div>
                <div class="two-fields">
                <input type="tel" class="input" id="telephoneNo" name="telephoneNo" placeholder="Telephone No">
                <input type="text" class="input" id="username" name="username" placeholder="Username">
                </div>
                <div class="two-fields">
                <input type="password" class="input" id="password" name="password" placeholder="Password">
                <input type="password" class="input" id="re-password" name="re-password" placeholder="Re-Enter Password">
                <text id="err"></text>
            </div>

            <button class="signup-btn">SIGNUP</button>
        </form>

        <div class="separator">
            <div></div>
            <span>OR</span>
            <div></div>
        </div>

        <div class="google-signup">
            <img src="google.jpeg">
              <span ><a href="#">Sign In with Google</a></span>
        </div>
        

        <p class="sign-up-label">
            Have an account?<a href="../login/login.php">Login</a>
          </p>
    
    </div>
    
</body>
</html>