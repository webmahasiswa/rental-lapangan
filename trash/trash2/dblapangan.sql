-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2019 at 03:46 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dblapangan`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_booking`
--

CREATE TABLE `tb_booking` (
  `id_booking` int(11) NOT NULL,
  `id_lapangan` int(11) NOT NULL,
  `nama_lapangan` varchar(100) NOT NULL,
  `id_fasilitas` int(11) NOT NULL,
  `nim` varchar(12) NOT NULL,
  `tgl_booking` date NOT NULL,
  `jam_awal` time(6) NOT NULL,
  `jam_akhir` time(6) NOT NULL,
  `bola` varchar(100) NOT NULL,
  `rompi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_booking`
--

INSERT INTO `tb_booking` (`id_booking`, `id_lapangan`, `nama_lapangan`, `id_fasilitas`, `nim`, `tgl_booking`, `jam_awal`, `jam_akhir`, `bola`, `rompi`) VALUES
(7, 9, '', 2, '170411109000', '2019-12-04', '04:00:00.000000', '07:00:00.000000', '', ''),
(21, 0, 'teknik', 0, '170411100012', '2019-12-05', '01:00:00.000000', '02:00:00.000000', '4', '3');

-- --------------------------------------------------------

--
-- Table structure for table `tb_daftar`
--

CREATE TABLE `tb_daftar` (
  `id_daftar` int(11) NOT NULL,
  `nim` varchar(12) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `level` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_daftar`
--

INSERT INTO `tb_daftar` (`id_daftar`, `nim`, `nama_lengkap`, `username`, `password`, `email`, `level`) VALUES
(1, '170411100090', 'dani hartanto', 'dani', '123', 'danihartanto@gmail.com', 'pengunjung'),
(2, '170411100091', 'edwad', 'edward', '123', 'edward@gmail.com', 'pengelola'),
(3, '170411100092', 'juni', 'juni', '123', 'juni@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tb_fasilitas`
--

CREATE TABLE `tb_fasilitas` (
  `id_fasilitas` int(11) NOT NULL,
  `rompi` varchar(12) NOT NULL,
  `bola` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_fasilitas`
--

INSERT INTO `tb_fasilitas` (`id_fasilitas`, `rompi`, `bola`) VALUES
(1, '2', '2'),
(2, '3', '4'),
(3, '2', '5');

-- --------------------------------------------------------

--
-- Table structure for table `tb_lapangan`
--

CREATE TABLE `tb_lapangan` (
  `id_lapangan` int(11) NOT NULL,
  `id_pemilik` int(11) NOT NULL,
  `file` varchar(100) NOT NULL,
  `nama_lapangan` varchar(100) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_lapangan`
--

INSERT INTO `tb_lapangan` (`id_lapangan`, `id_pemilik`, `file`, `nama_lapangan`, `alamat`) VALUES
(9, 0, 'lap2.jpg', 'taruna jaya', 'utm'),
(15, 0, 'lap1.jpg', 'teknik', 'rkb F'),
(16, 0, 'lap3.jpg', 'porgafta', 'gedung teknik pertanian');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pemilik`
--

CREATE TABLE `tb_pemilik` (
  `id_pemilik` int(11) NOT NULL,
  `nama_pemilik` varchar(100) NOT NULL,
  `username_pemilik` varchar(100) NOT NULL,
  `password_pemilik` varchar(100) NOT NULL,
  `email_pemilik` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pemilik`
--

INSERT INTO `tb_pemilik` (`id_pemilik`, `nama_pemilik`, `username_pemilik`, `password_pemilik`, `email_pemilik`) VALUES
(2, 'fakultas teknik', 'fakultas_teknik', 'fakultas_teknik', 'fakultas_teknik@trunojoyo.ac.ic');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_booking`
--
ALTER TABLE `tb_booking`
  ADD PRIMARY KEY (`id_booking`);

--
-- Indexes for table `tb_daftar`
--
ALTER TABLE `tb_daftar`
  ADD PRIMARY KEY (`id_daftar`);

--
-- Indexes for table `tb_fasilitas`
--
ALTER TABLE `tb_fasilitas`
  ADD PRIMARY KEY (`id_fasilitas`);

--
-- Indexes for table `tb_lapangan`
--
ALTER TABLE `tb_lapangan`
  ADD PRIMARY KEY (`id_lapangan`);

--
-- Indexes for table `tb_pemilik`
--
ALTER TABLE `tb_pemilik`
  ADD PRIMARY KEY (`id_pemilik`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_booking`
--
ALTER TABLE `tb_booking`
  MODIFY `id_booking` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tb_daftar`
--
ALTER TABLE `tb_daftar`
  MODIFY `id_daftar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_fasilitas`
--
ALTER TABLE `tb_fasilitas`
  MODIFY `id_fasilitas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_lapangan`
--
ALTER TABLE `tb_lapangan`
  MODIFY `id_lapangan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tb_pemilik`
--
ALTER TABLE `tb_pemilik`
  MODIFY `id_pemilik` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_booking`
--
ALTER TABLE `tb_booking`
  ADD CONSTRAINT `tb_booking_ibfk_1` FOREIGN KEY (`id_lapangan`) REFERENCES `tb_lapangan` (`id_lapangan`),
  ADD CONSTRAINT `tb_booking_ibfk_2` FOREIGN KEY (`id_fasilitas`) REFERENCES `tb_fasilitas` (`id_fasilitas`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
