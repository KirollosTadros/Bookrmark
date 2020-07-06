-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 06, 2020 at 08:30 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Bookmark_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `KiroHenry_sites`
--

CREATE TABLE `KiroHenry_sites` (
  `id` int(11) NOT NULL,
  `title` varchar(30) DEFAULT NULL,
  `link` varchar(120) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `KiroHenry_sites`
--

INSERT INTO `KiroHenry_sites` (`id`, `title`, `link`) VALUES
(1, 'facebook', 'https://www.facebook.com'),
(2, 'twitter', 'https://www.twitter.com'),
(4, 'youtube (y)', 'https://www.youtube.com'),
(5, 'stack over flow', 'http://www.stackoverflow.com'),
(6, 'amazon', 'https://www.amazon.com'),
(7, 'netflix', 'www.netflix.com'),
(8, 'Wikipedia', 'https://www.wikipedia.com'),
(9, 'yahoo', 'https://www.yahoo.com'),
(10, 'Reddit', 'https://www.Reddit.com'),
(11, 'souq', 'https://www.souq.com');

-- --------------------------------------------------------

--
-- Table structure for table `sites`
--

CREATE TABLE `sites` (
  `id` int(11) NOT NULL,
  `title` varchar(30) NOT NULL,
  `link` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sites`
--

INSERT INTO `sites` (`id`, `title`, `link`) VALUES
(1, 'facebook', 'https://www.facebook.com'),
(2, 'twitter', 'https://www.twitter.com'),
(3, 'google', 'https://www.google.com'),
(4, 'youtube', 'https://www.youtube.com'),
(5, 'stack over flow', 'http://www.stackoverflow.com'),
(6, 'amazon', 'https://www.amazon.com'),
(7, 'netflix', 'www.netflix.com'),
(8, 'Wikipedia', 'https://www.wikipedia.com'),
(9, 'yahoo', 'https://www.yahoo.com'),
(10, 'Reddit', 'https://www.Reddit.com');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(31, 'KiroHenry', 'Kiro@kiro.com', '81dc9bdb52d04dc20036dbd8313ed055');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `KiroHenry_sites`
--
ALTER TABLE `KiroHenry_sites`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sites`
--
ALTER TABLE `sites`
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
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
