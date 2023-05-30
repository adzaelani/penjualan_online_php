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
<?php  }?>
<br><br>
<hr>
<br><table>
	<tr><th>
	
<a href="UPLOAD.php" style="color: black">Tambah produk |</a>
</th></tr></table><br><hr>

	
</body>
</html>