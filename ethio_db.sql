-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 22, 2016 at 06:48 AM
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
(296, 'user_gender=Male'),
(297, 'user_gender=Female'),
(298, 'username=santosh'),
(299, 'user_school=Ethiopian'),
(300, 'project_title=College+Management+Sytem&project_course='),
(301, 'project_title=&project_course=PHP'),
(302, 'project_category=Administration'),
(303, 'start_date=2016-12-13&end_date=2016-12-22'),
(304, 'user_school=Ethiopian'),
(305, 'user_school=Ethiopian'),
(306, 'username='),
(307, 'username=santosh'),
(308, 'user_gender=Female'),
(309, 'user_school=Ethiopian'),
(310, 'user_gender=Female'),
(311, 'username='),
(312, 'username=santosh'),
(313, 'username=pallavi'),
(314, 'username='),
(315, 'project_category=Administration'),
(316, 'project_category=Administration'),
(317, 'project_category=Administration'),
(318, 'user_gender=Male'),
(319, 'user_age=20-25&user_school=Ethiopian&user_level=Student&user_interest=Anything'),
(320, 'user_age=16-19'),
(321, 'user_age=20-25'),
(322, 'user_gender=Male&user_age=26-29'),
(323, 'project_title=College+Management+Sytem&project_course=ICT+Course'),
(324, 'course_category=Degree'),
(325, 'course_category=Degree'),
(326, 'course_category=Degree'),
(327, 'start_date=2016-12-10&end_date=2016-12-17'),
(328, 'start_date=2016-12-13&end_date=1970-01-01'),
(329, 'start_date=2016-12-13&end_date=2016-12-13'),
(330, 'start_date=2016-12-20&end_date=2016-12-23'),
(331, 'project_title=Hospital&project_course='),
(332, 'project_title=&project_course=ICT'),
(333, 'project_title=&project_course=ICT'),
(334, 'project_title=&project_course=ICT'),
(335, 'project_title=&project_course=ICT'),
(336, 'username=santosh'),
(337, 'user_school=Ethiopian'),
(338, 'school_name=&school_type1=private'),
(339, 'school_name=&school_type1=public');

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
(3, 'yf', 'fghg@gmail.com', '1234567890', 'General', 'Top', 'gssdgfcv ', 'default-image.jpg', 'gfdfg', '29 November, 2016', '08:39:57 AM', 55, 1);

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
(8, 'javascript', 'java', 'higherdiploma', 60, 'Kenya', 'Ethiopia', 'logic', '08 December, 2016', '12:33:49 PM', '1', 70),
(9, 'Test Course', 'JAVA', 'graduatediploma', 30, 'Ethiopia', 'Kenya', 'Test Course  Test Course Test Course ', '15 December, 2016', '04:31:16 PM', '1', 71),
(10, '.Net Course', '.Net MVC', 'degree', 90, 'Kenya', 'Ethiopia', 'test', '19 December, 2016', '10:00:00 AM', '1', 1),
(11, 'Hardware And Networking', 'Newtworking', 'certificate', 30, 'Ethiopia', 'Ethiopia', 'test', '19 December, 2016', '11:33:44 AM', '1', 1),
(12, '', '', '', 0, '', '', '', '20 December, 2016', '11:14:37 AM', '0', 1);

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
('3', 'test', 'Test Review', 5, 1),
('3', 'sss', 'sss', 8, 70),
('5', 'ss', 'ss', 8, 1),
('1', 'ss', 'ss', 6, 1),
('5', 'ss', 'ss', 7, 1),
('4', 'test content', 'Test Review', 4, 1),
('4', '.net course review', '.net test', 10, 1);

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
-- Table structure for table `tbl_likes`
--

