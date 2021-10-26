-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 25, 2021 at 01:05 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `transaction`
--

-- --------------------------------------------------------

--
-- Table structure for table `client_db`
--

CREATE TABLE `client_db` (
  `Client_ID` int(255) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `client_db`
--

INSERT INTO `client_db` (`Client_ID`, `Username`, `Password`) VALUES
(1, 'Ahmed', '123'),
(2, 'Rahim', '123123123');

-- --------------------------------------------------------

--
-- Table structure for table `detail_transaction`
--

CREATE TABLE `detail_transaction` (
  `transaction_id` int(11) NOT NULL,
  `client_name` varchar(255) NOT NULL,
  `transaction_amount` varchar(255) NOT NULL,
  `transaction_details` varchar(1000) NOT NULL,
  `transaction_status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `detail_transaction`
--

INSERT INTO `detail_transaction` (`transaction_id`, `client_name`, `transaction_amount`, `transaction_details`, `transaction_status`) VALUES
(1, 'Ahmed', '10', ' for rice', 'In Progress'),
(5, 'Ahmed', '14', ' Lend', 'In Progress'),
(7, 'Ahmed', '1234532', ' yes', 'In Progress'),
(8, 'Rahim', '50', ' No', 'In Progress');

-- --------------------------------------------------------

--
-- Table structure for table `owner_db`
--

CREATE TABLE `owner_db` (
  `Username` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `owner_db`
--

INSERT INTO `owner_db` (`Username`, `Password`) VALUES
('Kawsar', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `client_db`
--
ALTER TABLE `client_db`
  ADD PRIMARY KEY (`Client_ID`);

--
-- Indexes for table `detail_transaction`
--
ALTER TABLE `detail_transaction`
  ADD PRIMARY KEY (`transaction_id`);

--
-- Indexes for table `owner_db`
--
ALTER TABLE `owner_db`
  ADD PRIMARY KEY (`Username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `client_db`
--
ALTER TABLE `client_db`
  MODIFY `Client_ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `detail_transaction`
--
ALTER TABLE `detail_transaction`
  MODIFY `transaction_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
