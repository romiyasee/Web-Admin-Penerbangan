-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 12 Jul 2023 pada 12.39
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uas_pemweb`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_penumpang`
--

CREATE TABLE `data_penumpang` (
  `id_penumpang` int(10) NOT NULL,
  `no_pemesanan` int(50) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `ttl` date NOT NULL,
  `no_penerbangan` int(10) NOT NULL,
  `kode_rute` varchar(10) NOT NULL,
  `no_kursi` int(25) NOT NULL,
  `kode_pesawat` varchar(10) NOT NULL,
  `harga_tiket` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `data_penumpang`
--

INSERT INTO `data_penumpang` (`id_penumpang`, `no_pemesanan`, `nama`, `jenis_kelamin`, `ttl`, `no_penerbangan`, `kode_rute`, `no_kursi`, `kode_pesawat`, `harga_tiket`) VALUES
(1, 123456, 'Doni Juniardhi', 'L', '2003-06-09', 2023071101, 'CGK-DPS', 55, 'PA678', 1200000),
(2, 123457, 'Sarah Vina', '', '1998-02-28', 2023071101, 'CGK-DPS', 34, 'PA678', 1200000),
(3, 123458, 'Utsman Kalia', '', '2002-10-14', 2023071203, 'DPS-CGK', 12, 'PA678', 1200000),
(4, 123459, 'Putri Puspa', '', '1997-08-16', 2023071203, 'DPS-CGK', 79, 'PA678', 1200000),
(5, 123460, 'Robert Pavilski', '', '1992-07-16', 2023071206, 'CGK-SIN', 126, 'VB178', 1500000),
(6, 123461, 'Lee Chou Ming', '', '1996-09-29', 2023071206, 'CGK-SIN', 83, 'VB178', 1500000),
(7, 123462, 'Gina Angraeni', '', '1999-11-30', 2023071206, 'SIN-CGK', 71, 'VB178', 1500000),
(8, 123463, 'Wawan Saputra', '', '2001-04-21', 2023071207, 'SIN-CGK', 11, 'VB178', 1500000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_pesawat`
--

CREATE TABLE `data_pesawat` (
  `id_pesawat` int(10) NOT NULL,
  `kode_pesawat` varchar(20) NOT NULL,
  `model` varchar(255) NOT NULL,
  `kapasitas` int(10) NOT NULL,
  `tahun_buat` int(10) NOT NULL,
  `status_pesawat` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `data_pesawat`
--

INSERT INTO `data_pesawat` (`id_pesawat`, `kode_pesawat`, `model`, `kapasitas`, `tahun_buat`, `status_pesawat`) VALUES
(1, 'PA678', 'Airbus A320', 200, 2004, 'Aktif'),
(2, 'JS253', 'Boeing 737-900', 190, 2008, 'Aktif'),
(3, 'YI512', 'Boeing 777', 250, 2010, 'Aktif'),
(4, 'CX670', 'Airbus A321', 210, 2008, 'Perbaikan'),
(5, 'AG395', 'ATR 72', 200, 2000, 'Perbaikan'),
(6, 'VB178', 'Boeing 787', 280, 2011, 'Aktif');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_pilot`
--

CREATE TABLE `data_pilot` (
  `id_pilot` int(5) NOT NULL,
  `kode_lisensi` varchar(50) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jenis_kelamin` varchar(5) NOT NULL,
  `ttl` date NOT NULL,
  `jam_terbang` int(50) NOT NULL,
  `status_pilot` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `data_pilot`
--

INSERT INTO `data_pilot` (`id_pilot`, `kode_lisensi`, `nama`, `jenis_kelamin`, `ttl`, `jam_terbang`, `status_pilot`) VALUES
(1, 'FA123456', 'Alexander Graham ', 'L', '1983-03-17', 500, 'Aktif'),
(2, 'FA1234567', 'Teguh Waluyo', 'L', '1990-11-22', 700, 'Aktif'),
(3, 'FA1234568', 'Dwi Yulianti', 'P', '1991-08-24', 223, 'Aktif'),
(4, 'FA1234569', 'Udar Hendian', 'L', '1982-05-17', 340, 'Aktif'),
(5, 'FA1234570', 'Baromim Triwijaya', 'L', '1990-01-08', 672, 'Aktif');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwal_penerbangan`
--

CREATE TABLE `jadwal_penerbangan` (
  `id_penerbangan` int(10) NOT NULL,
  `no_penerbangan` int(10) NOT NULL,
  `rute` varchar(10) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `waktu_keberangkatan` datetime NOT NULL,
  `waktu_kedatangan` datetime NOT NULL,
  `kode_pesawat` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `jadwal_penerbangan`
--

INSERT INTO `jadwal_penerbangan` (`id_penerbangan`, `no_penerbangan`, `rute`, `kategori`, `waktu_keberangkatan`, `waktu_kedatangan`, `kode_pesawat`) VALUES
(1, 2023071101, 'CGK-DPS', 'Domestik', '2023-07-11 13:35:12', '2023-07-11 17:35:12', 'PA678'),
(2, 2023071202, 'DPS-CGK', 'Domestik', '2023-07-12 08:11:00', '2023-07-12 12:11:00', 'JS253'),
(3, 2023071203, 'DPS-CGK', 'Domestik', '2023-07-12 20:11:00', '2023-07-12 23:15:00', 'PA678'),
(4, 2023071204, 'JOG-SMG', 'Domestik', '2023-07-12 16:03:00', '2023-07-12 17:28:00', 'YI512'),
(5, 2023071205, 'SMG-JOG', 'Domestik', '2023-07-12 20:05:00', '2023-07-12 21:27:00', 'YI512'),
(6, 2023071206, 'CGK-SIN', 'Internasional', '2023-07-13 07:04:00', '2023-07-12 12:06:00', 'VB178'),
(7, 2023071207, 'SIN-CGK', 'Internasional', '2023-07-13 15:00:00', '2023-07-13 20:11:00', 'VB178');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rute_penerbangan`
--

CREATE TABLE `rute_penerbangan` (
  `id_rute` int(10) NOT NULL,
  `kode_rute` varchar(20) NOT NULL,
  `bandara_asal` varchar(50) NOT NULL,
  `bandara_tujuan` varchar(50) NOT NULL,
  `lama_penerbangan` int(10) NOT NULL,
  `harga_tiket` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `rute_penerbangan`
--

INSERT INTO `rute_penerbangan` (`id_rute`, `kode_rute`, `bandara_asal`, `bandara_tujuan`, `lama_penerbangan`, `harga_tiket`) VALUES
(1, 'CGK-DPS', 'Soekarno-Hatta, Tangerang, Indonesia', 'I Gusti Ngurah Rai, Bali, Indonesia', 3, 1200000),
(2, 'DPS-CGK', 'I Gusti Ngurah Rai, Bali, Indonesia', 'Soekarno-Hatta, Tangerang, Indonesia', 3, 1300000),
(3, 'CGK-SUB', 'Soekarno-Hatta, Tangerang, Indonesia', 'Juanda, Surabaya, Indonesia', 4, 1300000),
(4, 'SUB-CGK', 'Juanda, Surabaya, Indonesia', 'Soekarno-Hatta, Tangerang, Indonesia', 4, 1300000),
(5, 'JOG-SRG', 'Adisutjipto, Yogyakarta, Indonesia', 'Jen Ahmad Yani, Semarang, Indonesia', 1, 600000),
(6, 'SRG-JOG', 'Jen Ahmad Yani, Semarang, Indonesia', 'Adisujtipto, Yogyakarta, Indonesia', 1, 600000),
(7, 'PDG-PNK', 'Minangkabau, Padang, Indonesia', 'Supadio, Pontianak, Indonesia', 2, 800000),
(8, 'PNK-PDG', 'Supadio, Pontianak, Indonesia', 'Minangkabau, Padang, Indonesia', 2, 800000),
(9, 'CGK-SIN', 'Soekarno-Hatta, Tangerang, Indonesia', 'Changi, Singapura, Singapura', 5, 1500000),
(10, 'SIN-CGK', 'Changi, Singapura, Singapura', 'Soekarno-Hatta, Tangerang, Indonesia', 5, 1500000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(5) NOT NULL,
  `nama_user` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `nama_user`, `username`, `password`) VALUES
(1, 'admin', 'admin', 'f865b53623b121fd34ee5426c792e5c33af8c227');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data_penumpang`
--
ALTER TABLE `data_penumpang`
  ADD PRIMARY KEY (`id_penumpang`);

--
-- Indeks untuk tabel `data_pesawat`
--
ALTER TABLE `data_pesawat`
  ADD PRIMARY KEY (`id_pesawat`);

--
-- Indeks untuk tabel `data_pilot`
--
ALTER TABLE `data_pilot`
  ADD PRIMARY KEY (`id_pilot`);

--
-- Indeks untuk tabel `jadwal_penerbangan`
--
ALTER TABLE `jadwal_penerbangan`
  ADD PRIMARY KEY (`id_penerbangan`);

--
-- Indeks untuk tabel `rute_penerbangan`
--
ALTER TABLE `rute_penerbangan`
  ADD PRIMARY KEY (`id_rute`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `data_penumpang`
--
ALTER TABLE `data_penumpang`
  MODIFY `id_penumpang` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `data_pesawat`
--
ALTER TABLE `data_pesawat`
  MODIFY `id_pesawat` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `data_pilot`
--
ALTER TABLE `data_pilot`
  MODIFY `id_pilot` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `jadwal_penerbangan`
--
ALTER TABLE `jadwal_penerbangan`
  MODIFY `id_penerbangan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `rute_penerbangan`
--
ALTER TABLE `rute_penerbangan`
  MODIFY `id_rute` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
