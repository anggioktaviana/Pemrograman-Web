<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "anggik";

$connect = mysqli_connect($servername, $username, $password, $dbname);

if (!$connect) {
	die("Connection failed: ".mysqli_connect_error());
}

$sql = "CREATE TABLE kontak (id INT(4) NOT NULL AUTO_INCREMENT PRIMARY KEY, nama VARCHAR(30) NOT NULL, jkel VARCHAR(10), email VARCHAR(40), alamat VARCHAR(50), kota VARCHAR(20), pesan TEXT)";

if (mysqli_query($connect, $sql)) {
	echo "Table created succesfully";
} else {
	echo "Error creating table: ".mysqli_error($connect);
}
mysqli_close($connect);
?>