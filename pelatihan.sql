-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 01, 2022 at 06:04 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pelatihan`
--

-- --------------------------------------------------------

--
-- Table structure for table `instruktur`
--

CREATE TABLE `instruktur` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tanggalLahir` datetime NOT NULL,
  `usia` int(11) NOT NULL,
  `kelamin` varchar(6) DEFAULT NULL,
  `isMenikah` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `instruktur`
--

INSERT INTO `instruktur` (`id`, `nama`, `tanggalLahir`, `usia`, `kelamin`, `isMenikah`) VALUES
(4, 'Alif', '1990-06-21 00:00:00', 26, 'Pria', 1),
(5, 'Sony', '1990-06-06 00:00:00', 32, 'Pria', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pelatihan`
--

CREATE TABLE `pelatihan` (
  `id_pelatihan` int(11) NOT NULL,
  `ruang` varchar(25) NOT NULL,
  `tanggal` datetime NOT NULL,
  `materi` varchar(50) NOT NULL,
  `id_instruktur` int(11) NOT NULL,
  `id_peserta` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pelatihan`
--

INSERT INTO `pelatihan` (`id_pelatihan`, `ruang`, `tanggal`, `materi`, `id_instruktur`, `id_peserta`) VALUES
(1, 'MR 3', '2022-08-31 13:59:52', 'PYTHON', 1, 1),
(2, 'MR 3', '2022-09-01 02:53:15', 'WEB', 2, 3),
(3, 'MR 5', '2022-08-08 00:00:00', 'Python', 3, 1),
(4, 'MR 5', '2022-09-01 00:00:00', 'PLC', 4, 6),
(5, 'MR 5', '2022-09-01 00:00:00', 'PLC', 4, 6),
(6, 'MR4', '2022-09-01 00:00:00', 'OPC', 4, 6),
(8, 'MR 1', '2022-09-01 00:00:00', 'PHP', 5, 7),
(9, 'MR 1', '2022-09-01 00:00:00', 'PHP', 5, 8),
(10, 'MR 1', '2022-09-01 00:00:00', 'PHP', 5, 9);

-- --------------------------------------------------------

--
-- Table structure for table `peserta`
--

CREATE TABLE `peserta` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tanggalLahir` datetime NOT NULL,
  `usia` int(11) NOT NULL,
  `kelamin` varchar(6) DEFAULT NULL,
  `isMenikah` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `peserta`
--

INSERT INTO `peserta` (`id`, `nama`, `tanggalLahir`, `usia`, `kelamin`, `isMenikah`) VALUES
(6, 'Sodo', '2022-08-01 00:00:00', 15, 'Wanita', 0),
(7, 'Panji', '1986-04-20 00:00:00', 36, 'Pria', 1),
(8, 'Maru', '2009-01-01 00:00:00', 13, 'Wanita', 0),
(9, 'mari', '2000-02-02 00:00:00', 22, 'Wanita', 0);

-- --------------------------------------------------------

--
-- Table structure for table `training`
--

CREATE TABLE `training` (
  `id_training` int(11) NOT NULL,
  `nama_training` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Stand-in structure for view `viewpelatihan`
-- (See below for the actual view)
--
CREATE TABLE `viewpelatihan` (
`ruang` varchar(25)
,`tanggal` datetime
,`materi` varchar(50)
,`murid` varchar(50)
,`guru` varchar(50)
);

-- --------------------------------------------------------

--
-- Structure for view `viewpelatihan`
--
DROP TABLE IF EXISTS `viewpelatihan`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `viewpelatihan`  AS SELECT `latih`.`ruang` AS `ruang`, `latih`.`tanggal` AS `tanggal`, `latih`.`materi` AS `materi`, `serta`.`nama` AS `murid`, `struktur`.`nama` AS `guru` FROM ((`pelatihan` `latih` join `peserta` `serta` on(`latih`.`id_peserta` = `serta`.`id`)) left join `instruktur` `struktur` on(`latih`.`id_instruktur` = `struktur`.`id`))  ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `instruktur`
--
ALTER TABLE `instruktur`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pelatihan`
--
ALTER TABLE `pelatihan`
  ADD PRIMARY KEY (`id_pelatihan`);

--
-- Indexes for table `peserta`
--
ALTER TABLE `peserta`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `training`
--
ALTER TABLE `training`
  ADD PRIMARY KEY (`id_training`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `instruktur`
--
ALTER TABLE `instruktur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pelatihan`
--
ALTER TABLE `pelatihan`
  MODIFY `id_pelatihan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `peserta`
--
ALTER TABLE `peserta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `training`
--
ALTER TABLE `training`
  MODIFY `id_training` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
