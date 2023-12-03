<?php

global $con;

function getAllAkun()
{
    include "../config.php";
    include(DEFAULT_ROUTE + "/library/koneksi.php");
    $data = [];
    $query = "SELECT * FROM akun";
    $res = mysqli_query($con, $query);
    $i = 0;
    if (mysqli_num_rows($res) > 0) {
        while ($row = mysqli_fetch_assoc($res)) {
            $data[$i]['id'] = $row['id'];
            $data[$i]['email'] = $row['email'];
            $data[$i]['password'] = $row['password'];
            mysqli_close($con);
            return $data;
        }
    } else {
        mysqli_close($con);
        return null;
    }
}

function getAkun($type, $args)
{
    include "../library/koneksi.php";
    $data = [];
    $query = "SELECT * FROM akun WHERE $type='$args' AND isAdmin=false";
    $res = mysqli_query($con, $query);
    $i = 0;
    if (mysqli_num_rows($res) > 0) {
        while ($row = mysqli_fetch_assoc($res)) {
            $data[$i]['id'] = $row['id'];
            $data[$i]['email'] = $row['email'];
            $data[$i]['password'] = $row['password'];
            mysqli_close($con);
            return $data;
        }
    } else {
        mysqli_close($con);
        return null;
    }
}

function getAkunAdmin($type, $args)
{
    include "../../library/koneksi.php";
    $data = [];
    $query = "SELECT * FROM akun WHERE $type='$args' AND isAdmin=true";
    $res = mysqli_query($con, $query);
    $i = 0;
    if (mysqli_num_rows($res) > 0) {
        while ($row = mysqli_fetch_assoc($res)) {
            $data[$i]['id'] = $row['id'];
            $data[$i]['email'] = $row['email'];
            $data[$i]['password'] = $row['password'];
            mysqli_close($con);
            return $data;
        }
    } else {
        mysqli_close($con);
        return null;
    }
}


function createAkun($email, $password, $isadmin)
{
    include "../library/koneksi.php";
    $query = "INSERT INTO akun(`id`, `password`, `email`, `isAdmin`) VALUES (0, MD5('$password'), '$email', $isadmin)";
    return mysqli_query($con, $query);
}

function deleteAkun($id)
{
    include "../library/koneksi.php";
    $query = "DELETE FROM `akun` WHERE id=$id";
    return mysqli_query($con, $query);
}

function updateAkun($id, $password, $email)
{
    include "../library/koneksi.php";
    $query = "UPDATE `akun` SET `password`='$password', `email`='$email' WHERE id=$id)";
    return mysqli_query($con, $query);
}