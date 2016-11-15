-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 15, 2016 at 02:16 PM
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
  `advertise_attachment` varchar(200) NOT NULL,
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
  `contact_number` varchar(50) NOT NULL,
  `contact_desc` varchar(200) NOT NULL
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
(3, '', '', '', 0, '', '', '', 1);

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
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `post_date` varchar(30) NOT NULL,
  `post_venue` varchar(50) NOT NULL,
  `post_type` varchar(50) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_posts`
--

INSERT INTO `tbl_posts` (`post_id`, `post_title`, `post_desc`, `post_category`, `post_attachment`, `post_author`, `post_source`, `post_date`, `post_venue`, `post_type`, `user_id`) VALUES
(1, 'FG Insists No More Post-UTME, Directs That Money Paid By Candidates Be Refundeddd', 'The Minister of Education, Mr. Adamu Adamu, on Monday', 'Part Time', 'Chrysanthemum2.jpg', 'Dnyanesh', 'http://stackoverflow.com/', '2016-11-02', '', 'news', 1),
(2, 'FG Insists No More Post-UTME, Directs That Money Paid By Candidates Be Refunded', 'The Minister of Education, Mr. Adamu Adamu, on Monday, emphasized again that tertiary institutions should stop the conduct of Post-UTME. He directed those who have already advertised the exercise under any guise to retrace their steps immediately or face appropriate sanction.\r\nThe Minister of Education, Mr. Adamu Adamu, on Monday, emphasized again that tertiary institutions should stop the conduct of Post-UTME. He directed those who have already advertised the exercise under any guise to retrace their steps immediately or face appropriate sanction.\r\nThe Minister of Education, Mr. Adamu Adamu, on Monday, emphasized again that tertiary institutions should stop the conduct of Post-UTME. He directed those who have already advertised the exercise under any guise to retrace their steps immediately or face appropriate sanction.\r\nThe Minister of Education, Mr. Adamu Adamu, on Monday, emphasized again that tertiary institutions should stop the conduct of Post-UTME. He directed those who have already advertised the exercise under any guise to retrace their steps immediately or face appropriate sanction.\r\n', 'Admission', '', 'Dnyanesh', 'http://stackoverflow.com/', '12-Aug-2016', '', 'news', 1),
(3, 'FG Insists No More Post-UTME, Directs That Money Paid By Candidates Be Refunded', 'The Minister of Education, Mr. Adamu Adamu, on Monday, emphasized again that tertiary institutions should stop the conduct of Post-UTME. He directed those who have already advertised the exercise under any guise to retrace their steps immediately or face appropriate sanction.\r\nThe Minister of Education, Mr. Adamu Adamu, on Monday, emphasized again that tertiary institutions should stop the conduct of Post-UTME. He directed those who have already advertised the exercise under any guise to retrace their steps immediately or face appropriate sanction.\r\nThe Minister of Education, Mr. Adamu Adamu, on Monday, emphasized again that tertiary institutions should stop the conduct of Post-UTME. He directed those who have already advertised the exercise under any guise to retrace their steps immediately or face appropriate sanction.\r\nThe Minister of Education, Mr. Adamu Adamu, on Monday, emphasized again that tertiary institutions should stop the conduct of Post-UTME. He directed those who have already advertised the exercise under any guise to retrace their steps immediately or face appropriate sanction.', 'Admission', '', 'Dnyanesh', 'http://stackoverflow.com/', '12-Aug-2016', '', 'news', 1),
(4, 'FG Insists No More Post-UTME, Directs That Money Paid By Candidates Be Refunded', 'The Minister of Education, Mr. Adamu Adamu, on Monday, emphasized again that tertiary institutions should stop the conduct of Post-UTME. He directed those who have already advertised the exercise under any guise to retrace their steps immediately or face appropriate sanction.\r\nThe Minister of Education, Mr. Adamu Adamu, on Monday, emphasized again that tertiary institutions should stop the conduct of Post-UTME. He directed those who have already advertised the exercise under any guise to retrace their steps immediately or face appropriate sanction.\r\nThe Minister of Education, Mr. Adamu Adamu, on Monday, emphasized again that tertiary institutions should stop the conduct of Post-UTME. He directed those who have already advertised the exercise under any guise to retrace their steps immediately or face appropriate sanction.\r\nThe Minister of Education, Mr. Adamu Adamu, on Monday, emphasized again that tertiary institutions should stop the conduct of Post-UTME. He directed those who have already advertised the exercise under any guise to retrace their steps immediately or face appropriate sanction.', 'Admission', '', 'Dnyanesh', 'http://stackoverflow.com/', '12-Aug-2016', '', 'news', 1),
(5, 'FG Insists No More Post-UTME, Directs That Money Paid By Candidates Be Refunded', 'The Minister of Education, Mr. Adamu Adamu, on Monday, emphasized again that tertiary institutions should stop the conduct of Post-UTME. He directed those who have already advertised the exercise under any guise to retrace their steps immediately or face appropriate sanction.\r\nThe Minister of Education, Mr. Adamu Adamu, on Monday, emphasized again that tertiary institutions should stop the conduct of Post-UTME. He directed those who have already advertised the exercise under any guise to retrace their steps immediately or face appropriate sanction.\r\nThe Minister of Education, Mr. Adamu Adamu, on Monday, emphasized again that tertiary institutions should stop the conduct of Post-UTME. He directed those who have already advertised the exercise under any guise to retrace their steps immediately or face appropriate sanction.\r\nThe Minister of Education, Mr. Adamu Adamu, on Monday, emphasized again that tertiary institutions should stop the conduct of Post-UTME. He directed those who have already advertised the exercise under any guise to retrace their steps immediately or face appropriate sanction.', 'Admission', '', 'Dnyanesh', 'http://stackoverflow.com/', '12-Aug-2016', '', 'news', 1),
(6, 'test news', 'sdfsdf', '', 'Tulips.jpg', 'sdfs', '2016-11-03', '2016-11-03', '', 'gist', 1),
(7, 'FG Insists No More Post-UTME, Directs That Money Paid By Candidates Be Refunded', 'The Minister of Education, Mr. Adamu Adamu, on Monday, ', '', 'Chrysanthemum.jpg', 'Dnyanesh', '2016-11-18', '2016-11-18', '', 'event', 1),
(8, 'FG Insists No More Post-UTME, Directs That Money Paid By Candidates Be Refundeddd', 'The Minister of Education, Mr. Adamu Adamu, on Monday, emphasized ', '', 'Jellyfish3.jpg', 'Dnyaneshh', '2016-11-25', '2016-11-25', '', 'http://stackoverflow.com/', 1);

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
  `project_format` varchar(50) NOT NULL,
  `project_upload` varchar(50) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_questions`
