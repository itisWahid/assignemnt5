<?php
session_start();


$user_email = $_POST['user_email'];
$user_age = $_POST['user_age'];
$user_name = $_POST['user_name'];
$user_profile_image = $_FILES['user_profile_image'];
var_dump($user_profile_image);
$img_name = $user_profile_image['name'];
$tmp_name = $user_profile_image['tmp_name'];

echo $user_profile_image['name'];

move_uploaded_file($tmp_name, 'profiles/' . $img_name);
$user = [
    "name" => $user_name,
    "email" => $user_email,
    "age" => $user_age,
    "profile_image" => $img_name
];
$_SESSION['auth_user'] = $user;

$_SESSION['is_authenticated'] = true;
header('location:profile.php');