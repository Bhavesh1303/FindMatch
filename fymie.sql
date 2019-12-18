-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 18, 2019 at 07:00 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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

CREATE TABLE `admin_tbl` (
  `id` int(11) NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `creation_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `e_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `e_date` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `e_desc` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `e_price` int(11) NOT NULL,
  `e_photo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `creation_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `e_name`, `e_date`, `e_desc`, `e_price`, `e_photo`, `creation_date`) VALUES
(1, 'gfgg', '12/11/2019', 'fghfgh', 566, '1.jpg', '2019-12-16 14:00:41');

-- --------------------------------------------------------

--
-- Table structure for table `log_tbl`
--

CREATE TABLE `log_tbl` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `login_user_type` text NOT NULL,
  `login_name` text NOT NULL,
  `login_status` varchar(255) NOT NULL DEFAULT 'Active',
  `organization_id` int(11) NOT NULL,
  `login_time` varchar(255) NOT NULL,
  `logout_time` varchar(255) DEFAULT NULL,
  `device_id` varchar(255) NOT NULL,
  `creation_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `new_contact`
--

CREATE TABLE `new_contact` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mobile_no` int(11) NOT NULL,
  `email_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `message` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `creation_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `new_contact`
--

INSERT INTO `new_contact` (`id`, `first_name`, `last_name`, `mobile_no`, `email_id`, `message`, `creation_date`) VALUES
(1, 'bhavesh', 'sharma', 2147483647, 'dkdsd@dfd', 'dsdfsdf', '2019-12-18 06:38:26'),
(2, 'bhavesh', 'sharma', 2147483647, 'cjmmn@cjmn', 'hello', '2019-12-18 06:40:02');

-- --------------------------------------------------------

--
-- Table structure for table `new_subscribe`
--

CREATE TABLE `new_subscribe` (
  `id` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `creation_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `new_subscribe`
--

INSERT INTO `new_subscribe` (`id`, `email`, `creation_date`) VALUES
(1, 'bhavesh@gmail.com', '2019-12-18 06:47:08'),
(2, 'hello@gmail.com', '2019-12-18 06:48:57');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile_no` int(11) NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Unverified',
  `creation_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email_id`, `mobile_no`, `password`, `gender`, `status`, `creation_date`) VALUES
(1, 'Bhavesh', 'b@gmail.com', 121212312, '123', 'Male', 'Verified', '2019-11-04 12:04:21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_tbl`
--
ALTER TABLE `admin_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `log_tbl`
--
ALTER TABLE `log_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `new_contact`
--
ALTER TABLE `new_contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `new_subscribe`
--
ALTER TABLE `new_subscribe`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_tbl`
--
ALTER TABLE `admin_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `log_tbl`
--
ALTER TABLE `log_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `new_contact`
--
ALTER TABLE `new_contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `new_subscribe`
--
ALTER TABLE `new_subscribe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
