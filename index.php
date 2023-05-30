<?php
include "KONEKSI.php";

$nama = $_POST["nama"];
$harga = $_POST["harga"];
$number = $_POST["number"];
$total = $_POST["total"];

$sql = "INSERT INTO tbl_pembeli (id_pesanan, nama_barang, harga, pembelian, total, tgl_pembelian) 
 		VALUES (NULL, '$nama',  '$harga', '$number', '$total', NULL)";

//$hasil=mysqli_query($con, $sql);

 			if (mysqli_query($con, $sql)) {
 				echo "new records succesfully";
 			
 			} else {
 				echo "error:" .$sql . "<br>" .mysqli_error($con);

 			}
mysqli_close($con);


?>