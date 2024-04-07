<?php
// koneksi database
include '../database/koneksi.php';

// menangkap data id yang di kirim dari url
$nik = $_GET['nik'];

// Fungsi untuk menghindari karakter khusus pada string agar aman digunakan dalam pernyataan SQL
function escape_string($str)
{
    global $koneksi;
    return mysqli_real_escape_string($koneksi, $str);
}

// menghapus data dari database setelah konfirmasi
if (isset($nik)) {
    // Memunculkan konfirmasi sebelum melakukan penghapusan
    if (isset($_GET['confirm']) && $_GET['confirm'] === "yes") {
        $nik = escape_string($nik);
        mysqli_query($koneksi, "DELETE FROM karyawan WHERE nik='$nik'");
        // Alihkan ke edit_ma_d.php setelah penghapusan berhasil
        header("location: ../tampilan/karyawan.php");
        exit;
    }
}
// Jika 'nik' belum disetel atau parameter 'confirm' tidak sama dengan "yes",
// kembalikan ke edit_ma_d.php dengan pesan peringatan
header("location: ../tampilan/karyawan?error=1");
