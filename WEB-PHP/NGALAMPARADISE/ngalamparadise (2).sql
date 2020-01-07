-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2019 at 09:25 AM
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
  `TANGGAL_EVENT` date DEFAULT NULL,
  `LOKASI_EVENT` varchar(100) DEFAULT NULL,
  `HARGA_TIKET` int(11) DEFAULT NULL,
  `FOTO_EVENT` varchar(255) NOT NULL,
  `DESKRIPSI_EVENT` varchar(255) NOT NULL,
  `REKENING_EVENT` varchar(20) DEFAULT NULL,
  `ID_USER` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`ID_EVENT`, `NAMA_EVENT`, `TANGGAL_EVENT`, `LOKASI_EVENT`, `HARGA_TIKET`, `FOTO_EVENT`, `DESKRIPSI_EVENT`, `REKENING_EVENT`, `ID_USER`) VALUES
(1, 'Color Run Cakra #2', '2019-04-08', 'Pabrik Rokok Cakra Malang', 12500, 'images\\event\\4.png', 'Melanjutkan kesuksesan semua edisi sebelumnya, pada tahun 2018 ini, Color Run Cakra kembali diselenggarakan. segera daftarkan diri anda', '087123561', 9),
(2, 'Musik Bold', '2019-01-22', 'Lapangan Rampal', 10000, 'images\\event\\1.jpg', 'Rasakan sensasi menikmati musik dengan nuansa kekinian, datang dan buktikan sendiri bagaimana sensasinya', '08712356', 9),
(7, 'Hammer Sonic', '2019-05-21', 'Lapangan Rampal', 250000, '2.jpg', 'Acara Metal Terbesar Se-Indonesia kini hadir di Kota Malang, segera daftarkan diri anda, khusus untuk 100 pendaftar pertama akan mendapatkan souvenir kece\r\n', '13324152', 1),
(8, 'Kickfest', '2019-05-21', 'Lapangan Rampal', 30000, '2.jpg', 'Kickfest dilaksanakan 1 tahun sekali\r\n', '173170091', 1),
(9, 'Kuliner Bareng', '2019-05-23', 'Lapangan Rampal', 35000, '3.jpg', 'merupakan event tahunan yang rutin diselenggarakan oleh pihak Malang Strudel, Datangi sekarang dan rasakan sensasi makan yang berbeda dengan nuansa kekinian\r\n', '99999', 1);

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
  `TANGGAL_BUDAYAPOST` date NOT NULL,
  `ID_USER` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kebudayaanpost`
--

INSERT INTO `kebudayaanpost` (`ID_POSTKEBUDAYAAN`, `ID_KEBUDAYAAN`, `NAMA_BUDAYA`, `LOKASI_BUDAYA`, `LOKASI_BUDAYA2`, `INFO_BUDAYA`, `INFOBUDAYA2`, `FOTO_BUDAYA`, `FOTO_BUDAYA2`, `FOTO_BUDAYA3`, `TANGGAL_BUDAYAPOST`, `ID_USER`) VALUES
(1, 'KBD001', 'Candi Singosari', 0.000000, 0.000000, 'Candi Singhasari merupakan candi Hindu - Buddha peninggalan bersejarah dari Kerajaan Singhasari berlokasi di Desa Candirenggo, Kecamatan Singosari, Kabupaten Malang, Jawa Timur, Indonesia, sekitar 10 km dari Kota Malang. ', 'Candi ini berada pada lembah di antara Pegunungan Tengger dan Gunung Arjuna pada ketinggian 512m di atas permukaan laut  ', '1 candi Singosari.jpg', 'candi-brahu1.jpg', 'peninggalan-kerajaan-singosari.jpg', '2019-05-01', 1),
(2, 'KBD001', 'Candi Badut', 0.000000, 0.000000, 'Candi Badut adalah sebuah candi yang terletak di kawasan Tidar, di bagian barat kota Malang. Secara administratif candi badut terletak di dusun Karang Besuki, Kecamatan Dau, Kabupaten Malang, Jawa Timur', 'Candi ini diperkirakan berusia lebih dari 1400 tahun, merupakan yang tertua di Jawa Timur dan diyakini adalah peninggalan Prabu Gajayana, penguasa kerajaan Kanjuruhan sebagaimana yang termaktub dalam prasasti Dinoyo bertahun 760 Masehi', '1 candi badut.jpg', 'Candi-Badut-by-IG-inocensiusevan.jpg', 'gsdf.jpg', '2019-05-02', 1),
(3, 'KBD003', 'Museum Angkut', 0.000000, 0.000000, 'Menurut kabar beredar museum Angkut dibangun sebagai tanda apresiasi perkembangan dunia transportasi nusantara bahkan dunia', 'Oleh sebab itu, ketika mengunjungi museum Angkut kota Batu akan melihat beraneka jenis kendaraan dari berbagai merek yang dipamerkan di dalam ruangan museum', '1 ma.jpg', 'harga-tiket-masuk-museum-angkut.jpg', 'mobil-kuno-museum-angkut-malang-min.jpg', '2019-05-03', 1),
(5, 'KBD001', 'Candi Singosari', 0.000000, 0.000000, 'maulana', 'yuguybghb', '1 bk.jpg', 'download.jpg', 'pantai-balekambang-jawa-timur.jpg', '2019-05-16', 9),
(6, 'KBD001', 'Balai Kota Malang', 0.000000, 0.000000, 'Gedung Balai Kota adalah salah satu gedung berarsitektur kolonial Belanda yang terletak di lingkaran jalan Tugu Malang dan merupakan gedung peninggalan pemerintah Belanda', 'Gedung ini tampak menarik dan mudah ditemui karena berada di jantung Kota Malang dan menjadi salah satu icon kota Malang', '1 balai okta.jpg', 'alun-alun-bunder.jpg', 'ejtcom-tugumalang1.jpg', '2019-05-16', 9);

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
(1, 3, 3, 'Tertarik', '2019-05-21 08:49:17');

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

-- --------------------------------------------------------

--
-- Table structure for table `membeli`
--

CREATE TABLE `membeli` (
  `ID_USER` int(11) NOT NULL,
  `ID_EVENT` int(11) NOT NULL,
  `JUMLAH_BELI` int(11) DEFAULT NULL,
  `TOTAL_BAYAR` int(11) DEFAULT NULL,
  `TANGGAL_BELI` date NOT NULL,
  `KODE_PEMBAYARAN` varchar(100) NOT NULL,
  `STATUS` varchar(255) NOT NULL,
  `GAMBARH` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `membeli`
--

INSERT INTO `membeli` (`ID_USER`, `ID_EVENT`, `JUMLAH_BELI`, `TOTAL_BAYAR`, `TANGGAL_BELI`, `KODE_PEMBAYARAN`, `STATUS`, `GAMBARH`) VALUES
(3, 1, 1, 10000, '2019-05-21', 'Color Run Cakra #2-BE2BE', 'Terbayar', '245-2457758_logo-concepts-np-logo-design.jpg'),
(3, 8, 2, 54000, '2019-05-21', 'Kickfest-AAC3D', 'Terbayar', '2.jpg');

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
-- Table structure for table `proses`
--

CREATE TABLE `proses` (
  `ID_PROSES` int(11) NOT NULL,
  `ID_USERP` int(11) NOT NULL,
  `ID_EVENTP` int(11) NOT NULL,
  `JUMLAH_TIKET` int(11) NOT NULL,
  `TOTAL_BAYARP` int(11) NOT NULL,
  `TANGGAL_BELIP` date NOT NULL,
  `STATUSP` varchar(255) NOT NULL,
  `KODE_PEMBAYARANP` varchar(100) NOT NULL,
  `GAMBARP` varchar(255) DEFAULT NULL,
  `WASES` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `proses`
--

INSERT INTO `proses` (`ID_PROSES`, `ID_USERP`, `ID_EVENTP`, `JUMLAH_TIKET`, `TOTAL_BAYARP`, `TANGGAL_BELIP`, `STATUSP`, `KODE_PEMBAYARANP`, `GAMBARP`, `WASES`) VALUES
(18, 3, 1, 1, 12500, '2019-05-21', 'Upload Bukti Pembayaran', 'Color Run Cakra #2-54AE1', NULL, '2019-05-21 09:34:58');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `ID_USER` int(11) NOT NULL,
  `NIK` varchar(20) NOT NULL,
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

INSERT INTO `user` (`ID_USER`, `NIK`, `NAMA_USER`, `USERNAME`, `PASSWORD`, `ALAMAT_USER`, `JENIS_KELAMIN`, `EMAIL`, `USER_LVL`) VALUES
(1, '12345', 'admin', 'admin', 'admin', 'Malang', 'Laki-laki', 'admin@gmail.com', 1),
(3, '12345', 'Dion', 'dion', 'dion', 'Malang', 'Laki-laki', 'dion@gmail.com', 2),
(4, '12345', 'Wiliam', 'Wils', 'wils', 'Kidul Pasar', 'Laki-laki', 'will@gmail.com', 2),
(9, '12345', 'Hilnanda', 'cenger', 'cenger', 'Malang', 'Laki-laki', 'hilnan@gmail.com', 3);

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
  `TANGGAL_WISATAPOST` date NOT NULL,
  `ID_USER` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wisatapost`
