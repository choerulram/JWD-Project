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
    <title>PROJECT 1 JWD A</title>
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css" rel="stylesheet">
	<link rel="stylesheet" href="../css/style.css">
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
    <h2 class="mb-4"><em>ABOUT</em></h2>
        <p>Achmad Choerul, Lutfiya Ainurrahman, Melinda Ghani, dan Nida Ul Khasanah adalah sekelompok pengembang yang bekerja sama untuk menciptakan sebuah website sistem pendataan karyawan yang inovatif. Website ini dirancang untuk membantu perusahaan dalam mengelola data karyawan secara efisien dan terorganisir.</p>
        <p>Seluruh data karyawan disimpan dalam basis data yang aman dan terlindungi, sehingga hanya orang yang berwenang yang dapat mengaksesnya. Para pengguna yang memiliki izin akses dapat melihat dan mengedit data karyawan sesuai dengan hak akses yang telah ditetapkan. Misalnya, manajer departemen dapat mengakses dan memperbarui data karyawan di departemen mereka sendiri, sementara bagian sumber daya manusia memiliki hak akses penuh untuk melihat dan mengelola data karyawan di seluruh perusahaan.</p>
        <p>Website ini dirancang dengan antarmuka yang intuitif dan responsif, sehingga dapat diakses dengan mudah melalui perangkat komputer, tablet, atau smartphone. Hal ini memungkinkan para pengguna untuk mengakses data karyawan kapan saja dan di mana saja, tanpa terbatas oleh batasan perangkat.</p>
        <p>Dengan keahlian dan kolaborasi Achmad Choerul, Lutfiya Ainurrahman, Melinda Ghani, dan Nida Ul Khasanah, website sistem pendataan karyawan ini menjadi sebuah solusi yang handal dan berguna bagi perusahaan dalam mengelola sumber daya manusia mereka dengan efektif.</p>
<a href="creator.php" class="btn btn-primary">Tentang Kami</a>
</div>
<script src="../js/jquery.min.js"></script>
<script src="../js/popper.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/main.js"></script>
</body>
</html>