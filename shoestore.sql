-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 24, 2023 at 04:15 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shoestore`
--

-- --------------------------------------------------------

--
-- Table structure for table `email`
--

CREATE TABLE `email` (
  `email_id` int(11) NOT NULL,
  `email` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `address` text NOT NULL,
  `phone` int(11) NOT NULL,
  `shoe_name` text NOT NULL,
  `shoe_color` text NOT NULL,
  `shoe_size` int(11) NOT NULL,
  `shoe_price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `shoe`
--

CREATE TABLE `shoe` (
  `shoe_id` int(11) NOT NULL,
  `name` text NOT NULL,
  `description` text NOT NULL,
  `price` mediumint(9) NOT NULL,
  `image1` text NOT NULL,
  `image2` text NOT NULL,
  `color1` text NOT NULL,
  `color2` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shoe`
--

INSERT INTO `shoe` (`shoe_id`, `name`, `description`, `price`, `image1`, `image2`, `color1`, `color2`) VALUES
(1, 'Air Force', 'The Air Force is a range of athletic shoes made by Nike that began with the Air Force 1 and went on to include the Air Force 2, Air Force 3, Air Force STS, Air Force 5, Air Force XXV and Air Force 09.', 129, 'img/air.png', 'img/air2.png', 'black', 'blue'),
(2, 'Jordan', 'Air Jordan is an American brand of basketball shoes produced by Nike. It now covers over 32 versions of this shoe', 149, 'img/jordan.png', 'img/jordan2.png', 'grey', 'green'),
(3, 'Blazer', 'Blazer is a range of athletic shoes made in US and are well known for providing ankle support and stability', 109, 'img/blazer.png', 'img/blazer2.png', 'white', 'green'),
(4, 'Crater', 'Crater is part of our sustainability journey to transform trash into shoes that tread a little lighter. We made unique design choices that reduce waste.', 115, 'img/crater.png', 'img/crater2.png', 'black', 'white'),
(5, 'Hippie', 'Space Hippie is an exploratory footwear collection inspired by life on Mars where materials are scarce and there is no resupply mission.', 110, 'img/hippie.png', 'img/hippie2.png', 'grey', 'black'),
(6, 'Dunk Low', 'Nike Dunk Low, originally created to be a basketball shoe, these sneakers have since become a well loved fan favorite. Soft suede and smooth leather add durability to a classic design while the padded, low cut collar lets you root for your squad in comfort.', 100, 'img/dunklow.png', 'img/dunklow2.png', 'white', 'red'),
(7, 'Air Max', 'The Nike Air Max stays true to its OG running roots with the iconic Waffle sole, stitched overlays and classic TPU details. Classic colors celebrate your fresh look while Max Air cushioning adds comfort to the journey.', 130, 'img/airmax.png', 'img/airmax2.png', 'black', 'white'),
(8, 'Blazer Mid', 'The Nike Blazer Mid delivers a timeless design that is easy to wear. Its unbelievably crisp leather upper breaks in beautifully and pairs with bold retro branding and luscious suede accents for a premium feel.', 105, 'img/blazermid.png', 'img/blazermid2.png', 'blue', 'orange');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `email`
--
ALTER TABLE `email`
  ADD PRIMARY KEY (`email_id`),
  ADD UNIQUE KEY `email` (`email`) USING HASH;

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `shoe`
--
ALTER TABLE `shoe`
  ADD PRIMARY KEY (`shoe_id`),
  ADD UNIQUE KEY `name` (`name`) USING HASH;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `email`
--
ALTER TABLE `email`
  MODIFY `email_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `shoe`
--
ALTER TABLE `shoe`
  MODIFY `shoe_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
