-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 29, 2019 at 01:47 PM
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
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(11) NOT NULL,
  `date` varchar(20) NOT NULL,
  `title` varchar(20) NOT NULL,
  `description` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `date`, `title`, `description`) VALUES
(1, '2019-03-10', 'rtreer', 'dsd');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `image` varchar(50) NOT NULL,
  `date` varchar(20) NOT NULL,
  `title` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `image`, `date`, `title`) VALUES
(1, '', '2019-03-03', 'rtreer'),
(2, '', '2019-03-10', 'rtreer');

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
(3, 'fd', 'Tulips.jpg');

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
  `email` varchar(30) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `request` text NOT NULL,
  `status` varchar(15) NOT NULL DEFAULT 'Pending',
  `uid` varchar(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prayer`
--

INSERT INTO `prayer` (`id`, `name`, `dob`, `address`, `fname`, `email`, `contact`, `request`, `status`, `uid`) VALUES
(4, 'kamaljeet', '2019-02-07', 'dfdsf', 'sdf', '', '26589652456', 'fewf', 'Pending', 'POPWA3645'),
(5, 'kamal', '2019-02-01', 'shyhghfghhh', 'jkjkkjk', '', '23569856362', 'hgjhghjghjg', 'Pending', 'POPWA9692'),
(6, 'kamal', '2019-03-15', 'sdsss', 'dssdad', '', '985698569', 'xhjgbbvfjhgdhgdhdghjdgsfdhwtrrrrrrrrrrrertgfuy', 'Pending', 'POPWA9749'),
(7, 'pastor raj kumar', '2019-03-22', 'sdsfd', 'ewrfe', '', '9988558919', 'asjhgsjutydsgwsk', 'Pending', 'POPWA6044');

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
(4, '1000', '2019-02-19', 'funds', 'donation', 3),
(5, '1000', '2019-02-18', 'const', 'donation', 3),
(6, '1000', '2019-02-19', 'const', 'expense', 3);

-- --------------------------------------------------------

--
-- Table structure for table `sermons`
--

CREATE TABLE `sermons` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `author` varchar(20) NOT NULL,
  `date` varchar(20) NOT NULL,
  `image` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sermons`
--

INSERT INTO `sermons` (`id`, `name`, `author`, `date`, `image`) VALUES
(1, 'fd', 'fsd', '2019-03-02', ''),
(2, 'fd', 'fsd', '2019-03-10', '');

-- --------------------------------------------------------

--
-- Table structure for table `testimony`
--

CREATE TABLE `testimony` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `author` varchar(20) NOT NULL,
  `date` varchar(20) NOT NULL,
  `image` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `testimony`
--

INSERT INTO `testimony` (`id`, `name`, `author`, `date`, `image`) VALUES
(3, 'fd', 'fsd', '2019-03-16', 'Desert.jpg');

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
,`rid` int(11)
,`rec_type` varchar(30)
);

-- --------------------------------------------------------

--
-- Structure for view `user_records`
--
DROP TABLE IF EXISTS `user_records`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `user_records`  AS  select `users`.`id` AS `uid`,`users`.`name` AS `name`,`users`.`username` AS `username`,`users`.`address` AS `address`,`users`.`contact` AS `contact`,`users`.`type` AS `type`,`records`.`amount` AS `amount`,`records`.`date` AS `date`,`records`.`purpose` AS `purpose`,`records`.`id` AS `rid`,`records`.`type` AS `rec_type` from (`users` join `records` on((`users`.`id` = `records`.`userid`))) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `sermons`
--
ALTER TABLE `sermons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimony`
--
ALTER TABLE `testimony`
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
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `prayer`
--
ALTER TABLE `prayer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `records`
--
ALTER TABLE `records`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `sermons`
--
ALTER TABLE `sermons`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `testimony`
--
ALTER TABLE `testimony`
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
