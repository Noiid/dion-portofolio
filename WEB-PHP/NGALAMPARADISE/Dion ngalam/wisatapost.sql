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
-- Struktur dari tabel `wisatapost`
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
  `TANGGAL_WISATAPOST` date NOT NULL,
  `ID_USER` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `wisatapost`
--

INSERT INTO `wisatapost` (`ID_POSTWISATA`, `ID_WISATA`, `NAMA_WISATAPOST`, `LOKASI_WISATAPOST`, `LOKASI_WISATAPOST2`, `INFO_WISATAPOST`, `INFOWISATAPOST2`, `FOTO_WISATAPOST`, `FOTO_WISATAPOST2`, `FOTO_WISATAPOST3`, `TANGGAL_WISATAPOST`, `ID_USER`) VALUES
(3, 'WIS001', 'Pantai 3 Warna', -8.439143, 112.677795, 'Agak aneh memang jika sebuah pantai menggunakan sistem reservasi sebelum masuk, tapi itulah yang menjadikan pantai 3 warna ini menjadi semakin menarik untuk di eksplorasi. Apalagi pengelola pantai tiga warna malang ini membatasi pengunjung maksimal 100 pengunjung perhari dan itupun dengan perjanjian bahwa pengunjung harus membawa kembali sampah / bungkus makanan yang di bawa menyuju ke pantai ini.\r\n\r\nPantai di selatan kota malang ini memang benar-benar memiliki 3 warna yang disebabkan kedalaman laut yang berbeda sehingga dengan mata telanjang pun sangat terlihat perbedaan warna air pantai. Apalagi ditambah dengan keaneka ragaman biota bawah laut yang sangat sayang jika tidak melakukan snorkling di pantai tiga warna malang ini.\r\n', 'Secara administratif pantai 3 warna malang ini berada di desa tambak rejo, wilayah konservasi sendangbiru, kabupaten malang jawatimur. Karena lokasi pantai ini masih berada di dalam wilayah konservasi maka untuk masuk pun harus dengan izin dari Clungup Mangrove Coservation.\r\n\r\nRute menuju pantai 3 warna ini sebenarnya cukup mudah. dari pusat kota malang langsung menuju ke daerah dampit. Perjalanan di lanjutkan lagi menuju ke arah Turen. Sampai di wilayah turen nanti akan menemukan pertigaan dengan papan&nbsp; penunjuk jalan bercat hijau jika ke kanan ke Pantai Balekambang dan jika arah kiri ke arah sendang Biru.\r\n', 'pantai3.jpg', 'pantai3_2.png', 'pantai3_3.jpg', '2019-04-22', 5),
(12, 'WIS001', 'Pantai Balekambang', -8.439143, 112.677795, 'jvjavsdjvsnbdvv\r\n', 'hgdfbvfhjgsfu\r\n', '1 bk.jpg', 'download.jpg', 'pantai-balekambang-jawa-timur.jpg', '0000-00-00', 1),
(13, 'WIS001', 'Pantai Goa Cina', 0.000000, 0.000000, 'asdasdbsfbheu\r\n', 'sfhsdhjiuasbwkkjoasdas\r\n', '1 gc.jpg', '42-tempat-wisata-malang-batu-dan-sekitarnya-terbaru-murah-301.jpg', 'Pantai-Goa-Cina.png', '0000-00-00', 1),
(14, 'WIS003', 'Malang Night Paradise', 0.000000, 0.000000, 'asdhasdahsdvhjv\r\n', 'ashdvasdvbsadasd\r\n', '1 mnp.JPG', '42104551-237798283565269-687233191580482825-n-45c4119f07c4146617916ed18bf00259.jpg', 'DSCF2489.JPG', '0000-00-00', 1),
(15, 'WIS002', 'Hawai Water Park', 0.000000, 0.000000, 'hasdawgvdbasdgwad&nbsp; gwyad h\r\n', 'asdhjasdb wdhcaiwhcjkasdc\r\n', '1 hw.jpg', 'akses-menuju-hawai-waterpark-malang-jawa-timur.jpg', 'hawai.jpg', '0000-00-00', 1),
(16, 'WIS001', 'Pantai Sendang Biru', 0.000000, 0.000000, 'Sebuah pantai yang berada sekitar 67 kilometer ke arah selatan kota malang ini adalah sebuah pantai yang cukup eksotis di kota malang. Selain sebagai tempat wisata pantai sendang biru adalah tempat mendaratnya kapal-kapal ikan. Selain berwisata tentunya wisatawan bisa langsung membeli ikan laut yang masih segar.\r\n', 'Yang menarik dari pantai sendang biru adalah selain airnya yang tenang dan pantai nya yang bersih, ombak di pantai sendang biru sangat tenang, cocok untuk para wisatawan yang ingin snorkling menikmati indahnya dasar laut pantai sendang biru ataupun sekedar berkeliling di selat sempu dengan menyewa perahu nelayan setempat.\r\n\r\nNama dari pantai sedang biru sendiri tidak lepas dari sebuah mata air yang membentuk sebuah kolam alami di dekat perbukitan pantai tersebut. Air yang keluar dari mata air tersebut berwarna bening keboruan. Konon mata air tersebut sejak dahulu menopang kebutuhan air penduduk setempat.&nbsp;Sendang biru sendiri berada di sekitar 1 kilometer dari posisi pantai. dan berada di perkampungan setempat.\r\n', '1 sb.jpg', '1-listyareina-wordpress-com.jpg', 'pantai-sendang-biru-pulau-sempu-23.jpg', '0000-00-00', 1),
(17, 'WIS001', 'Gunung Bromo', 0.000000, 0.000000, 'asdjnaskdjwjkndaknsdkjnwajkwnd\r\n', 'asdkjansdkjnwjkansdkjn\r\n', '96d60356-f54f-4b9d-a5af-4cbc8c24f3c7_169.jpeg', 'Status-Gunung-Bromo.jpg', 'wisata-gunung-bromo-samitra-wisata-paket-murah-gunung-bromo-samitra-travel-samitra-wisata.jpg', '0000-00-00', 1),
(18, 'WIS004', 'Kuliner Merjosari', 0.000000, 0.000000, 'hsabdahsdbhwjbdajbwjdhb\r\n', 'awdhbawjhdbhjabwdhjbwad\r\n', '1 ms.jpg', 'coffee-shops-1920x1080.jpg', 'kuliner-hits-malang.jpg', '0000-00-00', 1),
(19, 'WIS003', 'BNS Malang', 0.000000, 0.000000, 'Batu Night Spectacular adalah sebuah wahana wisata&nbsp;terbaru dari Kota Batu. Malam hari anda bisa menikmati suguhan wisata paling spektakuler di Jawa Timur di&nbsp;Batu Night Spectacular (BNS). Obyek wisata yang berlokasi di Desa Oro-oro Ombo ini menyajikan aneka wahana yang bisa dinikmati seluruh anggota keluarga anda. Ada puluhan wahana yang tidak akan bisa Anda lupakan setelah menikmatinya seperti galeri hantu, slalom tes, sepeda udara tertinggi, lampion garden, dan trampoline. Di obyek wisata ini anda juga bisa menguji adrenaline&nbsp;dengan mencoba beberapa wahana seperti drag race, mouse coaster, dan beberapa permainan lain.\r\n', 'Banyak juga wahana yang khusus disediakan untuk anak-anak seperti kids zone yang terdiri dari 25 macam.&nbsp;Selain berbagai wahana menarik, keunikan BNS juga didukung letaknya yang sangat strategis di dataran tinggi. Dari obyek wisata mala mini anda bisa menikmati pemandangan alam&nbsp;Kota Malang dan sekitarnya dengan lebih sempurna. Gemerlap lampu di kawasan Malang Raya malam hari akan mengiringi suasana kongkow anda di beberapa kafe yang tersedia disana.&nbsp;Batu Night Spectacular ( BNS )&nbsp;juga menyiapkan beberapa wahana yang unik yang rugi kalau dilewatkan seperti lampion garden, galeri hantu, cinema empat dimensi, sirkuit go kart terpanjang, layar sepanjang 50 meter di area food court, dan air mancur menari.\r\n', '1 bns.jpg', 'Batu-Night-Spectacular-3.jpg', 'wahana_dan_atraksi_di_batu_night_spectacular_ulinulin.jpg', '0000-00-00', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `wisatapost`
--
ALTER TABLE `wisatapost`
  ADD PRIMARY KEY (`ID_POSTWISATA`),
  ADD KEY `FK_MEMILIKI_2` (`ID_WISATA`),
  ADD KEY `FK_MEMILIKI_KELOLA` (`ID_USER`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `wisatapost`
--
ALTER TABLE `wisatapost`
  MODIFY `ID_POSTWISATA` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `wisatapost`
--
ALTER TABLE `wisatapost`
  ADD CONSTRAINT `FK_MEMILIKI_2` FOREIGN KEY (`ID_WISATA`) REFERENCES `wisata` (`ID_WISATA`),
  ADD CONSTRAINT `FK_MEMILIKI_KELOLA` FOREIGN KEY (`ID_USER`) REFERENCES `user` (`ID_USER`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
