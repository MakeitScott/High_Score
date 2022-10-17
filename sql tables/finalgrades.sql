-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 25, 2022 at 12:05 AM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bcs350`
--

-- --------------------------------------------------------

--
-- Table structure for table `finalgrades`
--

DROP TABLE IF EXISTS `finalgrades`;
CREATE TABLE IF NOT EXISTS `finalgrades` (
  `rowid` int(3) NOT NULL AUTO_INCREMENT,
  `assignment` int(3) NOT NULL,
  `student` int(3) NOT NULL,
  `grade` int(3) NOT NULL,
  PRIMARY KEY (`rowid`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `finalgrades`
--

INSERT INTO `finalgrades` (`rowid`, `assignment`, `student`, `grade`) VALUES
(1, 2, 2, 45),
(20, 4, 2, 55),
(19, 5, 2, 100),
(18, 5, 2, 100),
(17, 1, 7, 100),
(16, 1, 4, 100),
(15, 1, 3, 100),
(14, 1, 8, 100),
(13, 1, 2, 100),
(12, 4, 4, 100);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
