<?php 
 
$koneksi = mysqli_connect("localhost","root","11sija2","Kelompok_1");
 
// Check connection
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}
 
?>