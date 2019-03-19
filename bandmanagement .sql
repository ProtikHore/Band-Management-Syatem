-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 18, 2017 at 11:25 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bandmanagement`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `userid` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `dob` text NOT NULL,
  `usertype` varchar(255) NOT NULL DEFAULT 'user',
  `profileimage` varchar(255) NOT NULL DEFAULT 'avatar.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`userid`, `firstname`, `lastname`, `username`, `password`, `email`, `dob`, `usertype`, `profileimage`) VALUES
(43, 'Nasim', 'Anjum', 'nsmajm', 'nasim', 'nsmajm@gmail.com', '11/25/1995', 'admin', '43-6872'),
(48, 'Protik', 'Hore', 'protik', '123456789', 'protik.hore@gmail.com', '12/25/1995', 'user', '48-8599'),
(49, 'sunzid', 'mahmud', 'sunzid', 'sunzid02', 'sunzid02@gmail.com', '09/10/1996', 'admin', 'avatar.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `adminId` int(11) NOT NULL,
  `adminName` varchar(50) NOT NULL,
  `adminPassword` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`adminId`, `adminName`, `adminPassword`) VALUES
(1, 'sunzid', 'sunzid'),
(2, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `bandconcerts`
--

CREATE TABLE `bandconcerts` (
  `bandName` varchar(50) NOT NULL,
  `concertNo` int(11) NOT NULL,
  `concertName` varchar(1000) NOT NULL,
  `concertDateTime` datetime NOT NULL,
  `concertVenue` varchar(1000) NOT NULL,
  `ticketQuantity` int(11) NOT NULL,
  `perTicketPrice` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bandconcerts`
--

INSERT INTO `bandconcerts` (`bandName`, `concertNo`, `concertName`, `concertDateTime`, `concertVenue`, `ticketQuantity`, `perTicketPrice`) VALUES
('Linkin Park', 2, 'TexasLive', '2017-12-09 16:00:00', 'Texass', 47, 1000),
('Shironamhin', 3, 'Joy Banglaa', '2017-12-29 16:00:00', 'DhakaCity', 20000, 500),
('Linkin Park', 4, 'Billion Stars', '2017-12-18 16:00:00', 'LasVegas', 59998, 500);

-- --------------------------------------------------------

--
-- Table structure for table `bands`
--

