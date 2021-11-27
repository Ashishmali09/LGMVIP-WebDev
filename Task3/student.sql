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
(1, 'Ananya', 'Pawar', 78, 85, 82, 80),
(2, 'Kishori', 'Mestri', 78, 80, 82, 85),
(3, 'Aditi', 'Jagadale', 92, 85, 87, 92),
(4, 'Tejaswini', 'Bhosle', 75, 82, 80, 85),
(5, 'Kshitija', 'Disale', 89, 90, 83, 80),
(6, 'Pooja', 'Bhingare', 80, 82, 85, 90),
(7, 'Prerana', 'Takale', 90, 87, 81, 80),
(8, 'Supriya', 'Mane', 80, 88, 91, 79),
(9, 'Snehal', 'Sidwadkar', 82, 90, 77, 79),
(10, 'Aishwarya', 'Sontakke', 89, 78, 86, 82),
(11, 'Sneha', 'Mestri', 75, 80, 77, 82);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
