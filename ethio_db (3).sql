-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 29, 2016 at 05:57 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ethio_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_advertise`
--

CREATE TABLE IF NOT EXISTS `tbl_advertise` (
  `advertise_id` int(11) NOT NULL AUTO_INCREMENT,
  `advertise_name` varchar(100) NOT NULL,
  `advertise_email` varchar(50) NOT NULL,
  `advertise_number` varchar(15) NOT NULL,
  `advertise_category` varchar(50) NOT NULL,
  `advertise_position` varchar(20) NOT NULL,
  `advertise_subject` varchar(200) NOT NULL,
  `advertise_attachment` varchar(200) NOT NULL,
  `advertise_desc` varchar(500) NOT NULL,
  `advertise_date` varchar(50) NOT NULL,
  `advertise_time` varchar(50) NOT NULL,
  `user_id` int(11) NOT NULL,
  `isactive` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`advertise_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tbl_advertise`
--

INSERT INTO `tbl_advertise` (`advertise_id`, `advertise_name`, `advertise_email`, `advertise_number`, `advertise_category`, `advertise_position`, `advertise_subject`, `advertise_attachment`, `advertise_desc`, `advertise_date`, `advertise_time`, `user_id`, `isactive`) VALUES
(1, 'santosh', 'santosh.bhosale123@gmail.com', '7709326583', 'Part Time', 'Right', 'santosh', 'vlcsnap-2016-09-14-16h58m40s451.png', 'santosh', '28 November, 2016', '08:49:53 PM', 1, 1),
(2, 'sssss', 'ss@gmail.com', '77777777', 'Part Time', 'Left', 'tst', 'vlcsnap-2016-09-14-17h19m45s1531.png', 'zzzzz', '29 November, 2016', '08:28:39 AM', 55, 1),
(3, 'yf', 'fghg@gmail.com', '1234567890', 'General', 'Top', 'gssdgfcv ', 'vlcsnap-2016-09-14-16h58m45s100.png', 'gfdfg', '29 November, 2016', '08:39:57 AM', 55, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact`
--

