<!DOCTYPE html>
<html>
<head>
	<title>upload</title>
	<link rel="stylesheet" type="text/css" href="styles/cssjoin.css" />
</head>
<body>
	<h1>TAMBAH PRODUK</h1>
<form action="" method="POST" enctype="multipart/form-data">	
	<table>
		<br>
		<tr><td>Nama Produk </td> <td> :<input type="text" name="nama" autofocus=""></td> </tr>
		<tr><td>pilih gambar </td><td> :<input type="file" name="gambar" /></td> </tr>
		<tr><td>Harga </td><td> :<input type="text" name="harga"></td> </tr>
	</table>
	<br>
		<input type="submit" name="simpan" value="upload produk">
</form>

<?php 
include 'KONEKSI.PHP';
if (isset($_POST['simpan'])) {
	$folder = "./images/";
	$name_p = $_FILES["gambar"]["name"];	
	$sumber_p = $_FILES["gambar"]["tmp_name"];
	move_uploaded_file($sumber_p, $folder.$name_p);
	$sql = mysqli_query($con, "INSERT INTO tbl_produk VALUES (NULL, '".$_POST["nama"]."', '".$name_p."', '".$_POST["harga"]."',NULL)");

}
 ?>
 </body>
</html>
