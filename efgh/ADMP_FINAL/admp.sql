-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 11, 2022 at 11:48 AM
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
  `dpass` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'null',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `dpass`, `img`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'mohini.maurya6201@gmail.com', '$2y$10$BB/xxWQ227Ea4g.zQJW60eheF7y0C.Ne1z/3wsB8RjpUBgk353126', '123456789', '', '2022-09-17 14:23:32', '2022-10-04 11:52:06'),
(2, 'vishv', 'vishvunjiya3058822@gmail.com', '$2y$10$Zb94ZS0ZIORze7suRyr5Ru7RePr88L7HNuRlw20NLvqh4MFxOAtVm', '', '1665039744_img.jpg', NULL, '2022-10-06 14:02:24');

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `doc_id` bigint(20) UNSIGNED NOT NULL,
  `patient_id` bigint(20) UNSIGNED NOT NULL,
  `slot_id` bigint(20) UNSIGNED NOT NULL,
  `report_img` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `appointment_status` enum('Approved','Pending') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Pending',
  `time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`id`, `created_at`, `updated_at`, `doc_id`, `patient_id`, `slot_id`, `report_img`, `date`, `comment`, `appointment_status`, `time`) VALUES
(4, '2022-09-18 01:55:26', '2022-10-06 13:57:13', 1, 2, 31, '1665039433755192report_img.jpg', '2022-09-18', 'hii', 'Approved', '15:00'),
(5, '2022-09-19 00:20:04', '2022-09-19 01:15:04', 2, 1, 38, NULL, '2022-09-19', 'hii', 'Approved', '14:00'),
(6, '2022-09-19 01:27:26', '2022-09-19 01:27:26', 2, 2, 35, NULL, '2022-09-19', 'hii', 'Pending', '13:30'),
(8, '2022-09-22 04:18:51', '2022-09-22 04:18:51', 2, 2, 50, NULL, '2022-09-22', 'cc', 'Pending', '16:10'),
(9, '2022-09-23 07:49:55', '2022-09-23 07:49:55', 2, 2, 71, NULL, '2022-09-26', 'cc', 'Pending', '09:50'),
(10, '2022-09-24 00:54:43', '2022-09-24 00:57:20', 3, 5, 81, '1664000840133481report_img.jpg', '2022-09-24', 'zzz', 'Approved', '13:30'),
(11, '2022-10-06 13:54:54', '2022-10-06 13:59:30', 3, 2, 54, '1665039570188159report_img.jpg', '2022-10-06', 'zz', 'Approved', '17:10'),
(12, '2022-10-06 15:01:59', '2022-10-06 15:01:59', 3, 2, 56, NULL, '2022-10-06', 'xx', 'Pending', '17:30'),
(13, '2022-10-10 15:14:41', '2022-10-10 15:14:41', 2, 2, 42, NULL, '2022-10-10', 'fever', 'Pending', '14:40');

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
(1, '2022-09-17 08:56:01', '2022-09-17 08:56:01', 1, 'Maninagar'),
(2, '2022-09-17 08:56:39', '2022-09-17 08:56:39', 2, 'Andheri'),
(3, '2022-09-17 08:58:23', '2022-09-17 08:58:23', 3, 'Lohta'),
(4, '2022-09-17 08:58:40', '2022-09-17 08:58:40', 1, 'C.G. Road'),
(5, '2022-09-17 08:59:43', '2022-09-17 08:59:43', 3, 'Jansa'),
(6, '2022-10-06 13:19:31', '2022-10-06 13:19:31', 5, 'Ramvadi');

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
(1, '2022-09-17 08:55:48', '2022-09-17 08:55:48', 1, 'Ahmedabad'),
(2, '2022-09-17 08:56:27', '2022-09-17 08:56:27', 2, 'Mumbai'),
(3, '2022-09-17 08:57:56', '2022-09-17 08:57:56', 4, 'Varanasi'),
(5, '2022-10-06 13:19:22', '2022-10-06 13:19:22', 1, 'Jamjodhpur');

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
  `dpass` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cprofile_img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `visiting_card` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('Unblock','Block') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Unblock',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`id`, `company_name`, `first_name`, `last_name`, `email`, `password`, `dpass`, `cprofile_img`, `visiting_card`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Hi-Tech Pvt.Ltd.', 'Anand', 'Maurya', 'anandmaurya@gmail.com', '$2y$10$vZ4zdCC1E3XPR5JH6x1zKOwp7RRmQqz7W9TCSC6dyBWXQUNI2crHO', '123456789', '1663426509_cprofile_img.jpg', '1663426509_visiting_card.png', 'Unblock', '2022-09-17 09:25:09', '2022-10-03 13:58:47'),
(2, 'Technostacks Pvt.Ltd.', 'Mohini', 'Maurya', 'mohinimaurya@gmail.com', '$2y$10$u6X.Vf1tGf9M4/pcgnMvs.ADBSzCuSUQdA4qxPEXQbDw0CKn/toyS', '123456789', '1664000412_cprofile_img.png', '1664000412_visiting_card.png', 'Unblock', '2022-09-24 00:50:12', '2022-09-24 00:50:12'),
(5, 'Sindhiya Tech', 'Yash', 'Sindhiya', '181260107036setice@gmail.com', '$2y$10$iCOEguyPpUQ0NsQ5WcTXxOEhbZX21soP6tqiUc6.xiZZ5lsw0mqyC', '123456789', '1664682245_cprofile_img.jpg', '1664682246_visiting_card.jpg', 'Unblock', '2022-10-01 22:14:06', '2022-10-03 10:14:05'),
(8, 'unjiya tech', 'vishv', 'unjiya', 'vishvunjiya3058822@gmail.com', '$2y$10$JwrdLaLclicxi54gXc/MmuypGIdkXZRyivI4Arbv/uycUgRf5f3/W', '123456789', '1664693297_cprofile_img.jpg', '1664693297_visiting_card.jpg', 'Unblock', '2022-10-02 13:48:17', '2022-10-02 13:48:17'),
(9, 'vvvvvv', 'vishv', 'unjiya', 'vishvunjiya742003@gmail.com', '$2y$10$YdIwatkuCYLuxOtkqrjOQuq24uG/hab2a.JrhmfZt7G4/ZiR.BYX2', '123456789', '1664869565_cprofile_img.jpg', '1664869565_visiting_card.jpg', 'Unblock', '2022-10-04 14:46:06', '2022-10-06 13:28:18'),
(10, 'HCL Tech. Ltd.', 'Anchal', 'Maurya', 'mohini.maurya6201@gmail.com', '$2y$10$97PCMy5jA/f87j0VmuA94OMN4BNFIW7gzrTvBwndaMh4Ev1NoRazC', '123456789', '1665030763_cprofile_img.jpg', '1665030763_visiting_card.png', 'Unblock', '2022-10-06 11:32:43', '2022-10-06 13:28:22'),
(11, 'TCS', 'Keerti', 'Maurya', 'mohinimaurya622001@gmail.com', '$2y$10$hlU6pLdDk2v06cAH/nDjsurdqMw8qqcrWuFfyU/CzkqV7A8B3LJ.6', '1234556789', '1665031008_cprofile_img.jpg', '1665031008_visiting_card.png', 'Unblock', '2022-10-06 11:36:48', '2022-10-06 13:28:26'),
(12, 'Valekar Pvt. Ltd.', 'Reena', 'Valekar', 'riyavalekar19@gmail.com', '$2y$10$8.t.CneSRCPq7dkm0jsT6uy8V/kgQRnbu2cHkcKmnZ2YU3YTog/4S', '123456789', '1665478980_cprofile_img.jpg', '1665478980_visiting_card.png', 'Unblock', '2022-10-11 16:03:00', '2022-10-11 16:03:00');

-- --------------------------------------------------------

--
-- Table structure for table `company_appointments`
--

CREATE TABLE `company_appointments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `doctor_id` bigint(20) UNSIGNED NOT NULL,
  `company_id` bigint(20) UNSIGNED NOT NULL,
  `slot_id` bigint(20) UNSIGNED NOT NULL,
  `companyappdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `company_appointments`
--

INSERT INTO `company_appointments` (`id`, `created_at`, `updated_at`, `doctor_id`, `company_id`, `slot_id`, `companyappdate`) VALUES
(8, '2022-10-11 14:21:57', '2022-10-11 14:21:57', 3, 5, 13, '2022-10-12'),
(9, '2022-10-11 15:27:51', '2022-10-11 15:27:51', 1, 8, 15, '2022-10-12'),
(10, '2022-10-11 15:28:25', '2022-10-11 15:28:25', 1, 8, 2, '2022-10-12');

-- --------------------------------------------------------

--
-- Table structure for table `company_fav_docs`
--

CREATE TABLE `company_fav_docs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `doctor_id` bigint(20) UNSIGNED NOT NULL,
  `company_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `company_fav_docs`
--

INSERT INTO `company_fav_docs` (`id`, `created_at`, `updated_at`, `doctor_id`, `company_id`) VALUES
(9, '2022-09-21 13:18:51', '2022-09-21 13:18:51', 1, 1),
(10, '2022-09-21 13:30:50', '2022-09-21 13:30:50', 2, 1),
(11, '2022-09-24 01:07:46', '2022-09-24 01:07:46', 2, 2),
(20, '2022-10-02 14:32:26', '2022-10-02 14:32:26', 3, 5),
(23, '2022-10-06 13:31:12', '2022-10-06 13:31:12', 2, 10),
(24, '2022-10-07 16:21:06', '2022-10-07 16:21:06', 3, 10),
(27, '2022-10-11 14:21:45', '2022-10-11 14:21:45', 9, 5),
(29, '2022-10-11 15:27:37', '2022-10-11 15:27:37', 1, 8);

-- --------------------------------------------------------

--
-- Table structure for table `company_requests`
--

CREATE TABLE `company_requests` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `doctor_id` bigint(20) UNSIGNED NOT NULL,
  `company_id` bigint(20) UNSIGNED NOT NULL,
  `visiting_card` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('Pending','Approved') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `company_requests`
--

INSERT INTO `company_requests` (`id`, `created_at`, `updated_at`, `doctor_id`, `company_id`, `visiting_card`, `status`) VALUES
(1, '2022-10-07 16:23:50', '2022-10-11 15:27:33', 1, 10, '1665134630_visiting_card_img.png', 'Pending'),
(2, '2022-10-10 13:35:29', '2022-10-10 13:35:29', 1, 5, '1665383729_visiting_card_img.png', 'Pending'),
(3, '2022-10-11 15:26:49', '2022-10-11 15:27:37', 1, 8, '1665476809_visiting_card_img.png', 'Approved');

-- --------------------------------------------------------

--
-- Table structure for table `company_slots`
--

CREATE TABLE `company_slots` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `doc_id` bigint(20) UNSIGNED NOT NULL,
  `cday` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cslot_morning_to` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'null',
  `cslot_morning_from` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'null',
  `cslot_afternoon_to` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'null',
  `cslot_afternoon_from` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'null',
  `cslot_evening_to` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'null',
  `cslot_evening_from` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'null',
  `cno_slots` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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

