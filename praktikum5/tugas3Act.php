<?php

$nama = $_POST['nama'];
$npm = $_POST['npm'];
$jk = $_POST['jk'];
$agama = $_POST['Agama'];
$tempat = $_POST['tempatlahir'];
$tanggal = $_POST['Tanggal']; 
$bulan = $_POST['Bulan']; 
$tahun = $_POST['Thn'];
$alamat = $_POST['alamat'];
$email = $_POST['email'];
$telp = $_POST['telp'];

echo "<h3><u>BIODATA</u></h3>";
echo "Nama: ".$nama."<br>";
echo "NPM: ".$npm."<br>";
echo "Jenis Kelamin: ".$jk."<br>";
echo "Agama: ".$agama."<br>";
echo "Tempat & Tanggal Lahir: ".$tempat.", " .$tanggal." ".$bulan." ".$tahun."<br>";
echo "Alamat: ".$alamat."<br>";
echo "Email: ".$email."<br>";
echo "Nomor Telepon: ".$telp."<br>";

include 'tugas3include.php';
?>