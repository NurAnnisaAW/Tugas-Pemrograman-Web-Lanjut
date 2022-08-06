-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 06 Agu 2022 pada 03.14
-- Versi server: 10.1.31-MariaDB
-- Versi PHP: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `koperasi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `anggota`
--

CREATE TABLE `anggota` (
  `id_anggota` varchar(8) NOT NULL,
  `nm_anggota` varchar(255) NOT NULL,
  `gender` enum('Perempuan','Laki-Laki','','') NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `tmp_lahir` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `kota` varchar(50) NOT NULL,
  `no_telp` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `anggota`
--

INSERT INTO `anggota` (`id_anggota`, `nm_anggota`, `gender`, `alamat`, `tmp_lahir`, `tgl_lahir`, `kota`, `no_telp`) VALUES
('AGG001', 'Nur Annisa Aprilla Wahyuningwati', 'Perempuan', 'JL. Raya Kodau ', 'Bekasi', '2000-04-24', 'Bekasi', '083808012710'),
('AGG002', 'Dewi Bunga Rahayu', 'Perempuan', 'Pondok Melati Jl. Swadarma Raya', 'Depok', '2000-02-16', 'Depok', '083563773524'),
('AGG003', 'Abdul Razzaq Salim', 'Laki-Laki', 'Jl. Kesadaran 1', 'Bandung', '2000-01-19', 'Depok', '082365463523'),
('AGG004', 'Muhammad Thoriq Saktian', 'Laki-Laki', 'Gg. H. Nawi', 'Bekasi', '2000-12-20', 'Bekasi', '08126365362'),
('AGG005', 'Nafisa Hardyanti Wahyuni', 'Perempuan', 'Jl. Mangga', 'Bekasi', '2006-12-20', 'Bekasi', '082763562563');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis_simpanan`
--

CREATE TABLE `jenis_simpanan` (
  `id_jenis_simpanan` varchar(11) NOT NULL,
  `nm_jenis_simpanan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jenis_simpanan`
--

INSERT INTO `jenis_simpanan` (`id_jenis_simpanan`, `nm_jenis_simpanan`) VALUES
('JNS001', 'Wajib'),
('JNS002', 'Pokok'),
('JNS003', 'Sukarela');

-- --------------------------------------------------------

--
-- Struktur dari tabel `simpanan`
--

CREATE TABLE `simpanan` (
  `id_simpanan` varchar(11) NOT NULL,
  `id_anggota` varchar(8) NOT NULL,
  `id_jenis_simpanan` varchar(11) NOT NULL,
  `nm_simpanan` varchar(255) NOT NULL,
  `besar_simpanan` int(11) NOT NULL,
  `tgl_simpanan` date NOT NULL,
  `ket` text NOT NULL,
  `jumlah_simpanan` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `simpanan`
--

INSERT INTO `simpanan` (`id_simpanan`, `id_anggota`, `id_jenis_simpanan`, `nm_simpanan`, `besar_simpanan`, `tgl_simpanan`, `ket`, `jumlah_simpanan`) VALUES
('SPN001', 'AGG001', 'JNS002', 'Simpanan Sekolah', 200000, '2022-08-04', '-', 200000),
('SPN002', 'AGG002', 'JNS001', 'Simpanan Pensiun', 500000, '2022-08-06', '-', 500000);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`id_anggota`);

--
-- Indeks untuk tabel `jenis_simpanan`
--
ALTER TABLE `jenis_simpanan`
  ADD PRIMARY KEY (`id_jenis_simpanan`);

--
-- Indeks untuk tabel `simpanan`
--
ALTER TABLE `simpanan`
  ADD PRIMARY KEY (`id_simpanan`),
  ADD KEY `id_anggota` (`id_anggota`,`id_jenis_simpanan`),
  ADD KEY `id_jenis_simpanan` (`id_jenis_simpanan`);

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `simpanan`
--
ALTER TABLE `simpanan`
  ADD CONSTRAINT `simpanan_ibfk_1` FOREIGN KEY (`id_jenis_simpanan`) REFERENCES `jenis_simpanan` (`id_jenis_simpanan`),
  ADD CONSTRAINT `simpanan_ibfk_2` FOREIGN KEY (`id_anggota`) REFERENCES `anggota` (`id_anggota`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
