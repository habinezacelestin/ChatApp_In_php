-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 11, 2021 at 04:22 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chat`
--

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `msg_id` int(11) NOT NULL,
  `incoming_msg_id` int(255) NOT NULL,
  `outgoing_msg_id` int(255) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `msg` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`msg_id`, `incoming_msg_id`, `outgoing_msg_id`, `date`, `msg`) VALUES
(1, 1251076657, 797199696, '2021-08-11 13:23:39', 'hi'),
(2, 797199696, 1251076657, '2021-08-11 13:23:51', 'hi'),
(3, 797199696, 1251076657, '2021-08-11 13:24:04', 'how are you'),
(4, 1251076657, 797199696, '2021-08-11 13:24:24', 'i am fine'),
(5, 797199696, 1251076657, '2021-08-11 13:41:44', 'dtytuyiopo'),
(6, 797199696, 1251076657, '2021-08-11 13:41:45', 'yyuhokp]'),
(7, 797199696, 1251076657, '2021-08-11 13:41:47', 'fghjkl'),
(8, 797199696, 1251076657, '2021-08-11 13:41:48', 'fgjhjkl;'),
(9, 797199696, 1251076657, '2021-08-11 13:41:51', 'fghbjkl;'),
(10, 797199696, 1251076657, '2021-08-11 13:41:52', 'hjkl;'),
(11, 797199696, 1251076657, '2021-08-11 13:41:54', 'ghjkl;'),
(12, 797199696, 1251076657, '2021-08-11 13:41:55', 'hghjkl;'),
(13, 797199696, 1251076657, '2021-08-11 13:41:57', 'ghjkl;');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(100) NOT NULL,
  `unique_id` int(200) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `date_join` datetime NOT NULL DEFAULT current_timestamp(),
  `password` varchar(255) NOT NULL,
  `img` varchar(400) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `unique_id`, `firstname`, `lastname`, `email`, `date_join`, `password`, `img`, `status`) VALUES
(1, 1354257367, 'habineza', 'celestin', 'habineza@gmail.com', '2021-08-11 13:16:35', '11', '1628680594habineza.jpg', 'active now'),
(2, 1251076657, 'nindenkimana', 'blaise', 'blaise@gmail.com', '2021-08-11 13:18:31', '22', '1628680711IMG-20191204-WA0014.jpg', 'active now'),
(3, 611610826, 'bikorimmana', 'bosco', 'bosco@gmail.com', '2021-08-11 13:19:17', '33', '1628680757IMG_20191211_171653_6.jpg', 'active now'),
(4, 797199696, 'nshizirungu', 'dieudonne', 'dieudonne@gmail.com', '2021-08-11 13:20:30', '44', '1628680830IMG-20191213-WA0018.jpg', 'active now');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`msg_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `msg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
