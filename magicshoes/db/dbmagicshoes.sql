-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 28, 2021 at 11:41 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbmagicshoes`
--

-- --------------------------------------------------------

--
-- Table structure for table `men`
--

CREATE TABLE `men` (
  `idmen` varchar(10) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `harga` int(11) NOT NULL,
  `stok` int(11) NOT NULL,
  `size` int(11) NOT NULL,
  `merk` varchar(30) NOT NULL,
  `warna` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `men`
--

INSERT INTO `men` (`idmen`, `nama`, `harga`, `stok`, `size`, `merk`, `warna`) VALUES
('C01', 'Converse', 300000, 40, 149, 'All Star', 'Putih'),
('V01', 'Vans', 300000, 50, 42, 'Authentic', 'Hitam'),
('V02', 'Vans', 250000, 41, 100, 'Old Skool', 'Hitam');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`) VALUES
('admin', 'admin'),
('bryant', 'rachel');

-- --------------------------------------------------------

--
-- Table structure for table `women`
--

CREATE TABLE `women` (
  `idwomen` varchar(10) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `harga` int(11) NOT NULL,
  `stok` int(11) NOT NULL,
  `size` int(11) NOT NULL,
  `merk` varchar(30) NOT NULL,
  `warna` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `women`
--

INSERT INTO `women` (`idwomen`, `nama`, `harga`, `stok`, `size`, `merk`, `warna`) VALUES
('B01', 'Blackkelly', 255000, 38, 25, 'LEN 418', 'Coklat'),
('L01', 'Gucci', 650000, 39, 26, 'Leather Pump', 'Merah'),
('Y01', 'Yongki Komaladi', 214500, 37, 50, 'Calya', 'Hitam');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `men`
--
ALTER TABLE `men`
  ADD PRIMARY KEY (`idmen`);

--
-- Indexes for table `women`
--
ALTER TABLE `women`
  ADD PRIMARY KEY (`idwomen`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
