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

  <!--Edit data mulai disini-->
  <h2 class="mb-4"><em>Data Karyawan</em></h2>
    <main>
    <div class="d-flex justify-content-between mb-3">
  <div>
      <a href="create_kar.php" class="btn btn-success" style="margin-right:10px;">Tambah Data</a>
      <a href="../cetak/cetak_kar.php" class="btn btn-secondary" target="_blank">Cetak Data</a>
  </div>
  <!-- Baris pencarian -->
  <div>
    <form action="" method="post" class="d-flex">
      <input type="text" name="search_keyword" placeholder="Cari berdasarkan Nama, NIK, atau Divisi" style="width:300px;">
      <button type="submit" class="btn btn-primary" style="margin-left: 10px;">Cari</button>
    </form>
  </div>
</div>


<!--Untuk search-->
      <?php
include '../database/koneksi.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['search_keyword'])) {
    $search_keyword = $_POST['search_keyword'];
    $query = "SELECT * FROM karyawan WHERE 
        nama LIKE '%$search_keyword%' OR 
        nik LIKE '%$search_keyword%' OR 
        divisi LIKE '%$search_keyword%'";
} else {
    $query = "SELECT * FROM karyawan";
}

$no = 1;
$data = mysqli_query($koneksi, $query);
?>
      <div class="table-responsive large">
        <table class="table table-striped table-sm">
            <!--start 4 tabelhead-->
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">NIK</th>
                    <th scope="col">Jenis Kelamin</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Level</th>
                    <th scope="col">Divisi</th>
                    <th scope="col">Gaji</th>
                    <th scope="col">Opsi</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                while($d = mysqli_fetch_array($data)){
                    ?>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $d['nama']; ?></td>
                        <td><?php echo $d['nik']; ?></td>
                        <td><?php echo $d['jenis_kelamin']; ?></td>
                        <td><?php echo $d['alamat']; ?></td>
                        <td><?php echo $d['level']; ?></td>
                        <td><?php echo $d['divisi']; ?></td>
                        <td><?php echo $d['gaji']; ?></td>
                        <td>
				<a href="edit_kar.php?nik=<?php echo $d['nik']; ?>" class="btn btn-warning"><i class="bi bi-pencil-square"></i> EDIT</a>
				<button onclick="confirmDelete('<?php echo $d['nik']; ?>')" class="btn btn-danger"><i class="bi bi-trash"></i> HAPUS</button>
				</td>
                    </tr>
                    <?php 
                }
                ?>
            </tbody>
        </table>
      </div>
    </main>
  </div>
</div>
<script>
    function confirmDelete(nik) {
        var result = confirm("Apakah Anda yakin ingin menghapus data ini?");
        if (result) {
            window.location.href = "../sistem/hapus_kar.php?nik=" + nik + "&confirm=yes";
        }
    }
</script>
<script src="assets/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.2.1/dist/chart.umd.min.js" integrity="sha384-gdQErvCNWvHQZj6XZM0dNsAoY4v+j5P1XDpNkcM3HJG1Yx04ecqIHk7+4VBOCHOG" crossorigin="anonymous"></script><script src="dashboard.js"></script>

<!--Edit data sampai sini-->

</div>
<script src="../js/jquery.min.js"></script>
<script src="../js/popper.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/main.js"></script>
</body>
</html>



