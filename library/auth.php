<?php
function authUser($email, $password)
{
    include "../crud/akun.php";
    $hashedPass = md5($password);
    $data = getAkun('email', $email);
    if ($data != null) {
        if ($hashedPass == $data[0]["password"]) {
            return true;
        } else {
            return false;
        }
    } else {
        return false;
    }
}

function authAdmin($email, $password)
{
    include "../../crud/akun.php";
    $hashedPass = md5($password);
    $data = getAkunAdmin('email', $email);
    if ($data != null) {
        if ($hashedPass == $data[0]["password"]) {
            return true;
        } else {
            return false;
        }
    } else {
        return false;
    }
}