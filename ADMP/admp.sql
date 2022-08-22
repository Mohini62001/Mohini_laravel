-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 22, 2022 at 06:20 PM
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
-- Database: `admp`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `img`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', '$2y$10$nNJItlaUF084ywUf5lyYLusc.9CPgIJa7ubFYbufE/3ER53mRokOG', '1660111265_img.jpg', NULL, '2022-08-20 00:04:22');

-- --------------------------------------------------------

--
-- Table structure for table `areas`
--

CREATE TABLE `areas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `city_id` bigint(20) UNSIGNED NOT NULL,
  `area_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `areas`
--

INSERT INTO `areas` (`id`, `created_at`, `updated_at`, `city_id`, `area_name`) VALUES
(1, NULL, NULL, 1, 'Maninagar'),
(2, NULL, NULL, 1, 'CTM'),
(3, '2022-08-17 02:13:03', '2022-08-17 02:13:03', 13, 'beach');

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `sid` bigint(20) UNSIGNED NOT NULL,
  `city_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`id`, `created_at`, `updated_at`, `sid`, `city_name`) VALUES
(1, NULL, NULL, 1, 'Ahmedabad'),
(2, NULL, NULL, 1, 'Surat'),
(3, NULL, NULL, 1, 'Vadodara'),
(4, NULL, NULL, 1, 'Rajkot'),
(5, NULL, NULL, 1, 'Bhavnagar'),
(6, NULL, NULL, 1, 'Jamnagar'),
(7, NULL, NULL, 1, 'Gandhinagar'),
(8, NULL, NULL, 1, 'Junagadh'),
(9, NULL, NULL, 1, 'Anand'),
(10, NULL, NULL, 1, 'Navsari'),
(11, '2022-08-05 05:57:37', '2022-08-05 05:57:37', 1, 'Morbi'),
(13, '2022-08-17 02:10:38', '2022-08-17 02:10:38', 2, 'panji');

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `company_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cprofile_img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `visiting_card` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('Available','Not Available') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Available',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`id`, `company_name`, `first_name`, `last_name`, `email`, `password`, `cprofile_img`, `visiting_card`, `status`, `created_at`, `updated_at`) VALUES
(2, 'kinjal enterprise company', 'kinjal', 'patel', 'kinjal@gmail.com', '$2y$10$fH0PthLmEqmUYyqYMoMDWOuh5.5lJrj1PRaraDDKw8TB52hyDJvKa', '1659361491_profile_img.jpg', '1659361491_visiting_card.jpg', 'Available', '2022-08-01 08:14:51', '2022-08-17 06:23:22'),
(3, 'riya enterprise', 'reena', 'valekar', 'riya@gmail.com', '$2y$10$fH0PthLmEqmUYyqYMoMDWOuh5.5lJrj1PRaraDDKw8TB52hyDJvKa', '1659419351_profile_img.jpg', '1661180275_visiting_card.jpg', 'Available', '2022-08-02 00:19:11', '2022-08-22 09:27:55'),
(4, 'RiyaEnterprise', 'Reena', 'valekar', 'vishv@gmail.com', '$2y$10$fH0PthLmEqmUYyqYMoMDWOuh5.5lJrj1PRaraDDKw8TB52hyDJvKa', '1659512562_profile_img.jpg', '1659512562_visiting_card.jpg', 'Available', '2022-08-03 02:12:42', '2022-08-03 02:12:42'),
(5, 'Ayushi medicare', 'Ayushi', 'maurya', 'ayushimaurya@gmail.com', '$2y$10$fH0PthLmEqmUYyqYMoMDWOuh5.5lJrj1PRaraDDKw8TB52hyDJvKa', '1659674474_profile_img.png', '1659674474_visiting_card.png', 'Available', '2022-08-04 23:11:14', '2022-08-04 23:11:14'),
(7, 'Generic Medicines', 'Mohini', 'Maurya', 'mohinimaurya@gmail.com', '$2y$10$KFRH/o3mRd/c32ClK4LvOuIiHF6rdlsTlKy86eVGPnMwhU3Zw8Xky', '1660982968_cprofile_img.jpg', '1660982968_visiting_card.jpg', 'Available', '2022-08-20 02:06:52', '2022-08-20 02:40:36'),
(8, 'Sindhiya Ltd. Company', 'Yash', 'Sindhiya', 'yash@gmail.com', '$2y$10$fH0PthLmEqmUYyqYMoMDWOuh5.5lJrj1PRaraDDKw8TB52hyDJvKa', '1661088180_cprofile_img.jpg', '1661088180_visiting_card.png', 'Available', '2022-08-21 07:53:00', '2022-08-21 07:53:00');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobileno` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `mobileno`, `comment`, `created_at`, `updated_at`) VALUES
(1, 'Bhavna Maurya', 'bhavna@gmail.com', '3245698710', 'hey hii', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `divisions`
--

CREATE TABLE `divisions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `company_id` bigint(20) UNSIGNED NOT NULL,
  `division_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `divisions`
--

INSERT INTO `divisions` (`id`, `created_at`, `updated_at`, `company_id`, `division_name`) VALUES
(3, '2022-08-20 09:29:12', '2022-08-20 09:29:12', 7, 'abcd'),
(4, '2022-08-21 07:53:50', '2022-08-21 07:53:50', 8, 'ABCD'),
(5, '2022-08-21 07:56:25', '2022-08-21 07:56:25', 2, 'efgh'),
(6, '2022-08-21 07:59:17', '2022-08-21 07:59:17', 4, 'EFGH'),
(7, '2022-08-21 08:00:06', '2022-08-21 08:00:06', 3, 'ijkl'),
(8, '2022-08-21 08:00:39', '2022-08-21 08:00:39', 5, 'IJKL'),
(9, '2022-08-22 00:38:36', '2022-08-22 00:38:36', 7, 'mnop');

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `specialist_id` bigint(20) UNSIGNED NOT NULL,
  `short_tittle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dob` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profile_img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `liacence_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `education` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `experience` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hospital_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hospital_img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dr_mobile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `office_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `visit_card` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `about` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` bigint(20) UNSIGNED NOT NULL,
  `city` bigint(20) UNSIGNED NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pincode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `google_map` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `day` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hospital_morning_to` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hospital_morning_from` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hospital_afternoon_to` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hospital_afternoon_from` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hospital_evening_to` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hospital_evening_from` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `consulting_fees` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `followup_fees` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notification` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `doctor_status` enum('Block','Unblock') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Unblock',
  `hospital_status` enum('Enable','Disable') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Disable',
  `area` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`id`, `gender`, `first_name`, `last_name`, `created_at`, `updated_at`, `specialist_id`, `short_tittle`, `email`, `password`, `dob`, `profile_img`, `liacence_no`, `education`, `experience`, `hospital_name`, `hospital_img`, `dr_mobile`, `office_no`, `visit_card`, `about`, `state`, `city`, `address`, `pincode`, `google_map`, `day`, `hospital_morning_to`, `hospital_morning_from`, `hospital_afternoon_to`, `hospital_afternoon_from`, `hospital_evening_to`, `hospital_evening_from`, `consulting_fees`, `followup_fees`, `notification`, `doctor_status`, `hospital_status`, `area`) VALUES
(7, 'Male', 'Darren', 'Elder', '2022-08-19 11:23:37', '2022-08-19 11:23:37', 1, 'BDS, MDS - Oral & Maxillofacial Surgery', 'darrenelder@gmail.com', '$2y$10$y8VPyxK0Ra078.JhlfI5ZOica8/UTgHgjLO8drtSV0lHgnKHYV91O', '1995-05-20', '1660928017_profile_img.jpg', '24563478', 'American Dental Medical University', '5 year', 'Comfort Care Dental Clinic', '16609280178564hospital_img.jpg,16609280173666hospital_img.jpg,16609280172467hospital_img.jpg', '1234567890', '1452536', '1660928017_visit_card_img.png', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 1, 1, 'Khokhra', '125478', 'https://web.whatsapp.com/', 'Friday,Saturday,Sunday', '08:00', '12:00', NULL, NULL, '18:00', '20:00', '1200', '1225', 'if any problem then contact me', 'Unblock', 'Disable', 1),
(8, 'Female', 'Ruby', 'Perrin', '2022-08-19 11:30:27', '2022-08-19 11:30:27', 2, 'Periodontology and Oral Implantology', 'rubyperrin@gmail.com', '$2y$10$MoEMtI/R3s08eUUzX7KTS.Aglyh93xa6LPQo9DQ8FoWFmSp6SWI9C', '1995-08-15', '1660928427_profile_img.jpg', '142536', 'BDS, MDS', '1Year', 'Comfort Care Heart Clinic', '16609284279804hospital_img.jpg,16609284276022hospital_img.jpg,16609284271686hospital_img.jpg', '1245369870', '142578', '1660928427_visit_card_img.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 2, 13, 'Goa', '123456', 'https://goo.gl/maps/hExW3S5yKWXBTrNN6', 'Monday,Tuesday,Wednesday', '08:00', '12:00', '16:00', '20:00', NULL, NULL, '1200', '1020', 'if any problem then contact me', 'Unblock', 'Disable', 3),
(9, 'Female', 'Deborah', 'Angel', '2022-08-19 11:41:17', '2022-08-19 11:41:17', 5, 'General Medicine, DNB - Cardiology', 'deborahangel@gmail.com', '$2y$10$m6FjzNUQR4js9Kl87U3N0.DDBWHnDqdxXgSUvzppxju4pBqgsdtD2', '1990-08-07', '1660929077_profile_img.jpg', '214578', 'MBBS, MD', '8 Year', 'appolo', '16609290773292hospital_img.jpg,16609290773421hospital_img.jpg,16609290776869hospital_img.jpg', '7896541230', '324516', '1660929077_visit_card_img.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 1, 1, 'CTM', '382449', 'https://goo.gl/maps/5dmkmgMZA4Le3i7T6', 'Wednesday,Thursday,Friday', '05:00', '08:00', '11:00', '14:00', '17:00', '20:00', '2500', '2000', 'if any problem then contact me', 'Unblock', 'Disable', 2),
(10, 'Male', 'Marvin', 'Campbell', '2022-08-20 00:24:14', '2022-08-20 00:24:14', 5, 'Ophthalmology, DNB - Ophthalmology', 'marvin@gmail.com', '$2y$10$e6t1EVVHxbGQv0hPPYEl9ukVQDvHgSRQL7niR/8hTQbWTcL.OSVvm', '1985-08-15', '1660974854_profile_img.jpg', '214536', 'MBBS, MD', '3 year', 'Zydus Hospital', '1660974854100000hospital_img.jpg,166097485499999hospital_img.jpg,1660974854100000hospital_img.jpg', '1236547890', '214578', '1660974854_visit_card_img.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 1, 2, 'S.G Highway', '321456', 'https://goo.gl/maps/5dmkmgMZA4Le3i7T6', 'Wednesday,Thursday,Friday', NULL, NULL, '13:00', '18:00', NULL, NULL, '1200', '1500', 'if any problem then contact me', 'Unblock', 'Disable', 1);

-- --------------------------------------------------------

--
-- Table structure for table `doc_fav_medicines`
--

CREATE TABLE `doc_fav_medicines` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `doctor_id` bigint(20) UNSIGNED NOT NULL,
  `medicine_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `drspecialities`
