-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 27, 2023 at 10:51 AM
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
-- Database: `bloom`
--

-- --------------------------------------------------------

--
-- Table structure for table `campaign`
--

CREATE TABLE `campaign` (
  `Campaign_ID` int(11) NOT NULL,
  `User_ID` int(11) NOT NULL,
  `Chosen_Campaign` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `campaign_payments`
--

CREATE TABLE `campaign_payments` (
  `Payment_ID` int(11) NOT NULL,
  `Campaign_ID` int(11) NOT NULL,
  `Bill_Name` varchar(255) NOT NULL,
  `Bill_Email` varchar(255) NOT NULL,
  `Bill_Phone` varchar(255) NOT NULL,
  `Bill_Country` varchar(255) NOT NULL,
  `Bill_City` varchar(255) NOT NULL,
  `Bill_Address` varchar(255) NOT NULL,
  `PaymentMethod` varchar(255) NOT NULL,
  `Postal` varchar(255) NOT NULL,
  `CardType` varchar(255) NOT NULL,
  `CardNumber` varchar(255) NOT NULL,
  `CV` varchar(255) NOT NULL,
  `Date_Expiry` date NOT NULL,
  `Date_Payment` datetime NOT NULL DEFAULT current_timestamp(),
  `Amount` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `Contact_ID` int(11) NOT NULL,
  `Contact_Name` varchar(255) NOT NULL,
  `Contact_Email` varchar(255) NOT NULL,
  `Contact_Phone` varchar(255) NOT NULL,
  `Contact_Company` varchar(255) NOT NULL,
  `Status` varchar(255) NOT NULL,
  `Date_Created` datetime NOT NULL DEFAULT current_timestamp(),
  `Date_LastActive` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `deals`
--

CREATE TABLE `deals` (
  `Deal_ID` int(11) NOT NULL,
  `Payment_ID` int(11) NOT NULL,
  `Date_Issued` datetime NOT NULL,
  `Date_Closing` datetime NOT NULL,
  `Priority` varchar(255) NOT NULL,
  `Deal_Stage` varchar(255) NOT NULL,
  `Deal_Type` varchar(255) NOT NULL,
  `Contact` varchar(255) NOT NULL,
  `Company` varchar(255) NOT NULL,
  `Amount` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `User_ID` int(11) NOT NULL,
  `Fname` varchar(255) NOT NULL,
  `Lname` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `CompName` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Date_Created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `campaign`
--
ALTER TABLE `campaign`
  ADD PRIMARY KEY (`Campaign_ID`),
  ADD KEY `ForeignKey_Campaign` (`User_ID`);

--
-- Indexes for table `campaign_payments`
--
ALTER TABLE `campaign_payments`
  ADD PRIMARY KEY (`Payment_ID`),
  ADD KEY `ForeignKey_Payments` (`Campaign_ID`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`Contact_ID`);

--
-- Indexes for table `deals`
--
ALTER TABLE `deals`
  ADD PRIMARY KEY (`Deal_ID`),
  ADD KEY `ForeignKey_Deals` (`Payment_ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`User_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `campaign`
--
ALTER TABLE `campaign`
  MODIFY `Campaign_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `campaign_payments`
--
ALTER TABLE `campaign_payments`
  MODIFY `Payment_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `Contact_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `deals`
--
ALTER TABLE `deals`
  MODIFY `Deal_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `User_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `campaign`
--
ALTER TABLE `campaign`
  ADD CONSTRAINT `ForeignKey_Campaign` FOREIGN KEY (`User_ID`) REFERENCES `users` (`User_Id`);

--
-- Constraints for table `campaign_payments`
--
ALTER TABLE `campaign_payments`
  ADD CONSTRAINT `ForeignKey_Payments` FOREIGN KEY (`Campaign_ID`) REFERENCES `campaign` (`Campaign_ID`);

--
-- Constraints for table `deals`
--
ALTER TABLE `deals`
  ADD CONSTRAINT `ForeignKey_Deals` FOREIGN KEY (`Payment_ID`) REFERENCES `campaign_payments` (`Payment_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
