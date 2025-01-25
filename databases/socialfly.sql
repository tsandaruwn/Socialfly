-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 10, 2021 at 08:18 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `socialfly`
--

-- --------------------------------------------------------

--
-- Table structure for table `adsetting`
--

CREATE TABLE `adsetting` (
  `name` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `contact_no` varchar(20) NOT NULL,
  `description` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adsetting`
--

INSERT INTO `adsetting` (`name`, `email`, `contact_no`, `description`) VALUES
('', 'ssssss', '', '?>\r\n        sssssss\r\n        '),
('', 'ssssss', '', '?>\r\n        sssssss\r\n        ');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `name` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `ID` int(5) NOT NULL,
  `description` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`name`, `email`, `ID`, `description`) VALUES
('', '', 0, '        \r\n        ');

-- --------------------------------------------------------

--
-- Table structure for table `susers`
--

CREATE TABLE `susers` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `UId` int(11) NOT NULL,
  `Uname` varchar(50) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `PhoneNo` int(10) NOT NULL,
  `Uemail` varchar(50) NOT NULL,
  `BussinessRNo` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`UId`, `Uname`, `Address`, `PhoneNo`, `Uemail`, `BussinessRNo`, `password`) VALUES
(1, 'Amal', 'kahangama rd,rathnapura', 771234585, 'Amal@gmail.com', 'A1012', 'AS123@'),
(2, 'Nimal', 'mawanth rd,homagamna', 452315988, 'nimal@gmail.com', 'B20', '@45236K'),
(3, 'Amara', 'kuliyapitiya', 777441158, 'amara@gmail.com', 'K445', '45569.'),
(4, 'Nayana', 'dompe rd,nuwara', 453698521, 'Nayana@gmail.com', 'A1200', 'Dd863'),
(3, 'Amara', 'kuliyapitiya', 777441158, 'amara@gmail.com', 'K445', '45569.'),
(4, 'Nayana', 'dompe rd,nuwara', 453698521, 'Nayana@gmail.com', 'A1200', 'Dd863'),
(5, 'Fathima', 'hambanthota', 1125478110, 'fathima@gmail.com', 'Ab2001', 'Iopsxd2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `susers`
--
ALTER TABLE `susers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `susers`
--
ALTER TABLE `susers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
