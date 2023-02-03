-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 03, 2023 at 02:15 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kasir`
--

-- --------------------------------------------------------

--
-- Table structure for table `Barang`
--

CREATE TABLE `Barang` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jumlah` int(50) NOT NULL,
  `harga` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Barang`
--

INSERT INTO `Barang` (`id`, `nama`, `jumlah`, `harga`) VALUES
(1, 'handphone`', 12, 100),
(2, 'Laptop', 45, 900),
(3, 'Headphone', 45, 800),
(5, 'handphone', 45, 120),
(6, 'Komputer', 12, 933),
(7, 'Mouse Pad', 60, 545),
(8, 'handphone', 45, 120),
(9, 'Komputer', 12, 933),
(10, 'Mouse Pad', 60, 545),
(11, 'handphone', 45, 120);

-- --------------------------------------------------------

--
-- Table structure for table `User`
--

CREATE TABLE `User` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `no_telp` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `User`
--

INSERT INTO `User` (`id`, `nama`, `password`, `email`, `no_telp`) VALUES
(5, 'Doni', 'Doni123', 'doni@gmail.com', 321654),
(6, 'Arga', 'Arga321', 'arga@gmail.com', 9876554),
(7, 'Lintang', 'LTG123', 'lintang@gmail.com', 123456789),
(8, 'Doni', 'Doni123', 'doni@gmail.com', 321654),
(9, 'Arga', 'Arga321', 'arga@gmail.com', 9876554),
(10, 'Lintang', 'LTG123', 'lintang@gmail.com', 123456789),
(11, 'Doni', 'Doni123', 'doni@gmail.com', 321654),
(12, 'Arga', 'Arga321', 'arga@gmail.com', 9876554),
(13, 'Lintang', 'LTG123', 'lintang@gmail.com', 123456789),
(14, 'Doni', 'Doni123', 'doni@gmail.com', 321654);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Barang`
--
ALTER TABLE `Barang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `User`
--
ALTER TABLE `User`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Barang`
--
ALTER TABLE `Barang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `User`
--
ALTER TABLE `User`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
