<?php
include 'connect.php';
$sql="SELECT * FROM kontak";
$qry=mysqli_query($connect, $sql) or die("Proses cetak gagal");
echo "<table width='75%' cellpadding='2' cellspacing='0' border='1'>
    <tr>
        <th>No.</th>
        <th>Nama</th>
        <th>Jenis Kelamin</th>
        <th>Email</th>
        <th>Alamat</th>
        <th>Kota</th>
        <th>Pesan</th>   
    </tr>";

    $no=1;
    while ($hasil=mysqli_fetch_assoc($qry)){
        echo"<tr>
                <td>$no</td>
                <td>".$hasil['nama']."</td>
                <td>".$hasil['jkel']."</td>
                <td>".$hasil['email']."</td>
                <td>".$hasil['alamat']."</td>
                <td>".$hasil['kota']."</td>
                <td>".$hasil['pesan']."</td>
            </tr>";
            $no++;
    } 
    echo "</table>";
?>
<a href="index.php" class="btn">Kembali</a>
