<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PT. Mitra Indah Lestari</title>
    
    <!-- Menggunakan Bootstrap versi terbaru -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    
    <!-- Menggunakan Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
    
    <!-- Menambahkan custom CSS -->
    <style>
    /* Efek overlay pada background */
    body {
        background-image: url('bootstrap4/img/bg4.png');
        background-size: cover;
        background-attachment: fixed;
        background-color: rgba(0, 0, 0, 0.6);
        background-blend-mode: overlay;
    }

    /* Gaya navbar */
    .navbar {
        background-color: rgba(0, 123, 255, 0.8);
    }

    .navbar-brand, .nav-link, .navbar-text {
        color: white !important;
        font-weight: bold;
        transition: color 0.3s ease;
    }

    .navbar-brand:hover, .nav-link:hover {
        color: #ffc107 !important;
    }

    /* Gaya konten */
    .content {
        background-color: rgba(255, 255, 255, 0.9);
        padding: 20px;
        margin-top: 20px;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    /* Gaya gambar carousel */
    .carousel-item img {
        width: 100%;
        height: auto;
    }

    /* Gaya box informasi */
    .info-box {
        background-color: rgba(255, 255, 255, 0.9);
        padding: 20px;
        margin-top: 20px;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    /* Gaya judul pada box informasi */
    .info-box h3 {
        font-size: 1.5rem;
        color: #007bff;
        font-weight: bold;
    }

    /* Gaya teks dalam info box */
    .info-box p {
        font-size: 1.1rem;
        line-height: 1.6;
        color: #333;
    }
</style>

</head>
<body>

<!-- Navbar -->
<?php include "navbarb4.php"; ?>

<!-- Konten -->
<div class="container">
    <div class="content">
        <h1>PT. Mitra Indah Lestari</h1>
        <p>PT. Mitra Indah Lestari (MIL) yang berdiri pada tahun 2005 adalah perusahaan yang bergerak di bidang kontraktor pertambangan batubara, rental dan transportasi alat berat. MIL menyediakan pelayanan kepada beberapa coal producer besar di Indonesia yaitu: PT. Lanna Harita Indonesia dan PT. Singlurus Pratama.</p>
    </div>

    <!-- Carousel -->
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="images/Logo1.jpg" class="d-block w-100" alt="First slide">
            </div>
            <!-- <div class="carousel-item">
                <img src="images/Logo2.jpg" class="d-block w-100" alt="Second slide">
            </div> -->
			<div class="carousel-item">
                <img src="images/truck1.jpg" class="d-block w-100" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img src="images/truck2.jpg" class="d-block w-100" alt="Third slide">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!-- Kartu Informasi -->
    <div class="row">
        <div class="col-md-4">
            <div class="info-box">
                <h3>Visi</h3>
                <p>Menjadi mitra bisnis yang terpercaya dan handal dalam pertambangan batubara</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="info-box">
                <h3>Misi</h3>
                <p>- Melaksanakan kaidah pertambangan yang baik meliputi kaidah teknik usaha jasa pertambangan yang baik dan tata kelola pengusahaan jasa pertambangan.<br>
                - Mengoptimalkan nilai bagi semua pemangku kepentingan</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="info-box">
                <h3>About</h3>
                <p>Nama perusahaan: PT. Mitra Indah Lestari<br>Tahun Berdiri: 14 November 2005</p>
            </div>
        </div>
    </div>

    <div class="info-box">
        <h3>Contact Us</h3>
        <p>Location: Jl. Soekarno Hatta KM 2,5 RT 01 No. 1, Balikpapan, Kalimantan Timur</p>
		<p>Telp:+62542 748657 </p>
    </div>
</div>

<!-- Footer -->
<?php include "footerb4.php"; ?>

<!-- Script Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>


</body>
</html>
