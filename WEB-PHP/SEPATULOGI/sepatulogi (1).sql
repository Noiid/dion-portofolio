-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 10 Jul 2018 pada 05.01
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
-- Database: `sepatulogi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis_user`
--

CREATE TABLE `jenis_user` (
  `id_level` int(11) NOT NULL,
  `nama_level` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jenis_user`
--

INSERT INTO `jenis_user` (`id_level`, `nama_level`) VALUES
(1, 'admin'),
(2, 'user');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
(1, 'Adidas'),
(2, 'Converse'),
(3, 'Vans'),
(5, 'Nike'),
(6, 'Underarmour'),
(7, 'Saucony'),
(8, 'Puma');

-- --------------------------------------------------------

--
-- Struktur dari tabel `post`
--

CREATE TABLE `post` (
  `id_post` int(11) NOT NULL,
  `judul_post` varchar(100) NOT NULL,
  `tgl_post` datetime NOT NULL,
  `kategori_post` int(11) NOT NULL,
  `isi_post` varchar(50000) NOT NULL,
  `nama_file` varchar(250) NOT NULL,
  `user_post` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `post`
--

INSERT INTO `post` (`id_post`, `judul_post`, `tgl_post`, `kategori_post`, `isi_post`, `nama_file`, `user_post`) VALUES
(6, 'Adidas SL72', '2018-07-06 10:25:56', 1, 'Bicara tentang sepatu original pastinya kita juga tidak akan bisa lepas untuk membahas salah satu merek sepatu terbesar dunia Asal Jerman yakni Adidas. Merek sepatu Adidas ini merupakan salah satu merek sepatu yang melegenda sejak jaman dahulu, mulai sepatu dari sepatu running, sports, dan yang paling ngetrend saaat ini adalah sepatu model casual adidas memproduksi semua tipe sepatu ini dengan implementasi desain yang menarik dan istimewa. kan kita bahas kali adalah salah satu produk unggulan sepatu Adidas yang sangat melegenda dan sampai saat ini pun masih menjadi salah satu tipe sepatu dari Adidas yang cukup populer, tidak lain dan tidak bukan sepatu ini bernama Adidas SL 72. SL 72 ini mengalami perjalanan yang cukup berliku liku sejak saat pertama perilisannya. Bagi anda para 3foils yang ingin mengetahui lebih jelas dalam perjalanan perilisan Adidas SL 72 ini, maka dibawah ini akan kami jelaskan sejarah Adidas SL 72 secara lengkap dan terperinci. Lebih jelasnya simak ulasan dibawah ini. Sejarah Sepatu Adidas SL 72 Adidas SL 72, Awalnya dirancang untuk Olimpiade di Munich pada tahun 1972. Dan secara tradisional dipakai di lintasan lari yaitu sebagai sepatu running, jadi pada umumnya fungsi dasar dari Sepatu Adidas SL 72 ini awalnya sebagai sepatu lari atau sepatu joging. Adidas Sl72 dibuat dari material nylon yang dicampur dengan bahan suede, sehingga menghasilkan sepatu yang benar-benar ringan untuk dipakai berlari. Sejarah Sepatu Adidas SL 72 Namun fitur yang paling khas dari sepatu ini yaitu ada di tapak outsolenya, desain outsole yang bergerigi berkesan memiliki desain yang berbeda dan menimpulkan keunikan tersendiri. Pada awalnya sepatu ini dirilis dengan desain T -toe dengan warna yang bersahaja seperti warna biru atau coklat, warna ini sangat berbeda dengan pendahulunya yakni SL 73 yangdidesain lebih dengan warna yang cerah seperti merah dan kuning. Sejak awal diluncurkan, SL 72 memang digunakan sebagai sepatu running / lari. Namun dalam era modern belakangan ini, trend lebih bergeser ke arah &amp;ldquo;Casual&amp;rdquo;, otomatis SL 72 sudah jarang dipakai lari. Dan tentunya sepatu ini sekarang menjadi salah satu sepatu yang multifungsi dikarenakan sepatu ini cocok jika anda gunakan untuk sepatu running yaitu untuk sepatu joging atau lari namun juga bisa anda gunakan sebagai sepatu casual yang bisa anda pakai saat pergi keluar, hang out, atau berekreasi bersama teman dan keluarga anda. Jadi anda sekarang ingin memakai sepatu Adidas SL 72 untuk gaya gayaan atau untuk lari? ini semua terserah anda, yang penting harus selalu pakai sepatu Adidas SL 72 Original\r\n', 'images/upload/Adidas SL72.jpg', 12),
(10, 'Cara Membedakan Converse One Star Asli dan Palsu', '2018-07-06 11:09:08', 2, 'Dari sekian banyak merek sneaker yang ada di dunia, Converse jadi salah satu merek yang memiliki cukup banyak penggemar. Itu sebabnya, selain membeli di toko Converse di pusat perbelanjaan, alas kaki merek ini juga bisa dengan mudah kamu temukan di kalangan para reseller. Namun masalahnya, buat sebagian besar dari kita, ada keraguan tersendiri saat harus membeli sneaker incaran lewat &lsquo;tangan kedua&rsquo;. Pertanyaan kayak &lsquo;Ini ori (asli) atau KW?&rsquo; kerap muncul di kepala kita. Ya, permasalahan barang asli vs KW memang jadi momok tersendiri bagi kita. Enggak mau, kan, kita beli sneaker dengan harga yang cukup mahal, tapi ternyata barangnya palsu Lantas, apa yang harus kita lakukan? Enggak usah panik. Buat kamu yang berniat untuk membeli Converse One Star, simak penjelasan berikut ini. 1. Bentuknya Salah satu cara paling mudah untuk menentukan sepatu Converse One Star asli dan palsu adalah dengan melihat shapte atau bentuk dari sepatu incaran. Jika dilihat secara langsung, sepatu palsu atau KW punya bentuk yang aneh karena dibuat secara terburu-buru dan terkesan asal-asalan. Biasanya, ada beberapa bagian yang kurang simetris di beberapa sisinya. 2. Tounge Label Selain bentuk, kamu juga wajib melihat tounge label. Di sini, kamu bisa memeriksa tag size yang ada di bagian dalamnya. &ldquo;Di bagian ini ada Stock Keeping Unit (SKU). Coba aja search di google, jadi ada beberapa SKU sepatu KW yang kalau kita cari di internet enggak akan muncul gambarnya,&rdquo; ujar Bayu Hilmayan, Kategori Inchare Footwear Converse kepada kumparan (kumparan.com). 3. Menghadapi kw premium Enggak bisa dipungkiri, sekarang ini, pembuat dan penjual sepatu KW sudah semakin ahli untuk memalsukan barang dagangannya. Namun, kita tetap enggak boleh lengah. Menurut Bayu, hal tersebut masih bisa kita atasi. &ldquo;Kalau kode SKU sepatu KW premium muncul di internet, kita masih harus memastikan kembali barang tersebut. Jadi, di sepatu, tuh, ada nomor serinya. Jadi, di tounge label ada sekitar 10 digit nomor seri. Nah, enggak banyak yang tahu, nomor seri di sepatu kanan harus beda dengan yang di sepatu kiri. Kalau sama, bisa dipastikan itu barang KW,&rdquo; lanjut Bayu. 4. Material Selain dari looks sepatu, lewat material yang digunakan kita juga bisa menebak apakah sepatu yang hendak kita beli itu asli atau palsu. &ldquo;Kualitas dari rubber (karet) sangat beda antara yang asli dan palsu. Yang asli, karetnya akan lebih kasar,&rdquo; ujar Harry Ramadhana, Senior Division Manager Converse.\r\n', 'images/upload/Jangan Tertipu, Ini 4 Cara Membedakan Converse One Star Asli dan Palsu.jpg', 12),
(11, 'Perayaan 50 Tahun Sepatu Klasik Puma', '2018-07-06 11:25:13', 8, 'Perayaan 50 tahun sepatu klasik Puma ditandai dengan peluncuran serangkaian sneaker, yang salah satunya adalah versi serupa dengan material suede berwarna emas . Pada bagian samping tumit sepatu &quot;emas&quot; itu, dibubuhi cetakan bertulis 1968 yang menandai tahun pembuatan edisi pertama sepatu klasik dari perusahaan yang didirikan di tahun 1948 oleh Rudolf Dassler di Bavaria, Jerman. Seperti diberitakan laman footwearnews.com, penggemar segala usia dapat memperoleh sepatu edisi spesial ini, mulai 3 Maret mendatang. Untuk ukuran dewasa dihargai 100 dollar AS, anak 80 dollar AS, balita 70 dollar AS, dan batita 50 dollar AS.&nbsp; Artinya, produk spesial ultah Puma ini dibanderol dalam rentang harga Rp 680.000-Rp 1.300.000. Tak hanya itu, sebagai bagian dari perayaan yang sama, diluncurkan pula sepatu hasil kolaborasi dengan rapper Big Sean. Dengan mengusung tema &ldquo;White Whisper&rdquo;, sepatu Puma yang juga berbahan suede tersebut terlihat lebih modern. Selain itu, &quot;tanda tangan&quot; Big Sean pun dibubuhi pada bagian sepatu dekat tumit, melengkapi detail senada yang dicetak di bagian lidah sneaker itu. Edisi Puma Big Sean ini juga akan dirilis dalam segala ukuran pada 22 Maret 2018, di mana untuk ukuran dewasa dibenderol seharga 110 dollar AS atu kira-kira Rp 1,5 juta.\r\n', 'images/upload/Sneaker Suede Emas, Tandai Perayaan 50 Tahun Sepatu Klasik Puma.jpg', 9),
(12, 'Vans Old Skool Sukses Menjadi Sepatu Paling Demokratis Sedunia', '2018-07-08 08:52:53', 3, 'Vans seri Old Skool yang polosan mungkin cuma dibandrol $60 (setara Rp800 ribu). Siapa sangka, sneaker ikonik ini punya pesona melewati batas-batas kelas. Sepatu ini bisa dijumpai di lemari seorang anak skate kismin hingga para elit dunia fesyen yang akrab sama paparazzi. Ketika kriteria stylish&mdash;termasuk di lingkaran fanatik streetwear&mdash;diukur dari kepemilikan barang yang tak bisa dibeli orang lain, daya tarik massal Old Skool terasa seperti udara segar yang menerabas batas-batas suci dunia fesyen. Old Skool tetap keren dimiliki, walaupun dia bisa dibeli siapapun.\r\n\r\nSalah satu hal yang membuat Van Old Skool digemari semua orang dipicu satu faktor berikut: sepatu ini mudah didapatkan. Dari mahasiswa sadar fesyen berumur 19 tahun hingga rapper paling kondang di kolong jagat. Produk Vans adalah barang yang bisa kamu beli dari toko sepatu tanpa harus merogoh kocek dalam-dalam. Uniknya, pada momen-momen tertentu, popularitas sneakers ini tak hanya mampir di toko-toko retail tapi juga sampai ke atas catwalk. Terakhir kali, Vans Old Skool nongol dalam presentasi koleksi musim semi/panas peragaan busana Off-White dan sampai sekarang sneaker ini masih kerap dijumpai membungkus kaki para elit streetwear di belahan bumi manapun.\r\n\r\nLantas, pertanyaannya: Gimana ceritanya sih Vans Old Skool bisa begitu kondang?\r\n\r\nSepatu ini lahir dari coret-coretan yang dibuat co-founder Vans, Paul Van Doren. Old Skool adalah sneaker pertama yang memasang siluet lambang ikonik Vans di panel luar sepatu. Karakteristik itu kelak jadi penanda sneaker-sneaker Vans lainnya. Ketika pertama kali dipasarkan pada 1977, lekukan kulitnya diberi nama &quot;jazz stripe&quot; sebelum kemudian lebih kondang dengan nama &quot;sidestripe&quot; di kalangan penggila Vans. Dipadu dengan desain low cut, tumit sepatu dari kulit yang empuk, serta panel suede klimis, gaya sneakers satu ini nyaris tak bergeser selama 40 tahun. Namun, kalau kamu sempat menelusuri iklan-iklan vintage Vans dari arsip perusahaan, kamu hampir mustahil menemukan nama Old Skool di dalamnya. Wajar sih, sebab saat itu sneaker legendaris ini dikenal dengan nama &#39;Syle 36&#39;, merek sepatu yang masih terus diingat para skater bengal Amerika Serikat sepanjang dekade 1970&#39;an.&nbsp;\r\n\r\nBelakangan, walau fungsi awalnya sebagai sepatu skate&mdash;seperti kultur olahraga lainnya&mdash;Vans Old Skool berhasil menembus pasar mainstream. Dengan makin seringnya band-band penting seperti Thrasher dan Supreme dikenakan oleh klan Kardhasian, kancah streetwear kini semakin menjadi lahan basah pemburu fashion setengah dekade ke belakang. Perkembangan pasar ini bikin para pemuja Vans ketar-ketir. Mereka khawatir kultur yang selama mereka jaga dikooptasi orang kaya dari pasar arus utama yang pengin kelihatan keren. Bagi mereka, Vans adalah brand fesyen yang sangat demokratis. Terutama karena produk Old Skool yang sebenarnya berangkat dari kultur skateboard tapi boleh dipakai oleh siapapun tanpa harus khawatir di-bully para penggemar fesyen.\r\n\r\nBerbeda dari seri Vans Authentic yang masih terlihat seperti sepatu senam anak SMA, Old Skool punya aura lebih cool. Old Skool cukup sederhana ketika dipadu dengan busana apapun. Kombinasi kulit, suede, dan warna apapun yang diimpikan penggunanya pas dipakai dalam segala suasana. Tak ayal, Old Skool jadi sneaker kepercayaan setiap trendsetter di muka Bumi.\r\n\r\nContohnya Frank Ocean. Setelah keluar dari persembunyian pasca merilis albumBlonde,&nbsp;musisi favorit banyak orang yang licin bagai belut ini beberapa kali mengenakan Vans Old Skool hitam putih. Frank juga pernah kedapatan mengenakan Sk8-Hi, sepatu yang masih bersaudara sama seri high-top dari Old Skool. Mantan kawannya di kelompok Odd Future, Tyler the Creator, sebelumnya pernah mengaku bahwa Old Skool adalah sepatu &quot;andalannya.&quot;\r\n', 'images/upload/Vans Old Skool Sukses Menjadi Sepatu Paling Demokratis Sedunia.jpg', 12);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `alamat` varchar(1000) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `level_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `nama_lengkap`, `username`, `password`, `jenis_kelamin`, `email`, `alamat`, `tgl_lahir`, `level_user`) VALUES
(9, 'Maulana Will', 'Maula', 'maulana', 'Laki-laki', 'dion@gmail.com', 'malang', '1999-01-22', 2),
(10, 'Diko Ahay', 'dion', 'diko', 'Perempuan', 'dion123@gmail.com', 'dasvf', '2018-07-25', 2),
(11, 'Maulana Williawarma', 'adminToko', 'dwaedvsfdas', 'Laki-laki', 'ass@gam.com', 'fdvsd', '2018-07-09', 2),
(12, 'admin', 'admin', 'admin', 'Laki-laki', 'admin@gmail.com', '', '0000-00-00', 1),
(13, 'dion', 'dion', 'admin', 'Laki-laki', 'dion123@gmail.com', 'xcsads', '2018-07-14', 1),
(14, 'Maulana Williawarma', 'Maulana Dion', 'maulanaw', 'Laki-laki', 'dion@gmail.com', 'xcsadsfd', '2018-07-29', 2),
(15, 'will', 'willsmoke', 'willsmoke', 'Perempuan', 'will@gmail.com', 'will', '2018-07-15', 2),
(16, 'Warma', 'warma', 'warma', 'Laki-laki', 'dion@gmail.com', ' kjn knj', '2018-07-08', 2),
(17, 'noid', 'noid', 'noid', 'Laki-laki', 'noid@gmail.com', 'ndd', '2018-07-22', 2),
(18, 'hamba', 'hamba', 'hamba', 'Laki-laki', 'hamba@gmail.com', 'hamba', '2018-07-22', 2),
(19, 'Hamba2', 'hamba2', 'hamba2', 'Perempuan', 'bhjbkl@gmail.com', 'bjk', '2018-07-29', 2),
(20, 'hamba3', 'hamba3', 'hamba3', 'Laki-laki', 'hbiknxkjs@gmail.com', 'hgyiuol', '2018-07-22', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jenis_user`
--
ALTER TABLE `jenis_user`
  ADD PRIMARY KEY (`id_level`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id_post`),
  ADD KEY `fk_detail_kategori_post` (`kategori_post`),
  ADD KEY `fk_detail_user_post` (`user_post`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `fk_detail_user` (`level_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jenis_user`
--
ALTER TABLE `jenis_user`
  MODIFY `id_level` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id_post` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `post`
--
ALTER TABLE `post`
  ADD CONSTRAINT `fk_detail_kategori_post` FOREIGN KEY (`kategori_post`) REFERENCES `kategori` (`id_kategori`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_detail_user_post` FOREIGN KEY (`user_post`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `fk_detail_user` FOREIGN KEY (`level_user`) REFERENCES `jenis_user` (`id_level`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