-- --------------------------------------------------------

--
-- Table structure for table `cruds`
--

CREATE TABLE `cruds` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `diagnoses`
--

CREATE TABLE `diagnoses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `appoinment_id` bigint(20) UNSIGNED NOT NULL,
  `patient_id` bigint(20) UNSIGNED NOT NULL,
  `problems` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `diagnosis` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `care_suggestion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reports` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('Pending','Approved') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `diagnoses`
--

INSERT INTO `diagnoses` (`id`, `created_at`, `updated_at`, `appoinment_id`, `patient_id`, `problems`, `diagnosis`, `care_suggestion`, `reports`, `status`) VALUES
(3, '2022-09-18 01:56:56', '2022-09-18 01:57:27', 4, 2, 'fever', 'take rest', 'be safe', 'blood test', 'Approved'),
(4, '2022-09-19 01:14:26', '2022-09-19 01:15:04', 5, 1, 'accident case\r\ninternal injury', 'disinfect', 'take rest', 'X-Ray', 'Approved'),
(5, '2022-09-24 00:55:43', '2022-09-24 00:56:09', 10, 5, 'kai nai', 'kai nai', 'kai nai', 'nai nai', 'Approved'),
(6, '2022-10-06 13:55:45', '2022-10-06 13:56:39', 11, 2, 'fever', 'rest', 'eat healthy', 'mri', 'Approved');

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
(1, '2022-09-17 09:27:00', '2022-09-17 09:27:00', 1, 'A'),
(2, '2022-09-17 09:27:08', '2022-09-17 09:27:08', 1, 'B'),
(3, '2022-09-24 01:09:06', '2022-09-24 01:09:06', 2, 'A'),
(4, '2022-10-01 22:30:47', '2022-10-01 22:30:47', 5, 'A'),
(5, '2022-10-06 13:30:18', '2022-10-06 13:30:18', 10, 'AAA'),
(6, '2022-10-11 16:47:29', '2022-10-11 16:47:29', 12, 'A');

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
  `visit_pharma_per` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dpass` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dob` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `doa` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `profile_img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `liacence_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `education` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `experience` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hospital_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hospital_img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dr_mobile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `office_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `visit_card` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `medical_store` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `about` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` bigint(20) UNSIGNED NOT NULL,
  `city` bigint(20) UNSIGNED NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pincode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `google_map` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `day` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hospital_morning_to` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'Null',
  `hospital_morning_from` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'Null',
  `hospital_afternoon_to` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'Null',
  `hospital_afternoon_from` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'Null',
  `hospital_evening_to` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'Null',
  `hospital_evening_from` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'Null',
  `consulting_fees` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `followup_fees` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notification` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `visitor_request` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `doctor_status` enum('Block','Unblock') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Unblock',
  `hospital_status` enum('Available','Not Available') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Available',
  `visitor_status` enum('Available','Not Available') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Available',
  `area` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`id`, `gender`, `first_name`, `last_name`, `created_at`, `updated_at`, `specialist_id`, `short_tittle`, `email`, `password`, `visit_pharma_per`, `dpass`, `dob`, `doa`, `profile_img`, `liacence_no`, `education`, `experience`, `hospital_name`, `hospital_img`, `dr_mobile`, `office_no`, `visit_card`, `medical_store`, `about`, `state`, `city`, `address`, `pincode`, `google_map`, `day`, `hospital_morning_to`, `hospital_morning_from`, `hospital_afternoon_to`, `hospital_afternoon_from`, `hospital_evening_to`, `hospital_evening_from`, `consulting_fees`, `followup_fees`, `notification`, `visitor_request`, `doctor_status`, `hospital_status`, `visitor_status`, `area`) VALUES
(1, 'Female', 'Ayushi', 'Maurya', '2022-09-17 09:14:42', '2022-10-06 12:50:48', 1, 'Dentist', 'mohini.maurya6201@gmail.com', '$2y$10$nI08ZiCZjymCNRncBdLDnOAPM8fDpUoVBWAYr4ioady/O3NZfbIZO', '1-1', '123456789', '1995-08-15', '2021-02-06', '1663425882_profile_img.jpg', '32564789', 'B.D.S', '3 year', 'Sanjivni Hospital Care', '1663489120196177hospital_img.jpg,1663489120654347hospital_img.jpg,1663489120297214hospital_img.jpg,1663489120752963hospital_img.jpg', '7896541230', '25147896', '1663425882_visit_card_img.png', 'Near Railway Station', 'I\'m a Good Doctor', 1, 1, 'Oppo. Railway Station , Maninagar , Ahmedabad', '362514', 'https://goo.gl/maps/eGSNHMvABexPTpn7A', 'Monday,Thursday', '09:00', '12:00', '13:00', '15:00', '17:00', '19:00', '5000', '2500', 'If any emergency then just call me', 'No', 'Unblock', 'Not Available', 'Available', 1),
(2, 'Female', 'Ritika', 'Maurya', '2022-09-17 09:22:41', '2022-09-19 00:13:31', 2, 'Urology', 'ritikamaurya@gmail.com', '$2y$10$gD4VUhkBbZEODsTtLWtdNOoD0U5i56Q5205CCihBwR0pKSoQs1HLW', '1-2', '123456789', '1990-04-15', NULL, '1663426361_profile_img.jpg', '32547896', 'MS/DNB', '5 year', 'City Hospital', '1663426361365723hospital_img.jpg,1663426361728485hospital_img.jpg,1663426361292188hospital_img.jpg', '3625147890', '32561478', '1663426361_visit_card_img.jpg', 'Bansi Medical store', 'I\'m a good doctor', 1, 1, 'Oppo. Scien city , Bhadaj circle Ahmedabad', '251463', 'https://goo.gl/maps/nMFgi66itgJXwrh4A', 'Monday,Wednesday,Friday,Sunday', '08:30', '11:30', '14:30', '17:30', '20:00', '21:00', '7000', '3500', 'If any Emergency inform me', 'No', 'Unblock', 'Available', 'Available', 4),
(3, 'Male', 'Vishv', 'Unjiya', '2022-09-22 05:41:33', '2022-10-06 15:32:34', 4, 'gvaWEgf', 'vishvunjiya3058822@gmail.com', '$2y$10$m/i5SVNPpjS3EIh4OkPBqeJf0.r6SAAazu1qWsZkrABXafo9S8X2q', '2-1', '1234567', '2022-09-05', '2022-09-19', '1664000352_profile_img.jpg', 'DFB789', 'MS/DNB', '5 year', 'Zydus', '1663845093683258hospital_img.jpg,1663845093816570hospital_img.jpg,1663845093786188hospital_img.jpg,1663845093693339hospital_img.webp', '7990235200', '8347256265', '1663845093_visit_card_img.png', 'Bansi Medical Store', 'dfbsdgserga', 1, 1, 'nzdxgbzs', '380008', 'https://goo.gl/maps/eGSNHMvABexPTpn7A', 'Tuesday,Wednesday', '16:41', '17:41', '18:41', '19:41', '20:41', '22:41', '1000', '500', 'fbsdrbgsxe', 'Yes', 'Unblock', 'Available', 'Available', 1),
(9, 'Male', 'Harsh', 'Maurya', '2022-10-01 22:00:15', '2022-10-03 10:42:54', 3, 'Cardiyologist', 'harshmauryas058@gmail.com', '$2y$10$f1nMnr5CjbKq7zwKNsdDZOUtZ6RgFF6Ry6eVwZLbuTPpwXqIUZ.u.', '3-1', '123456789', '2005-08-05', NULL, '1664681415_profile_img.jpg', '214578', 'MS/DNB', '1 year', 'Sinrji Hospital', '1664681415295148hospital_img.jpg,1664681415562336hospital_img.jpg,1664681415616675hospital_img.jpg', '9725456541', '321457', '1664681415_visit_card_img.png', 'Bansi Medical Store', 'good doctor', 1, 1, 'near ctm', '362514', 'https://goo.gl/maps/Bp1UntRRyPzXg8eV7', 'Tuesday,Thursday', '08:00', '10:00', '13:00', '15:00', '17:00', '19:00', '3500', '2514', 'hii', 'Yes', 'Unblock', 'Available', 'Available', 1),
(10, 'Male', 'vishv', 'unjiya', '2022-10-02 00:40:42', '2022-10-02 00:40:42', 3, 'Cardiyologist', 'vishvunjiya742003@gmail.com', '$2y$10$AP2h.KTVYh6gvwF8j3oQqe/0syV47gidjbEshamsj665o6fTil9Fa', '1-3', '123456789', '2022-10-04', NULL, '1664691042_profile_img.jpg', '5467858', 'MS/DNB', '1 year', 'Appolo Hospital', '1664691042947678hospital_img.jpg,1664691042617987hospital_img.jpg,1664691042964576hospital_img.jpg', '1020304050', '5', '1664691042_visit_card_img.jpg', 'Bansi Medical Store\r\n', 'hello', 1, 1, 'hii', '555555', 'http://localhost/phpmyadmin/index.php?route=/sql&db=admp&table=doctors&pos=0', 'Monday,Tuesday', '13:38', '13:39', '17:39', '16:39', '16:39', '14:39', '1245', '500', 'hiii', 'Yes', 'Unblock', 'Available', 'Available', 1),
(11, 'Female', 'Reena', 'Valekar', '2022-10-11 16:40:59', '2022-10-11 16:40:59', 3, 'Cardiologist', 'riyavalekar19@gmail.com', '$2y$10$02a58CtedezQhsxLM9WLlOTnUiuBBDax5pQT06O1tenQmcsoC1QYa', '1-1', '123456789', '1995-12-03', NULL, '1665481259_profile_img.jpg', '36251478', 'MBBS', '5 year', 'Sal Hospital', '1665481259218667hospital_img.jpg,1665481259926861hospital_img.jpg,1665481259547558hospital_img.jpg', '6542137890', '36251487', '1665481259_visit_card_img.png', 'Near Railway Station', 'I\'m a Good Doctor', 1, 5, 'Bhadaj Circle', '362514', 'https://g.page/OpalInfotech?share', 'Monday,Wednesday,Friday', '08:00', '13:00', NULL, NULL, '17:00', '20:00', '6500', '3200', 'hello', 'No', 'Unblock', 'Available', 'Available', 6);

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

--
-- Dumping data for table `doc_fav_medicines`
--

INSERT INTO `doc_fav_medicines` (`id`, `created_at`, `updated_at`, `doctor_id`, `medicine_name`) VALUES
(1, '2022-09-17 09:34:43', '2022-09-17 09:34:43', 1, 'Paracetamol'),
(2, '2022-09-17 09:35:56', '2022-09-17 09:35:56', 1, 'Ibuprofen (Advil, Motrin)');

-- --------------------------------------------------------

--
-- Table structure for table `doc_fav_patients`
--

CREATE TABLE `doc_fav_patients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `doctor_id` bigint(20) UNSIGNED NOT NULL,
  `patient_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `doc_fav_patients`
--

INSERT INTO `doc_fav_patients` (`id`, `created_at`, `updated_at`, `doctor_id`, `patient_id`) VALUES
(1, '2022-09-18 01:27:37', '2022-09-18 01:27:37', 1, 2),
(2, '2022-09-19 01:15:04', '2022-09-19 01:15:04', 2, 1),
(3, '2022-09-24 00:56:09', '2022-09-24 00:56:09', 3, 5);

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

--
-- Dumping data for table `drspecialities`
--

INSERT INTO `drspecialities` (`id`, `created_at`, `updated_at`, `doctor_id`, `title`) VALUES
(1, '2022-09-17 09:38:32', '2022-09-17 09:38:32', 1, 'Dental Implants'),
(2, '2022-09-17 09:39:11', '2022-09-17 09:39:11', 1, 'Implant Bridges');

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
  `dpass` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mprofile_img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `visiting_card` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('Block','Unblock') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Unblock'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `managers`
--

INSERT INTO `managers` (`id`, `created_at`, `updated_at`, `company_id`, `division_id`, `Manager_name`, `first_name`, `last_name`, `email`, `password`, `dpass`, `mprofile_img`, `visiting_card`, `status`) VALUES
(1, '2022-09-17 09:49:54', '2022-10-03 15:53:40', 1, 1, 'Riya', 'Reena', 'Valekar', 'reenavalekar@gmail.com', '$2y$10$xDz82hbblgBE.PDE/qoMtuvExZu94gQtexWI6s50K4RzH/tsBaVTa', '123456789', '1663427994_mprofile_img.jpg', '1663427994_visiting_card.jpg', 'Unblock'),
(2, '2022-09-24 06:37:29', '2022-09-24 06:37:29', 2, 3, 'reeeeeeeeya', 'fresh', 'saru', 'fresh@gmail.com', '$2y$10$nrYgEomHHuwNaMDo4Wf0KejguoFrS5oVEZsAT4G870D6f95EA9h0u', '123456789', '1664021249_mprofile_img.png', '1664021249_visiting_card.png', 'Unblock'),
(3, '2022-10-01 22:31:43', '2022-10-04 11:48:46', 5, 4, 'ritika', 'Rtk', 'Maurya', '181260107036setice@gmail.com', '$2y$10$udna1h9Uh8rnewBBK1l2ced.xnD/JYNZ7lJ6TUXcJYnSpX6KN/6Oq', '123456789', '1664683303_mprofile_img.jpg', '1664683303_visiting_card.png', 'Unblock'),
(4, '2022-10-02 13:46:11', '2022-10-03 11:47:20', 5, 4, 'Rashvi', 'Shlok', 'Maurya', 'mohinimaurya622001@gmail.com', '$2y$10$vxDjl/If7sf9q2iflBEUYOvJLLAEtD9s/Z.tOIp3J4gUUfy11vQIq', '123456789', '1664693171_mprofile_img.jpg', '1664693171_visiting_card.png', 'Unblock'),
(5, '2022-10-04 16:04:43', '2022-10-06 13:45:30', 5, 1, 'vishv', 'vishv', 'unjiya', 'vishvunjiya3058822@gmail.com', '$2y$10$xB7lUm6WKM91138WWneNlOjGH1bHIXUzD/yRnCBvAXyLdoNf5wM0O', '123456789', '1664874283_mprofile_img.jpg', '1664874283_visiting_card.jpg', 'Unblock'),
(6, '2022-10-06 13:32:32', '2022-10-06 13:32:32', 10, 5, 'vishv', 'vishv', 'unjiya', 'vishvunjiya@gmail.com', '$2y$10$tddm8x93HVbbnRnF1HIXf.siqJjrmrwffkG.t86tCFpvf.WUzJTEa', '123456789', '1665037952_mprofile_img.jpg', '1665037952_visiting_card.jpg', 'Unblock');

-- --------------------------------------------------------

--
-- Table structure for table `manager_appointments`
--

CREATE TABLE `manager_appointments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `doctor_id` bigint(20) UNSIGNED NOT NULL,
  `manager_id` bigint(20) UNSIGNED NOT NULL,
  `slot_id` bigint(20) UNSIGNED NOT NULL,
  `managerappdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `manager_appointments`
--

INSERT INTO `manager_appointments` (`id`, `created_at`, `updated_at`, `doctor_id`, `manager_id`, `slot_id`, `managerappdate`) VALUES
(4, '2022-10-11 14:17:34', '2022-10-11 14:17:34', 3, 3, 13, '2022-10-12');

-- --------------------------------------------------------

--
-- Table structure for table `manager_fav_docs`
--

CREATE TABLE `manager_fav_docs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `doctor_id` bigint(20) UNSIGNED NOT NULL,
  `manager_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `manager_fav_docs`
--

INSERT INTO `manager_fav_docs` (`id`, `created_at`, `updated_at`, `doctor_id`, `manager_id`) VALUES
(1, '2022-09-24 05:41:19', '2022-09-24 05:41:19', 2, 1),
(2, '2022-09-24 06:58:18', '2022-09-24 06:58:18', 1, 2),
(3, '2022-09-24 06:58:43', '2022-09-24 06:58:43', 2, 2),
(4, '2022-10-01 15:44:19', '2022-10-01 15:44:19', 2, 1),
(8, '2022-10-02 14:32:31', '2022-10-02 14:32:31', 3, 1),
(10, '2022-10-06 13:46:49', '2022-10-06 13:46:49', 2, 5),
(13, '2022-10-07 15:43:10', '2022-10-07 15:43:10', 9, 4),
(14, '2022-10-07 15:48:06', '2022-10-07 15:48:06', 10, 4),
(15, '2022-10-07 16:16:49', '2022-10-07 16:16:49', 3, 3);

-- --------------------------------------------------------

--
-- Table structure for table `manager_requests`
--

CREATE TABLE `manager_requests` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `doctor_id` bigint(20) UNSIGNED NOT NULL,
  `manager_id` bigint(20) UNSIGNED NOT NULL,
  `visiting_card` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('Pending','Approved') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `manager_requests`
--

INSERT INTO `manager_requests` (`id`, `created_at`, `updated_at`, `doctor_id`, `manager_id`, `visiting_card`, `status`) VALUES
(1, '2022-10-07 16:17:44', '2022-10-07 17:52:56', 1, 3, '1665134264_visiting_card_img.png', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `medicines`
--

CREATE TABLE `medicines` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `company_id` bigint(20) UNSIGNED NOT NULL,
  `created_by` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'null',
  `medicine_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `medicines`
