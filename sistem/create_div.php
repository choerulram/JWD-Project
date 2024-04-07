<?php 
// koneksi database
include '../database/koneksi.php';

// menangkap data yang di kirim dari form
$nama_divisi = $_POST['nama_divisi'];
$kode_divisi = $_POST['kode_divisi'];

// Mengambil data kode_divisi yang sudah ada di database untuk pengecekan
$result = mysqli_query($koneksi, "SELECT COUNT(*) as count FROM divisi WHERE kode_divisi = 'MSD-$kode_divisi'");
$row = mysqli_fetch_assoc($result);
$count = $row['count'];

// Cek apakah data kode_divisi sudah ada di database
if ($count > 0) {
    // Jika sudah ada, berikan alert dan kembali ke halaman sebelumnya
    echo "<script>alert('Data kode divisi sudah ada di database!'); window.history.back();</script>";
} else {
    // Jika belum ada, lakukan proses input data ke database
    mysqli_query($koneksi,"insert into divisi(nama_divisi,kode_divisi) values('$nama_divisi','MSD-$kode_divisi')");
    // mengalihkan halaman kembali ke divisi.php
    header("location:../tampilan/divisi.php");
}
?>
