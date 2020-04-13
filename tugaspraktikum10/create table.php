<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "anggik";

$connect = mysqli_connect($servername, $username, $password, $dbname);

if (!$connect) {
	die("Connection failed: ".mysqli_connect_error());
}

$sql = "CREATE TABLE data_siswa (namalengkap VARCHAR(50) NOT NULL, jk VARCHAR(1) NOT NULL, nisn VARCHAR(15) NOT NULL, nik VARCHAR(18) NOT NULL PRIMARY KEY, tempatlahir VARCHAR(20) NOT NULL, tgllahir VARCHAR(12) NOT NULL, regisakta VARCHAR(20) NOT NULL, agama VARCHAR(18) NOT NULL, kwn VARCHAR(20) NOT NULL, bk VARCHAR(20), alamat VARCHAR(50) NOT NULL, rt VARCHAR(5) NOT NULL, rw VARCHAR(5) NOT NULL, dusun varchar(30), kelurahan varchar(20) NOT NULL, kecamatan varchar(20) NOT NULL, kodepos varchar(10) NOT NULL, lintang varchar(20) NOT NULL, bujur varchar(20) NOT NULL, tempattinggal varchar(30) NOT NULL, transportasi varchar(20) NOT NULL, kks varchar(30), anak varchar(5) NOT NULL, kps varchar(1), nokps varchar(20))";

if (mysqli_query($connect, $sql)) {
	echo "Table created succesfully";
} else {
	echo "Error creating table: ".mysqli_error($connect);
}
mysqli_close($connect);
?>