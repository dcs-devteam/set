-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 29, 2014 at 07:06 AM
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
-- Truncate table before insert `access_code`
--

TRUNCATE TABLE `access_code`;
-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE IF NOT EXISTS `class` (
  `class_id` int(99) NOT NULL AUTO_INCREMENT,
  `office_id` int(99) NOT NULL,
  `teacher_id` int(99) DEFAULT NULL,
  `class_name` varchar(256) NOT NULL,
  `section` varchar(10) NOT NULL,
  `year` year(4) NOT NULL,
  `semester` varchar(99) NOT NULL,
  `schedule` varchar(99) NOT NULL,
  `number_of_students` int(3) NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `is_done` tinyint(1) NOT NULL,
  PRIMARY KEY (`class_id`),
  KEY `teacher_id` (`teacher_id`),
  KEY `office_id` (`office_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Truncate table before insert `class`
--

TRUNCATE TABLE `class`;
--
-- Dumping data for table `class`
--

INSERT INTO `class` (`class_id`, `office_id`, `teacher_id`, `class_name`, `section`, `year`, `semester`, `schedule`, `number_of_students`, `is_active`, `is_done`) VALUES
(2, 1, 1, 'CMSC 123', 'A', 2014, '1st', 'MTh 10:30-12:00 PM', 25, 0, 0),
(3, 1, 1, 'CMSC 127', 'A', 2014, '1st', 'TF 2:30-4:00 PM', 30, 0, 0);

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
-- Truncate table before insert `class_evaluator`
--

TRUNCATE TABLE `class_evaluator`;
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Truncate table before insert `evaluation`
--

TRUNCATE TABLE `evaluation`;
-- --------------------------------------------------------

--
-- Table structure for table `evaluation_content`
--

CREATE TABLE IF NOT EXISTS `evaluation_content` (
  `content_id` int(99) NOT NULL AUTO_INCREMENT,
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
  PRIMARY KEY (`content_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Truncate table before insert `evaluation_content`
--

TRUNCATE TABLE `evaluation_content`;
-- --------------------------------------------------------

--
-- Table structure for table `office`
--

CREATE TABLE IF NOT EXISTS `office` (
  `office_id` int(99) NOT NULL AUTO_INCREMENT,
  `name` varchar(256) NOT NULL,
  PRIMARY KEY (`office_id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Truncate table before insert `office`
--

TRUNCATE TABLE `office`;
--
-- Dumping data for table `office`
--

INSERT INTO `office` (`office_id`, `name`) VALUES
(1, 'Department of Computer Science');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Truncate table before insert `teacher`
--

TRUNCATE TABLE `teacher`;
--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`teacher_id`, `office_id`, `first_name`, `last_name`) VALUES
(1, 1, 'FName', 'LName');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Truncate table before insert `user`
--

TRUNCATE TABLE `user`;
--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `email_address`, `password`, `first_name`, `last_name`, `role`, `office_id`) VALUES
(4, 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'FName', 'LName', 'admin', 1),
(5, 'staff@gmail.com', '1253208465b1efa876f982d8a9e73eef', 'FName', 'LName', 'staff', 1),
(6, 'evaluator@gmail.com', '9e76d075c324f87e752db59dbcc8847c', 'FName', 'LName', 'evaluator', 1),
(7, 'janitor', '1fa3bde30bd97db370243b33a82d3871', 'The Almighty', 'Janitor', 'superadmin', 1);

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
  ADD CONSTRAINT `class_ibfk_1` FOREIGN KEY (`office_id`) REFERENCES `office` (`office_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `class_ibfk_2` FOREIGN KEY (`teacher_id`) REFERENCES `teacher` (`teacher_id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `class_evaluator`
--
ALTER TABLE `class_evaluator`
  ADD CONSTRAINT `class_evaluator_ibfk_1` FOREIGN KEY (`class_id`) REFERENCES `class` (`class_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `class_evaluator_ibfk_2` FOREIGN KEY (`evaluator_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `evaluation`
--
ALTER TABLE `evaluation`
  ADD CONSTRAINT `evaluation_ibfk_1` FOREIGN KEY (`class_id`) REFERENCES `class` (`class_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `evaluation_ibfk_2` FOREIGN KEY (`content_id`) REFERENCES `evaluation_content` (`content_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `evaluation_ibfk_3` FOREIGN KEY (`access_code`) REFERENCES `access_code` (`access_code`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `teacher`
--
ALTER TABLE `teacher`
  ADD CONSTRAINT `teacher_ibfk_1` FOREIGN KEY (`office_id`) REFERENCES `office` (`office_id`) ON UPDATE CASCADE;

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`office_id`) REFERENCES `office` (`office_id`) ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