--

INSERT INTO `medicines` (`id`, `created_at`, `updated_at`, `company_id`, `created_by`, `medicine_name`) VALUES
(1, '2022-09-17 09:27:47', '2022-09-17 09:27:47', 1, 'null', 'Paracetamol'),
(2, '2022-09-17 09:28:02', '2022-09-17 09:28:02', 1, 'null', 'aspirin'),
(3, '2022-09-22 11:51:41', '2022-09-22 11:51:41', 1, 'null', 'dolo'),
(4, '2022-09-24 01:07:28', '2022-09-24 01:07:28', 2, 'null', 'bestbetaam25'),
(10, '2022-10-02 14:58:22', '2022-10-02 14:58:22', 1, '1-kinjalpatel@gmail.com', 'Ativan'),
(12, '2022-10-02 15:01:45', '2022-10-02 15:01:45', 1, '1-', 'Amoxicillin'),
(13, '2022-10-04 13:52:03', '2022-10-04 13:52:03', 5, 'null', 'abn'),
(15, '2022-10-06 13:31:00', '2022-10-06 13:31:00', 10, 'null', 'Acetaminophen'),
(16, '2022-10-06 13:46:40', '2022-10-06 13:46:40', 5, '5-vishvunjiya3058822@gmail.com', 'Zubsolv'),
(17, '2022-10-06 13:51:07', '2022-10-06 13:51:07', 1, '1-kinjalpatel@gmail.com', 'Naproxen');

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
(2, '2022_07_28_053546_create_admins_table', 1),
(3, '2022_07_28_053703_add_columns_to_admins_table', 1),
(4, '2022_07_27_085528_create_states_table', 2),
(5, '2022_07_27_085553_add_column_to_states_table', 2),
(6, '2022_07_27_085653_create_specialists_table', 2),
(7, '2022_07_27_085721_add_column_to_specialists_table', 2),
(8, '2022_08_01_071347_create_cities_table', 3),
(9, '2022_08_01_071416_add_columns_to_cities_table', 3),
(10, '2022_08_01_071553_create_areas_table', 4),
(11, '2022_08_01_071626_add_columns_to_areas_table', 4),
(12, '2022_08_13_051816_create_patients_table', 4),
(13, '2022_08_13_051909_add_columns_to_patients', 4),
(14, '2022_08_01_071737_create_doctors_table', 5),
(15, '2022_08_01_071811_add_columns_to_doctors_table', 5),
(16, '2022_08_01_065830_create_companies_table', 6),
(17, '2022_08_01_070043_add_columns_to_companies_table', 6),
(18, '2022_08_01_072348_create_drspecialities_table', 7),
(19, '2022_08_01_072424_add_columns_to_drspecialities_table', 7),
(20, '2022_08_01_072609_create_hospital_daytimes_table', 7),
(21, '2022_08_01_072649_add_columns_to_hospital_daytimes_table', 7),
(22, '2022_08_01_075049_create_products_table', 7),
(23, '2022_08_01_075106_add_columns_to_products_table', 7),
(24, '2022_08_08_054742_create_services_table', 8),
(25, '2022_08_08_054948_add_columns_to_services_table', 8),
(26, '2022_08_13_073342_create_patient_favs_table', 8),
(27, '2022_08_13_073432_add_columns_to_patient_favs_table', 8),
(28, '2022_08_17_090708_create_patient_slots_table', 8),
(29, '2022_08_17_091048_add_columns_to_patient_slots_table', 8),
(30, '2022_08_17_104234_create_medicines_table', 9),
(31, '2022_08_17_104404_add-columns_to_medicines_table', 9),
(32, '2022_08_18_071525_create_doc_fav_medicines_table', 9),
(33, '2022_08_18_071551_add_columns_to_doc_fav_medicines_table', 9),
(34, '2022_08_20_141722_create_divisions_table', 9),
(35, '2022_08_20_141816_add_columns_to_divisions_table', 9),
(36, '2022_08_20_160109_create_managers_table', 10),
(37, '2022_08_20_160209_add_columns_to_managers_table', 10),
(38, '2022_08_22_065119_create_contacts_table', 10),
(39, '2022_08_22_065503_add_column_to_contacts_table', 10),
(40, '2022_08_23_052726_create_appointments_table', 10),
(41, '2022_08_23_052741_add_columns_to_appointments_table', 10),
(42, '2022_08_20_160343_create_mrs_table', 11),
(43, '2022_08_20_160408_add-columns_to_mrs_table', 11),
(44, '2022_08_20_160605_create_stockiests_table', 12),
(45, '2022_08_20_160629_add_columns_to_stockiests_table', 12),
(46, '2022_08_26_111532_create_company_slots_table', 12),
(47, '2022_08_26_111557_add_column_to_company_slots_table', 12),
(48, '2022_08_29_065959_create_visitor_slots_table', 12),
(49, '2022_08_29_070113_add_columns_to_visitor_slots_table', 12),
(50, '2022_09_03_070504_create_diagnosis_table', 12),
(51, '2022_09_03_070642_add_column_to_diagnosis_table', 12),
(52, '2022_09_03_072406_create_prescriptions_table', 12),
(53, '2022_09_03_072432_add_column_to_prescriptions_table', 12),
(54, '2022_09_03_114354_create_company_fav_docs_table', 12),
(55, '2022_09_03_114502_add_columns_to_company_fav_docs_table', 12),
(56, '2022_09_09_121342_create_doc_fav_patients_table', 12),
(57, '2022_09_09_121435_add_columns_to_doc_fav_patients_table', 12),
(58, '2022_09_18_065027_create_diagnoses_table', 13),
(59, '2022_09_18_065423_create_diagnoses_table', 14),
(60, '2022_09_18_065439_add_columns_to_diagnoses_table', 14),
(61, '2022_09_20_032507_create_cruds_table', 15),
(62, '2022_09_20_032536_add_columns_to_cruds_table', 15),
(63, '2022_09_21_091436_create_company_appointments_table', 16),
(64, '2022_09_21_091716_add_columns_to_company_appointments_table', 16),
(67, '2022_09_24_072737_create_manager_appointments_table', 17),
(68, '2022_09_24_073015_add_columns_to_manager_appointments_table', 17),
(69, '2022_09_24_100639_create_manager_fav_docs_table', 18),
(70, '2022_09_24_100908_add_columns_to_manager_fav_docs_table', 18),
(71, '2022_10_01_083856_create_mr_fav_docs_table', 19),
(72, '2022_10_01_083943_add_columns_to_mr_fav_docs_table', 19),
(73, '2022_10_01_085009_create_mr_appointments_table', 20),
(74, '2022_10_01_085034_add_columns_to_mr_appointments_table', 20),
(75, '2022_10_06_114307_create_visitor_requests_table', 21),
(76, '2022_10_06_114448_add_columns_to_visitor_requests_table', 21),
(77, '2022_10_07_090457_create_company_requests_table', 22),
(78, '2022_10_07_090522_create_manager_requests_table', 22),
(79, '2022_10_07_090536_create_mr_requests_table', 22),
(80, '2022_10_07_090626_add_columns_to_company_requests_table', 22),
(81, '2022_10_07_090655_add_columns_to_manager_requests_table', 22),
(82, '2022_10_07_090710_add_columns_to_mr_requests_table', 22);

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
  `dpass` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mrprofile_img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `visiting_card` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('Block','Unblock') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Unblock'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mrs`
