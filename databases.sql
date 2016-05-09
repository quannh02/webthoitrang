-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 09, 2016 at 09:36 AM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `databases`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `c_id` int(255) NOT NULL,
  `c_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE IF NOT EXISTS `comment` (
  `com_id` int(255) NOT NULL,
  `pro_id` int(255) NOT NULL,
  `user_id` int(255) NOT NULL,
  `com_detail` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `com_ create` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `detailoder`
--

CREATE TABLE IF NOT EXISTS `detailoder` (
  `det_id` int(255) NOT NULL,
  `ord_id` int(255) NOT NULL,
  `pro_id` int(255) NOT NULL,
  `det_number` int(255) NOT NULL,
  `det_price` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `new_id` int(255) NOT NULL,
  `new_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `new_images` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `new_detail` longtext COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `ord_id` int(255) NOT NULL,
  `user_id` int(255) NOT NULL,
  `ord_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ord_phone` int(100) NOT NULL,
  `ord_address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ord_timeoder` datetime NOT NULL,
  `ord_condition` int(1) NOT NULL,
  `ord_enddate` datetime NOT NULL,
  `ord_total` int(255) NOT NULL,
  `ord_note` longtext COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `pro_id` int(255) NOT NULL,
  `c_id` int(255) NOT NULL,
  `p_id` int(255) NOT NULL,
  `pro_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pro_images` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pro_price` int(255) NOT NULL,
  `pro_number` int(255) NOT NULL,
  `pro_color` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pro_size` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`pro_id`, `c_id`, `p_id`, `pro_name`, `pro_images`, `pro_price`, `pro_number`, `pro_color`, `pro_size`) VALUES
(1, 1, 1, 'quangk', 'jgjskljk', 423827, 7878193, 'vang', 'S');

-- --------------------------------------------------------

--
-- Table structure for table `promotion`
--

CREATE TABLE IF NOT EXISTS `promotion` (
  `p_id` int(255) NOT NULL,
  `p_start` datetime NOT NULL,
  `p_end` datetime NOT NULL,
  `p_promotion` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(255) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fullname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `active` int(255) NOT NULL,
  `role` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `fullname`, `email`, `active`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(3, 'Bùi Nguyên Ba', '$2y$10$UYLs4FHleKfp/tLIyxfmJepexVjkHNqrUQsH8Ssj61yjmaqWKfDv6', '', 'buinguyenba@gmail.com', 1, 'superadmin', 'apdfWLccDvuctIG9NWEix83oNSqeXNEuVHOfhwzM', '2016-05-08 15:45:30', '2016-05-08 08:41:56'),
(4, 'Lại Thị Nhạn', '$2y$10$K.l0pR8huKN5s9.vxbEGM.AQY4oQD4UEb4b6jzGYyo1yi9ALDXMnS', '', 'laithinhan@gmail.com', 1, 'admin', 'apdfWLccDvuctIG9NWEix83oNSqeXNEuVHOfhwzM', '2016-05-08 15:45:33', '2016-05-08 08:44:20'),
(5, 'Phạm Văn Đức', '$2y$10$X9ugUNu2pF5QMj7bMIqgXOHYLgv911Ik/ODEMc.euUEUetJxMPgwu', '', 'phamvanduc@gmail.com', 1, 'member', 'NYtRp6pKpexQtjkfhE8tpJ1nParbv9Wd5c4f6R7vO5nT3TvE4eLbMQN6a6hz', '2016-05-09 07:26:58', '2016-05-09 00:26:58'),
(6, 'Nguyên X', '$2y$10$zC6DJI5KGfTb8ETKRp6rGup.jbK4PQ12q1oXpu0veH5WALHjGU/ri', '', 'nguyenx@gmail.com', 1, '', 'RtxstQLxhi6xAOhYAtGGaFsEAyhWm3WvUK1ybAoK', '2016-05-08 17:27:20', '2016-05-08 09:20:41'),
(7, 'Pham Chuan', '$2y$10$FiDfe1McB7JK1FYf3sfipOkJL48zF2TFJ3cBPL5wzWxfZ9ziqad52', '', 'phamchuan@gmail.com', 0, '', '9ZrRuZwOs5zUv5MchvmdqooGBvIHBqgS1YNbEnIw', '2016-05-08 21:03:46', '2016-05-08 21:03:46');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`com_id`);

--
-- Indexes for table `detailoder`
--
ALTER TABLE `detailoder`
  ADD PRIMARY KEY (`det_id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`new_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`ord_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`pro_id`);

--
-- Indexes for table `promotion`
--
ALTER TABLE `promotion`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
