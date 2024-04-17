-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 17, 2024 at 05:54 AM
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
-- Database: `pulsepointpro`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `appid` int(10) NOT NULL,
  `pname` varchar(255) NOT NULL,
  `diagnosis` varchar(255) NOT NULL,
  `consultation_fees` int(11) NOT NULL,
  `doctor` int(10) NOT NULL,
  `doctor_name` varchar(200) NOT NULL,
  `appointment_date` date NOT NULL,
  `appointment_creation_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`appid`, `pname`, `diagnosis`, `consultation_fees`, `doctor`, `doctor_name`, `appointment_date`, `appointment_creation_date`) VALUES
(1, 'Alexander', 'Diabetes type 1', 700, 1, 'Andrew Strange', '2024-03-30', '2024-03-28');

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
  `review` text NOT NULL,
  `hospital` int(10) NOT NULL,
  `patient` int(10) NOT NULL,
  `medical_rec` int(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`did`, `dname`, `dgender`, `specialization`, `dcontact`, `rating`, `review`, `hospital`, `patient`, `medical_rec`) VALUES
(1, 'Andrew Strange', 'Male', 'Endocrinologists', '1234567890', 8, 'Good Doctor', 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `hospital`
--

CREATE TABLE `hospital` (
  `hid` int(5) NOT NULL,
  `hname` varchar(100) NOT NULL,
  `location` varchar(10000) NOT NULL,
  `beds` int(100) NOT NULL,
  `wards` int(10) NOT NULL,
  `contact` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hospital`
--

INSERT INTO `hospital` (`hid`, `hname`, `location`, `beds`, `wards`, `contact`) VALUES
(1, 'Aster Hospital', 'S.G. Palya', 100, 50, 987654210);

-- --------------------------------------------------------

--
-- Table structure for table `logindetails`
--

CREATE TABLE `logindetails` (
  `ID` int(11) NOT NULL,
  `fullname` varchar(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `PASSWORD` varchar(200) NOT NULL,
  `dob` date DEFAULT NULL,
  `usertype` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `phone` int(11) NOT NULL,
  `address` varchar(100) NOT NULL,
  `insurance_info` varchar(100) DEFAULT NULL,
  `emergency_contact` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `logindetails`
--

INSERT INTO `logindetails` (`ID`, `fullname`, `username`, `email`, `PASSWORD`, `dob`, `usertype`, `gender`, `phone`, `address`, `insurance_info`, `emergency_contact`) VALUES
(100, 'Admin', 'Admin', 'admin@gmail.com', 'admin', '2000-12-19', 'Admin', 'Male', 123456789, 'Christ University', NULL, 123456789),
(101, 'Evan John Mathew', 'Evan', 'evanjmathew2004@gmail.com', '1234', '2024-04-03', 'Doctor', 'Male', 2147483647, 'Christ University', '', 987654321);

-- --------------------------------------------------------

--
-- Table structure for table `medicalrec`
--

CREATE TABLE `medicalrec` (
  `rid` int(5) NOT NULL,
  `pname` varchar(100) NOT NULL,
  `admdate` date NOT NULL,
  `disdate` date NOT NULL,
  `diagnosis` text NOT NULL,
  `treatment` text NOT NULL,
  `patient` int(11) NOT NULL,
  `doctor` int(11) NOT NULL,
  `user` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `medicalrec`
--

INSERT INTO `medicalrec` (`rid`, `pname`, `admdate`, `disdate`, `diagnosis`, `treatment`, `patient`, `doctor`, `user`) VALUES
(1, 'Alexander', '2024-03-01', '2024-03-12', 'Diabetes type 1', 'Insulin', 1, 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `mesid` int(11) NOT NULL,
  `name` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `messages` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `pid` int(3) NOT NULL,
  `pname` varchar(100) NOT NULL,
  `pgender` text NOT NULL,
  `pdob` date NOT NULL,
  `pAge` int(11) NOT NULL,
  `pcontact` varchar(10) NOT NULL,
  `paddress` varchar(100) NOT NULL,
  `hid` int(10) NOT NULL,
  `doc` int(10) NOT NULL,
  `medicalrec` int(11) NOT NULL,
  `user` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`pid`, `pname`, `pgender`, `pdob`, `pAge`, `pcontact`, `paddress`, `hid`, `doc`, `medicalrec`, `user`) VALUES
(1, 'Alexander', 'Male', '2004-12-19', 19, '0123456789', 'Christ University', 1, 1, 1, 2);

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
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`appid`);

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
-- Indexes for table `logindetails`
--
ALTER TABLE `logindetails`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `medicalrec`
--
ALTER TABLE `medicalrec`
  ADD PRIMARY KEY (`rid`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`mesid`);

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
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `appid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `did` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `hospital`
--
ALTER TABLE `hospital`
  MODIFY `hid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `logindetails`
--
ALTER TABLE `logindetails`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `mesid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `pid` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ward`
--
ALTER TABLE `ward`
  MODIFY `wid` int(5) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