--

INSERT INTO `wisatapost` (`ID_POSTWISATA`, `ID_WISATA`, `NAMA_WISATAPOST`, `LOKASI_WISATAPOST`, `LOKASI_WISATAPOST2`, `INFO_WISATAPOST`, `INFOWISATAPOST2`, `FOTO_WISATAPOST`, `FOTO_WISATAPOST2`, `FOTO_WISATAPOST3`, `TANGGAL_WISATAPOST`, `ID_USER`) VALUES
(3, 'WIS001', 'Pantai 3 Warna', -8.439143, 112.677795, 'Agak aneh memang jika sebuah pantai menggunakan sistem reservasi sebelum masuk, tapi itulah yang menjadikan pantai 3 warna ini menjadi semakin menarik untuk di eksplorasi. Apalagi pengelola pantai tiga warna malang ini membatasi pengunjung maksimal 100 pengunjung perhari dan itupun dengan perjanjian bahwa pengunjung harus membawa kembali sampah / bungkus makanan yang di bawa menyuju ke pantai ini.\r\n\r\nPantai di selatan kota malang ini memang benar-benar memiliki 3 warna yang disebabkan kedalaman laut yang berbeda sehingga dengan mata telanjang pun sangat terlihat perbedaan warna air pantai. Apalagi ditambah dengan keaneka ragaman biota bawah laut yang sangat sayang jika tidak melakukan snorkling di pantai tiga warna malang ini.\r\n', 'Secara administratif pantai 3 warna malang ini berada di desa tambak rejo, wilayah konservasi sendangbiru, kabupaten malang jawatimur. Karena lokasi pantai ini masih berada di dalam wilayah konservasi maka untuk masuk pun harus dengan izin dari Clungup Mangrove Coservation.\r\n\r\nRute menuju pantai 3 warna ini sebenarnya cukup mudah. dari pusat kota malang langsung menuju ke daerah dampit. Perjalanan di lanjutkan lagi menuju ke arah Turen. Sampai di wilayah turen nanti akan menemukan pertigaan dengan papan&nbsp; penunjuk jalan bercat hijau jika ke kanan ke Pantai Balekambang dan jika arah kiri ke arah sendang Biru.\r\n', 'pantai3.jpg', 'pantai3_2.png', 'pantai3_3.jpg', '2019-04-22', 9),
(12, 'WIS001', 'Pantai Balekambang', -8.402727, 112.533691, 'Pantai Balekambang adalah sebuah pantai yang terletak di Malang dimana pantai ini tengah naik daun sebagai destinasi&nbsp;wisata di Malang&nbsp;yang menjadi favorit bagi wisatawan lokal maupun luar. Keindahan dan pesona Pantai Balekambang yang lain dari kebanyakan pantai-pantai lain di sepanjang pesisir Jawa Timur membuatnya mendapat julukan &ldquo;Tanah Lot-nya Jawa Timur&rdquo;. Hal ini tentu saja akibat topografi dan lanskap pantai ini yang disebut-sebut mirip dengan Pantai Tanah Lot yang termasyur di Pulau Bali itu.\r\n', 'Pantai Balekambang terletak di Dusun Sumber Jambe, Desa Srigonco, Kecamatan Bantur, Malang. Dari pusat kota Malang, pantai ini dapat dicapai sejauh 60 kilometer ke arah selatan. Akses menuju pantai ini sudah cukup memadai. Jalannya telah diaspal mulus meski wisatawan harus tetap berhati-hati dengan beberapa tanjakan dan kelokan yang tajam. Sepanjang perjalanan, wisatawan akan dimanjakan dengan deretan pepohonan menghijau yang membuat udara menjadi sangat sejuk dan segar.\r\n', '1 bk.jpg', 'download.jpg', 'pantai-balekambang-jawa-timur.jpg', '2019-05-01', 1),
(13, 'WIS001', 'Pantai Goa Cina', -8.447105, 112.651474, 'Pantai Goa Cina merupakan salah satu primadona baru wisata pantai yang sekarang cukup ramai didatangi oleh para pengunjung dari berbagai kota. Terletak di daerah Malang bagian selatan, tepatnya terletak di Desa Sitiarjo, Kecamatan Sumbermanjing Wetan, Kabupaten Malang Selatan, pantai ini terhitung masih sangat alami dengan warna air laut biru jernih dan bersih serta pasir putih yang lembut.\r\n', 'Untuk menuju pantai ini dibutuhkan waktu tempuh sekitar 2 sampai 3 jam dari kota Malang. Pantai yang masih perawan ini hanya berjarak sekitar 6 km dari arah barat Pantai Sendang Biru.\r\n\r\nRute perjalanan menuju Pantai Goa Cina ini sebenarnya sama dengan rute menuju Pulau Sempu, hanya saja pengunjung harus berbelok ke arah kiri di pertigaan Sendang Biru. Biaya tiket masuk di Pantai Goa Cina adalah sebesar Rp5.000 untuk setiap orangnya.\r\n', '1 gc.jpg', '42-tempat-wisata-malang-batu-dan-sekitarnya-terbaru-murah-301.jpg', 'Pantai-Goa-Cina.png', '2019-05-02', 1),
(14, 'WIS003', 'Malang Night Paradise', 0.000000, 0.000000, 'Malang Night Paradise menjadi destinasi pilihan warga lokal maupun wisatawan sejak pertengahan tahun 2017. Taman wisata ini merupakan pengembangan dari taman air Hawai Waterpark. Sehingga keduanya masih berada dalam satu lokasi', 'Taman ini memiliki konsep serupa dengan Taman Pelangi di Monumen Jogja Kembali, Yogyakarta. Pada siang hari, tempat wisata ini adalah Hawai Waterpark. Kemudian di malam hari, menjadi Malang Night Paradise. Hawai Waterpark dan Malang Night Paradise dikelola oleh PT. Adikarya Citra Abadi.\r\n\r\nMalang Night Paradise memadukan aspek edukasi, seni dan teknologi dalam menjadikannya obyek wisata. Banyaknya sarana edukasi menjadi satu keunggulan tersendiri bagi taman ini. Konsep yang diusung taman ini adalah Lantern and Dinosaur. Dipadukan dengan teknologi, tempat ini menjadi sangat interaktif.', '1 mnp.JPG', '42104551-237798283565269-687233191580482825-n-45c4119f07c4146617916ed18bf00259.jpg', 'DSCF2489.JPG', '2019-05-03', 1),
(15, 'WIS002', 'Hawai Water Park', 0.000000, 0.000000, 'Malang sebagai kota pariwisata semakin mengembangkan inovasi untuk terus memberikan yang terbaik akan lokasi wisatanya. Berlibur ke Malang akan semakin lengkap jika mengajak keluarga berwisata ke salah satu tempat permainan air terbesar di Kota ini. Hawai Waterpark Malang menawarkan beragam kegiatan air dan wahana seru dan menarik.\r\nHawai Waterpark Malang dibangun di atas lahan dengan luas 28.000 meter persegi. Hawai Waterpark Malang ini memberika warna baru pariwisata di kota Malang terutama wisata air. Di wisata air malang ini, wisatawan tentu akan merasa nyaman dan betah karena Hawai Waterpark Malang akan memberikan fasilitas dan pelayanan yang terbaik bagi pelangganya.', 'Disampig banyaknya wahana seru, wisata Hawai Waterpark ini juga memiliki berbagai fasilitas. Fasilitas di lokasi ini adalah Ban Single, Ban Single, Ban Double, Loker Standar, Loker Family, Handuk (Towel), Baju Renang Wanita, Baju Renang Pria, Gazebo dan bnyak lagi fasilitas pendukung lainya.', '1 hw.jpg', 'akses-menuju-hawai-waterpark-malang-jawa-timur.jpg', 'hawai.jpg', '2019-05-07', 9),
(16, 'WIS001', 'Pantai Sendang Biru', 0.000000, 0.000000, 'Sebuah pantai yang berada sekitar 67 kilometer ke arah selatan kota malang ini adalah sebuah pantai yang cukup eksotis di kota malang. Selain sebagai tempat wisata pantai sendang biru adalah tempat mendaratnya kapal-kapal ikan. Selain berwisata tentunya wisatawan bisa langsung membeli ikan laut yang masih segar.\r\n', 'Yang menarik dari pantai sendang biru adalah selain airnya yang tenang dan pantai nya yang bersih, ombak di pantai sendang biru sangat tenang, cocok untuk para wisatawan yang ingin snorkling menikmati indahnya dasar laut pantai sendang biru ataupun sekedar berkeliling di selat sempu dengan menyewa perahu nelayan setempat.\r\n\r\nNama dari pantai sedang biru sendiri tidak lepas dari sebuah mata air yang membentuk sebuah kolam alami di dekat perbukitan pantai tersebut. Air yang keluar dari mata air tersebut berwarna bening keboruan. Konon mata air tersebut sejak dahulu menopang kebutuhan air penduduk setempat.&nbsp;Sendang biru sendiri berada di sekitar 1 kilometer dari posisi pantai. dan berada di perkampungan setempat.\r\n', '1 sb.jpg', '1-listyareina-wordpress-com.jpg', 'pantai-sendang-biru-pulau-sempu-23.jpg', '2019-05-08', 1),
(17, 'WIS001', 'Gunung Bromo', 0.000000, 0.000000, 'Gunung Bromo (dari bahasa Sanskerta: Brahma, salah seorang Dewa Utama dalam agama Hindu) atau dalam bahasa Tengger dieja \"Brama\", adalah sebuah gunung berapi aktif di Jawa Timur, Indonesia. Gunung ini memiliki ketinggian 2.329 meter di atas permukaan laut dan berada dalam empat wilayah kabupaten, yakni Kabupaten Probolinggo, Kabupaten Pasuruan, Kabupaten Lumajang, dan Kabupaten Malang. Gunung Bromo terkenal sebagai objek wisata utama di Jawa Timur. Sebagai sebuah objek wisata, Bromo menjadi menarik karena statusnya sebagai gunung berapi yang masih aktif. Gunung Bromo termasuk dalam kawasan Taman Nasional Bromo Tengger Semeru.', 'Bentuk tubuh Gunung Bromo bertautan antara lembah dan ngarai dengan kaldera atau lautan pasir seluas sekitar 10 kilometer persegi. Ia mempunyai sebuah kawah dengan garis tengah ± 800 meter (utara-selatan) dan ± 600 meter (timur-barat). Sedangkan daerah bahayanya berupa lingkaran dengan jari-jari 4 km dari pusat kawah Bromo.', '96d60356-f54f-4b9d-a5af-4cbc8c24f3c7_169.jpeg', 'Status-Gunung-Bromo.jpg', 'wisata-gunung-bromo-samitra-wisata-paket-murah-gunung-bromo-samitra-travel-samitra-wisata.jpg', '2019-05-10', 1),
(18, 'WIS004', 'Kuliner Merjosari', 0.000000, 0.000000, 'Terkenal dengan pusat kuliner, hampir di setiap sudut kota Malang menawarkan keunikannya masing masing. Tidak hanya makanan legendaris kota Malang saja yang bisa anda coba, masih banyak sekali pilihan lain. Kawasan wisata kuliner Merjosari kota Malang Jawa Timur bisa menjadi jujugan anda. Mungkin namanya tidak sepopular kawasan lain seperti Soekarno Hatta maupun Sigura Gura, namun menjelajahi tempat lain juga perlu. Jika anda ingin  mencari tempat nongkrong di kawasan wisata kuliner Merjosari kota Malang Jawa Timur', 'terdapat banyak segala jenis makanan mulai dari yang murah hingga mahal dan juga mulai dari makanan ringan hingga makanan berat', '1 ms.jpg', 'coffee-shops-1920x1080.jpg', 'kuliner-hits-malang.jpg', '2019-05-10', 1),
(19, 'WIS003', 'BNS Malang', 0.000000, 0.000000, 'Batu Night Spectacular adalah sebuah wahana wisata&nbsp;terbaru dari Kota Batu. Malam hari anda bisa menikmati suguhan wisata paling spektakuler di Jawa Timur di&nbsp;Batu Night Spectacular (BNS). Obyek wisata yang berlokasi di Desa Oro-oro Ombo ini menyajikan aneka wahana yang bisa dinikmati seluruh anggota keluarga anda. Ada puluhan wahana yang tidak akan bisa Anda lupakan setelah menikmatinya seperti galeri hantu, slalom tes, sepeda udara tertinggi, lampion garden, dan trampoline. Di obyek wisata ini anda juga bisa menguji adrenaline&nbsp;dengan mencoba beberapa wahana seperti drag race, mouse coaster, dan beberapa permainan lain.\r\n', 'Banyak juga wahana yang khusus disediakan untuk anak-anak seperti kids zone yang terdiri dari 25 macam.&nbsp;Selain berbagai wahana menarik, keunikan BNS juga didukung letaknya yang sangat strategis di dataran tinggi. Dari obyek wisata mala mini anda bisa menikmati pemandangan alam&nbsp;Kota Malang dan sekitarnya dengan lebih sempurna. Gemerlap lampu di kawasan Malang Raya malam hari akan mengiringi suasana kongkow anda di beberapa kafe yang tersedia disana.&nbsp;Batu Night Spectacular ( BNS )&nbsp;juga menyiapkan beberapa wahana yang unik yang rugi kalau dilewatkan seperti lampion garden, galeri hantu, cinema empat dimensi, sirkuit go kart terpanjang, layar sepanjang 50 meter di area food court, dan air mancur menari.\r\n', '1 bns.jpg', 'Batu-Night-Spectacular-3.jpg', 'wahana_dan_atraksi_di_batu_night_spectacular_ulinulin.jpg', '2019-05-11', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`ID_EVENT`),
  ADD KEY `FK_EVENT_USER` (`ID_USER`);

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
  ADD KEY `FK_MEMILIKI_5` (`ID_KEBUDAYAAN`),
  ADD KEY `FK_MEMILIKI_KELOLA2` (`ID_USER`);

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
-- Indexes for table `pengelola`
--
ALTER TABLE `pengelola`
  ADD PRIMARY KEY (`ID_PENGELOLA`);

