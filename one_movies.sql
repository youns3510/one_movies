-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 01, 2020 at 01:24 PM
-- Server version: 5.7.24
-- PHP Version: 7.1.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `one_movies`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `username`, `email`, `role`, `created_at`) VALUES
(1, 'one_movies_admin', 'youns3510@gmail.com', 'admin', '2020-01-22 18:48:36');

-- --------------------------------------------------------

--
-- Table structure for table `ad_pass`
--

CREATE TABLE `ad_pass` (
  `id` int(10) UNSIGNED NOT NULL,
  `admin_id` int(10) UNSIGNED NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ad_pass`
--

INSERT INTO `ad_pass` (`id`, `admin_id`, `password`, `created_at`) VALUES
(1, 1, '$2y$10$lDLyZ87TPvBg7LojVT2lzuXk5V20ZBc1ovFJrU4hrjkHNUTdncvne', '2020-01-22 18:48:37');

-- --------------------------------------------------------

--
-- Table structure for table `ad_profile`
--

CREATE TABLE `ad_profile` (
  `id` int(10) UNSIGNED NOT NULL,
  `admin_id` int(10) UNSIGNED NOT NULL,
  `image` varchar(255) NOT NULL,
  `experience` text,
  `skills` text,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `movie_id` int(10) UNSIGNED NOT NULL,
  `comment_id` int(10) UNSIGNED DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `genres`
--

CREATE TABLE `genres` (
  `id` int(10) UNSIGNED NOT NULL,
  `movie_id` int(10) UNSIGNED NOT NULL,
  `action` char(1) DEFAULT '0',
  `biography` char(1) DEFAULT '0',
  `crime` char(1) DEFAULT '0',
  `family` char(1) DEFAULT '0',
  `horror` char(1) DEFAULT '0',
  `romance` char(1) DEFAULT '0',
  `sports` char(1) DEFAULT '0',
  `war` char(1) DEFAULT '0',
  `adventure` char(1) DEFAULT '0',
  `comedy` char(1) DEFAULT '0',
  `documentary` char(1) DEFAULT '0',
  `fantasy` char(1) DEFAULT '0',
  `thriller` char(1) DEFAULT '0',
  `animation` char(1) DEFAULT '0',
  `costume` char(1) DEFAULT '0',
  `drama` char(1) DEFAULT '0',
  `history` char(1) DEFAULT '0',
  `musical` char(1) DEFAULT '0',
  `psychological` char(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `genres`
--

INSERT INTO `genres` (`id`, `movie_id`, `action`, `biography`, `crime`, `family`, `horror`, `romance`, `sports`, `war`, `adventure`, `comedy`, `documentary`, `fantasy`, `thriller`, `animation`, `costume`, `drama`, `history`, `musical`, `psychological`) VALUES
(1, 1, '0', '0', '0', '0', '1', '1', '0', '0', '1', '1', '0', '0', '0', '1', '0', '1', '0', '0', '0'),
(2, 2, '1', '0', '0', '0', '1', '0', '1', '1', '1', '0', '1', '0', '1', '1', '1', '1', '1', '0', '1'),
(3, 3, '0', '0', '1', '1', '1', '1', '0', '1', '1', '1', '0', '0', '1', '1', '1', '1', '1', '0', '0'),
(4, 4, '1', '0', '0', '1', '0', '0', '0', '1', '0', '1', '1', '0', '1', '0', '1', '0', '1', '1', '1'),
(5, 6, '0', '0', '1', '1', '1', '0', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '0', '1', '1'),
(6, 7, '1', '0', '0', '0', '0', '0', '1', '1', '1', '0', '0', '0', '0', '0', '1', '1', '0', '0', '0'),
(7, 8, '1', '1', '0', '1', '0', '0', '1', '0', '1', '1', '1', '1', '0', '0', '1', '0', '0', '1', '1'),
(8, 9, '1', '0', '0', '0', '0', '1', '0', '0', '0', '0', '1', '0', '0', '0', '0', '0', '0', '0', '0'),
(9, 10, '1', '1', '1', '1', '0', '1', '1', '0', '1', '1', '1', '0', '1', '1', '1', '0', '0', '1', '1'),
(10, 11, '1', '1', '1', '1', '1', '1', '1', '0', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '0'),
(11, 12, '0', '1', '1', '1', '0', '1', '1', '0', '0', '1', '0', '0', '0', '0', '0', '1', '1', '1', '0'),
(12, 13, '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '0', '1', '1', '1', '1', '1', '1'),
(13, 16, '1', '1', '1', '1', '1', '1', '1', '1', '1', '0', '1', '1', '1', '1', '1', '1', '1', '0', '1'),
(14, 17, '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '0', '1', '0', '1', '1', '1', '1', '1'),
(15, 18, '0', '0', '0', '1', '1', '0', '0', '0', '1', '1', '1', '0', '0', '1', '0', '0', '0', '0', '1'),
(16, 19, '1', '0', '0', '1', '0', '0', '1', '0', '0', '0', '1', '1', '0', '1', '1', '0', '1', '1', '1'),
(17, 20, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '1', '0', '1', '1', '0', '0', '1'),
(18, 21, '0', '0', '0', '0', '0', '0', '0', '0', '1', '1', '0', '1', '0', '1', '0', '0', '1', '0', '1'),
(19, 22, '1', '1', '0', '1', '1', '1', '0', '0', '1', '1', '1', '0', '0', '0', '1', '1', '1', '1', '1'),
(20, 23, '0', '1', '1', '0', '1', '0', '1', '0', '1', '0', '1', '0', '0', '0', '1', '1', '1', '0', '1'),
(21, 24, '0', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '0', '1', '1', '1'),
(22, 25, '0', '1', '0', '1', '0', '0', '0', '0', '0', '0', '0', '1', '0', '0', '0', '0', '0', '0', '0'),
(23, 26, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '1', '0', '0', '0', '0', '0', '0', '1', '1'),
(24, 27, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '1', '0', '0', '0', '0', '0', '0', '0', '1'),
(25, 28, '1', '1', '1', '0', '0', '0', '0', '0', '1', '0', '0', '0', '1', '0', '0', '0', '1', '1', '0'),
(26, 29, '0', '0', '0', '1', '0', '1', '0', '0', '0', '0', '1', '0', '0', '1', '0', '1', '1', '0', '1'),
(27, 30, '1', '1', '0', '0', '0', '0', '0', '0', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(28, 31, '1', '1', '1', '1', '1', '0', '1', '1', '0', '0', '1', '1', '1', '1', '0', '1', '1', '0', '1'),
(29, 32, '1', '1', '1', '0', '0', '1', '1', '1', '1', '1', '0', '1', '0', '1', '1', '1', '1', '1', '1'),
(30, 33, '0', '0', '0', '0', '0', '0', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '1', '0'),
(31, 34, '0', '0', '0', '1', '1', '1', '1', '1', '1', '0', '1', '0', '0', '0', '1', '1', '1', '0', '0'),
(32, 35, '1', '0', '0', '1', '0', '0', '1', '0', '0', '0', '0', '0', '0', '0', '0', '1', '0', '1', '1'),
(33, 37, '1', '1', '0', '1', '1', '0', '0', '1', '0', '1', '1', '1', '1', '0', '1', '0', '1', '1', '1'),
(34, 38, '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1'),
(35, 39, '1', '0', '0', '0', '0', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '1', '1'),
(36, 40, '0', '0', '0', '0', '1', '0', '0', '0', '0', '0', '0', '0', '1', '0', '0', '0', '0', '0', '0'),
(37, 41, '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1'),
(38, 42, '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1'),
(39, 43, '1', '1', '1', '1', '0', '0', '0', '0', '1', '1', '1', '1', '0', '0', '1', '1', '1', '0', '1'),
(40, 44, '0', '1', '1', '1', '0', '0', '0', '1', '1', '1', '0', '0', '0', '0', '0', '0', '1', '1', '1'),
(41, 45, '0', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '0', '0', '1', '1', '1'),
(42, 46, '0', '1', '1', '0', '1', '1', '1', '0', '1', '1', '1', '0', '0', '0', '1', '1', '1', '0', '1'),
(43, 47, '0', '0', '0', '0', '1', '0', '0', '0', '0', '1', '0', '0', '0', '0', '0', '0', '0', '0', '1'),
(44, 48, '1', '0', '1', '0', '1', '1', '0', '1', '1', '1', '1', '1', '0', '1', '1', '1', '1', '1', '1'),
(45, 49, '1', '1', '0', '0', '1', '1', '1', '0', '0', '0', '1', '1', '1', '1', '1', '1', '1', '1', '1'),
(46, 50, '0', '0', '1', '0', '0', '0', '0', '1', '1', '0', '0', '0', '0', '0', '1', '0', '0', '0', '0'),
(47, 51, '0', '1', '0', '0', '1', '1', '1', '1', '1', '1', '1', '1', '0', '1', '1', '0', '1', '0', '1'),
(48, 52, '0', '0', '0', '0', '0', '0', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '1', '0', '0'),
(49, 53, '1', '0', '0', '0', '0', '1', '0', '1', '0', '0', '0', '0', '0', '1', '0', '1', '1', '0', '0'),
(50, 54, '0', '0', '1', '0', '1', '0', '1', '0', '1', '1', '1', '1', '0', '1', '1', '1', '1', '1', '1'),
(51, 55, '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1'),
(52, 56, '0', '1', '0', '1', '0', '0', '1', '1', '1', '1', '1', '1', '0', '1', '0', '1', '0', '1', '0'),
(53, 57, '1', '1', '1', '0', '1', '0', '0', '1', '1', '0', '0', '1', '0', '1', '1', '1', '1', '1', '1'),
(54, 58, '0', '1', '0', '0', '1', '1', '1', '0', '0', '0', '0', '0', '0', '0', '1', '1', '0', '0', '0'),
(55, 59, '0', '0', '1', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(56, 60, '1', '0', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '1', '0', '1', '0', '0'),
(57, 61, '1', '1', '1', '1', '1', '1', '1', '0', '1', '1', '0', '0', '1', '0', '1', '0', '0', '1', '0'),
(58, 62, '0', '0', '0', '1', '1', '0', '0', '0', '0', '0', '0', '0', '0', '1', '0', '0', '0', '0', '0'),
(59, 63, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '1', '0', '1', '0', '0', '0'),
(60, 64, '0', '0', '1', '1', '0', '0', '0', '0', '0', '1', '0', '0', '1', '0', '0', '0', '0', '0', '0'),
(61, 65, '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1'),
(62, 66, '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '0', '0', '1', '0', '1', '1', '0', '1'),
(63, 67, '1', '0', '0', '1', '0', '0', '0', '0', '1', '0', '1', '0', '0', '1', '1', '1', '1', '0', '0'),
(64, 68, '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '0', '1', '1'),
(65, 69, '1', '1', '1', '1', '1', '1', '0', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1'),
(66, 70, '0', '0', '0', '0', '0', '1', '0', '1', '0', '1', '0', '0', '0', '0', '0', '0', '0', '1', '0'),
(67, 71, '0', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '0', '1', '1', '1', '1', '1'),
(68, 72, '0', '0', '0', '0', '0', '1', '1', '0', '1', '1', '1', '0', '1', '1', '0', '0', '1', '0', '0'),
(69, 73, '1', '1', '1', '1', '1', '1', '0', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1'),
(70, 5, '1', '0', '1', '0', '0', '0', '1', '0', '0', '0', '0', '1', '0', '0', '0', '0', '0', '0', '0');

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `movie_id` int(10) UNSIGNED NOT NULL,
  `last_watch` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `id` int(10) UNSIGNED NOT NULL,
  `admin_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `story` text NOT NULL,
  `release_date` date NOT NULL,
  `image` varchar(255) NOT NULL,
  `banner` varchar(255) NOT NULL,
  `video` varchar(255) NOT NULL,
  `views` int(10) UNSIGNED DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`id`, `admin_id`, `name`, `story`, `release_date`, `image`, `banner`, `video`, `views`, `created_at`) VALUES