--

CREATE TABLE `drspecialities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `doctor_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hospital_daytimes`
--

CREATE TABLE `hospital_daytimes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `doctor_id` bigint(20) UNSIGNED NOT NULL,
  `day` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `morning_time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `evening_time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `managers`
--

CREATE TABLE `managers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `company_id` bigint(20) UNSIGNED NOT NULL,
  `division_id` bigint(20) UNSIGNED NOT NULL,
  `Manager_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mprofile_img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `visiting_card` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('Block','Unblock') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Unblock'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `managers`
--

INSERT INTO `managers` (`id`, `created_at`, `updated_at`, `company_id`, `division_id`, `Manager_name`, `first_name`, `last_name`, `email`, `password`, `mprofile_img`, `visiting_card`, `status`) VALUES
(3, '2022-08-21 02:13:15', '2022-08-22 03:05:05', 7, 3, 'minal', 'Paul', 'Richard', 'paul@gmail.com', '$2y$10$mutRCQmXbjrBDuyMivQEBurYtHepQJXNZ7O5QASVuN0h11epbQlui', '1661157305_mprofile_img.jpg', '1661157305_visiting_card.jpg', 'Unblock');

-- --------------------------------------------------------

--
-- Table structure for table `medicines`
--

CREATE TABLE `medicines` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `company_id` bigint(20) UNSIGNED DEFAULT NULL,
  `medicine_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `medicines`
--

INSERT INTO `medicines` (`id`, `created_by`, `created_at`, `updated_at`, `company_id`, `medicine_name`) VALUES
(1, '', NULL, NULL, 2, 'Paracetamol'),
(2, '', NULL, NULL, 3, 'Aspirin'),
(3, '', '2022-08-18 06:09:46', '2022-08-18 06:09:46', 4, 'Hydroxychloroquine'),
(6, '', '2022-08-18 06:10:26', NULL, 2, 'Covifor'),
(7, '', '2022-08-18 06:10:26', NULL, 5, 'Fabiflu'),
(9, NULL, '2022-08-20 09:29:20', '2022-08-20 09:29:20', 7, 'corona'),
(11, NULL, '2022-08-21 07:54:19', '2022-08-21 07:54:19', 8, 'Volini Gel'),
(12, NULL, '2022-08-22 00:38:55', '2022-08-22 00:38:55', 7, 'Disprin');

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
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(9, '2022_07_27_085653_create_specialists_table', 1),
(10, '2022_07_27_085721_add_column_to_specialists_table', 1),
(17, '2022_07_28_053546_create_admins_table', 5),
(18, '2022_07_28_053703_add_columns_to_admins_table', 5),
(20, '2022_07_27_085528_create_states_table', 6),
(21, '2022_07_27_085553_add_column_to_states_table', 6),
(23, '2022_08_01_071347_create_cities_table', 7),
(24, '2022_08_01_071416_add_columns_to_cities_table', 7),
(25, '2022_08_01_071553_create_areas_table', 8),
(26, '2022_08_01_071626_add_columns_to_areas_table', 8),
(28, '2022_08_01_071737_create_doctors_table', 9),
(29, '2022_08_01_071811_add_columns_to_doctors_table', 9),
(30, '2022_08_01_065830_create_companies_table', 10),
(31, '2022_08_01_070043_add_columns_to_companies_table', 10),
(32, '2022_08_01_072348_create_drspecialities_table', 11),
(33, '2022_08_01_072424_add_columns_to_drspecialities_table', 11),
(34, '2022_08_01_072609_create_hospital_daytimes_table', 12),
(35, '2022_08_01_072649_add_columns_to_hospital_daytimes_table', 12),
(36, '2022_08_01_073128_create_managers_table', 13),
(37, '2022_08_01_073158_add_columns_to_managers_table', 13),
(38, '2022_08_01_073614_create_mrs_table', 14),
(39, '2022_08_01_073632_add_columns_to_mrs_table', 14),
(40, '2022_08_01_073852_create_stockiests_table', 15),
(41, '2022_08_01_073921_add_columns_to_stockiests_table', 15),
(42, '2022_08_01_074211_create_products_table', 16),
(43, '2022_08_01_075049_create_products_table', 17),
(44, '2022_08_01_075106_add_columns_to_products_table', 17),
(45, '2022_08_08_054742_create_services_table', 18),
(46, '2022_08_08_054948_add_columns_to_services_table', 18),
(47, '2022_08_13_045609_create__patients_table', 19),
(48, '2022_08_13_045751_add_columns_to__patients', 19),
(49, '2022_08_13_050437_create_patients_table', 20),
(50, '2022_08_13_050547_add_columns_to_patients', 20),
(51, '2022_08_13_051816_create_patients_table', 21),
(52, '2022_08_13_051909_add_columns_to_patients', 21),
(53, '2022_08_13_071543_create_patient_fav_table', 22),
(54, '2022_08_13_073342_create_patient_favs_table', 23),
(55, '2022_08_13_073432_add_columns_to_patient_favs_table', 23),
(56, '2022_08_17_090708_create_patient_slots_table', 24),
(57, '2022_08_17_091048_add_columns_to_patient_slots_table', 24),
(58, '2022_08_17_104234_create_medicines_table', 25),
(59, '2022_08_17_104404_add-columns_to_medicines_table', 25),
(60, '2022_08_17_104729_create_doc_fav_medicines_table', 26),
(61, '2022_08_17_105516_create_doc_fav_medicines_table', 27),
(62, '2022_08_17_105548_add_columns_to_doc_fav_medicines_table', 27),
(63, '2022_08_18_064147_create_doc_fav_medicines_table', 28),
(64, '2022_08_18_064303_add_columns_to_doc_fav_medicines_table', 28),
(65, '2022_08_18_071525_create_doc_fav_medicines_table', 29),
(66, '2022_08_18_071551_add_columns_to_doc_fav_medicines_table', 29),
(67, '2022_08_20_141722_create_divisions_table', 30),
(68, '2022_08_20_141816_add_columns_to_divisions_table', 30),
(69, '2022_08_20_160109_create_managers_table', 31),
(70, '2022_08_20_160209_add_columns_to_managers_table', 31),
(71, '2022_08_20_160343_create_mrs_table', 32),
(72, '2022_08_20_160408_add-columns_to_mrs_table', 32),
(73, '2022_08_20_160605_create_stockiests_table', 33),
(74, '2022_08_20_160629_add_columns_to_stockiests_table', 33),
(75, '2022_08_22_065119_create_contacts_table', 34),
(76, '2022_08_22_065503_add_column_to_contacts_table', 34);

-- --------------------------------------------------------

--
-- Table structure for table `mrs`
--

CREATE TABLE `mrs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `company_id` bigint(20) UNSIGNED NOT NULL,
  `manager_id` bigint(20) UNSIGNED NOT NULL,
  `company_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mrprofile_img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `visiting_card` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('Block','Unblock') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Unblock'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mrs`
