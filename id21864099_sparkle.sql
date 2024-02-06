-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 06, 2024 at 09:26 AM
-- Server version: 10.5.20-MariaDB
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id21864099_sparkle`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_username`, `password`) VALUES
(1, 'muiz', 'muiz'),
(2, 'zafian', 'zafian');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `chosen_event` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `user_id`, `username`, `email`, `chosen_event`) VALUES
(6, 2, 'aidid', 'aidid@gmail.com', 'hiking'),
(7, 2, 'aidid', 'aidid@gmail.com', 'kayaking'),
(9, 9, 'tania', 'tania@yahoo.com', 'hiking'),
(11, 3, 'zafian', 'zafian@hotmail.com', 'hiking'),
(12, 4, 'syaza', 'syaza@gmail.com', 'hiking'),
(13, 5, 'afikah', 'afikah2@yahoo.com', 'kayaking'),
(14, 6, 'sidib', 'sidib07@gmail.com', 'kayaking'),
(15, 7, 'kamalhusni', 'kamalhusni1@gmail.com', 'kayaking'),
(16, 8, 'shahirahdamia', 'shahirahdamia@hotmail.com', 'kayaking'),
(17, 6, 'sidib', 'sidib07@gmail.com', 'hiking'),
(18, 9, 'tania', 'tania@yahoo.com', 'hiking'),
(19, 10, 'Samatha', 'Samatha@yahoo.com', 'kayaking'),
(20, 10, 'Samatha', 'Samatha@yahoo.com', 'hiking'),
(21, 12, 'kamina', 'kamina@gmail.com', 'hiking'),
(22, 7, 'kamalhusni', 'kamalhusni1@gmail.com', 'hiking'),
(23, 13, 'shihan', 'shihan@yahoo.com', 'hiking'),
(24, 13, 'shihan', 'shihan@yahoo.com', 'kayaking'),
(26, 15, 'Alisamsudin', 'Alisamsudin@uitm.com', 'kayaking'),
(27, 18, 'hazikah', 'hazikah@gmail.com', 'hiking'),
(28, 17, 'kamarul_azri', 'kamarul@yahoo.com', 'hiking'),
(29, 21, 'afiq', 'afiq@gmail.com', 'hiking');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `user_id`, `username`, `email`, `message`) VALUES
(28, 9, 'tania', 'tania@yahoo.com', 'gooo'),
(47, 1, 'muiz', 'muiz@gmail.com', 'Test only'),
(48, 4, 'syaza', 'syaza@gmail.com', 'I\'m excited for new event very soon..yeayy'),
(49, 4, 'syaza', 'syaza@gmail.com', 'Take a look about equipment we are using during activities. some of them already in bad shape.'),
(50, 5, 'afikah', 'afikah2@yahoo.com', 'Help me getting more friends here pls...'),
(51, 6, 'sidib', 'sidib07@gmail.com', 'That camping moments last time was the best. hoping for another camping event soon..yeah'),
(52, 6, 'sidib', 'sidib07@gmail.com', 'Hmm.Did admin read my message?'),
(53, 7, 'kamalhusni', 'kamalhusni1@gmail.com', 'Hai admin. Let\'s rock on'),
(56, 5, 'afikah', 'afikah2@yahoo.com', 'I can\'t wait for the exclusive member only event very soon, admin please update always this website news.'),
(57, 6, 'sidib', 'sidib07@gmail.com', 'Admin please update, did member can join both event soon?I already fills both.Hopefully accepted'),
(58, 9, 'tania', 'tania@yahoo.com', 'I think our system not complex yet. If admin feel free to add more admin, I want to apply. I will improve this system as I have skills in science computer.'),
(59, 10, 'Samatha', 'Samatha@yahoo.com', 'I\'m in the best club forever. When will we can go jungle trekking again?'),
(60, 11, 'sharinamajid', 'sharinamajid@yahoo.com', 'A bit busy for about a month. I maybe missed some vent. Hopefully admin discuss with high management to propose new outdoor activities after those two upcoming event.'),
(61, 12, 'kamina', 'kamina@gmail.com', 'Admin, please update more news'),
(62, 13, 'shihan', 'shihan@yahoo.com', 'Nothing, just expressing my excitement for upcoming event.\r\n'),
(63, 14, 'Adilah', 'Adilah@gmail.com', 'I think we need more room space for our club as the members keep increasing.'),
(64, 15, 'Alisamsudin', 'Alisamsudin@uitm.com', 'Admin, please make a equipment borrowing elements in this system. I think we need that.'),
(65, 17, 'kamarul_azri', 'kamarul@yahoo.com', 'Can we collab with other club for outdoor activities soon?Seems fun if we can improve our circle.');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `email`, `password`) VALUES
(1, 'muiz', 'muiz@gmail.com', 'muiz'),
(2, 'aidid', 'aidid@gmail.com', 'aidid'),
(3, 'zafian', 'zafian@hotmail.com', 'zafian'),
(4, 'syaza', 'syaza@gmail.com', 'syaza'),
(5, 'afikah', 'afikah2@yahoo.com', 'afikah'),
(6, 'sidib', 'sidib07@gmail.com', 'sidib'),
(7, 'kamalhusni', 'kamalhusni1@gmail.com', 'kamalhusni'),
(8, 'shahirahdamia', 'shahirahdamia@hotmail.com', 'shahirahdamia'),
(9, 'tania', 'tania@yahoo.com', 'tania'),
(10, 'Samatha', 'Samatha@yahoo.com', 'Samatha'),
(11, 'sharinamajid', 'sharinamajid@yahoo.com', 'sharinamajid'),
(12, 'kamina', 'kamina@gmail.com', 'kamina'),
(13, 'shihan', 'shihan@yahoo.com', 'shihan'),
(14, 'Adilah', 'Adilah@gmail.com', 'Adilah'),
(15, 'Alisamsudin', 'Alisamsudin@uitm.com', 'Alisamsudin'),
(16, 'aididnasir', 'aididnasir@gmail.com', 'aididnasir'),
(17, 'kamarul_azri', 'kamarul@yahoo.com', 'kamarul'),
(18, 'hazikah', 'hazikah@gmail.com', 'hazikah'),
(19, 'anita', 'anita@gmail.com', 'anita'),
(20, 'zamzami', 'zamzami@yahoo.com', 'zamzami'),
(21, 'afiq', 'afiq@gmail.com', 'afiq'),
(22, 'zikri aiman', 'zikriaiman@yahoo.com', 'zikriaiman');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `events`
--
ALTER TABLE `events`
  ADD CONSTRAINT `events_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `messages`
--
ALTER TABLE `messages`
  ADD CONSTRAINT `fk_user_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
