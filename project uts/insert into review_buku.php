<?php
include 'connect.php';

$nama          = $_POST['nama'];
$judul		   = $_POST['judul'];
$penulis       = $_POST['penulis'];
$penerbit      = $_POST['penerbit'];
$tahun	       = $_POST['thnterbit'];
$jumlah_hal    = $_POST['jmlhalaman'];
$isi_resensi   = $_POST['isi'];
$kelebihan     = $_POST['kelebihan'];
$kekurangan    = $_POST['kekurangan'];

$sql ="INSERT INTO resensi_buku(nama, judul, penulis, penerbit, tahun, jumlah_hal, isi_resensi, kelebihan, kekurangan) 
                      VALUES ('$nama', '$judul', '$penulis', '$penerbit', '$tahun', '$jumlah_hal', '$isi_resensi', '$kelebihan', '$kekurangan')";

if(mysqli_query($connect, $sql)) {
    echo"<script>alert('Input Resensi Berhasil!')
   location.replace('kumpulan resensi.php')</script>";
}
else {
	echo "<script>alert ('Input Resensi Gagal')
	location.replace('kumpulan resensi.php')</script>";
}
mysqli_close($connect);
?>