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
    <style>
    .col{
        margin-left: 50px;
        margin-right: 50px;
        margin-top: 20px;
        margin-bottom: 20px;
        padding: 100px;
    }
    .col a{
        color: white;
        font-weight: 600;
        font-size: 32px;
    }
</style>
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
    <h2 class="mb-4"><em>Data Divisi Terkait</em></h2>
    <main>
    <div class="d-flex justify-content-between mb-3">
  <div>
      <a href="create_div.php" class="btn btn-success" style="margin-right:10px;">Tambah Data</a>
      <a href="../cetak/cetak_div.php" class="btn btn-secondary" target="_blank">Cetak Data</a>
  </div>
  <!-- Baris pencarian -->
  <div>
    <form action="" method="post" class="d-flex">
      <input type="text" name="search_keyword" placeholder="Masukkan kata kunci" style="width:300px;">
      <button type="submit" class="btn btn-primary" style="margin-left: 10px;">Cari</button>
    </form>
  </div>
</div>


<?php
include '../database/koneksi.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['search_keyword'])) {
    $search_keyword = $_POST['search_keyword'];
    $query = "SELECT * FROM divisi WHERE nama_divisi LIKE '%$search_keyword%' OR kode_divisi LIKE '%$search_keyword%'";
} else {
    $query = "SELECT * FROM divisi";
}

$no = 1;
$data = mysqli_query($koneksi, $query);
?>

<div class="table-responsive large">
    <table class="table table-striped table-sm">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Divisi</th>
                <th scope="col">Kode Divisi</th>
                <th scope="col">Opsi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            while ($d = mysqli_fetch_array($data)) {
                ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $d['nama_divisi']; ?></td>
                    <td><?php echo $d['kode_divisi']; ?></td>
                    <td>
                        <a href="edit_div.php?kode_divisi=<?php echo $d['kode_divisi']; ?>" class="btn btn-warning"><i class="bi bi-pencil-square"></i> EDIT</a>
                        <button onclick="confirmDelete('<?php echo $d['kode_divisi']; ?>')" class="btn btn-danger"><i class="bi bi-trash"></i> HAPUS</button>
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
    function confirmDelete(kode_divisi) {
        var result = confirm("Apakah Anda yakin ingin menghapus data ini?");
        if (result) {
            window.location.href = "../sistem/hapus_div.php?kode_divisi=" + kode_divisi + "&confirm=yes";
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