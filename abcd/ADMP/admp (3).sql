-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 21, 2022 at 02:47 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.0

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
(1, 'Admin', 'admin@gmail.com', '$2y$10$Y6dV0Nr/xvVGeZQaiX6fFugGXdBjiRdeekzPJ/oM.NoEdvQwR2pbe', '123456789', '', '2022-09-17 14:23:32', '2022-09-17 09:46:17');

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
  `comment` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `appointment_status` enum('Approved','Pending') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Pending',
  `time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`id`, `created_at`, `updated_at`, `doc_id`, `patient_id`, `slot_id`, `report_img`, `date`, `comment`, `appointment_status`, `time`) VALUES
(4, '2022-09-18 01:55:26', '2022-09-18 02:11:36', 1, 2, 31, '1663486896434355report_img.png', '2022-09-18', 'hii', 'Approved', '15:00'),
(5, '2022-09-19 00:20:04', '2022-09-19 01:15:04', 2, 1, 38, NULL, '2022-09-19', 'hii', 'Approved', '14:00'),
(6, '2022-09-19 01:27:26', '2022-09-19 01:27:26', 2, 2, 35, NULL, '2022-09-19', 'hii', 'Pending', '13:30');

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
(5, '2022-09-17 08:59:43', '2022-09-17 08:59:43', 3, 'Jansa');

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
(3, '2022-09-17 08:57:56', '2022-09-17 08:57:56', 4, 'Varanasi');

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
  `status` enum('Available','Not Available') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Available',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`id`, `company_name`, `first_name`, `last_name`, `email`, `password`, `dpass`, `cprofile_img`, `visiting_card`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Hi-Tech Pvt.Ltd.', 'Anand', 'Maurya', 'anandmaurya@gmail.com', '$2y$10$vZ4zdCC1E3XPR5JH6x1zKOwp7RRmQqz7W9TCSC6dyBWXQUNI2crHO', '123456789', '1663426509_cprofile_img.jpg', '1663426509_visiting_card.png', 'Available', '2022-09-17 09:25:09', '2022-09-17 09:25:09');

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
  `slot_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `company_appointments`
--

