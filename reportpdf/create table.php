<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_siswa";

$koneksi = mysqli_connect($servername, $username, $password, $dbname);

if (!$koneksi) {
	die("Connection failed: ".mysqli_connect_error());
}

$sql = "CREATE TABLE `tb_siswa` (
  `id_siswa` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `kelas` varchar(100) NOT NULL,
  `alamat` varchar(255) NOT NULL)";

if (mysqli_query($koneksi, $sql)) {
	echo "Table created succesfully";
} else {
	echo "Error creating table: ".mysqli_error($koneksi);
}
mysqli_close($koneksi);
?>