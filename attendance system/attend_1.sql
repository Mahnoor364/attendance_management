-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 02, 2018 at 06:21 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `attend`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `Attendance_Id` int(11) NOT NULL,
  `Course_Id` int(11) NOT NULL,
  `Student_Id` int(11) NOT NULL,
  `Session_Id` int(11) NOT NULL,
  `Attendance_Date` date NOT NULL,
  `Attendance_Time` time NOT NULL,
  `Status` enum('present','absent') NOT NULL,
  `Type` enum('normal','extra') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `Course_Id` int(11) NOT NULL,
  `Course_Code` varchar(10) NOT NULL,
  `Course_Name` varchar(255) NOT NULL,
  `Credit_Hours` int(11) NOT NULL,
  `Practical_Hours` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`Course_Id`, `Course_Code`, `Course_Name`, `Credit_Hours`, `Practical_Hours`) VALUES
(1, 'CT-153', 'Programming Languages', 3, 1),
(2, 'CT-158', 'Fundamentals of Information Technology', 2, 0),
(3, 'CT-162', 'Discrete Structures', 3, 0),
(4, 'CS-251', 'Logic Design and Switching Theory', 4, 1),
(5, 'CT-361', 'Artificial Intelligence and Expert Systems', 4, 1),
(6, 'CS-256', 'Computer Architecture and Organisation', 4, 1),
(7, 'CS-310', 'Micro Processors Application', 4, 1);

-- --------------------------------------------------------

--
-- Table structure for table `course_program`
--

