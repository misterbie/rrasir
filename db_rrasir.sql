-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Mar 2023 pada 13.00
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_rrasir`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_pengurus`
--

CREATE TABLE `data_pengurus` (
  `tabel_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `kk` varchar(20) NOT NULL,
  `ktp` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `blok` varchar(5) NOT NULL,
  `nomer` varchar(5) NOT NULL,
  `tempat_lahir` varchar(20) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `kelamin` varchar(20) NOT NULL,
  `menikah` varchar(20) NOT NULL,
  `pendidikan` varchar(20) NOT NULL,
  `keluarga` varchar(5) NOT NULL,
  `agama` varchar(20) NOT NULL,
  `pekerjaan` varchar(20) NOT NULL,
  `telp` varchar(15) NOT NULL,
  `status_rumah` varchar(20) NOT NULL,
  `alamat` varchar(150) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_warga`
--

CREATE TABLE `data_warga` (
  `tabel_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `kk` varchar(20) NOT NULL,
  `ktp` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `blok` varchar(5) NOT NULL,
  `nomer` varchar(5) NOT NULL,
  `tempat_lahir` varchar(20) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `kelamin` varchar(20) NOT NULL,
  `menikah` varchar(20) NOT NULL,
  `pendidikan` varchar(20) NOT NULL,
  `keluarga` varchar(5) NOT NULL,
  `agama` varchar(20) NOT NULL,
  `pekerjaan` varchar(20) NOT NULL,
  `telp` varchar(15) NOT NULL,
  `status_rumah` varchar(20) NOT NULL,
  `alamat` varchar(150) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `data_warga`
--

INSERT INTO `data_warga` (`tabel_id`, `user_id`, `kk`, `ktp`, `nama`, `blok`, `nomer`, `tempat_lahir`, `tgl_lahir`, `kelamin`, `menikah`, `pendidikan`, `keluarga`, `agama`, `pekerjaan`, `telp`, `status_rumah`, `alamat`, `status`) VALUES
(2, 2, '21354564567823', '21456789987789', 'Slamet Fitriyanto', 'AE', '05', 'Batam', '1990-01-01', 'Laki-laki', 'Menikah', 'S1', '2', 'Islam', 'Direktur', '08987987654', 'Milik Sendiri', 'Tanjung Uncang', 1),
(3, 3, '25878978855484', '65465498789899', 'Hadi', 'AG', '22', 'Batam', '1991-02-02', 'Laki-laki', 'Menikah', 'D3', '3', 'Islam', 'Direktur', '08258484855', 'Milik Sendiri', 'Jauh', 1),
(4, 4, '85464825484', '121665321556', 'Adnil', 'AH', '12', 'Batam', '1992-05-05', 'Laki-laki', 'Belum Menikah', 'SLTP', '2', 'Islam', 'Direktur', '12312321', 'Milik Sendiri', 'Ruli Renggali', 1),
(5, 5, '212321245656545', '32543566757567', 'Sarmanto', 'AD', '15', 'Batam', '1990-08-05', 'Laki-laki', 'Belum Menikah', 'S2', '0', 'Islam', 'Direktur', '214324234', 'Sewa', 'Jauh', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_admin`
--

CREATE TABLE `user_admin` (
  `tabel_id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `usernama` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` varchar(10) NOT NULL,
  `status` varchar(10) NOT NULL,
  `creat_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user_admin`
--

INSERT INTO `user_admin` (`tabel_id`, `nama`, `usernama`, `password`, `role`, `status`, `creat_at`) VALUES
(1, 'Robi Aryanto', 'superuser', '$2y$10$Mu8UdS1I9ckwEj.oR6A5BOD1YqlDqtoppL57iEJFgF6qIrj1G56aa', '99', '1', '2023-03-06 21:30:14');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_pengurus`
--

CREATE TABLE `user_pengurus` (
  `tabel_id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `usernama` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` varchar(10) NOT NULL DEFAULT '77',
  `status` varchar(10) NOT NULL DEFAULT '1',
  `creat_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_warga`
--

CREATE TABLE `user_warga` (
  `tabel_id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `usernama` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` varchar(10) NOT NULL DEFAULT '66',
  `status` varchar(10) NOT NULL DEFAULT '1',
  `creat_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user_warga`
--

INSERT INTO `user_warga` (`tabel_id`, `nama`, `usernama`, `password`, `role`, `status`, `creat_at`) VALUES
(1, 'Robi Aryanto', 'AG21', '$2y$10$5H9UY09KpGseaCzuXZiVG.s3qOfsWpXYN6v7hzFB.OpPOzacfWewy', '66', '1', '2023-03-11 11:56:30'),
(2, 'Slamet Fitriyanto', 'AE05', '$2y$10$wiH5NYOo5nhdCvqpRVPizeKptrF3QpVSpSTJdscP1W5.TSeBCye2e', '66', '1', '2023-03-11 11:56:32'),
(3, 'Hadi', 'AG22', '$2y$10$dNbBIH3O3YP8Mi/wGQ4tIO81ep24YKpin4iQ9u7eETuiDaMkXGb3.', '66', '1', '2023-03-11 11:56:35'),
(4, 'Adnil', 'AH12', '$2y$10$X9eavVvE6MBejAlVVgi.luBqj6cnRW.p052huO8EJbwX3BXrmFRFq', '66', '1', '2023-03-11 11:56:38'),
(5, 'Sarmanto', 'AD15', '$2y$10$DEk5nChX/l2RPYiZShuyhOXeDdWqRE3c9SpSKaomioFjGDJZlL.Qq', '66', '1', '2023-03-11 11:56:47');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data_pengurus`
--
ALTER TABLE `data_pengurus`
  ADD PRIMARY KEY (`tabel_id`) USING BTREE,
  ADD KEY `user_id` (`user_id`) USING BTREE;

--
-- Indeks untuk tabel `data_warga`
--
ALTER TABLE `data_warga`
  ADD PRIMARY KEY (`tabel_id`) USING BTREE,
  ADD KEY `user_id` (`user_id`) USING BTREE;

--
-- Indeks untuk tabel `user_admin`
--
ALTER TABLE `user_admin`
  ADD PRIMARY KEY (`tabel_id`);

--
-- Indeks untuk tabel `user_pengurus`
--
ALTER TABLE `user_pengurus`
  ADD PRIMARY KEY (`tabel_id`);

--
-- Indeks untuk tabel `user_warga`
--
ALTER TABLE `user_warga`
  ADD PRIMARY KEY (`tabel_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `data_pengurus`
--
ALTER TABLE `data_pengurus`
  MODIFY `tabel_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `data_warga`
--
ALTER TABLE `data_warga`
  MODIFY `tabel_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `user_admin`
--
ALTER TABLE `user_admin`
  MODIFY `tabel_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `user_pengurus`
--
ALTER TABLE `user_pengurus`
  MODIFY `tabel_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `user_warga`
--
ALTER TABLE `user_warga`
  MODIFY `tabel_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `data_pengurus`
--
ALTER TABLE `data_pengurus`
  ADD CONSTRAINT `data_pengurus_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user_pengurus` (`tabel_id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `data_warga`
--
ALTER TABLE `data_warga`
  ADD CONSTRAINT `data_warga_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user_warga` (`tabel_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
