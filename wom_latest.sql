-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 21 апр 2017 в 22:21
-- Версия на сървъра: 10.1.21-MariaDB
-- PHP Version: 7.0.15

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
-- Структура на таблица `magics`
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
-- Схема на данните от таблица `magics`
--

INSERT INTO `magics` (`magic_id`, `magic_name`, `magic_type`, `magic_avatar`, `magic_power`, `magic_info`, `magic_req_lv`, `class_id`) VALUES
(1, 'Bolt', 1, '', 100, 'bla bla ', 1, 1),
(2, 'sad', 1, '', 2, 'very sad magic', 2, 1),
(3, 'Happiness', 2, '', 2000, 'Very strong spell against demons', 3, 1),
(4, 'blabla', 2, '', 2000, 'Very strong spell against demons', 3, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `magics`
--
ALTER TABLE `magics`
  ADD PRIMARY KEY (`magic_id`),
  ADD KEY `magic_type` (`magic_type`),
  ADD KEY `magic_race` (`class_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `magics`
--
ALTER TABLE `magics`
  MODIFY `magic_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
