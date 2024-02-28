-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 28, 2024 at 09:02 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `covid-19 vms`
--

-- --------------------------------------------------------

--
-- Table structure for table `liveupdates`
--

CREATE TABLE `liveupdates` (
  `S.no` int(10) NOT NULL,
  `District` varchar(20) DEFAULT NULL,
  `Infected` int(20) DEFAULT NULL,
  `Cured` int(20) DEFAULT NULL,
  `Deceased` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `liveupdates`
--

INSERT INTO `liveupdates` (`S.no`, `District`, `Infected`, `Cured`, `Deceased`) VALUES
(1, 'Chennai', 23, 4357, 0),
(2, 'Thiruvallur', 2, 2884, 0),
(3, 'Chengalpattu', 6, 5203, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbladmin`
--

CREATE TABLE `tbladmin` (
  `ID` int(11) NOT NULL,
  `AdminName` varchar(120) DEFAULT NULL,
  `AdminuserName` varchar(20) NOT NULL,
  `MobileNumber` int(10) NOT NULL,
  `Email` varchar(120) NOT NULL,
  `Password` varchar(120) DEFAULT NULL,
  `AdminRegdate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbladmin`
--

INSERT INTO `tbladmin` (`ID`, `AdminName`, `AdminuserName`, `MobileNumber`, `Email`, `Password`, `AdminRegdate`) VALUES
(1, 'admin', 'admin', 1234567891, '123@gmail.com', '6f7a9b385dc9c9947bb051ea2cd0c0a5', '2022-01-14 14:20:06');

-- --------------------------------------------------------

--
-- Table structure for table `tblpatients`
--

CREATE TABLE `tblpatients` (
  `ID` int(11) NOT NULL,
  `FullName` varchar(120) DEFAULT NULL,
  `MobileNumber` bigint(12) DEFAULT NULL,
  `DateOfBirth` date DEFAULT NULL,
  `GovtIssuedId` varchar(150) DEFAULT NULL,
  `GovtIssuedIdNo` varchar(150) DEFAULT NULL,
  `FullAddress` varchar(255) DEFAULT NULL,
  `State` varchar(200) DEFAULT NULL,
  `RegistrationDate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tblphlebotomist`
--

CREATE TABLE `tblphlebotomist` (
  `id` int(11) NOT NULL,
  `EmpID` varchar(100) DEFAULT NULL,
  `FullName` varchar(120) DEFAULT NULL,
  `MobileNumber` bigint(12) DEFAULT NULL,
  `RegDate` timestamp NULL DEFAULT current_timestamp(),
  `Password` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblphlebotomist`
--

INSERT INTO `tblphlebotomist` (`id`, `EmpID`, `FullName`, `MobileNumber`, `RegDate`, `Password`) VALUES
(1, 'E20220083', 'Rajesh', 1234567891, '2022-01-17 14:21:26', '8f9bfe9d1345237cb3b2b205864da075');

-- --------------------------------------------------------

--
-- Table structure for table `tblreporttracking`
--

CREATE TABLE `tblreporttracking` (
  `id` int(11) NOT NULL,
  `OrderNumber` bigint(40) DEFAULT NULL,
  `Remark` varchar(255) DEFAULT NULL,
  `Status` varchar(120) DEFAULT NULL,
  `PostingTime` timestamp NULL DEFAULT current_timestamp(),
  `RemarkBy` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblreporttracking`
--

INSERT INTO `tblreporttracking` (`id`, `OrderNumber`, `Remark`, `Status`, `PostingTime`, `RemarkBy`) VALUES
(56, 959527719, 'On the Way for Vaccination', 'On the Way', '2022-03-08 16:03:56', 1),
(57, 959527719, 'Successfully Vaccinated First Dose', 'Vaccinated', '2022-03-08 16:04:46', 1),
(58, 154469953, 'dd', 'On the Way', '2022-03-11 15:35:07', 1),
(59, 196377206, 'we will contact you, when arrived', 'On the Way', '2022-03-16 07:30:15', 1),
(60, 196377206, 'Take rest. Drink plenty of water, Avoid drinking and smoking after Vaccinated.', 'Vaccinated', '2022-03-16 07:37:02', 1),
(61, 250361886, 'we will contact you, when arrived', 'On the Way', '2022-03-16 09:34:34', 1),
(62, 250361886, 'Take rest. Drink plenty of water, Avoid drinking and smoking after Vaccinated.', 'Vaccinated', '2022-03-16 09:39:23', 1),
(63, 454041625, 'I will call you once reached at the destination', 'On the Way', '2022-05-06 09:11:41', 1),
(64, 999628173, 'hi', 'On the Way', '2022-05-06 09:25:36', 1),
(65, 999628173, 'hi dude', 'Vaccinated', '2022-05-06 09:28:08', 1),
(66, 725432626, 'hi macho', 'On the Way', '2022-05-06 09:32:00', 1),
(67, 725432626, 'lets nacho', 'Vaccinated', '2022-05-06 09:32:15', 1),
(68, 265529586, 'we will call you once reached at your Destination.', 'On the Way', '2022-05-06 09:38:19', 1),
(69, 265529586, 'Take rest , Drink Plenty of Water !', 'Vaccinated', '2022-05-06 09:39:54', 1),
(70, 703170908, 'we will call you once reached the destination', 'On the Way', '2022-05-06 09:54:22', 1),
(71, 703170908, 'Take rest , Drink Plenty of water !', 'Vaccinated', '2022-05-06 09:55:56', 1),
(72, 231969701, 'we will be there on time !!', 'On the Way', '2024-02-28 07:51:06', 1),
(73, 231969701, 'Hooray !! ', 'Vaccinated', '2024-02-28 07:52:20', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbltestrecord`
--

CREATE TABLE `tbltestrecord` (
  `ID` int(11) NOT NULL,
  `OrderNumber` bigint(14) DEFAULT NULL,
  `PatientMobileNumber` bigint(14) DEFAULT NULL,
  `Vaccine Type` varchar(100) DEFAULT NULL,
  `VaccineTimeSlot` varchar(120) DEFAULT NULL,
  `ReportStatus` varchar(100) DEFAULT NULL,
  `FinalReport` varchar(150) DEFAULT NULL,
  `ReportUploadTime` varchar(200) DEFAULT NULL,
  `RegistrationDate` timestamp NULL DEFAULT current_timestamp(),
  `AssignedtoEmpId` varchar(150) DEFAULT NULL,
  `AssigntoName` varchar(180) DEFAULT NULL,
  `AssignedTime` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tblupdates`
--

CREATE TABLE `tblupdates` (
  `Id` int(11) NOT NULL,
  `Testcases` varchar(90) NOT NULL,
  `TotalCases` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblupdates`
--

INSERT INTO `tblupdates` (`Id`, `Testcases`, `TotalCases`) VALUES
(1, 'Jan10', 530),
(2, 'Jan11', 700),
(3, 'Jan12', 800),
(4, 'Jan13', 950),
(5, 'Jan14', 1000),
(6, 'Jan15', 1200),
(7, 'Jan16', 1400),
(8, 'Jan17', 1600),
(9, 'Jan18', 1500),
(10, 'Jan19', 1300),
(11, 'Jan20', 1100),
(12, 'Jan21', 1000),
(13, 'Jan22', 900),
(14, 'Jan23', 800);

-- --------------------------------------------------------

--
-- Table structure for table `tblvacrecords`
--

CREATE TABLE `tblvacrecords` (
  `ID` int(11) NOT NULL,
  `OrderNumber` bigint(14) DEFAULT NULL,
  `PatientMobileNumber` bigint(14) DEFAULT NULL,
  `VaccineType` varchar(100) DEFAULT NULL,
  `Dosage` varchar(30) DEFAULT NULL,
  `VaccineTimeSlot` varchar(120) DEFAULT NULL,
  `ReportStatus` varchar(100) DEFAULT NULL,
  `FinalReport` varchar(150) DEFAULT NULL,
  `ReportUploadTime` varchar(200) DEFAULT NULL,
  `RegistrationDate` timestamp NULL DEFAULT current_timestamp(),
  `AssignedtoEmpId` varchar(150) DEFAULT NULL,
  `AssigntoName` varchar(180) DEFAULT NULL,
  `AssignedTime` varchar(100) DEFAULT NULL,
  `ActionBy` varchar(180) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblvacrecords`
--

INSERT INTO `tblvacrecords` (`ID`, `OrderNumber`, `PatientMobileNumber`, `VaccineType`, `Dosage`, `VaccineTimeSlot`, `ReportStatus`, `FinalReport`, `ReportUploadTime`, `RegistrationDate`, `AssignedtoEmpId`, `AssigntoName`, `AssignedTime`, `ActionBy`) VALUES
(58, 959527719, 9876576543, 'Covishield', 'First Dose', '2022-03-10T10:00', 'Vaccinated', NULL, NULL, '2022-03-08 15:58:34', 'E20220083', 'Rajesh', '08-03-2022 09:32:06 PM', ''),
(61, 196377206, 9857463631, 'Covishield', 'First Dose', '2022-03-23T12:00', 'Vaccinated', NULL, NULL, '2022-03-16 07:12:02', 'E20220083', 'Rajesh', '16-03-2022 12:55:29 PM', ''),
(62, 250361886, 9857463632, 'Covishield', 'First Dose', '2022-03-23T15:00', 'Vaccinated', NULL, NULL, '2022-03-16 09:30:38', 'E20220083', 'Rajesh', '16-03-2022 03:02:21 PM', ''),
(63, 454041625, 8756439542, 'Covishield', 'First Dose', '2022-05-18T10:00', 'Vaccinated', NULL, NULL, '2022-05-06 09:07:45', 'E20220083', 'Rajesh', '06-05-2022 02:39:58 PM', ''),
(64, 999628173, 8756439542, 'Covishield', 'Second Dose', '2022-05-14T14:54', 'Vaccinated', NULL, NULL, '2022-05-06 09:24:43', 'E20220083', 'Rajesh', '06-05-2022 02:55:09 PM', ''),
(65, 725432626, 8756439542, 'Covaxine', 'Booster Dose', '2022-05-13T14:59', 'Vaccinated', NULL, NULL, '2022-05-06 09:29:38', 'E20220083', 'Rajesh', '06-05-2022 03:00:01 PM', ''),
(68, 462730411, 7363547545, 'Covishield', 'First Dose', '2022-05-12T12:21', 'Assigned', NULL, NULL, '2022-05-11 06:53:47', 'E20220083', 'Rajesh', '11-05-2022 12:25:24 PM', NULL),
(69, 231969701, 7377337712, 'Covishield', 'First Dose', '2024-02-29T16:00', 'Vaccinated', NULL, NULL, '2024-02-28 07:31:00', 'E20220083', 'Rajesh', '28-02-2024 01:13:51 PM', '');

-- --------------------------------------------------------

--
-- Table structure for table `vacpatients`
--

CREATE TABLE `vacpatients` (
  `ID` int(11) NOT NULL,
  `FullName` varchar(120) CHARACTER SET latin1 DEFAULT NULL,
  `MobileNumber` bigint(12) DEFAULT NULL,
  `DateOfBirth` date DEFAULT NULL,
  `GovtIssuedId` varchar(150) CHARACTER SET latin1 DEFAULT NULL,
  `GovtIssuedIdNo` varchar(150) CHARACTER SET latin1 DEFAULT NULL,
  `Age` int(30) DEFAULT NULL,
  `Gender` varchar(30) DEFAULT NULL,
  `FullAddress` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `State` varchar(200) CHARACTER SET latin1 DEFAULT NULL,
  `RegistrationDate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vacpatients`
--

INSERT INTO `vacpatients` (`ID`, `FullName`, `MobileNumber`, `DateOfBirth`, `GovtIssuedId`, `GovtIssuedIdNo`, `Age`, `Gender`, `FullAddress`, `State`, `RegistrationDate`) VALUES
(43, 'Ganesh', 9876576543, '2001-11-06', 'Aadhar', '847565478365', 20, 'Male', 'No 10,Nehru Street, Ram Nagar, Ambattur ,Chennai - 53.', 'Tamil Nadu', '2022-03-08 15:57:17'),
(45, 'hi', 1234567891, '2022-03-24', 'VoterId', '847565478365', 18, 'Male', 'ss', 'Tamil Nadu', '2022-03-11 15:33:15'),
(46, 'Harish', 9857463631, '2001-06-13', 'Aadhar', '343565768345', 20, 'Male', 'No 10, Ganesh Street, Ram nagar, Mogappair , Chennai - 37.', 'Tamil Nadu', '2022-03-16 07:06:17'),
(47, 'Harish', 9857463632, '2001-06-20', 'Aadhar', '343565768345', 20, 'Male', 'No 10, Ganesh Street, Ram nagar, Mogappair , Chennai - 37.', 'Tamil Nadu', '2022-03-16 09:28:57'),
(48, 'Krish', 8756439542, '2022-03-10', 'Aadhar', '546734582345', 20, 'Male', 'No 10 , Nehru Street , Ram nagar , Ambattur , Chennai - 600053.', 'Tamil Nadu', '2022-05-06 09:03:39'),
(49, 'Krish', 9443563457, '2022-03-10', 'Aadhar', '234587563103', 20, 'Male', 'No 10 , Ram street , Nehru Nagar , Ambattur , Chennai - 600053.', 'Tamil Nadu', '2022-05-06 09:35:52'),
(50, 'Krish', 9845647832, '2000-03-10', 'Aadhar', '546487543478', 20, 'Male', 'No 10, Ram Street , Nehru Nagar , Ambattur , Chennai - 600053. ', 'Tamil Nadu', '2022-05-06 09:51:25'),
(51, 'ganesh ', 7363547545, '2000-03-08', 'Aadhar', '123456789123', 20, 'Male', 'NO 10, Ram street , Nehru nagar , Ambattur, Chennai -53.', 'Tamil Nadu', '2022-05-11 06:49:39'),
(52, 'Ganesh Moorthy', 7377337712, '2024-02-12', 'Aadhar', '232383883883', 20, 'Male', 'wewewewew', 'Tamil Nadu', '2024-02-28 07:30:06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `liveupdates`
--
ALTER TABLE `liveupdates`
  ADD PRIMARY KEY (`S.no`);

--
-- Indexes for table `tbladmin`
--
ALTER TABLE `tbladmin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblpatients`
--
ALTER TABLE `tblpatients`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblphlebotomist`
--
ALTER TABLE `tblphlebotomist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblreporttracking`
--
ALTER TABLE `tblreporttracking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbltestrecord`
--
ALTER TABLE `tbltestrecord`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblupdates`
--
ALTER TABLE `tblupdates`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `tblvacrecords`
--
ALTER TABLE `tblvacrecords`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `vacpatients`
--
ALTER TABLE `vacpatients`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `liveupdates`
--
ALTER TABLE `liveupdates`
  MODIFY `S.no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbladmin`
--
ALTER TABLE `tbladmin`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tblpatients`
--
ALTER TABLE `tblpatients`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tblphlebotomist`
--
ALTER TABLE `tblphlebotomist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tblreporttracking`
--
ALTER TABLE `tblreporttracking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT for table `tbltestrecord`
--
ALTER TABLE `tbltestrecord`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tblupdates`
--
ALTER TABLE `tblupdates`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tblvacrecords`
--
ALTER TABLE `tblvacrecords`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `vacpatients`
--
ALTER TABLE `vacpatients`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
