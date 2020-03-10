<?php
  date_default_timezone_set('Asia/Jakarta');
  $tanggal=date("l, d M Y");
  $waktu=date("h:i:s");

echo "<br><center>Data dimasukkan pada: ".$tanggal." Pukul: ".$waktu."</center><br>";

if (empty($_POST['nama'])){
	header("Location:datakosong2.php");
}
if (empty($_POST['npm'])){
	header("Location:datakosong2.php");
}
if (empty($_POST['jk'])){
	header("Location:datakosong2.php");
}
if (empty($_POST['Agama'])){
	header("Location:datakosong2.php");
}
if (empty($_POST['tempatlahir'])){
	header("Location:datakosong2.php");
}
if (empty($_POST['Tanggal'])){
	header("Location:datakosong2.php");
}
if (empty($_POST['Bulan'])){
	header("Location:datakosong2.php");
}
if (empty($_POST['Thn'])){
	header("Location:datakosong2.php");
}
if (empty($_POST['alamat'])){
	header("Location:datakosong2.php");
}
if (empty($_POST['email'])){
	header("Location:datakosong2.php");
}	
if (empty($_POST['telp'])){
	header("Location:datakosong2.php");
}
?>