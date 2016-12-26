-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 26, 2016 at 09:39 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lostnfound`
--
CREATE DATABASE IF NOT EXISTS `lostnfound` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `lostnfound`;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text,
  `product_code` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `color` varchar(50) NOT NULL,
  `weight` varchar(50) NOT NULL,
  `destinaiton` varchar(50) NOT NULL,
  `product_picture` varchar(255) DEFAULT NULL,
  `catagory` varchar(50) NOT NULL,
  `travel_date` datetime NOT NULL,
  `others` varchar(100) NOT NULL,
  `photo_path` blob NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `title`, `description`, `product_code`, `user_id`, `color`, `weight`, `destinaiton`, `product_picture`, `catagory`, `travel_date`, `others`, `photo_path`, `status`) VALUES
(2, 'jjj', 'samptu', '1X65YX97', 2, 'green', '1.5', 'dhaka', 'photo/57c83ce03bd76', 'luggage', '2016-09-01 20:36:16', 'none', '', 1),
(3, 'eijrelrj', 'lkejrlkerj', 'X169324Y', 5, 'red', '10', 'dhak', 'photo/5860d6d444ccb', 'luggage', '2016-12-26 14:37:40', 'nothing', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `profiles`
--

CREATE TABLE `profiles` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `mobile_number` varchar(15) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(255) NOT NULL,
  `zip_code` varchar(16) NOT NULL,
  `city` varchar(255) NOT NULL,
  `district` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created` datetime NOT NULL,
  `created_by` int(11) NOT NULL,
  `modified` datetime NOT NULL,
  `modified_by` int(11) NOT NULL,
  `deleted_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `profile_picture` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `profiles`
--

INSERT INTO `profiles` (`id`, `user_id`, `first_name`, `last_name`, `mobile_number`, `gender`, `email`, `address`, `zip_code`, `city`, `district`, `status`, `created`, `created_by`, `modified`, `modified_by`, `deleted_at`, `profile_picture`) VALUES
(1, 1, 'ruhina', 'akther', '01765656505', '', 'aklimacse10@gmail.com', 'uttara dhaka', '1230', 'uttara ', 'Chittagong', 1, '2016-09-01 20:04:43', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 'photo/57c8357bcff1d'),
(2, 2, 'joiti', 'akther', '01765656505', '', 'aryan43@mail.com', 'uttara dhaka', '1230', 'uttara', 'Barisal', 1, '2016-09-01 20:24:32', 0, '0000-00-00 00:00:00', 0, '2016-09-01 14:51:04', 'photo/57c83a207c058');

-- --------------------------------------------------------

--
-- Table structure for table `un_user`
--

CREATE TABLE `un_user` (
  `id` int(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile_number` varchar(15) NOT NULL,
  `message` varchar(250) NOT NULL,
  `user_id` int(15) NOT NULL,
  `sent_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `un_user`
--

INSERT INTO `un_user` (`id`, `email`, `mobile_number`, `message`, `user_id`, `sent_at`) VALUES
(1, 'ak_limacse10@yahoo.com', '012366666565', 'Hi! I have found your product. Contact me ASAP.', 2, '2016-09-01 15:27:01');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(4) UNSIGNED NOT NULL,
  `username` varchar(63) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `is_admin` tinyint(1) NOT NULL,
  `created` datetime NOT NULL,
  `created_by` int(11) NOT NULL,
  `modified` datetime NOT NULL,
  `modified_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `is_admin`, `created`, `created_by`, `modified`, `modified_by`) VALUES
(6, 'bijayuu23', 'rabiul_34@yahoo.com', 'e10adc3949ba59abbe56e057f20f883e', 1, '2016-12-26 14:31:57', 0, '0000-00-00 00:00:00', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `un_user`
--
ALTER TABLE `un_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `profiles`
--
ALTER TABLE `profiles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `un_user`
--
ALTER TABLE `un_user`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(4) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
