-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 05, 2017 at 08:19 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webtech`
--

-- --------------------------------------------------------

--
-- Table structure for table `insertform`
--

CREATE TABLE `insertform` (
  `Sno` int(11) NOT NULL,
  `image` longblob NOT NULL,
  `fname` text NOT NULL,
  `lname` text NOT NULL,
  `relation` text NOT NULL,
  `address` varchar(30) NOT NULL,
  `state` text NOT NULL,
  `postcode` int(10) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `mail` varchar(30) NOT NULL,
  `fnamemiss` text NOT NULL,
  `lnamemiss` text NOT NULL,
  `nick` text NOT NULL,
  `age` int(5) NOT NULL,
  `dob` date NOT NULL,
  `relationmiss` text NOT NULL,
  `addressmiss` varchar(30) NOT NULL,
  `postcodemiss` int(10) NOT NULL,
  `mobilemiss` varchar(15) NOT NULL,
  `date` date NOT NULL,
  `height` int(5) NOT NULL,
  `inch` int(5) NOT NULL,
  `build` text NOT NULL,
  `complexion` text NOT NULL,
  `eye` text NOT NULL,
  `glasses` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `insertform`
--

INSERT INTO `insertform` (`Sno`, `image`, `fname`, `lname`, `relation`, `address`, `state`, `postcode`, `mobile`, `mail`, `fnamemiss`, `lnamemiss`, `nick`, `age`, `dob`, `relationmiss`, `addressmiss`, `postcodemiss`, `mobilemiss`, `date`, `height`, `inch`, `build`, `complexion`, `eye`, `glasses`) VALUES
(1, 0x312e6a7067, 'Harshit', 'Gola', 'Friend', '136- Main Road Khichripur\r\nNea', 'Delhi', 110091, '9899395131', 'harshit.gola.hg@gmail.com', 'Arushi', 'Saxena', 'Aashi', 19, '1998-02-02', 'Female', 'same', 20010, '8510021385', '2017-11-30', 5, 7, 'Stocky', 'Freckled', 'Brown', 'null');

-- --------------------------------------------------------

--
-- Table structure for table `reportform`
--

CREATE TABLE `reportform` (
  `Sno` int(11) NOT NULL,
  `fnamemiss` varchar(20) NOT NULL,
  `lnamemiss` varchar(20) NOT NULL,
  `time` time NOT NULL,
  `date` date NOT NULL,
  `loc` varchar(30) NOT NULL,
  `cctv` text NOT NULL,
  `look` text NOT NULL,
  `wear` varchar(50) NOT NULL,
  `circum` varchar(100) NOT NULL,
  `fname` text NOT NULL,
  `lname` text NOT NULL,
  `mail` varchar(30) NOT NULL,
  `number` varchar(20) NOT NULL,
  `address` varchar(30) NOT NULL,
  `pin` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reportform`
--

INSERT INTO `reportform` (`Sno`, `fnamemiss`, `lnamemiss`, `time`, `date`, `loc`, `cctv`, `look`, `wear`, `circum`, `fname`, `lname`, `mail`, `number`, `address`, `pin`) VALUES
(1, '', '', '00:00:00', '0000-00-00', '', 'null', '', '', '', 'harshit', '', '', '', '', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `insertform`
--
ALTER TABLE `insertform`
  ADD PRIMARY KEY (`Sno`);

--
-- Indexes for table `reportform`
--
ALTER TABLE `reportform`
  ADD PRIMARY KEY (`Sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `insertform`
--
ALTER TABLE `insertform`
  MODIFY `Sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `reportform`
--
ALTER TABLE `reportform`
  MODIFY `Sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
