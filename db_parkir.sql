-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 18, 2022 at 02:34 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_parkir`
--

-- --------------------------------------------------------

--
-- Table structure for table `masuk`
--

CREATE TABLE `masuk` (
  `id` int(10) UNSIGNED NOT NULL,
  `jenis_kendaraan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_pol` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `biaya` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `masuk`
--

INSERT INTO `masuk` (`id`, `jenis_kendaraan`, `no_pol`, `biaya`, `created_at`, `updated_at`) VALUES
(3, 'Mobil', 'B 8737 MK', 0, '2017-02-11 07:57:59', '2017-02-12 08:01:04'),
(6, 'Mobil', 'B 8753 HG', 0, '2017-02-15 20:08:35', '2017-02-15 20:08:35'),
(7, 'Mini Bus', 'BD 1234 CC', 0, '2022-11-18 05:37:24', '2022-11-18 05:37:24'),
(8, 'Mini Bus', 'BD 1234 CC', 13000, '2022-11-18 05:38:26', '2022-11-18 06:23:20'),
(9, 'Truk', 'BD 1111 CC', 5000, '2022-11-18 06:29:20', '2022-11-18 06:29:42');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `masuk`
--
ALTER TABLE `masuk`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `masuk`
--
ALTER TABLE `masuk`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
