-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 27, 2020 at 08:57 AM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uts`
--

-- --------------------------------------------------------

--
-- Table structure for table `jual_buku`
--

CREATE TABLE `jual_buku` (
  `NO` int(200) UNSIGNED NOT NULL,
  `NAMA` varchar(50) NOT NULL,
  `DOMISILI` varchar(50) DEFAULT NULL,
  `JUDUL` varchar(150) NOT NULL,
  `PENULIS` varchar(50) NOT NULL,
  `PENERBIT` varchar(50) NOT NULL,
  `TAHUN` varchar(4) NOT NULL,
  `JUMLAH_HAL` varchar(1000) NOT NULL,
  `HARGA` varchar(50) DEFAULT NULL,
  `NO_HP` varchar(13) NOT NULL,
  `KONDISI_BUKU` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jual_buku`
--

INSERT INTO `jual_buku` (`NO`, `NAMA`, `DOMISILI`, `JUDUL`, `PENULIS`, `PENERBIT`, `TAHUN`, `JUMLAH_HAL`, `HARGA`, `NO_HP`, `KONDISI_BUKU`) VALUES
(1, 'anggi', 'Surabaya', 'Pulang', 'Tere Liye', 'Republika Penerbit', '2015', '400 halaman', 'Rp75.000', '082243002621', 'Buku masih baru dan bersegel');

-- --------------------------------------------------------

--
-- Table structure for table `resensi_buku`
--

CREATE TABLE `resensi_buku` (
  `NO` int(200) UNSIGNED NOT NULL,
  `NAMA` varchar(50) NOT NULL,
  `JUDUL` varchar(150) NOT NULL,
  `PENULIS` varchar(50) NOT NULL,
  `PENERBIT` varchar(50) NOT NULL,
  `TAHUN` varchar(4) NOT NULL,
  `JUMLAH_HAL` varchar(1000) NOT NULL,
  `ISI_RESENSI` text NOT NULL,
  `KELEBIHAN` text,
  `KEKURANGAN` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `resensi_buku`
--

INSERT INTO `resensi_buku` (`NO`, `NAMA`, `JUDUL`, `PENULIS`, `PENERBIT`, `TAHUN`, `JUMLAH_HAL`, `ISI_RESENSI`, `KELEBIHAN`, `KEKURANGAN`) VALUES
(1, 'anggi', 'Filosofi Kopi - Kumpulan Cerita Pendek Dan Prosa Satu Dekade', 'Dewi Lestari', 'Gagas Media', '2006', '142 halaman', 'Buku ini berisi cerpen-cerpen yang menceritakan filosofi kopi, tentang Ben dan Jody, seorang barista handal. Keduanya mendirikan kedai kopi bersama, memang keduanya adalah barista yang sangat handal meracik kopi. Kedai kopinya sangat terkenal karena memiliki kopi yang lezat dan sangat disukai. Hingga suatu saat ada pria kaya yang menantang mereka.\r\n\r\nTantangan pria kaya tersebut adalah bisa membuat kopi yang kelezatannya bisa membuat orang menahan nafas saat meminumnya. Tantangan ini membuat Ben dan Jodi merasa terpukul dan mencoba mencari-cari kopi terbaik di seluruh Indonesia sampai menemukan kopi tiwus sebuah alamat yang diberikan pria itu.\r\n\r\nSesampainya di lokasi Ben dan Jodi minum kopi yang disajikan oleh pemilik warung tersebut. Mereka tidak dapat berkata-kata dengan kesempurnaan kopi tersebut Ben merasa gagal dan putus asa. Sesampainya di Jakarta Ben menyajikan kopi tiwus dengan kartu kecil berisi filosofi kopi. Dengan demikian Ben melanjutkan hidup dan hobinya sebagai barista di kedai filosofi kopi.', 'Alur cerita buku ini sangat menarik membuat siapa saja yang membuat siapa saja yang membacanya penasaran. Terbukti beberapa kali cetak tetap menjadi best seller, mengandung pesan moral jangan putus asa untuk mendapatkan hasil yang maksimal.', 'Buku ini terlalu segmented, sehingga tidak semua orang mengerti gagasan penulis. Sampul kurang menarik mengingat segmen buku ini adalah remaja. Buku ini mengandung kata-kata sulit yang tidak dipahami setiap orang apalagi pembaca pemula.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jual_buku`
--
ALTER TABLE `jual_buku`
  ADD PRIMARY KEY (`NO`);

--
-- Indexes for table `resensi_buku`
--
ALTER TABLE `resensi_buku`
  ADD PRIMARY KEY (`NO`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jual_buku`
--
ALTER TABLE `jual_buku`
  MODIFY `NO` int(200) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `resensi_buku`
--
ALTER TABLE `resensi_buku`
  MODIFY `NO` int(200) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
