<!DOCTYPE html>
<html>
<head>
	<title>tokoku</title>
		<link rel="stylesheet" type="text/css" href="styles/style_lihatproduk.css" />
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
<a href="TOKO.PHP" style="color: black">Home | <a href="UPLOAD.php" style="color: black">Tambah Produk | <a href="lIHAT_PRODUK.PHP" style="color: black">Lihat Produk </a></a> | <a href="LIHAT_PEMBELI.PHP" style="color: black">Lihat Pembeli
</th></tr></table><br><hr></a></th></tr>
<br>
<br>
<form action="" method="POST">
<input type="text" name="query" placeholder="cari nama produk" >
<input type="submit" name=" cari" value="cari">
</form>
<br>
   <th><table border="" cellpadding="5" cellspacing="0">
	<tr>
		<th>id Pesanan</th>
		<th>nama produk</th>
		<th>harga</th>
		<th>pembelian</th>
		<th>total</th>
		<th>tanggal pembelian</th>
	</tr>

<?php
error_reporting(0);
$no= 1;
$query = $_POST["query"];
if ($query != "") {
	$select = mysqli_query($con, "SELECT * FROM tbl_pembeli WHERE nama_barang LIKE '%".$query."%'"); 
}else{
	$select = mysqli_query($con, "SELECT * FROM tbl_pembeli");
}
if (mysqli_num_rows($select)) {
while ($row = mysqli_fetch_array($select)) {
?>	
	<tr>
	<td><?php echo $no++ ?></td>
	<td><?php echo $row['nama_barang'] ?></td>
	<td><?php echo $row['harga'] ?></td>
	<td><?php echo $row['pembelian'] ?></td>
	<td><?php echo $row['total'] ?></td>
	<td><?php echo $row['tgl_pembelian'] ?></td>
</tr>
<?php }}else{
	echo '<tr><td>tidak ada data</td><tr>';
} ?>

</table>
<br>
<br>
<p align="center">&copy; kelompok 5</p>