<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "uts";

$connect = mysqli_connect($servername, $username, $password, $dbname);

if (!$connect) {
	die("Connection failed: ".mysqli_connect_error());
}

$sql = "CREATE TABLE jual_buku (NO INT(200) UNSIGNED AUTO_INCREMENT PRIMARY KEY, NAMA VARCHAR(50) NOT NULL, DOMISILI VARCHAR(50), JUDUL VARCHAR(150) NOT NULL, PENULIS VARCHAR(50) NOT NULL, PENERBIT VARCHAR(50) NOT NULL,  TAHUN VARCHAR(4) NOT NULL, JUMLAH_HAL VARCHAR(1000) NOT NULL, HARGA VARCHAR(50), NO_HP VARCHAR(13) NOT NULL, KONDISI_BUKU TEXT)";

if (mysqli_query($connect, $sql)) {
	echo "Table created succesfully";
} else {
	echo "Error creating table: ".mysqli_error($connect);
}
mysqli_close($connect);
?>