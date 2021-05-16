-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2021 at 08:50 PM
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
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`) VALUES
(1, 'yasirrana9002131@gmail.com', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `userEmail` varchar(250) NOT NULL,
  `contact_id` int(11) NOT NULL,
  `contact_email` varchar(250) NOT NULL,
  `contact_name` varchar(250) NOT NULL,
  `contact_image` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `userEmail`, `contact_id`, `contact_email`, `contact_name`, `contact_image`) VALUES
(3, 'noorulan45@gmail.com', 55, 'yasir12@innovadel-tech-geoinfo.com', 'Yasir', '');

-- --------------------------------------------------------

--
-- Table structure for table `drafts`
--

CREATE TABLE `drafts` (
  `id` int(11) NOT NULL,
  `senderID` int(11) NOT NULL,
  `senderEmail` varchar(250) NOT NULL,
  `emailSubject` mediumtext NOT NULL,
  `emailBody` longtext NOT NULL,
  `receiverID` int(11) NOT NULL,
  `receiverEmail` varchar(250) NOT NULL,
  `date` varchar(50) NOT NULL DEFAULT current_timestamp(),
  `time` varchar(50) NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `drafts`
--

INSERT INTO `drafts` (`id`, `senderID`, `senderEmail`, `emailSubject`, `emailBody`, `receiverID`, `receiverEmail`, `date`, `time`) VALUES
(3, 56, 'noorulan45@gmail.com', '', 'my email', 0, '', 'May 03', '11:27:58 PM');

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
  `spam` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `emails`
--

INSERT INTO `emails` (`id`, `senderID`, `senderEmail`, `emailSubject`, `emailBody`, `receiverID`, `receiverEmail`, `date`, `time`, `read_status`, `spam`) VALUES
(9, 56, 'noorulan45@gmail.com', 'First Email', 'Hello', 54, 'yasir12@gmail.com', 'Apr 27', '04:10:08 PM', 1, 0),
(12, 54, 'yasir12@gmail.com', 'Email', 'heeloo', 56, 'noorulan45@gmail.com', 'May 01', '04:30:00 PM', 1, 0),
(13, 54, 'yasir12@gmail.com', 'email', 'dfgfhjgf', 56, 'noorulan45@gmail.com', 'May 01', '04:31:00 PM', 1, 1),
(15, 56, 'noorulan45@gmail.com', 'Email', 'hello', 54, 'yasir12@gmail.com', 'May 01', '04:42:42 PM', 0, 0),
(18, 56, 'noorulan45@gmail.com', 'Emails', 'Hello', 54, 'yasir12@gmail.com', 'May 01', '11:57:01 PM', 0, 0),
(19, 54, 'yasir12@gmail.com', 'My first email', 'Hello', 56, 'noorulan45@gmail.com', 'May 02', '12:28:59 AM', 1, 0),
(20, 56, 'noorulan45@gmail.com', 'My First Email', 'Hello', 54, 'yasir12@gmail.com', 'May 02', '12:29:46 AM', 0, 0),
(22, 56, 'noorulan45@gmail.com', 'My first email', '---------- Forwarded message --------- <br>\r\n                                            From: Bashir &lt; yasir12@gmail.com &gt; <br>\r\n                                            Date: May 02 at 12:28:59 AM<br>\r\n                                            Subject: My first email<br>\r\n                                            To: &lt; noorulan45@gmail.com &gt; <br>\r\n                                            <br>\r\n                                            Hello', 54, 'yasir12@gmail.com', 'May 03', '12:26:01 AM', 1, 0),
(24, 56, 'noorulan45@gmail.com', 'draft email', 'email', 54, 'yasir12@gmail.com', 'May 04', '12:37:30 AM', 1, 0),
(25, 56, 'noorulan45@gmail.com', 'Draft test', 'new email', 54, 'yasir12@gmail.com', 'May 04', '12:38:11 AM', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `starred`
--

CREATE TABLE `starred` (
  `id` int(11) NOT NULL,
  `email_id` int(11) NOT NULL,
  `userEmail` varchar(250) NOT NULL,
  `senderID` int(11) NOT NULL,
  `senderEmail` varchar(250) NOT NULL,
  `emailSubject` varchar(250) NOT NULL,
  `emailBody` longtext NOT NULL,
  `receiverID` int(11) NOT NULL,
  `receiverEmail` varchar(250) NOT NULL,
  `date` varchar(250) NOT NULL,
  `time` varchar(250) NOT NULL,
  `status` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `starred`
--

INSERT INTO `starred` (`id`, `email_id`, `userEmail`, `senderID`, `senderEmail`, `emailSubject`, `emailBody`, `receiverID`, `receiverEmail`, `date`, `time`, `status`) VALUES
(10, 12, 'noorulan45@gmail.com', 54, 'yasir12@gmail.com', 'Email', 'heeloo', 56, 'noorulan45@gmail.com', 'May 01', '04:30:00 PM', 'inbox'),
(11, 24, 'noorulan45@gmail.com', 56, 'noorulan45@gmail.com', 'draft email', 'email', 54, 'yasir12@gmail.com', 'May 04', '12:37:30 AM', 'sent'),
(12, 3, 'noorulan45@gmail.com', 0, '', '', 'my email', 0, '', 'May 03', '11:27:58 PM', 'draft');

-- --------------------------------------------------------

--
-- Table structure for table `trash`
--

CREATE TABLE `trash` (
  `id` int(11) NOT NULL,
  `userEmail` varchar(250) NOT NULL,
  `senderID` int(11) NOT NULL,
  `senderEmail` varchar(250) NOT NULL,
  `emailSubject` mediumtext NOT NULL,
  `emailBody` longtext NOT NULL,
  `receiverID` int(11) NOT NULL,
  `receiverEmail` varchar(250) NOT NULL,
  `date` varchar(50) NOT NULL,
  `time` varchar(50) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `trash`
--

INSERT INTO `trash` (`id`, `userEmail`, `senderID`, `senderEmail`, `emailSubject`, `emailBody`, `receiverID`, `receiverEmail`, `date`, `time`, `status`) VALUES
(3, 'noorulan45@gmail.com', 56, 'noorulan45@gmail.com', 'Third Email', 'Hello', 54, 'yasir12@gmail.com', 'May 01', '04:38:30 PM', 'sent');

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
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `drafts`
--
ALTER TABLE `drafts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `emails`
--
ALTER TABLE `emails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `starred`
--
ALTER TABLE `starred`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trash`
--
ALTER TABLE `trash`
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
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `drafts`
--
ALTER TABLE `drafts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `emails`
--
ALTER TABLE `emails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `starred`
--
ALTER TABLE `starred`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `trash`
--
ALTER TABLE `trash`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
