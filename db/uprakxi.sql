-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 13, 2023 at 05:00 PM
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
-- Database: `uprakxi`
--

-- --------------------------------------------------------

--
-- Table structure for table `ukk_makanan`
--

CREATE TABLE `ukk_makanan` (
  `id` int(11) NOT NULL,
  `nama_makanan` varchar(50) NOT NULL,
  `harga` int(7) NOT NULL,
  `stok` int(3) NOT NULL,
  `kategori` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `kode_makanan` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ukk_makanan`
--

INSERT INTO `ukk_makanan` (`id`, `nama_makanan`, `harga`, `stok`, `kategori`, `deskripsi`, `kode_makanan`) VALUES
(1, 'Croissante', 10000, 6, 'Fast Food', 'We spell it: QUASO', '12345'),
(4, 'Nasi Uduk', 5000, 40, 'traditional food', 'Nasi Uduk made by hands', '17701'),
(8, 'Bubur Kacang Ijo', 12000, 7, 'Bubur', 'Disajikan hangat', '21212'),
(9, 'apa', 1000, 12, 'gatau', 'gatau', '11212'),
(10, 'apa1', 2000, 78, 'gatau1', 'gatau1', '17765');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(13) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `created_at`, `updated_at`) VALUES
(10, 'Aira', '9019765c5b67f42a3ccfc3dd76c5b92f', '2023-06-11 16:44:23', '2023-06-11 23:44:23'),
(11, 'Eva', '75824d3ceaac39aac3f59ef3efb92774', '2023-06-12 01:04:32', '2023-06-12 08:04:32');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ukk_makanan`
--
ALTER TABLE `ukk_makanan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ukk_makanan`
--
ALTER TABLE `ukk_makanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