--

CREATE TABLE `tbl_questions` (
  `question_id` int(11) NOT NULL,
  `question_type` varchar(50) NOT NULL,
  `question_category` varchar(50) NOT NULL,
  `question_desc` varchar(200) NOT NULL,
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
('', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, '', '', '', '', '', '', '', '', '', 45),
('Normal Registration', 'df', '', '', '', 'Agreeculture', '5555', 'Ethiopia', 'Kenya', 'diredawa', 'Kenya', 4, 4, 4, '5', '4344334', '345', 'dfg', 'dfg', 'dfg', 'dfg', 'dfg', 'dfg', 54),
('Normal Registration', 'SDVL', '', '', '', 'Agreeculture', '45454545', 'Kenya', 'Kenya', 'oromia', 'Kenya', 6, 7, 8, '4', '4', '34', 'fdfg', 'sdfsf', 'sdf', 'sdf', 'sdf', 'sdf', 55);

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
(1, 'dnyanesh', 'e6e061838856bf47e1de730719fb2609', 'dnyanesh.mali@softinfology.com', 'admin'),
(55, 'santosh', 'e6e061838856bf47e1de730719fb2609', 'santoshbhosale123@gmail.com', 'schooluser');

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
('friendship', 'friendship', 'friendship', '', 'd', 'dsf', 'Male', '343', '', '', '', '', '', '', 52),
('anything', 'anything', 'anything', 'd', 'fn', 'ln', 'female', '8888', '', 'Male', 'Male', 'dsd', 'ds', 'sdf', 53);

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
  `vacancy_desc` varchar(5000) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_vacancy`
--

INSERT INTO `tbl_vacancy` (`vacancy_id`, `vacancy_name`, `vacancy_school_name`, `vacancy_count`, `vacancy_from_date`, `vacancy_to_date`, `vacancy_status`, `vacancy_desc`, `user_id`) VALUES
(14, 'Ethiopia Collage Invite To All Vender For school Maintenance And Other Work.\r\n', 'SDVL', 2500, '01-Aug-2016', '10-Aug-2016', 'closed', 'The call to reduce the national minimum wage of 18,000 naira by some governors is unfair, callous, insensitive and parochial. Governors who rather can no longer pay the meager 18000 minimum should speedily tender their resignation letters and pave way for more serious politicians who would put the interests of the poor masses first on their agenda for governance. We citizens are also fed up of indolent and corrupt elements as leaders in our government.\r\nThe call to reduce the national minimum wage of 18,000 naira by some governors is unfair, callous, insensitive and parochial. Governors who rather can no longer pay the meager 18000 minimum should speedily tender their resignation letters and pave way for more serious politicians who would put the interests of the poor masses first on their agenda for governance. We citizens are also fed up of indolent and corrupt elements as leaders in our government.\r\nThe call to reduce the national minimum wage of 18,000 naira by some governors is unfair, callous, insensitive and parochial. Governors who rather can no longer pay the meager 18000 minimum should speedily tender their resignation letters and pave way for more serious politicians who would put the interests of the poor masses first on their agenda for governance. We citizens are also fed up of indolent and corrupt elements as leaders in our government.\r\nThe call to reduce the national minimum wage of 18,000 naira by some governors is unfair, callous, insensitive and parochial. Governors who rather can no longer pay the meager 18000 minimum should speedily tender their resignation letters and pave way for more serious politicians who would put the interests of the poor masses first on their agenda for governance. We citizens are also fed up of indolent and corrupt elements as leaders in our government.', 1),
(15, 'Ethiopia Collage Invite To All Vender For school Maintenance And Other Work.\r\n', 'SDVL', 2500, '01-Aug-2016', '10-Aug-2016', 'closed', 'The call to reduce the national minimum wage of 18,000 naira by some governors is unfair, callous, insensitive and parochial. Governors who rather can no longer pay the meager 18000 minimum should speedily tender their resignation letters and pave way for more serious politicians who would put the interests of the poor masses first on their agenda for governance. We citizens are also fed up of indolent and corrupt elements as leaders in our government.\r\nThe call to reduce the national minimum wage of 18,000 naira by some governors is unfair, callous, insensitive and parochial. Governors who rather can no longer pay the meager 18000 minimum should speedily tender their resignation letters and pave way for more serious politicians who would put the interests of the poor masses first on their agenda for governance. We citizens are also fed up of indolent and corrupt elements as leaders in our government.\r\nThe call to reduce the national minimum wage of 18,000 naira by some governors is unfair, callous, insensitive and parochial. Governors who rather can no longer pay the meager 18000 minimum should speedily tender their resignation letters and pave way for more serious politicians who would put the interests of the poor masses first on their agenda for governance. We citizens are also fed up of indolent and corrupt elements as leaders in our government.\r\nThe call to reduce the national minimum wage of 18,000 naira by some governors is unfair, callous, insensitive and parochial. Governors who rather can no longer pay the meager 18000 minimum should speedily tender their resignation letters and pave way for more serious politicians who would put the interests of the poor masses first on their agenda for governance. We citizens are also fed up of indolent and corrupt elements as leaders in our government.', 1),
(16, 'Ethiopia Collage Invite To All Vender For school Maintenance And Other Work.\r\n', 'SDVL', 2500, '01-Aug-2016', '10-Aug-2016', 'closed', 'The call to reduce the national minimum wage of 18,000 naira by some governors is unfair, callous, insensitive and parochial. Governors who rather can no longer pay the meager 18000 minimum should speedily tender their resignation letters and pave way for more serious politicians who would put the interests of the poor masses first on their agenda for governance. We citizens are also fed up of indolent and corrupt elements as leaders in our government.\r\nThe call to reduce the national minimum wage of 18,000 naira by some governors is unfair, callous, insensitive and parochial. Governors who rather can no longer pay the meager 18000 minimum should speedily tender their resignation letters and pave way for more serious politicians who would put the interests of the poor masses first on their agenda for governance. We citizens are also fed up of indolent and corrupt elements as leaders in our government.\r\nThe call to reduce the national minimum wage of 18,000 naira by some governors is unfair, callous, insensitive and parochial. Governors who rather can no longer pay the meager 18000 minimum should speedily tender their resignation letters and pave way for more serious politicians who would put the interests of the poor masses first on their agenda for governance. We citizens are also fed up of indolent and corrupt elements as leaders in our government.\r\nThe call to reduce the national minimum wage of 18,000 naira by some governors is unfair, callous, insensitive and parochial. Governors who rather can no longer pay the meager 18000 minimum should speedily tender their resignation letters and pave way for more serious politicians who would put the interests of the poor masses first on their agenda for governance. We citizens are also fed up of indolent and corrupt elements as leaders in our government.', 1),
(17, 'Ethiopia Collage Invite To All Vender For school Maintenance And Other Work.\r\n', 'SDVL', 2500, '01-Aug-2016', '10-Aug-2016', 'closed', 'The call to reduce the national minimum wage of 18,000 naira by some governors is unfair, callous, insensitive and parochial. Governors who rather can no longer pay the meager 18000 minimum should speedily tender their resignation letters and pave way for more serious politicians who would put the interests of the poor masses first on their agenda for governance. We citizens are also fed up of indolent and corrupt elements as leaders in our government.\r\nThe call to reduce the national minimum wage of 18,000 naira by some governors is unfair, callous, insensitive and parochial. Governors who rather can no longer pay the meager 18000 minimum should speedily tender their resignation letters and pave way for more serious politicians who would put the interests of the poor masses first on their agenda for governance. We citizens are also fed up of indolent and corrupt elements as leaders in our government.\r\nThe call to reduce the national minimum wage of 18,000 naira by some governors is unfair, callous, insensitive and parochial. Governors who rather can no longer pay the meager 18000 minimum should speedily tender their resignation letters and pave way for more serious politicians who would put the interests of the poor masses first on their agenda for governance. We citizens are also fed up of indolent and corrupt elements as leaders in our government.\r\nThe call to reduce the national minimum wage of 18,000 naira by some governors is unfair, callous, insensitive and parochial. Governors who rather can no longer pay the meager 18000 minimum should speedily tender their resignation letters and pave way for more serious politicians who would put the interests of the poor masses first on their agenda for governance. We citizens are also fed up of indolent and corrupt elements as leaders in our government.', 1),
(18, 'Ethiopia Collage Invite To All Vender For school Maintenance And Other Work.\r\n', 'SDVL', 2500, '01-Aug-2016', '10-Aug-2016', 'closed', 'The call to reduce the national minimum wage of 18,000 naira by some governors is unfair, callous, insensitive and parochial. Governors who rather can no longer pay the meager 18000 minimum should speedily tender their resignation letters and pave way for more serious politicians who would put the interests of the poor masses first on their agenda for governance. We citizens are also fed up of indolent and corrupt elements as leaders in our government.\r\nThe call to reduce the national minimum wage of 18,000 naira by some governors is unfair, callous, insensitive and parochial. Governors who rather can no longer pay the meager 18000 minimum should speedily tender their resignation letters and pave way for more serious politicians who would put the interests of the poor masses first on their agenda for governance. We citizens are also fed up of indolent and corrupt elements as leaders in our government.\r\nThe call to reduce the national minimum wage of 18,000 naira by some governors is unfair, callous, insensitive and parochial. Governors who rather can no longer pay the meager 18000 minimum should speedily tender their resignation letters and pave way for more serious politicians who would put the interests of the poor masses first on their agenda for governance. We citizens are also fed up of indolent and corrupt elements as leaders in our government.\r\nThe call to reduce the national minimum wage of 18,000 naira by some governors is unfair, callous, insensitive and parochial. Governors who rather can no longer pay the meager 18000 minimum should speedily tender their resignation letters and pave way for more serious politicians who would put the interests of the poor masses first on their agenda for governance. We citizens are also fed up of indolent and corrupt elements as leaders in our government.', 1),
(19, 'Ethiopia Collage Invite To All Vender For school Maintenance And Other Work.\r\n', 'SDVL', 2500, '01-Aug-2016', '10-Aug-2016', 'closed', 'The call to reduce the national minimum wage of 18,000 naira by some governors is unfair, callous, insensitive and parochial. Governors who rather can no longer pay the meager 18000 minimum should speedily tender their resignation letters and pave way for more serious politicians who would put the interests of the poor masses first on their agenda for governance. We citizens are also fed up of indolent and corrupt elements as leaders in our government.\r\nThe call to reduce the national minimum wage of 18,000 naira by some governors is unfair, callous, insensitive and parochial. Governors who rather can no longer pay the meager 18000 minimum should speedily tender their resignation letters and pave way for more serious politicians who would put the interests of the poor masses first on their agenda for governance. We citizens are also fed up of indolent and corrupt elements as leaders in our government.\r\nThe call to reduce the national minimum wage of 18,000 naira by some governors is unfair, callous, insensitive and parochial. Governors who rather can no longer pay the meager 18000 minimum should speedily tender their resignation letters and pave way for more serious politicians who would put the interests of the poor masses first on their agenda for governance. We citizens are also fed up of indolent and corrupt elements as leaders in our government.\r\nThe call to reduce the national minimum wage of 18,000 naira by some governors is unfair, callous, insensitive and parochial. Governors who rather can no longer pay the meager 18000 minimum should speedily tender their resignation letters and pave way for more serious politicians who would put the interests of the poor masses first on their agenda for governance. We citizens are also fed up of indolent and corrupt elements as leaders in our government.', 1),
(20, 'Ethiopia Collage Invite To All Vender For school Maintenance And Other Work.\r\n', 'SDVL', 2500, '01-Aug-2016', '10-Aug-2016', 'closed', 'The call to reduce the national minimum wage of 18,000 naira by some governors is unfair, callous, insensitive and parochial. Governors who rather can no longer pay the meager 18000 minimum should speedily tender their resignation letters and pave way for more serious politicians who would put the interests of the poor masses first on their agenda for governance. We citizens are also fed up of indolent and corrupt elements as leaders in our government.\r\nThe call to reduce the national minimum wage of 18,000 naira by some governors is unfair, callous, insensitive and parochial. Governors who rather can no longer pay the meager 18000 minimum should speedily tender their resignation letters and pave way for more serious politicians who would put the interests of the poor masses first on their agenda for governance. We citizens are also fed up of indolent and corrupt elements as leaders in our government.\r\nThe call to reduce the national minimum wage of 18,000 naira by some governors is unfair, callous, insensitive and parochial. Governors who rather can no longer pay the meager 18000 minimum should speedily tender their resignation letters and pave way for more serious politicians who would put the interests of the poor masses first on their agenda for governance. We citizens are also fed up of indolent and corrupt elements as leaders in our government.\r\nThe call to reduce the national minimum wage of 18,000 naira by some governors is unfair, callous, insensitive and parochial. Governors who rather can no longer pay the meager 18000 minimum should speedily tender their resignation letters and pave way for more serious politicians who would put the interests of the poor masses first on their agenda for governance. We citizens are also fed up of indolent and corrupt elements as leaders in our government.', 1),
(21, 'Ethiopia Collage Invite To All Vender For school Maintenance And Other Work.\r\n', 'SDVL', 2500, '01-Aug-2016', '10-Aug-2016', 'closed', 'The call to reduce the national minimum wage of 18,000 naira by some governors is unfair, callous, insensitive and parochial. Governors who rather can no longer pay the meager 18000 minimum should speedily tender their resignation letters and pave way for more serious politicians who would put the interests of the poor masses first on their agenda for governance. We citizens are also fed up of indolent and corrupt elements as leaders in our government.\r\nThe call to reduce the national minimum wage of 18,000 naira by some governors is unfair, callous, insensitive and parochial. Governors who rather can no longer pay the meager 18000 minimum should speedily tender their resignation letters and pave way for more serious politicians who would put the interests of the poor masses first on their agenda for governance. We citizens are also fed up of indolent and corrupt elements as leaders in our government.\r\nThe call to reduce the national minimum wage of 18,000 naira by some governors is unfair, callous, insensitive and parochial. Governors who rather can no longer pay the meager 18000 minimum should speedily tender their resignation letters and pave way for more serious politicians who would put the interests of the poor masses first on their agenda for governance. We citizens are also fed up of indolent and corrupt elements as leaders in our government.\r\nThe call to reduce the national minimum wage of 18,000 naira by some governors is unfair, callous, insensitive and parochial. Governors who rather can no longer pay the meager 18000 minimum should speedily tender their resignation letters and pave way for more serious politicians who would put the interests of the poor masses first on their agenda for governance. We citizens are also fed up of indolent and corrupt elements as leaders in our government.', 1),
(22, 'Ethiopia Collage Invite To All Vender For school Maintenance And Other Work.\r\n', 'SDVL', 2500, '01-Aug-2016', '10-Aug-2016', 'closed', 'The call to reduce the national minimum wage of 18,000 naira by some governors is unfair, callous, insensitive and parochial. Governors who rather can no longer pay the meager 18000 minimum should speedily tender their resignation letters and pave way for more serious politicians who would put the interests of the poor masses first on their agenda for governance. We citizens are also fed up of indolent and corrupt elements as leaders in our government.\r\nThe call to reduce the national minimum wage of 18,000 naira by some governors is unfair, callous, insensitive and parochial. Governors who rather can no longer pay the meager 18000 minimum should speedily tender their resignation letters and pave way for more serious politicians who would put the interests of the poor masses first on their agenda for governance. We citizens are also fed up of indolent and corrupt elements as leaders in our government.\r\nThe call to reduce the national minimum wage of 18,000 naira by some governors is unfair, callous, insensitive and parochial. Governors who rather can no longer pay the meager 18000 minimum should speedily tender their resignation letters and pave way for more serious politicians who would put the interests of the poor masses first on their agenda for governance. We citizens are also fed up of indolent and corrupt elements as leaders in our government.\r\nThe call to reduce the national minimum wage of 18,000 naira by some governors is unfair, callous, insensitive and parochial. Governors who rather can no longer pay the meager 18000 minimum should speedily tender their resignation letters and pave way for more serious politicians who would put the interests of the poor masses first on their agenda for governance. We citizens are also fed up of indolent and corrupt elements as leaders in our government.', 1),
(23, 'Ethiopia Collage Invite To All Vender For school Maintenance And Other Work.\r\n', 'SDVL', 2500, '01-Aug-2016', '10-Aug-2016', 'closed', 'The call to reduce the national minimum wage of 18,000 naira by some governors is unfair, callous, insensitive and parochial. Governors who rather can no longer pay the meager 18000 minimum should speedily tender their resignation letters and pave way for more serious politicians who would put the interests of the poor masses first on their agenda for governance. We citizens are also fed up of indolent and corrupt elements as leaders in our government.\r\nThe call to reduce the national minimum wage of 18,000 naira by some governors is unfair, callous, insensitive and parochial. Governors who rather can no longer pay the meager 18000 minimum should speedily tender their resignation letters and pave way for more serious politicians who would put the interests of the poor masses first on their agenda for governance. We citizens are also fed up of indolent and corrupt elements as leaders in our government.\r\nThe call to reduce the national minimum wage of 18,000 naira by some governors is unfair, callous, insensitive and parochial. Governors who rather can no longer pay the meager 18000 minimum should speedily tender their resignation letters and pave way for more serious politicians who would put the interests of the poor masses first on their agenda for governance. We citizens are also fed up of indolent and corrupt elements as leaders in our government.\r\nThe call to reduce the national minimum wage of 18,000 naira by some governors is unfair, callous, insensitive and parochial. Governors who rather can no longer pay the meager 18000 minimum should speedily tender their resignation letters and pave way for more serious politicians who would put the interests of the poor masses first on their agenda for governance. We citizens are also fed up of indolent and corrupt elements as leaders in our government.', 1),
(24, 'Ethiopia Collage Invite To All Vender For school Maintenance And Other Work.\r\n', 'SDVL', 2500, '01-Aug-2016', '10-Aug-2016', 'closed', 'The call to reduce the national minimum wage of 18,000 naira by some governors is unfair, callous, insensitive and parochial. Governors who rather can no longer pay the meager 18000 minimum should speedily tender their resignation letters and pave way for more serious politicians who would put the interests of the poor masses first on their agenda for governance. We citizens are also fed up of indolent and corrupt elements as leaders in our government.\r\nThe call to reduce the national minimum wage of 18,000 naira by some governors is unfair, callous, insensitive and parochial. Governors who rather can no longer pay the meager 18000 minimum should speedily tender their resignation letters and pave way for more serious politicians who would put the interests of the poor masses first on their agenda for governance. We citizens are also fed up of indolent and corrupt elements as leaders in our government.\r\nThe call to reduce the national minimum wage of 18,000 naira by some governors is unfair, callous, insensitive and parochial. Governors who rather can no longer pay the meager 18000 minimum should speedily tender their resignation letters and pave way for more serious politicians who would put the interests of the poor masses first on their agenda for governance. We citizens are also fed up of indolent and corrupt elements as leaders in our government.\r\nThe call to reduce the national minimum wage of 18,000 naira by some governors is unfair, callous, insensitive and parochial. Governors who rather can no longer pay the meager 18000 minimum should speedily tender their resignation letters and pave way for more serious politicians who would put the interests of the poor masses first on their agenda for governance. We citizens are also fed up of indolent and corrupt elements as leaders in our government.', 1);

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
-- Indexes for table `tbl_enquiry`
--
ALTER TABLE `tbl_enquiry`
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
  MODIFY `course_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_posts`
--
ALTER TABLE `tbl_posts`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
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
-- AUTO_INCREMENT for table `tbl_questions`
--
ALTER TABLE `tbl_questions`
  MODIFY `question_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_school_comments`
--
ALTER TABLE `tbl_school_comments`
  MODIFY `school_c_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;
--
-- AUTO_INCREMENT for table `tbl_vacancy`
--
ALTER TABLE `tbl_vacancy`
  MODIFY `vacancy_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
