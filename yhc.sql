-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 12 Jul 2023 pada 18.10
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `yhc`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_akun`
--

CREATE TABLE `tbl_akun` (
  `kd_akun` char(20) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_akun`
--

INSERT INTO `tbl_akun` (`kd_akun`, `nama_lengkap`, `username`, `password`, `level`) VALUES
('A01', 'administrator', 'admin', 'admin', 'Admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_matkul`
--

CREATE TABLE `tbl_matkul` (
  `kd_matkul` varchar(10) NOT NULL,
  `nama_matkul` varchar(30) NOT NULL,
  `nama_dosen` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_matkul`
--

INSERT INTO `tbl_matkul` (`kd_matkul`, `nama_matkul`, `nama_dosen`) VALUES
('M01', 'Bahasa Inggris', 'Siti'),
('M02', 'Bahasa Indonesia', 'Gema'),
('M03', 'Basis Data', 'Rahimi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_mhs`
--

CREATE TABLE `tbl_mhs` (
  `nim` char(20) NOT NULL,
  `nama_mhs` varchar(50) NOT NULL,
  `studi` varchar(30) NOT NULL,
  `nohp` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_mhs`
--

INSERT INTO `tbl_mhs` (`nim`, `nama_mhs`, `studi`, `nohp`) VALUES
('A01', 'Muhammad Fadli', 'Teknik Informatika', '082211111111'),
('A02', 'Muhammad ilmi', 'Teknik Informatika', '082252272937');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_nilai`
--

CREATE TABLE `tbl_nilai` (
  `nim` varchar(10) NOT NULL,
  `kd_matkul` varchar(10) NOT NULL,
  `nilai` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_nilai`
--

INSERT INTO `tbl_nilai` (`nim`, `kd_matkul`, `nilai`) VALUES
('A01', 'M01', 90),
('A01', 'M02', 75),
('A02', 'M01', 50),
('A02', 'M02', 65),
('A02', 'M03', 40);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_akun`
--
ALTER TABLE `tbl_akun`
  ADD PRIMARY KEY (`kd_akun`);

--
-- Indeks untuk tabel `tbl_matkul`
--
ALTER TABLE `tbl_matkul`
  ADD PRIMARY KEY (`kd_matkul`);

--
-- Indeks untuk tabel `tbl_mhs`
--
ALTER TABLE `tbl_mhs`
  ADD PRIMARY KEY (`nim`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
