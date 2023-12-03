<style>
@import url("https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap");
</style>

<?php session_start();
if (!isset($_SESSION['email'])) {
    header('Location: /weblaporan/logout');
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>

<body>
    <div class="container-fluid">
        <div class="row flex-nowrap">
            <?php include "../sidebar.php"; ?>
            <div class="col py-3">
                <h1>Home</h1>
                <div class="row">
                    <div class="col-xl-4 col-md-6 mb-4">
                        <a class="card border-left-primary shadow h-100 py-2 bg-dark card-hover "
                            href="/weblaporan/admin/dashboard/users.php">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                            Users</div>
                                        <div class="h5 mb-0 font-weight-bold text-light">
                                            Users</div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-xl-4 col-md-6 mb-4">
                        <a class="card border-left-primary shadow h-100 py-2 bg-dark card-hover "
                            href="/weblaporan/admin/dashboard/laporan.php">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                            Laporan</div>
                                        <div class="h5 mb-0 font-weight-bold text-light">
                                            Laporan</div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>