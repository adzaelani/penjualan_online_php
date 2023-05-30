-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 03 Des 2020 pada 04.51
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Struktur dari tabel `tbl_login_pembeli`
--

CREATE TABLE `tbl_login_pembeli` (
  `username` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_login_pembeli`
--

INSERT INTO `tbl_login_pembeli` (`username`, `password`) VALUES
('gun', '123'),
('eee', 'eee'),
('eee', 'eee'),
('ee', 'eee');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pelanggan`
--

CREATE TABLE `tbl_pelanggan` (
  `nik` varchar(30) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `alamat` varchar(20) NOT NULL,
  `tempat_lahir` varchar(20) NOT NULL,
  `tgl_lahir` varchar(20) NOT NULL,
  `agama` varchar(20) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_pelanggan`
--

INSERT INTO `tbl_pelanggan` (`nik`, `nama`, `alamat`, `tempat_lahir`, `tgl_lahir`, `agama`, `jenis_kelamin`) VALUES
('e', 'de', 'e', 'e', '2020-12-29', 'islam', 'laki-laki'),
('de', 'de', 'eee', 'dd', '2020-12-30', 'islam', 'laki-laki');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pembeli`
--

CREATE TABLE `tbl_pembeli` (
  `id_pesanan` int(20) NOT NULL,
  `nama_barang` varchar(20) NOT NULL,
  `harga` int(20) NOT NULL,
  `pembelian` varchar(20) NOT NULL,
  `total` varchar(20) NOT NULL,
  `tgl_pembelian` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_pembeli`
--

INSERT INTO `tbl_pembeli` (`id_pesanan`, `nama_barang`, `harga`, `pembelian`, `total`, `tgl_pembelian`) VALUES
(1, 'r', 20000, '4', '80000', '2020-12-03 02:58:14'),
(2, 'r', 20000, '4', '80000', '2020-12-03 02:58:17');

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
('23', 'ge', 'de', 'aa', 2020, 'hindu', 'laki-laki', 'az', 'ss');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_produk`
--

CREATE TABLE `tbl_produk` (
  `id_produk` int(11) NOT NULL,
  `nama_produk` varchar(100) NOT NULL,
  `deskripsi_produk` varchar(250) NOT NULL,
  `foto_produk` varchar(100) NOT NULL,
  `harga` int(11) NOT NULL,
  `tgl_upload` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_produk`
--

INSERT INTO `tbl_produk` (`id_produk`, `nama_produk`, `deskripsi_produk`, `foto_produk`, `harga`, `tgl_upload`) VALUES
(1, 'r', 'bagus', 'Admin-icon.png', 20000, '2020-12-03 02:48:17');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_pembeli`
--
ALTER TABLE `tbl_pembeli`
  ADD PRIMARY KEY (`id_pesanan`);

--
-- Indeks untuk tabel `tbl_produk`
--
ALTER TABLE `tbl_produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_pembeli`
--
ALTER TABLE `tbl_pembeli`
  MODIFY `id_pesanan` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tbl_produk`
--
ALTER TABLE `tbl_produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
