-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 02 Apr 2020 pada 06.06
-- Versi server: 10.4.8-MariaDB
-- Versi PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spkfu`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `alternatif`
--

CREATE TABLE `alternatif` (
  `id_alternatif` int(3) NOT NULL,
  `nama_alternatif` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `alternatif`
--

INSERT INTO `alternatif` (`id_alternatif`, `nama_alternatif`) VALUES
(11, 'Alter ego'),
(12, 'dua belas');

-- --------------------------------------------------------

--
-- Struktur dari tabel `aspek_teknik`
--

CREATE TABLE `aspek_teknik` (
  `id_aspek_teknik` int(3) NOT NULL,
  `id_alternatif` int(3) NOT NULL,
  `id_kriteria` int(3) NOT NULL,
  `nilai_kriteria` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `aspek_teknik`
--

INSERT INTO `aspek_teknik` (`id_aspek_teknik`, `id_alternatif`, `id_kriteria`, `nilai_kriteria`) VALUES
(106, 11, 1, '1'),
(107, 11, 2, '1'),
(108, 11, 3, '1'),
(109, 11, 4, '1'),
(110, 11, 5, '1'),
(111, 11, 6, '1'),
(112, 11, 7, '1'),
(113, 12, 1, '1'),
(114, 12, 2, '1'),
(115, 12, 3, '1'),
(116, 12, 4, '1'),
(117, 12, 5, '1'),
(118, 12, 6, '1'),
(119, 12, 7, '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `intervals`
--

CREATE TABLE `intervals` (
  `id_interval` int(3) NOT NULL,
  `id_kriteria` int(3) NOT NULL,
  `nilai_kriteria` varchar(2) NOT NULL,
  `nilai_interval` varchar(50) NOT NULL,
  `fuzzy_number1` float(3,2) NOT NULL,
  `fuzzy_number2` float(3,2) NOT NULL,
  `fuzzy_number3` float(3,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `intervals`
--

INSERT INTO `intervals` (`id_interval`, `id_kriteria`, `nilai_kriteria`, `nilai_interval`, `fuzzy_number1`, `fuzzy_number2`, `fuzzy_number3`) VALUES
(1, 1, '1', 'Hutan (forest)', 0.75, 1.00, 1.00),
(2, 1, '2', 'Semak belukar (shrubs)', 0.50, 0.75, 1.00),
(3, 1, '3', 'Ladang/tegalan (field)', 0.25, 0.50, 0.75),
(4, 1, '4', 'Sawah tadah hujan (rainfed)', 0.00, 0.25, 0.50),
(5, 1, '5', 'Perkampungan (rural area)', 0.00, 0.00, 0.25),
(6, 2, '1', '160.000 &le; &Chi; &lt; 200.000 m&sup3;', 0.75, 1.00, 1.00),
(7, 2, '2', '120.000 &le; &Chi; &lt; 160.000 m&sup3;', 0.50, 0.75, 1.00),
(8, 2, '3', '80.000 &le; &Chi; &lt; 40.000 m&sup3;', 0.25, 0.50, 0.75),
(9, 2, '4', '40.000 &le; &Chi; &lt; 80.000 m&sup3;', 0.00, 0.25, 0.50),
(10, 2, '5', '&Chi; &lt; 40.000 m&sup3;', 0.00, 0.00, 0.25),
(11, 3, '1', '&Chi; &ge; 7,5 ha', 0.75, 1.00, 1.00),
(12, 3, '2', '6,0 &le; &Chi; &lt; 7,5 ha', 0.50, 0.75, 1.00),
(13, 3, '3', '4,5 &le; &Chi; &lt; 6,0 ha', 0.25, 0.50, 0.75),
(14, 3, '4', '3,0 &le; &Chi; &lt; 4,5 ha', 0.00, 0.25, 0.50),
(15, 3, '5', '1,5 &le; &Chi; &lt; 3,0 ha', 0.00, 0.00, 0.25),
(16, 4, '1', '&Chi; &ge; 1.500.000 m&sup3;', 0.75, 1.00, 1.00),
(17, 4, '2', '750.000 &le; &Chi; &lt; 1.500.000 m&sup3;', 0.50, 0.75, 1.00),
(18, 4, '3', '500.000 &le; &Chi; &lt; 750.000 m&sup3;', 0.25, 0.50, 0.75),
(19, 4, '4', '250.000 &le; &Chi; &lt; 500.000 m&sup3;', 0.00, 0.25, 0.50),
(20, 4, '5', '&Chi; &lt; 250.000 m&sup3;', 0.00, 0.00, 0.25),
(21, 5, '1', '&Chi; &ge; 100 hari', 0.75, 1.00, 1.00),
(22, 5, '2', '80 &le; &Chi; &lt; 100 hari', 0.50, 0.75, 1.00),
(23, 5, '3', '60 &le; &Chi; &lt; 80 hari', 0.25, 0.50, 0.75),
(24, 5, '4', '40 &le; &Chi; &lt; 60 hari', 0.00, 0.25, 0.50),
(25, 5, '5', '&Chi; &lt; 40 hari', 0.00, 0.00, 0.25),
(26, 6, '1', '&Chi; &ge; Rp40.000', 0.75, 1.00, 1.00),
(27, 6, '2', 'Rp30.000 &le; &Chi; &lt; Rp40.000', 0.50, 0.75, 1.00),
(28, 6, '3', 'Rp20.000 &le; &Chi; &lt; Rp30.000', 0.25, 0.50, 0.75),
(29, 6, '4', 'Rp10.000 &le; &Chi; &lt; Rp20.000', 0.00, 0.25, 0.50),
(30, 6, '5', '&Chi; &lt; Rp10.000', 0.00, 0.00, 0.25),
(31, 7, '1', 'Tersedia jalan aspal menuju lokasi (pavement road)', 0.67, 1.00, 1.00),
(32, 7, '2', 'Jalan makadam/tanah sampai lokasi (Ground road)', 0.33, 0.67, 1.00),
(33, 7, '3', 'Jalan setapak (Footpath)', 0.00, 0.33, 0.67),
(34, 7, '4', 'Tidak tersedia jalan (No road)', 0.00, 0.00, 0.33);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kriteria`
--

