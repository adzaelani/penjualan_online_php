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
	$id = $_GET['id'];
	$sql = "DELETE from tbl_produk where id_produk=$id";

if ($conn->query($sql) === TRUE) {
 echo "Data berhasil di hapus";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
<br>
<a href="lihat_produk.php">lihat data</a>