--

INSERT INTO `mrs` (`id`, `created_at`, `updated_at`, `company_id`, `manager_id`, `company_name`, `first_name`, `last_name`, `email`, `password`, `dpass`, `mrprofile_img`, `visiting_card`, `status`) VALUES
(1, '2022-09-17 09:56:17', '2022-10-03 17:26:21', 1, 1, 'Technostacks Pvt.Ltd.', 'Kinjal', 'Patel', 'kinjalpatel@gmail.com', '$2y$10$YEeMh2qdiJIPcbHgh7KdxO9wPJERiwV.E8MUPVDH.33nwU956yDvC', '123456789', '1664612084_mrprofile_img.jpg', '1664612084_visiting_card.png', 'Unblock'),
(3, '2022-10-02 14:04:31', '2022-10-07 16:27:56', 1, 4, 'maurya tech', 'rashvi', 'Maurya', 'mohinimaurya622001@gmail.com', '$2y$10$Qk8poCm7gi3zfjrGG/sJxOGx31Jcp76fukHsry83uhYh70r.PQiJ.', '1234556789', '1664694271_mrprofile_img.jpg', '1664694271_visiting_card.jpg', 'Unblock');

-- --------------------------------------------------------

--
-- Table structure for table `mr_appointments`
--

CREATE TABLE `mr_appointments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `doctor_id` bigint(20) UNSIGNED NOT NULL,
  `mr_id` bigint(20) UNSIGNED NOT NULL,
  `slot_id` bigint(20) UNSIGNED NOT NULL,
  `mrappdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mr_appointments`
--

INSERT INTO `mr_appointments` (`id`, `created_at`, `updated_at`, `doctor_id`, `mr_id`, `slot_id`, `mrappdate`) VALUES
(4, '2022-10-11 14:08:02', '2022-10-11 14:08:02', 3, 3, 13, '2022-10-12');

-- --------------------------------------------------------

--
-- Table structure for table `mr_fav_docs`
--

CREATE TABLE `mr_fav_docs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `doctor_id` bigint(20) UNSIGNED NOT NULL,
  `mr_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mr_fav_docs`
