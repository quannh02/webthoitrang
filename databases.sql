-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2016 at 01:56 PM
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
  `c_id` int(11) NOT NULL,
  `c_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`c_id`, `c_name`) VALUES
(1, 'Áo sơ mi nam'),
(2, 'Áo thun nam'),
(3, 'Áo khoác nam'),
(4, 'Quần jean nam'),
(5, 'Quần thể thao nam');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE IF NOT EXISTS `comment` (
  `com_id` int(11) NOT NULL,
  `pro_id` int(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `com_detail` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `com_ create` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `detailoder`
--

CREATE TABLE IF NOT EXISTS `detailoder` (
  `det_id` int(11) NOT NULL,
  `ord_id` int(11) NOT NULL,
  `pro_id` int(11) NOT NULL,
  `det_number` int(11) NOT NULL,
  `det_price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `new_id` int(11) NOT NULL,
  `new_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `new_images` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `new_detail` longtext COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `ord_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `ord_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ord_phone` int(100) NOT NULL,
  `ord_address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ord_timeoder` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `ord_condition` int(1) NOT NULL,
  `ord_enddate` datetime NOT NULL,
  `ord_total` int(11) NOT NULL,
  `ord_note` longtext COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `pro_id` int(11) NOT NULL,
  `c_id` int(11) NOT NULL,
  `p_id` int(11) NOT NULL,
  `pro_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pro_images` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pro_code` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `pro_price` int(30) NOT NULL,
  `pro_color` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pro_sizeM` int(11) NOT NULL,
  `pro_sizeL` int(11) NOT NULL,
  `pro_sizeS` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`pro_id`, `c_id`, `p_id`, `pro_name`, `pro_images`, `pro_code`, `pro_price`, `pro_color`, `pro_sizeM`, `pro_sizeL`, `pro_sizeS`, `created_at`, `updated_at`) VALUES
