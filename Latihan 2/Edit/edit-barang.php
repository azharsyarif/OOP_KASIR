<?php

include '../database.php';
$dbname = new database();
$conn = $dbname->getConnection();

// Kalau tidak ada id di query string
if (!isset($_GET['id'])) {
    header('Location: ../barang.php');
}

// Ambil id dari query string
$id = $_GET['id'];

// Buat query untuk ambil data dari database
$sql = "SELECT * FROM Barang WHERE id=$id";
$query = mysqli_query($conn, $sql);
$barang = mysqli_fetch_assoc($query);

// Jika data yang di-edit tidak ditemukan
if (mysqli_num_rows($query) < 1) {
    die("Data tidak ditemukan...");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../Style/style-edit-form-fhotel.css">
    <title>Form Edit Barang</title>
</head>
<body>
<div class="container">
        <div class="form-edit-barang">
    <header>
        <h3>Form Edit Barang</h3>
    </header>

    <form action="proses-edit-barang.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $barang['id']?>">
        <p>
            <label for="nama">Nama : </label>
            <input type="text" name="nama" value="<?php echo $barang['nama']?>">
        </p>
        <p>
            <label for="jumlah">Jumlah : </label>
            <input type="text" name="jumlah" value="<?php echo $barang['jumlah']?>">
        </p>
        <p>
            <label for="harga">Harga : </label>
            <input type="text" name="harga" value="<?php echo $barang['harga']?>">
        </p>
        <p>
            <input type="submit" value="Simpan" name="submit">
        </p>
    </form>

        </div>
</div>
</body>
</html>