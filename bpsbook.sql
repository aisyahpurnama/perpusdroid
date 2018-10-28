-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 22 Okt 2018 pada 14.12
-- Versi Server: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bpsbook`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `dbbuku`
--

CREATE TABLE `dbbuku` (
  `kode` varchar(13) NOT NULL,
  `pengarang` text NOT NULL,
  `judul` varchar(100) NOT NULL,
  `ringkasan` mediumtext NOT NULL,
  `nilai_satuan` int(255) NOT NULL,
  `nilai_barang` int(255) NOT NULL,
  `ruangan` varchar(255) NOT NULL,
  `posisi_barang` varchar(255) NOT NULL,
  `kondisi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `dbbuku`
--

INSERT INTO `dbbuku` (`kode`, `pengarang`, `judul`, `ringkasan`, `nilai_satuan`, `nilai_barang`, `ruangan`, `posisi_barang`, `kondisi`) VALUES
('0', 'mwkjcv', '1242', 'wqlckpo', 0, 0, '', '', ''),
('124', 'jnasln', 'lnlaskdn', 'lnasldsa', 0, 0, '', '', ''),
('8995757234001', 'sandjk', 'fd', 'dksl', 0, 495, 'lanw 1', 'undjs 8', 'baik');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_login`
--

CREATE TABLE `tbl_login` (
  `id` int(12) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `no_hape` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_login`
--

INSERT INTO `tbl_login` (`id`, `username`, `password`, `nama_lengkap`, `no_hape`, `email`) VALUES
(1, 'admin', 'admin', '', '', ''),
(2, 'FreeRhyme123', 'chandra123', 'Alfian Chandra', '089698926910', 'alfian.github404@gmail.com'),
(3, 'test123', 'test123', 'Ais', '0812345679', 'test@test');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dbbuku`
--
ALTER TABLE `dbbuku`
  ADD PRIMARY KEY (`kode`);

--
-- Indexes for table `tbl_login`
--
ALTER TABLE `tbl_login`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_login`
--
ALTER TABLE `tbl_login`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
