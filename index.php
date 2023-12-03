<?php
include 'library/koneksi.php';
$history = mysqli_fetch_all(mysqli_query($con, "SELECT * FROM laporan"));
$i = 1;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>LAPORLINE</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
</head>

<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand  " href="#page-top"><img src="public/img/nando.png" alt="..." /></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars ms-1"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                    <li class="nav-item"><a class="nav-link" href="#services">Apa itu Lapor?</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Lapor!</a></li>
                    <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="#history">History</a></li>
                    <li class="nav-item"><a class="nav-link" href="/weblaporan/logout">Log Out</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Masthead-->
    <header class="masthead">
        <div class="container">
            <div class="masthead-subheading">Layanan Aspirasi dan Pengaduan Online Rakyat</div>
            <div class="masthead-heading text-uppercase">Sampaikan Laporan Anda Langsung Agar Masalah Cepat Teratasi
            </div>
        </div>
    </header>
    <!-- Services-->
    <section class="page-section" id="services">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">lapor</h2>
                <h3 class="section-subheading text-muted">Pengelolaan pengaduan pelayanan publik di setiap organisasi
                    penyelenggara di Indonesia belum terkelola secara efektif dan terintegrasi. Masing-masing organisasi
                    penyelenggara mengelola pengaduan secara parsial dan tidak terkoordinir dengan baik. Akibatnya
                    terjadi duplikasi penanganan pengaduan, atau bahkan bisa terjadi suatu pengaduan tidak ditangani
                    oleh satupun organisasi penyelenggara, dengan alasan pengaduan bukan kewenangannya. Oleh karena itu,
                    untuk mencapai visi dalam good governance maka perlu untuk mengintegrasikan sistem pengelolaan
                    pengaduan pelayanan publik dalam satu pintu. Tujuannya, masyarakat memiliki satu saluran pengaduan
                    secara Nasional.

                    Untuk itu Pemerintah Republik Indonesia membentuk Sistem Pengelolaan Pengaduan Pelayanan Publik
                    Nasional (SP4N) - Layanan Aspirasi dan Pengaduan Online Rakyat (LAPOR!) adalah layanan penyampaian
                    semua aspirasi dan pengaduan masyarakat Indonesia melalui beberapa kanal pengaduan yaitu website
                    LaporLine. Lembaga pengelola SP4N-LAPOR! adalah Kementerian Pendayagunaan Aparatur Negara
                    dan Reformasi Birokrasi (Kementerian PANRB) sebagai Pembina Pelayanan Publik, Kantor Staf Presiden
                    (KSP) sebagai Pengawas Program Prioritas Nasional dan Ombudsman Republik Indonesia sebagai Pengawas
                    Pelayanan Publik. LAPOR! telah ditetapkan sebagai Sistem Pengelolaan Pengaduan Pelayanan Publik
                    Nasional (SP4N) berdasarkan Peraturan Presiden Nomor 76 Tahun 2013 dan Peraturan Menteri
                    Pendayagunaan Aparatur Negara dan Reformasi Birokrasi Nomor 3 Tahun 2015.</h3>
            </div>
            <div class="row text-center">
                <div class="col-md-6">
                    <span class="fa-stack fa-4x">
                        <i class="bi bi-list-task"></i>
                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor"
                            class="bi bi-list-task" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M2 2.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5V3a.5.5 0 0 0-.5-.5H2zM3 3H2v1h1V3z" />
                            <path
                                d="M5 3.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM5.5 7a.5.5 0 0 0 0 1h9a.5.5 0 0 0 0-1h-9zm0 4a.5.5 0 0 0 0 1h9a.5.5 0 0 0 0-1h-9z" />
                            <path fill-rule="evenodd"
                                d="M1.5 7a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H2a.5.5 0 0 1-.5-.5V7zM2 7h1v1H2V7zm0 3.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5H2zm1 .5H2v1h1v-1z" />
                        </svg>
                    </span>
                    <h4 class="my-3">Jenis Laporan</h4>
                    <p class="text-muted">Laporan tidak hanya satu laporan memiliki beberapa jenis
                        ada laporan berdasarkan sifat yaitu
                        Laporan biasa adalah laporan yang isinya bersifat biasa dan tidak rahasia, sehingga jika laporan
                        terbaca orang lain tidak menimbulkan dampak negatif.
                        Laporan penting adalah laporan yang isinya bersifat penting dan rahasia, sehingga hanya orang
                        tertentu saja yang boleh mengetahuinya. .</p>
                </div>

                <div class="col-md-6">
                    <span class="fa-stack fa-4x">
                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor"
                            class="bi bi-caret-down-fill" viewBox="0 0 16 16">
                            <path
                                d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z" />
                        </svg>
                    </span>
                    <h4 class="my-3">Apasih Fungsi Laporan?</h4>
                    <p class="text-muted">laporan memiliki fungsi sebagai berikut:
                        1. Alat pertanggungjawaban dari pihak
                        yang satu kepada yang lain; 2. Alat untuk membina kerja sama, saling pengertian, komunikasi dan
                        koordinasi yang setepat–tepatnya; 3. Alat untuk mengadakan perencanaan, pengendalian,
                        penilaian..</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact-->
    <section class="page-section" id="contact">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">LAPORLINE</h2>
                <h3 class="section-subheading text-muted">Sampaikan laporan anda langsung kepada yang
                    berwenang.</h3>
            </div>
            <!-- * * * * * * * * * * * * * * *-->
            <!-- * * SB Forms Contact Form * *-->
            <!-- * * * * * * * * * * * * * * *-->
            <!-- This form is pre-integrated with SB Forms.-->
            <!-- To make this form functional, sign up at-->
            <!-- https://startbootstrap.com/solution/contact-forms-->
            <!-- to get an API token!-->
            <form id="contactForm" data-sb-form-api-token="API_TOKEN" action="proses/lapor.php" method="POST"
                enctype="multipart/form-data">
                <div class="row align-items-stretch justify-content-center mb-5">
                    <div class="col-md-8">
                        <div class="form-group">
                            <!-- nama pelapor-->
                            <input class="form-control" id="name" type="text" placeholder="Nama Pelapor *"
                                data-sb-validations="required" name="nama_pelapor" required />
                            <div class="invalid-feedback" data-sb-feedback="name:required">A name is
                                required.</div>
                        </div>
                        <div class="form-group">
                            <!-- Judul input-->
                            <input class="form-control" id="name" type="text" placeholder="Ketik Judul Laporan Anda *"
                                data-sb-validations="required" name="judul" required />
                            <div class="invalid-feedback" data-sb-feedback="name:required">A name is
                                required.</div>
                        </div>
                        <div class="form-group">
                            <!-- Jenis address input-->
                            <input class="form-control" id="name" type="text" placeholder="Ketik Jenis Laporan Anda *"
                                data-sb-validations="required" name="jenis_laporan" required />
                            <div class="invalid-feedback" data-sb-feedback="Jenis:required">Wajib Diisi.</div>
                        </div>
                        <div class="form-group">
                            <!-- lokasi address input-->
                            <input class="form-control" id="name" type="text" placeholder="Lokasi kejadian *"
                                data-sb-validations="required" name="lokasi" required />
                            <div class="invalid-feedback" data-sb-feedback="Isi:required">Wajib Diisi.</div>
                        </div>
                        <div class="form-group">
                            <!-- Instasi address input-->
                            <select name="instansi" id="">
                                <?php
                                  $instansi = mysqli_fetch_all(mysqli_query($con, "SELECT * FROM instansi"));
                                foreach($instansi as $i) {
                              ?>
                                <option value="<?= $i[0] ?>"><?= $i[1] ?></option>
                                <?php
                            }
                           ?>
                            </select>
                            <div class="invalid-feedback" data-sb-feedback="Instasi:required">Wajib Diisi.</div>
                        </div>
                        <div class="form-group">
                            <!-- tanggal number input-->
                            <input class="form-control" id="number" type="datetime-local"
                                placeholder="Tanggal Kejadian *" data-sb-validations="required" name="tgl" required />
                            <div class="invalid-feedback" data-sb-feedback="tanggal:required"></div>
                        </div>
                        <div class="form-group form-group-textarea h-25">
                            <!-- Message input-->
                            <textarea class="form-control" id="message" placeholder="Ketik isi laporan anda *"
                                data-sb-validations="required" name="isi" required></textarea>
                            <div class="invalid-feedback" data-sb-feedback="message:required"></div>
                        </div>
                        <div class="form-group form-group-textarea h-25">
                            <!-- Message input-->
                            <!-- <textarea class="form-control" id="image" placeholder="Sertakan Bukti berupa foto *"
                                data-sb-validations="required" name="Gambar" required></textarea> -->
                            <input type="file" class="form-control" placeholder="Sertakan Bukti berupa foto *"
                                data-sb-validations="required" id="exampleFormControlFile1" name="gambar_laporan"
                                accept="image/*">

                            <div class="invalid-feedback" data-sb-feedback="image:required"></div>
                        </div>
                    </div>
                </div>
        </div>
        </div>
        <!-- Submit success message-->
        <!---->
        <!-- This is what your users will see when the form-->
        <!-- has successfully submitted-->
        <div class="d-none" id="submitSuccessMessage">
            <div class="text-center text-white mb-3">
                <div class="fw-bolder">Form submission successful!</div>
                To activate this form, sign up at
                <br />
                <a
                    href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
            </div>
        </div>
        <!-- Submit error message-->
        <!---->
        <!-- This is what your users will see when there is-->
        <!-- an error submitting the form-->
        <div class="d-none" id="submitErrorMessage">
            <div class="text-center text-danger mb-3">Error sending message!</div>
        </div>
        <!-- Submit Button-->
        <div class="text-center"><button type="submit" class="btn btn-primary btn-xl text-uppercase">Send
                Message</button></div>
        </form>
        </div>
    </section>
    <!-- About-->
    <section class="page-section" id="about">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">About</h2>
                <h3 class="section-subheading text-muted">LaporLine</h3>
            </div>
            <ul class="timeline">
                <li>
                    <div class="timeline-image"><img class="rounded-circle img-fluid justify-content-center mt-5 pt-2"
                            src="public/img/nando.png" alt="..." /></div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4></h4>
                            <h4 class="subheading">LaporLine</h4>
                        </div>
                        <div class="timeline-body">
                            <p class="text-muted">Sebuah website laporan online bernama LaporLine, dibuat oleh siswa
                                SMK PGRI 3 MALANG untuk memudahkan masyarakat dalam melaporkan kasus tanpa harus datang
                                ke kantor, oleh karena itu diharapkan website ini berguna untuk semua masyarakat.
                            </p>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </section>
    <!-- History -->
    <section class="page-section" id="history">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">History</h2>
                <h3 class="section-subheading text-muted">LaporLine</h3>
            </div>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Judul Laporan</th>
                        <th scope="col">Tanggal Laporan</th>
                        <th scope="col">Status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    $i= 0;
                    foreach($history as $h): ?>
                    <tr>
                        <th scope="row"><?= ++$i; ?></th>
                        <td><?= $h[1]; ?></td>
                        <td><?= $h[6]; ?></td>
                        <td><?= $h[9];?></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </section>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <!-- * *                               SB Forms JS                               * *-->
    <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>