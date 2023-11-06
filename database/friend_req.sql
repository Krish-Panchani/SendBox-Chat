-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 159.69.6.244
-- Generation Time: Oct 06, 2023 at 06:34 AM
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
-- Table structure for table `friend_req`
--

CREATE TABLE `friend_req` (
  `req_id` int(255) NOT NULL,
  `from_req_id` int(255) NOT NULL,
  `to_req_id` int(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `friend_req`
--

INSERT INTO `friend_req` (`req_id`, `from_req_id`, `to_req_id`, `status`) VALUES
(14, 950813576, 1014738211, 'Pending');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `friend_req`
--
ALTER TABLE `friend_req`
  ADD PRIMARY KEY (`req_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `friend_req`
--
ALTER TABLE `friend_req`
  MODIFY `req_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
