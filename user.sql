-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 23, 2021 at 05:14 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `user`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity_log`
--

CREATE TABLE `activity_log` (
  `Username` varchar(100) NOT NULL,
  `Activity` varchar(100) NOT NULL,
  `Time` varchar(100) NOT NULL,
  `Date` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `activity_log`
--

INSERT INTO `activity_log` (`Username`, `Activity`, `Time`, `Date`) VALUES
('David', 'LOGIN', '11:01:08', '2021-04-23'),
('David', 'LOGOUT', '11:01:46', '2021-04-23'),
('David', 'CHANGE PASSWORD', '11:03:05', '2021-04-23'),
('David', 'LOGIN', '11:03:27', '2021-04-23'),
('David', 'LOGOUT', '11:03:57', '2021-04-23');

-- --------------------------------------------------------

--
-- Table structure for table `authentication`
--

CREATE TABLE `authentication` (
  `User_ID` varchar(100) NOT NULL,
  `Code` int(100) NOT NULL,
  `Created At` varchar(100) NOT NULL,
  `Expiration` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `authentication`
--

INSERT INTO `authentication` (`User_ID`, `Code`, `Created At`, `Expiration`) VALUES
('David', 227391, '10:16:53', '2021-04-22'),
('David', 990445, '10:16:56', '2021-04-22'),
('David', 573705, '2021-04-22 10:24:41', '1619058291'),
('David', 592762, '2021-04-22 10:24:44', '1619058294'),
('David', 112241, '2021-04-22 10:25:24', '2021-04-22'),
('David', 412383, '2021-04-22 10:25:28', '2021-04-22'),
('David', 842239, '2021-04-22 10:29:02', '2021-04-23 22:29:02'),
('David', 585047, '2021-04-22 10:29:05', '2021-04-23 22:29:05'),
('', 103791, '2021-04-22 10:57:43', '2021-04-23 22:57:43'),
('David', 543564, '2021-04-22 10:58:04', '2021-04-23 22:58:04'),
('David', 545573, '2021-04-22 10:58:08', '2021-04-23 22:58:08'),
('David', 248242, '2021-04-22 11:24:39', '2021-04-23 23:24:39'),
('David', 808234, '2021-04-22 11:24:42', '2021-04-23 23:24:42'),
('David', 794800, '2021-04-22 11:40:27', '2021-04-23 23:40:27'),
('David', 104319, '2021-04-22 11:40:31', '2021-04-23 23:40:31'),
('David', 770200, '2021-04-22 11:40:49', '2021-04-23 23:40:49'),
('David', 816728, '2021-04-22 11:40:53', '2021-04-23 23:40:53'),
('David', 113041, '2021-04-22 11:41:28', '2021-04-23 23:41:28'),
('David', 469404, '2021-04-22 11:41:31', '2021-04-23 23:41:31'),
('David', 781519, '2021-04-22 11:41:45', '2021-04-23 23:41:45'),
('David', 256982, '2021-04-22 11:41:47', '2021-04-23 23:41:47'),
('David', 928142, '2021-04-22 11:42:22', '2021-04-23 23:42:22'),
('David', 940294, '2021-04-22 11:42:25', '2021-04-23 23:42:25'),
('David', 914863, '2021-04-22 11:42:58', '2021-04-23 23:42:58'),
('David', 554424, '2021-04-22 11:43:01', '2021-04-23 23:43:01'),
('David', 710387, '2021-04-22 11:43:18', '2021-04-23 23:43:18'),
('David', 901978, '2021-04-22 11:43:20', '2021-04-23 23:43:20'),
('David', 398977, '11:46:12', '2021-04-23 23:46:12'),
('David', 690319, '11:46:16', '2021-04-23 23:46:16'),
('David', 623961, '11:46:32', '2021-04-23 23:46:32'),
('David', 646327, '11:46:34', '2021-04-23 23:46:34'),
('David', 605858, '11:46:59', '2021-04-23 23:46:59'),
('David', 766219, '11:47:02', '2021-04-23 23:47:02'),
('David', 605460, '11:47:17', '2021-04-23 23:47:17'),
('David', 863132, '11:47:20', '2021-04-23 23:47:20'),
('David', 359954, '11:47:40', '2021-04-23 23:47:40'),
('David', 121144, '11:47:43', '2021-04-23 23:47:43'),
('David', 537028, '11:48:05', '2021-04-23 23:48:05'),
('David', 604311, '11:48:08', '2021-04-23 23:48:08'),
('David', 764221, '11:48:43', '2021-04-23 23:48:43'),
('David', 944213, '11:48:46', '2021-04-23 23:48:46'),
('David', 152022, '02:37:52', '2021-04-24 02:37:52'),
('David', 168530, '02:37:55', '2021-04-24 02:37:55'),
('David', 921890, '03:45:08', '2021-04-24 15:45:08'),
('David', 657857, '03:45:12', '2021-04-24 15:45:12'),
('David', 889370, '04:32:10', '2021-04-24 16:32:10'),
('David', 195221, '04:32:13', '2021-04-24 16:32:13'),
('David', 857473, '10:30:00', '2021-04-24 22:30:00'),
('David', 297302, '10:30:03', '2021-04-24 22:30:03'),
('David', 689315, '10:37:14', '2021-04-24 22:37:14'),
('David', 436226, '10:37:16', '2021-04-24 22:37:16'),
('David', 947985, '10:43:36', '2021-04-24 22:43:36'),
('David', 680074, '10:43:40', '2021-04-24 22:43:40'),
('David', 996067, '11:01:04', '2021-04-24 23:01:04'),
('David', 886231, '11:01:08', '2021-04-24 23:01:08'),
('David', 449110, '11:03:24', '2021-04-24 23:03:24'),
('David', 156818, '11:03:27', '2021-04-24 23:03:27');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `Username` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Confirm_Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`Username`, `Email`, `Password`, `Confirm_Password`) VALUES
('David', 'david@gmail.com', 'David@222', 'David@222');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`Username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
