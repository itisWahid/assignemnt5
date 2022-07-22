<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login page</title>
</head>

<?php
session_start();
require("core.php");
if (is_logged_in()) {
    header("location:profile.php");
}
?>

<body style="background-color: #011a4b;color:white">
    <h1>Welcome!</h1>
    <div style="margin-left:40%">
        <form action="login_controller.php" method="post"
            style="background-color: white; color:black;width:20%;padding:20px;text-align:center;padding-top:30px;border-radius:10px">

            <h3 for="title">Login-Form</h3>
            <label for="email">Email:</label>
            <input type="email" name="user_email" id="user_email">
            <br><br>
            <label for="password">Password:</label>
            <input type="password" name="user_password" id="user_password">
            <br><br>
            <input type="submit">
            <br><br><br>
            <label for="register">Don't have an account?</label>
            <a href="register.php">Create account</a>
        </form>
    </div>
</body>

</html>