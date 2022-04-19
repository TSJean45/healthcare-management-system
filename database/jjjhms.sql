-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 19, 2022 at 08:02 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

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
  `adminPrefix` varchar(11) NOT NULL DEFAULT 'A',
  `adminId` int(5) UNSIGNED ZEROFILL NOT NULL,
  `adminName` varchar(50) NOT NULL,
  `adminEmail` varchar(50) NOT NULL,
  `adminPassword` varchar(50) NOT NULL,
  `adminUsertype` varchar(50) NOT NULL DEFAULT 'admin',
  `adminPhone_number` varchar(50) NOT NULL,
  `adminGender` varchar(50) NOT NULL,
  `adminAddress` varchar(50) NOT NULL,
  `adminBirthdate` date NOT NULL,
  `adminImage_status` int(11) NOT NULL,
  `adminBiography` varchar(256) NOT NULL,
  `adminQualification` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminPrefix`, `adminId`, `adminName`, `adminEmail`, `adminPassword`, `adminUsertype`, `adminPhone_number`, `adminGender`, `adminAddress`, `adminBirthdate`, `adminImage_status`, `adminBiography`, `adminQualification`) VALUES
('A', 00001, 'Johan Harris', 'johan@admin.jjj.com', '1234', 'admin', '011-6272-1818', 'Male', '32 usj 12/2d', '2002-10-16', 1, 'I hate upload image nahh', 'PhD in Sleeping'),
('A', 00002, 'Tan ', 'jean@admin.jjj.com', '1234', 'admin', '01163222212', 'Female', 'Nova Apartment, KL , Malaysia', '2002-03-09', 0, 'Professional Coder', 'Phd in Genshin Impact');

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `appointmentID` int(5) UNSIGNED ZEROFILL NOT NULL,
  `appointmentPrefix` varchar(2) NOT NULL DEFAULT 'AP',
  `appointmentDate` date NOT NULL,
  `appointmentTime` time NOT NULL,
  `appointmentReason` varchar(1000) NOT NULL,
  `appointmentStatus` varchar(10) NOT NULL,
  `staffId` int(5) UNSIGNED ZEROFILL NOT NULL,
  `userId` int(5) UNSIGNED ZEROFILL NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`appointmentID`, `appointmentPrefix`, `appointmentDate`, `appointmentTime`, `appointmentReason`, `appointmentStatus`, `staffId`, `userId`) VALUES
(00021, 'AP', '2022-04-22', '09:00:00', 'vomit', 'Cancelled', 00013, 00003),
(00023, 'AP', '2022-04-19', '15:00:00', 'fever', 'Scheduled', 00015, 00044),
(00025, 'AP', '2022-04-28', '14:00:00', 'heart attack', 'Completed', 00015, 00038),
(00026, 'AP', '2022-04-29', '12:00:00', 'not feeling really well', 'Cancelled', 00015, 00041),
(00028, 'AP', '2022-04-21', '10:00:00', '', 'Completed', 00014, 00003),
(00029, 'AP', '2022-04-20', '11:00:00', 'Flu ', 'Booked', 00012, 00004),
(00030, 'AP', '2022-04-23', '10:00:00', 'test', 'Cancelled', 00015, 00003),
(00031, 'AP', '2022-04-20', '11:00:00', 'Flu ', 'Cancelled', 00013, 00004),
(00032, 'AP', '2022-04-19', '09:00:00', '', 'Completed', 00015, 00060),
(00033, 'AP', '2022-04-21', '11:00:00', 'Flu ', 'Booked', 00012, 00003);

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
('B', 027, 'Floor 3', 'Podiatrist', 'Cleaning', 00042),
('B', 029, 'Floor 3', 'Neurologist', 'Occupied', 00004),
('B', 031, 'Floor 3', 'Endocrinologist', 'Cleaning', 00003),
('B', 032, 'Floor 4', 'Neurologist', 'Occupied', 00003),
('B', 036, 'Floor 3', 'Endocrinologist', 'Empty', 00003);

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
  `msgDate` date NOT NULL,
  `msgStatus` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`msgPrefix`, `msgID`, `msgName`, `msgEmail`, `msgSubject`, `msgMessage`, `msgDate`, `msgStatus`) VALUES
('C', 00035, 'sdasdad', 'a@gmail.com', 'sdada', 'dasdda', '2022-04-17', 'Replied'),
('C', 00036, 'dasdasd', 'sada@gmail.com', 'sdada', 'dasdadad', '2022-04-17', 'Received'),
('C', 00039, 'Johan ', 'johanharriss@gmail.com', 'Hungry', 'Hi', '2022-04-19', 'Replied');

-- --------------------------------------------------------

--
-- Table structure for table `medicine`
--

CREATE TABLE `medicine` (
  `medicineName` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `medicine`
--

INSERT INTO `medicine` (`medicineName`) VALUES
('Acarbose'),
('Acetazolamide'),
('Acyclovir'),
('Albendazole'),
('Amantadine'),
('Amoxycillin'),
('Ampicillin'),
('Amylase'),
('Aspirin'),
('Atropine'),
('Baclofen'),
('Betahistine'),
('Bisoprolol'),
('Bupivacaine HCL'),
('Calcipotriol'),
('Carbamazepine'),
('Carboplatin'),
('Carvedilol'),
('Cefixime'),
('Ceftizoxime'),
('Cetirizine'),
('Clindamycin'),
('Cloxacillin'),
('Dicyclomine'),
('Dinoprostone'),
('Diosmin'),
('Dipyridamole'),
('Disopyramide'),
('Doxazosin'),
('Doxepin'),
('Erythromycin'),
('Flavoxate'),
('Fluconazol'),
('Gentamicin'),
('Gliclazide'),
('Hamycin'),
('Indapamide'),
('Ketamine'),
('Loratadine'),
('Midazolam'),
('Naloxone'),
('Nimesulide'),
('Nystatin'),
('Ofloxacin'),
('Olanzapine'),
('Ornidazole'),
('Oxazepam'),
('Pancreatin'),
('Pimozide'),
('Pindolol'),
('Piribedil'),
('Piroxicam'),
('Pravastatin'),
('Prazosin'),
('Primidone'),
('Rampiril'),
('Ribavirin'),
('Rutin'),
('Sisomicin'),
('Soframycin'),
('Spirulina'),
('Sucralafate'),
('Sumatriptan'),
('Tamoxifen'),
('Terazosin'),
('Tetracycline'),
('Timolol'),
('Tolnaftate'),
('Triclofos'),
('Urokinase'),
('Valethamate'),
('Verapamil'),
('Warfarin'),
('Xipamide'),
('Zopiclone');

-- --------------------------------------------------------

--
-- Table structure for table `medrec`
--

CREATE TABLE `medrec` (
  `recPrefix` varchar(1) NOT NULL DEFAULT 'R',
  `recID` int(5) UNSIGNED ZEROFILL NOT NULL,
  `userID` int(5) UNSIGNED ZEROFILL NOT NULL,
  `staffID` int(5) UNSIGNED ZEROFILL NOT NULL,
  `recDate` date NOT NULL,
  `recDisease` varchar(100) NOT NULL,
  `recStatus` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `medrec`
--

INSERT INTO `medrec` (`recPrefix`, `recID`, `userID`, `staffID`, `recDate`, `recDisease`, `recStatus`) VALUES
('R', 00076, 00042, 00011, '2022-04-08', 'asdasdd', 'New'),
('R', 00078, 00003, 00002, '2022-04-14', 'asdadasdasd', 'In Treatment');

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
('MS', 00052, 'Cefixime', 300, '2022-04-30'),
('MS', 00080, 'Gentamicin', 122, '2022-04-14'),
('MS', 00082, 'Doxazosin', 990, '2022-05-27'),
('MS', 00083, 'Cetirizine', 6000, '2022-04-13'),
('MS', 00084, 'Amantadine', 2000, '2022-04-28'),
('MS', 00085, 'Spirulina', 12, '2022-04-20'),
('MS', 00086, 'Acarbose', 312, '2022-04-20'),
('MS', 00087, 'Acarbose', 25, '2022-04-21'),
('MS', 00088, 'Acarbose', 22, '2022-04-21');

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
  `staffImage_status` int(11) NOT NULL,
  `staffBiography` varchar(256) NOT NULL,
  `staffQualification` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`staffPrefix`, `staffId`, `staffName`, `staffEmail`, `staffPassword`, `staffPosition`, `staffDepartment`, `staffUsertype`, `staffPhone_number`, `staffGender`, `staffAddress`, `staffBirthdate`, `staffImage_status`, `staffBiography`, `staffQualification`) VALUES
('S', 00001, 'Cheong Jia ', 'jiaen@staff.jjj.com', '123', 'Staff', 'Pediatrician', 'staff', '01111111111', 'Female', 'MMU', '2002-06-10', 1, 'lolol', 'PhD in Nursing, Bachelor in Rheumatologist'),
('S', 00002, 'Josh Hart', 'josh@staff.jjj.com', '1234', 'Doctor', 'Podiatrist', 'staff', '', '', '', '0000-00-00', 1, '', ''),
('S', 00003, 'Madam', 'madam@staff.jjj.com', '1234', 'Staff', 'Podiatrist', 'staff', '', '', '', '0000-00-00', 1, '', ''),
('S', 00011, 'Jesse Pinkman', 'jesse@staff.jjj.com', '1234', 'Staff', 'Neurologist', 'staff', '01112561617', 'Male', '9809 Margo Street, Albuquerque, New Mexico', '1996-02-06', 1, 'Been working here for 10 years. Love the people here.', 'Phd in Neurologist, PhD in Chemistry'),
('S', 00012, 'Hank Schrader', 'hank@staff.jjj.com', '1234', 'Doctor', 'Endocrinologist', 'staff', '01111111111', 'Male', 'Man Cent, Jalan Ayer Keroh', '1995-06-08', 1, 'I love FYP', ''),
('S', 00013, 'Sasuke Uchiha', 'sasuke@staff.jjj.com', '1234', 'Doctor', 'Neurologist', 'staff', '01111111111', 'Male', '10 Jalan Bedara', '1999-06-07', 1, 'I love FYP', ''),
('S', 00014, 'Naruto ', 'naruto@staff.jjj.com', '1234', 'Doctor', 'Rheumatologist', 'staff', '', 'Female', '', '0000-00-00', 1, '', ''),
('S', 00015, 'Joseph Sterling', 'joseph@staff.jjj.com', '1234', 'Doctor', 'Endocrinologist', 'staff', '01111111111', 'Male', 'Putra Height', '1996-06-18', 1, 'I love FYP', '');

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
  `userAddress` varchar(50) NOT NULL,
  `userImage_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userPrefix`, `userId`, `userName`, `userEmail`, `userPassword`, `usertype`, `userDate_created`, `userPhone_number`, `userGender`, `userBirthdate`, `userAddress`, `userImage_status`) VALUES
('U', 00003, 'Johan ', 'jo@gmail.com', '1234', 'user', '2022-03-09', '01111111111', 'Male', '2002-10-16', '32, USJ 12/2D , Subang Jaya', 0),
('U', 00004, 'Zhilong', 'zhi@gmail.com', '1234', 'user', '2022-03-16', '', '', '0000-00-00', '', 0),
('U', 00038, 'Bradley Beal', 'bradleybeal@gmail.com', '1234', 'user', '2022-04-08', '', '', '0000-00-00', '', 0),
('U', 00039, 'Kirito', 'kirito@gmail.com', '1234', 'user', '2022-04-08', '', '', '0000-00-00', '', 0),
('U', 00041, 'Chris Rock ', 'chrisrock@gmail.com', '1234', 'user', '2022-04-08', '', '', '0000-00-00', '', 0),
('U', 00042, 'Keane', 'keane@gmail.com', '1234', 'user', '2022-04-08', '', '', '0000-00-00', '', 0),
('U', 00043, 'Rick Sanchez', 'rick@gmail.com', '1234', 'user', '2022-04-08', '', '', '0000-00-00', '', 0),
('U', 00044, 'Marc Spector', 'marc@gmail.com', '1234', 'user', '2022-04-08', '', '', '0000-00-00', '', 0),
('U', 00045, 'Mr Knight', 'knight@gmail.com', '1234', 'user', '2022-04-08', '', '', '0000-00-00', '', 0),
('U', 00060, 'Falco', 'falco@gmail.com', '1234', 'user', '2022-04-19', '', '', '0000-00-00', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `vaccine`
--

CREATE TABLE `vaccine` (
  `vaccinePrefix` varchar(1) NOT NULL DEFAULT 'V',
  `vaccineId` int(5) UNSIGNED ZEROFILL NOT NULL,
  `vaccineDate` date NOT NULL,
  `vaccineTime` time NOT NULL,
  `vaccineBrand` varchar(20) NOT NULL,
  `vaccineStatus` varchar(10) NOT NULL,
  `userId` int(5) UNSIGNED ZEROFILL NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vaccine`
