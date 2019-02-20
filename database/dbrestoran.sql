-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 20, 2019 at 05:55 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbrestoran`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblmenu`
--

CREATE TABLE `tblmenu` (
  `idmenu` varchar(5) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jenis` enum('MK','MN') NOT NULL,
  `gambar` text NOT NULL,
  `harga` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblmenu`
--

INSERT INTO `tblmenu` (`idmenu`, `nama`, `jenis`, `gambar`, `harga`) VALUES
('MK001', 'Nasi Goreng Seafood', 'MK', '', 30000),
('MK002', 'Nasi Goreng Kampung', 'MK', '', 20000),
('MN001', 'Teh Hijau', 'MN', '', 15000),
('MN002', 'Teh Manis Dingin', 'MN', '', 8000);

-- --------------------------------------------------------

--
-- Table structure for table `tblorder`
--

CREATE TABLE `tblorder` (
  `id` int(11) NOT NULL,
  `nomororder` varchar(10) NOT NULL,
  `idmenu` varchar(5) NOT NULL,
  `meja` varchar(2) NOT NULL,
  `status` enum('M','S') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblorder`
--

INSERT INTO `tblorder` (`id`, `nomororder`, `idmenu`, `meja`, `status`) VALUES
(1, '1', 'MK001', '3', 'S'),
(2, '1', 'MN002', '3', 'S'),
(5, '5', 'MK002', '3', 'S'),
(6, '5', 'MN001', '3', 'M'),
(7, '5', 'MN002', '3', 'M'),
(8, '5', 'MK001', '3', 'M'),
(9, '9', 'MK001', '2', 'M'),
(10, '9', 'MN001', '2', 'M');

-- --------------------------------------------------------

--
-- Table structure for table `tbltransaksi`
--

CREATE TABLE `tbltransaksi` (
  `idtransaksi` int(11) NOT NULL,
  `nomororder` varchar(20) NOT NULL,
  `totalbiaya` float NOT NULL,
  `status` enum('L','B') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbluser`
--

CREATE TABLE `tbluser` (
  `iduser` varchar(15) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `telepon` varchar(13) NOT NULL,
  `status` enum('WT','CF','CH','AD') NOT NULL,
  `password` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbluser`
--

INSERT INTO `tbluser` (`iduser`, `nama`, `alamat`, `telepon`, `status`, `password`) VALUES
('admin', 'Admin', 'Jl. Sukamundur', '0821xxxxxxxx', 'AD', '21232f297a57a5a743894a0e4a801fc3'),
('chef', 'Chef', 'Jl. Sukamakan', '061xxxx', 'CF', 'e10adc3949ba59abbe56e057f20f883e'),
('kasir', 'Kasir', 'Jl. Sukauang', '061XXX', 'CH', 'e10adc3949ba59abbe56e057f20f883e'),
('waiter', 'Waiter', 'Jl. Sukamaju', '081xxxx', 'WT', 'e10adc3949ba59abbe56e057f20f883e');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblmenu`
--
ALTER TABLE `tblmenu`
  ADD PRIMARY KEY (`idmenu`);

--
-- Indexes for table `tblorder`
--
ALTER TABLE `tblorder`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbltransaksi`
--
ALTER TABLE `tbltransaksi`
  ADD PRIMARY KEY (`idtransaksi`);

--
-- Indexes for table `tbluser`
--
ALTER TABLE `tbluser`
  ADD PRIMARY KEY (`iduser`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblorder`
--
ALTER TABLE `tblorder`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbltransaksi`
--
ALTER TABLE `tbltransaksi`
  MODIFY `idtransaksi` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
