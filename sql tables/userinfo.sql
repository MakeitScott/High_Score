-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 26, 2022 at 05:32 AM
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
-- Table structure for table `userinfo`
--

DROP TABLE IF EXISTS `userinfo`;
CREATE TABLE IF NOT EXISTS `userinfo` (
  `rowid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `firstname` varchar(25) NOT NULL,
  `lastname` varchar(35) NOT NULL,
  `email` varchar(50) NOT NULL,
  `userid` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `role` varchar(25) NOT NULL,
  `photo` varchar(40) DEFAULT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deleted` tinyint(1) NOT NULL DEFAULT '0',
  `banned` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`rowid`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`rowid`, `firstname`, `lastname`, `email`, `userid`, `password`, `role`, `photo`, `created`, `updated`, `deleted`, `banned`) VALUES
(1, 'Bugs', 'Bunny', 'bbunny@gmail.com', 'bb', 'bb', 'Admin', 'images/1.png', '2022-10-26 01:18:59', '2022-10-26 01:18:59', 0, 0),
(2, 'Daffy', 'Duck', 'dduck@aol.com', 'dd', 'dd', 'Gamer', 'images/2.png', '2022-10-26 01:18:59', '2022-10-26 01:18:59', 0, 0),
(3, 'Marvin', 'Martian', 'mmartian@aol.com', 'marvin', 'marvin', 'Gamer', 'images/3.png', '2022-10-26 01:18:59', '2022-10-26 01:18:59', 0, 0),
(4, 'Porky', 'Pig', 'porkypig@aol.com', 'ppig', 'porkypig', 'Gamer', NULL, '2022-10-26 01:18:59', '2022-10-26 01:18:59', 0, 0),
(5, 'Elmer', 'Fudd', 'efudd@yahoo.com', 'efudd', 'elmerfudd', 'Admin', 'images/5.png', '2022-10-26 01:18:59', '2022-10-26 01:18:59', 0, 0),
(6, 'Road', 'Runner', 'rrunner@gmail.com', 'rrunner', 'roadrunner', 'Gamer', 'images/6.jpg', '2022-10-26 01:18:59', '2022-10-26 01:18:59', 0, 0),
(7, 'Tweety', 'Bird', 'tBird@aol.com', 'tweety', 'bird', 'Gamer', 'images/7.png', '2022-10-26 01:18:59', '2022-10-26 01:18:59', 0, 0),
(8, 'Foghorn', 'Leghorn', 'f_leghorn@aol.com', 'fog', 'leg', 'Gamer', NULL, '2022-10-26 01:18:59', '2022-10-26 01:18:59', 0, 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
