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
<form action="index.php" method="POST">
<?php
include "KONEKSI.PHP";
$produk = mysqli_query($con ,"SELECT * FROM tbl_produk where id_produk = '".$_GET["id"]."'"); 
while ($hasil = mysqli_fetch_array($produk)) {
  ?>
	
<div class="box-produk">
	<img src="images/<?php echo $hasil['foto_produk']; ?>" /> 
</div>

<div class="perhitungan">
<form><table></td></tr>

<tr><td>Nama Produk</td> <td>: <strong><?php echo $hasil['nama_produk']; ?></strong><br></td> </tr>
<input type="hidden" name="nama" value="<?php echo $hasil['nama_produk']; ?>" ></td>
<tr><td>Harga Rp</td> <td>: <input type="text" value="<?php echo $hasil['harga']; ?>" disabled id="bil1"> <br></td> </tr>
<input type="hidden" name="harga" value="<?php echo $hasil['harga']; ?>" ></td>
<tr><td>pembelian</td> <td>: <input type="number" name="number" id="bil2"><br></td> </tr>
<tr><td>Total</td> <td>: <input type="text" name="total" id="hasil"  readonly="" ></a><br><br></td> </tr>
<tr><td><input type="submit" name="selesai" value="checkout"></td> </tr>
</table>
</div>
<?php  }?>


<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script type="text/javascript">
	$(".perhitungan").keyup(function() {
		var bil1 = parseInt($("#bil1").val())
		var bil2 = parseInt($("#bil2").val())

		var hasil = bil1 * bil2;
		$("#hasil").attr("value",hasil)
	});
</script>
</form>
</body>
</html>
