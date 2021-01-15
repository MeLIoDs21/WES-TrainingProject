-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Värd: 127.0.0.1
-- Tid vid skapande: 29 sep 2020 kl 14:37
-- Serverversion: 10.4.6-MariaDB
-- PHP-version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databas: `webbshop`
--

-- --------------------------------------------------------

--
-- Tabellstruktur `användare`
--

CREATE TABLE `användare` (
  `Username` varchar(20) COLLATE utf16_swedish_ci NOT NULL,
  `email` varchar(150) COLLATE utf16_swedish_ci NOT NULL,
  `password` varchar(255) COLLATE utf16_swedish_ci NOT NULL,
  `status` tinyint(2) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_swedish_ci;

--
-- Dumpning av Data i tabell `användare`
--

INSERT INTO `användare` (`Username`, `email`, `password`, `status`) VALUES
('Kalle', 'kalle@vaxjo.se', 'sal123', 0),
('SuperSexy', 'Super@sexy.com', 'Sexyguy', 1),
('Wtf', 'lul@lol.hub', 'Getrekt', 1);

-- --------------------------------------------------------

--
-- Tabellstruktur `customers`
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
-- Dumpning av Data i tabell `customers`
--

INSERT INTO `customers` (`customerID`, `username`, `firstname`, `lastname`, `adress`, `postnr`, `postadress`, `phone`) VALUES
(1, 'Kalle', 'Kalle', 'lulson', 'Dreamland 69', 666, 'Universe', '0000000001'),
(7, 'SuperSexy', 'Sexy', 'Thot', 'Holyhot', 669, 'Kungsmad', '047041790'),
(9, 'Wtf', 'Thot', 'Hunter', 'Valhala', 1, 'Heaven', '6666666666');

-- --------------------------------------------------------

--
-- Tabellstruktur `orders`
--

CREATE TABLE `orders` (
  `orderID` int(10) NOT NULL,
  `produktID` int(10) NOT NULL,
  `amount` int(5) NOT NULL,
  `customerID` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_swedish_ci;

--
-- Dumpning av Data i tabell `orders`
--

INSERT INTO `orders` (`orderID`, `produktID`, `amount`, `customerID`) VALUES
(1, 1, 4, 1),
(2, 2, 10, 1),
(3, 4, 99999, 9);

-- --------------------------------------------------------

--
-- Tabellstruktur `produkt`
--

CREATE TABLE `produkt` (
  `produktID` int(10) NOT NULL,
  `username` varchar(20) COLLATE utf16_swedish_ci NOT NULL,
  `description` varchar(200) COLLATE utf16_swedish_ci NOT NULL,
  `prise` int(50) NOT NULL,
  `picture` varchar(200) COLLATE utf16_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_swedish_ci;

--
-- Dumpning av Data i tabell `produkt`
--

INSERT INTO `produkt` (`produktID`, `username`, `description`, `prise`, `picture`) VALUES
(1, 'Äpple', 'Fin', 11, '/Img/apple.jpg'),
(2, 'Sexymovie', 'Very Sexy', 999, '/Img/Hot.jpg'),
(4, 'Thotslayer', 'Slays any thot on sight', 99999999, '/Img/Thotslayer.jpg');

--
-- Index för dumpade tabeller
--

--
-- Index för tabell `användare`
--
ALTER TABLE `användare`
  ADD PRIMARY KEY (`Username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `Username` (`Username`),
  ADD KEY `password` (`password`);

--
-- Index för tabell `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customerID`),
  ADD KEY `username` (`username`);

--
-- Index för tabell `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`orderID`),
  ADD KEY `produktID` (`produktID`),
  ADD KEY `customerID` (`customerID`);

--
-- Index för tabell `produkt`
--
ALTER TABLE `produkt`
  ADD PRIMARY KEY (`produktID`);

--
-- AUTO_INCREMENT för dumpade tabeller
--

--
-- AUTO_INCREMENT för tabell `customers`
--
ALTER TABLE `customers`
  MODIFY `customerID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT för tabell `orders`
--
ALTER TABLE `orders`
  MODIFY `orderID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT för tabell `produkt`
--
ALTER TABLE `produkt`
  MODIFY `produktID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restriktioner för dumpade tabeller
--

--
-- Restriktioner för tabell `customers`
--
ALTER TABLE `customers`
  ADD CONSTRAINT `customers_ibfk_1` FOREIGN KEY (`username`) REFERENCES `användare` (`Username`);

--
-- Restriktioner för tabell `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`produktID`) REFERENCES `produkt` (`produktID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`customerID`) REFERENCES `customers` (`customerID`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
