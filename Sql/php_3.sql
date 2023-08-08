-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 11, 2023 at 12:02 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `php_3`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `mobile` varchar(20) DEFAULT NULL,
  `password` varchar(20) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `mobile`, `password`, `created_at`) VALUES
(1, 'vismo', 'vismodeb2000@gmail.com', '01737351549', '111111', '2023-07-02 16:57:58'),
(2, 'Dipu', 'dipu@gmail.com', '01737351504', '111111', '2023-07-02 18:37:03'),
(4, 'Uttom', 'uttom@gmail.com', '01737351500', '111111', '2023-07-02 18:39:07'),
(7, 'Rahul', 'rahul@gmail.com', '01737351540', '111111', '2023-07-02 19:47:57'),
(8, 'Utpol Adhikari', 'utpol@gmail.com', '01737350149', '111111', '2023-07-02 20:26:08'),
(10, 'vismo2', 'vismodeb200@gmail.com', '01077351549', '111111', '2023-07-02 20:27:24'),
(12, 'labonno', 'labonno@gmail.com', '01730751549', '111111', '2023-07-02 20:42:24'),
(13, 'Vismo Dev', 'vismodeb20@gmail.com', '01837351549', '3d4f2bf07dc1be38b20c', '2023-07-02 20:58:20'),
(14, 'Vismo Dev', 'in.vismodeb2000@gmail.com', '01787351549', '3d4f2bf07dc1be38b20c', '2023-07-03 11:27:03'),
(15, 'Narayon', 'narayon@gmail.com', '01737351000', '3d4f2bf07dc1be38b20c', '2023-07-06 16:22:21');

-- --------------------------------------------------------

--
-- Table structure for table `st_data`
--

CREATE TABLE `st_data` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `roll` int(11) NOT NULL,
  `registration` int(11) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `st_data`
--

INSERT INTO `st_data` (`id`, `name`, `roll`, `registration`, `phone`, `created_at`, `status`) VALUES
(12, 'Uttom Roy', 4536457, 142534536, '01737351500', '2023-06-26 04:20:33', 1),
(13, 'Vismo Dev', 21, 54, '01737351549', '2023-06-26 04:41:10', 1),
(14, 'Utpol Adhikari', 454, 4534, '01738526254', '2023-06-27 02:31:29', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `mobile` (`mobile`);

--
-- Indexes for table `st_data`
--
ALTER TABLE `st_data`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `st_data`
--
ALTER TABLE `st_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
