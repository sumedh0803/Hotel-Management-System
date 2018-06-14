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
-- Table structure for table `customerregistration`
--

CREATE TABLE `customerregistration` (
  `serialNo` int(3) NOT NULL,
  `username` varchar(20) DEFAULT NULL,
  `name` varchar(40) DEFAULT NULL,
  `date_of_txn` varchar(15) DEFAULT NULL,
  `time_of_txn` varchar(15) DEFAULT NULL,
  `type_of_txn` varchar(15) DEFAULT NULL,
  `checkin` varchar(15) DEFAULT NULL,
  `checkout` varchar(15) DEFAULT NULL,
  `roomno` varchar(3) DEFAULT NULL,
  `tot_amt` varchar(7) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customerregistration`
--

INSERT INTO `customerregistration` (`serialNo`, `username`, `name`, `date_of_txn`, `time_of_txn`, `type_of_txn`, `checkin`, `checkout`, `roomno`, `tot_amt`) VALUES
(1, 'laksh', 'Mr. Lakshmeesha S Shetty', '19-10-2017', '05:06:07pm', 'Room Booking', '2017-10-19', '2017-11-15', '302', '160126'),
(2, 'laksh', 'laksh', '19-10-2017', '05:07:04pm', 'Food Order', NULL, NULL, NULL, '250'),
(3, 'sumedhs', 'sumedhs', '19-10-2017', '05:07:56pm', 'Food Order', NULL, NULL, NULL, '750'),
(4, 'sumedhs', 'sumedhs', '19-10-2017', '05:26:31pm', 'Food Order', NULL, NULL, NULL, '1440'),
(5, 'sumedhs', 'Mr. sumedh  sen', '19-10-2017', '05:27:11pm', 'Room Booking', '2017-10-20', '2017-10-27', '401', '33866'),
(6, 'sumedhs', 'sumedhs', '21-10-2017', '09:56:39am', 'Food Order', NULL, NULL, NULL, '1440');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customerregistration`
--
ALTER TABLE `customerregistration`
  ADD PRIMARY KEY (`serialNo`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customerregistration`
--
ALTER TABLE `customerregistration`
  MODIFY `serialNo` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
