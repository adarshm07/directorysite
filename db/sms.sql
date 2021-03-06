-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 04, 2019 at 07:33 AM
-- Server version: 5.7.23
-- PHP Version: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sms`
--

-- --------------------------------------------------------

--
-- Table structure for table `approve`
--

DROP TABLE IF EXISTS `approve`;
CREATE TABLE IF NOT EXISTS `approve` (
  `STATUS` varchar(20) NOT NULL,
  PRIMARY KEY (`STATUS`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `approve`
--

INSERT INTO `approve` (`STATUS`) VALUES
('approved'),
('declined'),
('pending');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cname` varchar(500) NOT NULL,
  `description` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `cname`, `description`) VALUES
(1, 'I.T', 'Information Technology'),
(2, 'Bank', 'Banking and Other'),
(3, 'Textiles', 'Men, Ladies and Kids.'),
(4, 'Restaurant', 'Hotel and Restaurant');

-- --------------------------------------------------------

--
-- Table structure for table `list`
--

DROP TABLE IF EXISTS `list`;
CREATE TABLE IF NOT EXISTS `list` (
  `id` int(9) NOT NULL AUTO_INCREMENT,
  `list_title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `list_description` varchar(400) COLLATE utf8_unicode_ci DEFAULT NULL,
  `list_location` varchar(900) COLLATE utf8_unicode_ci DEFAULT NULL,
  `list_tagline` varchar(260) COLLATE utf8_unicode_ci DEFAULT NULL,
  `list_number` bigint(20) DEFAULT NULL,
  `cname` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `approve` varchar(20) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'pending',
  `userid` int(11) DEFAULT NULL,
  `user` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=74 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `list`
--

INSERT INTO `list` (`id`, `list_title`, `list_description`, `list_location`, `list_tagline`, `list_number`, `cname`, `approve`, `userid`, `user`) VALUES
(46, 'Bus Stand', 'B', 'Thalassery, Kerala, India', 'Thalassery', 9876543201, 'I.T', 'Approved', NULL, NULL),
(47, 'Railway Station', 'Thalassery', 'Thalassery, Kerala, India', 'Thalassery', 9876543201, 'I.T', 'Approved', NULL, NULL),
(48, 'Computer care', 'Thalassery', 'Burnacherry, Kannur, Kerala, India', 'B', 9876543201, 'I.T', 'Approved', NULL, NULL),
(49, 'Lulu', 'avhjvaf', 'Thalassery, Kerala, India', 'AKJF', 645684, 'Bank', 'Approved', NULL, NULL),
(50, 'MRA Bakery', 'Thalassery', 'AVK Nair Road, Pilakool, Thalassery, Kerala, India', 'BBJKB', 98765456789, 'I.T', 'Pending', NULL, NULL),
(51, 'Grama Bakery', 'hjdvahdvaj', 'KJBC, Midland, TX, USA', 'kbk', 9876543456, 'I.T', 'Approved', NULL, NULL),
(52, 'Federal Bank', 'New York', 'New York, NY, USA', 'as', 45132045126, 'Bank', 'Approved', 20, NULL),
(53, '3G Mobiles', 'New York', 'New York, NY, USA', 'as', 45132045126, 'Bank', 'Pending', 20, NULL),
(54, 'Mall', 'Santorini', 'Santorini, Greece', 'A', 456120512041264, 'Bank', 'Approved', NULL, NULL),
(55, 'ePlanet Shopping Center', 'Santorini', 'Santorini, Greece', 'A', 456120512041264, 'Bank', 'Approved', NULL, NULL),
(56, 'A', 'Santorini', 'Santorini, Greece', 'A', 456120512041264, 'Bank', 'Approved', NULL, NULL),
(57, 'A', 'Santorini', 'Santorini, Greece', 'A', 456120512041264, 'Bank', 'Approved', NULL, NULL),
(58, 'A', 'Santorini', 'Santorini, Greece', 'A', 456120512041264, 'Bank', 'Approved', NULL, NULL),
(59, 'A', 'Santorini', 'Santorini, Greece', 'A', 456120512041264, 'Bank', 'Approved', NULL, NULL),
(60, NULL, NULL, NULL, NULL, NULL, NULL, 'Approved', NULL, NULL),
(61, NULL, NULL, NULL, NULL, NULL, NULL, 'Approved', NULL, NULL),
(62, NULL, NULL, NULL, NULL, NULL, NULL, 'Approved', NULL, NULL),
(63, NULL, NULL, NULL, NULL, NULL, NULL, 'Approved', NULL, NULL),
(64, 'asjb', 'New York', 'New York, NY, USA', 'jbbkb', 4865132054, 'I.T', 'Approved', NULL, NULL),
(65, 'asjb', 'New York', 'New York, NY, USA', 'jbbkb', 4865132054, 'I.T', 'Approved', NULL, NULL),
(66, 'jadkjg', '', 'New Zealand', 'kjgggk', 875, 'Bank', 'pending', NULL, NULL),
(67, 'kjabbj', 'adasda', 'Banashankari, Bengaluru, Karnataka, India', 'bkjbb', 8465132046, 'Bank', 'pending', NULL, NULL),
(68, 'kjabbj', 'adasda', 'Banashankari, Bengaluru, Karnataka, India', 'bkjbb', 8465132046, 'Bank', 'pending', NULL, NULL),
(69, 'adknsajb', 'Bengaluru', 'Akshayanagar, Bengaluru, Karnataka, India', 'bkbk', 84651346, 'Bank', 'pending', NULL, NULL),
(70, 'adknsajb', 'Bengaluru', 'Akshayanagar, Bengaluru, Karnataka, India', 'bkbk', 84651346, 'Bank', 'pending', NULL, NULL),
(71, 'aldknbjb', 'Burnacherry, Kannur, Kerala, India', 'Burnacherry, Kannur, Kerala, India', 'bbkb', 84651324689046, 'Bank', 'pending', NULL, NULL),
(72, 'adlkn', 'AB, Canada', 'AB, Canada', 'nklnlnklnl', 56321046, 'Bank', 'pending', NULL, 1001),
(73, 'adjkbk', '', 'Dubai - United Arab Emirates', 'bkb', 7, 'Restaurant', 'pending', NULL, 2);

-- --------------------------------------------------------

--
-- Table structure for table `manager`
--

DROP TABLE IF EXISTS `manager`;
CREATE TABLE IF NOT EXISTS `manager` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `password` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `manager`
--

INSERT INTO `manager` (`id`, `username`, `email`, `password`) VALUES
(1, 'tm1', 'tm1@gmail.com', '202cb962ac59075b964b07152d234b70'),
(2, 'tm2', 'tm2@gmail.com', '202cb962ac59075b964b07152d234b70'),
(3, 'tm3', 'tm3@gmail.com', '202cb962ac59075b964b07152d234b70'),
(4, 'tm4', 'tm4@gmail.com', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Table structure for table `pro`
--

DROP TABLE IF EXISTS `pro`;
CREATE TABLE IF NOT EXISTS `pro` (
  `pro_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pro_desc` text COLLATE utf8_unicode_ci NOT NULL,
  `pro_mob` bigint(20) DEFAULT NULL,
  `pro_hours` text COLLATE utf8_unicode_ci,
  `pro_location` text COLLATE utf8_unicode_ci NOT NULL,
  `pro_category` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `pro`
--

INSERT INTO `pro` (`pro_title`, `pro_desc`, `pro_mob`, `pro_hours`, `pro_location`, `pro_category`) VALUES
('kabdbjkb', 'bjkbjkb', 9876543201, 'ladnkn', 'lknnnn', 'knl'),
('kabdbjkb', 'bjkbjkb', 9876543201, 'ladnkn', 'lknnnn', 'knl'),
('kabdbjkb bjkbjkb 9876543201 ladnkn lknnnn knl', 'kabdbjkb bjkbjkb 9876543201 ladnkn lknnnn knl', 9876543201, 'kabdbjkb\r\nbjkbjkb\r\n9876543201\r\nladnkn\r\nlknnnn\r\nknl\r\n', 'kabdbjkb\r\nbjkbjkb\r\n9876543201\r\nladnkn\r\nlknnnn\r\nknl\r\n', 'kabdbjkb\r\nbjkbjkb\r\n9876543201\r\nladnkn\r\nlknnnn\r\nknl\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(9) NOT NULL AUTO_INCREMENT,
  `role` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `role` (`role`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `images` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`images`) VALUES
('uploads/2.png');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(9) NOT NULL AUTO_INCREMENT,
  `userid` int(11) DEFAULT NULL,
  `fname` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lname` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `wrong_logins` int(9) NOT NULL DEFAULT '0',
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_role` varchar(9) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'user',
  `confirmed` tinyint(1) NOT NULL DEFAULT '0',
  `confirm_code` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `id` (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `userid`, `fname`, `lname`, `email`, `wrong_logins`, `password`, `user_role`, `confirmed`, `confirm_code`) VALUES
(2, 2, 'Admin', 'M', 'adarshm954@gmail.com', 0, '$2y$10$WbkKdtJkm1VknL6A6E4Cl.9jmrms0GTnRmeGzGLLNDrQ0WdCWhBlu', '2', 1, '$2y$10$F3edJ0lgVMIr1hVb1n1QzeKiYU8nPRN4qsd9dLILlgrGx9.W49BrK'),
(22, NULL, 'Anjana', 'Singh', 'anjana@gmail.com', 0, '$2y$10$Q.GPhREWLmaKsCJ3NiKbw.4bek88g22F8NqbXcHFYLzGoXSGv.5SS', 'user', 0, '$2y$10$m/D2B3dvpXduhqEoiHcc0.LOGTwFV6CzA47KACEg0vFBGeVzh4b1u'),
(17, 17, 'dude', 'du', 'dude@dude.com', 0, '$2y$10$tqleWavYVjc4tzjnNxb9UeJyXlXkAWBoq8Yh41xIKizIkz9CodB12', '1', 0, '$2y$10$Qrne9NR1UWz7V36WQELV/.DsyUFBJKw7vAU..cWdyUwSEoBiqOCMe'),
(21, NULL, 'John', 'J', 'john@gmail.com', 0, '$2y$10$V2Ch4IW/o8soP3hCtz15kuRIsy2RCRQf.9ONKq.89dpHNxkXcyosG', 'user', 0, '$2y$10$yNNMJJ9EKgdbvalGmI2Ktu3OH5s/spqhRPL1nZksNxzWMLD7fiEMW'),
(16, 16, 'Adarsh', 'M', 'meh.adarsh.m@gmail.com', 0, '$2y$10$m7oS6VUSfrdBKpEk38r5Yefb3XMO2/C5Fw0KCCZDlNodm/JUGPVW6', '1', 1, '$2y$10$6J1T4pVlWYzJRMB0NSg6JeazSa0VilOyNVG7Z3LBDlz9FStN.9V/O'),
(20, 20, 'Nick', 'N', 'nick@gmail.com', 0, '$2y$10$xIZ6yrpsH.w33ZTWF4i1T.3wItXXjcsgX4/c8N8iMm2B4bQrJ.2SO', 'user', 0, '$2y$10$rDyEBiEKpRqkj1HKfidyA.tQBTrW6HJ3ZK.muyubDj8nT.ETuGytu'),
(19, 19, 'P', 'G', 'pg@imail.com', 0, '$2y$10$7J/zSFVCJownlPGKsnSQY.VAnyKDAX0ToNYs3bKKWIhEax2KLOOYi', '1', 0, '$2y$10$ESVFs.FaPgp.SR7WaU5MquDRpdMtkmPt5G4PiS7.0qT0DczFp0fxK'),
(18, 18, 'PJ', 'J', 'pJ@mail.com', 0, '$2y$10$2l.yi3kzqy1.SpJFYzbDV.C/rlce9LTJ/9DQCFeVdg2ivQefUwa.e', '1', 0, '$2y$10$KUSwVxSpgH5XdHo3js4BiO3mxpg2GcD.oPBSGcUyC7nh4DdExkJve');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

DROP TABLE IF EXISTS `user_role`;
CREATE TABLE IF NOT EXISTS `user_role` (
  `user_role` varchar(9) DEFAULT NULL,
  `id` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
