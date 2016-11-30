-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 27, 2016 at 03:18 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `student`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE IF NOT EXISTS `admin_login` (
  `username` varchar(50) NOT NULL COMMENT 'username',
  `password` varchar(128) NOT NULL COMMENT 'password'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`username`, `password`) VALUES
('comp@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `company_registration`
--

CREATE TABLE IF NOT EXISTS `company_registration` (
`id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `url` varchar(200) NOT NULL,
  `type` varchar(25) NOT NULL,
  `eligibility` varchar(10) NOT NULL,
  `min_cgpa` varchar(3) NOT NULL,
  `min_10_percentage` varchar(5) NOT NULL,
  `min_12_percentage` varchar(5) NOT NULL,
  `email` varchar(128) NOT NULL,
  `info` text NOT NULL,
  `approve` smallint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company_registration`
--

INSERT INTO `company_registration` (`id`, `name`, `url`, `type`, `eligibility`, `min_cgpa`, `min_10_percentage`, `min_12_percentage`, `email`, `info`, `approve`) VALUES
(2, 'AB S/w pvt.ltd', 'www.ab.com', 'software', 'M.Tech', '9', '60', '47', '', 'ab@gmail.com', 0),
(3, 's/w', 'www.google.co.in', 'software', 'For All', '8', '66', '73', 'nothing is impossible', 'comp@gmail.com', 0),
(4, 'mysoftwarw pvt', 'www.mas/w.com', 'finance company', 'MCA', '0', '89', '60', 'nfnglngfsgvn,ngkkgkgm,msn vg v,msng  nv mgfsgjnflnm,,mncf nsd cjjd ', 'ams@gmail.com', 0),
(5, 'mysoftwarw pvt', 'www.mas/w.com', 'finance company', 'MCA', '0', '89', '60', 'ams@gmail.com', 'nfnglngfsgvn,ngkkgkgm,msn vg v,msng  nv mgfsgjnflnm,,mncf nsd cjjd ', 0),
(6, 'mysoftwarw pvt', 'www.mas/w.com', 'finance company', 'MCA', '0', '89', '60', 'ams@gmail.com', 'nfnglngfsgvn,ngkkgkgm,msn vg v,msng  nv mgfsgjnflnm,,mncf nsd cjjd ', 0),
(7, 'www.infosystem.com', 'IT', 'B.Tech', '7', '5', '4', 'A', 'jonyladdha@gmail.com', 'somethinhbj', 1),
(8, '', '', '', '', '', '', '', '', '', 1),
(9, '', '', '', '', '', '', '', '', '', 1),
(10, 'dd', 'dd', 'M.Tech', '3', '22', '33', 'C', 'dd@r', 'ee', 1),
(11, 'dd', 'dd', 'M.Tech', '3', '22', '33', 'C', 'dd@r', 'ee', 1),
(12, 'dd', 'dd', 'M.Tech', '3', '22', '33', 'C', 'dd@r', 'ee', 1),
(13, 'dd', 'dd', 'M.Tech', '3', '22', '33', 'C', 'dd@r', 'ee', 1),
(14, 'www.wipro.com', 'IT', 'For All', '6', '50', '50', 'B', 'wipro@gmail.com', 'anything', 1);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `college_id` varchar(15) NOT NULL,
  `password` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`college_id`, `password`) VALUES
('10045', 'ORqBQhqfve/36Ww1NKSRYCfW9LXZZUOkT6re1h16n84='),
('10046', 'Zx0oPO3jEwF4Q6zXH3GtXOf25V8pi9ZUdtXZgNyU3+g='),
('10047', 'NoMKdT1YCiO6e3e3npCfEEhognjASJ7HtZuquZBFIpY='),
('111', 'kC6Bnz2xtmJkPBnlo2Fjw9cfNcs+Ese7sD4u4Qhz9UY='),
('11111', 'Kpiy0/of5kTFLdvjIQpplMV1ccTCBhAcpXcLfB3g7A8='),
('12', 'Myk+I9uTuGtO6ZqaxC+aOYHSVTZS3RG0ycanLBfhLXY='),
('12121', 'tIp9ca7Mejn51gDcWnLAGrAZwl7jdEZWkH4FGE5OxOY='),
('1214', 'Ar9K1ltEqhw90KavUEj3hTgItoiCv7PDl2+3tnWCWGc='),
('1234', 'erUIVT4D0MNHtV5izLU6Bo6XQTRV40mTvmvtiVGMPaw='),
('123456', '5hQh06D5C84yq/GOu6K1ICbcA+1ErlIPPrBFipF17bc='),
('1236', 'a2HJhz2P/nHq63z8UFa1zUAoPlqu7ZcGWv9JeFEywjY='),
('201101230', 'si9bw1q99sSWfq2cXCzv9HjR8pmR2+Fobj/zYD+guc0='),
('201101231', 'wTeEhYlg236e3yM8Tlc4rT2tsjfrxdOJPEXcvo1njMQ=');

-- --------------------------------------------------------

--
-- Table structure for table `student_company`
--

CREATE TABLE IF NOT EXISTS `student_company` (
`id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `company_id` int(11) NOT NULL,
  `registered_time` datetime NOT NULL,
  `active` smallint(6) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_company`
--

INSERT INTO `student_company` (`id`, `student_id`, `company_id`, `registered_time`, `active`) VALUES
(1, 10045, 3, '2016-04-09 00:00:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `student_table`
--

CREATE TABLE IF NOT EXISTS `student_table` (
`UID` int(11) NOT NULL,
  `college_id` varchar(15) NOT NULL,
  `name` varchar(50) NOT NULL,
  `father_name` varchar(50) NOT NULL,
  `mother_name` varchar(50) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `DOB` date NOT NULL,
  `course` varchar(50) NOT NULL,
  `branch` varchar(50) NOT NULL,
  `year` varchar(4) NOT NULL,
  `cgpa` int(5) NOT NULL,
  `percentage_10` varchar(5) NOT NULL,
  `percentage_12` varchar(5) NOT NULL,
  `mobile` varchar(11) NOT NULL,
  `email` varchar(128) NOT NULL,
  `address` text NOT NULL,
  `photo` blob,
  `resume` blob,
  `approved` smallint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_table`
--

INSERT INTO `student_table` (`UID`, `college_id`, `name`, `father_name`, `mother_name`, `gender`, `DOB`, `course`, `branch`, `year`, `cgpa`, `percentage_10`, `percentage_12`, `mobile`, `email`, `address`, `photo`, `resume`, `approved`) VALUES
(1, '201101231', 'NIkhil Maheshwari', 'Bhupendra Maheshwari', 'Anita Maheshwari', 'male', '1993-09-21', 'B.Tech', 'ICT', '4th', 6, '85', '85', '9876543210', 'nikhilmaheshwari46@yahoo.in', 'Kota Rajasthan', NULL, NULL, 1),
(2, '201101230', 'NIkhil Maheshwari', 'Bhupendra Maheshwari', 'Anita Maheshwari', 'male', '1993-09-21', 'B.Tech', 'ICT', '4th', 7, '85', '85', '9876543210', 'nikhilmaheshwari46@yahoo.in', '11/97 swami Vivekanand Nagar', NULL, NULL, 0),
(3, '10046', 'Nikita Maheshwari', 'Bhupendra Maheshwari', 'Anita Maheshwari', 'female', '1994-12-19', 'B.Tech', 'CSE', '4th', 8, '65', '60', '9460812763', 'nikkiladdha@gmail.com', '3/187 Ganesh Talab, Basant Vihar, Near Dyanchand Stadium, Kota, Raj.', NULL, NULL, 0),
(4, '10045', 'Vidushi Mahehswari', 'Arun Maheshwari', 'Prabha Maheshwari', 'female', '1993-04-28', 'B.Tech', 'CSE', '3rd', 8, '95', '90', '7737283329', 'vidushi@gmail.com', '3/134 Ganesh Talab, Basant Vihar Kota, Raj.', NULL, NULL, 0),
(5, '10047', 'yojana ', 'Ramesh kashyap', 'chandraprabha kashyap', 'female', '1995-01-18', 'B.Tech', 'EE', '4th', 9, '90', '92', '9602242696', 'yojanakashyap@gmail.com', 'Mahaveer Nagar', NULL, NULL, 1),
(6, '1236', 'nik', 'b', 'b', 'male', '2016-04-16', 'B.Tech', 'jk', '4th', 6, '6', '6', '9461610006', '10045@gmail.com', '3/187 ganesh talab', NULL, NULL, 1),
(7, '12', 'yana', 'Ramesh kashyap', 'chandraprabha kashyap', 'female', '2016-04-02', 'B.Tech', 'ee', '2nd', 6, '60', '60', '9460812763', '100@gmail.com', '3/187 ganesh talab', NULL, NULL, 1),
(8, '1234', 'Vidushi Mahehswari', 'bhupendra', 'Prabha Maheshwari', 'female', '2016-04-05', 'M.Tech', 'ioj', '1st', 1, '23', '56', '9460812763', '10045@gmail.com', '3/187 ganesh talab', NULL, NULL, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
 ADD PRIMARY KEY (`username`);

--
-- Indexes for table `company_registration`
--
ALTER TABLE `company_registration`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
 ADD PRIMARY KEY (`college_id`);

--
-- Indexes for table `student_company`
--
ALTER TABLE `student_company`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_table`
--
ALTER TABLE `student_table`
 ADD PRIMARY KEY (`UID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `company_registration`
--
ALTER TABLE `company_registration`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `student_company`
--
ALTER TABLE `student_company`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `student_table`
--
ALTER TABLE `student_table`
MODIFY `UID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
