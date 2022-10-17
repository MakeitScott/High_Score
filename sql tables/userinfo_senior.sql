-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 25, 2022 at 12:06 AM
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
-- Table structure for table `userInfo`
--

DROP TABLE IF EXISTS `userInfo`;
CREATE TABLE IF NOT EXISTS `userInfo` (
  `rowid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `firstname` varchar(25) NOT NULL,
  `lastname` varchar(35) NOT NULL,
  `email` varchar(50) NOT NULL,
  `userid` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `role` varchar(25) NOT NULL,
  `photo` varchar(40) DEFAULT NULL,

  
  PRIMARY KEY (`rowid`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userInfo`
--

INSERT INTO `userInfo` (`rowid`, `firstname`, `lastname`, `email`, `userid`, `password`, `role`, `photo`) VALUES

(1, 'Bugs', 'Bunny', 'bbunny@gmail.com', 'bb', 'bb', 'Admin', 'images/1.png'),
(2, 'Daffy', 'Duck', 'dduck@aol.com', 'dd', 'dd', 'Student', 'images/2.png'),
(3, 'Marvin', 'Martian', 'mmartian@aol.com', 'marvin', 'marvin', 'Student', 'images/3.png'),
(4, 'Porky', 'Pig', 'porkypig@aol.com', 'ppig', 'porkypig', 'Student', NULL),
(5, 'Elmer', 'Fudd', 'efudd@yahoo.com', 'efudd', 'elmerfudd', 'Admin', 'images/5.png'),
(6, 'Road', 'Runner', 'rrunner@gmail.com', 'rrunner', 'roadrunner', 'Student', 'images/6.jpg'),
(7, 'Tweety', 'Bird', 'tBird@aol.com', 'tweety', 'bird', 'Student', 'images/7.png'),
(8, 'Foghorn', 'Leghorn', 'f_leghorn@aol.com', 'fog', 'leg', 'Student', NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
