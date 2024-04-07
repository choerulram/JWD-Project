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
    <h2 class="mb-4"><em>Edit Data Karyawan</em></h2>

<!--Edit data mulai disini-->

<main>
      <div class="table-responsive small">
        <table class="table table-striped table-sm">
          <?php
	include '../database/koneksi.php';
  $nik = $_GET['nik'];
  $data = mysqli_query($koneksi,"select * from karyawan where nik='$nik'");
  while($d = mysqli_fetch_array($data)){
		?>
		<form method="post" action="../sistem/update_kar.php">
			<table>
        <div class="aa">
          <tr>
          <td class="col-sm-2 col-form-label">Nama</td>
          <div class="col-sm-10">
          <input type="hidden" name="nik" value="<?php echo $d['nik']; ?>">
          <td><input type="text" class="form-control" name="nama" value="<?php echo $d['nama']; ?>" ></td>
          </div>
          </tr>
        </div>
        <div class="aa">
          <tr>
          <td class="col-sm-2 col-form-label">NIK</td>
          <div class="col-sm-10">
          <td><input type="text" class="form-control" name="nik" value="<?php echo $d['nik']; ?>" disabled></td>
          </div>
          </tr>
        </div>
        <div class="aa">
          <tr>
            <td class="col-sm-2 col-form-label">Jenis Kelamin</td>
            <div class="col-sm-10">
              <td>
                <input type="radio" name="jenis_kelamin" id="laki-laki" value="Laki-laki" <?php if($d['jenis_kelamin'] == "Laki-laki") echo "checked"; ?> required> 
                <label for="laki-laki">Laki-laki</label>
                                
                <input type="radio" name="jenis_kelamin" id="perempuan" value="Perempuan" <?php if($d['jenis_kelamin'] == "Perempuan") echo "checked"; ?> required> 
                <label for="perempuan">Perempuan</label>
              </td>
            </div>
          </tr>
        </div>
        <div class="aa">
          <tr>
          <td class="col-sm-2 col-form-label">Alamat</td>
          <div class="col-sm-10">
          <td><input type="text" class="form-control" name="alamat" value="<?php echo $d['alamat']; ?>"></td>
          </div>
          </tr>
        </div>
        <div class="aa">
                  <tr>
                    <td class="col-sm-2 col-form-label">Level</td>
                    <td>
                      <select name="level" class="form-select" aria-label="Default select example" required>
                        <option disabled>Level</option>
                        <option value="Training" <?php if ($d['level'] == "Training") echo "selected"; ?>>Training</option>
                        <option value="Staf" <?php if ($d['level'] == "Staf") echo "selected"; ?>>Staff</option>
                        <option value="Admin" <?php if ($d['level'] == "Admin") echo "selected"; ?>>Admin</option>
                        <option value="Manager" <?php if ($d['level'] == "Manager") echo "selected"; ?>>Manager</option>
                      </select>
                    </td>
                  </tr>
                </div>
                <div class="aa">
                  <tr>
                    <td class="col-sm-2 col-form-label">Divisi</td>
                    <td>
                      <select name="divisi" class="form-select form-control" aria-label="Default select example" required>
                        <option selected disabled>Divisi</option>

                        <!-- Mengambil data divisi dari tabel "divisi" -->
                        <?php
                          $query = mysqli_query($koneksi, "SELECT * FROM divisi") or die(mysqli_error($koneksi));
                          while ($dataDivisi = mysqli_fetch_array($query)) {
                            // Memeriksa apakah data divisi pada karyawan cocok dengan data divisi pada tabel "divisi"
                            $selected = ($d['divisi'] == $dataDivisi['nama_divisi']) ? "selected" : "";
                            echo "<option value='$dataDivisi[nama_divisi]' $selected>$dataDivisi[nama_divisi]</option>";
                          }
                        ?>
                      </select>
                    </td>
                  </tr>
                </div>
        <div class="aa">
          <tr>
          <td class="col-sm-2 col-form-label">Gaji</td>
          <div class="col-sm-10">
          <td><input type="text" class="form-control" name="gaji" value="<?php echo $d['gaji']; ?>"></td>
          </div>
          </tr>
        </div>
        <div class="aa">
          <tr>
          <div class="col-sm-10">
            <td></td>
            <td><input type="submit" value="SIMPAN" class="btn btn-warning" ></td>
          </div>
          </tr>
        </div>
			</table>
		</form>
		<?php 
	}
	?>
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