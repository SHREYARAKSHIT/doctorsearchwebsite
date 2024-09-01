-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 12, 2024 at 06:00 PM
-- Server version: 10.5.20-MariaDB
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id20571977_doctors`
--

-- --------------------------------------------------------

--
-- Table structure for table `Doctors_table`
--

CREATE TABLE `Doctors_table` (
  `Id` int(11) NOT NULL,
  `DoctorName` text NOT NULL,
  `DoctorInformation` text NOT NULL,
  `DoctorArea` text NOT NULL,
  `DoctorImage` text NOT NULL,
  `DoctorCategory` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `Doctors_table`
--

INSERT INTO `Doctors_table` (`Id`, `DoctorName`, `DoctorInformation`, `DoctorArea`, `DoctorImage`, `DoctorCategory`) VALUES
(1, 'Name', 'Info', 'Area', '', 'category');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
