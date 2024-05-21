-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 21, 2024 at 03:54 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bathluxe`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `userId` int(5) NOT NULL,
  `productCode` varchar(8) NOT NULL,
  `quantity` int(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`userId`, `productCode`, `quantity`) VALUES
(1, 'AAC002', NULL),
(1, 'BBC003', NULL),
(1, 'BBC004', NULL),
(1, 'BBC008', NULL),
(1, 'TTI005', NULL),
(1, 'TTI007', NULL),
(2, 'TTI001', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `productCode` varchar(8) NOT NULL,
  `productType` varchar(255) NOT NULL,
  `productPrice` int(10) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `productName` varchar(255) DEFAULT NULL,
  `imageName` varchar(255) DEFAULT NULL,
  `imagePath` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`productCode`, `productType`, `productPrice`, `description`, `productName`, `imageName`, `imagePath`) VALUES
('AAC001', 'AAC', 800, 'color-white', 'BASIN MIXER1', 'bw1.jpg', 'images/bw1.jpg'),
('AAC002', 'AAC', 1100, 'color-white', 'BASIN MIXER2', 'bw2.jpg', 'images/bw2.jpg'),
('AAC003', 'AAC', 900, 'color-white', 'BASIN MIXER3', 'bw3.jpg', 'images/bw3.jpg'),
('AAC004', 'AAC', 600, 'color-white', 'BASIN MIXER4', 'bw4.jpg', 'images/bw4.jpg'),
('AAC005', 'AAC', 1200, 'color-white', 'BASIN MIXER5', 'bw5.jpg', 'images/bw5.jpg'),
('AAC006', 'AAC', 1100, 'color-white', 'BASIN MIXER6', 'bw6.jpg', 'images/bw6.jpg'),
('AAC007', 'AAC', 1000, 'color-white', 'BASIN MIXER7', 'bw7.jpg', 'images/bw7.jpg'),
('AAC008', 'AAC', 1700, 'color-white', 'BASIN MIXER8', 'bw8.jpg', 'images/bw8.jpg'),
('BBC001', 'BBC', 10000, 'color-white', 'GIULY BY SIMOLY1', '1.jpg', 'images/1.jpg'),
('BBC002', 'BBC', 8000, 'color-white', 'GIULY BY SIMOLY2', '2.jpg', 'images/2.jpg'),
('BBC003', 'BBC', 9000, 'color-white', 'GIULY BY SIMOLY3', '3.jpg', 'images/3.jpg'),
('BBC004', 'BBC', 11000, 'color-white', 'GIULY BY SIMOLY4', '4.jpg', 'images/4.jpg'),
('BBC005', 'BBC', 12000, 'color-white', 'GIULY BY SIMOLY5', '5.jpg', 'images/5.jpg'),
('BBC006', 'BBC', 5000, 'color-white', 'GIULY BY SIMOLY6', '6.jpg', 'images/6.jpg'),
('BBC007', 'BBC', 8000, 'color-white', 'GIULY BY SIMOLY7', '7.jpg', 'images/7.jpg'),
('BBC008', 'BBC', 11000, 'color-white', 'GIULY BY SIMOLY8', '8.jpg', 'images/8.jpg'),
('TTI001', 'TTI', 1000, 'color-white', 'POLARIS BIANCO1', 'tile2.jpeg', 'images/tile2.jpeg'),
('TTI002', 'TTI', 500, 'color-white', 'POLARIS BIANCO2', 'tile3.png', 'images/tile3.png'),
('TTI003', 'TTI', 800, 'color-white', 'POLARIS BIANCO3', 'tile4.png', 'images/tile4.png'),
('TTI004', 'TTI', 450, 'color-white', 'POLARIS BIANCO4', 'tile5.png', 'images/tile5.png'),
('TTI005', 'TTI', 780, 'color-white', 'POLARIS BIANCO5', 'tile6.png', 'images/tile6.png'),
('TTI006', 'TTI', 1000, 'color-white', 'POLARIS BIANCO6', 'tile7.png', 'images/tile7.png'),
('TTI007', 'TTI', 1790, 'color-white', 'POLARIS BIANCO7', 'tile8.jpeg', 'images/tile8.jpeg'),
('TTI008', 'TTI', 1100, 'color-white', 'POLARIS BIANCO8', 'tile9.png', 'images/tile9.png');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userId` int(5) NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `telephoneNo` varchar(10) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userId`, `firstName`, `lastName`, `email`, `address`, `telephoneNo`, `username`, `password`) VALUES
(1, 'lahiru', 'imesh', 'lahiruimesh111@gmail.com', '15/c/2 sirimalwaththa, bandarawela', '0752948754', 'Admin@123', '$2y$10$.uda2m.e9Fh9MQ4chTn4wO/w3EKUbZkLDVZW1.AD4bNeM2cxmHcqS'),
(2, 'Imesh', 'Lahiru ', 'lahiruimesh999@gmail.com', 'lahiruimesh', '0752948754', 'imeshbl.22', '$2y$10$dsUar1bGwPSyoErmWir2sOE3nZ6G1/Q3LwzkcpRC1I2xuMoZ3Ganm'),
(3, 'Thilina', 'Jayasingha', 'thilinajayasingha2003@gmail.com', 'hagdfjhasdbv', '0761521775', 'itistj', '$2y$10$6wkspuOEQYcpZuK6AfvcWOaMaEgbEAVKVIFVOJbEWH95vJTwS/NNi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`userId`,`productCode`),
  ADD KEY `productCode` (`productCode`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`productCode`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userId` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `user` (`userId`),
  ADD CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`productCode`) REFERENCES `product` (`productCode`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
