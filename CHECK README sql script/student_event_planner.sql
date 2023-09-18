-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 18, 2022 at 02:13 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student_event_planner`
--

-- --------------------------------------------------------

--
-- Table structure for table `event_planner`
--

CREATE TABLE `event_planner` (
  `email` varchar(40) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `date` date NOT NULL,
  `time` varchar(6) NOT NULL,
  `comments` varchar(1000) NOT NULL,
  `eventId` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `event_planner`
--

INSERT INTO `event_planner` (`email`, `description`, `date`, `time`, `comments`, `eventId`) VALUES
('test@test.com', '111111111', '0000-00-00', '11:11', '111', 10),
('test@test.com', ' ', '2022-07-18', '17:37', ' ', 15),
('test@test.com', ' ', '0001-12-12', '00:12', ' ', 16),
('test@test.com', '1', '1111-11-11', '11:11', '1', 17),
('test@test.com', '1', '1111-11-11', '11:11', '1', 18),
('test@test.com', 'CREATE TABLE USER', '1111-11-11', '11:11', '&quot;&quot; ||', 19),
('testing@purposes.com', 'This is an updated new event.', '2022-06-22', '12:00', 'Event Number 2 for Testing Purposes. This event is now edited successfully. Please check again with the updated info. Testing checkbox too.', 20);

-- --------------------------------------------------------

--
-- Table structure for table `historyevent_planner`
--

CREATE TABLE `historyevent_planner` (
  `email` varchar(40) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `date` date NOT NULL,
  `time` varchar(6) NOT NULL,
  `comments` varchar(1000) NOT NULL,
  `historyeventId` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `historyevent_planner`
--

INSERT INTO `historyevent_planner` (`email`, `description`, `date`, `time`, `comments`, `historyeventId`) VALUES
('test@test.com', '123', '2022-07-18', '05:34', '1', 14);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `email` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`email`, `password`) VALUES
('test@test.com', '111111'),
('testing@purposes.com', 'testing123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `event_planner`
--
ALTER TABLE `event_planner`
  ADD PRIMARY KEY (`eventId`);

--
-- Indexes for table `historyevent_planner`
--
ALTER TABLE `historyevent_planner`
  ADD PRIMARY KEY (`historyeventId`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `event_planner`
--
ALTER TABLE `event_planner`
  MODIFY `eventId` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
