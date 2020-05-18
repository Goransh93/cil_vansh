-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 10, 2020 at 06:50 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.1.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ci_test`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` int(20) NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `created_at` varchar(255) NOT NULL,
  `image_path` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `user_id`, `title`, `body`, `created_at`, `image_path`) VALUES
(1, 1, 'Test Article', 'Test Article', '2020-03-07 13:48:05', ''),
(44, 2, 'Test1', '1', '2020-03-07 10:37:12am', ''),
(45, 2, 'Test2', '2', '2020-03-07 10:37:20am', ''),
(46, 2, 'Gym', ' How will my life be different if I go to the gym everyday?\r\n\r\nI haven\'t missed a single workout in past 1.5+ year (only if I have to go outside the city due to work).\r\n\r\nOct-2016\r\n\r\nI don\'t like the reflection of myself- lanky, lost in the world, lost in the world that I have created around myself.\r\n\r\nEven when I was settled, I wasn\'t happy, mornings were tough. I have always been a bit conscious about my surroundings and I see the world in a different way. This has led to the feeling of isolation from my surroundings even when everything around me was good.\r\n\r\nI met psychiatrist, he convinced me do some sort of exercises and it made some sense to me as well.\r\n\r\n“If I am working out, I will not be living in my own world, I don’t have to deal with the morning”- That was my thought.\r\n\r\nI started with running, 3 km then 5 km then cycling sometimes 40 km sometimes even more. Running was good but it was not rewarding. I could not go below 27 minutes for 5 km, I tried, I failed. It teaches you lesson. It was exhausting. It was painful. The only thing that gave me relief was the sweat, mind usually went into meditation mode, it did not care about the world. But as soon as I reached home, reality again hit me on the face.\r\n\r\nI need more sweat, more rewarding things, this led me to the gym.\r\n\r\nWeights were demanding, so was I. They need someone to lift them, so did my self esteem. It was a relation, a love and respect for each other.\r\n\r\nFast forward 2018:\r\n\r\n    5.30 am- Wake up, get the coffee going on the side, take pre- workout essentials.\r\n    6:15 am- Its Saturday. When most people are enjoying the Weekend morning, its time to hit the legs.\r\n    7.45 am- Stuff up all the gym clothing,bottles in bag, heads towards home.\r\n    7.55 am- Breakfast is on the stove, chia seeds are ready, need to prepare the almonds, eggs are in egg boiler. Time is running out for office.\r\n    8:05 am- Apple and peanuts for evening snacks, goes into the office bag. One more thing done. Need to set the curd of dinner. Done..!!\r\n    8:20 am- Shower is done, time to eat the breakfast.\r\n    8.30 am- Breakfast done, time to peel the eggs. Outside home, office vehicle is honking now, rushes through the egg, put them in container, will eat around 11 am in office. Packs the bag and leave for office.\r\n\r\nThis is how every morning looks like. No time for mind to wonder around, no time for sit and think about future, the mistakes of past, regrets and wondering about the meaning of life.\r\n\r\nMind still tries to run away with the past and future but present is quite strict, it doesn’t like when he try to console the past or build dreams with future.', '2020-03-07 11:22:56am', ''),
(47, 2, 'Test for space', 'his\r\n\r\n\r\n\r\n\r\n\r\nspace \r\n\r\n\r\n\r\nhi', '2020-03-07 11:29:34am', ''),
(48, 2, 'Test Article Title', 'test', '2020-03-09 10:17:28am', ''),
(49, 2, 'Test Final', 'Final', '2020-03-09 04:37:51pm', 'http://[::1]/ci/uploads/PHOTO8.jpg'),
(50, 2, 'Test Article Title', '<b>HI I am bold</b>', '2020-03-10 04:28:56am', 'http://[::1]/ci/uploads/PHOTO9.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `uname` varchar(100) NOT NULL,
  `pword` varchar(255) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `uname`, `pword`, `fname`, `lname`) VALUES
(1, 'goransh', 'goransh', 'Goransh', 'Bhatia'),
(2, 'Richa92', 'Richa@1992', 'Richa', 'Pathak'),
(3, 'Manju20', 'Manju@2020', 'Manju', 'Bhatia');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
