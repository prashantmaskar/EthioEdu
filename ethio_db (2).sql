-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 09, 2016 at 03:30 PM
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
-- Table structure for table `ci_query`
--

CREATE TABLE `ci_query` (
  `id` int(10) NOT NULL,
  `query_string` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(253, 'user_gender=Male'),
(254, 'user_gender=Female'),
(255, 'user_gender=Male'),
(256, 'user_school=Ethiopian'),
(257, ''),
(258, ''),
(259, 'username=santosh'),
(260, 'username=santosh'),
(261, ''),
(262, ''),
(263, ''),
(264, 'username=dnyanesh'),
(265, 'username=dnyanesh'),
(266, 'user_school=Ethiopian'),
(267, 'username=dnyanesh'),
(268, ''),
(269, 'user_school=Ethiopian'),
(270, ''),
(271, 'username=santosh'),
(272, 'user_age=16-19'),
(273, 'user_age=20-25'),
(274, 'user_age=16-19'),
(275, 'user_age=20-25'),
(276, 'user_age=24'),
(277, 'user_age=20-25'),
(278, 'username='),
(279, 'user_age=20-25'),
(280, 'user_age=16-19'),
(281, 'user_age=26-29'),
(282, 'username='),
(283, 'user_age=20-25'),
(284, 'user_age=16-19'),
(285, 'user_school=Ethiopian'),
(286, 'user_school=Ethiopian'),
(287, 'user_gender=Female'),
(288, 'username=dnyanesh'),
(289, 'username=santosh'),
(290, 'username=pallavi'),
(291, 'username=santosh'),
(292, 'project_title=College+Management+Sytem&project_course='),
(293, 'project_title=Gift+Management+System&project_course='),
(294, 'project_title=&project_course=Android+Course'),
(295, 'user_gender=Female'),
(296, 'user_gender=Male');

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
  `advertise_attachment` varchar(200) NOT NULL,
  `advertise_desc` varchar(500) NOT NULL,
  `advertise_date` varchar(50) NOT NULL,
  `advertise_time` varchar(50) NOT NULL,
  `user_id` int(11) NOT NULL,
  `isactive` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_advertise`
--

INSERT INTO `tbl_advertise` (`advertise_id`, `advertise_name`, `advertise_email`, `advertise_number`, `advertise_category`, `advertise_position`, `advertise_subject`, `advertise_attachment`, `advertise_desc`, `advertise_date`, `advertise_time`, `user_id`, `isactive`) VALUES
(1, 'santosh', 'santosh.bhosale123@gmail.com', '7709326583', 'Part Time', 'Right', 'santosh', '', 'santosh', '28 November, 2016', '08:49:53 PM', 1, 1),
(2, 'sssss', 'ss@gmail.com', '77777777', 'Part Time', 'Left', 'tst', 'vlcsnap-2016-09-14-17h19m45s1531.png', 'zzzzz', '29 November, 2016', '08:28:39 AM', 55, 1),
(3, 'yf', 'fghg@gmail.com', '1234567890', 'General', 'Top', 'gssdgfcv ', 'vlcsnap-2016-09-14-16h58m45s100.png', 'gfdfg', '29 November, 2016', '08:39:57 AM', 55, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact`
--

CREATE TABLE `tbl_contact` (
  `contact_id` int(11) NOT NULL,
  `contact_person_name` varchar(100) NOT NULL,
  `contact_person_email` varchar(50) NOT NULL,
  `contact_number` varchar(50) NOT NULL,
  `contact_desc` varchar(200) NOT NULL,
  `contact_date` varchar(50) NOT NULL,
  `contact_time` varchar(50) NOT NULL
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
  `course_date` varchar(50) NOT NULL,
  `course_time` varchar(50) NOT NULL,
  `course_approve` varchar(10) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_course`
--

INSERT INTO `tbl_course` (`course_id`, `course_name`, `course_subject`, `course_category`, `course_duration`, `course_school`, `course_university`, `course_desc`, `course_date`, `course_time`, `course_approve`, `user_id`) VALUES
(4, 'test course', 'sdfsdf', 'bridging', 1095, 'Africa', 'Ethiopia', 'dsffd', '', '', '1', 1),
(5, 'Android Course', 'Andorid Java', 'Degree', 2, 'Ethiopia', '1', 'Android Session For 2 Days', '17 Novembe', '03:44:12 P', '1', 1),
(6, 'PHP', 'PHP', 'certificate', 120, 'Kenya', 'Kenya', 'test course', '2016-11-30', '05:32:17 PM', '1', 1),
(7, 'angular js', 'java', 'graduatediploma', 2555, 'Kenya', 'Ethiopia', 'sss', '08 December, 2016', '10:21:40 AM', '1', 55),
(8, 'javascript', 'java', 'higherdiploma', 60, 'Kenya', 'Ethiopia', 'logic', '08 December, 2016', '12:33:49 PM', '1', 70);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_course_meta`
--

CREATE TABLE `tbl_course_meta` (
  `course_rating` varchar(50) NOT NULL,
  `course_review` varchar(50) NOT NULL,
  `Review_title` varchar(50) NOT NULL,
  `course_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_course_meta`
--

INSERT INTO `tbl_course_meta` (`course_rating`, `course_review`, `Review_title`, `course_id`, `user_id`) VALUES
('5', 'test', 'dfdsf', 5, 70),
('5', 'sss', 'best in web designing to learn', 6, 70),
('3', 'ssss', 'nice', 7, 70),
('2', 'ss', 'ss', 4, 70),
('4', '123', '123', 5, 1),
('3', 'sss', 'sss', 8, 70),
('5', 'ss', 'ss', 8, 1),
('1', 'ss', 'ss', 6, 1),
('5', 'ss', 'ss', 7, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_enquiry`
--

CREATE TABLE `tbl_enquiry` (
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
  `school_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_enquiry`
--

INSERT INTO `tbl_enquiry` (`enquiry_id`, `enquiry_school_name`, `enquiry_person_name`, `enquiry_person_email`, `enquiry_person_location`, `enquiry_person_number`, `enquiry_subject`, `enquiry_message`, `enquiry_date`, `enquiry_time`, `school_id`, `user_id`) VALUES
(1, 'Adarsh Vidhyalaya', 'Santosh B', 'santoshbhosale123@gmail.com', 'Osmanabad', '7777777777', 'test enquiry', 'test enquiry test enquiry', '08 December, 2016', '09:49:16 AM', 7, 70),
(2, 'SDVL', 'Santosh B', 'santoshbhosale123@gmail.com', 'Lasona', '7777777777', 'My School', 'My School My School', '08 December, 2016', '09:51:16 AM', 8, 70),
(3, 'Adarsh Vidhyalaya', 'Santosh B', 'santoshbhosale123@gmail.com', 'sdfsdf', '7777777777', 'sdfsd', 'sdfsdf', '08 December, 2016', '09:57:39 AM', 7, 70),
(4, 'Adarsh Vidhyalaya', 'Santosh B', 'santoshbhosale123@gmail.com', 'pune', '7777777777', 'sdfsdf', 'sdfsd', '08 December, 2016', '09:59:54 AM', 7, 70),
(5, 'Adarsh Vidhyalaya', 'Santosh B', 'santoshbhosale123@gmail.com', 'pune', '7777777777', 'sdfsd', 'sdfsdf', '08 December, 2016', '10:01:14 AM', 7, 70);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_message`
--

CREATE TABLE `tbl_message` (
  `pm_id` int(11) NOT NULL,
  `pm_subject` varchar(500) NOT NULL,
  `pm_message` varchar(5000) NOT NULL,
  `pm_date` varchar(200) NOT NULL,
  `pm_time` varchar(200) NOT NULL,
  `pm_send_to` varchar(200) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_message`
--

INSERT INTO `tbl_message` (`pm_id`, `pm_subject`, `pm_message`, `pm_date`, `pm_time`, `pm_send_to`, `user_id`) VALUES
(6, 'dnyanesh sent item', 'message sent by dnyanesh to santosh', '2016-12-08', '04:21:25 PM', '70', 1),
(7, 'dnyanesh sent item2', 'message from dnyanesh to Santosh', '2016-12-08', '04:22:19 PM', '70', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_posts`
--

CREATE TABLE `tbl_posts` (
  `post_id` int(11) NOT NULL,
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
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_posts`
--

INSERT INTO `tbl_posts` (`post_id`, `post_title`, `post_desc`, `post_category`, `post_attachment`, `post_author`, `post_source`, `post_date`, `post_time`, `post_venue`, `post_type`, `post_approve`, `user_id`) VALUES
(1, 'FG Insists No More Post-UTME, Directs That Money Paid By Candidates Be Refunde', '  The Minister of Education, Mr. Adamu Adamu, on Monday', 'Part Time', '09-12-2016-06-23-03.jpg', 'Dnyanesh', 'http://stackoverflow.com/', '2016-11-02', '08:06:36 PM', '', 'news', '1', 1),
(2, 'FG Insists No More Post-UTME, Directs That Money Paid By Candidates Be Refunded', 'The Minister of Education, Mr. Adamu Adamu, on Monday, emphasized again that tertiary institutions should stop the conduct of Post-UTME. He directed those who have already advertised the exercise under any guise to retrace their steps immediately or face appropriate sanction.\r\nThe Minister of Education, Mr. Adamu Adamu, on Monday, emphasized again that tertiary institutions should stop the conduct of Post-UTME. He directed those who have already advertised the exercise under any guise to retrace their steps immediately or face appropriate sanction.\r\nThe Minister of Education, Mr. Adamu Adamu, on Monday, emphasized again that tertiary institutions should stop the conduct of Post-UTME. He directed those who have already advertised the exercise under any guise to retrace their steps immediately or face appropriate sanction.\r\nThe Minister of Education, Mr. Adamu Adamu, on Monday, emphasized again that tertiary institutions should stop the conduct of Post-UTME. He directed those who have already advertised the exercise under any guise to retrace their steps immediately or face appropriate sanction.\r\n', 'Admission', 'Lighthouse.jpg', 'Dnyanesh', 'http://stackoverflow.com/', '2016-11-22', '', '', 'news', '1', 1),
(3, 'FG Conservative', 'The Minister of Education, Mr. Adamu Adamu, on Monday, emphasized again that tertiary institutions should stop the conduct of Post-UTME. He directed those who have already advertised the exercise under any guise to retrace their steps immediately or face appropriate sanction.\r\nThe Minister of Education, Mr. Adamu Adamu, on Monday, emphasized again that tertiary institutions should stop the conduct of Post-UTME. He directed those who have already advertised the exercise under any guise to retrace their steps immediately or face appropriate sanction.\r\nThe Minister of Education, Mr. Adamu Adamu, on Monday, emphasized again that tertiary institutions should stop the conduct of Post-UTME. He directed those who have already advertised the exercise under any guise to retrace their steps immediately or face appropriate sanction.\r\nThe Minister of Education, Mr. Adamu Adamu, on Monday, emphasized again that tertiary institutions should stop the conduct of Post-UTME. He directed those who have already advertised the exercise under any guise to retrace their steps immediately or face appropriate sanction.', 'Admission', 'Lighthouse.jpg', 'Dnyanesh', 'http://stackoverflow.com/', '2016-11-02', '', '', 'news', '1', 1),
(4, 'FG Insists No More Post-UTME, Directs That Money Paid By Candidates Be Refunded', 'The Minister of Education, Mr. Adamu Adamu, on Monday, emphasized again that tertiary institutions should stop the conduct of Post-UTME. He directed those who have already advertised the exercise under any guise to retrace their steps immediately or face appropriate sanction.\r\nThe Minister of Education, Mr. Adamu Adamu, on Monday, emphasized again that tertiary institutions should stop the conduct of Post-UTME. He directed those who have already advertised the exercise under any guise to retrace their steps immediately or face appropriate sanction.\r\nThe Minister of Education, Mr. Adamu Adamu, on Monday, emphasized again that tertiary institutions should stop the conduct of Post-UTME. He directed those who have already advertised the exercise under any guise to retrace their steps immediately or face appropriate sanction.\r\nThe Minister of Education, Mr. Adamu Adamu, on Monday, emphasized again that tertiary institutions should stop the conduct of Post-UTME. He directed those who have already advertised the exercise under any guise to retrace their steps immediately or face appropriate sanction.', 'Admission', 'Lighthouse.jpg', 'Dnyanesh', 'http://stackoverflow.com/', '12-Aug-2016', '', '', 'news', '1', 1),
(5, 'FG Insists No More Post-UTME, Directs That Money Paid By Candidates Be Refunded', 'The Minister of Education, Mr. Adamu Adamu, on Monday, emphasized again that tertiary institutions should stop the conduct of Post-UTME. He directed those who have already advertised the exercise under any guise to retrace their steps immediately or face appropriate sanction.\r\nThe Minister of Education, Mr. Adamu Adamu, on Monday, emphasized again that tertiary institutions should stop the conduct of Post-UTME. He directed those who have already advertised the exercise under any guise to retrace their steps immediately or face appropriate sanction.\r\nThe Minister of Education, Mr. Adamu Adamu, on Monday, emphasized again that tertiary institutions should stop the conduct of Post-UTME. He directed those who have already advertised the exercise under any guise to retrace their steps immediately or face appropriate sanction.\r\nThe Minister of Education, Mr. Adamu Adamu, on Monday, emphasized again that tertiary institutions should stop the conduct of Post-UTME. He directed those who have already advertised the exercise under any guise to retrace their steps immediately or face appropriate sanction.', 'Admission', 'Lighthouse.jpg', 'Dnyanesh', 'http://stackoverflow.com/', '12-Aug-2016', '', '', 'news', '1', 1),
(6, 'test news', 'sdfsdf', '', 'Lighthouse.jpg', 'sdfs', '2016-11-03', '2016-11-03', '', '', 'gist', '1', 1),
(7, 'FG Insists No More Post-UTME, Directs That Money Paid By Candidates Be Refunded', 'The Minister of Education, Mr. Adamu Adamu, on Monday, ', '', 'Lighthouse.jpg', 'SoftInfoLogy', '2016-11-18', '2016-11-25', '', '', 'event', '1', 1),
(8, 'FG Insists No More Post-UTME, Directs That Money Paid By Candidates Be Refundeddd', 'The Minister of Education, Mr. Adamu Adamu, on Monday, emphasized ', '', 'Lighthouse.jpg', 'Dnyaneshh', '2016-11-25', '2016-11-25', '', '', 'http://stackoverflow.com/', '', 1),
(9, 'testevent', 'tttttt', '', 'Lighthouse.jpg', 'Dnyaneshhhh', '', '2016-11-17', '', 'test venue', 'event', '1', 70),
(10, 'test news', 'sdfds', '', 'Lighthouse.jpg', 'don', '2016-11-09', '2016-11-09', '', '', 'http://www.sdfdf.sdfsdf', '', 1),
(11, 'santosh', 'test', '', 'Lighthouse.jpg', 'softinfology', '', '2016-11-28', '08:06:36 PM', 'amenoora', 'event', '1', 55),
(12, 'swimming', 'bhosale', '', 'Lighthouse.jpg', 'sssssssss', '', '2016-11-28', '11:25:36 PM', 'pune', 'event', '1', 55),
(13, 'test issue image', 'dfdsf', 'Scholarship', 'Lighthouse.jpg', 'sdfdsf', 'http://www.sdfdf.sdfsdf', '2016-12-01', '10:42:11 AM', '', 'news', '1', 70),
(14, '', '', '', '', '', '', '2016-12-02', '04:16:38 PM', '', 'privacy', '', 1),
(15, 'test ', 'test tips ', '', '02-12-2016-04-21-22.jpg', '', '', '2016-12-02', '04:21:22 PM', '', 'tips', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_posts_comments`
--

CREATE TABLE `tbl_posts_comments` (
  `post_c_id` int(11) NOT NULL,
  `post_c_desc` varchar(200) NOT NULL,
  `post_c_date` varchar(50) NOT NULL,
  `post_c_time` varchar(50) NOT NULL,
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
  `project_category` varchar(200) NOT NULL,
  `project_year` varchar(50) NOT NULL,
  `project_format` varchar(50) NOT NULL,
  `project_upload` varchar(50) NOT NULL,
  `project_date` varchar(50) NOT NULL,
  `project_time` varchar(50) NOT NULL,
  `project_approve` varchar(10) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_projects`
--

INSERT INTO `tbl_projects` (`project_id`, `project_title`, `project_course`, `project_category`, `project_year`, `project_format`, `project_upload`, `project_date`, `project_time`, `project_approve`, `user_id`) VALUES
(3, 'College Management Sytem', 'ICT Course', 'Agriculture', '2016', 'word', 'test.docx', '02 December, 2016', '11:05:28 AM', '1', 1),
(4, 'Hospital Management System', 'Android Course', 'Agriculture', '2016', 'word', 'test1.docx', '02 December, 2016', '11:06:05 AM', '1', 1),
(5, 'Gift Management System', 'PHP', 'Administration', '2016', 'word', 'test2.docx', '02 December, 2016', '11:06:44 AM', '1', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_questions`
--

CREATE TABLE `tbl_questions` (
  `question_id` int(11) NOT NULL,
  `question_type` varchar(50) NOT NULL,
  `question_category` varchar(50) NOT NULL,
  `question_desc` varchar(200) NOT NULL,
  `question_date` varchar(50) NOT NULL,
  `question_time` varchar(50) NOT NULL,
  `question_approve` varchar(10) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

CREATE TABLE `tbl_school_comments` (
  `school_c_id` int(11) NOT NULL,
  `school_c_desc` varchar(200) NOT NULL,
  `school_c_date` varchar(50) NOT NULL,
  `school_c_time` varchar(50) NOT NULL,
  `school_c_likes` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_school_meta`
--

CREATE TABLE `tbl_school_meta` (
  `school_id` int(11) NOT NULL,
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
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_school_meta`
--

INSERT INTO `tbl_school_meta` (`school_id`, `registration_type`, `school_name`, `school_logo`, `school_category`, `school_university`, `school_institute`, `other_category`, `school_number`, `school_country`, `school_city`, `school_region`, `school_type`, `school_population`, `teaching_staff`, `non_teaching_staff`, `school_awards`, `school_acadamic_year`, `school_acadamic_fee`, `admission_procedure`, `acadamic_requirment`, `school_scholarship`, `school_address`, `school_url`, `school_desc`, `school_date`, `school_time`, `school_approve`, `user_id`) VALUES
(7, 'Normal Registration', 'Adarsh Vidhyalaya', '06-12-2016-10-21-15.jpg', 'Account', 'Agriculture', 'Account', 'Account', '2222222222', 'Ethiopia', 'Kenya', 'Kenya', 'private', 55, 2, 33, '2', '2016', '80000', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '50%', '', 'http://www.ddd.com', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '22 November, 2016', '12:19:42 PM', '1', 1),
(8, 'Normal Registration', 'SDVL', 'Chrysanthemum.jpg', 'Agriculture', 'Account', 'Agriculture', 'Account', '1111111111', 'Kenya', 'Ethiopia', 'Ethiopia', 'public', 30, 34, 4, '3', '2016', '124444', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '50%', 'Osmanabad', 'http://www.ddd.com', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '22 November, 2016', '12:28:58 PM', '1', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_userresponse`
--

CREATE TABLE `tbl_userresponse` (
  `response_id` int(11) NOT NULL,
  `response_title` varchar(100) DEFAULT NULL,
  `response_type` varchar(50) DEFAULT NULL,
  `response_desc` varchar(5000) DEFAULT NULL,
  `response_like` int(10) DEFAULT NULL,
  `response_date` varchar(50) DEFAULT NULL,
  `response_time` varchar(50) DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `question_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_role` varchar(20) NOT NULL,
  `verificationcode` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`user_id`, `username`, `first_name`, `last_name`, `password`, `user_email`, `user_role`, `verificationcode`) VALUES
(1, 'dnyanesh', 'Dnyanesh', 'M', 'e6e061838856bf47e1de730719fb2609', 'dnyanesh.mali@softinfology.com', 'admin', ''),
(70, 'santosh', 'Santosh', 'B', 'e6e061838856bf47e1de730719fb2609', 'santoshbhosale123@gmail.com', 'schooluser', '7c98456a3f711f1b64b9e083a220591e'),
(71, 'pallavi', 'Pallavi', 'G', 'e6e061838856bf47e1de730719fb2609', 'pallavi@gmail.com', 'schooluser', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_meta`
--

CREATE TABLE `tbl_user_meta` (
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
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user_meta`
--

INSERT INTO `tbl_user_meta` (`school_type`, `user_school`, `user_level`, `user_dept`, `user_gender`, `user_birth`, `user_age`, `mobile_no`, `user_avatar`, `marital_status`, `interested_in`, `about_user`, `user_interest`, `user_hobby`, `user_date`, `user_time`, `user_id`) VALUES
('Ethiopian', 'Ethiopian', 'Student', 'IT', 'Male', '1992-01-15', '19', '9689483519', 'latest-cutest-baby.png', 'Male', 'female', 'Student', 'Friendship', 'Cricket', '06 December, 2016', '04:15:38 PM', 1),
('Ethiopian', 'Ethiopian', 'Student', 'IT', 'Male', '1991-02-04', '28', '7777777777', 'Lighthouse2.jpg', 'Male', 'female', 'About Me', 'Friendship', 'My Hobby', '2016-12-07', '12:30:14 PM', 70),
('Ethiopian', 'Ethiopian', 'Student', 'IT', 'female', '1992-01-08', '24', '7777777777', 'Koala2.jpg', 'Male', 'female', 'Test about Me', 'Friendship', 'Test My Hobby', '2016-12-07', '12:32:06 PM', 71);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_vacancy`
--

CREATE TABLE `tbl_vacancy` (
  `vacancy_id` int(11) NOT NULL,
  `vacancy_name` varchar(100) NOT NULL,
  `vacancy_school_name` varchar(100) NOT NULL,
  `vacancy_count` int(10) NOT NULL,
  `vacancy_from_date` date NOT NULL,
  `vacancy_to_date` date NOT NULL,
  `vacancy_time` varchar(50) NOT NULL,
  `vacancy_date` varchar(50) NOT NULL,
  `vacancy_desc` varchar(5000) NOT NULL,
  `vacancy_approve` varchar(10) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_vacancy`
--

INSERT INTO `tbl_vacancy` (`vacancy_id`, `vacancy_name`, `vacancy_school_name`, `vacancy_count`, `vacancy_from_date`, `vacancy_to_date`, `vacancy_time`, `vacancy_date`, `vacancy_desc`, `vacancy_approve`, `user_id`) VALUES
(28, 'Web Developer', 'VIIT', 2, '2016-12-01', '2016-12-30', '10:22:16 AM', '2016-12-02', 'Web Developer for college site', '1', 1),
(29, 'Android Developer', 'SIL', 2, '2016-12-01', '2016-12-16', '10:24:18 AM', '2016-11-25', 'Application Development', '1', 1),
(30, 'Tester', 'SIL', 2, '2016-12-01', '2016-12-20', '10:25:00 AM', '2016-12-02', 'Testing of Site', '1', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ci_query`
--
ALTER TABLE `ci_query`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `tbl_enquiry`
--
ALTER TABLE `tbl_enquiry`
  ADD PRIMARY KEY (`enquiry_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `tbl_message`
--
ALTER TABLE `tbl_message`
  ADD PRIMARY KEY (`pm_id`),
  ADD KEY `user_id` (`user_id`);

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
-- Indexes for table `tbl_questions`
--
ALTER TABLE `tbl_questions`
  ADD PRIMARY KEY (`question_id`),
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
  ADD PRIMARY KEY (`school_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `tbl_userresponse`
--
ALTER TABLE `tbl_userresponse`
  ADD PRIMARY KEY (`response_id`),
  ADD KEY `question_id` (`question_id`),
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
-- AUTO_INCREMENT for table `ci_query`
--
ALTER TABLE `ci_query`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=297;
--
-- AUTO_INCREMENT for table `tbl_advertise`
--
ALTER TABLE `tbl_advertise`
  MODIFY `advertise_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_course`
--
ALTER TABLE `tbl_course`
  MODIFY `course_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `tbl_enquiry`
--
ALTER TABLE `tbl_enquiry`
  MODIFY `enquiry_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tbl_message`
--
ALTER TABLE `tbl_message`
  MODIFY `pm_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `tbl_posts`
--
ALTER TABLE `tbl_posts`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `tbl_posts_comments`
--
ALTER TABLE `tbl_posts_comments`
  MODIFY `post_c_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_projects`
--
ALTER TABLE `tbl_projects`
  MODIFY `project_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tbl_questions`
--
ALTER TABLE `tbl_questions`
  MODIFY `question_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_school_comments`
--
ALTER TABLE `tbl_school_comments`
  MODIFY `school_c_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_school_meta`
--
ALTER TABLE `tbl_school_meta`
  MODIFY `school_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `tbl_userresponse`
--
ALTER TABLE `tbl_userresponse`
  MODIFY `response_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;
--
-- AUTO_INCREMENT for table `tbl_vacancy`
--
ALTER TABLE `tbl_vacancy`
  MODIFY `vacancy_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_userresponse`
--
ALTER TABLE `tbl_userresponse`
  ADD CONSTRAINT `question_id` FOREIGN KEY (`question_id`) REFERENCES `tbl_questions` (`question_id`),
  ADD CONSTRAINT `user_id` FOREIGN KEY (`user_id`) REFERENCES `tbl_users` (`user_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
