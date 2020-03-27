<!DOCTYPE html>
<html>
<head>
	<title>Koneksi Database MySQL</title>
</head>
<body>
	<h3>koneksi database berhasil</h3>
<?php
$connect=mysqli_connect("localhost","root","","uts");

if (mysqli_connect_errno()) {
	echo "Failed to connect to MySQL: ". mysqli_connect_error();
	exit();
}
?>
</body>
</html>