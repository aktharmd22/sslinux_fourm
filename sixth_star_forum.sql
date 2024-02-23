-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 15, 2024 at 08:32 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sixth_star_forum`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(6) UNSIGNED NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'akthar', '21232f297a57a5a743894a0e4a801fc3'),
(2, 'admin', '81dc9bdb52d04dc20036dbd8313ed055'),
(5, 'admin123', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `page_id` int(11) NOT NULL,
  `parent_id` int(11) NOT NULL DEFAULT -1,
  `name` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `submit_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `page_id`, `parent_id`, `name`, `content`, `submit_date`) VALUES
(1, 1, -1, 'John Doe', 'Thank you for taking the time to write this article, I really enjoyed reading it!\r\n\r\nThank you, David!', '2020-07-22 14:35:15'),
(2, 1, 11, 'David Adams', 'It\'s good to hear that you enjoyed this article.', '2020-07-22 14:36:19'),
(3, 1, -1, 'Michael', 'I appreciate the time and effort you spent writing this article, good job!', '2020-07-22 14:37:43'),
(4, 1, 3, 'akthar', 'well done bro', '2024-02-08 13:13:26'),
(5, 1, -1, 'Neelakandan', 'Heelo', '2024-02-12 13:02:48'),
(6, 1, 3, 'Mohamed Akthar', 'jhhgghg', '2024-02-12 14:59:42'),
(7, 1, -1, 'ggcg', 'ghg', '2024-02-13 11:22:05'),
(8, 1, -1, 'saravana', 'hello', '2024-02-13 11:22:29'),
(9, 1, -1, 'tile', 'i have a doubt', '2024-02-13 11:43:23'),
(10, 1, -1, 'vg', 'gt', '2024-02-13 11:52:43'),
(11, 1, -1, 'Mohamed Akthar', 'I have a doubt', '2024-02-13 12:23:44'),
(12, 1, -1, 'akthar221', 'jggdhhtds', '2024-02-13 13:07:42'),
(13, 1, 12, 'Admin ', 'what doubt', '2024-02-13 13:27:00'),
(14, 1, -1, 'saravana', 'Hello', '2024-02-13 13:27:29'),
(15, 1, 14, 'Admin', 'hi', '2024-02-13 15:42:37');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `postDate` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `description`, `postDate`) VALUES
(12, ' What is HTML?', ' HTML stands for HyperText Markup Language. It is the standard language used to create and design web pages. HTML provides a structure for content on the web, using tags to define elements such as headings, paragraphs, links, images, and more.', '2024-02-01'),
(13, ' what is css?', ' Css is to style webpages. ', '2024-02-07'),
(14, ' What is wordpress?', ' WordPress is a web content management system. It was originally created as a tool to publish blogs but has evolved to support publishing other web content, including more traditional websites, mailing lists and Internet forum, media galleries, membership sites, learning management systems and online stores.', '2024-02-13');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(40) NOT NULL,
  `Password` varchar(12) NOT NULL,
  `confirm_password` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` int(14) NOT NULL,
  `password` varchar(50) NOT NULL,
  `confirm_password` varchar(50) NOT NULL,
  `create_datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `phone`, `password`, `confirm_password`, `create_datetime`) VALUES
(1, 'admin', 'aktharmd221@gmail.com', 0, '81dc9bdb52d04dc20036dbd8313ed055', '', '2024-02-05 06:22:39'),
(2, 'admin', 'mohamedakthar100@gmail.com', 0, '81dc9bdb52d04dc20036dbd8313ed055', '', '2024-02-05 06:26:31'),
(3, 'akthar21', 'aktharmd221@gmail.com', 0, '912ec803b2ce49e4a541068d495ab570', '', '2024-02-05 06:27:34'),
(6, 'akthar21', 'aktharmd221@gmail.com', 0, '912ec803b2ce49e4a541068d495ab570', '912ec803b2ce49e4a541068d495ab570', '2024-02-05 09:01:39'),
(7, 'akthar21', 'aktharmd221@gmail.com', 0, 'e2fc714c4727ee9395f324cd2e7f331f', 'abcd', '2024-02-05 09:02:58'),
(8, 'admin', 'mohamedakthar100@gmail.com', 2147483647, '81dc9bdb52d04dc20036dbd8313ed055', '81dc9bdb52d04dc20036dbd8313ed055', '2024-02-05 10:19:17'),
(9, 'admin', 'mohamedakthar100@gmail.com', 2147483647, '81dc9bdb52d04dc20036dbd8313ed055', '81dc9bdb52d04dc20036dbd8313ed055', '2024-02-05 10:26:03'),
(10, 'admin', 'mohamedakthar100@gmail.com', 2147483647, '81dc9bdb52d04dc20036dbd8313ed055', '81dc9bdb52d04dc20036dbd8313ed055', '2024-02-05 10:28:11'),
(11, 'neelakandan', 'mohamedakthar100@gmail.com', 2147483647, '912ec803b2ce49e4a541068d495ab570', '912ec803b2ce49e4a541068d495ab570', '2024-02-05 10:44:05'),
(12, 'neelakandan', 'mohamedakthar100@gmail.com', 2147483647, '81dc9bdb52d04dc20036dbd8313ed055', '81dc9bdb52d04dc20036dbd8313ed055', '2024-02-05 10:44:20'),
(13, 'akthar21', 'mohamedakthar100@gmail.com', 2147483647, '81dc9bdb52d04dc20036dbd8313ed055', '81dc9bdb52d04dc20036dbd8313ed055', '2024-02-07 05:48:12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `constraint_name` (`username`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`(12));

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
