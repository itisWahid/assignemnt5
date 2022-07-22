<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login page</title>
</head>

<body style="background-color: #011a4b;color:white">
    <?php
    session_start();
    require("core.php");
    if (is_logged_in()) {
        header("location:profile.php");
    }
    ?>

    <h1>Welcome!</h1>
    <h4>Please fill the form for to create account :-) </h4>

    <div style="margin-left:40%">
        <form action="register_controller.php" method="post" enctype="multipart/form-data"
            style="background-color: white; color:black;width:30%;padding:10px;text-align:center;padding-top:30px;border-radius:10px">

            <h3 for="title">Register-Form</h3>
            <label for="name">name:</label><br>
            <input type="text" name="user_name" id="user_name">
            <br><br>
            <label for="age">age:</label><br>
            <input type="number" name="user_age" id="user_age">
            <br><br>

            <label for="email">Email:</label><br>
            <input type="email" name="user_email" id="user_email">
            <br><br>
            <label for="password">Password:</label><br>
            <input type="password" name="user_password" id="user_password">
            <br><br>
            <label for="profile_image">profile image:</label><br><br><br>
            <input type="file" name="user_profile_image" id="user_profile_image">
            <br><br>
            <input type="submit">

            <br><br><br>
            <label for="register">Already have an account?</label><br>
            <a href="login.php">Login here</a>


        </form>
    </div>
</body>

</html>