--

INSERT INTO `mrs` (`id`, `created_at`, `updated_at`, `company_id`, `manager_id`, `company_name`, `first_name`, `last_name`, `email`, `password`, `mrprofile_img`, `visiting_card`, `status`) VALUES
(1, '2022-08-21 07:47:38', '2022-08-22 05:32:15', 5, 3, 'Herbal Ltd. Companyy', 'Maann', 'Khuranaa', 'maan@gmail.comm', '$2y$10$59iAebj8tSkG/CNCwa7.YeY/bHdPYaHiGd30lXobauau7cI4IxNom', '1661166135_mrprofile_img.jpg', '1661166135_visiting_card.jpg', 'Unblock'),
(2, '2022-08-22 05:55:10', '2022-08-22 05:55:10', 2, 3, 'Riya Enterprise', 'Darren', 'Elder', 'darrenelder@gmail.com', '$2y$10$D1ztK6O3wi3buueNOKeLf.sNcc/p40KjwxroOlUDcosIzA96inp8a', '1661167510_mrprofile_img.jpg', '1661167510_visiting_card.jpg', 'Unblock');

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

CREATE TABLE `patients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobileno` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ptprofile_img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('Block','Unblock') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Unblock',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`id`, `name`, `mobileno`, `email`, `password`, `gender`, `ptprofile_img`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Ayushi Maurya', '1425369872', 'ayushimaurya@gmail.com', '$2y$10$FvqH7871P2KNh.Mm/ozL5ut9M1IprJP.3xdi3jqkR.39dmkw/JPgq', 'Female', '1660736706_ptprofile_img.jpg', 'Unblock', '2022-08-13 00:03:51', '2022-08-18 01:43:33');

