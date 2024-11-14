<?php
session_start();

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = filter_input(INPUT_POST, "username" , FILTER_SANITIZE_STRING);
    $password =  filter_input(INPUT_POST, "password", FILTER_SANITIZE_STRING);

$_SESSION["username"] = $username;
setcookie("username", $username, time() + 60*60*24*30);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="login.css">
    <script defer src="login.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="shop.php">Shop</a></li>
            <li><a href="#contact">Contact</a></li>
            <li><a href="login.php">Sign up</a></li>
        </ul>
    </nav>
    <div class="login-container">
        <h2>Sign up</h2>
        <form id="loginForm" action="shop.php" method="post">
            <label for="username">Username</label>
            <input type="text" id="username" name="username" required>
            <label for="password">Password</label>
            <div class="password-container">
                <input type="password" id="password" name="password" required>
                <span class="toggle-password" onclick="togglePassword()"><i class="fas fa-eye"></i></span>
            </div>
            <input type="submit" value="Login">
        </form>
    </div>
</body>
</html>