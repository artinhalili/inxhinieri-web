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

    <div class="form-container">
        <form action="log-reg/loginSystem.php" class="login-form" id="login-form" method="post">
            <label for="login-email"><h4>Email</h4></label>
            <input id="login-email" name="email" type="text" placeholder="Enter your email">
            <label for="login-password"><h4>Password</h4></label>
            <input id="login-password" name="pwd" type="password" placeholder="Password">
            <button name="login-button" class="login-button">Login</button>
            <p class="dont">Don't have an account?<a class="dont1" href="register.php" style="text-decoration: none">Register</a></p>
            <p><a href="log-reg/forgotpassword.php" data-toggle="modal" data-dismiss="modal">Forgot Password ?</a></p>

            <form action="includes/logout.php" method="POST">
            <button type="submit" class="logout-submit" name="logout-submit">Logout</button>
            <p class="dont">Log out here</p>
             </form>
            <p id="login-error"></p>
        
        </form>
    </div>
    <div class="footer">
    <div class="container">
        <div class="row">
            <div class="footer-col-1">
                <h3>Download Our App!</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae, officia.</p>
            </div>
            <div class="footer-col-2">
                <img src="products-images/icon4.jpg" class="icon3">
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
    <script src="login.js"></script>
</body>


</html>