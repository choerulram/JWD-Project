<?php
// import file koneksi
session_start();
include 'connection.php';

    // cek session
    if(isset($_SESSION['login'])) {
        header("Location: ../tampilan/dashboard.php");
        exit;
    } 

    // cek tombol register apa sudah di klik
    if(isset($_POST["register"])) {

        // memanggil fungsi registrasi di koneksi.php dengan kondisi dibawah
        if(registrasi($_POST) > 0) {
            echo "<script>
                    alert('User baru berhasil ditambahkan!');
                    window.location.href = '../index.php';
                </script>";
            exit;
        } else {
            echo mysqli_error($conn);
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Registrasi</title>

    <!-- css bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        * {
            margin: none;
            padding: none;
            box-sizing: border-box;
        }
        body {
            background-color: hsl(0, 4%, 95%);
        }
        h1 {
            text-align: center;
        }
        .container {
            width: 35%;
            border-radius: 10px;
            margin-top: 60px;
        }
    </style>
</head>
<body>
    <!-- form register -->
    <form action="" method="post">
        <div class="container border p-5 bg-light rounded">
            <h1>Register</h1>
            <div class="mb-3">
                <label for="exampleInputUsername" class="form-label">Username</label>
                <input type="text" class="form-control" name="username" id="exampleInputUsername" placeholder="masukan username...">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="masukan password...">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword2" class="form-label">Confirm Password</label>
                <input type="password" class="form-control" name="confirm_password" id="exampleInputPassword2" placeholder="konfirmasi password...">
            </div>
            <button type="submit" name="register" class="btn btn-primary">Register</button>
            <div id="emailHelp" class="register form-text pt-2">Already have an account? <a href="../index.php">Sign in</a></div>
        </div>
    </form>
    <!-- end form register -->

    <!-- script bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>


<?php
// require 'connection.php';
// $username = $_POST["username"];
// $password = $_POST["password"];

// $query_sql = "INSERT INTO db_users (username, password) VALUES ('$username', '$password')";

// if (mysqli_query($conn, $query_sql)) {
//     header("location: index.php");
// }
// else{
//     echo "Pendaftaran gagal : " . mysqli_error($conn);
// }
?>