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
	<h1>AYO BERGABUNG SEKARANG JUGA!!!</h1>
	<h2>keuntungan berjualan online </h2>
	<p>1. lebih efisien</p>
	<p>2. lebih efisien</p>
	<p>3. lebih efisien</p>
	<p>4. lebih efisien</p>
	<br>
	<br>

<h2>Biodata Pemilik Toko</h2>
	<br>

	
	<form action="code_save.php" method="POST">
			<table>
<tr><td>Nama </td> <td> :<input type="text" name="nama" autofocus=""></td> </tr>
<tr><td>Nik </td><td> :<input type="text" name="nik"></td> </tr>
<tr><td>Alamat </td><td> :<input type="text" name="alamat"></td> </tr>
<tr><td>Tempat, </td><td> :<input type="text" name="tempat"> </td> </tr>
<tr><td>Tanggal lahir </td><td> :<input type="date" name="ttl"> </td> </tr>
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
	<tr><td>Nama Toko </td> <td> :<input type="text" name="nama_toko"></td> </tr>
	<tr><td>Alamat Toko </td> <td> :<input type="text" name="alamat_toko"></td>
<tr><td></td><td><input type="submit" name="submit"></td>
</table>


</body>
</html>