-- --------------------------------------------------------

--
-- Table structure for table `patient_favs`
--

CREATE TABLE `patient_favs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `doctor_id` bigint(20) UNSIGNED NOT NULL,
  `patient_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `patient_slots`
--

CREATE TABLE `patient_slots` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `doc_id` bigint(20) UNSIGNED NOT NULL,
  `day` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slot_timing` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `company_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `creater_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('Block','Unblock') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Unblock'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `doctor_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `specialists`
--

CREATE TABLE `specialists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `specialists`
--

INSERT INTO `specialists` (`id`, `name`, `img`, `created_at`, `updated_at`) VALUES
(1, 'Dentist', '1659193869_img.png', NULL, '2022-07-30 09:41:09'),
(2, 'heart suergon', '1659193836_img.png', NULL, '2022-07-30 09:40:36'),
(5, 'Urology', '1659194312_img.png', '2022-07-30 09:48:32', '2022-07-30 09:48:32');

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

CREATE TABLE `states` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `state_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `states`
--

INSERT INTO `states` (`id`, `state_name`, `created_at`, `updated_at`) VALUES
(1, 'Gujarat', NULL, NULL),
(2, 'Goa', '2022-08-17 02:08:26', '2022-08-17 02:08:26');

-- --------------------------------------------------------

