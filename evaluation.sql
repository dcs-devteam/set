-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 10, 2014 at 10:15 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `evaluation`
--

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE IF NOT EXISTS `class` (
  `class_id` int(99) NOT NULL AUTO_INCREMENT,
  `class_name` varchar(99) NOT NULL,
  `section` varchar(10) NOT NULL,
  `year` varchar(10) NOT NULL,
  `semester` varchar(10) NOT NULL,
  `schedule` varchar(99) NOT NULL,
  `number_of_students` int(3) DEFAULT NULL,
  PRIMARY KEY (`class_id`),
  UNIQUE KEY `class_id` (`class_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `evaluation`
--

CREATE TABLE IF NOT EXISTS `evaluation` (
  `evaluation_id` int(99) NOT NULL AUTO_INCREMENT,
  `class_id` int(99) NOT NULL,
  `teacher_id` int(99) NOT NULL,
  `student_id` int(99) NOT NULL,
  `eval_period_id` int(99) DEFAULT NULL,
  `date` varchar(99) NOT NULL,
  `content` varchar(99) NOT NULL,
  PRIMARY KEY (`evaluation_id`),
  UNIQUE KEY `evaluation_id` (`evaluation_id`),
  KEY `class_id` (`class_id`),
  KEY `teacher_id` (`teacher_id`),
  KEY `student_id` (`student_id`),
  KEY `eval_period_id` (`eval_period_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `evaluation_period`
--

CREATE TABLE IF NOT EXISTS `evaluation_period` (
  `evaluation_period_id` int(99) NOT NULL AUTO_INCREMENT,
  `year` varchar(99) NOT NULL,
  `semester` varchar(99) NOT NULL,
  `start_date` varchar(99) NOT NULL,
  `end_date` varchar(99) NOT NULL,
  PRIMARY KEY (`evaluation_period_id`),
  UNIQUE KEY `evaluation_period_id` (`evaluation_period_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(99) NOT NULL AUTO_INCREMENT,
  `username` varchar(60) NOT NULL,
  `password` varchar(99) NOT NULL,
  `first_name` varchar(99) NOT NULL,
  `last_name` varchar(99) NOT NULL,
  `email_address` varchar(99) NOT NULL,
  `account_type` varchar(2) NOT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `user_class`
--

CREATE TABLE IF NOT EXISTS `user_class` (
  `class_id` int(99) NOT NULL,
  `user_id` int(99) NOT NULL,
  KEY `class_id` (`class_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `evaluation`
--
ALTER TABLE `evaluation`
  ADD CONSTRAINT `evaluation_ibfk_1` FOREIGN KEY (`class_id`) REFERENCES `class` (`class_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `evaluation_ibfk_2` FOREIGN KEY (`teacher_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `evaluation_ibfk_3` FOREIGN KEY (`student_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `evaluation_ibfk_4` FOREIGN KEY (`eval_period_id`) REFERENCES `evaluation_period` (`evaluation_period_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user_class`
--
ALTER TABLE `user_class`
  ADD CONSTRAINT `user_class_ibfk_1` FOREIGN KEY (`class_id`) REFERENCES `class` (`class_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `user_class_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
