-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 18 март 2018 в 08:40
-- Версия на сървъра: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hangmans`
--

-- --------------------------------------------------------

--
-- Структура на таблица `bg_words`
--

CREATE TABLE `bg_words` (
  `bg_word_id` int(11) NOT NULL,
  `bg_word` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Схема на данните от таблица `bg_words`
--

INSERT INTO `bg_words` (`bg_word_id`, `bg_word`) VALUES
(1, 'хладилник'),
(2, 'гардероб'),
(3, 'аспиратор'),
(4, 'джакузи'),
(5, 'телевизор');

-- --------------------------------------------------------

--
-- Структура на таблица `en_words`
--

CREATE TABLE `en_words` (
  `en_word_id` int(11) NOT NULL,
  `en_word` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Схема на данните от таблица `en_words`
--

INSERT INTO `en_words` (`en_word_id`, `en_word`) VALUES
(1, 'wardrobe'),
(2, 'refrigerator'),
(3, 'freezer'),
(4, 'bathtub'),
(5, 'furnace');

-- --------------------------------------------------------

--
-- Структура на таблица `images`
--

CREATE TABLE `images` (
  `image_id` int(11) NOT NULL,
  `image_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура на таблица `users`
--

CREATE TABLE `users` (
  `user_id` int(10) NOT NULL,
  `user_name` varchar(55) NOT NULL,
  `user_password` varchar(12) NOT NULL,
  `user_game` int(10) NOT NULL,
  `user_score` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Схема на данните от таблица `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_password`, `user_game`, `user_score`) VALUES
(1, 'plamen', '123', 2, 1),
(2, 'petq', '234', 3, 2),
(11, 'petleto', '333', 8, 5),
(12, 'palko', '444', 13, 5),
(13, 'gamer', '111', 32, 0),
(16, 'RRR', 'РРР', 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bg_words`
--
ALTER TABLE `bg_words`
  ADD PRIMARY KEY (`bg_word_id`);

--
-- Indexes for table `en_words`
--
ALTER TABLE `en_words`
  ADD PRIMARY KEY (`en_word_id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`image_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `user_name` (`user_name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bg_words`
--
ALTER TABLE `bg_words`
  MODIFY `bg_word_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `en_words`
--
ALTER TABLE `en_words`
  MODIFY `en_word_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `image_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
