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
(1, 'testerea', 'test@email.com', '$2y$10$KmgMSmRJgigBHHJ0OMC0de7rNaJY3VUG07eQds056/iEiHUVsJXA2'),
(2, 'testing man', 'testinger@email.com', '7'),
(4, 'tester', 'wawaweewa@email.com', '$2y$10$79fEWZxFba4s33U6oTS1OupCZOTy5EG1UQbcv81mhg4rKNKVn4.kq'),
(7, 'tester', NULL, NULL),
(9, 'Johnny Joestar', 'johnny@email.com', '$2y$10$hoVc47TE.JIcvih1ka.oHOJATKNSnkltqy7V3hM3VFkvSxpesOQTq'),
(10, 'olol', 'ol@em.com', '$2y$10$B7O/lrxDVzFSWIYKiIcxTeU1/lC4lZ9aPz6aCosCKZLpE.eKJUHOO'),
(11, 'ets', 'asd@eaw.n', '$2y$10$UkCxNFS5GYxpEimdwwPmY.9cgNVYqL6DYFMY2rmpLolapRHADxYJq'),
(18, 'ets', 'asd@eaw.n', '$2y$10$bVfYq86XocX4HJ4MQhMIi.JMqmPjaDKbvo3vd2PYRjDNWZqvAOwv6'),
(20, 'awfgh', 'ahnms@aea.ahjrs', '$2y$10$d97dCO3LhQSCdTnSAAwKweGS7ayaX1E/0o/nIOuUCSZ0Ft8R7fpLC'),
(21, 'test', 'etas@ga', '$2y$10$luIjxAPo8CrJEM7aSrFcOerSAj3Wag6K7OOzz8jhgCHt89xQ.aF72'),
(22, 'test', 'ew@ewe', '$2y$10$QOMco7ru6CyxB7rUmaHvQOoH36kDIuiYeBOhtlZ.qmlL.corC8P/i'),
(23, 'tes2', 'ets@asf', '$2y$10$eSZobPs53G5WudxKre1TPu8WVQ3AonDdWYTnmyQ4f5Du1vuOHl2oq'),
(24, 'testerea', 'test@email.com', '$2y$10$.rwIHoDZR//Oh2QDSsUF7uqu57u.eUQ.Q/.r3BRF3WCX/4nQwC9gK'),
(25, 'testerea', 'test@email.com', '$2y$10$eJw/oH7agbQAxcVjPD8e4.kFR80yiqwFUuS/necQtF3Cmzt5TBpwW'),
(26, 'testerea', 'test@email.com', '$2y$10$CCpbEQx8t/2lPdIKJbxgNueDa2ndq1RHMt7/6RDZli6suSgnturZe'),
(27, 'tester', 'test@email.com', '$2y$10$D80sFChvziJrjKE1qAZZj.ghBs8pAEclHP8MQuVwVi8FdRawhY9Ye'),
(28, 'testerea', 'test@email.com', '$2y$10$8zbDvasCkaJuU6bsuim4dOKXMgzj8r65uwdn0/eA8M0KxVgi8mjP.'),
(29, 'tester', 'test@email.com', '$2y$10$vyE517xnzTWVS2zcA560V.WlxDk9E1Q3iPei91vDDm1lUX.LUrnpS');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `p_items`
--
ALTER TABLE `p_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
