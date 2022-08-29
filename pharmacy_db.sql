-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 11, 2021 at 09:23 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pharmacy_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `adm_accounts`
--

CREATE TABLE `adm_accounts` (
  `id` int(11) NOT NULL,
  `name` varchar(64) DEFAULT NULL,
  `email` varchar(64) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adm_accounts`
--

INSERT INTO `adm_accounts` (`id`, `name`, `email`, `password`) VALUES
(1, 'testerea', 'test@email.com', '$2y$10$KmgMSmRJgigBHHJ0OMC0de7rNaJY3VUG07eQds056/iEiHUVsJXA2');

-- --------------------------------------------------------

--
-- Table structure for table `p_items`
--

CREATE TABLE `p_items` (
  `id` int(11) NOT NULL,
  `lot_no` varchar(32) DEFAULT NULL,
  `brand` varchar(64) DEFAULT NULL,
  `name` varchar(64) DEFAULT NULL,
  `name_generic` varchar(64) DEFAULT NULL,
  `unit_price` varchar(16) DEFAULT NULL,
  `unit_qty` varchar(32) DEFAULT NULL,
  `qty` varchar(16) DEFAULT NULL,
  `date_purchase` varchar(16) DEFAULT NULL,
  `date_expire` varchar(16) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `p_items`
--

INSERT INTO `p_items` (`id`, `lot_no`, `brand`, `name`, `name_generic`, `unit_price`, `unit_qty`, `qty`, `date_purchase`, `date_expire`) VALUES
(1, 'DG3701', 'Centrum', 'Centrum Silver', 'Multivitamins+Minerals', '2000', '325 Tablets', '50', '2021/04/12', '2021/08/01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adm_accounts`
--
ALTER TABLE `adm_accounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `p_items`
--
ALTER TABLE `p_items`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adm_accounts`
--
ALTER TABLE `adm_accounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `p_items`
--
ALTER TABLE `p_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
