-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 31, 2019 at 09:04 AM
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
  `name` blob NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=66 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `list`
--

INSERT INTO `list` (`id`, `list_title`, `list_description`, `list_location`, `list_tagline`, `list_number`, `cname`, `approve`, `userid`, `name`) VALUES
(46, 'Bus Stand', 'B', 'Thalassery, Kerala, India', 'Thalassery', 9876543201, 'I.T', 'Approved', NULL, ''),
(47, 'Railway Station', 'Thalassery', 'Thalassery, Kerala, India', 'Thalassery', 9876543201, 'I.T', 'Approved', NULL, ''),
(48, 'Computer care', 'Thalassery', 'Burnacherry, Kannur, Kerala, India', 'B', 9876543201, 'I.T', 'Approved', NULL, ''),
(49, 'Lulu', 'avhjvaf', 'Thalassery, Kerala, India', 'AKJF', 645684, 'Bank', 'Approved', NULL, ''),
(50, 'MRA Bakery', 'Thalassery', 'AVK Nair Road, Pilakool, Thalassery, Kerala, India', 'BBJKB', 98765456789, 'I.T', 'Approved', NULL, ''),
(51, 'Grama Bakery', 'hjdvahdvaj', 'KJBC, Midland, TX, USA', 'kbk', 9876543456, 'I.T', 'Approved', NULL, ''),
(52, 'Federal Bank', 'New York', 'New York, NY, USA', 'as', 45132045126, 'Bank', 'Approved', 20, ''),
(53, '3G Mobiles', 'New York', 'New York, NY, USA', 'as', 45132045126, 'Bank', 'Approved', 20, ''),
(54, 'Mall', 'Santorini', 'Santorini, Greece', 'A', 456120512041264, 'Bank', 'Approved', NULL, ''),
(55, 'ePlanet Shopping Center', 'Santorini', 'Santorini, Greece', 'A', 456120512041264, 'Bank', 'Approved', NULL, ''),
(56, 'A', 'Santorini', 'Santorini, Greece', 'A', 456120512041264, 'Bank', 'Approved', NULL, ''),
(57, 'A', 'Santorini', 'Santorini, Greece', 'A', 456120512041264, 'Bank', 'Approved', NULL, ''),
(58, 'A', 'Santorini', 'Santorini, Greece', 'A', 456120512041264, 'Bank', 'Approved', NULL, ''),
(59, 'A', 'Santorini', 'Santorini, Greece', 'A', 456120512041264, 'Bank', 'Approved', NULL, ''),
(60, NULL, NULL, NULL, NULL, NULL, NULL, 'Approved', NULL, ''),
(61, NULL, NULL, NULL, NULL, NULL, NULL, 'Approved', NULL, ''),
(62, NULL, NULL, NULL, NULL, NULL, NULL, 'Approved', NULL, ''),
(63, NULL, NULL, NULL, NULL, NULL, NULL, 'Approved', NULL, ''),
(64, 'asjb', 'New York', 'New York, NY, USA', 'jbbkb', 4865132054, 'I.T', 'Approved', NULL, ''),
(65, 'asjb', 'New York', 'New York, NY, USA', 'jbbkb', 4865132054, 'I.T', 'Approved', NULL, '');

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
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `userid`, `fname`, `lname`, `email`, `wrong_logins`, `password`, `user_role`, `confirmed`, `confirm_code`) VALUES
(2, 2, 'Admin', 'M', 'adarshm954@gmail.com', 0, '$2y$10$WbkKdtJkm1VknL6A6E4Cl.9jmrms0GTnRmeGzGLLNDrQ0WdCWhBlu', '2', 1, '$2y$10$F3edJ0lgVMIr1hVb1n1QzeKiYU8nPRN4qsd9dLILlgrGx9.W49BrK'),
(21, NULL, 'kajdbkbkj', 'bb', 'adnkj@gmail.com', 0, '$2y$10$V2Ch4IW/o8soP3hCtz15kuRIsy2RCRQf.9ONKq.89dpHNxkXcyosG', 'user', 0, '$2y$10$yNNMJJ9EKgdbvalGmI2Ktu3OH5s/spqhRPL1nZksNxzWMLD7fiEMW'),
(22, NULL, 'kajdbkbkj', 'bb', 'adnlkj@gmail.com', 0, '$2y$10$Q.GPhREWLmaKsCJ3NiKbw.4bek88g22F8NqbXcHFYLzGoXSGv.5SS', 'user', 0, '$2y$10$m/D2B3dvpXduhqEoiHcc0.LOGTwFV6CzA47KACEg0vFBGeVzh4b1u'),
(25, NULL, 'kajdbkbkj', 'bb', 'adnlklddsj@gmail.com', 0, '$2y$10$dEizTUfLNrs6niXn98xvq.CyXxnSbN2u4zbvN.juR87Y4fvXdpelq', 'user', 0, '$2y$10$Wg./j7/RmC41JiTrelrWte3ijmD4iv3nRHqYx4hMcEZu4QOL6lD22'),
(24, NULL, 'kajdbkbkj', 'bb', 'adnlkldj@gmail.com', 0, '$2y$10$J4biWejyEUF.1f3Lpf2ecOx.qlKatyzw3w3wo9j1YRCQDO3M0ZMzm', 'user', 0, '$2y$10$tadQc5SfkKR/ZOertbASNux8rSnHDTdFkIZPlcmt9peHzTn07KWZC'),
(23, NULL, 'kajdbkbkj', 'bb', 'adnlklj@gmail.com', 0, '$2y$10$ZBpre1ULyUGRtXL.usRA3.izORRRwsB2u5HecAZvsaPKjSHnA/EJG', 'user', 0, '$2y$10$Bc9HZks5RhMmRw84Q4v./.CF1PHZE9ErWKMWUUuqc.QOx.2w.V0pe'),
(20, 20, 'jadnk', 'njkafkkb', 'bjbbkbb@bgkjsbjkbskd.com', 0, '$2y$10$xIZ6yrpsH.w33ZTWF4i1T.3wItXXjcsgX4/c8N8iMm2B4bQrJ.2SO', 'user', 0, '$2y$10$rDyEBiEKpRqkj1HKfidyA.tQBTrW6HJ3ZK.muyubDj8nT.ETuGytu'),
(17, 17, 'dude', 'du', 'dude@dude.com', 0, '$2y$10$tqleWavYVjc4tzjnNxb9UeJyXlXkAWBoq8Yh41xIKizIkz9CodB12', '1', 0, '$2y$10$Qrne9NR1UWz7V36WQELV/.DsyUFBJKw7vAU..cWdyUwSEoBiqOCMe'),
(27, NULL, 'gkjhkj', 'gkjhkj', 'gkjhkhk@gmail.com', 0, '$2y$10$i6j0PNkYasw/Zq67loZbk.8/CkzUo/4Za6HFJF/jYeoxgpmH64pPC', 'user', 0, '$2y$10$A19v7HCfkHSX9PerQWeyDuYOWa3kpjeZvnh00tY.qiyUvmbfv8Z5.'),
(26, NULL, 'adjkb', 'jbj', 'jkjjlk@gmail.com', 0, '$2y$10$QIvzTfhfmHET/PcHh6JACOYvR8v1tezGBZbCBXYXaZU0Amo59J.FK', 'user', 0, '$2y$10$Uz9azcbhgBeC.TfvL87DF.jNsEPJJmYgG8g8qlSgWJmEq.ltejWEC'),
(16, 16, 'Adarsh', 'M', 'meh.adarsh.m@gmail.com', 0, '$2y$10$m7oS6VUSfrdBKpEk38r5Yefb3XMO2/C5Fw0KCCZDlNodm/JUGPVW6', '1', 1, '$2y$10$6J1T4pVlWYzJRMB0NSg6JeazSa0VilOyNVG7Z3LBDlz9FStN.9V/O'),
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
