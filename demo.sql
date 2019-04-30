-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 01, 2019 at 12:01 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.1.26

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
  `description` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `date`, `title`, `description`) VALUES
(4, '2019-04-03', 'John 1:1', 'From the first he was the Word, and the Word was in relation with God and was God.'),
(5, '2019-04-04', 'Matthew 7:7', 'Make a request, and it will be answered; what you are searching for you will get; give the sign, and the door will be open to you:'),
(6, '2019-04-05', 'Mark 9:1', 'And he said to them, Truly I say to you, There are some here who will have no taste of death till they see the kingdom of God come with power.');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `image` varchar(50) NOT NULL,
  `date` varchar(20) NOT NULL,
  `title` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `image`, `date`, `title`, `description`) VALUES
(1, '55882277_1743279899150871_646215500841353216_n.jpg', '2019-04-07', 'Sunday Meeting', 'From the first he was the Word, and the Word was in relation with God and was God.');

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
(5, 'kamal', 'blessing22.jpeg'),
(11, 'kamal', '502014285_univ_lsr_xl.jpg'),
(12, 'kamal', 'Jesus-image.jpg');

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
(1, 'rinku', '2019-04-18', 'fghfhfd', 'gfhgfh', '', '985698566', 'cxgfdghgfhgfht', 'Completed', 'POPWA9958');

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
(7, '3000', '2019-04-20', 'construction', 'donation', 1),
(8, '5000', '2019-04-26', 'construction', 'donation', 4);

-- --------------------------------------------------------

--
-- Table structure for table `sermons`
--

CREATE TABLE `sermons` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `author` varchar(20) NOT NULL,
  `date` varchar(20) NOT NULL,
  `image` varchar(30) NOT NULL,
  `link` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sermons`
--

INSERT INTO `sermons` (`id`, `name`, `author`, `date`, `image`, `link`) VALUES
(2, 'Kook Papihe Vali', 'Sukhwinder Singh', '2019-04-05', '584beccda62aaa830c43eda3.png', 'https://www.youtube.com/watch?v=EXSFK5ZFTCc'),
(5, 'Ban jo Khuda de lokko', 'Hardeep Singh', '2019-04-06', 'christian_cross_PNG14.png', 'https://www.youtube.com/watch?v=pRCKA0xkQ_Y'),
(6, 'Karie Duaa sare', 'Pastor Raj Kumar', '2019-04-07', '88510910b3015f7e557f594323e9dc', 'https://www.youtube.com/watch?v=ZerR9hbPpL0');

-- --------------------------------------------------------

--
-- Table structure for table `temp_records`
--

CREATE TABLE `temp_records` (
  `id` int(11) NOT NULL,
  `amount` varchar(10) NOT NULL,
  `date` varchar(50) NOT NULL,
  `purpose` varchar(60) NOT NULL,
  `userid` int(11) NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'requested'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `temp_records`
--

INSERT INTO `temp_records` (`id`, `amount`, `date`, `purpose`, `userid`, `status`) VALUES
(1, '3000', '2019-04-20', 'construction', 1, 'accepted'),
(2, '5000', '2019-04-26', 'construction', 4, 'accepted'),
(3, '15000', '2019-04-05', 'consy', 4, 'accepted');

-- --------------------------------------------------------

--
-- Table structure for table `testimony`
--

CREATE TABLE `testimony` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `author` varchar(20) NOT NULL,
  `date` varchar(20) NOT NULL,
  `image` varchar(30) NOT NULL,
  `link` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `testimony`
--

INSERT INTO `testimony` (`id`, `name`, `author`, `date`, `image`, `link`) VALUES
(10, 'Sister Recovering From The Paralise Attack After T', 'Pastor Raj Kumar', '2019-04-07', 'images (2).jpg', 'https://www.youtube.com/watch?v=tzwJrPGju5M');

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
(3, 'Admin', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin', '9988558919', 'admin'),
(4, 'rinku', 'rinku', 'f12b213a6d2480d97fb5068fdc39de21', 'dfdfdsfs', '985698566', 'users');

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
-- Indexes for table `temp_records`
--
ALTER TABLE `temp_records`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userid` (`userid`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `prayer`
--
ALTER TABLE `prayer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `records`
--
ALTER TABLE `records`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `sermons`
--
ALTER TABLE `sermons`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `temp_records`
--
ALTER TABLE `temp_records`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `testimony`
--
ALTER TABLE `testimony`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `records`
--
ALTER TABLE `records`
  ADD CONSTRAINT `records_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `users` (`id`);

--
-- Constraints for table `temp_records`
--
ALTER TABLE `temp_records`
  ADD CONSTRAINT `records_ibfk_2` FOREIGN KEY (`userid`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
