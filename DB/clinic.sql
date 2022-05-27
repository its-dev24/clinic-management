-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 18, 2021 at 11:22 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `clinic`
--
CREATE DATABASE IF NOT EXISTS `clinic` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `clinic`;

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE IF NOT EXISTS `admin_login` (
  `admin_id` varchar(20) NOT NULL,
  `pass` varchar(20) NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`admin_id`, `pass`) VALUES
('admin123', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `appo_today`
--

CREATE TABLE IF NOT EXISTS `appo_today` (
  `usr_id` int(11) NOT NULL,
  `appo_id` int(11) NOT NULL AUTO_INCREMENT,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`appo_id`),
  UNIQUE KEY `user name` (`usr_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `appo_today`
--

INSERT INTO `appo_today` (`usr_id`, `appo_id`, `time`) VALUES
(8, 5, '2021-12-01 15:55:41'),
(6, 7, '2021-12-02 05:12:05'),
(10, 9, '2021-12-02 06:55:29'),
(0, 10, '2021-12-02 08:55:55');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `f_id` int(11) NOT NULL AUTO_INCREMENT,
  `uname` varchar(20) NOT NULL,
  `feedback` text NOT NULL,
  PRIMARY KEY (`f_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`f_id`, `uname`, `feedback`) VALUES
(2, 'Gautham', 'Good'),
(3, 'Gautham', 'nice'),
(4, 'Gautham', 'tytrf'),
(6, 'Sooraj', 'hsdfhsahdfhdsa');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `usr` varchar(20) NOT NULL,
  `pass` varchar(20) NOT NULL,
  `type` varchar(6) NOT NULL,
  PRIMARY KEY (`usr`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`usr`, `pass`, `type`) VALUES
('albin1', '1234', 'user'),
('amal1', '1234', 'user'),
('anand1', '123', 'user'),
('anu1', '1234', 'rec'),
('Arun1', '1234', 'user'),
('athul1', '123456', 'rec'),
('gautham23', '1234', 'user'),
('sooraj1', '1234', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE IF NOT EXISTS `patient` (
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `usr_id` int(4) NOT NULL AUTO_INCREMENT,
  `age` int(4) NOT NULL,
  `gender` varchar(4) NOT NULL,
  `email` varchar(50) NOT NULL,
  `usr` varchar(20) NOT NULL,
  `place` varchar(20) NOT NULL,
  `phn` varchar(15) NOT NULL,
  `bg` varchar(5) NOT NULL,
  PRIMARY KEY (`usr_id`),
  UNIQUE KEY `usr` (`usr`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`fname`, `lname`, `usr_id`, `age`, `gender`, `email`, `usr`, `place`, `phn`, `bg`) VALUES
('Gautham', 'Krishna', 6, 21, 'M', 'abc@gmail.com', 'gautham23', 'ekm', '1234567890', 'O+'),
('Sooraj', 'S', 7, 21, 'M', 'abc@gmail.com', 'sooraj1', 'Idukki', '1122334455', 'O+'),
('Arun', 'S', 8, 18, 'M', 'abc@gmail.com', 'Arun1', 'ekm', '1111111111', 'O+'),
('anand', 'Krishna', 9, 2, 'M', 'aa@gmail.com', 'anand1', 'ekm', '9207526622', 'O+');

-- --------------------------------------------------------

--
-- Table structure for table `prescription`
--

CREATE TABLE IF NOT EXISTS `prescription` (
  `prsc_id` int(4) NOT NULL AUTO_INCREMENT,
  `usr_id` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `prec` text NOT NULL,
  PRIMARY KEY (`prsc_id`),
  KEY `user id` (`usr_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `prescription`
--

INSERT INTO `prescription` (`prsc_id`, `usr_id`, `date`, `prec`) VALUES
(6, 7, '2021-12-01 08:49:22', 'prescription1'),
(7, 7, '2021-12-01 16:12:57', 'prescription 2'),
(8, 6, '2021-12-01 16:17:15', 'prescription 23'),
(9, 7, '2021-12-01 16:17:35', 'prescription45'),
(10, 6, '2021-12-01 17:17:26', 'prescription'),
(11, 8, '2021-12-01 17:17:41', 'prescription'),
(12, 6, '2021-12-02 05:11:33', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `presc_today`
--

CREATE TABLE IF NOT EXISTS `presc_today` (
  `presc_id` int(11) NOT NULL,
  `usr_id` int(11) NOT NULL,
  `presc` text NOT NULL,
  `uname` varchar(20) NOT NULL,
  PRIMARY KEY (`presc_id`),
  KEY `usr_id` (`usr_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `presc_today`
--

INSERT INTO `presc_today` (`presc_id`, `usr_id`, `presc`, `uname`) VALUES
(6, 6, 'prescription 12', 'Gautham');

-- --------------------------------------------------------

--
-- Table structure for table `reception`
--

CREATE TABLE IF NOT EXISTS `reception` (
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `r_id` int(4) NOT NULL AUTO_INCREMENT,
  `age` int(4) NOT NULL,
  `gender` varchar(4) NOT NULL,
  `usr` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phn` varchar(20) NOT NULL,
  PRIMARY KEY (`r_id`),
  UNIQUE KEY `usr` (`usr`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `reception`
--

INSERT INTO `reception` (`fname`, `lname`, `r_id`, `age`, `gender`, `usr`, `email`, `phn`) VALUES
('Athul', 'Eldho', 8, 21, 'M', 'athul1', 'athuleldhokmt@gmail.com', '9207537834');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `prescription`
--
ALTER TABLE `prescription`
  ADD CONSTRAINT `prescription user id` FOREIGN KEY (`usr_id`) REFERENCES `patient` (`usr_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `presc_today`
--
ALTER TABLE `presc_today`
  ADD CONSTRAINT `prescription_id` FOREIGN KEY (`presc_id`) REFERENCES `prescription` (`prsc_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `User ID` FOREIGN KEY (`usr_id`) REFERENCES `patient` (`usr_id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
