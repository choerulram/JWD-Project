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

// Mengambil data nik yang sudah ada di database untuk pengecekan
$result = mysqli_query($koneksi, "SELECT COUNT(*) as count FROM karyawan WHERE nik = 'MSI-$nik'");
$row = mysqli_fetch_assoc($result);
$count = $row['count'];

// Cek apakah data nik sudah ada di database
if ($count > 0) {
    // Jika sudah ada, berikan alert dan kembali ke halaman sebelumnya
    echo "<script>alert('Data NIK sudah ada di database!'); window.history.back();</script>";
} else {
    // Jika belum ada, lakukan proses input data ke database
    mysqli_query($koneksi,"insert into karyawan(nama,nik,jenis_kelamin,alamat,level,divisi,gaji) values('$nama','MSI-$nik','$jenis_kelamin','$alamat','$level','$divisi','Rp. $gaji')");
    // mengalihkan halaman kembali ke dashboard.php
    header("location:../tampilan/karyawan.php");
}
?>

?>