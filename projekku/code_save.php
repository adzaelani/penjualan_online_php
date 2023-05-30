<?php
include "KONEKSI.php";

$nik = $_POST["nik"];
$nama = $_POST["nama"];
$alamat = $_POST["alamat"];
$tl = $_POST["tempat"];
$tgl = $_POST["ttl"];
$agama = $_POST["agama"];
$jekel = $_POST["jekel"];
$nama_toko = $_POST["nama_toko"];
$alamat_toko = $_POST["alamat_toko"];

$sql = "INSERT INTO tbl_penjual (id_idtoko, nama, alamat, tempat_lahir, tanggal_lahir, agama, jenis_kelamin, nama_toko, alamat_toko) 
 		VALUES ('$nik', '$nama', '$alamat', '$tl', '$tgl', '$agama','$jekel', '$nama_toko', '$alamat_toko')";

//$hasil=mysqli_query($con, $sql);

 			if (mysqli_query($con, $sql)) {
 				echo "new records succesfully";
 			
 			} else {
 				echo "error:" .$sql . "<br>" .mysqli_error($con);

 			}
mysqli_close($con);


?>