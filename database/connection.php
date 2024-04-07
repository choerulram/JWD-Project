<?php
$servername = "localhost";
$database = "sipenka";
$email = "root";
$password = "";

$conn = mysqli_connect($servername, $email, $password, $database);
 
// Check connection
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}

function registrasi($data) { 
	global $conn;

	$username = strtolower(stripslashes($data["username"]));
	$password = mysqli_real_escape_string($conn, $data["password"]);
	$confirm_password = mysqli_real_escape_string($conn, $data["confirm_password"]);

    // cek username sudah ada atau belum
    $result = mysqli_query($conn, "SELECT username FROM users WHERE username = '$username'");

    if(mysqli_fetch_assoc($result)) {
        echo "<script>
                alert('Username sudah terdaftar!');
            </script>";
        return false;
    }

	// cek konfirmasi password
	if($password!==$confirm_password) {
		echo "<script>
				alert('Konfirmasi password tidak sesuai');
			</script>";
		return false;
	} 

    // enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

    // tambah user baru ke database
	mysqli_query($conn, "INSERT INTO users (username, password) VALUES ('$username', '$password')");

    return mysqli_affected_rows($conn);
}
?>