--
-- Table structure for table `stockiests`
--

CREATE TABLE `stockiests` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `company_id` bigint(20) UNSIGNED DEFAULT NULL,
  `manager_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `area` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pincode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('Block','Unblock') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Unblock'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `stockiests`
--

INSERT INTO `stockiests` (`id`, `created_at`, `updated_at`, `company_id`, `manager_id`, `name`, `state`, `city`, `area`, `address`, `pincode`, `status`) VALUES
(1, '2022-08-22 05:48:00', '2022-08-22 05:48:00', 2, 3, 'Mishri Majithia', 'Gujarat', 'Ahmedabad', 'Ctm', 'Muktanand Park', '382449', 'Unblock'),
(2, '2022-08-23 05:48:00', '2022-08-23 05:48:00', 7, 3, 'Nishi Joshi', 'Gujarat', 'Ahmedabad', 'Ghatlodia', 'Amuratam School', '124578', 'Unblock'),
(3, '2022-08-22 05:00:19', '2022-08-22 05:00:19', 7, NULL, 'ghgbh', '1', '2', '1', 'Khokhra, Ahmedabad', '38008', 'Unblock'),
(4, '2022-08-22 05:03:17', '2022-08-22 05:03:17', NULL, NULL, 'abcd', '1', '2', '3', 'abcdefghi', '325614', 'Unblock');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `areas`
--
ALTER TABLE `areas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `areas_city_id_foreign` (`city_id`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cities_sid_foreign` (`sid`);

--
-- Indexes for table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `divisions`
--
ALTER TABLE `divisions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `divisions_company_id_foreign` (`company_id`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`id`),
  ADD KEY `doctors_specialist_id_foreign` (`specialist_id`),
  ADD KEY `doctors_state_foreign` (`state`),
  ADD KEY `doctors_city_foreign` (`city`),
  ADD KEY `doctors_area_foreign` (`area`);

--
-- Indexes for table `doc_fav_medicines`
--
ALTER TABLE `doc_fav_medicines`
  ADD PRIMARY KEY (`id`),
  ADD KEY `doc_fav_medicines_doctor_id_foreign` (`doctor_id`);

--
-- Indexes for table `drspecialities`
--
ALTER TABLE `drspecialities`
  ADD PRIMARY KEY (`id`),
  ADD KEY `drspecialities_doctor_id_foreign` (`doctor_id`);

--
-- Indexes for table `hospital_daytimes`
--
ALTER TABLE `hospital_daytimes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `hospital_daytimes_doctor_id_foreign` (`doctor_id`);

--
-- Indexes for table `managers`
--
ALTER TABLE `managers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `managers_company_id_foreign` (`company_id`),
  ADD KEY `managers_division_id_foreign` (`division_id`);

--
-- Indexes for table `medicines`
--
ALTER TABLE `medicines`
  ADD PRIMARY KEY (`id`),
  ADD KEY `medicines_company_id_foreign` (`company_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mrs`
--
ALTER TABLE `mrs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `mrs_company_id_foreign` (`company_id`),
  ADD KEY `mrs_manager_id_foreign` (`manager_id`);

--
-- Indexes for table `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patient_favs`
--
ALTER TABLE `patient_favs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `patient_favs_doctor_id_foreign` (`doctor_id`),
  ADD KEY `patient_favs_patient_id_foreign` (`patient_id`);

--
-- Indexes for table `patient_slots`
--
ALTER TABLE `patient_slots`
  ADD PRIMARY KEY (`id`),
  ADD KEY `patient_slots_doc_id_foreign` (`doc_id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_company_id_foreign` (`company_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`),
  ADD KEY `services_doctor_id_foreign` (`doctor_id`);

--
-- Indexes for table `specialists`
--
ALTER TABLE `specialists`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `states`
--
ALTER TABLE `states`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stockiests`
--
ALTER TABLE `stockiests`
  ADD PRIMARY KEY (`id`),
  ADD KEY `stockiests_company_id_foreign` (`company_id`),
  ADD KEY `stockiests_manager_id_foreign` (`manager_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `areas`
--
ALTER TABLE `areas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `divisions`
--
ALTER TABLE `divisions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `doc_fav_medicines`
--
ALTER TABLE `doc_fav_medicines`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `drspecialities`
--
ALTER TABLE `drspecialities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `hospital_daytimes`
--
ALTER TABLE `hospital_daytimes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `managers`
--
ALTER TABLE `managers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `medicines`
--
ALTER TABLE `medicines`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT for table `mrs`
--
ALTER TABLE `mrs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `patients`
--
ALTER TABLE `patients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `patient_favs`
--
ALTER TABLE `patient_favs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `patient_slots`
--
ALTER TABLE `patient_slots`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `specialists`
--
ALTER TABLE `specialists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `states`
--
ALTER TABLE `states`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `stockiests`
--
ALTER TABLE `stockiests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `areas`
--
ALTER TABLE `areas`
  ADD CONSTRAINT `areas_city_id_foreign` FOREIGN KEY (`city_id`) REFERENCES `cities` (`id`);

--
-- Constraints for table `cities`
--
ALTER TABLE `cities`
  ADD CONSTRAINT `cities_sid_foreign` FOREIGN KEY (`sid`) REFERENCES `states` (`id`);

--
-- Constraints for table `divisions`
--
ALTER TABLE `divisions`
  ADD CONSTRAINT `divisions_company_id_foreign` FOREIGN KEY (`company_id`) REFERENCES `companies` (`id`);

--
-- Constraints for table `doctors`
--
ALTER TABLE `doctors`
  ADD CONSTRAINT `doctors_area_foreign` FOREIGN KEY (`area`) REFERENCES `areas` (`id`),
  ADD CONSTRAINT `doctors_city_foreign` FOREIGN KEY (`city`) REFERENCES `cities` (`id`),
  ADD CONSTRAINT `doctors_specialist_id_foreign` FOREIGN KEY (`specialist_id`) REFERENCES `specialists` (`id`),
  ADD CONSTRAINT `doctors_state_foreign` FOREIGN KEY (`state`) REFERENCES `states` (`id`);

--
-- Constraints for table `doc_fav_medicines`
--
ALTER TABLE `doc_fav_medicines`
  ADD CONSTRAINT `doc_fav_medicines_doctor_id_foreign` FOREIGN KEY (`doctor_id`) REFERENCES `doctors` (`id`);

--
-- Constraints for table `drspecialities`
--
ALTER TABLE `drspecialities`
  ADD CONSTRAINT `drspecialities_doctor_id_foreign` FOREIGN KEY (`doctor_id`) REFERENCES `doctors` (`id`);

--
-- Constraints for table `hospital_daytimes`
--
ALTER TABLE `hospital_daytimes`
  ADD CONSTRAINT `hospital_daytimes_doctor_id_foreign` FOREIGN KEY (`doctor_id`) REFERENCES `doctors` (`id`);

--
-- Constraints for table `managers`
--
ALTER TABLE `managers`
  ADD CONSTRAINT `managers_company_id_foreign` FOREIGN KEY (`company_id`) REFERENCES `companies` (`id`),
  ADD CONSTRAINT `managers_division_id_foreign` FOREIGN KEY (`division_id`) REFERENCES `divisions` (`id`);

--
-- Constraints for table `medicines`
--
ALTER TABLE `medicines`
  ADD CONSTRAINT `medicines_company_id_foreign` FOREIGN KEY (`company_id`) REFERENCES `companies` (`id`);

--
-- Constraints for table `mrs`
--
ALTER TABLE `mrs`
  ADD CONSTRAINT `mrs_company_id_foreign` FOREIGN KEY (`company_id`) REFERENCES `companies` (`id`),
  ADD CONSTRAINT `mrs_manager_id_foreign` FOREIGN KEY (`manager_id`) REFERENCES `managers` (`id`);

--
-- Constraints for table `patient_favs`
--
ALTER TABLE `patient_favs`
  ADD CONSTRAINT `patient_favs_doctor_id_foreign` FOREIGN KEY (`doctor_id`) REFERENCES `doctors` (`id`),
  ADD CONSTRAINT `patient_favs_patient_id_foreign` FOREIGN KEY (`patient_id`) REFERENCES `patients` (`id`);

--
-- Constraints for table `patient_slots`
--
ALTER TABLE `patient_slots`
  ADD CONSTRAINT `patient_slots_doc_id_foreign` FOREIGN KEY (`doc_id`) REFERENCES `doctors` (`id`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_company_id_foreign` FOREIGN KEY (`company_id`) REFERENCES `companies` (`id`);

--
-- Constraints for table `services`
--
ALTER TABLE `services`
  ADD CONSTRAINT `services_doctor_id_foreign` FOREIGN KEY (`doctor_id`) REFERENCES `doctors` (`id`);

--
-- Constraints for table `stockiests`
--
ALTER TABLE `stockiests`
  ADD CONSTRAINT `stockiests_company_id_foreign` FOREIGN KEY (`company_id`) REFERENCES `companies` (`id`),
  ADD CONSTRAINT `stockiests_manager_id_foreign` FOREIGN KEY (`manager_id`) REFERENCES `managers` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
