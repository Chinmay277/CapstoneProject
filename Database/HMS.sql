-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 20, 2021 at 07:00 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `HMS`
--

-- --------------------------------------------------------

--
-- Table structure for table `Owner`
--

CREATE TABLE `Owner` (
  `OID` int(11) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Email` varchar(40) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Phone` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Owner`
--

INSERT INTO `Owner` (`OID`, `Name`, `Email`, `Password`, `Phone`) VALUES
(1, 'Chinmay', 'chinmay@gmail.com', 'chinmay', '1234567890'),
(2, 'Sushant', 'sushant@gmail.com', 'sushant', '8208262920'),
(3, 'Naruto', 'naruto@manga.com', 'naruto', '8888888888'),
(4, 'Sasuke', 'sasuke@manga.com', 'sasuke', '9999999999'),
(5, 'Light', 'light@manga.com', 'light', '7777777777'),
(6, 'Light', 'light@manga.com', 'light', '7777777777'),
(7, 'karl', 'karl@manga.com', 'karl', '7777777777'),
(8, 'karl', 'karl@gmail.com', 'karl', '920296499'),
(9, 'Chris', 'boss@gmail.com', '96321456870', '9457812360'),
(10, 'lio', 'lio@gmail.com', '123', '9874563210');

-- --------------------------------------------------------

--
-- Table structure for table `Property`
--

CREATE TABLE `Property` (
  `PID` int(11) NOT NULL,
  `OID` int(11) NOT NULL,
  `TID` int(11) DEFAULT NULL,
  `Type` varchar(20) DEFAULT NULL,
  `Category` varchar(20) DEFAULT NULL,
  `BHK` varchar(20) NOT NULL,
  `Floor` int(11) NOT NULL,
  `TotFloor` int(11) NOT NULL,
  `Age` varchar(20) NOT NULL,
  `Facing` varchar(20) NOT NULL,
  `Size` varchar(20) DEFAULT NULL,
  `City` varchar(20) DEFAULT NULL,
  `Locality` varchar(40) DEFAULT NULL,
  `Area` varchar(40) DEFAULT NULL,
  `Rent` int(11) DEFAULT NULL,
  `Deposite` int(11) DEFAULT NULL,
  `Nagotiable` tinyint(1) DEFAULT NULL,
  `Maitainance` varchar(20) DEFAULT NULL,
  `AvailableDate` date DEFAULT NULL,
  `TenantType` varchar(20) DEFAULT NULL,
  `Furnishing` varchar(20) DEFAULT NULL,
  `Parking` varchar(20) DEFAULT NULL,
  `Descripion` varchar(200) DEFAULT NULL,
  `Photos` varchar(50) DEFAULT NULL,
  `Bathrooms` int(11) DEFAULT NULL,
  `Balcony` int(11) DEFAULT NULL,
  `Water` varchar(20) DEFAULT NULL,
  `Gym` varchar(3) DEFAULT NULL,
  `Non-Veg` varchar(3) DEFAULT NULL,
  `Security` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Property`
--

INSERT INTO `Property` (`PID`, `OID`, `TID`, `Type`, `Category`, `BHK`, `Floor`, `TotFloor`, `Age`, `Facing`, `Size`, `City`, `Locality`, `Area`, `Rent`, `Deposite`, `Nagotiable`, `Maitainance`, `AvailableDate`, `TenantType`, `Furnishing`, `Parking`, `Descripion`, `Photos`, `Bathrooms`, `Balcony`, `Water`, `Gym`, `Non-Veg`, `Security`) VALUES
(1, 1, 0, 'Apartment', '', '1', 2, 5, 'Less than year', 'east', '2000', 'Mumbai', 'wadala', 'bandra', 20000, 50000, 0, 'Yes', '2021-01-21', 'Family', 'No', 'No', 'Hehe', 'naa', 1, 1, 'yes', 'no', 'yes', 'no'),
(2, 5, 34, 'Apartment', 'Residential', '1', 5, 6, '1', 'East', '3000', 'Mumbai', 'Dadar', 'GM Road', 50000, 100000, 0, 'Yes', '2021-01-26', 'Family', 'No', 'Yes', 'Cool', 'null', 2, 1, 'Yes', 'No', 'No', 'No'),
(3, 10, NULL, 'Apartment', NULL, '1', 4, 5, 'west', '4', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, 10, NULL, 'Apartment', NULL, '1', 4, 5, 'west', '4', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5, 10, NULL, 'Apartment', NULL, '1', 4, 5, 'west', '4000', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(6, 10, NULL, 'Apartment', NULL, '1', 4, 5, '2', 'west', '4000', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(7, 10, NULL, 'Apartment', NULL, '1', 4, 5, '2', 'west', '4000', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(8, 10, NULL, 'Apartment', NULL, '1', 4, 5, '2', 'west', '4000', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9, 10, NULL, 'Apartment', NULL, '1', 4, 5, '2', 'west', '4000', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10, 10, NULL, 'Apartment', NULL, '1', 4, 5, '2', 'west', '4000', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(11, 10, NULL, 'Apartment', NULL, '1', 4, 5, '2', 'west', '4000', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(12, 10, NULL, 'Apartment', NULL, '1', 4, 5, '2', 'west', '4000', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13, 10, NULL, 'Apartment', NULL, '1', 4, 5, '2', 'west', '4000', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(14, 10, NULL, 'Apartment', NULL, '1', 4, 5, '2', 'west', '4000', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(15, 10, NULL, 'Apartment', NULL, '1', 4, 5, '2', 'west', '4000', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(16, 10, NULL, 'Apartment', NULL, '1', 4, 5, '2', 'west', '4000', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(17, 10, NULL, 'Apartment', NULL, '1', 4, 5, '2', 'west', '4000', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(18, 10, NULL, 'Apartment', NULL, '1', 4, 5, '2', 'west', '4000', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `Tenant`
--

CREATE TABLE `Tenant` (
  `TID` int(11) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Phone` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Tenant`
--

INSERT INTO `Tenant` (`TID`, `Name`, `Email`, `Password`, `Phone`) VALUES
(34, 'kakashi', 'kakashi@gmail.com', '12345687', 942520112);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Owner`
--
ALTER TABLE `Owner`
  ADD PRIMARY KEY (`OID`);

--
-- Indexes for table `Property`
--
ALTER TABLE `Property`
  ADD PRIMARY KEY (`PID`),
  ADD KEY `OID` (`OID`),
  ADD KEY `TID` (`TID`);

--
-- Indexes for table `Tenant`
--
ALTER TABLE `Tenant`
  ADD PRIMARY KEY (`TID`),
  ADD UNIQUE KEY `Phone` (`Phone`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Owner`
--
ALTER TABLE `Owner`
  MODIFY `OID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `Property`
--
ALTER TABLE `Property`
  MODIFY `PID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `Tenant`
--
ALTER TABLE `Tenant`
  MODIFY `TID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Property`
--
ALTER TABLE `Property`
  ADD CONSTRAINT `Property_ibfk_1` FOREIGN KEY (`OID`) REFERENCES `Owner` (`OID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
