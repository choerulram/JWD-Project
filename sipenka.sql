-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 07, 2024 at 09:44 PM
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
('MSD-6', '019'),
('MSD-9', '014');

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
('Achmad Choerul Ramdhani', 'MSI-22030', 'Perempuan', 'Cilacap Kota', 'Admin', '015', 'Rp. 10.000.000'),
('Choerul', 'MSI-22032', 'Perempuan', 'Cilacap', 'Admin', '013', 'Rp. 8.000.000'),
('Lutfiya Ainurrahman Prasetyo', 'MSI-22033', 'Perempuan', 'Cilacap', 'Training', '015', 'Rp. 9.000.000'),
('Melinda Ghani Anggraeni', 'MSI-22040', 'Laki-laki', 'Cilacap', 'Manager', '015', 'Rp. 9.000.000');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `username` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(7, 'irul', '$2y$10$Q07ncFucVi1MoR6McyenjunzZh8aJ.HkL8v.PKW5/l20ngYjeAGL6'),
(19, 'lutfi', '$2y$10$aCTJJwVrVGX/ybUFiCMqD.7AC8UuT.Il6AE34uBvJyVS0BqZG9ZdG'),
(20, 'melinda', '$2y$10$gUWnFt.l/Jo5ypB8cNelEeo/eZHNmzj8ufa/2tIxOvVU/s3o.RybS'),
(21, 'nida', '$2y$10$ENWLPHBoWOOfazdUjVTKb.YjB0hAlumfrPCYcPTAjHBBtGQuZbF4C'),
(25, 'choerul', '$2y$10$P7/hBn0X5fSjXXSMeqHn7eT3gxH.Acx/X1JQQH.cY4NQfv.P73Wwm');

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
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
