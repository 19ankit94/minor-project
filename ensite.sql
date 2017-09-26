-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 25, 2015 at 12:53 PM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ensite`
--
CREATE DATABASE IF NOT EXISTS `ensite` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `ensite`;

-- --------------------------------------------------------

--
-- Table structure for table `admin_data`
--

CREATE TABLE IF NOT EXISTS `admin_data` (
  `admin_id` int(11) NOT NULL,
  `admin_name` text NOT NULL,
  `admin_pass` varchar(30) NOT NULL,
  `admin_image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_data`
--

INSERT INTO `admin_data` (`admin_id`, `admin_name`, `admin_pass`, `admin_image`) VALUES
(4112006, 'ankit', '123', 'b.jpg'),
(4112029, 'neehar', '123', 'a.jpg'),
(4112061, 'vishal', '123', 'c.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `branch`
--

CREATE TABLE IF NOT EXISTS `branch` (
  `b_id` int(11) NOT NULL AUTO_INCREMENT,
  `b_code` text NOT NULL,
  `b_name` text NOT NULL,
  PRIMARY KEY (`b_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `branch`
--

INSERT INTO `branch` (`b_id`, `b_code`, `b_name`) VALUES
(1, 'ECE', 'Electronics And Communication Enginnering'),
(2, 'CSE', 'Computer Science and Engineering'),
(3, 'ME', 'Mechanical'),
(4, 'CE', 'Civil Engineering'),
(5, 'EE', 'Electrical Engineering');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE IF NOT EXISTS `message` (
  `mid` int(11) NOT NULL AUTO_INCREMENT,
  `cname` text NOT NULL,
  `cemail` varchar(30) NOT NULL,
  `msg` text NOT NULL,
  PRIMARY KEY (`mid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `notes`
--

CREATE TABLE IF NOT EXISTS `notes` (
  `n_id` int(11) NOT NULL AUTO_INCREMENT,
  `b_code` text NOT NULL,
  `s_code` text NOT NULL,
  `f_name` varchar(60) NOT NULL,
  PRIMARY KEY (`n_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE IF NOT EXISTS `subject` (
  `s_id` int(11) NOT NULL AUTO_INCREMENT,
  `s_code` text,
  `s_name` text,
  `b_code` text,
  PRIMARY KEY (`s_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
