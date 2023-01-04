-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 04 Jan 2023 pada 07.01
-- Versi server: 10.4.25-MariaDB
-- Versi PHP: 8.0.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vapestore_dariel`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `my_goods`
--

CREATE TABLE `my_goods` (
  `ID_Goods` int(11) NOT NULL,
  `Nama_Goods` varchar(255) NOT NULL,
  `Manufacture` varchar(255) NOT NULL,
  `Stok` int(11) NOT NULL,
  `tanggal_beli` date NOT NULL,
  `deskripsi` text NOT NULL,
  `Foto` varchar(255) NOT NULL,
  `Status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `my_goods`
--

INSERT INTO `my_goods` (`ID_Goods`, `Nama_Goods`, `Manufacture`, `Stok`, `tanggal_beli`, `deskripsi`, `Foto`, `Status`) VALUES
(1, 'Machina212', 'Deus212', 90212, '2023-01-26', 'lorem ipsum22', './assets/img/Gambar/Buku/1672728853-Machina.png', 'Lunas'),
(2, 'waw', '2', 214, '2023-01-24', '14141', './assets/img/Gambar/Buku/1672728894-waw.png', 'Lunas'),
(3, 'waw', '2', 214, '2023-01-24', '14141', './assets/img/Gambar/Buku/1672728977-waw.png', 'Lunas'),
(4, 'waw', '2', 214, '2023-01-24', '14141', './assets/img/Gambar/Buku/1672729001-waw.png', 'Lunas');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `ID` bigint(20) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `no_hp` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`ID`, `nama`, `email`, `password`, `no_hp`) VALUES
(1, 'dariel2', 'dariel@gmail.com', 'dariel', '222');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `my_goods`
--
ALTER TABLE `my_goods`
  ADD PRIMARY KEY (`ID_Goods`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `my_goods`
--
ALTER TABLE `my_goods`
  MODIFY `ID_Goods` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `ID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
