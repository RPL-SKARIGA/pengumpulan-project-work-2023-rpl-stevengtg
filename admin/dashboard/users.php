<style>
@import url("https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap");
</style>

<?php session_start();
if (!isset($_SESSION['email'])) {
    header('Location: /weblaporan/logout');
}
include '../../library/koneksi.php';
$data_user = mysqli_fetch_all(mysqli_query($con, "SELECT * FROM akun"));
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>
</head>

<body>
    <div class="container-fluid">
        <div class="row flex-nowrap">
            <?php include "../sidebar.php";
$i =1; ?>
            <div class="col py-3">
                <h1>Users</h1>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Email</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($data_user as $_us) { ?>
                        <tr>
                            <th scope="row"><?= $i++; ?></th>
                            <td><?= $_us[4];?></td>
                            <td><?= $_us[2];?></td>
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