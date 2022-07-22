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
    if (!is_logged_in()) {
        header("location:login.php");
    }
    $user = $_SESSION['auth_user'];
    echo "<h1>Welcome! " . $user['name'] . "</h1>";
    echo "<div style='margin-left:40%'>";
    echo    "<div style='width:20%;padding:20px;text-align:center;padding-top:30px;border-radius:10px'>";
    echo "<img src='profiles/" . $user['profile_image'] . "' height='150px'alt='profile'>";
    echo "<h3>" . $user['name'] . "</h3><br>";
    echo "<strong>" . $user['age'] . "</strong><br>";
    echo "<p>" . $user['email'] . "</p><br>";

    echo "</div>";
    echo "<a href='delete_profile_image.php?img_name=" . $user['profile_image'] . "' . style='color: white;'>";
    echo "<h3>Delete profile image</h3></a>";


    echo "</div>";


    ?>
    <a href="logout.php" style="color: white;">
        <h3>Log out</h3>
    </a>

</body>

</html>