-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2025 at 09:58 AM
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
-- Database: `db_dss`
--

-- --------------------------------------------------------

--
-- Table structure for table `hasil_saw`
--

CREATE TABLE `hasil_saw` (
  `id` int(11) UNSIGNED NOT NULL,
  `id_suplier` int(11) NOT NULL,
  `jenis_produk` varchar(150) NOT NULL,
  `nilai_akhir` varchar(30) DEFAULT NULL,
  `ranking` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kriteria`
--

CREATE TABLE `kriteria` (
  `id` int(11) UNSIGNED NOT NULL,
  `kode_kriteria` varchar(30) DEFAULT NULL,
  `nama_kriteria` varchar(255) NOT NULL,
  `jenis` enum('cost','benefit') NOT NULL,
  `bobot` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kriteria`
--

INSERT INTO `kriteria` (`id`, `kode_kriteria`, `nama_kriteria`, `jenis`, `bobot`) VALUES
(1, 'C1', 'Harga', 'cost', 30),
(2, 'C2', 'Waktu Pengiriman', 'cost', 20),
(3, 'C3', 'Kualitas', 'benefit', 20),
(4, 'C4', 'Garansi', 'benefit', 15),
(5, 'C5', 'Konsistensi Stok', 'benefit', 15);

-- --------------------------------------------------------

--
-- Table structure for table `matrix`
--

CREATE TABLE `matrix` (
  `id` int(11) UNSIGNED NOT NULL,
  `kode_suplier` varchar(30) DEFAULT NULL,
  `kode_kriteria` varchar(30) DEFAULT NULL,
  `nilai` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `matrix`
--

INSERT INTO `matrix` (`id`, `kode_suplier`, `kode_kriteria`, `nilai`) VALUES
(1, 'S01', 'C1', '4'),
(2, 'S01', 'C2', '3'),
(3, 'S01', 'C3', '5'),
(4, 'S01', 'C4', '4'),
(5, 'S01', 'C5', '5'),
(6, 'S02', 'C1', '3'),
(7, 'S02', 'C2', '4'),
(8, 'S02', 'C3', '4'),
(9, 'S02', 'C4', '3'),
(10, 'S02', 'C5', '4'),
(11, 'S03', 'C1', '5'),
(12, 'S03', 'C2', '4'),
(13, 'S03', 'C3', '5'),
(14, 'S03', 'C4', '5'),
(15, 'S03', 'C5', '4'),
(16, 'S04', 'C1', '2'),
(17, 'S04', 'C2', '3'),
(18, 'S04', 'C3', '3'),
(19, 'S04', 'C4', '3'),
(20, 'S04', 'C5', '3'),
(21, 'S05', 'C1', '4'),
(22, 'S05', 'C2', '5'),
(23, 'S05', 'C3', '4'),
(24, 'S05', 'C4', '4'),
(25, 'S05', 'C5', '5');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2025-12-02-071930', 'App\\Database\\Migrations\\KriteriaTable', 'default', 'App', 1764748554, 1),
(2, '2025-12-02-072223', 'App\\Database\\Migrations\\MatrixTable', 'default', 'App', 1764748555, 1),
(3, '2025-12-03-071232', 'App\\Database\\Migrations\\SuplierTable', 'default', 'App', 1764748555, 1),
(4, '2025-12-03-071816', 'App\\Database\\Migrations\\HasilSAWTable', 'default', 'App', 1764748556, 1);

-- --------------------------------------------------------

--
-- Table structure for table `supliers`
--

CREATE TABLE `supliers` (
  `id` int(11) UNSIGNED NOT NULL,
  `kode_suplier` varchar(30) DEFAULT NULL,
  `nama_suplier` varchar(255) NOT NULL,
  `kontak_suplier` varchar(100) NOT NULL,
  `alamat_suplier` text NOT NULL,
  `jenis_produk` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `supliers`
--

INSERT INTO `supliers` (`id`, `kode_suplier`, `nama_suplier`, `kontak_suplier`, `alamat_suplier`, `jenis_produk`) VALUES
(1, 'S01', 'PT Sumber Data Teknologi', '081234567801', 'Jakarta', 'SSD'),
(2, 'S02', 'CV Media Storage', '081234567802', 'Bandung', 'HDD'),
(3, 'S03', 'PT Digital Komponen', '081234567803', 'Surabaya', 'SSD'),
(4, 'S04', 'CV Harddisk Jaya', '081234567804', 'Semarang', 'HDD'),
(5, 'S05', 'PT Solid Storage Indonesia', '081234567805', 'Yogyakarta', 'SSD');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hasil_saw`
--
ALTER TABLE `hasil_saw`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kriteria`
--
ALTER TABLE `kriteria`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `matrix`
--
ALTER TABLE `matrix`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `supliers`
--
ALTER TABLE `supliers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hasil_saw`
--
ALTER TABLE `hasil_saw`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kriteria`
--
ALTER TABLE `kriteria`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `matrix`
--
ALTER TABLE `matrix`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `supliers`
--
ALTER TABLE `supliers`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
