-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 08, 2016 at 06:55 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ethio_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_advertise`
--

CREATE TABLE `tbl_advertise` (
  `advertise_id` int(11) NOT NULL,
  `advertise_name` varchar(100) NOT NULL,
  `advertise_email` varchar(50) NOT NULL,
  `advertise_number` varchar(15) NOT NULL,
  `advertise_category` varchar(50) NOT NULL,
  `advertise_position` varchar(20) NOT NULL,
  `advertise_subject` varchar(200) NOT NULL,
  `advertise_desc` varchar(500) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact`
--

CREATE TABLE `tbl_contact` (
  `contact_id` int(11) NOT NULL,
  `contact_person_name` varchar(100) NOT NULL,
  `contact_person_email` varchar(50) NOT NULL,
  `school_community` varchar(50) NOT NULL,
  `message_category` varchar(50) NOT NULL,
  `contact_subject` varchar(50) NOT NULL,
  `contact_message` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_course`
--

CREATE TABLE `tbl_course` (
  `course_id` int(11) NOT NULL,
  `course_name` varchar(100) NOT NULL,
  `course_subject` varchar(50) NOT NULL,
  `course_category` varchar(50) NOT NULL,
  `course_duration` int(10) NOT NULL,
  `course_school` varchar(50) NOT NULL,
  `course_university` varchar(50) NOT NULL,
  `course_desc` varchar(200) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_course`
--

INSERT INTO `tbl_course` (`course_id`, `course_name`, `course_subject`, `course_category`, `course_duration`, `course_school`, `course_university`, `course_desc`, `user_id`) VALUES
(1, 'dfg', 'dfg', 'df', 0, 'Kenya', '1', 'dfdf', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_course_meta`
--

CREATE TABLE `tbl_course_meta` (
  `course_rating` varchar(50) NOT NULL,
  `course_review` varchar(50) NOT NULL,
  `course_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_posts`
--

CREATE TABLE `tbl_posts` (
  `post_id` int(11) NOT NULL,
  `post_title` varchar(100) NOT NULL,
  `post_desc` varchar(200) NOT NULL,
  `post_category` varchar(50) NOT NULL,
  `post_attachment` varchar(50) NOT NULL,
  `post_author` varchar(50) NOT NULL,
  `post_source` varchar(50) NOT NULL,
  `post_date` varchar(30) NOT NULL,
  `post_type` varchar(50) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_posts_comments`
--

CREATE TABLE `tbl_posts_comments` (
  `post_c_id` int(11) NOT NULL,
  `post_c_desc` varchar(200) NOT NULL,
  `post_c_date` varchar(50) NOT NULL,
  `post_c_type` varchar(50) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_projects`
--

CREATE TABLE `tbl_projects` (
  `project_id` int(11) NOT NULL,
  `project_title` varchar(100) NOT NULL,
  `project_course` varchar(50) NOT NULL,
  `project_year` varchar(50) NOT NULL,
  `project_format` int(10) NOT NULL,
  `project_upload` varchar(50) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_school_comments`
--

CREATE TABLE `tbl_school_comments` (
  `school_c_id` int(11) NOT NULL,
  `school_c_desc` varchar(200) NOT NULL,
  `school_c_date` varchar(50) NOT NULL,
  `school_c_likes` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_school_meta`
--

CREATE TABLE `tbl_school_meta` (
  `registration_type` varchar(50) NOT NULL,
  `school_name` varchar(50) NOT NULL,
  `school_category` varchar(50) NOT NULL,
  `school_university` varchar(50) NOT NULL,
  `school_institute` varchar(50) NOT NULL,
  `other_category` varchar(50) NOT NULL,
  `school_number` varchar(50) NOT NULL,
  `school_country` varchar(50) NOT NULL,
  `school_city` varchar(50) NOT NULL,
  `school_region` varchar(50) NOT NULL,
  `school_type` varchar(50) NOT NULL,
  `school_population` int(10) NOT NULL,
  `teaching_staff` int(10) NOT NULL,
  `non_teaching_staff` int(10) NOT NULL,
  `school_awards` varchar(50) NOT NULL,
  `school_acadamic_year` varchar(50) NOT NULL,
  `school_acadamic_fee` varchar(50) NOT NULL,
  `admission_procedure` varchar(200) NOT NULL,
  `acadamic_requirment` varchar(200) NOT NULL,
  `school_scholarship` varchar(100) NOT NULL,
  `school_address` varchar(200) NOT NULL,
  `school_url` varchar(100) NOT NULL,
  `school_desc` varchar(200) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_school_meta`
--

INSERT INTO `tbl_school_meta` (`registration_type`, `school_name`, `school_category`, `school_university`, `school_institute`, `other_category`, `school_number`, `school_country`, `school_city`, `school_region`, `school_type`, `school_population`, `teaching_staff`, `non_teaching_staff`, `school_awards`, `school_acadamic_year`, `school_acadamic_fee`, `admission_procedure`, `acadamic_requirment`, `school_scholarship`, `school_address`, `school_url`, `school_desc`, `user_id`) VALUES
('Premium Registration', 'SDVL', 'Account', 'Account', 'Account', 'Account', '5555555555', 'Kenya', 'Ethiopia', 'Kenya', 'Ethiopia', 45, 4, 5, '34', '4', '4', 'test', 'test', '34', 'test', 'http://www.csdfsdf.com', 'test', 42),
('', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, '', '', '', '', '', '', '', '', '', 43),
('', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, '', '', '', '', '', '', '', '', '', 45);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_role` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`user_id`, `username`, `password`, `user_email`, `user_role`) VALUES
(1, 'dnyanesh', 'admin@123', 'dnyanesh.mali@softinfology.com', 'admin'),
(42, 'santosh', 'g', 'santoshbhosale123@gmail.com', 'admin'),
(44, 'sab', 's', 'sdfadfasd@dsfsdf.com', 'schooluser'),
(50, '', '', '', 'schooluser'),
(52, 'sam', '$2y$10$wyMfgF7q0Ce3KPpGCCmqxe8CX1lhKVsVXud9DH2nb96rZAdoqznwS', 'sdfadffdfasd@dsfsdf.com', 'schooluser');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_meta`
--

CREATE TABLE `tbl_user_meta` (
  `school_type` varchar(50) NOT NULL,
  `user_school` varchar(50) NOT NULL,
  `user_level` varchar(50) NOT NULL,
  `user_dept` varchar(50) NOT NULL,
  `user_first_name` varchar(50) NOT NULL,
  `user_last_name` varchar(50) NOT NULL,
  `user_gender` varchar(50) NOT NULL,
  `mobile_no` varchar(50) NOT NULL,
  `user_avatar` blob NOT NULL,
  `marital_status` varchar(50) NOT NULL,
  `interested_in` varchar(50) NOT NULL,
  `about_user` varchar(200) NOT NULL,
  `user_interest` varchar(200) NOT NULL,
  `user_hobby` varchar(200) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user_meta`
--

INSERT INTO `tbl_user_meta` (`school_type`, `user_school`, `user_level`, `user_dept`, `user_first_name`, `user_last_name`, `user_gender`, `mobile_no`, `user_avatar`, `marital_status`, `interested_in`, `about_user`, `user_interest`, `user_hobby`, `user_id`) VALUES
('anything', 'anything', 'friendship', 'Comp', 'sab', 'j', 'Male', '4444', '', 'Male', 'Male', 'v', 'v', 'v', 44),
('', '', '', '', '', '', '', '', '', '', '', '', '', '', 50),
('friendship', 'friendship', 'friendship', '', 'd', 'dsf', 'Male', '343', '', '', '', '', '', '', 52);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_vacancy`
--

CREATE TABLE `tbl_vacancy` (
  `vacancy_id` int(11) NOT NULL,
  `vacancy_name` varchar(100) NOT NULL,
  `vacancy_school_name` varchar(100) NOT NULL,
  `vacancy_count` int(10) NOT NULL,
  `vacancy_from_date` varchar(50) NOT NULL,
  `vacancy_to_date` varchar(50) NOT NULL,
  `vacancy_status` varchar(50) NOT NULL,
  `vacancy_desc` varchar(200) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_vacancy`
--

INSERT INTO `tbl_vacancy` (`vacancy_id`, `vacancy_name`, `vacancy_school_name`, `vacancy_count`, `vacancy_from_date`, `vacancy_to_date`, `vacancy_status`, `vacancy_desc`, `user_id`) VALUES
(1, 'Web Developer', 'VIIT', 2, '2 October, 2016', '29 October, 2016', '2', 'Test', 1),
(4, 'Software Engineer', 'VIIT', 2, '22 October, 2016', '29 October, 2016', '2', 'Test', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_advertise`
--
ALTER TABLE `tbl_advertise`
  ADD PRIMARY KEY (`advertise_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `tbl_course`
--
ALTER TABLE `tbl_course`
  ADD PRIMARY KEY (`course_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `tbl_course_meta`
--
ALTER TABLE `tbl_course_meta`
  ADD KEY `course_id` (`course_id`,`user_id`);

--
-- Indexes for table `tbl_posts`
--
ALTER TABLE `tbl_posts`
  ADD PRIMARY KEY (`post_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `tbl_posts_comments`
--
ALTER TABLE `tbl_posts_comments`
  ADD PRIMARY KEY (`post_c_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `tbl_projects`
--
ALTER TABLE `tbl_projects`
  ADD PRIMARY KEY (`project_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `tbl_school_comments`
--
ALTER TABLE `tbl_school_comments`
  ADD PRIMARY KEY (`school_c_id`),
  ADD KEY `school_id` (`user_id`);

--
-- Indexes for table `tbl_school_meta`
--
ALTER TABLE `tbl_school_meta`
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `user_email` (`user_email`);

--
-- Indexes for table `tbl_user_meta`
--
ALTER TABLE `tbl_user_meta`
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `tbl_vacancy`
--
ALTER TABLE `tbl_vacancy`
  ADD PRIMARY KEY (`vacancy_id`),
  ADD KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_advertise`
--
ALTER TABLE `tbl_advertise`
  MODIFY `advertise_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_course`
--
ALTER TABLE `tbl_course`
  MODIFY `course_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_posts`
--
ALTER TABLE `tbl_posts`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_posts_comments`
--
ALTER TABLE `tbl_posts_comments`
  MODIFY `post_c_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_projects`
--
ALTER TABLE `tbl_projects`
  MODIFY `project_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_school_comments`
--
ALTER TABLE `tbl_school_comments`
  MODIFY `school_c_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;
--
-- AUTO_INCREMENT for table `tbl_vacancy`
--
ALTER TABLE `tbl_vacancy`
  MODIFY `vacancy_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
