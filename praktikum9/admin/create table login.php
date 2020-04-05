<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "anggik";

$connect = mysql_connect($servername, $username, $password, $dbname);

if (!$connect) {
	die("Connection failed: ".mysql_connect_error());
}

$sql = "CREATE TABLE login (user VARCHAR(30) NOT NULL, password VARCHAR(20) NOT NULL)";

if (mysql_query($connect, $sql)) {
	echo "Table created succesfully";
} else {
	echo "Error creating table: ".mysql_error($connect);
}

mysql_close($connect);
?>