-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 04 Nov 2020 pada 04.27
-- Versi server: 10.4.8-MariaDB
-- Versi PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jagawarga1`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `memberikan`
--

CREATE TABLE `memberikan` (
  `NIK` int(11) NOT NULL,
  `ID_BANTUAN` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `memiliki`
--

CREATE TABLE `memiliki` (
  `NIK` int(11) NOT NULL,
  `ID_LOKASI` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `mempunyai`
--

CREATE TABLE `mempunyai` (
  `NIK` int(11) NOT NULL,
  `ID_PENYAKIT` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `mendapatkan`
--

CREATE TABLE `mendapatkan` (
  `NIK` int(11) NOT NULL,
  `ID_TRANSAKSI` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_bantuan`
--

CREATE TABLE `tb_bantuan` (
  `id_bantuan` int(100) NOT NULL,
  `jenis_bantuan` varchar(255) NOT NULL,
  `stok` int(255) NOT NULL,
  `satuan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_lokasi`
--

CREATE TABLE `tb_lokasi` (
  `id_lokasi` int(100) NOT NULL,
  `latitude` varchar(255) NOT NULL,
  `longitude` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_penyakit`
--

CREATE TABLE `tb_penyakit` (
  `id_penyakit` int(100) NOT NULL,
  `nama_penyakit` varchar(255) NOT NULL,
  `gejala` varchar(255) NOT NULL,
  `waktu_karantina` int(255) NOT NULL,
  `penanganan_pertama` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_transaksi`
--

CREATE TABLE `tb_transaksi` (
  `id_transaksi` int(100) NOT NULL,
  `jumlah` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_warga`
--

CREATE TABLE `tb_warga` (
  `nik` bigint(100) NOT NULL,
  `no_kk` bigint(100) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jk` varchar(255) NOT NULL,
  `ttl` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `memberikan`
--
ALTER TABLE `memberikan`
  ADD PRIMARY KEY (`NIK`,`ID_BANTUAN`),
  ADD KEY `MEMBERIKAN_FK` (`NIK`),
  ADD KEY `MEMBERIKAN2_FK` (`ID_BANTUAN`);

--
-- Indeks untuk tabel `memiliki`
--
ALTER TABLE `memiliki`
  ADD PRIMARY KEY (`NIK`,`ID_LOKASI`),
  ADD KEY `MEMILIKI_FK` (`NIK`),
  ADD KEY `MEMILIKI2_FK` (`ID_LOKASI`);

--
-- Indeks untuk tabel `mempunyai`
--
ALTER TABLE `mempunyai`
  ADD PRIMARY KEY (`NIK`,`ID_PENYAKIT`),
  ADD KEY `MEMPUNYAI_FK` (`NIK`),
  ADD KEY `MEMPUNYAI2_FK` (`ID_PENYAKIT`);

--
-- Indeks untuk tabel `mendapatkan`
--
ALTER TABLE `mendapatkan`
  ADD PRIMARY KEY (`NIK`,`ID_TRANSAKSI`);

--
-- Indeks untuk tabel `tb_bantuan`
--
ALTER TABLE `tb_bantuan`
  ADD PRIMARY KEY (`id_bantuan`);

--
-- Indeks untuk tabel `tb_lokasi`
--
ALTER TABLE `tb_lokasi`
  ADD PRIMARY KEY (`id_lokasi`);

--
-- Indeks untuk tabel `tb_penyakit`
--
ALTER TABLE `tb_penyakit`
  ADD PRIMARY KEY (`id_penyakit`);

--
-- Indeks untuk tabel `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- Indeks untuk tabel `tb_warga`
--
ALTER TABLE `tb_warga`
  ADD PRIMARY KEY (`nik`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_bantuan`
--
ALTER TABLE `tb_bantuan`
  MODIFY `id_bantuan` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_lokasi`
--
ALTER TABLE `tb_lokasi`
  MODIFY `id_lokasi` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_penyakit`
--
ALTER TABLE `tb_penyakit`
  MODIFY `id_penyakit` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  MODIFY `id_transaksi` int(100) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
