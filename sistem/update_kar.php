<?php 
// koneksi database
include '../database/koneksi.php';
 
// menangkap data yang di kirim dari form
$nama = $_POST['nama'];
$nik = $_POST['nik'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$alamat = $_POST['alamat'];
$level = $_POST['level'];
$divisi = $_POST['divisi'];
$gaji = $_POST['gaji'];
 
// update data ke database
mysqli_query($koneksi,"update karyawan set nama='$nama', nik='$nik', jenis_kelamin='$jenis_kelamin', alamat='$alamat', level='$level', divisi='$divisi', gaji='$gaji' where nik='$nik'");

 
// mengalihkan halaman kembali ke index.php
header("location:../tampilan/karyawan.php");
 
?>