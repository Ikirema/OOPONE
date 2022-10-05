-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 05, 2022 at 03:41 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce_website`
--

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `name` varchar(25) NOT NULL,
  `code` varchar(25) NOT NULL,
  `location` text NOT NULL,
  `address` text NOT NULL,
  `price` double NOT NULL,
  `payment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`name`, `code`, `location`, `address`, `price`, `payment`) VALUES
('ian', 'football', 'football', 'football', 1000, 'MPESA'),
('', '', '', '', 0, 'VISA');

-- --------------------------------------------------------

--
-- Table structure for table `tblproduct`
--

CREATE TABLE `tblproduct` (
  `id` int(8) NOT NULL,
  `name` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `price` double(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblproduct`
--

INSERT INTO `tblproduct` (`id`, `name`, `code`, `image`, `price`) VALUES
(1, 'Watch', 'e34r', 'product-images/watch.jpg', 1000.00),
(2, 'Tops', 'Tops', 'product-images/product1.jpg', 800.00),
(3, 'football', 'football', 'product-images/football.jpg', 1000.00);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(25) NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`admin_id`, `admin_name`, `email`, `password`) VALUES
(1, 'ian', 'iankirema@gmail.com', 'ian');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_categories`
--

CREATE TABLE `tbl_categories` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(25) NOT NULL,
  `is_deleted` enum('0','1') NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_categories`
--

INSERT INTO `tbl_categories` (`category_id`, `category_name`, `is_deleted`) VALUES
(1, 'Men', '0'),
(2, 'Women', '0'),
(3, 'Children', '0');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_products`
--

CREATE TABLE `tbl_products` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(25) NOT NULL,
  `product_description` text NOT NULL,
  `product_image` varchar(40) NOT NULL,
  `unit_price` double NOT NULL,
  `available_quantity` int(11) NOT NULL,
  `subcategory_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp(),
  `role_id` int(11) NOT NULL,
  `is_deleted` enum('0','1') NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_products`
--

INSERT INTO `tbl_products` (`product_id`, `product_name`, `product_description`, `product_image`, `unit_price`, `available_quantity`, `subcategory_id`, `category_id`, `created_at`, `updated_at`, `role_id`, `is_deleted`) VALUES
(10, 'Gucci', 'Design', 'uploads/menu4.jpg', 2000, 30, 8, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 2, '0'),
(11, 'Nike', 'cool', 'uploads/menu.jpg', 2000, 30, 2, 1, '2022-07-12 00:00:00', '2022-07-12 00:00:00', 3, '0'),
(12, 'football', 'football', 'uploads/football.jpg', 1000, 30, 3, 1, '2022-07-13 11:59:53', '2022-07-13 11:59:53', 3, '0');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_roles`
--

CREATE TABLE `tbl_roles` (
  `role_id` int(11) NOT NULL,
  `rolename` varchar(15) NOT NULL,
  `is_deleted` enum('0','1') NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_roles`
--

INSERT INTO `tbl_roles` (`role_id`, `rolename`, `is_deleted`) VALUES
(1, 'Seller', '0'),
(2, 'Delivery Guy', '0'),
(3, 'Admin', '0'),
(4, 'Buyer', '0');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_subcategories`
--

CREATE TABLE `tbl_subcategories` (
  `subcategory_id` int(11) NOT NULL,
  `subcategory_name` varchar(25) NOT NULL,
  `category_id` int(11) NOT NULL,
  `price` double NOT NULL,
  `is_deleted` enum('0','1') NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_subcategories`
--

INSERT INTO `tbl_subcategories` (`subcategory_id`, `subcategory_name`, `category_id`, `price`, `is_deleted`) VALUES
(2, 'Shirts', 1, 500, '0'),
(3, 'Trousers', 1, 800, '0'),
(4, 'Skirts', 2, 500, '0'),
(5, 'Dresses', 2, 1000, '0'),
(6, 'Blouses', 2, 300, '0'),
(7, 'Hoddies', 3, 600, '0'),
(8, 'Sweat Pants', 3, 700, '0'),
(9, 'Sweat Shirts', 3, 700, '0'),
(10, 'Hats', 3, 100, '0');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `user_id` int(11) NOT NULL,
  `firstname` varchar(25) NOT NULL,
  `lastname` varchar(25) NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` varchar(60) NOT NULL,
  `phonenumber` int(10) NOT NULL,
  `dateofbirth` date NOT NULL,
  `gender` enum('Male','Female') NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_deleted` enum('0','1') NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`user_id`, `firstname`, `lastname`, `email`, `password`, `phonenumber`, `dateofbirth`, `gender`, `role_id`, `is_deleted`) VALUES
(1, 'ian', 'kirema', 'iankirema@gmail.com', '1234', 723737728, '2022-06-25', 'Male', 4, '0'),
(2, 'ruweida', 'ismael', 'ruweida@gmail.com', '', 12345678, '2022-06-25', 'Female', 1, '0'),
(4, 'patience', 'kamanthe', 'patience@gmail.com', '123456', 1234567, '2022-07-06', 'Female', 4, '0'),
(5, 'alex', 'Kamau', 'alex@gmail.com', '', 12345678, '2022-07-06', 'Male', 4, '0'),
(6, 'victor', 'Mukabi', 'victor@gmail.com', '098765', 123345567, '2022-07-10', 'Male', 2, '0'),
(7, 'myles', 'johnson', 'mylesadebayo@gmail.com', '12345', 790518867, '2002-03-17', 'Male', 4, '0'),
(8, 'kevin', 'larrys', 'kevin@gmail.com', '', 723737728, '2022-07-13', 'Male', 4, '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblproduct`
--
ALTER TABLE `tblproduct`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `tbl_categories`
--
ALTER TABLE `tbl_categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `tbl_products`
--
ALTER TABLE `tbl_products`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `subcategory_id` (`subcategory_id`),
  ADD KEY `category_id` (`category_id`),
  ADD KEY `role_id` (`role_id`);

--
-- Indexes for table `tbl_roles`
--
ALTER TABLE `tbl_roles`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `tbl_subcategories`
--
ALTER TABLE `tbl_subcategories`
  ADD PRIMARY KEY (`subcategory_id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `role_id` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblproduct`
--
ALTER TABLE `tblproduct`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_categories`
--
ALTER TABLE `tbl_categories`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_products`
--
ALTER TABLE `tbl_products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbl_roles`
--
ALTER TABLE `tbl_roles`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_subcategories`
--
ALTER TABLE `tbl_subcategories`
  MODIFY `subcategory_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_products`
--
ALTER TABLE `tbl_products`
  ADD CONSTRAINT `tbl_products_ibfk_1` FOREIGN KEY (`subcategory_id`) REFERENCES `tbl_subcategories` (`subcategory_id`),
  ADD CONSTRAINT `tbl_products_ibfk_2` FOREIGN KEY (`category_id`) REFERENCES `tbl_categories` (`category_id`),
  ADD CONSTRAINT `tbl_products_ibfk_3` FOREIGN KEY (`role_id`) REFERENCES `tbl_roles` (`role_id`);

--
-- Constraints for table `tbl_subcategories`
--
ALTER TABLE `tbl_subcategories`
  ADD CONSTRAINT `tbl_subcategories_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `tbl_categories` (`category_id`);

--
-- Constraints for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD CONSTRAINT `tbl_users_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `tbl_roles` (`role_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