--

INSERT INTO `vaccine` (`vaccinePrefix`, `vaccineId`, `vaccineDate`, `vaccineTime`, `vaccineBrand`, `vaccineStatus`, `userId`) VALUES
('V', 00010, '0000-00-00', '00:00:00', 'Moderna', 'Cancelled', 00003),
('V', 00011, '2022-04-28', '09:00:00', 'Sinovac', 'Completed', 00003),
('V', 00012, '2022-04-29', '10:30:00', 'AstraZeneca', 'Scheduled', 00003),
('V', 00013, '2022-04-21', '16:16:00', 'AstraZeneca', 'Scheduled', 00004),
('V', 00014, '2022-04-21', '17:16:00', 'AstraZeneca', 'Cancelled', 00039),
('V', 00015, '2022-04-21', '17:33:00', 'Sinovac', 'Completed', 00003),
('V', 00016, '2022-04-20', '11:55:00', 'Pfizer', 'Scheduled', 00038),
('V', 00017, '2022-04-22', '13:25:00', 'AstraZeneca', 'Cancelled', 00003),
('V', 00018, '2022-04-20', '15:38:00', 'Sinovac', 'Scheduled', 00003),
('V', 00019, '2022-04-23', '13:28:00', 'Pfizer', 'Confirmed', 00003);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adminId`);

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`appointmentID`),
  ADD KEY `staffId` (`staffId`),
  ADD KEY `usedId` (`userId`);

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
-- Indexes for table `medicine`
--
ALTER TABLE `medicine`
  ADD PRIMARY KEY (`medicineName`);

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
  ADD PRIMARY KEY (`vaccineId`),
  ADD KEY `userId` (`userId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `adminId` int(5) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `appointmentID` int(5) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `bed`
--
ALTER TABLE `bed`
  MODIFY `bedID` int(3) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `msgID` int(5) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `medrec`
--
ALTER TABLE `medrec`
  MODIFY `recID` int(5) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT for table `medstock`
--
ALTER TABLE `medstock`
  MODIFY `stockID` int(5) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `staffId` int(5) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userId` int(5) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `vaccine`
--
ALTER TABLE `vaccine`
  MODIFY `vaccineId` int(5) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `appointment`
--
ALTER TABLE `appointment`
  ADD CONSTRAINT `appointment_ibfk_1` FOREIGN KEY (`staffId`) REFERENCES `staff` (`staffId`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `appointment_ibfk_2` FOREIGN KEY (`userId`) REFERENCES `user` (`userId`) ON DELETE CASCADE ON UPDATE CASCADE;

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

--
-- Constraints for table `vaccine`
--
ALTER TABLE `vaccine`
  ADD CONSTRAINT `vaccine_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `user` (`userId`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
