<?php 
include '../database.php';
$dbname = new database();
$conn = $dbname->getConnection();

if (isset($_POST['submit'])) {
    $id = $_POST['id'];
	$nama = $_POST['nama'];
	$password = $_POST['password'];
    $email = $_POST['email'];
	$no_telp = $_POST['no_telp'];

	$sql = "UPDATE User SET id='$id', nama='$nama', password='$password', email='$email', no_telp='$no_telp' WHERE id='$id'";
	$query = mysqli_query($conn, $sql);

	if ($query) {
		header('location: ../user.php');
	} else {
		die("Proses Edit Gagal..." . mysqli_error($conn));
	}
} else {
	die("Akses Dilarang...");
}
?>