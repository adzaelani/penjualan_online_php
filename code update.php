<!DOCTYPE html>
<html>
<head>
	<title>update data</title>
</head>
<body>


</body>
</html>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbpenjualan";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
	$idx = $_GET['idx'];
	$name = $_GET['nama'];
	$file = $_GET['gambar'];
	$harga = $_GET['harga'];
	$folder = "./images/";
	$name_p = $_GET["gambar"]["name"];	
	$sumber_p = $_GET["gambar"]["tmp_name"];
	move_uploaded_file($sumber_p, $folder.$name_p);

	$sql = "UPDATE tbl_produk set nama_produk='$name', foto_produk='$name_p', harga='$harga', tgl_upload=NULL where id_produk=$idx ";

if ($conn->query($sql) === TRUE) {
 echo "data berhasil diupdate";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
<br>
<a href="tabel.php">lihat data</a>