<?php
include("../library/koneksi.php");

$np = $_POST['nama_pelapor'];
$j = $_POST['judul'];
$jl = $_POST['jenis_laporan'];
$l = $_POST['lokasi'];
$i = $_POST['instansi'];
$t = $_POST['tgl'];
$is = $_POST['isi'];

// Handling file upload
$targetDir = "../uploads/";
$fileName = $_FILES['gambar_laporan']['name'];
$targetFilePath = $targetDir . $fileName;

// Check if the file has been successfully uploaded
if (move_uploaded_file($_FILES["gambar_laporan"]["tmp_name"], $targetFilePath)) {
    // Prepare the SQL statement
    $stmt = mysqli_prepare($con, "INSERT INTO laporan (id_laporan, judul_laporan, jenis_laporan, isi_laporan, instansi_tujuan, lokasi_laporan, tanggal_laporan, nama_pelapor, gambar_laporan, status) VALUES (0, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $acc = "belum acc";
    mysqli_stmt_bind_param($stmt, 'sssssssss', $j, $jl, $is, $i, $l, $t, $np, $targetFilePath, $acc);

    // Execute the prepared statement 
    if (mysqli_stmt_execute($stmt)) {
        echo "<script>if(!alert('Laporan berhasil di buat!')) {
                    window.location.href = '/weblaporan/'
                }</script>";
    } else {
        echo "Error: " . mysqli_error($con);
    }

    // Close the prepared statement
    mysqli_stmt_close($stmt);
} else {
    echo "Sorry, there was an error uploading your file.";
}