CREATE TABLE `bands` (
  `bandId` int(11) NOT NULL,
  `bandName` varchar(50) NOT NULL,
  `bandType` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bands`
--

INSERT INTO `bands` (`bandId`, `bandName`, `bandType`) VALUES
(1, 'Linkin Park', 'Rock'),
(2, 'Shironamhin', 'Folk'),
(3, 'Shunno', 'Metal'),
(4, 'Nemesis', 'Rock'),
(5, 'Aurthohin', 'Metal'),
(6, 'Artcelll', 'Metal');

-- --------------------------------------------------------

--
-- Table structure for table `contents`
--

CREATE TABLE `contents` (
  `fileid` int(255) NOT NULL,
  `filename` varchar(255) NOT NULL,
  `upload_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `userid` int(255) NOT NULL,
  `file` varchar(255) NOT NULL,
  `filepicture` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `filetype` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contents`
--

INSERT INTO `contents` (`fileid`, `filename`, `upload_date`, `userid`, `file`, `filepicture`, `category`, `filetype`) VALUES
(10, 'Naam Shabana- Dil Hua Besharam Full Video - Akshay Kumar, Taapsee Pannu', '2017-11-11 11:33:22', 42, '42-6924.mp4', '42-6687.jpg', 'Rock', 'Video'),
(11, 'Kaafirana – Joker', '2017-11-12 07:04:42', 42, '42-8503.mp4', '42-6632.jpg', 'Rock', 'Video'),
(12, 'Hello', '2017-11-15 04:12:38', 40, '40-8535.mp4', '40-1875.jpg', 'Rock', 'Video'),
(13, 'TEST', '2017-11-15 04:13:50', 40, '40-9380.webm', '40-4556.jpg', 'Rock', 'Video'),
(14, 'twst 3', '2017-11-15 04:34:42', 40, '40-1994.webm', '40-6736.jpg', 'Folk', 'Video'),
(15, 'Test', '2017-11-15 22:53:18', 43, '43-2047.mp4', '43-4132.jpg', 'Rock', 'Video'),
(16, 'fefe', '2017-11-15 22:56:56', 43, '43-3975.webm', '43-3886.png', 'Rock', 'Video'),
(17, 'folkk', '2017-11-15 22:57:35', 43, '43-8559.webm', '43-2315.jpg', 'Folk', 'Video'),
(18, 'songs1', '2017-11-17 01:20:11', 48, '48-4302.mp4', '48-7755.JPG', 'Rock', 'Video');

-- --------------------------------------------------------

--
-- Table structure for table `tickets`
--

CREATE TABLE `tickets` (
  `ticketId` int(50) NOT NULL,
  `userName` varchar(50) NOT NULL,
  `userEmail` varchar(50) NOT NULL,
  `userMobileNo` int(50) NOT NULL,
  `concertName` varchar(50) NOT NULL,
  `concertDateTime` datetime NOT NULL,
  `issueDate` date NOT NULL,
  `concertVenue` varchar(500) NOT NULL,
  `ticketQuantity` int(50) NOT NULL,
  `totalPrice` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tickets`
--

INSERT INTO `tickets` (`ticketId`, `userName`, `userEmail`, `userMobileNo`, `concertName`, `concertDateTime`, `issueDate`, `concertVenue`, `ticketQuantity`, `totalPrice`) VALUES
(6, 'Protik', 'protik.hore@gmail.com', 1912969336, 'Tribute to Chester', '2017-12-06 16:00:00', '2017-11-15', 'Newyork', 3, 60),
(7, 'sunzid', 'sunzid02@gmail.com', 1674563623, 'Tribute to Chester', '2017-12-06 16:00:00', '2017-11-15', 'Newyork', 2, 40),
(8, 'songita', 'dhar@protik.com', 123, 'Tribute to Chester', '2017-12-06 16:00:00', '2017-11-15', 'Newyork', 2, 40),
(9, 'rabbi', 'rabbi@yahoo.com', 1675298797, 'Tribute to Chester', '2017-12-06 16:00:00', '2017-11-15', 'Newyork', 2, 40),
(10, 'abu', 'abu@babu.com', 1235465, 'Joy Bangla', '2017-12-29 16:00:00', '2017-11-15', 'Dhaka', 2, 400),
(12, 'dfgg', 'grtgre@bhgh.com', 2586, 'Joy Bangla', '2017-12-29 16:00:00', '2017-11-15', 'Dhaka', 3, 600),
(13, 'Nasim ANjum', 'nsmajm1995@gmail.com', 1750638163, 'yoyo', '2017-12-26 14:20:05', '2017-11-16', 'ghg', 3, 63),
(14, 'jkjk', 'kkj@kjk.com', 4454, 'yoyo', '2017-12-26 14:20:05', '2017-11-17', 'ghg', 2, 42),
(15, 'gjhh', 'jgh@ghj.com', 6745, 'Billion Stars', '2017-12-18 16:00:00', '2017-11-17', 'Las Vegas', 2, 10000),
(16, 'jabbar', 'j@c.com', 113, 'TexasLive', '2017-12-09 16:00:00', '2017-11-17', 'Texas', 1, 1000),
(17, 'asasd', 's@y.com', 8888888, 'TexasLive', '2017-12-09 16:00:00', '2017-11-18', 'Texass', 1, 1000),
(18, 'ss', 's@x.com', 23345, 'TexasLive', '2017-12-09 16:00:00', '2017-11-18', 'Texass', 1, 1000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`userid`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`adminId`);

--
-- Indexes for table `bandconcerts`
--
ALTER TABLE `bandconcerts`
  ADD PRIMARY KEY (`concertNo`),
  ADD UNIQUE KEY `concertNo` (`concertNo`);

--
-- Indexes for table `bands`
--
ALTER TABLE `bands`
  ADD PRIMARY KEY (`bandId`);

--
-- Indexes for table `contents`
--
ALTER TABLE `contents`
  ADD PRIMARY KEY (`fileid`);

--
-- Indexes for table `tickets`
--
ALTER TABLE `tickets`
  ADD PRIMARY KEY (`ticketId`),
  ADD UNIQUE KEY `mn` (`userMobileNo`),
  ADD UNIQUE KEY `userEmail` (`userEmail`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `adminId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `bandconcerts`
--
ALTER TABLE `bandconcerts`
  MODIFY `concertNo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `bands`
--
ALTER TABLE `bands`
  MODIFY `bandId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `contents`
--
ALTER TABLE `contents`
  MODIFY `fileid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tickets`
--
ALTER TABLE `tickets`
  MODIFY `ticketId` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
