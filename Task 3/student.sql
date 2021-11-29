-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 23, 2021 at 05:01 PM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `studentresults`
--

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

DROP TABLE IF EXISTS `student`;
CREATE TABLE IF NOT EXISTS `student` (
  `RollNo` int(3) NOT NULL,
  `Fname` varchar(60) NOT NULL,
  `Lname` varchar(60) NOT NULL,
  `Maths` int(3) NOT NULL,
  `English` int(3) NOT NULL,
  `Physics` int(3) NOT NULL,
  `Chemistry` int(3) NOT NULL,
  PRIMARY KEY (`RollNo`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`RollNo`, `Fname`, `Lname`, `Maths`, `English`, `Physics`, `Chemistry`) VALUES
(11, 'Shivani', 'Jadhav', 99, 85, 76, 81),
(12, 'Ashish', 'Mali', 98, 89, 79, 86),
(13, 'virat', 'Kohli', 78, 69, 58, 89),
(14, 'Natasa', 'Stankovic', 89, 99, 72, 75),
(15, 'Suraj', 'Kumbhar', 91, 77, 67, 84),
(16, 'MS', 'Dhoni', 98, 89, 96, 98),
(17, 'Kajal', 'Giri', 88, 91, 82, 79),
(18, 'Onkar', 'Sarang', 85, 71, 94, 92),


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
