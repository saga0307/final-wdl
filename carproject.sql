-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2020 at 01:21 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `carproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `carstore`
--

CREATE TABLE `carstore` (
  `model_no` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `company` varchar(20) NOT NULL,
  `body_style` varchar(20) NOT NULL,
  `cost` int(15) NOT NULL,
  `description` varchar(255) NOT NULL,
  `pics` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`pics`)),
  `advantages` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`advantages`)),
  `quotes` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`quotes`)),
  `co2_emi` varchar(30) NOT NULL,
  `fuel_cons` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `carstore`
--

INSERT INTO `carstore` (`model_no`, `name`, `company`, `body_style`, `cost`, `description`, `pics`, `advantages`, `quotes`, `co2_emi`, `fuel_cons`) VALUES
('bmw m8', 'bmw m8 competition c', 'BMW', 'sedan', 4000000, 'The easily accessible performance of the V8, a smooth gearchange and a ride quality that feels best matched to larger A-roads and motorways also contribute to the long-legged GT feel, and while the cabin design itself is perhaps a little uninspired, the m', '[\"bmwm8.jpg\",\"bmwm82.jpg\",\"bmwm8int.jpg\",\"bmwm8whe.jpg\",\"bmwm8last.jpg\"]', '[\"big advantage\",\"big advantage\",\"big advantage\",\"big advantage\"]', '[\"helloo\",\"helloo\",\"helloo\",\"helloo\"]', '178–119 g/km (combined)', '7.8–4.6 l/100 km (combined)');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `phoneno` bigint(10) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carstore`
--
ALTER TABLE `carstore`
  ADD PRIMARY KEY (`model_no`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
