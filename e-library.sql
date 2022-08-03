-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 03, 2022 at 12:47 PM
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
-- Database: `e-library`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `Book-id` int(11) NOT NULL,
  `Book-name` varchar(100) NOT NULL,
  `Book-type` text NOT NULL,
  `Book-available` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `student_portal`
--

CREATE TABLE `student_portal` (
  `Student_id` int(11) NOT NULL,
  `Student_password` varchar(30) NOT NULL,
  `department` varchar(67) NOT NULL,
  `college` varchar(67) NOT NULL,
  `date` varchar(45) NOT NULL,
  `gender` varchar(34) NOT NULL,
  `student_name` varchar(56) NOT NULL,
  `email` varchar(56) NOT NULL,
  `student_regno` varchar(67) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_portal`
--

INSERT INTO `student_portal` (`Student_id`, `Student_password`, `department`, `college`, `date`, `gender`, `student_name`, `email`, `student_regno`) VALUES
(1, 'sav321', '', '', '', '', '', '', ''),
(2, 'erie435', '', '', '', '', '', '', ''),
(3, '456', 'information technology ', 'CST', '2021-11-03', 'female', 'mukaimma', 'mukaimma22@gmail.com', '2210056'),
(4, '5252', 'medecine', 'CST', '2022-07-15', 'others', 'saveur', 'mukaimma22@gmail.com', '452545'),
(5, 'fff', 'computer engineering', 'CST', '2022-08-02', 'female', 'crelia', 'crelia@', '221004759'),
(6, 'uii', 'information technology ', 'CST', '2022-07-31', 'male', 'placide', 'placide@', '33383900');

-- --------------------------------------------------------

--
-- Table structure for table `teachers_portal`
--

CREATE TABLE `teachers_portal` (
  `Teacher_id` int(11) NOT NULL,
  `Teacher_email` varchar(67) NOT NULL,
  `Teacher_password` varchar(100) NOT NULL,
  `date` int(11) NOT NULL,
  `gender` int(11) NOT NULL,
  `department` int(11) NOT NULL,
  `college` int(11) NOT NULL,
  `teacher_name` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teachers_portal`
--

INSERT INTO `teachers_portal` (`Teacher_id`, `Teacher_email`, `Teacher_password`, `date`, `gender`, `department`, `college`, `teacher_name`) VALUES
(1, 'teacher@gmail.com', '1234', 0, 0, 0, 0, 0),
(2, 'ciapine@gmail.com', '123', 0, 0, 0, 0, 0),
(3, 'f@gg', 'qwqw', 212, 0, 0, 0, 0),
(4, 'f@gg', 'qwqw', 212, 0, 0, 0, 0),
(5, 'yuyu@ff', 'uii', 2022, 0, 0, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`Book-id`);

--
-- Indexes for table `student_portal`
--
ALTER TABLE `student_portal`
  ADD PRIMARY KEY (`Student_id`);

--
-- Indexes for table `teachers_portal`
--
ALTER TABLE `teachers_portal`
  ADD PRIMARY KEY (`Teacher_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `Book-id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `student_portal`
--
ALTER TABLE `student_portal`
  MODIFY `Student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `teachers_portal`
--
ALTER TABLE `teachers_portal`
  MODIFY `Teacher_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
