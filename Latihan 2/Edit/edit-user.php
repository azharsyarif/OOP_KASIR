<?php

include '../database.php';
$dbname = new database();
$conn = $dbname->getConnection();

// Kalau tidak ada id di query string
if (!isset($_GET['id'])) {
    header('Location: ../user.php');
}

// Ambil id dari query string
$id = $_GET['id'];

// Buat query untuk ambil data dari database
$sql = "SELECT * FROM User WHERE id=$id";
$query = mysqli_query($conn, $sql);
$user = mysqli_fetch_assoc($query);

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
    <title>Form Edit User</title>
</head>
<body>
<div class="container">
        <div class="form-edit-user">
    <header>
        <h3>Form Edit User</h3>
    </header>

    <form action="proses-edit-user.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $user['id']?>">
        <p>
            <label for="nama">Nama : </label>
            <input type="text" name="nama" value="<?php echo $user['nama']?>">
        </p>
        <p>
            <label for="password">Password : </label>
            <input type="text" name="password" value="<?php echo $user['password']?>">
        </p>
        <p>
            <label for="email">Email : </label>
            <input type="text" name="email" value="<?php echo $user['email']?>">
        </p>
        <p>
            <label for="no_telp">No. Telp : </label>
            <input type="text" name="no_telp" value="<?php echo $user['no_telp']?>">
        </p>
        <p>
            <input type="submit" value="Simpan" name="submit">
        </p>
    </form>

        </div>
</div>
</body>
</html>