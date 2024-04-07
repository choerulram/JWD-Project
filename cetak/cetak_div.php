<?php

require_once __DIR__ . '../../vendor/autoload.php';

$mpdf = new \Mpdf\Mpdf();

// Custom Header
$header = '
<div style="text-align: center; margin-bottom: 20px;">
    <img src="../asset/img/logo_perusahaan.png" alt="Logo Perusahaan" style="width: 100px; height: 100px;" />
    <h2 style="margin: 0; font-size: 18px; font-weight: bold;">PT Imaginasi Mandiri</h2>
    <p style="margin: 0;">Jl. Sukses No. 123, Kota Imajinasi, Provinsi Imajinasi</p>
    <p style="margin: 0;">Email: info@imaginasimandiri.com, Website: www.imaginasimandiri.com</p>
    <p style="margin: 0;">Telp (021) 123456, Fax (021) 789012</p>
    <hr style="margin-top: 10px;">
</div>
<h3 style="margin-top: 20px; text-align: center;"><u>LAPORAN DATA DIVISI TERKAIT</u></h3>
<p style="text-align: right;">Tanggal Laporan: ' . date('d F Y') . '</p>
';

// Query untuk mengambil data divisi
$html_divisi = '
<style>
    body { font-family: "Times New Roman", serif; }
    table { width: 100%; border-collapse: collapse; margin-bottom: 20px; }
    th, td { border: 1px solid #000; padding: 8px; }
    th { background-color: #f2f2f2; }
    h3 { margin-bottom: 10px; }
    .ttd { text-align: center; margin-top: 40px; }
    .ttd p { margin-bottom: 10px; }
    .ttd img { width: 150px; height: 100px; }
    .ttd-left { float: left; width: 150px; }
    .ttd-right { float: right; width: 150px; }
    .clearfix::after { content: ""; display: table; clear: both; }
</style>
' . $header . '
<h3 class="mb-4"><em>Data Divisi Terkait</em></h3>
<table class="table table-striped table-sm">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama Divisi</th>
      <th scope="col">Kode Divisi</th>
    </tr>
  </thead>
  <tbody>';

include '../database/koneksi.php';
$no = 1;
$data_divisi = mysqli_query($koneksi, "select * from divisi");
while ($d = mysqli_fetch_array($data_divisi)) {
    $html_divisi .= '
    <tr>
      <td>' . $no++ . '</td>
      <td>' . $d['nama_divisi'] . '</td>
      <td>' . $d['kode_divisi'] . '</td>
    </tr>';
}

$html_divisi .= '</tbody>
</table>

<div class="ttd clearfix">
    <div class="ttd-left">
        <p>Mengetahui,</p>
        <img src="../asset/img/tanda_tangan_p.png" alt="Tanda Tangan Pimpinan" style="width: 150px; height: 100px;"/>
        <p>Nama Pimpinan</p>
    </div>
    <div class="ttd-right">
        <p>Mengetahui,</p>
        <img src="../asset/img/tanda_tangan_hrd.png" alt="Tanda Tangan HRD" style="width: 150px; height: 100px;"/>
        <p>Nama HRD</p>
    </div>
</div>
';

// Menggabungkan data divisi dalam satu halaman PDF
$mpdf->WriteHTML($html_divisi);

$mpdf->Output();

?>
