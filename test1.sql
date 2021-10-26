-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 22, 2021 at 11:48 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test1`
--

-- --------------------------------------------------------

--
-- Table structure for table `0dljtqkadq_a`
--

CREATE TABLE `0dljtqkadq_a` (
  `en_no` varchar(11) NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `improvement` varchar(250) DEFAULT NULL,
  `Q1` int(11) DEFAULT NULL,
  `Q2` int(11) DEFAULT NULL,
  `Q3` int(11) DEFAULT NULL,
  `Q4` int(11) DEFAULT NULL,
  `Q5` int(11) DEFAULT NULL,
  `Q6` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `0dljtqkadq_a`
--

INSERT INTO `0dljtqkadq_a` (`en_no`, `name`, `email`, `improvement`, `Q1`, `Q2`, `Q3`, `Q4`, `Q5`, `Q6`) VALUES
('19162171020', 'Vishvesh', 'vishvesh@gnu.ac.in', 'not needed\r\n', 5, 3, 4, 3, 2, 5),
('19162171021', 'Manav', 'manav@gnu.ac.in', 'not needed\r\n', 3, 5, 3, 1, 2, 2),
('19162171022', 'Deep', 'deep@gnu.ac.in', 'not needed\r\n', 5, 1, 5, 4, 2, 2),
('19162171024', 'Vidhan', 'Vidhan@gnu.ac.in', 'not needed\r\n', 5, 5, 3, 2, 1, 2),
('19162171025', 'Javal Patel', 'javalpatel19@gnu.ac.in', 'not needed\r\n', 5, 4, 3, 2, 1, 2),
('19162171055', 'abcd', 'abcd@gnu.ac.in', 'not needed\r\n', 1, 4, 2, 5, 3, 5),
('19162171056', 'xyz', 'xyz@gnu.ac.in', 'yes there is a lot more changes are needed in this subject\r\n', 1, 2, 2, 3, 3, 1),
('19162171057', 'efg', 'efg@gnu.ac.in', 'yes there is a lot more changes are needed in this subject. also the teaching method need some changes\r\n', 4, 3, 2, 1, 2, 1),
('19162171058', 'pqr', 'pqr@gnu.ac.in', 'not needed', 5, 4, 5, 3, 4, 5),
('19162171059', 'pqrst', 'pqrst@gnu.ac.in', 'not needed', 5, 5, 5, 4, 5, 5),
('19162171060', 'tuvw', 'tuvw@gnu.ac.in', 'not needed', 5, 4, 5, 5, 5, 5),
('19162171061', 'dfg', 'dfg@gnu.ac.in', 'not needed', 5, 5, 5, 5, 5, 5),
('19162171062', 'ehi', 'ehi@gnu.ac.in', 'not needed', 5, 5, 5, 5, 5, 5),
('19162171063', 'jkl', 'jkl@gnu.ac.in', 'not needed', 5, 5, 5, 5, 5, 5),
('19162171064', 'mno', 'mno@gnu.ac.in', 'not needed', 5, 5, 5, 5, 5, 5),
('19162171065', 'mnop', 'mnop@gnu.ac.in', 'not needed', 4, 5, 5, 5, 5, 5),
('19162171066', 'mnopq', 'mnopq@gnu.ac.in', 'not needed', 5, 5, 5, 5, 5, 5),
('19162171067', 'abcde', 'abcde@gnu.ac.in', 'not needed', 5, 5, 5, 5, 5, 5),
('19162171068', 'gdpe', 'gdpe@gnu.ac.in', 'not needed', 5, 5, 5, 5, 5, 5),
('19162171069', 'hdfc', 'hdfc@gnu.ac.in', 'not needed', 5, 5, 5, 5, 5, 5);

-- --------------------------------------------------------

--
-- Table structure for table `0dljtqkadq_q`
--

CREATE TABLE `0dljtqkadq_q` (
  `num` int(3) NOT NULL,
  `question` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `0dljtqkadq_q`
--

INSERT INTO `0dljtqkadq_q` (`num`, `question`) VALUES
(1, 'Was knowledgeable about the subject and course material.'),
(2, 'Was enthusiastic about the topic or subject.'),
(3, 'The instructor treats all students with respect.'),
(4, 'Designed and used fair grading procedures.'),
(5, 'Provided adequate and timely feedback on exams/papers/performance.'),
(6, 'What is your overall rating of the instructor?');

-- --------------------------------------------------------

--
-- Table structure for table `2h8koglhsi_a`
--

CREATE TABLE `2h8koglhsi_a` (
  `en_no` varchar(11) NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `improvement` varchar(250) DEFAULT NULL,
  `Q1` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `2h8koglhsi_q`
--

CREATE TABLE `2h8koglhsi_q` (
  `num` int(3) NOT NULL,
  `question` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `2h8koglhsi_q`
--

INSERT INTO `2h8koglhsi_q` (`num`, `question`) VALUES
(1, 'how do you find this session');

-- --------------------------------------------------------

--
-- Table structure for table `8lc45gd64d_a`
--

CREATE TABLE `8lc45gd64d_a` (
  `en_no` varchar(11) NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `improvement` varchar(250) DEFAULT NULL,
  `Q1` int(11) DEFAULT NULL,
  `Q2` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `8lc45gd64d_q`
--

CREATE TABLE `8lc45gd64d_q` (
  `num` int(3) NOT NULL,
  `question` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `8lc45gd64d_q`
--

INSERT INTO `8lc45gd64d_q` (`num`, `question`) VALUES
(1, 'how do you find this session'),
(2, 'Does sessions are interactive');

-- --------------------------------------------------------

--
-- Table structure for table `65wqq8kodc_a`
--

CREATE TABLE `65wqq8kodc_a` (
  `en_no` varchar(11) NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `improvement` varchar(250) DEFAULT NULL,
  `Q1` int(11) DEFAULT NULL,
  `Q2` int(11) DEFAULT NULL,
  `Q3` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `65wqq8kodc_q`
--

CREATE TABLE `65wqq8kodc_q` (
  `num` int(3) NOT NULL,
  `question` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `65wqq8kodc_q`
--

INSERT INTO `65wqq8kodc_q` (`num`, `question`) VALUES
(1, 'csdvvrv'),
(2, 'sdvsdvv'),
(3, 'dsvsdvv');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `A_UID` varchar(20) NOT NULL,
  `A_pass` varchar(32) DEFAULT NULL,
  `A_name` tinytext DEFAULT NULL,
  `last_login` varchar(80) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`A_UID`, `A_pass`, `A_name`, `last_login`) VALUES
('javal', 'javal123#', 'Javal Patel', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `a_login`
--

CREATE TABLE `a_login` (
  `Login\Logout` varchar(20) NOT NULL,
  `Login\Logout Time` varchar(100) DEFAULT NULL,
  `MAC` varchar(20) NOT NULL,
  `IP` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `a_login`
--

INSERT INTO `a_login` (`Login\Logout`, `Login\Logout Time`, `MAC`, `IP`) VALUES
('Login', '2021-03-31 19:14:24', '', ''),
('Login', '2021-03-31 19:16:00', '', ''),
('Login', '2021-03-31 20:33:50', '', ''),
('Attempt', '2021-03-31 20:34:24', '', ''),
('Login', '2021-03-31 20:47:24', '', ''),
('Login', '2021-03-31 20:48:06', '', ''),
('Login', '2021-03-31 20:48:20', '', ''),
('Attempt', '2021-04-01 08:34:38', '', ''),
('Login', '2021-04-01 10:56:03', '', ''),
('Login', '2021-04-01 11:35:25', '', ''),
('Login', '2021-04-01 11:36:58', '', ''),
('Login', '2021-04-01 11:42:21', '', ''),
('Login', '2021-04-01 11:43:48', '', ''),
('Login', '2021-04-01 11:44:57', '', ''),
('Login', '2021-04-01 11:53:34', '', ''),
('Login', '2021-04-01 11:55:15', '', ''),
('Login', '2021-04-01 16:09:24', '', ''),
('Attempt', '2021-04-05 07:48:51', '', ''),
('Login', '2021-04-05 08:53:16', '', ''),
('Login', '2021-04-09 04:28:59', 'B0-68-E6-73-61-6F', '::1'),
('Login', '2021-04-09 04:39:31', 'B0-68-E6-73-61-6F', ''),
('Login', '2021-04-09 04:41:46', 'B0-68-E6-73-61-6F', '::1'),
('Attempt', '2021-04-09 07:26:53', '', ''),
('Attempt', '2021-04-09 07:29:29', 'B0-68-E6-73-61-6F', '::1'),
('Login', '2021-04-09 09:17:16', 'B0-68-E6-73-61-6F', '::1'),
('Login', '2021-04-09 11:12:01', 'B0-68-E6-73-61-6F', '::1'),
('Login', '2021-04-16 09:19:26', 'B0-68-E6-73-61-6F', '::1');

-- --------------------------------------------------------

--
-- Table structure for table `detail`
--

CREATE TABLE `detail` (
  `uid` varchar(10) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `a_table` varchar(15) NOT NULL,
  `q_table` varchar(15) NOT NULL,
  `sem` varchar(3) NOT NULL,
  `link` varchar(100) NOT NULL,
  `Time` varchar(40) DEFAULT NULL,
  `Flag` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `detail`
--

INSERT INTO `detail` (`uid`, `Name`, `a_table`, `q_table`, `sem`, `link`, `Time`, `Flag`) VALUES
('javal19', 'abcdefg', 'iNJ8oFJosN_a', 'iNJ8oFJosN_q', '4', 'http://localhost/ad/form/iNJ8oFJosN.php', '2021-03-19 07:50:43', 1),
('javal19', 'asdaf', '65WQQ8Kodc_a', '65WQQ8Kodc_q', '4', 'http://localhost/ad/form/65WQQ8Kodc.php', '2021-04-09 08:52:38', 2),
('javal19', 'Demo', 'qY7OCcKbOg_a', 'qY7OCcKbOg_q', 'ALL', 'http://localhost/ad/form/qY7OCcKbOg.php', '2021-04-20 14:05:36', 1),
('javal19', 'feedback-2019-CS', 'Ok1IEbfGuK_a', 'Ok1IEbfGuK_q', '1', 'http://localhost/ad/form/Ok1IEbfGuK.php', '2021-04-09 08:48:37', 1),
('javal19', 'M&M-2019-4-1', 'S98xn3VMjs_a', 'S98xn3VMjs_q', '4', 'http://localhost/ad/form/S98xn3VMjs.php', '2021-03-17 18:32:59', 1),
('javal19', 'MM-2019-7', 'ukr92Ctuhv_a', 'ukr92Ctuhv_q', '7', 'http://localhost/ad/form/ukr92Ctuhv.php', '2021-03-20 09:22:07', 0),
('javal19', 'OS-2019-4', '0dlJTqKadQ_a', '0dlJTqKadQ_q', '4', 'http://localhost/ad/form/0dlJTqKadQ.php', '2021-03-17 21:06:09', 1),
('javal19', 'WAD-2019-4', 'S8t1UbIHa7_a', 'S8t1UbIHa7_q', '4', 'http://localhost/ad/form/S8t1UbIHa7.php', '2021-03-16 17:25:00', 1),
('javal19', 'XYZ', 'oWwNYz6Wap_a', 'oWwNYz6Wap_q', '8', 'http://localhost/ad/form/oWwNYz6Wap.php', '2021-03-20 11:18:09', 1);

-- --------------------------------------------------------

--
-- Table structure for table `form1`
--

CREATE TABLE `form1` (
  `S_name` text DEFAULT NULL,
  `Email` varchar(25) DEFAULT NULL,
  `Eno` int(15) DEFAULT NULL,
  `Branch` char(4) DEFAULT NULL,
  `Semester` int(6) NOT NULL,
  `Sub` char(5) DEFAULT NULL,
  `Session_` tinyint(2) DEFAULT NULL,
  `Content` tinyint(2) DEFAULT NULL,
  `Professor` tinyint(2) DEFAULT NULL,
  `AV_Quality` tinyint(2) DEFAULT NULL,
  `Suggestions` varchar(60) DEFAULT NULL,
  `Recieved_on` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `form1`
--

INSERT INTO `form1` (`S_name`, `Email`, `Eno`, `Branch`, `Semester`, `Sub`, `Session_`, `Content`, `Professor`, `AV_Quality`, `Suggestions`, `Recieved_on`) VALUES
('javal', 'javalpatel19@gnu.ac.in', 2147483647, 'CS', 4, 'AD', 3, 3, 3, 3, 'no', '2021-03-21 10:19:55'),
('hi', 'hi@gnu', 231352454, 'CS', 1, 'AD', 3, 3, 3, 3, 'no', '2021-03-21 10:20:22'),
('hi', 'hi@gnu', 231352454, 'CS', 1, 'AD', 3, 3, 3, 3, 'no', '2021-03-21 10:20:35'),
('Deep', 'deepnakrani19@gnu.ac.in', 2147483647, 'CS', 4, 'AD', 4, 5, 3, 5, '--', '2021-03-11 09:01:52'),
('dev ', 'dev@gnu.ac.in', 2147483647, 'CS', 4, 'WAD', 3, 4, 4, 3, '--', '2021-03-11 10:29:53'),
('jagir', 'jagir@gnu.ac.in', 2147483647, 'CS', 4, 'FP', 1, 3, 4, 3, 'nothing', '2021-03-11 10:34:03'),
('yogesh', 'yogesh@gnu.ac.in', 2147483647, 'CS', 4, 'PS', 4, 3, 4, 3, 'av should be better', '2021-03-11 10:35:00'),
('manav', 'manav@gnu.ac.in', 2147483647, 'CS', 4, 'FP', 4, 3, 4, 3, '-', '2021-03-11 10:35:48'),
('javal', 'javal@gnu.ac.in', 2147483647, 'CS', 4, 'AC', 4, 3, 4, 5, '-', '2021-03-11 12:11:21'),
('bfnr', 'javalp39@gmail.com', 342534, 'CS', 1, 'AD', 3, 3, 3, 3, '--', '2021-03-22 09:50:57');

-- --------------------------------------------------------

--
-- Table structure for table `hj8cdvzg7r_a`
--

CREATE TABLE `hj8cdvzg7r_a` (
  `en_no` varchar(11) NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `improvement` varchar(250) DEFAULT NULL,
  `Q1` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `hj8cdvzg7r_q`
--

CREATE TABLE `hj8cdvzg7r_q` (
  `num` int(3) NOT NULL,
  `question` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hj8cdvzg7r_q`
