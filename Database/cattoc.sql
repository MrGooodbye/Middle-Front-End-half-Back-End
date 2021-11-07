-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 30, 2021 at 04:58 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cattoc`
--

-- --------------------------------------------------------

--
-- Table structure for table `datlich`
--

CREATE TABLE `datlich` (
  `idDat` int(11) NOT NULL,
  `hotenkhach` varchar(255) NOT NULL,
  `khunggiocat` varchar(255) NOT NULL,
  `ngaythangcat` varchar(255) NOT NULL,
  `gioitinhkhach` varchar(255) NOT NULL,
  `sdtkhach` varchar(255) NOT NULL,
  `diachikhach` varchar(255) NOT NULL,
  `emailkhach` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `datlich`
--

INSERT INTO `datlich` (`idDat`, `hotenkhach`, `khunggiocat`, `ngaythangcat`, `gioitinhkhach`, `sdtkhach`, `diachikhach`, `emailkhach`) VALUES
(6, 'Bắc Kiều Phong', '18 giờ', '23 tháng 10', 'Nam', '012312312', 'sdfxzv  \r\n', 'xvxzv@gmail.com'),
(7, 'Nguyễn Tùng Dương', '10 giờ', '30 tháng 10', 'Nam', '12412312312', 'zvzxvz  \r\n', 'vxvvz@gmail.com'),
(8, 'Trương Vô Kỵ', '13 giờ', '22 tháng 10', 'Nam', '0123123241243', '123123123  \r\n', 'vxvzvm@gmail.com'),
(9, 'zvzxvx', '12 giờ', '30 tháng 10', 'Nam', '12312313123', '1321vx  \r\n', 'fCZXc@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `regis`
--

CREATE TABLE `regis` (
  `regisId` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `useracc` varchar(255) NOT NULL,
  `userpass` varchar(255) NOT NULL,
  `userpasscom` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `regis`
--

INSERT INTO `regis` (`regisId`, `username`, `useracc`, `userpass`, `userpasscom`) VALUES
(1, 'vxzcvxzc', 'xcvxzvc', '123123123', '123123123'),
(2, 'Trần Anh Kiệt', 'kiet123', '123456789', '123456789');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `adminid` int(11) NOT NULL,
  `adminName` varchar(255) NOT NULL,
  `adminEmail` varchar(255) NOT NULL,
  `adminUser` varchar(255) NOT NULL,
  `adminPass` varchar(255) NOT NULL,
  `level` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`adminid`, `adminName`, `adminEmail`, `adminUser`, `adminPass`, `level`) VALUES
(1, 'Phong', 'backieuphong@gmail.com', 'backieuphong', 'e10adc3949ba59abbe56e057f20f883e', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_adminn`
--

CREATE TABLE `tbl_adminn` (
  `aminId` int(11) NOT NULL,
  `adminName` varchar(255) NOT NULL,
  `adminEmail` varchar(255) NOT NULL,
  `adminUser` varchar(255) NOT NULL,
  `adminPass` varchar(255) NOT NULL,
  `level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_adminn`
--

INSERT INTO `tbl_adminn` (`aminId`, `adminName`, `adminEmail`, `adminUser`, `adminPass`, `level`) VALUES
(1, 'Quan Vũ', 'quanvu@gmail.com', 'quanvu', '123456', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `datlich`
--
ALTER TABLE `datlich`
  ADD PRIMARY KEY (`idDat`);

--
-- Indexes for table `regis`
--
ALTER TABLE `regis`
  ADD PRIMARY KEY (`regisId`);

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`adminid`);

--
-- Indexes for table `tbl_adminn`
--
ALTER TABLE `tbl_adminn`
  ADD PRIMARY KEY (`aminId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `datlich`
--
ALTER TABLE `datlich`
  MODIFY `idDat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `regis`
--
ALTER TABLE `regis`
  MODIFY `regisId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `adminid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_adminn`
--
ALTER TABLE `tbl_adminn`
  MODIFY `aminId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
