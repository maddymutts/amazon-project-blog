-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 15, 2018 at 03:05 PM
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
-- Table structure for table `blogpost`
--

CREATE TABLE `blogpost` (
  `postid` int(11) NOT NULL,
  `regno` varchar(15) NOT NULL,
  `hashtag` varchar(255) NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `content` longtext NOT NULL,
  `title` text NOT NULL,
  `image` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
('RA1511003020111', 'Madhu', 'madhumita.sampath@gmail.com', 'madhu', 3, 'Computer Science'),
('RA1511003020301', 'John', 'john@gmail.com', 'john', 3, 'Electronics and Communication'),
('RA1511003020311', 'Rocky', 'rocky@gmail.com', 'rocky', 2, 'Electronics and Communication'),
('RA1511003020320', 'Lily', 'lily@gmail.com', 'lily', 4, 'Electronics and Instrumentatio'),
('RA1511003020330', 'Mary', 'mary@gmail.com', 'mary', 3, 'Electronics and Communication'),
('RA1511003020333', 'Jack', 'jack@gmail.com', 'jack', 1, 'Electronics and Communication'),
('RA1511003020344', 'Tom', 'sawyer@gmail.com', '34b7da764b21d298ef307d04d', 3, 'Computer Science'),
('RA1511003020351', 'Maddy', 'abc@gmail.com', '84811fed582a9c7b8cb41f68f', 2, 'Computer Science');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogpost`
--
ALTER TABLE `blogpost`
  ADD PRIMARY KEY (`postid`),
  ADD KEY `regno` (`regno`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`regno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogpost`
--
ALTER TABLE `blogpost`
  MODIFY `postid` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `blogpost`
--
ALTER TABLE `blogpost`
  ADD CONSTRAINT `blogpost_ibfk_1` FOREIGN KEY (`regno`) REFERENCES `user` (`regno`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
