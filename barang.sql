-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 19 Sep 2023 pada 07.30
-- Versi server: 8.0.30
-- Versi PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `barang`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE `barang` (
  `id_barang` int NOT NULL,
  `nama_barang` varchar(100) NOT NULL,
  `merk` varchar(10) NOT NULL,
  `tgl_input` date NOT NULL,
  `tgl_update` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`id_barang`, `nama_barang`, `merk`, `tgl_input`, `tgl_update`) VALUES
(1, 'Laptop', 'Samsung', '2023-09-19', '2023-09-19'),
(2, 'HP', 'LG', '2023-09-08', '2023-09-15');

-- --------------------------------------------------------

--
-- Struktur dari tabel `role`
--

CREATE TABLE `role` (
  `id` int NOT NULL,
  `role` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `role`
--

INSERT INTO `role` (`id`, `role`) VALUES
(1, 'Admin'),
(2, 'Member\r\n');

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE `siswa` (
  `id` int NOT NULL,
  `nisn` int NOT NULL,
  `nama` varchar(25) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `tempat_lahir` varchar(12) NOT NULL,
  `jenis_kelamin` varchar(12) NOT NULL,
  `agama` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role_id` int NOT NULL,
  `is_active` int NOT NULL,
  `date_create` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `image`, `password`, `role_id`, `is_active`, `date_create`) VALUES
(6, 'Radhit Aunullah', 'radhitaunullah19@gmail.com', 'default.jpg', '$2y$10$8TKIdmt5rL5UFL2mTI5AreO3rnwWUUPHTc901chcMvxsUrM6OYJyO', 2, 1, 1695056657);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indeks untuk tabel `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `barang`
--
ALTER TABLE `barang`
  MODIFY `id_barang` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `role`
--
ALTER TABLE `role`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