CREATE TABLE IF NOT EXISTS `tbl_contact` (
  `contact_id` int(11) NOT NULL AUTO_INCREMENT,
  `contact_person_name` varchar(100) NOT NULL,
  `contact_person_email` varchar(50) NOT NULL,
  `contact_number` varchar(50) NOT NULL,
  `contact_desc` varchar(200) NOT NULL,
  `contact_date` varchar(50) NOT NULL,
  `contact_time` varchar(50) NOT NULL,
  PRIMARY KEY (`contact_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_course`
--

CREATE TABLE IF NOT EXISTS `tbl_course` (
  `course_id` int(11) NOT NULL AUTO_INCREMENT,
  `course_name` varchar(100) NOT NULL,
  `course_subject` varchar(50) NOT NULL,
  `course_category` varchar(50) NOT NULL,
  `course_duration` int(10) NOT NULL,
  `course_school` varchar(50) NOT NULL,
  `course_university` varchar(50) NOT NULL,
  `course_desc` varchar(200) NOT NULL,
  `course_date` varchar(50) NOT NULL,
  `course_time` varchar(50) NOT NULL,
  `course_approve` varchar(10) NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`course_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tbl_course`
--

INSERT INTO `tbl_course` (`course_id`, `course_name`, `course_subject`, `course_category`, `course_duration`, `course_school`, `course_university`, `course_desc`, `course_date`, `course_time`, `course_approve`, `user_id`) VALUES
(3, '', '', '', 0, '', '', '', '', '', '', 1),
(4, 'test course', 'sdfsdf', 'bridging', 1095, 'Africa', 'Ethiopia', 'dsffd', '', '', '1', 1),
(5, 'Android Course', 'Andorid Java', 'certificate', 2, 'Ethiopia', '1', 'Android Session For 2 Days', '17 Novembe', '03:44:12 P', '1', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_course_meta`
--

CREATE TABLE IF NOT EXISTS `tbl_course_meta` (
  `course_rating` varchar(50) NOT NULL,
  `course_review` varchar(50) NOT NULL,
  `course_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  KEY `course_id` (`course_id`,`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_enquiry`
--

CREATE TABLE IF NOT EXISTS `tbl_enquiry` (
  `enquiry_id` int(11) NOT NULL,
  `enquiry_school_name` varchar(50) NOT NULL,
  `enquiry_person_name` varchar(50) NOT NULL,
  `enquiry_person_email` varchar(50) NOT NULL,
  `enquiry_person_location` varchar(100) NOT NULL,
  `enquiry_person_number` varchar(10) NOT NULL,
  `enquiry_subject` varchar(100) NOT NULL,
  `enquiry_message` varchar(300) NOT NULL,
  `enquiry_date` varchar(50) NOT NULL,
  `enquiry_time` varchar(50) NOT NULL,
  `user_id` int(11) NOT NULL,
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_posts`
--

CREATE TABLE IF NOT EXISTS `tbl_posts` (
  `post_id` int(11) NOT NULL AUTO_INCREMENT,
  `post_title` varchar(100) NOT NULL,
  `post_desc` varchar(5000) NOT NULL,
  `post_category` varchar(50) NOT NULL,
  `post_attachment` varchar(50) NOT NULL,
  `post_author` varchar(50) NOT NULL,
  `post_source` varchar(50) NOT NULL,
  `post_date` varchar(50) NOT NULL,
  `post_time` varchar(50) NOT NULL,
  `post_venue` varchar(50) NOT NULL,
  `post_type` varchar(50) NOT NULL,
  `post_approve` varchar(10) NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`post_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `tbl_posts`
--

INSERT INTO `tbl_posts` (`post_id`, `post_title`, `post_desc`, `post_category`, `post_attachment`, `post_author`, `post_source`, `post_date`, `post_time`, `post_venue`, `post_type`, `post_approve`, `user_id`) VALUES
(1, 'FG Insists No More Post-UTME, Directs That Money Paid By Candidates Be Refunde', 'The Minister of Education, Mr. Adamu Adamu, on Monday', 'Part Time', 'Koala2.jpg', 'Dnyanesh', 'http://stackoverflow.com/', '2016-11-02', '', '', 'news', '1', 1),
(2, 'FG Insists No More Post-UTME, Directs That Money Paid By Candidates Be Refunded', 'The Minister of Education, Mr. Adamu Adamu, on Monday, emphasized again that tertiary institutions should stop the conduct of Post-UTME. He directed those who have already advertised the exercise under any guise to retrace their steps immediately or face appropriate sanction.\r\nThe Minister of Education, Mr. Adamu Adamu, on Monday, emphasized again that tertiary institutions should stop the conduct of Post-UTME. He directed those who have already advertised the exercise under any guise to retrace their steps immediately or face appropriate sanction.\r\nThe Minister of Education, Mr. Adamu Adamu, on Monday, emphasized again that tertiary institutions should stop the conduct of Post-UTME. He directed those who have already advertised the exercise under any guise to retrace their steps immediately or face appropriate sanction.\r\nThe Minister of Education, Mr. Adamu Adamu, on Monday, emphasized again that tertiary institutions should stop the conduct of Post-UTME. He directed those who have already advertised the exercise under any guise to retrace their steps immediately or face appropriate sanction.\r\n', 'Admission', '', 'Dnyanesh', 'http://stackoverflow.com/', '12-Aug-2016', '', '', 'news', '1', 1),
(3, 'FG Insists No More Post-UTME, Directs That Money Paid By Candidates Be Refunded', 'The Minister of Education, Mr. Adamu Adamu, on Monday, emphasized again that tertiary institutions should stop the conduct of Post-UTME. He directed those who have already advertised the exercise under any guise to retrace their steps immediately or face appropriate sanction.\r\nThe Minister of Education, Mr. Adamu Adamu, on Monday, emphasized again that tertiary institutions should stop the conduct of Post-UTME. He directed those who have already advertised the exercise under any guise to retrace their steps immediately or face appropriate sanction.\r\nThe Minister of Education, Mr. Adamu Adamu, on Monday, emphasized again that tertiary institutions should stop the conduct of Post-UTME. He directed those who have already advertised the exercise under any guise to retrace their steps immediately or face appropriate sanction.\r\nThe Minister of Education, Mr. Adamu Adamu, on Monday, emphasized again that tertiary institutions should stop the conduct of Post-UTME. He directed those who have already advertised the exercise under any guise to retrace their steps immediately or face appropriate sanction.', 'Admission', '', 'Dnyanesh', 'http://stackoverflow.com/', '12-Aug-2016', '', '', 'news', '1', 1),
(4, 'FG Insists No More Post-UTME, Directs That Money Paid By Candidates Be Refunded', 'The Minister of Education, Mr. Adamu Adamu, on Monday, emphasized again that tertiary institutions should stop the conduct of Post-UTME. He directed those who have already advertised the exercise under any guise to retrace their steps immediately or face appropriate sanction.\r\nThe Minister of Education, Mr. Adamu Adamu, on Monday, emphasized again that tertiary institutions should stop the conduct of Post-UTME. He directed those who have already advertised the exercise under any guise to retrace their steps immediately or face appropriate sanction.\r\nThe Minister of Education, Mr. Adamu Adamu, on Monday, emphasized again that tertiary institutions should stop the conduct of Post-UTME. He directed those who have already advertised the exercise under any guise to retrace their steps immediately or face appropriate sanction.\r\nThe Minister of Education, Mr. Adamu Adamu, on Monday, emphasized again that tertiary institutions should stop the conduct of Post-UTME. He directed those who have already advertised the exercise under any guise to retrace their steps immediately or face appropriate sanction.', 'Admission', '', 'Dnyanesh', 'http://stackoverflow.com/', '12-Aug-2016', '', '', 'news', '', 1),
(5, 'FG Insists No More Post-UTME, Directs That Money Paid By Candidates Be Refunded', 'The Minister of Education, Mr. Adamu Adamu, on Monday, emphasized again that tertiary institutions should stop the conduct of Post-UTME. He directed those who have already advertised the exercise under any guise to retrace their steps immediately or face appropriate sanction.\r\nThe Minister of Education, Mr. Adamu Adamu, on Monday, emphasized again that tertiary institutions should stop the conduct of Post-UTME. He directed those who have already advertised the exercise under any guise to retrace their steps immediately or face appropriate sanction.\r\nThe Minister of Education, Mr. Adamu Adamu, on Monday, emphasized again that tertiary institutions should stop the conduct of Post-UTME. He directed those who have already advertised the exercise under any guise to retrace their steps immediately or face appropriate sanction.\r\nThe Minister of Education, Mr. Adamu Adamu, on Monday, emphasized again that tertiary institutions should stop the conduct of Post-UTME. He directed those who have already advertised the exercise under any guise to retrace their steps immediately or face appropriate sanction.', 'Admission', '', 'Dnyanesh', 'http://stackoverflow.com/', '12-Aug-2016', '', '', 'news', '', 1),
(6, 'test news', 'sdfsdf', '', 'Tulips.jpg', 'sdfs', '2016-11-03', '2016-11-03', '', '', 'gist', '', 1),
(7, 'FG Insists No More Post-UTME, Directs That Money Paid By Candidates Be Refunded', 'The Minister of Education, Mr. Adamu Adamu, on Monday, ', '', 'Lighthouse.jpg', 'SoftInfoLogy', '2016-11-18', '2016-11-25', '', '', 'event', '1', 1),
(8, 'FG Insists No More Post-UTME, Directs That Money Paid By Candidates Be Refundeddd', 'The Minister of Education, Mr. Adamu Adamu, on Monday, emphasized ', '', 'Jellyfish3.jpg', 'Dnyaneshh', '2016-11-25', '2016-11-25', '', '', 'http://stackoverflow.com/', '', 1),
(9, 'testevent', 'tttttt', '', 'Penguins1.jpg', 'Dnyaneshhhh', '', '2016-11-17', '', 'test venue', 'Event', '1', 1),
(10, 'test news', 'sdfds', '', 'Tulips1.jpg', 'don', '2016-11-09', '2016-11-09', '', '', 'http://www.sdfdf.sdfsdf', '', 1),
(11, 'santosh', 'test', '', 'vlcsnap-2016-09-14-16h58m40s45.png', 'softinfology', '', '2016-11-28', '08:06:36 PM', 'amenoora', 'event', '1', 55),
(12, 'swimming', 'bhosale', '', 'vlcsnap-2016-09-14-16h58m40s452.png', 'sssssssss', '', '2016-11-28', '11:25:36 PM', 'pune', 'event', '1', 55);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_posts_comments`
--

CREATE TABLE IF NOT EXISTS `tbl_posts_comments` (
  `post_c_id` int(11) NOT NULL AUTO_INCREMENT,
  `post_c_desc` varchar(200) NOT NULL,
  `post_c_date` varchar(50) NOT NULL,
  `post_c_time` varchar(50) NOT NULL,
  `post_c_type` varchar(50) NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`post_c_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_projects`
--

CREATE TABLE IF NOT EXISTS `tbl_projects` (
  `project_id` int(11) NOT NULL AUTO_INCREMENT,
  `project_title` varchar(100) NOT NULL,
  `project_course` varchar(50) NOT NULL,
  `project_category` varchar(200) NOT NULL,
  `project_year` varchar(50) NOT NULL,
  `project_format` varchar(50) NOT NULL,
  `project_upload` varchar(50) NOT NULL,
  `project_date` varchar(50) NOT NULL,
  `project_time` varchar(50) NOT NULL,
  `project_approve` varchar(10) NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`project_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_projects`
--

INSERT INTO `tbl_projects` (`project_id`, `project_title`, `project_course`, `project_category`, `project_year`, `project_format`, `project_upload`, `project_date`, `project_time`, `project_approve`, `user_id`) VALUES
(1, 'test project', 'test course', '', '2016', 'pdf', 'test.docx', '23 November, 2016', '12:15:51 PM', '1', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_questions`
--

CREATE TABLE IF NOT EXISTS `tbl_questions` (
  `question_id` int(11) NOT NULL AUTO_INCREMENT,
  `question_type` varchar(50) NOT NULL,
  `question_category` varchar(50) NOT NULL,
  `question_desc` varchar(200) NOT NULL,
  `question_date` varchar(50) NOT NULL,
  `question_time` varchar(50) NOT NULL,
  `question_approve` varchar(10) NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`question_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tbl_questions`
--

INSERT INTO `tbl_questions` (`question_id`, `question_type`, `question_category`, `question_desc`, `question_date`, `question_time`, `question_approve`, `user_id`) VALUES
(1, 'Acadamic Question', 'Acadamic Question', 'What is Include in PHP', '17 November, 2016', '11:50:21 AM', '1', 1),
(2, '', '', '', '2016-11-24', '03:27:52 PM', '1', 1),
(3, '', '', '', '2016-11-24', '03:28:02 PM', '0', 1),
(4, 'Acadamic Question', 'Accounting', 'is this jokE?', '2016-11-28', '11:37:20 PM', '1', 55);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_school_comments`
--

CREATE TABLE IF NOT EXISTS `tbl_school_comments` (
  `school_c_id` int(11) NOT NULL AUTO_INCREMENT,
  `school_c_desc` varchar(200) NOT NULL,
  `school_c_date` varchar(50) NOT NULL,
  `school_c_time` varchar(50) NOT NULL,
  `school_c_likes` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`school_c_id`),
  KEY `school_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_school_meta`
--

CREATE TABLE IF NOT EXISTS `tbl_school_meta` (
  `school_id` int(11) NOT NULL AUTO_INCREMENT,
  `registration_type` varchar(50) NOT NULL,
  `school_name` varchar(50) NOT NULL,
  `school_logo` varchar(100) NOT NULL,
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
  `school_date` varchar(50) NOT NULL,
  `school_time` varchar(50) NOT NULL,
  `school_approve` varchar(10) NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`school_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `tbl_school_meta`
--

INSERT INTO `tbl_school_meta` (`school_id`, `registration_type`, `school_name`, `school_logo`, `school_category`, `school_university`, `school_institute`, `other_category`, `school_number`, `school_country`, `school_city`, `school_region`, `school_type`, `school_population`, `teaching_staff`, `non_teaching_staff`, `school_awards`, `school_acadamic_year`, `school_acadamic_fee`, `admission_procedure`, `acadamic_requirment`, `school_scholarship`, `school_address`, `school_url`, `school_desc`, `school_date`, `school_time`, `school_approve`, `user_id`) VALUES
(7, 'Normal Registration', 'Adarsh Vidhyalaya', 'Tulips.jpg', 'Account', 'Agriculture', 'Account', 'Account', '2222222222', 'Ethiopia', 'Kenya', 'Kenya', 'private', 55, 2, 33, '2', '2016', '80000', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '50%', 'Osmanabad', 'http://www.ddd.com', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '22 November, 2016', '12:19:42 PM', '1', 1),
(8, 'Normal Registration', 'SDVL', 'Chrysanthemum.jpg', 'Agriculture', 'Account', 'Agriculture', 'Account', '1111111111', 'Kenya', 'Ethiopia', 'Ethiopia', 'public', 30, 34, 4, '3', '2016', '124444', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '50%', 'Osmanabad', 'http://www.ddd.com', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '22 November, 2016', '12:28:58 PM', '1', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE IF NOT EXISTS `tbl_users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_role` varchar(20) NOT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `user_email` (`user_email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=58 ;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`user_id`, `username`, `first_name`, `last_name`, `password`, `user_email`, `user_role`) VALUES
(1, 'dnyanesh', '', '', 'e6e061838856bf47e1de730719fb2609', 'dnyanesh.mali@softinfology.com', 'admin'),
(55, 'santosh', '', '', 'e6e061838856bf47e1de730719fb2609', 'santoshbhosale123@gmail.com', 'schooluser'),
(56, 'Akshay', '', '', 'd41d8cd98f00b204e9800998ecf8427e', 'dsfasd@dff.com', 'schooluser'),
(57, '', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', 'schooluser');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_meta`
--

CREATE TABLE IF NOT EXISTS `tbl_user_meta` (
  `school_type` varchar(50) NOT NULL,
  `user_school` varchar(50) NOT NULL,
  `user_level` varchar(50) NOT NULL,
  `user_dept` varchar(50) NOT NULL,
  `user_gender` varchar(50) NOT NULL,
  `mobile_no` varchar(50) NOT NULL,
  `user_avatar` blob NOT NULL,
  `marital_status` varchar(50) NOT NULL,
  `interested_in` varchar(50) NOT NULL,
  `about_user` varchar(200) NOT NULL,
  `user_interest` varchar(200) NOT NULL,
  `user_hobby` varchar(200) NOT NULL,
  `user_date` varchar(50) NOT NULL,
  `user_time` varchar(50) NOT NULL,
  `user_id` int(11) NOT NULL,
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user_meta`
--

INSERT INTO `tbl_user_meta` (`school_type`, `user_school`, `user_level`, `user_dept`, `user_gender`, `mobile_no`, `user_avatar`, `marital_status`, `interested_in`, `about_user`, `user_interest`, `user_hobby`, `user_date`, `user_time`, `user_id`) VALUES
('anything', 'anything', 'friendship', 'Comp', 'Male', '4444', '', 'Male', 'Male', 'v', 'v', 'v', '', '', 44),
('', '', '', '', '', '', '', '', '', '', '', '', '', '', 50),
('friendship', 'friendship', 'friendship', '', 'Male', '343', '', '', '', '', '', '', '', '', 52),
('anything', 'anything', 'anything', 'd', 'female', '8888', '', 'Male', 'Male', 'dsd', 'ds', 'sdf', '', '', 53);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_vacancy`
--

CREATE TABLE IF NOT EXISTS `tbl_vacancy` (
  `vacancy_id` int(11) NOT NULL AUTO_INCREMENT,
  `vacancy_name` varchar(100) NOT NULL,
  `vacancy_school_name` varchar(100) NOT NULL,
  `vacancy_count` int(10) NOT NULL,
  `vacancy_from_date` date NOT NULL,
  `vacancy_to_date` date NOT NULL,
  `vacancy_time` varchar(50) NOT NULL,
  `vacancy_date` varchar(50) NOT NULL,
  `vacancy_desc` varchar(5000) NOT NULL,
  `vacancy_approve` varchar(10) NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`vacancy_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

--
-- Dumping data for table `tbl_vacancy`
--

INSERT INTO `tbl_vacancy` (`vacancy_id`, `vacancy_name`, `vacancy_school_name`, `vacancy_count`, `vacancy_from_date`, `vacancy_to_date`, `vacancy_time`, `vacancy_date`, `vacancy_desc`, `vacancy_approve`, `user_id`) VALUES
(15, 'Ethiopia Collage Invite To All Vender For school Maintenance And Other Work.\r\n', 'SDVL', 2500, '2016-11-12', '2016-11-25', '', '', 'The call to reduce the national minimum wage of 18,000 naira by some governors is unfair, callous, insensitive and parochial. Governors who rather can no longer pay the meager 18000 minimum should speedily tender their resignation letters and pave way for more serious politicians who would put the interests of the poor masses first on their agenda for governance. We citizens are also fed up of indolent and corrupt elements as leaders in our government.\r\nThe call to reduce the national minimum wage of 18,000 naira by some governors is unfair, callous, insensitive and parochial. Governors who rather can no longer pay the meager 18000 minimum should speedily tender their resignation letters and pave way for more serious politicians who would put the interests of the poor masses first on their agenda for governance. We citizens are also fed up of indolent and corrupt elements as leaders in our government.\r\nThe call to reduce the national minimum wage of 18,000 naira by some governors is unfair, callous, insensitive and parochial. Governors who rather can no longer pay the meager 18000 minimum should speedily tender their resignation letters and pave way for more serious politicians who would put the interests of the poor masses first on their agenda for governance. We citizens are also fed up of indolent and corrupt elements as leaders in our government.\r\nThe call to reduce the national minimum wage of 18,000 naira by some governors is unfair, callous, insensitive and parochial. Governors who rather can no longer pay the meager 18000 minimum should speedily tender their resignation letters and pave way for more serious politicians who would put the interests of the poor masses first on their agenda for governance. We citizens are also fed up of indolent and corrupt elements as leaders in our government.', '1', 1),
(16, 'Ethiopia Collage Invite To All Vender For school Maintenance And Other Work.\r\n', 'SDVL', 2500, '2016-11-18', '2016-11-26', '', '', 'The call to reduce the national minimum wage of 18,000 naira by some governors is unfair, callous, insensitive and parochial. Governors who rather can no longer pay the meager 18000 minimum should speedily tender their resignation letters and pave way for more serious politicians who would put the interests of the poor masses first on their agenda for governance. We citizens are also fed up of indolent and corrupt elements as leaders in our government.\r\nThe call to reduce the national minimum wage of 18,000 naira by some governors is unfair, callous, insensitive and parochial. Governors who rather can no longer pay the meager 18000 minimum should speedily tender their resignation letters and pave way for more serious politicians who would put the interests of the poor masses first on their agenda for governance. We citizens are also fed up of indolent and corrupt elements as leaders in our government.\r\nThe call to reduce the national minimum wage of 18,000 naira by some governors is unfair, callous, insensitive and parochial. Governors who rather can no longer pay the meager 18000 minimum should speedily tender their resignation letters and pave way for more serious politicians who would put the interests of the poor masses first on their agenda for governance. We citizens are also fed up of indolent and corrupt elements as leaders in our government.\r\nThe call to reduce the national minimum wage of 18,000 naira by some governors is unfair, callous, insensitive and parochial. Governors who rather can no longer pay the meager 18000 minimum should speedily tender their resignation letters and pave way for more serious politicians who would put the interests of the poor masses first on their agenda for governance. We citizens are also fed up of indolent and corrupt elements as leaders in our government.', '1', 1),
(18, 'Ethiopia Collage Invite To All Vender For school Maintenance And Other Work.\r\n', 'SDVL', 2500, '2016-11-15', '2016-11-25', '', '', 'The call to reduce the national minimum wage of 18,000 naira by some governors is unfair, callous, insensitive and parochial. Governors who rather can no longer pay the meager 18000 minimum should speedily tender their resignation letters and pave way for more serious politicians who would put the interests of the poor masses first on their agenda for governance. We citizens are also fed up of indolent and corrupt elements as leaders in our government.\r\nThe call to reduce the national minimum wage of 18,000 naira by some governors is unfair, callous, insensitive and parochial. Governors who rather can no longer pay the meager 18000 minimum should speedily tender their resignation letters and pave way for more serious politicians who would put the interests of the poor masses first on their agenda for governance. We citizens are also fed up of indolent and corrupt elements as leaders in our government.\r\nThe call to reduce the national minimum wage of 18,000 naira by some governors is unfair, callous, insensitive and parochial. Governors who rather can no longer pay the meager 18000 minimum should speedily tender their resignation letters and pave way for more serious politicians who would put the interests of the poor masses first on their agenda for governance. We citizens are also fed up of indolent and corrupt elements as leaders in our government.\r\nThe call to reduce the national minimum wage of 18,000 naira by some governors is unfair, callous, insensitive and parochial. Governors who rather can no longer pay the meager 18000 minimum should speedily tender their resignation letters and pave way for more serious politicians who would put the interests of the poor masses first on their agenda for governance. We citizens are also fed up of indolent and corrupt elements as leaders in our government.', '1', 1),
(19, 'Ethiopia Collage Invite To All Vender For school Maintenance And Other Work.\r\n', 'SDVL', 2500, '2016-11-14', '2016-11-30', '', '', 'The call to reduce the national minimum wage of 18,000 naira by some governors is unfair, callous, insensitive and parochial. Governors who rather can no longer pay the meager 18000 minimum should speedily tender their resignation letters and pave way for more serious politicians who would put the interests of the poor masses first on their agenda for governance. We citizens are also fed up of indolent and corrupt elements as leaders in our government.\r\nThe call to reduce the national minimum wage of 18,000 naira by some governors is unfair, callous, insensitive and parochial. Governors who rather can no longer pay the meager 18000 minimum should speedily tender their resignation letters and pave way for more serious politicians who would put the interests of the poor masses first on their agenda for governance. We citizens are also fed up of indolent and corrupt elements as leaders in our government.\r\nThe call to reduce the national minimum wage of 18,000 naira by some governors is unfair, callous, insensitive and parochial. Governors who rather can no longer pay the meager 18000 minimum should speedily tender their resignation letters and pave way for more serious politicians who would put the interests of the poor masses first on their agenda for governance. We citizens are also fed up of indolent and corrupt elements as leaders in our government.\r\nThe call to reduce the national minimum wage of 18,000 naira by some governors is unfair, callous, insensitive and parochial. Governors who rather can no longer pay the meager 18000 minimum should speedily tender their resignation letters and pave way for more serious politicians who would put the interests of the poor masses first on their agenda for governance. We citizens are also fed up of indolent and corrupt elements as leaders in our government.', '0', 1),
(20, 'Ethiopia Collage Invite To All Vender For school Maintenance And Other Work.', 'SDVL', 2500, '2016-11-15', '2016-11-25', '', '', 'The call to reduce the national minimum wage of 18,000 naira by some governors is unfair, callous, insensitive and parochial. Governors who rather can no longer pay the meager 18000 minimum should speedily tender their resignation letters and pave way for more serious politicians who would put the interests of the poor masses first on their agenda for governance. We citizens are also fed up of indolent and corrupt elements as leaders in our government.\r\nThe call to reduce the national minimum wage of 18,000 naira by some governors is unfair, callous, insensitive and parochial. Governors who rather can no longer pay the meager 18000 minimum should speedily tender their resignation letters and pave way for more serious politicians who would put the interests of the poor masses first on their agenda for governance. We citizens are also fed up of indolent and corrupt elements as leaders in our government.\r\nThe call to reduce the national minimum wage of 18,000 naira by some governors is unfair, callous, insensitive and parochial. Governors who rather can no longer pay the meager 18000 minimum should speedily tender their resignation letters and pave way for more serious politicians who would put the interests of the poor masses first on their agenda for governance. We citizens are also fed up of indolent and corrupt elements as leaders in our government.\r\nThe call to reduce the national minimum wage of 18,000 naira by some governors is unfair, callous, insensitive and parochial. Governors who rather can no longer pay the meager 18000 minimum should speedily tender their resignation letters and pave way for more serious politicians who would put the interests of the poor masses first on their agenda for governance. We citizens are also fed up of indolent and corrupt elements as leaders in our government.', '0', 1),
(21, 'Ethiopia Collage Invite To All Vender For school Maintenance And Other Work.\r\n', 'SDVL', 2500, '2016-11-11', '2016-11-30', '', '', 'The call to reduce the national minimum wage of 18,000 naira by some governors is unfair, callous, insensitive and parochial. Governors who rather can no longer pay the meager 18000 minimum should speedily tender their resignation letters and pave way for more serious politicians who would put the interests of the poor masses first on their agenda for governance. We citizens are also fed up of indolent and corrupt elements as leaders in our government.\r\nThe call to reduce the national minimum wage of 18,000 naira by some governors is unfair, callous, insensitive and parochial. Governors who rather can no longer pay the meager 18000 minimum should speedily tender their resignation letters and pave way for more serious politicians who would put the interests of the poor masses first on their agenda for governance. We citizens are also fed up of indolent and corrupt elements as leaders in our government.\r\nThe call to reduce the national minimum wage of 18,000 naira by some governors is unfair, callous, insensitive and parochial. Governors who rather can no longer pay the meager 18000 minimum should speedily tender their resignation letters and pave way for more serious politicians who would put the interests of the poor masses first on their agenda for governance. We citizens are also fed up of indolent and corrupt elements as leaders in our government.\r\nThe call to reduce the national minimum wage of 18,000 naira by some governors is unfair, callous, insensitive and parochial. Governors who rather can no longer pay the meager 18000 minimum should speedily tender their resignation letters and pave way for more serious politicians who would put the interests of the poor masses first on their agenda for governance. We citizens are also fed up of indolent and corrupt elements as leaders in our government.', '0', 1),
(23, 'Ethiopia Collage Invite To All Vender For school Maintenance And Other Work.\r\n', 'SDVL', 2500, '2016-11-20', '2016-11-30', '', '', 'The call to reduce the national minimum wage of 18,000 naira by some governors is unfair, callous, insensitive and parochial. Governors who rather can no longer pay the meager 18000 minimum should speedily tender their resignation letters and pave way for more serious politicians who would put the interests of the poor masses first on their agenda for governance. We citizens are also fed up of indolent and corrupt elements as leaders in our government.\r\nThe call to reduce the national minimum wage of 18,000 naira by some governors is unfair, callous, insensitive and parochial. Governors who rather can no longer pay the meager 18000 minimum should speedily tender their resignation letters and pave way for more serious politicians who would put the interests of the poor masses first on their agenda for governance. We citizens are also fed up of indolent and corrupt elements as leaders in our government.\r\nThe call to reduce the national minimum wage of 18,000 naira by some governors is unfair, callous, insensitive and parochial. Governors who rather can no longer pay the meager 18000 minimum should speedily tender their resignation letters and pave way for more serious politicians who would put the interests of the poor masses first on their agenda for governance. We citizens are also fed up of indolent and corrupt elements as leaders in our government.\r\nThe call to reduce the national minimum wage of 18,000 naira by some governors is unfair, callous, insensitive and parochial. Governors who rather can no longer pay the meager 18000 minimum should speedily tender their resignation letters and pave way for more serious politicians who would put the interests of the poor masses first on their agenda for governance. We citizens are also fed up of indolent and corrupt elements as leaders in our government.', '0', 1),
(24, 'Ethiopia Collage Invite To All Vender For school Maintenance And Other Work.\r\n', 'SDVL', 2500, '2016-11-27', '2016-11-30', '', '', 'The call to reduce the national minimum wage of 18,000 naira by some governors is unfair, callous, insensitive and parochial. Governors who rather can no longer pay the meager 18000 minimum should speedily tender their resignation letters and pave way for more serious politicians who would put the interests of the poor masses first on their agenda for governance. We citizens are also fed up of indolent and corrupt elements as leaders in our government.\r\nThe call to reduce the national minimum wage of 18,000 naira by some governors is unfair, callous, insensitive and parochial. Governors who rather can no longer pay the meager 18000 minimum should speedily tender their resignation letters and pave way for more serious politicians who would put the interests of the poor masses first on their agenda for governance. We citizens are also fed up of indolent and corrupt elements as leaders in our government.\r\nThe call to reduce the national minimum wage of 18,000 naira by some governors is unfair, callous, insensitive and parochial. Governors who rather can no longer pay the meager 18000 minimum should speedily tender their resignation letters and pave way for more serious politicians who would put the interests of the poor masses first on their agenda for governance. We citizens are also fed up of indolent and corrupt elements as leaders in our government.\r\nThe call to reduce the national minimum wage of 18,000 naira by some governors is unfair, callous, insensitive and parochial. Governors who rather can no longer pay the meager 18000 minimum should speedily tender their resignation letters and pave way for more serious politicians who would put the interests of the poor masses first on their agenda for governance. We citizens are also fed up of indolent and corrupt elements as leaders in our government.', '0', 1),
(25, 'Software Developer', 'VIIT', 2, '2016-11-20', '2016-11-25', '04:39:56 PM', '17 November, 2016', 'Developer for College', '0', 1),
(26, 'Web Developer', 'VIIT', 3, '2016-11-08', '2016-11-16', '06:22:42 PM', '17 November, 2016', 'Web Desigining', '0', 1),
(27, 'Tester', 'VIIT', 1, '2016-11-18', '2016-11-30', '06:23:28 PM', '17 November, 2016', 'Testing', '0', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;