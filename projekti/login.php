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
        <form class="login-form" id="login-form">
            <label for="login-email"><h4>Email</h4></label>
            <input id="login-email" names="email" type="email" placeholder="Enter your email">
            <label for="login-password"><h4>Password</h4></label>
            <input id="login-password" name="pwd" type="password" placeholder="Password">
                <button class="login-button">Login</button>
            <p>Don't have an account?<a href="register.html" style="text-decoration: none">Register</a></p>
            <p id="login-error"></p>
        </form>
    </div>

    <script src="login.js"></script>
</body>
</html>