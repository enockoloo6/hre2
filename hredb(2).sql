-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 21, 2016 at 04:35 PM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hredb`
--

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE IF NOT EXISTS `ci_sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(45) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ci_sessions`
--

INSERT INTO `ci_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES
('cdd55c2698d7fb31dbff4522dec2849b', '::1', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:43.0) Gecko/20100101 Firefox/43.0', 1453403063, 'a:8:{s:9:"user_data";s:0:"";s:5:"email";s:20:"enockoloo6@gmail.com";s:7:"user_id";s:1:"4";s:12:"is_logged_in";b:1;s:4:"role";s:2:"-1";s:6:"f_name";s:5:"Enock";s:5:"photo";s:24:"assets/img2/avatar12.jpg";s:11:"other_names";N;}');

-- --------------------------------------------------------

--
-- Table structure for table `house_details`
--

CREATE TABLE IF NOT EXISTS `house_details` (
`house_id` int(11) NOT NULL,
  `type` varchar(20) NOT NULL,
  `location` varchar(20) NOT NULL,
  `price` varchar(30) NOT NULL,
  `house_description` varchar(15) NOT NULL,
  `road` varchar(15) NOT NULL,
  `owner` varchar(15) NOT NULL,
  `photo1` varchar(80) NOT NULL,
  `photo2` varchar(80) NOT NULL,
  `rfacility` varchar(40) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `house_details`
--

INSERT INTO `house_details` (`house_id`, `type`, `location`, `price`, `house_description`, `road`, `owner`, `photo1`, `photo2`, `rfacility`) VALUES
(7, 'the big boy mansion', 'Kibera', '700-89900', '', 'ngong road', '4', 'assets/img2/a21.jpg', '', 'swimming pool'),
(9, 'House number 1', 'Kibera234446', '700-8990', '', 'ngong road', '4', 'assets/img2/a62.jpg', '', 'swimming pool');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE IF NOT EXISTS `message` (
  `message_id` varchar(10) NOT NULL,
  `sender_id` varchar(10) NOT NULL,
  `recipient_id` varchar(10) NOT NULL,
  `message body` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE IF NOT EXISTS `messages` (
  `message_id` varchar(10) NOT NULL,
  `message_content` varchar(400) NOT NULL,
  `sender` varchar(20) NOT NULL,
  `receiver` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`user_id` int(20) NOT NULL,
  `f_name` varchar(15) NOT NULL,
  `other_names` varchar(25) NOT NULL,
  `phone_number` int(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `national_id` int(15) NOT NULL,
  `nationality` int(15) NOT NULL,
  `role` int(5) NOT NULL DEFAULT '0',
  `password` varchar(50) NOT NULL,
  `photo` varchar(30) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `f_name`, `other_names`, `phone_number`, `email`, `national_id`, `nationality`, `role`, `password`, `photo`) VALUES
(1, 'Peklo', 'u', 2147483647, 'solo@gmail.com', 2323231, 0, 1, '83878c91171338902e0fe0fb97a8c47a', 'assets/img2/'),
(2, 'Solomon', 'Obiero', 2147483647, 'solo@gmail.com', 54366356, 0, 1, '03c7c0ace395d80182db07ae2c30f034', ''),
(3, 'mm', ',n ', 870709, 'g@g.com', 6969, 0, -1, 'b2f5ff47436671b6e533d8dc3614845d', ''),
(4, 'Enock', 'Ouma Oloo', 701058958, 'enockoloo6@gmail.com', 30442011, 0, -1, 'fcd5c7d74e70e94a8983a3362239e903', 'assets/img2/avatar12.jpg'),
(5, 'Solomon', '', 0, 'enock.oloo@yahoo.com', 0, 0, 0, 'd41d8cd98f00b204e9800998ecf8427e', ''),
(6, 'e', 'e', 80, 'e@yahoo.com', 98, 0, 0, 'e1671797c52e15f763380b45e841ec32', ''),
(7, 'o', 'o', 0, 'o@gmail.com', 0, 0, 0, 'd95679752134a2d9eb61dbd7b91c4bcc', ''),
(10, 'p', 'p', 0, 'p6@gmail.com', 0, 0, 1, 'd41d8cd98f00b204e9800998ecf8427e', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ci_sessions`
--
ALTER TABLE `ci_sessions`
 ADD PRIMARY KEY (`session_id`), ADD KEY `last_activity_idx` (`last_activity`);

--
-- Indexes for table `house_details`
--
ALTER TABLE `house_details`
 ADD PRIMARY KEY (`house_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `house_details`
--
ALTER TABLE `house_details`
MODIFY `house_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `user_id` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
