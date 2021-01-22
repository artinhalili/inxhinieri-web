<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
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
            <p>Don't have an account?<a href="register.html" style="text-decoration: none">Register</a></p>

            <form action="includes/logout.inc.php" method="POST">
            <button type="submit" name="logout-submit">Logout</button>
             </form>
            <p id="login-error"></p>
           
        </form>
    </div>

    <script src="login.js"></script>
</body>
</html>