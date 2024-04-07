<?php
// koneksi database
include '../database/koneksi.php';

// menangkap data id yang di kirim dari url
$kode_divisi = $_GET['kode_divisi'];

// Fungsi untuk menghindari karakter khusus pada string agar aman digunakan dalam pernyataan SQL
function escape_string($str)
{
    global $koneksi;
    return mysqli_real_escape_string($koneksi, $str);
}

// menghapus data dari database setelah konfirmasi
if (isset($kode_divisi)) {
    // Memunculkan konfirmasi sebelum melakukan penghapusan
    if (isset($_GET['confirm']) && $_GET['confirm'] === "yes") {
        $kode_divisi = escape_string($kode_divisi);
        mysqli_query($koneksi, "DELETE FROM divisi WHERE kode_divisi='$kode_divisi'");
        // Alihkan ke edit_mk_d.php setelah penghapusan berhasil
        header("location: ../tampilan/divisi.php");
        exit;
    }
}
// Jika 'kode_divisi' belum disetel atau parameter 'confirm' tidak sama dengan "yes",
// kembalikan ke edit_mk_d.php dengan pesan peringatan
header("location: ../tampilan/edit_div.php?error=1");