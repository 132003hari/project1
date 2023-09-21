-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 16, 2020 at 08:07 AM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_hors`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `admin_id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `username` varchar(24) NOT NULL,
  `password` varchar(24) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `name`, `username`, `password`) VALUES
(1, 'Administrator', 'Admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `cab`
--

CREATE TABLE IF NOT EXISTS `cab` (
  `cabid` int(10) NOT NULL,
  `cabtype` varchar(20) NOT NULL,
  `cabdetails` varchar(30) NOT NULL,
  `cabfacility` int(2) NOT NULL,
  `tariff` int(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cab`
--

INSERT INTO `cab` (`cabid`, `cabtype`, `cabdetails`, `cabfacility`, `tariff`) VALUES
(1, 'Shift', 'TN-03-SUA-22341', 4, 1400),
(2, 'volvo', 'TN-03-SUA-2345', 4, 1500),
(3, 'renaultduster', 'TN-SUA-1234', 5, 1500),
(4, 'maruthi', 'TN-03-SUA-4567', 5, 1500),
(5, 'hyndai', 'TN-03-SUA-7776', 6, 1500);

-- --------------------------------------------------------

--
-- Table structure for table `ctransaction`
--

CREATE TABLE IF NOT EXISTS `ctransaction` (
  `transaction_id` int(10) NOT NULL,
  `guest_id` int(10) NOT NULL,
  `cabid` int(20) NOT NULL,
  `cabtype` varchar(20) NOT NULL,
  `cabfacility` int(3) NOT NULL,
  `status` varchar(10) NOT NULL,
  `days` int(2) NOT NULL,
  `checkin` date NOT NULL,
  `checkin_time` time(6) NOT NULL,
  `checkout` date NOT NULL,
  `checkout_time` time(6) NOT NULL,
  `bill` int(6) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ctransaction`
--

INSERT INTO `ctransaction` (`transaction_id`, `guest_id`, `cabid`, `cabtype`, `cabfacility`, `status`, `days`, `checkin`, `checkin_time`, `checkout`, `checkout_time`, `bill`) VALUES
(1, 31, 8, '', 0, 'Check Out', 2, '2020-03-09', '16:36:23.000000', '2020-03-09', '16:36:36.000000', 0),
(2, 33, 5, '', 0, 'Check Out', 2, '2020-05-06', '15:51:01.000000', '2020-03-09', '15:51:09.000000', 0),
(3, 21, 3, 'Shift', 0, 'Check Out', 2, '2020-04-06', '02:27:36.000000', '2020-03-08', '02:34:05.000000', 0),
(4, 21, 4, 'Shift', 0, 'Check Out', 2, '2020-04-06', '02:27:56.000000', '2020-03-08', '02:48:48.000000', 0),
(5, 39, 2, 'Shift', 0, 'Check In', 2, '2020-03-08', '15:53:42.000000', '2020-03-09', '00:00:00.000000', 0),
(6, 21, 5, 'Shift', 0, 'Check Out', 2, '2020-04-09', '02:35:54.000000', '2020-03-08', '02:51:42.000000', 0),
(7, 21, 6, 'Shift', 0, 'Check Out', 2, '2020-06-06', '02:38:14.000000', '2020-03-08', '15:53:59.000000', 0),
(8, 47, 2, 'Shift', 0, 'Check Out', 2, '2020-06-09', '02:24:41.000000', '2020-03-08', '02:33:56.000000', 0),
(9, 55, 7, 'Shift', 0, 'Check Out', 2, '2020-07-11', '16:29:46.000000', '2020-03-09', '16:29:57.000000', 0),
(10, 56, 4, 'maruthi', 0, 'Pending', 0, '2020-05-11', '00:00:00.000000', '0000-00-00', '00:00:00.000000', 0),
(11, 61, 1, 'Shift', 0, 'Pending', 0, '2020-04-04', '00:00:00.000000', '0000-00-00', '00:00:00.000000', 0);

-- --------------------------------------------------------

--
-- Table structure for table `guest`
--

CREATE TABLE IF NOT EXISTS `guest` (
  `guest_id` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `middlename` varchar(30) NOT NULL,
  `lastname` varchar(40) NOT NULL,
  `address` varchar(50) NOT NULL,
  `contactno` varchar(13) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=102 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guest`
--

INSERT INTO `guest` (`guest_id`, `firstname`, `middlename`, `lastname`, `address`, `contactno`) VALUES
(1, 'awd', 'awdd', 'awd', 'awdaw', 'awdaw'),
(2, 'awd', 'dddd', 'dddd', 'ddd', 'ddd'),
(3, 'ajith', 'kumar', 'm', 'peelamedu', '7898456123'),
(4, 'sathish', 'kumar', 'a', 'ghandhipuram', '7898456123'),
(5, 'sathya', 'kumar', 'm', 'Hopes', '7898456123'),
(6, 'ajith', 'kumar', 'a', 'peelamedu', '7898456123'),
(7, 'sathya', 'kumar', 'a', 'Hopes', '7898456123'),
(8, 'priya', 'dharshini', 'r', 'ab nagar', '7858869342'),
(9, 'pavi', 'visu', 'r', 'ba nagar', '7858869342'),
(10, 'leka', 'shree', 'muthu', 'ab nagar', '3456787652'),
(11, 'leka', 'shree', 'muthu', 'ab nagar', '3456787652'),
(12, 'leka', 'shree', 'muthu', 'ab nagar', '3456787652'),
(13, 'leka', 'shree', 'muthu', 'ab nagar', '3456787652'),
(14, 'leka', 'shree', 'muthu', 'ab nagar', '3456787652'),
(15, 'priya', 'ram', 'r', 'ab nagar', '3456787652'),
(16, 'anita', 'bala', 'krishnan', 'ba nagar', '3456787652'),
(17, 'remya', 'vinoth', 'kannan', 'ab nagar', '3456787652'),
(18, 'sneha', 'kumar', 'r', 'ab nagar', '7858869342'),
(19, 'renu', 'kumar', 'r', 'ba nagar', '3456787652'),
(20, 'priya', 'ram', 'r', 'ab nagar', '3456787652'),
(21, 'anita', 'kumar', 'r', 'ba nagar', '3456787652'),
(22, 'anita', 'ram', 'r', 'ba nagar', '3456787652'),
(23, 'priya', 'ram', 'r', 'ab nagar', '3456787652'),
(24, 'anita', 'r', 'ram', 'ba nagar', '3456787652'),
(25, 'anita', 'r', 'r', 'ba nagar', '3456787652'),
(26, 'anita', 'r', 'r', 'ba nagar', '3456787652'),
(27, 'anita', 'r', 'r', 'ba nagar', '3456787652'),
(28, 'arthi', 'ram', 'r', 'ba nagar', '1234456671'),
(29, 'anita', 'r', 'r', 'ba nagar', '1234456671'),
(30, 'remya', 'vino', 'r', 're nagar', '5647654321'),
(31, 'renu', 'r', 'r', 'r nagar', '7656787654'),
(32, 'renu', 'r', 'r', 'r nagar', '7656787654'),
(33, 'leka', 'r', 'r', 'ba nagar', '5647654321'),
(34, 'leka', 'r', 'r', 'ba nagar', '5647654321'),
(35, 'anita', 'r', 'r', 'ba nagar', '3456787652'),
(36, 'anita', 'r', 'r', 'ba nagar', '3456787652'),
(37, 'anita', 'r', 'r', 'ba nagar', '3456787652'),
(38, 'anita', 'r', 'r', 'ba nagar', '3456787652'),
(39, 'priya', 'n', 'n', 'ab nagar', '3456787652'),
(40, 'anita', 'r', 'r', 'ba nagar', '3456787652'),
(41, 'anita', 'r', 'r', 'ba nagar', '3456787652'),
(42, 'anita', 'r', 'r', 'ba nagar', '3456787652'),
(43, 'anita', 'r', 'r', 'ba nagar', '3456787652'),
(44, 'ruba', 'r', 'n', 'anna nagar', '7656787654'),
(45, 'anita', 'r', 'r', 'ba nagar', '3456787652'),
(46, 'resa', 'r', 'n', 'ab nagar', '3456787652'),
(47, 'anita', 'd', 'b', 'ba nagar', '1234456671'),
(48, 'anita', 'd', 'b', 'ba nagar', '1234456671'),
(49, 'rita', 'g', 'guna', 'ba nagar', '7656787654'),
(50, 'ria', 'raj', 'A', 'renu nagar', '9876876545'),
(51, 'divya', 'sree', 'm', 'ba nagar', '3456787652'),
(52, 'rithi', 'r', 'k', 'anna nagar', '9856765434'),
(53, 'latha', 'n', 'nagaraj', 'ba nagar', '7858869342'),
(54, 'latha', 'n', 'nagaraj', 'ba nagar', '7858869342'),
(55, 'anita', 'n', 'raj', 'ba nagar', '1234456671'),
(56, 'aruna', 'n', 'k', 'ba nagar', '5647654321'),
(57, 'reka', 'n', 'n', 'ba nagar', '9856765434'),
(58, 'renu', 'r', 'n', 'ba nagar', '7656787654'),
(59, 'anita', 'n', 'r', 'ba nagar', '5647654321'),
(60, 'anita', 'r', 'n', 'ba nagar', '1234456671'),
(61, 'nivi', 'n', 'r', 'ba nagar', '5647654321'),
(62, 'raji', 'r', 'ram', 'ba nagar', '3456787652'),
(63, 'raji', 'r', 'ram', 'ba nagar', '3456787652'),
(64, 'raji', 'r', 'ram', 'ba nagar', '3456787652'),
(65, 'raji', 'r', 'ram', 'ba nagar', '3456787652'),
(66, 'resa', 'r', 'r', 'ba nagar', '3456787652'),
(67, 'resa', 'r', 'r', 'ba nagar', '3456787652'),
(68, 'anita', 'r', 'r', 'ba nagar', '7858869342'),
(69, 'anita', 'r', 'r', 'ba nagar', '7858869342'),
(70, 'raji', 'r', 'r', 'ba nagar', '3456787652'),
(71, 'raji', 'r', 'r', 'ba nagar', '3456787652'),
(72, 'raji', 'r', 'r', 'ba nagar', '3456787652'),
(73, 'raji', 'r', 'r', 'ba nagar', '3456787652'),
(74, 'raji', 'r', 'ram', 'ba nagar', '7656787654'),
(75, 'raji', 'r', 'ram', 'ba nagar', '7656787654'),
(76, 'anita', 'r', 'r', 'ba nagar', '7858869342'),
(77, 'ganga', 'r', 'r', 'ba nagar', '5647654321'),
(78, 'rita', 'ram', 'ram', 'ba nagar', '9856765434'),
(79, 'rita', 'ram', 'ram', 'ba nagar', '9856765434'),
(80, 'rithu', 'r', 'y', 'ba nagar', '1234456671'),
(81, 'indu', 'r', 'm', 'ba nagar', '7858869342'),
(82, 'indu', 'r', 'm', 'ba nagar', '7858869342'),
(83, 'malar', 'r', 'k', 'ba nagar', '7656787654'),
(84, 'rethi', 'r', 'r', 'ba nagar', '7656787654'),
(85, 'rethi', 'r', 'r', 'ba nagar', '7656787654'),
(86, 'nandini', 'r', 'r', 'ba nagar', '7656787654'),
(87, 'reja', 'r', 'y', 'ba nagar', '7858869342'),
(88, 'reja', 'r', 'y', 'ba nagar', '7858869342'),
(89, 'priya', 'r', 'r', 'ab nagar', '7656787654'),
(90, 'sai', 'r', 'r', 'ba nagar', '3456787652'),
(91, 'janu', 'r', 'r', 'ba nagar', '9856765434'),
(92, 'janu', 'r', 'r', 'ba nagar', '3456787652'),
(93, 'janu', 'r', 'r', 'ba nagar', '3456787652'),
(94, 'anu', 'r', 'r', 'ba nagar', '7858869342'),
(95, 'rajeswari', 'r', 'r', 'ganesh nagar', '7656787654'),
(96, 'ajith', 'kumar', 'kumar', 'peelamedu', '789544613'),
(97, 'sathish', 'kumar', 'kumar', 'ghandhipuram', '08945612307'),
(98, 'arun', 'kumar', 'kumar', 'saravanampatti', '08754896123'),
(99, 'sathish', 'kumar', 'kumar', 'ghandhipuram', '08945612307'),
(100, 'sathish', 'kumar', 'kumar', 'saravanampatti', '875489612'),
(101, 'sathish', 'kumar', 'kumar', 'ghandhipuram', '08945612307');

-- --------------------------------------------------------

--
-- Table structure for table `offer`
--

CREATE TABLE IF NOT EXISTS `offer` (
  `offerid` int(20) NOT NULL,
  `offers` int(20) NOT NULL,
  `offercode` varchar(10) NOT NULL,
  `details` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `offer`
--

INSERT INTO `offer` (`offerid`, `offers`, `offercode`, `details`) VALUES
(1, 50, '2456', '100 rs discount for '),
(2, 40, '2311', '75 rs discount for b'),
(3, 30, '2311', '100 rs discount for');

-- --------------------------------------------------------

--
-- Table structure for table `pack`
--

CREATE TABLE IF NOT EXISTS `pack` (
  `packageid` int(10) NOT NULL,
  `packagetype` varchar(20) NOT NULL,
  `photo` varchar(70) NOT NULL,
  `packagedetails` varchar(30) NOT NULL,
  `offers` int(3) NOT NULL,
  `offercode` varchar(4) NOT NULL,
  `chargeinperson` int(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pack`
--

INSERT INTO `pack` (`packageid`, `packagetype`, `photo`, `packagedetails`, `offers`, `offercode`, `chargeinperson`) VALUES
(10, 'hillstation', '', 'full day visit', 50, 'p123', 400),
(11, 'boathouse', '', 'full day visit1', 40, 'p123', 300),
(12, 'boathouse', '', 'full day visit', 50, 'p123', 300),
(13, 'themes park', '', 'fulldayview', 40, 'p123', 400),
(14, 'industrial visit', '', 'full day visit', 50, 'p123', 400);

-- --------------------------------------------------------

--
-- Table structure for table `patransaction`
--

CREATE TABLE IF NOT EXISTS `patransaction` (
  `transaction_id` int(11) NOT NULL,
  `guest_id` int(11) NOT NULL,
  `packageid` int(11) NOT NULL,
  `packagetype` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL,
  `offers` varchar(20) NOT NULL,
  `offercode` varchar(20) NOT NULL,
  `cabtype` varchar(20) NOT NULL,
  `tariff` varchar(30) NOT NULL,
  `days` varchar(200) NOT NULL,
  `checkin` varchar(222) NOT NULL,
  `checkin_time` varchar(200) NOT NULL,
  `checkout` varchar(200) NOT NULL,
  `checkout_time` varchar(200) NOT NULL,
  `bill` varchar(26) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patransaction`
--

INSERT INTO `patransaction` (`transaction_id`, `guest_id`, `packageid`, `packagetype`, `status`, `offers`, `offercode`, `cabtype`, `tariff`, `days`, `checkin`, `checkin_time`, `checkout`, `checkout_time`, `bill`) VALUES
(1, 96, 11, 'boathouse', 'Check Out', '40', 'p123', '', '', '2', '2020-03-26', '16:48:06', '2020-03-28', '16:49:24', '600'),
(2, 97, 10, 'hillstation', 'Check Out', '50', 'p123', '', '', '2', '2020-03-20', '16:52:55', '2020-03-22', '16:55:03', '800'),
(3, 98, 13, 'themes park', 'Check In', '40', 'p123', '', '', '2', '2020-03-27', '17:31:13', '2020-03-29', '', '720'),
(4, 97, 11, 'boathouse', 'Pending', '40', 'p123', '', '', '', '2020-03-19', '', '', '', ''),
(5, 100, 10, 'hillstation', 'Check Out', '50', 'p123', 'Shift', '1400', '2', '2020-03-31', '15:18:14', '2020-04-02', '15:18:57', '3500'),
(6, 97, 11, 'boathouse', 'Check Out', '40', 'p123', 'Shift', '1400', '2', '2020-03-20', '16:00:35', '2020-03-22', '16:01:57', '3320');

-- --------------------------------------------------------

--
-- Table structure for table `ptransaction`
--

CREATE TABLE IF NOT EXISTS `ptransaction` (
  `transaction_id` int(10) NOT NULL,
  `guest_id` int(10) NOT NULL,
  `packageid` int(10) NOT NULL,
  `packagetype` varchar(10) NOT NULL,
  `status` varchar(10) NOT NULL,
  `offers` int(3) NOT NULL,
  `offercode` varchar(4) NOT NULL,
  `days` int(10) NOT NULL,
  `checkin` date NOT NULL,
  `checkin_time` time(6) NOT NULL,
  `checkout` date NOT NULL,
  `checkout_time` time(6) NOT NULL,
  `bill` int(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ptransaction`
--

INSERT INTO `ptransaction` (`transaction_id`, `guest_id`, `packageid`, `packagetype`, `status`, `offers`, `offercode`, `days`, `checkin`, `checkin_time`, `checkout`, `checkout_time`, `bill`) VALUES
(11, 66, 11, 'boathouse', 'Check Out', 50, 'p123', 2, '2020-04-10', '16:24:13.000000', '2020-03-12', '16:24:21.000000', 0),
(12, 70, 9, 'boathouse', 'Check Out', 50, 'p123', 2, '2020-05-13', '16:19:12.000000', '2020-03-12', '16:19:24.000000', 0),
(13, 74, 10, 'boathouse', 'Check Out', 50, 'p123', 2, '2020-03-14', '16:22:47.000000', '2020-03-12', '16:22:55.000000', 0),
(18, 81, 13, 'boathouse', 'Check Out', 0, 'p123', 2, '2020-06-13', '17:55:32.000000', '2020-03-12', '18:02:26.000000', 0),
(19, 83, 11, 'boathouse', 'Check Out', 50, 'p123', 2, '2020-06-10', '17:40:46.000000', '2020-03-12', '17:40:56.000000', 0),
(21, 86, 2, 'boathouse', 'Check Out', 50, 'p123', 2, '2020-06-14', '17:43:54.000000', '2020-03-12', '17:44:10.000000', 0),
(22, 87, 15, 'boathouse', 'Check Out', 50, 'p123', 2, '2020-05-13', '18:02:11.000000', '2020-03-12', '18:34:05.000000', 0),
(23, 89, 10, 'hillstatio', 'Check Out', 50, 'p123', 2, '2020-06-14', '17:45:59.000000', '2020-03-12', '17:46:17.000000', 0),
(24, 90, 13, 'themes', 'Pending', 40, 'p123', 0, '2020-06-14', '00:00:00.000000', '0000-00-00', '00:00:00.000000', 0),
(25, 92, 18, 'themes', 'Check Out', 40, 'p123', 2, '2020-11-07', '18:30:30.000000', '2020-03-12', '18:30:40.000000', 0),
(26, 94, 16, 'themes', 'Check Out', 40, 'p123', 2, '2020-11-06', '18:15:00.000000', '2020-03-12', '18:16:24.000000', 0),
(27, 95, 17, 'boathouse', 'Check Out', 40, 'p123', 2, '2020-10-12', '18:28:47.000000', '2020-03-12', '18:29:14.000000', 600);

-- --------------------------------------------------------

--
-- Table structure for table `rev`
--

CREATE TABLE IF NOT EXISTS `rev` (
  `reviewid` int(20) NOT NULL,
  `cusid` int(20) NOT NULL,
  `cusname` varchar(20) NOT NULL,
  `reviewdetails` varchar(40) NOT NULL,
  `reviewdate` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rev`
--

INSERT INTO `rev` (`reviewid`, `cusid`, `cusname`, `reviewdetails`, `reviewdate`) VALUES
(1, 1, 'priya', 'good facility', '2020-03-04'),
(2, 2, 'anita', 'good facility', '2020-04-05'),
(3, 3, 'arya', 'rich atmosphere', '2020-04-04'),
(4, 4, 'reka', 'nice view', '2020-04-06');

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE IF NOT EXISTS `room` (
  `room_id` int(11) NOT NULL,
  `room_type` varchar(50) NOT NULL,
  `price` varchar(11) NOT NULL,
  `photo` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`room_id`, `room_type`, `price`, `photo`) VALUES
(1, 'Standard Room', '1000', '1.jpg'),
(2, 'Quad A Room', '1900', '3.jpg'),
(3, 'Queen Size Room', '3000', '4.jpg'),
(5, 'King Suite Room', '3500', '6.jpg'),
(6, 'Superior', '1200', 'home1.jpg'),
(7, 'Super Deluxe', '25000', '3.jpg'),
(8, 'Super Deluxe', '25000', '6.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE IF NOT EXISTS `signup` (
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `mobile` int(20) NOT NULL,
  `mail` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`firstname`, `lastname`, `mobile`, `mail`, `password`) VALUES
('ajith', 'm', 789544613, 'abi@gmailcom', '8764563'),
('sathish', 'kumar', 2147483647, 'ac@gmail.com', '123456'),
('ajithkumar', 'm', 2147483647, 'ajith@gmail.com', '12345'),
('sathish', 'S', 2147483647, 'jj@gmail.com', '12345'),
('sathish', 'S', 2147483647, 'jkl@gmail.com', '12345'),
('sathish', 'm', 2147483647, 'kavi@gmail.com', '456123'),
('ajith', 'S', 789544613, 'kumar@gmail.com', '987456'),
('kumar', 'l', 2147483647, 'malar@gmail.com', '12345'),
('parthi', 'r', 2147483647, 'p@gmail.com', '1234'),
('priya', 'r', 2147483647, 'priya@gmail.com', '1234'),
('reka', 'kumar', 2147483647, 'r@gail.com', 'reka'),
('reka', 'k', 1234567890, 'r@gmail.com', '1234'),
('remya', 'vino', 2147483647, 'remya@gmail.com', '3456'),
('renu', 'ram', 2147483647, 'renu@gmail.com', '1234'),
('sathish', 'kumar', 2147483647, 'sathya@gmail.com', '1234'),
('ajith', 'S', 789544613, 'vijay@gmail.com', '2222');

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE IF NOT EXISTS `transaction` (
  `transaction_id` int(11) NOT NULL,
  `guest_id` int(11) NOT NULL,
  `room_id` int(11) NOT NULL,
  `room_no` int(5) NOT NULL,
  `packageid` int(10) NOT NULL,
  `extra_bed` int(11) NOT NULL,
  `status` varchar(20) NOT NULL,
  `days` int(2) NOT NULL,
  `checkin` date NOT NULL,
  `checkin_time` time NOT NULL,
  `checkout` date NOT NULL,
  `checkout_time` time NOT NULL,
  `bill` varchar(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`transaction_id`, `guest_id`, `room_id`, `room_no`, `packageid`, `extra_bed`, `status`, `days`, `checkin`, `checkin_time`, `checkout`, `checkout_time`, `bill`) VALUES
(3, 3, 1, 1, 0, 1, 'Check Out', 3, '2020-01-02', '19:37:42', '2020-01-05', '19:39:16', '3800'),
(5, 5, 1, 2, 0, 1, 'Check In', 2, '2020-01-04', '22:39:35', '2020-01-04', '00:00:00', '2800'),
(6, 6, 1, 1, 0, 1, 'Check Out', 2, '2020-01-08', '22:42:42', '2020-01-04', '16:29:48', '2800'),
(7, 7, 2, 3, 0, 1, 'Check In', 2, '2020-01-04', '22:45:31', '2020-01-04', '00:00:00', '4600'),
(8, 8, 1, 8, 0, 1, 'Check In', 2, '2020-03-03', '15:46:06', '2020-03-07', '00:00:00', '2800'),
(9, 9, 1, 7, 0, 1, 'Check In', 2, '2020-04-04', '14:29:35', '2020-03-07', '00:00:00', '2800'),
(10, 4, 4, 4, 3, 1, '1', 2, '2020-03-18', '21:14:09', '2020-03-19', '21:14:07', '700'),
(11, 15, 6, 11, 0, 1, 'Check In', 2, '2020-03-08', '19:21:01', '2020-03-08', '00:00:00', '3200'),
(12, 21, 2, 4, 0, 1, 'Check In', 2, '2020-03-06', '13:41:35', '2020-03-09', '00:00:00', '4600'),
(13, 57, 1, 0, 0, 0, 'Pending', 0, '2020-08-08', '00:00:00', '0000-00-00', '00:00:00', ''),
(14, 58, 1, 12, 0, 1, 'Check In', 1, '2020-06-11', '18:32:43', '2020-03-11', '00:00:00', '1800');

-- --------------------------------------------------------

--
-- Table structure for table `transaction1`
--

CREATE TABLE IF NOT EXISTS `transaction1` (
  `transactionid` int(10) NOT NULL,
  `packageid` int(10) NOT NULL,
  `guest_id` int(10) NOT NULL,
  `checkin` date NOT NULL,
  `checkout` date NOT NULL,
  `checkintime` time(5) NOT NULL,
  `checkouttime` time(5) NOT NULL,
  `status` varchar(10) NOT NULL,
  `bill` int(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaction1`
--

INSERT INTO `transaction1` (`transactionid`, `packageid`, `guest_id`, `checkin`, `checkout`, `checkintime`, `checkouttime`, `status`, `bill`) VALUES
(1, 2, 10, '2020-04-04', '0000-00-00', '00:00:00.00000', '00:00:00.00000', '0', 0),
(2, 2, 15, '2020-03-06', '0000-00-00', '00:00:00.00000', '00:00:00.00000', '0', 0),
(3, 2, 16, '2020-03-05', '0000-00-00', '00:00:00.00000', '00:00:00.00000', '0', 0),
(4, 1, 1, '2020-03-05', '2020-03-07', '05:15:14.11629', '29:23:16.30724', '0', 0),
(5, 2, 2, '2020-03-06', '2020-03-09', '23:13:14.28446', '53:08:17.38500', '1', 200),
(6, 2, 17, '2020-04-05', '0000-00-00', '00:00:00.00000', '00:00:00.00000', '0', 0),
(7, 2, 3, '2020-03-06', '2020-03-09', '23:13:14.28446', '53:08:17.38500', 'checkin', 200),
(8, 2, 18, '2020-03-08', '0000-00-00', '00:00:00.00000', '00:00:00.00000', 'Pending', 0),
(9, 2, 19, '2020-03-07', '0000-00-00', '00:00:00.00000', '00:00:00.00000', 'Pending', 0),
(10, 2, 21, '2020-03-09', '0000-00-00', '00:00:00.00000', '00:00:00.00000', 'Pending', 0),
(11, 2, 15, '2020-04-06', '0000-00-00', '00:00:00.00000', '00:00:00.00000', 'Pending', 0),
(12, 2, 21, '2020-03-10', '0000-00-00', '00:00:00.00000', '00:00:00.00000', 'Pending', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `cab`
--
ALTER TABLE `cab`
  ADD PRIMARY KEY (`cabid`);

--
-- Indexes for table `ctransaction`
--
ALTER TABLE `ctransaction`
  ADD PRIMARY KEY (`transaction_id`);

--
-- Indexes for table `guest`
--
ALTER TABLE `guest`
  ADD PRIMARY KEY (`guest_id`);

--
-- Indexes for table `offer`
--
ALTER TABLE `offer`
  ADD PRIMARY KEY (`offerid`);

--
-- Indexes for table `pack`
--
ALTER TABLE `pack`
  ADD PRIMARY KEY (`packageid`);

--
-- Indexes for table `patransaction`
--
ALTER TABLE `patransaction`
  ADD PRIMARY KEY (`transaction_id`),
  ADD KEY `guest_id` (`guest_id`),
  ADD KEY `packageid` (`packageid`);

--
-- Indexes for table `ptransaction`
--
ALTER TABLE `ptransaction`
  ADD PRIMARY KEY (`transaction_id`);

--
-- Indexes for table `rev`
--
ALTER TABLE `rev`
  ADD PRIMARY KEY (`reviewid`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`room_id`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`mail`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`transaction_id`);

--
-- Indexes for table `transaction1`
--
ALTER TABLE `transaction1`
  ADD PRIMARY KEY (`transactionid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `cab`
--
ALTER TABLE `cab`
  MODIFY `cabid` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `ctransaction`
--
ALTER TABLE `ctransaction`
  MODIFY `transaction_id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `guest`
--
ALTER TABLE `guest`
  MODIFY `guest_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=102;
--
-- AUTO_INCREMENT for table `offer`
--
ALTER TABLE `offer`
  MODIFY `offerid` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `pack`
--
ALTER TABLE `pack`
  MODIFY `packageid` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `patransaction`
--
ALTER TABLE `patransaction`
  MODIFY `transaction_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `ptransaction`
--
ALTER TABLE `ptransaction`
  MODIFY `transaction_id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `rev`
--
ALTER TABLE `rev`
  MODIFY `reviewid` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `room_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `transaction_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `transaction1`
--
ALTER TABLE `transaction1`
  MODIFY `transactionid` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `patransaction`
--
ALTER TABLE `patransaction`
  ADD CONSTRAINT `patransaction_ibfk_1` FOREIGN KEY (`guest_id`) REFERENCES `guest` (`guest_id`),
  ADD CONSTRAINT `patransaction_ibfk_2` FOREIGN KEY (`packageid`) REFERENCES `pack` (`packageid`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
