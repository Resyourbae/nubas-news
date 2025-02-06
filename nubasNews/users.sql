-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 05 Feb 2025 pada 11.46
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `berita`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(6) UNSIGNED NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(50) NOT NULL,
  `reg_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `role`, `reg_date`) VALUES
(1, 'fabian', 'asusawah21@gmail.com', '$2y$10$ajgGjmG42dk0UL4WYba3Mu7TAAo8JMV10.bsgzAbWua73HFjDbkEa', '', '2025-01-24 01:06:03'),
(2, 'Firyal', 'emailapa@gmail.com', '$2y$10$IPehfUq7naaH2TpbSwNQOOUBvqbHZW5AtU5ZrMWmUSCfBKWCy2VPa', '', '2025-01-24 01:10:19'),
(3, 'zayyana', 'emailaapa@gmail.com', '$2y$10$QIda6uhwHaIp0unI4KaU1uAMt95dtJJOXkjRfPzxAxEM.LF4S8UlS', '', '2025-01-24 01:11:37'),
(4, 'asep', 'kampret@gmail.com', '$2y$10$D763FYVQHuCBehFAFmpho.e6IUaCUM7mjPqHZ902TzxxKWU4iqi0K', '', '2025-01-24 01:36:17'),
(5, 'Resya Anggara', 'resyaanggara98@gmail.com', '$2y$10$NvqFpW34d6XupIpYf7qOHOYtqtc41te.VQyD05fk7BDsFtTgLKX/S', 'admin', '2025-02-04 12:31:44'),
(6, 'Mikail', 'mikail98@gmail.com', '$2y$10$3cWwdcQdnRFdQyMPZnGmjOucX.3Q5uXzc91C5I5bTF/4MwphyI5b6', 'user', '2025-02-04 15:28:00');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
