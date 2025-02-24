-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 24, 2025 at 03:42 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_nubasnews`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_tambahberita`
--

CREATE TABLE `tb_tambahberita` (
  `id` int(11) NOT NULL,
  `Judul` varchar(255) NOT NULL,
  `Kategori` varchar(100) NOT NULL,
  `Isi` text NOT NULL,
  `File` varchar(255) DEFAULT NULL,
  `Tanggal` timestamp NOT NULL DEFAULT current_timestamp(),
  `terbit` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(50) NOT NULL,
  `reg_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_tambahberita`
--

INSERT INTO `tb_tambahberita` (`id`, `Judul`, `Kategori`, `Isi`, `File`, `Tanggal`, `terbit`, `username`, `email`, `password`, `role`, `reg_date`) VALUES
(24, 'gula', 'Esport', 'gula adlah', 'uploads/burger.jpg', '2025-02-06 13:42:27', 1, '', '', '', '', '2025-02-06 13:42:27'),
(34, 'agithaaaaaaaaaaaaaaaaa', 'Basket', 'sankjhbshgqwv', 'uploads/night.jpg', '2025-02-06 14:57:14', 1, '', '', '', '', '2025-02-06 14:57:14'),
(35, 'gula', 'Basket', 'mbnzcsVGh', 'uploads/esport.jpg', '2025-02-06 22:26:53', 1, '', '', '', '', '2025-02-06 22:26:53'),
(36, 'tambah', 'Sepak bola', 'ufhgvn', 'uploads/night.jpg', '2025-02-06 22:27:46', 1, '', '', '', '', '2025-02-06 22:27:46'),
(37, 'nasi goreng', 'Esport', 'nbshjvabghvhjqsuqwyqtytefuiopjkhgfdghjkmlnbvcbnm,nbvcbnb m', 'uploads/lk.jpeg', '2025-02-09 11:13:19', 1, '', '', '', '', '2025-02-09 11:13:19'),
(38, 'nasi goreng', 'Sepak bola', 'asdfghjklqwertyuiop', 'uploads/night.jpg', '2025-02-10 06:20:48', 1, '', '', '', '', '2025-02-10 06:20:48'),
(41, 'anak pplg berhasil meraih juara 2 dalam lomba esport', 'Esport', 'sekelompok anak pplg berhasil meraih juara 2 dalam lomba esport dalam  di hari senin bulam desembar 2024', 'uploads/esport.jpg', '2025-02-13 10:07:29', 1, '', '', '', '', '2025-02-13 10:07:29'),
(42, 'anak pplg berhasil meraih juara 2 dalam lomba esport', 'Esport', 'bs xgxvwyuajhqNAM', 'uploads/kemal.jpg', '2025-02-14 01:03:14', 0, '', '', '', '', '2025-02-14 01:03:14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_tambahberita`
--
ALTER TABLE `tb_tambahberita`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_tambahberita`
--
ALTER TABLE `tb_tambahberita`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
