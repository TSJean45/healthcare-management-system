-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 06, 2022 at 04:04 PM
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
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `prefix` varchar(11) NOT NULL DEFAULT 'A',
  `id` int(5) UNSIGNED ZEROFILL NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `usertype` varchar(50) NOT NULL DEFAULT 'admin',
  `phone_number` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `birthdate` date NOT NULL,
  `image_profille` varchar(50) NOT NULL,
  `biography` varchar(256) NOT NULL,
  `qualification` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`prefix`, `id`, `name`, `email`, `password`, `usertype`, `phone_number`, `gender`, `address`, `birthdate`, `image_profille`, `biography`, `qualification`) VALUES
('A', 00001, 'Tan Szu Jean', 'jean@admin.jjj.com', '1234', 'admin', '011-1083-1460', 'Female', 'Somewhere in Genshin City', '2002-03-09', '', 'Zhongli is my husband. He is my one and only true love.', 'Hard Carry, PhD in Genshin'),
('A', 00002, 'Johan Harris', 'johan@admin.jjj.com', '1234', 'admin', '011-6272-1818', 'Male', '32,USJ 12/2D', '2002-10-16', '', 'I dont like php. I cant do delete and edit lmao send help', 'PhD in procrastinating');

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `Appointment_ID` int(5) NOT NULL,
  `Appointment_date` date NOT NULL,
  `Appointment_time` time NOT NULL,
  `staff_name` varchar(50) NOT NULL,
  `staff_department` varchar(50) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `user_tel` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `bed`
--

CREATE TABLE `bed` (
  `bedPrefix` varchar(1) NOT NULL DEFAULT 'B',
  `bedID` int(3) UNSIGNED ZEROFILL NOT NULL,
  `bedLocation` varchar(100) NOT NULL,
  `bedDepartment` varchar(100) NOT NULL,
  `bedStatus` varchar(100) NOT NULL,
  `userID` int(5) UNSIGNED ZEROFILL NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bed`
--

INSERT INTO `bed` (`bedPrefix`, `bedID`, `bedLocation`, `bedDepartment`, `bedStatus`, `userID`) VALUES
('B', 022, 'Floor 1', 'Neurologist', 'Occupied', 00032),
('B', 023, 'Floor 3', 'Podiatrist', 'Empty', 00004);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `msgPrefix` varchar(1) NOT NULL DEFAULT 'C',
  `msgID` int(5) UNSIGNED ZEROFILL NOT NULL,
  `msgName` varchar(100) NOT NULL,
  `msgEmail` varchar(100) NOT NULL,
  `msgSubject` varchar(100) NOT NULL,
  `msgMessage` varchar(500) NOT NULL,
  `msgDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`msgPrefix`, `msgID`, `msgName`, `msgEmail`, `msgSubject`, `msgMessage`, `msgDate`) VALUES
