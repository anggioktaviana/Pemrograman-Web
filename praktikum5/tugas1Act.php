<?php
include 'tugas1.php';
echo "<center>Nama : ".$_POST['nama']."</center<br>";
echo "<center>Email : ".$_POST['email']."</center><br>";
echo "<center>Login pada: ".$tanggal." Pukul: ".$waktu."</center><br>";

if (empty($_POST['nama'])) {
	header("Location:datakosong.php");
} 
if (empty($_POST['email'])) {
	header("Location: datakosong.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="tugas3.php">
<input type="submit" name="lanjut" value="Lanjutkan">
</body>
</html>