<?php
session_start();


$user_email = $_POST['user_email'];
$user_password = $_POST['user_password'];

$user = [
    "name" => "Wahid",
    "email" => $user_email,
    "age" => 25,
    "profile_image" => "wahid.jpg"
];
$_SESSION['auth_user'] = $user;

$_SESSION['is_authenticated'] = true;
header('location:profile.php');