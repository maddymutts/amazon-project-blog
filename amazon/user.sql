-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 12, 2018 at 04:28 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blogapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `regno` varchar(15) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(25) NOT NULL,
  `year` int(10) NOT NULL,
  `dept` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Table to store user account details';

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`regno`, `name`, `email`, `password`, `year`, `dept`) VALUES
('RA1511003020320', 'Lily', 'lily@gmail.com', 'lily', 4, 'Electronics and Instrumentatio'),
('RA1511003020330', 'Mary', 'mary@gmail.com', 'mary', 3, 'Electronics and Communication'),
('RA1511003020344', 'Tom', 'sawyer@gmail.com', '34b7da764b21d298ef307d04d', 3, 'Computer Science'),
('RA1511003020351', 'Maddy', 'abc@gmail.com', '84811fed582a9c7b8cb41f68f', 2, 'Computer Science'),
('RA1511003020356', 'Madhumita', 'madhumita.sampath@gmail.com', '84811fed582a9c7b8cb41f68f', 0, 'Computer Science');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`regno`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
