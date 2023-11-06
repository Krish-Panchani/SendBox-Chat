-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 159.69.6.244
-- Generation Time: Oct 06, 2023 at 06:31 AM
-- Server version: 10.11.5-MariaDB-1:10.11.5+maria~ubu2204
-- PHP Version: 8.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `site_3008`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `unique_id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `hastag` varchar(255) NOT NULL,
  `full_username` varchar(255) NOT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `about` varchar(150) NOT NULL DEFAULT '''I''''am Happy User''',
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL DEFAULT 'logo.jpg',
  `status` varchar(255) NOT NULL,
  `reg_datetime` datetime(6) NOT NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `unique_id`, `username`, `hastag`, `full_username`, `gender`, `about`, `email`, `password`, `img`, `status`, `reg_datetime`) VALUES
(1, 950813576, 'krishpanchani', '#1346', 'krishpanchani#1346', '', 'Hey, krish here.\r\nHow are your?', 'krishpanchani1346@gmail.com', 'encry-pass', '168853004620220317_095800.jpg', 'Active now', '2022-12-01 11:59:49.526267');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
