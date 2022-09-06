-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 06, 2022 at 07:02 PM
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
-- Database: `cargo`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` enum('Block','Unblock') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Unblock'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `cust_id` bigint(20) UNSIGNED NOT NULL,
  `cadv_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zipcode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `totalrent` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `caradvs`
--

CREATE TABLE `caradvs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `cust_id` bigint(20) UNSIGNED NOT NULL,
  `ctype_id` bigint(20) UNSIGNED NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rent` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cartypes`
--

CREATE TABLE `cartypes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ctype_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cartypes`
--

INSERT INTO `cartypes` (`id`, `ctype_name`, `created_at`, `updated_at`) VALUES
(2, 'standard', '2022-07-19 08:14:14', '2022-07-19 08:14:14');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `phone`, `description`, `created_at`, `updated_at`) VALUES
(2, 'Mohini Sureshbhai Maurya', 'mohinimaurya622001@gmail.com', '9974224366', 'Nice car', '2022-07-19 06:48:15', '2022-07-19 06:48:15');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'null',
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobileno` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` enum('Block','Unblock') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Unblock'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `img`, `username`, `name`, `password`, `email`, `mobileno`, `city`, `created_at`, `updated_at`, `status`) VALUES
(2, 'null', 'Mohini123', NULL, '$2y$10$/QcE9GKUNXpprXQI02Y.We.8/wLDYcXD.H7oeD9mghVQkEaSSwCkK', 'mohinimaurya622001@gmail.com', NULL, NULL, '2022-08-30 22:09:26', '2022-08-30 22:09:26', 'Unblock'),
(3, 'null', 'shruti', NULL, '$2y$10$FGolTLNTeTWlynlDKgirK.JJWy18owI5XyxfsOleA1wKOTXgKEaHi', 'shruti@gmail.com', NULL, NULL, '2022-08-30 22:12:36', '2022-08-30 22:12:36', 'Unblock'),
(4, 'null', 'customer', NULL, '$2y$10$t1GsCCpZVrZAQe0oHyrDpurYN2arIq9Msnvu55OVOj46G1KvsZg56', 'customer@gmail.com', NULL, NULL, '2022-08-30 22:13:41', '2022-08-30 22:13:41', 'Unblock'),
(5, 'null', 'admin', NULL, '$2y$10$FFgoqOeQpgPHxUR4Yx3BIOny3xqMv6ZN2CcHKf2bExcuXH/yMqpk.', 'admin@gmail.com', NULL, NULL, '2022-08-30 22:29:53', '2022-08-30 22:29:53', 'Unblock'),
(6, 'null', 'xyz', NULL, '$2y$10$wmsIN.ngaJsQp8P4EOmtsOAXkTkiqWEtnYjKv/ZEmOphZX4nT8qTe', 'xyz@gmail.com', NULL, NULL, '2022-08-30 22:31:24', '2022-08-30 22:31:24', 'Unblock'),
(7, 'null', 'abc', NULL, '$2y$10$uSQPjLpHaY1sd4lTehU.c.e1/JPwmPWhVUlHtG6KcyRBrdtggoukG', 'abc@gmail.com', NULL, NULL, '2022-08-30 22:33:16', '2022-08-30 22:33:16', 'Unblock'),
(8, 'null', 'abcd', NULL, '$2y$10$/NOXnKl0o8pSqa/IviUmKuCqohRS93bcp4KXf4cmZbzFrnKFEjz7K', 'abcd@gmail.com', NULL, NULL, '2022-08-30 22:34:12', '2022-08-30 22:34:12', 'Unblock');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(2, '2022_06_22_052613_create_admins_table', 1),
(3, '2022_06_22_052700_add_columns_to_admins_table', 1),
(4, '2022_06_22_054301_create_customers_table', 1),
(5, '2022_06_22_054423_add_columns_to_customers_table', 1),
(6, '2022_06_22_060500_create_cartypes_table', 1),
(7, '2022_06_22_060553_add_columns_to_cartypes_table', 1),
(10, '2022_06_22_061246_create_contacts_table', 2),
(11, '2022_06_22_061314_add_columns_to_contacts_table', 2),
(12, '2022_06_22_054626_create_caradvs_table', 3),
(13, '2022_06_22_054657_add_columns_to_caradvs_table', 3),
(14, '2022_06_22_061835_create_bookings_table', 4),
(15, '2022_06_22_061914_add_columns_to_bookings_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bookings_cust_id_foreign` (`cust_id`),
  ADD KEY `bookings_cadv_id_foreign` (`cadv_id`);

--
-- Indexes for table `caradvs`
--
ALTER TABLE `caradvs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `caradvs_cust_id_foreign` (`cust_id`),
  ADD KEY `caradvs_ctype_id_foreign` (`ctype_id`);

--
-- Indexes for table `cartypes`
--
ALTER TABLE `cartypes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `caradvs`
--
ALTER TABLE `caradvs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cartypes`
--
ALTER TABLE `cartypes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bookings`
--
ALTER TABLE `bookings`
  ADD CONSTRAINT `bookings_cadv_id_foreign` FOREIGN KEY (`cadv_id`) REFERENCES `caradvs` (`id`),
  ADD CONSTRAINT `bookings_cust_id_foreign` FOREIGN KEY (`cust_id`) REFERENCES `customers` (`id`);

--
-- Constraints for table `caradvs`
--
ALTER TABLE `caradvs`
  ADD CONSTRAINT `caradvs_ctype_id_foreign` FOREIGN KEY (`ctype_id`) REFERENCES `cartypes` (`id`),
  ADD CONSTRAINT `caradvs_cust_id_foreign` FOREIGN KEY (`cust_id`) REFERENCES `customers` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
