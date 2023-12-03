<?php
include '../../library/auth.php';
session_start();

$email = $_POST['email'];
$password = $_POST['password'];

if (authAdmin($email, $password)) {
    $_SESSION['email'] = $email;
    $_SESSION['password'] = $password;
    header("Location: /weblaporan/admin/dashboard");
} else {
    header("Location: /weblaporan/admin");
}