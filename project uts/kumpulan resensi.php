<!DOCTYPE html>
<html>
<head>
    <title>Kumpulan Resensi</title>
            <style type="text/css">
        h2.thick{font-family: Dunkin;
            font-weight: bold;
            font-size: 30pt;
            text-align: center;}
        body{
            font-family: trebuchet ms;
            background-color: #A9A9A9;
        }
        a{
            font-family: century gothic;
        }
        A:link {
            color: blue;}
        A:hover {
            color: brown;}
        A:visited {
            color: blue;}
    </style>
</head>
<body>
    <h2 class="thick"><img src="reading1.png" sizes="60" width="100px">KUMPULAN RESENSI<img src="reading1.png" sizes="60" width="100px"></h2>
    <table class="a" border="1" width="100%">
        <tr>
        <th>No.</th>
        <th>Nama Reviewer</th>
        <th>Judul Buku</th>
        <th>Penulis</th>
        <th>Penerbit</th>
        <th>Tahun Terbit</th>
        <th>Jumlah Halaman</th>
        <th>Isi Resensi</th>
        <th>Kelebihan Buku</th>
        <th>Kekurangan Buku</th>
<?php
include 'connect.php';
$sql="SELECT * FROM resensi_buku";
$result=mysqli_query($connect, $sql);

    if (mysqli_num_rows($result)>0){
    while ($row=mysqli_fetch_assoc($result)){
        echo"<tr>
                <td>".$row['NO']."</td>
                <td>".$row['NAMA']."</td>
                <td>".$row['JUDUL']."</td>
                <td>".$row['PENULIS']."</td>
                <td>".$row['PENERBIT']."</td>
                <td>".$row['TAHUN']."</td>
                <td>".$row['JUMLAH_HAL']."</td>
                <td>".$row['ISI_RESENSI']."</td>
                <td>".$row['KELEBIHAN']."</td>
                <td>".$row['KEKURANGAN']."</td>";
    } 
} else {
    echo "0 results";
}
    mysqli_close($connect);
?>
</tr>
</table>
<a href="home.html" class="btn">Kembali</a>
</body>
</html>