-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 19, 2021 at 08:53 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `p400`
--

-- --------------------------------------------------------

--
-- Table structure for table `children`
--

CREATE TABLE `children` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `user_id` int(255) NOT NULL,
  `date_birth` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `child_vaccine`
--

CREATE TABLE `child_vaccine` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `type` int(255) NOT NULL,
  `done_undone` int(255) NOT NULL,
  `child_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `emergency_contact`
--

CREATE TABLE `emergency_contact` (
  `id` int(11) NOT NULL,
  `ambulancy` varchar(255) NOT NULL,
  `hospital` varchar(255) NOT NULL,
  `doctor` varchar(255) NOT NULL,
  `name` text NOT NULL,
  `area_id` int(255) NOT NULL,
  `mobile_number` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `mental_care_alert`
--

CREATE TABLE `mental_care_alert` (
  `id` int(11) NOT NULL,
  `alert_description` text NOT NULL,
  `date_between` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `mother_vaccine`
--

CREATE TABLE `mother_vaccine` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `type` varchar(255) NOT NULL,
  `done_undone` text NOT NULL,
  `child_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `nutrition_alert`
--

CREATE TABLE `nutrition_alert` (
  `id` int(11) NOT NULL,
  `alert_descrition` text NOT NULL,
  `date_between` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pregnancy_alert`
--

CREATE TABLE `pregnancy_alert` (
  `id` int(11) NOT NULL,
  `alert_description` text NOT NULL,
  `date_between` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pregnancy_history`
--

CREATE TABLE `pregnancy_history` (
  `mother_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `possible_delivery` varchar(255) NOT NULL,
  `is_success` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `date_birth` date NOT NULL,
  `blood_group` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `fathers_name` varchar(255) NOT NULL,
  `mother_name` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `name`, `email`, `address`, `gender`, `date_birth`, `blood_group`, `status`, `fathers_name`, `mother_name`, `mobile`, `password`, `type`) VALUES
(3, 'sddd', 'fsrsr@gmail.com', 'ewfs', 'femle', '2021-02-01', 'AB+', '', 'adffd', 'adsd', '123456', '', ''),
(6, 'srabonee', 'srabonee@gmail.com', 'sylhet', 'female', '2021-02-14', 'O+', '', 'prodip', 'putul', '1736636821', '', ''),
(7, 'sri', 'sri@gmail.com', 'tatipara', 'female', '2021-03-02', 'AB+', '', 'Saru', 'Seya', '01616636821', '', ''),
(8, 'srabonee', 'sre@gmail.com', 'tatipara', 'female', '2021-04-01', 'AB+', '', 'sd', 'se', '01616636821', '', ''),
(12, 'admin', 'admin@gmail.com', 'zakigonj', 'female', '0000-00-00', 'A+', '', 'prodif', 'putul', '01736636821', '123456', 'admin'),
(13, 'srabonee', 'se@gmail.com', 'df', 'female', '2021-04-01', 'B-', '', 'Saru', 'fdg', '12345678', '', ''),
(14, 'Something', 's@gmail.com', 'dsfifdudfhfhjfd', 'male', '2021-04-21', 'O+', '', 'yyyy', 'zzzzz', '01548487878787', '', ''),
(15, 'Something', 's1@gmail.com', 'sddsdssd', 'male', '2021-04-07', 'O+', '', 'yyyy', 'zzzzz', '017123123123', '123456', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `children`
--
ALTER TABLE `children`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `child_vaccine`
--
ALTER TABLE `child_vaccine`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `emergency_contact`
--
ALTER TABLE `emergency_contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mental_care_alert`
--
ALTER TABLE `mental_care_alert`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mother_vaccine`
--
ALTER TABLE `mother_vaccine`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nutrition_alert`
--
ALTER TABLE `nutrition_alert`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pregnancy_alert`
--
ALTER TABLE `pregnancy_alert`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pregnancy_history`
--
ALTER TABLE `pregnancy_history`
  ADD PRIMARY KEY (`mother_id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `children`
--
ALTER TABLE `children`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `child_vaccine`
--
ALTER TABLE `child_vaccine`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `emergency_contact`
--
ALTER TABLE `emergency_contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mental_care_alert`
--
ALTER TABLE `mental_care_alert`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mother_vaccine`
--
ALTER TABLE `mother_vaccine`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `nutrition_alert`
--
ALTER TABLE `nutrition_alert`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pregnancy_alert`
--
ALTER TABLE `pregnancy_alert`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pregnancy_history`
--
ALTER TABLE `pregnancy_history`
  MODIFY `mother_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
