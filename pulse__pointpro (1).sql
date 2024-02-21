-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 21, 2024 at 05:43 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pulse _pointpro`
--

-- --------------------------------------------------------

--
-- Table structure for table `beds`
--

CREATE TABLE `beds` (
  `bid` int(5) NOT NULL,
  `ward` int(11) NOT NULL,
  `patient` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `hospital` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `did` int(5) NOT NULL,
  `dname` varchar(20) NOT NULL,
  `dgender` varchar(5) NOT NULL,
  `specialization` varchar(50) NOT NULL,
  `dcontact` varchar(20) NOT NULL,
  `rating` int(5) NOT NULL,
  `review` varchar(100) NOT NULL,
  `hospital` int(10) NOT NULL,
  `patient` int(10) NOT NULL,
  `medical_rec` int(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hospital`
--

CREATE TABLE `hospital` (
  `hid` int(5) NOT NULL,
  `hname` varchar(100) NOT NULL,
  `location` int(11) NOT NULL,
  `beds` int(100) NOT NULL,
  `wards` int(10) NOT NULL,
  `doctors` varchar(100) NOT NULL,
  `patient` int(11) NOT NULL,
  `user` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `medicalrec`
--

CREATE TABLE `medicalrec` (
  `rid` int(5) NOT NULL,
  `admdate` date NOT NULL,
  `disdate` date NOT NULL,
  `diagnosis` text NOT NULL,
  `treatment` text NOT NULL,
  `patient` int(11) NOT NULL,
  `doctor` int(11) NOT NULL,
  `user` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `pid` int(3) NOT NULL,
  `pname` varchar(100) NOT NULL,
  `pgender` text NOT NULL,
  `pdob` date NOT NULL,
  `pcontact` varchar(10) NOT NULL,
  `paddress` varchar(100) NOT NULL,
  `hid` int(10) NOT NULL,
  `doc` int(10) NOT NULL,
  `medicalrec` int(11) NOT NULL,
  `user` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `uid` int(5) NOT NULL,
  `uname` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `hospital` int(5) NOT NULL,
  `patient` int(11) NOT NULL,
  `medicalrec` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ward`
--

CREATE TABLE `ward` (
  `wid` int(5) NOT NULL,
  `wname` varchar(100) NOT NULL,
  `capacity` int(5) NOT NULL,
  `current_status` int(5) NOT NULL,
  `bed` int(11) NOT NULL,
  `patient` int(11) NOT NULL,
  `hospital` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `beds`
--
ALTER TABLE `beds`
  ADD PRIMARY KEY (`bid`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`did`),
  ADD UNIQUE KEY `dcontact` (`dcontact`);

--
-- Indexes for table `hospital`
--
ALTER TABLE `hospital`
  ADD PRIMARY KEY (`hid`);

--
-- Indexes for table `medicalrec`
--
ALTER TABLE `medicalrec`
  ADD PRIMARY KEY (`rid`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `ward`
--
ALTER TABLE `ward`
  ADD PRIMARY KEY (`wid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `pid` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ward`
--
ALTER TABLE `ward`
  MODIFY `wid` int(5) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
