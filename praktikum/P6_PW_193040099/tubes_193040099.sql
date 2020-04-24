-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Apr 2020 pada 03.16
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
  `Alat Musik` varchar(100) NOT NULL,
  `Merk` varchar(100) NOT NULL,
  `Alamat Toko` varchar(100) NOT NULL,
  `Harga` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `alatmusik`
--

INSERT INTO `alatmusik` (`id`, `Gambar`, `Alat Musik`, `Merk`, `Alamat Toko`, `Harga`) VALUES
(1, '1.jpg', 'Drum', 'Yamaha', 'Jl. Setiabuhi no. 39', 'RP. 10.000.000,00'),
(2, '2.jpg', 'Pianika', 'Yamaha', 'Jl. Dago no.23', 'Rp. 500.000,00'),
(3, '3.jpg', 'Gitar Akustik', 'Yamaha', 'Jl. Tamansari bawah no. 44', 'Rp. 1.500.000,00'),
(4, '5.jpg', 'Suling', 'Yamaha', 'Jl. Buah batu ', 'Rp. 350.000,00'),
(5, '6.jpg', 'Piano', 'Yamaha', 'Jl. Jatinangor', 'Rp. 15.000.000,00'),
(6, '7.jpg', 'keyboard Piano', 'Yamaha', 'Jl. Lembang no. 112', 'Rp. 3.500.000,00'),
(7, '8.jpg', 'Drum Elektrik', 'Yamaha', 'Jl. Dipatiukur', 'RP. 12.000.000,00'),
(8, '9.jpg', 'Gitar Elektrik', 'Yamaha', 'Jl. Linggawastu no. 12', 'Rp. 5.000.000,00'),
(9, '10.jpg', 'Kahon', 'Yamaha', 'Jl. Cihampelas', 'Rp. 2.000.000,00'),
(10, '11.jpg', 'Kecrekan', 'Yamaha', 'Jl. Kebun binatang no. 55', 'Rp. 250.000,00');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `alatmusik`
--
ALTER TABLE `alatmusik`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `alatmusik`
--
ALTER TABLE `alatmusik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
