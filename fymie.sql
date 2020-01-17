-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 26, 2019 at 08:55 AM
-- Server version: 5.7.21
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fymie`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_tbl`
--

DROP TABLE IF EXISTS `admin_tbl`;
CREATE TABLE IF NOT EXISTS `admin_tbl` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `creation_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

DROP TABLE IF EXISTS `events`;
CREATE TABLE IF NOT EXISTS `events` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `e_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `e_date` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `e_desc` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `e_price` int(11) NOT NULL,
  `e_photo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `creation_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `e_name`, `e_date`, `e_desc`, `e_price`, `e_photo`, `creation_date`) VALUES
(1, 'Adventure trek', '12/11/2019', 'Fortunately for the visitor, there are still only a few roads extending deeply into the hills, so the only way to truly visit the remote regions of the kingdom is in the slowest and most intimate manner - walking.', 599, 'e1.jpg', '2019-12-16 14:00:41'),
(2, 'Rocking Band', '12/13/2019', 'A jam band is a musical group whose live albums and concerts relate to a fan culture that began in the 1960s with the Grateful Dead and The Allman Brothers Band, both of whom held lengthy jams at concerts. ', 399, 'e2.jpg', '2019-12-22 19:31:17');

-- --------------------------------------------------------

--
-- Table structure for table `event_booked`
--

DROP TABLE IF EXISTS `event_booked`;
CREATE TABLE IF NOT EXISTS `event_booked` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `event_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `payment` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'No',
  `creation_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `event_booked`
--

INSERT INTO `event_booked` (`id`, `event_id`, `user_id`, `payment`, `creation_date`) VALUES
(1, 1, 1, 'No', '2019-12-26 08:46:10');

-- --------------------------------------------------------

--
-- Table structure for table `interest_tbl`
--

DROP TABLE IF EXISTS `interest_tbl`;
CREATE TABLE IF NOT EXISTS `interest_tbl` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `reading` int(11) DEFAULT '0',
  `movies` int(11) DEFAULT '0',
  `outing` int(11) DEFAULT '0',
  `clubing` int(11) DEFAULT '0',
  `painting` int(11) DEFAULT '0',
  `music` int(11) DEFAULT '0',
  `adventure` int(11) DEFAULT '0',
  `gaming` int(11) DEFAULT '0',
  `sports` int(11) DEFAULT '0',
  `DIYs` int(11) DEFAULT '0',
  `studying` int(11) DEFAULT '0',
  `cooking` int(11) DEFAULT '0',
  `total` int(11) NOT NULL,
  `creation_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `interest_tbl`
--

INSERT INTO `interest_tbl` (`id`, `user_id`, `reading`, `movies`, `outing`, `clubing`, `painting`, `music`, `adventure`, `gaming`, `sports`, `DIYs`, `studying`, `cooking`, `total`, `creation_date`) VALUES
(1, 1, 1, 0, 1, 0, 1, 0, 1, 0, 0, 0, 0, 0, 4, '2019-12-26 08:47:51');

-- --------------------------------------------------------

--
-- Table structure for table `log_tbl`
--

DROP TABLE IF EXISTS `log_tbl`;
CREATE TABLE IF NOT EXISTS `log_tbl` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `login_user_type` text NOT NULL,
  `login_name` text NOT NULL,
  `login_status` varchar(255) NOT NULL DEFAULT 'Active',
  `organization_id` int(11) NOT NULL,
  `login_time` varchar(255) NOT NULL,
  `logout_time` varchar(255) DEFAULT NULL,
  `device_id` varchar(255) NOT NULL,
  `creation_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `new_contact`
--

DROP TABLE IF EXISTS `new_contact`;
CREATE TABLE IF NOT EXISTS `new_contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mobile_no` int(11) NOT NULL,
  `email_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `message` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `creation_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `new_subscribe`
--

DROP TABLE IF EXISTS `new_subscribe`;
CREATE TABLE IF NOT EXISTS `new_subscribe` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `creation_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile_no` int(11) NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verification_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Unverified',
  `creation_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email_id`, `mobile_no`, `password`, `gender`, `description`, `user_photo`, `email_verification_code`, `status`, `creation_date`) VALUES
(1, 'Bhavesh Sharma', 'bhavesh@gmail.com', 2147483647, '123', 'Male', 'I am Bhavesh sharma i like to make sketches', '1.jpg', 'hRBnY0SEI7ToK1PfOwct', 'Verified', '2019-12-26 08:39:29');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
