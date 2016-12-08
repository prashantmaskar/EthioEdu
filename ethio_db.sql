-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2016 at 05:43 AM
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
-- Table structure for table `ci_query`
--

CREATE TABLE IF NOT EXISTS `ci_query` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `query_string` longtext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=254 ;

--
-- Dumping data for table `ci_query`
--

INSERT INTO `ci_query` (`id`, `query_string`) VALUES
(233, 'user_level=Student'),
(234, ''),
(235, 'user_level=Student'),
(236, 'user_interest=Friendship'),
(237, ''),
(238, 'user_school=Ethiopian'),
(239, ''),
(240, 'user_gender=Female&user_level=Anything'),
(241, 'user_gender=Female'),
(242, 'user_level=Student'),
(243, 'user_interest=Friendship'),
(244, 'user_interest=Dating'),
(245, 'user_gender=Male'),
(246, 'user_gender=Female'),
(247, ''),
(248, 'user_gender=Female'),
(249, 'user_gender=Female'),
(250, 'user_gender=Male'),
(251, 'user_gender=Female'),
(252, 'user_age=26-29'),
(253, 'user_gender=Male');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `tbl_course`
--

INSERT INTO `tbl_course` (`course_id`, `course_name`, `course_subject`, `course_category`, `course_duration`, `course_school`, `course_university`, `course_desc`, `course_date`, `course_time`, `course_approve`, `user_id`) VALUES
(4, 'test course', 'sdfsdf', 'bridging', 1095, 'Africa', 'Ethiopia', 'dsffd', '', '', '1', 1),
(5, 'Android Course', 'Andorid Java', 'Degree', 2, 'Ethiopia', '1', 'Android Session For 2 Days', '17 Novembe', '03:44:12 P', '1', 1),
(6, 'PHP', 'PHP', 'certificate', 120, 'Kenya', 'Kenya', 'test course', '2016-11-30', '05:32:17 PM', '1', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_course_meta`
--

CREATE TABLE IF NOT EXISTS `tbl_course_meta` (
  `course_rating` varchar(50) NOT NULL,
  `course_review` varchar(50) NOT NULL,
  `Review_title` varchar(50) NOT NULL,
  `course_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  KEY `course_id` (`course_id`,`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_course_meta`
--

INSERT INTO `tbl_course_meta` (`course_rating`, `course_review`, `Review_title`, `course_id`, `user_id`) VALUES
('3', 'test', 'test', 5, 70),
('3', 'sss', 'assa', 6, 70);

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

--
-- Dumping data for table `tbl_enquiry`
--

INSERT INTO `tbl_enquiry` (`enquiry_id`, `enquiry_school_name`, `enquiry_person_name`, `enquiry_person_email`, `enquiry_person_location`, `enquiry_person_number`, `enquiry_subject`, `enquiry_message`, `enquiry_date`, `enquiry_time`, `user_id`) VALUES
(0, 'Adarsh Vidhyalaya', 'Dnyanesh Mali', 'dnyanesh.mali@softinfology.com', 'osmanabad', '9689483519', 'test', 'test', '07 December, 2016', '06:54:57 PM', 1),
(0, 'Adarsh Vidhyalaya', 'Dnyanesh Mali', 'dnyanesh.mali@softinfology.com', 'osmanambad', '9689483519', 'test222', 'testtesttesttesttest', '07 December, 2016', '07:08:36 PM', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_message`
--

CREATE TABLE IF NOT EXISTS `tbl_message` (
  `pm_id` int(11) NOT NULL AUTO_INCREMENT,
  `pm_subject` varchar(500) NOT NULL,
  `pm_message` varchar(5000) NOT NULL,
  `pm_date` varchar(200) NOT NULL,
  `pm_time` varchar(200) NOT NULL,
  `pm_send_to` varchar(200) NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`pm_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tbl_message`
--

INSERT INTO `tbl_message` (`pm_id`, `pm_subject`, `pm_message`, `pm_date`, `pm_time`, `pm_send_to`, `user_id`) VALUES
(1, 'test subject', 'test message', '0000-00-00', '06:11:53 PM', '55', 1),
(2, 'sdfsdf', 'sdfsdf', '0000-00-00', '06:16:42 PM', '55', 1),
(3, 'sdfsdf', 'sdfsdf', '06 December, 2016', '06:21:37 PM', '55', 1),
(4, 'sdfsd', 'test date', '2016-12-06', '06:38:08 PM', '55', 1),
(5, 'test testtest', 'testtesttesttesttest', '2016-12-06', '06:39:32 PM', '55', 1);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `tbl_posts`
--

INSERT INTO `tbl_posts` (`post_id`, `post_title`, `post_desc`, `post_category`, `post_attachment`, `post_author`, `post_source`, `post_date`, `post_time`, `post_venue`, `post_type`, `post_approve`, `user_id`) VALUES
(1, 'FG Insists No More Post-UTME, Directs That Money Paid By Candidates Be Refunde', ' The Minister of Education, Mr. Adamu Adamu, on Monday', 'Part Time', '06-12-2016-10-44-58.jpg', 'Dnyanesh', 'http://stackoverflow.com/', '2016-11-02', '', '', 'news', '1', 1),
(2, 'FG Insists No More Post-UTME, Directs That Money Paid By Candidates Be Refunded', 'The Minister of Education, Mr. Adamu Adamu, on Monday, emphasized again that tertiary institutions should stop the conduct of Post-UTME. He directed those who have already advertised the exercise under any guise to retrace their steps immediately or face appropriate sanction.\r\nThe Minister of Education, Mr. Adamu Adamu, on Monday, emphasized again that tertiary institutions should stop the conduct of Post-UTME. He directed those who have already advertised the exercise under any guise to retrace their steps immediately or face appropriate sanction.\r\nThe Minister of Education, Mr. Adamu Adamu, on Monday, emphasized again that tertiary institutions should stop the conduct of Post-UTME. He directed those who have already advertised the exercise under any guise to retrace their steps immediately or face appropriate sanction.\r\nThe Minister of Education, Mr. Adamu Adamu, on Monday, emphasized again that tertiary institutions should stop the conduct of Post-UTME. He directed those who have already advertised the exercise under any guise to retrace their steps immediately or face appropriate sanction.\r\n', 'Admission', 'Lighthouse.jpg', 'Dnyanesh', 'http://stackoverflow.com/', '2016-11-22', '', '', 'news', '1', 1),
(3, 'FG Conservative', 'The Minister of Education, Mr. Adamu Adamu, on Monday, emphasized again that tertiary institutions should stop the conduct of Post-UTME. He directed those who have already advertised the exercise under any guise to retrace their steps immediately or face appropriate sanction.\r\nThe Minister of Education, Mr. Adamu Adamu, on Monday, emphasized again that tertiary institutions should stop the conduct of Post-UTME. He directed those who have already advertised the exercise under any guise to retrace their steps immediately or face appropriate sanction.\r\nThe Minister of Education, Mr. Adamu Adamu, on Monday, emphasized again that tertiary institutions should stop the conduct of Post-UTME. He directed those who have already advertised the exercise under any guise to retrace their steps immediately or face appropriate sanction.\r\nThe Minister of Education, Mr. Adamu Adamu, on Monday, emphasized again that tertiary institutions should stop the conduct of Post-UTME. He directed those who have already advertised the exercise under any guise to retrace their steps immediately or face appropriate sanction.', 'Admission', 'Lighthouse.jpg', 'Dnyanesh', 'http://stackoverflow.com/', '2016-11-02', '', '', 'news', '1', 1),
(4, 'FG Insists No More Post-UTME, Directs That Money Paid By Candidates Be Refunded', 'The Minister of Education, Mr. Adamu Adamu, on Monday, emphasized again that tertiary institutions should stop the conduct of Post-UTME. He directed those who have already advertised the exercise under any guise to retrace their steps immediately or face appropriate sanction.\r\nThe Minister of Education, Mr. Adamu Adamu, on Monday, emphasized again that tertiary institutions should stop the conduct of Post-UTME. He directed those who have already advertised the exercise under any guise to retrace their steps immediately or face appropriate sanction.\r\nThe Minister of Education, Mr. Adamu Adamu, on Monday, emphasized again that tertiary institutions should stop the conduct of Post-UTME. He directed those who have already advertised the exercise under any guise to retrace their steps immediately or face appropriate sanction.\r\nThe Minister of Education, Mr. Adamu Adamu, on Monday, emphasized again that tertiary institutions should stop the conduct of Post-UTME. He directed those who have already advertised the exercise under any guise to retrace their steps immediately or face appropriate sanction.', 'Admission', 'Lighthouse.jpg', 'Dnyanesh', 'http://stackoverflow.com/', '12-Aug-2016', '', '', 'news', '', 1),
(5, 'FG Insists No More Post-UTME, Directs That Money Paid By Candidates Be Refunded', 'The Minister of Education, Mr. Adamu Adamu, on Monday, emphasized again that tertiary institutions should stop the conduct of Post-UTME. He directed those who have already advertised the exercise under any guise to retrace their steps immediately or face appropriate sanction.\r\nThe Minister of Education, Mr. Adamu Adamu, on Monday, emphasized again that tertiary institutions should stop the conduct of Post-UTME. He directed those who have already advertised the exercise under any guise to retrace their steps immediately or face appropriate sanction.\r\nThe Minister of Education, Mr. Adamu Adamu, on Monday, emphasized again that tertiary institutions should stop the conduct of Post-UTME. He directed those who have already advertised the exercise under any guise to retrace their steps immediately or face appropriate sanction.\r\nThe Minister of Education, Mr. Adamu Adamu, on Monday, emphasized again that tertiary institutions should stop the conduct of Post-UTME. He directed those who have already advertised the exercise under any guise to retrace their steps immediately or face appropriate sanction.', 'Admission', 'Lighthouse.jpg', 'Dnyanesh', 'http://stackoverflow.com/', '12-Aug-2016', '', '', 'news', '', 1),
(6, 'test news', 'sdfsdf', '', 'Lighthouse.jpg', 'sdfs', '2016-11-03', '2016-11-03', '', '', 'gist', '1', 1),
(7, 'FG Insists No More Post-UTME, Directs That Money Paid By Candidates Be Refunded', 'The Minister of Education, Mr. Adamu Adamu, on Monday, ', '', 'Lighthouse.jpg', 'SoftInfoLogy', '2016-11-18', '2016-11-25', '', '', 'event', '1', 1),
(8, 'FG Insists No More Post-UTME, Directs That Money Paid By Candidates Be Refundeddd', 'The Minister of Education, Mr. Adamu Adamu, on Monday, emphasized ', '', 'Lighthouse.jpg', 'Dnyaneshh', '2016-11-25', '2016-11-25', '', '', 'http://stackoverflow.com/', '', 1),
(9, 'testevent', 'tttttt', '', 'Lighthouse.jpg', 'Dnyaneshhhh', '', '2016-11-17', '', 'test venue', 'event', '1', 1),
(10, 'test news', 'sdfds', '', 'Lighthouse.jpg', 'don', '2016-11-09', '2016-11-09', '', '', 'http://www.sdfdf.sdfsdf', '', 1),
(11, 'santosh', 'test', '', 'Lighthouse.jpg', 'softinfology', '', '2016-11-28', '08:06:36 PM', 'amenoora', 'event', '1', 55),
(12, 'swimming', 'bhosale', '', 'Lighthouse.jpg', 'sssssssss', '', '2016-11-28', '11:25:36 PM', 'pune', 'event', '1', 55),
(13, 'test issue image', 'dfdsf', 'Scholarship', 'Lighthouse.jpg', 'sdfdsf', 'http://www.sdfdf.sdfsdf', '2016-12-01', '10:42:11 AM', '', 'news', '0', 1),
(14, '', '', '', '', '', '', '2016-12-02', '04:16:38 PM', '', 'privacy', '', 1),
(15, 'test ', 'test tips ', '', '02-12-2016-04-21-22.jpg', '', '', '2016-12-02', '04:21:22 PM', '', 'tips', '', 1);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `tbl_projects`
--

INSERT INTO `tbl_projects` (`project_id`, `project_title`, `project_course`, `project_category`, `project_year`, `project_format`, `project_upload`, `project_date`, `project_time`, `project_approve`, `user_id`) VALUES
(3, 'College Management Sytem', 'ICT Course', 'Agriculture', '2016', 'word', 'test.docx', '02 December, 2016', '11:05:28 AM', '1', 1),
(4, 'Hospital Management System', 'Android Course', 'Agriculture', '2016', 'word', 'test1.docx', '02 December, 2016', '11:06:05 AM', '1', 1),
(5, 'Gift Management System', 'PHP', 'Administration', '2016', 'word', 'test2.docx', '02 December, 2016', '11:06:44 AM', '1', 1),
(6, 'santosh', 'angular js', 'EET', '2016', 'word', 'Tejas_Resume.docx', '08 December, 2016', '08:11:28 AM', '0', 70),
(7, 'sagar', 'interior', 'Arts_Humanity ', '2016', 'word', 'CodeIgniter_2_1_2_User_Guide.pdf', '08 December, 2016', '08:15:47 AM', '0', 70),
(8, 'sssssaaa', 'javascript', 'Arts_Humanity ', '2016', '2017', '08-12-2016-08-18-28.pdf', '2016-12-08', '08:18:28 AM', '0', 1);

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
(7, 'Normal Registration', 'Adarsh Vidhyalaya', '06-12-2016-10-21-15.jpg', 'Account', 'Agriculture', 'Account', 'Account', '2222222222', 'Ethiopia', 'Kenya', 'Kenya', 'private', 55, 2, 33, '2', '2016', '80000', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '50%', '', 'http://www.ddd.com', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '22 November, 2016', '12:19:42 PM', '1', 1),
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=72 ;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`user_id`, `username`, `first_name`, `last_name`, `password`, `user_email`, `user_role`) VALUES
(1, 'dnyanesh', 'Dnyanesh', 'Mali', 'e6e061838856bf47e1de730719fb2609', 'dnyanesh.mali@softinfology.com', 'admin'),
(70, 'santosh', 'Santosh', 'B', 'e6e061838856bf47e1de730719fb2609', 'santoshbhosale123@gmail.com', 'schooluser'),
(71, 'pallavi', 'Pallavi', 'G', 'e3480a8108a815dcfacfecda86a31889', 'pallavi@gmail.com', 'schooluser');

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
  `user_birth` varchar(400) NOT NULL,
  `user_age` varchar(50) NOT NULL,
  `mobile_no` varchar(50) NOT NULL,
  `user_avatar` varchar(500) NOT NULL,
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

INSERT INTO `tbl_user_meta` (`school_type`, `user_school`, `user_level`, `user_dept`, `user_gender`, `user_birth`, `user_age`, `mobile_no`, `user_avatar`, `marital_status`, `interested_in`, `about_user`, `user_interest`, `user_hobby`, `user_date`, `user_time`, `user_id`) VALUES
('Ethiopian', 'Ethiopian', 'Student', 'IT', 'Male', '', '0', '9689483519', 'latest-cutest-baby.png', 'Male', 'female', 'Student', 'Friendship', 'Cricket', '06 December, 2016', '04:15:38 PM', 1),
('Ethiopian', 'Ethiopian', 'Student', 'IT', 'Male', '1991-02-04', '20-25', '7777777777', 'Lighthouse2.jpg', 'Male', 'female', 'About Me', 'Friendship', 'My Hobby', '2016-12-07', '12:30:14 PM', 70),
('Ethiopian', 'Ethiopian', 'Student', 'IT', 'female', '1992-01-08', '24', '7777777777', 'Koala2.jpg', 'Male', 'female', 'Test about Me', 'Friendship', 'Test My Hobby', '2016-12-07', '12:32:06 PM', 71);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

--
-- Dumping data for table `tbl_vacancy`
--

INSERT INTO `tbl_vacancy` (`vacancy_id`, `vacancy_name`, `vacancy_school_name`, `vacancy_count`, `vacancy_from_date`, `vacancy_to_date`, `vacancy_time`, `vacancy_date`, `vacancy_desc`, `vacancy_approve`, `user_id`) VALUES
(28, 'Web Developer', 'VIIT', 2, '2016-12-01', '2016-12-30', '10:22:16 AM', '2016-12-02', 'Web Developer for college site', '1', 1),
(29, 'Android Developer', 'SIL', 2, '2016-12-01', '2016-12-16', '10:24:18 AM', '2016-11-25', 'Application Development', '1', 1),
(30, 'Tester', 'SIL', 2, '2016-12-01', '2016-12-20', '10:25:00 AM', '2016-12-02', 'Testing of Site', '1', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
