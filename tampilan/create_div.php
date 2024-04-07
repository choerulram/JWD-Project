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
    <h2 class="mb-4"><em>Tambah Data Divisi</em></h2>

<!--Edit data mulai disini-->

<main>
      <div class="table-responsive large">
        <table class="table table-striped table-sm">
          <!--start 4 tabelhead-->
		<form method="post" action="../sistem/create_div.php">
			<table>
        <!--edit here-->
        <div class="aa">
          <tr>
          <td class="col-sm-2 col-form-label">Nama Divisi</td>
          <div class="col-sm-10">
          <input type="hidden" name="nik" value="<?php echo $d['nik']; ?>">
          <td><input type="text" class="form-control" name="nama_divisi"></td>
          </div>
          </tr>
        </div>
        <div class="aa">
          <tr>
          <td class="col-sm-2 col-form-label">Kode Divisi</td>
          <div class="col-sm-10">
          <td><input type="text" class="form-control" value="MSD-" disabled style="width:25%;"></td>
          <td><input type="text" class="form-control" name="kode_divisi" required style="width:75%; margin-left:-75%;" maxlength="5"></td>
          </div>
          </tr>
        </div>
        <div class="aa">
          <tr>
          <div class="col-sm-10">
            <td></td>
            <td>
            <input type="submit" value="SIMPAN" class="btn btn-success" >
            <input type="reset" value="RESET" class="btn btn-warning" >
            </td>
          </div>
          </tr>
        </div>
			</table>
		</form>
        </table>
      </div>
    </div>
    </main>
  </div>
</div>
<script src="assets/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.2.1/dist/chart.umd.min.js" integrity="sha384-gdQErvCNWvHQZj6XZM0dNsAoY4v+j5P1XDpNkcM3HJG1Yx04ecqIHk7+4VBOCHOG" crossorigin="anonymous"></script><script src="dashboard.js"></script>
    </main>
  </div>
</div>
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