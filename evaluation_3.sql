-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 16, 2014 at 06:08 AM
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
  `schedule` varchar(99) DEFAULT NULL,
  `number_of_students` int(3) DEFAULT NULL,
  PRIMARY KEY (`class_id`),
  UNIQUE KEY `class_id` (`class_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`class_id`, `class_name`, `section`, `year`, `semester`, `schedule`, `number_of_students`) VALUES
(1, 'CMSC123', 'A', '2014', '1st', 'MTh 7:30-9:00', 1);

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
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `content` text NOT NULL,
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
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL,
  `is_done` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`evaluation_period_id`),
  UNIQUE KEY `evaluation_period_id` (`evaluation_period_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `evaluation_period`
--

INSERT INTO `evaluation_period` (`evaluation_period_id`, `year`, `semester`, `start_date`, `end_date`, `is_active`, `is_done`) VALUES
(2, '2014-2015', '2nd', '2014-07-17', '2014-07-18', 0, 0),
(5, '2014-2015', '1st', '2014-07-15', '2014-07-16', 1, 0),
(9, '2014-2015', 'Summer', '2014-07-19', '2014-07-20', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(99) NOT NULL AUTO_INCREMENT,
  `username` varchar(60) NOT NULL,
  `password` varchar(99) NOT NULL,
  `first_name` varchar(99) DEFAULT NULL,
  `last_name` varchar(99) DEFAULT NULL,
  `email_address` varchar(99) DEFAULT NULL,
  `account_type` varchar(2) NOT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `user_id` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`, `first_name`, `last_name`, `email_address`, `account_type`) VALUES
(1, 'admin', 'admin', NULL, NULL, 'fname.lname@gmail.com', 'a'),
(2, '2011-12345', 'test', 'FName', 'LName', 'fname.lname@gmail.com\n', 's'),
(3, 'teacher1', 'test', 'FName', 'LName', 'fname.lname@gmail.com\n', 't');

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
-- Dumping data for table `user_class`
--

INSERT INTO `user_class` (`class_id`, `user_id`) VALUES
(1, 2),
(1, 3);

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

DELIMITER $$
--
-- Events
--
CREATE DEFINER=`root`@`localhost` EVENT `eval_period_update_is_done_true` ON SCHEDULE EVERY 1 HOUR STARTS '2014-07-15 16:26:29' ON COMPLETION NOT PRESERVE ENABLE DO update evaluation_period
set is_done=1
where (DATEDIFF(end_date, now()) < 0)
  and (is_done IS FALSE)$$

CREATE DEFINER=`root`@`localhost` EVENT `eval_period_update_is_active_true` ON SCHEDULE EVERY 1 HOUR STARTS '2014-07-15 16:24:34' ON COMPLETION NOT PRESERVE ENABLE DO update evaluation_period 
set is_active=1
where (DATEDIFF(start_date,now()) = 0)
  and (DATEDIFF(end_date, now()) >= 0)
  and (is_active IS FALSE)
  and (is_done IS FALSE)$$

CREATE DEFINER=`root`@`localhost` EVENT `eval_period_update_is_active_false` ON SCHEDULE EVERY 1 HOUR STARTS '2014-07-15 11:50:33' ON COMPLETION NOT PRESERVE ENABLE DO update evaluation_period
set is_active=0
where (DATEDIFF(end_date, now()) < 0)
  and (is_active IS TRUE)$$

DELIMITER ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
