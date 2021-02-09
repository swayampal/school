-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 24, 2021 at 07:10 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `try`
--

-- --------------------------------------------------------

--
-- Table structure for table `assign_course`
--

CREATE TABLE `assign_course` (
  `assign_id` int(11) NOT NULL,
  `assign_course` int(11) NOT NULL,
  `assign_acc_year` int(11) NOT NULL,
  `assign_batch` int(11) NOT NULL,
  `assign_subject` int(11) NOT NULL,
  `staff_id` int(11) NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT 'Y',
  `create_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `assign_course`
--

INSERT INTO `assign_course` (`assign_id`, `assign_course`, `assign_acc_year`, `assign_batch`, `assign_subject`, `staff_id`, `status`, `create_date`) VALUES
(2, 1, 1, 1, 1, 1, '', '0000-00-00 00:00:00'),
(3, 2, 2, 2, 4, 3, 'Y', '0000-00-00 00:00:00'),
(4, 2, 2, 2, 3, 3, 'Y', '0000-00-00 00:00:00'),
(5, 3, 4, 3, 6, 2, '', '0000-00-00 00:00:00'),
(6, 3, 4, 3, 5, 2, 'Y', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `attendence`
--

CREATE TABLE `attendence` (
  `attendence_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `accadmic_year` int(11) NOT NULL,
  `session_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `guardian_id` int(11) NOT NULL,
  `timetable_id` int(11) NOT NULL,
  `created_by` varchar(48) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `status` varchar(10) NOT NULL DEFAULT 'P'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `batches`
--

CREATE TABLE `batches` (
  `batch_id` int(11) NOT NULL,
  `batch_name` varchar(48) NOT NULL,
  `create_date` datetime NOT NULL DEFAULT current_timestamp(),
  `batch_course` varchar(48) NOT NULL,
  `accadmic_year` varchar(48) NOT NULL,
  `batch_class` varchar(48) NOT NULL,
  `active` varchar(11) NOT NULL DEFAULT 'Y'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `batches`
--

INSERT INTO `batches` (`batch_id`, `batch_name`, `create_date`, `batch_course`, `accadmic_year`, `batch_class`, `active`) VALUES
(1, 'Morning', '2020-12-09 16:31:38', '1', '', '1', 'Y'),
(2, 'Morning IT', '2020-12-09 16:33:14', '2', '', '2', 'Y'),
(3, 'Morning BMM', '2020-12-09 16:33:29', '3', '', '4', 'Y'),
(4, 'Morning BMS', '2020-12-09 16:33:45', '4', '', '3', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `class_id` int(11) NOT NULL,
  `class_name` varchar(48) NOT NULL,
  `class_course` int(11) NOT NULL,
  `class_discription` varchar(150) NOT NULL,
  `create_by` varchar(48) NOT NULL,
  `create_date` datetime NOT NULL DEFAULT current_timestamp(),
  `active` varchar(10) NOT NULL DEFAULT 'Y'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`class_id`, `class_name`, `class_course`, `class_discription`, `create_by`, `create_date`, `active`) VALUES
(1, 'BSC CS (First Year)', 1, '', '', '2020-12-09 16:29:59', 'Y'),
(2, 'BSC IT (First Year)', 2, '', '', '2020-12-09 16:30:24', 'Y'),
(3, 'BMS (First Year)', 4, '', '', '2020-12-09 16:30:42', 'Y'),
(4, 'BMM (First Year)', 3, '', '', '2020-12-09 16:30:53', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `course_id` int(11) NOT NULL,
  `course_name` varchar(100) NOT NULL,
  `course_description` varchar(255) NOT NULL,
  `board` varchar(100) NOT NULL,
  `Active` varchar(10) NOT NULL DEFAULT 'Y',
  `Created_by` varchar(48) NOT NULL,
  `Created_date` datetime NOT NULL DEFAULT current_timestamp(),
  `last_updated_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`course_id`, `course_name`, `course_description`, `board`, `Active`, `Created_by`, `Created_date`, `last_updated_date`) VALUES
