-- phpMyAdmin SQL Dump
-- version 4.5.0.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 22 Feb 2021 pada 02.12
-- Versi Server: 10.0.17-MariaDB
-- PHP Version: 5.5.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `app`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `kode_produk` varchar(4) NOT NULL,
  `nama_produk` varchar(50) NOT NULL,
  `merek_produk` varchar(30) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`kode_produk`, `nama_produk`, `merek_produk`, `kategori`, `harga`) VALUES
('A001', 'Mie Goreng', 'Indomie', 'Mie Instant', 3000),
('A002', 'Mie Rebus', 'Indomie', 'Mie Instant', 2500),
('A003', 'Air Mineral', 'Aqua', 'Minuman', 3000),
('A004', 'Teh Tarik', 'Nuu', 'Minuman', 5000),
('A005', 'Sabun ', 'Mama Lemon', 'Sabun Cuci Piring', 2000),
('A006', 'Sabun ', 'Lifeboy', 'Sabun Mandi', 3000),
('A007', 'Shampoo', 'Pantene', 'Shampoo', 500),
('A008', 'Sabun Bubuk', 'Rinso', 'Sabun Cuci Pakaian', 1000),
('B001', 'Tepung Terigu', 'Segitiga Biru', 'Bahan Pokok', 10000),
('B002', 'Mie Goreng', 'Lemonilo', 'Mie Instant', 7000),
('B003', 'Gula Pasir', 'Gulaku', 'Bahan Pokok', 16000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `stock`
--

CREATE TABLE `stock` (
  `kode_stok` varchar(4) NOT NULL,
  `kode_produk` varchar(4) NOT NULL,
  `stok_produk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'user', 'ee11cbb19052e40b07aac0ca060c23ee'),
(2, 'vera', '4341dfaa7259082022147afd371b69c3'),
(3, 'admin', '21232f297a57a5a743894a0e4a801fc3'),
(4, 'supplier', '99b0e8da24e29e4ccb5d7d76e677c2ac');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`kode_produk`);

--
-- Indexes for table `stock`
--
ALTER TABLE `stock`
  ADD PRIMARY KEY (`kode_stok`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
