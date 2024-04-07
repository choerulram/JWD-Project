<?php
    session_start();
    include 'database/connection.php';
    
    // cek cookie
    if(isset($_COOKIE['id']) && isset($_COOKIE['key'])) {
        $id = $_COOKIE['id'];
        $key = $_COOKIE['key'];

        // ambil username berdasarkan id
        $result = mysqli_query($conn, "SELECT username FROM users WHERE id = $id");
        $row = mysqli_fetch_assoc($result);

        // cek cookie dan username
        if($key === hash('sha256', $row['username'])) {
            $_SESSION['login'] = true;
        }
    }
    
    // cek session
    if(isset($_SESSION['login'])) {
        header("Location: tampilan/dashboard.php");
        exit;
    } 

    if(isset($_POST["login"])) {
        $username = $_POST["username"];
        $password = $_POST["password"];

        $result = mysqli_query($conn, "SELECT * FROM users WHERE username = '$username'");

        // cek username
        if(mysqli_num_rows($result) === 1) {
            
            // cek password
            $row = mysqli_fetch_assoc($result);
            if(password_verify($password, $row["password"])) {
                // set session
                $_SESSION["login"] = true;

                // cek remember me
                if(isset($_POST['remember'])) {
                    // buat cookie
                    setcookie('id', $row['id'], time() + 60, '/');
                    setcookie('key', hash('sha256', $row['username']), time() + 60, '/');
                }
                
                // diarahkan ke index.php
                header("Location: tampilan/dashboard.php");
                exit;
            }
        }
        // jika terjadi kesalahan pada proses login
        $error = true;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>

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
        .btn-primary a {
            color: white;
            text-decoration: none;
            width: 100px;
        }
    </style>
</head>
<body>
    <!-- form login -->
    <form action="" method="post">
        <div class="container border p-5 bg-light rounded">
            <h1>Login</h1>
        
            <!-- cek username/password jika kondisi salah -->
            <?php if(isset($error)) : ?>
                <p style="color: red; font-style: italic;">Username atau password yang anda masukkan salah!</p>
            <?php endif; ?>

            <div class="mb-3">
                <label for="exampleInputUsername" class="form-label">Username</label>
                <input type="text" class="form-control" name="username" id="exampleInputUsername">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" name="password" id="exampleInputPassword1">
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" name="remember" id="exampleRemember">
                <label class="form-check-label" for="exampleRemember">Remember me</label>
            </div>
            <button type="submit" name="login" class="btn btn-primary w-100 ">Login</button>
            <div id="emailHelp" class="register form-text pt-2">Don't have an account yet? <a href="database/register.php">Sign up</a></div>
        </div>
    </form>
    <!-- emf form login -->

    <!-- script bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>


<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <style>
        *{
            margin: 0;
            padding: 0;
        }
        .container{
            border: 1px solid #0D6EFD;
            width: 40%;
            border-radius: 12px;
            margin-top: 50px;
            padding: 2%;
            position: relative;
        }
        .nav-link{
            color: white;
        }
        .nav-item{
            padding-right:5px ;
        }
    </style>
    
</head>
<body> -->

    <!--form-->
    <!-- <div class="container">
    <form action="login.php" method="post">
        <div class="row mb-3">
            <h1 class="col-sm-2 col-form-label" style="margin:auto;">LOGIN</h1>
          </div>
        <div class="row mb-3">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Username</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="inputEmail3" name="username" required>
            </div>
          </div>
        <div class="row mb-3">
          <label for="inputEmail3" class="col-sm-2 col-form-label">password</label>
          <div class="col-sm-10">
            <input type="password" class="form-control" id="inputEmail3" name="password" required>
          </div>
        </div>
        <div class="row mb-3">
          <label for="inputEmail3" class="col-sm-2 col-form-label"><a href="signup.php">Buat akun</a></label>
          <label for="inputEmail3" class="col-sm-5 col-form-label"><a href="logjs.html" style="margin-left:-25px;">Login dengan JS</a></label>
        </div>
        <button type="submit" class="btn btn-primary">Sign In</button>
        <button type="reset" class="btn btn-outline-primary">Reset</button>
      </form>
    </div>
</body>
</html> -->