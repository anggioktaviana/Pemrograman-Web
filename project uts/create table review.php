<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "uts";

$connect = mysqli_connect($servername, $username, $password, $dbname);

if (!$connect) {
	die("Connection failed: ".mysqli_connect_error());
}

$sql = "CREATE TABLE resensi_buku (NO INT(200) UNSIGNED AUTO_INCREMENT PRIMARY KEY, NAMA VARCHAR(50) NOT NULL, JUDUL VARCHAR(150) NOT NULL, PENULIS VARCHAR(50) NOT NULL, PENERBIT VARCHAR(50) NOT NULL,  TAHUN VARCHAR(4) NOT NULL, JUMLAH_HAL VARCHAR(1000) NOT NULL, ISI_RESENSI TEXT NOT NULL, KELEBIHAN TEXT, KEKURANGAN TEXT)";

if (mysqli_query($connect, $sql)) {
	echo "Table created succesfully";
} else {
	echo "Error creating table: ".mysqli_error($connect);
}
mysqli_close($connect);
?>