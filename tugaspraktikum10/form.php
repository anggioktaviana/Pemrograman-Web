<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<style>
	.warning {
		color: #FF0000;}
</style>
</head>
<body>

<?php
$error_namalengkap = "";
$error_jk = "";
$error_nisn = "";
$error_nik = "";
$error_tempatlahir = "";
$error_tgllahir = "";
$error_regisakta = "";
$error_agama = "";
$error_kwn = "";
$error_bk = "";
$error_alamat = "";
$error_rt = "";
$error_rw = "";
$error_dusun = "";
$error_kelurahan = "";
$error_kecamatan = "";
$error_kodepos = "";
$error_lintang = "";
$error_bujur = "";
$error_tempattinggal = "";
$error_transportasi = "";
$error_kks = "";
$error_anak = "";
$error_kps = "";
$error_nokps = "";

$namalengkap = "";
$jk = "";
$nisn = "";
$nik = "";
$tempatlahir = "";
$tgllahir = "";
$regisakta = "";
$agama = "";
$kwn = "";
$bk = "";
$alamat = "";
$rt = "";
$rw = "";
$dusun = "";
$kelurahan = "";
$kecamatan = "";
$kodepos = "";
$lintang = "";
$bujur = "";
$tempattinggal = "";
$transportasi = "";
$kks = "";
$anak = "";
$kps = "";
$nokps = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	if (empty($_POST["namalengkap"]))
	{
		$error_namalengkap = "Nama tidak boleh kosong";
	}
	else
	{
		$namalengkap = cek_input($_POST["namalengkap"]);
		if (!preg_match("/^[a-zA-Z]*$/", $namalengkap))
		{
			$error_namalengkap = "Inputan hanya boleh huruf dan spasi";
		}
	}
	if (empty($_POST["jk"]))
	{
		$error_jk = "Jenis Kelamin tidak boleh kosong";
	}
	else
	{
		$jk = cek_input($_POST["jk"]);
	}

	if (empty($_POST["nisn"]))
	{
		$error_nisn = "NISN tidak boleh kosong";
	}
	else
	{
		$jk = cek_input($_POST["nisn"]);
		if (!is_numeric($nisn))
		{
			$error_nisn = "NISN hanya boleh angka";
		}
	}
	if (empty($_POST["nik"]))
	{
		$error_jk = "NIK tidak boleh kosong";
	}
	else
	{
		$jk = cek_input($_POST["nik"]);
		if (!is_numeric($nik))
		{
			$error_nik = "NIK hanya boleh angka";
		}
	}
	if (empty($_POST["tempatlahir"]))
	{
		$error_tempatlahir = "Tempat lahir tidak boleh kosong";
	}
	else
	{
		$jk = cek_input($_POST["tempatlahir"]);
		if (!preg_match("/^[a-zA-Z]*$/", $tempatlahir))
		{
			$error_tempatlahir = "Inputan hanya boleh huruf dan spasi";
		}
	}
	if (empty($_POST["tgllahir"]))
	{
		$error_tgllahir = "Tanggal Lahir tidak boleh kosong";
	}
	else
	{
		$tgllahir = cek_input($_POST["tgllahir"]);
	}
	if (empty($_POST["regisakta"]))
	{
		$error_regisakta = "Nomor Registrasi Akta tidak boleh kosong";
	}
	else
	{
		$regisakta = cek_input($_POST["regisakta"]);
	}
	if (empty($_POST["agama"]))
	{
		$error_agama = "Agama tidak boleh kosong";
	}
	else
	{
		$agama = cek_input($_POST["agama"]);
	}
	if (empty($_POST["kwn"]))
	{
		$error_kwn = "Kewarganegaraan tidak boleh kosong";
	}
	else
	{
		$kwn = cek_input($_POST["kwn"]);
	}
	if (empty($_POST["bk"]))
	{
		$error_bk = "Jawaban tidak boleh kosong";
	}
	else
	{
		$bk = cek_input($_POST["bk"]);
	}
	if (empty($_POST["alamat"]))
	{
		$error_alamat = "alamat tidak boleh kosong";
	}
	else
	{
		$alamat = cek_input($_POST["alamat"]);
	}
	if (empty($_POST["rt"]))
	{
		$error_rt = "RT tidak boleh kosong";
	}
	else
	{
		$rt = cek_input($_POST["rt"]);
	}
	if (empty($_POST["rw"]))
	{
		$error_rw = "RW tidak boleh kosong";
	}
	else
	{
		$rw = cek_input($_POST["rw"]);
	}
	if (empty($_POST["dusun"]))
	{
		$dusun = cek_input($_POST["dusun"]);
	}
	if (empty($_POST["kelurahan"]))
	{
		$error_kelurahan = "Kelurahan tidak boleh kosong";
	}
	else
	{
		$kelurahan = cek_input($_POST["kelurahan"]);
	}
	if (empty($_POST["kecamatan"]))
	{
		$error_kecamatan = "Kecamatan tidak boleh kosong";
	}
	else
	{
		$kecamatan = cek_input($_POST["kecamatan"]);
	}
	if (empty($_POST["kodepos"]))
	{
		$error_kodepos = "Kode Pos tidak boleh kosong";
	}
	else
	{
		$kodepos = cek_input($_POST["kodepos"]);
	}
	if (empty($_POST["lintang"]))
	{
		$error_lintang = "Lintang tidak boleh kosong";
	}
	else
	{
		$lintang = cek_input($_POST["lintang"]);
	}
	if (empty($_POST["bujur"]))
	{
		$error_bujur = "Bujur tidak boleh kosong";
	}
	else
	{
		$bujur = cek_input($_POST["bujur"]);
	}
	if (empty($_POST["tempattinggal"]))
	{
		$error_tempattinggal = "Keterangan tidak boleh kosong";
	}
	else
	{
		$tempattinggal = cek_input($_POST["tempattinggal"]);
	}
	if (empty($_POST["transportasi"]))
	{
		$error_transportasi = "Keterangan tidak boleh kosong";
	}
	else
	{
		$transportasi = cek_input($_POST["transportasi"]);
	}
	if (empty($_POST["kks"]))
	{
		$kks = cek_input($_POST["kks"]);
	}
	if (empty($_POST["anak"]))
	{
		$error_agama = "Keterangan tidak boleh kosong";
	}
	else
	{
		$anak = cek_input($_POST["anak"]);
	}
	if (empty($_POST["kps"]))
	{
		$kps = cek_input($_POST["kps"]);
	}
	if (empty($_POST["nokps"]))
	{
		$nokps = cek_input($_POST["nokps"]);
	}

}

