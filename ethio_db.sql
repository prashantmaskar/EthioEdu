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
  `advertise_id` INT(11) NOT NULL,
  `advertise_name` VARCHAR(100) NOT NULL,
  `advertise_email` VARCHAR(50) NOT NULL,
  `advertise_number` VARCHAR(15) NOT NULL,
  `advertise_category` VARCHAR(50) NOT NULL,
  `advertise_position` VARCHAR(20) NOT NULL,
  `advertise_subject` VARCHAR(200) NOT NULL,
  `advertise_desc` VARCHAR(500) NOT NULL,
  `user_id` INT(11) NOT NULL
) ENGINE=INNODB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact`
--

CREATE TABLE `tbl_contact` (
  `contact_id` INT(11) NOT NULL,
  `contact_person_name` VARCHAR(100) NOT NULL,
  `contact_person_email` VARCHAR(50) NOT NULL,
  `school_community` VARCHAR(50) NOT NULL,
  `message_category` VARCHAR(50) NOT NULL,
  `contact_subject` VARCHAR(50) NOT NULL,
  `contact_message` VARCHAR(200) NOT NULL
) ENGINE=INNODB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_course`
--

CREATE TABLE `tbl_course` (
  `course_id` INT(11) NOT NULL,
  `course_name` VARCHAR(100) NOT NULL,
  `course_subject` VARCHAR(50) NOT NULL,
  `course_category` VARCHAR(50) NOT NULL,
  `course_duration` INT(10) NOT NULL,
  `course_school` VARCHAR(50) NOT NULL,
  `course_university` VARCHAR(50) NOT NULL,
  `course_desc` VARCHAR(200) NOT NULL,
  `user_id` INT(11) NOT NULL
) ENGINE=INNODB DEFAULT CHARSET=latin1;

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
  `course_rating` VARCHAR(50) NOT NULL,
  `course_review` VARCHAR(50) NOT NULL,
  `course_id` INT(11) NOT NULL,
  `user_id` INT(11) NOT NULL
) ENGINE=INNODB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_posts`
--

CREATE TABLE `tbl_posts` (
  `post_id` INT(11) NOT NULL,
  `post_title` VARCHAR(100) NOT NULL,
  `post_desc` VARCHAR(200) NOT NULL,
  `post_category` VARCHAR(50) NOT NULL,
  `post_attachment` VARCHAR(50) NOT NULL,
  `post_author` VARCHAR(50) NOT NULL,
  `post_source` VARCHAR(50) NOT NULL,
  `post_date` VARCHAR(30) NOT NULL,
  `post_type` VARCHAR(50) NOT NULL,
  `user_id` INT(11) NOT NULL
) ENGINE=INNODB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_posts_comments`
--

CREATE TABLE `tbl_posts_comments` (
  `post_c_id` INT(11) NOT NULL,
  `post_c_desc` VARCHAR(200) NOT NULL,
  `post_c_date` VARCHAR(50) NOT NULL,
  `post_c_type` VARCHAR(50) NOT NULL,
  `user_id` INT(11) NOT NULL
) ENGINE=INNODB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_projects`
--

CREATE TABLE `tbl_projects` (
  `project_id` INT(11) NOT NULL,
  `project_title` VARCHAR(100) NOT NULL,
  `project_course` VARCHAR(50) NOT NULL,
  `project_year` VARCHAR(50) NOT NULL,
  `project_format` INT(10) NOT NULL,
  `project_upload` VARCHAR(50) NOT NULL,
  `user_id` INT(11) NOT NULL
) ENGINE=INNODB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_school_comments`
--

CREATE TABLE `tbl_school_comments` (
  `school_c_id` INT(11) NOT NULL,
  `school_c_desc` VARCHAR(200) NOT NULL,
  `school_c_date` VARCHAR(50) NOT NULL,
  `school_c_likes` INT(11) NOT NULL,
  `user_id` INT(11) NOT NULL
) ENGINE=INNODB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_school_meta`
--

CREATE TABLE `tbl_school_meta` (
  `registration_type` VARCHAR(50) NOT NULL,
  `school_name` VARCHAR(50) NOT NULL,
  `school_category` VARCHAR(50) NOT NULL,
  `school_university` VARCHAR(50) NOT NULL,
  `school_institute` VARCHAR(50) NOT NULL,
  `other_category` VARCHAR(50) NOT NULL,
  `school_number` VARCHAR(50) NOT NULL,
  `school_country` VARCHAR(50) NOT NULL,
  `school_city` VARCHAR(50) NOT NULL,
  `school_region` VARCHAR(50) NOT NULL,
  `school_type` VARCHAR(50) NOT NULL,
  `school_population` INT(10) NOT NULL,
  `teaching_staff` INT(10) NOT NULL,
  `non_teaching_staff` INT(10) NOT NULL,
  `school_awards` VARCHAR(50) NOT NULL,
  `school_acadamic_year` VARCHAR(50) NOT NULL,
  `school_acadamic_fee` VARCHAR(50) NOT NULL,
  `admission_procedure` VARCHAR(200) NOT NULL,
  `acadamic_requirment` VARCHAR(200) NOT NULL,
  `school_scholarship` VARCHAR(100) NOT NULL,
  `school_address` VARCHAR(200) NOT NULL,
  `school_url` VARCHAR(100) NOT NULL,
  `school_desc` VARCHAR(200) NOT NULL,
  `user_id` INT(11) NOT NULL
) ENGINE=INNODB DEFAULT CHARSET=latin1;

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
  `user_id` INT(11) NOT NULL,
  `username` VARCHAR(100) NOT NULL,
  `password` VARCHAR(255) NOT NULL,
  `user_email` VARCHAR(100) NOT NULL,
  `user_role` VARCHAR(20) NOT NULL
) ENGINE=INNODB DEFAULT CHARSET=latin1;

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
  `school_type` VARCHAR(50) NOT NULL,
  `user_school` VARCHAR(50) NOT NULL,
  `user_level` VARCHAR(50) NOT NULL,
  `user_dept` VARCHAR(50) NOT NULL,
  `user_first_name` VARCHAR(50) NOT NULL,
  `user_last_name` VARCHAR(50) NOT NULL,
  `user_gender` VARCHAR(50) NOT NULL,
  `mobile_no` VARCHAR(50) NOT NULL,
  `user_avatar` BLOB NOT NULL,
  `marital_status` VARCHAR(50) NOT NULL,
  `interested_in` VARCHAR(50) NOT NULL,
  `about_user` VARCHAR(200) NOT NULL,
  `user_interest` VARCHAR(200) NOT NULL,
  `user_hobby` VARCHAR(200) NOT NULL,
  `user_id` INT(11) NOT NULL
) ENGINE=INNODB DEFAULT CHARSET=latin1;

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
  `vacancy_id` INT(11) NOT NULL,
  `vacancy_name` VARCHAR(100) NOT NULL,
  `vacancy_school_name` VARCHAR(100) NOT NULL,
  `vacancy_count` INT(10) NOT NULL,
  `vacancy_from_date` VARCHAR(50) NOT NULL,
  `vacancy_to_date` VARCHAR(50) NOT NULL,
  `vacancy_status` VARCHAR(50) NOT NULL,
  `vacancy_desc` VARCHAR(200) NOT NULL,
  `user_id` INT(11) NOT NULL
) ENGINE=INNODB DEFAULT CHARSET=latin1;

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
