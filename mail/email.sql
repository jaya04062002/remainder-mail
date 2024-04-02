-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 02, 2024 at 09:15 AM
-- Server version: 5.7.36
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mail`
--

-- --------------------------------------------------------

--
-- Table structure for table `email`
--

DROP TABLE IF EXISTS `email`;
CREATE TABLE IF NOT EXISTS `email` (
  `No` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(30) NOT NULL,
  `To_Mail` varchar(30) NOT NULL,
  `Title` varchar(30) NOT NULL,
  `Content` varchar(30) NOT NULL,
  `Date` date NOT NULL,
  `Time` time NOT NULL,
  PRIMARY KEY (`No`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `email`
--

INSERT INTO `email` (`No`, `Name`, `To_Mail`, `Title`, `Content`, `Date`, `Time`) VALUES
(2, 'kowsi', 'panneerkowsalya05@gmail.com', 'Test', 'Exam comming 16', '2023-11-16', '18:00:00'),
(3, 'Rajeshwari.G', 'ramnath@gmail.com', 'Party', 'party conduct on sunday night', '2023-11-24', '17:31:00'),
(4, 'Rajesh', 'panneerkowsalya05@gmail.com', 'Exam', 'sem exam  starts on monady', '2023-11-15', '18:00:00'),
(6, 'Jagan G', 'jagan142@gmail.com', 'Meeting', 'Meeting is monday morning', '2023-11-26', '08:30:00'),
(19, 'Jayasree', 'praveensundarpv@gmail.com', 'Exam', 'Today Practical Exam', '2023-11-08', '11:50:00'),
(17, 'sindhu', 'sindhumathij11042001@gmail.com', 'Exam', 'Semester Exam Stats on monday.', '2023-11-12', '08:00:00'),
(15, 'G. Jayasree', 'jayasreeraj35@gmail.com', 'Diwali', 'Happy Diwali To All. ', '2023-11-12', '08:00:00'),
(18, 'Sadhana sri', 'sadhanasri9804@gmail.com', 'Exam', 'Today is your lab exam.', '2023-11-08', '11:00:00');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