--

INSERT INTO `mr_fav_docs` (`id`, `created_at`, `updated_at`, `doctor_id`, `mr_id`) VALUES
(1, '2022-10-01 16:26:16', '2022-10-01 16:26:16', 2, 1),
(4, '2022-10-02 14:32:36', '2022-10-02 14:32:36', 3, 1),
(5, '2022-10-07 16:32:35', '2022-10-07 16:32:35', 3, 3);

-- --------------------------------------------------------

--
-- Table structure for table `mr_requests`
--

CREATE TABLE `mr_requests` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `doctor_id` bigint(20) UNSIGNED NOT NULL,
  `mr_id` bigint(20) UNSIGNED NOT NULL,
  `visiting_card` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('Pending','Approved') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mr_requests`
--

INSERT INTO `mr_requests` (`id`, `created_at`, `updated_at`, `doctor_id`, `mr_id`, `visiting_card`, `status`) VALUES
(1, '2022-10-07 16:32:48', '2022-10-07 17:58:55', 1, 3, '1665135168_visiting_card_img.png', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

CREATE TABLE `patients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobileno` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dpass` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ptprofile_img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'null',
  `status` enum('Block','Unblock') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Unblock',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`id`, `name`, `mobileno`, `email`, `password`, `dpass`, `gender`, `ptprofile_img`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Mohini Maurya', '9974224366', 'mohinimaurya026@gmail.com', '$2y$10$pVhNpzKq74GrY0oQUq/ENe5kZq1DWmUmP8ttw3LaNS6uAUD0Xs5Eu', '123456789', 'Female', 'null', 'Unblock', '2022-09-17 09:58:46', '2022-10-06 14:12:55'),
(2, 'Vishv Unjiya', '8264830498', 'vishvunjiya3058822@gmail.com', '$2y$10$ya6cRC2ZNqkCkWuUmP5Kf.uh03RY0ztR/mnYvjSVn4mmKtKL8gNGC', '123456789', 'Male', 'null', 'Unblock', '2022-09-17 23:03:26', '2022-10-02 15:04:57'),
(3, 'vishv', '8264830498', 'vishvunjiya742003@gmail.com', '$2y$10$mT39F41twXUBEJuKjNO5keMeRYgBqK0wMa24GhmCwKG27.2xy2aqi', 'Amienterprise7369', 'Male', 'null', 'Unblock', '2022-09-22 13:06:57', '2022-10-03 12:26:42'),
(4, 'denish', '4563217890', 'varmoradenish1998@gmail.com', '$2y$10$c8RQabsdbP/Lag12X0Ql6OurNDWqArrEtre5/Er.na6do6wV0qcla', '123456789', 'Male', 'null', 'Unblock', '2022-09-22 13:13:56', '2022-09-22 13:13:56'),
(5, 'Bhagirath', '1230456987', 'bhagirathbambhaniya21@gmail.com', '$2y$10$SrNfA2yMjDXjQTIkoz90FOC8VPNEdZwkYJ86kKc4EWaFtQhUfnk4a', '123456789', 'Male', 'null', 'Unblock', '2022-09-23 23:20:07', '2022-09-23 23:20:07');

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

--
-- Dumping data for table `patient_favs`
--

INSERT INTO `patient_favs` (`id`, `created_at`, `updated_at`, `doctor_id`, `patient_id`) VALUES
(1, '2022-09-17 10:01:28', '2022-09-17 10:01:28', 1, 1),
(2, '2022-09-24 00:03:30', '2022-09-24 00:03:30', 3, 5),
(3, '2022-10-02 14:08:53', '2022-10-02 14:08:53', 1, 2);

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

--
-- Dumping data for table `patient_slots`
--

