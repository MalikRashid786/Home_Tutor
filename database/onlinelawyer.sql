-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 07, 2020 at 01:31 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `onlinelawyer`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_answere`
--

DROP TABLE IF EXISTS `tbl_answere`;
CREATE TABLE IF NOT EXISTS `tbl_answere` (
  `answered_id` int(11) NOT NULL AUTO_INCREMENT,
  `answered` varchar(3000) NOT NULL,
  `lawyer_email` varchar(30) NOT NULL,
  `question_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  PRIMARY KEY (`answered_id`)
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_answere`
--

INSERT INTO `tbl_answere` (`answered_id`, `answered`, `lawyer_email`, `question_id`, `date`, `time`) VALUES
(1, 'IT law does Naming convention for method.Lower case letter Unchecked Exception.Many of the designations used by manufacturers and sellers to distinguish their products are claimed as trademarks.Many of the designations used by manufacturers and sellers to distinguish their products are claimed as trademarksMany of the designations used by manufacturers and sellers to distinguish their products are claimed as trademarks', 'dead@gmail.com', 10, '2020-05-01', '11:32:57'),
(2, 'IT law does Naming convention for method.Lower case letter Unchecked Exception.Many of the designations used by manufacturers and sellers to distinguish their products are claimed as trademarks.Many of the designations used by manufacturers and sellers to distinguish their products are claimed as trademarksMany of the designations used by manufacturers and sellers to distinguish their products are claimed as trademarks.\r\n', 'dead@gmail.com', 5, '2020-05-01', '11:33:19'),
(8, 'of the information presented. However, the information contained in this book is sold without warranty, either express or implied. Neither the author, nor Packt Publishing, and its dealers and distributors will be held liable for any damages caused or alleged to be caused directly or indirectly by this boo', 'rashidff611@gmail.com', 8, '2020-06-06', '12:18:56'),
(7, 'To begin with, I credit my parents who have always nurtured my dreams and constantly supported me to make them happen. I want to thank my To begin with, I credit my parents who have always nurtured my dreams and constantly supported me to make them happen. I want to thank.', 'dec@gmail.com', 18, '2020-06-01', '22:40:04'),
(5, 'Dedicated to everyone who has no place to stay or insufficient strength and want to live, especially those who used up all their strength serving someone else or their community, in the hope that just one reader might reach out to just one of them.', 'enc@gmail.com', 9, '2020-05-06', '11:46:31'),
(9, 'To begin with, I credit my parents who have always nurtured my dreams and constantly supported me to make them happen. I want to thank my To begin with, I credit my parents who have always nurtured my dreams and constantly supported me to make them happen. I want to thank.', 'rashidff611@gmail.com', 18, '2020-06-06', '12:52:24'),
(10, 'Many of the designations used by manufacturers and sellers to distinguish their products are claimed as trademarks.Howeve data is only one part of a program. You also need instructions.The compiler translates this statement into a series of cryptic machine instructions. This sort of statement is called an assignment statement. It is used to compute and store the value of an arithmetic expression.', 'rashidff611@gmail.com', 18, '2020-06-06', '12:53:53'),
(21, 'Many of the designations used by manufacturers and sellers to distinguish their products are claimed as trademarks.Howeve data is only one part of a program. You also need instructions.The compiler translates this statement into a series of cryptic machine instructions. This sort of statement is called an assignment statement. It is used to compute and store the value of an arithmetic expression.', 'enc@gmail.com', 8, '2020-09-03', '11:10:25'),
(16, 'To begin with, I credit my parents who have always nurtured my dreams and constantly supported me to make them happen. I want to thank my To begin with, I credit my parents who have always nurtured my dreams and constantly supported me to make them happen. I want to thank.', 'jhuhi@gmail.com', 11, '2020-07-24', '10:40:51'),
(12, 'Many of the designations used by manufacturers and sellers to distinguish their products are claimed as trademarks.Howeve data is only one part of a program. You also need instructions.The compiler translates this statement into a series of cryptic machine instruc', 'demo@gmail.com', 6, '2020-07-07', '12:53:14'),
(13, 'Many of the designations used by manufacturers and sellers to distinguish their products are claimed as trademarks.Howeve data is only one part of a program. You also need instructions.The compiler translates this statement into a series of cryptic machine instruc', 'demo@gmail.com', 18, '2020-07-07', '12:53:37'),
(14, 'Many of the designations used by manufacturers and sellers to distinguish their products are claimed as trademarks.Howeve data is only one part of a program. You also need instructions.The compiler translates this statement into a series of cryptic machine instrucMany of the designations used by manufacturers and sellers to distinguish their products are claimed as trademarks.Howeve data is only one part of a program. You also need instructions.The compiler translates this statement into a series of cryptic machine instrucMany of the designations used by manufacturers and sellers to distinguish their products are claimed as trademarks.Howeve data is only one part of a program. You also need instructions.The compiler translates this statement into a series of cryptic machine instruc', 'demo@gmail.com', 19, '2020-07-07', '12:56:17'),
(17, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'priya@gmail.com', 21, '2020-07-24', '10:45:32'),
(18, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'neha@gmail.com', 20, '2020-07-24', '10:53:41'),
(19, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'neha@gmail.com', 8, '2020-07-24', '10:54:04'),
(20, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'neha@gmail.com', 10, '2020-07-24', '10:54:20'),
(22, 'IT law does Naming convention for method.Lower case letter Unchecked Exception.Many of the designations used by manufacturers and sellers to distinguish their products are claimed as trademarks.Many of the designations used by manufacturers and sellers to distinguish their products are claimed as trademarksMany of the designations used by manufacturers and sellers to distinguish their products are claimed as trademarks', 'enc@gmail.com', 9, '2020-09-03', '11:10:44'),
(23, 'To begin with, I credit my parents who have always nurtured my dreams and constantly supported me to make them happen. I want to thank my To begin with, I credit my parents who have always nurtured my dreams and constantly supported me to make them happen. I want to thank.', 'enc@gmail.com', 11, '2020-09-03', '11:11:28'),
(24, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'demo@gmail.com', 22, '2020-09-24', '11:14:32');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_appointment`
--

