<?php
$servername = "localhost";
$username ="root";
$password = "";
$dbname = "dbpenjualan";

$con = mysqli_connect($servername, $username, $password, $dbname);
if (!$con) {
	die("conection failed :" . mysqli_connect_error());
}
//echo "koneksi berhasil";
?>