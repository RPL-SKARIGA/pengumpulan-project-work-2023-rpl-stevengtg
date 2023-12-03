<?php
include("../bootstrap.php");
session_start();
if(isset($_SESSION["email"])) {
    header("Location: /weblaporan");
}
?>

<!doctype html>
<html lang="en" data-bs-theme="auto">

<head>
    <meta charset="utf-8">
    <title>Laporline | Login</title>
</head>

<body class="bg-dark" style="--bs-bg-opacity: .9;">
    <main class="container d-flex justify-content-center align-items-center" style="min-height: 95vh">
        <img src="../public/img/webku.png">
        <div class="text-bg-dark ps-5 pe-5 pt-4 pb-4 rounded-3" style="width: 30%;">
            <h1 class="mb-5">Login</h1>
            <form method="post" action="../proses/login.php">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password">
                </div>
                <button type="submit" class="btn btn-outline-light mt-2">Login</button>
                <div class="mt-3">
                    <p>No have account?&nbsp;<a href="../register">Register</a></p>
                </div>
            </form>
        </div>
    </main>
</body>

</html>