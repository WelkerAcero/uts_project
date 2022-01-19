-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2021 at 10:52 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uts_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact_center`
--

CREATE TABLE `contact_center` (
  `contact_id` int(11) UNSIGNED NOT NULL,
  `contact_name` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `contact_email` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `contact_cellphone` bigint(20) NOT NULL,
  `recorded_date` varchar(50) CHARACTER SET utf8mb4 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Dumping data for table `contact_center`
--

INSERT INTO `contact_center` (`contact_id`, `contact_name`, `contact_email`, `contact_cellphone`, `recorded_date`) VALUES
(61, 'Welker Jose Perez Acero', 'welkerperez97@gmail.com', 3213655354, '2021-11-24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact_center`
--
ALTER TABLE `contact_center`
  ADD PRIMARY KEY (`contact_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact_center`
--
ALTER TABLE `contact_center`
  MODIFY `contact_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
