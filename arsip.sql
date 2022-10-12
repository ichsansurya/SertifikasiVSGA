-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 06, 2021 at 07:36 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bismillah`
--

-- --------------------------------------------------------

--
-- Table structure for table `arsip`
--

CREATE TABLE `arsip` (
  `no` int(11) NOT NULL,
  `nama` varchar(250) NOT NULL,
  `tanggal` varchar(250) NOT NULL,
  `waktu` varchar(100) NOT NULL,
  `tempat` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `arsip`
--

INSERT INTO `arsip` (`no`, `nama`, `tanggal`, `waktu`, `tempat`, `gambar`) VALUES
(2, 'Pemahaman &amp; Implementasi Sistem Manajemen Lab ISO', '24 Oktober 2020', '09.00 - 16.00', 'LAB E-COMMERCE', '60e33b8e2f559.jpeg'),
(3, 'CPD Online Sebagai Dasar Perpanjangan STR di Era Digital', '27 April 2019', '08.30 - 11.00', 'LAB E-COMMERCE', '60e33b9d41938.jpeg'),
(4, 'Pelatihan Penggunaan Mendeley', '5 September 2018', '08:00 - 14:00', 'LAB E-COMMERCE', '60e33bc08d092.jpeg'),
(17, 'Pelatihan dan Sertifikasi 2015', '26 Oktober 2015', '08:00 - selesai', 'LAB E-COMMERCE', '60e33bcfd8f0c.jpeg'),
(19, 'PLTI Tes TOEP Dan TPDA', '26 Februari 2020', '08.00 - 15.00', 'LAB E-COMMERCE', '60e33c97a0381.jpeg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `arsip`
--
ALTER TABLE `arsip`
  ADD PRIMARY KEY (`no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `arsip`
--
ALTER TABLE `arsip`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