(1, 'BSC (Computer Science)', '', '', 'Y', '', '2020-12-04 12:41:42', '0000-00-00 00:00:00'),
(2, 'IT (Information Technology)', '', '', 'Y', '', '2020-12-04 12:42:48', '0000-00-00 00:00:00'),
(3, 'BMM (Bechlar Of Mass Media)', '', '', 'Y', '', '2020-12-04 12:43:11', '0000-00-00 00:00:00'),
(4, 'BMS (Bechaler Media Secter)', '', '', 'Y', '', '2020-12-04 12:43:36', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `lectures`
--

CREATE TABLE `lectures` (
  `lecture_id` int(11) NOT NULL,
  `lecture_name` varchar(48) NOT NULL,
  `lecture_time` varchar(50) NOT NULL,
  `lecture_day` varchar(50) NOT NULL,
  `subject_name` varchar(50) NOT NULL,
  `lecturer` varchar(50) NOT NULL,
  `create_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `lecture_time`
--

CREATE TABLE `lecture_time` (
  `time_id` int(11) NOT NULL,
  `lect_time` varchar(50) NOT NULL,
  `create_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lecture_time`
--

INSERT INTO `lecture_time` (`time_id`, `lect_time`, `create_date`) VALUES
(1, '11am to 1pm', '2020-12-12 14:53:46'),
(2, '1pm to 3pm', '2020-12-12 15:05:08'),
(3, '3pm to 5pm', '2020-12-14 00:58:57'),
(4, '5.30pm to 7pm', '2020-12-14 00:59:09');

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE `notice` (
  `notice_id` int(11) NOT NULL,
  `notice_title` varchar(100) NOT NULL,
  `notice_detail` text NOT NULL,
  `date` varchar(50) NOT NULL,
  `status` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`notice_id`, `notice_title`, `notice_detail`, `date`, `status`) VALUES
(1, 'try', 'eeeeed', '0000-00-00 00:00:00', 'publish'),
(2, 'try', 'eeeeed', '', 'publish'),
(3, 'dwsdcs', 'szsaax', '', 'publish'),
(4, 'try', 'eeeeed', '', 'publish'),
(5, 'try', 'eeeeed', '', 'publish'),
(6, 'try', 'eeeeed', '', 'publish'),
(7, 'try', 'eeeeed', '', 'publish'),
(8, 'try', 'szsaax', '', 'publish');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `role_id` int(11) NOT NULL,
  `role` varchar(78) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`role_id`, `role`) VALUES
(1, 'ADMIN'),
(2, 'STAFF'),
(3, 'GUARDIAN'),
(4, 'STUDENT');

-- --------------------------------------------------------

--
-- Table structure for table `session`
--

CREATE TABLE `session` (
  `session_id` int(11) NOT NULL,
  `session_name` varchar(55) NOT NULL,
  `course_id` int(11) NOT NULL,
  `accad_year` int(11) NOT NULL,
  `subject_class` int(11) NOT NULL,
  `subject_batch` int(11) NOT NULL,
  `session_description` varchar(200) NOT NULL,
  `active` varchar(10) NOT NULL DEFAULT 'Y',
  `created_by` varchar(50) NOT NULL,
  `created_date` datetime NOT NULL DEFAULT current_timestamp(),
  `last_updated_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `session`
--

INSERT INTO `session` (`session_id`, `session_name`, `course_id`, `accad_year`, `subject_class`, `subject_batch`, `session_description`, `active`, `created_by`, `created_date`, `last_updated_date`) VALUES
(1, 'php', 1, 0, 1, 1, '', 'Y', '', '2020-12-09 16:34:19', '0000-00-00 00:00:00'),
(2, 'Python', 1, 0, 1, 1, '', 'Y', '', '2020-12-09 16:34:37', '0000-00-00 00:00:00'),
(3, 'SQl', 2, 0, 2, 2, '', 'Y', '', '2020-12-09 16:34:53', '0000-00-00 00:00:00'),
(4, 'dbms', 2, 0, 2, 2, '', 'Y', '', '2020-12-09 16:42:46', '0000-00-00 00:00:00'),
(5, 'Social Media', 3, 0, 4, 3, '', 'Y', '', '2020-12-09 16:43:12', '0000-00-00 00:00:00'),
(6, 'new paper', 3, 0, 4, 3, '', 'Y', '', '2020-12-09 16:43:35', '0000-00-00 00:00:00'),
(7, 'graphic view', 4, 0, 3, 4, '', 'Y', '', '2020-12-09 16:43:54', '0000-00-00 00:00:00'),
(8, 'tele brodcast', 4, 0, 3, 4, '', 'Y', '', '2020-12-09 16:44:15', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `staff_id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `joining_date` date NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `gender` varchar(48) NOT NULL,
  `phone_mobile` int(11) NOT NULL,
  `phone_emergency` int(11) NOT NULL,
  `address1` varchar(100) NOT NULL,
  `address2` varchar(100) NOT NULL,
  `city` varchar(72) NOT NULL,
  `post_code` int(11) NOT NULL,
  `certification` varchar(48) NOT NULL,
  `expirence_in_yraar` varchar(10) NOT NULL,
  `staff_department` int(11) NOT NULL,
  `staff_categrie` int(11) NOT NULL,
  `staff_type` varchar(48) NOT NULL DEFAULT 'permanent',
  `email` varchar(38) NOT NULL,
  `active` varchar(10) NOT NULL DEFAULT 'y',
  `created_date` datetime NOT NULL DEFAULT current_timestamp(),
  `created_by` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`staff_id`, `title`, `joining_date`, `first_name`, `last_name`, `gender`, `phone_mobile`, `phone_emergency`, `address1`, `address2`, `city`, `post_code`, `certification`, `expirence_in_yraar`, `staff_department`, `staff_categrie`, `staff_type`, `email`, `active`, `created_date`, `created_by`) VALUES
(1, '', '0000-00-00', 'Eram', 'Siddique', 'female', 2147483647, 2147483647, 'chakla', 'MS ali road', 'mumbai', 400020, 'MSC', '2', 0, 1, 'permanet', 'eram@gmail.com', 'Y', '2020-12-11 00:26:57', ''),
(2, '', '0000-00-00', 'ProF Saddique', 'Siddique', 'male', 2147483647, 2147483647, 'chakla', 'MS ali road', 'mumbai', 400020, 'MSC', '7', 0, 1, 'permanet', 'saddique@gmail.com', 'Y', '2020-12-11 00:29:40', '');

-- --------------------------------------------------------

--
-- Table structure for table `staff_categries`
--

CREATE TABLE `staff_categries` (
  `staff_categries_id` int(11) NOT NULL,
  `staff_categries_name` varchar(48) NOT NULL,
  `staff_categries_prifix` varchar(48) NOT NULL,
  `active` varchar(10) NOT NULL DEFAULT 'Y',
  `create_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff_categries`
--

INSERT INTO `staff_categries` (`staff_categries_id`, `staff_categries_name`, `staff_categries_prifix`, `active`, `create_date`) VALUES
(1, 'TEaching', 'TC', 'status', '2020-12-11 00:23:27'),
(2, 'PeUn', 'UN', 'status', '2021-01-10 18:10:44');

-- --------------------------------------------------------

--
-- Table structure for table `staff_leave_type`
--

CREATE TABLE `staff_leave_type` (
  `leave_type_id` int(11) NOT NULL,
  `leave_type_name` varchar(48) NOT NULL,
  `leave_type_code` varchar(20) NOT NULL,
  `leave_type_count` int(11) NOT NULL,
  `salarydetuct` varchar(30) NOT NULL,
  `valid_from` varchar(22) NOT NULL,
  `status` varchar(10) NOT NULL,
  `create_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff_leave_type`
--

INSERT INTO `staff_leave_type` (`leave_type_id`, `leave_type_name`, `leave_type_code`, `leave_type_count`, `salarydetuct`, `valid_from`, `status`, `create_date`) VALUES
(1, 'paid', 'pd', 10, 'No salary detuction', '2020-11-04', 'Y', '2020-11-02 14:02:23'),
(4, 'sick leave', 'skkkkkk', 7, 'salary detuction', '2020-11-04', 'Y', '2020-11-03 07:35:11'),
(5, 'xcsc;', 'lxlslx', 10, 'No salary detuction', '', 'status', '2020-11-03 16:20:55'),
(6, 'xcsc;', 'lxlslx', 10, 'No salary detuction', '', 'status', '2020-11-03 16:20:59'),
(7, 'xcsc;', 'lxlslx', 10, 'No salary detuction', '', 'status', '2020-11-03 16:21:02'),
(8, 'xcsc;', 'lxlslx', 10, 'No salary detuction', '', 'status', '2020-11-03 16:21:03'),
(9, 'xcsc;', 'lxlslx', 10, 'No salary detuction', '', 'status', '2020-11-03 16:21:05'),
(10, 'xcsc;', 'lxlslx', 10, 'No salary detuction', '', 'status', '2020-11-03 16:21:06'),
(11, 'xcsc;', 'lxlslx', 10, 'No salary detuction', '', 'status', '2020-11-03 16:21:07'),
(12, 'xcsc;', 'lxlslx', 10, 'No salary detuction', '', 'status', '2020-11-03 16:21:08'),
(13, 'xcsc;', 'lxlslx', 10, 'No salary detuction', '', 'status', '2020-11-03 16:21:09'),
(14, 'xcsc;', 'lxlslx', 10, 'No salary detuction', '', 'status', '2020-11-03 16:21:10');

-- --------------------------------------------------------

--
-- Table structure for table `staff_position`
--

CREATE TABLE `staff_position` (
  `position_id` int(11) NOT NULL,
  `position_name` varchar(48) NOT NULL,
  `position_categries` int(11) NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT 'Y',
  `create_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff_position`
--

INSERT INTO `staff_position` (`position_id`, `position_name`, `position_categries`, `status`, `create_date`) VALUES
(2, 'systemadmin', 2, 'Y', '2020-11-02 08:32:09');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `student_id` int(11) NOT NULL,
  `guardian_id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `middle_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `date_of_birth` varchar(45) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `registration_date` varchar(45) NOT NULL,
  `eamil` varchar(48) NOT NULL,
  `authorised_by` varchar(45) NOT NULL,
  `created_date` datetime NOT NULL DEFAULT current_timestamp(),
  `st_course_id` int(11) NOT NULL,
  `st_class_id` int(11) NOT NULL,
  `st_batch_id` int(11) NOT NULL,
  `student_image` text NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT 'Y',
  `start_time` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`student_id`, `guardian_id`, `first_name`, `middle_name`, `last_name`, `gender`, `date_of_birth`, `phone`, `registration_date`, `eamil`, `authorised_by`, `created_date`, `st_course_id`, `st_class_id`, `st_batch_id`, `student_image`, `status`, `start_time`) VALUES
(1, 1, 'deepak', 'devnarayan', 'pal', 'male', '04/05/1998', '8879262008', '11/12/2020', 'deepak@gmail.com', '', '2020-12-10 00:21:14', 1, 1, 1, '', 'Y', '2021-01-21 07:12:14'),
(2, 2, 'saba', 'siddque', 'siddique', 'female', '04/05/1998', '8169586585', '02/12/2020', 'deepak@gmail.com', '', '2020-12-12 10:47:45', 3, 4, 3, '', 'Y', ''),
(3, 1, 'deepk', 'ddd', 'ddd', 'male', '02/02/2000', '', '20/01/2021', '', '', '2021-01-20 11:00:37', 4, 3, 4, '', 'Y', '');

-- --------------------------------------------------------

--
-- Table structure for table `student_leave`
--

CREATE TABLE `student_leave` (
  `leave_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `course_id` int(11) NOT NULL,
  `session_id` int(11) NOT NULL,
  `authorized_by` varchar(48) NOT NULL,
  `remark` varchar(150) NOT NULL,
  `created_by` varchar(48) NOT NULL,
  `created_on` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_leave`
--

INSERT INTO `student_leave` (`leave_id`, `student_id`, `start_date`, `end_date`, `course_id`, `session_id`, `authorized_by`, `remark`, `created_by`, `created_on`) VALUES
(1, 2, '0000-00-00', '0000-00-00', 0, 0, '', 'remark', '', '2020-10-16 20:58:09'),
(2, 2, '0000-00-00', '0000-00-00', 0, 0, '', 'remark', '', '2020-10-16 22:36:21');

-- --------------------------------------------------------

--
-- Table structure for table `timetable`
--

CREATE TABLE `timetable` (
  `timetable_id` int(11) NOT NULL,
  `tt_course` int(11) NOT NULL,
  `tt_class` int(11) NOT NULL,
  `tt_batch` int(11) NOT NULL,
  `created_date` datetime NOT NULL DEFAULT current_timestamp(),
  `created_by` int(11) NOT NULL,
  `lacture_name` varchar(48) NOT NULL,
  `lecture_time` varchar(30) NOT NULL,
  `lecture_day` varchar(38) NOT NULL,
  `subject_name` int(11) NOT NULL,
  `teacher` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `timetable`
--

INSERT INTO `timetable` (`timetable_id`, `tt_course`, `tt_class`, `tt_batch`, `created_date`, `created_by`, `lacture_name`, `lecture_time`, `lecture_day`, `subject_name`, `teacher`) VALUES
(1, 1, 1, 1, '2021-01-24 01:36:46', 0, 'php', '11am to 1pm', 'monday', 1, 1),
(2, 1, 1, 1, '2021-01-24 01:45:27', 0, 'php', '1pm to 3pm', 'monday', 1, 1),
(3, 3, 4, 3, '2021-01-24 01:47:52', 0, 'SS', '11am to 1pm', 'tuesday', 5, 2),
(4, 4, 3, 4, '2021-01-24 01:49:47', 0, 'news', '11am to 1pm', 'thursday', 6, 2);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(75) NOT NULL,
  `email` varchar(48) NOT NULL,
  `password` varchar(20) NOT NULL,
  `created_date` datetime DEFAULT current_timestamp(),
  `created_by` varchar(75) DEFAULT NULL,
  `role_id` int(11) NOT NULL,
  `last_update_date` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `email`, `password`, `created_date`, `created_by`, `role_id`, `last_update_date`) VALUES
(1, 'deepak', '', 'deepak', '2020-10-06 01:57:50', NULL, 1, '2020-11-10 16:04:07'),
(2, 'zubair', '', 'zubair', '2020-10-06 01:57:50', NULL, 2, '2020-11-10 16:04:07'),
(3, 'admin', '', 'admin', '2020-10-31 07:52:15', NULL, 3, '2020-11-10 16:02:46'),
(4, 'nafees', '', 'nafees', '2020-11-11 10:43:29', NULL, 4, '2020-11-11 10:43:29');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `assign_course`
--
ALTER TABLE `assign_course`
  ADD PRIMARY KEY (`assign_id`);

--
-- Indexes for table `attendence`
--
ALTER TABLE `attendence`
  ADD PRIMARY KEY (`attendence_id`);

--
-- Indexes for table `batches`
--
ALTER TABLE `batches`
  ADD PRIMARY KEY (`batch_id`);

--
-- Indexes for table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`class_id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `lectures`
--
ALTER TABLE `lectures`
  ADD PRIMARY KEY (`lecture_id`);

--
-- Indexes for table `lecture_time`
--
ALTER TABLE `lecture_time`
  ADD PRIMARY KEY (`time_id`);

--
-- Indexes for table `notice`
--
ALTER TABLE `notice`
  ADD PRIMARY KEY (`notice_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `session`
--
ALTER TABLE `session`
  ADD PRIMARY KEY (`session_id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`staff_id`);

--
-- Indexes for table `staff_categries`
--
ALTER TABLE `staff_categries`
  ADD PRIMARY KEY (`staff_categries_id`);

--
-- Indexes for table `staff_leave_type`
--
ALTER TABLE `staff_leave_type`
  ADD PRIMARY KEY (`leave_type_id`);

--
-- Indexes for table `staff_position`
--
ALTER TABLE `staff_position`
  ADD PRIMARY KEY (`position_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `student_leave`
--
ALTER TABLE `student_leave`
  ADD PRIMARY KEY (`leave_id`);

--
-- Indexes for table `timetable`
--
ALTER TABLE `timetable`
  ADD PRIMARY KEY (`timetable_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `assign_course`
--
ALTER TABLE `assign_course`
  MODIFY `assign_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `attendence`
--
ALTER TABLE `attendence`
  MODIFY `attendence_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `batches`
--
ALTER TABLE `batches`
  MODIFY `batch_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `class`
--
ALTER TABLE `class`
  MODIFY `class_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `course_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `lectures`
--
ALTER TABLE `lectures`
  MODIFY `lecture_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lecture_time`
--
ALTER TABLE `lecture_time`
  MODIFY `time_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `notice`
--
ALTER TABLE `notice`
  MODIFY `notice_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `session`
--
ALTER TABLE `session`
  MODIFY `session_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `staff_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `staff_categries`
--
ALTER TABLE `staff_categries`
  MODIFY `staff_categries_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `staff_leave_type`
--
ALTER TABLE `staff_leave_type`
  MODIFY `leave_type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `staff_position`
--
ALTER TABLE `staff_position`
  MODIFY `position_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `student_leave`
--
ALTER TABLE `student_leave`
  MODIFY `leave_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `timetable`
--
ALTER TABLE `timetable`
  MODIFY `timetable_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
