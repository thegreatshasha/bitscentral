-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 11, 2011 at 03:26 PM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bitscentral`
--

-- --------------------------------------------------------

--
-- Table structure for table `hostels`
--

CREATE TABLE IF NOT EXISTS `hostels` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `hostel` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `hostels`
--

INSERT INTO `hostels` (`id`, `hostel`) VALUES
(1, 'AH8'),
(2, 'AH7'),
(3, 'AH1'),
(4, 'AH2'),
(5, 'AH3'),
(6, 'AH4'),
(7, 'AH5'),
(8, 'AH6'),
(9, 'CH1'),
(11, 'CH2'),
(12, 'CH3'),
(13, 'CH4'),
(14, 'CH5'),
(15, 'CH6');

-- --------------------------------------------------------

--
-- Table structure for table `subjectdata`
--

CREATE TABLE IF NOT EXISTS `subjectdata` (
  `courseno` varchar(10) DEFAULT NULL,
  `comcode` int(11) DEFAULT NULL,
  `credits` text,
  `compredate` text,
  `title` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subjectdata`
--

INSERT INTO `subjectdata` (`courseno`, `comcode`, `credits`, `compredate`, `title`) VALUES
('AAOC$C111', 515, '3/-/3', '06/05/11(AN)', 'prob n stat'),
('BIO$C111', 469, '3/-/3', '09/05/11(AN)', 'general biology'),
('CHEM$C142', NULL, '3/-/3', '04/05/11(AN)', 'chemistry 2'),
('MATH$C192', 715, '3/-/3', '11/05/11(FN)', 'maths 2'),
('PHY$C132', 29, '3/-/3', '02/05/11(AN)', 'physics 2'),
('TA$C111', 494, '2/4/4', NULL, 'engineering graphics'),
('TA$C112', 495, '2/4/4', '09/05/11(AN)', 'workshop practice'),
('TA$C162', 720, '3/-/3', '13/05/11(FN)', 'computer programming 1');

-- --------------------------------------------------------

--
-- Table structure for table `subjectdetails`
--

CREATE TABLE IF NOT EXISTS `subjectdetails` (
  `courseno` varchar(10) DEFAULT NULL,
  `sec` varchar(10) DEFAULT NULL,
  `instructor` text,
  `room` varchar(15) DEFAULT NULL,
  `days` varchar(50) DEFAULT NULL,
  `tut` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subjectdetails`
--

INSERT INTO `subjectdetails` (`courseno`, `sec`, `instructor`, `room`, `days`, `tut`) VALUES
('AAOC$C111', '1/L', 'REETA S. DUBEY', 'C301', 'M/W/F-9', 'T/1-C301'),
('AAOC$C111', '2/L', 'AMIT SETIA', 'C302', 'M/W/F-9', 'T/1-C302'),
('AAOC$C111', '3/L', 'JAJATI KESHARI SAHOO', 'C402', 'M/W/F-9', 'T/1-C402'),
('AAOC$C111', '4/L', 'BIJIL PRAKASH', 'C405', 'M/W/F-9', 'T/1-C405'),
('TA$C111', '1/P', 'DILIP', '', 'M/W-4,5', ''),
('TA$C111', '1/L', 'ABC', 'LT1', 'T/Th-9', ''),
('TA$C111', '1/T', 'VIKAS', '', '', 'W/1-LT1'),
('BIO$C111', '1/L', 'SABY JOHN K/JUDITH BRAGANCA', 'LT1', 'M/W/F-3', ''),
('BIO$C111', '1/T', 'K. PRAKASH CHUDALAYANDI', '', '', 'T/1-C303'),
('BIO$C111', '2/T', 'SABY JOHN K', '', '', 'T/1-C403'),
('BIO$C111', '3/T', 'MEENAL KOWSHIK', '', '', 'Th/8-C301'),
('BIO$C111', '4/T', 'JUDITH BRAGANCA', '', '', 'Th/8-C307'),
('BIO$C111', '5/T', 'GAUTAM KRISHNAN', '', '', 'T/1-A601'),
('BIO$C111', '6/T', 'SAVITHA D', '', '', 'T/1-A506');
