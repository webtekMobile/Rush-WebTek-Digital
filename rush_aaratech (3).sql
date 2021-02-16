-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 15, 2021 at 11:05 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rush_aaratech`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_add_product`
--

CREATE TABLE `tbl_add_product` (
  `product_id` int(10) NOT NULL,
  `vendor_id` int(10) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_description` varchar(400) NOT NULL,
  `cat_id` int(10) NOT NULL,
  `product_ons` varchar(100) NOT NULL,
  `product_price` varchar(100) NOT NULL,
  `file` varchar(200) NOT NULL,
  `product_status` int(10) NOT NULL DEFAULT 0,
  `created_at` timestamp(3) NOT NULL DEFAULT current_timestamp(3)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_add_product`
--

INSERT INTO `tbl_add_product` (`product_id`, `vendor_id`, `product_name`, `product_description`, `cat_id`, `product_ons`, `product_price`, `file`, `product_status`, `created_at`) VALUES
(24, 3, 'barkery', 'good', 1, '2', '24', 'download.png', 1, '2021-02-15 09:10:46.650');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `admin_id` int(10) NOT NULL,
  `admin_email` varchar(200) NOT NULL,
  `admin_password` varchar(200) NOT NULL,
  `admin_status` int(12) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`admin_id`, `admin_email`, `admin_password`, `admin_status`) VALUES
(1, 'kmpandey@gmail.com', 'pandey123', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `category_id` int(10) NOT NULL,
  `category_name` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`category_id`, `category_name`) VALUES
(1, 'French'),
(2, 'Italian'),
(3, 'American'),
(4, ' Salad');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_discount`
--

CREATE TABLE `tbl_discount` (
  `id` int(12) NOT NULL,
  `product_id` int(12) NOT NULL,
  `vendor_id` int(10) NOT NULL,
  `product_name` varchar(111) NOT NULL,
  `product_discount` varchar(111) NOT NULL,
  `product_general_price` int(60) NOT NULL,
  `product_discount_price` int(40) NOT NULL,
  `start_date` varchar(200) NOT NULL,
  `end_date` varchar(222) NOT NULL,
  `discount_status` int(10) NOT NULL DEFAULT 0,
  `created_at` timestamp(5) NOT NULL DEFAULT current_timestamp(5)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_discount`
--

INSERT INTO `tbl_discount` (`id`, `product_id`, `vendor_id`, `product_name`, `product_discount`, `product_general_price`, `product_discount_price`, `start_date`, `end_date`, `discount_status`, `created_at`) VALUES
(16, 24, 3, 'holi', '50', 56, 28, '2021-02-24', '2021-02-27', 1, '2021-02-15 10:03:03.88341');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_driver`
--

CREATE TABLE `tbl_driver` (
  `driver_id` int(10) NOT NULL,
  `driver_name` varchar(222) NOT NULL,
  `driver_mobile` varchar(200) NOT NULL,
  `driver_email` varchar(222) NOT NULL,
  `driver_password` varchar(222) NOT NULL,
  `driver_address` varchar(500) NOT NULL,
  `driver_lat` varchar(222) NOT NULL,
  `driver_lng` varchar(222) NOT NULL,
  `driver_city` varchar(222) NOT NULL,
  `driver_zipcode` int(100) NOT NULL,
  `driver_status` int(10) NOT NULL DEFAULT 0,
  `created_at` timestamp(5) NOT NULL DEFAULT current_timestamp(5)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_driver`
--

INSERT INTO `tbl_driver` (`driver_id`, `driver_name`, `driver_mobile`, `driver_email`, `driver_password`, `driver_address`, `driver_lat`, `driver_lng`, `driver_city`, `driver_zipcode`, `driver_status`, `created_at`) VALUES
(1, 'pandey123', '7233958662', 'pandey123@gmail.com', 'pandey12345', 'lucknow', '26.299878602221025', '79.5500871359375', 'vikas nagar', 222222, 1, '2021-02-10 04:53:13.01654');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_notification`
--

CREATE TABLE `tbl_notification` (
  `notification_id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `notification_message` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `notification_status` int(12) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_notification`
--

INSERT INTO `tbl_notification` (`notification_id`, `role_id`, `notification_message`, `created_at`, `notification_status`) VALUES
(9, 1, 'hello', '2021-02-10 13:09:42', 1),
(10, 2, 'hello', '2021-02-10 13:09:42', 1),
(11, 3, 'hello', '2021-02-10 13:09:42', 1),
(13, 1, 'rkrkmrkr', '2021-02-10 13:15:08', 1),
(14, 2, 'rkrkmrkr', '2021-02-10 13:15:08', 1),
(15, 3, 'rkrkmrkr', '2021-02-10 13:15:08', 1),
(16, 1, 'kkkk', '2021-02-12 14:02:47', 0),
(17, 1, 'hiyhvihyigvertr', '2021-02-12 14:04:28', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_orderbooking`
--

