-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 30, 2023 at 09:42 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `programming_center`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `student_id` int(11) NOT NULL,
  `student_name` varchar(20) NOT NULL,
  `course` varchar(10) NOT NULL,
  `teacher` varchar(30) NOT NULL,
  `date_time` datetime NOT NULL,
  `details` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`student_id`, `student_name`, `course`, `teacher`, `date_time`, `details`) VALUES
(90, 'haya', 'Cs390', 'Dr.kajal', '2022-05-20 15:23:00', 'assignment 568'),
(34561, 'haya naeka ', 'cs435', 'siti haris', '2022-05-25 15:33:00', 'assignment 568'),
(3910038, 'roaa eisa', 'Cs390', 'Aisha al-johani', '2022-05-21 14:21:00', 'assignment 568'),
(3910048, 'Haya Mahela', 'CS382', 'Kajal Khan', '2022-05-20 13:35:24', 'no details\r\n'),
(3910038, 'roaa eisa', 'CS101', 'siti haris', '2023-11-11 23:11:00', 'idk'),
(3910040, 'Haya Mahela', 'cs201', 'siti haris', '2023-05-31 06:55:00', 'struggling with node trees'),
(3910040, 'Haya Mahela', 'CS101', 'kajal Khan', '2023-11-11 11:11:00', 'idk'),
(3910012, 'Yomna Eisa', 'CS111', '', '2023-11-11 11:11:00', 'test'),
(3910012, 'Yomna Eisa', 'cs205', '', '2023-08-09 12:33:00', 'test'),
(3910012, 'Yomna Eisa', 'CS333', '', '2023-12-12 10:15:00', 'idk'),
(3910012, 'Yomna Eisa', 'CS232', '', '2023-12-29 11:15:00', 'TEST '),
(3910012, 'Yomna Eisa', 'CS111', 'Aisha al-johani', '2023-12-10 11:11:00', 'test'),
(3910012, 'Yomna Eisa', 'CS290', 'kajal Khan', '2023-12-12 11:15:00', 'lets test this');

-- --------------------------------------------------------

--
-- Table structure for table `login_admin`
--

