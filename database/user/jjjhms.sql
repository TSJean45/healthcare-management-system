-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 16, 2022 at 07:30 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jjjhms`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `usertype` varchar(50) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `name`, `email`, `password`, `usertype`) VALUES
(1, 'Tan Szu Jean', 'jean@admin.jjj.com', '1234', 'admin'),
(2, 'Cheong Jia En', 'jiaen@staff.jjj.com', '1234', 'staff'),
(3, 'Johan Harris ', 'jo@gmail.com', '1234', 'user'),
(4, 'Zhilong', 'zhi@gmail.com', '1234', 'user'),
(5, 'Juju', 'juju@gmail.com', '1234', 'user'),
(6, 'Juju2', 'juju2@gmail.com', '1234', 'user'),
(7, 'jasper', 'japs12@gmail.com', '1234', 'user'),
(8, 'paimon', 'genshin12@gmail.com', '1234', 'user'),
(9, 'dheenan', 'dhee@gmail.com', '1234', 'user'),
(10, 'Lebron', 'lebron1@gmail.com', '1234', 'user'),
(11, 'huhu', 'huhuhu@gmail.com', '1234', 'user'),
(12, 'madam', 'madam@gmail.com', '1234', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `medrec`
--

CREATE TABLE `medrec` (
  `recPrefix` varchar(1) NOT NULL DEFAULT 'R',
  `recID` int(5) UNSIGNED ZEROFILL NOT NULL,
  `userName` varchar(100) NOT NULL,
  `userID` int(5) NOT NULL,
  `userPrefix` varchar(2) NOT NULL DEFAULT 'U-',
  `staffID` int(5) NOT NULL,
  `staffPrefix` varchar(2) NOT NULL DEFAULT 'S-',
  `recDate` date NOT NULL,
  `recDisease` varchar(100) NOT NULL,
  `recStatus` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `medstock`
--

CREATE TABLE `medstock` (
  `prefix` varchar(2) NOT NULL DEFAULT 'MS',
  `stockID` int(5) UNSIGNED ZEROFILL NOT NULL,
  `stockName` varchar(100) NOT NULL,
  `stockQty` int(11) NOT NULL,
  `stockExpDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `medstock`
--

INSERT INTO `medstock` (`prefix`, `stockID`, `stockName`, `stockQty`, `stockExpDate`) VALUES
('MS', 00025, 'testing', 500, '2022-03-17'),
('MS', 00036, 'ssad', 900, '2022-03-05'),
('MS', 00039, 'sfdsfs', 410, '2022-03-11'),
('MS', 00040, 'a', 12, '2022-03-17'),
('MS', 00041, 'a', 900, '2022-03-17'),
('MS', 00042, 'ssad', 5000, '2022-03-05'),
('MS', 00044, 'sfdsfs', 55, '2022-03-11'),
('MS', 00045, 'a', 12, '2022-03-17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `medrec`
--
ALTER TABLE `medrec`
  ADD PRIMARY KEY (`recID`),
  ADD UNIQUE KEY `recPrefix` (`recPrefix`,`recID`);

--
-- Indexes for table `medstock`
--
ALTER TABLE `medstock`
  ADD PRIMARY KEY (`stockID`),
  ADD UNIQUE KEY `prefix` (`prefix`,`stockID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `medrec`
--
ALTER TABLE `medrec`
  MODIFY `recID` int(5) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `medstock`
--
ALTER TABLE `medstock`
  MODIFY `stockID` int(5) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
