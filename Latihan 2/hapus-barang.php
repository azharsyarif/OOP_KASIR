<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

include ("database.php");
$dbname = new database();
$conn = $dbname->getConnection();

if (isset($_GET['id'])) {
    // Ambil ID dari query string
    $id = $_GET['id'];
// Menghapus data dari table User
$sql = "DELETE FROM Barang WHERE id='$id'";

if ($conn->query($sql) === TRUE) {
    echo "Data Barang berhasil dihapus";
    ?>
    <br>
    <a href="barang.php">Back</a>
<?php
} else {
    echo "Gagal dalam menghapus data barang : " . $conn->error;
}
} else {
    die("Akses dilarang...");
}

?>
</body>
</html>
