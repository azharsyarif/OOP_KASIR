<?php 
include '../database.php';
$dbname = new database();
$conn = $dbname->getConnection();

if (isset($_POST['submit'])) {
    $id = $_POST['id'];
	$nama = $_POST['nama'];
	$jumlah = $_POST['jumlah'];
    $harga = $_POST['harga'];

	$sql = "UPDATE Barang SET id='$id', nama='$nama', jumlah='$jumlah', harga='$harga' WHERE id='$id'";
	$query = mysqli_query($conn, $sql);

	if ($query) {
		header('location: ../barang.php');
	} else {
		die("Proses Edit Gagal..." . mysqli_error($conn));
	}
} else {
	die("Akses Dilarang...");
}
?>