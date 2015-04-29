-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 29, 2015 at 08:45 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `set`
--
CREATE DATABASE IF NOT EXISTS `upcdcs_set` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `upcdcs_set`;

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE IF NOT EXISTS `class` (
`class_id` int(99) NOT NULL,
  `course_id` int(99) NOT NULL,
  `teacher_id` int(99) NOT NULL,
  `section` varchar(3) NOT NULL,
  `year` year(4) NOT NULL,
  `semester` int(1) NOT NULL,
  `schedule` varchar(256) NOT NULL,
  `number_of_students` int(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE IF NOT EXISTS `course` (
`course_id` int(99) NOT NULL,
  `course_name` varchar(256) NOT NULL,
  `office_id` int(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `evaluation`
--

CREATE TABLE IF NOT EXISTS `evaluation` (
`evaluation_id` int(99) NOT NULL,
  `class_id` int(99) NOT NULL,
  `content_id` int(99) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `evaluation_content`
--

CREATE TABLE IF NOT EXISTS `evaluation_content` (
`content_id` int(99) NOT NULL,
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
  `recommendations` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `office`
--

CREATE TABLE IF NOT EXISTS `office` (
`office_id` int(99) NOT NULL,
  `name` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
`student_id` int(255) NOT NULL,
  `sais_id` int(9) NOT NULL,
  `first_name` varchar(256) NOT NULL,
  `last_name` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL,
  `program` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student_class`
--

CREATE TABLE IF NOT EXISTS `student_class` (
  `student_id` int(255) NOT NULL,
  `class_id` int(255) NOT NULL,
  `has_evaluated` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student_temp_password`
--

CREATE TABLE IF NOT EXISTS `student_temp_password` (
  `sais_id` int(9) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE IF NOT EXISTS `teacher` (
`teacher_id` int(99) NOT NULL,
  `office_id` int(99) NOT NULL,
  `first_name` varchar(256) NOT NULL,
  `last_name` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`user_id` int(99) NOT NULL,
  `email_address` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL,
  `first_name` varchar(256) NOT NULL,
  `last_name` varchar(256) NOT NULL,
  `role` varchar(10) NOT NULL,
  `office_id` int(99) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Default superadmin password: upcebu.dcs (please change)';

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `email_address`, `password`, `first_name`, `last_name`, `role`, `office_id`) VALUES
(1, 'superadmin', '1821fc9b2257aba3f7d268fde28606ff', 'Admin', 'Super', 'superadmin', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `year_semester`
--

CREATE TABLE IF NOT EXISTS `year_semester` (
  `year` year(4) NOT NULL,
  `semester` int(1) NOT NULL,
  `start_date` date NOT NULL,
  `is_current` tinyint(1) NOT NULL DEFAULT '0',
  `evaluation_active` tinyint(1) NOT NULL DEFAULT '0',
  `evaluation_done` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `class`
--
ALTER TABLE `class`
 ADD PRIMARY KEY (`class_id`), ADD UNIQUE KEY `unique_class` (`year`,`semester`,`course_id`,`section`), ADD KEY `teacher_id` (`teacher_id`), ADD KEY `course_id` (`course_id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
 ADD PRIMARY KEY (`course_id`), ADD UNIQUE KEY `course_name` (`course_name`), ADD KEY `office_id` (`office_id`);

--
-- Indexes for table `evaluation`
--
ALTER TABLE `evaluation`
 ADD PRIMARY KEY (`evaluation_id`), ADD UNIQUE KEY `content_id` (`content_id`), ADD KEY `class_id` (`class_id`);

--
-- Indexes for table `evaluation_content`
--
ALTER TABLE `evaluation_content`
 ADD PRIMARY KEY (`content_id`), ADD KEY `class_id` (`class_id`);

--
-- Indexes for table `office`
--
ALTER TABLE `office`
 ADD PRIMARY KEY (`office_id`), ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
 ADD PRIMARY KEY (`student_id`), ADD UNIQUE KEY `sais_id` (`sais_id`);

--
-- Indexes for table `student_class`
--
ALTER TABLE `student_class`
 ADD PRIMARY KEY (`student_id`,`class_id`), ADD KEY `class_id` (`class_id`);

--
-- Indexes for table `student_temp_password`
--
ALTER TABLE `student_temp_password`
 ADD UNIQUE KEY `sais_id` (`sais_id`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
 ADD PRIMARY KEY (`teacher_id`), ADD KEY `office_id` (`office_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`user_id`), ADD UNIQUE KEY `email_address` (`email_address`), ADD KEY `office_id` (`office_id`);

--
-- Indexes for table `year_semester`
--
ALTER TABLE `year_semester`
 ADD PRIMARY KEY (`year`,`semester`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `class`
--
ALTER TABLE `class`
MODIFY `class_id` int(99) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
MODIFY `course_id` int(99) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `evaluation`
--
ALTER TABLE `evaluation`
MODIFY `evaluation_id` int(99) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `evaluation_content`
--
ALTER TABLE `evaluation_content`
MODIFY `content_id` int(99) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `office`
--
ALTER TABLE `office`
MODIFY `office_id` int(99) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
MODIFY `student_id` int(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
MODIFY `teacher_id` int(99) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `user_id` int(99) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `class`
--
ALTER TABLE `class`
ADD CONSTRAINT `class_ibfk_1` FOREIGN KEY (`course_id`) REFERENCES `course` (`course_id`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `class_ibfk_2` FOREIGN KEY (`teacher_id`) REFERENCES `teacher` (`teacher_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `course`
--
ALTER TABLE `course`
ADD CONSTRAINT `course_ibfk_1` FOREIGN KEY (`office_id`) REFERENCES `office` (`office_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `evaluation`
--
ALTER TABLE `evaluation`
ADD CONSTRAINT `evaluation_ibfk_1` FOREIGN KEY (`content_id`) REFERENCES `evaluation_content` (`content_id`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `evaluation_ibfk_2` FOREIGN KEY (`class_id`) REFERENCES `class` (`class_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `evaluation_content`
--
ALTER TABLE `evaluation_content`
ADD CONSTRAINT `evaluation_content_ibfk_1` FOREIGN KEY (`class_id`) REFERENCES `class` (`class_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `student_class`
--
ALTER TABLE `student_class`
ADD CONSTRAINT `student_class_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `student` (`student_id`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `student_class_ibfk_2` FOREIGN KEY (`class_id`) REFERENCES `class` (`class_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `student_temp_password`
--
ALTER TABLE `student_temp_password`
ADD CONSTRAINT `student_temp_password_ibfk_1` FOREIGN KEY (`sais_id`) REFERENCES `student` (`sais_id`) ON DELETE CASCADE ON UPDATE CASCADE;

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
CREATE DEFINER=`root`@`localhost` EVENT `update_year_sem` ON SCHEDULE EVERY 1 HOUR STARTS '2014-11-09 18:13:43' ON COMPLETION NOT PRESERVE ENABLE DO BEGIN 
UPDATE year_semester 
SET is_current=0;

UPDATE year_semester 
SET is_current=1 
WHERE `start_date` <= now() 
ORDER BY `start_date` DESC LIMIT 1;
END$$

DELIMITER ;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
