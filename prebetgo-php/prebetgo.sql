-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 03, 2017 at 10:55 AM
-- Server version: 5.5.54-cll
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `prebetgo`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `idstaf` varchar(4) NOT NULL,
  `nama` text NOT NULL,
  `jawatan` text NOT NULL,
  `email` text NOT NULL,
  `mobile` text NOT NULL,
  `ext` varchar(4) NOT NULL,
  `web` text NOT NULL,
  `idjabatan` varchar(5) NOT NULL,
  `imej` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`idstaf`, `nama`, `jawatan`, `email`, `mobile`, `ext`, `web`, `idjabatan`, `imej`) VALUES
('0001', 'Muizz Salleh', 'Timbalan Dekan Mahasiswa', 'Muizz.Salleh@gmail.com', '+6012345234', '2313', 'http://muizz.com.my', 'JMM', 'muizz.png'),
('0132', 'Khirulnizam Abd Rahman', 'Pensyarah', 'khirulnizam@kuis.edu.my', '+60129034614', '2345', 'http://kerul.net', 'JSK', 'khirulnizam.jpg'),
('9999', 'Mohd Asyraf Chunawi', 'Trainee', 'masyrafchunawi@gmail.com', '+6012345678', '-', 'http://fstm.kuis.edu.my', 'JSK', 'asyraf.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `sd_users`
--

CREATE TABLE `sd_users` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(64) DEFAULT NULL,
  `department` varchar(255) DEFAULT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `riderOrDriverSwitch` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sd_users`
--

INSERT INTO `sd_users` (`id`, `name`, `email`, `phone`, `department`, `username`, `password`, `riderOrDriverSwitch`) VALUES
(1, 'Nasrul Hazim', 'nasrulhazim.m@gmail.com', '0197676173', 'IT', '', '', ''),
(2, 'Tuan Norhafizah', 'tn_hafizah@yahoo.com', '0123456789', 'IT', '', '', ''),
(3, 'Aqil', 'abu.qaidaqil@gmail.com', '0197676177', 'HR', '', '', ''),
(4, 'wewtew', 'asdsa@gmail.com', '9123123213', 'IT', '', '', ''),
(5, 'Khirulnizam Abd Rahman', 'kerul.net@gmail.com', '0129034614', 'IT', 'kerul', '31081ad4bbd4f3bd0e159d3d63bf19bb', ''),
(6, 'Ahmad Mohammad', 'ahmad@gmail.com', '0129034614', 'IT', '', '', ''),
(17, 'Kerul.net ', '+60129034614', 'kerul.net @gmail.co ', 'IT', '', '', ''),
(18, '123', '789', '456', 'Acount', '', '', ''),
(19, 'Jasim Uddin', '01671605743', 'jasimcse2011@gmail.com', 'IT', '', '', ''),
(24, 'Nadiah', 'nadiah@gmail.com', '01289819', NULL, 'nadiah', '104a22c63ccb88b07b6762c31c24622d', 'rider');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`idstaf`);

--
-- Indexes for table `sd_users`
--
ALTER TABLE `sd_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sd_users`
--
ALTER TABLE `sd_users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
