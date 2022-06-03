-- phpMyAdmin SQL Dump
-- version 5.3.0-dev+20220525.c1e393abce
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 27, 2022 at 01:52 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `BD`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin-tb`
--

CREATE TABLE `admin-tb` (
  `user-name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin-tb`
--

INSERT INTO `admin-tb` (`user-name`, `email`, `password`, `name`) VALUES
('admin', 'admin@gmial.com', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `category-tb`
--

CREATE TABLE `category-tb` (
  `category-id` int(255) UNSIGNED NOT NULL,
  `category-name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category-tb`
--

INSERT INTO `category-tb` (`category-id`, `category-name`) VALUES
(1, 'Fish'),
(2, 'Shrimp'),
(3, 'Crab');

-- --------------------------------------------------------

--
-- Table structure for table `fresh-bestsells`
--

CREATE TABLE `fresh-bestsells` (
  `fbs-id` int(255) UNSIGNED NOT NULL,
  `fbs-name` varchar(100) NOT NULL,
  `fbs-description` text NOT NULL,
  `fbs-image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `menu-tb`
--

CREATE TABLE `menu-tb` (
  `item-id` int(10) UNSIGNED NOT NULL,
  `item-name` varchar(100) NOT NULL,
  `item-quantity` int(10) NOT NULL,
  `item-description` text NOT NULL,
  `item-price` decimal(10,2) NOT NULL,
  `category-id` int(10) UNSIGNED NOT NULL,
  `item-image` varchar(255) NOT NULL,
  `item-status` varchar(20) NOT NULL,
  `active` varchar(10) NOT NULL,
  `best-sells` varchar(10) NOT NULL,
  `category-name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `menu-tb`
--

INSERT INTO `menu-tb` (`item-id`, `item-name`, `item-quantity`, `item-description`, `item-price`, `category-id`, `item-image`, `item-status`, `active`, `best-sells`, `category-name`) VALUES
(20, 'Fried Fish', 10, 'High Quality With Special Ingredients', '50.00', 1, 'Item_name_4846.jpg', 'cooked', 'yes', 'yes', 'Fish'),
(21, 'Shrimp', 10, 'High Quality With Delicious Taste', '80.00', 2, 'Item_name_309.jpg', 'cooked', 'yes', 'yes', 'Shrimp'),
(22, 'Salamon', 10, 'Prepared With The Highest Quality', '60.00', 1, 'Item_name_4227.jpg', 'fresh', 'yes', 'yes', 'Fish'),
(23, 'Crab', 1, 'Fresh Just Arrived Today', '30.00', 3, 'Item_name_7553.jpg', 'fresh', 'yes', 'yes', 'Crab');

-- --------------------------------------------------------

--
-- Table structure for table `orders-tb`
--

CREATE TABLE `orders-tb` (
  `order-id` int(11) UNSIGNED NOT NULL,
  `order-name` varchar(50) NOT NULL,
  `order-time` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `order-discription` varchar(100) NOT NULL,
  `order-price` float(10,2) NOT NULL,
  `user-id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders-tb`
--

INSERT INTO `orders-tb` (`order-id`, `order-name`, `order-time`, `order-discription`, `order-price`, `user-id`) VALUES
(1, 'Fried Fish', '0000-00-00 00:00:00', 'High Quality With Special Ingredients', 50.00, 0),
(2, 'Salamon', '2022-05-27 00:24:57', 'Prepared With The Highest Quality', 60.00, 0);

-- --------------------------------------------------------

--
-- Table structure for table `users-tb`
--

CREATE TABLE `users-tb` (
  `user-id` int(20) UNSIGNED NOT NULL,
  `user-firstname` varchar(30) NOT NULL,
  `user-lastname` varchar(30) NOT NULL,
  `user-email` varchar(50) NOT NULL,
  `user-address` varchar(100) NOT NULL,
  `user-region` varchar(50) NOT NULL,
  `user-phone` int(11) NOT NULL,
  `user-password` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users-tb`
--

INSERT INTO `users-tb` (`user-id`, `user-firstname`, `user-lastname`, `user-email`, `user-address`, `user-region`, `user-phone`, `user-password`) VALUES
(0, 'Ahmed', 'Hemida', 'Ahmed@gmail.com', 'alex', 'AlAgamy', 1212121, 'ahmed'),
(1, 'User', 'one', 'user@gmail.com', 'egy,alex', 'smouha', 1111111111, 'user');

-- --------------------------------------------------------

--
-- Table structure for table `workers-tb`
--

CREATE TABLE `workers-tb` (
  `worker-id` int(255) UNSIGNED NOT NULL,
  `worker-name` varchar(100) NOT NULL,
  `worker-NID` int(16) UNSIGNED NOT NULL,
  `worker-email` varchar(150) NOT NULL,
  `worker-phone` int(11) UNSIGNED NOT NULL,
  `Hired-date` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `worker-role` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `workers-tb`
--

INSERT INTO `workers-tb` (`worker-id`, `worker-name`, `worker-NID`, `worker-email`, `worker-phone`, `Hired-date`, `worker-role`) VALUES
(21, 'Laurel Lucas', 35, 'ximeh@mailinator.com', 78, '2022-05-19 19:34:49', 'Delivery Worker'),
(24, 'Winifred ', 80, 'gujymofe@mailinator.com', 92, '2022-05-20 11:46:03', 'Cooking Worker'),
(41, 'Yuli Morrow', 94, 'haha@mailinator.com', 42, '2022-05-20 23:40:35', 'Delivery Worker'),
(42, 'Fatima Nguyen', 24, 'zogyq@mailinator.com', 12, '2022-05-21 12:03:11', 'Cooking Worker'),
(44, 'Linda Terry', 22, 'qasujalyde@mailinator.com', 1000, '2022-05-23 15:28:59', 'Sell Worker'),
(45, 'Maite Farmer', 15, 'firapymag@mailinator.com', 610, '2022-05-23 14:48:08', 'Cooking Worker'),
(46, 'Henderson', 1000, 'datefode@mailinator.com', 1020005001, '2022-05-23 16:53:58', 'Sell Worker'),
(48, 'Rebekah Giles', 66, 'wyve@mailinator.com', 70, '2022-05-22 11:37:42', 'Delivery Worker'),
(51, '', 0, '', 0, '2022-05-23 16:41:26', ''),
(52, 'ziad', 3001161622, 'ziad@gmail.com', 121321321, '2022-05-24 22:49:46', 'Sell Worker');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin-tb`
--
ALTER TABLE `admin-tb`
  ADD UNIQUE KEY `user-name` (`user-name`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `category-tb`
--
ALTER TABLE `category-tb`
  ADD UNIQUE KEY `category-id` (`category-id`);

--
-- Indexes for table `fresh-bestsells`
--
ALTER TABLE `fresh-bestsells`
  ADD PRIMARY KEY (`fbs-id`);

--
-- Indexes for table `menu-tb`
--
ALTER TABLE `menu-tb`
  ADD PRIMARY KEY (`item-id`);

--
-- Indexes for table `orders-tb`
--
ALTER TABLE `orders-tb`
  ADD PRIMARY KEY (`order-id`);

--
-- Indexes for table `users-tb`
--
ALTER TABLE `users-tb`
  ADD PRIMARY KEY (`user-id`),
  ADD UNIQUE KEY `user-email` (`user-email`);

--
-- Indexes for table `workers-tb`
--
ALTER TABLE `workers-tb`
  ADD PRIMARY KEY (`worker-id`),
  ADD UNIQUE KEY `worker-NID` (`worker-NID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category-tb`
--
ALTER TABLE `category-tb`
  MODIFY `category-id` int(255) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2001;

--
-- AUTO_INCREMENT for table `menu-tb`
--
ALTER TABLE `menu-tb`
  MODIFY `item-id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `orders-tb`
--
ALTER TABLE `orders-tb`
  MODIFY `order-id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users-tb`
--
ALTER TABLE `users-tb`
  MODIFY `user-id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `workers-tb`
--
ALTER TABLE `workers-tb`
  MODIFY `worker-id` int(255) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;



