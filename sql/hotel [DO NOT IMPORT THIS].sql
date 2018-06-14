-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 18, 2017 at 07:51 PM
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
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_username` varchar(40) NOT NULL,
  `admin_password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_username`, `admin_password`) VALUES
(100, 'Saurabh', '123456'),
(101, 'Sumedh', '123');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `item_id` int(11) NOT NULL,
  `menu_section` varchar(30) NOT NULL,
  `menu_item` varchar(30) NOT NULL,
  `menu_item_price` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `menu_desc` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `user_id` int(11) NOT NULL,
  `First_name` varchar(20) NOT NULL,
  `Middle_name` varchar(20) NOT NULL,
  `Last_name` varchar(20) NOT NULL,
  `Age` int(5) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `Contact_no` int(18) NOT NULL,
  `username` varchar(30) NOT NULL,
  `Password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`user_id`, `First_name`, `Middle_name`, `Last_name`, `Age`, `Address`, `Contact_no`, `username`, `Password`) VALUES
(6, 'Saurabh', 'Subhash', 'Salvi', 19, 'Jupiter', 2147483647, 'salvisaurabh43', '123456'),
(7, 'Sumedh', 'Pranab', 'Sen', 20, 'Samta Nagar', 124134, 'Sumedh', '1234'),
(8, 'Manisha', 'Subhash', 'Salvi', 35, 'Jupiter', 12112, 'Manisha', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `customerregistration`
--

CREATE TABLE `customerregistration` (
  `serialNo` int(3) NOT NULL,
  `username` varchar(20) DEFAULT NULL,
  `sessionID` int(15) DEFAULT NULL,
  `name` varchar(40) DEFAULT NULL,
  `date_of_txn` varchar(15) DEFAULT NULL,
  `time_of_txn` varchar(15) DEFAULT NULL,
  `type_of_txn` varchar(15) DEFAULT NULL,
  `checkin` varchar(15) DEFAULT NULL,
  `checkout` varchar(15) DEFAULT NULL,
  `roomno` varchar(3) DEFAULT NULL,
  `tot_amt` varchar(7) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `First_name` text NOT NULL,
  `Middle_name` text NOT NULL,
  `Last_name` text NOT NULL,
  `Feedback` text NOT NULL,
  `Email` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `foodmenu`
--

CREATE TABLE `foodmenu` (
  `item_id` int(11) NOT NULL,
  `menu_section` varchar(30) NOT NULL,
  `menu_item` varchar(25) NOT NULL,
  `menu_item_price` int(10) NOT NULL,
  `menu_desc` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `foodmenu`
--

INSERT INTO `foodmenu` (`item_id`, `menu_section`, `menu_item`, `menu_item_price`, `menu_desc`) VALUES
(5, 'drinks', 'Tasty Drink', 30, 'Description'),
(7, 'drinks', 'Tasty Drink', 70, 'Description'),
(11, 'starters', 'starter', 120, 'Description'),
(12, 'desserts', 'dessert', 50, 'Description'),
(13, 'desserts', 'dessert', 50, 'Description'),
(18, 'main-course', 'Delicious Dish', 200, 'Description');

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
(301, 'Super Deluxe', 2, 5000, 700, 'occupied'),
(302, 'Super Deluxe', 2, 5000, 700, 'vacant'),
(303, 'Super Deluxe', 2, 5000, 700, 'vacant'),
(304, 'Super Deluxe', 2, 5000, 700, 'vacant'),
(401, 'Deluxe', 2, 4000, 700, 'vacant'),
(402, 'Deluxe', 2, 4000, 700, 'vacant'),
(403, 'Deluxe', 2, 4000, 700, 'vacant'),
(404, 'Deluxe', 2, 4000, 700, 'vacant'),
(501, 'Family Suite', 4, 8000, 1000, 'vacant'),
(502, 'Family Suite', 4, 8000, 1000, 'vacant'),
(601, 'Super Suite', 4, 10000, 1100, 'occupied'),
(602, 'Super Suite', 4, 10000, 1100, 'vacant');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `customerregistration`
--
ALTER TABLE `customerregistration`
  ADD PRIMARY KEY (`serialNo`);

--
-- Indexes for table `foodmenu`
--
ALTER TABLE `foodmenu`
  ADD PRIMARY KEY (`item_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;
--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `customerregistration`
--
ALTER TABLE `customerregistration`
  MODIFY `serialNo` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `foodmenu`
--
ALTER TABLE `foodmenu`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
