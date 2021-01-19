-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 25, 2019 at 07:03 AM
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
-- Database: `multi_user`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `Nim` varchar(12) NOT NULL,
  `nama` varchar(256) NOT NULL,
  `username` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL,
  `Email` varchar(256) NOT NULL,
  `level` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `Nim`, `nama`, `username`, `password`, `Email`, `level`) VALUES
(1, '', 'dani hartanto', 'dani', 'dani123', '', 'admin'),
(2, '', 'emon', 'emon', 'emon98', '', 'pengunjung'),
(3, '', 'pengelola', 'pengelola', 'pengelola', '', 'pengelola'),
(4, '170411100090', 'hadi', 'hadi', 'hadi123', 'hadi123@gmail.com', 'pengunjung'),
(5, '170411100090', 'hadi22', 'hadi', '', 'hadi123@gmail.com', 'pengunjung'),
(6, '170411100092', 'teguh', 'teguh', 'teguh', 'teguh@gmail.com', 'pengunjung'),
(7, '170411100093', 'supardi', 'supardi', '123', 'supardi@gmail.com', 'pengunjung'),
(8, '170411100094', 'alex', 'alex', '123', 'alex@gmail.com', 'pengunjung'),
(10, 'a', 's', 'd', '', 'd', ''),
(11, '', 's', 's', '123', 'd', 'd'),
(12, '', 's', 's', '123', 'd', 'd'),
(13, '', 's', 's', '', 'd', 'd'),
(14, '170411100092', 's', 's', '', 'd', 'd'),
(15, '', 's', 's', '123', 'd', 'd'),
(16, '170411100094', 'dani hartanto', 'dani', 'dani', 'supardi@gmail.com', 'pengunjung');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