INSERT INTO `company_appointments` (`id`, `created_at`, `updated_at`, `doctor_id`, `company_id`, `slot_id`) VALUES
(4, '2022-09-21 18:35:11', '2022-09-21 18:35:11', 2, 1, 4),
(5, '2022-09-21 18:35:25', '2022-09-21 18:35:25', 1, 1, 2);

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
(10, '2022-09-21 13:30:50', '2022-09-21 13:30:50', 2, 1);

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
(4, '2022-09-19 01:14:26', '2022-09-19 01:15:04', 5, 1, 'accident case\r\ninternal injury', 'disinfect', 'take rest', 'X-Ray', 'Approved');

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
(2, '2022-09-17 09:27:08', '2022-09-17 09:27:08', 1, 'B');

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
  `visit_pharma_per` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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
  `about` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` bigint(20) UNSIGNED NOT NULL,
  `city` bigint(20) UNSIGNED NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pincode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `google_map` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `day` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hospital_morning_to` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Null',
  `hospital_morning_from` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Null',
  `hospital_afternoon_to` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Null',
  `hospital_afternoon_from` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Null',
  `hospital_evening_to` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Null',
  `hospital_evening_from` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Null',
  `consulting_fees` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `followup_fees` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notification` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `doctor_status` enum('Block','Unblock') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Unblock',
  `hospital_status` enum('Available','Not Available') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Available',
  `visitor_status` enum('Available','Not Available') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Available',
  `area` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`id`, `gender`, `first_name`, `last_name`, `created_at`, `updated_at`, `specialist_id`, `short_tittle`, `email`, `password`, `visit_pharma_per`, `dpass`, `dob`, `doa`, `profile_img`, `liacence_no`, `education`, `experience`, `hospital_name`, `hospital_img`, `dr_mobile`, `office_no`, `visit_card`, `about`, `state`, `city`, `address`, `pincode`, `google_map`, `day`, `hospital_morning_to`, `hospital_morning_from`, `hospital_afternoon_to`, `hospital_afternoon_from`, `hospital_evening_to`, `hospital_evening_from`, `consulting_fees`, `followup_fees`, `notification`, `doctor_status`, `hospital_status`, `visitor_status`, `area`) VALUES
(1, 'Female', 'Ayushi', 'Maurya', '2022-09-17 09:14:42', '2022-09-18 03:22:55', 1, 'Dentist', 'mohini.maurya6201@gmail.com', '$2y$10$nI08ZiCZjymCNRncBdLDnOAPM8fDpUoVBWAYr4ioady/O3NZfbIZO', '1-1', '123456789', '1995-08-15', '2021-02-06', '1663425882_profile_img.jpg', '32564789', 'B.D.S', '3 year', 'Sanjivni Hospital Care', '1663489120196177hospital_img.jpg,1663489120654347hospital_img.jpg,1663489120297214hospital_img.jpg,1663489120752963hospital_img.jpg', '7896541230', '25147896', '1663425882_visit_card_img.png', 'I\'m a Good Doctor', 1, 1, 'Oppo. Railway Station , Maninagar , Ahmedabad', '362514', 'https://goo.gl/maps/eGSNHMvABexPTpn7A', 'Monday,Thursday', '09:00', '12:00', '13:00', '15:00', '17:00', '19:00', '5000', '2500', 'If any emergency then just call me', 'Unblock', 'Available', 'Available', 1),
(2, 'Female', 'Ritika', 'Maurya', '2022-09-17 09:22:41', '2022-09-19 00:13:31', 2, 'Urology', 'ritikamaurya@gmail.com', '$2y$10$gD4VUhkBbZEODsTtLWtdNOoD0U5i56Q5205CCihBwR0pKSoQs1HLW', NULL, '123456789', '1990-04-15', NULL, '1663426361_profile_img.jpg', '32547896', 'MS/DNB', '5 year', 'City Hospital', '1663426361365723hospital_img.jpg,1663426361728485hospital_img.jpg,1663426361292188hospital_img.jpg', '3625147890', '32561478', '1663426361_visit_card_img.jpg', 'I\'m a good doctor', 1, 1, 'Oppo. Scien city , Bhadaj circle Ahmedabad', '251463', 'https://goo.gl/maps/nMFgi66itgJXwrh4A', 'Monday,Wednesday,Friday,Sunday', '08:30', '11:30', '14:30', '17:30', '20:00', '21:00', '7000', '3500', 'If any Emergency inform me', 'Unblock', 'Available', 'Available', 4);

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
(2, '2022-09-19 01:15:04', '2022-09-19 01:15:04', 2, 1);

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
(1, '2022-09-17 09:49:54', '2022-09-17 09:52:17', 1, 1, 'Riya', 'Reena', 'Valekar', 'reenavalekar@gmail.com', '$2y$10$xDz82hbblgBE.PDE/qoMtuvExZu94gQtexWI6s50K4RzH/tsBaVTa', '123456789', '1663427994_mprofile_img.jpg', '1663427994_visiting_card.jpg', 'Unblock');

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
(2, '2022-09-17 09:28:02', '2022-09-17 09:28:02', 1, 'null', 'aspirin');

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
(64, '2022_09_21_091716_add_columns_to_company_appointments_table', 16);

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
(1, '2022-09-17 09:56:17', '2022-09-17 09:56:17', 1, 1, 'Technostacks Pvt.Ltd.', 'Kinjal', 'Patel', 'kinjalpatel@gmail.com', '$2y$10$YEeMh2qdiJIPcbHgh7KdxO9wPJERiwV.E8MUPVDH.33nwU956yDvC', '123456789', '1663428377_mrprofile_img.jpg', '1663428377_visiting_card.png', 'Unblock');

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
(1, 'Mohini Maurya', '9974224366', 'mohinimaurya026@gmail.com', '$2y$10$pVhNpzKq74GrY0oQUq/ENe5kZq1DWmUmP8ttw3LaNS6uAUD0Xs5Eu', '123456789', 'Female', 'null', 'Unblock', '2022-09-17 09:58:46', '2022-09-17 10:00:53'),
(2, 'Vishv Unjiya', '8264830498', 'vishvunjiya3058822@gmail.com', '$2y$10$I9cq9HsiaqhYGPHW88A3TOgDFHPBOWVoj9Mw9Z7dnWTgXF5hyiF8G', '123456789', 'Male', 'null', 'Unblock', '2022-09-17 23:03:26', '2022-09-17 23:03:26');

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
(1, '2022-09-17 10:01:28', '2022-09-17 10:01:28', 1, 1);

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
(47, '2022-09-19 05:44:13', '2022-09-19 05:44:13', 2, 'Monday', '15:30', 'Afternoon');

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
(4, '2022-09-19 01:14:59', '2022-09-19 01:15:04', 5, 1, 'Paracetamol', '5', '5', 'Morning,Afternoon,Night', 'Monday', 'Approved');

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
  `manager_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `area` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pincode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('Block','Unblock') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Unblock'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(2, '2022-09-21 11:58:55', '2022-09-21 11:58:55', 1, '1', '07:00', '12:00', '3', '5', '5', 'Wednesday', 'Disable'),
(3, '2022-09-21 11:59:36', '2022-09-21 11:59:36', 1, '2', '16:00', '19:00', '5', '5', '3', 'Friday', 'Disable'),
(4, '2022-09-21 13:30:44', '2022-09-21 13:30:44', 2, '1', '11:30', '12:30', '3', '3', '5', 'Wednesday', 'Disable'),
(6, '2022-09-21 14:33:52', '2022-09-21 14:33:52', 2, '2', '02:33', '03:33', '2', '2', '2', 'Wednesday', 'Disable');

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `areas`
--
ALTER TABLE `areas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `company_appointments`
--
ALTER TABLE `company_appointments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `company_fav_docs`
--
ALTER TABLE `company_fav_docs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `company_slots`
--
ALTER TABLE `company_slots`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cruds`
--
ALTER TABLE `cruds`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `diagnoses`
--
ALTER TABLE `diagnoses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `divisions`
--
ALTER TABLE `divisions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `doc_fav_medicines`
--
ALTER TABLE `doc_fav_medicines`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `doc_fav_patients`
--
ALTER TABLE `doc_fav_patients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `medicines`
--
ALTER TABLE `medicines`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `mrs`
--
ALTER TABLE `mrs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `patients`
--
ALTER TABLE `patients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `patient_favs`
--
ALTER TABLE `patient_favs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `patient_slots`
--
ALTER TABLE `patient_slots`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `prescriptions`
--
ALTER TABLE `prescriptions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `states`
--
ALTER TABLE `states`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `stockiests`
--
ALTER TABLE `stockiests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `visitor_slots`
--
ALTER TABLE `visitor_slots`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

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
