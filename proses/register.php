<?php
include "../config.php";
include "../crud/akun.php";
session_start();

$email = $_POST['email'];
$password = $_POST['password'];

createAkun($email, $password, 0);

header("Location: login.php");