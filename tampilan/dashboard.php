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
    <h2 class="mb-4"><em>SI-PENKA</em></h2>
        <p>SI-PENKA merupakan singkatan dari Sistem Pendataan Karyawan berbasis website. SI-PENKA adalah sebuah platform online yang digunakan oleh perusahaan untuk mengumpulkan dan menyimpan informasi karyawan secara terpusat. Melalui website ini, manajemen dapat mengelola data karyawan dengan lebih efisien dan mempermudah aksesibilitas informasi bagi seluruh pihak terkait.</p>
        <p>Dengan adanya sistem pendataan karyawan berbasis website, perusahaan dapat menghemat waktu dan upaya dalam pengelolaan data karyawan, mengurangi kesalahan manusia, dan meningkatkan efisiensi dalam proses administrasi. Hal ini memungkinkan perusahaan untuk fokus pada pengembangan dan manajemen sumber daya manusia dengan lebih baik.</p>
<a href="divisi.php" class="btn btn-primary">Mulai Sekarang</a>
</div>
<script src="../js/jquery.min.js"></script>
<script src="../js/popper.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/main.js"></script>
</body>
</html>