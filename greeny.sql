-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 16, 2021 at 08:08 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `greeny`
--

-- --------------------------------------------------------

--
-- Table structure for table `user_donation`
--

CREATE TABLE `user_donation` (
  `no_transaksi` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `donate_amount` int(11) NOT NULL,
  `pay_method` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_donation`
--

INSERT INTO `user_donation` (`no_transaksi`, `email`, `donate_amount`, `pay_method`) VALUES
(1, 'novalsofyan1@gmail.com', 70000, 'Bank Transfers'),
(2, 'novalsofyan2@gmail.com', 50000, 'Credit Card'),
(3, 'novalsofyan2@gmail.com', 10000, 'Bank Transfers'),
(4, 'novalsofyan2@gmail.com', 5000, 'Bank Transfers'),
(5, 'novalsofyan2@gmail.com', 10000, 'Bank Transfers'),
(6, 'novalsofyan2@gmail.com', 30000, 'Bank Transfers'),
(7, 'novalsofyan2@gmail.com', 100000, 'Credit Card'),
(9, 'novalsofyan2@gmail.com', 0, 'Bank Transfers'),
(10, 'novalsofyan2@gmail.com', 22, 'Bank Transfers');

-- --------------------------------------------------------

--
-- Table structure for table `user_table`
--

CREATE TABLE `user_table` (
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_table`
--

INSERT INTO `user_table` (`email`, `password`) VALUES
('novalsofyan1@gmail.com', '$2y$10$mQ6SsnhDMjqbLdn0zT.BdOERnjdB6ilRSQYL2mT0IuuGxPfpyFane'),
('novalsofyan2@gmail.com', '$2y$10$HPW5Rm.xbaEf5wRBedw6T.px8D4NU1MhWJpjPhRuFKUUrlabAK9py');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_donation`
--
ALTER TABLE `user_donation`
  ADD PRIMARY KEY (`no_transaksi`),
  ADD KEY `email` (`email`);

--
-- Indexes for table `user_table`
--
ALTER TABLE `user_table`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user_donation`
--
ALTER TABLE `user_donation`
  MODIFY `no_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `user_donation`
--
ALTER TABLE `user_donation`
  ADD CONSTRAINT `user_donation_ibfk_1` FOREIGN KEY (`email`) REFERENCES `user_table` (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
