<?php
include("../library/koneksi.php");

$id = $_POST['id'];
$tgl = $_POST['tanggal'];
$tanggapan = $_POST['tanggapan'];

$stmt = mysqli_query($con, "INSERT INTO tanggapan VALUES(0, $id, '$tgl', '$tanggapan')");
$stmt2 = mysqli_query($con,"UPDATE `laporan` SET `status`='acc' WHERE `id_laporan`=$id");
// Execute the prepared statement

if ($stmt) {
    if ($stmt2) {
        echo "<script>if(!alert('Tanggapan berhasil dikirim!')) {
                    window.location.href = '/weblaporan/admin/dashboard/laporan.php'
                }</script>";
    } else {
        echo "Error: " . mysqli_error($con);
    }
} else {
    echo "Error: " . mysqli_error($con);
}
mysqli_close($stmt);