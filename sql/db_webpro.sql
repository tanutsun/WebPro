-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 29, 2018 at 03:35 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_webpro`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity`
--

CREATE TABLE `activity` (
  `Activity_ID` smallint(6) NOT NULL,
  `Activity_Name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Activity_Detail` text COLLATE utf8_unicode_ci NOT NULL,
  `Activity_Date` date NOT NULL,
  `Activity_Pic` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `Admin_ID` smallint(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `activity`
--

INSERT INTO `activity` (`Activity_ID`, `Activity_Name`, `Activity_Detail`, `Activity_Date`, `Activity_Pic`, `Admin_ID`) VALUES
(1, 'Act1', 'Detail Act 1', '0000-00-00', 'upload/images/image-not-found.png', 1),
(2, 'Act2', 'Detail Act 2', '0000-00-00', 'upload/images/image-not-found.png', 1),
(3, 'Act3', 'Detail Act 3', '0000-00-00', 'upload/images/image-not-found.png', 1),
(4, 'Act4', 'Detail Act 4', '0000-00-00', 'upload/images/image-not-found.png', 1),
(5, 'Act5', 'Detail Act 5', '0000-00-00', 'upload/images/image-not-found.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` bigint(20) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `last_login` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `last_login`) VALUES
(1, 'admin', '$2y$10$zl2ptI4zXNFOtuzDyouwderC0q/VWEoKIW7hAqUdcUfbmqmqRyDg2', '2018-10-27 16:22:25');

-- --------------------------------------------------------

--
-- Table structure for table `map`
--

CREATE TABLE `map` (
  `Map_ID` smallint(6) NOT NULL,
  `Latitude` double NOT NULL,
  `Longtitude` double NOT NULL,
  `Map_Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `map`
--

INSERT INTO `map` (`Map_ID`, `Latitude`, `Longtitude`, `Map_Date`) VALUES
(1, 42.8806001, -8.5468299, '0000-00-00'),
(2, 43.8806001, -8.6468299, '0000-00-00'),
(3, 44.8806001, -8.7468299, '0000-00-00'),
(4, 45.8806001, -8.8468299, '0000-00-00'),
(5, 46.8806001, -8.9468299, '0000-00-00'),
(6, 47.8806001, -8.4468299, '0000-00-00'),
(7, 48.8806001, -8.3468299, '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `plant`
--

CREATE TABLE `plant` (
  `Plant_ID` smallint(6) NOT NULL,
  `Plant_Name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Plant_Detail` text COLLATE utf8_unicode_ci NOT NULL,
  `Plant_Date` date NOT NULL,
  `Plant_Pic` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `Admin_ID` smallint(6) NOT NULL,
  `Map_ID` smallint(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `plant`
--

INSERT INTO `plant` (`Plant_ID`, `Plant_Name`, `Plant_Detail`, `Plant_Date`, `Plant_Pic`, `Admin_ID`, `Map_ID`) VALUES
(1, 'Plant1', 'Detail Plant 1', '0000-00-00', 'upload/images/image-not-found.png', 1, 1),
(2, 'Plant2', 'Detail Plant 2', '0000-00-00', 'upload/images/image-not-found.png', 1, 2),
(3, 'Plant3', 'Detail Plant 3', '0000-00-00', 'upload/images/image-not-found.png', 1, 3),
(4, 'Plant4', 'Detail Plant 4', '0000-00-00', 'upload/images/image-not-found.png', 1, 4),
(5, 'Plant5', 'Detail Plant 5', '0000-00-00', 'upload/images/image-not-found.png', 1, 5),
(6, 'Plant6', 'Detail Plant 6', '0000-00-00', 'upload/images/image-not-found.png', 1, 6),
(7, 'Plant7', 'Detail Plant 7', '0000-00-00', 'upload/images/image-not-found.png', 1, 7);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `Product_ID` smallint(6) NOT NULL,
  `Product_Name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Product_Detail` text COLLATE utf8_unicode_ci NOT NULL,
  `Product_Date` date NOT NULL,
  `Product_Price` int(11) NOT NULL,
  `Product_Pic` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `Admin_ID` smallint(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`Product_ID`, `Product_Name`, `Product_Detail`, `Product_Date`, `Product_Price`, `Product_Pic`, `Admin_ID`) VALUES
(1, 'Product1', 'Detail Product 1', '0000-00-00', 50, 'upload/images/image-not-found.png', 1),
(2, 'Product2', 'Detail Product 2', '0000-00-00', 50, 'upload/images/image-not-found.png', 1),
(3, 'Product3', 'Detail Product 3', '0000-00-00', 100, 'upload/images/image-not-found.png', 1),
(4, 'Product4', 'Detail Product 4', '0000-00-00', 20, 'upload/images/image-not-found.png', 1),
(5, 'Product5', 'Detail Product 5', '0000-00-00', 20, 'upload/images/image-not-found.png', 1),
(6, 'Product6', 'Detail Product 6', '0000-00-00', 30, 'upload/images/image-not-found.png', 1),
(7, 'Product7', 'Detail Product 7', '0000-00-00', 20, 'upload/images/image-not-found.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `sell`
--

CREATE TABLE `sell` (
  `Sell_ID` smallint(6) NOT NULL,
  `All_Product` int(11) NOT NULL,
  `Total_Price` int(11) NOT NULL,
  `Address` text COLLATE utf8_unicode_ci NOT NULL,
  `Sell_Date` date NOT NULL,
  `Status` enum('pending','paid','send','receive') COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sell`
--

INSERT INTO `sell` (`Sell_ID`, `All_Product`, `Total_Price`, `Address`, `Sell_Date`, `Status`) VALUES
(1, 2, 100, 'Address 1', '0000-00-00', 'pending'),
(2, 1, 20, 'Address 2', '0000-00-00', 'paid'),
(3, 3, 300, 'Address 3', '0000-00-00', 'send'),
(4, 1, 30, 'Address 4', '0000-00-00', 'receive'),
(5, 1, 100, 'Address 5', '0000-00-00', 'pending'),
(6, 2, 40, 'Address 6', '0000-00-00', 'receive'),
(7, 3, 90, 'Address 7', '0000-00-00', 'send');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activity`
--
ALTER TABLE `activity`
  ADD PRIMARY KEY (`Activity_ID`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `map`
--
ALTER TABLE `map`
  ADD PRIMARY KEY (`Map_ID`);

--
-- Indexes for table `plant`
--
ALTER TABLE `plant`
  ADD PRIMARY KEY (`Plant_ID`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`Product_ID`);

--
-- Indexes for table `sell`
--
ALTER TABLE `sell`
  ADD PRIMARY KEY (`Sell_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activity`
--
ALTER TABLE `activity`
  MODIFY `Activity_ID` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `map`
--
ALTER TABLE `map`
  MODIFY `Map_ID` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `plant`
--
ALTER TABLE `plant`
  MODIFY `Plant_ID` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `Product_ID` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `sell`
--
ALTER TABLE `sell`
  MODIFY `Sell_ID` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