INSERT INTO `patient_slots` (`id`, `created_at`, `updated_at`, `doc_id`, `day`, `slot_timing`, `time`) VALUES
(1, '2022-09-17 15:09:53', '2022-09-17 15:09:53', 1, 'Monday', '10:10', 'Morning'),
(2, '2022-09-17 15:09:53', '2022-09-17 15:09:53', 1, 'Monday', '10:20', 'Morning'),
(3, '2022-09-17 15:09:53', '2022-09-17 15:09:53', 1, 'Monday', '10:30', 'Morning'),
(4, '2022-09-17 15:09:53', '2022-09-17 15:09:53', 1, 'Monday', '10:40', 'Morning'),
(5, '2022-09-17 15:09:53', '2022-09-17 15:09:53', 1, 'Monday', '10:50', 'Morning'),
(6, '2022-09-17 15:09:53', '2022-09-17 15:09:53', 1, 'Monday', '11:00', 'Morning'),
(7, '2022-09-17 15:09:53', '2022-09-17 15:09:53', 1, 'Monday', '11:10', 'Morning'),
(8, '2022-09-17 15:09:53', '2022-09-17 15:09:53', 1, 'Monday', '11:20', 'Morning'),
(9, '2022-09-17 15:09:53', '2022-09-17 15:09:53', 1, 'Monday', '11:30', 'Morning'),
(10, '2022-09-17 15:09:53', '2022-09-17 15:09:53', 1, 'Monday', '11:40', 'Morning'),
(11, '2022-09-17 15:10:29', '2022-09-17 15:10:29', 1, 'Thursday', '13:10', 'Afternoon'),
(12, '2022-09-17 15:10:29', '2022-09-17 15:10:29', 1, 'Thursday', '13:20', 'Afternoon'),
(13, '2022-09-17 15:10:29', '2022-09-17 15:10:29', 1, 'Thursday', '13:30', 'Afternoon'),
(14, '2022-09-17 15:10:29', '2022-09-17 15:10:29', 1, 'Thursday', '13:40', 'Afternoon'),
(15, '2022-09-17 15:10:29', '2022-09-17 15:10:29', 1, 'Thursday', '13:50', 'Afternoon'),
(16, '2022-09-17 15:10:29', '2022-09-17 15:10:29', 1, 'Thursday', '14:00', 'Afternoon'),
(17, '2022-09-17 15:10:29', '2022-09-17 15:10:29', 1, 'Thursday', '14:10', 'Afternoon'),
(18, '2022-09-17 15:10:29', '2022-09-17 15:10:29', 1, 'Thursday', '14:20', 'Afternoon'),
(19, '2022-09-17 15:10:29', '2022-09-17 15:10:29', 1, 'Thursday', '14:30', 'Afternoon'),
(20, '2022-09-17 15:10:29', '2022-09-17 15:10:29', 1, 'Thursday', '14:40', 'Afternoon'),
(21, '2022-09-17 15:10:29', '2022-09-17 15:10:29', 1, 'Thursday', '14:50', 'Afternoon'),
(22, '2022-09-17 15:10:29', '2022-09-17 15:10:29', 1, 'Thursday', '15:00', 'Afternoon'),
(23, '2022-09-17 15:10:29', '2022-09-17 15:10:29', 1, 'Thursday', '15:10', 'Afternoon'),
(24, '2022-09-17 15:10:29', '2022-09-17 15:10:29', 1, 'Thursday', '15:20', 'Afternoon'),
(25, '2022-09-17 15:10:29', '2022-09-17 15:10:29', 1, 'Thursday', '15:30', 'Afternoon'),
(26, '2022-09-18 06:46:07', '2022-09-18 06:46:07', 1, 'Sunday', '14:10', 'Afternoon'),
(27, '2022-09-18 06:46:07', '2022-09-18 06:46:07', 1, 'Sunday', '14:20', 'Afternoon'),
(28, '2022-09-18 06:46:07', '2022-09-18 06:46:07', 1, 'Sunday', '14:30', 'Afternoon'),
(29, '2022-09-18 06:46:07', '2022-09-18 06:46:07', 1, 'Sunday', '14:40', 'Afternoon'),
(30, '2022-09-18 06:46:07', '2022-09-18 06:46:07', 1, 'Sunday', '14:50', 'Afternoon'),
(31, '2022-09-18 06:46:07', '2022-09-18 06:46:07', 1, 'Sunday', '15:00', 'Afternoon'),
(32, '2022-09-18 06:46:07', '2022-09-18 06:46:07', 1, 'Sunday', '15:10', 'Afternoon'),
(33, '2022-09-19 05:44:13', '2022-09-19 05:44:13', 2, 'Monday', '13:10', 'Afternoon'),
(34, '2022-09-19 05:44:13', '2022-09-19 05:44:13', 2, 'Monday', '13:20', 'Afternoon'),
(35, '2022-09-19 05:44:13', '2022-09-19 05:44:13', 2, 'Monday', '13:30', 'Afternoon'),
(36, '2022-09-19 05:44:13', '2022-09-19 05:44:13', 2, 'Monday', '13:40', 'Afternoon'),
(37, '2022-09-19 05:44:13', '2022-09-19 05:44:13', 2, 'Monday', '13:50', 'Afternoon'),
(38, '2022-09-19 05:44:13', '2022-09-19 05:44:13', 2, 'Monday', '14:00', 'Afternoon'),
(39, '2022-09-19 05:44:13', '2022-09-19 05:44:13', 2, 'Monday', '14:10', 'Afternoon'),
(40, '2022-09-19 05:44:13', '2022-09-19 05:44:13', 2, 'Monday', '14:20', 'Afternoon'),
(41, '2022-09-19 05:44:13', '2022-09-19 05:44:13', 2, 'Monday', '14:30', 'Afternoon'),
(42, '2022-09-19 05:44:13', '2022-09-19 05:44:13', 2, 'Monday', '14:40', 'Afternoon'),
(43, '2022-09-19 05:44:13', '2022-09-19 05:44:13', 2, 'Monday', '14:50', 'Afternoon'),
(44, '2022-09-19 05:44:13', '2022-09-19 05:44:13', 2, 'Monday', '15:00', 'Afternoon'),
(45, '2022-09-19 05:44:13', '2022-09-19 05:44:13', 2, 'Monday', '15:10', 'Afternoon'),
(46, '2022-09-19 05:44:13', '2022-09-19 05:44:13', 2, 'Monday', '15:20', 'Afternoon'),
(47, '2022-09-19 05:44:13', '2022-09-19 05:44:13', 2, 'Monday', '15:30', 'Afternoon'),
(48, '2022-09-22 09:43:59', '2022-09-22 09:43:59', 2, 'Thursday', '15:50', 'Afternoon'),
(49, '2022-09-22 09:43:59', '2022-09-22 09:43:59', 2, 'Thursday', '16:00', 'Afternoon'),
(50, '2022-09-22 09:43:59', '2022-09-22 09:43:59', 2, 'Thursday', '16:10', 'Afternoon'),
(51, '2022-09-22 09:43:59', '2022-09-22 09:43:59', 2, 'Thursday', '16:20', 'Afternoon'),
(52, '2022-09-22 09:43:59', '2022-09-22 09:43:59', 2, 'Thursday', '16:30', 'Afternoon'),
(53, '2022-09-22 11:14:18', '2022-09-22 11:14:18', 3, 'Thursday', '17:00', 'Evening'),
(54, '2022-09-22 11:14:18', '2022-09-22 11:14:18', 3, 'Thursday', '17:10', 'Evening'),
(55, '2022-09-22 11:14:18', '2022-09-22 11:14:18', 3, 'Thursday', '17:20', 'Evening'),
(56, '2022-09-22 11:14:18', '2022-09-22 11:14:18', 3, 'Thursday', '17:30', 'Evening'),
(57, '2022-09-22 11:14:18', '2022-09-22 11:14:18', 3, 'Thursday', '17:40', 'Evening'),
(58, '2022-09-23 12:56:35', '2022-09-23 12:56:35', 2, 'Sunday', '18:35', 'Evening'),
(59, '2022-09-23 13:07:34', '2022-09-23 13:07:34', 2, 'Monday', '08:10', 'Morning'),
(60, '2022-09-23 13:07:34', '2022-09-23 13:07:34', 2, 'Monday', '08:20', 'Morning'),
(61, '2022-09-23 13:07:34', '2022-09-23 13:07:34', 2, 'Monday', '08:30', 'Morning'),
(62, '2022-09-23 13:07:34', '2022-09-23 13:07:34', 2, 'Monday', '08:40', 'Morning'),
(63, '2022-09-23 13:07:34', '2022-09-23 13:07:34', 2, 'Monday', '08:50', 'Morning'),
(64, '2022-09-23 13:11:10', '2022-09-23 13:11:10', 2, 'Friday', '20:55', 'Afternoon'),
(65, '2022-09-23 13:11:10', '2022-09-23 13:11:10', 2, 'Friday', '21:10', 'Afternoon'),
(66, '2022-09-23 13:11:10', '2022-09-23 13:11:10', 2, 'Friday', '21:25', 'Afternoon'),
(67, '2022-09-23 13:11:10', '2022-09-23 13:11:10', 2, 'Friday', '21:40', 'Afternoon'),
(68, '2022-09-23 13:11:10', '2022-09-23 13:11:10', 2, 'Friday', '21:55', 'Afternoon'),
(69, '2022-09-23 13:18:31', '2022-09-23 13:18:31', 2, 'Monday', '09:30', 'Morning'),
(70, '2022-09-23 13:18:31', '2022-09-23 13:18:31', 2, 'Monday', '09:40', 'Morning'),
(71, '2022-09-23 13:18:31', '2022-09-23 13:18:31', 2, 'Monday', '09:50', 'Morning'),
(72, '2022-09-23 13:18:31', '2022-09-23 13:18:31', 2, 'Monday', '10:00', 'Morning'),
(73, '2022-09-23 13:18:31', '2022-09-23 13:18:31', 2, 'Monday', '10:10', 'Morning'),
(74, '2022-09-24 04:54:59', '2022-09-24 04:54:59', 3, 'Saturday', '10:40', 'Morning'),
(75, '2022-09-24 04:54:59', '2022-09-24 04:54:59', 3, 'Saturday', '10:50', 'Morning'),
(76, '2022-09-24 04:54:59', '2022-09-24 04:54:59', 3, 'Saturday', '11:00', 'Morning'),
(77, '2022-09-24 04:54:59', '2022-09-24 04:54:59', 3, 'Saturday', '11:10', 'Morning'),
(78, '2022-09-24 04:54:59', '2022-09-24 04:54:59', 3, 'Saturday', '11:20', 'Morning'),
(79, '2022-09-24 05:32:55', '2022-09-24 05:32:55', 3, 'Saturday', '13:10', 'Afternoon'),
(80, '2022-09-24 05:32:55', '2022-09-24 05:32:55', 3, 'Saturday', '13:20', 'Afternoon'),
(81, '2022-09-24 05:32:55', '2022-09-24 05:32:55', 3, 'Saturday', '13:30', 'Afternoon'),
(82, '2022-09-24 05:32:55', '2022-09-24 05:32:55', 3, 'Saturday', '13:40', 'Afternoon'),
(83, '2022-09-24 05:32:55', '2022-09-24 05:32:55', 3, 'Saturday', '13:50', 'Afternoon');

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
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `prescriptions`
--

CREATE TABLE `prescriptions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `appoinment_id` bigint(20) UNSIGNED NOT NULL,
  `patient_id` bigint(20) UNSIGNED NOT NULL,
  `medicine_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `medicine_Quantity` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `medicine_take_Days` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `medicine_take_Time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `medicine_dose` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('Pending','Approved') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `prescriptions`
--

INSERT INTO `prescriptions` (`id`, `created_at`, `updated_at`, `appoinment_id`, `patient_id`, `medicine_name`, `medicine_Quantity`, `medicine_take_Days`, `medicine_take_Time`, `medicine_dose`, `status`) VALUES
(3, '2022-09-18 01:57:12', '2022-09-18 01:57:27', 4, 2, 'Paracetamol', '3', '3', 'Morning', 'Monday', 'Approved'),
(4, '2022-09-19 01:14:59', '2022-09-19 01:15:04', 5, 1, 'Paracetamol', '5', '5', 'Morning,Afternoon,Night', 'Monday', 'Approved'),
(5, '2022-09-24 00:56:05', '2022-09-24 00:56:09', 10, 5, 'dolo', '2', '1', 'Morning,Night', 'Monday', 'Approved'),
(6, '2022-10-06 13:56:37', '2022-10-06 13:56:39', 11, 2, 'dolo', '4', '2', 'Morning,Evening', 'Monday', 'Approved');

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

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `created_at`, `updated_at`, `doctor_id`, `title`) VALUES
(1, '2022-09-17 09:36:41', '2022-09-17 09:36:41', 1, 'bridges'),
(2, '2022-09-17 09:37:03', '2022-09-17 09:37:03', 1, 'root canals');

-- --------------------------------------------------------

--
-- Table structure for table `specialists`
--

CREATE TABLE `specialists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `specialists`
--

