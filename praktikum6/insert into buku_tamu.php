<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<table border="2">
	<tr>
		<th>ID_BT</th>
		<th>Nama</th>
		<th>Email</th>
		<th>Alamat</th>

<?php
include 'connect.php';

$sql = "INSERT INTO buku_tamu (NAMA, EMAIL, ISI)
VALUES ('Eka', 'eka@gmail.com', 'Sidoarjo')";

if (mysqli_query($connect, $sql)) {
	echo "New record created succesfully";
} else {
	echo "Error: ".$sql."<br>".mysqli_error($conn);
}
$sql1 = "SELECT * FROM buku_tamu";
$result = mysqli_query($connect, $sql1);

if (mysqli_num_rows($result)>0) {
	while($row = mysqli_fetch_assoc($result)) {
		echo "<tr><td>".$row["ID_BT"]."</td><td>".$row["NAMA"]."</td><td>".$row["EMAIL"]."</td><td>".$row['ISI']."</td>";
	}
} else {
	echo "0 results";
}
mysqli_close($connect);
?>
</tr>
</table>
</body>
</html>