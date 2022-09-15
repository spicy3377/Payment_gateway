-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 15, 2022 at 10:00 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `payment`
--

-- --------------------------------------------------------

--
-- Table structure for table `all_food`
--

CREATE TABLE `all_food` (
  `id` int(11) NOT NULL,
  `food` text NOT NULL,
  `price` varchar(250) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `all_food`
--

INSERT INTO `all_food` (`id`, `food`, `price`) VALUES
(1, 'Rice and Beans', '150000'),
(2, 'Moi Moi', '250000'),
(3, 'Chesse Pizza', '60000'),
(4, 'Coated yam', '300000'),
(5, 'Spaghetti', '75000'),
(6, 'Oriented salat', '55000'),
(7, 'Bean cake', '45000'),
(8, 'Indomie', '55000'),
(9, 'Pounded yam and Egusi', '40000'),
(10, 'French Potatoe', '60000'),
(11, 'Pete', '55000'),
(12, 'Bread and beans', '250000');

-- --------------------------------------------------------

--
-- Table structure for table `food_order`
--

CREATE TABLE `food_order` (
  `id` int(11) NOT NULL,
  `unique_id` varchar(250) NOT NULL,
  `food` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `status` enum('0','1') NOT NULL,
  `date_n_time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `food_order`
--

INSERT INTO `food_order` (`id`, `unique_id`, `food`, `email`, `status`, `date_n_time`) VALUES
(1, 'U0btgqcG5hXk', 'Bread and beans', '', '0', '2022-09-14 00:43:13'),
(2, 'p4g1pIfTL31F', 'Bread and beans', 'japhethjonathan793@gmail.com', '0', '2022-09-14 06:25:59'),
(3, 'bKMro17SfiSB', 'Bread and beans', 'japhethjonathan793@gmail.com', '0', '2022-09-14 06:28:56'),
(4, 'Y1pfkFm01PBf', 'Bread and beans', 'japhethjonathan793@gmail.com', '0', '2022-09-14 06:31:42'),
(5, 'KVPdwVY65gRf', 'Bread and beans', 'www.dorcasjames@gmail.com', '0', '2022-09-14 08:56:15'),
(6, 'T1tiBJ0fbPDz', 'Bread and beans', 'www.samuel@gmail.com', '0', '2022-09-14 08:57:38'),
(7, 'MsT9C7xOBnHU', 'Bread and beans', 'mozila@gmail.com', '0', '2022-09-14 08:59:00'),
(8, 'gqf6Ndxxl4Ch', 'Bread and beans', 'www.grace@gmail.com', '0', '2022-09-14 10:50:45'),
(9, 'KsBE5zsum4zF', 'Bread and beans', 'www.grace@gmail.com', '0', '2022-09-14 10:55:08'),
(10, 'p6NV8qIjIJuj', 'Bread and beans', 'www.chioma@gmail.com', '0', '2022-09-14 11:28:58'),
(11, 'uDgzsOItYUZM', 'Chesse Pizza', 'peave@gmail.com', '0', '2022-09-14 18:15:32'),
(12, 'eYac701v4qjs', 'Pete', 'james@outlook.com', '0', '2022-09-14 19:37:29'),
(13, 'bC5gDru3HXPy', 'Moi Moi', 'www.dorcasjames@gmail.com', '0', '2022-09-15 06:46:24'),
(14, 'zB4MSNsc1O8g', 'Moi Moi', 'kevin@gmail.com', '0', '2022-09-15 07:05:12'),
(15, 'I3ZuNBOnvaaA', 'Rice and Beans', 'dorcasjames@gmail.com', '0', '2022-09-15 07:06:00'),
(16, '3Hzt4gddLDVg', 'Rice and Beans', 'dorcasjames@gmail.com', '0', '2022-09-15 07:07:19'),
(17, 'SpPGzdSc9Jkv', 'Spaghetti', 'bipzap@gmail.com', '0', '2022-09-15 07:56:39');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `unique_id` varchar(250) NOT NULL,
  `auto_name` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `ip_address` varchar(250) NOT NULL,
  `date_n_time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `unique_id`, `auto_name`, `email`, `ip_address`, `date_n_time`) VALUES
(1, 'uPkJAFW1YC1Q', 'Irecharge user', '', '', '2022-09-13 23:35:52'),
(3, 'mgndb0wrd9Rq', 'Irecharge user', '', '', '2022-09-13 23:39:41'),
(4, '3pDZsy9Md1en', 'Irecharge user', '', '', '2022-09-13 23:39:44'),
(5, 'bi5k6uRfN6kH', 'Irecharge user', '', '', '2022-09-13 23:46:18'),
(6, 'PUIjZYm3B4P0', 'Irecharge user', '', '', '2022-09-13 23:46:33'),
(7, 'vNmSFtPQqvtD', 'Irecharge user', '', '', '2022-09-13 23:48:59'),
(8, '9YlYFekIBJeM', 'Irecharge user', '', '', '2022-09-13 23:49:28'),
(9, '96uyb0o6wPSo', 'Irecharge user', '', '', '2022-09-14 00:06:10'),
(10, '49mlvCLCCji5', 'Irecharge user', '', '', '2022-09-14 00:17:24'),
(11, 'U4zKSqIwoPUw', 'Irecharge user', '', '', '2022-09-14 00:30:59'),
(12, 'pN4BsGuWx4G1', 'Irecharge user', '', '', '2022-09-14 00:41:35'),
(13, 'H47mdYcdT4iP', 'Irecharge user', '', '', '2022-09-14 00:42:02'),
(14, 'U0btgqcG5hXk', 'Irecharge user', '', '', '2022-09-14 00:43:13'),
(15, 'p4g1pIfTL31F', 'Irecharge user', '', '', '2022-09-14 06:25:58'),
(16, 'bKMro17SfiSB', 'Irecharge user', '', '', '2022-09-14 06:28:55'),
(17, 'Y1pfkFm01PBf', 'Irecharge user', '', '', '2022-09-14 06:31:42'),
(18, 'KVPdwVY65gRf', 'Irecharge user', '', '', '2022-09-14 08:56:15'),
(19, 'T1tiBJ0fbPDz', 'Irecharge user', '', '', '2022-09-14 08:57:38'),
(20, 'MsT9C7xOBnHU', 'Irecharge user', '', '', '2022-09-14 08:59:00'),
(21, 'gqf6Ndxxl4Ch', 'Elroy Kucera', '', '', '2022-09-14 10:50:45'),
(22, 'KsBE5zsum4zF', 'Luz Serna', 'www.grace@gmail.com', '', '2022-09-14 10:55:08'),
(23, 'p6NV8qIjIJuj', 'Lawanda Geddes', 'www.chioma@gmail.com', '', '2022-09-14 11:28:58'),
(24, 'uDgzsOItYUZM', 'Anthony Grumbles', 'peave@gmail.com', '', '2022-09-14 18:15:32'),
(25, 'eYac701v4qjs', 'Tyisha Kucera', 'james@outlook.com', '', '2022-09-14 19:37:29'),
(26, 'bC5gDru3HXPy', 'Luz Schildgen', 'www.dorcasjames@gmail.com', '', '2022-09-15 06:46:24'),
(27, 'zB4MSNsc1O8g', 'Leigha Byron', 'kevin@gmail.com', '', '2022-09-15 07:05:12'),
(28, 'I3ZuNBOnvaaA', 'Bong Howe', 'dorcasjames@gmail.com', '', '2022-09-15 07:06:00'),
(29, '3Hzt4gddLDVg', 'Samatha Latson', 'dorcasjames@gmail.com', '', '2022-09-15 07:07:19'),
(30, 'SpPGzdSc9Jkv', 'Raleigh Klemp', 'bipzap@gmail.com', '', '2022-09-15 07:56:39');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `all_food`
--
ALTER TABLE `all_food`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `food_order`
--
ALTER TABLE `food_order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `all_food`
--
ALTER TABLE `all_food`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `food_order`
--
ALTER TABLE `food_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
