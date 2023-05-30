<!DOCTYPE html>
<html>
<head>
	<title>upload</title>
	<link rel="stylesheet" type="text/css" href="styles/cssjoin.css" />
</head>
<body>
	<header>
		<ul>
			<li><a href="HOME.php">home</a></li>
			<li><a href="join_pedagang.php">jadi seller</a></li>
		</ul>
	</header>
	<br>
<?php
include "KONEKSI.PHP";
$produk = mysqli_query($con ,"SELECT * FROM tbl_penjual");
while ($hasil = mysqli_fetch_array($produk)) {
  ?>
 <h1 style="text-align: center;"><?php echo $hasil['nama_toko']; ?></h1>
 <h3 style="text-align: center;"><?php echo $hasil['alamat_toko']; ?></h3>
<?php  }?>
<br><br>
<hr>
<br>
<table>
	<tr><th>
<a href="TOKO.PHP" style="color: black">Home | <a href="UPLOAD.php" style="color: black">Tambah Produk | <a href="LIHAT_PRODUK.PHP" style="color: black">Lihat Produk </a></a> | <a href="LIHAT_PEMBELI.PHP" style="color: black">Lihat Pembeli
</th></tr></table><br><hr>
<br>
	<h1>TAMBAH PRODUK</h1>
<form action="" method="POST" enctype="multipart/form-data">	
	<table>
		<br>
		<tr><td>Nama Produk </td> <td> :<input type="text" name="nama" autofocus=""></td> </tr>
		<tr><td>Deskripsi Produk </td> <td> :<textarea name="deskripsi"></textarea></td> </tr>
		<tr><td>pilih gambar </td><td> :<input type="file" name="gambar" /></td> </tr>
		<tr><td>Harga </td><td> :<input type="text" name="harga"></td> </tr>
		<tr><td><br><input type="submit" name="simpan" value="upload produk"></td></tr>
	</table>
	<br>
		
</form>

<?php 
include 'KONEKSI.PHP';
if (isset($_POST['simpan'])) {
	$folder = "./images/";
	$name_p = $_FILES["gambar"]["name"];	
	$sumber_p = $_FILES["gambar"]["tmp_name"];
	move_uploaded_file($sumber_p, $folder.$name_p);
	$sql = mysqli_query($con, "INSERT INTO tbl_produk VALUES (NULL, '".$_POST["nama"]."', '".$_POST["deskripsi"]."', '".$name_p."', '".$_POST["harga"]."',NULL)");
}
 ?>

 </body>
</html>