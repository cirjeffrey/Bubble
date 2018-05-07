-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 07, 2018 at 10:46 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bubbledb`
--
CREATE DATABASE bubbledb;
-- --------------------------------------------------------

--
-- Table structure for table `bgroup`
--

CREATE TABLE `bgroup` (
  `idGroup` int(16) UNSIGNED NOT NULL,
  `groupCreator` varchar(45) NOT NULL,
  `groupMajor` varchar(45) NOT NULL,
  `groupSubjectClass` varchar(255) NOT NULL,
  `groupNumParticipants` int(45) NOT NULL,
  `groupDescription` text NOT NULL,
  `groupLocation` varchar(95) NOT NULL,
  `meetingDateTime` datetime NOT NULL,
  `isPrivate` binary(1) NOT NULL,
  `isFull` binary(1) NOT NULL,
  `group_create_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bgroup`
--

INSERT INTO `bgroup` (`idGroup`, `groupCreator`, `groupMajor`, `groupSubjectClass`, `groupNumParticipants`, `groupDescription`, `groupLocation`, `meetingDateTime`, `isPrivate`, `isFull`, `group_create_time`) VALUES
(2, 'John Smith', 'Computer Science', 'CPSC 362 Final', 3, 'Is anybody down to study for the final exam in 362. I could use some help with the UML diagrams.', 'CSUF TSU ', '2018-05-11 17:00:00', 0x30, 0x30, '2018-05-07 06:48:10'),
(4, 'Jane Doe', 'MATH', 'MATH 338 Section - 02', 5, 'Let\'s tackle this study guide together! I reserved a room for us in the library! :)', 'CSUF Library - Room SGSR 111', '2018-05-11 09:30:00', 0x30, 0x30, '2018-05-07 07:24:16'),
(5, 'William Robertson', 'Computer Science', 'CPSC 332 - EER Diagrams', 3, 'Yo, I wanted to meet up with people that are up to study for 332. \r\nI specifically would like to help with EER Diagrams. ', 'CS 200 Lab', '2018-05-14 14:00:00', 0x30, 0x30, '2018-05-07 07:40:56');

-- --------------------------------------------------------

--
-- Table structure for table `bjoin`
--

CREATE TABLE `bjoin` (
  `idGroup` int(16) UNSIGNED NOT NULL,
  `idUsername` varchar(16) NOT NULL,
  `join_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bjoin`
--

INSERT INTO `bjoin` (`idGroup`, `idUsername`, `join_time`) VALUES
(2, 'jsmith', '2018-05-07 06:48:10'),
(4, 'jdoe', '2018-05-07 07:24:16'),
(4, 'jsmith', '2018-05-07 07:26:26'),
(2, 'jdoe', '2018-05-07 07:28:25'),
(4, 'willy', '2018-05-07 07:36:22'),
(2, 'willy', '2018-05-07 07:36:36'),
(5, 'willy', '2018-05-07 07:40:56'),
(5, 'jsmith', '2018-05-07 07:45:51'),
(5, 'jdoe', '2018-05-07 07:47:03');

-- --------------------------------------------------------

--
-- Table structure for table `buser`
--

CREATE TABLE `buser` (
  `idUsername` varchar(16) NOT NULL,
  `userFullname` varchar(45) NOT NULL,
  `userEmail` varchar(255) NOT NULL,
  `userPassword` varchar(255) NOT NULL,
  `userMajor` varchar(45) DEFAULT NULL,
  `user_create_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buser`
--

INSERT INTO `buser` (`idUsername`, `userFullname`, `userEmail`, `userPassword`, `userMajor`, `user_create_time`) VALUES
('jdoe', 'Jane Doe', 'jdoe@email.com', '$2y$10$zIX3TESVsJL/i74S8l8k3eJ6T8OfAdGB7G.M9IOkz.E9H7iiAfTU6', 'Math', '2018-05-07 06:54:13'),
('jsmith', 'John Smith', 'jsmith@email.com', '$2y$10$1COrZwzaeC.ejch5dSUFru/QpAO02tEeYFZfBCCUtQ6ONnogKhxQO', 'Computer Science', '2018-05-07 06:41:26'),
('willy', 'William Robertson', 'willrob@email.com', '$2y$10$sNEM53sipwwVzuMDMcAhge0G2lApca7GyLyR.2gUqckn8BzEhnh0e', 'Computer Science', '2018-05-07 07:34:43');

-- --------------------------------------------------------

--
-- Table structure for table `replies`
--

CREATE TABLE `replies` (
  `reply_id` int(3) UNSIGNED NOT NULL,
  `topic_id` int(3) UNSIGNED NOT NULL,
  `author` varchar(16) NOT NULL,
  `comment` text NOT NULL,
  `date_posted` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `replies`
--

INSERT INTO `replies` (`reply_id`, `topic_id`, `author`, `comment`, `date_posted`) VALUES
(5, 4, 'jsmith', 'Try the couches outside in the patio by the starbucks in the TSU. <br />\r\nThey\'re sooo comfy bro. ', '2018-05-07'),
(6, 3, 'jsmith', 'Can confirm. Took her this semester. Keep up with the readings and you\'ll be fine.', '2018-05-07'),
(7, 5, 'willy', 'I feel you bro. They need to add more food spots, not more starbucks. Me personally, I would love a Raising canes on campus ;P', '2018-05-07'),
(8, 4, 'jdoe', 'Try the lawn in front of the Engineering building. That\'s my to go spot! Careful not to end up on the @csufnaps Instagram page :o', '2018-05-07');

-- --------------------------------------------------------

--
-- Table structure for table `topics`
--

CREATE TABLE `topics` (
  `topic_id` int(8) UNSIGNED NOT NULL,
  `title` varchar(128) NOT NULL,
  `author` varchar(16) NOT NULL,
  `content` text NOT NULL,
  `date_posted` date NOT NULL,
  `views` int(5) UNSIGNED NOT NULL,
  `replies` int(3) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `topics`
--

INSERT INTO `topics` (`topic_id`, `title`, `author`, `content`, `date_posted`, `views`, `replies`) VALUES
(3, 'CPSC 362 Professor Reccomendations???', 'jdoe', 'I am taking CPSC 362 next semester. Who are some good professors I can take it with?<br />\r\nI heard that Beth Harnick-Shapiro is a great professor. Can anyone confirm?', '2018-05-07', 5, 1),
(4, 'Best Nap Spots at CSUF?', 'willy', 'I need some new nap spots. My car is just not cutting it anymore. ', '2018-05-07', 6, 2),
(5, 'Tired of the food here', 'jsmith', 'Is anyone else tired of the food here on campus?? I don\'t want panda for the 2nd time this week, but I guesssssss. Life hasn\'t been the same since they got rid of round table. :(', '2018-05-07', 6, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bgroup`
--
ALTER TABLE `bgroup`
  ADD PRIMARY KEY (`idGroup`);

