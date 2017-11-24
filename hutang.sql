-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Nov 24, 2017 at 01:23 PM
-- Server version: 10.0.31-MariaDB-0ubuntu0.16.04.2
-- PHP Version: 7.0.22-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hutang`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(1) NOT NULL,
  `nama` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pass` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `nama`, `user`, `pass`) VALUES
(1, 'administrator', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `beras`
--

CREATE TABLE `beras` (
  `id_beras` int(1) NOT NULL,
  `jenis_beras` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga/kg` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `beras`
--

INSERT INTO `beras` (`id_beras`, `jenis_beras`, `harga/kg`) VALUES
(1, 'Murni', 'Rp 10.000'),
(2, 'Sembako', 'Rp 9.500'),
(3, 'Wangi', 'Rp 12.000'),
(4, 'Merah', 'Rp 17.000'),
(5, '-', '-');

-- --------------------------------------------------------

--
-- Table structure for table `minyak`
--

CREATE TABLE `minyak` (
  `id_minyak` int(1) NOT NULL,
  `jenis_minyak` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga/liter` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `minyak`
--

INSERT INTO `minyak` (`id_minyak`, `jenis_minyak`, `harga/liter`) VALUES
(1, 'Bimoli', 'Rp 13.000'),
(2, 'Hemat', 'Rp 10.000'),
(3, 'Fortune', 'Rp 15.000'),
(4, '-', '-');

-- --------------------------------------------------------

--
-- Table structure for table `orang`
--

CREATE TABLE `orang` (
  `id_orang` int(1) NOT NULL,
  `nama` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_hutang` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `id_beras` int(12) NOT NULL,
  `id_minyak` int(12) NOT NULL,
  `total_harga` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_status` int(15) NOT NULL,
  `no_telp` bigint(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orang`
--

INSERT INTO `orang` (`id_orang`, `nama`, `alamat`, `tgl_hutang`, `id_beras`, `id_minyak`, `total_harga`, `id_status`, `no_telp`) VALUES
(0, 'Binti Qomariah', 'Sidodadi', '2017-11-23 04:59:18', 2, 2, '12.0000', 2, 1),
(46, 'Indah Uminaroh', 'Dimana aja boleh', '2017-11-23 05:00:40', 2, 1, '50000', 1, 65),
(48, 'aku', 'Murong', '2017-11-23 07:46:41', 2, 1, '123', 2, 0),
(49, 'Indah Uminaroh', 'Bajulan', '2017-11-23 07:46:58', 4, 3, '21', 1, 76),
(50, 'Tata', 'Mana aja', '2017-11-23 03:55:19', 4, 3, '50000', 2, 22),
(51, 'juon', 'ogak reti', '2017-11-24 02:47:51', 2, 2, '70.000', 2, 896576677);

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `id_status` int(1) NOT NULL,
  `status` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`id_status`, `status`) VALUES
(1, 'Lunas'),
(2, 'Belum Lunas');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `beras`
--
ALTER TABLE `beras`
  ADD PRIMARY KEY (`id_beras`);

--
-- Indexes for table `minyak`
--
ALTER TABLE `minyak`
  ADD PRIMARY KEY (`id_minyak`);

--
-- Indexes for table `orang`
--
ALTER TABLE `orang`
  ADD PRIMARY KEY (`id_orang`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id_status`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `beras`
--
ALTER TABLE `beras`
  MODIFY `id_beras` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `minyak`
--
ALTER TABLE `minyak`
  MODIFY `id_minyak` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `orang`
--
ALTER TABLE `orang`
  MODIFY `id_orang` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;
--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `id_status` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
