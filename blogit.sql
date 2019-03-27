-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 27, 2019 at 10:28 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blogit`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `title` varchar(225) NOT NULL,
  `image` varchar(225) NOT NULL,
  `paragraphe` text NOT NULL,
  `datepost` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `title`, `image`, `paragraphe`, `datepost`) VALUES
(1, 'Lorem Ipsum Sit ', 'img/men.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse erat est, pellentesque ac varius eu, rhoncus id diam. In sollicitudin, nisi quis facilisis semper, risus ipsum volutpat augue, aliquet molestie nibh ligula eget ex. Integer vel ex felis. Proin blandit, turpis quis semper euismod, elit augue aliquam enim, sit amet pharetra nibh eros nec tortor. Donec eget nisi leo. Integer sed vestibulum nisl. Donec et ultricies tellus. Pellentesque suscipit vulputate mi, sed blandit risus fringilla ac. Ut mollis nisi justo, quis ultrices risus convallis ornare. Curabitur nec tortor vulputate, dapibus massa non, pellentesque lacus. Maecenas lorem dolor, ultricies eget nunc eget, porta cursus sapien.<br><br>\r\n\r\nCras eget quam rutrum, sodales arcu eget, ornare nulla. Proin rhoncus dictum consequat. Nunc tempor, augue sed posuere iaculis, neque sem dignissim ipsum, ac tristique orci est at risus. In aliquet tellus elit, et placerat mi pretium in. Morbi gravida purus ac cursus viverra. Maecenas at venenatis tellus. Aliquam hendrerit felis eget ligula pharetra, id pretium metus dapibus.<br><br>\r\n\r\nSuspendisse bibendum pretium feugiat. Proin sed diam rhoncus, dapibus ligula tristique, tincidunt odio. Etiam lectus lorem, semper eget felis facilisis, lacinia molestie ligula. Nullam vestibulum ante ut fringilla commodo. Etiam pellentesque tristique ante, molestie venenatis ipsum interdum non. Aliquam urna ex, sollicitudin vitae maximus eget, tristique tempus orci. Nunc sed dolor sit amet nulla consequat faucibus. Donec tincidunt convallis risus eu aliquam. Vivamus neque neque, mollis quis dictum non, fringilla ac augue. Fusce quis erat bibendum, ullamcorper leo sit amet, mollis arcu. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Sed lobortis est ac venenatis dignissim. Nam lobortis sed dui in sodales.', '2019-02-07 12:28:00'),
(2, 'Lorem Ipsum Sit Amet', 'img/women.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '2019-02-07 12:31:00'),
(4, 'Lorem ipsum sit amet', 'img/men.jpg', 'orem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '2019-02-11 12:57:44'),
(8, 'Lorem Ipsum', '', 'Suspendisse bibendum pretium feugiat. Proin sed diam rhoncus, dapibus ligula tristique, tincidunt odio. Etiam lectus lorem, semper eget felis facilisis, lacinia molestie ligula. Nullam vestibulum ante ut fringilla commodo. Etiam pellentesque tristique ante, molestie venenatis ipsum interdum non. Aliquam urna ex, sollicitudin vitae maximus eget, tristique tempus orci. Nunc sed dolor sit amet nulla consequat faucibus. Donec tincidunt convallis risus eu aliquam. Vivamus neque neque, mollis quis dictum non, fringilla ac augue. Fusce quis erat bibendum, ullamcorper leo sit amet, mollis arcu. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Sed lobortis est ac venenatis dignissim. Nam lobortis sed dui in sodales.', '2019-02-19 09:01:22');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `email` varchar(225) NOT NULL,
  `name` varchar(225) NOT NULL,
  `message` text NOT NULL,
  `dateofsend` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `email`, `name`, `message`, `dateofsend`) VALUES
(1, 'Marouane Tais', 'marouane.tais@gmail.com', 'jgfjhfyryurfh', '0000-00-00 00:00:00'),
(2, 'Marouane Tais', 'marouane.tais@gmail.com', 'gjhj,g,', '2019-02-08 09:33:23'),
(3, 'sgdjfksg', 'jedfkj', 'jhdf;href', '2019-02-08 09:41:36'),
(4, 'efskug', 'kjdsgvkjs', 'hv;djvhe', '2019-02-08 09:42:16'),
(5, 'zekgfjk', 'kjsgdkjvgc', 'jgvj,gv', '2019-02-08 09:44:08'),
(6, 'kuzejfh', 'kjdhfkh', 'kfzejf', '2019-02-08 09:44:39'),
(7, 'gsedkjsgd', 'jsgfkjsgq', 'kjgzsqkjcg', '2019-02-08 09:46:17'),
(8, 'eugfjkcgs', 'lhkzsjhvfckh', 'khshckzehv', '2019-02-08 09:46:32'),
(9, '', '', '', '2019-02-08 09:47:22'),
(10, 'jhg,jf', 'v;v,vn;v', 'kjgg', '2019-02-08 14:44:35'),
(11, '', '', '', '2019-02-11 10:26:24'),
(12, 'hgakjhg', 'kljglkgj', 'klhgzkjhg', '2019-02-11 10:59:51'),
(13, '', '', '', '2019-02-18 21:18:10');

-- --------------------------------------------------------

--
-- Table structure for table `log_in`
--

CREATE TABLE `log_in` (
  `id` int(11) NOT NULL,
  `user` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `log_in`
--

INSERT INTO `log_in` (`id`, `user`, `password`) VALUES
(1, 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `log_in`
--
ALTER TABLE `log_in`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `log_in`
--
ALTER TABLE `log_in`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
