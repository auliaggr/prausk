-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Jan 2022 pada 09.24
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `prausk_aulia`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `masyarakat`
--

CREATE TABLE `masyarakat` (
  `id` int(11) NOT NULL,
  `nama` varchar(35) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(32) NOT NULL,
  `telp` varchar(13) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `masyarakat`
--

INSERT INTO `masyarakat` (`id`, `nama`, `username`, `password`, `telp`, `created_at`) VALUES
(7, 'aulia anggraeni', 'lia', '$2y$10$8ydJZ35i3YcZbfr1LZBLsemvI', '1376713', '2022-01-25 07:05:30'),
(8, 'aulia anggraeni', 'awek', '$2y$10$BJS3LVSmP.dgr5JYVfn0../GO', '1376713', '2022-01-25 07:06:10'),
(9, 'aulia anggraeni', 'auliaa', '$2y$10$K7n5yvJ1MOAGPgVwn69Il.wXc', '1376713', '2022-01-25 07:08:36'),
(10, 'aulia anggraeni', 'aggr', '$2y$10$K57Si.ptKWyKkDMEqdX63usSZ', '12121121', '2022-01-25 07:10:03');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengaduan`
--

CREATE TABLE `pengaduan` (
  `id` int(11) NOT NULL,
  `nik` int(25) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `tgl_pengaduan` timestamp NOT NULL DEFAULT current_timestamp(),
  `laporan` text NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `status` enum('0','Proses','Selesai') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pengaduan`
--

INSERT INTO `pengaduan` (`id`, `nik`, `nama`, `tgl_pengaduan`, `laporan`, `gambar`, `status`) VALUES
(11, 123456789, 'AULIA ANGGRAENIYYYY', '2022-01-26 04:46:30', 'wtwtwetwyyyyy', '', 'Selesai'),
(12, 123456, 'dhjashjas', '2022-01-26 04:47:17', '1gwg', '', 'Proses'),
(13, 123456, 'aulia anggraenii', '2022-01-26 07:42:45', 'tgsrtgs', '', 'Selesai'),
(14, 123456, 'AULIA ANGGRAENI', '2022-01-26 07:42:51', 'fasfasfaes', '', 'Proses'),
(15, 123456, 'AULIA ANGGRAENI', '2022-01-26 07:43:00', '1gwg', '', 'Proses'),
(16, 0, 'aewwe', '2022-01-26 07:43:31', 'weqe', '', 'Proses'),
(17, 123456, 'AULIA ANGGRAENI', '2022-01-26 07:49:18', 'wtwtwetwyyyyy', '', 'Proses'),
(18, 123456, 'aul', '2022-01-26 07:50:39', 'wtwtwetwyyyyy', '', 'Proses');

-- --------------------------------------------------------

--
-- Struktur dari tabel `petugas`
--

CREATE TABLE `petugas` (
  `id` int(11) NOT NULL,
  `nama_petugas` varchar(35) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(32) NOT NULL,
  `telp` varchar(13) NOT NULL,
  `role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tanggapan`
--

CREATE TABLE `tanggapan` (
  `id` int(11) NOT NULL,
  `pengaduan_id` int(11) NOT NULL,
  `tgl_tanggapan` timestamp NOT NULL DEFAULT current_timestamp(),
  `petugas_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `role` int(11) NOT NULL,
  `nik` int(16) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(25) NOT NULL,
  `telp` int(13) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `role`, `nik`, `nama`, `email`, `username`, `telp`, `password`) VALUES
(13, 1, 0, 'aulia anggraeni', 'auliaanggraeniii9@gmail.com', 'aulia', 2147483647, '$2y$10$KpIzWnurS3Ua6KjmBMShCOGHDV451ELkwE0qsVyRevq0k1ALRM9am'),
(14, 1, 0, 'aul', 'aul@gmail.com', 'aul', 123, '$2y$10$U56uEkJniwz6VasWDzNug.KVKeG96gfBYKSbXRDOZN.HpnJm5qUiq'),
(16, 2, 1234566, '2', 'awulll@gmail.commm', 'aull', 1233, '$2y$10$RuHjwdbgQWryUYyoynywle3K11GL0LkZG0NzpjQTjEvr5YPXiwLPy'),
(17, 2, 123456, 'aulia anggraeni', 'auliaanggraeni751@gmail.com', 'auliaa', 2147483647, '$2y$10$5fzqlOtVwsH4RjhkokyvzuYav5xUoCOT.fofrLrrr6p4XSlkWHUWO');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `masyarakat`
--
ALTER TABLE `masyarakat`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pengaduan`
--
ALTER TABLE `pengaduan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tanggapan`
--
ALTER TABLE `tanggapan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `masyarakat`
--
ALTER TABLE `masyarakat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `pengaduan`
--
ALTER TABLE `pengaduan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `petugas`
--
ALTER TABLE `petugas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tanggapan`
--
ALTER TABLE `tanggapan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
