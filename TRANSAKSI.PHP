<!DOCTYPE html>
<html>
<head>
	<title>transaksi</title>
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
<form action="join_pelanggan.php" method="POST">	
<?php
include "koneksi.PHP";
$produk = mysqli_query($con ,"SELECT * FROM tbl_produk where id_produk = '".$_GET["id"]."'"); 
while ($hasil = mysqli_fetch_array($produk)) {
  ?>
 
<div class="box-produk">
	<img src="images/<?php echo $hasil['foto_produk']; ?>" />
	<br><br>
	<?php echo $hasil['nama_produk']; ?><br>
Rp:	<?php echo $hasil['harga']; ?> <br><br>
<div class="detail">
<input type="submit" name="detail" value="BELI" >
</div>
</div>
<?php  }?>
</form>
</body>
</html>
