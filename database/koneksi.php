<?php 
$koneksi = mysqli_connect("localhost","root","","sipenka");
 
// Check connection
if (mysqli_connect_error()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}
 
?>