-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 11 Jun 2019 pada 07.24
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
-- Database: `bangguitar`
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
(2, 'user'),
(3, 'penjual'),
(4, 'musisi');

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
(9, 'Akustik'),
(10, 'Elektrik'),
(11, 'Bass'),
(12, 'Double Neck'),
(13, 'Klasik');

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
  `user_post` int(11) NOT NULL,
  `harga_lelang` int(11) NOT NULL,
  `harga_kelipatan` int(11) NOT NULL,
  `jatuh_tempo` int(11) NOT NULL,
  `status` varchar(30) NOT NULL,
  `kualitas` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `post`
--

INSERT INTO `post` (`id_post`, `judul_post`, `tgl_post`, `kategori_post`, `isi_post`, `nama_file`, `user_post`, `harga_lelang`, `harga_kelipatan`, `jatuh_tempo`, `status`, `kualitas`) VALUES
(13, 'Gitar Soo', '2019-06-01 15:30:43', 9, 'nwjbkehj\r\n', '../admin/images/upload/Gitar Soo.jpg', 21, 1600000, 20000, 2, 'Terverifikasi', 'Buruk');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tawar`
--

CREATE TABLE `tawar` (
  `id_post` int(11) NOT NULL,
  `judul_post` varchar(100) NOT NULL,
  `waktu_tawar` datetime NOT NULL,
  `harga_tawar` int(11) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tawar`
--

INSERT INTO `tawar` (`id_post`, `judul_post`, `waktu_tawar`, `harga_tawar`, `id_user`) VALUES
(13, 'Gitar Soo', '2019-06-02 12:25:26', 1620000, 15),
(13, 'Gitar Soo', '2019-06-02 12:27:36', 1640000, 16),
(13, 'Gitar Soo', '2019-06-10 10:12:00', 1660000, 17),
(13, 'Gitar Soo', '2019-06-10 10:12:43', 1680000, 22),
(13, 'Gitar Soo', '2019-06-10 10:32:18', 1700000, 22),
(13, 'Gitar Soo', '2019-06-10 10:33:40', 1720000, 22),
(13, 'Gitar Soo', '2019-06-11 07:11:08', 1740000, 17),
(13, 'Gitar Soo', '2019-06-11 07:21:55', 1760000, 24);

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
(20, 'hamba3', 'hamba3', 'hamba3', 'Laki-laki', 'hbiknxkjs@gmail.com', 'hgyiuol', '2018-07-22', 2),
(21, 'Curry Seth St', 'sethcurry2', 'sethcurry', 'Laki-laki', 'ass@gam.com', 'Oakland1', '2018-07-25', 3),
(22, 'curry', 'curry', 'curry', 'Laki-laki', 'najk', 'jl', '2019-05-02', 2),
(23, 'Ahmad Dani', 'Adani', 'adani', 'Laki-laki', 'adani@gmail.com', 'Malang', '2019-06-02', 4),
(24, 'Owi', 'Owi', 'owi', 'Laki-laki', 'owi@gmail.com', 'Malang', '2019-06-11', 2);

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
-- Indexes for table `tawar`
--
ALTER TABLE `tawar`
  ADD KEY `fk_tawar_id_post` (`id_post`),
  ADD KEY `fk_tawar_id_user` (`id_user`);

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
  MODIFY `id_level` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id_post` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

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
-- Ketidakleluasaan untuk tabel `tawar`
--
ALTER TABLE `tawar`
  ADD CONSTRAINT `fk_tawar_id_post` FOREIGN KEY (`id_post`) REFERENCES `post` (`id_post`),
  ADD CONSTRAINT `fk_tawar_id_user` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Ketidakleluasaan untuk tabel `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `fk_detail_user` FOREIGN KEY (`level_user`) REFERENCES `jenis_user` (`id_level`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
