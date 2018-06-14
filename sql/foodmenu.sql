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
(19, 'starters', 'Crispy Thread Paneer', 250, 'Cottage Cheese Coated in Fried Noodles'),
(20, 'starters', 'Chicken in Oyster Sauce', 250, 'Fried Cottage Cheese coated in Oyster Sauce'),
(21, 'drinks', 'Spiced Guava', 150, 'House spices, Guava Juice'),
(22, 'drinks', 'Iced Teas', 100, 'Choose from Lemon, Peach, Strawberry'),
(23, 'drinks', 'Kokum cooler', 130, 'Kokum, Lime, Fresh Mint, Lemonade, Soda'),
(24, 'drinks', 'Virgin FLavoured Mojito', 160, 'Fresh mint, Lime, Apple juice,Crushed Ice, lemonade'),
(25, 'desserts', 'Honey Delite', 175, 'Honey Tossed Noodles with Sesame and Vanilla Ice cream'),
(26, 'desserts', 'Dimsums', 175, 'Coconut & Jaggery Dimsums'),
(27, 'desserts', 'Choice of Ice Cream', 100, '2 Scoops of Ice Cream'),
(28, 'main-course', 'Roti - Plain', 25, 'Indian Bread'),
(29, 'main-course', 'Roti - Butter', 30, 'Indian Bread'),
(30, 'main-course', 'Naan - Butter', 50, 'A thicker Indian bread'),
(31, 'main-course', 'Jeera Rice', 120, 'Steamed Rice with a dash of Jeera and Coriander Leaves'),
(32, 'main-course', 'Veg. Biryani', 225, 'Steamed rice with a variety of Indian spices and veggies '),
(33, 'main-course', 'Paneer Kadhai', 260, 'Cottage cheese in a Spicy Gravy'),
(34, 'main-course', 'Dal Fry', 150, 'Yellow dal Tadka Maarke'),
(35, 'starters', 'Aaloo Cheese Kebabs', 220, 'Mashed Potatoes and Cheese deep fried with a coating of Sesame'),
(36, 'starters', 'Makai ki Tikki', 195, 'Corn Patties');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `foodmenu`
--
ALTER TABLE `foodmenu`
  ADD PRIMARY KEY (`item_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `foodmenu`
--
ALTER TABLE `foodmenu`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