CREATE TABLE `course_program` (
  `Course_Id` int(11) NOT NULL,
  `Program_Id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course_program`
--

INSERT INTO `course_program` (`Course_Id`, `Program_Id`) VALUES
(1, 1),
(1, 4),
(2, 1),
(2, 4),
(3, 1),
(3, 4),
(4, 1),
(4, 4),
(5, 1),
(5, 4);

-- --------------------------------------------------------

--
-- Table structure for table `course_student`
--

CREATE TABLE `course_student` (
  `Course_Id` int(11) NOT NULL,
  `Student_Id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course_student`
--

INSERT INTO `course_student` (`Course_Id`, `Student_Id`) VALUES
(1, 9),
(1, 10),
(1, 11),
(1, 12),
(1, 13),
(1, 14),
(1, 15),
(1, 16),
(1, 17),
(1, 18),
(1, 19),
(1, 20),
(1, 21),
(1, 22),
(1, 23),
(1, 24),
(1, 25),
(1, 26),
(1, 27),
(1, 28),
(2, 9),
(2, 10),
(2, 11),
(2, 12),
(2, 13),
(2, 14),
(2, 15),
(2, 16),
(2, 17),
(2, 18),
(2, 19),
(2, 20),
(2, 21),
(2, 22),
(2, 23),
(2, 24),
(2, 25),
(2, 26),
(2, 27),
(2, 28),
(3, 9),
(3, 10),
(3, 11),
(3, 12),
(3, 13),
(3, 14),
(3, 15),
(3, 16),
(3, 17),
(3, 18),
(3, 19),
(3, 20),
(3, 21),
(3, 22),
(3, 23),
(3, 24),
(3, 25),
(3, 26),
(3, 27),
(3, 28),
(4, 29),
(4, 30),
(4, 31),
(4, 32),
(4, 33),
(4, 34),
(4, 35),
(4, 36),
(4, 37),
(4, 38),
(4, 39),
(4, 40),
(4, 41),
(4, 42),
(4, 43),
(4, 44),
(4, 45),
(4, 46),
(4, 47),
(4, 48),
(5, 49),
(5, 50),
(5, 51),
(5, 52),
(5, 53),
(5, 54),
(5, 55),
(5, 56);

-- --------------------------------------------------------

--
-- Table structure for table `course_student_session`
--

CREATE TABLE `course_student_session` (
  `Course_Id` int(11) NOT NULL,
  `Student_Id` int(11) NOT NULL,
  `Session_Id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course_student_session`
--

INSERT INTO `course_student_session` (`Course_Id`, `Student_Id`, `Session_Id`) VALUES
(1, 9, 1),
(1, 10, 1),
(1, 11, 1),
(1, 12, 1),
(1, 13, 1),
(1, 14, 1),
(1, 15, 1),
(1, 16, 1),
(1, 17, 1),
(1, 18, 1),
(1, 19, 1),
(1, 20, 1),
(1, 21, 1),
(1, 22, 1),
(1, 23, 1),
(1, 24, 1),
(1, 25, 1),
(1, 26, 1),
(1, 27, 1),
(1, 28, 1),
(2, 9, 1),
(2, 10, 1),
(2, 11, 1),
(2, 12, 1),
(2, 13, 1),
(2, 14, 1),
(2, 15, 1),
(2, 16, 1),
(2, 17, 1),
(2, 18, 1),
(2, 19, 1),
(2, 20, 1),
(2, 21, 1),
(2, 22, 1),
(2, 23, 1),
(2, 24, 1),
(2, 25, 1),
(2, 26, 1),
(2, 27, 1),
(2, 28, 1),
(3, 9, 1),
(3, 10, 1),
(3, 11, 1),
(3, 12, 1),
(3, 13, 1),
(3, 14, 1),
(3, 15, 1),
(3, 16, 1),
(3, 17, 1),
(3, 18, 1),
(3, 19, 1),
(3, 20, 1),
(3, 21, 1),
(3, 22, 1),
(3, 23, 1),
(3, 24, 1),
(3, 25, 1),
(3, 26, 1),
(3, 27, 1),
(3, 28, 1),
(4, 29, 1),
(4, 30, 1),
(4, 31, 1),
(4, 32, 1),
(4, 33, 1),
(4, 34, 1),
(4, 35, 1),
(4, 36, 1),
(4, 37, 1),
(4, 38, 1),
(4, 39, 1),
(4, 40, 1),
(4, 41, 1),
(4, 42, 1),
(4, 43, 1),
(4, 44, 1),
(4, 45, 1),
(4, 46, 1),
(4, 47, 1),
(4, 48, 1),
(5, 49, 1),
(5, 50, 1),
(5, 51, 1),
(5, 52, 1),
(5, 53, 1),
(5, 54, 1),
(5, 55, 1),
(5, 56, 1);

-- --------------------------------------------------------

--
-- Table structure for table `course_teacher`
--

CREATE TABLE `course_teacher` (
  `Course_Id` int(11) NOT NULL,
  `Teacher_Id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course_teacher`
--

INSERT INTO `course_teacher` (`Course_Id`, `Teacher_Id`) VALUES
(1, 7),
(2, 2),
(3, 2),
(4, 7),
(5, 2);

-- --------------------------------------------------------

--
-- Table structure for table `course_teacher_session`
--

CREATE TABLE `course_teacher_session` (
  `Course_Id` int(11) NOT NULL,
  `Teacher_Id` int(11) NOT NULL,
  `Session_Id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course_teacher_session`
--

INSERT INTO `course_teacher_session` (`Course_Id`, `Teacher_Id`, `Session_Id`) VALUES
(1, 2, 1),
(1, 7, 1),
(4, 2, 1),
(4, 7, 1),
(5, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `Department_Id` int(11) NOT NULL,
  `Department_Name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`Department_Id`, `Department_Name`) VALUES
(1, 'Department of Computer Science and Information Technology'),
(2, 'Department of Software Engineering');

-- --------------------------------------------------------

--
-- Table structure for table `program`
--

CREATE TABLE `program` (
  `Program_Id` int(11) NOT NULL,
  `Program_Name` varchar(255) NOT NULL,
  `Program_Level` varchar(255) NOT NULL,
  `Department_Id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `program`
--

INSERT INTO `program` (`Program_Id`, `Program_Name`, `Program_Level`, `Department_Id`) VALUES
(1, 'Bachelors of Computer Science and Information Technology', 'Bachelors', 1),
(2, 'Masters of Computer Science and Information Technology', 'Masters', 1),
(3, 'Masters of Information Security', 'Masters', 1),
(4, 'Bachelors in Software Engineering', 'Bachelors', 2);

-- --------------------------------------------------------

--
-- Table structure for table `session`
--

CREATE TABLE `session` (
  `Session_Id` int(11) NOT NULL,
  `Semester` varchar(10) NOT NULL,
  `Year` smallint(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `session`
--

INSERT INTO `session` (`Session_Id`, `Semester`, `Year`) VALUES
(1, 'spring', 2018),
(2, 'fall', 2018),
(3, 'spring', 2017),
(4, 'fall', 2017);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `Student_Id` int(11) NOT NULL,
  `Enrollment_No` varchar(50) NOT NULL,
  `Student_Name` varchar(255) NOT NULL,
  `Father_Name` varchar(255) DEFAULT NULL,
  `Roll_No` varchar(10) NOT NULL,
  `Gender` varchar(10) DEFAULT NULL,
  `Student_Cell` varchar(255) DEFAULT NULL,
  `Parent_Cell` varchar(255) DEFAULT NULL,
  `Parent_Email` varchar(255) DEFAULT NULL,
  `Address` varchar(500) DEFAULT NULL,
  `Batch` varchar(10) DEFAULT NULL,
  `Section` int(11) DEFAULT NULL,
  `Program_Id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`Student_Id`, `Enrollment_No`, `Student_Name`, `Father_Name`, `Roll_No`, `Gender`, `Student_Cell`, `Parent_Cell`, `Parent_Email`, `Address`, `Batch`, `Section`, `Program_Id`) VALUES
(9, 'NED/0615/13-14', 'HIBA NUZHAT LODI', NULL, 'CT-001', NULL, NULL, NULL, NULL, NULL, '13-14', 1, 1),
(10, 'NED/2314/13-14', 'ZUBAIR AHMED', NULL, 'CT-002', NULL, NULL, NULL, NULL, NULL, '13-14', 1, 1),
(11, 'NED/0943/13-14', 'MUHAMMAD ADEEL', NULL, 'CT-003', NULL, NULL, NULL, NULL, NULL, '13-14', 1, 1),
(12, 'NED/0487/13-14', 'HAFIZ ABDUL AHAD', NULL, 'CT-004', NULL, NULL, NULL, NULL, NULL, '13-14', 1, 1),
(13, 'NED/0689/13-14', 'JUWAIRIA ASAD', NULL, 'CT-005', NULL, NULL, NULL, NULL, NULL, '13-14', 1, 1),
(14, 'NED/1408/13-14', 'NAEEM AKHTAR', NULL, 'CT-006', NULL, NULL, NULL, NULL, NULL, '13-14', 2, 1),
(15, 'NED/2175/13-14', 'UROOJ', NULL, 'CT-007', NULL, NULL, NULL, NULL, NULL, '13-14', 2, 1),
(16, 'NED/1716/13-14', 'SHAFIQUE AHMED', NULL, 'CT-008', NULL, NULL, NULL, NULL, NULL, '13-14', 2, 1),
(17, 'NED/0044/13-14', 'ABDUL SAMAD', NULL, 'CT-009', NULL, NULL, NULL, NULL, NULL, '13-14', 2, 1),
(18, 'NED/0108/13-14', 'AHMED SHAHZEB', NULL, 'CT-010', NULL, NULL, NULL, NULL, NULL, '13-14', 2, 1),
(19, 'NED/0162/13-14', 'AMEEN FAROOQ', NULL, 'SE-032', NULL, NULL, NULL, NULL, NULL, '13-14', 1, 4),
(20, 'NED/1082/13-14', 'MUHAMMAD HARIS ALI', NULL, 'SE-033', NULL, NULL, NULL, NULL, NULL, '13-14', 1, 4),
(21, 'NED/1696/13-14', 'SAQIB AHMED SULTAN', NULL, 'SE-034', NULL, NULL, NULL, NULL, NULL, '13-14', 1, 4),
(22, 'NED/0975/13-14', 'MUHAMMAD ALI RAZA', NULL, 'SE-035', NULL, NULL, NULL, NULL, NULL, '13-14', 1, 4),
(23, 'NED/1103/13-14', 'MUHAMMAD HASSAN', NULL, 'SE-036', NULL, NULL, NULL, NULL, NULL, '13-14', 1, 4),
(24, 'NED/2161/13-14', 'UMAIS ABDULL BAQI', NULL, 'SE-037', NULL, NULL, NULL, NULL, NULL, '13-14', 2, 4),
(25, 'NED/0441/13-14', 'FARYAL FAROOQUE', NULL, 'SE-038', NULL, NULL, NULL, NULL, NULL, '13-14', 2, 4),
(26, 'NED/1258/13-14', 'MUHAMMAD SOBAN', NULL, 'SE-039', NULL, NULL, NULL, NULL, NULL, '13-14', 2, 4),
(27, 'NED/2317/13-14', 'ZUBIYA MAIRAJ', NULL, 'SE-040', NULL, NULL, NULL, NULL, NULL, '13-14', 2, 4),
(28, 'NED/0255/13-14', 'ASHER MEHMOOD', NULL, 'SE-041', NULL, NULL, NULL, NULL, NULL, '13-14', 2, 4),
(29, 'NED/1743/13-14', 'SHAHZAD AHMED KHAN', NULL, 'CT-011', NULL, NULL, NULL, NULL, NULL, '12-13', 1, 1),
(30, 'NED/1150/13-14', 'MUHAMMAD MEHMOOD BAWANY', NULL, 'CT-012', NULL, NULL, NULL, NULL, NULL, '12-13', 1, 1),
(31, 'NED/0101/13-14', 'AHMED HASAN KHAN', NULL, 'CT-013', NULL, NULL, NULL, NULL, NULL, '12-13', 1, 1),
(32, 'NED/0046/13-14', 'ABDUL SAMI SHAIKH', NULL, 'CT-014', NULL, NULL, NULL, NULL, NULL, '12-13', 1, 1),
(33, 'NED/1936/13-14', 'SYED MUHAMMAD IBRAHIM ABBAS', NULL, 'CT-015', NULL, NULL, NULL, NULL, NULL, '12-13', 1, 1),
(34, 'NED/2120/13-14', 'TALHA KHAN KHERO', NULL, 'CT-016', NULL, NULL, NULL, NULL, NULL, '12-13', 1, 1),
(35, 'NED/1358/13-14', 'MUHAMMAD ZUBAIR SHAKIR', NULL, 'CT-017', NULL, NULL, NULL, NULL, NULL, '12-13', 1, 1),
(36, 'NED/2261/13-14', 'YOUSAF RAZA', NULL, 'CT-018', NULL, NULL, NULL, NULL, NULL, '12-13', 1, 1),
(37, 'NED/1332/13-14', 'MUHAMMAD WAQAS SALEEM', NULL, 'CT-020', NULL, NULL, NULL, NULL, NULL, '12-13', 1, 1),
(38, 'NED/0549/13-14', 'HAMMAD AKBAR', NULL, 'CT-021', NULL, NULL, NULL, NULL, NULL, '12-13', 2, 1),
(39, 'NED/1008/13-14', 'MUHAMMAD ASIF ASHRAF', NULL, 'CT-022', NULL, NULL, NULL, NULL, NULL, '12-13', 2, 1),
(40, 'NED/1952/13-14', 'SYED MUHAMMAD SAFDAR RAZA RIZVI', NULL, 'CT-023', NULL, NULL, NULL, NULL, NULL, '12-13', 2, 1),
(41, 'NED/1127/13-14', 'MUHAMMAD ISHAQUE', NULL, 'CT-024', NULL, NULL, NULL, NULL, NULL, '12-13', 2, 1),
(42, 'NED/1033/13-14', 'MUHAMMAD BILAL RAZA', NULL, 'CT-025', NULL, NULL, NULL, NULL, NULL, '12-13', 2, 1),
(43, 'NED/0817/13-14', 'MARIAM MAHMOOD', NULL, 'CT-026', NULL, NULL, NULL, NULL, NULL, '12-13', 2, 1),
(44, 'NED/0838/13-14', 'MARYAM MUNIR', NULL, 'CT-027', NULL, NULL, NULL, NULL, NULL, '12-13', 2, 1),
(45, 'NED/0415/13-14', 'FALAK MAHER KHAN', NULL, 'CT-028', NULL, NULL, NULL, NULL, NULL, '12-13', 2, 1),
(46, 'NED/0885/13-14', 'MOHAMMAD ANAS SHUJA', NULL, 'CT-029', NULL, NULL, NULL, NULL, NULL, '12-13', 2, 1),
(47, 'NED/1735/13-14', 'SHAHRIYAR KHAN', NULL, 'CT-030', NULL, NULL, NULL, NULL, NULL, '12-13', 2, 1),
(48, 'NED/2047/13-14', 'SYED ZAIN MASOOD', NULL, 'CT-031', NULL, NULL, NULL, NULL, NULL, '12-13', 2, 1),
(49, 'NED/1206/13-14', 'MUHAMMAD RAMIZ BAIG', NULL, 'SE-042', NULL, NULL, NULL, NULL, NULL, '12-13', 1, 4),
(50, 'NED/0408/13-14', 'FAIZAN FEROZ', NULL, 'SE-043', NULL, NULL, NULL, NULL, NULL, '12-13', 1, 4),
(51, 'NED/0231/13-14', 'ARIBA SHAKIL', NULL, 'SE-044', NULL, NULL, NULL, NULL, NULL, '12-13', 1, 4),
(52, 'NED/0938/13-14', 'MUHAMMAD ABDULLAH ALI KHAN', NULL, 'SE-045', NULL, NULL, NULL, NULL, NULL, '12-13', 1, 4),
(53, 'NED/0110/13-14', 'AHMER NASEER KHAN', NULL, 'SE-046', NULL, NULL, NULL, NULL, NULL, '12-13', 2, 4),
(54, 'NED/0804/13-14', 'MANAHIL LAILA', NULL, 'SE-047', NULL, NULL, NULL, NULL, NULL, '12-13', 2, 4),
(55, 'NED/1348/13-14', 'MUHAMMAD YOUSUF SIDDIQUI', NULL, 'SE-048', NULL, NULL, NULL, NULL, NULL, '12-13', 2, 4),
(56, 'NED/0082/13-14', 'ADNAN SAMI', NULL, 'SE-049', NULL, NULL, NULL, NULL, NULL, '12-13', 2, 4);

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `Teacher_Id` int(11) NOT NULL,
  `Employee_Id` varchar(255) NOT NULL,
  `Teacher_Name` varchar(255) NOT NULL,
  `Father_Name` varchar(255) DEFAULT NULL,
  `Gender` varchar(10) DEFAULT NULL,
  `Cell_No` varchar(255) DEFAULT NULL,
  `Email` varchar(255) NOT NULL,
  `PasswordHash` varchar(255) NOT NULL,
  `Address` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`Teacher_Id`, `Employee_Id`, `Teacher_Name`, `Father_Name`, `Gender`, `Cell_No`, `Email`, `PasswordHash`, `Address`) VALUES
(1, 'NED-0000-12121', 'Admin', 'Admin', 'female', '03244414111', 'admin@ned.com', '$2y$10$XoEjYfApNPMjYhMXt50nbefgRgxuNvbz5RYDF8W8OtDXwSd/QW12y', 'House No. 111-B, Some PLace'),
(2, 'NED-0001-22121', 'N khan', 'Ajmal Khan', 'male', '03200414111', 'nkhan@ned.com', '$2y$10$DTwE7cWoW6ZOrlRSqDT7Zu6e5m.NdE9M0.2tQTQwEeejoxZ3jq7F.', 'House No. 111-B, Staff Colony'),
(3, 'NED-0002-32121', 'Shameer Khan', 'Zakir Khan', 'male', '03244004111', 'shameer243@ned.com', '10005', 'House No. 111-B, Malir Cantt'),
(4, 'NED-0003-42121', 'Zahid Rajput', 'Shahid Rajput', 'male', '03244414781', 'zahidrajput@ned.com', '12789', 'House No. 111-B, Askari 4'),
(5, 'NED-0004-52121', 'Samar Tariq', 'Tariq Butt', 'female', '03084414111', 'samarbutt@ned.com', '92785', 'House No. 111-B, Gulshan-e-Jauhar'),
(6, 'NED-0005-62121', 'Ahsan Khalid', 'Khalid Siddiq', 'male', '03114414111', 'khalidahsan@ned.com', '92309', 'House No. 111-B, Gulshan-e-Mymar'),
(7, 'NED-0006-72121', 'Wahab', 'Wahab', 'male', '03244414111', 'wahab@ned.com', '$2y$10$kVL9x6m8xF4e5pY/rZNeL.Ajk/zM3sHD9FdsSw9I8AU2Yry98c9eq', 'House No. 111-B, KUECHS');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`Attendance_Id`),
  ADD KEY `Session_Id` (`Session_Id`,`Course_Id`,`Student_Id`),
  ADD KEY `Course_Id` (`Course_Id`,`Student_Id`,`Session_Id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`Course_Id`);

--
-- Indexes for table `course_program`
--
ALTER TABLE `course_program`
  ADD PRIMARY KEY (`Course_Id`,`Program_Id`),
  ADD KEY `Program_Id` (`Program_Id`);

--
-- Indexes for table `course_student`
--
ALTER TABLE `course_student`
  ADD PRIMARY KEY (`Course_Id`,`Student_Id`),
  ADD KEY `Student_Id` (`Student_Id`);

--
-- Indexes for table `course_student_session`
--
ALTER TABLE `course_student_session`
  ADD PRIMARY KEY (`Course_Id`,`Student_Id`,`Session_Id`),
  ADD KEY `Course_Id` (`Course_Id`,`Student_Id`),
  ADD KEY `Session_Id` (`Session_Id`),
  ADD KEY `Student_Id` (`Student_Id`);

--
-- Indexes for table `course_teacher`
--
ALTER TABLE `course_teacher`
  ADD PRIMARY KEY (`Course_Id`,`Teacher_Id`),
  ADD KEY `Teacher_Id` (`Teacher_Id`);

--
-- Indexes for table `course_teacher_session`
--
ALTER TABLE `course_teacher_session`
  ADD PRIMARY KEY (`Course_Id`,`Teacher_Id`,`Session_Id`),
  ADD KEY `Course_Id` (`Course_Id`,`Teacher_Id`),
  ADD KEY `Session_Id` (`Session_Id`),
  ADD KEY `Teacher_Id` (`Teacher_Id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`Department_Id`);

--
-- Indexes for table `program`
--
ALTER TABLE `program`
  ADD PRIMARY KEY (`Program_Id`),
  ADD KEY `FOREIGN` (`Department_Id`);

--
-- Indexes for table `session`
--
ALTER TABLE `session`
  ADD PRIMARY KEY (`Session_Id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`Student_Id`),
  ADD KEY `FOREIGN` (`Program_Id`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`Teacher_Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `Attendance_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `Course_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `Department_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `program`
--
ALTER TABLE `program`
  MODIFY `Program_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `session`
--
ALTER TABLE `session`
  MODIFY `Session_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `Student_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `Teacher_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `attendance`
--
ALTER TABLE `attendance`
  ADD CONSTRAINT `attendance_ibfk_1` FOREIGN KEY (`Course_Id`,`Student_Id`,`Session_Id`) REFERENCES `course_student_session` (`Course_Id`, `Student_Id`, `Session_Id`);

--
-- Constraints for table `course_program`
--
ALTER TABLE `course_program`
  ADD CONSTRAINT `course_program_ibfk_1` FOREIGN KEY (`Course_Id`) REFERENCES `course` (`Course_Id`),
  ADD CONSTRAINT `course_program_ibfk_2` FOREIGN KEY (`Program_Id`) REFERENCES `program` (`Program_Id`);

--
-- Constraints for table `course_student`
--
ALTER TABLE `course_student`
  ADD CONSTRAINT `course_student_ibfk_1` FOREIGN KEY (`Course_Id`) REFERENCES `course` (`Course_Id`),
  ADD CONSTRAINT `course_student_ibfk_2` FOREIGN KEY (`Student_Id`) REFERENCES `student` (`Student_Id`);

--
-- Constraints for table `course_student_session`
--
ALTER TABLE `course_student_session`
  ADD CONSTRAINT `course_student_session_ibfk_2` FOREIGN KEY (`Session_Id`) REFERENCES `session` (`Session_Id`),
  ADD CONSTRAINT `course_student_session_ibfk_3` FOREIGN KEY (`Course_Id`) REFERENCES `course` (`Course_Id`),
  ADD CONSTRAINT `course_student_session_ibfk_4` FOREIGN KEY (`Student_Id`) REFERENCES `student` (`Student_Id`);

--
-- Constraints for table `course_teacher`
--
ALTER TABLE `course_teacher`
  ADD CONSTRAINT `course_teacher_ibfk_1` FOREIGN KEY (`Course_Id`) REFERENCES `course` (`Course_Id`),
  ADD CONSTRAINT `course_teacher_ibfk_2` FOREIGN KEY (`Teacher_Id`) REFERENCES `teacher` (`Teacher_Id`);

--
-- Constraints for table `course_teacher_session`
--
ALTER TABLE `course_teacher_session`
  ADD CONSTRAINT `course_teacher_session_ibfk_2` FOREIGN KEY (`Session_Id`) REFERENCES `session` (`Session_Id`),
  ADD CONSTRAINT `course_teacher_session_ibfk_3` FOREIGN KEY (`Course_Id`) REFERENCES `course` (`Course_Id`),
  ADD CONSTRAINT `course_teacher_session_ibfk_4` FOREIGN KEY (`Teacher_Id`) REFERENCES `teacher` (`Teacher_Id`);

--
-- Constraints for table `program`
--
ALTER TABLE `program`
  ADD CONSTRAINT `Foreign_key_to_department` FOREIGN KEY (`Department_Id`) REFERENCES `department` (`Department_Id`);

--
-- Constraints for table `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `student_ibfk_1` FOREIGN KEY (`Program_Id`) REFERENCES `program` (`Program_Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
