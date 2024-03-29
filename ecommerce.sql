-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 29, 2024 at 12:18 PM
-- Server version: 8.0.35
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

﻿--
-- Database: `ecommerce`
--
﻿CREATE DATABASE IF NOT EXISTS `ecommerce` DEFAULT CHARACTER SET utf16 COLLATE utf16_general_ci;
﻿USE `ecommerce`;
﻿
-- --------------------------------------------------------

--
-- Table structure for table `all_items`
--

CREATE TABLE `all_items` (
  `item_id` int NOT NULL,
  `item_name` varchar(50) NOT NULL,
  `item_price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_general_ci;
﻿
--
-- Dumping data for table `all_items`
--

﻿INSERT INTO `all_items` (`item_id`, `item_name`, `item_price`) VALUES
(1, 'Lei of Aloha Midnight', 79.99)﻿,
(2, 'Kahala Hibiscus Navy', 79.99)﻿,
(3, 'Flamingo Island Blue', 79.99)﻿,
(4, 'Kahala Hibiscus White', 79.99)﻿,
(5, 'Kahala Hibiscus Yellow', 79.99)﻿,
(6, 'Lei of Aloha Sky', 79.99)﻿,
(7, 'Palm Shorts', 179.99)﻿,
(8, 'White Flower Shorts', 149.99)﻿,
(9, 'Island Blue shorts', 199.99)﻿,
(10, 'Grey Vintage Hat', 179.99)﻿,
(11, 'Brown with Gold Hat', 199.99)﻿,
(12, 'Beige with Silver Feather', 279.99)﻿;
﻿
-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `item_id` int NOT NULL,
  `all_items_id` int NOT NULL,
  `item_name` varchar(50) NOT NULL,
  `item_price` float NOT NULL,
  `item_quantity` int DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_general_ci;
﻿
--
-- Dumping data for table `cart`
--

﻿INSERT INTO `cart` (`item_id`, `all_items_id`, `item_name`, `item_price`, `item_quantity`) VALUES
(89, 5, 'Kahala Hibiscus Yellow', 79.99, 3)﻿,
(90, 6, 'Lei of Aloha Sky', 79.99, 4)﻿,
(91, 11, 'Brown with Gold Hat', 199.99, 5)﻿;
﻿
--
-- Indexes for dumped tables
--

--
-- Indexes for table `all_items`
--
ALTER TABLE `all_items`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`item_id`);
﻿
--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `all_items`
--
ALTER TABLE `all_items`
  MODIFY `item_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `item_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;
﻿COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
