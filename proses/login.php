<?php
include "../config.php";
include "../library/auth.php";
session_start();

$email = $_POST['email'];
$password = $_POST['password'];

if (authUser($email, $password)) {
    $_SESSION['email'] = $email;
    $_SESSION['password'] = $password;
    header("Location: /weblaporan");
} else {
    header("Location: /weblaporan/login");
}