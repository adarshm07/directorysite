-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 04, 2019 at 07:34 AM
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
-- Database: `adminuser`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lname` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `wrong_logins` int(9) NOT NULL DEFAULT '0',
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_role` int(9) NOT NULL DEFAULT '1',
  `confirmed` tinyint(1) NOT NULL DEFAULT '0',
  `confirm_code` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `userid` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1002 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `email`, `wrong_logins`, `password`, `user_role`, `confirmed`, `confirm_code`, `userid`) VALUES
(1000, 'hdg', 'h', 'adarshm@adarshm.com', 0, '$2y$10$T51gWdAR2xen054CUsas2ehLds0Cj4l5aPPwdxLsSXJDV/dPPI2jC', 1, 0, '$2y$10$3WZ.fmqGAVqanMO/uRWwueaUM9HfU.MNdBoBtOdWcDbW6puhB/c9m', 1000),
(1001, 'admin', 'admin', 'adarshm954@gmail.com', 0, '$2y$10$W.TZEKGCgEUdTxxJNf7klePQTVhjrvbBQglJmDBiTeV3ZMk/8nCDC', 1, 1, '$2y$10$aIzps.Cjf4tZVpP2O7GYy.BYunOow12GrMbD5oomwgPVPxfu8fzTS', 1001);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
