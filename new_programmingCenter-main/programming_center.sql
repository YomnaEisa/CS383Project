-- phpMyAdmin SQL Dump
-- version 5.3.0-dev+20220519.4c1c1fcc18
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 20, 2022 at 02:25 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.5

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
(3910048, 'Haya Mahela', 'CS382', 'Kajal Khan', '2022-05-20 13:35:24', 'no details\r\n');

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
(0, 9999);

-- --------------------------------------------------------

--
-- Table structure for table `login_student`
--

CREATE TABLE `login_student` (
  `student_id` varchar(30) NOT NULL,
  `student_name` varchar(30) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login_student`
--

INSERT INTO `login_student` (`student_id`, `student_name`, `password`) VALUES
('Yomna Eisa', '', '3910012'),
('Yomna Eisa', '', '3910012'),
('', '', ''),
('', '', ''),
('3910048', '', '1234'),
('', '', ''),
('4090', 'Huda Mahela', '1234'),
('3910040', 'Haya Mahela', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `login_teacher`
--

CREATE TABLE `login_teacher` (
  `teacher_id` int(4) NOT NULL,
  `teacher_name` varchar(30) NOT NULL,
  `password` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login_teacher`
--

INSERT INTO `login_teacher` (`teacher_id`, `teacher_name`, `password`) VALUES
(1122, 'Kajal Khan', 1234);

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
('Huda Mahela', 4090, 1234),
('roaa eisa', 3910038, 1234);

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
  `session_id` int(3) NOT NULL,
  `week_number` varchar(55) NOT NULL,
  `time` datetime(6) NOT NULL,
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
(987, '7', '2022-05-06 13:55:24.000000', 'A2-17', 'CS203', 90, 'Siti Hares', 'Huda Mahela', 'Booked'),
(9866, '4', '2022-05-19 20:10:29.000000', 'A2-17', 'CS204', 69, 'Omamah Hawsaii', 'Huda Mahela', 'Booked'),
(987, '7', '2022-05-06 13:55:24.000000', 'A2-17', 'CS382', 69, 'Siti Hares', 'Huda Mahela', 'Booked');

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
('Roaa eisa', 3910038, 'roaa@gmail.com', 998876, 'CS67999', 'A+');

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
  `grade` varchar(2) NOT NULL,
  `date_time` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `place` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `workshop`
--

INSERT INTO `workshop` (`id`, `title`, `detail`, `presenter`, `date_time`, `place`) VALUES
(7, 'introduction to robotics', 'learn about the basics of robotics', 'Dr. leylah', '2021-12-07 00:00:00', 'YUC-F'),
(14, 'Introduction to Python', 'basics of python', 'Dr. kajal', '2021-12-21 00:00:00', 'YUC-F'),
(19, 'newtitle', 'details about the workshop', 'Dr.kajal', '2022-05-27 11:04:00', 'online'),
(20, 'title', 'details about the workshop', 'Dr.kajal', '2022-05-28 14:55:00', 'online');

-- --------------------------------------------------------

--
-- Table structure for table `workshoprequest`
--

CREATE TABLE `workshoprequest` (
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

INSERT INTO `workshoprequest` (`teacher_name`, `teacher_id`, `fromEmail`, `phone`, `details`, `title`, `date_time`, `place`) VALUES
('Kajal Khan', 1122, 'hayam@gmail.com', 998876, 'assignment 568', 'title', '2022-05-17 21:31:00', 'online'),
('Kajal Khan', 1122, 'Moham@gmail.com', 998876, 'assignment 568', 'title', '2022-05-21 14:46:00', 'online');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `resources`
--
ALTER TABLE `resources`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `workshop`
--
ALTER TABLE `workshop`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `resources`
--
ALTER TABLE `resources`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `workshop`
--
ALTER TABLE `workshop`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;



