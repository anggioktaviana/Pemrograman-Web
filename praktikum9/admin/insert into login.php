<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "anggik";

$connect = mysql_connect($servername, $username, $password, $dbname);

if (!$connect) {
	die("Connection failed: ".mysql_connect_error());
}

$sql = "INSERT INTO login (user, password)
VALUES ('admin', 'ayamgoreng')";

if (mysql_query($connect, $sql)) {
	echo "New record created succesfully";
} else {
	echo "Error: ".$sql."<br>".mysql_error($connect);
}

mysql_close($connect);
?>