<!DOCTYPE html>
<html>
<head>
	<title>PRODUK TERBARU</title>
	<link rel="stylesheet" type="text/css" href="styles/style.css" />

</head>
<body>
	<header>
		<ul>
			<li><a href="HOME.php">home</a></li>
			<li><a href="join_pedagang.php">jadi seller</a></li>
		</ul>
	</header>

	<?php
include "KONEKSI.PHP";
$produk = mysqli_query($con ,"SELECT * FROM tbl_produk"); 
while ($hasil = mysqli_fetch_array($produk)) {
  ?>
<div class="box-produk">
	<img src="images/<?php echo $hasil['foto_produk']; ?>" />
	<br>
	<?php echo $hasil['nama_produk'];  ?><br>
Rp:	<?php echo $hasil['harga'];  ?> 
<div class="BELI">
<input type="submit" name="BELI" value="BELI">
</div>
</div>
<?php  }?>

</body>
</html>