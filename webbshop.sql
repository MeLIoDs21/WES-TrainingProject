-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 15, 2021 at 10:32 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webbshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customerID` int(10) NOT NULL,
  `username` varchar(20) COLLATE utf16_swedish_ci NOT NULL,
  `firstname` varchar(50) COLLATE utf16_swedish_ci NOT NULL,
  `lastname` varchar(100) COLLATE utf16_swedish_ci NOT NULL,
  `adress` varchar(50) COLLATE utf16_swedish_ci NOT NULL,
  `postnr` int(10) NOT NULL,
  `postadress` varchar(50) COLLATE utf16_swedish_ci NOT NULL,
  `phone` varchar(10) COLLATE utf16_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_swedish_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customerID`, `username`, `firstname`, `lastname`, `adress`, `postnr`, `postadress`, `phone`) VALUES
(1, 'Kalle', 'Kalle', 'lulson', 'Dreamland 69', 666, 'Universe', '0000000001'),
(7, 'SuperSexy', 'Sexy', 'Thot', 'Holyhot', 669, 'Kungsmad', '047041790'),
(9, 'Wtf', 'Thot', 'Hunter', 'Valhala', 1, 'Heaven', '6666666666');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `Username` varchar(20) COLLATE utf16_swedish_ci NOT NULL,
  `email` varchar(150) COLLATE utf16_swedish_ci NOT NULL,
  `password` varchar(255) COLLATE utf16_swedish_ci NOT NULL,
  `status` tinyint(2) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_swedish_ci;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`Username`, `email`, `password`, `status`) VALUES
('afda', 'fwe', 'fdsa', 0),
('ger', 'reg', 'rthy', 0),
('Kalle', 'kalle@vaxjo.se', 'sal123', 0),
('SuperSexy', 'Super@sexy.com', 'Sexyguy', 1),
('Wtf', 'lul@lol.hub', 'Getrekt', 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `orderID` int(10) NOT NULL,
  `produktID` int(10) NOT NULL,
  `amount` int(5) NOT NULL,
  `customerID` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_swedish_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`orderID`, `produktID`, `amount`, `customerID`) VALUES
(1, 1, 4, 1),
(2, 2, 10, 1),
(3, 4, 99999, 9);

-- --------------------------------------------------------

--
-- Table structure for table `produkt`
--

CREATE TABLE `produkt` (
  `produktID` int(10) NOT NULL,
  `username` varchar(20) COLLATE utf16_swedish_ci NOT NULL,
  `description` varchar(200) COLLATE utf16_swedish_ci NOT NULL,
  `prise` int(50) NOT NULL,
  `picture` varchar(200) COLLATE utf16_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_swedish_ci;

--
-- Dumping data for table `produkt`
--

INSERT INTO `produkt` (`produktID`, `username`, `description`, `prise`, `picture`) VALUES
(1, 'Apple', 'An apple', 11, 'Img/apple.jpg'),
(2, 'Sexymovie', 'Wierd AF', 999, 'Img/SexyMovie.jpg'),
(4, 'Thotslayer', 'Slays any thot on sight', 99999999, 'Img/ThotSlayer.jpg'),
(5, 'Banana', 'Yellow', 30, 'Img/banana.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customerID`),
  ADD KEY `username` (`username`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`Username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `Username` (`Username`),
  ADD KEY `password` (`password`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`orderID`),
  ADD KEY `produktID` (`produktID`),
  ADD KEY `customerID` (`customerID`);

--
-- Indexes for table `produkt`
--
ALTER TABLE `produkt`
  ADD PRIMARY KEY (`produktID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customerID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `orderID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `produkt`
--
ALTER TABLE `produkt`
  MODIFY `produktID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `customers`
--
ALTER TABLE `customers`
  ADD CONSTRAINT `customers_ibfk_1` FOREIGN KEY (`username`) REFERENCES `members` (`Username`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`produktID`) REFERENCES `produkt` (`produktID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`customerID`) REFERENCES `customers` (`customerID`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
