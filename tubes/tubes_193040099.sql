-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 03 Bulan Mei 2020 pada 09.18
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tubes_193040099`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `alatmusik`
--

CREATE TABLE `alatmusik` (
  `id` int(11) NOT NULL,
  `Gambar` varchar(100) NOT NULL,
  `AlatMusik` varchar(100) NOT NULL,
  `Merk` varchar(100) NOT NULL,
  `AlamatToko` varchar(100) NOT NULL,
  `Harga` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `alatmusik`
--

INSERT INTO `alatmusik` (`id`, `Gambar`, `AlatMusik`, `Merk`, `AlamatToko`, `Harga`) VALUES
(1, '2.jpg', 'Pianika', 'Yamaha', 'Jl. Dago no.23', 'Rp. 500.000,00'),
(2, '3.jpg', 'Gitar Akustik', 'Yamaha', 'Jl. Tamansari bawah no. 44', 'Rp. 1.500.000,00'),
(3, '5.jpg', 'Suling', 'Yamaha', 'Jl. Buah batu ', 'Rp. 350.000,00'),
(4, '6.jpg', 'Piano', 'Yamaha', 'Jl. Jatinangor', 'Rp. 15.000.000,00'),
(5, '7.jpg', 'keyboard Piano', 'Yamaha', 'Jl. Lembang no. 112', 'Rp. 3.500.000,00'),
(6, '8.jpg', 'Drum Elektrik', 'Yamaha', 'Jl. Dipatiukur', 'RP. 12.000.000,00'),
(7, '9.jpg', 'Gitar Elektrik', 'Yamaha', 'Jl. Linggawastu no. 12', 'Rp. 5.000.000,00'),
(8, '10.jpg', 'Kahon', 'Yamaha', 'Jl. Cihampelas', 'Rp. 2.000.000,00'),
(9, '11.jpg', 'Kecrekan', 'Yamaha', 'Jl. Kebun binatang no. 55', 'Rp. 250.000,00'),
(10, '1.jpg', 'Drum', 'Yamaha', 'Jl. Cicalengka Np. 45', 'RP. 15.000.000,00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(65) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin'),
(2, 'fahri', '$2y$10$vQLSIoOlrU.17gJSuZGMgu4v7.qVo.Tm7lDYUs4cDkeUnzIHQc6wy');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `alatmusik`
--
ALTER TABLE `alatmusik`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `alatmusik`
--
ALTER TABLE `alatmusik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
