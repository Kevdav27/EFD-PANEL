-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 11, 2024 at 12:52 PM
-- Server version: 8.0.27
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `efddb`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

DROP TABLE IF EXISTS `customer`;
CREATE TABLE IF NOT EXISTS `customer` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `CUSTOMER` varchar(500) DEFAULT NULL,
  `NUMBER` varchar(255) DEFAULT NULL,
  `EMAIL` varchar(255) DEFAULT NULL,
  `MACHINENo` varchar(255) DEFAULT NULL,
  `LOCATION` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `efdassets`
--

DROP TABLE IF EXISTS `efdassets`;
CREATE TABLE IF NOT EXISTS `efdassets` (
  `id` int NOT NULL AUTO_INCREMENT,
  `s_n` varchar(500) DEFAULT NULL,
  `type` varchar(500) DEFAULT NULL,
  `customer` varchar(500) DEFAULT NULL,
  `Fault` varchar(200) DEFAULT NULL,
  `description` text,
  `status` varchar(255) DEFAULT NULL,
  `Date` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=40 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `efdassets`
--

INSERT INTO `efdassets` (`id`, `s_n`, `type`, `customer`, `Fault`, `description`, `status`, `Date`) VALUES
(14, '02MW34969', 'DP 25', 'A&L', 'Error 7', 'Has error 7', 'Pending', '2023-12-14 21:59:43'),
(39, '02MW330466', 'FP 700', 'GAME', 'UNSENT Zs', NULL, 'PENDING', '2024-06-11 14:11:00'),
(17, '02MW45678', 'FP 700', ' PEP', 'Error 7', NULL, 'Done', '2023-12-14 20:51:15'),
(18, '02MW77456', 'DP 05', 'MTL', 'Error 7', NULL, 'Done and delivered ', '2023-12-14 20:51:15'),
(19, '02MW45678', 'FP 700', ' PEP', 'Error 7', NULL, 'Done', '2023-12-14 20:51:15'),
(20, '02MW77456', 'DP 05', 'MTL', 'Error 7', NULL, 'Done and delivered ', '2023-12-14 20:51:15'),
(21, '02MW45678', 'FP 700', ' PEP', 'Error 7', NULL, 'Done', '2023-12-14 20:51:15'),
(22, '02MW77456', 'DP 05', 'MTL', 'Error 7', NULL, 'Done and delivered ', '2023-12-14 20:51:15'),
(23, '02MW45678', 'FP 700', ' PEP', 'Error 7', NULL, 'Done', '2023-12-14 20:51:15'),
(24, '02MW77456', 'DP 05', 'MTL', 'Error 7', NULL, 'Done and delivered ', '2023-12-14 20:51:15'),
(25, '02MW45678', 'FP 700', ' PEP', 'Error 7', NULL, 'Done', '2023-12-14 20:51:15'),
(26, '02MW77456', 'DP 05', 'MTL', 'Error 7', NULL, 'Done and delivered ', '2023-12-14 20:51:15'),
(27, '02MW45678', 'FP 700', ' PEP', 'Error 7', NULL, 'Done', '2023-12-14 20:51:15'),
(28, '02MW77456', 'DP 05', 'MTL', 'Error 7', NULL, 'Done and delivered ', '2023-12-14 20:51:15'),
(29, '02MW45678', 'FP 700', ' PEP', 'Error 7', NULL, 'Done', '2023-12-14 20:51:15'),
(30, '02MW77456', 'DP 05', 'MTL', 'Error 7', NULL, 'Done and delivered ', '2023-12-14 20:51:15'),
(31, '02MW45678', 'FP 700', ' PEP', 'Error 7', NULL, 'Done', '2023-12-14 20:51:15'),
(32, '02MW77456', 'DP 05', 'MTL', 'Error 7', NULL, 'Done and delivered ', '2023-12-14 20:51:15'),
(36, '02MW40012', 'FMP350', 'RAB ', 'UNSENT Zs', NULL, 'PENDING', '2024-06-09 00:00:00'),
(37, '02MW40023', 'FMP350', 'VITFOAM', 'UNSENT Zs', NULL, 'PENDING', '2024-06-09 00:00:00'),
(38, '02MW40020', 'FMP350', 'VITFOAM', 'UNSENT Z', 'failing to send zs', 'PENDING', '2024-06-09 01:00:46');

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

DROP TABLE IF EXISTS `report`;
CREATE TABLE IF NOT EXISTS `report` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(500) DEFAULT NULL,
  `email` varchar(500) DEFAULT NULL,
  `password` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `report`
--

INSERT INTO `report` (`id`, `username`, `email`, `password`) VALUES
(1, 'admin', 'admin@gmail.com', '12345');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
