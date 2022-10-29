-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 26, 2022 at 05:26 AM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

--
-- Created by Scott Pietras
--
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `high_score`
--

-- --------------------------------------------------------

--
-- Table structure for table `gameinfo`
--

DROP TABLE IF EXISTS `gameinfo`;
CREATE TABLE IF NOT EXISTS `gameinfo` (
  `rowid` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(40) NOT NULL,
  `location` varchar(50) NOT NULL,
  `image` varchar(30) DEFAULT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deleted` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`rowid`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gameinfo`
--

INSERT INTO `gameinfo` (`rowid`, `title`, `location`, `image`, `created`, `updated`, `deleted`) VALUES
(1, 'Snake', 'Games/Snake/.index.html', NULL, '2022-10-26 01:05:17', '2022-10-26 01:16:45', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
