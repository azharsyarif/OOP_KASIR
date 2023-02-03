<?php
class User{
    private $conn;

    public function __construct($conn){
        $this->conn = $conn;
    }

    public function menampilkan_data_user(){
        $hasil = array();
        $data = $this->conn->query("SELECT * FROM User");
        while($d = $data->fetch_array()){
        $hasil[] = $d;
        }
        return $hasil;
    }
}

include ("database.php");
$dbname = new database();
$conn = $dbname->getConnection();
$user = new User($conn);
?>
<h3>Data User</h3>

<table border="1">
	<tr>
		<th>No</th>
		<th>Nama</th>
		<th>Password</th>
        <th>Email</th>
		<th>No. Telp</th>
		<th>Opsi</th>
	</tr>
	<?php
	foreach($user->menampilkan_data_user() as $a){
	?>
	<tr>
		<td><?php echo $a['id']; ?></td>
		<td><?php echo $a['nama']; ?></td>
        <td><?php echo $a['password']; ?></td>
		<td><?php echo $a['email']; ?></td>
        <td><?php echo $a['no_telp']; ?></td>
		<td>
			<a href="Edit/edit-user.php?id=<?php echo $a['id'];?>">Edit</a>
			<a href="hapus.php?id=<?php echo $a['id'];?>">Hapus</a>			
		</td>
	</tr>
	<?php 
	}
	?>