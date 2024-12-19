-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 19, 2024 at 06:09 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ada_kita`
--

-- --------------------------------------------------------

--
-- Table structure for table `pemesanan_pengasuh`
--

CREATE TABLE `pemesanan_pengasuh` (
  `id_pemesanan` int(11) NOT NULL,
  `nama_pasien` varchar(100) NOT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan') NOT NULL,
  `jenis_penyakit` varchar(255) NOT NULL,
  `kondisi_pasien` text NOT NULL,
  `tgl_lahir` date NOT NULL,
  `diterima` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pemesanan_pengasuh`
--

INSERT INTO `pemesanan_pengasuh` (`id_pemesanan`, `nama_pasien`, `jenis_kelamin`, `jenis_penyakit`, `kondisi_pasien`, `tgl_lahir`, `diterima`) VALUES
(1000, 'Jaconiah', 'Laki-laki', 'hati', 'sakit hati', '2024-11-07', 1),
(1001, 'Jaconiah', 'Perempuan', 'hati', 'wwww', '2024-11-15', 0),
(1002, 'sa', 'Laki-laki', 'sehat', 'aman', '2024-11-08', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `username`, `password`, `created_at`) VALUES
(10, 'Sakti@gmail.om', 'arji', '$2y$10$S4NIACws27nXlWuK44uH6eZ1WKuF41jno3Ck4VVP5Er/5gd0bkiny', '2024-11-28 06:09:27'),
(11, 'aibramaulana@gmail.com', 'siapa', '$2y$10$2ulJBKRogLVSM73m.t9GOuBZxvlgdA/ewBO7iTOm0FoJ5ZcWvu87e', '2024-11-28 06:11:03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pemesanan_pengasuh`
--
ALTER TABLE `pemesanan_pengasuh`
  ADD PRIMARY KEY (`id_pemesanan`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pemesanan_pengasuh`
--
ALTER TABLE `pemesanan_pengasuh`
  MODIFY `id_pemesanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1003;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
