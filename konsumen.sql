-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 08, 2020 at 12:13 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `parkiran-laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `konsumen`
--

CREATE TABLE `konsumen` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_konsumen` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kendaraan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_polisi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_lahir` date NOT NULL,
  `kelamin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_hp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `konsumen`
--

INSERT INTO `konsumen` (`id`, `nama_konsumen`, `jenis_kendaraan`, `no_polisi`, `tgl_lahir`, `kelamin`, `no_hp`, `created_at`, `updated_at`) VALUES
(1, 'Budi R', 'Mobil', 'B 1208 UHY', '1990-12-18', 'L', '081299234', NULL, '2020-06-08 02:29:01'),
(3, 'Putri', 'Motor', 'B 5403 RGS', '1998-02-04', 'Perempuan', '081299234', '2020-06-08 02:54:31', '2020-06-08 02:54:31'),
(4, 'Felix', 'Mobil', 'D 6027 AGS', '1996-08-17', 'Laki-Laki', '081299234', '2020-06-08 02:55:19', '2020-06-08 02:55:19'),
(5, 'Shinta', 'Motor', 'B 2064 TYH', '1998-12-09', 'Perempuan', '081299234', '2020-06-08 02:56:16', '2020-06-08 02:56:16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `konsumen`
--
ALTER TABLE `konsumen`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `konsumen`
--
ALTER TABLE `konsumen`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