function cek_input($data){
	$data = trim($data);
	$data = stripcslashes($data);
	$data = htmlspecialchars($data);
	return $data;
	}
?>

<div class="row">
	<div class="col-md-12">
		<div class="card">
			<div class="card-header">
				FORMULIR PESERTA DIDIK
			</div>
			<div class="card-body">
				<form method="POST" action="simpan_form.php"> <div class="form-group row">
					<label for="namalengkap" class="col-sm-2 col-form-label">Nama Lengkap</label>
					<div class="col-sm-10">
						<input type="text" name="namalengkap" class="form-control <?php echo($error_namalengkap !="" ? "is-invalid" : ""); ?>" id="namalengkap" placeholder="Nama Lengkap" value="<?php echo $namalengkap; ?>"><span class="warning"><?php echo $error_namalengkap;?></span>Nama peserta didik sesuai dokumen yang berlaku (Akta atau ijazah sebelumnya).
					</div>
			</div>

			<div class="form-group row">
				<label for="jk" class="col-sm-2 col-form-label">Jenis Kelamin</label>
				<div class="col-sm-10">
					<input type="radio" name="jk" value="Laki-laki">Laki-laki
					<input type="radio" name="jk" value="Perempuan">Perempuan
					<class="form-control <?php echo($error_jk !="" ? "is-invalid" : "");?>" id="jk" value="<?php echo $jk; ?>"><span class="warning"><?php echo $error_jk;?></span>
				</div>
			</div>

			<div class="form-group row">
				<label for="nisn" class="col-sm-2 col-form-label">NISN</label>
				<div class="col-sm-10">
					<input type="text" name="nisn" class="form-control <?php echo($error_nisn !="" ? "is-invalid" : "");?>" id="nisn" placeholder="NISN" value="<?php echo $nisn; ?>"><span class="warning"><?php echo $error_nisn;?></span>Nomor Induk Siswa Nasional. Untuk memeriksa NISN dapat mengunjungi laman http://nisn.data.kemdikbud.go.id/page/data
				</div>
			</div>

			<div class="form-group row">
				<label for="nik" class="col-sm-2 col-form-label">NIK / No. KITAS (Untuk WNA)*</label>
				<div class="col-sm-10">
					<input type="text" name="nik" class="form-control <?php echo($error_nik !="" ? "is-invalid" : "");?>" id="nik" placeholder="NIK" value="<?php echo $nik; ?>"><span class="warning"><?php echo $error_nik;?></span>Nomor Induk Kependudukan yang tercantuk pada Kartu Keluarga atau Kartu Identitas Anak atau KTP (jika sudah memiliki bagi WNI). Pastikan NIK tidak tertukar dengan No. Kartu Keluarga.
				</div>
			</div>

			<div class="form-group row">
				<label for="tempatlahir" class="col-sm-2 col-form-label">Tempat Lahir</label>
				<div class="col-sm-10">
					<input type="text" name="tempatlahir" class="form-control <?php echo($error_tempatlahir !="" ? "is-invalid" : "");?>" id="tempatlahir" placeholder="Tempat Lahir" value="<?php echo $tempatlahir; ?>"><span class="warning"><?php echo $error_tempatlahir;?></span>Tempat lahir peserta didik sesuai dengan dokumen resmi yang berlaku (Akte Kelahiran)
				</div>
			</div>

			<div class="form-group row">
				<label for="tgllahir" class="col-sm-2 col-form-label">Tanggal Lahir</label>
				<div class="col-sm-10">
					<input type="text" name="tgllahir" class="form-control <?php echo($error_tgllahir !="" ? "is-invalid" : "");?>" id="tgllahir" placeholder="Tanggal Lahir" value="<?php echo $tgllahir; ?>"><span class="warning"><?php echo $error_tgllahir;?></span>Tanggal lahir peserta didik sesuai dengan dokumen resmi yang berlaku (Akte Kelahiran). Format: Tanggal/Bulan/Tahun (Bulan dalam bentuk angka contoh: Januari(01) Tahun lengkap contoh: 1999)
				</div>
			</div>

			<div class="form-group row">
				<label for="regisakta" class="col-sm-2 col-form-label">No. Regis Akta Lahir</label>
				<div class="col-sm-10">
					<input type="text" name="regisakta" class="form-control <?php echo($error_regisakta !="" ? "is-invalid" : "");?>" id="regisakta" placeholder="No. Regis Akta" value="<?php echo $regisakta; ?>"><span class="warning"><?php echo $error_regisakta;?></span>Nomor registrasi Akta Kelahiran. Nomor registrasi yang dimaksud umumnya tercantum pada bagian tengah atas lembar kutipan akta kelahiran.
				</div>
			</div>

			<div class="form-group row">
				<label for="agama" class="col-sm-2 col-form-label">Agama</label>
				<div class="col-sm-10">
					<input type="text" name="agama" class="form-control <?php echo($error_agama !="" ? "is-invalid" : "");?>" id="agama" placeholder="Agama" value="<?php echo $agama; ?>"><span class="warning"><?php echo $error_agama;?></span>Agama atau kepercayaan yang dianut oleh peserta didik. Apabila peserta didik adalah penganut kepercayaan (misalnya pada daerah tertentu yang masih memiliki penganut kepercayaan), dapat mengisi "Kepercayaan Kepada Tuhan YME". 
				</div>
			</div>

			<div class="form-group row">
				<label for="kwn" class="col-sm-2 col-form-label">Kewarganegaraan</label>
				<div class="col-sm-10">
					<input type="text" name="kwn" class="form-control <?php echo($error_kwn !="" ? "is-invalid" : "");?>" id="kwn" placeholder="Kewarganegaraan" value="<?php echo $kwn; ?>"><span class="warning"><?php echo $error_kwn;?></span>Isikan dengan nama negara
				</div>
			</div>

			<div class="form-group row">
				<label for="bk" class="col-sm-2 col-form-label">Berkebutuhan Khusus</label>
				<div class="col-sm-10">
					<input type="text" name="bk" class="form-control <?php echo($error_bk !="" ? "is-invalid" : "");?>" id="bk" placeholder="Isikan jawaban" value="<?php echo $bk; ?>"><span class="warning"><?php echo $error_bk;?></span>Bila tidak ada maka tuliskan "Tidak", namun apabila ada silahkan tuliskan, contohnya: Tuna Netra, Tunarungu, Tunawicara, Down Syndrome, dll.
				</div>
			</div>

			<div class="form-group row">
				<label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
				<div class="col-sm-10">
					<input type="text" name="alamat" class="form-control <?php echo($error_alamat !="" ? "is-invalid" : "");?>" id="alamat" placeholder="Alamat" value="<?php echo $alamat; ?>"><span class="warning"><?php echo $error_alamat;?></span>Jalur tempat tinggal peserta didik, terdiri atas gang, kompleks, blok, nomor rumah, dan sebagainya selain informasi yang diminta oleh kolom-kolom yang lain pada bagian ini. Contoh: peserta didik tinggal di sebuah kompleks perumahan Griya Adam yang berada pada Jalan Kemanggisan, dengan nomor rumah 4-C, di lingkungan RT005 dan RW0 11, Dusun Cempaka, Desa Salatiga. Maka dapat diisi dengan Jl. Kemanggisan, Komp. Griya Adam, No. 4-C.
				</div>
			</div>

			<div class="form-group row">
				<label for="rt" class="col-sm-2 col-form-label">RT</label>
				<div class="col-sm-10">
					<input type="text" name="rt" class="form-control <?php echo($error_rt !="" ? "is-invalid" : "");?>" id="rt" placeholder="RT" value="<?php echo $rt; ?>"><span class="warning"><?php echo $error_rt;?></span>Nomor RT tempat tinggal peserta didik saat ini. Dari contoh di atas, misalnya dapat diisi dengan angka 5.
				</div>
			</div>

			<div class="form-group row">
				<label for="rw" class="col-sm-2 col-form-label">RW</label>
				<div class="col-sm-10">
					<input type="text" name="rw" class="form-control <?php echo($error_rw !="" ? "is-invalid" : "");?>" id="rw" placeholder="RW" value="<?php echo $rw; ?>"><span class="warning"><?php echo $error_rw;?></span>Nomor RW tempat tinggal peserta didik saat ini. Dari contoh di atas, misalnya dapat diisi dengan angka 11.
				</div>
			</div>

			<div class="form-group row">
				<label for="dusun" class="col-sm-2 col-form-label">Dusun</label>
				<div class="col-sm-10">
					<input type="text" name="dusun" class="form-control <?php echo($error_dusun !="" ? "is-invalid" : "");?>" id="dusun" placeholder="Dusun" value="<?php echo $dusun; ?>"><span class="warning"><?php echo $error_dusun;?></span>Nama dusun tempat tinggal peserta didik saat ini. Dari contoh di atas, misalnya dapat diisi dengan "Cempaka".
				</div>
			</div>

			<div class="form-group row">
				<label for="kelurahan" class="col-sm-2 col-form-label">Kelurahan</label>
				<div class="col-sm-10">
					<input type="text" name="kelurahan" class="form-control <?php echo($error_kelurahan !="" ? "is-invalid" : "");?>" id="kelurahan" placeholder="Kelurahan" value="<?php echo $kelurahan; ?>"><span class="warning"><?php echo $error_kelurahan;?></span>Nama desa atau kelurahan tempat tinggal peserta didik saat ini. Dari contoh di atas, contohnya dapat diisi dengan "Gununganyar".
				</div>
			</div>

			<div class="form-group row">
				<label for="kecamatan" class="col-sm-2 col-form-label">Kecamatan</label>
				<div class="col-sm-10">
					<input type="text" name="kecamatan" class="form-control <?php echo($error_kecamatan !="" ? "is-invalid" : "");?>" id="kecamatan" placeholder="Kecamatan" value="<?php echo $kecamatan; ?>"><span class="warning"><?php echo $error_kecamatan;?></span>Kecamatan tempat tinggal peserta didik saat ini.
				</div>
			</div>

			<div class="form-group row">
				<label for="kodepos" class="col-sm-2 col-form-label">Kode Pos</label>
				<div class="col-sm-10">
					<input type="text" name="kodepos" class="form-control <?php echo($error_kodepos !="" ? "is-invalid" : "");?>" id="kodepos" placeholder="Kode Pos" value="<?php echo $kodepos; ?>"><span class="warning"><?php echo $error_kodepos;?></span>Kode pos tempat tinggal peserta didik saat ini.
				</div>
			</div>

			<div class="form-group row">
				<label for="lintang" class="col-sm-2 col-form-label">Lintang</label>
				<div class="col-sm-10">
					<input type="text" name="lintang" class="form-control <?php echo($error_lintang !="" ? "is-invalid" : "");?>" id="lintang" placeholder="Lintang" value="<?php echo $lintang; ?>"><span class="warning"><?php echo $error_lintang;?></span>Titik koordinat tempat tinggal peserta didik.
				</div>
			</div>

			<div class="form-group row">
				<label for="bujur" class="col-sm-2 col-form-label">Bujur</label>
				<div class="col-sm-10">
					<input type="text" name="bujur" class="form-control <?php echo($error_bujur !="" ? "is-invalid" : "");?>" id="bujur" placeholder="Bujur" value="<?php echo $bujur; ?>"><span class="warning"><?php echo $error_bujur;?></span>Titik koordinat tempat tinggal peserta didik.
				</div>
			</div>

			<div class="form-group row">
				<label for="tempattinggal" class="col-sm-2 col-form-label">Tempat Tinggal</label>
				<div class="col-sm-10">
					<input type="text" name="tempattinggal" class="form-control <?php echo($error_tempattinggal !="" ? "is-invalid" : "");?>" id="tempattinggal" placeholder="Tempat Tinggal" value="<?php echo $tempattinggal; ?>"><span class="warning"><?php echo $error_tempattinggal;?></span>Contoh: Bersama Orang Tua, Wali, Kos, Asrama, Panti Asuhan, Pesantren, Lainnya (Beri Keterangan).
				</div>
			</div>

			<div class="form-group row">
				<label for="transportasi" class="col-sm-2 col-form-label">Moda Transportasi</label>
				<div class="col-sm-10">
					<input type="text" name="transportasi" class="form-control <?php echo($error_transportasi !="" ? "is-invalid" : "");?>" id="transportasi" placeholder="Moda Transportasi" value="<?php echo $transportasi; ?>"><span class="warning"><?php echo $error_transportasi;?></span>Contoh: Jalan kaki, sepeda, sepeda motor, mobil, angkot, delman, becak, dll.
				</div>
			</div>

			<div class="form-group row">
				<label for="kks" class="col-sm-2 col-form-label">No. KKS</label>
				<div class="col-sm-10">
					<input type="text" name="kks" class="form-control <?php echo($error_kks !="" ? "is-invalid" : "");?>" id="kks" placeholder="No. KKS" value="<?php echo $kks; ?>"><span class="warning"><?php echo $error_kks;?></span>Nomor Kartu Keluarga Sejahtera (jika memiliki). Nomor yang dimaksud adalah 6 digit kode yang tertera pada sisi belakang kiri atas kartu (di bawah lambang Garuda Pancasila)
				</div>
			</div>

			<div class="form-group row">
				<label for="anak" class="col-sm-2 col-form-label">Anak Ke</label>
				<div class="col-sm-10">
					<input type="text" name="anak" class="form-control <?php echo($error_anak !="" ? "is-invalid" : "");?>" id="anak" placeholder="Anak Ke" value="<?php echo $anak; ?>"><span class="warning"><?php echo $error_anak;?></span>Isikan sesuai dengan Kartu Keluarga.
				</div>
			</div>

			<div class="form-group row">
				<label for="kps" class="col-sm-2 col-form-label">Penerima KPS/PKH</label>
				<div class="col-sm-10">
					<input type="radio" name="kps" value="ya">Ya
					<input type="radio" name="kps" value="tidak">Tidak
					<class="form-control <?php echo($error_kps !="" ? "is-invalid" : "");?>" id="kps" value="<?php echo $kps; ?>"><span class="warning"><?php echo $error_kps;?></span>
					<p>Peserta didik dinyatakan sebagai penerima KPS/PKH apabila tercantum di dalam kartu keluarga dengan kepala keluarga pemegang KPS/PKH. Sebagai contoh, peserta didik tercantum pada KK dengan kepala keluarganya adalah kakek.Apabila kakek peserta didik tersebut pemegang KPS/PKH, maka peserta didik yang bersangkutan dinyatakan penerima KPS/PKH.</p>
				</div>
			</div>

			<div class="form-group row">
				<label for="nokps" class="col-sm-2 col-form-label">No. KPS</label>
				<div class="col-sm-10">
					<input type="text" name="nokps" class="form-control <?php echo($error_nokps !="" ? "is-invalid" : "");?>" id="nokps" placeholder="No. KPS" value="<?php echo $nokps; ?>"><span class="warning"><?php echo $error_nokps;?></span>*)Apabila menerima
				</div>
			</div>

			<div class="form-group row">
				<div class="col-sm-10">
					<button type="submit" class="btn btn-primary">Kirim</button>
				</div>
			</div>
		</form>
	</div>
