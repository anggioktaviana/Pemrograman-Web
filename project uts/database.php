<?php
$servername = "localhost";
$username = "root";
$password = "";

$connect = mysqli_connect($servername, $username, $password);

if (!$connect) {
	die("Connection failed: ".mysqli_connect_error());
}

$sql = "CREATE DATABASE uts";
if (mysqli_query($connect, $sql)) {
	echo "Database created succesfully";
} else {
	echo "Error creating database: ".mysqli_error($connect);
}

mysqli_close($connect);
?>