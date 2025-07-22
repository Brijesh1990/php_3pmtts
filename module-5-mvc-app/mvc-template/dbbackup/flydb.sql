-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 12, 2025 at 12:30 PM
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
-- Database: `flydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_flight_type`
--

CREATE TABLE `tbl_flight_type` (
  `flighttype_id` int(11) NOT NULL,
  `type` varchar(255) NOT NULL,
  `descriptions` text NOT NULL,
  `added_date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_flight_type`
--

INSERT INTO `tbl_flight_type` (`flighttype_id`, `type`, `descriptions`, `added_date`) VALUES
(1, 'Domestic flight', 'good for asia and india', '2025-07-10 15:56:56'),
(2, 'International Flight', 'good for interbations', '2025-07-10 15:57:15'),
(3, 'Private Jet', 'private for vip', '2025-07-12 15:24:24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_flight_type`
--
ALTER TABLE `tbl_flight_type`
  ADD PRIMARY KEY (`flighttype_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_flight_type`
--
ALTER TABLE `tbl_flight_type`
  MODIFY `flighttype_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
