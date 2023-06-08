-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 08, 2023 at 05:44 PM
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
(1, 'Croissante', 10000, 6, 'Fast Food', 'Cara bacanya: QUASO', '12345'),
(2, 'Nasi Goreng', 15000, 30, 'Fried Food', 'Nasi Goreng Ala Jawa', '53214');

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
(1, 'Eva', '123cloverblack', '2023-05-29 11:36:48', '2023-05-29 18:36:48'),
(2, 'Stormhaste', 'storm123', '2023-06-07 09:23:25', '2023-06-07 16:23:25'),
(4, 'Crudmaster', 'hello123', '2023-06-07 10:24:29', '2023-06-07 17:24:29'),
(6, 'Webmaster', 'ds56-C3Q#DKX4eM', '2023-06-07 16:17:36', '2023-06-07 23:17:36'),
(7, 'RyanSZ', 'ryansz123', '2023-06-08 12:56:25', '2023-06-08 19:56:25');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