(1, 1, 'God’s Compass', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam repellendus perspiciatis eveniet, blanditiis molestiae dolore quaerat, vitae maiores, aspernatur explicabo quisquam nemo quas consectetur nisi accusamus dolores ipsam praesentium distinctio.', '2019-01-23', 'partials/uploads/2019/God’s Compass/m15.jpg', '', 'partials/uploads/2019/God’s Compass/test.MP4', 423424, '2020-02-05 12:35:40'),
(2, 1, 'Jason Bourne', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos nulla, alias aspernatur fuga minus quisquam dolorum laudantium ratione doloremque possimus consequatur, ducimus autem impedit odio temporibus labore nihil accusamus expedita.', '2019-01-23', 'partials/uploads/2019/Jason Bourne/m5.jpg', '', 'partials/uploads/2019/Jason Bourne/test.MP4', 6, '2020-02-29 18:20:53'),
(3, 1, 'Peter', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officia, ducimus minus excepturi esse sunt fuga saepe ipsum totam, pariatur quam distinctio. Eum nemo sint accusantium laborum illo? Obcaecati, eos laborum!', '2020-01-23', 'partials/uploads/2020/Peter/m17.jpg', '', 'partials/uploads/2020/Peter/test.MP4', 245, '2020-02-05 10:14:52'),
(4, 1, 'War Dogs', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam temporibus minus delectus nulla optio praesentium nobis magnam inventore blanditiis doloribus, vel, minima, autem asperiores in ex sapiente consectetur est excepturi.', '2010-01-23', 'partials/uploads/2010/War Dogs/m1.jpg', '', 'partials/uploads/2010/War Dogs/test.MP4', 430, '2020-02-26 10:57:19'),
(5, 1, 'Civil War', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam temporibus minus delectus nulla optio praesentium nobis magnam inventore blanditiis doloribus, vel, minima, autem asperiores in ex sapiente consectetur est excepturi.', '2001-01-23', 'partials/uploads/2001/Civil War/m19.jpg', 'partials/uploads/2001/Civil_War/banner_h3-1.jpg', 'partials/uploads/2001/Civil War/test.MP4', 12321320, '2020-02-26 11:36:38'),
(6, 1, 'The Secret Life of Pets', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam temporibus minus delectus nulla optio praesentium nobis magnam inventore blanditiis doloribus, vel, minima, autem asperiores in ex sapiente consectetur est excepturi.', '2013-01-23', 'partials/uploads/2013/The Secret Life of Pets/m20.jpg', '', 'partials/uploads/2013/The Secret Life of Pets/test.MP4', 8, '2020-02-28 18:45:38'),
(7, 1, 'The Jungle Book', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam temporibus minus delectus nulla optio praesentium nobis magnam inventore blanditiis doloribus, vel, minima, autem asperiores in ex sapiente consectetur est excepturi.', '2012-01-23', 'partials/uploads/2012/The Jungle Book/m21.jpg', 'partials/uploads/2012/The_Jungle_Book/banner_3.jpg', 'partials/uploads/2012/The Jungle Book/test.MP4', 1120, '2020-02-13 19:46:56'),
(8, 1, 'Assassin’s Creed 3', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam temporibus minus delectus nulla optio praesentium nobis magnam inventore blanditiis doloribus, vel, minima, autem asperiores in ex sapiente consectetur est excepturi.', '2010-01-23', 'partials/uploads/2010/Assassin’s_Creed_3/img_m22.jpg', 'partials/uploads/2010/Assassin’s_Creed_3/banner_3.jpg', 'partials/uploads/2010/Assassin’sCreed3/test.MP4', 7, '2020-02-16 10:26:22'),
(9, 1, 'new God’s Compass', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam repellendus perspiciatis eveniet, blanditiis molestiae dolore quaerat, vitae maiores, aspernatur explicabo quisquam nemo quas consectetur nisi accusamus dolores ipsam praesentium distinctio.', '2019-01-23', 'partials/uploads/2019/new God’s Compass/m15.jpg', 'partials/uploads/2019/new_God’s_Compass/banner_2.jpg', 'partials/uploads/2019/new God’s Compass/test.MP4', 23423455, '2020-02-14 18:14:26'),
(10, 1, 'new Jason Bourne', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos nulla, alias aspernatur fuga minus quisquam dolorum laudantium ratione doloremque possimus consequatur, ducimus autem impedit odio temporibus labore nihil accusamus expedita.', '2019-01-23', 'partials/uploads/2019/new Jason Bourne/m5.jpg', '', 'partials/uploads/2019/new Jason Bourne/test.MP4', 6143417, '2020-02-28 19:23:29'),
(11, 1, 'new Peter', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officia, ducimus minus excepturi esse sunt fuga saepe ipsum totam, pariatur quam distinctio. Eum nemo sint accusantium laborum illo? Obcaecati, eos laborum!', '2020-01-23', 'partials/uploads/2020/new Peter/m17.jpg', '', 'partials/uploads/2020/new Peter/test.MP4', 4, '2020-02-26 11:24:01'),
(12, 1, 'new War Dogs', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam temporibus minus delectus nulla optio praesentium nobis magnam inventore blanditiis doloribus, vel, minima, autem asperiores in ex sapiente consectetur est excepturi.', '2010-01-23', 'partials/uploads/2010/new War Dogs/m1.jpg', '', 'partials/uploads/2010/new War Dogs/test.MP4', 14, '2020-02-26 11:47:14'),
(13, 1, 'new Civil War', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam temporibus minus delectus nulla optio praesentium nobis magnam inventore blanditiis doloribus, vel, minima, autem asperiores in ex sapiente consectetur est excepturi.', '2001-01-23', 'partials/uploads/2001/new Civil War/m19.jpg', '', 'partials/uploads/2001/new Civil War/test.MP4', 0, '2020-01-23 17:44:37'),
(14, 1, 'new The Secret Life of Pets', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam temporibus minus delectus nulla optio praesentium nobis magnam inventore blanditiis doloribus, vel, minima, autem asperiores in ex sapiente consectetur est excepturi.', '2013-01-23', 'partials/uploads/2013/new The Secret Life of Pets/m20.jpg', '', 'partials/uploads/2013/new The Secret Life of Pets/test.MP4', 1, '2020-02-05 17:02:34'),
(15, 1, 'new The Jungle Book', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam temporibus minus delectus nulla optio praesentium nobis magnam inventore blanditiis doloribus, vel, minima, autem asperiores in ex sapiente consectetur est excepturi.', '2012-01-23', 'partials/uploads/2012/new The Jungle Book/m21.jpg', '', 'partials/uploads/2012/new The Jungle Book/test.MP4', 0, '2020-01-23 17:44:44'),
(16, 1, 'new Assassin’s Creed 3', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam temporibus minus delectus nulla optio praesentium nobis magnam inventore blanditiis doloribus, vel, minima, autem asperiores in ex sapiente consectetur est excepturi.', '2010-01-23', 'partials/uploads/2010/new Assassin’s Creed 3/m22.jpg', '', 'partials/uploads/2010/new Assassin’s Creed 3/test.MP4', 3, '2020-02-16 10:26:31'),
(17, 1, 'last God’s Compass', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam repellendus perspiciatis eveniet, blanditiis molestiae dolore quaerat, vitae maiores, aspernatur explicabo quisquam nemo quas consectetur nisi accusamus dolores ipsam praesentium distinctio.', '2019-01-23', 'partials/uploads/2019/last God’s Compass/m15.jpg', '', 'partials/uploads/2019/last God’s Compass/test.MP4', 0, '2020-01-23 17:44:50'),
(18, 1, 'last Jason Bourne', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos nulla, alias aspernatur fuga minus quisquam dolorum laudantium ratione doloremque possimus consequatur, ducimus autem impedit odio temporibus labore nihil accusamus expedita.', '2019-01-23', 'partials/uploads/2019/last Jason Bourne/m5.jpg', '', 'partials/uploads/2019/last Jason Bourne/test.MP4', 4, '2020-02-25 21:57:00'),
(19, 1, 'last Peter', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officia, ducimus minus excepturi esse sunt fuga saepe ipsum totam, pariatur quam distinctio. Eum nemo sint accusantium laborum illo? Obcaecati, eos laborum!', '2020-01-23', 'partials/uploads/2020/last Peter/m17.jpg', '', 'partials/uploads/2020/last Peter/test.MP4', 0, '2020-01-23 17:44:57'),
(20, 1, 'last War Dogs', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam temporibus minus delectus nulla optio praesentium nobis magnam inventore blanditiis doloribus, vel, minima, autem asperiores in ex sapiente consectetur est excepturi.', '2010-01-23', 'partials/uploads/2010/last War Dogs/m1.jpg', '', 'partials/uploads/2010/last War Dogs/test.MP4', 0, '2020-01-23 17:45:00'),
(21, 1, 'last Civil War', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam temporibus minus delectus nulla optio praesentium nobis magnam inventore blanditiis doloribus, vel, minima, autem asperiores in ex sapiente consectetur est excepturi.', '2001-01-23', 'partials/uploads/2001/last Civil War/m19.jpg', '', 'partials/uploads/2001/last Civil War/test.MP4', 0, '2020-01-23 17:45:03'),
(22, 1, 'last The Secret Life of Pets', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam temporibus minus delectus nulla optio praesentium nobis magnam inventore blanditiis doloribus, vel, minima, autem asperiores in ex sapiente consectetur est excepturi.', '2013-01-23', 'partials/uploads/2013/last The Secret Life of Pets/m20.jpg', '', 'partials/uploads/2013/last The Secret Life of Pets/test.MP4', 0, '2020-01-23 17:45:06'),
(23, 1, 'last The Jungle Book', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam temporibus minus delectus nulla optio praesentium nobis magnam inventore blanditiis doloribus, vel, minima, autem asperiores in ex sapiente consectetur est excepturi.', '2012-01-23', 'partials/uploads/2012/last The Jungle Book/m21.jpg', '', 'partials/uploads/2012/last The Jungle Book/test.MP4', 0, '2020-01-23 17:45:10'),
(24, 1, 'last Assassin’s Creed 3', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam temporibus minus delectus nulla optio praesentium nobis magnam inventore blanditiis doloribus, vel, minima, autem asperiores in ex sapiente consectetur est excepturi.', '2010-01-23', 'partials/uploads/2010/last Assassin’s Creed 3/m22.jpg', '', 'partials/uploads/2010/last Assassin’s Creed 3/test.MP4', 0, '2020-01-23 17:45:13'),
(25, 1, 'God’s Compass', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam repellendus perspiciatis eveniet, blanditiis molestiae dolore quaerat, vitae maiores, aspernatur explicabo quisquam nemo quas consectetur nisi accusamus dolores ipsam praesentium distinctio.', '2019-01-23', 'partials/uploads/2019/God’s_Compass/m15.jpg', '', 'partials/uploads/2019/God’s_Compass/test.MP4', 0, '2020-02-05 17:43:28'),
(26, 1, 'Jason Bourne', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos nulla, alias aspernatur fuga minus quisquam dolorum laudantium ratione doloremque possimus consequatur, ducimus autem impedit odio temporibus labore nihil accusamus expedita.', '2019-01-23', 'partials/uploads/2019/Jason_Bourne/m5.jpg', '', 'partials/uploads/2019/Jason_Bourne/test.MP4', 0, '2020-02-05 17:43:32'),
(27, 1, 'Peter', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officia, ducimus minus excepturi esse sunt fuga saepe ipsum totam, pariatur quam distinctio. Eum nemo sint accusantium laborum illo? Obcaecati, eos laborum!', '2020-01-23', 'partials/uploads/2020/Peter/m17.jpg', '', 'partials/uploads/2020/Peter/test.MP4', 0, '2020-02-05 17:43:35'),
(28, 1, 'War Dogs', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam temporibus minus delectus nulla optio praesentium nobis magnam inventore blanditiis doloribus, vel, minima, autem asperiores in ex sapiente consectetur est excepturi.', '2010-01-23', 'partials/uploads/2010/War_Dogs/m1.jpg', '', 'partials/uploads/2010/War_Dogs/test.MP4', 0, '2020-02-05 17:43:39'),
(29, 1, 'Civil War', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam temporibus minus delectus nulla optio praesentium nobis magnam inventore blanditiis doloribus, vel, minima, autem asperiores in ex sapiente consectetur est excepturi.', '2001-01-23', 'partials/uploads/2001/Civil_War/m19.jpg', '', 'partials/uploads/2001/Civil_War/test.MP4', 0, '2020-02-05 17:43:42'),
(30, 1, 'The Secret Life of Pets', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam temporibus minus delectus nulla optio praesentium nobis magnam inventore blanditiis doloribus, vel, minima, autem asperiores in ex sapiente consectetur est excepturi.', '2013-01-23', 'partials/uploads/2013/The_Secret_Life_of_Pets/m20.jpg', '', 'partials/uploads/2013/The_Secret_Life_of_Pets/test.MP4', 0, '2020-02-05 17:43:46'),
(31, 1, 'The Jungle Book', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam temporibus minus delectus nulla optio praesentium nobis magnam inventore blanditiis doloribus, vel, minima, autem asperiores in ex sapiente consectetur est excepturi.', '2012-01-23', 'partials/uploads/2012/The_Jungle_Book/m21.jpg', '', 'partials/uploads/2012/The_Jungle_Book/test.MP4', 0, '2020-02-05 17:43:49'),
(32, 1, 'Assassin’s Creed 3', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam temporibus minus delectus nulla optio praesentium nobis magnam inventore blanditiis doloribus, vel, minima, autem asperiores in ex sapiente consectetur est excepturi.', '2010-01-23', 'partials/uploads/2010/Assassin’s_Creed_3/m22.jpg', '', 'partials/uploads/2010/Assassin’s_Creed_3/test.MP4', 0, '2020-02-05 17:43:52'),
(33, 1, 'new God’s Compass', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam repellendus perspiciatis eveniet, blanditiis molestiae dolore quaerat, vitae maiores, aspernatur explicabo quisquam nemo quas consectetur nisi accusamus dolores ipsam praesentium distinctio.', '2019-01-23', 'partials/uploads/2019/new_God’s_Compass/m15.jpg', '', 'partials/uploads/2019/new_God’s_Compass/test.MP4', 0, '2020-02-05 17:43:56'),
(34, 1, 'new Jason Bourne', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos nulla, alias aspernatur fuga minus quisquam dolorum laudantium ratione doloremque possimus consequatur, ducimus autem impedit odio temporibus labore nihil accusamus expedita.', '2019-01-23', 'partials/uploads/2019/new_Jason_Bourne/m5.jpg', '', 'partials/uploads/2019/new_Jason_Bourne/test.MP4', 0, '2020-02-05 17:44:00'),
(35, 1, 'new Peter', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officia, ducimus minus excepturi esse sunt fuga saepe ipsum totam, pariatur quam distinctio. Eum nemo sint accusantium laborum illo? Obcaecati, eos laborum!', '2020-01-23', 'partials/uploads/2020/new_Peter/m17.jpg', '', 'partials/uploads/2020/new_Peter/test.MP4', 0, '2020-02-05 17:44:03'),
(36, 1, 'new War Dogs', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam temporibus minus delectus nulla optio praesentium nobis magnam inventore blanditiis doloribus, vel, minima, autem asperiores in ex sapiente consectetur est excepturi.', '2010-01-23', 'partials/uploads/2010/new_War_Dogs/m1.jpg', '', 'partials/uploads/2010/new_War_Dogs/test.MP4', 1, '2020-02-26 11:20:47'),
(37, 1, 'new Civil War', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam temporibus minus delectus nulla optio praesentium nobis magnam inventore blanditiis doloribus, vel, minima, autem asperiores in ex sapiente consectetur est excepturi.', '2001-01-23', 'partials/uploads/2001/new_Civil_War/m19.jpg', '', 'partials/uploads/2001/new_Civil_War/test.MP4', 0, '2020-02-05 17:44:10'),
(38, 1, 'new The Secret Life of Pets', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam temporibus minus delectus nulla optio praesentium nobis magnam inventore blanditiis doloribus, vel, minima, autem asperiores in ex sapiente consectetur est excepturi.', '2013-01-23', 'partials/uploads/2013/new_The_Secret_Life_of_Pets/m20.jpg', '', 'partials/uploads/2013/new_The_Secret_Life_of_Pets/test.MP4', 0, '2020-02-05 17:44:13'),
(39, 1, 'new The Jungle Book', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam temporibus minus delectus nulla optio praesentium nobis magnam inventore blanditiis doloribus, vel, minima, autem asperiores in ex sapiente consectetur est excepturi.', '2012-01-23', 'partials/uploads/2012/new_The_Jungle_Book/m21.jpg', '', 'partials/uploads/2012/new_The_Jungle_Book/test.MP4', 0, '2020-02-05 17:44:17'),
(40, 1, 'new Assassin’s Creed 3', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam temporibus minus delectus nulla optio praesentium nobis magnam inventore blanditiis doloribus, vel, minima, autem asperiores in ex sapiente consectetur est excepturi.', '2010-01-23', 'partials/uploads/2010/new_Assassin’s_Creed_3/m22.jpg', '', 'partials/uploads/2010/new_Assassin’s_Creed_3/test.MP4', 0, '2020-02-05 17:44:20'),
(41, 1, 'last God’s Compass', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam repellendus perspiciatis eveniet, blanditiis molestiae dolore quaerat, vitae maiores, aspernatur explicabo quisquam nemo quas consectetur nisi accusamus dolores ipsam praesentium distinctio.', '2019-01-23', 'partials/uploads/2019/last_God’s_Compass/m15.jpg', '', 'partials/uploads/2019/last_God’s_Compass/test.MP4', 0, '2020-02-05 17:44:24'),
(42, 1, 'last Jason Bourne', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos nulla, alias aspernatur fuga minus quisquam dolorum laudantium ratione doloremque possimus consequatur, ducimus autem impedit odio temporibus labore nihil accusamus expedita.', '2019-01-23', 'partials/uploads/2019/last_Jason_Bourne/m5.jpg', '', 'partials/uploads/2019/last_Jason_Bourne/test.MP4', 0, '2020-02-05 17:44:27'),
(43, 1, 'last Peter', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officia, ducimus minus excepturi esse sunt fuga saepe ipsum totam, pariatur quam distinctio. Eum nemo sint accusantium laborum illo? Obcaecati, eos laborum!', '2020-01-23', 'partials/uploads/2020/last_Peter/m17.jpg', '', 'partials/uploads/2020/last_Peter/test.MP4', 0, '2020-02-05 17:44:31'),
(44, 1, 'last War Dogs', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam temporibus minus delectus nulla optio praesentium nobis magnam inventore blanditiis doloribus, vel, minima, autem asperiores in ex sapiente consectetur est excepturi.', '2010-01-23', 'partials/uploads/2010/last_War_Dogs/m1.jpg', '', 'partials/uploads/2010/last_War_Dogs/test.MP4', 0, '2020-02-05 17:44:34'),
(45, 1, 'last Civil War', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam temporibus minus delectus nulla optio praesentium nobis magnam inventore blanditiis doloribus, vel, minima, autem asperiores in ex sapiente consectetur est excepturi.', '2001-01-23', 'partials/uploads/2001/last_Civil_War/m19.jpg', '', 'partials/uploads/2001/last_Civil_War/test.MP4', 0, '2020-02-05 17:44:38'),
(46, 1, 'last The Secret Life of Pets', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam temporibus minus delectus nulla optio praesentium nobis magnam inventore blanditiis doloribus, vel, minima, autem asperiores in ex sapiente consectetur est excepturi.', '2013-01-23', 'partials/uploads/2013/last_The_Secret_Life_of_Pets/m20.jpg', '', 'partials/uploads/2013/last_The_Secret_Life_of_Pets/test.MP4', 0, '2020-02-05 17:44:41'),
(47, 1, 'last The Jungle Book', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam temporibus minus delectus nulla optio praesentium nobis magnam inventore blanditiis doloribus, vel, minima, autem asperiores in ex sapiente consectetur est excepturi.', '2012-01-23', 'partials/uploads/2012/last_The_Jungle_Book/m21.jpg', '', 'partials/uploads/2012/last_The_Jungle_Book/test.MP4', 0, '2020-02-05 17:44:45'),
(48, 1, 'last Assassin’s Creed 3', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam temporibus minus delectus nulla optio praesentium nobis magnam inventore blanditiis doloribus, vel, minima, autem asperiores in ex sapiente consectetur est excepturi.', '2010-01-23', 'partials/uploads/2010/last_Assassin’s_Creed_3/m22.jpg', '', 'partials/uploads/2010/last_Assassin’s_Creed_3/test.MP4', 0, '2020-02-05 17:44:48'),
(49, 1, 'God’s_Compass', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam repellendus perspiciatis eveniet, blanditiis molestiae dolore quaerat, vitae maiores, aspernatur explicabo quisquam nemo quas consectetur nisi accusamus dolores ipsam praesentium distinctio.', '2019-01-23', 'partials/uploads/2019/God’s_Compass/m15.jpg', '', 'partials/uploads/2019/God’s_Compass/test.MP4', 0, '2020-02-05 17:48:00'),
(50, 1, 'Jason_Bourne', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos nulla, alias aspernatur fuga minus quisquam dolorum laudantium ratione doloremque possimus consequatur, ducimus autem impedit odio temporibus labore nihil accusamus expedita.', '2019-01-23', 'partials/uploads/2019/Jason_Bourne/m5.jpg', '', 'partials/uploads/2019/Jason_Bourne/test.MP4', 0, '2020-02-05 17:48:03'),
(51, 1, 'Peter', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officia, ducimus minus excepturi esse sunt fuga saepe ipsum totam, pariatur quam distinctio. Eum nemo sint accusantium laborum illo? Obcaecati, eos laborum!', '2020-01-23', 'partials/uploads/2020/Peter/m17.jpg', '', 'partials/uploads/2020/Peter/test.MP4', 0, '2020-02-05 17:48:06'),
(52, 1, 'War_Dogs', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam temporibus minus delectus nulla optio praesentium nobis magnam inventore blanditiis doloribus, vel, minima, autem asperiores in ex sapiente consectetur est excepturi.', '2010-01-23', 'partials/uploads/2010/War_Dogs/m1.jpg', '', 'partials/uploads/2010/War_Dogs/test.MP4', 0, '2020-02-05 17:48:10'),
(53, 1, 'Civil_War', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam temporibus minus delectus nulla optio praesentium nobis magnam inventore blanditiis doloribus, vel, minima, autem asperiores in ex sapiente consectetur est excepturi.', '2001-01-23', 'partials/uploads/2001/Civil_War/m19.jpg', '', 'partials/uploads/2001/Civil_War/test.MP4', 0, '2020-02-05 17:48:13'),
(54, 1, 'The_Secret_Life_of_Pets', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam temporibus minus delectus nulla optio praesentium nobis magnam inventore blanditiis doloribus, vel, minima, autem asperiores in ex sapiente consectetur est excepturi.', '2013-01-23', 'partials/uploads/2013/The_Secret_Life_of_Pets/m20.jpg', '', 'partials/uploads/2013/The_Secret_Life_of_Pets/test.MP4', 0, '2020-02-05 17:48:17'),
(55, 1, 'The_Jungle_Book', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam temporibus minus delectus nulla optio praesentium nobis magnam inventore blanditiis doloribus, vel, minima, autem asperiores in ex sapiente consectetur est excepturi.', '2012-01-23', 'partials/uploads/2012/The_Jungle_Book/m21.jpg', '', 'partials/uploads/2012/The_Jungle_Book/test.MP4', 0, '2020-02-05 17:48:20'),
(56, 1, 'Assassin’s_Creed_3', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam temporibus minus delectus nulla optio praesentium nobis magnam inventore blanditiis doloribus, vel, minima, autem asperiores in ex sapiente consectetur est excepturi.', '2010-01-23', 'partials/uploads/2010/Assassin’s_Creed_3/m22.jpg', '', 'partials/uploads/2010/Assassin’s_Creed_3/test.MP4', 0, '2020-02-05 17:48:23'),
(57, 1, 'new_God’s_Compass', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam repellendus perspiciatis eveniet, blanditiis molestiae dolore quaerat, vitae maiores, aspernatur explicabo quisquam nemo quas consectetur nisi accusamus dolores ipsam praesentium distinctio.', '2019-01-23', 'partials/uploads/2019/new_God’s_Compass/m15.jpg', '', 'partials/uploads/2019/new_God’s_Compass/test.MP4', 0, '2020-02-05 17:48:27'),
(58, 1, 'new_Jason_Bourne', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos nulla, alias aspernatur fuga minus quisquam dolorum laudantium ratione doloremque possimus consequatur, ducimus autem impedit odio temporibus labore nihil accusamus expedita.', '2019-01-23', 'partials/uploads/2019/new_Jason_Bourne/m5.jpg', '', 'partials/uploads/2019/new_Jason_Bourne/test.MP4', 0, '2020-02-05 17:48:30'),
(59, 1, 'new_Peter', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officia, ducimus minus excepturi esse sunt fuga saepe ipsum totam, pariatur quam distinctio. Eum nemo sint accusantium laborum illo? Obcaecati, eos laborum!', '2020-01-23', 'partials/uploads/2020/new_Peter/m17.jpg', '', 'partials/uploads/2020/new_Peter/test.MP4', 0, '2020-02-05 17:48:34'),
(60, 1, 'new_War_Dogs', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam temporibus minus delectus nulla optio praesentium nobis magnam inventore blanditiis doloribus, vel, minima, autem asperiores in ex sapiente consectetur est excepturi.', '2010-01-23', 'partials/uploads/2010/new_War_Dogs/m1.jpg', '', 'partials/uploads/2010/new_War_Dogs/test.MP4', 0, '2020-02-05 17:48:37'),
(61, 1, 'new_Civil_War', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam temporibus minus delectus nulla optio praesentium nobis magnam inventore blanditiis doloribus, vel, minima, autem asperiores in ex sapiente consectetur est excepturi.', '2001-01-23', 'partials/uploads/2001/new_Civil_War/m19.jpg', '', 'partials/uploads/2001/new_Civil_War/test.MP4', 0, '2020-02-05 17:48:41'),
(62, 1, 'new_The_Secret_Life_of_Pets', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam temporibus minus delectus nulla optio praesentium nobis magnam inventore blanditiis doloribus, vel, minima, autem asperiores in ex sapiente consectetur est excepturi.', '2013-01-23', 'partials/uploads/2013/new_The_Secret_Life_of_Pets/m20.jpg', '', 'partials/uploads/2013/new_The_Secret_Life_of_Pets/test.MP4', 0, '2020-02-05 17:48:44'),
(63, 1, 'new_The_Jungle_Book', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam temporibus minus delectus nulla optio praesentium nobis magnam inventore blanditiis doloribus, vel, minima, autem asperiores in ex sapiente consectetur est excepturi.', '2012-01-23', 'partials/uploads/2012/new_The_Jungle_Book/m21.jpg', '', 'partials/uploads/2012/new_The_Jungle_Book/test.MP4', 0, '2020-02-05 17:48:47'),
(64, 1, 'new_Assassin’s_Creed_3', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam temporibus minus delectus nulla optio praesentium nobis magnam inventore blanditiis doloribus, vel, minima, autem asperiores in ex sapiente consectetur est excepturi.', '2010-01-23', 'partials/uploads/2010/new_Assassin’s_Creed_3/m22.jpg', '', 'partials/uploads/2010/new_Assassin’s_Creed_3/test.MP4', 0, '2020-02-05 17:48:51'),
(65, 1, 'last_God’s_Compass', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam repellendus perspiciatis eveniet, blanditiis molestiae dolore quaerat, vitae maiores, aspernatur explicabo quisquam nemo quas consectetur nisi accusamus dolores ipsam praesentium distinctio.', '2019-01-23', 'partials/uploads/2019/last_God’s_Compass/m15.jpg', '', 'partials/uploads/2019/last_God’s_Compass/test.MP4', 0, '2020-02-05 17:48:54'),
(66, 1, 'last_Jason_Bourne', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos nulla, alias aspernatur fuga minus quisquam dolorum laudantium ratione doloremque possimus consequatur, ducimus autem impedit odio temporibus labore nihil accusamus expedita.', '2019-01-23', 'partials/uploads/2019/last_Jason_Bourne/m5.jpg', '', 'partials/uploads/2019/last_Jason_Bourne/test.MP4', 0, '2020-02-05 17:48:57'),
(67, 1, 'last_Peter', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officia, ducimus minus excepturi esse sunt fuga saepe ipsum totam, pariatur quam distinctio. Eum nemo sint accusantium laborum illo? Obcaecati, eos laborum!', '2020-01-23', 'partials/uploads/2020/last_Peter/m17.jpg', '', 'partials/uploads/2020/last_Peter/test.MP4', 0, '2020-02-05 17:49:01'),
(68, 1, 'last_War_Dogs', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam temporibus minus delectus nulla optio praesentium nobis magnam inventore blanditiis doloribus, vel, minima, autem asperiores in ex sapiente consectetur est excepturi.', '2010-01-23', 'partials/uploads/2010/last_War_Dogs/m1.jpg', '', 'partials/uploads/2010/last_War_Dogs/test.MP4', 0, '2020-02-05 17:49:04'),
(69, 1, 'last_Civil_War', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam temporibus minus delectus nulla optio praesentium nobis magnam inventore blanditiis doloribus, vel, minima, autem asperiores in ex sapiente consectetur est excepturi.', '2001-01-23', 'partials/uploads/2001/last_Civil_War/m19.jpg', '', 'partials/uploads/2001/last_Civil_War/test.MP4', 0, '2020-02-05 17:49:08'),
(70, 1, 'last_The_Secret_Life_of_Pets', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam temporibus minus delectus nulla optio praesentium nobis magnam inventore blanditiis doloribus, vel, minima, autem asperiores in ex sapiente consectetur est excepturi.', '2013-01-23', 'partials/uploads/2013/last_The_Secret_Life_of_Pets/m20.jpg', '', 'partials/uploads/2013/last_The_Secret_Life_of_Pets/test.MP4', 0, '2020-02-05 17:49:11'),
(71, 1, 'last_The_Jungle_Book', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam temporibus minus delectus nulla optio praesentium nobis magnam inventore blanditiis doloribus, vel, minima, autem asperiores in ex sapiente consectetur est excepturi.', '2012-01-23', 'partials/uploads/2012/last_The_Jungle_Book/m21.jpg', '', 'partials/uploads/2012/last_The_Jungle_Book/test.MP4', 0, '2020-02-05 17:49:14'),
(72, 1, 'last_Assassin’s_Creed_3', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam temporibus minus delectus nulla optio praesentium nobis magnam inventore blanditiis doloribus, vel, minima, autem asperiores in ex sapiente consectetur est excepturi.', '2010-01-23', 'partials/uploads/2010/last_Assassin’s_Creed_3/m22.jpg', '', 'partials/uploads/2010/last_Assassin’s_Creed_3/test.MP4', 0, '2020-02-05 17:49:18'),
(73, 1, 'Tarazan two', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam temporibus minus delectus nulla optio praesentium nobis magnam inventore blanditiis doloribus, vel, minima, autem asperiores in ex sapiente consectetur est excepturi.', '2020-02-19', 'partials/uploads/2020/Tarazan_two/m3.jpg', 'partials/uploads/2020/Tarazan_two/banner_second_big_item.jpg', 'partials/uploads/2020/Tarazan_two/test.MP4', 7, '2020-02-29 15:56:33');

-- --------------------------------------------------------

--
-- Table structure for table `star_rating`
--

CREATE TABLE `star_rating` (
  `id` int(10) UNSIGNED NOT NULL,
  `movie_id` int(10) UNSIGNED NOT NULL,
  `rate_avg` float UNSIGNED NOT NULL DEFAULT '1',
  `one` int(10) DEFAULT '0',
  `two` int(10) DEFAULT '0',
  `three` int(10) DEFAULT '0',
  `four` int(10) DEFAULT '0',
  `five` int(10) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `star_rating`
--

INSERT INTO `star_rating` (`id`, `movie_id`, `rate_avg`, `one`, `two`, `three`, `four`, `five`) VALUES
(1, 1, 4.5, 989, 30, 210, 1400, 1020),
(2, 2, 4.5, 157, 1272, 1494, 1172, 880),
(3, 3, 1, 798, 128, 231, 1592, 65),
(4, 4, 3.5, 495, 310, 1776, 1116, 620),
(5, 5, 1, 322, 254, 555, 716, 216),
(6, 6, 1, 8, 1252, 606, 2288, 535),
(7, 7, 5, 841, 74, 1575, 1208, 1316),
(8, 8, 5, 284, 1044, 1119, 824, 1366),
(9, 9, 5, 405, 982, 1764, 320, 1196),
(10, 10, 3.5, 534, 976, 1848, 1256, 950),
(11, 11, 1, 414, 404, 333, 2316, 490),
(12, 12, 5, 539, 1686, 1662, 628, 1170),
(13, 13, 2.5, 785, 1646, 891, 356, 280),
(14, 14, 5, 36, 1696, 906, 256, 1620),
(15, 15, 5, 687, 916, 1302, 2196, 1990),
(16, 16, 1, 902, 1362, 558, 1160, 30),
(17, 17, 1, 49, 244, 1899, 1728, 330),
(18, 18, 4.5, 594, 1324, 2007, 2380, 1015),
(19, 19, 3.5, 92, 1760, 2007, 1148, 110),
(20, 20, 1, 632, 668, 678, 2340, 15),
(21, 21, 1, 617, 1990, 1500, 2060, 410),
(22, 22, 1, 107, 830, 1506, 1324, 435),
(23, 23, 5, 274, 858, 1305, 1628, 1635),
(24, 24, 1, 562, 1010, 174, 856, 25),
(25, 1, 4.5, 989, 30, 210, 1400, 1020),
(26, 2, 4.5, 157, 1272, 1494, 1172, 880),
(27, 3, 1, 798, 128, 231, 1592, 65),
(28, 4, 3.5, 495, 310, 1776, 1116, 620),
(29, 5, 1, 322, 254, 555, 716, 216),
(30, 6, 1, 8, 1252, 606, 2288, 535),
(31, 7, 5, 841, 74, 1575, 1208, 1316),
(32, 8, 5, 284, 1044, 1119, 824, 1366),
(33, 9, 5, 405, 982, 1764, 320, 1196),
(34, 10, 3.5, 534, 976, 1848, 1256, 950),
(35, 11, 1, 414, 404, 333, 2316, 490),
(36, 12, 5, 539, 1686, 1662, 628, 1170),
(37, 13, 2.5, 785, 1646, 891, 356, 280),
(38, 14, 5, 36, 1696, 906, 256, 1620),
(39, 15, 5, 687, 916, 1302, 2196, 1990),
(40, 16, 1, 902, 1362, 558, 1160, 30),
(41, 17, 1, 49, 244, 1899, 1728, 330),
(42, 18, 4.5, 594, 1324, 2007, 2380, 1015),
(43, 19, 3.5, 92, 1760, 2007, 1148, 110),
(44, 20, 1, 632, 668, 678, 2340, 15),
(45, 21, 1, 617, 1990, 1500, 2060, 410),
(46, 22, 1, 107, 830, 1506, 1324, 435),
(47, 23, 5, 274, 858, 1305, 1628, 1635),
(48, 24, 1, 562, 1010, 174, 856, 25),
(49, 1, 4.5, 989, 30, 210, 1400, 1020),
(50, 2, 4.5, 157, 1272, 1494, 1172, 880),
(51, 3, 1, 798, 128, 231, 1592, 65),
(52, 4, 3.5, 495, 310, 1776, 1116, 620),
(53, 5, 1, 322, 254, 555, 716, 216),
(54, 6, 1, 8, 1252, 606, 2288, 535),
(55, 7, 5, 841, 74, 1575, 1208, 1316),
(56, 8, 5, 284, 1044, 1119, 824, 1366),
(57, 9, 5, 405, 982, 1764, 320, 1196),
(58, 10, 3.5, 534, 976, 1848, 1256, 950),
(59, 11, 1, 414, 404, 333, 2316, 490),
(60, 12, 5, 539, 1686, 1662, 628, 1170),
(61, 13, 2.5, 785, 1646, 891, 356, 280),
(62, 14, 5, 36, 1696, 906, 256, 1620),
(63, 15, 5, 687, 916, 1302, 2196, 1990),
(64, 16, 1, 902, 1362, 558, 1160, 30),
(65, 17, 1, 49, 244, 1899, 1728, 330),
(66, 18, 4.5, 594, 1324, 2007, 2380, 1015),
(67, 19, 3.5, 92, 1760, 2007, 1148, 110),
(68, 20, 1, 632, 668, 678, 2340, 15),
(69, 21, 1, 617, 1990, 1500, 2060, 410),
(70, 22, 1, 107, 830, 1506, 1324, 435),
(71, 23, 5, 274, 858, 1305, 1628, 1635),
(72, 24, 1, 562, 1010, 174, 856, 25),
(73, 73, 5, 0, 0, 0, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `verified` char(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `phone`, `token`, `verified`, `created_at`) VALUES
(2, 'user12345', 'user12345@app.com', '+12 23 233 4343', 'b7cc417799e03d5889b3f8899f4b0ff12108d4be4aae6cd43236dc364831ff83cea893cf73eb7e4a781c3b3ab52c467ed0bb', '0', '2020-02-04 19:59:45');

-- --------------------------------------------------------

--
-- Table structure for table `usr_pass`
--

CREATE TABLE `usr_pass` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `usr_pass`
--

INSERT INTO `usr_pass` (`id`, `user_id`, `password`, `created_at`) VALUES
(2, 2, '$2y$10$5vKFs5MD5RTj7jf12bEQb.a2PuqgU86bhv/07jXvrc75Q1CP3DD0i', '2020-02-04 19:58:05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQUE` (`email`);

--
-- Indexes for table `ad_pass`
--
ALTER TABLE `ad_pass`
  ADD PRIMARY KEY (`id`),
  ADD KEY `admin_id` (`admin_id`);

--
-- Indexes for table `ad_profile`
--
ALTER TABLE `ad_profile`
  ADD PRIMARY KEY (`id`),
  ADD KEY `admin_id` (`admin_id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `movie_id` (`movie_id`),
  ADD KEY `comment_id` (`comment_id`);

--
-- Indexes for table `genres`
--
ALTER TABLE `genres`
  ADD PRIMARY KEY (`id`),
  ADD KEY `movie_id` (`movie_id`);

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `movie_id` (`movie_id`);

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `admin_id` (`admin_id`);

--
-- Indexes for table `star_rating`
--
ALTER TABLE `star_rating`
  ADD PRIMARY KEY (`id`),
  ADD KEY `movie_id` (`movie_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `usr_pass`
--
ALTER TABLE `usr_pass`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UK_user_id` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ad_pass`
--
ALTER TABLE `ad_pass`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ad_profile`
--
ALTER TABLE `ad_profile`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `genres`
--
ALTER TABLE `genres`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT for table `star_rating`
--
ALTER TABLE `star_rating`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `usr_pass`
--
ALTER TABLE `usr_pass`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `ad_pass`
--
ALTER TABLE `ad_pass`
  ADD CONSTRAINT `ad_pass_ibfk_1` FOREIGN KEY (`admin_id`) REFERENCES `admins` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ad_profile`
--
ALTER TABLE `ad_profile`
  ADD CONSTRAINT `ad_profile_ibfk_1` FOREIGN KEY (`admin_id`) REFERENCES `admins` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `comments_ibfk_2` FOREIGN KEY (`movie_id`) REFERENCES `movies` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `comments_ibfk_3` FOREIGN KEY (`comment_id`) REFERENCES `comments` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `genres`
--
ALTER TABLE `genres`
  ADD CONSTRAINT `genres_ibfk_1` FOREIGN KEY (`movie_id`) REFERENCES `movies` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `history`
--
ALTER TABLE `history`
  ADD CONSTRAINT `history_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `history_ibfk_2` FOREIGN KEY (`movie_id`) REFERENCES `movies` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `movies`
--
ALTER TABLE `movies`
  ADD CONSTRAINT `movies_ibfk_1` FOREIGN KEY (`admin_id`) REFERENCES `admins` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `star_rating`
--
ALTER TABLE `star_rating`
  ADD CONSTRAINT `star_rating_ibfk_1` FOREIGN KEY (`movie_id`) REFERENCES `movies` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `usr_pass`
--
ALTER TABLE `usr_pass`
  ADD CONSTRAINT `usr_pass_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