--
-- Indexes for table `bjoin`
--
ALTER TABLE `bjoin`
  ADD PRIMARY KEY (`join_time`),
  ADD KEY `idGroup` (`idGroup`),
  ADD KEY `idUsername` (`idUsername`);

--
-- Indexes for table `buser`
--
ALTER TABLE `buser`
  ADD PRIMARY KEY (`idUsername`);

--
-- Indexes for table `replies`
--
ALTER TABLE `replies`
  ADD PRIMARY KEY (`reply_id`),
  ADD KEY `topic_id` (`topic_id`);

--
-- Indexes for table `topics`
--
ALTER TABLE `topics`
  ADD PRIMARY KEY (`topic_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bgroup`
--
ALTER TABLE `bgroup`
  MODIFY `idGroup` int(16) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `replies`
--
ALTER TABLE `replies`
  MODIFY `reply_id` int(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `topics`
--
ALTER TABLE `topics`
  MODIFY `topic_id` int(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bjoin`
--
ALTER TABLE `bjoin`
  ADD CONSTRAINT `bjoin_ibfk_1` FOREIGN KEY (`idGroup`) REFERENCES `bgroup` (`idGroup`),
  ADD CONSTRAINT `bjoin_ibfk_2` FOREIGN KEY (`idUsername`) REFERENCES `buser` (`idUsername`);

--
-- Constraints for table `replies`
--
ALTER TABLE `replies`
  ADD CONSTRAINT `replies_ibfk_2` FOREIGN KEY (`topic_id`) REFERENCES `topics` (`topic_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
