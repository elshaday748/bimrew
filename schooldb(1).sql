-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 11, 2025 at 05:53 PM
-- Server version: 11.5.2-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `schooldb`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `Attendance_id` int(11) NOT NULL,
  `Pupil_ID` int(11) DEFAULT NULL,
  `Class_ID` int(11) DEFAULT NULL,
  `Date` date DEFAULT NULL,
  `Status` varchar(10) DEFAULT NULL,
  `Remarks` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`Attendance_id`, `Pupil_ID`, `Class_ID`, `Date`, `Status`, `Remarks`) VALUES
(0, 7, 1, '2025-04-12', 'Absent', 'no'),
(1, 1, 1, '2025-04-01', 'Present', 'On time'),
(2, 2, 12, '2025-04-01', 'Late', 'Arrived 10 minutes late'),
(3, 3, 13, '2025-04-01', 'Absent', 'Sick leave'),
(4, 4, 14, '2025-04-01', 'Present', ''),
(5, 5, 40, '2025-04-01', 'Present', ''),
(6, 6, 41, '2025-04-01', 'Absent', 'Family emergency'),
(7, 7, 42, '2025-04-01', 'Present', ''),
(8, 8, 43, '2025-04-01', 'Present', ''),
(9, 9, 44, '2025-04-01', 'Late', 'Missed the bus'),
(10, 10, 45, '2025-04-01', 'Present', 'Excellent participation'),
(11, 1, 46, '2025-04-02', 'Present', ''),
(12, 2, 47, '2025-04-02', 'Present', '');

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `Class_id` int(11) NOT NULL,
  `Name` varchar(50) DEFAULT NULL,
  `Capacity` int(11) DEFAULT NULL,
  `Classroom_Number` int(11) DEFAULT NULL,
  `Class_Timetable` date DEFAULT NULL,
  `Class_Start_Date` date DEFAULT NULL,
  `Class_End_Date` date DEFAULT NULL,
  `Teacher_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`Class_id`, `Name`, `Capacity`, `Classroom_Number`, `Class_Timetable`, `Class_Start_Date`, `Class_End_Date`, `Teacher_id`) VALUES
(1, 'IT', 232, 0, '0000-00-00', '2025-04-01', '2025-04-11', 12),
(12, 'cs', 40, 21, '2025-04-02', '2025-04-02', '2025-04-30', 12),
(13, 'IT', 12, 2, '0000-00-00', '2025-04-17', '2025-04-11', 12),
(14, 'IT', 12, 2, '0000-00-00', '2025-04-17', '2025-04-11', 12),
(40, 'Reception', 30, 101, '2024-09-01', '2024-09-05', '2025-06-15', 12),
(41, 'Year 1', 32, 102, '2024-09-01', '2024-09-06', '2025-06-15', 16),
(42, 'Year 2', 28, 103, '2024-09-02', '2024-09-07', '2025-06-15', 17),
(43, 'Year 3', 35, 104, '2024-09-03', '2024-09-08', '2025-06-15', 18),
(44, 'Year 4', 30, 105, '2024-09-04', '2024-09-09', '2025-06-15', 19),
(45, 'Year 5', 33, 106, '2024-09-05', '2024-09-10', '2025-06-15', 20),
(46, 'Year 6', 31, 107, '2024-09-06', '2024-09-11', '2025-06-15', 21),
(47, 'Year 7', 29, 108, '2024-09-07', '2024-09-12', '2025-06-15', 22);

-- --------------------------------------------------------

--
-- Table structure for table `dinner_money`
--

CREATE TABLE `dinner_money` (
  `Payment_ID` int(11) NOT NULL,
  `Pupil_ID` int(11) DEFAULT NULL,
  `Amount` decimal(8,2) DEFAULT NULL,
  `Payment_Date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `exam`
--

