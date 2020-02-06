-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 06, 2020 at 04:41 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `oc`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`) VALUES
(1, 'testeste', 'ertertre', 'dsfdsf@cv.com'),
(2, 'samuel', 'A', 'mike.duodu.annan@gmail.com'),
(3, 'mike', 'a', 'apeatuaayisi@gmail.com'),
(4, 'mike', 'a', 's@gmail.com'),
(5, 'admin', 'A', 'A@B.COM'),
(6, 'SB/DHR/13/0016', '', 'sirnobys@gmail.com'),
(7, 'dddddddddddd', 's', 'A@c.COM'),
(8, '', '', ''),
(9, 'mmmmmmmmm', 'fffff', 'a@bn.com'),
(10, 'samueln', 'hh', 'sirnobbys@gmail.com'),
(11, 'KK', 'KK', 'sirnKKobys@gmail.com'),
(12, 'ee', 'd41d8cd98f00b204e9800998ecf8427e', ''),
(13, 'ee', 'd41d8cd98f00b204e9800998ecf8427e', ''),
(14, 'mike', 'd41d8cd98f00b204e9800998ecf8427e', ''),
(15, 'mike', 'd41d8cd98f00b204e9800998ecf8427e', ''),
(16, 's', 'd41d8cd98f00b204e9800998ecf8427e', ''),
(17, 'mike', '', 'a@d.com'),
(18, 's', 'password', 'nurhodelta@d'),
(19, 's', 'password', 'nurhodelta@d'),
(20, 's', 'password', 'nurhodelta@d'),
(21, 's', 'password', 'nurhodelta@d'),
(22, 's', 'password', 'nurhodelta@d'),
(23, 's', 'password', 'nurhodelta@d'),
(24, '', '', ''),
(25, '', '', ''),
(26, '', '', ''),
(27, 'h', '', '');

--
-- Indexes for dumped tables
--

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
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
