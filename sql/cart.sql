-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 22, 2017 at 02:38 PM
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
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `user_id` varchar(15) DEFAULT NULL,
  `item_id` int(11) NOT NULL,
  `menu_section` varchar(30) DEFAULT NULL,
  `menu_item` varchar(30) DEFAULT NULL,
  `menu_item_price` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `menu_desc` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`user_id`, `item_id`, `menu_section`, `menu_item`, `menu_item_price`, `quantity`, `menu_desc`) VALUES
('laksh', 1, 'starters', 'Chicken in Oyster Sauce', 250, 1, 'Fried Cottage Cheese coated in Oyster Sauce'),
('sumedhs', 4, 'starters', 'Crispy Thread Paneer', 250, 1, 'Cottage Cheese Coated in Fried Noodles'),
('sumedhs', 5, 'starters', 'Chicken in Oyster Sauce', 250, 1, 'Fried Cottage Cheese coated in Oyster Sauce'),
('sumedhs', 6, 'drinks', 'Iced Teas', 100, 2, 'Choose from Lemon, Peach, Strawberry'),
('sumedhs', 7, 'drinks', 'Kokum cooler', 130, 1, 'Kokum, Lime, Fresh Mint, Lemonade, Soda'),
('sumedhs', 8, 'main-course', 'Paneer Kadhai', 260, 1, 'Cottage cheese in a Spicy Gravy'),
('sumedhs', 9, 'main-course', 'Roti - Plain', 25, 3, 'Indian Bread'),
('sumedhs', 10, 'desserts', 'Choice of Ice Cream', 100, 1, '2 Scoops of Ice Cream'),
('sumedhs', 11, 'desserts', 'Honey Delite', 175, 1, 'Honey Tossed Noodles with Sesame and Vanilla Ice c');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`item_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
