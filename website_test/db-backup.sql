-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 07, 2019 at 07:42 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.1.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fitness_tracker_app`
--

-- --------------------------------------------------------

--
-- Table structure for table `loginuser`
--

CREATE TABLE `loginuser` (
  `adminid` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `loginuser`
--

INSERT INTO `loginuser` (`adminid`, `username`, `email`, `password`) VALUES
(1, 'sahil', 'sahil@gmail.com', 'helloworld'),
(2, 'sahilsamani', 'ryan45@yahoo.com', 'Hello'),
(3, 'sahilsamani', 'ryan45@yahoo.com', 'Hello'),
(4, 'sahilsamani', 'ryan45@yahoo.com', 'fc5e038d38a57032085441e7fe7010b0'),
(5, 'cameron', 'sahil99@gmail.com', 'a8b767bb9cf0938dc7f40603f33987e5'),
(6, 'manav', 'manavk45@gmail.com', '07fe2f5c44371fecf319d3231b73f3fe'),
(7, 'Johnson', 'jh34@hotmail.com', '79ab945544e5bc017a2317b6146ed3aa');

-- --------------------------------------------------------

--
-- Table structure for table `works`
--

CREATE TABLE `works` (
  `id` int(10) UNSIGNED NOT NULL,
  `workout_type` varchar(3) NOT NULL,
  `shoulders` varchar(30) NOT NULL,
  `chest` varchar(50) NOT NULL,
  `back` varchar(30) DEFAULT NULL,
  `biceps` varchar(30) DEFAULT NULL,
  `triceps` varchar(30) DEFAULT NULL,
  `abs` varchar(30) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `works`
--

INSERT INTO `works` (`id`, `workout_type`, `shoulders`, `chest`, `back`, `biceps`, `triceps`, `abs`, `date`) VALUES
(2, '', 'shoulder press', 'pushups', 'one arm row', 'bicep curls', 'tricep push-down', 'plank', '2019-04-06 23:00:59'),
(3, '', 'military press with dumbbells', 'chest flyes', 'lat pull down', 'hammer curls', 'skull crushers', 'russian twist', '2019-04-06 23:05:06'),
(4, '', 'Arnold Press', 'Machine Decline Press', 'Barbell Deadlift', 'EZ-Bar Curl', 'close grip pushups', 'crunches', '2019-04-07 05:40:08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `loginuser`
--
ALTER TABLE `loginuser`
  ADD PRIMARY KEY (`adminid`);

--
-- Indexes for table `works`
--
ALTER TABLE `works`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `loginuser`
--
ALTER TABLE `loginuser`
  MODIFY `adminid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `works`
--
ALTER TABLE `works`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
