<style>
@import url("https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap");
</style>

<?php session_start();
if (!isset($_SESSION['email'])) {
    header('Location: /weblaporan/logout');
}
include '../../library/koneksi.php';
$data_laporan = mysqli_fetch_all(mysqli_query($con, "SELECT * FROM laporan WHERE status='belum acc'"));
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
            <div class="col py-3">
                <h1>Laporan</h1>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nama Pelapor</th>
                            <th scope="col">Judul Laporan</th>
                            <th scope="col">Jenis Laporan</th>
                            <th scope="col">Tanggal Laporan</th>
                            <th scope="col">Gambar Laporan</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($data_laporan as $_l) { ?>
                        <tr>
                            <th scope="row"><?= $i++; ?></th>
                            <td><?= $_l[7];?></td>
                            <td><?= $_l[1];?></td>
                            <td><?= $_l[2]; ?></td>
                            <td><?= $_l[6];?></td>
                            <td><img style="width: 100px;" src="../../uploads/<?= $_l[8]; ?>" alt=""></td>
                            <td><a href="detail.php?id=<?=$_l[0]?>">Details</a>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>