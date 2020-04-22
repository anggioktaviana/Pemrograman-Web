<?php
$servername = "localhost";
$username = "root";
$password = "";

$koneksi = mysqli_connect($servername, $username, $password);

if (!$koneksi) {
	die("Connection failed: ".mysqli_connect_error());
}

$sql = "CREATE DATABASE db_siswa";
if (mysqli_query($koneksi, $sql)) {
	echo "Database created succesfully";
} else {
	echo "Error creating database: ".mysqli_error($koneksi);
}

mysqli_close($koneksi);
?>