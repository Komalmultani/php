-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 01, 2023 at 01:45 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `stdapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_addcard`
--

CREATE TABLE `tbl_addcard` (
  `cardid` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `studentid` int(11) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `staffid` int(11) NOT NULL,
  `address` text NOT NULL,
  `added_date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_addcard`
--

INSERT INTO `tbl_addcard` (`cardid`, `name`, `studentid`, `phone`, `staffid`, `address`, `added_date`) VALUES
(1, 'RBL platinum card', 1, 9998003879, 1, '150 feet ring road rajkot', '13/07/2023 05:05:43 pm'),
(2, 'SBI latinum visa card', 1, 9998003879, 1, '150 feet ring road rajkot', '13/07/2023 05:06:05 pm'),
(3, 'Bajaj black card', 1, 9998003879, 1, 'ahemdabad', '13/07/2023 05:25:09 pm'),
(4, 'kotak mahindra credit reward card', 2, 9998003879, 2, 'ahemdabad', '13/07/2023 05:26:24 pm');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_city`
--

CREATE TABLE `tbl_city` (
  `cityid` int(11) NOT NULL,
  `stateid` int(11) NOT NULL,
  `cityname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_city`
--

INSERT INTO `tbl_city` (`cityid`, `stateid`, `cityname`) VALUES
(1, 1, 'Rajkot'),
(2, 1, 'Ahemdabd'),
(3, 2, 'Varnasi'),
(4, 2, 'Mirazapur'),
(5, 3, 'Sans farsisco');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_country`
--

CREATE TABLE `tbl_country` (
  `countryid` int(11) NOT NULL,
  `countryname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_country`
--

INSERT INTO `tbl_country` (`countryid`, `countryname`) VALUES
(1, 'india'),
(2, 'usa');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_staff`
--

CREATE TABLE `tbl_staff` (
  `staffid` int(11) NOT NULL,
  `staffname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_staff`
--

INSERT INTO `tbl_staff` (`staffid`, `staffname`) VALUES
(1, 'komal'),
(2, 'priti');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_state`
--

CREATE TABLE `tbl_state` (
  `stateid` int(11) NOT NULL,
  `countryid` int(11) NOT NULL,
  `statename` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_state`
--

INSERT INTO `tbl_state` (`stateid`, `countryid`, `statename`) VALUES
(1, 1, 'Gujrat'),
(2, 1, 'Uttar pradesh'),
(3, 2, 'California');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_student`
--

CREATE TABLE `tbl_student` (
  `studentid` int(11) NOT NULL,
  `studentname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `address` text NOT NULL,
  `countryid` int(11) NOT NULL,
  `stateid` int(11) NOT NULL,
  `cityid` int(11) NOT NULL,
  `added_date_time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_student`
--

INSERT INTO `tbl_student` (`studentid`, `studentname`, `email`, `password`, `phone`, `address`, `countryid`, `stateid`, `cityid`, `added_date_time`) VALUES
(1, 'mona', 'mpchotaliya@gmail.com', 'mona123', 9998003879, 'ji', 1, 1, 1, '13/07/2023 05:00:10 pm'),
(2, 'brijesh', 'bkpandey.pandey@gmail.com', '123456', 9998003879, '150 feet', 1, 1, 1, '13/07/2023 05:07:53 pm');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_addcard`
--
ALTER TABLE `tbl_addcard`
  ADD PRIMARY KEY (`cardid`),
  ADD KEY `staffid` (`staffid`),
  ADD KEY `studentid` (`studentid`);

--
-- Indexes for table `tbl_city`
--
ALTER TABLE `tbl_city`
  ADD PRIMARY KEY (`cityid`),
  ADD KEY `stateid` (`stateid`);

--
-- Indexes for table `tbl_country`
--
ALTER TABLE `tbl_country`
  ADD PRIMARY KEY (`countryid`);

--
-- Indexes for table `tbl_staff`
--
ALTER TABLE `tbl_staff`
  ADD PRIMARY KEY (`staffid`);

--
-- Indexes for table `tbl_state`
--
ALTER TABLE `tbl_state`
  ADD PRIMARY KEY (`stateid`),
  ADD KEY `countryid` (`countryid`);

--
-- Indexes for table `tbl_student`
--
ALTER TABLE `tbl_student`
  ADD PRIMARY KEY (`studentid`),
  ADD KEY `countryid` (`countryid`),
  ADD KEY `stateid` (`stateid`),
  ADD KEY `cityid` (`cityid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_addcard`
--
ALTER TABLE `tbl_addcard`
  MODIFY `cardid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_city`
--
ALTER TABLE `tbl_city`
  MODIFY `cityid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_country`
--
ALTER TABLE `tbl_country`
  MODIFY `countryid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_staff`
--
ALTER TABLE `tbl_staff`
  MODIFY `staffid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_state`
--
ALTER TABLE `tbl_state`
  MODIFY `stateid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_student`
--
ALTER TABLE `tbl_student`
  MODIFY `studentid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
