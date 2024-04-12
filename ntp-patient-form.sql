-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 12, 2024 at 06:09 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ntp-patient-form`
--

-- --------------------------------------------------------

--
-- Table structure for table `patient_forms`
--

CREATE TABLE `patient_forms` (
  `id` int(11) NOT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `middle_name` varchar(255) DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `occupation` varchar(255) DEFAULT NULL,
  `bp` int(11) DEFAULT NULL,
  `hr` int(11) DEFAULT NULL,
  `rr` int(11) DEFAULT NULL,
  `temperature` int(11) DEFAULT NULL,
  `weight` int(11) DEFAULT NULL,
  `checklist1` tinyint(1) DEFAULT NULL,
  `checklist2` tinyint(1) DEFAULT NULL,
  `checklist3` tinyint(1) DEFAULT NULL,
  `checklist4` tinyint(1) DEFAULT NULL,
  `checklist5` tinyint(1) DEFAULT NULL,
  `checklist6` tinyint(1) DEFAULT NULL,
  `checklist7` tinyint(1) DEFAULT NULL,
  `checklist8` tinyint(1) DEFAULT NULL,
  `checklist9` tinyint(1) DEFAULT NULL,
  `medicines_duration` text DEFAULT NULL,
  `medical_history` text DEFAULT NULL,
  `unknown_name` text DEFAULT NULL,
  `medical_history_additional` text DEFAULT NULL,
  `smoking` tinyint(1) DEFAULT NULL,
  `alcohol` tinyint(1) DEFAULT NULL,
  `alcohol_frequency` text DEFAULT NULL,
  `lab_exam` text DEFAULT NULL,
  `recommendation` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `patient_forms`
--
ALTER TABLE `patient_forms`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `patient_forms`
--
ALTER TABLE `patient_forms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
