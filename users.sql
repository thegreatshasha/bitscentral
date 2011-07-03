-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 11, 2011 at 03:27 PM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `users`
--

-- --------------------------------------------------------

--
-- Table structure for table `shashu`
--

CREATE TABLE IF NOT EXISTS `shashu` (
  `AAOC$C111_l` int(11) DEFAULT NULL,
  `AAOC$C111_t` int(11) DEFAULT NULL,
  `TA$C111_l` int(11) DEFAULT NULL,
  `TA$C111_t` int(11) DEFAULT NULL,
  `TA$C111_p` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shashu`
--

INSERT INTO `shashu` (`AAOC$C111_l`, `AAOC$C111_t`, `TA$C111_l`, `TA$C111_t`, `TA$C111_p`) VALUES
(1, 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `soso`
--

CREATE TABLE IF NOT EXISTS `soso` (
  `TA$C111_l` int(11) DEFAULT NULL,
  `TA$C111_t` int(11) DEFAULT NULL,
  `TA$C111_p` int(11) DEFAULT NULL,
  `BIO$C111_l` int(11) DEFAULT NULL,
  `BIO$C111_t` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `soso`
--

INSERT INTO `soso` (`TA$C111_l`, `TA$C111_t`, `TA$C111_p`, `BIO$C111_l`, `BIO$C111_t`) VALUES
(1, 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `userdata`
--

CREATE TABLE IF NOT EXISTS `userdata` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text,
  `username` text,
  `password` text,
  `email` text,
  `phoneno` int(11) DEFAULT NULL,
  `screenshot` text NOT NULL,
  `hostel` varchar(30) NOT NULL,
  `roomno` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `userdata`
--

INSERT INTO `userdata` (`id`, `name`, `username`, `password`, `email`, `phoneno`, `screenshot`, `hostel`, `roomno`) VALUES
(10, 'shashwat', 'soso', 'soso', 'soso', 980, 'images/button(1).png', 'AH8', 98),
(9, 'shashwat', 'shashu', 'ultear', 'thegreatshasha@gmail.com', 2147483647, 'images/gogreen.png', 'AH8', 243);
