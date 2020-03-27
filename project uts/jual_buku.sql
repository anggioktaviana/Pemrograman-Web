-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 27, 2020 at 12:04 PM
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

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jual_buku`
--
ALTER TABLE `jual_buku`
  ADD PRIMARY KEY (`NO`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jual_buku`
--
ALTER TABLE `jual_buku`
  MODIFY `NO` int(200) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
