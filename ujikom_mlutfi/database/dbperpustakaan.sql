-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Inang: 127.0.0.1
-- Waktu pembuatan: 12 feb 2024 pada 13.14
-- Versi Server: 5.5.27
-- Versi PHP: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Basis data: `dbperpustakaan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `anggota`
--

CREATE TABLE IF NOT EXISTS `anggota` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nis` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jk` enum('Laki-Laki','Perempuan') NOT NULL,
  `alamat` varchar(500) NOT NULL,
  `kelas` enum('X ATPH','XI ATPH','XII ATPH','X TBSM 1','X TBSM 2','XI TBSM 1','XI TBSM 2','XII TBSM 1','XII TBSM 2','X RPL 1','X RPL 2','X RPL 3','XI RPL 1','XI RPL 2','XI RPL 3','XII RPL 1','XII RPL 2','XII RPL 3','XII RPL 4') NOT NULL,
  `tglinput` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data untuk tabel `anggota`
--

INSERT INTO `anggota` (`id`, `nis`, `nama`, `tgl_lahir`, `jk`, `alamat`, `kelas`, `tglinput`) VALUES
(2, 5717, 'muhammad lutfi', '24-02-24', 'laki-laki', 'Bandung', 'XII RPL 1', '2023-03-13 13:01:28'),
(3, 2147483647, 'sandi', '2020-06-01', 'laki-laki', 'bandung', 'XII RPL 1', '2020-06-22 13:01:47'),
(4, 3984756, 'asep', '2020-06-01', 'laki-laki', 'bandung', 'XII RPL 1', '2020-06-22 13:02:04'),
(5, 1111, 'bayu', '2020-01-01', 'laki-laki', 'bandung', 'XII RPL 1', '2020-06-23 06:52:22');

-- --------------------------------------------------------

--
-- Struktur dari tabel `buku`
--

CREATE TABLE IF NOT EXISTS `buku` (
  `id` int(9) NOT NULL AUTO_INCREMENT,
  `judul` varchar(255) NOT NULL,
  `pengarang` varchar(100) NOT NULL,
  `penerbit` varchar(150) NOT NULL,
  `thnterbit` varchar(25) NOT NULL,
  `jumlah` int(3) NOT NULL,
  `lokasi` enum('rak 1','rak 2','rak 3','rak 4','rak 5','rak 6','rak 7') NOT NULL,
  `tglinput` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data untuk tabel `buku`
--

INSERT INTO `buku` (`id`, `judul`, `pengarang`, `penerbit`, `thnterbit`, `jumlah`, `lokasi`, `tglinput`) VALUES
(14, 'ppkn', 'aaaa', 'bbbb', '1990', 17, 'rak 5', '2020-06-23 06:53:13'),
(15, 'PKWU', 'ahmad', 'werti', '1990', 20, 'rak 5', '2020-06-24 09:19:34');

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `no` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` enum('admin','user') NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`no`, `username`, `password`, `level`) VALUES
(15, 'muhammadrifqi@gmail.com', '202cb962ac59075b964b07152d234b70', 'admin'),
(18, 'mrifqi@gmail.com', '4124bc0a9335c27f086f24ba207a4912', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE IF NOT EXISTS `transaksi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(255) NOT NULL,
  `nis` varchar(11) NOT NULL,
  `nama` varchar(250) NOT NULL,
  `tglpinjam` varchar(30) NOT NULL,
  `tglkembali` varchar(30) NOT NULL,
  `status` varchar(100) NOT NULL,
  `tglinput` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=59 ;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`id`, `judul`, `nis`, `nama`, `tglpinjam`, `tglkembali`, `status`, `tglinput`) VALUES
(35, 'sangkuriang', '6786554', 'rafa azka ', '2020-06-11', '2020-06-18', 'kembali', '0000-00-00 00:00:00'),
(36, 'matematika', '765', 'lastrong', '2020-06-18', '2033-12-22', 'kembali', '0000-00-00 00:00:00'),
(37, 'matematika', '765', 'lastrong', '2020-06-20', '2020-06-27', 'kembali', '0000-00-00 00:00:00'),
(38, 'matematika', '5717', 'Lastri Indriyani', '2020-06-20', '2032-12-17', 'kembali', '0000-00-00 00:00:00'),
(39, 'matematika', '5717', 'Lastri Indriyani', '2020-06-20', '2032-12-17', 'kembali', '0000-00-00 00:00:00'),
(40, 'inggris', '3984756', 'novi rahmawati', '2020-06-22', '2020-06-29', 'kembali', '0000-00-00 00:00:00'),
(41, 'matematika', '3984756', 'novi rahmawati', '2020-06-22', '2020-06-29', 'kembali', '0000-00-00 00:00:00'),
(42, 'matematika', '5717', 'Lastri Indriyani', '2020-06-22', '2020-06-29', 'kembali', '2020-06-22 12:26:31'),
(43, 'matematika', '5717', 'Lastri Indriyani', '2020-06-22', '2020-06-29', 'kembali', '2020-06-22 12:26:37'),
(44, 'matematika', '5717', 'Lastri Indriyani', '2020-06-22', '2034-12-18', 'kembali', '2020-06-23 03:04:32'),
(45, 'MATEMATIKA', '5717', 'Lastri Indriyani', '2020-06-23', '2020-06-30', 'kembali', '2020-06-23 03:04:01'),
(46, 'MATEMATIKA', '5717', 'Lastri Indriyani', '2020-06-23', '2020-06-30', 'kembali', '2020-06-23 03:04:16'),
(47, 'MATEMATIKA', '5717', 'Lastri Indriyani', '23-06-2020', '30-06-2020', 'kembali', '2020-06-23 02:52:54'),
(48, 'MATEMATIKA', '2147483647', 'Mita Nurhasanah', '23-06-2020', '30-06-2020', 'kembali', '2020-06-23 02:53:12'),
(49, 'MATEMATIKA', '5717', 'Lastri Indriyani', '23-06-2020', '2020-07-07', 'kembali', '2020-06-23 02:53:04'),
(50, 'MATEMATIKA', '2147483647', 'Mita Nurhasanah', '2020-06-23', '2035-12-18', 'kembali', '2020-06-23 03:15:28'),
(51, 'ppkn', '5717', 'Lastri Indriyani', '2020-06-23', '1970-01-01', 'kembali', '2020-06-23 04:50:52'),
(52, 'ppkn', '3984756', 'novi rahmawati', '2020-06-23', '2017-06-26', 'pinjam', '2020-06-23 03:39:43'),
(53, 'ppkn', '5717', 'Lastri Indriyani', '2020-06-23', '1970-01-01', 'kembali', '2020-06-23 04:51:37'),
(54, 'ppkn', '2147483647', 'Mita Nurhasanah', '2020-06-23', '2009-01-20', 'kembali', '2020-06-23 04:51:28'),
(55, 'ppkn', '5717', 'Lastri Indriyani', '2020-06-23', '20-07-07', 'kembali', '2020-06-23 04:51:12'),
(56, 'ppkn', '5717', 'Lastri Indriyani', '2020-06-23', '2020202020202020-0707-0707', 'kembali', '2020-06-23 04:51:02'),
(57, 'ppkn', '5717', 'Lastri Indriyani', '2020-06-23', '2020-07-07', 'pinjam', '2020-06-23 04:50:29'),
(58, 'ppkn', '1111', 'Irman Ardiansyah', '2020-06-23', '2020-07-07', 'pinjam', '2020-06-23 06:53:27');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
