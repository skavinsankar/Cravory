-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 01, 2025 at 01:22 PM
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
-- Database: `cravory`
--

-- --------------------------------------------------------

--
-- Table structure for table `restaurant_reg`
--

CREATE TABLE `restaurant_reg` (
  `id` int(5) NOT NULL,
  `restaurant_name` varchar(35) NOT NULL,
  `registration_number` varchar(20) NOT NULL,
  `license_number` varchar(15) NOT NULL,
  `license_proof` varchar(35) NOT NULL,
  `fssai_proof` varchar(35) NOT NULL,
  `gst_proof` varchar(35) NOT NULL,
  `restaurant_address` varchar(150) NOT NULL,
  `restaurant_email` varchar(50) NOT NULL,
  `city` varchar(25) NOT NULL,
  `state` varchar(20) NOT NULL,
  `country` varchar(20) NOT NULL,
  `pincode` int(8) NOT NULL,
  `owner_name` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone_number` varchar(10) NOT NULL,
  `password` varchar(30) NOT NULL,
  `working_days` varchar(8) NOT NULL,
  `online_order` varchar(5) NOT NULL,
  `table_reservation` varchar(5) NOT NULL,
  `delivery_service` varchar(5) NOT NULL,
  `timestramp` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `restaurant_reg`
--

INSERT INTO `restaurant_reg` (`id`, `restaurant_name`, `registration_number`, `license_number`, `license_proof`, `fssai_proof`, `gst_proof`, `restaurant_address`, `restaurant_email`, `city`, `state`, `country`, `pincode`, `owner_name`, `username`, `email`, `phone_number`, `password`, `working_days`, `online_order`, `table_reservation`, `delivery_service`, `timestramp`) VALUES
(1, 'Cravory', 'R796521225', 'TN145213', 'proofs/Cravory/Cat 2.jpg', 'proofs/Cravory/Loki2.jpg', 'proofs/Cravory/vijay(Master).jpg', '4/34C, marappalam,pullangudi(p)', 'cravory@gmail.com', 'Ramanathapuram', 'Tamil Nadu', 'India', 623513, 'Ram', 'Kumar', 'ram@gmail.com', '7013454122', 'cravory', 'Mon-Sat', 'Yes', 'Yes', 'Yes', '2025-05-01 11:19:30.820098'),
(2, 'Restoran', 'R796521554', 'TN145545', 'proofs/Restoran/BatMan.jpg', 'proofs/Restoran/Dog.jpg', 'proofs/Restoran/Vijay(JD).jpg', '4/34C, marappalam,pullangudi(p)', 'restoran@gmail.com', 'Ramanathapuram', 'Tamil Nadu', 'India', 623513, 'Srimon', 'Srimon', 'srimon@gmail.com', '7013454122', 'srimon', 'Mon-Sat', 'Yes', 'Yes', 'No', '2025-04-24 19:18:33.614888'),
(3, 'RestoranRes', 'R796521554', 'TN145545', 'proofs/RestoranRes/BatMan.jpg', 'proofs/RestoranRes/Dog.jpg', 'proofs/RestoranRes/Vijay(JD).jpg', '4/34C, marappalam,pullangudi(p)', 'restoranres@gmail.com', 'Ramanathapuram', 'Tamil Nadu', 'India', 623513, 'Srimon', 'Srimon', 'srimon@gmail.com', '7013454122', 'srimonred', 'Mon-Sat', 'Yes', 'Yes', 'No', '2025-04-24 19:26:17.316736');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `id` int(11) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone_number` varchar(10) NOT NULL,
  `profile_image` varchar(255) NOT NULL,
  `num_orders` int(10) NOT NULL,
  `password` varchar(25) NOT NULL,
  `Timestamp` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`id`, `first_name`, `last_name`, `email`, `phone_number`, `profile_image`, `num_orders`, `password`, `Timestamp`) VALUES
(30, 'Prakash', 'Raj', 'prakash@gmail.com', '7788994456', '', 10, 'prakash', '2025-04-24 20:06:20.505378'),
(31, 'Kavi ', 'Priya', 'kavi@gmail.com', '9791164772', '', 10, '$2y$10$yXRfYysAqiaIq.zhl2', '2025-04-24 20:06:27.539517'),
(32, 'Kavin', 'Sankar', 'kavinsankar657@gmail.com', '9786983772', 'Cat.jpg\r\n', 10, 'kavin', '2025-04-24 20:10:41.521949'),
(33, 'saran', 'p', 'saranp@gmail.com', '7788994456', '', 10, 'saran', '2025-04-24 20:06:04.558043'),
(34, 'Vijay', 'Kumar', 'vijay@gmail.com', '7013454122', '1745402702_Profile picture.png', 10, 'vijay', '2025-04-24 20:05:54.387288');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `restaurant_reg`
--
ALTER TABLE `restaurant_reg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `restaurant_reg`
--
ALTER TABLE `restaurant_reg`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
