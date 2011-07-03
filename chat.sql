-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 03, 2011 at 08:37 AM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `chat`
--

-- --------------------------------------------------------

--
-- Table structure for table `ajax_chat_bans`
--

CREATE TABLE IF NOT EXISTS `ajax_chat_bans` (
  `userID` int(11) NOT NULL,
  `userName` varchar(64) COLLATE utf8_bin NOT NULL,
  `dateTime` datetime NOT NULL,
  `ip` varbinary(16) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `ajax_chat_bans`
--


-- --------------------------------------------------------

--
-- Table structure for table `ajax_chat_invitations`
--

CREATE TABLE IF NOT EXISTS `ajax_chat_invitations` (
  `userID` int(11) NOT NULL,
  `channel` int(11) NOT NULL,
  `dateTime` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `ajax_chat_invitations`
--

INSERT INTO `ajax_chat_invitations` (`userID`, `channel`, `dateTime`) VALUES
(423558631, 500000001, '2011-06-09 05:18:49');

-- --------------------------------------------------------

--
-- Table structure for table `ajax_chat_messages`
--

CREATE TABLE IF NOT EXISTS `ajax_chat_messages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userID` int(11) NOT NULL,
  `userName` varchar(64) COLLATE utf8_bin NOT NULL,
  `userRole` int(1) NOT NULL,
  `channel` int(11) NOT NULL,
  `dateTime` datetime NOT NULL,
  `ip` varbinary(16) NOT NULL,
  `text` text COLLATE utf8_bin,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=219 ;

--
-- Dumping data for table `ajax_chat_messages`
--

INSERT INTO `ajax_chat_messages` (`id`, `userID`, `userName`, `userRole`, `channel`, `dateTime`, `ip`, `text`) VALUES
(1, 2147483647, 'ChatBot', 4, 0, '2011-06-08 23:18:10', '\0\0', '/login admin'),
(2, 1, 'admin', 3, 0, '2011-06-08 23:18:18', '\0\0', 'hey dude'),
(3, 1, 'admin', 3, 0, '2011-06-08 23:19:23', '\0\0', 'nah i''ll pass'),
(4, 1, 'admin', 3, 0, '2011-06-08 23:19:42', '\0\0', 'i mean really can u believe it'),
(5, 1, 'admin', 3, 0, '2011-06-08 23:19:55', '\0\0', 'i am chaatting wid'),
(6, 1, 'admin', 3, 0, '2011-06-08 23:30:52', '\0\0', 'hooohah'),
(7, 1, 'admin', 3, 0, '2011-06-08 23:31:08', '\0\0', 'i can''t believe u said that'),
(8, 1, 'admin', 3, 0, '2011-06-08 23:31:24', '\0\0', 'coolah'),
(9, 1, 'admin', 3, 0, '2011-06-08 23:31:26', '\0\0', 'ibi'),
(10, 1, 'admin', 3, 0, '2011-06-08 23:31:27', '\0\0', 'jnbi'),
(11, 1, 'admin', 3, 0, '2011-06-08 23:32:11', '\0\0', 'i mean can u believe that kid'),
(12, 1, 'admin', 3, 0, '2011-06-08 23:32:27', '\0\0', 'yeah actually how will u'),
(13, 1, 'admin', 3, 0, '2011-06-08 23:32:38', '\0\0', 'nah u guess i will pass'),
(14, 1, 'admin', 3, 0, '2011-06-08 23:32:43', '\0\0', ':P'),
(15, 1, 'admin', 3, 0, '2011-06-08 23:32:59', '\0\0', '[code]echo ''chutiya''[/code]'),
(16, 1, 'admin', 3, 0, '2011-06-08 23:33:08', '\0\0', '[img]h.jpg[/img]'),
(17, 1, 'admin', 3, 0, '2011-06-08 23:33:25', '\0\0', '[color=aqua][/color]kjbk'),
(18, 1, 'admin', 3, 0, '2011-06-08 23:33:30', '\0\0', '[color=aqua][/color]'),
(19, 1, 'admin', 3, 0, '2011-06-08 23:33:36', '\0\0', '[color=lime]kjbjkjbhjkkj[/color]'),
(20, 1, 'admin', 3, 0, '2011-06-08 23:33:39', '\0\0', 'lkjnkl'),
(21, 1, 'admin', 3, 0, '2011-06-08 23:33:51', '\0\0', '[color=lime]limelight be[/color]'),
(22, 1, 'admin', 3, 0, '2011-06-08 23:34:09', '\0\0', '[color=red]tere ko main chutiya lagta hoon kya[/color]'),
(23, 1, 'admin', 3, 0, '2011-06-08 23:34:57', '\0\0', '[color=green]kb[/color]'),
(24, 1, 'admin', 3, 0, '2011-06-08 23:34:58', '\0\0', 'kjb'),
(25, 1, 'admin', 3, 0, '2011-06-08 23:35:34', '\0\0', '[color=teal]jn[/color]'),
(26, 1, 'admin', 3, 0, '2011-06-08 23:35:36', '\0\0', '[color=teal]kinn[/color]'),
(27, 1, 'admin', 3, 0, '2011-06-08 23:37:49', '\0\0', '[color=teal]open source mast ra[/color]'),
(28, 1, 'admin', 3, 0, '2011-06-08 23:37:56', '\0\0', '[color=teal][i]hvv[/i][/color]'),
(29, 1, 'admin', 3, 0, '2011-06-08 23:37:57', '\0\0', '[color=teal]jbj[/color]'),
(30, 1, 'admin', 3, 0, '2011-06-08 23:38:29', '\0\0', '[color=teal]:idea:[/color]'),
(31, 1, 'admin', 3, 0, '2011-06-08 23:38:38', '\0\0', '[color=teal]let''s do this[/color]'),
(33, 2147483647, 'ChatBot', 4, 0, '2011-06-08 23:54:45', '\0\0', '/delete 32'),
(34, 1, 'admin', 3, 0, '2011-06-08 23:55:06', '\0\0', 'ugadi'),
(35, 1, 'admin', 3, 0, '2011-06-08 23:55:09', '\0\0', 'afevger'),
(36, 1, 'admin', 3, 0, '2011-06-08 23:55:13', '\0\0', 'qwe'),
(37, 1, 'admin', 3, 0, '2011-06-08 23:56:58', '\0\0', 'i am chatting to myself how lame is that'),
(38, 1, 'admin', 3, 0, '2011-06-09 00:54:41', '\0\0', '[color=teal]uhoh[/color]'),
(39, 2147483647, 'ChatBot', 4, 0, '2011-06-09 00:55:27', '\0\0', '/logout admin'),
(40, 2147483647, 'ChatBot', 4, 0, '2011-06-09 00:56:55', '\0\0', '/login (776343)'),
(41, 472536414, '(776343)', 0, 0, '2011-06-09 00:57:03', '\0\0', '[color=teal]hello[/color]'),
(42, 472536414, '(776343)', 0, 0, '2011-06-09 00:57:13', '\0\0', '[color=teal]i mean is anyone here[/color]'),
(43, 2147483647, 'ChatBot', 4, 0, '2011-06-09 01:49:52', '\0\0', '/logout (776343)'),
(44, 2147483647, 'ChatBot', 4, 0, '2011-06-09 01:55:43', '\0\0', '/login ohlala'),
(45, 4, 'ohlala', 1, 0, '2011-06-09 01:55:51', '\0\0', '[color=teal]so i''m good[/color]'),
(46, 4, 'ohlala', 1, 0, '2011-06-09 01:56:14', '\0\0', '[color=teal]aef[/color]'),
(47, 2147483647, 'ChatBot', 4, 0, '2011-06-09 01:56:16', '\0\0', '/logout ohlala'),
(48, 2147483647, 'ChatBot', 4, 0, '2011-06-09 02:00:15', '\0\0', '/login ohlala'),
(49, 4, 'ohlala', 1, 0, '2011-06-09 02:00:27', '\0\0', '[color=teal]so this chatroom good eh[/color]'),
(50, 4, 'ohlala', 1, 0, '2011-06-09 02:00:40', '\0\0', '[color=teal]actually i''m smart[/color]'),
(51, 2147483647, 'ChatBot', 4, 0, '2011-06-09 02:03:29', '\0\0', '/logout ohlala'),
(52, 2147483647, 'ChatBot', 4, 0, '2011-06-09 02:34:23', '\0\0', '/login (guest)'),
(53, 428154273, '(guest)', 0, 0, '2011-06-09 02:34:46', '\0\0', '[color=teal]hello[/color]'),
(54, 428154273, '(guest)', 0, 0, '2011-06-09 02:36:16', '\0\0', '[color=teal]NL[/color]'),
(55, 428154273, '(guest)', 0, 0, '2011-06-09 02:36:19', '\0\0', '[color=teal];M[/color]'),
(56, 2147483647, 'ChatBot', 4, 0, '2011-06-09 02:36:27', '\0\0', '/logout (guest)'),
(57, 2147483647, 'ChatBot', 4, 0, '2011-06-09 02:36:30', '\0\0', '/login (POP)'),
(58, 464456514, '(POP)', 0, 0, '2011-06-09 02:36:39', '\0\0', '[color=teal]AM I SMART[/color]'),
(59, 464456514, '(POP)', 0, 0, '2011-06-09 02:36:43', '\0\0', '[color=teal]OB RA[/color]'),
(60, 464456514, '(POP)', 0, 0, '2011-06-09 02:37:07', '\0\0', '[color=teal]OHLALA[/color]'),
(61, 464456514, '(POP)', 0, 0, '2011-06-09 02:37:24', '\0\0', '[color=teal]YEAH[/color]'),
(62, 464456514, '(POP)', 0, 0, '2011-06-09 02:37:27', '\0\0', '[color=teal]SO COOL[/color]'),
(63, 464456514, '(POP)', 0, 0, '2011-06-09 02:37:41', '\0\0', '[color=maroon]NO MUSAI SAN[/color]'),
(64, 464456514, '(POP)', 0, 0, '2011-06-09 02:37:47', '\0\0', '[color=maroon]YOU MUSTN''T[/color]'),
(65, 464456514, '(POP)', 0, 0, '2011-06-09 02:37:56', '\0\0', '[color=maroon]BAN[/color]'),
(66, 464456514, '(POP)', 0, 0, '2011-06-09 02:38:02', '\0\0', '[color=maroon][code]BAN[/code][/color]'),
(67, 2147483647, 'ChatBot', 4, 0, '2011-06-09 02:42:30', '\0\0', '/logout (POP)'),
(68, 2147483647, 'ChatBot', 4, 0, '2011-06-09 02:43:53', '\0\0', '/login (guest)'),
(69, 2147483647, 'ChatBot', 4, 0, '2011-06-09 02:43:56', '\0\0', '/logout (guest)'),
(70, 2147483647, 'ChatBot', 4, 0, '2011-06-09 02:54:52', '\0\0', '/login (mozilla)'),
(71, 438756607, '(mozilla)', 0, 0, '2011-06-09 02:55:03', '\0\0', '[color=maroon]yeah cool[/color]'),
(72, 438756607, '(mozilla)', 0, 0, '2011-06-09 02:55:06', '\0\0', '[color=maroon]man[/color]'),
(73, 438756607, '(mozilla)', 0, 0, '2011-06-09 02:55:19', '\0\0', '[color=maroon]i mean who would like[/color]'),
(74, 2147483647, 'ChatBot', 4, 1438756607, '2011-06-09 02:55:21', '\0\0', '/who (mozilla)'),
(75, 2147483647, 'ChatBot', 4, 0, '2011-06-09 02:55:33', '\0\0', '/roll (mozilla) 1d6 4'),
(76, 2147483647, 'ChatBot', 4, 0, '2011-06-09 02:55:39', '\0\0', '/roll (mozilla) 1d6 5'),
(77, 2147483647, 'ChatBot', 4, 0, '2011-06-09 02:55:41', '\0\0', '/roll (mozilla) 1d6 5'),
(78, 2147483647, 'ChatBot', 4, 0, '2011-06-09 02:55:51', '\0\0', '/nick (mozilla) (ohlala)'),
(79, 438756607, '(ohlala)', 0, 0, '2011-06-09 02:55:59', '\0\0', '[color=maroon]ohmy god[/color]'),
(80, 438756607, '(ohlala)', 0, 0, '2011-06-09 02:56:11', '\0\0', '[color=maroon]i mean these chatrooms are so cool[/color]'),
(81, 438756607, '(ohlala)', 0, 0, '2011-06-09 02:56:20', '\0\0', '[color=maroon]no u mustn''t[/color]'),
(82, 2147483647, 'ChatBot', 4, 0, '2011-06-09 02:56:27', '\0\0', '/logout (ohlala)'),
(83, 2147483647, 'ChatBot', 4, 0, '2011-06-09 02:56:39', '\0\0', '/login admin'),
(84, 1, 'admin', 3, 0, '2011-06-09 02:57:07', '\0\0', '[color=maroon]k cool[/color]'),
(85, 1, 'admin', 3, 0, '2011-06-09 03:52:05', '\0\0', '[color=maroon]yo now i am waiting here[/color]'),
(86, 2147483647, 'ChatBot', 4, 0, '2011-06-09 03:52:11', '\0\0', '/channelLeave admin'),
(87, 2147483647, 'ChatBot', 4, 1, '2011-06-09 03:52:11', '\0\0', '/channelEnter admin'),
(88, 1, 'admin', 3, 1, '2011-06-09 03:52:30', '\0\0', '[color=maroon][quote]ll[/quote][/color]'),
(89, 2147483647, 'ChatBot', 4, 0, '2011-06-09 05:10:11', '\0\0', '/login (shashwat)'),
(90, 2147483647, 'ChatBot', 4, 1, '2011-06-09 05:10:16', '\0\0', '/logout admin Timeout'),
(91, 2147483647, 'ChatBot', 4, 1467079942, '2011-06-09 05:10:47', '\0\0', '/who (shashwat)'),
(92, 2147483647, 'ChatBot', 4, 0, '2011-06-09 05:11:25', '\0\0', '/login (rohan)'),
(93, 2147483647, 'ChatBot', 4, 0, '2011-06-09 05:11:39', '\0\0', '/nick (shashwat) (admin)'),
(94, 2147483647, 'ChatBot', 4, 1467079942, '2011-06-09 05:11:45', '\0\0', '/who (admin) (rohan)'),
(95, 467079942, '(admin)', 0, 1467079942, '2011-06-09 05:11:59', '\0\0', '/privmsgto (rohan) [color=maroon]hey rohan how are u[/color]'),
(96, 467079942, '(admin)', 0, 1491358388, '2011-06-09 05:11:59', '\0\0', '/privmsg [color=maroon]hey rohan how are u[/color]'),
(97, 2147483647, 'ChatBot', 4, 1467079942, '2011-06-09 05:12:24', '\0\0', '/queryOpen (rohan)'),
(98, 467079942, '(admin)', 0, 1467079942, '2011-06-09 05:12:31', '\0\0', '/privmsgto (rohan) [color=maroon]hey dude[/color]'),
(99, 467079942, '(admin)', 0, 1491358388, '2011-06-09 05:12:31', '\0\0', '/privmsg [color=maroon]hey dude[/color]'),
(100, 467079942, '(admin)', 0, 1467079942, '2011-06-09 05:12:49', '\0\0', '/privmsgto (rohan) [color=maroon]i mean can u believe it[/color]'),
(101, 467079942, '(admin)', 0, 1491358388, '2011-06-09 05:12:49', '\0\0', '/privmsg [color=maroon]i mean can u believe it[/color]'),
(102, 2147483647, 'ChatBot', 4, 1467079942, '2011-06-09 05:13:02', '\0\0', '/whereis (rohan) Public'),
(103, 2147483647, 'ChatBot', 4, 1467079942, '2011-06-09 05:13:05', '\0\0', '/whereis (rohan) Public'),
(104, 467079942, '(admin)', 0, 1467079942, '2011-06-09 05:13:19', '\0\0', '/privactionto (rohan) [color=maroon][/color]'),
(105, 467079942, '(admin)', 0, 1491358388, '2011-06-09 05:13:19', '\0\0', '/privaction [color=maroon][/color]'),
(106, 2147483647, 'ChatBot', 4, 1467079942, '2011-06-09 05:13:26', '\0\0', '/who (admin) (rohan)'),
(107, 2147483647, 'ChatBot', 4, 1467079942, '2011-06-09 05:13:47', '\0\0', '/who (admin) (rohan)'),
(108, 2147483647, 'ChatBot', 4, 0, '2011-06-09 05:13:53', '\0\0', '/logout (admin)'),
(109, 2147483647, 'ChatBot', 4, 0, '2011-06-09 05:14:00', '\0\0', '/login admin'),
(110, 1, 'admin', 3, 0, '2011-06-09 05:14:10', '\0\0', '[color=maroon]hwllo[/color]'),
(111, 491358388, '(rohan)', 0, 0, '2011-06-09 05:14:21', '\0\0', 'wef'),
(112, 2147483647, 'ChatBot', 4, 1000000001, '2011-06-09 05:14:27', '\0\0', '/who (rohan) admin'),
(113, 2147483647, 'ChatBot', 4, 1000000001, '2011-06-09 05:14:34', '\0\0', '/whois (rohan) 127.0.0.1'),
(114, 2147483647, 'ChatBot', 4, 1000000001, '2011-06-09 05:14:42', '\0\0', '/queryOpen (rohan)'),
(115, 1, 'admin', 3, 1000000001, '2011-06-09 05:14:48', '\0\0', '/privmsgto (rohan) [color=maroon]haan listen quick[/color]'),
(116, 1, 'admin', 3, 1491358388, '2011-06-09 05:14:48', '\0\0', '/privmsg [color=maroon]haan listen quick[/color]'),
(117, 1, 'admin', 3, 1000000001, '2011-06-09 05:14:57', '\0\0', '/privmsgto (rohan) [color=maroon]i am just telling u this[/color]'),
(118, 1, 'admin', 3, 1491358388, '2011-06-09 05:14:57', '\0\0', '/privmsg [color=maroon]i am just telling u this[/color]'),
(119, 1, 'admin', 3, 1000000001, '2011-06-09 05:15:08', '\0\0', '/privmsgto (rohan) [color=maroon]this really is me and noone else[/color]'),
(120, 1, 'admin', 3, 1491358388, '2011-06-09 05:15:08', '\0\0', '/privmsg [color=maroon]this really is me and noone else[/color]'),
(121, 2147483647, 'ChatBot', 4, 1000000001, '2011-06-09 05:15:13', '\0\0', '/queryClose (rohan)'),
(122, 2147483647, 'ChatBot', 4, 0, '2011-06-09 05:15:20', '\0\0', '/kick (rohan)'),
(123, 2147483647, 'ChatBot', 4, 1000000001, '2011-06-09 05:15:36', '\0\0', '/bans (rohan)'),
(124, 2147483647, 'ChatBot', 4, 1000000001, '2011-06-09 05:15:37', '\0\0', '/unban (rohan)'),
(125, 2147483647, 'ChatBot', 4, 0, '2011-06-09 05:15:45', '\0\0', '/login (rohan)'),
(126, 423558631, '(rohan)', 0, 0, '2011-06-09 05:15:55', '\0\0', 'please please please unban me'),
(127, 1, 'admin', 3, 0, '2011-06-09 05:16:04', '\0\0', '[color=maroon]ok since you ask me so much[/color]'),
(128, 1, 'admin', 3, 0, '2011-06-09 05:16:09', '\0\0', '[color=maroon]unban[/color]'),
(129, 1, 'admin', 3, 0, '2011-06-09 05:18:07', '\0\0', '[color=maroon]asynchronous file handelling[/color]'),
(130, 2147483647, 'ChatBot', 4, 1000000001, '2011-06-09 05:18:12', '\0\0', '/error MissingUserName'),
(131, 2147483647, 'ChatBot', 4, 1000000001, '2011-06-09 05:18:18', '\0\0', '/whois (rohan) 127.0.0.1'),
(132, 2147483647, 'ChatBot', 4, 0, '2011-06-09 05:18:21', '\0\0', '/channelLeave admin'),
(133, 2147483647, 'ChatBot', 4, 500000001, '2011-06-09 05:18:21', '\0\0', '/channelEnter admin'),
(134, 2147483647, 'ChatBot', 4, 1000000001, '2011-06-09 05:18:27', '\0\0', '/error UserNameNotFound (rohan)'),
(135, 423558631, '(rohan)', 0, 0, '2011-06-09 05:18:36', '\0\0', 'ds'),
(136, 2147483647, 'ChatBot', 4, 1000000001, '2011-06-09 05:18:40', '\0\0', '/who (rohan) admin'),
(137, 2147483647, 'ChatBot', 4, 1000000001, '2011-06-09 05:18:49', '\0\0', '/inviteto (rohan) [admin]'),
(138, 2147483647, 'ChatBot', 4, 1423558631, '2011-06-09 05:18:49', '\0\0', '/invite admin [admin]'),
(139, 2147483647, 'ChatBot', 4, 0, '2011-06-09 05:18:56', '\0\0', '/channelLeave (rohan)'),
(140, 2147483647, 'ChatBot', 4, 500000001, '2011-06-09 05:18:56', '\0\0', '/channelEnter (rohan)'),
(141, 423558631, '(rohan)', 0, 500000001, '2011-06-09 05:19:09', '\0\0', 'now now don''t be hasty my friend'),
(142, 423558631, '(rohan)', 0, 500000001, '2011-06-09 05:19:13', '\0\0', 'you shall win'),
(143, 423558631, '(rohan)', 0, 500000001, '2011-06-09 05:19:33', '\0\0', 'i mean'),
(144, 423558631, '(rohan)', 0, 500000001, '2011-06-09 05:19:41', '\0\0', 'http://localhost'),
(145, 2147483647, 'ChatBot', 4, 1423558631, '2011-06-09 05:20:04', '\0\0', '/error UnknownCommand /home/shashwat'),
(146, 423558631, '(rohan)', 0, 500000001, '2011-06-09 05:20:45', '\0\0', 'file:///bin/'),
(147, 423558631, '(rohan)', 0, 500000001, '2011-06-09 05:22:32', '\0\0', 'isn''t this cool'),
(148, 423558631, '(rohan)', 0, 500000001, '2011-06-09 05:22:45', '\0\0', 'yeah for direct file transfer'),
(149, 2147483647, 'ChatBot', 4, 500000001, '2011-06-09 05:46:00', '\0\0', '/logout admin Timeout'),
(150, 2147483647, 'ChatBot', 4, 0, '2011-06-09 06:29:03', '\0\0', '/login (sanouske)'),
(151, 2147483647, 'ChatBot', 4, 500000001, '2011-06-09 06:29:08', '\0\0', '/logout (rohan) Timeout'),
(152, 424370454, '(sanouske)', 0, 0, '2011-06-09 06:29:18', '\0\0', '[color=maroon]yo so this chatrrom continues huh[/color]'),
(153, 2147483647, 'ChatBot', 4, 0, '2011-06-09 06:30:17', '\0\0', '/roll (sanouske) 1d6 3'),
(154, 2147483647, 'ChatBot', 4, 0, '2011-06-09 06:30:22', '\0\0', '/roll (sanouske) 1d6 4'),
(155, 2147483647, 'ChatBot', 4, 0, '2011-06-09 06:30:24', '\0\0', '/roll (sanouske) 1d6 1'),
(156, 2147483647, 'ChatBot', 4, 0, '2011-06-09 06:30:26', '\0\0', '/roll (sanouske) 1d6 4'),
(157, 424370454, '(sanouske)', 0, 0, '2011-06-09 06:31:26', '\0\0', '[color=fuchsia]welcome[/color]'),
(158, 424370454, '(sanouske)', 0, 0, '2011-06-09 06:31:35', '\0\0', '[color=fuchsia]i am epiphany[/color]'),
(159, 424370454, '(sanouske)', 0, 0, '2011-06-09 06:31:50', '\0\0', '[color=fuchsia][u]y do u think that way[/u][/color]'),
(160, 2147483647, 'ChatBot', 4, 0, '2011-06-09 06:35:55', '\0\0', '/login (urabe)'),
(161, 2147483647, 'ChatBot', 4, 0, '2011-06-09 06:35:57', '\0\0', '/logout (sanouske) Timeout'),
(162, 431058018, '(urabe)', 0, 0, '2011-06-09 06:36:04', '\0\0', 'yeah true'),
(163, 2147483647, 'ChatBot', 4, 0, '2011-06-09 06:36:20', '\0\0', '/login (sanouske)'),
(164, 452139621, '(sanouske)', 0, 0, '2011-06-09 06:36:32', '\0\0', '[color=fuchsia]actually yeah[/color]'),
(165, 452139621, '(sanouske)', 0, 0, '2011-06-09 06:36:44', '\0\0', '[color=fuchsia]i mean why don''t u think so[/color]'),
(166, 2147483647, 'ChatBot', 4, 1452139621, '2011-06-09 06:36:48', '\0\0', '/error MissingUserName'),
(167, 2147483647, 'ChatBot', 4, 0, '2011-06-09 06:36:57', '\0\0', '/nick (sanouske) (amatsuki)'),
(168, 2147483647, 'ChatBot', 4, 1452139621, '2011-06-09 06:37:06', '\0\0', '/who (amatsuki) (urabe)'),
(169, 2147483647, 'ChatBot', 4, 1452139621, '2011-06-09 06:37:15', '\0\0', '/error UserNameInUse'),
(170, 452139621, '(amatsuki)', 0, 0, '2011-06-09 06:37:24', '\0\0', '[color=fuchsia]hoohah[/color]'),
(171, 2147483647, 'ChatBot', 4, 0, '2011-06-09 06:37:35', '\0\0', '/nick (amatsuki) (admin)'),
(172, 2147483647, 'ChatBot', 4, 1452139621, '2011-06-09 06:37:42', '\0\0', '/error UnknownCommand /logout'),
(173, 2147483647, 'ChatBot', 4, 1452139621, '2011-06-09 06:37:51', '\0\0', '/error UnknownCommand /ban'),
(174, 2147483647, 'ChatBot', 4, 1452139621, '2011-06-09 06:37:55', '\0\0', '/error CommandNotAllowed /kick'),
(175, 452139621, '(admin)', 0, 0, '2011-06-09 06:38:10', '\0\0', '/action [color=fuchsia]:o)[/color]'),
(176, 452139621, '(admin)', 0, 0, '2011-06-09 06:38:17', '\0\0', '[color=fuchsia]:D[/color]'),
(177, 431058018, '(urabe)', 0, 0, '2011-06-09 06:40:50', '\0\0', ':idea'),
(178, 431058018, '(urabe)', 0, 0, '2011-06-09 06:40:55', '\0\0', ':idea:'),
(179, 431058018, '(urabe)', 0, 0, '2011-06-09 06:41:01', '\0\0', ':love:'),
(180, 431058018, '(urabe)', 0, 0, '2011-06-09 06:41:12', '\0\0', '8o'),
(181, 431058018, '(urabe)', 0, 0, '2011-06-09 06:41:18', '\0\0', ':)'),
(182, 431058018, '(urabe)', 0, 0, '2011-06-09 06:41:21', '\0\0', ':('),
(183, 431058018, '(urabe)', 0, 0, '2011-06-09 06:41:24', '\0\0', ';)'),
(184, 431058018, '(urabe)', 0, 0, '2011-06-09 06:41:27', '\0\0', ':P'),
(185, 431058018, '(urabe)', 0, 0, '2011-06-09 06:49:48', '\0\0', 'fgdgfbg'),
(186, 431058018, '(urabe)', 0, 0, '2011-06-09 06:53:44', '\0\0', ':sex:'),
(187, 431058018, '(urabe)', 0, 0, '2011-06-09 06:54:06', '\0\0', ':sex:'),
(188, 431058018, '(urabe)', 0, 0, '2011-06-09 06:54:08', '\0\0', ':sex:'),
(189, 431058018, '(urabe)', 0, 0, '2011-06-09 06:54:11', '\0\0', ':sex:'),
(190, 431058018, '(urabe)', 0, 0, '2011-06-09 06:54:18', '\0\0', ':sex;'),
(191, 431058018, '(urabe)', 0, 0, '2011-06-09 06:54:19', '\0\0', ':sex;'),
(192, 431058018, '(urabe)', 0, 0, '2011-06-09 06:54:20', '\0\0', ':sex;'),
(193, 431058018, '(urabe)', 0, 0, '2011-06-09 06:54:24', '\0\0', ':sex:'),
(194, 431058018, '(urabe)', 0, 0, '2011-06-09 06:54:30', '\0\0', ':sex:'),
(195, 431058018, '(urabe)', 0, 0, '2011-06-09 06:54:31', '\0\0', ':sex:'),
(196, 431058018, '(urabe)', 0, 0, '2011-06-09 06:54:32', '\0\0', ':sex:'),
(197, 431058018, '(urabe)', 0, 0, '2011-06-09 06:54:32', '\0\0', ':sex:'),
(198, 431058018, '(urabe)', 0, 0, '2011-06-09 06:54:33', '\0\0', ':sex:'),
(199, 431058018, '(urabe)', 0, 0, '2011-06-09 06:54:34', '\0\0', ':sex:'),
(200, 431058018, '(urabe)', 0, 0, '2011-06-09 06:54:35', '\0\0', ':sex:'),
(201, 431058018, '(urabe)', 0, 0, '2011-06-09 06:58:28', '\0\0', ':angry:'),
(202, 431058018, '(urabe)', 0, 0, '2011-06-09 07:00:47', '\0\0', 'qqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqq'),
(203, 431058018, '(urabe)', 0, 0, '2011-06-09 07:00:57', '\0\0', 'you indeed are irritating'),
(204, 431058018, '(urabe)', 0, 0, '2011-06-09 07:01:05', '\0\0', '>:-D'),
(205, 2147483647, 'ChatBot', 4, 0, '2011-06-09 07:06:33', '\0\0', '/logout (urabe) Timeout'),
(206, 2147483647, 'ChatBot', 4, 0, '2011-06-09 17:24:13', '\0\0', '/login (shasha)'),
(207, 2147483647, 'ChatBot', 4, 0, '2011-06-09 17:24:15', '\0\0', '/logout (admin) Timeout'),
(208, 415255909, '(shasha)', 0, 0, '2011-06-09 17:24:23', '\0\0', ':home:'),
(209, 415255909, '(shasha)', 0, 0, '2011-06-09 17:24:28', '\0\0', ':sex:'),
(210, 415255909, '(shasha)', 0, 0, '2011-06-09 17:24:32', '\0\0', ':o)'),
(211, 2147483647, 'ChatBot', 4, 0, '2011-06-11 02:53:25', '\0\0', '/login (shusha)'),
(212, 2147483647, 'ChatBot', 4, 0, '2011-06-11 02:53:27', '\0\0', '/logout (shasha) Timeout'),
(213, 467351175, '(shusha)', 0, 0, '2011-06-11 02:53:33', '\0\0', 'hello'),
(214, 467351175, '(shusha)', 0, 0, '2011-06-11 02:53:36', '\0\0', 'bitches'),
(215, 467351175, '(shusha)', 0, 0, '2011-06-11 02:53:38', '\0\0', 'yo'),
(216, 467351175, '(shusha)', 0, 0, '2011-06-11 02:53:43', '\0\0', 'are u gay'),
(217, 467351175, '(shusha)', 0, 0, '2011-06-11 02:53:48', '\0\0', 'no i''m not'),
(218, 2147483647, 'ChatBot', 4, 0, '2011-06-11 02:53:51', '\0\0', '/logout (shusha)');

-- --------------------------------------------------------

--
-- Table structure for table `ajax_chat_online`
--

CREATE TABLE IF NOT EXISTS `ajax_chat_online` (
  `userID` int(11) NOT NULL,
  `userName` varchar(64) COLLATE utf8_bin NOT NULL,
  `userRole` int(1) NOT NULL,
  `channel` int(11) NOT NULL,
  `dateTime` datetime NOT NULL,
  `ip` varbinary(16) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `ajax_chat_online`
--