DROP TABLE IF EXISTS `tbl_appointment`;
CREATE TABLE IF NOT EXISTS `tbl_appointment` (
  `appointment_id` int(11) NOT NULL AUTO_INCREMENT,
  `txnid` varchar(100) NOT NULL,
  `email` varchar(30) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `productinfo` varchar(30) NOT NULL,
  `amount` varchar(30) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `appoint_date` varchar(10) NOT NULL,
  `appoint_time` varchar(10) NOT NULL,
  `status` int(11) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  PRIMARY KEY (`appointment_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_appointment`
--

INSERT INTO `tbl_appointment` (`appointment_id`, `txnid`, `email`, `firstname`, `productinfo`, `amount`, `phone`, `appoint_date`, `appoint_time`, `status`, `date`, `time`) VALUES
(1, '3104a59e44672accc02f', 'rashidff611@gmail.com', 'Testing', '4', '125.00', '7380989869', '2020-07-02', '8 00 PM', 0, '2020-07-23', '13:31:59'),
(2, 'e6cb08b4071a8b7a99c7', 'test@gmail.com', 'Testing', '1', '125.00', '7558847457', '2020-07-23', '8 00 PM', 2, '2020-07-23', '13:35:29'),
(3, 'df88d4a571a954bbf9ef', 'test@gmail.com', 'Testing', '6', '125.00', '7558847457', '2020-07-31', '8 00 PM', 1, '2020-07-23', '13:38:21'),
(4, '5a1efafba3edcaf8234e', 'test@gmail.com', 'Testing', '6', '125.00', '7558847457', '2020-07-14', '8 00 PM', 1, '2020-07-23', '13:55:26');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact`
--

DROP TABLE IF EXISTS `tbl_contact`;
CREATE TABLE IF NOT EXISTS `tbl_contact` (
  `contact_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `subject` varchar(200) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  PRIMARY KEY (`contact_id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_contact`
--

INSERT INTO `tbl_contact` (`contact_id`, `name`, `email`, `subject`, `description`, `date`, `time`) VALUES
(1, 'Malik', 'rashid@gmail.com', 'hello', 'hii', '2020-04-04', '22:34:55'),
(2, 'Malik', 'rashid@gmail.com', 'hello', 'hii', '2020-04-04', '22:36:47'),
(3, 'Malik Rashid', 'mk@gmail.com', 'Which Lawyre Bhut Thik h .', 'Join Our Pool of 1000+ Expert Lawyers serving clients through great customer ecperience', '2020-05-02', '14:14:54'),
(4, 'ml', 'ml@gmail.com', 'ml', 'ml\r\n', '2020-05-02', '14:19:56'),
(5, 'Dead', 'ded@gmail.com', 'hiiiiiiiiiiiii', 'HIIIIIIIIIIII', '2020-05-02', '14:23:26'),
(6, 'Malik Rashid', 'malikrashid@gmail.om', 'What is Lawyer?', 'What is Lawyer?What is Lawyer?What is Lawyer?What is Lawyer?What is Lawyer?What is Lawyer?', '2020-06-01', '23:50:05'),
(7, 'Malik', 'rashidff@gmail.com', 'Hi', 'hi', '2020-08-13', '12:38:48'),
(8, 'Malik', 'malik@gmail.com', 'HiHI', 'hi', '2020-08-15', '07:59:49');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_district`
--

DROP TABLE IF EXISTS `tbl_district`;
CREATE TABLE IF NOT EXISTS `tbl_district` (
  `district_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `state_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  PRIMARY KEY (`district_id`)
) ENGINE=MyISAM AUTO_INCREMENT=66 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_district`
--

INSERT INTO `tbl_district` (`district_id`, `name`, `state_id`, `date`, `time`) VALUES
(1, 'Agra', 36, '2020-09-04', '12:57:52'),
(2, 'Aligarh', 36, '2020-09-04', '12:58:09'),
(3, 'Allahabad', 36, '2020-09-04', '12:58:50'),
(4, 'Ambedkar Nagar', 36, '2020-09-04', '13:18:40'),
(5, 'Amethi', 36, '2020-09-04', '13:18:50'),
(6, 'Azamgrah', 36, '2020-09-04', '13:18:58'),
(7, 'Bahraich', 36, '2020-09-04', '13:19:09'),
(8, 'Ballia', 36, '2020-09-04', '13:19:17'),
(9, 'Balrampur', 36, '2020-09-04', '13:19:25'),
(10, 'Banda', 36, '2020-09-04', '13:19:36'),
(11, 'Barabanki', 36, '2020-09-04', '13:19:45'),
(12, 'Bareilly', 36, '2020-09-04', '13:19:55'),
(13, 'Basti', 36, '2020-09-04', '13:20:03'),
(14, 'Bijnor', 36, '2020-09-04', '13:20:14'),
(15, 'Chandauli', 36, '2020-09-04', '13:20:22'),
(16, 'Chitrakoot', 36, '2020-09-04', '13:20:30'),
(17, 'Deoria', 36, '2020-09-04', '13:20:38'),
(18, 'Etah', 36, '2020-09-04', '13:20:46'),
(19, 'Etawah', 36, '2020-09-04', '13:20:59'),
(20, 'Faizabad', 36, '2020-09-04', '13:21:08'),
(21, 'Farrukhabad', 36, '2020-09-04', '13:21:18'),
(22, 'Fatehpur', 36, '2020-09-04', '13:21:26'),
(23, 'Gautam Buddha Nagar', 36, '2020-09-04', '13:22:12'),
(24, 'Ghaziabad', 36, '2020-09-04', '13:22:21'),
(25, 'Gonda', 36, '2020-09-04', '13:22:28'),
(26, 'Gorakhpur', 36, '2020-09-04', '13:22:37'),
(27, 'Hamirpur', 36, '2020-09-04', '13:22:45'),
(28, 'Hapur(Panchsheel Nagar)', 36, '2020-09-04', '13:22:58'),
(29, 'Hardoi', 36, '2020-09-04', '13:23:06'),
(30, 'Hathras', 36, '2020-09-04', '13:23:15'),
(31, 'Jalaun', 36, '2020-09-04', '13:23:22'),
(32, 'Jaunpur', 36, '2020-09-04', '13:23:31'),
(33, 'Jhansi', 36, '2020-09-04', '13:23:38'),
(34, 'Kannauj', 36, '2020-09-04', '13:23:46'),
(35, 'Kanpur Dehat', 36, '2020-09-04', '13:23:54'),
(36, 'Kanpur Nagar', 36, '2020-09-04', '13:24:03'),
(37, 'Kaushambi', 36, '2020-09-04', '13:24:13'),
(38, 'Kushinagar(Padrauna)', 36, '2020-09-04', '13:24:25'),
(39, 'Lakhimpur-Kheri', 36, '2020-09-04', '13:24:34'),
(40, 'Lucknow', 36, '2020-09-04', '13:24:41'),
(41, 'Maharajganj', 36, '2020-09-04', '13:24:49'),
(42, 'Mahoba', 36, '2020-09-04', '13:24:56'),
(43, 'Mainpuri', 36, '2020-09-04', '13:25:03'),
(44, 'Mathura', 36, '2020-09-04', '13:25:09'),
(45, 'Mau', 36, '2020-09-04', '13:25:17'),
(46, 'Meerut', 36, '2020-09-04', '13:25:24'),
(47, 'Mirzapur', 36, '2020-09-04', '13:25:32'),
(48, 'Muzaffarnagar', 36, '2020-09-04', '13:25:40'),
(49, 'Pilibhit', 36, '2020-09-04', '13:25:47'),
(50, 'Pratapgarh', 36, '2020-09-04', '13:25:56'),
(51, 'RaeBareli', 36, '2020-09-04', '13:26:03'),
(52, 'Rampur', 36, '2020-09-04', '13:26:11'),
(53, 'Saharanpur', 36, '2020-09-04', '13:26:22'),
(54, 'Sambhai(Bhim Nagar)', 36, '2020-09-04', '13:26:29'),
(55, 'Sant Kabir Nagar', 36, '2020-09-04', '13:26:38'),
(56, 'Shahjahanpur', 36, '2020-09-04', '13:26:48'),
(57, 'Shamali', 36, '2020-09-04', '13:26:57'),
(58, 'Shravasti', 36, '2020-09-04', '13:27:04'),
(59, 'Siddarth Nagar', 36, '2020-09-04', '13:27:14'),
(60, 'Sitapur', 36, '2020-09-04', '13:27:22'),
(61, 'Sonbhadra', 36, '2020-09-04', '13:27:28'),
(62, 'Sultanpur', 36, '2020-09-04', '13:27:36'),
(63, 'Unnao', 36, '2020-09-04', '13:27:46'),
(64, 'Varanasi', 36, '2020-09-04', '13:27:53'),
(65, 'Patna', 5, '2020-09-04', '20:29:57');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_gender`
--

DROP TABLE IF EXISTS `tbl_gender`;
CREATE TABLE IF NOT EXISTS `tbl_gender` (
  `gender_id` int(11) NOT NULL AUTO_INCREMENT,
  `gender` varchar(8) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  PRIMARY KEY (`gender_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_gender`
--

INSERT INTO `tbl_gender` (`gender_id`, `gender`, `date`, `time`) VALUES
(1, 'Male', '2020-04-05', '12:48:19'),
(2, 'Female', '2020-04-05', '12:48:59'),
(3, 'Other', '2020-04-05', '12:48:19');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_inlawtype`
--

DROP TABLE IF EXISTS `tbl_inlawtype`;
CREATE TABLE IF NOT EXISTS `tbl_inlawtype` (
  `lawtype_id` int(11) NOT NULL AUTO_INCREMENT,
  `areaname` varchar(200) NOT NULL,
  `lawarea_id` int(11) NOT NULL,
  `areafontcode` varchar(20) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  PRIMARY KEY (`lawtype_id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_inlawtype`
--

INSERT INTO `tbl_inlawtype` (`lawtype_id`, `areaname`, `lawarea_id`, `areafontcode`, `date`, `time`) VALUES
(1, 'Marriage', 1, 'fa fa-female', '2020-04-08', '13:51:23'),
(2, 'Divorce', 1, 'fa fa-heart', '2020-04-08', '13:51:40'),
(3, 'Alimony and maintenance', 1, 'fa fa-gavel', '2020-04-08', '13:51:54'),
(5, 'Judicial separation', 1, 'fa fa-users', '2020-04-08', '13:52:15'),
(6, 'Domestic violence', 1, 'fas fa-university', '2020-04-08', '13:52:33'),
(7, '498a', 1, 'fa fa-money', '2020-04-08', '13:52:43'),
(8, 'Child custody', 1, 'fa fa-child', '2020-04-08', '13:52:52'),
(9, 'Annulment of marriage', 1, 'fa fa-gavel', '2020-04-08', '13:53:02'),
(10, 'Muslim law', 1, 'fa fa-male', '2020-04-08', '13:53:11'),
(11, 'Murder Law', 3, 'fa fa-tag', '2020-05-28', '13:36:17');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_language`
--

DROP TABLE IF EXISTS `tbl_language`;
CREATE TABLE IF NOT EXISTS `tbl_language` (
  `lan_id` int(11) NOT NULL AUTO_INCREMENT,
  `languagename` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  PRIMARY KEY (`lan_id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_language`
--

INSERT INTO `tbl_language` (`lan_id`, `languagename`, `date`, `time`) VALUES
(1, 'Hindi', '2020-04-08', '12:21:44'),
(2, 'English', '2020-04-08', '12:21:54'),
(3, 'Bengali', '2020-04-08', '12:22:03'),
(4, 'Telugu', '2020-04-08', '12:22:11'),
(5, 'Marathi', '2020-04-08', '12:22:39'),
(6, 'Tamil', '2020-04-08', '12:22:47'),
(7, 'Kannada', '2020-04-08', '12:23:02'),
(8, 'Gujarati', '2020-04-08', '12:23:12'),
(9, 'Manipuri', '2020-04-08', '12:23:21'),
(10, 'Punjabi', '2020-04-08', '12:23:33'),
(11, 'Malayalam', '2020-04-08', '12:23:42'),
(12, 'Odia', '2020-04-08', '12:23:49'),
(13, 'Assamese', '2020-04-08', '12:23:58'),
(14, 'Kashmiri', '2020-04-08', '12:24:07'),
(15, 'Dogri', '2020-04-08', '12:24:17'),
(16, 'Urdu', '2020-04-08', '12:33:22');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_law`
--

DROP TABLE IF EXISTS `tbl_law`;
CREATE TABLE IF NOT EXISTS `tbl_law` (
  `law_id` int(11) NOT NULL AUTO_INCREMENT,
  `lawname` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  PRIMARY KEY (`law_id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_law`
--

INSERT INTO `tbl_law` (`law_id`, `lawname`, `date`, `time`) VALUES
(1, 'Family Law', '2020-05-28', '13:13:21'),
(2, 'Property Law', '2020-05-28', '13:21:01'),
(3, 'Criminal Law', '2020-05-28', '13:21:11'),
(10, 'Labour', '2020-09-04', '20:49:18'),
(5, 'Civil Law', '2020-05-28', '13:21:30'),
(7, 'Business Law', '2020-06-01', '13:26:37'),
(11, 'Taxation', '2020-09-04', '20:49:33'),
(12, 'Constitutional Law', '2020-09-04', '20:49:56'),
(13, 'Consumer Law', '2020-09-04', '20:50:06'),
(14, 'Intellectual Property ', '2020-09-04', '20:50:49');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_lawyer`
--

DROP TABLE IF EXISTS `tbl_lawyer`;
CREATE TABLE IF NOT EXISTS `tbl_lawyer` (
  `lawyer_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(40) NOT NULL,
  `number` varchar(10) NOT NULL,
  `license_number` varchar(15) NOT NULL,
  `language` varchar(200) NOT NULL,
  `practicingarea` varchar(200) NOT NULL,
  `practicingcourt` varchar(1000) NOT NULL,
  `practicingstate` varchar(20) NOT NULL,
  `practicingdistrict` varchar(50) NOT NULL,
  `casehandled` varchar(20) NOT NULL,
  `bar_enroll_date` date NOT NULL,
  `website` varchar(70) NOT NULL,
  `alt_number` varchar(10) NOT NULL,
  `account_number` varchar(60) NOT NULL,
  `ifsc` varchar(15) NOT NULL,
  `state` varchar(20) NOT NULL,
  `district` varchar(20) NOT NULL,
  `locality` varchar(100) NOT NULL,
  `pincode` varchar(6) NOT NULL,
  `filename` varchar(200) NOT NULL,
  `status` int(2) NOT NULL,
  `date_time` datetime NOT NULL,
  PRIMARY KEY (`lawyer_id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_lawyer`
--

INSERT INTO `tbl_lawyer` (`lawyer_id`, `name`, `email`, `password`, `number`, `license_number`, `language`, `practicingarea`, `practicingcourt`, `practicingstate`, `practicingdistrict`, `casehandled`, `bar_enroll_date`, `website`, `alt_number`, `account_number`, `ifsc`, `state`, `district`, `locality`, `pincode`, `filename`, `status`, `date_time`) VALUES
(1, 'Deadlock', 'dead@gmail.com', 'edea4b0412ade467166b1060f9dcd301', '7458847451', 'DE12345AD', 'Kannada, Odia, Kashmiri', '1', ' Allahabad High Court(Lucknow Bench), Bombay High Court (Panaji Bench), Delhi High Court', '3', '', '123', '2020-01-10', 'www.deadlock.com', '9453504192', '', '', '21', '4', 'Andheri Purani Mumbai', '45632', '6.jpg', 0, '2020-08-13 00:05:13'),
(2, 'Decripted', 'dec@gmail.com', 'b8817f8b8999500576f4d91cf40eeebc', '9453504192', 'DE41256CR', 'Hindi, English, Gujarati, Malayalam, Urdu', '1', 'Calcutta High Court (Port Blair Bench), Gauhati High Court (Itanagar Bench), Jharkhand High Court, Madras High Court, Patna High Court, Rajasthan High Court (Jaipur Bench)', '6', '', '531', '2019-02-05', 'www.decexample.com', '6360562045', '', '', '5', '2', 'Ward no.8 Purnia , Jharkand ', '446485', 'ball-shaped-circle-close-up-dark-414860.jpg', 0, '2020-06-01 23:01:37'),
(3, 'Lawyer Name', 'enc@gmail.com', '3429b8980af01384d4d8043156a9d50c', '7557256632', 'EN123456CR', 'Hindi, Punjabi', '1', 'Calcutta High Court (Port Blair Bench), Gauhati High Court (Aizawl Bench), Karnataka High Court, Tripura High Court', '10', '', '123', '2011-07-14', 'www.example.com', '8004899500', '', '', '15', '2', 'Laddakh Inter City In Jammu', '452123', 'fotolia_56178472_subscription_monthly_xxl.jpg', 0, '2020-08-14 14:07:39'),
(4, 'Malik Rashid', 'rashidff611@gmail.com', '08476d250a8ef3665243977df389bff0', '7458847451', 'RAS7458ID', 'Hindi, English, Telugu, Kannada, Punjabi, Kashmiri', '1', 'Bombay High Court (Panaji Bench), Gauhati High Court (Aizawl Bench), Himachal Pradesh High Court, Meghalaya High Court, Tripura High Court', '31', '', '1500', '2018-05-16', 'www.rashidf.com', '9453504192', '', '', '21', '4', 'Ward No.8 Azad Nagar', '245466', 'logolawyer.png', 0, '2020-06-06 12:55:01'),
(5, 'Hello', 'hello@gmail.com', '6be7e540009e88c2edc099c59ff597cf', '9453504192', 'H94535LO', 'Hindi, English, Kannada, Malayalam, Odia, Urdu', '1', 'Bombay High Court (Nagpur Bench), Bombay High Court (Panaji Bench), Bombey High Court(Aurangabad Bench), Chhattisgarh High Court, Delhi High Court, Gauhati High Court (Aizawl Bench), Gujarat High Court, Hyderabad High Court, Jammu and Kashmir High Court, Karnataka High Court (Dharwad Bench), Karnataka High Court (Gulbarga Bench), Rajasthan High Court, Tripura High Court', '8', '', '4512', '2019-10-17', 'www.example.com', '7458847451', '', '', '13', '2', 'Haryana Patna, Uttar Pradesh', '271401', '55.jpg', 0, '2020-07-04 11:18:51'),
(6, 'Saeed Ahmad', 'demo@gmail.com', '2a4d008ce5860ca19ed8519c93d04a77', '7380989869', 'D45612MO', 'Hindi, Kannada, Urdu', '1', 'Bombay High Court (Nagpur Bench), Bombey High Court(Aurangabad Bench), Calcutta High Court, Jammu and Kashmir High Court', '36', '4', '1540', '2019-06-06', 'www.demo.com', '7355407000', '32955307569', 'SBI12545', '36', '59', 'Street 4 high Way Road, Mumbai', '272201', 'c2.jpg', 0, '2020-10-01 08:23:33'),
(7, 'Neha Singh', 'neha@gmail.com', '7c88500ab6b24068993c6d9b5493abe6', '7380989869', 'N456HA1', 'Hindi, English, Tamil, Gujarati, Punjabi, Urdu', '1', 'Bombay High Court (Nagpur Bench), Calcutta High Court (Port Blair Bench), Gauhati High Court (Itanagar Bench), Gujarat High Court, Himachal Pradesh High Court, Jharkhand High Court, Karnataka High Court (Gulbarga Bench), Tripura High Court', '13', '', '4500', '2011-07-24', 'www.example.com', '9453447560', '', '', '13', '2', 'Goal Ghar High Way Road Legal Care Floar No 8', '272205', 'image_5.jpg', 0, '2020-08-14 14:12:41'),
(8, 'Priya Pandey', 'priya@gmail.com', 'd5fa2849c29ed6b349b8e12da2eb139a', '7475767778', 'PR7458IY1', 'Hindi, English, Marathi, Punjabi, Urdu', '1', 'Kerala High Court, Madhya Pradesh High Court (Indore Bench), Odisha High Court, Patna High Court, Sikkim High Court, Supreme Court of India', '31', '', '123', '2016-02-24', 'www.priyalegal.com', '9453504192', '', '', '34', '3', 'City Street High Way Road Floar No 8  ', '274501', 'coach_hero_1.jpg', 0, '2020-08-14 23:00:10'),
(9, 'Jhuhi Singh', 'jhuhi@gmail.com', '1dc45cb3f44f91860b8ccacca2bf7129', '7458847451', 'JH7215UH1', 'Hindi, English, Marathi, Tamil, Malayalam, Odia, Urdu', '1', 'Himachal Pradesh High Court, Jammu and Kashmir High Court, Karnataka High Court (Dharwad Bench), Madhya Pradesh High Court, Madras High Court, Manipur High Court, Meghalaya High Court, Patna High Court, Tripura High Court, Uttarakhand High Court', '28', '', '780', '2016-03-24', 'www.juhilegal.com', '9594758475', '', '', '21', '4', 'Mumbai Bandra Brand Street 4 House No.9', '272204', 'prev.jpg', 0, '2020-07-24 10:40:10'),
(10, 'Malik', 'mkl@gmail.com', '07f7139e3ae0cf252c7b87ed898a16f7', '7458847451', 'MKL123456', '--', '0', '--', '', '--', '--', '2004-07-29', 'www.example.com', '--', '32635307365', 'SBI123456', '--', '--', '--', '--', '4.png', 0, '2020-08-30 11:30:43');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_lawyer_lawtype`
--

DROP TABLE IF EXISTS `tbl_lawyer_lawtype`;
CREATE TABLE IF NOT EXISTS `tbl_lawyer_lawtype` (
  `law_type_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `lawyer_id` int(11) NOT NULL,
  `date_time` datetime NOT NULL,
  PRIMARY KEY (`law_type_id`)
) ENGINE=MyISAM AUTO_INCREMENT=68 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_lawyer_lawtype`
--

INSERT INTO `tbl_lawyer_lawtype` (`law_type_id`, `name`, `lawyer_id`, `date_time`) VALUES
(1, '7', 1, '2020-05-06 10:58:37'),
(2, '3', 1, '2020-05-06 10:58:37'),
(3, '9', 1, '2020-05-06 10:58:37'),
(4, '8', 1, '2020-05-06 10:58:37'),
(5, '2', 1, '2020-05-06 10:58:37'),
(6, '6', 1, '2020-05-06 10:58:37'),
(7, '5', 1, '2020-05-06 10:58:37'),
(8, '1', 1, '2020-05-06 10:58:37'),
(9, '10', 1, '2020-05-06 10:58:37'),
(10, '4', 1, '2020-05-06 10:58:37'),
(37, '5', 4, '2020-06-06 12:15:03'),
(36, '6', 4, '2020-06-06 12:15:03'),
(35, '2', 4, '2020-06-06 12:15:03'),
(34, '8', 4, '2020-06-06 12:15:03'),
(33, '9', 4, '2020-06-06 12:15:03'),
(32, '3', 4, '2020-06-06 12:15:03'),
(31, '7', 4, '2020-06-06 12:15:03'),
(30, '1', 3, '2020-05-06 11:43:49'),
(29, '8', 3, '2020-05-06 11:43:49'),
(28, '3', 2, '2020-05-06 11:38:37'),
(38, '1', 4, '2020-06-06 12:15:03'),
(39, '11', 4, '2020-06-06 12:15:03'),
(40, '10', 4, '2020-06-06 12:15:03'),
(41, '4', 4, '2020-06-06 12:15:03'),
(42, '3', 5, '2020-07-04 00:17:24'),
(43, '9', 5, '2020-07-04 00:17:24'),
(44, '2', 5, '2020-07-04 00:17:24'),
(45, '6', 5, '2020-07-04 00:17:24'),
(46, '1', 5, '2020-07-04 00:17:24'),
(47, '11', 5, '2020-07-04 00:17:24'),
(48, '4', 5, '2020-07-04 00:17:24'),
(66, '5', 6, '2020-09-24 11:10:20'),
(65, '6', 6, '2020-09-24 11:10:20'),
(51, '3', 9, '2020-07-24 10:38:08'),
(52, '1', 9, '2020-07-24 10:38:08'),
(53, '10', 9, '2020-07-24 10:38:08'),
(54, '6', 8, '2020-07-24 10:43:41'),
(55, '5', 8, '2020-07-24 10:43:41'),
(56, '4', 8, '2020-07-24 10:43:41'),
(57, '2', 7, '2020-07-24 10:52:06'),
(58, '10', 7, '2020-07-24 10:52:06'),
(64, '9', 6, '2020-09-24 11:10:20'),
(63, '3', 6, '2020-09-24 11:10:20'),
(67, '1', 6, '2020-09-24 11:10:20');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_lawyer_payment`
--

DROP TABLE IF EXISTS `tbl_lawyer_payment`;
CREATE TABLE IF NOT EXISTS `tbl_lawyer_payment` (
  `pay_id` int(11) NOT NULL AUTO_INCREMENT,
  `lawyer_id` int(11) NOT NULL,
  `appointment_id` int(11) NOT NULL,
  `txn_id` varchar(50) NOT NULL,
  `amount` int(11) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  PRIMARY KEY (`pay_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_lawyer_payment`
--

INSERT INTO `tbl_lawyer_payment` (`pay_id`, `lawyer_id`, `appointment_id`, `txn_id`, `amount`, `date`, `time`) VALUES
(1, 6, 3, 'txn123456', 1200, '2020-08-29', '12:05:51'),
(2, 2, 5, 'txn457812', 1520, '2020-08-04', '22:12:12'),
(3, 6, 4, 'txn12154', 21500, '2020-08-29', '13:35:11');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_newsletter`
--

DROP TABLE IF EXISTS `tbl_newsletter`;
CREATE TABLE IF NOT EXISTS `tbl_newsletter` (
  `newsletter_id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(30) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  PRIMARY KEY (`newsletter_id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_newsletter`
--

INSERT INTO `tbl_newsletter` (`newsletter_id`, `email`, `date`, `time`) VALUES
(1, 'rashidmalik@gmail.com', '2020-04-12', '23:35:15'),
(2, 'rashidmalik@gmail.com', '2020-04-12', '23:38:11'),
(3, 'rashidmalik@gmail.com', '2020-04-12', '23:38:27'),
(4, 'kl@gmail.com', '2020-04-12', '23:54:29'),
(5, 'dead@gmail.com', '2020-04-19', '09:50:45'),
(6, 'daed@gmail.com', '2020-04-19', '09:56:13'),
(7, 'rashd@gmail.com', '2020-06-06', '11:51:34'),
(8, 'ras@gmail.com', '2020-06-10', '10:51:38'),
(9, 'helllo@gmail.com', '2020-07-03', '21:40:45'),
(10, 'testing@gmail.com', '2020-07-03', '21:41:28'),
(11, 'Hello2@gmail.com', '2020-07-03', '21:42:12');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_otp`
--

DROP TABLE IF EXISTS `tbl_otp`;
CREATE TABLE IF NOT EXISTS `tbl_otp` (
  `otp_id` int(11) NOT NULL AUTO_INCREMENT,
  `appointment_id` int(11) NOT NULL,
  `phone` varchar(13) NOT NULL,
  `otp` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  PRIMARY KEY (`otp_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_otp`
--

INSERT INTO `tbl_otp` (`otp_id`, `appointment_id`, `phone`, `otp`, `status`, `date`, `time`) VALUES
(1, 3, '7558847457', 724919, 1, '2020-08-14', '12:12:30'),
(2, 1, '7380989869', 341106, 0, '2020-08-14', '12:38:29'),
(3, 4, '7558847457', 949287, 1, '2020-08-29', '13:04:52');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_practicingcourt`
--

DROP TABLE IF EXISTS `tbl_practicingcourt`;
CREATE TABLE IF NOT EXISTS `tbl_practicingcourt` (
  `practicingcourt_id` int(11) NOT NULL AUTO_INCREMENT,
  `courtname` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  PRIMARY KEY (`practicingcourt_id`)
) ENGINE=MyISAM AUTO_INCREMENT=41 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_practicingcourt`
--

INSERT INTO `tbl_practicingcourt` (`practicingcourt_id`, `courtname`, `date`, `time`) VALUES
(2, 'Allahabad High Court', '2020-04-07', '15:50:23'),
(3, ' Allahabad High Court(Lucknow Bench)', '2020-04-07', '15:51:10'),
(4, 'Bombey High Court', '2020-04-07', '15:51:19'),
(5, 'Bombey High Court(Aurangabad Bench)', '2020-04-07', '15:51:28'),
(6, 'Bombay High Court (Nagpur Bench)', '2020-04-07', '15:52:46'),
(7, 'Bombay High Court (Panaji Bench)', '2020-04-07', '15:52:56'),
(8, 'Calcutta High Court', '2020-04-07', '15:53:04'),
(9, 'Calcutta High Court (Port Blair Bench)', '2020-04-07', '15:53:11'),
(10, 'Chhattisgarh High Court', '2020-04-07', '15:53:20'),
(11, 'Delhi High Court', '2020-04-07', '15:53:27'),
(12, 'Gauhati High Court', '2020-04-07', '15:53:34'),
(13, 'Gauhati High Court (Aizawl Bench)', '2020-04-07', '15:53:40'),
(14, 'Gauhati High Court (Itanagar Bench)', '2020-04-07', '15:53:49'),
(15, 'Gauhati High Court (Kohima Bench)', '2020-04-07', '15:53:56'),
(16, 'Gujarat High Court', '2020-04-07', '15:54:04'),
(17, 'Himachal Pradesh High Court', '2020-04-07', '15:54:12'),
(18, 'Hyderabad High Court', '2020-04-07', '15:54:21'),
(19, 'Jammu and Kashmir High Court', '2020-04-07', '15:54:28'),
(20, 'Jharkhand High Court', '2020-04-07', '15:54:34'),
(21, 'Karnataka High Court', '2020-04-07', '15:55:08'),
(22, 'Karnataka High Court (Dharwad Bench)', '2020-04-07', '15:55:16'),
(23, 'Karnataka High Court (Gulbarga Bench)', '2020-04-07', '15:55:24'),
(24, 'Kerala High Court', '2020-04-07', '15:55:31'),
(25, 'Madhya Pradesh High Court', '2020-04-07', '15:55:51'),
(26, 'Madhya Pradesh High Court (Gwalior Bench)', '2020-04-07', '15:56:02'),
(27, 'Madhya Pradesh High Court (Indore Bench)', '2020-04-07', '15:56:10'),
(28, 'Madras High Court', '2020-04-07', '15:56:17'),
(29, 'Madras High Court (Madurai Bench)', '2020-04-07', '15:56:25'),
(30, 'Manipur High Court', '2020-04-07', '15:56:31'),
(31, 'Meghalaya High Court', '2020-04-07', '15:56:40'),
(32, 'Odisha High Court', '2020-04-07', '15:56:48'),
(33, 'Patna High Court', '2020-04-07', '15:56:55'),
(34, 'Punjab and Haryana High Court', '2020-04-07', '15:57:05'),
(35, 'Rajasthan High Court', '2020-04-07', '15:57:11'),
(36, 'Rajasthan High Court (Jaipur Bench)', '2020-04-07', '15:57:19'),
(37, 'Sikkim High Court', '2020-04-07', '15:57:25'),
(38, 'Supreme Court of India', '2020-04-07', '15:57:31'),
(39, 'Tripura High Court', '2020-04-07', '15:57:41'),
(40, 'Uttarakhand High Court', '2020-04-07', '15:57:48');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_question`
--

DROP TABLE IF EXISTS `tbl_question`;
CREATE TABLE IF NOT EXISTS `tbl_question` (
  `question_id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(30) NOT NULL,
  `lawarea` varchar(20) NOT NULL,
  `title` varchar(50) NOT NULL,
  `description` varchar(5000) NOT NULL,
  `religion` varchar(10) NOT NULL,
  `state` varchar(5) NOT NULL,
  `district` varchar(5) NOT NULL,
  `pincode` varchar(6) NOT NULL,
  `mo_number` varchar(13) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  PRIMARY KEY (`question_id`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_question`
--

INSERT INTO `tbl_question` (`question_id`, `email`, `lawarea`, `title`, `description`, `religion`, `state`, `district`, `pincode`, `mo_number`, `date`, `time`) VALUES
(8, 'k@gmail.com', '3', 'Informationtechnology including computers and inte', 'IT law does Naming convention for method.Lower case letter Unchecked Exception.Many of the designations used by manufacturers and sellers to distinguish their products are claimed as trademarks.Many of the designations used by manufacturers and sellers to distinguish their products are claimed as trademarksMany of the designations used by manufacturers and sellers to distinguish their products are claimed as trademarks ', 'Muslim', '5', '4', '222301', '7458847451', '2020-04-11', '13:22:40'),
(4, 'k@gmail.com', '1', 'xyz', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'Sikha', '5', '4', '222301', '7458847451', '2020-04-08', '21:02:58'),
(5, 'k@gmail.com', '3', '  Ut enim ad minim veniam.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'Muslim', '5', '4', '222301', '7458847451', '2020-04-08', '21:05:57'),
(6, 'k@gmail.com', '7', 'Lorem ipsum dolor sit amet, consectetur adipisicin', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'Krischian', '5', '4', '222301', '7458847451', '2020-04-08', '21:45:16'),
(7, 'k@gmail.com', '7', 'Lorem ipsum dolor sit amet, consectetur adipisicin', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'Krischian', '5', '4', '222301', '7458847451', '2020-04-08', '21:46:40'),
(9, 'z@gmail.com', '2', 'Many of the designations used by manufacturers and', 'Many of the designations used by manufacturers and sellers to distinguish their products are claimed as trademarks.Howeve data is only one part of a program. You also need instructions.The compiler translates this statement into a series of cryptic machine instructions. This sort of statement is called an assignment statement. It is used to compute and store the value of an arithmetic expression.', 'Krischian', '3', '2', '272201', '9453504192', '2020-04-11', '13:24:52'),
(10, 'z@gmail.com', '5', 'The compiler translates this statement into.', 'The compiler translates this statement into a series of cryptic machine instructions. This sort of statement is called an assignment statement. It is used to compute and store the value of an arithmetic expression.', 'Krischian', '5', '4', '272201', '7458847451', '2020-04-11', '13:26:00'),
(11, 'rms@gmail.com', '1', 'of the information presented. However, the informa', 'of the information presented. However, the information contained in this book is\r\nsold without warranty, either express or implied. Neither the author, nor Packt\r\nPublishing, and its dealers and distributors will be held liable for any damages\r\ncaused or alleged to be caused directly or indirectly by this boo', 'Muslim', '21', '4', '223301', '7458847451', '2020-05-01', '13:08:33'),
(20, 'test@gmail.com', '3', 'What is Criminal Law', 'Can U Explain me plz', 'Muslim', '20', '2', '272201', '7558847457', '2020-07-01', '11:03:37'),
(21, 'blog@gmail.com', '7', 'My Property is Handover from My Father .', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'Hindu', '11', '3', '275501', '7380989869', '2020-07-09', '09:21:53'),
(16, 'rms@gmail.com', '7', 'Besides being a software engineer, he works as an ', 'To begin with, I credit my parents who have always nurtured my\r\ndreams and constantly supported me to make them happen. I want\r\nto thank my To begin with, I credit my parents who have always nurtured my\r\ndreams and constantly supported me to make them happen. I want\r\nto thank.', 'Krischian', '21', '4', '223301', '7458847451', '2020-05-01', '13:21:27'),
(18, 'rms@gmail.com', '5', 'Dedicated to everyone who has no place to stay or ', 'Dedicated to everyone who has no place to stay or insufficient strength and want to live, especially those who used up all their strength serving someone else or their community, in the hope that just one reader might reach out to just one of them.', 'Krischian', '21', '4', '223301', '7458847451', '2020-05-01', '13:24:07'),
(19, 'rms@gmail.com', '7', 'Dedicated to everyone who has no place to stay or ', 'Dedicated to everyone who has no place to stay or insufficient strength and want to live, especially those who used up all their strength serving someone else or their community, in the hope that just one reader might reach out to just one of them.', 'Hindu', '21', '4', '223301', '7458847451', '2020-05-01', '13:25:32'),
(22, 'amir@gmail.com', '3', 'Are You Sure You Want Bootstrap? ', '', 'Hindu', '18', '3', '272201', '7458847451', '2020-08-15', '08:39:51'),
(23, 'amir@gmail.com', '3', 'ji', 'j', 'Krischian', '18', '3', '272201', '7458847451', '2020-08-15', '08:40:20');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_star`
--

DROP TABLE IF EXISTS `tbl_star`;
CREATE TABLE IF NOT EXISTS `tbl_star` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `ratepoint` tinyint(5) NOT NULL,
  `lawyer_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_star`
--

INSERT INTO `tbl_star` (`id`, `user_id`, `ratepoint`, `lawyer_id`, `date`, `time`) VALUES
(1, 14, 5, 1, '2020-07-05', '11:20:43'),
(2, 13, 4, 1, '2020-07-14', '12:05:06'),
(3, 14, 2, 5, '2020-07-05', '12:50:28'),
(4, 13, 3, 5, '2020-07-07', '12:07:13'),
(5, 14, 4, 2, '2020-07-05', '13:06:00'),
(6, 14, 5, 4, '2020-07-05', '23:34:01'),
(7, 14, 4, 3, '2020-07-06', '23:46:40'),
(8, 15, 2, 4, '2020-07-06', '23:50:10'),
(9, 15, 3, 5, '2020-07-06', '23:50:55'),
(10, 15, 3, 3, '2020-07-06', '23:51:33'),
(11, 14, 2, 6, '2020-07-07', '19:40:23'),
(12, 16, 3, 5, '2020-07-08', '19:51:27'),
(13, 15, 4, 2, '2020-07-21', '10:59:22');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_state`
--

DROP TABLE IF EXISTS `tbl_state`;
CREATE TABLE IF NOT EXISTS `tbl_state` (
  `state_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  PRIMARY KEY (`state_id`)
) ENGINE=MyISAM AUTO_INCREMENT=40 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_state`
--

INSERT INTO `tbl_state` (`state_id`, `name`, `date`, `time`) VALUES
(1, 'Assam', '2020-05-01', '11:09:15'),
(2, 'Andhra Pradesh', '2020-05-01', '11:10:20'),
(3, 'Arunachal Pradesh', '2020-05-01', '11:10:32'),
(4, 'Andaman and Nicobar Islands', '2020-05-01', '11:10:43'),
(5, 'Bihar', '2020-05-01', '11:10:52'),
(6, 'Chandigarh', '2020-05-01', '11:11:01'),
(7, 'Chhattisgarh', '2020-05-01', '11:11:10'),
(8, 'Dadra and Nagar Haveli', '2020-05-01', '11:11:19'),
(9, 'Daman and Diu', '2020-05-01', '11:11:29'),
(10, 'Delhi', '2020-05-01', '11:11:37'),
(11, 'Goa', '2020-05-01', '11:11:45'),
(12, 'Gujarat', '2020-05-01', '11:11:55'),
(13, 'Haryana', '2020-05-01', '11:12:10'),
(14, 'Himachal Pradesh', '2020-05-01', '11:12:22'),
(15, 'Jammu and Kashmir', '2020-05-01', '11:12:36'),
(16, 'Jharkhand', '2020-05-01', '11:12:48'),
(17, 'Karnataka', '2020-05-01', '11:12:53'),
(18, 'Kerala', '2020-05-01', '11:12:59'),
(19, 'Lakshadweep', '2020-05-01', '11:13:06'),
(20, 'Madhya Pradesh', '2020-05-01', '11:13:34'),
(21, 'Maharashtra', '2020-05-01', '11:13:41'),
(23, 'Meghalaya', '2020-05-01', '11:14:40'),
(24, 'Mizoram', '2020-05-01', '11:14:47'),
(25, 'Nagaland', '2020-05-01', '11:14:54'),
(26, 'Odisha', '2020-05-01', '11:15:01'),
(27, 'Manipur', '2020-05-01', '11:15:12'),
(28, 'Puducherry', '2020-05-01', '11:15:21'),
(31, 'Rajasthan', '2020-05-01', '11:15:51'),
(30, 'Punjab', '2020-05-01', '11:15:42'),
(32, 'Sikkim', '2020-05-01', '11:16:00'),
(33, 'Tamil Nadu', '2020-05-01', '11:16:10'),
(34, 'Telangana', '2020-05-01', '11:16:18'),
(35, 'Tripura', '2020-05-01', '11:16:25'),
(36, 'Uttar Pradesh', '2020-05-01', '11:16:34'),
(39, 'West Bengal', '2020-05-01', '11:16:58'),
(38, 'Uttarakhand', '2020-05-01', '11:16:50');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

DROP TABLE IF EXISTS `tbl_user`;
CREATE TABLE IF NOT EXISTS `tbl_user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(30) NOT NULL,
  `mo_number` varchar(13) NOT NULL,
  `password` varchar(40) NOT NULL,
  `alternate_number` varchar(13) NOT NULL,
  `state` varchar(50) NOT NULL,
  `district` varchar(50) NOT NULL,
  `locality` varchar(200) NOT NULL,
  `pincode` varchar(6) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`user_id`, `name`, `email`, `mo_number`, `password`, `alternate_number`, `state`, `district`, `locality`, `pincode`, `date`, `time`) VALUES
(1, 'Malik Rashid', 'mr@gmail.com', '7458', 'mr', '--', '--', '--', '--', '--', '2020-04-05', '21:47:03'),
(2, 'Mr.Khan', 'k@gmail.com', '7458847451', 'k', '--', '5', '4', 'Anna Market Preeti Nagar', '222301', '2020-04-08', '20:14:50'),
(3, 'Zoya Hashmi', 'z@gmail.com', '7458847451', 'z', '9453504192', '5', '4', 'Ward no 8 azad nagar', '272201', '2020-04-11', '13:32:01'),
(4, 'Malik', 'ras@gmail.com', '7458847451', '12345678', '--', '--', '--', '--', '--', '2020-04-07', '22:44:42'),
(5, 'Rashid', 'malik@gmail.com', '7458847451', '12345678', '--', '--', '--', '--', '--', '2020-04-07', '23:33:39'),
(6, 'Malik', 'r@gmail.com', '7458847451', '12345678', '--', '--', '--', '--', '--', '2020-04-07', '23:43:15'),
(7, 'Sacrlet Jonson', 'scj@gmail.com', '7458847451', 'scj12345', '--', '--', '--', '--', '--', '2020-04-09', '13:04:17'),
(8, 'Encripted', 'en@gmail.com', '7458847451', '887608ec81357d8a3f8843f8fb361856', '9453504192', '5', '4', 'Ward No. 8 azad nagar barhni', '272201', '2020-04-13', '19:42:44'),
(9, 'Neha Hashmi', 'rms@gmail.com', '7458847451', '8c79268cafdea8ddafe3b983af360d3d', '9453504192', '5', '2', 'Anna Maeket Preeti Nagar Lucknow', '223301', '2020-06-01', '13:33:26'),
(10, 'Fatima', 'fatima@gmail.com', '7458847451', 'b5d5f67b30809413156655abdda382a3', '--', '--', '--', '--', '--', '2020-04-15', '12:25:33'),
(11, 'Yassu', 'yas@gmail.com', '9453504192', '16a2b8e3fd8f8bcb22ef67f228106a51', '--', '--', '--', '--', '--', '2020-04-15', '12:27:52'),
(12, 'Aliza', 'aliza@gmail.com', '9453504192', '6d2d602b0a163433ffb597b50036c4f6', '--', '--', '--', '--', '--', '2020-04-15', '12:38:28'),
(13, 'Zahra', 'zahra@gmail.com', '9453504192', '7f70eb231a2389ae3a3cd8fdf9b28400', '--', '--', '--', '--', '--', '2020-04-15', '12:41:12'),
(14, 'XYZ', 'test@gmail.com', '7558847457', '8839759df07df06d2cf00bdd756a9a78', '9453504192', '36', '40', 'Street 450 House No.45 Near Apollo Hospital ', '272201', '2020-09-10', '21:34:09'),
(15, 'Blogify', 'blog@gmail.com', '7380989869', '0fcfdaee2d7c2e60a58362ac39d05471', '73355404377', '11', '3', 'Bndra Brand Star Road, Goa', '275501', '2020-07-09', '09:19:47'),
(16, 'Amir Ansari', 'amir@gmail.com', '7458847451', '26003c01622471b0a14d596fc98f8b4f', '7355404370', '18', '3', 'Preshan Gali Kerala', '272201', '2020-07-08', '19:53:38');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
