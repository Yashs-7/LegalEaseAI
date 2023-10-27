-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 01, 2021 at 09:22 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `youtube`
--

-- --------------------------------------------------------

--
-- Table structure for table `content`
--

CREATE TABLE `content` (
  `id` int(11) NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `content`
--

INSERT INTO `content` (`id`, `content`) VALUES
(1, 'In tincidunt semper elit posuere placerat. Etiam placerat sagittis congue. Nam venenatis scelerisque massa sed maximus. Ut id accumsan dolor'),
(2, 'Donec tortor turpis, sodales sed diam at, luctus tempus ligula. Vestibulum sem diam, luctus tincidunt lectus sed, sodales volutpat purus. Nam venenatis tellus ante, ut convallis tellus pretium a. Nunc non viverra erat, eget accumsan diam. Quisque viverra, tortor ut maximus porta'),
(3, 'at nunc sodales orci, et malesuada neque tellus in libero. Donec posuere, arcu a euismod fringilla, quam neque elementum ipsum, a faucibus libero augue in tellus. Suspendisse commodo orci condimentum, accumsan lacus at, placerat eros. Aliquam et pulvinar justo, non volutpat nulla. Integer et quam at sapien fermentum posuere sit amet ac massa. Nulla id luctus tortor. Praesent non luctus ligula. Donec a nulla ut augue iaculis consectetur ut quis tortor. Mauris a rhoncus mauris. ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `content`
--
ALTER TABLE `content`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `content`
--
ALTER TABLE `content`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
