-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 18, 2020 at 02:15 PM
-- Server version: 8.0.21
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eduspace`
--
CREATE DATABASE IF NOT EXISTS `eduspace` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `eduspace`;

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

DROP TABLE IF EXISTS `adminlogin`;
CREATE TABLE IF NOT EXISTS `adminlogin` (
  `admin_id` int NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`admin_id`, `first_name`, `last_name`, `email`, `password`) VALUES
(1, 'Sanchit', 'Gupta', 'admin@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `answerset`
--

DROP TABLE IF EXISTS `answerset`;
CREATE TABLE IF NOT EXISTS `answerset` (
  `serialno` int NOT NULL AUTO_INCREMENT,
  `quiz_id` int NOT NULL,
  `a_id` int DEFAULT NULL,
  `answer` varchar(100) NOT NULL,
  `ans_id` int NOT NULL,
  PRIMARY KEY (`serialno`),
  KEY `quiz_id` (`quiz_id`)
) ENGINE=InnoDB AUTO_INCREMENT=103 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `answerset`
--

INSERT INTO `answerset` (`serialno`, `quiz_id`, `a_id`, `answer`, `ans_id`) VALUES
(45, 1, 1, 'True', 1),
(46, 1, 2, 'False', 1),
(47, 1, 3, 'yeaah', 2),
(48, 1, 4, 'yo', 2),
(49, 1, 5, 'no', 2),
(50, 1, 6, 'naaa', 2),
(63, 2, 1, 'True', 1),
(64, 2, 2, 'False', 1),
(65, 2, 3, 'sanchit', 2),
(66, 2, 4, 'yo', 2),
(67, 2, 5, 'no', 2),
(68, 2, 6, '1234', 2),
(69, 3, 1, 'True', 1),
(70, 3, 2, 'False', 1),
(71, 3, 3, 'sanchit gupta', 2),
(72, 3, 4, 'sanchit g', 2),
(73, 3, 5, 'gupta sanchit', 2),
(74, 3, 6, 's g', 2),
(87, 5, 1, 'True', 1),
(88, 5, 2, 'False', 1),
(93, 6, 1, 'True', 1),
(94, 6, 2, 'False', 1),
(95, 6, 3, 'True', 2),
(96, 6, 4, 'False', 2),
(97, 6, 5, 'DBMS', 3),
(98, 6, 6, 'MATHS', 3),
(99, 6, 7, 'PHYSICS', 3),
(100, 6, 8, 'CHEMISTRY', 3),
(101, 7, 1, 'True', 1),
(102, 7, 2, 'False', 1);

-- --------------------------------------------------------

--
-- Table structure for table `appuser`
--

DROP TABLE IF EXISTS `appuser`;
CREATE TABLE IF NOT EXISTS `appuser` (
  `uniq_id` int NOT NULL,
  `first_name` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pwd` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `user_type` char(1) NOT NULL,
  `idproof` varchar(50) NOT NULL,
  `status` int NOT NULL DEFAULT '0',
  PRIMARY KEY (`uniq_id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appuser`
--

INSERT INTO `appuser` (`uniq_id`, `first_name`, `last_name`, `email`, `pwd`, `user_type`, `idproof`, `status`) VALUES
(1234567, 'SANCHIT', 'Guptaaaa', 'devil@gmail.com', 'sanchit', 'P', '1234567.png', 1),
(1704485, 'Sanchit', 'Gupta', 'sanchit@gmail.com', 'student@123', 'S', '1704485.jpg', 1),
(2244668, 'Rishabh', 'Mehta', 'rishabh@gmail.com', 'rishabh@0000', 'P', '2244668.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

DROP TABLE IF EXISTS `gallery`;
CREATE TABLE IF NOT EXISTS `gallery` (
  `id` int NOT NULL,
  `snap` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `snap`) VALUES
(1, '1.jpeg'),
(2, '2.jpeg'),
(3, '3.png');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

DROP TABLE IF EXISTS `message`;
CREATE TABLE IF NOT EXISTS `message` (
  `m_id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `message` text NOT NULL,
  `senddate` text NOT NULL,
  `sendtime` text NOT NULL,
  PRIMARY KEY (`m_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`m_id`, `name`, `email`, `message`, `senddate`, `sendtime`) VALUES
(4, 'Sanchit Gupta', 'sanchit@gmail.com', 'Hello there, How are you? Hope you are doing great. We all loved your work!!!', '18/Dec/2020 Fri', '07:11 PM'),
(5, 'eduSpace', 'rishabh@gmail.com', 'Hello there, How are you? Hope you are doing great. We all loved your work!!!vbsivbijwnvijwfnij@Knkjvksjvkj@nkjewvnkjs', '18/Dec/2020 Fri', '07:12 PM');

-- --------------------------------------------------------

--
-- Table structure for table `questionset`
--

DROP TABLE IF EXISTS `questionset`;
CREATE TABLE IF NOT EXISTS `questionset` (
  `serialno` int NOT NULL AUTO_INCREMENT,
  `quiz_id` int DEFAULT NULL,
  `ques_id` int NOT NULL,
  `question` varchar(150) DEFAULT NULL,
  `answer_id` int DEFAULT NULL,
  PRIMARY KEY (`serialno`),
  KEY `quiz_id` (`quiz_id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questionset`
--

INSERT INTO `questionset` (`serialno`, `quiz_id`, `ques_id`, `question`, `answer_id`) VALUES
(3, 1, 1, 'Is your name abc?', 1),
(4, 1, 2, 'Is your name xyz?', 4),
(9, 2, 1, 'nkvnskjvnskl?', 1),
(10, 2, 2, 'hello there', 4),
(11, 3, 1, 'Male?', 1),
(12, 3, 2, 'Full name?', 3),
(17, 5, 1, 'Is your name abc?', 1),
(20, 6, 1, 'Do you like maths?', 1),
(21, 6, 2, 'Do you like physics?', 4),
(22, 6, 3, 'Which is your fav subject?', 5),
(23, 7, 1, 'do you like maths?', 1);

-- --------------------------------------------------------

--
-- Table structure for table `quiz`
--

DROP TABLE IF EXISTS `quiz`;
CREATE TABLE IF NOT EXISTS `quiz` (
  `quiz_id` int NOT NULL,
  `quizname` varchar(50) NOT NULL,
  `prof_id` int NOT NULL,
  `description` text NOT NULL,
  `duedate` date NOT NULL,
  `status` int NOT NULL,
  PRIMARY KEY (`quiz_id`) USING BTREE,
  KEY `prof_id` (`prof_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quiz`
--

INSERT INTO `quiz` (`quiz_id`, `quizname`, `prof_id`, `description`, `duedate`, `status`) VALUES
(1, 'Quiz1', 2244668, 'Sample Quiz 1', '2020-12-13', 1),
(2, 'Quiz2', 2244668, 'Sample Quiz 2', '2020-12-19', 1),
(3, 'Quiz3', 2244668, 'Sample Quiz 3', '2020-12-16', 1),
(5, 'Quiz4\n', 1234567, 'The quiz of introduction', '2020-12-10', 1),
(6, 'Random quiz', 2244668, 'Random Quiz 2', '2020-12-16', 1),
(7, 'databases', 2244668, 'a quiz on dbms', '2020-12-17', 1);

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

DROP TABLE IF EXISTS `result`;
CREATE TABLE IF NOT EXISTS `result` (
  `serialno` int NOT NULL AUTO_INCREMENT,
  `uniq_id` int NOT NULL,
  `quiz_id` int NOT NULL,
  `prof_id` int NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `totalquestions` int NOT NULL,
  `correct` int NOT NULL,
  `marks` int NOT NULL,
  `attemptedon` text NOT NULL,
  PRIMARY KEY (`serialno`),
  KEY `uniq_id` (`uniq_id`,`quiz_id`),
  KEY `quiz_id` (`quiz_id`),
  KEY `prof_id` (`prof_id`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`serialno`, `uniq_id`, `quiz_id`, `prof_id`, `firstname`, `lastname`, `totalquestions`, `correct`, `marks`, `attemptedon`) VALUES
(6, 1704485, 1, 2244668, 'Sanchit', 'Gupta', 2, 2, 2, '11/Dec/2020, Fri'),
(20, 1704485, 3, 2244668, 'Sanchit', 'Gupta', 2, 2, 2, '09/Dec/2020, Wed'),
(24, 1704485, 2, 2244668, 'Sanchit', 'Gupta', 2, 1, 1, '12/Dec/2020, Sat'),
(27, 1704485, 5, 1234567, 'Sanchit', 'Gupta', 1, 1, 1, '12/Dec/2020, Sat'),
(28, 1704485, 6, 2244668, 'Sanchit', 'Gupta', 3, 3, 3, '14/Dec/2020, Mon'),
(29, 1704485, 7, 2244668, 'Sanchit', 'Gupta', 1, 1, 1, '16/Dec/2020, Wed');

-- --------------------------------------------------------

--
-- Table structure for table `session`
--

DROP TABLE IF EXISTS `session`;
CREATE TABLE IF NOT EXISTS `session` (
  `s_id` int NOT NULL,
  `prof_id` int NOT NULL,
  `name` varchar(50) NOT NULL,
  `link` varchar(300) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  PRIMARY KEY (`time`) USING BTREE,
  KEY `prof_id` (`prof_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `session`
--

INSERT INTO `session` (`s_id`, `prof_id`, `name`, `link`, `date`, `time`) VALUES
(7, 2244668, 'Database', 'https://meet.google.com/mpr-must-cwc', '2020-12-16', '14:09:00'),
(6, 2244668, 'Database', 'https://meet.google.com/ciy-xjpf-ymp', '2020-12-14', '19:45:00'),
(3, 2244668, 'Chemistry', 'https://meet.google.com/knr-ugfn-cvv', '2020-12-12', '20:08:00'),
(4, 2244668, 'Chemistry', 'https://meet.google.com/yhz-fxcy-mvy', '2020-12-12', '20:18:00');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `answerset`
--
ALTER TABLE `answerset`
  ADD CONSTRAINT `answerset_ibfk_1` FOREIGN KEY (`quiz_id`) REFERENCES `quiz` (`quiz_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `questionset`
--
ALTER TABLE `questionset`
  ADD CONSTRAINT `questionset_ibfk_1` FOREIGN KEY (`quiz_id`) REFERENCES `quiz` (`quiz_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `quiz`
--
ALTER TABLE `quiz`
  ADD CONSTRAINT `quiz_ibfk_1` FOREIGN KEY (`prof_id`) REFERENCES `appuser` (`uniq_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `result`
--
ALTER TABLE `result`
  ADD CONSTRAINT `result_ibfk_1` FOREIGN KEY (`uniq_id`) REFERENCES `appuser` (`uniq_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `result_ibfk_2` FOREIGN KEY (`quiz_id`) REFERENCES `quiz` (`quiz_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `result_ibfk_3` FOREIGN KEY (`prof_id`) REFERENCES `appuser` (`uniq_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `session`
--
ALTER TABLE `session`
  ADD CONSTRAINT `session_ibfk_1` FOREIGN KEY (`prof_id`) REFERENCES `appuser` (`uniq_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
