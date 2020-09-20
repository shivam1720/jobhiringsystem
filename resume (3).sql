-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 06, 2020 at 06:27 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `resume`
--

-- --------------------------------------------------------

--
-- Table structure for table `admindata`
--

CREATE TABLE IF NOT EXISTS `admindata` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uname` varchar(50) NOT NULL,
  `pwd` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admindata`
--

INSERT INTO `admindata` (`id`, `uname`, `pwd`) VALUES
(1, 'admin', '123');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE IF NOT EXISTS `registration` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `full_name` varchar(25) NOT NULL,
  `last_name` varchar(25) NOT NULL,
  `dob` varchar(25) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `whatDo` text NOT NULL,
  `languages` varchar(25) NOT NULL,
  `personalSites` varchar(25) NOT NULL,
  `areYou` varchar(25) NOT NULL,
  `immediateAnd` varchar(50) NOT NULL,
  `whatAre` varchar(50) NOT NULL,
  `sitesSamples` text NOT NULL,
  `listYour` text NOT NULL,
  `location` text NOT NULL,
  `lastFinished` varchar(50) NOT NULL,
  `whatProject` text NOT NULL,
  `projectRelease` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phoneNumber` varchar(14) NOT NULL,
  `cv` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `full_name`, `last_name`, `dob`, `gender`, `whatDo`, `languages`, `personalSites`, `areYou`, `immediateAnd`, `whatAre`, `sitesSamples`, `listYour`, `location`, `lastFinished`, `whatProject`, `projectRelease`, `email`, `phoneNumber`, `cv`) VALUES
(2, 'dfssa', 'sada', '3/February/2016', 'Male', 'Java', 'dfsd', 'dsf', 'Yes', 'Yes', 'dfsdf', 'dfsdf', 'dsfs', 'dfsdf', 'dsfs', 'dfs', '2/February/2017', 'asd@das.df', '8734995906', 'cv.jpg'),
(3, 'abc ', 'patel', '2/January/2018', 'Female', 'Java,Linux,Android,Eclipse,JacaScript,Perl,Ubuntu,iOS,MySql,Red Hat,Oracle', 'php developer', 'vdxfg', 'Yes', 'Yes', 'vdfg', 'gdfgd', 'fgdfg', 'fgsfs', 'dsfs', 'sdfsdf', '15/September/2004', 'dfsd@fs.fdf', '234567890', '!qhlogs.doc');

-- --------------------------------------------------------

--
-- Table structure for table `user_reg`
--

CREATE TABLE IF NOT EXISTS `user_reg` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `password` varchar(50) NOT NULL,
  `contact_no` varchar(50) NOT NULL,
  `cdt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `user_reg`
--

INSERT INTO `user_reg` (`id`, `name`, `password`, `contact_no`, `cdt`) VALUES
(1, 'sapnil', '123', '123456789', '2020-02-15 07:41:31'),
(2, 'abc', '123', '1234567890', '2020-02-18 06:22:35'),
(3, 'Sapnil', '123', '12345689', '2020-03-05 10:20:01');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
