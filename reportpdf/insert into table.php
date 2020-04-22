<?php
include 'koneksi.php';

$sql = "INSERT INTO `tb_siswa` ('id_siswa', 'nama', 'kelas', 'alamat') VALUES
('1', 'Budi Susanto', '1MM3', 'Sedati Gede'),
('2', 'Dita Anggraini', '1MM2', 'Rungkut'),
('3', 'Riska Nur Aini', '3MM1', 'Wonocolo');"

if (mysqli_query($koneksi, $sql)) {
	echo "New record created succesfully";
} else {
	echo "Error: ".$sql."<br>".mysqli_error($koneksi);
}
?>