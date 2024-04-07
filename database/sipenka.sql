-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 28, 2023 at 06:55 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sipenka`
--

-- --------------------------------------------------------

--
-- Table structure for table `divisi`
--

CREATE TABLE `divisi` (
  `kode_divisi` char(16) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `nama_divisi` varchar(32) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `divisi`
--

INSERT INTO `divisi` (`kode_divisi`, `nama_divisi`) VALUES
('MSD-1', 'Sponsorship'),
('MSD-2', 'Marketing'),
('MSD-3', 'Media');

-- --------------------------------------------------------

--
-- Table structure for table `karyawan`
--

CREATE TABLE `karyawan` (
  `nama` varchar(64) DEFAULT NULL,
  `nik` char(9) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `jenis_kelamin` varchar(24) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `alamat` varchar(64) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `level` varchar(32) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `divisi` varchar(32) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `gaji` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `karyawan`
--

INSERT INTO `karyawan` (`nama`, `nik`, `jenis_kelamin`, `alamat`, `level`, `divisi`, `gaji`) VALUES
('Achmad Choerul', 'MSI-02049', 'Laki-laki', 'Cilacap', 'Admin', 'Marketing', 'Rp. 15.000.000,00'),
('Lutfiya Ainurrahman Prasetyo', 'MSI-02060', 'Laki-laki', 'Tangerang', 'Admin', 'Media', 'Rp. 17.000.000,00'),
('Melinda Ghani', 'MSI-02061', 'Perempuan', 'Cilacap', 'Staf', 'Sponsorship', 'Rp. 10.000.000,00'),
('Nida Ul Khasanah', 'MSI-02064', 'Perempuan', 'Cilacap', 'Training', 'Sponsorship', 'Rp. 6.000.000,00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `username` varchar(50) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(7, 'irul', '$2y$10$Q07ncFucVi1MoR6McyenjunzZh8aJ.HkL8v.PKW5/l20ngYjeAGL6'),
(19, 'lutfi', '$2y$10$aCTJJwVrVGX/ybUFiCMqD.7AC8UuT.Il6AE34uBvJyVS0BqZG9ZdG'),
(20, 'melinda', '$2y$10$gUWnFt.l/Jo5ypB8cNelEeo/eZHNmzj8ufa/2tIxOvVU/s3o.RybS'),
(21, 'nida', '$2y$10$ENWLPHBoWOOfazdUjVTKb.YjB0hAlumfrPCYcPTAjHBBtGQuZbF4C'),
(22, 'admin', '$2y$10$oC3YjcRoux/Xb.T9VKzmFeKmnO5snxGVU1VJMMvudCZivObajK4RW'),
(23, '133', '$2y$10$7OPxXmxKLipMp5mLpWr8v.oNQkudFF8IO8g986gsxtQvF0GkwZmHu');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `divisi`
--
ALTER TABLE `divisi`
  ADD PRIMARY KEY (`kode_divisi`);

--
-- Indexes for table `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`nik`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
