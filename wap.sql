-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 07, 2019 at 02:34 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wap`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE `adminlogin` (
  `aid` int(11) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`aid`, `username`, `password`) VALUES
(1, 'wap123', 'wap123');

-- --------------------------------------------------------

--
-- Table structure for table `consumer_details`
--

CREATE TABLE `consumer_details` (
  `c_id` int(10) NOT NULL,
  `c_no` varchar(15) NOT NULL,
  `c_name` varchar(15) NOT NULL,
  `res_ass_no` varchar(50) NOT NULL,
  `phone` bigint(15) NOT NULL,
  `latitude` decimal(10,0) NOT NULL,
  `longitude` decimal(10,0) NOT NULL,
  `r_no` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `consumer_details`
--

INSERT INTO `consumer_details` (`c_id`, `c_no`, `c_name`, `res_ass_no`, `phone`, `latitude`, `longitude`, `r_no`) VALUES
(2, '17654', 'gokul', 'kjkjhjfgjh', 9999999999, '12', '77', '123/a');

-- --------------------------------------------------------

--
-- Table structure for table `meter_details`
--

CREATE TABLE `meter_details` (
  `m_id` int(10) NOT NULL,
  `m_no` varchar(15) NOT NULL,
  `c_no` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `meter_read`
--

CREATE TABLE `meter_read` (
  `mr_id` int(11) NOT NULL,
  `m_no` varchar(15) NOT NULL,
  `date` date NOT NULL,
  `time` time(6) NOT NULL,
  `prev_read` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `readerlogin`
--

CREATE TABLE `readerlogin` (
  `r_id` int(5) NOT NULL,
  `r_no` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `reader_details`
--

CREATE TABLE `reader_details` (
  `rdr_id` int(11) NOT NULL,
  `rdr_name` int(11) NOT NULL,
  `rdr_mob` int(11) NOT NULL,
  `r_no` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `route_details`
--

CREATE TABLE `route_details` (
  `r_id` int(10) NOT NULL,
  `r_no` varchar(20) NOT NULL,
  `state` varchar(20) NOT NULL,
  `district` varchar(20) NOT NULL,
  `block` varchar(20) NOT NULL,
  `panchayath` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `route_details`
--

INSERT INTO `route_details` (`r_id`, `r_no`, `state`, `district`, `block`, `panchayath`) VALUES
(1, '123/a', 'wrag', 'hjvfj', 'lhjb', 'lhjkb'),
(2, '456/kj', 'hjvl', 'lhkv', 'lhjv', 'lhj');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminlogin`
--
ALTER TABLE `adminlogin`
  ADD PRIMARY KEY (`aid`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `consumer_details`
--
ALTER TABLE `consumer_details`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `meter_details`
--
ALTER TABLE `meter_details`
  ADD PRIMARY KEY (`m_id`),
  ADD UNIQUE KEY `m_no` (`m_no`);

--
-- Indexes for table `meter_read`
--
ALTER TABLE `meter_read`
  ADD PRIMARY KEY (`mr_id`),
  ADD UNIQUE KEY `m_no` (`m_no`);

--
-- Indexes for table `readerlogin`
--
ALTER TABLE `readerlogin`
  ADD PRIMARY KEY (`r_id`);

--
-- Indexes for table `reader_details`
--
ALTER TABLE `reader_details`
  ADD PRIMARY KEY (`rdr_id`);

--
-- Indexes for table `route_details`
--
ALTER TABLE `route_details`
  ADD PRIMARY KEY (`r_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminlogin`
--
ALTER TABLE `adminlogin`
  MODIFY `aid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `consumer_details`
--
ALTER TABLE `consumer_details`
  MODIFY `c_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `meter_details`
--
ALTER TABLE `meter_details`
  MODIFY `m_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `meter_read`
--
ALTER TABLE `meter_read`
  MODIFY `mr_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `readerlogin`
--
ALTER TABLE `readerlogin`
  MODIFY `r_id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reader_details`
--
ALTER TABLE `reader_details`
  MODIFY `rdr_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `route_details`
--
ALTER TABLE `route_details`
  MODIFY `r_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