CREATE TABLE `kriteria` (
  `id_kriteria` int(3) NOT NULL,
  `user_id` int(3) NOT NULL,
  `nama_kriteria` varchar(50) NOT NULL,
  `nilai_bobot1` float(3,2) NOT NULL,
  `nilai_bobot2` float(3,2) NOT NULL,
  `nilai_bobot3` float(3,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kriteria`
--

INSERT INTO `kriteria` (`id_kriteria`, `user_id`, `nama_kriteria`, `nilai_bobot1`, `nilai_bobot2`, `nilai_bobot3`) VALUES
(1, 1, 'Vegetasi Area Genangan Embung <em>(Benefit)</em>', 0.10, 0.34, 0.70),
(2, 1, 'Volume Material Timbunan <em>(Cost)</em>', 0.00, 0.08, 0.40),
(3, 1, 'Luas daerah yang akan dibebaskan <em>(Cost)</em>', 0.10, 0.37, 0.60),
(4, 1, 'Volume Tampungan Efektif <em>(Benefit)</em>', 0.00, 0.27, 0.50),
(5, 1, 'Lama Operasi <em>(Benefit)</em>', 0.10, 0.31, 0.50),
(6, 1, 'Harga air per m<sup>3</sup> <em> (Cost)</em>', 0.00, 0.30, 0.60),
(7, 1, 'Akses jalan menuju lokasi embung<em>(Benefit)</em>', 0.10, 0.38, 0.70);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `user_id` int(3) NOT NULL,
  `nama_user` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `hak_akses` tinyint(1) NOT NULL,
  `email` varchar(50) NOT NULL,
  `jenis_kelamin` tinyint(1) NOT NULL,
  `instansi` varchar(60) NOT NULL,
  `last_login` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`user_id`, `nama_user`, `username`, `password`, `hak_akses`, `email`, `jenis_kelamin`, `instansi`, `last_login`) VALUES
(1, 'Kornelius Satria B', 'ksatria', '$2y$10$z3fVYUKI3xgJ8/Y99CycXOuIXZmbpG4nXi.8BT5k0/NvNPnOlvugi', 1, 'kor1@gmail.com', 1, 'UNDIP', '2020-03-18 11:05:14'),
(2, 'Yayaya', 'yayaya', '$2y$10$XA9uczP3v7VOEi21frlytu.jZKLjpnwsvN5Yr4QkxFaiPs5D88rxy', 1, 'yaya1@gmail.com', 1, 'UND', '2020-03-16 10:13:53'),
(3, 'yoi', 'yoi', '$2y$10$c86M8dvwlOMnaHBImQoZ9el50sSqXVJJJ.LLQiezZ8AYMKU.vf9.6', 1, 'yoi@gmail.com', 1, 'UUU', '2020-03-16 11:07:53'),
(4, 'admin', 'admin', '$2y$10$kERgbEqW4hND5fddsPWod.jkmhxQPLn28FtkRIFKfffIfKA6Rz48q', 1, 'admin@gmail.com', 1, 'admin', '2020-03-16 13:00:05'),
(5, 'admin2', 'admin2', '$2y$10$ycJvmULY11iABLCSOczBwORofTo1m2iIFlJbRg9whVkdiV7R0cYCO', 1, 'admin2@gmail.com', 1, 'admin2', '2020-03-17 07:24:12'),
(6, 'password2', 'password', '$2y$10$JZjfXEUoEk/OcL1D/GW3PuTJ5ktMdtUIz9JsvIE5kHJiiU4i5IRLe', 1, 'password@gmail.com', 2, 'password', '2020-03-21 06:51:39'),
(7, 'pengguna', 'pengguna', '$2y$10$kzOUTNKYjn/fWr34LGFA2e3pD0.o5mH0szCMF3zmsYEmqiLc/u672', 1, 'pengguna@gmail.com', 2, 'INstansi', '2020-03-21 05:13:54');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `alternatif`
--
ALTER TABLE `alternatif`
  ADD PRIMARY KEY (`id_alternatif`);

--
-- Indeks untuk tabel `aspek_teknik`
--
ALTER TABLE `aspek_teknik`
  ADD PRIMARY KEY (`id_aspek_teknik`),
  ADD KEY `aspek_teknik_1` (`id_kriteria`);

--
-- Indeks untuk tabel `intervals`
--
ALTER TABLE `intervals`
  ADD PRIMARY KEY (`id_interval`),
  ADD KEY `id_kriteria` (`id_kriteria`);

--
-- Indeks untuk tabel `kriteria`
--
ALTER TABLE `kriteria`
  ADD PRIMARY KEY (`id_kriteria`),
  ADD KEY `id_user` (`user_id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `alternatif`
--
ALTER TABLE `alternatif`
  MODIFY `id_alternatif` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `aspek_teknik`
--
ALTER TABLE `aspek_teknik`
  MODIFY `id_aspek_teknik` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=120;

--
-- AUTO_INCREMENT untuk tabel `intervals`
--
ALTER TABLE `intervals`
  MODIFY `id_interval` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT untuk tabel `kriteria`
--
ALTER TABLE `kriteria`
  MODIFY `id_kriteria` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `aspek_teknik`
--
ALTER TABLE `aspek_teknik`
  ADD CONSTRAINT `aspek_teknik_1` FOREIGN KEY (`id_kriteria`) REFERENCES `kriteria` (`id_kriteria`);

--
-- Ketidakleluasaan untuk tabel `intervals`
--
ALTER TABLE `intervals`
  ADD CONSTRAINT `intervals_ibfk_1` FOREIGN KEY (`id_kriteria`) REFERENCES `kriteria` (`id_kriteria`);

--
-- Ketidakleluasaan untuk tabel `kriteria`
--
ALTER TABLE `kriteria`
  ADD CONSTRAINT `kriteria_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
