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
<a href="TOKO.PHP" style="color: black">Home | <a href="UPLOAD.php" style="color: black">Tambah Produk | <a href="" style="color: black">Lihat Produk </a></a> | <a href="LIHAT_PEMBELI.PHP" style="color: black">Lihat Pembeli
</th></tr></table><br><hr></a></th></tr>
<br>
<br>
<br>
<br>
   <th><table border="" cellpadding="5" cellspacing="0">
	<tr>
		<th>id produk</th>
		<th>nama produk</th>
		<th>deskripsi produk</th>
		<th>file produk</th>
		<th>harga</th>
		<th>tanggal upload</th>
		<th>opsi</th>
	</tr>

<?php 

 if(isset($_POST["cari"])){
	$search = $_POST['keyword'];
	$query = "SELECT * FROM tbl_produk WHERE nama_produk LIKE '%$search%' ORDER BY id ASC";
	} else {
		$query = "SELECT * FROM tbl_produk ORDER BY id ASC";
    }
$sql = "SELECT * FROM tbl_produk";
$result = $con->query($sql);
while ($row = $result->fetch_assoc()) {

	echo '<tr>
	<td>'.$row["id_produk"].'</td>
	<td>'.$row["nama_produk"].'</td>
	<td>'.$row["deskripsi_produk"].'</td>
	<td>'.$row["foto_produk"].'</td>
	<td>'.$row["harga"].'</td>
	<td>'.$row["tgl_upload"].'</td>
	<td><button><a href="javascript:hapusdata('.$row["id_produk"].')" style="color:black">hapus data</a></button> | <button><a href = "update.php?id='.$row["id_produk"].'" style="color:black">update data</button></td>
</tr>';

}
  ?>
</table>

<script language="javascript" type="text/javascript">
	function hapusdata(id) {
		if (confirm("apakaha anda yakin ingin menghapus data")) {
			window.location.href = 'delete.php?id=' + id;
		}
	}
</script>

<br>
<br>
<p align="center">&copy; kelompok 5</p>