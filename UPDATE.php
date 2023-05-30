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
?>
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
<br>
<table>
	<tr><th>
<a href="TOKO.PHP" style="color: black">Home |<a href="UPLOAD.php" style="color: black">Tambah Produk | <a href="Lihat_produk.php" style="color: black">Lihat Produk </a></a>
</th></tr></table><br><hr>
<br>
<br>
<html>
<body>
<title>update data</title>
<h2>UPDATE DATA</h2>
	<?php
	$ide=$_GET['id'];
	$sql = "SELECT * FROM tbl_produk where id_produk='$ide'";
	$result = $conn->query($sql);
	$row = $result->fetch_assoc(); 
	?>
	<form action="" method="POST" enctype="multipart/form-data">
		<table>
			<tr>
				<td>Id produk</td><td>:</td><td><input type="text" name="idx" value="<?php echo $row['id_produk']; ?>" disabled>
				<input type="hidden" name="idx" value="<?php echo $row['id_produk']; ?>" ></td>
			</tr>
			<tr>
				<td>Nama Produk</td><td>:</td><td><input type="text" name="nama" value="<?php echo $row['nama_produk']; ?>"></td>
			</tr>
			<tr>
				<td>Nama file</td><td>:</td><td><input type="text" name="txtfile" value="<?php echo $row['foto_produk']; ?>"disabled></td>
			</tr>
			<tr>
				<td>File</td><td>:</td><td><input type="file" name="gambar"></td>
			</tr>
			<tr>
				<td>Harga</td><td>:</td><td><input type="text" name="harga" value="<?php echo $row['harga']; ?>"></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td><br><input type="submit" name="update" value="Update"></td>
			</tr>

<?php 
include 'KONEKSI.PHP';
if (isset($_POST['update'])) {
	
	$nama = $_POST["nama"];
	$harga = $_POST["harga"];
	$name_p = $_FILES["gambar"]["name"];	
	$sumber_p = $_FILES["gambar"]["tmp_name"];
	$folder = "./images/";

	if ($name_p != '') {
	move_uploaded_file($sumber_p, $folder.$name_p);
	$sql = mysqli_query($con, "UPDATE tbl_produk SET nama_produk = '".$nama."', foto_produk = '".$name_p."', harga = '".$harga."', tgl_upload = NULL  WHERE id_produk = '".$_GET['id']."'");
}else{
	$sql = mysqli_query($con, "UPDATE tbl_produk SET nama_produk = '".$nama."', harga = '".$harga."', tgl_upload = NULL  WHERE id_produk = '".$_GET['id']."'"); 
}
}
 ?>


</body>
</html>
