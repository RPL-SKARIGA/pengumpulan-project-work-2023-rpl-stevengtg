<?php include "../../bootstrap.php";?>

<div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark">
    <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
        <a href="/weblaporan/admin/dashboard"
            class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none mt-3">
            <span class="fs-5 d-none d-sm-inline fw-bold">Dashboard Admin</span>
        </a>
        <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start mt-auto" id="menu">
            <li class="nav-item">
                <a href="/weblaporan/admin/dashboard" class="nav-link px-0 text-white">
                    <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline">Home</span>
                </a>
            </li>
            <li>
                <a href="/weblaporan/admin/dashboard/users.php" class="nav-link px-0 text-white">
                    <i class="fs-4 bi-table"></i> <span class="ms-1 d-none d-sm-inline">Users</span></a>
            </li>
            <li>
                <a href="/weblaporan/admin/dashboard/laporan.php" class="nav-link px-0 text-white">
                    <i class="fs-4 bi-people"></i> <span class="ms-1 d-none d-sm-inline">Laporan</span> </a>
            </li>
        </ul>
        <hr>
        <div class="nav-item pb-4">
            <a href="/weblaporan/logout" class="nav-link">
                <span class="d-none d-sm-inline mx-1">Log Out</span>
            </a>
        </div>
    </div>
</div>