('C', 00005, 'fggdgdg', 'jean45@gmail.com', 'dfsfsfsfs', 'fsfsdfsfads', '0000-00-00'),
('C', 00006, 'sasddda', 'sdasdsadasd@gmail.com', 'sdsdsadasdad', 'sdsdadadasda', '0000-00-00'),
('C', 00007, 'sdasdasda', 'sdsdad', 'sddssada', 'sdasdasda', '2022-04-12'),
('C', 00008, 'fggdgdg', 'jean45@gmail.com', 'dfsfsfsfs', 'fsfsdfsfads', '0000-00-00'),
('C', 00009, 'sasddda', 'sdasdsadasd@gmail.com', 'sdsdsadasdad', 'sdsdadadasda', '0000-00-00'),
('C', 00010, 'sdasdasda', 'sdsdad', 'sddssada', 'sdasdasda', '2022-04-12'),
('C', 00011, 'fggdgdg', 'jean45@gmail.com', 'dfsfsfsfs', 'fsfsdfsfads', '0000-00-00'),
('C', 00012, 'sasddda', 'sdasdsadasd@gmail.com', 'sdsdsadasdad', 'sdsdadadasda', '0000-00-00'),
('C', 00013, 'sdasdasda', 'sdsdad', 'sddssada', 'sdasdasda', '2022-04-12'),
('C', 00014, 'fggdgdg', 'jean45@gmail.com', 'dfsfsfsfs', 'fsfsdfsfads', '0000-00-00'),
('C', 00015, 'sasddda', 'sdasdsadasd@gmail.com', 'sdsdsadasdad', 'sdsdadadasda', '0000-00-00'),
('C', 00016, 'sdasdasda', 'sdsdad', 'sddssada', 'sdasdasda', '2022-04-12'),
('C', 00017, 'fggdgdg', 'jean45@gmail.com', 'dfsfsfsfs', 'fsfsdfsfads', '0000-00-00'),
('C', 00018, 'sasddda', 'sdasdsadasd@gmail.com', 'sdsdsadasdad', 'sdsdadadasda', '0000-00-00'),
('C', 00019, 'sdasdasda', 'sdsdad', 'sddssada', 'sdasdasda', '2022-04-12'),
('C', 00020, 'fggdgdg', 'jean45@gmail.com', 'dfsfsfsfs', 'fsfsdfsfads', '0000-00-00'),
('C', 00021, 'sasddda', 'sdasdsadasd@gmail.com', 'sdsdsadasdad', 'sdsdadadasda', '0000-00-00'),
('C', 00022, 'sdasdasda', 'sdsdad', 'sddssada', 'sdasdasda', '2022-04-12'),
('C', 00023, 'fggdgdg', 'jean45@gmail.com', 'dfsfsfsfs', 'fsfsdfsfads', '0000-00-00'),
('C', 00024, 'sasddda', 'sdasdsadasd@gmail.com', 'sdsdsadasdad', 'sdsdadadasda', '0000-00-00'),
('C', 00025, 'sdasdasda', 'sdsdad', 'sddssada', 'sdasdasda', '2022-04-12'),
('C', 00026, 'fggdgdg', 'jean45@gmail.com', 'dfsfsfsfs', 'fsfsdfsfads', '0000-00-00'),
('C', 00027, 'sasddda', 'sdasdsadasd@gmail.com', 'sdsdsadasdad', 'sdsdadadasda', '0000-00-00'),
('C', 00028, 'Jean123', 'szujean45@gmail.com', 'hi', 'wasuuppppp', '0000-00-00');

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
(12, 'madam', 'madam@gmail.com', '1234', 'user'),
(13, 'zrf', 'zrf@gmail.com', '123', 'user'),
(14, 'jo4', 'jo4@gmail', '123', 'user'),
(16, 'Johan Harris', 'johan@admin.jjj.com', '1234', 'admin'),
(17, 'Ja', 'ja@admin.jjj.com', '1234', 'admin'),
(18, 'Susu', 'susu@admin.jjj.com', '1234', 'admin'),
(19, 'Susu', 'susu@admin.jjj.com', '1234', 'admin'),
(20, 'Jean2', 'jean2@admin.jjj.com', '1234', 'admin'),
(21, 'Jean3', 'jean3@admin.jjj.com', '1234', 'admin'),
(22, 'Madam', 'madam@admin.jjj.com', '1234', 'admin'),
(31, 'Josh Hart', 'josh@staff.jjj.com', '1234', 'staff'),
(32, 'Madam', 'madam@staff.jjj.com', '1234', 'staff');

-- --------------------------------------------------------

--
-- Table structure for table `medrec`
--

