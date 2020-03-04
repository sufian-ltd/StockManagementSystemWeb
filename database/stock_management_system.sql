-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 24, 2020 at 07:01 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `stock_management_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_product` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `name`, `status`, `total_product`, `created_at`, `updated_at`) VALUES
(1, 'Samsung', 'Available', 0, '2019-06-10 03:06:58', '2019-06-10 03:52:38'),
(2, 'Microsoft', 'Available', 0, '2019-06-10 03:10:11', '2019-06-10 03:52:43'),
(3, 'Amazon', 'Not Available', 0, '2019-06-10 06:39:48', '2019-06-10 06:39:48'),
(4, 'Walton', 'Available', 0, '2019-06-11 04:24:08', '2019-06-11 04:24:08');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_product` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `brand` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `status`, `total_product`, `created_at`, `updated_at`, `brand`) VALUES
(3, 'Television', 'Available', 0, '2019-06-11 04:25:18', '2019-06-11 04:25:18', 'Walton'),
(5, 'Powder Milk', 'Available', 0, '2019-06-11 05:10:19', '2019-06-11 05:10:19', 'Marks'),
(6, 'Mobile', 'Available', 0, '2019-06-11 13:46:19', '2019-06-11 13:46:19', 'Samsung'),
(7, 'Liquid Milk', 'Available', 0, '2019-06-14 14:43:37', '2019-06-14 14:43:37', 'Marks'),
(8, 'Mobile', 'Available', 0, '2019-06-16 14:11:43', '2019-06-16 14:11:43', 'Xiomi'),
(9, 'Laptop', 'Available', 0, '2019-08-31 09:41:41', '2019-08-31 09:41:41', 'Apple');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `contact`, `address`, `created_at`, `updated_at`) VALUES
(1, 'Sadek Khan', '0215613210', 'Nasirabad housing society, road #3, House#10, Flat 201', '2019-06-14 14:11:27', '2019-06-14 14:11:27'),
(2, 'Fahim Uddin', '0215613210', 'Nasirabad housing society, road #3, House#10, Flat 201', '2019-06-16 13:42:17', '2019-06-16 13:42:17'),
(3, 'Rahim Uddin', '0215613210', 'Nasirabad housing society, road #3, House#10, Flat 201', '2019-06-16 13:43:35', '2019-06-16 13:43:35'),
(4, 'Raihan Uddin', '0215613210', 'chittagong,bangladesh', '2019-06-16 14:02:09', '2019-06-16 14:02:09'),
(5, 'Johir Khan', '0215613210', 'chittagong,bangladesh', '2019-11-26 11:00:31', '2019-11-26 11:00:31'),
(6, 'Johir Khan', '0215613210', 'chittagong,bangladesh', '2019-11-26 11:01:22', '2019-11-26 11:01:22'),
(7, 'Sunerah Rahman', '0215613210', 'chittagong,bangladesh', '2020-01-09 21:28:44', '2020-01-09 21:28:44');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2019_06_09_172554_create_users_table', 1),
(2, '2019_06_10_065410_create_brands_table', 2),
(3, '2019_06_10_065616_create_categories_table', 2),
(4, '2019_06_11_093859_add_brand_to_categories_table', 3),
(5, '2019_06_11_102914_create_products_table', 4),
(6, '2019_06_11_200659_create_suppliers_table', 5),
(7, '2019_06_12_080847_create_customers_table', 6),
(8, '2019_06_14_180503_create_orders_table', 7),
(9, '2019_06_14_203628_add_status_to_orders_table', 8),
(10, '2019_10_18_164419_add_isdelete_to_products_table', 9),
(11, '2019_12_16_173628_add_payment_to_orders_table', 10);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cus_id` int(11) NOT NULL,
  `pro_id` int(11) NOT NULL,
  `supplier_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `qtn` int(11) NOT NULL,
  `payment` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cost` int(11) NOT NULL,
  `date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `cus_id`, `pro_id`, `supplier_name`, `customer_name`, `product_name`, `qtn`, `payment`, `cost`, `date`, `created_at`, `updated_at`, `status`) VALUES
(1, 6, 1, 'Karim Uddin', 'Johir Khan', 'Samsung S10', 10, 'BKash', 600000, '2019-12-22', '2019-12-22 01:36:40', '2019-12-22 23:15:31', 'Order Pending'),
(2, 2, 1, 'Karim Uddin', 'Fahim Uddin', 'Samsung S10', 10, 'CASH ON DELIVERY', 600000, '2019-12-22', '2019-12-22 01:45:49', '2020-01-12 12:13:06', 'Order Pending'),
(3, 1, 1, 'Karim Uddin', 'Sadek Khan', 'Samsung S10', 10, 'CASH ON DELIVERY', 600000, '2019-12-22', '2019-12-22 01:50:57', '2020-01-12 12:14:14', 'Order Pending'),
(4, 2, 1, 'Karim Uddin', 'Fahim Uddin', 'Samsung S10', 10, 'CASH ON DELIVERY', 600000, '2019-12-22', '2019-12-22 01:52:47', '2019-12-22 01:53:36', 'Order Pending'),
(5, 1, 1, 'Karim Uddin', 'Sadek Khan', 'Samsung S10', 10, 'BKash', 600000, '2019-12-23', '2019-12-22 23:17:25', '2020-02-15 00:15:00', 'Order Delivered'),
(6, 1, 1, 'Karim Uddin', 'Sadek Khan', 'Samsung S10', 10, 'BKash', 600000, '2020-01-05', '2020-01-05 01:21:01', '2020-02-15 00:14:58', 'Order Delivered');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `isdelete` int(11) NOT NULL,
  `brand` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `unit` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `qtn` int(11) NOT NULL,
  `row` int(11) NOT NULL,
  `shelf` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `isdelete`, `brand`, `category`, `name`, `status`, `unit`, `price`, `qtn`, `row`, `shelf`, `created_at`, `updated_at`) VALUES
(1, 0, 'Samsung', 'Mobile', 'Samsung S10', 'Available', 'Unit(U)', 60000, -30, 45, 32, '2019-12-22 01:34:02', '2020-02-15 00:15:00'),
(2, 0, 'Nokia', 'Mobile', 'Nokia10', 'Available', 'Unit(U)', 50000, 150, 15, 20, '2019-12-22 01:42:19', '2019-12-22 01:42:19'),
(3, 1, 'Samsung', 'Mobile', 'Headphone', 'Available', 'Unit(U)', 2000, 10, 12, 45, '2019-12-31 13:49:09', '2020-02-15 00:15:33');

-- --------------------------------------------------------

--
-- Table structure for table `suppliers`
--

CREATE TABLE `suppliers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `salary` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `suppliers`
--

