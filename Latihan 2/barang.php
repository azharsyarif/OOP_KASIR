<?php
class Barang{
    private $conn;

    public function __construct($conn){
        $this->conn = $conn;
    }

    public function menampilkan_data_barang(){
        $hasil = array();
        $data = $this->conn->query("SELECT * FROM Barang");
        while($d = $data->fetch_array()){
        $hasil[] = $d;
        }
        return $hasil;
    }
}

include ("database.php");
$dbname = new database();
$conn = $dbname->getConnection();
$barang = new Barang($conn);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Data Barang</title>
</head>
<body>
<h3>Data Barang</h3>

<table border="1">
	<tr>
		<th>No</th>
		<th>Nama</th>
		<th>Jumlah</th>
        <th>Harga</th>
		<th>Opsi</th>
	</tr>
	<?php
	foreach($barang->menampilkan_data_barang() as $b){
	?>
	<tr>
		<td><?php echo $b['id']; ?></td>
		<td><?php echo $b['nama']; ?></td>
        <td><?php echo $b['jumlah']; ?></td>
		<td><?php echo $b['harga']; ?></td>
		<td>
		<a href="Edit/edit-barang.php?id=<?php echo $b['id'];?>">Edit</a>
			<a href="hapus-barang.php?id=<?php echo $b['id']; ?>">Hapus</a>			
		</td>
	</tr>
	<?php 
	}
	?>
</body>
</html>


