-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 20, 2017 at 09:52 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wom`
--

-- --------------------------------------------------------

--
-- Table structure for table `characters`
--

CREATE TABLE `characters` (
  `char_id` int(11) NOT NULL,
  `char_name` varchar(50) NOT NULL,
  `class_id` int(11) NOT NULL,
  `char_xp` int(100) NOT NULL,
  `char_lv` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `characters`
--

INSERT INTO `characters` (`char_id`, `char_name`, `class_id`, `char_xp`, `char_lv`) VALUES
(1, 'WarriorCvexa', 1, 100, 1),
(2, 'MageCvexa', 1, 100, 5);

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `class_id` int(11) NOT NULL,
  `class_name` varchar(50) NOT NULL,
  `race_id` int(11) NOT NULL,
  `class_avatar` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `magics`
--

CREATE TABLE `magics` (
  `magic_id` int(11) NOT NULL,
  `magic_name` varchar(50) NOT NULL,
  `magic_type` int(11) NOT NULL,
  `magic_avatar` varchar(200) NOT NULL,
  `magic_power` int(11) NOT NULL,
  `magic_info` varchar(200) NOT NULL,
  `magic_req_lv` int(11) NOT NULL,
  `class_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `magics`
--

INSERT INTO `magics` (`magic_id`, `magic_name`, `magic_type`, `magic_avatar`, `magic_power`, `magic_info`, `magic_req_lv`, `class_id`) VALUES
(1, 'Bolt', 1, '', 100, 'bla bla ', 1, 1),
(2, 'sad', 1, '', 2, 'very sad magic', 1, 1),
(3, 'Happiness', 2, '', 2000, 'Very strong spell against demons', 5, 1);

-- --------------------------------------------------------

--
-- Table structure for table `magic_type`
--

CREATE TABLE `magic_type` (
  `type_id` int(11) NOT NULL,
  `type` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `magic_type`
--

INSERT INTO `magic_type` (`type_id`, `type`) VALUES
(1, 'attack'),
(2, 'defence');

-- --------------------------------------------------------

--
-- Table structure for table `race`
--

CREATE TABLE `race` (
  `race_id` int(11) NOT NULL,
  `race_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `race`
--

INSERT INTO `race` (`race_id`, `race_name`) VALUES
(1, 'Programmer'),
(2, 'Dentist');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `user_pass` varchar(50) NOT NULL,
  `user_avatar` varchar(200) NOT NULL,
  `characters_id` int(11) NOT NULL,
  `date_deleted` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_pass`, `user_avatar`, `characters_id`, `date_deleted`) VALUES
(2, 'cvexa', 'cvexa', '', 2, NULL),
(3, 'cvexa2', 'cvexa', '', 1, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `characters`
--
ALTER TABLE `characters`
  ADD PRIMARY KEY (`char_id`),
  ADD KEY `char_race` (`class_id`),
  ADD KEY `char_race_2` (`class_id`);

--
-- Indexes for table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`class_id`),
  ADD KEY `race_id` (`race_id`);

--
-- Indexes for table `magics`
--
ALTER TABLE `magics`
  ADD PRIMARY KEY (`magic_id`),
  ADD KEY `magic_type` (`magic_type`),
  ADD KEY `magic_race` (`class_id`);

--
-- Indexes for table `magic_type`
--
ALTER TABLE `magic_type`
  ADD PRIMARY KEY (`type_id`);

--
-- Indexes for table `race`
--
ALTER TABLE `race`
  ADD PRIMARY KEY (`race_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `user_character` (`characters_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `characters`
--
ALTER TABLE `characters`
  MODIFY `char_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `class`
--
ALTER TABLE `class`
  MODIFY `class_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `magics`
--
ALTER TABLE `magics`
  MODIFY `magic_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `magic_type`
--
ALTER TABLE `magic_type`
  MODIFY `type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `race`
--
ALTER TABLE `race`
  MODIFY `race_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
