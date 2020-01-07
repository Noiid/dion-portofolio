-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 06, 2019 at 06:46 AM
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
-- Database: `ngalamparadise`
--

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `ID_EVENT` int(11) NOT NULL,
  `NAMA_EVENT` varchar(50) NOT NULL,
  `TANGGAL_EVENT` date DEFAULT NULL,
  `LOKASI_EVENT` varchar(100) DEFAULT NULL,
  `HARGA_TIKET` int(11) DEFAULT NULL,
  `FOTO_EVENT` varchar(255) NOT NULL,
  `DESKRIPSI_EVENT` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`ID_EVENT`, `NAMA_EVENT`, `TANGGAL_EVENT`, `LOKASI_EVENT`, `HARGA_TIKET`, `FOTO_EVENT`, `DESKRIPSI_EVENT`) VALUES
(1, 'Color Run Cakra #2', '2019-04-07', 'Pabrik Rokok Cakra', 10000, 'images\\event\\4.png', ''),
(2, 'Musik Bold', '2019-01-22', 'Lapangan Rampal', 10000, 'images\\event\\1.jpg', ''),
(3, 'Kuliner Modern', '2019-12-11', 'Taman Kunang - Kunang', 5000, 'images\\event\\3.jpg', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`ID_EVENT`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `ID_EVENT` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