INSERT INTO `specialists` (`id`, `name`, `img`, `created_at`, `updated_at`) VALUES
(1, 'Dentist', '1663425025_img.png', '2022-09-17 09:00:25', '2022-09-17 09:00:25'),
(2, 'Urology', '1663425083_img.png', '2022-09-17 09:01:23', '2022-09-17 09:01:23'),
(3, 'Cardiologist', '1663425102_img.png', '2022-09-17 09:01:42', '2022-09-17 09:01:42'),
(4, 'Orthopedic', '1663425121_img.png', '2022-09-17 09:02:01', '2022-09-17 09:02:01'),
(5, 'Neurology', '1663425142_img.png', '2022-09-17 09:02:22', '2022-09-17 09:02:22');

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
(1, 'Gujarat', '2022-09-17 08:55:28', '2022-09-17 08:55:28'),
(2, 'Maharashtra', '2022-09-17 08:56:15', '2022-09-17 08:56:15'),
(4, 'Uttar Pradesh', '2022-09-17 08:57:39', '2022-09-17 08:57:39');

-- --------------------------------------------------------

--
-- Table structure for table `stockiests`
--

CREATE TABLE `stockiests` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `company_id` bigint(20) UNSIGNED NOT NULL,
  `manager_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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

INSERT INTO `stockiests` (`id`, `created_at`, `updated_at`, `company_id`, `manager_id`, `name`, `mobile_no`, `state`, `city`, `area`, `address`, `pincode`, `status`) VALUES
(1, '2022-09-24 06:34:01', '2022-09-24 06:34:01', 1, 1, 'sfncksj,', '', '1', '1', '1', 'dvzdegfv', '362514', 'Unblock'),
(2, '2022-09-24 06:38:24', '2022-09-24 06:38:24', 2, 2, 'xyz', '', '1', '1', '1', 'sefcawe', '251436', 'Unblock'),
(3, '2022-09-24 06:41:14', '2022-09-24 06:41:14', 1, 1, 'ab kya bolu mai', '', '1', '1', '1', 'as you wish', '102030', 'Unblock'),
(4, '2022-09-24 06:45:11', '2022-09-24 06:45:11', 2, 2, 'rajesh', '', '2', '2', '3', 'ctm', '456987', 'Unblock'),
(5, '2022-09-24 06:49:16', '2022-09-24 06:49:16', 2, 2, 'Ayushi Maurya', '', '1', '1', '1', 'Oppo. Railway Station , Maninagar , Ahmedabad', '362514', 'Unblock'),
(6, '2022-10-03 17:15:14', '2022-10-03 17:15:14', 1, NULL, 'denish', '5466523450', '1', '1', '4', 'bgxsfghnsxthsxthg', '142536', 'Unblock'),
(7, '2022-10-03 17:20:06', '2022-10-03 17:20:06', 5, 3, 'vishv', '1425367890', '1', '1', '1', 'fgbxnftgjhsxth', '748596', 'Unblock'),
(8, '2022-10-04 13:55:44', '2022-10-04 13:55:44', 5, NULL, 'abcd', '1717527571', '1', '1', '4', 'gfnbftgh', '125478', 'Unblock'),
(9, '2022-10-06 13:49:26', '2022-10-06 13:49:26', 10, NULL, 'denish', '1425367890', '1', '1', '4', '777888999444555666111222333', '142536', 'Unblock');

-- --------------------------------------------------------

--
-- Table structure for table `visitor_slots`
--

CREATE TABLE `visitor_slots` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `doc_id` bigint(20) UNSIGNED NOT NULL,
  `visitor_slot` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `end_time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mr_allowed` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `manager_allowed` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_allowed` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `day` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('Enable','Disable') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Disable'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `visitor_slots`
--

INSERT INTO `visitor_slots` (`id`, `created_at`, `updated_at`, `doc_id`, `visitor_slot`, `start_time`, `end_time`, `mr_allowed`, `manager_allowed`, `company_allowed`, `day`, `status`) VALUES
(2, '2022-09-21 11:58:55', '2022-09-21 11:58:55', 1, '1', '07:00', '12:00', '3', '5', '5', 'Wednesday', 'Enable'),
(3, '2022-09-21 11:59:36', '2022-09-21 11:59:36', 1, '2', '16:00', '19:00', '5', '5', '3', 'Friday', 'Enable'),
(4, '2022-09-21 13:30:44', '2022-09-21 13:30:44', 2, '1', '11:30', '12:30', '3', '3', '5', 'Wednesday', 'Enable'),
(6, '2022-09-21 14:33:52', '2022-09-21 14:33:52', 2, '2', '02:33', '03:33', '2', '2', '2', 'Wednesday', 'Enable'),
(7, '2022-09-23 23:50:20', '2022-09-23 23:50:20', 3, '1', '10:50', '11:50', '2', '2', '2', 'Saturday', 'Enable'),
(8, '2022-09-23 23:51:43', '2022-09-23 23:51:43', 2, '1', '10:50', '11:50', '2', '1', '2', 'Saturday', 'Enable'),
(9, '2022-10-03 16:33:32', '2022-10-03 16:33:32', 3, '1', '02:33', '08:33', '3', '4', '5', 'Monday', 'Disable'),
(11, '2022-10-07 14:55:43', '2022-10-07 14:55:43', 3, '1', '16:00', '20:00', '3', '4', '2', 'Friday', 'Disable'),
(12, '2022-10-11 13:20:20', '2022-10-11 13:20:20', 3, '1', '13:00', '17:00', '3', '4', '5', 'Tuesday', 'Disable'),
(13, '2022-10-11 13:20:52', '2022-10-11 13:20:52', 3, '2', '18:00', '21:00', '2', '5', '3', 'Wednesday', 'Disable'),
(14, '2022-10-11 15:23:30', '2022-10-11 15:23:30', 3, '1', '07:00', '12:00', '3', '3', '2', 'Wednesday', 'Disable'),
(15, '2022-10-11 15:26:10', '2022-10-11 15:26:10', 1, '2', '16:00', '19:00', '5', '3', '2', 'Wednesday', 'Disable');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `appointments_doc_id_foreign` (`doc_id`),
  ADD KEY `appointments_patient_id_foreign` (`patient_id`),
  ADD KEY `appointments_slot_id_foreign` (`slot_id`);

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
-- Indexes for table `company_appointments`
--
ALTER TABLE `company_appointments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `company_appointments_doctor_id_foreign` (`doctor_id`),
  ADD KEY `company_appointments_slot_id_foreign` (`slot_id`),
  ADD KEY `company_appointments_company_id_foreign` (`company_id`);

--
-- Indexes for table `company_fav_docs`
--
ALTER TABLE `company_fav_docs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `company_fav_docs_doctor_id_foreign` (`doctor_id`),
  ADD KEY `company_fav_docs_company_id_foreign` (`company_id`);

--
-- Indexes for table `company_requests`
--
ALTER TABLE `company_requests`
  ADD PRIMARY KEY (`id`),
  ADD KEY `company_requests_doctor_id_foreign` (`doctor_id`),
  ADD KEY `company_requests_company_id_foreign` (`company_id`);

