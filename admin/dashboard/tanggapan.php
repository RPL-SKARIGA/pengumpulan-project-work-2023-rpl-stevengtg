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
    <title>Tanggapan</title>
</head>

<body>
    <div class="container-fluid">
        <div class="row flex-nowrap">
            <?php
             include "../sidebar.php";?>
            <div class="col py-3">
                <div class="col d-flex justify-content-center">
                    <div class="card " style="width: 35rem;">
                        <div class="card-body">
                            <h3 class="card-title">Tanggapan</h3>
                            <form class="" method="post" action="../../proses/tanggapan.php">
                                <input type="hidden" value="<?= $detail['id_laporan'];?>" class="form-control"
                                    name="id" />
                                <div class="form-outline mb-4">
                                    <label class="form-label">Judul Laporan</label>
                                    <input type="text" class="form-control" name="judul"
                                        value="<?= $detail['judul_laporan'];?>" readonly />
                                </div>
                                <div class="form-outline mb-4">
                                    <label class="form-label" for="tgl">Tanggal</label>
                                    <input type="datetime-local" id="tgl" class="form-control" name="tanggal" />
                                </div>
                                <div class="form-outline mb-4">
                                    <label class="form-label" for="isi">Isi Tanggapan</label>
                                    <input type="text" id="isi" class="form-control" name="tanggapan" />
                                </div>
                                <button type="submit" class="btn btn-primary btn-block">Kirim Tanggapan</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>