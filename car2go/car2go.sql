-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 23, 2022 at 07:30 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `car2go`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Admin_id` int(11) NOT NULL,
  `Profile_img` varchar(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Username` varchar(255) DEFAULT NULL,
  `Password` varchar(255) DEFAULT NULL,
  `Gender` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Mobile_no` varchar(10) NOT NULL,
  `Created_dt` datetime(6) DEFAULT NULL,
  `Updated_dt` datetime(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Admin_id`, `Profile_img`, `Name`, `Username`, `Password`, `Gender`, `Email`, `Mobile_no`, `Created_dt`, `Updated_dt`) VALUES
(1, 'profile.jpg', 'Mohini', 'Mohini1234', '070d695657a515c3ad78aef28533eec3', 'Female', 'mohini1234@gmail.com', '9974224366', NULL, '2022-03-08 21:30:00.000000');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `Booking_id` int(11) NOT NULL,
  `Customer_id` int(11) DEFAULT NULL,
  `Caradv_id` int(11) DEFAULT NULL,
  `Client_id` int(11) DEFAULT NULL,
  `book_date_time` datetime(6) NOT NULL,
  `day_km` varchar(255) NOT NULL,
  `total_amount` varchar(255) NOT NULL,
  `Created_dt` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `caradv`
--

CREATE TABLE `caradv` (
  `Caradv_id` int(11) NOT NULL,
  `Cartype_id` int(11) NOT NULL,
  `Client_id` int(11) NOT NULL,
  `Location_id` int(11) NOT NULL,
  `Car_img` varchar(255) NOT NULL,
  `Car_model` varchar(255) NOT NULL,
  `Car_brand` varchar(255) NOT NULL,
  `Car_no` varchar(255) NOT NULL,
  `Title` varchar(255) NOT NULL,
  `RC_no` varchar(255) NOT NULL,
  `Insurance` varchar(255) NOT NULL,
  `Rent` varchar(255) NOT NULL,
  `Rent_type` varchar(255) NOT NULL,
  `Passenger_cap` varchar(255) NOT NULL,
  `Description` varchar(255) NOT NULL,
  `Car_status` enum('Available','Not available') NOT NULL DEFAULT 'Available',
  `Adv_status` enum('Approved','Not approved') NOT NULL DEFAULT 'Not approved',
  `Created_dt` datetime(6) NOT NULL,
  `Updated_dt` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `caradv`
--

INSERT INTO `caradv` (`Caradv_id`, `Cartype_id`, `Client_id`, `Location_id`, `Car_img`, `Car_model`, `Car_brand`, `Car_no`, `Title`, `RC_no`, `Insurance`, `Rent`, `Rent_type`, `Passenger_cap`, `Description`, `Car_status`, `Adv_status`, `Created_dt`, `Updated_dt`) VALUES
(16, 32, 1, 1, 'intermediate2.jpg', 'Honda City', 'Honda', '656456', 'Intermediate car ', '14552', '', '5421', '', '4', 'Intermediate car  honda city', 'Available', 'Not approved', '2022-03-23 11:11:06.000000', '2022-03-23 11:11:06.000000'),
(17, 31, 1, 3, 'standard5.jpg', 'Audi S8', 'Audi', '5148489', 'Luxury car', '4841', '', '10245', '', '5', 'Luxury car Audi S8', 'Available', 'Not approved', '2022-03-23 11:14:10.000000', '2022-03-23 11:14:10.000000'),
(18, 33, 2, 2, 'economy4.jpg', 'Swift Desire', 'Suzuki', '54845', 'Economy car', '75121', '', '2215', '', '5', 'dfsvksdnfk', 'Available', 'Not approved', '2022-03-23 11:17:06.000000', '2022-03-23 11:17:06.000000');

-- --------------------------------------------------------

--
-- Table structure for table `car_type`
--

CREATE TABLE `car_type` (
  `Cartype_id` int(11) NOT NULL,
  `Car_img` varchar(255) NOT NULL,
  `Car_type` varchar(255) DEFAULT NULL,
  `Description` varchar(255) DEFAULT NULL,
  `Created_dt` datetime(6) DEFAULT NULL,
  `Updated_dt` datetime(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `car_type`
--

INSERT INTO `car_type` (`Cartype_id`, `Car_img`, `Car_type`, `Description`, `Created_dt`, `Updated_dt`) VALUES
(28, 'sedan.jpg', 'SEDAN', 'Sedan Car', '2022-03-23 10:59:28.000000', '2022-03-23 10:59:28.000000'),
(29, 'suv.jpg', 'SUV', 'Suv Car', '2022-03-23 10:59:57.000000', '2022-03-23 10:59:57.000000'),
(30, 'hatchback,jpg.jpg', 'HATCHBACK', 'Hatchback Car', '2022-03-23 11:00:48.000000', '2022-03-23 11:00:48.000000'),
(31, 'luxury.jpg', 'LUXURY', 'Luxury Car', '2022-03-23 11:03:37.000000', '2022-03-23 11:03:37.000000'),
(32, 'intermediate6.jpg', 'INTERMEDIATE', 'Intermediate Car', '2022-03-23 11:04:16.000000', '2022-03-23 11:04:16.000000'),
(33, 'economy.jpg', 'ECONOMY', 'Economy Car', '2022-03-23 11:04:46.000000', '2022-03-23 11:04:46.000000'),
(34, 'standard.jpg', 'STANDARD', 'Standard Car', '2022-03-23 11:05:19.000000', '2022-03-23 11:05:19.000000');

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `Client_id` int(11) NOT NULL,
  `Profile_img` varchar(255) NOT NULL,
  `First_name` varchar(255) NOT NULL,
  `Last_name` varchar(255) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `Pin_code` varchar(255) NOT NULL,
  `City` varchar(255) NOT NULL,
  `License` varchar(255) NOT NULL,
  `Adhaarcard` varchar(255) NOT NULL,
  `Mobile_no` int(11) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `status` enum('Block','Unblock') NOT NULL DEFAULT 'Unblock',
  `Created_dt` datetime(6) NOT NULL,
  `Updated_dt` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`Client_id`, `Profile_img`, `First_name`, `Last_name`, `Username`, `Email`, `Address`, `Pin_code`, `City`, `License`, `Adhaarcard`, `Mobile_no`, `Password`, `status`, `Created_dt`, `Updated_dt`) VALUES
(1, 'testimonial-4.jpg', 'Client', 'Client', 'Client', 'Client@gmail.com', 'b-27 muktanand, jamphalwadi', '234433', 'Mumbai', '', '', 5674646, '577d7068826de925ea2aec01dbadf5e4', 'Unblock', '0000-00-00 00:00:00.000000', '2022-03-10 19:41:56.000000'),
(2, 'user.jpg', 'harsh', 'Maurya', 'harshmaurya', 'harshmaurya@gmail.com', '', '', '', '', '', 1352456, '070d695657a515c3ad78aef28533eec3', 'Unblock', '2022-03-12 11:08:47.000000', '2022-03-12 11:16:44.000000');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `Contact_id` int(11) NOT NULL,
  `Name` varchar(255) DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `Subject` varchar(255) DEFAULT NULL,
  `Message` varchar(255) DEFAULT NULL,
  `Created_dt` datetime(6) DEFAULT NULL,
  `Updated_dt` datetime(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`Contact_id`, `Name`, `Email`, `Subject`, `Message`, `Created_dt`, `Updated_dt`) VALUES
(2, 'Mohini', 'mohini123@gmail.com', 'for contact', 'thank you', '2022-03-01 12:03:23.000000', '2022-03-01 12:03:23.000000');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `Customer_id` int(11) NOT NULL,
  `Profile_img` varchar(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Gender` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `Pin_code` int(255) NOT NULL,
  `City` varchar(255) NOT NULL,
  `License` varchar(255) NOT NULL,
  `Adhaarcard` varchar(255) NOT NULL,
  `Mobile_no` int(11) NOT NULL,
  `status` enum('Block','Unblock') NOT NULL DEFAULT 'Unblock',
  `Created_dt` datetime(6) NOT NULL,
  `Updated_dt` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`Customer_id`, `Profile_img`, `Name`, `Username`, `Password`, `Gender`, `Email`, `Address`, `Pin_code`, `City`, `License`, `Adhaarcard`, `Mobile_no`, `status`, `Created_dt`, `Updated_dt`) VALUES
(1, '', 'Mohini', 'mohini123', '71eb2ae039b92202c64be7ed299da123', '', 'mohini@gmail.com', '', 0, '', '', '', 2147483647, 'Block', '2022-02-28 13:48:50.000000', '2022-02-28 13:48:50.000000'),
(5, 'team-2.jpg', 'Harsh', 'Harsh2005', '070d695657a515c3ad78aef28533eec3', 'Male', 'harsh2005@gmail.com', 'b-27 muktanand, jamphalwadi', 382449, 'Ahmedabad', '', '', 2147483647, 'Unblock', '2022-02-28 18:58:55.000000', '2022-03-08 16:08:06.000000'),
(6, 'team-1.jpg', 'Maan', 'Maan123', '1f627c1b45889064a61018e4dd6f0617', 'Male', 'maan123@gmail.com', 'Mumbai', 234433, 'Mumbai', '', '', 123456987, 'Unblock', '2022-03-01 12:20:43.000000', '2022-03-08 13:52:00.000000'),
(7, '', 'Client', 'Client', '577d7068826de925ea2aec01dbadf5e4', '', 'Client@gmail.com', '', 0, '', '', '', 12344, 'Unblock', '2022-03-09 19:18:22.000000', '2022-03-09 19:18:22.000000'),
(8, 'account.png', 'nidhi', 'nidhi', '64605c59ab62dbcd925af40d7de11276', 'Female', 'nidhi123@gmail.com', '', 0, '', '', '', 2147483647, 'Unblock', '2022-03-17 11:08:23.000000', '2022-03-17 11:09:48.000000');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `Employee_id` int(11) NOT NULL,
  `Profile_img` varchar(255) NOT NULL,
  `First_name` varchar(255) NOT NULL,
  `Last_name` varchar(255) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Gender` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Mobile_no` int(11) NOT NULL,
  `Created_dt` datetime(6) NOT NULL,
  `Updated_dt` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`Employee_id`, `Profile_img`, `First_name`, `Last_name`, `Username`, `Password`, `Gender`, `Email`, `Mobile_no`, `Created_dt`, `Updated_dt`) VALUES
(1, 'account.png', 'Mohini', 'Maurya', 'mohini123', '57fb084e7ca258813b3889d1d63034c9', 'female', 'mohini@gmail.com', 12345, '2022-02-27 12:18:58.000000', '2022-02-27 12:18:58.000000'),
(2, 'testimonial-1.jpg', 'Harsh', 'Maurya', 'harsh123', 'b0aa651c991deca550252ed6cbba99ba', 'male', 'harsh@gmail.com', 67890, '2022-02-27 12:19:47.000000', '2022-02-27 12:19:47.000000'),
(4, 'team-3.jpg', 'vishv', 'Unjhiya', 'vishv', 'c822d4044486e3e4f3077559bdb475dd', 'Male', 'vishv@gmail.com', 147852, '2022-03-07 12:01:37.000000', '2022-03-08 20:13:26.000000');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `Feedback_id` int(255) NOT NULL,
  `Customer_id` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Message` varchar(255) NOT NULL,
  `Created_dt` datetime(6) NOT NULL,
  `Updated_dt` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`Feedback_id`, `Customer_id`, `Name`, `Email`, `Message`, `Created_dt`, `Updated_dt`) VALUES
(1, 0, 'Maan', 'Maan123@gmail.com', 'nice', '0000-00-00 00:00:00.000000', '0000-00-00 00:00:00.000000'),
(3, 0, 'harsh', 'harsh123@gmail.com', 'good', '2022-03-01 12:56:38.000000', '2022-03-01 12:56:38.000000');

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `Location_id` int(11) NOT NULL,
  `Loca_name` varchar(255) NOT NULL,
  `City` varchar(255) NOT NULL,
  `Created_dt` datetime NOT NULL,
  `Updated_dt` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`Location_id`, `Loca_name`, `City`, `Created_dt`, `Updated_dt`) VALUES
(1, 'Maninagar', 'Ahmedabad', '2022-03-17 11:34:19', '2022-03-17 11:34:19'),
(2, 'New Maninagar', 'Ahmedabad', '2022-03-21 11:48:39', '2022-03-21 11:48:39'),
(3, 'S. G. Road', 'Ahmedabad', '2022-03-21 11:48:58', '2022-03-21 11:48:58'),
(4, 'Kankariya', 'Ahmedabad', '2022-03-21 11:50:12', '2022-03-21 11:50:12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Admin_id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`Booking_id`),
  ADD KEY `Customer_id` (`Customer_id`),
  ADD KEY `Caradv_id` (`Caradv_id`),
  ADD KEY `Client_id` (`Client_id`);

--
-- Indexes for table `caradv`
--
ALTER TABLE `caradv`
  ADD PRIMARY KEY (`Caradv_id`),
  ADD KEY `Cartype_id` (`Cartype_id`),
  ADD KEY `Client_id` (`Client_id`),
  ADD KEY `Location_id` (`Location_id`);

--
-- Indexes for table `car_type`
--
ALTER TABLE `car_type`
  ADD PRIMARY KEY (`Cartype_id`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`Client_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`Contact_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`Customer_id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`Employee_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`Feedback_id`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`Location_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `Admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `Booking_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `caradv`
--
ALTER TABLE `caradv`
  MODIFY `Caradv_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `car_type`
--
ALTER TABLE `car_type`
  MODIFY `Cartype_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `Client_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `Contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `Customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `Employee_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `Feedback_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `location`
--
ALTER TABLE `location`
  MODIFY `Location_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `booking_ibfk_1` FOREIGN KEY (`Customer_id`) REFERENCES `customer` (`Customer_id`),
  ADD CONSTRAINT `booking_ibfk_2` FOREIGN KEY (`Caradv_id`) REFERENCES `caradv` (`Caradv_id`),
  ADD CONSTRAINT `booking_ibfk_3` FOREIGN KEY (`Client_id`) REFERENCES `client` (`Client_id`);

--
-- Constraints for table `caradv`
--
ALTER TABLE `caradv`
  ADD CONSTRAINT `caradv_ibfk_1` FOREIGN KEY (`Cartype_id`) REFERENCES `car_type` (`Cartype_id`),
  ADD CONSTRAINT `caradv_ibfk_2` FOREIGN KEY (`Client_id`) REFERENCES `client` (`Client_id`),
  ADD CONSTRAINT `caradv_ibfk_3` FOREIGN KEY (`Location_id`) REFERENCES `location` (`Location_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
