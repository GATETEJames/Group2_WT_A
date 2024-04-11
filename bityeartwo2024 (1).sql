-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 11, 2024 at 03:51 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bityeartwo2024`
--

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE `article` (
  `artid` int(11) NOT NULL,
  `userid` int(11) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `contents` text DEFAULT NULL,
  `dateofcreation` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `cid` int(11) NOT NULL,
  `contentid` int(11) DEFAULT NULL,
  `userid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `friends`
--

CREATE TABLE `friends` (
  `fid` int(11) NOT NULL,
  `userid` int(11) DEFAULT NULL,
  `friendid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `like`
--

CREATE TABLE `like` (
  `lid` int(11) NOT NULL,
  `contentid` int(11) DEFAULT NULL,
  `userid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `multimedia`
--

CREATE TABLE `multimedia` (
  `mid` int(11) NOT NULL,
  `userid` int(11) DEFAULT NULL,
  `type` enum('image','video','audio') DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `uploaddate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `multimedia`
--

INSERT INTO `multimedia` (`mid`, `userid`, `type`, `location`, `uploaddate`) VALUES
(1, 1, 'image', 'img', '2024-04-08 22:00:00'),
(2, 1, 'image', 'img', '2024-04-08 22:00:00'),
(3, 1, 'image', 'img', '2024-04-08 22:00:00'),
(4, 1, 'image', 'img', '2024-04-09 22:00:00'),
(5, 1, 'image', 'img', '2024-04-09 22:00:00'),
(7, 1, '', 'img', '2024-04-09 22:00:00'),
(8, 1, 'image', 'img', '2024-04-18 22:00:00'),
(9, 17, 'image', 'img', '2024-04-04 22:00:00'),
(10, 1, 'audio', 'audio', '2024-04-09 22:00:00'),
(11, 1, 'audio', 'audio', '2024-04-09 22:00:00'),
(12, 1, 'image', 'audio', '2024-04-09 22:00:00'),
(13, 1, 'image', 'img', '2024-04-09 22:00:00'),
(14, 1, 'image', 'audio', '2023-09-14 22:00:00'),
(15, 1, '', 'audio', '2024-04-12 22:00:00'),
(16, 1, '', 'audio', '2024-04-12 22:00:00'),
(17, 1, 'image', 'img', '2024-04-03 22:00:00'),
(18, 1, 'image', 'C:xampp\\htdocs\\imageess\\images2.jpg', '2024-04-10 15:24:34'),
(19, 1, 'image', 'C:xampp\\htdocs\\imageess\\images2.jpg', '2024-04-11 06:36:30');

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `pid` int(11) NOT NULL,
  `userid` int(11) DEFAULT NULL,
  `Campus` varchar(100) DEFAULT NULL,
  `College` varchar(100) DEFAULT NULL,
  `School` varchar(100) DEFAULT NULL,
  `Department` varchar(100) DEFAULT NULL,
  `Level` varchar(50) DEFAULT NULL,
  `Group` varchar(50) DEFAULT NULL,
  `Regnumber` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `rid` int(11) NOT NULL,
  `userid` int(11) DEFAULT NULL,
  `rolename` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `unlike`
--

CREATE TABLE `unlike` (
  `lid` int(11) NOT NULL,
  `contentid` int(11) DEFAULT NULL,
  `userid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `firstname` varchar(50) DEFAULT NULL,
  `lastname` varchar(50) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `telephone` varchar(20) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `creationdate` timestamp NOT NULL DEFAULT current_timestamp(),
  `activation_code` varchar(50) DEFAULT NULL,
  `is_activated` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `firstname`, `lastname`, `username`, `email`, `telephone`, `password`, `creationdate`, `activation_code`, `is_activated`) VALUES
(1, 'kwizera', 'vava', 'kwieer', 'sammyniyo20@gmail.com', '089775445', '1234', '2024-04-06 12:45:19', NULL, 0),
(10, 'kwizera', 'kamugundu', 'kamu', 'ishimwefides@gmail.com', '0798907632', '$2y$10$yOXfFxV/0uRWOSMBAD.4I.w7zw/oDbMa1pBHDekS3BL43Selg1nCK', '2024-04-09 13:40:21', NULL, 0),
(13, 'kwizera', 'vava', 'kwieeri', 'sammyni20@gmail.com', '089775445', '$2y$10$Z/E3VXDNdFhN.jE25.a6HepQZt/TQ9kHPhUbKKuwzbjo1kxdXHe9S', '2024-04-09 15:25:47', NULL, 0),
(14, 'ruth', 'muhawenayo', 'ruthmuhawe', 'ruthmuhawe@gmail.com', '0784766162', '$2y$10$nPweFYBUyiDr5OryW/0T3eJZb/FmaGO/kXJJ5ehKn0b0Arzpo/XYO', '2024-04-09 15:29:46', NULL, 0),
(16, 'ruth', 'muhawenayo', 'ruthmuhaw', 'ruthmuhaw@gmail.com', '0784766162', '$2y$10$Ku8jsgUCM6v425o5PIaqc.6KPhKprEbA/xrbqZIfTSIQNimce7O36', '2024-04-09 15:30:36', NULL, 0),
(17, 'daniel', 'habiyaremye', 'danisol', 'danizo@gmail.com', '0791291384', '12346', '2024-04-10 05:59:51', NULL, 0),
(19, 'daniel', 'habiyaremye', 'daniso', 'daniso@gmail.com', '0786407569', '$2y$10$vnBKzGJrpQv4ybv3yu4WiOSlWM4sJbeC7sbKc9cEGYMYus5rk8yQG', '2024-04-10 06:50:22', NULL, 0),
(22, 'dada', 'suzana', 'dada', 'dada@gmail.com', '0786407569', '$2y$10$zJcZwqkDXgtH6xyha/iQvec3.8f//E0z.PHC1m9u17hDq3v0PYVzW', '2024-04-10 06:51:22', NULL, 0),
(24, 'daniel', 'habiyaremye', 'dani', 'eric@gmail.com', '0786407569', '$2y$10$259kgPuONnr0MWinWi9//e8vjt2bKkzB2mqX7Rs4sTiuD8JSA1Cuu', '2024-04-10 09:48:21', NULL, 0),
(26, 'daniel', 'habiyaremye', 'danisoLo', 'chris@gmail.com', '0784766162', '$2y$10$cgbut0Leng5tU2kAOtijzu6FoqyJ/W3MGz.6xbkH5NSJNWbQcvYiC', '2024-04-10 09:52:23', NULL, 0),
(27, 'daniel', 'habiyaremye', 'danisoLo2', 'chri3s@gmail.com', '0784766162', '$2y$10$nJi0bAaPVZiYW8IGqOGcuetNyB1Ihea3OUp3kS3swnlqkspx0O8uK', '2024-04-10 09:56:00', NULL, 0),
(28, 'daniel', 'habiyaremye', 'danisoLo2y', 'yvettetuyizere168@gmail.com', '0784766162', '$2y$10$JRFOBHzOhS0LFK/7wLGfi.O6ugr5MrbUNt4CWb0rHpbAQHSkE4yFW', '2024-04-10 12:00:13', NULL, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`artid`),
  ADD KEY `userid` (`userid`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`cid`),
  ADD KEY `contentid` (`contentid`),
  ADD KEY `userid` (`userid`);

--
-- Indexes for table `friends`
--
ALTER TABLE `friends`
  ADD PRIMARY KEY (`fid`),
  ADD KEY `userid` (`userid`),
  ADD KEY `friendid` (`friendid`);

--
-- Indexes for table `like`
--
ALTER TABLE `like`
  ADD PRIMARY KEY (`lid`),
  ADD KEY `contentid` (`contentid`),
  ADD KEY `userid` (`userid`);

--
-- Indexes for table `multimedia`
--
ALTER TABLE `multimedia`
  ADD PRIMARY KEY (`mid`),
  ADD KEY `userid` (`userid`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`pid`),
  ADD KEY `userid` (`userid`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`rid`),
  ADD KEY `userid` (`userid`);

--
-- Indexes for table `unlike`
--
ALTER TABLE `unlike`
  ADD PRIMARY KEY (`lid`),
  ADD KEY `contentid` (`contentid`),
  ADD KEY `userid` (`userid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `artid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `friends`
--
ALTER TABLE `friends`
  MODIFY `fid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `like`
--
ALTER TABLE `like`
  MODIFY `lid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `multimedia`
--
ALTER TABLE `multimedia`
  MODIFY `mid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `rid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `unlike`
--
ALTER TABLE `unlike`
  MODIFY `lid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `article`
--
ALTER TABLE `article`
  ADD CONSTRAINT `article_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `user` (`id`);

--
-- Constraints for table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment_ibfk_1` FOREIGN KEY (`contentid`) REFERENCES `article` (`artid`),
  ADD CONSTRAINT `comment_ibfk_2` FOREIGN KEY (`userid`) REFERENCES `user` (`id`);

--
-- Constraints for table `friends`
--
ALTER TABLE `friends`
  ADD CONSTRAINT `friends_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `friends_ibfk_2` FOREIGN KEY (`friendid`) REFERENCES `user` (`id`);

--
-- Constraints for table `like`
--
ALTER TABLE `like`
  ADD CONSTRAINT `like_ibfk_1` FOREIGN KEY (`contentid`) REFERENCES `article` (`artid`),
  ADD CONSTRAINT `like_ibfk_2` FOREIGN KEY (`userid`) REFERENCES `user` (`id`);

--
-- Constraints for table `multimedia`
--
ALTER TABLE `multimedia`
  ADD CONSTRAINT `multimedia_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `user` (`id`);

--
-- Constraints for table `profile`
--
ALTER TABLE `profile`
  ADD CONSTRAINT `profile_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `user` (`id`);

--
-- Constraints for table `role`
--
ALTER TABLE `role`
  ADD CONSTRAINT `role_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `user` (`id`);

--
-- Constraints for table `unlike`
--
ALTER TABLE `unlike`
  ADD CONSTRAINT `unlike_ibfk_1` FOREIGN KEY (`contentid`) REFERENCES `article` (`artid`),
  ADD CONSTRAINT `unlike_ibfk_2` FOREIGN KEY (`userid`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
