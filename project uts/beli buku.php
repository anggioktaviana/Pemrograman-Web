<!DOCTYPE html>
<html>
<head>
    <title>Beli Buku</title>
            <style type="text/css">
        h2.thick{font-family: Dunkin;
            font-weight: bold;
            font-size: 30pt;
            text-align: center;}
        body {
            font-family: century gothic;
            background-color: #FAFAD2;
        }
        A:link {
            color: black;}
        A:hover {
            color: black;}
        A:visited {
            color: black;}
    </style>
</head>
<body>
    <h2 class="thick">BELI BUKU</h2>
    &nbsp;&nbsp;&nbsp;<img src="books1.gif" sizes="60" width="100px"><img src="books1.gif" sizes="60" width="100px"><img src="books1.gif" sizes="60" width="100px"><img src="books1.gif" sizes="60" width="100px"><img src="books1.gif" sizes="60" width="100px"><img src="books1.gif" sizes="60" width="100px"><img src="books1.gif" sizes="60" width="100px"><img src="books1.gif" sizes="60" width="100px"><img src="books1.gif" sizes="60" width="100px"><img src="books1.gif" sizes="60" width="100px"><img src="books1.gif" sizes="60" width="100px"><img src="books1.gif" sizes="60" width="100px">
    <table border="1" width="100%">
        <tr>
        <th>No.</th>
        <th>Nama Penjual</th>
        <th>Domisili</th>
        <th>Judul Buku</th>
        <th>Penulis</th>
        <th>Penerbit</th>
        <th>Tahun Terbit</th>
        <th>Jumlah Halaman</th>
        <th>Harga</th>
        <th>No. HP / Whatsapp</th>
        <th>Kondisi Buku</th>
<?php
include 'connect.php';
$sql="SELECT * FROM jual_buku";
$result=mysqli_query($connect, $sql);

    if (mysqli_num_rows($result)>0){
    while ($row=mysqli_fetch_assoc($result)){
        echo"<tr>
                <td>".$row['NO']."</td>
                <td>".$row['NAMA']."</td>
                <td>".$row['DOMISILI']."</td>
                <td>".$row['JUDUL']."</td>
                <td>".$row['PENULIS']."</td>
                <td>".$row['PENERBIT']."</td>
                <td>".$row['TAHUN']."</td>
                <td>".$row['JUMLAH_HAL']."</td>
                <td>".$row['HARGA']."</td>
                <td>".$row['NO_HP']."</td>
                <td>".$row['KONDISI_BUKU']."</td>";
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