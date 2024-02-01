-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 01, 2024 at 02:38 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `payment`
--

-- --------------------------------------------------------

--
-- Table structure for table `additemsdata`
--

CREATE TABLE `additemsdata` (
  `item_id` int(200) NOT NULL,
  `image` varchar(300) NOT NULL,
  `name` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `additemsdata`
--

INSERT INTO `additemsdata` (`item_id`, `image`, `name`) VALUES
(29, '65993a0dc92da.jpg', 'Bird Watching in Bundala National Park \r\nRS.8000/='),
(43, '65b9537146e06.jpg', 'Yala National Park Jeep Safari\r\nRS.12000/='),
(44, '65b95394ea4a5.jpg', 'Visit to the Elephant Transit Home\r\nRS.6000/='),
(45, '65b953c4814df.jpg', 'Cultural Tour in Tissamaharama\r\nRS.35000/='),
(46, '65b95406840c4.jpg', 'Galle Fort Exploration\r\nRS.5000/='),
(47, '65b9542fe82ac.jpg', 'Mulkirigala Rock Monastery Exploration\r\nRS.22000/=');

-- --------------------------------------------------------

--
-- Table structure for table `cart_items`
--

CREATE TABLE `cart_items` (
  `cart_id` int(11) NOT NULL,
  `cus_id` int(11) DEFAULT NULL,
  `item_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart_items`
--

INSERT INTO `cart_items` (`cart_id`, `cus_id`, `item_id`) VALUES
(45, 45, 29),
(49, 36, 47),
(51, 37, 47);

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `usid` int(11) NOT NULL,
  `cus_id` int(11) NOT NULL,
  `image_data` blob DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `optionadmin`
--

CREATE TABLE `optionadmin` (
  `opt_id` int(100) NOT NULL,
  `opt_place` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `paydetails`
--

CREATE TABLE `paydetails` (
  `id` int(50) NOT NULL,
  `cardname` varchar(50) NOT NULL,
  `cardnumber` int(50) NOT NULL,
  `expmonth` int(50) NOT NULL,
  `expyear` int(50) NOT NULL,
  `cvv` int(50) NOT NULL,
  `place` varchar(50) NOT NULL,
  `price` int(200) NOT NULL,
  `booking` date NOT NULL,
  `people` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `paydetails`
--

INSERT INTO `paydetails` (`id`, `cardname`, `cardnumber`, `expmonth`, `expyear`, `cvv`, `place`, `price`, `booking`, `people`) VALUES
(51, 'heshan', 1, 1, 1, 1, 'Sinharaja', 2000, '1111-01-01', 1),
(52, 'ss', 2, 2, 2, 2, 'Polonnaruwa', 18000, '3333-03-03', 3),
(53, 'lahiru', 1111, 111, 11, 11, 'Yapanaya', 20000, '2222-02-02', 4);

-- --------------------------------------------------------

--
-- Table structure for table `signupdetails`
--

CREATE TABLE `signupdetails` (
  `cus_id` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `password` varchar(300) NOT NULL,
  `idnumber` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `signupdetails`
--

INSERT INTO `signupdetails` (`cus_id`, `name`, `mail`, `password`, `idnumber`) VALUES
(36, 'heshan', 'heshan@gmail.com', '$2y$10$yEE0kyvDXMe0IOhDFk3geufIz7ltO3p6hNtwaCgGyIGi/d3VwknNW', 'heshan'),
(37, 'Admin', 'Admin@gmail.com', '$2y$10$LYcKX22698sXKddTkuvTVuCbLJdjFX0.PanGeUtuIXk.rcEX30fhK', 'Admin'),
(45, 'java', 'java@gmail.com', '$2y$10$hbG/1WdnVQkhX0F8VYo8Gugef2cnDjJIt4faaWSI7LyYhJUZ7KP.S', '1'),
(46, 'liyanage', 'liyanage@gmail.com', '$2y$10$LvYyUyVYjI1IMBuAmSTBBObGqkfBDyPNnAC/6ylNfGWusazBbHGlu', '220100047V');

-- --------------------------------------------------------

--
-- Table structure for table `temp_cart_data`
--

CREATE TABLE `temp_cart_data` (
  `cart_id` int(11) NOT NULL,
  `session_id` varchar(255) NOT NULL,
  `cart_data` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `additemsdata`
--
ALTER TABLE `additemsdata`
  ADD PRIMARY KEY (`item_id`),
  ADD KEY `id` (`item_id`),
  ADD KEY `id_2` (`item_id`);

--
-- Indexes for table `cart_items`
--
ALTER TABLE `cart_items`
  ADD PRIMARY KEY (`cart_id`),
  ADD KEY `cus_id` (`cus_id`),
  ADD KEY `item_id` (`item_id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`usid`),
  ADD KEY `cus_id` (`cus_id`);

--
-- Indexes for table `optionadmin`
--
ALTER TABLE `optionadmin`
  ADD PRIMARY KEY (`opt_id`);

--
-- Indexes for table `paydetails`
--
ALTER TABLE `paydetails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signupdetails`
--
ALTER TABLE `signupdetails`
  ADD PRIMARY KEY (`cus_id`);

--
-- Indexes for table `temp_cart_data`
--
ALTER TABLE `temp_cart_data`
  ADD PRIMARY KEY (`cart_id`),
  ADD UNIQUE KEY `session_id` (`session_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `additemsdata`
--
ALTER TABLE `additemsdata`
  MODIFY `item_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `cart_items`
--
ALTER TABLE `cart_items`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `usid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `optionadmin`
--
ALTER TABLE `optionadmin`
  MODIFY `opt_id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `paydetails`
--
ALTER TABLE `paydetails`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `signupdetails`
--
ALTER TABLE `signupdetails`
  MODIFY `cus_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `temp_cart_data`
--
ALTER TABLE `temp_cart_data`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart_items`
--
ALTER TABLE `cart_items`
  ADD CONSTRAINT `cart_items_ibfk_1` FOREIGN KEY (`cus_id`) REFERENCES `signupdetails` (`cus_id`),
  ADD CONSTRAINT `cart_items_ibfk_2` FOREIGN KEY (`item_id`) REFERENCES `additemsdata` (`item_id`);

--
-- Constraints for table `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `images_ibfk_1` FOREIGN KEY (`cus_id`) REFERENCES `signupdetails` (`cus_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
