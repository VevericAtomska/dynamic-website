-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 19, 2022 at 07:26 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `games`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog_posts`
--

CREATE TABLE `blog_posts` (
  `postID` int(10) UNSIGNED NOT NULL,
  `postTitle` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `postDesc` text CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `postCont` text CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `postAuthor` text CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `postPublisher` text CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `postDate` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog_posts`
--

INSERT INTO `blog_posts` (`postID`, `postTitle`, `postDesc`, `postCont`, `postAuthor`, `postPublisher`, `postDate`) VALUES
(96, 'Batman Arkham Origins', 'The game features an expanded Gotham City and introduces an original prequel storyline set several years before the events of Batman: Arkham Asylum and Batman: Arkham City. ', 'Taking place before the rise of Gotham City’s most dangerous criminals, the game showcases a young and unrefined Batman as he faces a defining moment in his early career as a crime fighter that sets his path to becoming the Dark Knight. Utilize Batman’s signature gadgets or take advantage of powerful new additions such as the Remote Claw, the Concussion Detonator and more', 'Adam Beechen', 'Warner Bros. Interactive Entertainment', '2022-06-17 14:29:16'),
(97, 'Alan Wake', 'When the wife of the best-selling writer Alan Wake disappears on their vacation.', 'His search turns up pages from a thriller he doesn’t even remember writing. A Dark Presence stalks the small town of Bright Falls, pushing Wake to the brink of sanity in his fight to unravel the mystery and save his love.', 'Sam Lake', 'Microsoft Game Studios\r\nRemedy Entertainment (PC)\r\nEpic Games Publishing', '2022-06-17 14:32:12'),
(101, 'Crysis 3', 'The fate of in your hands', 'The fate of the world is in your hands. New and old enemies threaten the peace you worked so hard to achieve 24 years ago. Your search for the', 'Steven Hall', 'Electronic Arts', '2022-06-19 13:01:22');

-- --------------------------------------------------------

--
-- Table structure for table `game`
--

CREATE TABLE `game` (
  `game_id` int(10) UNSIGNED NOT NULL,
  `postID` int(10) UNSIGNED NOT NULL,
  `genre_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `genre`
--

CREATE TABLE `genre` (
  `genre_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(15) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `login_id` int(10) NOT NULL,
  `register_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `register_id` int(10) NOT NULL,
  `username` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(144) COLLATE utf8_unicode_ci NOT NULL,
  `user_type` enum('member','admin') COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `gender` enum('M','F','O') COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`register_id`, `username`, `password`, `user_type`, `email`, `gender`) VALUES
(59, 'admin', 'admin', 'admin', 'admin@gmail.com', 'M'),
(70, 'burkela', 'legenda', 'member', 'burke@gmail.com', 'M'),
(72, 'Urke', 'tt', 'member', 'tata@gmail.com', 'M'),
(85, 'Filip', 'da', 'member', 'filipovic@gmail', 'M'),
(88, 'da', 'da', 'member', 'sasa@gmail.com', 'M'),
(89, 'sa', 'da', 'member', 'filipmilist77@g', 'M'),
(90, 'Filip', 'da', 'member', 'dada@gmail.com', 'M'),
(91, 'Elvis', 'ca', 'member', 'evlis@gmail.com', 'M');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog_posts`
--
ALTER TABLE `blog_posts`
  ADD PRIMARY KEY (`postID`);

--
-- Indexes for table `game`
--
ALTER TABLE `game`
  ADD PRIMARY KEY (`game_id`) USING BTREE,
  ADD KEY `fk_game_id_genre_id` (`genre_id`),
  ADD KEY `fk_game_id_post_id` (`postID`);

--
-- Indexes for table `genre`
--
ALTER TABLE `genre`
  ADD PRIMARY KEY (`genre_id`) USING BTREE;

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`login_id`),
  ADD KEY `fk_login_id_register_id` (`register_id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`register_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog_posts`
--
ALTER TABLE `blog_posts`
  MODIFY `postID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=117;

--
-- AUTO_INCREMENT for table `game`
--
ALTER TABLE `game`
  MODIFY `game_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `genre`
--
ALTER TABLE `genre`
  MODIFY `genre_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `login_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `register_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `game`
--
ALTER TABLE `game`
  ADD CONSTRAINT `fk_game_id_genre_id` FOREIGN KEY (`genre_id`) REFERENCES `genre` (`genre_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_game_id_post_id` FOREIGN KEY (`postID`) REFERENCES `blog_posts` (`postID`) ON UPDATE CASCADE;

--
-- Constraints for table `login`
--
ALTER TABLE `login`
  ADD CONSTRAINT `fk_login_id_register_id` FOREIGN KEY (`register_id`) REFERENCES `register` (`register_id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