(2, 1, 0, 'Áo sơ mi nam tay dài thời trang', 'somi2.jpg', 'SM2', 185000, 'xanh lam', 1, 1, 2, '2016-05-11 08:40:25', '0000-00-00 00:00:00'),
(3, 1, 0, 'Áo sơ mi tay ngắn họa tiết cá tính', 'somi3.jpg', 'SM3', 189000, 'đen', 1, 0, 1, '2016-05-11 08:39:53', '0000-00-00 00:00:00'),
(4, 1, 0, 'Áo sơ mi nam tay ngắn sọc nhỏ thời trang', 'somi4.jpg', 'SM4', 189000, 'Xanh nhạt', 0, 1, 1, '2016-05-11 08:39:53', '0000-00-00 00:00:00'),
(5, 1, 0, 'Áo sơ mi tay ngắn họa tiết cá tính', 'somi5.jpg', 'SM5', 189000, 'xám', 0, 3, 1, '2016-05-11 08:45:03', '2016-05-24 17:00:00'),
(6, 1, 0, 'Áo sơ mi nam tay dài phá cách', 'somi6.jpg', 'SM6', 205000, 'đen', 1, 0, 0, '2016-05-11 08:45:22', '2016-05-01 17:00:00'),
(7, 1, 0, 'Áo sơ mi nam tay dài in hình thời trang', 'somi7.jpg', 'SM7', 205000, ' trắng đen', 1, 1, 1, '2016-05-11 10:28:38', '2016-05-25 17:00:00'),
(8, 1, 0, 'Áo sơ mi nam cổ bo tay dài phong cách', 'somi8.jpg', 'SM8', 250000, 'trắng', 1, 0, 0, '2016-05-11 08:49:02', '2016-05-26 17:00:00'),
(9, 1, 0, 'Áo dài in sọc cổ phong cách', 'somi9.jpg', 'SM9', 215000, 'đen', 1, 0, 0, '2016-05-11 10:35:46', '0000-00-00 00:00:00'),
(10, 1, 0, 'Áo sơ mi nam tay dài phối màu cá tính', 'somi10.jpg', 'SM10', 215000, 'sọc trắng đen', 0, 0, 2, '2016-05-11 10:35:54', '0000-00-00 00:00:00'),
(11, 1, 0, 'Áo sơ mi nam tay dài phối nút cách điệu', 'somi11.jpg', 'SM11', 199000, 'đen', 0, 1, 2, '2016-05-11 10:35:31', '0000-00-00 00:00:00'),
(13, 2, 0, 'Áo thun nam Raglan', 'thun1.jpg', 'TH1', 65000, 'đen', 1, 2, 1, '2016-05-11 10:51:28', '0000-00-00 00:00:00'),
(14, 2, 0, 'Áo thun nam phối sọc cá tính', 'thun2.jpg', 'TH2', 105000, 'sọc trắng', 0, 1, 1, '2016-05-11 10:51:28', '0000-00-00 00:00:00'),
(15, 2, 0, 'Áo thun nam tay dài phối sọc cá tính', 'thun3.jpg', 'TH3', 119000, 'sọc đen', 1, 1, 1, '2016-05-11 10:51:28', '0000-00-00 00:00:00'),
(16, 2, 0, 'Áo thun nam bẻ tay phối sọc cá tính', 'thun4.jpg', 'TH4', 125000, 'trắng', 1, 2, 1, '2016-05-11 10:51:28', '0000-00-00 00:00:00'),
(17, 2, 0, 'Áo thun nam phối màu HBO thời trang', 'thun5.jpg', 'TH5', 125000, 'sọc trắng đen', 0, 0, 1, '2016-05-11 10:51:28', '0000-00-00 00:00:00'),
(18, 2, 0, 'Áo thun nam cổ tròn in hình cá thời trang', 'thun6.jpg', 'TH6', 115000, 'đen', 1, 0, 1, '2016-05-11 10:51:28', '0000-00-00 00:00:00'),
(19, 2, 0, 'Áo thun cổ trụ tay ngắn phối', 'thun7.jpg', 'TH7', 99000, 'xám', 1, 1, 1, '2016-05-11 10:51:28', '0000-00-00 00:00:00'),
(20, 2, 0, 'Áo thun nam cổ tim ', 'thun8.jpg', 'TH8', 135000, 'xám', 1, 1, 0, '2016-05-11 10:51:28', '0000-00-00 00:00:00'),
(21, 2, 0, 'Áo thun nam cổ tròn họa tiết lạ mắt', 'thun9.jpg', 'TH9', 115000, 'tím', 1, 1, 1, '2016-05-11 10:51:28', '0000-00-00 00:00:00'),
(22, 2, 0, 'Áo cổ trụ thêu logo trước ngực thời trang', 'thun10.jpg', 'TH10', 155000, 'xanh dương', 1, 1, 1, '2016-05-11 10:51:28', '0000-00-00 00:00:00'),
(23, 3, 0, 'Áo khoác nam tay xỏ ngón', 'khoac1.jpg', 'K1', 160000, 'xám đen', 1, 1, 2, '2016-05-11 11:14:08', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `promotion`
--

CREATE TABLE IF NOT EXISTS `promotion` (
  `p_id` int(11) NOT NULL,
  `p_start` datetime NOT NULL,
  `p_end` datetime NOT NULL,
  `p_promotion` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fullname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `active` int(11) NOT NULL,
  `role` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `fullname`, `email`, `active`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(3, 'Bùi Nguyên Ba', '$2y$10$UYLs4FHleKfp/tLIyxfmJepexVjkHNqrUQsH8Ssj61yjmaqWKfDv6', '', 'buinguyenba@gmail.com', 1, 'admin', 'Gd7LTg4slbgovZAxPxBFKcz33j95yVm1cIFpxz0Ir02fG7VtdXuOSV4tFYon', '2016-05-11 04:38:07', '2016-05-10 21:38:07'),
(4, 'Lại Thị Nhạn', '$2y$10$K.l0pR8huKN5s9.vxbEGM.AQY4oQD4UEb4b6jzGYyo1yi9ALDXMnS', '', 'laithinhan@gmail.com', 1, 'nhanvien', '3VkyoCEk5ZWKPOiIwVevJp4NZaO8z4FwKvavpOoiT0NnLYyEeKS15JkLAGif', '2016-05-11 04:39:05', '2016-05-10 21:39:05'),
(5, 'Phạm Văn Đức', '$2y$10$X9ugUNu2pF5QMj7bMIqgXOHYLgv911Ik/ODEMc.euUEUetJxMPgwu', '', 'phamvanduc@gmail.com', 1, 'nhanvien', 'NYtRp6pKpexQtjkfhE8tpJ1nParbv9Wd5c4f6R7vO5nT3TvE4eLbMQN6a6hz', '2016-05-11 04:37:13', '2016-05-09 00:26:58'),
(6, 'Nguyên X', '$2y$10$zC6DJI5KGfTb8ETKRp6rGup.jbK4PQ12q1oXpu0veH5WALHjGU/ri', '', 'nguyenx@gmail.com', 1, 'member', 'RtxstQLxhi6xAOhYAtGGaFsEAyhWm3WvUK1ybAoK', '2016-05-11 04:21:42', '2016-05-08 09:20:41'),
(7, 'Pham Chuan', '$2y$10$FiDfe1McB7JK1FYf3sfipOkJL48zF2TFJ3cBPL5wzWxfZ9ziqad52', '', 'phamchuan@gmail.com', 1, 'member', '9ZrRuZwOs5zUv5MchvmdqooGBvIHBqgS1YNbEnIw', '2016-05-11 04:22:16', '2016-05-08 21:03:46');

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
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `com_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `detailoder`
--
ALTER TABLE `detailoder`
  MODIFY `det_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `ord_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `pro_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `promotion`
--
ALTER TABLE `promotion`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