--
-- Indexes for table `company_slots`
--
ALTER TABLE `company_slots`
  ADD PRIMARY KEY (`id`),
  ADD KEY `company_slots_doc_id_foreign` (`doc_id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cruds`
--
ALTER TABLE `cruds`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `diagnoses`
--
ALTER TABLE `diagnoses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `diagnoses_appoinment_id_foreign` (`appoinment_id`),
  ADD KEY `diagnoses_patient_id_foreign` (`patient_id`);

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
-- Indexes for table `doc_fav_patients`
--
ALTER TABLE `doc_fav_patients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `doc_fav_patients_doctor_id_foreign` (`doctor_id`),
  ADD KEY `doc_fav_patients_patient_id_foreign` (`patient_id`);

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
-- Indexes for table `manager_appointments`
--
ALTER TABLE `manager_appointments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `manager_appointments_doctor_id_foreign` (`doctor_id`),
  ADD KEY `manager_appointments_manager_id_foreign` (`manager_id`),
  ADD KEY `manager_appointments_slot_id_foreign` (`slot_id`);

--
-- Indexes for table `manager_fav_docs`
--
ALTER TABLE `manager_fav_docs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `manager_fav_docs_doctor_id_foreign` (`doctor_id`),
  ADD KEY `manager_fav_docs_manager_id_foreign` (`manager_id`);

--
-- Indexes for table `manager_requests`
--
ALTER TABLE `manager_requests`
  ADD PRIMARY KEY (`id`),
  ADD KEY `manager_requests_doctor_id_foreign` (`doctor_id`),
  ADD KEY `manager_requests_manager_id_foreign` (`manager_id`);

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
-- Indexes for table `mr_appointments`
--
ALTER TABLE `mr_appointments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `mr_appointments_doctor_id_foreign` (`doctor_id`),
  ADD KEY `mr_appointments_mr_id_foreign` (`mr_id`),
  ADD KEY `mr_appointments_slot_id_foreign` (`slot_id`);

--
-- Indexes for table `mr_fav_docs`
--
ALTER TABLE `mr_fav_docs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `mr_fav_docs_doctor_id_foreign` (`doctor_id`),
  ADD KEY `mr_fav_docs_mr_id_foreign` (`mr_id`);

--
-- Indexes for table `mr_requests`
--
ALTER TABLE `mr_requests`
  ADD PRIMARY KEY (`id`),
  ADD KEY `mr_requests_doctor_id_foreign` (`doctor_id`),
  ADD KEY `mr_requests_mr_id_foreign` (`mr_id`);

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
-- Indexes for table `prescriptions`
--
ALTER TABLE `prescriptions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `prescriptions_appoinment_id_foreign` (`appoinment_id`),
  ADD KEY `prescriptions_patient_id_foreign` (`patient_id`);

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
-- Indexes for table `visitor_slots`
--
ALTER TABLE `visitor_slots`
  ADD PRIMARY KEY (`id`),
  ADD KEY `visitor_slots_doc_id_foreign` (`doc_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `areas`
--
ALTER TABLE `areas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `company_appointments`
--
ALTER TABLE `company_appointments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `company_fav_docs`
--
ALTER TABLE `company_fav_docs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `company_requests`
--
ALTER TABLE `company_requests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `company_slots`
--
ALTER TABLE `company_slots`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cruds`
--
ALTER TABLE `cruds`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `diagnoses`
--
ALTER TABLE `diagnoses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `divisions`
--
ALTER TABLE `divisions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `doc_fav_medicines`
--
ALTER TABLE `doc_fav_medicines`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `doc_fav_patients`
--
ALTER TABLE `doc_fav_patients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `drspecialities`
--
ALTER TABLE `drspecialities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `hospital_daytimes`
--
ALTER TABLE `hospital_daytimes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `managers`
--
ALTER TABLE `managers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `manager_appointments`
--
ALTER TABLE `manager_appointments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `manager_fav_docs`
--
ALTER TABLE `manager_fav_docs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `manager_requests`
--
ALTER TABLE `manager_requests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `medicines`
--
ALTER TABLE `medicines`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT for table `mrs`
--
ALTER TABLE `mrs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `mr_appointments`
--
ALTER TABLE `mr_appointments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `mr_fav_docs`
--
ALTER TABLE `mr_fav_docs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `mr_requests`
--
ALTER TABLE `mr_requests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `patients`
--
ALTER TABLE `patients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `patient_favs`
--
ALTER TABLE `patient_favs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `patient_slots`
--
ALTER TABLE `patient_slots`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `prescriptions`
--
ALTER TABLE `prescriptions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `specialists`
--
ALTER TABLE `specialists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `states`
--
ALTER TABLE `states`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `stockiests`
--
ALTER TABLE `stockiests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `visitor_slots`
--
ALTER TABLE `visitor_slots`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `appointments`
--
ALTER TABLE `appointments`
  ADD CONSTRAINT `appointments_doc_id_foreign` FOREIGN KEY (`doc_id`) REFERENCES `doctors` (`id`),
  ADD CONSTRAINT `appointments_patient_id_foreign` FOREIGN KEY (`patient_id`) REFERENCES `patients` (`id`),
  ADD CONSTRAINT `appointments_slot_id_foreign` FOREIGN KEY (`slot_id`) REFERENCES `patient_slots` (`id`);

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
-- Constraints for table `company_appointments`
--
ALTER TABLE `company_appointments`
  ADD CONSTRAINT `company_appointments_company_id_foreign` FOREIGN KEY (`company_id`) REFERENCES `companies` (`id`),
  ADD CONSTRAINT `company_appointments_doctor_id_foreign` FOREIGN KEY (`doctor_id`) REFERENCES `doctors` (`id`),
  ADD CONSTRAINT `company_appointments_slot_id_foreign` FOREIGN KEY (`slot_id`) REFERENCES `visitor_slots` (`id`);

--
-- Constraints for table `company_fav_docs`
--
ALTER TABLE `company_fav_docs`
  ADD CONSTRAINT `company_fav_docs_company_id_foreign` FOREIGN KEY (`company_id`) REFERENCES `companies` (`id`),
  ADD CONSTRAINT `company_fav_docs_doctor_id_foreign` FOREIGN KEY (`doctor_id`) REFERENCES `doctors` (`id`);

--
-- Constraints for table `company_requests`
--
ALTER TABLE `company_requests`
  ADD CONSTRAINT `company_requests_company_id_foreign` FOREIGN KEY (`company_id`) REFERENCES `companies` (`id`),
  ADD CONSTRAINT `company_requests_doctor_id_foreign` FOREIGN KEY (`doctor_id`) REFERENCES `doctors` (`id`);

--
-- Constraints for table `company_slots`
--
ALTER TABLE `company_slots`
  ADD CONSTRAINT `company_slots_doc_id_foreign` FOREIGN KEY (`doc_id`) REFERENCES `doctors` (`id`);

--
-- Constraints for table `diagnoses`
--
ALTER TABLE `diagnoses`
  ADD CONSTRAINT `diagnoses_appoinment_id_foreign` FOREIGN KEY (`appoinment_id`) REFERENCES `appointments` (`id`),
  ADD CONSTRAINT `diagnoses_patient_id_foreign` FOREIGN KEY (`patient_id`) REFERENCES `patients` (`id`);

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
-- Constraints for table `doc_fav_patients`
--
ALTER TABLE `doc_fav_patients`
  ADD CONSTRAINT `doc_fav_patients_doctor_id_foreign` FOREIGN KEY (`doctor_id`) REFERENCES `doctors` (`id`),
  ADD CONSTRAINT `doc_fav_patients_patient_id_foreign` FOREIGN KEY (`patient_id`) REFERENCES `patients` (`id`);

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
-- Constraints for table `manager_appointments`
--
ALTER TABLE `manager_appointments`
  ADD CONSTRAINT `manager_appointments_doctor_id_foreign` FOREIGN KEY (`doctor_id`) REFERENCES `doctors` (`id`),
  ADD CONSTRAINT `manager_appointments_manager_id_foreign` FOREIGN KEY (`manager_id`) REFERENCES `managers` (`id`),
  ADD CONSTRAINT `manager_appointments_slot_id_foreign` FOREIGN KEY (`slot_id`) REFERENCES `visitor_slots` (`id`);

--
-- Constraints for table `manager_fav_docs`
--
ALTER TABLE `manager_fav_docs`
  ADD CONSTRAINT `manager_fav_docs_doctor_id_foreign` FOREIGN KEY (`doctor_id`) REFERENCES `doctors` (`id`),
  ADD CONSTRAINT `manager_fav_docs_manager_id_foreign` FOREIGN KEY (`manager_id`) REFERENCES `managers` (`id`);

--
-- Constraints for table `manager_requests`
--
ALTER TABLE `manager_requests`
  ADD CONSTRAINT `manager_requests_doctor_id_foreign` FOREIGN KEY (`doctor_id`) REFERENCES `doctors` (`id`),
  ADD CONSTRAINT `manager_requests_manager_id_foreign` FOREIGN KEY (`manager_id`) REFERENCES `managers` (`id`);

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
-- Constraints for table `mr_appointments`
--
ALTER TABLE `mr_appointments`
  ADD CONSTRAINT `mr_appointments_doctor_id_foreign` FOREIGN KEY (`doctor_id`) REFERENCES `doctors` (`id`),
  ADD CONSTRAINT `mr_appointments_mr_id_foreign` FOREIGN KEY (`mr_id`) REFERENCES `mrs` (`id`),
  ADD CONSTRAINT `mr_appointments_slot_id_foreign` FOREIGN KEY (`slot_id`) REFERENCES `visitor_slots` (`id`);

--
-- Constraints for table `mr_fav_docs`
--
ALTER TABLE `mr_fav_docs`
  ADD CONSTRAINT `mr_fav_docs_doctor_id_foreign` FOREIGN KEY (`doctor_id`) REFERENCES `doctors` (`id`),
  ADD CONSTRAINT `mr_fav_docs_mr_id_foreign` FOREIGN KEY (`mr_id`) REFERENCES `mrs` (`id`);

--
-- Constraints for table `mr_requests`
--
ALTER TABLE `mr_requests`
  ADD CONSTRAINT `mr_requests_doctor_id_foreign` FOREIGN KEY (`doctor_id`) REFERENCES `doctors` (`id`),
  ADD CONSTRAINT `mr_requests_mr_id_foreign` FOREIGN KEY (`mr_id`) REFERENCES `mrs` (`id`);

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
-- Constraints for table `prescriptions`
--
ALTER TABLE `prescriptions`
  ADD CONSTRAINT `prescriptions_appoinment_id_foreign` FOREIGN KEY (`appoinment_id`) REFERENCES `appointments` (`id`),
  ADD CONSTRAINT `prescriptions_patient_id_foreign` FOREIGN KEY (`patient_id`) REFERENCES `patients` (`id`);

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

--
-- Constraints for table `visitor_slots`
--
ALTER TABLE `visitor_slots`
  ADD CONSTRAINT `visitor_slots_doc_id_foreign` FOREIGN KEY (`doc_id`) REFERENCES `doctors` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
