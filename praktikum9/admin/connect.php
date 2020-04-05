<!DOCTYPE html>
<html>
<head>
	<title>Koneksi Database MySQL</title>
</head>
<body>

<?php
$host="localhost";
$username="root";
$password="";

$connect=mysqli_connect("localhost","root","","anggik");

if (mysqli_connect_errno()) {
	echo "Failed to connect to MySQL: ". mysqli_connect_error();
	exit();
}
?>
</body>
</html>