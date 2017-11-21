-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Nov 21, 2017 at 10:57 AM
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
(1, 'A', 'Rp 10.000');

-- --------------------------------------------------------

--
-- Table structure for table `harga`
--

CREATE TABLE `harga` (
  `id_harga` int(1) NOT NULL,
  `total` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_beras` int(12) NOT NULL,
  `id_minyak` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(1, 'A', 'Rp 13.000');

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
  `no_telp` int(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orang`
--

INSERT INTO `orang` (`id_orang`, `nama`, `alamat`, `tgl_hutang`, `id_beras`, `id_minyak`, `total_harga`, `no_telp`) VALUES
(1, 'Sarminah', 'Jepara', '2017-11-21 01:59:00', 1, 1, '', 367448498);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `beras`
--
ALTER TABLE `beras`
  ADD PRIMARY KEY (`id_beras`);

--
-- Indexes for table `harga`
--
ALTER TABLE `harga`
  ADD PRIMARY KEY (`id_harga`);

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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `beras`
--
ALTER TABLE `beras`
  MODIFY `id_beras` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `harga`
--
ALTER TABLE `harga`
  MODIFY `id_harga` int(1) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `minyak`
--
ALTER TABLE `minyak`
  MODIFY `id_minyak` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `orang`
--
ALTER TABLE `orang`
  MODIFY `id_orang` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
