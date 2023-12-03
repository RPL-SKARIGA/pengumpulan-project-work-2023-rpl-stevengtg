<style>
@import url("https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap");
</style>

<?php session_start();
if (!isset($_SESSION['email'])) {
    header('Location: /weblaporan/logout');
}
include '../../library/koneksi.php';
$id = $_GET['id'];
$detail = mysqli_fetch_array(mysqli_query($con, "SELECT * FROM laporan WHERE id_laporan = $id"));
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan</title>
</head>

<body>
    <div class="container-fluid">
        <div class="row flex-nowrap">
            <?php
             include "../sidebar.php";
$i =1;
?>
            <div class="row">
                <div class="col-xl-4 col-md-6 mb-4">

                    <div class="col py-3">
                        <div class="card" style="width: 18rem;">
                            <div class="card-body">
                                <h5 class="card-title text-white">
                                    <?= $detail['judul_laporan']; ?>
                                </h5>
                                <h6 class="card-subtitle mb-2 text-muted">
                                    Jenis Laporan :
                                    <?= $detail['jenis_laporan']; ?>
                                </h6>
                                <h6 class="card-subtitle mb-2 text-muted">
                                    Nama Pelapor :
                                    <?= $detail['nama_pelapor']; ?>
                                </h6>
                                <p class="card-text">
                                    Instansi Tujuan :
                                    <?= $detail['instansi_tujuan']; ?>
                                </p>
                                <p class="card-text">
                                    Isi Laporan :
                                    <?= $detail['isi_laporan']; ?>
                                </p>
                                <p class="card-text">
                                    Lokasi Laporan :
                                    <?= $detail['lokasi_laporan']; ?>
                                </p>
                                <p class="card-text">
                                    Tanggal Laporan :
                                    <?= $detail['tanggal_laporan']; ?>
                                </p>
                                <a href="tanggapan.php?id=<?=$id;?>" class="card-link">Tanggapan</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>