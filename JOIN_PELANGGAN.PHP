<!DOCTYPE html>
<html>
<head>
	<title>jualan online</title>
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
	<h1 style=" text-align: center;">Terima kasih telah menjadi pelanggan kami</h1>
	<br>
	<h2>keuntungan berbelanja online</h2>
	<br>
	<p>1. Produk lebih lengkap dan beragam
	<p>2. Hemat waktu dan biaya
	<p>3. Lebih efesien
	<p>4. Harga lebih terjangkau
	<br>
	<br>
<h2>Biodata Pelanggan</h2>
	<br>
	
	<form action="" method="POST" enctype="multipart/form-data">
			<table>
<tr><td>Nama </td> <td> :<input type="text" name="nama" autofocus="" autocomplete="off"></td> </tr>
<tr><td>Nik </td><td> :<input type="text" name="nik" autocomplete="off" ></td> </tr>
<tr><td>Alamat </td><td> :<input type="text" name="alamat" autocomplete="off"></td> </tr>
<tr><td>Tempat, </td><td> :<input type="text" name="tempat" autocomplete="off"> </td> </tr>
<tr><td>Tanggal lahir </td><td> :<input type="date" name="ttl" autocomplete="off"> </td> </tr>
<tr><td>Agama</td><td>
<form>
	:<input list="agama" name="agama" size="10">
	<datalist id="agama">
	<option value="islam">islam</option>
	<option value="hindu">hindu</option>
	<option value="budha">budha</option>
</datalist> </td> </tr>
</form>
<tr><td>Jenis kelamin</td><td>:
	<input type="radio" name="jekel" value="laki-laki" cheked/>laki-laki
 	<input type="radio" name="jekel" value="perempuan" cheked/>perempuan</td></tr>
<tr><td></td><td>
	<br>
	<tr><td>Email </td> <td> :<input type="text" name="email" autocomplete="off"></td> </tr>
	<tr><td>password </td> <td> :<input type="password" name="password" autocomplete="off"></td> </tr>
<tr><td></td><td><br><input type="submit" name="simpan" value="simpan"></td>
</table>
<a href="LOGIN_pelanggan.PHP" style="color: #ff696e; text-decoration: underline;">masuk</a><br>

<br>
<br>
<?php 
include 'KONEKSI.PHP';
if (isset($_POST['simpan'])) {
	$nik = $_POST["nik"];
	$nama = $_POST["nama"];
	$alamat = $_POST["alamat"];
	$tl = $_POST["tempat"];
	$tgl = $_POST["ttl"];
	$agama = $_POST["agama"];
	$jekel = $_POST["jekel"];

	$sql = "INSERT INTO tbl_pelanggan (nik, nama, alamat, tempat_lahir, tgl_lahir, agama, jenis_kelamin) 
 		VALUES ('".$nik."', '".$nama."', '".$alamat."', '".$tl."', '".$tgl."', '".$agama."', '".$jekel."')";
 		if (mysqli_query($con, $sql)) {
 				echo  "SELAMAT!!! pembuatan akun penjualan online berhasil, klik masuk untuk melanjutkan toko anda";
 			
 			} else {
 				echo "error:" .$sql . "<br>" .mysqli_error($con);

 			}
mysqli_close($con);
}
 ?>

<?php 
include 'KONEKSI.PHP';
if (isset($_POST['simpan'])) {
	$email = $_POST["email"];
	$password = $_POST["password"];

	$sql = "INSERT INTO tbl_login_pembeli (username, password) 
 		VALUES ('".$email."', '".$password."')";
 		if (mysqli_query($con, $sql)) {
 				echo  "silahkan gunakan email dan password untuk masuk";
 			
 			} else {
 				echo "error:" .$sql . "<br>" .mysqli_error($con);

 			}
mysqli_close($con);
}
 ?>
 <p align="center">&copy; kelompok 5</p>
</body>
</html>