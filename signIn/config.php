<?php 
$host ="Localhost";
$user = "root";
$password = "";
$database = "futsal_online";

$con = mysqli_connect($host,$user,$password,$database);

// Check connection
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}

?>