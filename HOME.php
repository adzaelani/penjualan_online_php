<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
	<link rel="stylesheet" type="text/css" href="styles/style.css" />

</head>
<body>
	<header>
		<ul>
			<li><a href="HOME.php">home</a></li>
			<li><a href="join_pedagang.php">jadi seller</a></li>
		</ul>
	</header>
		<div class="slideshow-container">
<div class="mySlides fade">
  <img src="images/img slider/img1.jpg" style="width:50%;height: 350px;" >
</div>
<div class="mySlides fade">
  <img src="images/img slider/img.jpg" style="width:50%;height: 350px;">
</div>
<div class="mySlides fade">
  <img src="images/img slider/img2.jpg" style="width:100%;height: 350px;">
</div>
</div>
<br>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>
<script src="styles/gaya.js"></script>

<a href="PRODUK_TERBARU.PHP" style="color: black">produk terbaru >></a>
<br>
<?php
include "KONEKSI.PHP";
$produk = mysqli_query($con ,"SELECT * FROM tbl_produk ORDER BY id_produk DESC"); 
while ($hasil = mysqli_fetch_array($produk)) {
  ?>
<form action="TRANSAKSI.PHP">
<div class="box-produk">
	<img src="images/<?php echo $hasil['foto_produk']; ?>" name=""/>
	<br><br>
	<?php echo $hasil['nama_produk'];  ?><br>
Rp:	<?php echo $hasil['harga'];  ?>
<br><br>
<?php echo'<button><a href = "TRANSAKSI.php?id='.$hasil["id_produk"].'" style="color:black">BELI</button>';?>
</div>
<?php  }?>


</body>
</html>
