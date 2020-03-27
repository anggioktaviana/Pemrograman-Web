<?php
include 'connect.php';

$nama          = $_POST['nama'];
$domisili	   = $_POST['domisili'];
$judul		   = $_POST['judul'];
$penulis       = $_POST['penulis'];
$penerbit      = $_POST['penerbit'];
$tahun	       = $_POST['thnterbit'];
$jumlah_hal    = $_POST['jmlhalaman'];
$harga		   = $_POST['harga'];
$no_hp	       = $_POST['no_hp'];
$kondisi_buku  = $_POST['kondisi'];

$sql ="INSERT INTO jual_buku(nama, domisili, judul, penulis, penerbit, tahun, jumlah_hal, harga, no_hp, kondisi_buku) 
                      VALUES ('$nama', '$domisili', '$judul', '$penulis', '$penerbit', '$tahun', '$jumlah_hal', '$harga', '$no_hp', '$kondisi_buku')";

if(mysqli_query($connect, $sql)) {
    echo"<script>alert('Jual Buku Berhasil!')
   location.replace('beli buku.php')</script>";
}
else {
	echo "<script>alert ('Jual Buku Gagal')
	location.replace('beli buku.php')</script>";
}
mysqli_close($connect);
?>