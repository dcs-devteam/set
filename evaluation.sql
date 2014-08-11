-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 11, 2014 at 06:10 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `evaluation`
--
CREATE DATABASE IF NOT EXISTS `evaluation` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `evaluation`;

-- --------------------------------------------------------

--
-- Table structure for table `access_code`
--

CREATE TABLE IF NOT EXISTS `access_code` (
  `class_id` int(11) NOT NULL,
  `access_code` varchar(99) NOT NULL,
  UNIQUE KEY `access_code` (`access_code`),
  KEY `class_id` (`class_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `access_code`
--

INSERT INTO `access_code` (`class_id`, `access_code`) VALUES
(12, '030c5aa223ab8a47'),
(15, '14c7adda9c86e354');

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE IF NOT EXISTS `class` (
  `class_id` int(99) NOT NULL AUTO_INCREMENT,
  `course_id` int(99) NOT NULL,
  `teacher_id` int(99) NOT NULL,
  `section` varchar(3) NOT NULL,
  `year` year(4) NOT NULL,
  `semester` int(1) NOT NULL,
  `schedule` varchar(256) NOT NULL,
  `number_of_students` int(99) NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '0',
  `is_done` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`class_id`),
  UNIQUE KEY `unique_class` (`year`,`semester`,`course_id`,`section`),
  KEY `teacher_id` (`teacher_id`),
  KEY `course_id` (`course_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`class_id`, `course_id`, `teacher_id`, `section`, `year`, `semester`, `schedule`, `number_of_students`, `is_active`, `is_done`) VALUES
(5, 1, 2, 'B', 2014, 1, 'TF 2:30-4:00 PM', 30, 0, 0),
(6, 2, 1, 'A', 2014, 1, 'MTh 1:00-2:30 PM', 30, 0, 0),
(7, 1, 1, 'A', 2013, 1, 'MTh 7:30-9:00 AM', 25, 0, 1),
(11, 1, 1, 'B', 2013, 1, 'W 7:30-10:30 AM', 25, 0, 1),
(12, 3, 4, 'A', 2014, 1, 'TF 7:30-9:00 AM', 25, 0, 1),
(15, 1, 1, 'A', 2014, 1, 'MTh 7:30-9:00 AM', 30, 0, 1),
(16, 4, 2, 'A', 2014, 1, 'MTh 9:00-10:30 AM', 25, 0, 0),
(17, 5, 3, 'A', 2014, 1, 'TF 2:30-4:00 PM', 30, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `class_evaluator`
--

CREATE TABLE IF NOT EXISTS `class_evaluator` (
  `class_id` int(99) NOT NULL,
  `evaluator_id` int(99) NOT NULL,
  UNIQUE KEY `class_id` (`class_id`),
  KEY `evaluator_id` (`evaluator_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `class_evaluator`
--

INSERT INTO `class_evaluator` (`class_id`, `evaluator_id`) VALUES
(15, 4),
(12, 8);

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE IF NOT EXISTS `course` (
  `course_id` int(99) NOT NULL AUTO_INCREMENT,
  `course_name` varchar(256) NOT NULL,
  `office_id` int(99) NOT NULL,
  PRIMARY KEY (`course_id`),
  UNIQUE KEY `course_name` (`course_name`),
  KEY `office_id` (`office_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`course_id`, `course_name`, `office_id`) VALUES
(1, 'CMSC 123', 1),
(2, 'CMSC 127', 1),
(3, 'Bio 1', 2),
(4, 'CMSC 22', 1),
(5, 'Envi Sci 10', 2);

-- --------------------------------------------------------

--
-- Table structure for table `evaluation`
--

CREATE TABLE IF NOT EXISTS `evaluation` (
  `evaluation_id` int(99) NOT NULL AUTO_INCREMENT,
  `class_id` int(99) NOT NULL,
  `content_id` int(99) NOT NULL,
  `access_code` varchar(99) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`evaluation_id`),
  UNIQUE KEY `access_code` (`access_code`),
  UNIQUE KEY `content_id` (`content_id`),
  KEY `class_id` (`class_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=43 ;

--
-- Dumping data for table `evaluation`
--

INSERT INTO `evaluation` (`evaluation_id`, `class_id`, `content_id`, `access_code`, `date`) VALUES
(41, 15, 39, '14c7adda9c86e354', '2014-08-09 04:42:33'),
(42, 12, 40, '030c5aa223ab8a47', '2014-08-10 16:08:33');

-- --------------------------------------------------------

--
-- Table structure for table `evaluation_content`
--

CREATE TABLE IF NOT EXISTS `evaluation_content` (
  `content_id` int(99) NOT NULL AUTO_INCREMENT,
  `class_id` int(99) NOT NULL,
  `i1` int(1) NOT NULL,
  `i2` int(1) NOT NULL,
  `i3` int(1) NOT NULL,
  `i4` int(1) NOT NULL,
  `i5` int(1) NOT NULL,
  `i6` int(1) NOT NULL,
  `i7` int(1) NOT NULL,
  `i8` int(1) NOT NULL,
  `i9` int(1) NOT NULL,
  `i10` int(1) NOT NULL,
  `i11` int(1) NOT NULL,
  `i12` int(1) NOT NULL,
  `i13` int(1) NOT NULL,
  `i14` int(1) NOT NULL,
  `i15` int(1) NOT NULL,
  `i16` int(1) NOT NULL,
  `i17` int(1) NOT NULL,
  `i18` int(1) NOT NULL,
  `i19` int(1) NOT NULL,
  `i20` int(1) NOT NULL,
  `i21` int(1) NOT NULL,
  `i22` int(1) NOT NULL,
  `i23` int(1) NOT NULL,
  `i24` int(1) NOT NULL,
  `i25` int(1) NOT NULL,
  `i26` int(1) NOT NULL,
  `i27` int(1) NOT NULL,
  `i28` int(1) NOT NULL,
  `i29` int(1) NOT NULL,
  `i30` int(1) NOT NULL,
  `i31` int(1) NOT NULL,
  `i32` int(1) NOT NULL,
  `i33` int(1) NOT NULL,
  `i34` int(1) NOT NULL,
  `i35` int(1) NOT NULL,
  `i36` int(1) NOT NULL,
  `strong_points` text,
  `weak_points` text,
  `recommendations` text,
  PRIMARY KEY (`content_id`),
  KEY `class_id` (`class_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=41 ;

--
-- Dumping data for table `evaluation_content`
--

INSERT INTO `evaluation_content` (`content_id`, `class_id`, `i1`, `i2`, `i3`, `i4`, `i5`, `i6`, `i7`, `i8`, `i9`, `i10`, `i11`, `i12`, `i13`, `i14`, `i15`, `i16`, `i17`, `i18`, `i19`, `i20`, `i21`, `i22`, `i23`, `i24`, `i25`, `i26`, `i27`, `i28`, `i29`, `i30`, `i31`, `i32`, `i33`, `i34`, `i35`, `i36`, `strong_points`, `weak_points`, `recommendations`) VALUES
(39, 15, 1, 1, 2, 2, 2, 2, 1, 2, 2, 2, 1, 2, 1, 1, 2, 2, 2, 2, 1, 1, 2, 2, 1, 2, 2, 2, 2, 2, 2, 2, 1, 1, 1, 1, 1, 1, 'MTxiciAvPg0KMjxiciAvPg0KMw==', 'NDxiciAvPg0KNTxiciAvPg0KNg==', 'NzxiciAvPg0KODxiciAvPg0KOQ=='),
(40, 12, 2, 2, 2, 2, 1, 2, 2, 2, 1, 1, 1, 2, 2, 2, 1, 2, 2, 2, 1, 1, 1, 2, 2, 1, 2, 2, 2, 1, 1, 2, 2, 2, 2, 1, 2, 1, 'Q29tZXMgdG8gY2xhc3Mgb24gdGltZS4=', 'VGFsa3MgYWJvdXQgb3RoZXIgdGhpbmdzIHRvbyBtdWNoLg==', 'TGVzc2VuIGdvc3NpcC4=');

-- --------------------------------------------------------

--
-- Table structure for table `office`
--

CREATE TABLE IF NOT EXISTS `office` (
  `office_id` int(99) NOT NULL AUTO_INCREMENT,
  `name` varchar(256) NOT NULL,
  PRIMARY KEY (`office_id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `office`
--

INSERT INTO `office` (`office_id`, `name`) VALUES
(1, 'Department of Computer Science'),
(2, 'Natural Sciences and Mathematics Division');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE IF NOT EXISTS `teacher` (
  `teacher_id` int(99) NOT NULL AUTO_INCREMENT,
  `office_id` int(99) NOT NULL,
  `first_name` varchar(256) NOT NULL,
  `last_name` varchar(256) NOT NULL,
  PRIMARY KEY (`teacher_id`),
  KEY `office_id` (`office_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`teacher_id`, `office_id`, `first_name`, `last_name`) VALUES
(1, 1, 'FName', 'LName'),
(2, 1, 'Vincent', 'Montesclaros'),
(3, 2, 'Jason', 'Nieva'),
(4, 2, 'FName2', 'LName2');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(99) NOT NULL AUTO_INCREMENT,
  `email_address` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL,
  `first_name` varchar(256) NOT NULL,
  `last_name` varchar(256) NOT NULL,
  `role` varchar(10) NOT NULL,
  `office_id` int(99) DEFAULT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `email_address` (`email_address`),
  KEY `office_id` (`office_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `email_address`, `password`, `first_name`, `last_name`, `role`, `office_id`) VALUES
(4, 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'FName', 'LName', 'admin', 1),
(5, 'staff@gmail.com', '1253208465b1efa876f982d8a9e73eef', 'FName', 'LName', 'staff', 1),
(6, 'evaluator@gmail.com', '9e76d075c324f87e752db59dbcc8847c', 'FName', 'LName', 'evaluator', 1),
(7, 'janitor', '1fa3bde30bd97db370243b33a82d3871', 'The Almighty', 'Janitor', 'superadmin', NULL),
(8, 'nsmd', '29006a4805a54b11812363e376bf38e1', 'FName', 'LName', 'admin', 2);

-- --------------------------------------------------------

--
-- Table structure for table `year_semester`
--

CREATE TABLE IF NOT EXISTS `year_semester` (
  `year` year(4) NOT NULL,
  `semester` int(1) NOT NULL,
  `start_date` date NOT NULL,
  `is_current` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`year`,`semester`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `year_semester`
--

INSERT INTO `year_semester` (`year`, `semester`, `start_date`, `is_current`) VALUES
(2013, 1, '2014-08-10', 0),
(2014, 1, '2014-08-12', 1),
(2014, 2, '2014-08-28', 0);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `access_code`
--
ALTER TABLE `access_code`
  ADD CONSTRAINT `access_code_ibfk_1` FOREIGN KEY (`class_id`) REFERENCES `class` (`class_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `class`
--
ALTER TABLE `class`
  ADD CONSTRAINT `class_ibfk_1` FOREIGN KEY (`course_id`) REFERENCES `course` (`course_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `class_ibfk_2` FOREIGN KEY (`teacher_id`) REFERENCES `teacher` (`teacher_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `class_ibfk_3` FOREIGN KEY (`year`, `semester`) REFERENCES `year_semester` (`year`, `semester`) ON UPDATE CASCADE;

--
-- Constraints for table `class_evaluator`
--
ALTER TABLE `class_evaluator`
  ADD CONSTRAINT `class_evaluator_ibfk_2` FOREIGN KEY (`evaluator_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `class_evaluator_ibfk_3` FOREIGN KEY (`class_id`) REFERENCES `class` (`class_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `course`
--
ALTER TABLE `course`
  ADD CONSTRAINT `course_ibfk_1` FOREIGN KEY (`office_id`) REFERENCES `office` (`office_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `evaluation`
--
ALTER TABLE `evaluation`
  ADD CONSTRAINT `evaluation_ibfk_2` FOREIGN KEY (`content_id`) REFERENCES `evaluation_content` (`content_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `evaluation_ibfk_3` FOREIGN KEY (`access_code`) REFERENCES `access_code` (`access_code`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `evaluation_ibfk_4` FOREIGN KEY (`class_id`) REFERENCES `class` (`class_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `evaluation_content`
--
ALTER TABLE `evaluation_content`
  ADD CONSTRAINT `evaluation_content_ibfk_1` FOREIGN KEY (`class_id`) REFERENCES `class` (`class_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `teacher`
--
ALTER TABLE `teacher`
  ADD CONSTRAINT `teacher_ibfk_1` FOREIGN KEY (`office_id`) REFERENCES `office` (`office_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`office_id`) REFERENCES `office` (`office_id`) ON DELETE CASCADE ON UPDATE CASCADE;

DELIMITER $$
--
-- Events
--
CREATE DEFINER=`root`@`localhost` EVENT `update_year_sem` ON SCHEDULE EVERY 6 HOUR STARTS '2014-07-31 18:32:08' ON COMPLETION NOT PRESERVE ENABLE DO BEGIN 
UPDATE year_semester 
SET is_current=0;

UPDATE year_semester 
SET is_current=1 
WHERE `start_date` <= now() 
ORDER BY `start_date` DESC LIMIT 1;
END$$

DELIMITER ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