INSERT INTO `suppliers` (`id`, `name`, `email`, `password`, `contact`, `address`, `salary`, `created_at`, `updated_at`) VALUES
(1, 'Karim Uddin', 'karim@gmail.com', 'karim', '0215613210', 'chittagong,bangladesh', 25000, '2019-06-11 14:26:39', '2019-06-11 14:26:39'),
(2, 'regreg', 'karim@gmail.com', 'karim', '546', 'dfg', 5654, '2019-09-20 12:27:34', '2019-09-20 12:27:34'),
(3, 'Sunerah Rahman', 'rahman@gmail.com', 'rahman', '0215613210', 'Nasirabad housing society, road #3, House#10, Flat 201', 25000, '2019-11-26 11:04:17', '2019-11-26 11:04:17'),
(4, 'Fazal Uddin', 'fazal@gmail.com', 'fazal', '0215613210', 'Nasirabad housing society, road #3, House#10, Flat 201', 30000, '2019-11-26 11:04:57', '2019-11-26 11:04:57'),
(5, 'Milton Chy', 'milton@gmail.com', 'milton', '01452811211', 'Nasirabad housing society, road #3, House#10, Flat 201', 30000, '2019-11-26 11:06:04', '2019-11-26 11:06:04');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `userType` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `userType`, `created_at`, `updated_at`) VALUES
(1, 'admin@admin.com', 'admin', 'admin', '2019-09-20 12:27:34', '2019-09-20 12:27:34'),
(2, 'karim@gmail.com', 'karim', 'supplier', '2019-09-20 12:27:34', '2019-09-20 12:27:34'),
(3, 'karim@gmail.com', 'karim', 'supplier', '2019-09-20 12:27:34', '2019-09-20 12:27:34'),
(4, 'rahman@gmail.com', 'rahman', 'supplier', '2019-11-26 11:04:17', '2019-11-26 11:04:17'),
(5, 'fazal@gmail.com', 'fazal', 'supplier', '2019-11-26 11:04:58', '2019-11-26 11:04:58'),
(6, 'milton@gmail.com', 'milton', 'supplier', '2019-11-26 11:06:04', '2019-11-26 11:06:04'),
(7, 'superadmin@gmail.com', 'superadmin', 'superadmin', '2019-11-26 11:06:04', '2019-11-26 11:06:04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `suppliers`
--
ALTER TABLE `suppliers`
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
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `suppliers`
--
ALTER TABLE `suppliers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
