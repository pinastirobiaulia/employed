<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>PT. MIL Recruitment </title>

  <link rel="stylesheet" href="bootstrap4/css/bootstrap.min.css">
  <link rel="stylesheet" href="bootstrap4/css/custom.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  
  <!-- Tambahkan kode CSS di sini -->
  <style>
    /* Efek overlay pada background */
    body {
        background-color: rgba(0, 0, 0, 0.6);
        background-blend-mode: overlay;
        background-size: cover;
    }

    /* Gaya card */
    .card {
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        padding: 20px;
        background-color: rgba(255, 255, 255, 0.9);
    }

    /* Gaya judul card */
    .card-title {
        font-size: 1.75rem;
        font-weight: bold;
        color: #007bff;
    }

    /* Gaya teks pada card */
    .card-text p {
        font-size: 1.1rem;
        line-height: 1.6;
        color: #333;
        padding-left: 10px;
    }

    /* Pusatkan teks dan tambahkan spasi pada paragraf terakhir */
    .card-text center {
        font-size: 1.3rem;
        color: #28a745;
        margin-top: 20px;
    }

    /* Sesuaikan gaya navbar */
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
  </style>
</head>


<body style="background-image: url(bootstrap4/img/bg.png");">




<?php 
  include "navbarb4.php";
 ?>

<div class="container">
  <div class="card border-primary mb-7" style="max-width: 100%;">
  <div class="card-body text-primary">
    <h4 class="card-title">Petunjuk Pendaftaran Lowongan</h4>
    <p class="card-text">
          <p>&nbsp;&nbsp; 1. Klik "Masuk" yang berada dipojok kanan atas.</p>
          <p>&nbsp;&nbsp; 2. Klik "Registrasi" dihalaman login.</p>
          <p>&nbsp;&nbsp; 3. Masukan Username & password anda, jangan lupa untuk konfirmasi password sebelum simpan.</p>
          <p>&nbsp;&nbsp; 4. Jika sudah memiliki akun masukkan username & password anda di halaman login.</p>
          <p>&nbsp;&nbsp; 5. Pilih akses level "Pelamar" lalu Login.</p>
          <p>&nbsp;&nbsp; 6. Klik "Detail Karir", anda dapat memilih lowongan kerja yang sedang dibutuhkan.</p>
          <p>&nbsp;&nbsp; 7. Klik "Baca Selengkapnya", Anda dapat memilih lowongan yang sesuai dengan latar pendidikan anda, periksalah dengan saksama rinciannya.</p>
          <p>&nbsp;&nbsp; 8. Klik "Daftar" .</p>
          <p>&nbsp;&nbsp; 8. Pastikan anda mengisi semua informasi pribadi yang diperlukan (informasi yang bertanda bintang wajib diisi).</p>
          <p>&nbsp;&nbsp; 10. Upload file wajib jika bertanda bintang.</p>
          <p>&nbsp;&nbsp; 11. Mengikuti tes psikotes & tes umum secara online.</p>
          <p>&nbsp; 12. Menunggu konfirmasi untuk panggilan wawancara.</p> 
          <p><center><b>Semoga Berhasil!</b></center></p>
    </p>
  </div>
</div>
</div>

<?php 
  include "footerb4.php";
 ?>


  <script src="bootstrap4/js/bootstrap.min.js"></script>
</body>
</html>