--

INSERT INTO `hj8cdvzg7r_q` (`num`, `question`) VALUES
(1, 'how do you find this session');

-- --------------------------------------------------------

--
-- Table structure for table `inj8ofjosn_a`
--

CREATE TABLE `inj8ofjosn_a` (
  `en_no` varchar(11) NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `improvement` varchar(250) DEFAULT NULL,
  `Q1` int(11) DEFAULT NULL,
  `Q2` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `inj8ofjosn_a`
--

INSERT INTO `inj8ofjosn_a` (`en_no`, `name`, `email`, `improvement`, `Q1`, `Q2`) VALUES
('19162171023', 'deep', 'deep@gmail.com', '--', 4, 4),
('19162171025', 'javal patel', 'javalpatel19@gnu.ac.in', 'not needed', 4, 3),
('19162171099', 'Javal Kalpeshbhai Patel', 'javalp39@gmail.com', 'dgfd', 4, 1);

-- --------------------------------------------------------

--
-- Table structure for table `inj8ofjosn_q`
--

CREATE TABLE `inj8ofjosn_q` (
  `num` int(3) NOT NULL,
  `question` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `inj8ofjosn_q`
--

INSERT INTO `inj8ofjosn_q` (`num`, `question`) VALUES
(1, 'how do you find this session'),
(2, 'how is the course');

-- --------------------------------------------------------

--
-- Table structure for table `ok1iebfguk_a`
--

CREATE TABLE `ok1iebfguk_a` (
  `en_no` varchar(11) NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `improvement` varchar(250) DEFAULT NULL,
  `Q1` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ok1iebfguk_q`
--

CREATE TABLE `ok1iebfguk_q` (
  `num` int(3) NOT NULL,
  `question` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ok1iebfguk_q`
--

INSERT INTO `ok1iebfguk_q` (`num`, `question`) VALUES
(1, 'how do you find this session');

-- --------------------------------------------------------

--
-- Table structure for table `otp_expiry`
--

CREATE TABLE `otp_expiry` (
  `id` int(11) NOT NULL,
  `otp` varchar(10) NOT NULL,
  `is_expired` int(11) NOT NULL,
  `create_at` datetime NOT NULL,
  `uname` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `otp_expiry`
--

INSERT INTO `otp_expiry` (`id`, `otp`, `is_expired`, `create_at`, `uname`) VALUES
(0, '183498', 1, '2021-04-09 00:12:56', ''),
(0, '784054', 0, '2021-04-09 00:30:58', ''),
(0, '187119', 1, '2021-04-09 00:31:52', ''),
(0, '604447', 1, '2021-04-09 00:49:13', ''),
(0, '700270', 1, '2021-04-09 05:14:00', ''),
(0, '944855', 1, '2021-04-09 05:23:28', ''),
(0, '770364', 1, '2021-04-09 07:49:41', ''),
(0, '143619', 0, '2021-04-09 07:55:06', ''),
(0, '317668', 1, '2021-04-16 05:50:48', ''),
(0, '587287', 1, '2021-04-16 09:58:11', ''),
(0, '992282', 0, '2021-04-16 15:17:34', 'javal19'),
(0, '589120', 0, '2021-04-16 15:18:32', 'javal19'),
(0, '851955', 1, '2021-04-16 15:18:50', 'javal19'),
(0, '446472', 1, '2021-04-16 15:26:23', 'javal19'),
(0, '269515', 1, '2021-04-16 15:26:36', 'deep'),
(0, '352581', 1, '2021-04-19 06:12:53', 'javal19'),
(0, '665974', 1, '2021-04-20 07:47:37', 'javal19'),
(0, '145156', 1, '2021-04-20 10:03:58', 'javal_p'),
(0, '511688', 1, '2021-04-21 16:43:54', 'javal19'),
(0, '465841', 1, '2021-04-21 16:49:01', 'javal_p'),
(0, '835628', 1, '2021-04-22 11:22:28', 'javal19'),
(0, '705377', 1, '2021-04-22 11:23:30', 'javal_p');

-- --------------------------------------------------------

--
-- Table structure for table `owwnyz6wap_a`
--

CREATE TABLE `owwnyz6wap_a` (
  `en_no` varchar(11) NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `improvement` varchar(250) DEFAULT NULL,
  `Q1` int(11) DEFAULT NULL,
  `Q2` int(11) DEFAULT NULL,
  `Q3` int(11) DEFAULT NULL,
  `Q4` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `owwnyz6wap_q`
--

CREATE TABLE `owwnyz6wap_q` (
  `num` int(3) NOT NULL,
  `question` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `owwnyz6wap_q`
--

INSERT INTO `owwnyz6wap_q` (`num`, `question`) VALUES
(1, 'wdgwewb'),
(2, 'dsvdsbeb'),
(3, 'sdvseb'),
(4, 'sfefbbfb');

-- --------------------------------------------------------

--
-- Table structure for table `que`
--

CREATE TABLE `que` (
  `no` int(11) NOT NULL,
  `question` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `que`
--

INSERT INTO `que` (`no`, `question`) VALUES
(1, 'How is this course'),
(1, 'How is this course'),
(2, 'You will need any improvment'),
(4, 'How you will rate this faculty?'),
(5, 'How you fond this sessions'),
(4, 'How you will rate this faculty?'),
(5, 'How you fond this sessions'),
(8, 'How is you experience with the faculty '),
(9, 'How you rate this subject');

-- --------------------------------------------------------

--
-- Table structure for table `qy7occkbog_a`
--

CREATE TABLE `qy7occkbog_a` (
  `en_no` varchar(11) NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `improvement` varchar(250) DEFAULT NULL,
  `Q1` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `qy7occkbog_q`
--

CREATE TABLE `qy7occkbog_q` (
  `num` int(3) NOT NULL,
  `question` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `qy7occkbog_q`
--

INSERT INTO `qy7occkbog_q` (`num`, `question`) VALUES
(1, 'how do you find this session');

-- --------------------------------------------------------

--
-- Table structure for table `rxlblijekx_a`
--

CREATE TABLE `rxlblijekx_a` (
  `en_no` varchar(11) NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `improvement` varchar(250) DEFAULT NULL,
  `Q1` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `rxlblijekx_q`
--

CREATE TABLE `rxlblijekx_q` (
  `num` int(3) NOT NULL,
  `question` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rxlblijekx_q`
--

INSERT INTO `rxlblijekx_q` (`num`, `question`) VALUES
(1, 'how do you find this session');

-- --------------------------------------------------------

--
-- Table structure for table `s8t1ubiha7_a`
--

CREATE TABLE `s8t1ubiha7_a` (
  `en_no` varchar(11) NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `improvement` varchar(250) DEFAULT NULL,
  `Q1` int(11) DEFAULT NULL,
  `Q2` int(11) DEFAULT NULL,
  `Q3` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `s8t1ubiha7_a`
--

INSERT INTO `s8t1ubiha7_a` (`en_no`, `name`, `email`, `improvement`, `Q1`, `Q2`, `Q3`) VALUES
('123456789', 'Javal Patel', 'javalpatel19@gnu.ac.in', 'not needed', 4, 5, 3),
('1234567890', 'Javal Patel', 'javalpatel19@gnu.ac.in', 'not needed', 4, 5, 1),
('19162171024', 'Javal Patel', 'javalpatel19@gnu.ac.in', 'not needed', 4, 5, 5),
('19162171025', 'javal', 'javal19@gnu.ac.in', 'NOT NEEDED', 4, 4, 3);

-- --------------------------------------------------------

--
-- Table structure for table `s8t1ubiha7_q`
--

CREATE TABLE `s8t1ubiha7_q` (
  `num` int(3) NOT NULL,
  `question` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `s8t1ubiha7_q`
--

INSERT INTO `s8t1ubiha7_q` (`num`, `question`) VALUES
(1, 'how do you find this session'),
(2, 'How much you rate this subject'),
(3, 'How much you rate the content of the subject');

-- --------------------------------------------------------

--
-- Table structure for table `s98xn3vmjs_a`
--

CREATE TABLE `s98xn3vmjs_a` (
  `en_no` varchar(11) NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `improvement` varchar(250) DEFAULT NULL,
  `Q1` int(11) DEFAULT NULL,
  `Q2` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `s98xn3vmjs_a`
--

INSERT INTO `s98xn3vmjs_a` (`en_no`, `name`, `email`, `improvement`, `Q1`, `Q2`) VALUES
('123004534', 'Javal Patel', 'javalpatel19@gnu.ac.in', 'not needed', 2, 4),
('1234534', 'Javal Patel', 'javalpatel19@gnu.ac.in', 'not needed', 1, 3),
('1234567890', 'Javal Patel', 'javalpatel19@gnu.ac.in', 'not needed', 5, 4),
('19162171023', 'Javal Patel', 'javalpatel19@gnu.ac.in', '--', 3, 4),
('19162171025', 'javal', 'javal19@gnu.ac.in', 'not needed', 4, 5);

-- --------------------------------------------------------

--
-- Table structure for table `s98xn3vmjs_q`
--

CREATE TABLE `s98xn3vmjs_q` (
  `num` int(3) NOT NULL,
  `question` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `s98xn3vmjs_q`
--

INSERT INTO `s98xn3vmjs_q` (`num`, `question`) VALUES
(1, 'how do you find this session'),
(2, 'How is the course content');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email_id` varchar(300) NOT NULL,
  `sem` int(11) NOT NULL,
  `enroll` bigint(20) NOT NULL,
  `Branch` varchar(5) NOT NULL,
  `username` varchar(40) NOT NULL,
  `pass` varchar(10000) NOT NULL,
  `atendance` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `name`, `email_id`, `sem`, `enroll`, `Branch`, `username`, `pass`, `atendance`) VALUES
(26, 'sherya', 'gupta@gmail.com', 4, 19162171013, 'CS', 'gupta', 'Gupta@123', 76),
(21, 'jagir shastri', 'jas@gmail.com', 4, 19162171014, 'CS', 'jagir', 'Jagir@4593', 80),
(22, 'karan', 'karan@gmail.com', 4, 19162171015, 'CS', 'karan', 'Karan@12345', 70),
(24, 'deep', 'deep@gmail.com', 4, 19162171023, 'CS', 'deep', 'Deep@123', 70),
(25, 'javal patel', 'javalpatel19@gnu.ac.in', 4, 19162171025, 'CS', 'javal_p', 'Javal@123', 90),
(23, 'umang', 'umangsir@gnu.ac.in', 4, 19162171065, 'CBA', 'umang_sir', 'Umang@123', 79);

-- --------------------------------------------------------

--
-- Table structure for table `ukr92ctuhv_a`
--

CREATE TABLE `ukr92ctuhv_a` (
  `en_no` varchar(11) NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `improvement` varchar(250) DEFAULT NULL,
  `Q1` int(11) DEFAULT NULL,
  `Q2` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ukr92ctuhv_q`
--

CREATE TABLE `ukr92ctuhv_q` (
  `num` int(3) NOT NULL,
  `question` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ukr92ctuhv_q`
--

INSERT INTO `ukr92ctuhv_q` (`num`, `question`) VALUES
(1, 'how do you find this session'),
(2, 'How do you find the content of the subject ');

-- --------------------------------------------------------

--
-- Table structure for table `u_detail`
--

CREATE TABLE `u_detail` (
  `username` varchar(15) NOT NULL,
  `email` varchar(25) NOT NULL,
  `password` varchar(32) NOT NULL,
  `name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `u_detail`
--

INSERT INTO `u_detail` (`username`, `email`, `password`, `name`) VALUES
('deep', 'deepnakrani01@gmail.com', 'deep123', 'deep'),
('javal19', 'javalpatel19@gnu.ac.in', 'Javal@123', 'Javal Patel'),
('Manav', 'manav@gnu.ac.in', 'manav12345', 'Manav Mehta');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `0dljtqkadq_a`
--
ALTER TABLE `0dljtqkadq_a`
  ADD PRIMARY KEY (`en_no`);

--
-- Indexes for table `0dljtqkadq_q`
--
ALTER TABLE `0dljtqkadq_q`
  ADD PRIMARY KEY (`num`);

--
-- Indexes for table `2h8koglhsi_a`
--
ALTER TABLE `2h8koglhsi_a`
  ADD PRIMARY KEY (`en_no`);

--
-- Indexes for table `2h8koglhsi_q`
--
ALTER TABLE `2h8koglhsi_q`
  ADD PRIMARY KEY (`num`);

--
-- Indexes for table `8lc45gd64d_a`
--
ALTER TABLE `8lc45gd64d_a`
  ADD PRIMARY KEY (`en_no`);

--
-- Indexes for table `8lc45gd64d_q`
--
ALTER TABLE `8lc45gd64d_q`
  ADD PRIMARY KEY (`num`);

--
-- Indexes for table `65wqq8kodc_a`
--
ALTER TABLE `65wqq8kodc_a`
  ADD PRIMARY KEY (`en_no`);

--
-- Indexes for table `65wqq8kodc_q`
--
ALTER TABLE `65wqq8kodc_q`
  ADD PRIMARY KEY (`num`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`A_UID`);

--
-- Indexes for table `detail`
--
ALTER TABLE `detail`
  ADD PRIMARY KEY (`uid`,`Name`),
  ADD UNIQUE KEY `link` (`link`);

--
-- Indexes for table `hj8cdvzg7r_a`
--
ALTER TABLE `hj8cdvzg7r_a`
  ADD PRIMARY KEY (`en_no`);

--
-- Indexes for table `hj8cdvzg7r_q`
--
ALTER TABLE `hj8cdvzg7r_q`
  ADD PRIMARY KEY (`num`);

--
-- Indexes for table `inj8ofjosn_a`
--
ALTER TABLE `inj8ofjosn_a`
  ADD PRIMARY KEY (`en_no`);

--
-- Indexes for table `inj8ofjosn_q`
--
ALTER TABLE `inj8ofjosn_q`
  ADD PRIMARY KEY (`num`);

--
-- Indexes for table `ok1iebfguk_a`
--
ALTER TABLE `ok1iebfguk_a`
  ADD PRIMARY KEY (`en_no`);

--
-- Indexes for table `ok1iebfguk_q`
--
ALTER TABLE `ok1iebfguk_q`
  ADD PRIMARY KEY (`num`);

--
-- Indexes for table `owwnyz6wap_a`
--
ALTER TABLE `owwnyz6wap_a`
  ADD PRIMARY KEY (`en_no`);

--
-- Indexes for table `owwnyz6wap_q`
--
ALTER TABLE `owwnyz6wap_q`
  ADD PRIMARY KEY (`num`);

--
-- Indexes for table `qy7occkbog_a`
--
ALTER TABLE `qy7occkbog_a`
  ADD PRIMARY KEY (`en_no`);

--
-- Indexes for table `qy7occkbog_q`
--
ALTER TABLE `qy7occkbog_q`
  ADD PRIMARY KEY (`num`);

--
-- Indexes for table `rxlblijekx_a`
--
ALTER TABLE `rxlblijekx_a`
  ADD PRIMARY KEY (`en_no`);

--
-- Indexes for table `rxlblijekx_q`
--
ALTER TABLE `rxlblijekx_q`
  ADD PRIMARY KEY (`num`);

--
-- Indexes for table `s8t1ubiha7_a`
--
ALTER TABLE `s8t1ubiha7_a`
  ADD PRIMARY KEY (`en_no`);

--
-- Indexes for table `s8t1ubiha7_q`
--
ALTER TABLE `s8t1ubiha7_q`
  ADD PRIMARY KEY (`num`);

--
-- Indexes for table `s98xn3vmjs_a`
--
ALTER TABLE `s98xn3vmjs_a`
  ADD PRIMARY KEY (`en_no`);

--
-- Indexes for table `s98xn3vmjs_q`
--
ALTER TABLE `s98xn3vmjs_q`
  ADD PRIMARY KEY (`num`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`enroll`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `ukr92ctuhv_a`
--
ALTER TABLE `ukr92ctuhv_a`
  ADD PRIMARY KEY (`en_no`);

--
-- Indexes for table `ukr92ctuhv_q`
--
ALTER TABLE `ukr92ctuhv_q`
  ADD PRIMARY KEY (`num`);

--
-- Indexes for table `u_detail`
--
ALTER TABLE `u_detail`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `0dljtqkadq_q`
--
ALTER TABLE `0dljtqkadq_q`
  MODIFY `num` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `2h8koglhsi_q`
--
ALTER TABLE `2h8koglhsi_q`
  MODIFY `num` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `8lc45gd64d_q`
--
ALTER TABLE `8lc45gd64d_q`
  MODIFY `num` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `65wqq8kodc_q`
--
ALTER TABLE `65wqq8kodc_q`
  MODIFY `num` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `hj8cdvzg7r_q`
--
ALTER TABLE `hj8cdvzg7r_q`
  MODIFY `num` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `inj8ofjosn_q`
--
ALTER TABLE `inj8ofjosn_q`
  MODIFY `num` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ok1iebfguk_q`
--
ALTER TABLE `ok1iebfguk_q`
  MODIFY `num` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `owwnyz6wap_q`
--
ALTER TABLE `owwnyz6wap_q`
  MODIFY `num` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `qy7occkbog_q`
--
ALTER TABLE `qy7occkbog_q`
  MODIFY `num` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `rxlblijekx_q`
--
ALTER TABLE `rxlblijekx_q`
  MODIFY `num` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `s8t1ubiha7_q`
--
ALTER TABLE `s8t1ubiha7_q`
  MODIFY `num` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `s98xn3vmjs_q`
--
ALTER TABLE `s98xn3vmjs_q`
  MODIFY `num` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ukr92ctuhv_q`
--
ALTER TABLE `ukr92ctuhv_q`
  MODIFY `num` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
