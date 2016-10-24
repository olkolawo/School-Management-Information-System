-- phpMyAdmin SQL Dump
-- version 4.4.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 06, 2016 at 12:44 PM
-- Server version: 5.6.24
-- PHP Version: 5.5.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(32) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(13, 'mathematics', '5f4dcc3b5aa765d61d8327deb882cf99'),
(14, 'english', '5f4dcc3b5aa765d61d8327deb882cf99'),
(15, 'chemistry', '5f4dcc3b5aa765d61d8327deb882cf99'),
(16, 'physics', '5f4dcc3b5aa765d61d8327deb882cf99'),
(17, 'biology', '5f4dcc3b5aa765d61d8327deb882cf99');

-- --------------------------------------------------------

--
-- Table structure for table `bado`
--

CREATE TABLE IF NOT EXISTS `bado` (
  `id` int(25) NOT NULL,
  `subject_class` varchar(25) NOT NULL,
  `adm_no` varchar(25) NOT NULL,
  `house` varchar(25) NOT NULL,
  `session` varchar(25) NOT NULL,
  `term` varchar(25) NOT NULL,
  `no_opened` varchar(25) NOT NULL,
  `no_attendance` varchar(25) NOT NULL,
  `m_subject` varchar(25) NOT NULL,
  `student_name` varchar(25) NOT NULL,
  `middle_name` varchar(25) NOT NULL,
  `m1_result` varchar(25) NOT NULL,
  `m2_result` varchar(25) NOT NULL,
  `m3_result` varchar(25) NOT NULL,
  `m1_ca` varchar(25) NOT NULL,
  `m2_ca` varchar(25) NOT NULL,
  `m3_ca` varchar(25) NOT NULL,
  `m_others` varchar(25) NOT NULL,
  `m_exams` varchar(25) NOT NULL,
  `m_total` varchar(25) NOT NULL,
  `m_grade` varchar(25) NOT NULL,
  `m_remark` varchar(25) NOT NULL,
  `m_sign` varchar(25) NOT NULL,
  `e_subject` varchar(25) NOT NULL,
  `e1_result` varchar(25) NOT NULL,
  `e2_result` varchar(25) NOT NULL,
  `e3_result` varchar(25) NOT NULL,
  `e1_ca` varchar(25) NOT NULL,
  `e2_ca` varchar(25) NOT NULL,
  `e3_ca` varchar(25) NOT NULL,
  `e_others` varchar(25) NOT NULL,
  `e_exams` varchar(25) NOT NULL,
  `e_total` varchar(25) NOT NULL,
  `e_grade` varchar(25) NOT NULL,
  `e_remark` varchar(25) NOT NULL,
  `e_sign` varchar(25) NOT NULL,
  `c_subject` varchar(25) NOT NULL,
  `c1_result` varchar(25) NOT NULL,
  `c2_result` varchar(25) NOT NULL,
  `c3_result` varchar(25) NOT NULL,
  `c1_ca` varchar(25) NOT NULL,
  `c2_ca` varchar(25) NOT NULL,
  `c3_ca` varchar(25) NOT NULL,
  `c_others` varchar(25) NOT NULL,
  `c_exams` varchar(25) NOT NULL,
  `c_total` varchar(25) NOT NULL,
  `c_grade` varchar(25) NOT NULL,
  `c_remark` varchar(25) NOT NULL,
  `c_sign` varchar(25) NOT NULL,
  `p_subject` varchar(25) NOT NULL,
  `p1_result` varchar(25) NOT NULL,
  `p2_result` varchar(25) NOT NULL,
  `p3_result` varchar(25) NOT NULL,
  `p1_ca` varchar(25) NOT NULL,
  `p2_ca` varchar(25) NOT NULL,
  `p3_ca` varchar(25) NOT NULL,
  `p_others` varchar(25) NOT NULL,
  `p_exams` varchar(25) NOT NULL,
  `p_total` varchar(25) NOT NULL,
  `p_grade` varchar(25) NOT NULL,
  `p_remark` varchar(25) NOT NULL,
  `p_sign` varchar(25) NOT NULL,
  `grand_r1` varchar(25) NOT NULL,
  `grand_r2` varchar(25) NOT NULL,
  `grand_r3` varchar(25) NOT NULL,
  `grand_c1` varchar(25) NOT NULL,
  `grand_c2` varchar(25) NOT NULL,
  `grand_c3` varchar(25) NOT NULL,
  `grand_exams` varchar(25) NOT NULL,
  `grand_others` varchar(25) NOT NULL,
  `grand_total` varchar(25) NOT NULL,
  `handwriting` varchar(25) NOT NULL,
  `class_attendance` varchar(25) NOT NULL,
  `initiative` varchar(25) NOT NULL,
  `personal_neatness` varchar(25) NOT NULL,
  `creativity` varchar(25) NOT NULL,
  `punctuality` varchar(25) NOT NULL,
  `honesty` varchar(25) NOT NULL,
  `neatness_in_work` varchar(25) NOT NULL,
  `oral_fluency` varchar(25) NOT NULL,
  `class_participation` varchar(25) NOT NULL,
  `politeness` varchar(25) NOT NULL,
  `athletic_ability` varchar(25) NOT NULL,
  `self_control` varchar(25) NOT NULL,
  `relationship_peers` varchar(25) NOT NULL,
  `physical_health` varchar(25) NOT NULL,
  `sense_responsibility` varchar(25) NOT NULL,
  `relationship_teachers` varchar(25) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bado`
--

INSERT INTO `bado` (`id`, `subject_class`, `adm_no`, `house`, `session`, `term`, `no_opened`, `no_attendance`, `m_subject`, `student_name`, `middle_name`, `m1_result`, `m2_result`, `m3_result`, `m1_ca`, `m2_ca`, `m3_ca`, `m_others`, `m_exams`, `m_total`, `m_grade`, `m_remark`, `m_sign`, `e_subject`, `e1_result`, `e2_result`, `e3_result`, `e1_ca`, `e2_ca`, `e3_ca`, `e_others`, `e_exams`, `e_total`, `e_grade`, `e_remark`, `e_sign`, `c_subject`, `c1_result`, `c2_result`, `c3_result`, `c1_ca`, `c2_ca`, `c3_ca`, `c_others`, `c_exams`, `c_total`, `c_grade`, `c_remark`, `c_sign`, `p_subject`, `p1_result`, `p2_result`, `p3_result`, `p1_ca`, `p2_ca`, `p3_ca`, `p_others`, `p_exams`, `p_total`, `p_grade`, `p_remark`, `p_sign`, `grand_r1`, `grand_r2`, `grand_r3`, `grand_c1`, `grand_c2`, `grand_c3`, `grand_exams`, `grand_others`, `grand_total`, `handwriting`, `class_attendance`, `initiative`, `personal_neatness`, `creativity`, `punctuality`, `honesty`, `neatness_in_work`, `oral_fluency`, `class_participation`, `politeness`, `athletic_ability`, `self_control`, `relationship_peers`, `physical_health`, `sense_responsibility`, `relationship_teachers`) VALUES
(1, 'SS1', 'SS/09/14/079', 'Red', '2011/2015 SESSION', 'FIRST TERM REPORT', '188', '122', 'MATHEMATICS', 'Madison', 'Dison', '623', '753', '753', '085', '135', '135', '194', '424', '824', 'A11m', 'Excellentm', 'MMM', 'ENGLISH LANGUAGE', '67', '76', '71', '10', '10', '14', '14', '18', '52', 'D7', 'Pass', 'ENG', 'CHEMISTRY', '87', '68', '79', '87', '99', '76', '67', '78', '89', 'A', 'Eexcellent', 'MMM', 'PHYSICS', '', '78', '7', '87', '8', '78', '7', '8', '7', 'A', 'Excellent', 'MM', '', '', '', '', '', '', '', '', '', '9', '5', '4', '4', '4', '4', '4', '4', '4', '4', '4', '4', '4', '4', '4', '4', '4'),
(2, 'SS3', 'SS/09/14/079', 'Green', '2011/2015 SESSION', 'FIRST TERM', '188', '122', 'MATHEMATICS', 'Adamss', 'Oke', '67', '87', '89', '78', '66', '89', '97', '54', '68', 'A', 'Good', 'MMM', 'ENGLISH LANGUAGE', '57', '78', '90', '33', '89', '90', '76', '89', '99', 'A', 'Good', 'EEE', 'CHEMISTRY', '56', '78', '76', '89', '0', '9', '87', '6', '67', '56', '67', 'CCCC', 'PHYSICS', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '5', '5', '5', '5', '5', '55', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '4'),
(3, 'JSS2', 'SS/09/14/079', 'Yellow', '2011/2015 SESSION', 'FIRST TERM', '188', '122', 'MATHEMATICS', 'Wale', 'Ale', '', '', '', '', '', '', '', '', '', '', '', '', 'ENGLISH LANGUAGE', '', '', '', '', '', '', '', '', '', '', '', '', 'CHEMISTRY', '', '', '', '', '', '', '', '', '', '', '', '', 'PHYSICS', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(4, 'SS3', 'SS/09/14/079', 'Green', '2011/2015 SESSION', 'FIRST TERM', '188', '122', 'MATHEMATICS', 'Davidd', 'Ams', '67', '87', '89', '78', '66', '89', '97', '54', '68', 'A', 'Good', 'MMM', 'ENGLISH LANGUAGE', '57', '78', '90', '33', '89', '90', '76', '89', '99', 'A', 'Good', 'EEE', 'CHEMISTRY', '45', '67', '65', '6', '5', '7', '77', '78', '90', 'C', 'Good', 'CCC', 'PHYSICS', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '4', '4', '4', '4', '4', '4', '4', '4', '4', '4', '4', '4', '4', '4', '4', '4', '4'),
(5, 'JSS2', 'SS/09/14/079', 'Black', '2011/2015 SESSION', 'FIRST TERM', '188', '122', 'MATHEMATICS', 'Vermanos', 'Manos', '', '', '', '', '', '', '', '', '', '', '', '', 'ENGLISH LANGUAGE', '', '', '', '', '', '', '', '', '', '', '', '', 'CHEMISTRY', '', '', '', '', '', '', '', '', '', '', '', '', 'PHYSICS', '56', '78', '76', '56', '78', '65', '89', '88', '76', 'A', 'Good', 'PPP', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(6, 'SS2', 'dssd', 'RED', '2015/2016 SESSION', 'SECOND TERM REPORT', '', '', 'MATHEMATICS', 'dfds', 'dfsdf', '', '', '', '', '', '', '', '', '', '', '', '', 'ENGLISH', '', '', '', '', '', '', '', '', '', '', '', '', 'CHEMISTRY', '', '', '', '', '', '', '', '', '', '', '', '', 'PHYSICS', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(7, 'SS2', '123', 'RED', '2015/2016 SESSION', 'SECOND TERM REPORT', '', '', 'MATHEMATICS', 'kolawole', 'Saheed', '', '', '', '', '', '', '', '', '', '', '', '', 'ENGLISH', '', '', '', '', '', '', '', '', '', '', '', '', 'CHEMISTRY', '', '', '', '', '', '', '', '', '', '', '', '', 'PHYSICS', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(8, 'SS2', 'y', 'RED', '2015/2016 SESSION', 'SECOND TERM REPORT', '', '', 'MATHEMATICS', 'y', 'y', '', '', '', '', '', '', '', '', '', '', '', '', 'ENGLISH', '', '', '', '', '', '', '', '', '', '', '', '', 'CHEMISTRY', '', '', '', '', '', '', '', '', '', '', '', '', 'PHYSICS', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(9, 'y', 'y', 'y', 'y', 'y', '', '', 'y', 'y', 'y', '', '', '', '', '', '', '', '', '', '', '', '', 'y', '', '', '', '', '', '', '', '', '', '', '', '', 'y', '', '', '', '', '', '', '', '', '', '', '', '', 'yy', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(10, 'y', 'y', 'y', 'y', 'y', '', '', 'y', 'y', 'y', '', '', '', '', '', '', '', '', '', '', '', '', 'y', '', '', '', '', '', '', '', '', '', '', '', '', 'y', '', '', '', '', '', '', '', '', '', '', '', '', 'y', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(11, 't', 't', 't', 't', 't', '', '', 't', 't', 't', '', '', '', '', '', '', '', '', '', '', '', '', 't', '', '', '', '', '', '', '', '', '', '', '', '', 't', '', '', '', '', '', '', '', '', '', '', '', '', 't', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(12, 't', 't', 't', 't', 't', '', '', 't', 't', 't', '', '', '', '', '', '', '', '', '', '', '', '', 't', '', '', '', '', '', '', '', '', '', '', '', '', 't', '', '', '', '', '', '', '', '', '', '', '', '', 't', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(13, 't', 't', 't', 't', 't', '', '', 't', 't', 't', '', '', '', '', '', '', '', '', '', '', '', '', 't', '', '', '', '', '', '', '', '', '', '', '', '', 't', '', '', '', '', '', '', '', '', '', '', '', '', 't', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(14, 'q', 'q', 'q', 'q', 'q', '', '', 'q', 'q', 'q', '', '', '', '', '', '', '', '', '', '', '', '', 'q', '', '', '', '', '', '', '', '', '', '', '', '', 'q', '', '', '', '', '', '', '', '', '', '', '', '', 'q', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(15, 'SS2', '1981', 'RED', '2015/2016 SESSION', 'SECOND TERM REPORT', '', '', 'MATHEMATICS', 'Yetunde', 'Kolawole', '', '', '', '', '', '', '', '', '', '', '', '', 'ENGLISH', '', '', '', '', '', '', '', '', '', '', '', '', 'CHEMISTRY', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', 'PHYSICS', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(16, 'SS3', '123', 'GREEN', '2011/2015', 'SECOND', '', '', 'MATHEMATICS', 'ADAM', 'BLAKE', '', '', '', '', '', '', '', '', '', '', '', '', 'ENGLISH LANGUAGE', '', '', '', '', '', '', '', '', '', '', '', '', 'CHEMISTRY', '6', '6', '6', '6', '6', '6', '6', '6', '6', 'B4', 'EXCELLENT', 'CCC', 'PHYSICS', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `principal`
--

CREATE TABLE IF NOT EXISTS `principal` (
  `id` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `principal`
--

INSERT INTO `principal` (`id`, `username`, `password`) VALUES
(2, 'admin', 'password'),
(3, 'principal', 'password');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `id` int(11) NOT NULL,
  `firstname` varchar(40) NOT NULL,
  `surname` varchar(40) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(32) NOT NULL,
  `email` varchar(40) NOT NULL,
  `address` varchar(40) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `firstname`, `surname`, `username`, `password`, `email`, `address`) VALUES
(39, 'James', 'James', 'james', 'b4cc344d25a2efe540adbf2678e2304c', 'james', 'james'),
(40, 'Simeon', 'Simeon', 'simeon', '54afb85e876012bdb2cc0001e299ad73', 'simeon', 'simeon'),
(41, 'Akeem', 'Akeem', 'akeem', 'b2f4596028d4164a64cbec01eb8410cd', 'akeem.gmal', 'akeem');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bado`
--
ALTER TABLE `bado`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `principal`
--
ALTER TABLE `principal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `bado`
--
ALTER TABLE `bado`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `principal`
--
ALTER TABLE `principal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=42;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
