-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: feb 12, 2024 at 12:59 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbperpustakaan`
--

-- --------------------------------------------------------

--
-- Table structure for table `anggota`
--

CREATE TABLE `anggota` (
  `id` int(11) NOT NULL,
  `nis` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jk` enum('Laki-Laki','Perempuan') NOT NULL,
  `alamat` varchar(500) NOT NULL,
  `kelas` enum('X ATPH','XI ATPH','XII ATPH','X TBSM 1','X TBSM 2','XI TBSM 1','XI TBSM 2','XII TBSM 1','XII TBSM 2','X RPL 1','X RPL 2','X RPL 3','XI RPL 1','XI RPL 2','XI RPL 3','XII RPL 1','XII RPL 2','XII RPL 3','XII RPL 4') NOT NULL,
  `tglinput` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `anggota`
--

INSERT INTO `anggota` (`id`, `nis`, `nama`, `tgl_lahir`, `jk`, `alamat`, `kelas`, `tglinput`) VALUES
(11, 1234567, 'saputra', '2006-02-05', 'Laki-Laki', 'gunung halu', 'X RPL 2', '2021-03-30 10:43:53'),
(12, 4523621, 'ubed', '2007-02-03', 'Laki-Laki', 'bunijaya', 'XII RPL 1', '2021-03-30 10:46:30');

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `id` int(9) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `pengarang` varchar(100) NOT NULL,
  `penerbit` varchar(150) NOT NULL,
  `thnterbit` varchar(25) NOT NULL,
  `jumlah` int(3) NOT NULL,
  `lokasi` enum('rak 1','rak 2','rak 3','rak 4','rak 5','rak 6') NOT NULL,
  `tglinput` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`id`, `judul`, `pengarang`, `penerbit`, `thnterbit`, `jumlah`, `lokasi`, `tglinput`) VALUES
(14, 'B.Indonesia', 'abcd', 'efgh', '1995', 20, 'rak 4', '2021-03-14 15:31:18'),
(15, 'Matematika', 'Budi', 'Galaxy', '1992', 18, 'rak 5', '2021-03-19 02:15:06'),
(16, 'SBK', 'Dewi', 'Bintang', '1993', 20, 'rak 1', '2021-03-14 15:41:49'),
(17, 'inggris', 'james', 'bulan', '1991', 20, 'rak 2', '2021-03-15 03:02:35');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `no` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` enum('admin','user') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`no`, `username`, `password`, `level`) VALUES
(15, 'lastrii@gmail.com', '202cb962ac59075b964b07152d234b70', 'admin'),
(20, 'bayu@gmail.com', 'a430e06de5ce438d499c2e4063d60fd6', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `nis` varchar(11) NOT NULL,
  `nama` varchar(250) NOT NULL,
  `tglpinjam` varchar(30) NOT NULL,
  `tglkembali` varchar(30) NOT NULL,
  `status` varchar(100) NOT NULL,
  `tglinput` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi`
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
(52, 'ppkn', '3984756', 'novi rahmawati', '2020-06-23', '2017-06-26', 'kembali', '2021-03-15 02:30:26'),
(53, 'ppkn', '5717', 'Lastri Indriyani', '2020-06-23', '1970-01-01', 'kembali', '2020-06-23 04:51:37'),
(54, 'ppkn', '2147483647', 'Mita Nurhasanah', '2020-06-23', '2009-01-20', 'kembali', '2020-06-23 04:51:28'),
(55, 'ppkn', '5717', 'Lastri Indriyani', '2020-06-23', '20-07-07', 'kembali', '2020-06-23 04:51:12'),
(56, 'ppkn', '5717', 'Lastri Indriyani', '2020-06-23', '2020202020202020-0707-0707', 'kembali', '2020-06-23 04:51:02'),
(57, 'ppkn', '5717', 'Lastri Indriyani', '2020-06-23', '2020-07-07', 'kembali', '2021-03-30 09:04:12'),
(58, 'ppkn', '1111', 'Irman Ardiansyah', '2020-06-23', '2020-07-07', 'pinjam', '2020-06-23 06:53:27'),
(59, 'Matematika', '2147483647', 'Mita Nurhasanah', '2021-03-15', '2021-03-29', 'pinjam', '2021-03-15 02:32:03'),
(60, 'Matematika', '7654321', 'gina', '2021-03-19', '2021-03-26', 'pinjam', '2021-03-19 02:15:06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anggota`
--
ALTER TABLE `anggota`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `buku`
--
ALTER TABLE `buku`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
