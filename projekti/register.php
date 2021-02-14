<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="products/product.css">
    <title>Document</title>
</head>
<body>
<div class="form-container" >
    <form action="log-reg/registerSystem.php" class="register-form"id="form" method="post">
        <label for="name"><h4>UserName</h4></label>
        <input type="text" id="name" name="name" placeholder="User Name" required>
        <label for="email"><h4>Email</h4></label>
        <input  id="email" type="email" name="email" placeholder="Enter your email" required>
        <label for="register-password"><h4>Password</h4></label>
        <input id="register-password" name="register-password" type="password" placeholder="Password" required>
        <label for="register-confirm"><h4>Confirm Password</h4></label>
        <input id="register-confirm" name="pwd-repeat" type="password" placeholder="Confirm password" required>
        <button class="login-button" name="signup-submit" type="submit">Register</button>
        <p>Already registered?<a href="login.php">Log in</a></p>
        <p id="register-error"></p>
    </form>

</div>

<script  src="register.js"></script>
</body>
<div class="footer">
    <div class="container">
        <div class="row">
            <div class="footer-col-1">
                <h3>Download Our App!</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae, officia.</p>
            </div>
            <div class="footer-col-2">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae, officia.</p>
            </div>
            <div class="footer-col-3">
                <h3>Useful Links!</h3>
                <ul>
                    <li>Coupons</li>
                    <li>Blog Post</li>
                    <li>Return Policy</li>
                    <li>Join affiliate</li>
                </ul>
            </div>
            <div class="footer-col-4">
                <h3>Follow Us!</h3>
                <ul>
                    <li>Fcebook</li>
                    <li>Twitter</li>
                    <li>Instagram</li>
                    <li>Youtube</li>
                </ul>
            </div>
        </div>
        <hr>
        <p class="copyright">Copyright!</p>
    </div>
</div>

</html>