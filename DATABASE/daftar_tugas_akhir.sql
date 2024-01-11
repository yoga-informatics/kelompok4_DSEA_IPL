-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Jan 2024 pada 11.19
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
-- Database: `daftar_tugas_akhir`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `akun`
--

CREATE TABLE `akun` (
  `Id` int(11) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `nama_admin` varchar(255) DEFAULT NULL,
  `role_user` varchar(255) DEFAULT NULL,
  `id_user` int(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `akun`
--

INSERT INTO `akun` (`Id`, `email`, `password`, `nama_admin`, `role_user`, `id_user`) VALUES
(2, 'admin@gmail.com', '$2y$10$AIxith3klXwMIMT/t3CpHOasClDF8l1JWV66U1zob78mXT4wksaJq', 'Yayat', '0', NULL),
(19, 'yoga@gmail.com', '$2y$10$reSEF5KQSOWr.7MQeqzlqeDDy3dyOZWT9EdZW.fmGgHRjo852WlYi', '', '1', 8),
(20, 'aldy@gmail.com', '$2y$10$GK/Vsz.N/wTbKijTQw31qOgTZFqeLNwZgofVP0Nst4zJ/XFmwKEoa', '', '1', 9),
(21, 'firza@gmail.com', '$2y$10$gg12u7EggBdGgI7lO6ZC2eeF3vmfsEJjAqiFyrrjptYvESBu//PEy', '', '1', 10),
(25, 'yudi@gamil.com', '$2y$10$7cI3dVhakuLMIz0Ytega2./BWUwlcZSU2Xz0XgW9YO5PSkB5lvTTW', '', '1', 14),
(26, 'david@gmail.com', '$2y$10$Ms0lJdSkfFT69RcLCAl6fOxmaYcPUfU9JOcIEQ/OCy8oMHbBmbAKu', '', '1', 15),
(27, 'james@gmail.com', '$2y$10$35P8h7pw2I4iXjB/Gg6QGui/W1MNsuIQVkMzYGubdptZwf1VkV.bK', '', '1', 16),
(28, 'cobain@gmail.com', '$2y$10$VxIYOdVeUMBVYGBcUjPW0.7vs8kQ8jjXcoS8uedoQ8cephpmIFmYC', '', '1', 17),
(29, 'dodi@gmail.com', '$2y$10$nOus6A1u2KAdmZJztxyWGend7d3KC.j0UzXjRuXnrhstV0RhG/V.K', '', '1', 18),
(30, 'riko@gmail.com', '$2y$10$KK2UgqgoILmwQFS0jBMlZ.ZF.jhLXLXwV5a6PwNgH8oXaW764Mo7K', '', '1', 19);

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_pendaftaran`
--

CREATE TABLE `detail_pendaftaran` (
  `Id` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `id_admin` int(11) DEFAULT NULL,
  `tanggal_daftar` date DEFAULT NULL,
  `metode_pembayaran_pendaftaran` varchar(255) DEFAULT NULL COMMENT 'metode_pembayaran',
  `kelas` varchar(255) DEFAULT NULL,
  `usia` varchar(255) DEFAULT NULL,
  `status_pendaftaran` varchar(255) DEFAULT NULL,
  `status_kegiatan` int(11) NOT NULL DEFAULT 0,
  `biaya_kegiatan` int(11) DEFAULT 0,
  `tanggal_kegiatan` date DEFAULT NULL,
  `bukti_konfirmasi_pembayaran_kegiatan` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `detail_pendaftaran`
--

INSERT INTO `detail_pendaftaran` (`Id`, `id_user`, `id_admin`, `tanggal_daftar`, `metode_pembayaran_pendaftaran`, `kelas`, `usia`, `status_pendaftaran`, `status_kegiatan`, `biaya_kegiatan`, `tanggal_kegiatan`, `bukti_konfirmasi_pembayaran_kegiatan`) VALUES
(7, 8, 2, '2017-12-21', 'C', 'B', '11 tahun 7 bulan', '4', 1, 500000, '2017-12-21', '10-12-59test.png'),
(8, 9, 2, '2017-12-27', 'L', 'B', '8 tahun 11 bulan', '4', 0, 0, NULL, NULL),
(9, 10, 2, '2017-12-29', 'C', 'B', '8 tahun 11 bulan', '4', 0, 0, NULL, NULL),
(13, 14, NULL, '2024-01-10', NULL, NULL, NULL, '0', 0, 0, NULL, NULL),
(14, 15, NULL, '2024-01-10', NULL, NULL, NULL, '0', 0, 0, NULL, NULL),
(15, 16, NULL, '2024-01-11', NULL, NULL, NULL, '0', 0, 0, NULL, NULL),
(16, 17, NULL, '2024-01-11', NULL, NULL, NULL, '0', 0, 0, NULL, NULL),
(17, 18, NULL, '2024-01-11', NULL, NULL, NULL, '0', 0, 0, NULL, NULL),
(18, 19, NULL, '2024-01-11', NULL, NULL, NULL, '0', 0, 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `dosen`
--

CREATE TABLE `dosen` (
  `Id` int(11) NOT NULL,
  `nid` char(7) DEFAULT NULL,
  `nama_dosen` varchar(100) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `telp` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `dosen`
--

INSERT INTO `dosen` (`Id`, `nid`, `nama_dosen`, `alamat`, `telp`) VALUES
(2, '1170002', 'Achi', 'Tangerang', '+6285946057839'),
(5, '1170004', 'Heru', 'Bandung', '08837337376'),
(7, '1170005', 'Lukman', 'Padalarang', '088373373774');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `nim` char(6) NOT NULL DEFAULT '0',
  `kelas` varchar(255) DEFAULT NULL,
  `id_detail_pendaftaran` int(11) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`nim`, `kelas`, `id_detail_pendaftaran`, `nama`) VALUES
('170001', 'B', 7, 'Yoga'),
('170002', 'B', 8, 'test'),
('170003', 'B', 8, 'test'),
('170004', 'B', 9, 'test2');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pendaftaran`
--

CREATE TABLE `pendaftaran` (
  `Id` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `nim` varchar(10) DEFAULT NULL,
  `tempat_lahir` varchar(50) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `jenis_kelamin` char(1) DEFAULT NULL,
  `jumlah_sks` int(11) DEFAULT NULL,
  `total_sks` int(11) DEFAULT NULL,
  `semester` varchar(100) DEFAULT NULL,
  `nama_mahasiswa` varchar(255) DEFAULT NULL,
  `fakultas` varchar(50) DEFAULT NULL,
  `program_studi` varchar(255) DEFAULT NULL,
  `peminatan` varchar(255) DEFAULT NULL,
  `telp` varchar(255) DEFAULT NULL,
  `upload_khs` varchar(255) DEFAULT NULL,
  `upload_krs` varchar(255) DEFAULT NULL,
  `foto_mahasiswa` varchar(255) DEFAULT NULL,
  `bukti_pembayaran` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pendaftaran`
--

INSERT INTO `pendaftaran` (`Id`, `nama`, `nim`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `jumlah_sks`, `total_sks`, `semester`, `nama_mahasiswa`, `fakultas`, `program_studi`, `peminatan`, `telp`, `upload_khs`, `upload_krs`, `foto_mahasiswa`, `bukti_pembayaran`) VALUES
(8, 'Yoga', '2147483647', 'Bandung', '2009-01-01', 'L', 85, 144, '7', 'Yoga', 'Sains dan Informatika', 'Informatika', 'DSE', '+6287812035533', '09-12-34WhatsApp Image 2017-10-24 at 18.35.03.jpeg', '09-12-34WhatsApp Image 2017-11-24 at 16.42.39.jpeg', '09-12-43cropped-GGAD-LOGO-2.png', '09-12-43logo.jpeg'),
(9, 'aldy', '2147483647', 'Bandung', '2009-01-01', 'L', 84, 144, '7', 'Aldy', 'Sains dan Informatika', 'Informatika', 'DSE', '9080807555', '03-12-391. Berhasil signup.PNG', '03-12-392. Gagal signup (data kurang atau sudah terpakai).PNG', '03-12-502. Gagal signup (data kurang atau sudah terpakai).PNG', '03-12-501. Berhasil signup.PNG'),
(10, 'Firza', '0', 'test2', '2009-01-01', 'L', 2, 2, 'test2', 'test2', 'test2', 'test2', 'test2', 'test2', '10-12-35filter.png', '10-12-35icon.JPG', '10-12-45edittext.png', '10-12-45cloud-internet-symbol.png'),
(14, 'yudi', '3411211078', 'Bandung', '2009-01-01', '', 83, 144, '7', 'Yudi', 'si', 'if', 'AIG', '088373373789', '09-01-41student.png', '09-01-41register.png', '09-01-14C.jpeg', '09-01-14kaca.jpg'),
(15, 'david', '3411211038', 'Bandung', '2002-01-02', 'L', 80, 144, '7', 'David', 'Hukum', 'Hi', 'Asean', '088373373738', '09-01-44bg.jpeg', '09-01-44Latar belakang Geometris Memphis Kotak Latar Belakang Minimalis Gambar Wallpaper Untuk Download Gratis - Pngtree.jpeg', '09-01-10160_F_155699121_3ZjE8mpD2nZCmcOQ4xarzNT9qGtUQ1gJ.jpg', '09-01-10160_F_155699121_3ZjE8mpD2nZCmcOQ4xarzNT9qGtUQ1gJ-removebg-preview.png'),
(16, 'James', '3411211078', 'Bandung', '2002-01-01', 'L', 86, 144, '7', 'James', 'FEB', 'Akutansi', 'Akutansi nnana', '0863377363', '', '', '', ''),
(17, 'Cobain', '3411211036', 'Bandung', '2002-01-02', 'P', 85, 144, '7', 'Cobain', 'FEB', 'Akutansi', 'Akutansi nnana', '088373373737', '', '', '', ''),
(18, 'Dodi', '3411211036', 'karawang', '2002-01-01', 'L', 78, 144, '8', 'Dodi', 'FEB', 'Akutansi', 'Akutansi nnana', '088373373737', '', '', '', ''),
(19, 'Riko', '3411211036', 'Bandung', '2002-01-01', 'L', 80, 144, '7', 'Riko', 'FEB', 'Akutansi', 'Akutansi nnana', '088373373737', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_user_2` (`id_user`);

--
-- Indeks untuk tabel `detail_pendaftaran`
--
ALTER TABLE `detail_pendaftaran`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_admin` (`id_admin`);

--
-- Indeks untuk tabel `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`Id`);

--
-- Indeks untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`nim`);

--
-- Indeks untuk tabel `pendaftaran`
--
ALTER TABLE `pendaftaran`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `akun`
--
ALTER TABLE `akun`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT untuk tabel `detail_pendaftaran`
--
ALTER TABLE `detail_pendaftaran`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `dosen`
--
ALTER TABLE `dosen`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `pendaftaran`
--
ALTER TABLE `pendaftaran`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `akun`
--
ALTER TABLE `akun`
  ADD CONSTRAINT `akun_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `pendaftaran` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `detail_pendaftaran`
--
ALTER TABLE `detail_pendaftaran`
  ADD CONSTRAINT `detail_pendaftaran_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `pendaftaran` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `detail_pendaftaran_ibfk_2` FOREIGN KEY (`id_admin`) REFERENCES `akun` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
