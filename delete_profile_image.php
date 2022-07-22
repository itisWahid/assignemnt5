<?php


session_start();
$img_name = $_GET['img_name'];
$path = 'profiles/' . $img_name;

if (file_exists($path)) {
    unlink($path);
} else {
    echo "Invalid File name";
}
header("location:profile.php");