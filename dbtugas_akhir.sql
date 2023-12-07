-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 06 Des 2023 pada 14.17
-- Versi server: 10.4.25-MariaDB
-- Versi PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbtugas_akhir`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `daftar_ta`
--

CREATE TABLE `daftar_ta` (
  `ID` int(11) NOT NULL,
  `NIM` varchar(10) NOT NULL,
  `Judul` varchar(100) NOT NULL,
  `Dosen_Pembimbing` varchar(10) NOT NULL,
  `Status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `dosen`
--

CREATE TABLE `dosen` (
  `NIP` varchar(10) NOT NULL,
  `Nama` varchar(50) NOT NULL,
  `Jabatan` varchar(50) NOT NULL,
  `Departemen` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `khs`
--

CREATE TABLE `khs` (
  `id` int(11) NOT NULL,
  `NIM` varchar(10) NOT NULL,
  `Semester` int(11) NOT NULL,
  `Mata_Kuliah` varchar(100) NOT NULL,
  `Nilai` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `koordinator`
--

CREATE TABLE `koordinator` (
  `NIP` varchar(10) NOT NULL,
  `Nama` varchar(50) NOT NULL,
  `Jabatan` varchar(50) NOT NULL,
  `Departemen` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `Nim_Mhs` varchar(10) NOT NULL,
  `Nama` varchar(50) NOT NULL,
  `Jurusan` varchar(50) NOT NULL,
  `Semester` int(11) NOT NULL,
  `Ipk` decimal(4,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `seminar`
--

CREATE TABLE `seminar` (
  `ID` int(11) NOT NULL,
  `Tanggal_Waktu` date NOT NULL,
  `Lokasi` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tugas_akhir`
--

CREATE TABLE `tugas_akhir` (
  `ID` int(11) NOT NULL,
  `NIM` varchar(10) NOT NULL,
  `Judul` varchar(100) NOT NULL,
  `Dosen_Pembimbing` varchar(10) NOT NULL,
  `Status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `daftar_ta`
--
ALTER TABLE `daftar_ta`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `NIM` (`NIM`,`Dosen_Pembimbing`);

--
-- Indeks untuk tabel `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`NIP`);

--
-- Indeks untuk tabel `khs`
--
ALTER TABLE `khs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `NIM` (`NIM`);

--
-- Indeks untuk tabel `koordinator`
--
ALTER TABLE `koordinator`
  ADD PRIMARY KEY (`NIP`);

--
-- Indeks untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`Nim_Mhs`);

--
-- Indeks untuk tabel `seminar`
--
ALTER TABLE `seminar`
  ADD PRIMARY KEY (`ID`);

--
-- Indeks untuk tabel `tugas_akhir`
--
ALTER TABLE `tugas_akhir`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `NIM` (`NIM`,`Dosen_Pembimbing`);

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD CONSTRAINT `mahasiswa_ibfk_1` FOREIGN KEY (`Nim_Mhs`) REFERENCES `tugas_akhir` (`NIM`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
