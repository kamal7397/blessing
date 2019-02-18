-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 18, 2019 at 01:44 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `demo`
--

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `name`, `image`) VALUES
(1, 'sdas', 'pic (1) (3).jpg');

-- --------------------------------------------------------

--
-- Table structure for table `prayer`
--

CREATE TABLE `prayer` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `dob` varchar(20) NOT NULL,
  `address` varchar(60) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `request` text NOT NULL,
  `status` varchar(15) NOT NULL DEFAULT 'Pending',
  `uid` varchar(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prayer`
--

INSERT INTO `prayer` (`id`, `name`, `dob`, `address`, `fname`, `contact`, `request`, `status`, `uid`) VALUES
(4, 'kamaljeet', '2019-02-07', 'dfdsf', 'sdf', '26589652456', 'fewf', 'Pending', 'POPWA3645'),
(5, 'kamal', '2019-02-01', 'shyhghfghhh', 'jkjkkjk', '23569856362', 'hgjhghjghjg', 'Pending', 'POPWA9692');

-- --------------------------------------------------------

--
-- Table structure for table `records`
--

CREATE TABLE `records` (
  `id` int(11) NOT NULL,
  `amount` varchar(10) NOT NULL,
  `date` varchar(50) NOT NULL,
  `purpose` varchar(60) NOT NULL,
  `type` varchar(30) NOT NULL,
  `userid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `records`
--

INSERT INTO `records` (`id`, `amount`, `date`, `purpose`, `type`, `userid`) VALUES
(1, '6000', '2019-02-08', 'construction', 'expense', 1),
(2, '1000', '2019-02-01', 'construction', 'donation', 2),
(3, '1000', '2019-02-09', 'construction', 'expense', 3);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `contact` varchar(13) NOT NULL,
  `type` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `password`, `address`, `contact`, `type`) VALUES
(1, 'kamal', 'kamaljeet', 'aa63b0d5d950361c05012235ab520512', 'njjmhjkhkl', '9856985694', 'users'),
(2, 'honey', 'honey', 'b60eb83bf533eecf1bde65940925a981', 'hghsdghsg', '9856985698', 'users'),
(3, 'Admin', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin', '8888888888', 'admin');

-- --------------------------------------------------------

--
-- Stand-in structure for view `user_records`
-- (See below for the actual view)
--
CREATE TABLE `user_records` (
`uid` int(11)
,`name` varchar(20)
,`username` varchar(20)
,`address` varchar(100)
,`contact` varchar(13)
,`type` varchar(30)
,`amount` varchar(10)
,`date` varchar(50)
,`purpose` varchar(60)
,`rec_type` varchar(30)
);

-- --------------------------------------------------------

--
-- Structure for view `user_records`
--
DROP TABLE IF EXISTS `user_records`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `user_records`  AS  select `users`.`id` AS `uid`,`users`.`name` AS `name`,`users`.`username` AS `username`,`users`.`address` AS `address`,`users`.`contact` AS `contact`,`users`.`type` AS `type`,`records`.`amount` AS `amount`,`records`.`date` AS `date`,`records`.`purpose` AS `purpose`,`records`.`type` AS `rec_type` from (`users` join `records` on((`users`.`id` = `records`.`userid`))) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prayer`
--
ALTER TABLE `prayer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `records`
--
ALTER TABLE `records`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userid` (`userid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `prayer`
--
ALTER TABLE `prayer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `records`
--
ALTER TABLE `records`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `records`
--
ALTER TABLE `records`
  ADD CONSTRAINT `records_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
