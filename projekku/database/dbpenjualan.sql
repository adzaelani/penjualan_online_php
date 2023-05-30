-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 25 Nov 2020 pada 01.02
-- Versi server: 10.4.8-MariaDB
-- Versi PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbpenjualan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_penjual`
--

CREATE TABLE `tbl_penjual` (
  `id_idtoko` varchar(20) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `alamat` varchar(20) NOT NULL,
  `tempat_lahir` varchar(20) NOT NULL,
  `tanggal_lahir` int(20) NOT NULL,
  `agama` varchar(20) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `nama_toko` varchar(20) NOT NULL,
  `alamat_toko` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_penjual`
--

INSERT INTO `tbl_penjual` (`id_idtoko`, `nama`, `alamat`, `tempat_lahir`, `tanggal_lahir`, `agama`, `jenis_kelamin`, `nama_toko`, `alamat_toko`) VALUES
('454', 'Ahmad ', 'kp. Rengas sepuluh', 'bekasi', 2020, 'islam', 'laki-laki', 'toko', 'cikarang');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_produk`
--

CREATE TABLE `tbl_produk` (
  `id_produk` int(11) NOT NULL,
  `nama_produk` varchar(100) NOT NULL,
  `foto_produk` varchar(100) NOT NULL,
  `harga` int(11) NOT NULL,
  `tgl_upload` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_produk`
--

INSERT INTO `tbl_produk` (`id_produk`, `nama_produk`, `foto_produk`, `harga`, `tgl_upload`) VALUES
(1, 'Ahmad ', '', 20000, '2020-11-24 12:08:44'),
(2, 'Ahmad ', '', 20000, '2020-11-24 12:10:52'),
(3, 'Ahmad ', '', 20000, '2020-11-24 12:15:39'),
(4, 'Ahmad ', '', 20000, '2020-11-24 12:18:12'),
(5, 'Ahmad ', '', 20000, '2020-11-24 12:18:14'),
(6, 'Ahmad ', '', 20000, '2020-11-24 12:18:15'),
(7, 'Ahmad ', '', 20000, '2020-11-24 12:18:23'),
(8, 'Ahmad ', '20200618_145906.jpg', 20000, '2020-11-24 12:18:34'),
(9, 'Ahmad Zaelani', 'aang.jpeg', 20000, '2020-11-24 12:22:00');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_produk`
--
ALTER TABLE `tbl_produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_produk`
--
ALTER TABLE `tbl_produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
