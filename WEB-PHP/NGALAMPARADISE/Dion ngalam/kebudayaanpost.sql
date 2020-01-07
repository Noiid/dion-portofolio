-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 06 Mei 2019 pada 06.35
-- Versi Server: 10.1.26-MariaDB
-- PHP Version: 7.1.9

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
-- Struktur dari tabel `kebudayaanpost`
--

CREATE TABLE `kebudayaanpost` (
  `ID_POSTKEBUDAYAAN` int(11) NOT NULL,
  `ID_KEBUDAYAAN` char(10) NOT NULL,
  `NAMA_BUDAYA` varchar(50) NOT NULL,
  `LOKASI_BUDAYA` float(10,6) DEFAULT NULL,
  `LOKASI_BUDAYA2` float(10,6) NOT NULL,
  `INFO_BUDAYA` varchar(255) DEFAULT NULL,
  `INFOBUDAYA2` varchar(255) NOT NULL,
  `FOTO_BUDAYA` varchar(255) NOT NULL,
  `FOTO_BUDAYA2` varchar(255) NOT NULL,
  `FOTO_BUDAYA3` varchar(255) NOT NULL,
  `TANGGAL_BUDAYAPOST` varchar(100) NOT NULL,
  `ID_USER` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kebudayaanpost`
--
ALTER TABLE `kebudayaanpost`
  ADD PRIMARY KEY (`ID_POSTKEBUDAYAAN`),
  ADD KEY `FK_MEMILIKI_5` (`ID_KEBUDAYAAN`),
  ADD KEY `FK_MEMILIKI_KELOLA2` (`ID_USER`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kebudayaanpost`
--
ALTER TABLE `kebudayaanpost`
  MODIFY `ID_POSTKEBUDAYAAN` int(11) NOT NULL AUTO_INCREMENT;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `kebudayaanpost`
--
ALTER TABLE `kebudayaanpost`
  ADD CONSTRAINT `FK_MEMILIKI_5` FOREIGN KEY (`ID_KEBUDAYAAN`) REFERENCES `kebudayaan` (`ID_KEBUDAYAAN`),
  ADD CONSTRAINT `FK_MEMILIKI_KELOLA2` FOREIGN KEY (`ID_USER`) REFERENCES `user` (`ID_USER`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
