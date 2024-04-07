<?php
// start session
session_start();

// set sesion
if(!isset($_SESSION["login"])) {
    header("Location: ../index.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Dashboard</title>
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css" rel="stylesheet">
	<link rel="stylesheet" href="../css/style.css">
    <style>
        .card-text{
            text-align:justify;
        }
        .col{
            border-radius: 200px;
        }
    </style>
</head>
<body>
<div class="wrapper d-flex align-items-stretch">
    <?php
    include '../asset/sidebar.php';
    ?>
    <div id="content" class="p-4 p-md-5">
    <?php
    include '../asset/navbar.php';
    ?>
<h2 class="mb-4"><em>Creators</em></h2>
<p>Achmad Choerul, Lutfiya Ainurrahman, Melinda Ghani, dan Nida Ul Khasanah adalah sekelompok pengembang yang bekerja sama untuk menciptakan sebuah website sistem pendataan karyawan yang inovatif. Berikut adalah biodata singkat tentang kami.</p>
  <div class="row row-cols-1 row-cols-md-2 g-4">
  <div class="col">
    <div class="card">
      <img src="../asset/img/choerul.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title"><em>Achmad Choerul Ramdhani</em></h5>
        <p class="card-text">Saya Achmad Choerul Ramdhani dari Politeknik Negeri Cilacap dengan program studi D3 Teknik Informatika. Saya memiliki kompetensi di bidang pengembangan web dan saat ini sedang meningkatkan kemampuan saya dengan lebih mendalam.</p>
        <a href="https://wa.me/+6281294029308" class="btn btn-primary">Hubungi Saya</a>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="../asset/img/lutfiya.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title"><em>Lutfiya Ainurrahman Prasetyo</em></h5>
        <p class="card-text">Saya Lutfiya Ainurrahman Prasetyo dari Politeknik Negeri Cilacap dengan program studi D3 Teknik Informatika. Saya memiliki keahlian desain menggunakan Adobe Illustrator dan sekarang saya sedang mengembangkan keahlian saya untuk lanjut kedalam bidang UI Designer dan Website Developer dengan memahami beberapa Bahasa pemrograman.</p>
        <a href="https://wa.me/+6281915133813" class="btn btn-primary">Hubungi Saya</a>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="../asset/img/melinda.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title"><em>Melinda Ghani Anggraeni</em></h5>
        <p class="card-text">Saya Melinda Ghani Anggraeni dari Politeknik Negeri Cilacap dengan program studi D3 Teknik Informatika. Saya memiliki pengalaman di bidang jaringan sehingga sekarang saya akan mendalami bidang tersebut.</p>
        <a href="https://wa.me/+6281215473483" class="btn btn-primary">Hubungi Saya</a>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="../asset/img/nida.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title"><em>Nida Ul Khasanah</em></h5>
        <p class="card-text">Saya Nida Ul Khasanah, seorang mahasiswa Politeknik Negeri Cilacap program studi D3 Teknik Informatika dengan spesialisasi dalam bidang pemrograman web. Saya memiliki hasrat dan dedikasi yang kuat untuk mengembangkan karir saya di dunia pengembangan web.</p>
        <a href="https://wa.me/+62882005057224" class="btn btn-primary">Hubungi Saya</a>
      </div>
    </div>
  </div>
</div>

</div>
</div>
<script src="../js/jquery.min.js"></script>
<script src="../js/popper.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/main.js"></script>
</body>
</html>