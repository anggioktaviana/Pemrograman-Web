<?php
include 'koneksi.php';

$namalengkap = $_POST['namalengkap'];
$jk = $_POST["jk"];
$nisn = $_POST["nisn"];
$nik = $_POST["nik"];
$tempatlahir = $_POST["tempatlahir"];
$tgllahir = $_POST["tgllahir"];
$regisakta = $_POST["regisakta"];
$agama = $_POST["agama"];
$kwn = $_POST["kwn"];
$bk = $_POST["bk"];
$alamat = $_POST["alamat"];
$rt = $_POST["rt"];
$rw = $_POST["rw"];
$dusun = $_POST["dusun"];
$kelurahan = $_POST["kelurahan"];
$kecamatan = $_POST["kecamatan"];
$kodepos = $_POST["kodepos"];
$lintang = $_POST["lintang"];
$bujur = $_POST["bujur"];
$tempattinggal = $_POST["tempattinggal"];
$transportasi = $_POST["transportasi"];
$kks = $_POST["kks"];
$anak = $_POST["anak"];
$kps = $_POST["kps"];
$nokps = $_POST["nokps"];

$sql="INSERT INTO data_siswa(namalengkap, jk, nisn, nik, tempatlahir, tgllahir, regisakta, agama, kwn, bk, alamat, rt, rw, dusun, kelurahan, kecamatan, kodepos, lintang, bujur, tempattinggal, transportasi, kks, anak, kps, nokps) VALUES ('$namalengkap', '$jk', '$nisn', '$nik', '$tempatlahir', '$tgllahir', '$regisakta','$agama','$kwn', '$bk', '$alamat', '$rt', '$rw', '$dusun', '$kelurahan', '$kecamatan', '$kodepos', '$lintang', '$bujur', '$tempattinggal', '$transportasi', '$kks', '$anak', '$kps', '$nokps')";

$hasil=mysqli_query($connect,$sql);

if ($hasil){
	echo "Data berhasil tersimpan";
	header("location:form.php"); }
else{
	echo "Data gagal disimpan";
	header("location:form.php"); }
?>