CREATE TABLE `medrec` (
  `recPrefix` varchar(1) NOT NULL DEFAULT 'R',
  `recID` int(5) UNSIGNED ZEROFILL NOT NULL,
  `userID` int(5) UNSIGNED ZEROFILL NOT NULL,
  `userName` varchar(100) NOT NULL,
  `staffID` int(5) UNSIGNED ZEROFILL NOT NULL,
  `recDate` date NOT NULL,
  `recDisease` varchar(100) NOT NULL,
  `recStatus` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `medrec`
--

INSERT INTO `medrec` (`recPrefix`, `recID`, `userID`, `userName`, `staffID`, `recDate`, `recDisease`, `recStatus`) VALUES
('R', 00075, 00003, 'Johan Harris ', 00003, '2022-04-15', 'Heart Attack', 'In Treatment'),
('R', 00076, 00003, 'Johan Harris ', 00003, '2022-04-08', 'asdasdd', 'Recovered'),
('R', 00077, 00032, 'LeBron James', 00001, '2022-04-21', 'sdasda', 'New'),
('R', 00078, 00003, 'Johan Harris ', 00002, '2022-04-14', 'asdadasdasd', 'In Treatment');

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
('MS', 00045, '1233333', 184, '2022-04-16'),
('MS', 00049, 'Johan', 200, '2022-04-22'),
('MS', 00051, 'abcde', 12, '2022-04-15'),
('MS', 00052, 'test123', 1000, '2022-04-30'),
('MS', 00054, 'ssad', 50, '2022-03-05'),
('MS', 00057, 'Johan Crazy Pill', 1000, '2022-03-18'),
('MS', 00058, 'ssad', 50, '2022-03-05'),
('MS', 00059, 'a', 12, '2022-03-17'),
('MS', 00060, 'test123', 1000, '2022-03-18'),
('MS', 00062, 'ssad', 50, '2022-03-05'),
('MS', 00063, 'a', 12, '2022-03-17'),
('MS', 00064, 'test123', 1000, '2022-03-18'),
('MS', 00065, 'Johan Crazy Pill', 1000, '2022-03-18'),
('MS', 00066, 'ssad', 50, '2022-03-05'),
('MS', 00067, 'a', 12, '2022-03-17'),
('MS', 00068, 'test123', 5000, '2022-03-18'),
('MS', 00069, 'Johan Crazy Pill', 1000, '2022-03-18'),
('MS', 00070, 'ssad', 50, '2022-03-05'),
('MS', 00071, 'a', 12, '2022-03-17'),
('MS', 00072, 'test123', 1000, '2022-03-18'),
('MS', 00073, 'Johan Crazy Pill', 1000, '2022-03-18'),
('MS', 00074, 'ssad', 50, '2022-03-05'),
('MS', 00075, 'a', 12, '2022-03-17'),
('MS', 00076, 'test123', 1000, '2022-03-18'),
('MS', 00077, 'Johan Crazy Pill', 1000, '2022-03-18'),
('MS', 00078, 'Johan crazy pull ver2', 50, '2022-03-26'),
('MS', 00079, 'test new', 122, '2022-04-07'),
('MS', 00080, 'test new', 122, '2022-04-14'),
('MS', 00081, 'test form ', 244, '2022-04-09');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `staffPrefix` varchar(1) NOT NULL DEFAULT 'S',
  `staffId` int(5) UNSIGNED ZEROFILL NOT NULL,
  `staffName` varchar(50) NOT NULL,
  `staffEmail` varchar(50) NOT NULL,
  `staffPassword` varchar(50) NOT NULL,
  `staffPosition` varchar(50) NOT NULL,
  `staffDepartment` varchar(50) NOT NULL,
  `staffUsertype` varchar(50) NOT NULL DEFAULT 'staff',
  `staffPhone_number` varchar(50) NOT NULL,
  `staffGender` varchar(50) NOT NULL,
  `staffAddress` varchar(50) NOT NULL,
  `staffBirthdate` date NOT NULL,
  `staffImage_profile` varchar(50) NOT NULL,
  `staffImage_cover` varchar(50) NOT NULL,
  `staffBiography` varchar(256) NOT NULL,
  `staffQualification` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`staffPrefix`, `staffId`, `staffName`, `staffEmail`, `staffPassword`, `staffPosition`, `staffDepartment`, `staffUsertype`, `staffPhone_number`, `staffGender`, `staffAddress`, `staffBirthdate`, `staffImage_profile`, `staffImage_cover`, `staffBiography`, `staffQualification`) VALUES