CREATE TABLE `exam` (
  `Exam_ID` int(11) NOT NULL,
  `Exam_Name` varchar(50) DEFAULT NULL,
  `Subject_ID` int(11) DEFAULT NULL,
  `Class_ID` int(11) DEFAULT NULL,
  `Exam_Date` date DEFAULT NULL,
  `Exam_Duration` date DEFAULT NULL,
  `Total_Marks` decimal(10,2) DEFAULT NULL,
  `Teacher_ID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `exam_result`
--

CREATE TABLE `exam_result` (
  `Result_ID` int(11) NOT NULL,
  `Pupil_ID` int(11) DEFAULT NULL,
  `Exam_ID` int(11) DEFAULT NULL,
  `Marks_Obtained` decimal(10,2) DEFAULT NULL,
  `Grade` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `library_book`
--

CREATE TABLE `library_book` (
  `Book_ID` int(11) NOT NULL,
  `Title` varchar(100) DEFAULT NULL,
  `Author` varchar(100) DEFAULT NULL,
  `Issued_Date` date DEFAULT NULL,
  `Return_Date` date DEFAULT NULL,
  `Pupil_ID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`) VALUES
(1, 'Elsha', 'elsha123'),
(2, 'Elsa', '$2y$10$kGleQcTO5VCb1Q0NsfF53uErTypeKwwdexf8NnWwMROvu6BBLKLiq');

-- --------------------------------------------------------

--
-- Table structure for table `parents`
--

CREATE TABLE `parents` (
  `Parent_id` int(11) NOT NULL,
  `First_name` varchar(50) DEFAULT NULL,
  `Last_name` varchar(50) DEFAULT NULL,
  `Address` text NOT NULL,
  `Phone_number` varchar(15) NOT NULL,
  `Email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `parents`
--

INSERT INTO `parents` (`Parent_id`, `First_name`, `Last_name`, `Address`, `Phone_number`, `Email`) VALUES
(1, 'James', 'Anderson', '12 Oak Street, London', '07123456789', 'james.anderson@example.com'),
(2, 'Emily', 'Brown', '45 Maple Avenue, Manchester', '07234567890', 'emily.brown@example.com'),
(3, 'William', 'Clark', '89 High Road, Birmingham', '07345678901', 'william.clark@example.com'),
(4, 'Olivia', 'Davis', '21 Elm Lane, Bristol', '07456789012', 'olivia.davis@example.com'),
(5, 'Benjamin', 'Evans', '67 Pine Street, Leeds', '07567890123', 'benjamin.evans@example.com'),
(6, 'Charlotte', 'Foster', '34 Cedar Avenue, Sheffield', '07678901234', 'charlotte.foster@example.com'),
(7, 'Henry', 'Green', '90 Willow Road, Liverpool', '07789012345', 'henry.green@example.com'),
(8, 'Amelia', 'Hughes', '78 Birch Street, Newcastle', '07890123456', 'amelia.hughes@example.com'),
(9, 'George', 'Johnson', '56 Ash Lane, Nottingham', '07901234567', 'george.johnson@example.com'),
(10, 'Sophie', 'King', '23 Fir Avenue, Oxford', '07012345678', 'sophie.king@example.com');

-- --------------------------------------------------------

--
-- Table structure for table `pupils`
--

CREATE TABLE `pupils` (
  `Pupil_id` int(11) NOT NULL,
  `First_name` varchar(50) DEFAULT NULL,
  `Last_name` varchar(50) DEFAULT NULL,
  `Date_of_Birth` date DEFAULT NULL,
  `Gender` varchar(10) DEFAULT NULL,
  `Address` varchar(100) DEFAULT NULL,
  `Medical_History` varchar(100) DEFAULT NULL,
  `Admission_Date` date DEFAULT NULL,
  `Class_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pupils`
--

INSERT INTO `pupils` (`Pupil_id`, `First_name`, `Last_name`, `Date_of_Birth`, `Gender`, `Address`, `Medical_History`, `Admission_Date`, `Class_id`) VALUES
(1, 'James', 'Smith', '2012-05-14', 'M', '12 Oak Street, London', 'Asthma', '2019-09-01', 12),
(2, 'Olivia', 'Johnson', '2013-03-22', 'F', '89 Maple Road, Manchester', 'None', '2020-09-01', 12),
(3, 'Benjamin', 'Williams', '2011-12-10', 'M', '45 Elm Avenue, Leeds', 'Peanut allergy', '2018-09-01', 12),
(4, 'Sophia', 'Brown', '2014-07-18', 'F', '23 Pine Lane, Bristol', 'Diabetes', '2021-09-01', 12),
(5, 'Lucas', 'Jones', '2013-09-29', 'M', '17 Ash Court, Sheffield', 'None', '2020-09-01', 12),
(6, 'Emily', 'Davis', '2012-01-30', 'F', '10 Birch Close, Liverpool', 'Gluten intolerance', '2019-09-01', 12),
(7, 'Mason', 'Miller', '2014-02-14', 'M', '66 Cedar Street, Birmingham', 'None', '2021-09-01', 12),
(8, 'Isabella', 'Wilson', '2013-06-11', 'F', '90 Cherry Road, Newcastle', 'None', '2020-09-01', 12),
(9, 'Henry', 'Moore', '2012-11-02', 'M', '34 Oak Drive, Edinburgh', 'None', '2019-09-01', 12),
(10, 'Ava', 'Taylor', '2013-04-28', 'F', '56 Willow Street, Glasgow', 'Asthma', '2020-09-01', 12),
(11, 'James', 'Smith', '2012-05-14', 'M', '12 Oak Street, London', 'Asthma', '2019-09-01', 12),
(12, 'Olivia', 'Johnson', '2013-03-22', 'F', '89 Maple Road, Manchester', 'None', '2020-09-01', 12),
(13, 'Benjamin', 'Williams', '2011-12-10', 'M', '45 Elm Avenue, Leeds', 'Peanut allergy', '2018-09-01', 12),
(14, 'Sophia', 'Brown', '2014-07-18', 'F', '23 Pine Lane, Bristol', 'Diabetes', '2021-09-01', 12),
(15, 'Lucas', 'Jones', '2013-09-29', 'M', '17 Ash Court, Sheffield', 'None', '2020-09-01', 12),
(16, 'Emily', 'Davis', '2012-01-30', 'F', '10 Birch Close, Liverpool', 'Gluten intolerance', '2019-09-01', 12),
(17, 'Mason', 'Miller', '2014-02-14', 'M', '66 Cedar Street, Birmingham', 'None', '2021-09-01', 12),
(18, 'Isabella', 'Wilson', '2013-06-11', 'F', '90 Cherry Road, Newcastle', 'None', '2020-09-01', 12),
(19, 'Henry', 'Moore', '2012-11-02', 'M', '34 Oak Drive, Edinburgh', 'None', '2019-09-01', 12),
(20, 'Ava', 'Taylor', '2013-04-28', 'F', '56 Willow Street, Glasgow', 'Asthma', '2020-09-01', 12);

-- --------------------------------------------------------

--
-- Table structure for table `salaries`
--

CREATE TABLE `salaries` (
  `Salary_ID` int(11) NOT NULL,
  `Teacher_ID` int(11) DEFAULT NULL,
  `Amount` decimal(8,2) DEFAULT NULL,
  `Payment_Date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `school_registrations`
--

CREATE TABLE `school_registrations` (
  `Registration_ID` int(11) NOT NULL,
  `Pupil_ID` int(11) DEFAULT NULL,
  `Registration_Date` date DEFAULT NULL,
  `Previous_School` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `Subject_ID` int(11) NOT NULL,
  `Subject_Name` varchar(100) DEFAULT NULL,
  `Subject_Code` varchar(100) DEFAULT NULL,
  `Class_ID` int(11) DEFAULT NULL,
  `Subject_Description` varchar(100) DEFAULT NULL,
  `Teacher_ID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `Teacher_id` int(11) NOT NULL,
  `First_name` varchar(50) NOT NULL,
  `Last_name` varchar(50) NOT NULL,
  `Date_of_Birth` date DEFAULT NULL,
  `Gender` varchar(10) DEFAULT NULL,
  `Subjects_Taught` text DEFAULT NULL,
  `Address` text NOT NULL,
  `Phone_number` varchar(15) NOT NULL,
  `Years_of_Experience` int(11) DEFAULT NULL,
  `Annual_salary` decimal(10,2) NOT NULL,
  `Background_Check` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`Teacher_id`, `First_name`, `Last_name`, `Date_of_Birth`, `Gender`, `Subjects_Taught`, `Address`, `Phone_number`, `Years_of_Experience`, `Annual_salary`, `Background_Check`) VALUES
(12, 'haile', 'yismaw', '2016-04-07', 'Male', 'fgdfg', 'fgdfg', '0924138935', 5, 45666.00, 23),
(16, 'Alice', 'Watson', '1980-04-12', 'F', 'Math, Science', '12 Green Street, London', '07123456789', 12, 42000.00, 1),
(17, 'Mark', 'Thompson', '1978-11-22', 'M', 'English, History', '78 King Road, Manchester', '07234567890', 15, 46000.00, 1),
(18, 'Helen', 'Brown', '1985-06-30', 'F', 'Biology, Chemistry', '56 Hill Lane, Leeds', '07345678901', 10, 44000.00, 1),
(19, 'David', 'Clark', '1975-02-19', 'M', 'Geography, History', '34 Bridge Street, Bristol', '07456789012', 20, 48000.00, 1),
(20, 'Emily', 'Johnson', '1983-08-10', 'F', 'ICT, Physics', '90 West Avenue, Birmingham', '07567890123', 14, 45500.00, 1),
(21, 'Chris', 'Evans', '1981-03-25', 'M', 'Math, ICT', '23 Oak Road, Liverpool', '07678901234', 11, 43000.00, 1),
(22, 'Sarah', 'White', '1990-09-05', 'F', 'English, Drama', '67 Rose Street, Sheffield', '07789012345', 7, 41000.00, 1),
(23, 'James', 'Anderson', '1987-12-14', 'M', 'Art, PE', '45 Maple Drive, Newcastle', '07890123456', 9, 42500.00, 1);

-- --------------------------------------------------------

--
-- Table structure for table `teaching_assistant`
--

CREATE TABLE `teaching_assistant` (
  `TA_ID` int(11) NOT NULL,
  `First_Name` varchar(50) DEFAULT NULL,
  `Last_Name` varchar(50) DEFAULT NULL,
  `Class_ID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `teaching_assistant`
--

INSERT INTO `teaching_assistant` (`TA_ID`, `First_Name`, `Last_Name`, `Class_ID`) VALUES
(1, 'Lucy', 'Adams', 12),
(2, 'Tom', 'Walker', 40),
(3, 'Nina', 'Roberts', 41),
(4, 'Jake', 'Turner', 42),
(5, 'Anna', 'Scott', 43),
(6, 'Ryan', 'Mitchell', 44),
(7, 'Sophie', 'Green', 45),
(8, 'Daniel', 'Carter', 46),
(9, 'Ella', 'Price', 47);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`Attendance_id`),
  ADD KEY `Pupil_ID` (`Pupil_ID`),
  ADD KEY `Class_ID` (`Class_ID`);

--
-- Indexes for table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`Class_id`),
  ADD KEY `Teacher_id` (`Teacher_id`);

--
-- Indexes for table `dinner_money`
--
ALTER TABLE `dinner_money`
  ADD PRIMARY KEY (`Payment_ID`),
  ADD KEY `Pupil_ID` (`Pupil_ID`);

--
-- Indexes for table `exam`
--
ALTER TABLE `exam`
  ADD PRIMARY KEY (`Exam_ID`),
  ADD KEY `Subject_ID` (`Subject_ID`),
  ADD KEY `Class_ID` (`Class_ID`),
  ADD KEY `Teacher_ID` (`Teacher_ID`);

--
-- Indexes for table `exam_result`
--
ALTER TABLE `exam_result`
  ADD PRIMARY KEY (`Result_ID`),
  ADD KEY `Pupil_ID` (`Pupil_ID`),
  ADD KEY `Exam_ID` (`Exam_ID`);

--
-- Indexes for table `library_book`
--
ALTER TABLE `library_book`
  ADD PRIMARY KEY (`Book_ID`),
  ADD KEY `Pupil_ID` (`Pupil_ID`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `parents`
--
ALTER TABLE `parents`
  ADD PRIMARY KEY (`Parent_id`);

--
-- Indexes for table `pupils`
--
ALTER TABLE `pupils`
  ADD PRIMARY KEY (`Pupil_id`),
  ADD KEY `Class_id` (`Class_id`);

--
-- Indexes for table `salaries`
--
ALTER TABLE `salaries`
  ADD PRIMARY KEY (`Salary_ID`),
  ADD KEY `Teacher_ID` (`Teacher_ID`);

--
-- Indexes for table `school_registrations`
--
ALTER TABLE `school_registrations`
  ADD PRIMARY KEY (`Registration_ID`),
  ADD KEY `Pupil_ID` (`Pupil_ID`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`Subject_ID`),
  ADD KEY `Class_ID` (`Class_ID`),
  ADD KEY `Teacher_ID` (`Teacher_ID`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`Teacher_id`);

--
-- Indexes for table `teaching_assistant`
--
ALTER TABLE `teaching_assistant`
  ADD PRIMARY KEY (`TA_ID`),
  ADD KEY `Class_ID` (`Class_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `class`
--
ALTER TABLE `class`
  MODIFY `Class_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `parents`
--
ALTER TABLE `parents`
  MODIFY `Parent_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `pupils`
--
ALTER TABLE `pupils`
  MODIFY `Pupil_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `Teacher_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `attendance`
--
ALTER TABLE `attendance`
  ADD CONSTRAINT `attendance_ibfk_1` FOREIGN KEY (`Pupil_ID`) REFERENCES `pupils` (`Pupil_id`),
  ADD CONSTRAINT `attendance_ibfk_2` FOREIGN KEY (`Class_ID`) REFERENCES `class` (`Class_id`);

--
-- Constraints for table `class`
--
ALTER TABLE `class`
  ADD CONSTRAINT `class_ibfk_1` FOREIGN KEY (`Teacher_id`) REFERENCES `teacher` (`Teacher_id`);

--
-- Constraints for table `dinner_money`
--
ALTER TABLE `dinner_money`
  ADD CONSTRAINT `dinner_money_ibfk_1` FOREIGN KEY (`Pupil_ID`) REFERENCES `pupils` (`Pupil_id`);

--
-- Constraints for table `exam`
--
ALTER TABLE `exam`
  ADD CONSTRAINT `exam_ibfk_1` FOREIGN KEY (`Subject_ID`) REFERENCES `subject` (`Subject_ID`),
  ADD CONSTRAINT `exam_ibfk_2` FOREIGN KEY (`Class_ID`) REFERENCES `class` (`Class_id`),
  ADD CONSTRAINT `exam_ibfk_3` FOREIGN KEY (`Teacher_ID`) REFERENCES `teacher` (`Teacher_id`);

--
-- Constraints for table `exam_result`
--
ALTER TABLE `exam_result`
  ADD CONSTRAINT `exam_result_ibfk_1` FOREIGN KEY (`Pupil_ID`) REFERENCES `pupils` (`Pupil_id`),
  ADD CONSTRAINT `exam_result_ibfk_2` FOREIGN KEY (`Exam_ID`) REFERENCES `exam` (`Exam_ID`);

--
-- Constraints for table `library_book`
--
ALTER TABLE `library_book`
  ADD CONSTRAINT `library_book_ibfk_1` FOREIGN KEY (`Pupil_ID`) REFERENCES `pupils` (`Pupil_id`);

--
-- Constraints for table `pupils`
--
ALTER TABLE `pupils`
  ADD CONSTRAINT `pupils_ibfk_1` FOREIGN KEY (`Class_id`) REFERENCES `class` (`Class_id`);

--
-- Constraints for table `salaries`
--
ALTER TABLE `salaries`
  ADD CONSTRAINT `salaries_ibfk_1` FOREIGN KEY (`Teacher_ID`) REFERENCES `teacher` (`Teacher_id`);

--
-- Constraints for table `school_registrations`
--
ALTER TABLE `school_registrations`
  ADD CONSTRAINT `school_registrations_ibfk_1` FOREIGN KEY (`Pupil_ID`) REFERENCES `pupils` (`Pupil_id`);

--
-- Constraints for table `subject`
--
ALTER TABLE `subject`
  ADD CONSTRAINT `subject_ibfk_1` FOREIGN KEY (`Class_ID`) REFERENCES `class` (`Class_id`),
  ADD CONSTRAINT `subject_ibfk_2` FOREIGN KEY (`Teacher_ID`) REFERENCES `teacher` (`Teacher_id`);

--
-- Constraints for table `teaching_assistant`
--
ALTER TABLE `teaching_assistant`
  ADD CONSTRAINT `teaching_assistant_ibfk_1` FOREIGN KEY (`Class_ID`) REFERENCES `class` (`Class_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
