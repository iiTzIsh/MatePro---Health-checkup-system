-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 16, 2023 at 08:12 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `matepro`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `gender` enum('Male','Female','Others') DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `mobile_number` varchar(20) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `city` varchar(100) DEFAULT NULL,
  `state_province` varchar(100) DEFAULT NULL,
  `procedure_type` varchar(100) DEFAULT NULL,
  `appointment_datetime` datetime DEFAULT NULL,
  `facility_used` enum('Yes','No') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`id`, `first_name`, `last_name`, `gender`, `date_of_birth`, `mobile_number`, `email`, `address`, `city`, `state_province`, `procedure_type`, `appointment_datetime`, `facility_used`) VALUES
(1, 'ish', 'wwwww', 'Male', '2023-10-04', '-1', 'ss@gmail.com', 'sjsjsj', 'www', 'ss', 'Doctor Check', '2023-10-05 12:05:00', 'Yes'),
(3, 'ish', 'wwwww', 'Female', '2023-10-17', '773825', 'ishara@gmail.com', 'sjsjsj', 'www', 'ss', 'Medical Examination', '2023-10-17 14:06:00', 'Yes'),
(4, 'ish', 'wwwww', 'Male', '2023-10-20', '545454', 'ishara@gmail.com', 'sjsjsj', 'www', '4545', 'Doctor Check', '2023-10-27 18:33:00', 'Yes'),
(5, 'ish', 'wwwww', 'Male', '2023-10-20', '545454', 'ishara@gmail.com', 'sjsjsj', 'www', '4545', 'Doctor Check', '2023-10-27 18:33:00', 'No');

-- --------------------------------------------------------

--
-- Table structure for table `contact_details`
--

CREATE TABLE `contact_details` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `message` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_details`
--

INSERT INTO `contact_details` (`id`, `name`, `email`, `message`) VALUES
(1, 'asas', 'sdsd', 'asaas'),
(2, 'wwwwwwww', 'wwwwwww', 'ww'),
(3, 'sdsds2q', '232ewewe', 'qwqwwq');

-- --------------------------------------------------------

--
-- Table structure for table `docp1`
--

CREATE TABLE `docp1` (
  `ID` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `specialization` varchar(100) NOT NULL,
  `experience` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `docp1`
--

INSERT INTO `docp1` (`ID`, `name`, `specialization`, `experience`, `email`, `contact`) VALUES
(1, 'rtrtr', '3r3r', '-2', '4r4@gmai.cin', 'erer');

-- --------------------------------------------------------

--
-- Table structure for table `plan`
--

CREATE TABLE `plan` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `weight` int(10) NOT NULL,
  `height` int(10) NOT NULL,
  `health` varchar(10) NOT NULL,
  `dietgoals` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `plan`
--

INSERT INTO `plan` (`id`, `name`, `weight`, `height`, `health`, `dietgoals`) VALUES
(0, 'dfdfd', -18, 2, 'sfsfsf', 'dsew');

-- --------------------------------------------------------

--
-- Table structure for table `user_form`
--

CREATE TABLE `user_form` (
  `id` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pnumber` bigint(10) NOT NULL,
  `nic` varchar(13) NOT NULL,
  `birthday` date NOT NULL,
  `gender` enum('male','female') NOT NULL,
  `password` varchar(50) NOT NULL,
  `cpassword` varchar(50) NOT NULL,
  `user_type` enum('user','admin') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_form`
--

INSERT INTO `user_form` (`id`, `fname`, `lname`, `email`, `pnumber`, `nic`, `birthday`, `gender`, `password`, `cpassword`, `user_type`) VALUES
(11, 'hp ishara', 'madush', 'ishara@gmail.com', 710000001, '20021776364', '2023-10-18', 'male', '123456', '', 'user'),
(13, 'Isharaa', 'Madusanka', 'ish@gmail.com', 715551500, '200219908089', '2023-11-03', 'male', '123456', '', 'user'),
(14, 'ddc', 'dcd', 'ee@gmail.com', 344343, '3333', '2023-10-19', 'male', '12345', '', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_details`
--
ALTER TABLE `contact_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `docp1`
--
ALTER TABLE `docp1`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `user_form`
--
ALTER TABLE `user_form`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `contact_details`
--
ALTER TABLE `contact_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `docp1`
--
ALTER TABLE `docp1`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_form`
--
ALTER TABLE `user_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
