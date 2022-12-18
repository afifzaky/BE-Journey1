-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 17 Des 2022 pada 05.31
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
-- Database: `gfuel`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `payment`
--

CREATE TABLE `payment` (
  `idpayment` bigint(20) NOT NULL,
  `namaminuman` varchar(255) NOT NULL,
  `hargaminuman` int(255) NOT NULL,
  `pembeli` varchar(255) NOT NULL,
  `alamatpembeli` varchar(255) NOT NULL,
  `pembayaran` varchar(255) NOT NULL,
  `statuspayment` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `payment`
--

INSERT INTO `payment` (`idpayment`, `namaminuman`, `hargaminuman`, `pembeli`, `alamatpembeli`, `pembayaran`, `statuspayment`) VALUES
(2, 'Minuman Merah Energi', 17000, 'Afif Zaky', 'Bekasi', 'Dana', 'Selesai'),
(4, 'Minuman Merah Energi', 17000, 'Imron', 'Juanda', 'ShopeePay', 'Selesai');

-- --------------------------------------------------------

--
-- Struktur dari tabel `produkgfuel`
--

CREATE TABLE `produkgfuel` (
  `idproduk` bigint(20) NOT NULL,
  `namaproduk` varchar(255) NOT NULL,
  `hargaproduk` int(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `gambarproduk` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `produkgfuel`
--

INSERT INTO `produkgfuel` (`idproduk`, `namaproduk`, `hargaproduk`, `deskripsi`, `gambarproduk`) VALUES
(1, 'Minuman Merah Energi', 17000, 'wenakkkk', 'produkgfuel.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `iduser` bigint(20) NOT NULL,
  `namauser` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`iduser`, `namauser`, `email`, `password`) VALUES
(1, '', 'makima1@gmail.com', ''),
(2, '', 'makima1@gmail.com', ''),
(3, 'DenjiKun', 'denji1@gmail.com', 'denji'),
(4, 'Afif Zaky', 'afifzaky@gmail.com', 'afif');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`idpayment`);

--
-- Indeks untuk tabel `produkgfuel`
--
ALTER TABLE `produkgfuel`
  ADD PRIMARY KEY (`idproduk`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`iduser`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `payment`
--
ALTER TABLE `payment`
  MODIFY `idpayment` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `produkgfuel`
--
ALTER TABLE `produkgfuel`
  MODIFY `idproduk` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `iduser` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
