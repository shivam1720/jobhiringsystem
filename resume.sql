-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 19, 2020 at 11:54 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `resume`
--

-- --------------------------------------------------------

--
-- Table structure for table `admindata`
--

CREATE TABLE `admindata` (
  `id` int(11) NOT NULL,
  `uname` varchar(50) NOT NULL,
  `pwd` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admindata`
--

INSERT INTO `admindata` (`id`, `uname`, `pwd`) VALUES
(1, 'admin', '123');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
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
  `experience` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `full_name`, `last_name`, `dob`, `gender`, `whatDo`, `languages`, `personalSites`, `areYou`, `immediateAnd`, `whatAre`, `sitesSamples`, `listYour`, `location`, `lastFinished`, `whatProject`, `projectRelease`, `email`, `phoneNumber`, `cv`, `experience`) VALUES
(98, 'Joshua', 'Payne', '30544', 'Male', 'PHP,Eclipse,Css', '', 'www.JoshuaPayne.com', 'Yes', 'No', '16975', '', 'www.github.com/JoshuaPayne', 'Maharashtra', 'Windows', 'MYSQL', '43854', 'patelsapnil1@gmail.com', '6273942328', '', 1),
(99, 'April', 'Brown', '30275', 'Female', 'Oracle,NodeJS,JavaScript', '', 'www.AprilBrown.com', 'No', 'No', '12568', '', 'www.github.com/AprilBrown', 'Rajasthan', 'IOS', 'HTML', '43412', 'shivamkirtan@gmail.com', '1046778143', '', 3),
(100, 'Valerie', 'Rush', '29911', 'Male', 'NodeJS,Css,C', '', 'www.ValerieRush.com', 'No', 'Yes', '29600', '', 'www.github.com/ValerieRush', 'Nagaland', 'NodeJS', 'Wordpress', '43783', 'usmith@parrish.org', '3156930095', '', 5),
(101, 'Dipenkumar pareshbhai pra', 'prajapati', '2/March/2014', 'Male', 'Java,iOS,SQLite,Json,Dreamweaver', 'PHP', 'www.dipo.com', 'No', 'Yes', '100000', '', '', 'PIPLAV', '', '', '//', 'prajapati8575@gmail.com', '76 0031 4691', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_reg`
--

CREATE TABLE `user_reg` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `password` varchar(50) NOT NULL,
  `contact_no` varchar(50) NOT NULL,
  `cdt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_reg`
--

INSERT INTO `user_reg` (`id`, `name`, `password`, `contact_no`, `cdt`) VALUES
(1, 'sapnil', '123', '123456789', '2020-02-15 07:41:31'),
(2, 'abc', '123', '1234567890', '2020-02-18 06:22:35'),
(3, 'Sapnil', '123', '12345689', '2020-03-05 10:20:01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admindata`
--
ALTER TABLE `admindata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_reg`
--
ALTER TABLE `user_reg`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admindata`
--
ALTER TABLE `admindata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT for table `user_reg`
--
ALTER TABLE `user_reg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