CREATE TABLE `tbl_likes` (
  `like_id` int(11) NOT NULL,
  `response_id` int(11) NOT NULL,
  `questions_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `likes_count` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(1, 'Hi..', 'Test ', '2016-12-21', '03:23:52 PM', '71', 1);

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
  `post_event_date` varchar(100) NOT NULL,
  `post_event_time` varchar(100) NOT NULL,
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

INSERT INTO `tbl_posts` (`post_id`, `post_title`, `post_desc`, `post_category`, `post_attachment`, `post_author`, `post_source`, `post_event_date`, `post_event_time`, `post_date`, `post_time`, `post_venue`, `post_type`, `post_approve`, `user_id`) VALUES
(55, 'TASUED Graduates 2,261 Students, Offers Employment To Best Graduating Student', ' ai Solarin University of Education, (TASUED) Ijagun, Ijebu-Ode at its 8th Convocation Ceremony held recently graduated a total of 2,261 students.\r\n\r\nOgunkomaya Bukola emerged the best graduating student during the ceremony with a CGPA of 4.84. It was learnt the the university has offered the student an automatic employment.\r\n\r\nAccording to the Vice Chancellor of the first University of Education in Nigeria Prof. Oluyemisi who announced the automatic employment, Ogunkomaya would be an asset to the institution.\r\n\r\nIt was gathered that the University churned out 1,586 full time graduates for 2015/2016, 567 part time graduates of 2014/2015, 86 students of Masters in Education programme and only 22 Postgraduate diploma in Education students graduated.\r\n\r\nThe University also awarded honourary Doctorate degrees to the medical doctor who prevented the spread of Ebola virus, late Stella Adadevoh and former President and Chairman of Council, Chartered Institute of Bankers of Nigeria, Segun Aina for their contributions to the development of the country.\r\n', 'Departmental', 'default_news.jpg', 'Dnyanesh', 'http://myschool.com.ng/', '', '', '2016-12-16', '11:38:45 AM', '', 'news', '1', 1),
(56, 'UNIPORT Notice On Mobilization Request Form For 2017 "A" Service Year', 'This is to notify all Prospective Corp Members/Final Year Students of the University of Port-Harcourt (UNIPORT), that they are expected to fill and submit the Mobilization Request Form at Students Affairs Department. \r\n\r\nThis should be done on or before 20th December, 2016. \r\n\r\nPlease note, that the Department will not be held responsible for the students who are not mobilized, on account of not submitting their forms.\r\n\r\nThank You.', 'Pre Degree', 'default-image.jpg', 'Dnyanesh', 'http://myschool.com.ng/', '', '', '2016-12-16', '11:40:10 AM', '', 'news', '1', 1),
(57, 'WAEC To Conduct GCE Twice A Year With Effect From 2017', 'The West African Examinations Council (WAEC) has disclosed that the conduct of its examination for private candidates would be twice in a year with effect from 2017.\r\n\r\nThis was made known by the council Registrar, Dr Iyi Uwadiae, who interacted with newsmen at the Registrar’s Staff Appraisal Committee meeting held on Wednesday in Accra, Ghana.\r\n\r\nHe added that the West Africa Senior School Certificate Examination (WASSCE) for private candidates known as the November/December diet for private candidates will now be conducted in January/February and August/September.\r\n\r\nHe said the measure is to ensure that many private candidates, who desire the certificate for various purposes, will have the opportunity of writing the examination and acquire the certificate.\r\n\r\nHe also added that they have concluded arrangements to commence next year. He noted that this development will not affect that of May/June, that remains once a year for all schools candidates.\r\n\r\nHe concluded by saying this is part of its mandate to render qualitative service to all member nations, the council is looking forward to a more rewarding 2017.', 'Events', 'default_news.jpg', 'Dnyanesh', 'http://myschool.com.ng/', '', '', '2016-12-16', '12:11:17 PM', '', 'news', '1', 1),
(58, 'AAU Adjusted Academic Calendar For 2016/2017 Academic Session', 'The management of Ambrise Alli University (AAU) has proposed a Revised Academic Calendar for the 2016/2017 academic session.\r\n\r\nAccroding to the new academic calendar, below is the breakdown of academic activities;\r\n\r\n.Friday, 16th December, 2016............... Fresh students come into Halls of residence \r\n.Monday 19, December, 2016......... Continuation of clearance/Orientation for fresh students \r\n.Thursday, 22nd December, 2016......... Christmas Break For Fresh Students\r\n.Sunday, 8th, January, 2017........ Return of Fresh students into Halls of Residence \r\n.Monday, 9, January, 2017.......... First semester Lectures/normal course registration for fresh students begin \r\n.Sunday, 15th January, 2017.......... 200L-500L students come into Halls of residence \r\n.Monday, 16th January, 2017.......... First semester Lectures/Normal registration for old students begin \r\n.Thursday, 26th January, 2017.......... Matriculation for 100L students \r\n.Friday, 3rd February, 2017......... Normal course registration for all Students end\r\n.Saturday, 4th February, 2017.......... Late course registration for all Students end \r\n.Monday, 20th February, 2017......... Mid Semester Tests \r\n.Friday, 31st March......... First Semester Lectures End \r\n.Friday, 7th April, 2017............ First Semester Exams begin with GST and ENT courses\r\n.Saturday, 29th April, 2017......... First Semester Examinations End \r\n\r\n.B.... R...... E...... A....... K\r\n\r\n.Sunday, 7th May, 2017......... Students come into Halls of residence \r\n.Monday, 8th May, 2017......... Second Semester Lectures Begin \r\n.Monday, 19th June, 2017....... Mid Semester Tests \r\n.Friday, 28th July, 2017........... Second Semester Lectures End \r\n.Friday, 4th August, 2017.......... Second Semester Examinations Begin \r\n.Saturday, 26th August, 2017...... Second Semester Examinations End \r\n.Wednesday, August 19th, 2017........ Faculty board of Examiners meet to consider results \r\n.Wednesday, 20th September, 2017 ........... Meeting of Senate to consider results', 'Entertainments', 'default_news.jpg', 'Dnyanesh', 'http://myschool.com.ng/', '', '', '2016-12-16', '12:12:57 PM', '', 'news', '1', 1),
(59, 'Auchi Poly 2nd Batch ND/HND Admission List 2016/2017 Released', 'The management of Federal Polytechnic, Auchi (AUCHIPOLY) has released the 2nd batch list of admitted candidates into the school for the 2016/2017 academic session.\r\n\r\nThe lists contains the names of ND and HND candidates admitted into the school for the session.\r\n\r\nThe list is yet to be made available online at the moment.\r\n\r\nHowever, candidates can access the list at the various departmental notice board within the school premises.', 'Events', 'default_news.jpg', 'Dnyanesh', 'http://myschool.com.ng/', '', '', '2016-12-16', '12:13:29 PM', '', 'news', '1', 1),
(60, 'UNIPORT Notice To Students On JAMB Regularization', 'The management of University of Port-harcourt (UNIPORT) wishes to inform students who need to regularize their JAMB Admission or make corrections in their Data that they are to follow the procedure below;.\r\n\r\n-Each candidate is to pay for Late Registration online using ATM card or other e-payment channels available on the internet for any of the Board’s services. Once payment is made, a transaction I.D. number will be issued to the candidate.\r\n\r\n-Each candidate is to complete his/her late application form or correction form online using the I.D. number issued after the e-payment has been made.\r\n\r\n-An Indemnity Form ready to be printed will be issued once the registration is completed and submitted online.\r\n\r\n-Each candidate is expected to print and submit the Indemnity Form to his/her institution for the signature of the Head of the Institution (or the Registrar in cases where such is so decided and the specimen signature also submitted directly to the Registrar of JAMB).\r\n\r\n-The duly signed Indemnity Form from the institution would be personally collected from the Head of Institution by the coordinator JAMB office in the State where the institution is domiciled.\r\n\r\nNote: On no account should the form be sent through a proxy/the applicant.\r\n\r\n-JAMB State Coordinators have been instructed to upload the Indemnity Form to JAMB portal for JAMB Registrar’s decision which will be communicated to the applicant and the Vice-Chancellor, Rector or Provost.', 'Sport', 'default_news.jpg', 'Dnyanesh', 'http://myschool.com.ng/', '', '', '2016-12-16', '12:13:54 PM', '', 'news', '1', 1),
(61, 'UNIUYO 2nd SCE Supplementary Admission List 2016/17', 'The management of University Of Uyo (UNIUYO) has released the School Of Continuing Education And Professional Studies 2016/2017 2nd Supplementary Admission List For Certificate, Diploma, Undergraduate And Post Graduate Programmes.\r\n\r\nThe list contains about 462 names of candidates admitted into the different programmes.\r\n\r\nAll admitted candidates gave been directed to visit http://www.eportals.uniuyo.edu.ng/ to make payment for their acceptance fees.\r\n\r\nThe names of admitted candidates are contained on the attached pdf document;', 'Events', 'default_news.jpg', 'Dnyanesh', 'http://myschool.com.ng/', '', '', '2016-12-16', '12:16:04 PM', '', 'news', '1', 71),
(62, 'AAUA Sandwich Revised Academic Calendar For 2015/2016 Contact Session', 'The management of Adekunle Ajasin University (AAUA) has released a revised academic calendar for Sandwich Students, 2015/2016 Contact Session.\r\n\r\nThe nreak dopwn of academic activities is as indicated below;\r\n\r\nRevised Academic Calendar for Sandwich Students, 2015/2016 Contact Session \r\n\r\nFirst Contact \r\nWeek 1: 6th – 12th December, 2015; Resumption of Students \r\nWeek 2: 13th – 19th December, 2015 - Screening and Registration \r\nWeek 3: 20th – 26th December, 2015 - Lectures Begin \r\nWeek 4: 27th Dec, 2015 – 2nd Jan, 2016 - Lectures Continue Week 5: 3rd – 9th January, 2016 - Lectures Continue\r\nSecond Contact \r\nWeek 6: 20th – 26th March, 2016 - Lectures Continue \r\nWeek 7: 27th March – 2nd April, 2016 - Lectures Continue Week 8: 3rd – 9th April, 2016 - Lectures Continue \r\nWeek 9: 10th – 16th April, 2016 - Lectures Continue \r\nWeek 10: 17th – 23rd April, 2016 - Lectures Continue\r\nThird Contact 4th July – 10th October, 2016 - Suspension of Academic Activities \r\nWeek 11: 11th - 17th December, 2016 - Lectures Continue \r\nWeek 12: 18th - 24h December, 2016 - Lectures Continue \r\nWeek 13: 25th – 31st December, 2016 - Lectures Continue \r\nWeek 14: 1st – 7th January, 2017 - Lectures Continue \r\nWeek 15: 8th - 14th January, 2017 - Lectures Continue\r\nFourth Contact \r\nWeek 16: 2nd - 8th April, 2017 - Lecture Continue \r\nWeek 17: 9th – 15th April, 2017 - Revision \r\nWeek 18: 16th – 22nd April, 2017 - Examinations Begin \r\nWeek 19: 23rd – 29th April, 2017 - Examinations End\r\n\r\nSummary \r\nRegistration - 2 Weeks \r\nLectures - 14 Weeks \r\nRevision - 1 Week \r\nExaminations - 2 Weeks \r\nTotal - 19 Weeks \r\nAll Public Holidays shall be observed accordingly. \r\n\r\nThank you. Dr. M.J. Akomolafe\r\n', 'Departmental', 'default_news.jpg', 'Dnyanesh', 'http://myschool.com.ng/', '', '', '2016-12-16', '01:32:28 PM', '', 'news', '1', 71),
(63, 'FUGashua 2nd Batch Admission List 2016/2017 (UTME/DE) Released', 'The management of Federal University Gashua (FUGASHUA) has released the 2nd batch of admission list for the 2016/2017 academic session.\r\n\r\nThe list contains names of candidates admitted through UTME and Direct Entry. \r\n\r\nAbout 149 candidates were admitted in the UTME category while 86 were admitted in the Direct entry category.\r\n\r\nHow To Check Your Admission List\r\nCandidates can access the list via the links below; \r\n\r\nUTME SECOND BATCH ADMISSIONS FOR 2016/2017\r\n\r\nDE SECOND BATCH ADMISSIONS FOR 2016/2017\r\n\r\nYou can equally check the 1st batch list via the links below;\r\n\r\nUTME Admission list\r\n\r\nDE Admission list\r\n\r\nCongratulations to the admitted ones!\r\n\r\n\r\nCompete to win from N50,000 Weekly by answering few CBT questions. Click Here to Enter for Free!\r\n\r\nSee official list of courses offered in FUGASHUA', 'Entertainments', 'default_news.jpg', 'Dnaynesh', 'http://myschool.com.ng/', '', '', '2016-12-16', '01:33:03 PM', '', 'news', '1', 71),
(64, 'My 2016 Admission Testimony - Share Here', 'With the near conclusion of the 2016/2017 admission process, candidates are already counting their gains and losses.\r\n\r\nGoing by all that happened, there''s no gainsaying that it has been a tough admission year.\r\n\r\nFrom JAMB registration - JAMB Exam - Changing of centers -Faulty system (addition of 40 marks) - Cancellation of post UTME - JAMB''s posting - JAMB''s Admission Modality - Admission Screening and Finally Admission list.\r\n\r\nDespite the rough road and the bumpy ride candidates had to go through, many Myschoolers were still able to emerge victorious. All glory to God Almighty.\r\n\r\nWe at Myschool limited are glad to be part of your success story. We say thank you for giving us the opportunity to contribute to your success in securing admission this year.\r\n\r\nThis thread is dedicated to Myschoolers and all those who gained admission this year to share their admission testimonies. \r\n\r\nShare with us the institution you secured admission, the course of study, your JAMB score as well as your word of encouragement to others who are still in the quest.\r\n\r\nCome on, let the testimonies flow. Let mama know how you made it!\r\n\r\n\r\nCompete to win from N50,000 Weekly by answering few CBT questions. Click Here to Enter for Free!\r\n', 'Pre Degree', 'default_news.jpg', 'Dnyanesh', 'http://myschool.com.ng/', '', '', '2016-12-16', '01:34:03 PM', '', 'news', '1', 71),
(65, 'Week 3 CBT Challenge Winners Rewarded, Join The Final Round (Week 4) Now!', 'All the winners of the week 3 of Myschool CBT Contest season 3 have received their prizes.\r\n\r\nIf you are among the winners and you are yet to receive your prize, please kindly send a reply to the Private Message (PM) you received earlier.\r\n\r\nTo view the list of all our 20 winners for the week 3 of the competition, click here\r\n\r\nThe Grand finale (Week 4) of the competition is already on. This week will bring the Myschool CBT challenge Season 3 to and end. Notwithstanding, it is never too late to be a winner! If you have nto joined the competition yet Click here to create a free account (If you do not already have one) and join the competition.\r\n\r\nPrizes To Be Won\r\n1st Prize – N15, 000 Cash!\r\n2nd Prize – N8, 000 Cash!\r\n3rd Prize – N5, 000 Cash!\r\n4th Prize – N5, 000 Cash!\r\n5th Prize – N4,000 Cash!\r\n6th prize - N4,000 Cash!\r\n7th prize - N3,000 Cash!\r\n8th prize – N2,000 Cash!\r\n9th prize – N2,000 Cash!\r\n10th prize – N2,000 Cash!\r\n11th - 20th prize - Free Activation Code for Myschool JAMB CBT Android App', 'Sport', 'default_news.jpg', 'Santosh', 'http://myschool.com.ng/', '', '', '2016-12-16', '01:35:13 PM', '', 'news', '1', 70),
(66, 'JAMB CBT Centre Ownership Application Portal Still Available', 'The registration portal for individual interested in becoming JAMB accredited CBT Centres is still available on JAMB portal.\r\n\r\nThe deadline for registration was earlier announced to be 12 December, 2016.\r\n\r\nHowever, it seems registration is still being accepted from interested individuals.\r\n\r\nIf your are still interested in becoming an accredited JAMB CBT Centre, why not take this opportunity now.\r\n\r\nBut just before you do that, it is important you confirm if you meet the requirements/criteria for accreditation as specified by JAMB by visiting this link: How to become an accredited JAMB CBT Centre\r\n\r\nFor registration, interested individuals are to visit this link: http://jamb.gov.ng/CBTRegistration/\r\n\r\nTo commence registration, you will be required to provide the following information on JAMB Portal;\r\n\r\na. Centre Name \r\nb. Centre Address \r\nc. Address State\r\nd. Centre Representative Name \r\ne. Email Address of Representative (eg.john.james@jamb.gov.ng)\r\nf. Telephone number of Representative (eg. 0701234567890)\r\ng. Centre Ownership Type (e.g Private Owner, Public Institution, Private Institution)\r\nh. Centre Capacity\r\n', 'Post Degree', 'default_news.jpg', 'Santosh', 'http://myschool.com.ng/', '', '', '2016-12-16', '01:36:00 PM', '', 'news', '1', 70),
(67, 'JAMB CBT Centres To Have CCTV Cameras Ahead Of 2017 UTME', 'The Joint Admissions and Matriculation Board (JAMB) has announced that all computer-based centres to be accredited for the registration of 2017 Unified Tertiary Matriculation Examination (UTME), must have Closed-Circuit Television (CCTV) cameras.\r\n\r\nJAMB Registrar, Prof. Ishaq Oloyede disclosed this at an interactive meeting held at the University Of Lagos, with the operators of CBT centres drawn from across the federation.\r\n\r\nAccording to Oloyede, the move was part of the measures being taken by JAMB to avoid errors of the past and also ensure that the best is offered to Nigerians.\r\n\r\nHe noted that the new process has completely phased out cybercafé operators, adding that the computer-based centres to be accredited must have 250 desktop or laptop systems in a single room with provision for additional 25 systems as back-ups.\r\n\r\nThe board also informed the CBT operators that all the 10 fingers of candidates must be captured, and that anyone whose whole 10 fingers cannot be captured by the CBT centres should be directed to the headquarters of JAMB in Abuja, he added that this was done to avoid multiple registration by candidates.\r\n\r\nThe meeting, which was attended by thousands of computer operators from across the country, witnessed debates among participants on several issues including the suggestion for the cancellation of UTME mobile applications.', 'Departmental', 'default_news.jpg', 'Dnyanesh', 'http://myschool.com.ng/', '', '', '2016-12-16', '01:36:41 PM', '', 'news', '1', 70),
(68, 'UNICAL Resumption Date 2016/2017 Announced', 'The management of University of Calabar (UNICAL) has announced the resumption date for the 2016/2017 academic session as approved by the sane of the institution.\r\n\r\nAccording to the Senate of the institution after a meeting held yesterday, resumption date for 2016/2017 academic session is January 3rd, 2017.\r\n\r\nAcademic activities are expected to commence immediately\r\n\r\nStudents are therefore advised to take note of this date and strictly adhere to it.', 'Departmental', 'default_news.jpg', 'Santosh', 'http://myschool.com.ng/', '', '', '2016-12-16', '01:37:14 PM', '', 'news', '1', 70),
(69, 'UNIABUJA Postgraduate Admission List 2016/2017 Now Online', 'The management of University of Abuja has released the list of candidates admitted into its postgraduate programme for the 2016/2017 academic session.\r\n\r\nCandidates can now access their admission status via the school''s website.\r\n\r\nTo check your admission status, visit POSTGRADUATE ADMISSIONS\r\nEnter your details as required and proceed to view your admission status.\r\n\r\nPOSTGRADUATE ADMISSIONS VERY IMPORTANT NOTICE\r\nThose Postgraduate Candidates whose Application Number is numeric i.e. 000123 should use 123 and ignore the preceding 000 (e.g instead of using the full numbers to check-000123, use 123) to check their Admission Status \r\nwhile others whose Application Number carry UA/000192 for example, should use it as it is. \r\n\r\nNOTICE TO ALL APPLICANTS\r\nIf you are checking notification for the first time use the ''Pay with Remita'' button to make your payment via Remita. \r\n\r\nIf you are returning to continue or print your application or your payment had issues and is now resolved use the ''Submit'' button with your Reference Number to continue. [Your Pin number is the Reference Number for the successful Remita Payment]\r\n\r\nIf you have any other issues with the online application please send your details as above describing your problems to: swunibujaug@gmail.com\r\n\r\nCongratulations to the admitted ones!\r\n', 'Admission', 'default_news.jpg', 'Santosh', 'http://myschool.com.ng/', '', '', '2016-12-16', '01:38:20 PM', '', 'news', '1', 70),
(70, 'UNILAG Registration For Supplementary Candidates 2016/2017 Ends', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum', '', 'default-event.jpg', 'myschool paul', '', '', '', '2016-12-16', '05:11:15 PM', 'University of Lagos', 'event', '1', 1),
(71, 'ACEONDO Acceptance Fee Payment Deadline 2016/2017', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\r\n\r\n', '', 'default-image.png', 'myschool paul', '', '', '', '2016-12-16', '05:46:55 PM', 'Adeyemi College Of Education, Ondo', 'event', '1', 1),
(72, 'Harambe Entrepreneur Alliance Fully-funded MBA Scholarships At Yale University, USA Application Dead', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\r\n\r\n', '', 'default-image.png', 'Myschool Kelly', '', '', '', '2016-12-16', '05:47:40 PM', 'All School Communities', 'event', '1', 1),
(73, 'RSUST Part-time Admission Deadline 2016/2017', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\r\n\r\n', '', 'default-image.png', 'myschool paul', '', '', '', '2016-12-16', '05:48:27 PM', 'Rivers State University of Science and Technology', 'event', '0', 1),
(74, '2017 Fully-funded PhD Scholarships In University Of Bristol, UK Application Deadline', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '', 'default-image.png', 'Myschool Kelly', '', '', '', '2016-12-16', '05:49:17 PM', 'All School Communities', 'event', '1', 1),
(75, '2017 PTDF PhD & Msc Scholarship Scheme For Nigerian Students Application Deadline', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '', 'default-event.jpg', 'Myschool Kelly', '', '', '', '2016-12-16', '05:50:42 PM', 'All School Communities', 'event', '1', 71),
(76, 'UNIZIK Sales Of Pre-Science Form 2016/2017 Deadline', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\r\n\r\n', '', 'default-event.jpg', 'myschool paul', '', '', '', '2016-12-16', '05:51:10 PM', 'Nnamdi Azikiwe University', 'event', '1', 71),
(77, '100% MSc Tropical Padiatrics Scholarships At LSTM Application Deadline', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\r\n\r\n', '', 'default-event.jpg', 'myschool paul', '', '', '', '2016-12-16', '05:52:44 PM', 'Umaru Musa Yar''adua University', 'event', '1', 71),
(78, 'UMYU Postgraduate Application Deadline 2016/2017', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\r\n\r\n', '', 'default-event.jpg', 'myschool paul', '', '', '', '2016-12-16', '05:53:12 PM', 'Umaru Musa Yar''adua University', 'event', '1', 71),
(79, '2017 Erasmus Mundus Joint Master Degree Scholarships In Media Arts Cultures Application Deadline', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\r\n\r\n', '', 'default-event.jpg', 'Myschool Kelly', '', '', '', '2016-12-16', '05:54:07 PM', 'All School Communities', 'event', '1', 71),
(80, '£5,000 MBA Scholarship At University Of Edinburgh Application Deadline', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '', 'default-event.jpg', 'Myschool Kelly', '', '', '', '2016-12-16', '05:56:05 PM', 'All School Communities', 'event', '1', 70),
(81, 'NSUK New Resumption Date For 2016/2017', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\r\n\r\n', '', 'default-event.jpg', 'myschool paul', '', '', '', '2016-12-16', '05:56:43 PM', 'Nasarawa State University', 'event', '0', 70),
(82, 'UNICAL Resumption Date For 2016/2017', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\r\n\r\n', '', 'default-event.jpg', 'myschool paul', '', '', '', '2016-12-16', '05:57:08 PM', 'University of Calabar', 'event', '1', 70),
(83, 'MasterCard Foundation Undergraduate Scholarship At Michigan State University Application Deadline', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\r\n\r\n', '', 'default-event.jpg', 'Myschool Kelly', '', '', '', '2016-12-16', '05:58:11 PM', 'All School Communities', 'event', '1', 70),
(84, 'MBA Scholarship At Harvard Business School Application Deadline', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\r\n\r\n', '', 'default-event.jpg', 'Myschool Kelly', '', '', '', '2016-12-16', '05:58:38 PM', 'All School Communities', 'event', '1', 70),
(86, 'Shell Petrol Development Company Niger Delta Postgraduate Scholarship 2011/2012. Apply Now!!!!', 'Scholarships Description: A scholarship focus should accompany, or follow, a University Graduate Entry Application. Scholarship applications will not be deliberate until a applicant has been supposed by University College London to commence an authorised programme of postgraduate study. Applicants contingency privately finish this form by entering a information requested in a suitable blocks.', 'Entertainments', 'default-image.jpg', 'jobgurus', 'http://myschool.com.ng/', '', '', '2016-12-16', '06:11:42 PM', '', 'gist', '1', 1),
(87, 'Send Free bulk sms this xmas', 'Grab this wonderful oppotunity by joining the world largest network in sending free bulk sms by following the link:http://naijanimi.com/?ref=10042 \r\n\r\nCompete to win from N50,000 Weekly by answering few CBT questions. Click Here to Enter for Free!', 'Pre Degree', 'default-image.jpg', ' uchetex', 'http://myschool.com.ng/', '', '', '2016-12-16', '06:12:25 PM', '', 'gist', '1', 1),
(88, 'SEND FREE BULK N CUSTOMIZABLE SMS TO ANY NTWRK, FREE', 'To send free sms to any 9ja ntwk numba n abroad,witout bin charged or paying a dime, jst visit this link below and sign up. Also,u can send customizable msgs dat bear ur name to any fone numba of ur choice. Jst click d link below n sign up http://www.naijanimi.com/?ref=2437. Goodluck. ', 'Admission', 'default-image.jpg', ' Chinedu9 ', 'http://myschool.com.ng/', '', '', '2016-12-16', '06:13:07 PM', '', 'gist', '1', 1),
(89, 'Send free bulk sms to everybody.', 'You might be discouraged and depressed each time you think of sending an sms to your love once ,because of the capacious expence of the rate attracted to each sms per head.why not Grab this wonderful oppotunity by joining the world largest network in sending free bulk sms by following the link:http://naijanimi.com/?ref=10042', 'Events', 'default-image.jpg', ' uchetex', 'http://myschool.com.ng/', '', '', '2016-12-16', '06:13:45 PM', '', 'gist', '1', 1),
(90, 'UNN Post Graduate Admission List For The 2016/2017 Academic Session', 'after hearing the scores of fellow medical student i think d performance of medical student is fairly moderate unlike our law counterparts n oda art ppl who had 65 n above to deal with..i got 64 medicine..oda med score recievd...53,54,57,60,60,60,67,65,63''61,49,43...so pls frnds drop ur score n ur 2go username so we can ascertain our chances .mine is ivory18 got 64.. ', 'Entertainments', 'default-image.jpg', 'Dnyanesh', 'http://myschool.com.ng/', '', '', '2016-12-16', '06:14:24 PM', '', 'gist', '1', 1),
(91, 'Medicine and surgery aspirants 2017/2018', 'Please all medicine and surgery aspirants 2017/2018.. Let''s be in touch.. Pray together, work together.. 07068058046. Add me on WhatsApp so I can add you to the WhatsApp group. God bless you. ', 'Entertainments', 'default-image.jpg', 'Santosh', 'http://myschool.com.ng/', '', '', '2016-12-16', '06:15:16 PM', '', 'gist', '1', 70),
(92, 'Unilorin aspirant whatsapp group', 'Unilorin aspirants drop your whatsapp numbers to join the online unilorin aspirants platform \r\n\r\nCompete to win from N50,000 Weekly by answering few CBT questions. Click Here to Enter for Free!', 'Pre Degree', 'default-image.jpg', 'Santosh', 'http://myschool.com.ng/', '', '', '2016-12-16', '06:15:37 PM', '', 'gist', '1', 70),
(93, 'futminna school of environmental technology(SET) aspirant', 'Drop ur detail below \r\nAm Urp add me on whatsapp on 08032309611 \r\n\r\nCompete to win from N50,000 Weekly by answering few CBT questions. Click Here to Enter for Free!', 'Departmental', 'default-image.jpg', 'Santosh', 'http://myschool.com.ng/', '', '', '2016-12-16', '06:16:07 PM', '', 'gist', '1', 70),
(94, 'Fut Minna 2016/2017 Aspirants.', 'Add me up on whatsapp wit dis number xo i can add u in our group chat.(Aspirants) 08135476357 \r\n\r\nCompete to win from N50,000 Weekly by answering few CBT questions. Click Here to Enter for Free!', 'Entertainments', 'default-image.jpg', 'Santosh', 'http://myschool.com.ng/', '', '', '2016-12-16', '06:16:28 PM', '', 'gist', '1', 70),
(95, 'FUTMINNA 2016/2017 ASPIRANTS WHATSAPP GROUP', 'just to stay informed and updated abt FUTMINNA add this number 08127173177 for a group chat \r\n\r\nCompete to win from N50,000 Weekly by answering few CBT questions. Click Here to Enter for Free!', 'Entertainments', 'default-image.jpg', 'Santosh', 'http://myschool.com.ng/', '', '', '2016-12-16', '06:16:53 PM', '', 'gist', '1', 70),
(96, 'Esut aspirant drop your number for Esut whatsapp group', 'All esut aspirant 2015 /2016 drop your whatsapp number, let me add you to esut whatsapp group, so we can share info and know each other.... \r\n\r\nCompete to win from N50,000 Weekly by answering few CBT questions. Click Here to Enter for Free!\r\n', 'Sport', 'default-image.jpg', 'Santosh', 'http://myschool.com.ng/', '', '', '2016-12-16', '06:18:53 PM', '', 'gist', '1', 71),
(97, 'Esut Admitted Mechanical and Production Engineering Freshers, Drop your numbers for our dedicated wh', 'To bring together Esuties Mechanical and Production Engineering Freshers, to share relevant infos and to help each other \r\n\r\nCompete to win from N50,000 Weekly by answering few CBT questions. Click Here to Enter for Free!', 'Pre Degree', 'default-image.jpg', 'Pallavi', 'http://myschool.com.ng/', '', '', '2016-12-16', '06:19:15 PM', '', 'gist', '1', 71),
(98, 'rsust aspirants group..', 'THIS POST IS FOR ALL RSUST ASPIRANTS/FRESHERS , WE HAVE A WHATSAPP GROUP (THE OFFICIAL RSUST ASPIRANTS/FRESHERS GROUP)WITH LOTS OF MEMBERS, WHERE YOU COME IN AND SHARE YOUR THOUGHTS IDEAS, HAVE FUN, MEET NEW PEOPLE AND MAKE NEW FRIENDS AND ALSO ASK QUESTIONS AND DO REGISTRATIONS', 'Pre Degree', 'default-image.jpg', 'Pallavi', 'http://myschool.com.ng/', '', '', '2016-12-16', '06:19:40 PM', '', 'gist', '1', 71),
(99, 'Uniosun pdites group 2016/2017', 'Please, drop your number here. ', 'Full Time', 'default-image.jpg', 'Pallavi', 'http://myschool.com.ng/', '', '', '2016-12-16', '06:20:02 PM', '', 'gist', '1', 71),
(100, 'AAUA ECONOMICS AND ECO EDUCATION admitted candidates group', 'Congratulations once again to those admitted into the prestigious and outstanding department in Adekunle ajasin. Economics department houses the best amongst the rest and I believe you are lucky to be among. A group will be created for you guys on Whatsapp to meet each other and know what''s up in school as to the course. kindly message this number on Whatsapp ( 08060548106) to get added on the group . I am Bidemi, current class governor for 200level economics .', 'Sport', 'default-image.jpg', 'Pallavi', 'http://myschool.com.ng/', '', '', '2016-12-16', '06:20:24 PM', '', 'gist', '1', 71);

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
(3, 'College Management Sytem', 'ICT Course', 'Agriculture', '2016', 'word', '02-12-2016-06-31-321.docx', '2016-12-02', '11:05:28 AM', '1', 1),
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
(4, 'Acadamic Question', 'Accounting', 'is this jokE?', '2016-11-28', '11:37:20 PM', '1', 55);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_schoollikes`
--

CREATE TABLE `tbl_schoollikes` (
  `slike_id` int(11) NOT NULL,
  `sresponse_id` int(11) NOT NULL,
  `school_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `slikes_count` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_schoollikes`
--

INSERT INTO `tbl_schoollikes` (`slike_id`, `sresponse_id`, `school_id`, `user_id`, `slikes_count`) VALUES
(2, 4, 7, 1, 1),
(3, 6, 8, 1, 1),
(4, 7, 9, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_schoolresponse`
--

CREATE TABLE `tbl_schoolresponse` (
  `sresponse_id` int(11) NOT NULL,
  `sresponse_title` varchar(100) NOT NULL,
  `sresponse_desc` varchar(5000) NOT NULL,
  `sresponse_like` int(10) NOT NULL,
  `sresponse_date` varchar(50) NOT NULL,
  `sresponse_time` varchar(50) NOT NULL,
  `sparent_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `school_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_schoolresponse`
--

INSERT INTO `tbl_schoolresponse` (`sresponse_id`, `sresponse_title`, `sresponse_desc`, `sresponse_like`, `sresponse_date`, `sresponse_time`, `sparent_id`, `user_id`, `school_id`) VALUES
(3, 'dnyanesh', 'fdddddddddd', 0, '2016-12-21', '01:57:15 PM', 0, 1, 7),
(4, 'dnyanesh', 'reply to dyanesh', 1, '2016-12-21', '03:09:13 PM', 3, 1, 7),
(6, 'dnyanesh', 'dfgdfg', 1, '2016-12-21', '03:25:32 PM', 0, 1, 8),
(7, 'dnyanesh', 'fkshdfkjshkfjh', 1, '2016-12-21', '07:16:00 PM', 0, 1, 9);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_school_comments`
--

CREATE TABLE `tbl_school_comments` (
  `scomment_id` int(11) NOT NULL,
  `scomment_title` varchar(200) NOT NULL,
  `scomment_desc` varchar(5000) NOT NULL,
  `scomment_like` int(11) NOT NULL,
  `scomment_date` varchar(50) NOT NULL,
  `scomment_time` varchar(50) NOT NULL,
  `parent_id` int(11) NOT NULL,
  `school_id` int(11) NOT NULL,
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
  `Program_tokenfield` varchar(1000) NOT NULL,
  `school_facility` varchar(1000) NOT NULL,
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

INSERT INTO `tbl_school_meta` (`school_id`, `registration_type`, `school_name`, `school_logo`, `school_category`, `school_university`, `school_institute`, `other_category`, `school_number`, `school_country`, `school_city`, `school_region`, `school_type`, `Program_tokenfield`, `school_facility`, `school_population`, `teaching_staff`, `non_teaching_staff`, `school_awards`, `school_acadamic_year`, `school_acadamic_fee`, `admission_procedure`, `acadamic_requirment`, `school_scholarship`, `school_address`, `school_url`, `school_desc`, `school_date`, `school_time`, `school_approve`, `user_id`) VALUES
(7, 'Normal Registration', 'Adarsh Vidhyalaya', '06-12-2016-10-21-15.jpg', 'Account', 'Agriculture', 'Account', 'Account', '2222222222', 'Ethiopia', 'Kenya', 'Kenya', 'private', '', '', 55, 2, 33, '2', '2016', '80000', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '50%', '', 'http://www.ddd.com', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '22 November, 2016', '12:19:42 PM', '1', 1),
(8, 'Normal Registration', 'SDVL', 'default-image.jpg', 'Agriculture', 'Account', 'Account', 'Account', '1111111111', 'Kenya', 'Ethiopia', 'Ethiopia', 'public', '', '', 30, 34, 4, '3', '2016', '124444', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '50%', '', 'http://www.ddd.com', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '22 November, 2016', '12:28:58 PM', '1', 1),
(9, 'Normal Registration', 'test school', 'default-image.jpg', 'Account', 'Account', 'Account', 'Account', '+251 454545454', 'Kenya', 'Kenya', 'Ethiopia', 'private', '', 'Computer Study Lab,Football Pitch ', 345, 4, 5, '6', '2016', '45666', 'test procedure', 'test requirment', '50%', '', 'http://www.ddd.com', 'test yourself', '2016-12-16', '10:46:10 AM', '0', 73);

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

--
-- Dumping data for table `tbl_userresponse`
--

INSERT INTO `tbl_userresponse` (`response_id`, `response_title`, `response_type`, `response_desc`, `response_like`, `response_date`, `response_time`, `parent_id`, `user_id`, `question_id`) VALUES
(1, 'dnyanesh', 'answer', 'test ans', 0, '2016-12-19', '12:45:25 PM', 0, 1, 1);

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
(71, 'pallavi', 'Pallavi', 'G', 'e6e061838856bf47e1de730719fb2609', 'pallavi@gmail.com', 'schooluser', ''),
(72, 'testuser', 'test', 'user', 'e358efa489f58062f10dd7316b65649e', 'testuser@gmail.com', 'schooluser', ''),
(73, 'schooltestuser', 'schooltest', 'user', 'e358efa489f58062f10dd7316b65649e', 'schooltest@gmail.com', 'schooluser', '');

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
('friendship', 'anything', 'friendship', 'IT', 'Male', '1992-01-15', '19', '9689483519', 'latest-cutest-baby2111.png', 'Male', 'female', 'Student', 'Friendship', 'Cricket', '16 December, 2016', '11:26:31 AM', 1),
('anything', 'anything', 'anything', 'IT', 'Male', '1991-02-04', '28', '7777777777', '16-12-2016-10-46-101.jpg', 'Male', 'female', 'About Me', 'Friendship', 'My Hobby', '16 December, 2016', '11:17:44 AM', 70),
('anything', 'anything', 'friendship', 'IT', 'female', '1992-01-08', '24', '7777777777', '15-12-2016-10-35-5611.jpg', 'female', 'female', 'Test about Me', 'Friendship', 'Test My Hobby', '16 December, 2016', '12:14:53 PM', 71),
('anything', 'anything', 'anything', 'IT', 'female', '2016-12-17', '0', '9999999999', '15-12-2016-10-35-561.jpg', 'female', 'female', 'test', 'test', 'test', '2016-12-16', '10:35:17 AM', 72);

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
-- Indexes for table `tbl_likes`
--
ALTER TABLE `tbl_likes`
  ADD PRIMARY KEY (`like_id`);

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
-- Indexes for table `tbl_schoollikes`
--
ALTER TABLE `tbl_schoollikes`
  ADD PRIMARY KEY (`slike_id`);

--
-- Indexes for table `tbl_schoolresponse`
--
ALTER TABLE `tbl_schoolresponse`
  ADD PRIMARY KEY (`sresponse_id`),
  ADD KEY `user_id` (`school_id`),
  ADD KEY `school_id` (`school_id`),
  ADD KEY `user_id_2` (`user_id`),
  ADD KEY `user_id_3` (`user_id`),
  ADD KEY `user_id_4` (`user_id`);

--
-- Indexes for table `tbl_school_comments`
--
ALTER TABLE `tbl_school_comments`
  ADD PRIMARY KEY (`scomment_id`),
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
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=340;
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
  MODIFY `course_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `tbl_enquiry`
--
ALTER TABLE `tbl_enquiry`
  MODIFY `enquiry_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tbl_likes`
--
ALTER TABLE `tbl_likes`
  MODIFY `like_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_message`
--
ALTER TABLE `tbl_message`
  MODIFY `pm_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_posts`
--
ALTER TABLE `tbl_posts`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;
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
-- AUTO_INCREMENT for table `tbl_schoollikes`
--
ALTER TABLE `tbl_schoollikes`
  MODIFY `slike_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_schoolresponse`
--
ALTER TABLE `tbl_schoolresponse`
  MODIFY `sresponse_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tbl_school_comments`
--
ALTER TABLE `tbl_school_comments`
  MODIFY `scomment_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_school_meta`
--
ALTER TABLE `tbl_school_meta`
  MODIFY `school_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `tbl_userresponse`
--
ALTER TABLE `tbl_userresponse`
  MODIFY `response_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;
--
-- AUTO_INCREMENT for table `tbl_vacancy`
--
ALTER TABLE `tbl_vacancy`
  MODIFY `vacancy_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_schoolresponse`
--
ALTER TABLE `tbl_schoolresponse`
  ADD CONSTRAINT `school_id` FOREIGN KEY (`school_id`) REFERENCES `tbl_school_meta` (`school_id`),
  ADD CONSTRAINT `xcvxxvc` FOREIGN KEY (`user_id`) REFERENCES `tbl_users` (`user_id`);

--
-- Constraints for table `tbl_userresponse`
--
ALTER TABLE `tbl_userresponse`
  ADD CONSTRAINT `question_id` FOREIGN KEY (`question_id`) REFERENCES `tbl_questions` (`question_id`),
  ADD CONSTRAINT `user_id` FOREIGN KEY (`user_id`) REFERENCES `tbl_users` (`user_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
