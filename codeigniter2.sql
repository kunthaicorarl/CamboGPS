-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 30, 2017 at 09:29 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `codeigniter2`
--

-- --------------------------------------------------------

--
-- Table structure for table `link_download`
--

CREATE TABLE `link_download` (
  `id` int(122) UNSIGNED NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `size` varchar(20) DEFAULT NULL,
  `type` varchar(10) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `desc` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `link_download`
--

INSERT INTO `link_download` (`id`, `user_id`, `title`, `url`, `size`, `type`, `date`, `country`, `desc`) VALUES
(22, '', 'Kondab Dai Vi Reak Neary - Part 01', 'https://drive.google.com/uc?export=download&confirm=it0m&id=0B-IDtll4CKi_WmJpTnFyUGpuM0k', '293', 'MB', '2017-09-06', 'China', ''),
(23, '1 ', 'Kondab Dai Vi Reak Neary - Part 02', 'https://drive.google.com/uc?export=download&confirm=lQiw&id=0B-IDtll4CKi_SjFBYzcyb1pWblk', '302', 'MB', '2017-09-06', 'China', ''),
(24, '1 ', 'Kondab Dai Vi Reak Neary - Part 03', 'https://drive.google.com/uc?export=download&confirm=jddV&id=0B-IDtll4CKi_OVFPaDRiUklkWEE', '301', 'MB', '2017-09-06', 'China', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `contact` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `role_id` int(11) NOT NULL,
  `zipcode` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `dob` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `register_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `username`, `contact`, `address`, `gender`, `image`, `role_id`, `zipcode`, `dob`, `status`, `register_date`) VALUES
(1, 'Administrator', '', '21232f297a57a5a743894a0e4a801fc3', 'yadu', '9898989898', 'Admin Nagar', 'Male', 'YADU_Logo.JPG', 1, '23232', '1990-08-03', 1, '2017-08-18 16:16:38'),
(4, 'Yadu nandan', 'ynandan55@yahoo.com', 'f925916e2754e5e03f75dd58a5733251', 'yadu123', '9898989898', 'durga nagar asas', 'Male', 'slide_05.jpg', 2, '23232', '1990-08-03', 1, '2017-08-09 18:49:15'),
(8, 'Astha Sharma', 'itech1694astha@gmail.com', 'f925916e2754e5e03f75dd58a5733251', 'astha123', '9898989898', 'Tikamgarh', 'Female', 'bd2_6f5_636_330-1-original.jpg', 2, '454545', '1990-08-03', 1, '2017-08-09 18:51:06'),
(9, 'Makara Chany', 'admin@admin.com', '21232f297a57a5a743894a0e4a801fc3', 'admin', '', '', '', '', 0, '855', '', 0, '2017-09-05 07:21:47');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `link_download`
--
ALTER TABLE `link_download`
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
-- AUTO_INCREMENT for table `link_download`
--
ALTER TABLE `link_download`
  MODIFY `id` int(122) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
