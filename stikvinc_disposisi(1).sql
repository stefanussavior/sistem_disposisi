-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 25, 2021 at 12:21 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `stikvinc_disposisi`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `nip` int(11) NOT NULL,
  `username` varchar(100) NOT NULL DEFAULT '',
  `password` varchar(100) NOT NULL DEFAULT '',
  `nama` varchar(100) DEFAULT NULL,
  `level` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`nip`, `username`, `password`, `nama`, `level`) VALUES
(1, 'admin', 'admin', 'admin', 1),
(2, 'stefanus', 'stefanus', 'stefanus', 2);

-- --------------------------------------------------------

--
-- Table structure for table `disposisi`
--

CREATE TABLE `disposisi` (
  `nomor_surat_masuk` int(50) NOT NULL,
  `tanggal_terima` date NOT NULL,
  `tanggal_pengirim` date NOT NULL,
  `nomor_pengirim` varchar(100) NOT NULL,
  `asal_pengirim` varchar(100) NOT NULL,
  `perihal_pengirim` text NOT NULL,
  `ditujukkan_kepada` text NOT NULL,
  `kondisi` varchar(50) NOT NULL,
  `tanggal_disposisi` date NOT NULL,
  `pemberi_disposisi` text NOT NULL,
  `penerima_disposisi` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `tanggal_kembali` date NOT NULL,
  `instruksi` text DEFAULT NULL,
  `status` enum('1','2','3') NOT NULL,
  `datetime` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `disposisi`
--

INSERT INTO `disposisi` (`nomor_surat_masuk`, `tanggal_terima`, `tanggal_pengirim`, `nomor_pengirim`, `asal_pengirim`, `perihal_pengirim`, `ditujukkan_kepada`, `kondisi`, `tanggal_disposisi`, `pemberi_disposisi`, `penerima_disposisi`, `tanggal_kembali`, `instruksi`, `status`, `datetime`) VALUES
(1, '2021-01-22', '0000-00-00', '', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '3', NULL),
(2, '0000-00-00', '0000-00-00', '', '', '', '', '', '0000-00-00', '', '', '0000-00-00', NULL, '3', NULL),
(3, '0000-00-00', '0000-00-00', '', '', '', '', '', '0000-00-00', '', '', '0000-00-00', NULL, '1', NULL),
(4, '0000-00-00', '0000-00-00', '', '', '', '', '', '0000-00-00', '', '', '0000-00-00', NULL, '1', NULL),
(5, '0000-00-00', '0000-00-00', '', '', '', '', '', '0000-00-00', '', '', '0000-00-00', NULL, '1', NULL),
(6, '0000-00-00', '0000-00-00', '', '', '', '', '', '0000-00-00', '', '', '0000-00-00', NULL, '1', NULL),
(7, '0000-00-00', '0000-00-00', '', '', '', '', '', '0000-00-00', '', '', '0000-00-00', NULL, '1', NULL),
(8, '0000-00-00', '0000-00-00', '', '', '', '', '', '0000-00-00', '', '', '0000-00-00', NULL, '1', NULL),
(9, '0000-00-00', '0000-00-00', '', '', '', '', '', '0000-00-00', '', '', '0000-00-00', NULL, '1', NULL),
(10, '0000-00-00', '0000-00-00', '', '', '', '', '', '0000-00-00', '', '', '0000-00-00', NULL, '1', NULL),
(21, '2021-01-13', '2021-01-20', '43242', '', '', 'dsfsfdsfds', 'rahasia,segera', '2021-01-22', 'fdsfdsfds', '', '0000-00-00', '', '1', NULL),
(432432, '0000-00-00', '0000-00-00', '', '', '', '', 'rahasia', '0000-00-00', '', '', '0000-00-00', '', '2', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `form`
--

CREATE TABLE `form` (
  `id` int(11) DEFAULT NULL,
  `nomor_surat_masuk` int(11) DEFAULT NULL,
  `tanggal_terima` date DEFAULT NULL,
  `jenis_tugas` varchar(20) DEFAULT NULL,
  `instruksi` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pengirim`
--

CREATE TABLE `pengirim` (
  `id` int(11) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `nomor` varchar(100) DEFAULT NULL,
  `asal` text DEFAULT NULL,
  `perihal` text DEFAULT NULL,
  `ditujukan_kepada` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `nip` int(11) DEFAULT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `level` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`nip`, `username`, `password`, `nama`, `level`) VALUES
(3, 'staff', 'staff', 'staff', 3);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `nip` int(11) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `level` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`nip`, `username`, `password`, `nama`, `level`) VALUES
(1, 'admin', 'admin', 'stefanus', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`nip`);

--
-- Indexes for table `disposisi`
--
ALTER TABLE `disposisi`
  ADD PRIMARY KEY (`nomor_surat_masuk`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`nip`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