('S', 00001, 'Cheong Jia En', 'jiaen@staff.jjj.com', '1234', '', '', 'staff', '', '', '', '0000-00-00', '', '', '', ''),
('S', 00002, 'Josh Hart', 'josh@staff.jjj.com', '1234', 'Nurse', 'Podiatrist', 'staff', '', '', '', '0000-00-00', '', '', '', ''),
('S', 00003, 'Madam', 'madam@staff.jjj.com', '1234', '', '', 'staff', '', '', '', '0000-00-00', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userPrefix` varchar(10) NOT NULL DEFAULT 'U',
  `userId` int(5) UNSIGNED ZEROFILL NOT NULL,
  `userName` varchar(50) NOT NULL,
  `userEmail` varchar(50) NOT NULL,
  `userPassword` varchar(50) NOT NULL,
  `usertype` varchar(50) NOT NULL DEFAULT 'user',
  `userDate_created` date NOT NULL DEFAULT current_timestamp(),
  `userPhone_number` varchar(50) NOT NULL,
  `userGender` varchar(50) NOT NULL,
  `userBirthdate` date NOT NULL,
  `userAddress` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userPrefix`, `userId`, `userName`, `userEmail`, `userPassword`, `usertype`, `userDate_created`, `userPhone_number`, `userGender`, `userBirthdate`, `userAddress`) VALUES
('U', 00003, 'Johan Harris ', 'jo@gmail.com', '1234', 'user', '2022-03-09', '', '', '0000-00-00', ''),
('U', 00004, 'Zhilong', 'zhi@gmail.com', '1234', 'user', '2022-03-16', '', '', '0000-00-00', ''),
('U', 00032, 'LeBron James', 'kingjames@gmail.com', '1234', 'user', '2022-04-05', '', '', '0000-00-00', '');

-- --------------------------------------------------------

--
-- Table structure for table `vaccine`
--

CREATE TABLE `vaccine` (
  `Vaccine_ID` int(5) NOT NULL,
  `Vaccine_date` date NOT NULL,
  `Vaccine_time` time NOT NULL,
  `Vaccine_type` varchar(20) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `user_age` int(3) NOT NULL,
  `user_gender` varchar(10) NOT NULL,
  `user_tel` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vaccine`
--

INSERT INTO `vaccine` (`Vaccine_ID`, `Vaccine_date`, `Vaccine_time`, `Vaccine_type`, `user_name`, `user_age`, `user_gender`, `user_tel`) VALUES
(5, '2022-03-25', '17:15:00', 'Pifzer', 'jiaen', 20, 'Female', '012-6600625');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`Appointment_ID`);

--
-- Indexes for table `bed`
--
ALTER TABLE `bed`
  ADD PRIMARY KEY (`bedID`),
  ADD KEY `bed_ibfk_1` (`userID`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`msgID`);

--
-- Indexes for table `medrec`
--
ALTER TABLE `medrec`
  ADD PRIMARY KEY (`recID`),
  ADD KEY `userID` (`userID`),
  ADD KEY `staffID` (`staffID`);

--
-- Indexes for table `medstock`
--
ALTER TABLE `medstock`
  ADD PRIMARY KEY (`stockID`),
  ADD UNIQUE KEY `prefix` (`prefix`,`stockID`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`staffId`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userId`);

--
-- Indexes for table `vaccine`
--
ALTER TABLE `vaccine`
  ADD PRIMARY KEY (`Vaccine_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `Appointment_ID` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bed`
--
ALTER TABLE `bed`
  MODIFY `bedID` int(3) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `msgID` int(5) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `medrec`
--
ALTER TABLE `medrec`
  MODIFY `recID` int(5) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT for table `medstock`
--
ALTER TABLE `medstock`
  MODIFY `stockID` int(5) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `staffId` int(5) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userId` int(5) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `vaccine`
--
ALTER TABLE `vaccine`
  MODIFY `Vaccine_ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bed`
--
ALTER TABLE `bed`
  ADD CONSTRAINT `bed_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `user` (`userId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `medrec`
--
ALTER TABLE `medrec`
  ADD CONSTRAINT `medrec_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `user` (`userId`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `medrec_ibfk_2` FOREIGN KEY (`staffID`) REFERENCES `staff` (`staffId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
