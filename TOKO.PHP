<!DOCTYPE html>
<html>
<head>
	<title>tokoku</title>
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
<a href="TOKO.PHP" style="color: black">Home | <a href="UPLOAD.php" style="color: black">Tambah Produk | <a href="LIHAT_PRODUK.PHP" style="color: black">Lihat Produk </a></a> | <a href="LIHAT_PEMBELI.PHP" style="color: black"> lihat pembeli 
</th></tr></table><br><hr>
<?php
include "KONEKSI.PHP";
$produk = mysqli_query($con ,"SELECT * FROM tbl_produk"); 
while ($hasil = mysqli_fetch_array($produk)) {
  ?>
<div class="box-produk">
	<img src="images/<?php echo $hasil['foto_produk']; ?>" />
	<br><br>
	<?php echo $hasil['nama_produk'];  ?><br>
Rp:	<?php echo $hasil['harga'];  ?> <br><br>


</div>

<?php  }?>

</body>
</html>