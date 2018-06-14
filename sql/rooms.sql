-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 22, 2017 at 02:39 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `room_no` int(4) NOT NULL,
  `category` varchar(15) NOT NULL,
  `capacity` int(1) NOT NULL,
  `rate` int(4) NOT NULL,
  `extra person` int(11) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`room_no`, `category`, `capacity`, `rate`, `extra person`, `status`) VALUES
(301, 'Super Deluxe', 2, 5000, 700, 'vacant'),
(302, 'Super Deluxe', 2, 5000, 700, 'vacant'),
(303, 'Super Deluxe', 2, 5000, 700, 'vacant'),
(304, 'Super Deluxe', 2, 5000, 700, 'vacant'),
(401, 'Deluxe', 2, 4000, 700, 'vacant'),
(402, 'Deluxe', 2, 4000, 700, 'vacant'),
(403, 'Deluxe', 2, 4000, 700, 'vacant'),
(404, 'Deluxe', 2, 4000, 700, 'vacant'),
(501, 'Family Suite', 4, 8000, 1000, 'vacant'),
(502, 'Family Suite', 4, 8000, 1000, 'vacant'),
(601, 'Super Suite', 4, 10000, 1100, 'vacant'),
(602, 'Super Suite', 4, 10000, 1100, 'vacant');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
