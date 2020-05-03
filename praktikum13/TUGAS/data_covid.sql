-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 03, 2020 at 07:03 PM
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
-- Database: `covid19`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_covid`
--

CREATE TABLE `data_covid` (
  `id_data` int(11) NOT NULL,
  `id_country` int(11) DEFAULT NULL,
  `new_cases` int(11) DEFAULT NULL,
  `new_death` int(11) DEFAULT NULL,
  `total_death` int(11) DEFAULT NULL,
  `total_recovered` int(11) DEFAULT NULL,
  `active_cases` int(11) DEFAULT NULL,
  `total_cases` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_covid`
--

INSERT INTO `data_covid` (`id_data`, `id_country`, `new_cases`, `new_death`, `total_death`, `total_recovered`, `active_cases`, `total_cases`) VALUES
(1, 1, 19552, 1843, 58640, 140138, 831100, 1029878),
(2, 2, 2706, 301, 23822, 123903, 84403, 232128),
(3, 3, 2091, 382, 27359, 68941, 105205, 201505),
(4, 4, 2638, 367, 23660, 46886, 95365, 165911),
(5, 5, 3996, 586, 21678, NULL, 139123, 161145),
(6, 6, 673, 89, 6215, 117400, 35816, 159431),
(7, 7, 2392, 92, 2992, 38809, 72852, 114653),
(8, 8, 6411, 73, 867, 8456, 84235, 93558),
(9, 9, 1112, 71, 5877, 72439, 14268, 92584),
(10, 10, 6, 0, 4633, 77555, 648, 82836);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_covid`
--
ALTER TABLE `data_covid`
  ADD PRIMARY KEY (`id_data`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