</div>
</div>
</div>

<?php
echo "<h2>Data Peserta Didik:</h2>";
echo "Nama Lengkap = ".$namalengkap;
echo "<br>";
echo "Jenis Kelamin = ".$jk;
echo "<br>";
echo "NISN = ".$nisn;
echo "<br>";
echo "NIK = ".$nik;
echo "<br>";
echo "Tempat Lahir = ".$tempatlahir;
echo "<br>";
echo "Tanggal Lahir = ".$tgllahir;
echo "<br>";
echo "No. Regis Akta Lahir = ".$regisakta;
echo "<br>";
echo "Agama = ".$agama;
echo "<br>";
echo "Kewarganegaraan = ".$kwn;
echo "<br>";
echo "Berkebutuhan Khusus = ".$bk;
echo "<br>";
echo "Alamat = ".$alamat;
echo "<br>";
echo "RT = ".$rt;
echo "<br>";
echo "RW = ".$rw;
echo "<br>";
echo "Dusun = ".$dusun;
echo "<br>";
echo "Kelurahan = ".$kelurahan;
echo "<br>";
echo "Kecamatan = ".$kecamatan;
echo "<br>";
echo "Kode Pos = ".$kodepos;
echo "<br>";
echo "Lintang = ".$lintang;
echo "<br>";
echo "Bujur = ".$bujur;
echo "<br>";
echo "Tempat Tinggal = ".$tempattinggal;
echo "<br>";
echo "Moda Transportasi = ".$transportasi;
echo "<br>";
echo "No. KKS = ".$kks;
echo "<br>";
echo "Anak Ke = ".$anak;
echo "<br>";
echo "Penerima KPS/PKH = ".$kps;
echo "<br>";
echo "No. KPS = ".$nokps;
?>
</body>
</html>