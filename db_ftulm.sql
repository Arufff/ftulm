-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 30, 2024 at 10:32 AM
-- Server version: 5.7.33
-- PHP Version: 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_ftulm`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_akademik`
--

CREATE TABLE `tbl_akademik` (
  `id_akademik` int(11) NOT NULL,
  `keandalan1` enum('Sangat Baik','Baik','Cukup','Kurang') DEFAULT NULL,
  `keandalan2` enum('Sangat Baik','Baik','Cukup','Kurang') DEFAULT NULL,
  `keandalan3` enum('Sangat Baik','Baik','Cukup','Kurang') DEFAULT NULL,
  `keandalan4` enum('Sangat Baik','Baik','Cukup','Kurang') DEFAULT NULL,
  `keandalan5` enum('Sangat Baik','Baik','Cukup','Kurang') DEFAULT NULL,
  `keandalan6` enum('Sangat Baik','Baik','Cukup','Kurang') DEFAULT NULL,
  `keandalan7` enum('Sangat Baik','Baik','Cukup','Kurang') DEFAULT NULL,
  `dayatanggap1` enum('Sangat Baik','Baik','Cukup','Kurang') DEFAULT NULL,
  `dayatanggap2` enum('Sangat Baik','Baik','Cukup','Kurang') DEFAULT NULL,
  `dayatanggap3` enum('Sangat Baik','Baik','Cukup','Kurang') DEFAULT NULL,
  `dayatanggap4` enum('Sangat Baik','Baik','Cukup','Kurang') DEFAULT NULL,
  `kepastian1` enum('Sangat Baik','Baik','Cukup','Kurang') DEFAULT NULL,
  `kepastian2` enum('Sangat Baik','Baik','Cukup','Kurang') DEFAULT NULL,
  `kepastian3` enum('Sangat Baik','Baik','Cukup','Kurang') DEFAULT NULL,
  `kepastian4` enum('Sangat Baik','Baik','Cukup','Kurang') DEFAULT NULL,
  `kepastian5` enum('Sangat Baik','Baik','Cukup','Kurang') DEFAULT NULL,
  `empati1` enum('Sangat Baik','Baik','Cukup','Kurang') DEFAULT NULL,
  `empati2` enum('Sangat Baik','Baik','Cukup','Kurang') DEFAULT NULL,
  `empati3` enum('Sangat Baik','Baik','Cukup','Kurang') DEFAULT NULL,
  `empati4` enum('Sangat Baik','Baik','Cukup','Kurang') DEFAULT NULL,
  `tangible1` enum('Sangat Baik','Baik','Cukup','Kurang') DEFAULT NULL,
  `tangible2` enum('Sangat Baik','Baik','Cukup','Kurang') DEFAULT NULL,
  `tangible3` enum('Sangat Baik','Baik','Cukup','Kurang') DEFAULT NULL,
  `tangible4` enum('Sangat Baik','Baik','Cukup','Kurang') DEFAULT NULL,
  `tangible5` enum('Sangat Baik','Baik','Cukup','Kurang') DEFAULT NULL,
  `tangible6` enum('Sangat Baik','Baik','Cukup','Kurang') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_biodata`
--

CREATE TABLE `tbl_biodata` (
  `id_biodata` int(11) NOT NULL,
  `semester` varchar(255) NOT NULL,
  `thnakademik` varchar(255) NOT NULL,
  `domisili` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kemhsan`
--

CREATE TABLE `tbl_kemhsan` (
  `id_kemhsan` int(11) NOT NULL,
  `kemahasiswaan1` enum('Sangat Puas','Puas','Cukup','Kurang') DEFAULT NULL,
  `kemahasiswaan2` enum('Sangat Puas','Puas','Cukup','Kurang') DEFAULT NULL,
  `kemahasiswaan3` enum('Sangat Puas','Puas','Cukup','Kurang') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kuisioner`
--

CREATE TABLE `tbl_kuisioner` (
  `id_kuis` int(11) NOT NULL,
  `tbl_user` int(11) NOT NULL,
  `tbl_biodata` int(11) NOT NULL,
  `tbl_visimisi` int(11) NOT NULL,
  `tbl_akademik` int(11) NOT NULL,
  `tbl_kemhsan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(11) NOT NULL,
  `nim` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `prodi` varchar(255) NOT NULL,
  `nohp` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `nim`, `nama`, `prodi`, `nohp`, `password`) VALUES
(1, '2010817310008', 'Maulana', 'Teknologi Informasi', '082256407791', 'password');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_visimisi`
--

CREATE TABLE `tbl_visimisi` (
  `id_visimisi` int(11) NOT NULL,
  `visimisi1` enum('Ya','Tidak') DEFAULT NULL,
  `visimisi2` varchar(255) DEFAULT NULL,
  `visimisi3` enum('Sering','Beberapa Kali','Satu Kali','Tidak Sama Sekali') DEFAULT NULL,
  `visimisi4` enum('Sangat Paham','Paham','Kurang Paham','Tidak Paham') DEFAULT NULL,
  `visimisi5` enum('Sudah','Sebagian','Hanya Sedikit','Tidak Ada') DEFAULT NULL,
  `visimisi6` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_akademik`
--
ALTER TABLE `tbl_akademik`
  ADD PRIMARY KEY (`id_akademik`);

--
-- Indexes for table `tbl_biodata`
--
ALTER TABLE `tbl_biodata`
  ADD PRIMARY KEY (`id_biodata`);

--
-- Indexes for table `tbl_kemhsan`
--
ALTER TABLE `tbl_kemhsan`
  ADD PRIMARY KEY (`id_kemhsan`);

--
-- Indexes for table `tbl_kuisioner`
--
ALTER TABLE `tbl_kuisioner`
  ADD PRIMARY KEY (`id_kuis`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `tbl_visimisi`
--
ALTER TABLE `tbl_visimisi`
  ADD PRIMARY KEY (`id_visimisi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_akademik`
--
ALTER TABLE `tbl_akademik`
  MODIFY `id_akademik` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_biodata`
--
ALTER TABLE `tbl_biodata`
  MODIFY `id_biodata` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_kemhsan`
--
ALTER TABLE `tbl_kemhsan`
  MODIFY `id_kemhsan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_kuisioner`
--
ALTER TABLE `tbl_kuisioner`
  MODIFY `id_kuis` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_visimisi`
--
ALTER TABLE `tbl_visimisi`
  MODIFY `id_visimisi` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