--
-- Indexes for table `proses`
--
ALTER TABLE `proses`
  ADD PRIMARY KEY (`ID_PROSES`);

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
  ADD KEY `FK_MEMILIKI_2` (`ID_WISATA`),
  ADD KEY `FK_MEMILIKI_KELOLA` (`ID_USER`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `ID_EVENT` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `kebudayaanpost`
--
ALTER TABLE `kebudayaanpost`
  MODIFY `ID_POSTKEBUDAYAAN` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `komentar_budaya`
--
ALTER TABLE `komentar_budaya`
  MODIFY `ID_KOMENTARBUDAYA` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `komentar_wisata`
--
ALTER TABLE `komentar_wisata`
  MODIFY `ID_KOMENTARWISATA` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `kontak_us`
--
ALTER TABLE `kontak_us`
  MODIFY `ID_KONTAK` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `proses`
--
ALTER TABLE `proses`
  MODIFY `ID_PROSES` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `ID_USER` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `wisatapost`
--
ALTER TABLE `wisatapost`
  MODIFY `ID_POSTWISATA` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `event`
--
ALTER TABLE `event`
  ADD CONSTRAINT `FK_EVENT_USER` FOREIGN KEY (`ID_USER`) REFERENCES `user` (`ID_USER`);

--
-- Constraints for table `kebudayaanpost`
--
ALTER TABLE `kebudayaanpost`
  ADD CONSTRAINT `FK_MEMILIKI_5` FOREIGN KEY (`ID_KEBUDAYAAN`) REFERENCES `kebudayaan` (`ID_KEBUDAYAAN`),
  ADD CONSTRAINT `FK_MEMILIKI_KELOLA2` FOREIGN KEY (`ID_USER`) REFERENCES `user` (`ID_USER`);

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
-- Constraints for table `wisatapost`
--
ALTER TABLE `wisatapost`
  ADD CONSTRAINT `FK_MEMILIKI_2` FOREIGN KEY (`ID_WISATA`) REFERENCES `wisata` (`ID_WISATA`),
  ADD CONSTRAINT `FK_MEMILIKI_KELOLA` FOREIGN KEY (`ID_USER`) REFERENCES `user` (`ID_USER`);

DELIMITER $$
--
-- Events
--
CREATE DEFINER=`root`@`localhost` EVENT `delete_posts` ON SCHEDULE EVERY 1 SECOND STARTS '2019-05-14 10:45:25' ON COMPLETION NOT PRESERVE ENABLE DO delete FROM proses WHERE TIMESTAMPDIFF(MINUTE,NOW(),WASES) <= 1$$

DELIMITER ;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
