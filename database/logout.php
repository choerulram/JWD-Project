<?php

session_start();

// menghapus semua session
$_SESSION = [];
session_unset();
session_destroy();

// menghapus cookie dengan nama id dan key
setcookie('id', '', time() - 3600, '/'); // set ke waktu negatif untuk menghapus cookie
setcookie('key', '', time() - 3600, '/'); // set ke waktu negatif untuk menghapus cookie

// mengarahkan ke halaman login
header("Location: ../index.php");
exit;

?>
