<!DOCTYPE html>
<html>
<head>
	<title>upload</title>
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
<br><br>
<br>
<table>
	<tr><th>
<br>
	<h1>LOGIN</h1>
	<?php	
include "KONEKSI.PHP";
$produk = mysqli_query($con ,"SELECT * FROM tbl_produk"); 
$hasil = mysqli_fetch_array($produk)
?>	
<form><table>
		<tr><td>Email</td><td> :<input type="text" name="nama" autofocus=""></td></tr>
		<tr><td>Password </td><td>:<input type="text" name="" />	</td></tr>
</table></form>
<?php echo'<button><a href = "CHECKOUT.php?id='.$hasil["id_produk"].'" style="color:black">LOGIN</button>';?>
 	
</div>		

 </body>
</html>