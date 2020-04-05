<?php
include 'admin/connect.php';

$vnama=$_POST['nama'];
$vjkel=$_POST['jkel'];
$vemail=$_POST['email'];
$valamat=$_POST['alamat'];
$vkota=$_POST['kota'];
$vpesan=$_POST['pesan'];

$sql="INSERT kontak(nama, jkel, email, alamat, kota, pesan) VALUES ('$vnama', '$vjkel','$vemail','$valamat','$vkota','$vpesan')";

mysqli_query($connect, $sql) or die("Proses simpan ke database gagal");
mysqli_close($connect);
header("location:kontak.html");
?>