<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PT. MIL Recruitment</title>

    <link rel="stylesheet" href="bootstrap4/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap4/css/custom.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <style>
    /* Efek overlay pada background */
    body {
        background-image: url('bootstrap4/img/bg.png');
        background-size: cover;
        background-attachment: fixed;
        background-color: rgba(0, 0, 0, 0.6);
        background-blend-mode: overlay;
    }

    /* Gaya navbar */
    .navbar {
        background-color: rgba(0, 123, 255, 0.8);
    }

    .navbar a {
        color: white !important;
        font-weight: bold;
        transition: color 0.3s ease;
    }

    .navbar a:hover {
        color: #ffc107 !important;
    }

    .navbar a {
        color: white !important;
        font-weight: bold;
        transition: color 0.3s ease;
    }

    .navbar a:hover {
        color: #ffc107 !important;
    }

    .navbar-brand, .nav-link, .navbar-text {
        color: white !important;
        font-weight: bold;
        transition: color 0.3s ease;
    }

    .navbar-brand:hover, .nav-link:hover {
        color: #ffc107 !important;
    }

    /* Gaya tombol login */
    .btn-login {
        background-color: #007bff; /* Warna tombol biru */
        color: white !important; /* Teks tombol putih */
        font-weight: bold;
        border-radius: 5px; /* Sudut bulat */
        padding: 10px 20px; /* Padding */
        font-size: 1.2rem; /* Ukuran font */
        transition: background-color 0.3s ease, transform 0.2s ease; /* Transisi efek hover */
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); /* Bayangan untuk kedalaman */
        display: inline-block; /* Memastikan tombol menjadi inline-block */
        margin-top: 20px; /* Jarak atas tombol */
    }

    .btn-login:hover {
        background-color: #0056b3; /* Warna lebih gelap saat hover */
        transform: scale(1.05); /* Efek pembesaran saat hover */
    }

    /* Gaya konten */
    .content {
        background-color: rgba(255, 255, 255, 0.9);
        padding: 20px;
        margin-top: 20px;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    /* Gaya posting lowongan */
    .lowongan {
        margin-top: 20px;
        padding: 20px;
        border-radius: 10px;
        background-color: rgba(255, 255, 255, 0.9);
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    /* Gaya judul */
    h2 {
        color: #007bff;
    }

    h4 {
        color: #555;
    }

    /* Gaya deskripsi pekerjaan */
    .panel-body {
        margin-bottom: 20px;
    }

    /* Gaya footer */
    footer {
        margin-top: 20px;
        padding: 20px;
        background-color: #f8f9fa;
        text-align: center;
    }
</style>

</head>
<body>

<!-- Navbar -->
<?php include "navbarb4.php"; ?>

<div class="container">
    <!-- Awal posting -->
    <?php
    error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
    include "koneksi.php";
    $post = $_GET["post"];
    if (!$post) {
        $ambil_berita = mysqli_query($connect, "SELECT * FROM lowongan ORDER BY id_lowongan DESC");
        while ($hasil = mysqli_fetch_array($ambil_berita)) {
    ?>
    <div class="lowongan text-center">
        <h2><?= $hasil['posisi_pekerjaan']; ?></h2>
        <h4><?= $hasil['tgl_mulai']; ?> s/d <?= $hasil['tgl_selesai']; ?></h4>
        <br>
        <p>
            <a href="career.php?post=<?= $hasil['id_lowongan']; ?>" class="btn btn-primary">Baca Selengkapnya</a>
        </p>
    </div>
    <hr style="height: 10px; border: 0; box-shadow: 0 10px 10px -10px #1e88e5 inset;">
    <?php
        }
    } else {
        $ambil_berita = mysqli_query($connect, "SELECT * FROM lowongan WHERE id_lowongan ='$post'");
        $hasil = mysqli_fetch_array($ambil_berita);
    ?>
    <div class="content">
        <h3 class="text-center" style="color: black; font-weight: bold;"><?= $hasil['posisi_pekerjaan']; ?></h3>
        <h6 class="text-center"><?= $hasil['tgl_mulai']; ?> s/d <?= $hasil['tgl_selesai']; ?></h6>
        <hr>
        <p class="text-center"><b><?= $hasil['tgl_mulai']; ?> s/d <?= $hasil['tgl_selesai']; ?></b></p>
        <p><?= $hasil['deskripsi_pekerjaan']; ?></p>
        <br>
        <p><b>Jurusan Akademik:</b> <?= $hasil['jurusan_akademik']; ?></p>
        <p><b>Lokasi Pekerjaan:</b> <?= $hasil['lokasi_pekerjaan']; ?></p>
        <p><b>Lokasi Seleksi:</b> <?= $hasil['lokasi_seleksi']; ?></p>
        <br>
        <hr style="height: 10px; border: 0; box-shadow: 0 10px 10px -10px #1e88e5 inset;">
    </div>

    <?php
        $ambil_recent = mysqli_query($connect, "SELECT * FROM lowongan");
    ?>
    <div class="panel-berita">
        <div class="panel-heading">Baca Juga</div>
        <ul type="square">
            <?php
            while ($hasil_recent = mysqli_fetch_array($ambil_recent)) {
                echo "<li><a href='career.php?link=lihatDetailtnt.php&id=$hasil_recent[id_lowongan]'>Lowongan " . $hasil_recent['posisi_pekerjaan'] . "</a></li>";
            }
            ?>
        </ul>
    </div>
    <?php } ?>
</div>

<!-- Footer -->
<?php include "footerb4.php"; ?>

<script src="bootstrap4/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
</body>
</html>
