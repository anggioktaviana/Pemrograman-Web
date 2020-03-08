<?php
  date_default_timezone_set('Asia/Jakarta');
  $tanggal=date("l, d M Y");
  $waktu=date("h:i:s");

echo "<br><center>Data dimasukkan pada: ".$tanggal." Pukul: ".$waktu."</center><br>";

if (empty($_POST['nama'])) {
	header("Location:datakosong.php");
} 

if (empty($_POST['npm'])) {
	header("Location:datakosong.php");

} 
if (empty($_POST['jk'])) {
	header("Location: datakosong.php");
}

if (empty($_POST['Agama'])) {
	header("Location:datakosong.php");
} 

if (empty($_POST['tempatlahir'])) {
	header("Location:datakosong.php");
}

if (empty($_POST['Tanggal'])) {
	header("Location:datakosong.php");
}  

if (empty($_POST['Bulan'])) {
	header("Location:datakosong.php");
} 

if (empty($_POST['Thn'])) {
	header("Location:datakosong.php");
} 

if (empty($_POST['alamat'])) {
	header("Location:datakosong.php");
} 

if (empty($_POST['email'])) {
	header("Location:datakosong.php");
} 
?>