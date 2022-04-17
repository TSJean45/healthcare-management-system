-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 17, 2022 at 02:19 PM
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
  `adminImage_profille` varchar(256) NOT NULL,
  `adminBiography` varchar(256) NOT NULL,
  `adminQualification` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminPrefix`, `adminId`, `adminName`, `adminEmail`, `adminPassword`, `adminUsertype`, `adminPhone_number`, `adminGender`, `adminAddress`, `adminBirthdate`, `adminImage_profille`, `adminBiography`, `adminQualification`) VALUES
('A', 00001, 'Johan Harris', 'johan@admin.jjj.com', '1234', 'admin', '01162721818', 'Male', '32 usj 12/2d', '2002-10-16', '', 'I hate upload image', 'PhD in Sleeping'),
('A', 00002, 'Tan Szu Jean', 'jean@admin.jjj.com', '1234', 'admin', '011-632-1212', 'Female', 'Nova Apartment, KL', '2002-03-09', '', 'Professional Coder', 'Phd in Genshin Impact');

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
(00018, 'AP', '2022-04-01', '14:00:00', 'having cough', 'Booked', 00002, 00003),
(00019, 'AP', '2022-04-22', '18:00:00', 'vomit', 'Cancelled', 00013, 00003),
(00020, 'AP', '2022-04-22', '18:00:00', 'vomit', 'Cancelled', 00013, 00003),
(00021, 'AP', '2022-04-22', '09:00:00', 'vomit', 'Cancelled', 00013, 00003),
(00022, 'AP', '2022-04-29', '18:00:00', 'fever', 'Booked', 00013, 00003),
(00023, 'AP', '2022-04-19', '14:00:00', 'fever', 'Scheduled', 00015, 00044),
(00024, 'AP', '2022-04-29', '18:00:00', 'schedule from last week', 'Booked', 00013, 00039),
(00025, 'AP', '2022-04-28', '14:00:00', 'heart attack', 'Completed', 00015, 00038),
(00026, 'AP', '2022-04-29', '12:00:00', 'not feeling really well', 'Confirmed', 00015, 00041);

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
('B', 024, 'Floor 2', 'Pediatrician', 'Occupied', 00044),
('B', 025, 'Floor 3', 'Endocrinologist', 'Empty', 00038),
('B', 027, 'Floor 3', 'Podiatrist', 'Cleaning', 00042),
('B', 029, 'Floor 3', 'Neurologist', 'Occupied', 00004),
('B', 031, 'Floor 3', 'Endocrinologist', 'Cleaning', 00003);

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
('C', 00036, 'dasdasd', 'sada@gmail.com', 'sdada', 'dasdadad', '2022-04-17', 'Received');

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
('R', 00076, 00042, 'Keane', 00003, '2022-04-08', 'asdasdd', 'Recovered'),
('R', 00078, 00003, 'Johan Harris ', 00002, '2022-04-14', 'asdadasdasd', 'In Treatment'),
('R', 00080, 00042, 'Keane', 00012, '2022-04-13', 'new info', 'New');

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
('MS', 00049, 'Acarbose', 150, '2022-04-22'),
('MS', 00051, 'Aspirin', 12, '2022-04-15'),
('MS', 00052, 'Cefixime', 500, '2022-04-30'),
('MS', 00080, 'Gentamicin', 122, '2022-04-14'),
('MS', 00082, 'Doxazosin', 990, '2022-05-27'),
('MS', 00083, 'Cetirizine', 6000, '2022-04-13'),
('MS', 00084, 'Amantadine', 2000, '2022-04-28');

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
('S', 00001, 'Cheong Jia En', 'jiaen@staff.jjj.com', '123', 'Staff', 'Endocrinologist', 'staff', 'acb99', 'Female', 'MMU', '2002-06-10', '', '', 'lolol', 'PhD in Nursing, Bachelor in Rheumatologist'),
('S', 00002, 'Josh Hart', 'josh@staff.jjj.com', '1234', 'Doctor', 'Podiatrist', 'staff', '', '', '', '0000-00-00', '', '', '', ''),
('S', 00003, 'Madam', 'madam@staff.jjj.com', '1234', 'Staff', 'Podiatrist', 'staff', '', '', '', '0000-00-00', '', '', '', ''),
('S', 00011, 'Jesse Pinkman', 'jesse@staff.jjj.com', '1234', 'Staff', 'Neurologist', 'staff', '011-125-1617', 'Male', '9809 Margo Street, Albuquerque, New Mexico', '1996-02-06', '', '', 'Been working here for 10 years. Love the people here.', 'Phd in Neurologist, PhD in Chemistry'),
('S', 00012, 'Hank Schrader', 'hank@staff.jjj.com', '1234', 'Doctor', 'Endocrinologist', 'staff', '', '', '', '0000-00-00', '', '', '', ''),
('S', 00013, 'Sasuke Uchiha', 'sasuke@staff.jjj.com', '1234', 'Doctor', 'Neurologist', 'staff', '', '', '', '0000-00-00', '', '', '', ''),
('S', 00014, 'Naruto Uzumaki', 'naruto@staff.jjj.com', '1234', 'Staff', 'Rheumatologist', 'staff', '', '', '', '0000-00-00', '', '', '', ''),
('S', 00015, 'Joseph Sterling', 'joseph@staff.jjj.com', '1234', 'Doctor', 'Endocrinologist', 'staff', '', '', '', '0000-00-00', '', '', '', '');

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
('U', 00003, 'Johan Harris', 'jo@gmail.com', '1234', 'user', '2022-03-09', '011-10000000', 'Female', '2002-10-16', '32, USJ 12/2D , Subang Jaya'),
('U', 00004, 'Zhilong', 'zhi@gmail.com', '1234', 'user', '2022-03-16', '', '', '0000-00-00', ''),
('U', 00038, 'Bradley Beal', 'bradleybeal@gmail.com', '1234', 'user', '2022-04-08', '', '', '0000-00-00', ''),
('U', 00039, 'Kirito', 'kirito@gmail.com', '1234', 'user', '2022-04-08', '', '', '0000-00-00', ''),
('U', 00041, 'Chris Rock ', 'chrisrock@gmail.com', '1234', 'user', '2022-04-08', '', '', '0000-00-00', ''),
('U', 00042, 'Keane', 'keane@gmail.com', '1234', 'user', '2022-04-08', '', '', '0000-00-00', ''),
('U', 00043, 'Rick Sanchez', 'rick@gmail.com', '1234', 'user', '2022-04-08', '', '', '0000-00-00', ''),
('U', 00044, 'Marc Spector', 'marc@gmail.com', '1234', 'user', '2022-04-08', '', '', '0000-00-00', ''),
('U', 00045, 'Mr Knight', 'knight@gmail.com', '1234', 'user', '2022-04-08', '', '', '0000-00-00', '');

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
('V', 00012, '2022-04-29', '10:30:00', 'Johnson and Johnson', 'Scheduled', 00003);

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
  MODIFY `adminId` int(5) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `appointmentID` int(5) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `bed`
--
ALTER TABLE `bed`
  MODIFY `bedID` int(3) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `msgID` int(5) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `medrec`
--
ALTER TABLE `medrec`
  MODIFY `recID` int(5) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT for table `medstock`
--
ALTER TABLE `medstock`
  MODIFY `stockID` int(5) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `staffId` int(5) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userId` int(5) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `vaccine`
--
ALTER TABLE `vaccine`
  MODIFY `vaccineId` int(5) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

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
