<?php 
// koneksi database
include '../database/koneksi.php';
 
// menangkap data yang di kirim dari form
$nama_divisi = $_POST['nama_divisi'];
$kode_divisi = $_POST['kode_divisi'];
 
// update data ke database
mysqli_query($koneksi,"update divisi set nama_divisi='$nama_divisi', kode_divisi='$kode_divisi' where kode_divisi='$kode_divisi'");
 
// mengalihkan halaman kembali ke index.php
header("location:../tampilan/divisi.php");
 