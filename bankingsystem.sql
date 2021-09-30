-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 14, 2021 at 12:39 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bankingsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounteur`
--

CREATE TABLE `accounteur` (
  `id` int(10) NOT NULL,
  `balance` decimal(10,0) NOT NULL,
  `usernameeur` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `accounteur`
--

INSERT INTO `accounteur` (`id`, `balance`, `usernameeur`) VALUES
(6, '1475', 'alexflorin'),
(7, '2220', 'daniel'),
(8, '4790', 'mihai1');

-- --------------------------------------------------------

--
-- Table structure for table `accountron`
--

CREATE TABLE `accountron` (
  `id` int(11) NOT NULL,
  `balance` decimal(10,0) NOT NULL,
  `usernameron` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `accountron`
--

INSERT INTO `accountron` (`id`, `balance`, `usernameron`) VALUES
(12, '3522', 'alexflorin'),
(13, '967', 'daniel'),
(14, '9961', 'mihai1');

-- --------------------------------------------------------

--
-- Table structure for table `accountusd`
--

CREATE TABLE `accountusd` (
  `id` int(10) NOT NULL,
  `balance` decimal(10,0) NOT NULL,
  `usernameusd` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `accountusd`
--

INSERT INTO `accountusd` (`id`, `balance`, `usernameusd`) VALUES
(5, '1502', 'alexflorin'),
(6, '2983', 'daniel'),
(7, '2515', 'mihai1');

-- --------------------------------------------------------

--
-- Table structure for table `paymenteur`
--

CREATE TABLE `paymenteur` (
  `id` int(10) NOT NULL,
  `senderusername` varchar(255) NOT NULL,
  `service` varchar(255) NOT NULL,
  `amount` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `paymenteur`
--

INSERT INTO `paymenteur` (`id`, `senderusername`, `service`, `amount`) VALUES
(5, 'daniel', 'Phone', 15);

-- --------------------------------------------------------

--
-- Table structure for table `paymentron`
--

CREATE TABLE `paymentron` (
  `id` int(10) NOT NULL,
  `senderusername` varchar(255) NOT NULL,
  `service` varchar(255) NOT NULL,
  `amount` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `paymentron`
--

INSERT INTO `paymentron` (`id`, `senderusername`, `service`, `amount`) VALUES
(3, 'daniel', 'Telekom', '25'),
(4, 'daniel', 'Electric provider', '25');

-- --------------------------------------------------------

--
-- Table structure for table `paymentusd`
--

CREATE TABLE `paymentusd` (
  `id` int(10) NOT NULL,
  `senderusername` varchar(255) NOT NULL,
  `service` varchar(255) NOT NULL,
  `amount` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `paymentusd`
--

INSERT INTO `paymentusd` (`id`, `senderusername`, `service`, `amount`) VALUES
(2, 'daniel', 'Netflix', 30);

-- --------------------------------------------------------

--
-- Table structure for table `transfereur`
--

CREATE TABLE `transfereur` (
  `id` int(10) NOT NULL,
  `senderusername` varchar(255) NOT NULL,
  `receiverusername` varchar(255) NOT NULL,
  `amount` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transfereur`
--

INSERT INTO `transfereur` (`id`, `senderusername`, `receiverusername`, `amount`) VALUES
(51, 'mihai1', 'daniel', '150'),
(52, 'mihai1', 'alexflorin', '140'),
(53, 'mihai1', 'alexflorin', '25'),
(54, 'alexflorin', 'daniel', '15'),
(55, 'alexflorin', 'mihai1', '25'),
(56, 'daniel', 'alexflorin', '350'),
(57, 'daniel', 'mihai1', '80');

-- --------------------------------------------------------

--
-- Table structure for table `transferron`
--

CREATE TABLE `transferron` (
  `id` int(10) NOT NULL,
  `senderusername` varchar(255) NOT NULL,
  `receiverusername` varchar(255) NOT NULL,
  `amount` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transferron`
--

INSERT INTO `transferron` (`id`, `senderusername`, `receiverusername`, `amount`) VALUES
(14, 'mihai1', 'daniel', '50'),
(15, 'mihai1', 'alexflorin', '150'),
(16, 'alexflorin', 'mihai1', '150'),
(17, 'alexflorin', 'daniel', '350'),
(18, 'daniel', 'alexflorin', '350'),
(19, 'daniel', 'mihai1', '33'),
(20, 'mihai1', 'alexflorin', '22');

-- --------------------------------------------------------

--
-- Table structure for table `transferusd`
--

CREATE TABLE `transferusd` (
  `id` int(10) NOT NULL,
  `senderusername` varchar(255) NOT NULL,
  `receiverusername` varchar(255) NOT NULL,
  `amount` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transferusd`
--

INSERT INTO `transferusd` (`id`, `senderusername`, `receiverusername`, `amount`) VALUES
(6, 'mihai1', 'daniel', 10),
(7, 'mihai1', 'alexflorin', 250),
(8, 'alexflorin', 'mihai1', 250),
(9, 'alexflorin', 'daniel', 33),
(10, 'daniel', 'mihai1', 25),
(11, 'daniel', 'alexflorin', 35);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(7) NOT NULL,
  `email` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `firstname`, `lastname`, `username`, `password`, `address`) VALUES
(43, 'alex.florin@yahoo.com', 'Alex', 'Gheorghe', 'alexflorin', '$2y$10$SY1VNfAuD3h7IE1DsE7v/.UIrf5JJEI9j1ONiWWg80oDDsFkrkr5O', 'Lalelelor'),
(44, 'danielionescu@gmail.com', 'Daniel', 'Ionescu', 'daniel', '$2y$10$NdHuMT0Px1leRKNzQXNpNe570jAw3Z9/gWq4uwO3Y2VLpiT9iNAUu', 'Str.Daciei'),
(45, 'pascumihai@yahoo.com', 'Mihai', 'Pascu', 'mihai1', '$2y$10$3uxdkwkLgoI3qVQ.c7h8H.HCQoz5y5nlNPANDv5Or6ngWR6HKrQt6', 'Bulevardul Dacia');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounteur`
--
ALTER TABLE `accounteur`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `accountron`
--
ALTER TABLE `accountron`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `accountusd`
--
ALTER TABLE `accountusd`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `paymenteur`
--
ALTER TABLE `paymenteur`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `paymentron`
--
ALTER TABLE `paymentron`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `paymentusd`
--
ALTER TABLE `paymentusd`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transfereur`
--
ALTER TABLE `transfereur`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transferron`
--
ALTER TABLE `transferron`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transferusd`
--
ALTER TABLE `transferusd`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounteur`
--
ALTER TABLE `accounteur`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `accountron`
--
ALTER TABLE `accountron`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `accountusd`
--
ALTER TABLE `accountusd`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `paymenteur`
--
ALTER TABLE `paymenteur`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `paymentron`
--
ALTER TABLE `paymentron`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `paymentusd`
--
ALTER TABLE `paymentusd`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `transfereur`
--
ALTER TABLE `transfereur`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `transferron`
--
ALTER TABLE `transferron`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `transferusd`
--
ALTER TABLE `transferusd`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
