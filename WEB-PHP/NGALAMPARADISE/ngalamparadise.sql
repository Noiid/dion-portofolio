-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 01, 2019 at 05:43 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

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
  `TANGGAL_EVENT` datetime DEFAULT NULL,
  `LOKASI_EVENT` varchar(100) DEFAULT NULL,
  `HARGA_TIKET` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`ID_EVENT`, `NAMA_EVENT`, `TANGGAL_EVENT`, `LOKASI_EVENT`, `HARGA_TIKET`) VALUES
(1, 'Wayang Golek', '2019-04-07 00:00:00', 'Keluruhan Bluru', 10000);

-- --------------------------------------------------------

--
-- Table structure for table `kebudayaan`
--

CREATE TABLE `kebudayaan` (
  `ID_KEBUDAYAAN` char(10) NOT NULL,
  `JENIS_KEBUDAYAAN` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kebudayaan`
--

INSERT INTO `kebudayaan` (`ID_KEBUDAYAAN`, `JENIS_KEBUDAYAAN`) VALUES
('KBD001', 'Candi'),
('KBD002', 'Monumen'),
('KBD003', 'Museum');

-- --------------------------------------------------------

--
-- Table structure for table `kebudayaanpost`
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
  `TANGGAL_BUDAYAPOST` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kebudayaanpost`
--

INSERT INTO `kebudayaanpost` (`ID_POSTKEBUDAYAAN`, `ID_KEBUDAYAAN`, `NAMA_BUDAYA`, `LOKASI_BUDAYA`, `LOKASI_BUDAYA2`, `INFO_BUDAYA`, `INFOBUDAYA2`, `FOTO_BUDAYA`, `FOTO_BUDAYA2`, `FOTO_BUDAYA3`, `TANGGAL_BUDAYAPOST`) VALUES
(1, 'KBD001', 'Candi Singosari', 0.000000, 0.000000, 'asddddddddddddddddddddddddasd\r\n', 'asdddddddddddddddddddd\r\n', '1 candi Singosari.jpg', 'candi-brahu1.jpg', 'peninggalan-kerajaan-singosari.jpg', '0000-00-00'),
(2, 'KBD001', 'Candi Badut', 0.000000, 0.000000, 'n j jbhbhbhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh\r\n', 'hbjjjjjjjjjjjjjjjjjjjjjjjjjj\r\n', '1 candi badut.jpg', 'Candi-Badut-by-IG-inocensiusevan.jpg', 'gsdf.jpg', '0000-00-00'),
(3, 'KBD003', 'Museum Angkut', 0.000000, 0.000000, 'asdddddddddddddddddddddddddddddddddddddddddddd\r\n', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaas\r\n', '1 ma.jpg', 'harga-tiket-masuk-museum-angkut.jpg', 'mobil-kuno-museum-angkut-malang-min.jpg', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `komentar_budaya`
--

CREATE TABLE `komentar_budaya` (
  `ID_KOMENTARBUDAYA` int(11) NOT NULL,
  `ID_USER` int(11) NOT NULL,
  `ID_POSTBUDAYA` int(11) NOT NULL,
  `ISI_KOMENTARBUDAYA` varchar(1000) NOT NULL,
  `WAKTU_KOMENTARBUDAYA` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `komentar_budaya`
--

INSERT INTO `komentar_budaya` (`ID_KOMENTARBUDAYA`, `ID_USER`, `ID_POSTBUDAYA`, `ISI_KOMENTARBUDAYA`, `WAKTU_KOMENTARBUDAYA`) VALUES
(1, 3, 1, 'holla', '2019-04-29 03:57:03');

-- --------------------------------------------------------

--
-- Table structure for table `komentar_wisata`
--

CREATE TABLE `komentar_wisata` (
  `ID_KOMENTARWISATA` int(11) NOT NULL,
  `ID_USER` int(11) NOT NULL,
  `ID_POSTWISATA` int(11) NOT NULL,
  `ISI_KOMENTARWISATA` varchar(1000) NOT NULL,
  `WAKTU_KOMENTARWISATA` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `komentar_wisata`
--

INSERT INTO `komentar_wisata` (`ID_KOMENTARWISATA`, `ID_USER`, `ID_POSTWISATA`, `ISI_KOMENTARWISATA`, `WAKTU_KOMENTARWISATA`) VALUES
(86, 1, 3, 'Keren', '2019-04-29 17:46:47'),
(87, 1, 3, 'asd', '2019-04-29 22:47:51'),
(88, 3, 3, 'asdasd', '2019-04-30 11:36:31');

-- --------------------------------------------------------

--
-- Table structure for table `kontak_us`
--

CREATE TABLE `kontak_us` (
  `ID_KONTAK` int(11) NOT NULL,
  `NAMA_KONTAK` varchar(50) NOT NULL,
  `NOMORHP_KONTAK` varchar(20) NOT NULL,
  `EMAIL_KONTAK` varchar(50) NOT NULL,
  `PESAN_KONTAK` varchar(1000) NOT NULL,
  `TANGGAL_KONTAK` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kontak_us`
--

INSERT INTO `kontak_us` (`ID_KONTAK`, `NAMA_KONTAK`, `NOMORHP_KONTAK`, `EMAIL_KONTAK`, `PESAN_KONTAK`, `TANGGAL_KONTAK`) VALUES
(4, 'kampret', '12345', 'kampret@asd.com', 'asdawfas', '2019-04-29 00:00:00'),
(5, 'kampret', '54313', 'kampret@asd.com', 'asdasd', '2019-04-29 17:43:33'),
(6, 'kampret', '123123123', 'kampret@asd.com', 'sfgdsg', '2019-04-29 22:46:16');

-- --------------------------------------------------------

--
-- Table structure for table `membeli`
--

CREATE TABLE `membeli` (
  `ID_USER` int(11) NOT NULL,
  `ID_EVENT` int(11) NOT NULL,
  `JUMLAH_BELI` int(11) DEFAULT NULL,
  `TOTAL_BAYAR` int(11) DEFAULT NULL,
  `TANGGAL_BELI` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pengelola`
--

CREATE TABLE `pengelola` (
  `ID_PENGELOLA` char(10) NOT NULL,
  `NAMA_PENGELOLA` varchar(50) NOT NULL,
  `USERNAME_PENGELOLA` varchar(50) DEFAULT NULL,
  `PASSWORD_PENGELOLA` varchar(50) DEFAULT NULL,
  `ALAMAT_PENGELOLA` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `ID_USER` int(11) NOT NULL,
  `NAMA_USER` varchar(50) NOT NULL,
  `USERNAME` varchar(50) DEFAULT NULL,
  `PASSWORD` varchar(50) DEFAULT NULL,
  `ALAMAT_USER` varchar(255) DEFAULT NULL,
  `JENIS_KELAMIN` varchar(20) NOT NULL,
  `EMAIL` varchar(100) NOT NULL,
  `USER_LVL` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID_USER`, `NAMA_USER`, `USERNAME`, `PASSWORD`, `ALAMAT_USER`, `JENIS_KELAMIN`, `EMAIL`, `USER_LVL`) VALUES
(1, 'admin', 'admin', 'admin', 'admin', 'Laki-laki', 'admin@gmail.com', 1),
(3, 'Dion', 'kk', 'kk', 'asgdhf', 'Laki-laki', 'kk@gmail.com', 2),
(4, 'Will', 'Will', 'will', 'cdsfs', 'Perempuan', 'will@gmail.com', 2),
(5, 'Hilnanda Ardiansyah', 'ardi', 'ardi', 'Kalpataru V E', 'Laki-laki', 'ardikeren1507@yahoo.com', 2),
(6, 'kampret', 'kampret', 'kampret', 'asdasd', 'Perempuan', 'kampret@asd.com', 2);

-- --------------------------------------------------------

--
-- Table structure for table `wisata`
--

CREATE TABLE `wisata` (
  `ID_WISATA` char(10) NOT NULL,
  `JENIS_WISATA` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wisata`
--

INSERT INTO `wisata` (`ID_WISATA`, `JENIS_WISATA`) VALUES
('WIS001', 'Wisata Alam'),
('WIS002', 'Wisata Hiburan'),
('WIS003', 'Wisata Malam'),
('WIS004', 'Wisata Kuliner');

-- --------------------------------------------------------

--
-- Table structure for table `wisatapost`
--

CREATE TABLE `wisatapost` (
  `ID_POSTWISATA` int(11) NOT NULL,
  `ID_WISATA` char(10) NOT NULL,
  `NAMA_WISATAPOST` varchar(50) NOT NULL,
  `LOKASI_WISATAPOST` float(10,6) DEFAULT NULL,
  `LOKASI_WISATAPOST2` float(10,6) NOT NULL,
  `INFO_WISATAPOST` varchar(1000) DEFAULT NULL,
  `INFOWISATAPOST2` varchar(1000) NOT NULL,
  `FOTO_WISATAPOST` varchar(255) DEFAULT NULL,
  `FOTO_WISATAPOST2` varchar(255) NOT NULL,
  `FOTO_WISATAPOST3` varchar(255) NOT NULL,
  `TANGGAL_WISATAPOST` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wisatapost`
--

INSERT INTO `wisatapost` (`ID_POSTWISATA`, `ID_WISATA`, `NAMA_WISATAPOST`, `LOKASI_WISATAPOST`, `LOKASI_WISATAPOST2`, `INFO_WISATAPOST`, `INFOWISATAPOST2`, `FOTO_WISATAPOST`, `FOTO_WISATAPOST2`, `FOTO_WISATAPOST3`, `TANGGAL_WISATAPOST`) VALUES
(3, 'WIS001', 'Pantai 3 Warna', -8.439143, 112.677795, 'Agak aneh memang jika sebuah pantai menggunakan sistem reservasi sebelum masuk, tapi itulah yang menjadikan pantai 3 warna ini menjadi semakin menarik untuk di eksplorasi. Apalagi pengelola pantai tiga warna malang ini membatasi pengunjung maksimal 100 pengunjung perhari dan itupun dengan perjanjian bahwa pengunjung harus membawa kembali sampah / bungkus makanan yang di bawa menyuju ke pantai ini.\r\n\r\nPantai di selatan kota malang ini memang benar-benar memiliki 3 warna yang disebabkan kedalaman laut yang berbeda sehingga dengan mata telanjang pun sangat terlihat perbedaan warna air pantai. Apalagi ditambah dengan keaneka ragaman biota bawah laut yang sangat sayang jika tidak melakukan snorkling di pantai tiga warna malang ini.\r\n', 'Secara administratif pantai 3 warna malang ini berada di desa tambak rejo, wilayah konservasi sendangbiru, kabupaten malang jawatimur. Karena lokasi pantai ini masih berada di dalam wilayah konservasi maka untuk masuk pun harus dengan izin dari Clungup Mangrove Coservation.\r\n\r\nRute menuju pantai 3 warna ini sebenarnya cukup mudah. dari pusat kota malang langsung menuju ke daerah dampit. Perjalanan di lanjutkan lagi menuju ke arah Turen. Sampai di wilayah turen nanti akan menemukan pertigaan dengan papan&nbsp; penunjuk jalan bercat hijau jika ke kanan ke Pantai Balekambang dan jika arah kiri ke arah sendang Biru.\r\n', 'pantai3.jpg', 'pantai3_2.png', 'pantai3_3.jpg', '2019-04-22'),
(12, 'WIS001', 'Pantai Balekambang', -8.439143, 112.677795, 'jvjavsdjvsnbdvv\r\n', 'hgdfbvfhjgsfu\r\n', '1 bk.jpg', 'download.jpg', 'pantai-balekambang-jawa-timur.jpg', '0000-00-00'),
(13, 'WIS001', 'Pantai Goa Cina', 0.000000, 0.000000, 'asdasdbsfbheu\r\n', 'sfhsdhjiuasbwkkjoasdas\r\n', '1 gc.jpg', '42-tempat-wisata-malang-batu-dan-sekitarnya-terbaru-murah-301.jpg', 'Pantai-Goa-Cina.png', '0000-00-00'),
(14, 'WIS003', 'Malang Night Paradise', 0.000000, 0.000000, 'asdhasdahsdvhjv\r\n', 'ashdvasdvbsadasd\r\n', '1 mnp.JPG', '42104551-237798283565269-687233191580482825-n-45c4119f07c4146617916ed18bf00259.jpg', 'DSCF2489.JPG', '0000-00-00'),
(15, 'WIS002', 'Hawai Water Park', 0.000000, 0.000000, 'hasdawgvdbasdgwad&nbsp; gwyad h\r\n', 'asdhjasdb wdhcaiwhcjkasdc\r\n', '1 hw.jpg', 'akses-menuju-hawai-waterpark-malang-jawa-timur.jpg', 'hawai.jpg', '0000-00-00'),
(16, 'WIS001', 'Pantai Sendang Biru', 0.000000, 0.000000, 'Sebuah pantai yang berada sekitar 67 kilometer ke arah selatan kota malang ini adalah sebuah pantai yang cukup eksotis di kota malang. Selain sebagai tempat wisata pantai sendang biru adalah tempat mendaratnya kapal-kapal ikan. Selain berwisata tentunya wisatawan bisa langsung membeli ikan laut yang masih segar.\r\n', 'Yang menarik dari pantai sendang biru adalah selain airnya yang tenang dan pantai nya yang bersih, ombak di pantai sendang biru sangat tenang, cocok untuk para wisatawan yang ingin snorkling menikmati indahnya dasar laut pantai sendang biru ataupun sekedar berkeliling di selat sempu dengan menyewa perahu nelayan setempat.\r\n\r\nNama dari pantai sedang biru sendiri tidak lepas dari sebuah mata air yang membentuk sebuah kolam alami di dekat perbukitan pantai tersebut. Air yang keluar dari mata air tersebut berwarna bening keboruan. Konon mata air tersebut sejak dahulu menopang kebutuhan air penduduk setempat.&nbsp;Sendang biru sendiri berada di sekitar 1 kilometer dari posisi pantai. dan berada di perkampungan setempat.\r\n', '1 sb.jpg', '1-listyareina-wordpress-com.jpg', 'pantai-sendang-biru-pulau-sempu-23.jpg', '0000-00-00'),
(17, 'WIS001', 'Gunung Bromo', 0.000000, 0.000000, 'asdjnaskdjwjkndaknsdkjnwajkwnd\r\n', 'asdkjansdkjnwjkansdkjn\r\n', '96d60356-f54f-4b9d-a5af-4cbc8c24f3c7_169.jpeg', 'Status-Gunung-Bromo.jpg', 'wisata-gunung-bromo-samitra-wisata-paket-murah-gunung-bromo-samitra-travel-samitra-wisata.jpg', '0000-00-00'),
(18, 'WIS004', 'Kuliner Merjosari', 0.000000, 0.000000, 'hsabdahsdbhwjbdajbwjdhb\r\n', 'awdhbawjhdbhjabwdhjbwad\r\n', '1 ms.jpg', 'coffee-shops-1920x1080.jpg', 'kuliner-hits-malang.jpg', '0000-00-00'),
(19, 'WIS003', 'BNS Malang', 0.000000, 0.000000, 'Batu Night Spectacular adalah sebuah wahana wisata&nbsp;terbaru dari Kota Batu. Malam hari anda bisa menikmati suguhan wisata paling spektakuler di Jawa Timur di&nbsp;Batu Night Spectacular (BNS). Obyek wisata yang berlokasi di Desa Oro-oro Ombo ini menyajikan aneka wahana yang bisa dinikmati seluruh anggota keluarga anda. Ada puluhan wahana yang tidak akan bisa Anda lupakan setelah menikmatinya seperti galeri hantu, slalom tes, sepeda udara tertinggi, lampion garden, dan trampoline. Di obyek wisata ini anda juga bisa menguji adrenaline&nbsp;dengan mencoba beberapa wahana seperti drag race, mouse coaster, dan beberapa permainan lain.\r\n', 'Banyak juga wahana yang khusus disediakan untuk anak-anak seperti kids zone yang terdiri dari 25 macam.&nbsp;Selain berbagai wahana menarik, keunikan BNS juga didukung letaknya yang sangat strategis di dataran tinggi. Dari obyek wisata mala mini anda bisa menikmati pemandangan alam&nbsp;Kota Malang dan sekitarnya dengan lebih sempurna. Gemerlap lampu di kawasan Malang Raya malam hari akan mengiringi suasana kongkow anda di beberapa kafe yang tersedia disana.&nbsp;Batu Night Spectacular ( BNS )&nbsp;juga menyiapkan beberapa wahana yang unik yang rugi kalau dilewatkan seperti lampion garden, galeri hantu, cinema empat dimensi, sirkuit go kart terpanjang, layar sepanjang 50 meter di area food court, dan air mancur menari.\r\n', '1 bns.jpg', 'Batu-Night-Spectacular-3.jpg', 'wahana_dan_atraksi_di_batu_night_spectacular_ulinulin.jpg', '0000-00-00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`ID_EVENT`);

--
-- Indexes for table `kebudayaan`
--
ALTER TABLE `kebudayaan`
  ADD PRIMARY KEY (`ID_KEBUDAYAAN`);

--
-- Indexes for table `kebudayaanpost`
--
ALTER TABLE `kebudayaanpost`
  ADD PRIMARY KEY (`ID_POSTKEBUDAYAAN`),
  ADD KEY `FK_MEMILIKI_5` (`ID_KEBUDAYAAN`);

--
-- Indexes for table `komentar_budaya`
--
ALTER TABLE `komentar_budaya`
  ADD PRIMARY KEY (`ID_KOMENTARBUDAYA`),
  ADD KEY `fk_komentar_iduser_budaya` (`ID_USER`),
  ADD KEY `fk_komentar_nama_budaya` (`ID_POSTBUDAYA`);

--
-- Indexes for table `komentar_wisata`
--
ALTER TABLE `komentar_wisata`
  ADD PRIMARY KEY (`ID_KOMENTARWISATA`),
  ADD KEY `fk_komentar_iduser` (`ID_USER`),
  ADD KEY `fk_komentar_idwisata` (`ID_POSTWISATA`);

--
-- Indexes for table `kontak_us`
--
ALTER TABLE `kontak_us`
  ADD PRIMARY KEY (`ID_KONTAK`);

--
-- Indexes for table `membeli`
--
ALTER TABLE `membeli`
  ADD PRIMARY KEY (`ID_USER`,`ID_EVENT`),
  ADD KEY `FK_MEMBELI2` (`ID_EVENT`);

--
-- Indexes for table `pengelola`
--
ALTER TABLE `pengelola`
  ADD PRIMARY KEY (`ID_PENGELOLA`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID_USER`);

--
-- Indexes for table `wisata`
--
ALTER TABLE `wisata`
  ADD PRIMARY KEY (`ID_WISATA`);

--
-- Indexes for table `wisatapost`
--
ALTER TABLE `wisatapost`
  ADD PRIMARY KEY (`ID_POSTWISATA`),
  ADD KEY `FK_MEMILIKI_2` (`ID_WISATA`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `ID_EVENT` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `kebudayaanpost`
--
ALTER TABLE `kebudayaanpost`
  MODIFY `ID_POSTKEBUDAYAAN` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `komentar_budaya`
--
ALTER TABLE `komentar_budaya`
  MODIFY `ID_KOMENTARBUDAYA` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `komentar_wisata`
--
ALTER TABLE `komentar_wisata`
  MODIFY `ID_KOMENTARWISATA` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;

--
-- AUTO_INCREMENT for table `kontak_us`
--
ALTER TABLE `kontak_us`
  MODIFY `ID_KONTAK` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `ID_USER` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `wisatapost`
--
ALTER TABLE `wisatapost`
  MODIFY `ID_POSTWISATA` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `kebudayaanpost`
--
ALTER TABLE `kebudayaanpost`
  ADD CONSTRAINT `FK_MEMILIKI_5` FOREIGN KEY (`ID_KEBUDAYAAN`) REFERENCES `kebudayaan` (`ID_KEBUDAYAAN`);

--
-- Constraints for table `komentar_budaya`
--
ALTER TABLE `komentar_budaya`
  ADD CONSTRAINT `fk_komentar_iduser_budaya` FOREIGN KEY (`ID_USER`) REFERENCES `user` (`ID_USER`),
  ADD CONSTRAINT `fk_komentar_nama_budaya` FOREIGN KEY (`ID_POSTBUDAYA`) REFERENCES `kebudayaanpost` (`ID_POSTKEBUDAYAAN`);

--
-- Constraints for table `komentar_wisata`
--
ALTER TABLE `komentar_wisata`
  ADD CONSTRAINT `fk_komentar_iduser` FOREIGN KEY (`ID_USER`) REFERENCES `user` (`ID_USER`),
  ADD CONSTRAINT `fk_komentar_idwisata` FOREIGN KEY (`ID_POSTWISATA`) REFERENCES `wisatapost` (`ID_POSTWISATA`);

--
-- Constraints for table `membeli`
--
ALTER TABLE `membeli`
  ADD CONSTRAINT `FK_MEMBELI` FOREIGN KEY (`ID_USER`) REFERENCES `user` (`ID_USER`),
  ADD CONSTRAINT `FK_MEMBELI2` FOREIGN KEY (`ID_EVENT`) REFERENCES `event` (`ID_EVENT`);

--
-- Constraints for table `wisatapost`
--
ALTER TABLE `wisatapost`
  ADD CONSTRAINT `FK_MEMILIKI_2` FOREIGN KEY (`ID_WISATA`) REFERENCES `wisata` (`ID_WISATA`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