CREATE TABLE `tbl_orderbooking` (
  `order_id` int(10) NOT NULL,
  `user_id` int(12) NOT NULL,
  `booking_id` varchar(100) NOT NULL,
  `vendor_id` int(10) NOT NULL,
  `product_id` int(12) NOT NULL,
  `user_name` varchar(122) NOT NULL,
  `product_price` varchar(70) NOT NULL,
  `user_mobile` varchar(200) NOT NULL,
  `order_status` varchar(100) NOT NULL DEFAULT 'pending',
  `created_at` timestamp(6) NOT NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_orderbooking`
--

INSERT INTO `tbl_orderbooking` (`order_id`, `user_id`, `booking_id`, `vendor_id`, `product_id`, `user_name`, `product_price`, `user_mobile`, `order_status`, `created_at`) VALUES
(1, 1, '1222@1133', 3, 3, 'pandey', '150', '7233958662', 'done', '0000-00-00 00:00:00.000000'),
(2, 1, '1222@11', 3, 4, 'pandey2', '150', '7233958662', 'done', '0000-00-00 00:00:00.000000'),
(3, 1, '12@11', 3, 5, 'pandey4', '150', '7233958662', 'done', '0000-00-00 00:00:00.000000');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_review`
--

CREATE TABLE `tbl_review` (
  `id` int(12) NOT NULL,
  `user_id` int(12) DEFAULT NULL,
  `vendor_id` int(10) DEFAULT NULL,
  `product_id` int(12) DEFAULT NULL,
  `rating` int(25) NOT NULL,
  `comment` varchar(555) DEFAULT NULL,
  `time1` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` varchar(60) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_review`
--

INSERT INTO `tbl_review` (`id`, `user_id`, `vendor_id`, `product_id`, `rating`, `comment`, `time1`, `status`) VALUES
(1, 1, 3, 2, 4, 'The place is so clean, we loved the food and felt like its fresh, itʼs an amazing\r\nexperience not to be missed\r\n', '2021-02-04 12:12:35', '1'),
(2, 2, 3, 2, 4, 'The place is so clean, we loved the food and felt like its fresh, itʼs an amazing\r\nexperience not to be missed\r\n', '2021-02-04 12:12:35', '1'),
(3, 3, 3, 2, 2, 'The place is so clean, we loved the food and felt like its fresh, itʼs an amazing\r\nexperience not to be missed\r\n', '2021-02-04 12:12:35', '1'),
(4, 3, 5, 3, 2, 'The place is so clean, we loved the food and felt like its fresh, itʼs an amazing\r\nexperience not to be missed\r\n', '2021-02-04 12:12:35', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_role`
--

CREATE TABLE `tbl_role` (
  `role_id` int(11) NOT NULL,
  `role` varchar(15) DEFAULT NULL,
  `status` enum('active','disable','deleted') NOT NULL,
  `created_by` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_role`
--

INSERT INTO `tbl_role` (`role_id`, `role`, `status`, `created_by`, `created_at`) VALUES
(1, 'user', 'active', 0, '2021-02-10 13:01:49'),
(2, 'vendor', 'active', 0, '2021-02-10 13:01:54'),
(3, 'driver', 'active', 0, '2021-02-10 13:01:57');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_shop`
--

CREATE TABLE `tbl_shop` (
  `shop_id` int(11) NOT NULL,
  `vendor_id` int(11) DEFAULT NULL,
  `shop_name` varchar(255) DEFAULT NULL,
  `cat_id` int(20) NOT NULL,
  `shop_address` varchar(255) DEFAULT NULL,
  `shop_latitude` varchar(255) DEFAULT NULL,
  `shop_longitude` varchar(255) DEFAULT NULL,
  `city` varchar(200) NOT NULL,
  `zipcode` int(100) NOT NULL,
  `shop_url` varchar(255) DEFAULT NULL,
  `shop_banner` varchar(255) DEFAULT NULL,
  `shop_description` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_shop`
--

INSERT INTO `tbl_shop` (`shop_id`, `vendor_id`, `shop_name`, `cat_id`, `shop_address`, `shop_latitude`, `shop_longitude`, `city`, `zipcode`, `shop_url`, `shop_banner`, `shop_description`, `status`, `created_at`) VALUES
(17, 3, 'BAKERY SHOP', 2, 'Unnamed Road, Uttar Pradesh 209115, India', '26.211111111111', '80.5500871359375', '', 0, 'http/pandey', '15.jpg', ' VERY GOOD SERVICES PROVIDE                            \r\n                               ', 1, '2021-02-09 08:06:18'),
(18, 5, 'fbhtg rhgtgfnj', 2, 'Unnamed Road, Uttar Pradesh 209115, India', '26.299878602221025', '79.5500871359375', '', 0, 'http/pandey', '15.jpg', '                             qewfewf', 1, '2021-02-09 08:06:18');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_shop_time`
--

CREATE TABLE `tbl_shop_time` (
  `time_id` int(11) NOT NULL,
  `vendor_id` int(11) NOT NULL,
  `monday_opening` varchar(255) DEFAULT NULL,
  `tuesday_opening` varchar(255) DEFAULT NULL,
  `wednesday_opening` varchar(255) DEFAULT NULL,
  `thursday_opening` varchar(255) DEFAULT NULL,
  `friday_opening` varchar(255) DEFAULT NULL,
  `saturday_opening` varchar(255) DEFAULT NULL,
  `sunday_opening` varchar(255) DEFAULT NULL,
  `monday_closing` varchar(255) DEFAULT NULL,
  `tuesday_closing` varchar(255) DEFAULT NULL,
  `wednesday_closing` varchar(255) DEFAULT NULL,
  `thursday_closing` varchar(255) DEFAULT NULL,
  `friday_closing` varchar(255) DEFAULT NULL,
  `saturday_closing` varchar(255) DEFAULT NULL,
  `sunday_closing` varchar(255) DEFAULT NULL,
  `status_time` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_shop_time`
--

INSERT INTO `tbl_shop_time` (`time_id`, `vendor_id`, `monday_opening`, `tuesday_opening`, `wednesday_opening`, `thursday_opening`, `friday_opening`, `saturday_opening`, `sunday_opening`, `monday_closing`, `tuesday_closing`, `wednesday_closing`, `thursday_closing`, `friday_closing`, `saturday_closing`, `sunday_closing`, `status_time`, `created_at`) VALUES
(5, 5, '16:58', '17:58', '19:58', '19:58', '17:58', '20:59', '18:59', '16:58', '14:03', '16:58', '14:00', '14:00', '20:59', '14:04', 0, '2021-02-02 09:29:16'),
(6, 3, '15:35', '13:38', '14:35', '14:35', '17:36', '15:36', '16:36', '13:37', '14:35', '13:36', '13:36', '17:36', '13:39', '13:39', 0, '2021-02-09 08:06:18');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_shop_to_product`
--

CREATE TABLE `tbl_shop_to_product` (
  `shop_prod_id` int(11) NOT NULL,
  `shop_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT 1,
  `created_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `user_id` int(12) NOT NULL,
  `user_name` varchar(122) NOT NULL,
  `user_email` varchar(122) NOT NULL,
  `user_password` varchar(122) NOT NULL,
  `mobile` varchar(200) NOT NULL,
  `status` int(10) NOT NULL DEFAULT 0,
  `created_at` timestamp(6) NOT NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`user_id`, `user_name`, `user_email`, `user_password`, `mobile`, `status`, `created_at`) VALUES
(1, 'kmpandey', 'kmpandey72355@gmail.com', 'pandey12345', '9648202125', 1, '2021-02-13 06:06:59.665250'),
(2, 'kmp', 'kmpandey75@gmail.com', 'pandey12345', '7233958662', 1, '2021-02-13 06:06:59.665250'),
(3, 'kmpff', 'kmpanfffdey75@gmail.com', 'pandey12345', '7233958662', 1, '2021-02-13 06:06:59.665250');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_vendor`
--

CREATE TABLE `tbl_vendor` (
  `vendor_id` int(11) NOT NULL,
  `vendor_fname` varchar(255) DEFAULT NULL,
  `vendor_lname` varchar(255) DEFAULT NULL,
  `vendor_mobile` varchar(255) DEFAULT NULL,
  `vendor_email` varchar(255) NOT NULL,
  `vendor_password` varchar(255) NOT NULL,
  `address` varchar(200) NOT NULL,
  `status_vendor` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_vendor`
--

INSERT INTO `tbl_vendor` (`vendor_id`, `vendor_fname`, `vendor_lname`, `vendor_mobile`, `vendor_email`, `vendor_password`, `address`, `status_vendor`, `created_at`) VALUES
(3, 'krishan  Mohan', 'Pandey', '7233958662', 'kmvendor@gmail.com', 'pandey', 'qswwwwwwwwwwwwww', 1, '2021-02-15 06:02:42'),
(5, 'krishna pandey', 'pandey', '9621417893', 'pandey@gmail.com', '123', 'yyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyy', 1, '2021-02-09 09:50:05'),
(6, 'sqs', 'qsqd', '7233958662', 'dqdq@gmail.com', '123', '', 0, '2021-02-13 06:43:31'),
(7, 'dwdcw', 'wdwd', '72958662', 'a@gmail.com', '123', '', 0, '2021-02-15 07:24:59');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_vendor_auth`
--

CREATE TABLE `tbl_vendor_auth` (
  `vendor_auth_id` int(11) NOT NULL,
  `vendor_id` int(11) NOT NULL,
  `otp` int(11) NOT NULL,
  `session_key` text NOT NULL,
  `vendor_token` text DEFAULT NULL,
  `vendor_email_verified` int(11) NOT NULL,
  `vendor_login_at` datetime NOT NULL,
  `vendor_logout_at` datetime DEFAULT NULL,
  `vendor_route` varchar(255) DEFAULT NULL,
  `vendor_description` text DEFAULT NULL,
  `vendor_auth_status` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_add_product`
--
ALTER TABLE `tbl_add_product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `tbl_discount`
--
ALTER TABLE `tbl_discount`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_driver`
--
ALTER TABLE `tbl_driver`
  ADD PRIMARY KEY (`driver_id`);

--
-- Indexes for table `tbl_notification`
--
ALTER TABLE `tbl_notification`
  ADD PRIMARY KEY (`notification_id`);

--
-- Indexes for table `tbl_orderbooking`
--
ALTER TABLE `tbl_orderbooking`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `tbl_review`
--
ALTER TABLE `tbl_review`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_role`
--
ALTER TABLE `tbl_role`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `tbl_shop`
--
ALTER TABLE `tbl_shop`
  ADD PRIMARY KEY (`shop_id`);

--
-- Indexes for table `tbl_shop_time`
--
ALTER TABLE `tbl_shop_time`
  ADD PRIMARY KEY (`time_id`);

--
-- Indexes for table `tbl_shop_to_product`
--
ALTER TABLE `tbl_shop_to_product`
  ADD PRIMARY KEY (`shop_prod_id`),
  ADD KEY `shop_id` (`shop_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `tbl_vendor`
--
ALTER TABLE `tbl_vendor`
  ADD PRIMARY KEY (`vendor_id`);

--
-- Indexes for table `tbl_vendor_auth`
--
ALTER TABLE `tbl_vendor_auth`
  ADD PRIMARY KEY (`vendor_auth_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_add_product`
--
ALTER TABLE `tbl_add_product`
  MODIFY `product_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `admin_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `category_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_discount`
--
ALTER TABLE `tbl_discount`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tbl_driver`
--
ALTER TABLE `tbl_driver`
  MODIFY `driver_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_notification`
--
ALTER TABLE `tbl_notification`
  MODIFY `notification_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tbl_orderbooking`
--
ALTER TABLE `tbl_orderbooking`
  MODIFY `order_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_review`
--
ALTER TABLE `tbl_review`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_role`
--
ALTER TABLE `tbl_role`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tbl_shop`
--
ALTER TABLE `tbl_shop`
  MODIFY `shop_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tbl_shop_time`
--
ALTER TABLE `tbl_shop_time`
  MODIFY `time_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_shop_to_product`
--
ALTER TABLE `tbl_shop_to_product`
  MODIFY `shop_prod_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `user_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_vendor`
--
ALTER TABLE `tbl_vendor`
  MODIFY `vendor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_vendor_auth`
--
ALTER TABLE `tbl_vendor_auth`
  MODIFY `vendor_auth_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
