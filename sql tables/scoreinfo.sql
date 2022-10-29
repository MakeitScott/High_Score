-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 26, 2022 at 05:25 AM
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
-- Table structure for table `scoreinfo`
--

DROP TABLE IF EXISTS `scoreinfo`;
CREATE TABLE IF NOT EXISTS `scoreinfo` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `game` int(11) NOT NULL,
  `user` int(11) NOT NULL,
  `highscore` bigint(20) UNSIGNED NOT NULL,
  `scoredate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `timesplayed` bigint(20) UNSIGNED NOT NULL,
  `firstdate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`rowid`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `scoreinfo`
--

INSERT INTO `scoreinfo` (`rowid`, `game`, `user`, `highscore`, `scoredate`, `timesplayed`, `firstdate`, `deleted`) VALUES
(1, 1, 2, 20, '2022-10-26 01:23:05', 1, '2022-10-26 01:23:05', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
