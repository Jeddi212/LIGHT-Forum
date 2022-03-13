-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 01 Bulan Mei 2020 pada 10.20
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
-- Database: `light_db`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `income`
--

CREATE TABLE `income` (
  `no` int(11) NOT NULL,
  `total_income` int(11) DEFAULT NULL,
  `jenis_income` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `income`
--

INSERT INTO `income` (`no`, `total_income`, `jenis_income`) VALUES
(1, 14000000, 'Donasi'),
(2, 1720000, 'Pembelian Merchandise');

-- --------------------------------------------------------

--
-- Struktur dari tabel `members`
--

CREATE TABLE `members` (
  `id` int(11) NOT NULL,
  `first_name` varchar(30) DEFAULT NULL,
  `last_name` varchar(30) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `username` varchar(30) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `type` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `members`
--

INSERT INTO `members` (`id`, `first_name`, `last_name`, `gender`, `username`, `email`, `password`, `type`) VALUES
(1, 'Alexander', 'Hansen', 'male', 'Hansen123', 'alexanderhansen124@gmail.com', '7247b614abb75e14231ad58ed5ea32e5', 'Admin'),
(2, 'Lucky', 'Setiawan', 'male', 'LuckySetia77', 'luckysetiawan0802@gmail.com', '95ff68cd65e8afe15e3228b8cd2aa82c', 'Admin'),
(3, 'Jedediah', 'Fanuel', 'male', 'JeddiFan', 'JedediahF51@gmail.com', '48c8e699e2a05731c7e01fdb6bd2e664', 'Admin'),
(4, 'Fedly', 'Septian', 'male', 'Fedly123', 'fedlyseptian.FS@gmail.com', '39ed6d122bc3528f14050d6fb8b679b1', 'Admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `participant`
--

CREATE TABLE `participant` (
  `id` int(11) NOT NULL,
  `id_event` char(10) DEFAULT NULL,
  `jenis_peserta` char(3) DEFAULT NULL,
  `nickname` char(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `participant`
--

INSERT INTO `participant` (`id`, `id_event`, `jenis_peserta`, `nickname`) VALUES
(1, 'tournament', 'vip', 'SUPREMIE'),
(2, 'gathering', 'reg', 'JOSS');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembelian_merchandise`
--

CREATE TABLE `pembelian_merchandise` (
  `id` int(11) NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `telepon` varchar(30) DEFAULT NULL,
  `id_merch` varchar(30) DEFAULT NULL,
  `jumlah` int(11) DEFAULT NULL,
  `alamat_lengkap` varchar(255) DEFAULT NULL,
  `total_harga` int(11) DEFAULT NULL,
  `tanggal` varchar(255) DEFAULT NULL,
  `foto_bukti` varchar(255) DEFAULT NULL,
  `komentar` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pembelian_merchandise`
--

INSERT INTO `pembelian_merchandise` (`id`, `username`, `email`, `telepon`, `id_merch`, `jumlah`, `alamat_lengkap`, `total_harga`, `tanggal`, `foto_bukti`, `komentar`) VALUES
(1, 'Fedly123', 'fedlyseptian.FS@gmail.com', '082190239876', '00001', 2, 'jl.cicadas no.05, kota Bandung', 200000, '2020-05-01', '../Upload_bukti_pembelian/kaos_hitam_mobile_legend.jpg', 'Semoga sampai di tempat dengan aman'),
(2, 'Fedly123', 'fedlyseptian.FS@gmail.com', '082183019283', '00004', 3, 'jl.cicadas no.05, kota Bandung', 210000, '2020-05-01', '../Upload_bukti_pembelian/topi_hitam_mobile_legend.jpg', 'semoga sesuai harapan barang nya'),
(3, 'Fedly123', 'fedlyseptian.FS@gmail.com', '082119029867', '00007', 5, 'jl. du, no. 09, kota Bandung', 350000, '2020-05-01', '../Upload_bukti_pembelian/gantungan_mobile_legend.jpg', 'packing dengan rapi yaa'),
(4, 'Fedly123', 'fedlyseptian.FS@gmail.com', '082119029867', '00006', 10, 'jl.cicadas no.05, kota Bandung', 800000, '2020-05-01', '../Upload_bukti_pembelian/bantal_putih_mobile_legend.jpg', 'Tolong di packing dengan aman yaa'),
(5, 'Fedly123', 'fedlyseptian.FS@gmail.com', '082183019283', '00005', 2, 'jl. du, no. 09, kota Bandung', 160000, '2020-05-01', '../Upload_bukti_pembelian/tas_selendang_putih_mobile_legend.jpg', 'Semoga selamat sampai tujuan dengan rapi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pendonasi`
--

CREATE TABLE `pendonasi` (
  `id` int(11) NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `country` varchar(50) DEFAULT NULL,
  `jumlah_donasi` int(11) DEFAULT NULL,
  `tanggal` varchar(50) DEFAULT NULL,
  `komentar` varchar(255) DEFAULT NULL,
  `foto_bukti` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pendonasi`
--

INSERT INTO `pendonasi` (`id`, `username`, `email`, `country`, `jumlah_donasi`, `tanggal`, `komentar`, `foto_bukti`) VALUES
(1, 'Fedly123', 'fedlyseptian.FS@gmail.com', 'Indonesia', 5000000, '2020-05-01', 'Semoga bermanfaat', '../Upload_bukti_donasi/kaos_putih_mobile_legend.jpg'),
(2, 'Fedly123', 'fedlyseptian.FS@gmail.com', 'Antartika', 2000000, '2020-05-01', 'Semoga Sukses', '../Upload_bukti_donasi/topi_hitam_mobile_legend.jpg'),
(3, 'Dirahasiakan', 'Dirahasiakan', 'Indonesia', 5000000, '2020-05-01', 'Semoga bermanfaat', '../Upload_bukti_donasi/tas_selendang_putih_mobile_legend.jpg'),
(4, 'Dirahasiakan', 'Dirahasiakan', 'Amerika', 2000000, '2020-05-01', 'semangat', '../Upload_bukti_donasi/hoodie_hitam_mobile_legend.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `stock`
--

CREATE TABLE `stock` (
  `no` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `id_merch` varchar(30) DEFAULT NULL,
  `harga` int(11) DEFAULT NULL,
  `stock` int(11) DEFAULT NULL,
  `deskripsi` varchar(200) DEFAULT NULL,
  `foto_barang` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `stock`
--

INSERT INTO `stock` (`no`, `name`, `id_merch`, `harga`, `stock`, `deskripsi`, `foto_barang`) VALUES
(1, 'Kaos Hitam Mobile Legends', '00001', 100000, 68, 'Kaos warna hitam dengan gambar logo game mobile legends', '../Upload_barang_merchandise/kaos_hitam_mobile_legend.jpg'),
(2, 'Kaos Putih Mobile Legends', '00002', 100000, 70, 'Kaos warna putih dengan gambar karakter hero di game mobile legends yaitu guinevere ', '../Upload_barang_merchandise/kaos_putih_mobile_legend.jpg'),
(3, 'Hoodie Hitam Mobile Legends', '00003', 180000, 117, 'Hoodie warna hitam dengan gambar logo game mobile legends', '../Upload_barang_merchandise/hoodie_hitam_mobile_legend.jpg'),
(4, 'Topi Hitam Mobile Legends', '00004', 70000, 145, 'Topi warna hitam dengan gambar logo game mobile legends', '../Upload_barang_merchandise/topi_hitam_mobile_legend.jpg'),
(5, 'Tas Selendang Putih Mobile Legends', '00005', 80000, 66, 'Tas selendang warna putih dengan gambar karakter hero di game mobile legends bernama Nana', '../Upload_barang_merchandise/tas_selendang_putih_mobile_legend.jpg'),
(6, 'Bantal Putih Mobile Legends', '00006', 80000, 110, 'Bantal warna putih dengan gambar karakter hero di game mobile legends yaitu Roger dan Ruby', '../Upload_barang_merchandise/bantal_putih_mobile_legend.jpg'),
(7, 'Gantungan Mobile Legends', '00007', 70000, 145, 'Aksesoris gantungan dengan gambar karakter hero di game mobile legends yaitu Alucard dan Miya', '../Upload_barang_merchandise/gantungan_mobile_legend.jpg'),
(8, 'Gantungan Mobile Legends', '00008', 35000, 150, 'Aksesoris gantungan dengan gambar karakter hero di game mobile legends yaitu Odette', '../Upload_barang_merchandise/gantungan_mobile_legend_3.jpg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `income`
--
ALTER TABLE `income`
  ADD PRIMARY KEY (`no`);

--
-- Indeks untuk tabel `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `participant`
--
ALTER TABLE `participant`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pembelian_merchandise`
--
ALTER TABLE `pembelian_merchandise`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pendonasi`
--
ALTER TABLE `pendonasi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `stock`
--
ALTER TABLE `stock`
  ADD PRIMARY KEY (`no`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `income`
--
ALTER TABLE `income`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `members`
--
ALTER TABLE `members`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `participant`
--
ALTER TABLE `participant`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `pembelian_merchandise`
--
ALTER TABLE `pembelian_merchandise`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `pendonasi`
--
ALTER TABLE `pendonasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `stock`
--
ALTER TABLE `stock`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