CREATE TABLE `login_admin` (
  `admin_id` int(11) NOT NULL,
  `password` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login_admin`
--

INSERT INTO `login_admin` (`admin_id`, `password`) VALUES
(4444, 1234567890);

-- --------------------------------------------------------

--
-- Table structure for table `login_student`
--

CREATE TABLE `login_student` (
  `student_id` varchar(100) NOT NULL,
  `student_name` varchar(100) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login_student`
--

INSERT INTO `login_student` (`student_id`, `student_name`, `password`) VALUES
('3910012', 'Yomna Eisa', '1234567890');

-- --------------------------------------------------------

--
-- Table structure for table `login_teacher`
--

CREATE TABLE `login_teacher` (
  `teacher_id` int(4) NOT NULL,
  `teacher_name` varchar(30) NOT NULL,
  `password` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `login_volunteer`
--

CREATE TABLE `login_volunteer` (
  `volunteer_name` varchar(30) NOT NULL,
  `volunteer_id` int(10) NOT NULL,
  `password` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login_volunteer`
--

INSERT INTO `login_volunteer` (`volunteer_name`, `volunteer_id`, `password`) VALUES
('Haya Mahela', 3910048, 1234567890);

-- --------------------------------------------------------

--
-- Table structure for table `resources`
--

CREATE TABLE `resources` (
  `coursename` varchar(5) NOT NULL,
  `link` varchar(1000) NOT NULL,
  `id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `resources`
--

INSERT INTO `resources` (`coursename`, `link`, `id`) VALUES
('CS101', 'https://www.w3schools.in/c-tutorial/', 1),
('CS102', 'https://www.w3schools.com/java/default.asp', 2),
('CS203', 'https://www.tutorialspoint.com/assembly_programming/index.htm', 3),
('CS378', 'https://www.w3schools.com/html/html_css.asp', 4);

-- --------------------------------------------------------

--
-- Table structure for table `sessions_table`
--

CREATE TABLE `sessions_table` (
  `session_id` int(100) NOT NULL,
  `week_number` varchar(55) NOT NULL,
  `time` time NOT NULL,
  `place` varchar(30) NOT NULL,
  `course` varchar(55) NOT NULL,
  `teacher_id` int(4) NOT NULL,
  `teacher_name` varchar(30) NOT NULL,
  `participant` varchar(255) NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sessions_table`
--

INSERT INTO `sessions_table` (`session_id`, `week_number`, `time`, `place`, `course`, `teacher_id`, `teacher_name`, `participant`, `status`) VALUES
(1, '', '12:13:00', 'Programming center(A1-***)', 'CS401', 3910040, 'Dr. Kajal Khan', 'Yomna Eisa', 'Booked'),
(3, '', '11:10:00', 'Programming center(A1-***)', 'CS204', 3910012, 'Dr. Maya Ahmed', '', 'Booked'),
(4, '', '11:15:00', 'Programming center(A1-***)', 'CS383', 3910048, 'Haya Mahela', 'Yomna Eisa', 'Booked'),
(5, '', '09:15:00', 'Programming center(A1-***)', 'CS202', 3910048, 'Haya Mahela', 'Yomna Eisa', 'Booked');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `student id` int(7) NOT NULL,
  `student name` varchar(30) NOT NULL,
  `department` varchar(30) NOT NULL,
  `major` varchar(30) NOT NULL,
  `level` int(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `teacher id` int(4) NOT NULL,
  `teacher name` varchar(30) NOT NULL,
  `department` varchar(30) NOT NULL,
  `title` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`teacher id`, `teacher name`, `department`, `title`, `email`) VALUES
(1122, 'Kajal Khan', 'CSE', 'lecturer', 'Khan@rcyci.edu.sa');

-- --------------------------------------------------------

--
-- Table structure for table `volunteer`
--

CREATE TABLE `volunteer` (
  `name` varchar(30) NOT NULL,
  `ID` int(11) NOT NULL,
  `fromEmail` varchar(30) NOT NULL,
  `phone` int(11) NOT NULL,
  `CourseCode` varchar(10) NOT NULL,
  `grade` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `volunteer`
--

INSERT INTO `volunteer` (`name`, `ID`, `fromEmail`, `phone`, `CourseCode`, `grade`) VALUES
('Mohammed Eisa', 385009, 'Moham@gmail.com', 998876, 'CS67999', 'B+'),
('Fatima Mahela ', 3910988, 'fatima@gmail.com', 2398500, 'CS345', 'A+'),
('Haya Mahela', 390092, 'hayam@gmail.com', 998876, 'CS67999', 'B+'),
('saleh', 385009, 'hayam@gmail.com', 998876, 'CS67999', 'B+'),
('Haya Mahela', 390092, 'hayam@gmail.com', 998876, 'CS67999', 'B+'),
('Huda Mahela', 4090, 'hayam@gmail.com', 998876, 'CS67999', 'B+'),
('Huda Mahela', 4090, 'Moham@gmail.com', 998876, 'CS67999', 'B+'),
('Huda Mahela', 4090, 'Moham@gmail.com', 998876, 'CS67999', 'A+'),
('Huda Mahela', 4090, 'Moham@gmail.com', 998876, 'CS67999', 'B+'),
('Roaa eisa', 3910038, 'roaa@gmail.com', 998876, 'CS67999', 'A+'),
('Roaa eisa', 3910038, 'Moham@gmail.com', 998876, 'CS67999', 'B+'),
('Roaa eisa', 3910038, 'roaa@gmail.com', 998876, 'CS67999', 'B+'),
('Roaa eisa', 3910038, 'roaa@gmail.com', 998876, 'CS67999', 'A+'),
('Haya Mahela', 3910040, 'yomnaabelrahmaneisa@gmail.com', 2147483647, 'cs383', 'A+'),
('Yomna Eisa', 3910012, 'yomnaabelrahmaneisa@gmail.com', 557857693, 'CS102', 'A+'),
('Yomna Eisa', 31213, 'idk@gmail', 231231, 'CS205', 'A+'),
('Yomna Eisa', 31213, 'idk@gmail', 231231, 'CS205', 'A+'),
('Yomna Eisa', 31213, 'idk@gmail', 231231, 'CS205', 'A+'),
('Bushra Eisa', 1312, 'gg@gmail', 24234, 'cs332', 'A+'),
('Bushra Eisa', 1312, 'gg@gmail', 24234, 'cs332', 'A+'),
('Bushra Eisa', 1312, 'gg@gmail', 24234, 'cs332', 'A+'),
('Bushra Eisa', 1312, 'gg@gmail', 24234, 'cs332', 'A+'),
('Bushra eisa', 1312, 'idk@hotmail', 2312, 'VS333', 'C+'),
('Bushra eisa', 1312, 'idk@hotmail', 2312, 'VS333', 'C+'),
('Bushra eisa', 1314, 'idk@hotmail', 2312, 'VS333', 'C+'),
('Bushra eisa', 1313, 'idk@hotmail', 2312, 'VS333', 'C+'),
('Yomna Eisa', 12124, 'wewq@gmail', 243341, 'CS212', 'A+'),
('Yomna Eisa', 12123, 'wewq@gmail', 243341, 'CS212', 'A+'),
('Bushra eisa', 1312, 'idk@hotmail', 2312, 'VS333', 'C+');

-- --------------------------------------------------------

--
-- Table structure for table `volunteeringrequest`
--

CREATE TABLE `volunteeringrequest` (
  `name` text NOT NULL,
  `ID` int(35) NOT NULL,
  `fromEmail` varchar(100) NOT NULL,
  `phone` int(30) NOT NULL,
  `CourseCode` varchar(15) NOT NULL,
  `grade` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `volunteeringrequest`
--

INSERT INTO `volunteeringrequest` (`name`, `ID`, `fromEmail`, `phone`, `CourseCode`, `grade`) VALUES
('Dana Ali', 3912210, '3912210@stu.rcyci.edu', 559732047, 'CS203', 'A'),
('Yara Ahmed', 3910452, '3910452@stu.rcyci.edu', 551203223, 'CS401', 'A+'),
('Sumia Amjad', 4010023, '4010023@stu.rcyci.edu', 551203223, 'CS382', 'B+');

-- --------------------------------------------------------

--
-- Table structure for table `workshop`
--

CREATE TABLE `workshop` (
  `id` int(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `detail` varchar(100) NOT NULL,
  `presenter` varchar(90) NOT NULL,
  `date_time` datetime NOT NULL,
  `place` varchar(100) NOT NULL,
  `participant` varchar(100) NOT NULL,
  `room` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `workshop`
--

INSERT INTO `workshop` (`id`, `title`, `detail`, `presenter`, `date_time`, `place`, `participant`, `room`) VALUES
(2, 'Introduction to data anaylsis', 'data analysis using SQL and PowerBI', 'Yomna Eisa', '2023-06-04 14:00:00', 'YUC-F', '', 'A1-302'),
(3, 'UX design Principles ', 'Understand the basics of UX research, like planning research studies, conducting interviews and usab', 'Yomna Eisa', '2023-06-01 01:30:00', 'YUC-F', '', 'B0-101'),
(7, 'introduction to robotics', 'learn about the basics of robotics', 'Dr. leylah', '2023-06-07 12:00:00', 'YUC-F', 'Huda Mahela', 'A0-180');

-- --------------------------------------------------------

--
-- Table structure for table `workshoprequest`
--

CREATE TABLE `workshoprequest` (
  `ID` int(100) NOT NULL,
  `teacher_name` varchar(50) NOT NULL,
  `teacher_id` int(50) NOT NULL,
  `fromEmail` varchar(100) NOT NULL,
  `phone` int(50) NOT NULL,
  `details` varchar(200) NOT NULL,
  `title` varchar(50) NOT NULL,
  `date_time` datetime NOT NULL,
  `place` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `workshoprequest`
--

INSERT INTO `workshoprequest` (`ID`, `teacher_name`, `teacher_id`, `fromEmail`, `phone`, `details`, `title`, `date_time`, `place`) VALUES
(4, 'Yomna Eisa', 3910012, '3910012@stu.rcyci.edu.sa', 557857693, 'Understand the basics of UX research, like planning research studies, conducting interviews and usability studies.', 'UX design Principles ', '2023-06-01 01:30:00', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `resources`
--
ALTER TABLE `resources`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions_table`
--
ALTER TABLE `sessions_table`
  ADD PRIMARY KEY (`session_id`);

--
-- Indexes for table `workshop`
--
ALTER TABLE `workshop`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `workshoprequest`
--
ALTER TABLE `workshoprequest`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `resources`
--
ALTER TABLE `resources`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `sessions_table`
--
ALTER TABLE `sessions_table`
  MODIFY `session_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `workshop`
--
ALTER TABLE `workshop`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `workshoprequest`
--
ALTER TABLE `workshoprequest`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
