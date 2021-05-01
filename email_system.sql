-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 01, 2021 at 09:52 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `email_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `emails`
--

CREATE TABLE `emails` (
  `id` int(11) NOT NULL,
  `senderID` int(11) NOT NULL,
  `senderEmail` varchar(250) NOT NULL,
  `emailSubject` mediumtext NOT NULL,
  `emailBody` longtext NOT NULL,
  `receiverID` int(11) NOT NULL,
  `receiverEmail` varchar(250) NOT NULL,
  `date` varchar(50) NOT NULL DEFAULT current_timestamp(),
  `time` varchar(50) NOT NULL,
  `read_status` int(1) NOT NULL DEFAULT 0,
  `favorite` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `emails`
--

INSERT INTO `emails` (`id`, `senderID`, `senderEmail`, `emailSubject`, `emailBody`, `receiverID`, `receiverEmail`, `date`, `time`, `read_status`, `favorite`) VALUES
(9, 56, 'noorulan45@gmail.com', 'First Email', 'Hello', 54, 'yasir12@gmail.com', 'Apr 27', '04:10:08 PM', 1, 0),
(12, 54, 'yasir12@gmail.com', 'Email', 'heeloo', 56, 'noorulan45@gmail.com', 'May 01', '04:30:00 PM', 0, 0),
(13, 54, 'yasir12@gmail.com', 'email', 'dfgfhjgf', 56, 'noorulan45@gmail.com', 'May 01', '04:31:00 PM', 0, 0),
(14, 56, 'noorulan45@gmail.com', 'Third Email', 'Hello', 54, 'yasir12@gmail.com', 'May 01', '04:38:30 PM', 1, 0),
(15, 56, 'noorulan45@gmail.com', 'Email', 'hello', 54, 'yasir12@gmail.com', 'May 01', '04:42:42 PM', 0, 0),
(16, 54, 'yasir12@gmail.com', '', 'Hello', 56, 'noorulan45@gmail.com', 'May 01', '04:46:31 PM', 0, 0),
(18, 56, 'noorulan45@gmail.com', 'Emails', 'Hello', 54, 'yasir12@gmail.com', 'May 01', '11:57:01 PM', 0, 0),
(19, 54, 'yasir12@gmail.com', 'My first email', 'Hello', 56, 'noorulan45@gmail.com', 'May 02', '12:28:59 AM', 0, 0),
(20, 56, 'noorulan45@gmail.com', 'My First Email', 'Hello', 54, 'yasir12@gmail.com', 'May 02', '12:29:46 AM', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `full_name` varchar(250) NOT NULL,
  `phone` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `full_name`, `phone`, `password`) VALUES
(54, 'bashir', 'yasir12@gmail.com', 'Bashir', '534545345', '12345678'),
(55, 'yasir', 'yasir12@innovadel-tech-geoinfo.com', 'Yasir', '534545345', '1234'),
(56, 'Noor', 'noorulan45@gmail.com', 'Noor', '03001234567', '12345678');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `emails`
--
ALTER TABLE `emails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `emails`
--
ALTER TABLE `emails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
