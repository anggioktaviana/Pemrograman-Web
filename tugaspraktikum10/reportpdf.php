<?php
include('koneksi.php');
require_once("dompdf/autoload.inc.php");
use Dompdf\Dompdf;
$dompdf = new Dompdf();
$query = mysqli_query($koneksi,"select * from data_siswa");
$html = '<center><h3>Data Peserta Didik</h3></center><hr/><br/>';
$html .= '<table border="1" width="100%" cellspacing="2" cellpadding="2">
 <tr>
 <th>No</th>
 <th>Nama Lengkap</th>
 <th>Jenis Kelamin</th>
 <th>NISN</th>
 <th>NIK</th>
 <th>Tempat Lahir</th>
 <th>Tanggal Lahir</th>
 <th>No. Regis Akta Lahir</th>
 <th>Agama</th>
 <th>Kewarganegaraan</th>
 <th>Berkebutuhan Khusus</th>
 <th>Alamat</th>
 <th>RT</th>
 <th>RW</th>
 <th>Dusun</th>
 <th>Kelurahan</th>
 <th>Kecamatan</th>
 <th>Kode Pos</th>
 <th>Lintang</th>
 <th>Bujur</th>
 <th>Tempat Tinggal</th>
 <th>Moda Transportasi</th>
 <th>No. KKS</th>
 <th>Anak Ke</th>
 <th>Penerima KPS/PKH</th>
 <th>No. KPS</th>
 </tr>';
$no = 1;

while($row = mysqli_fetch_array($query))
{
 $html .= "<tr>
 <td>".$no."</td>
 <td>".$row['namalengkap']."</td>
 <td>".$row['jk']."</td>
 <td>".$row['nisn']."</td>
 <td>".$row['nik']."</td>
 <td>".$row['tempatlahir']."</td>
 <td>".$row['tgllahir']."</td>
 <td>".$row['regisakta']."</td>
 <td>".$row['agama']."</td>
 <td>".$row['kwn']."</td>
 <td>".$row['bk']."</td>
 <td>".$row['alamat']."</td>
 <td>".$row['rt']."</td>
 <td>".$row['rw']."</td>
 <td>".$row['dusun']."</td>
 <td>".$row['kelurahan']."</td>
 <td>".$row['kecamatan']."</td>
 <td>".$row['kodepos']."</td>
 <td>".$row['lintang']."</td>
 <td>".$row['bujur']."</td>
 <td>".$row['tempattinggal']."</td>
 <td>".$row['transportasi']."</td>
 <td>".$row['kks']."</td>
 <td>".$row['anak']."</td>
 <td>".$row['kps']."</td>
 <td>".$row['nokps']."</td>
 </tr>";
 $no++;
}

$html .= "</html>";
$dompdf->loadHtml($html);
// Setting ukuran dan orientasi kertas
$dompdf->setPaper('A2', 'landscape');
// Rendering dari HTML Ke PDF
$dompdf->render();
// Melakukan output file Pdf
$dompdf->stream('laporan_peserta_didik.pdf');
?>