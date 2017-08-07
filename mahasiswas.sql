-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 07, 2017 at 06:13 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `application`
--

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswas`
--

CREATE TABLE IF NOT EXISTS `mahasiswas` (
  `nim` int(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `uts` int(11) NOT NULL,
  `uas` int(11) NOT NULL,
  `tugas` int(11) NOT NULL,
  `presensi` int(11) NOT NULL,
  `finalScore` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahasiswas`
--

INSERT INTO `mahasiswas` (`nim`, `nama`, `uts`, `uas`, `tugas`, `presensi`, `finalScore`) VALUES
(2147483647, 'asido sibuea', 98, 98, 98, 15, 0),
(2147483647, 'asido sibueaa', 98, 98, 98, 15, 0),
(66711, 'john', 80, 50, 50, 0, 52),
(66711, 'john', 80, 50, 50, 0, 52),
(2147483647, 'rahmat', 80, 60, 80, 15, 62),
(6767, 'ny jo', 66, 87, 77, 8, 67),
(6767, 'ny jo', 66, 87, 77, 8, 67),
(888, 'gerrard', 78, 78, 77, 6, 67),
(90, 'dracarys', 60, 11, 60, 70, 42);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
