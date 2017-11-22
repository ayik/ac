-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 10 Jan 2017 pada 09.21
-- Versi Server: 10.1.19-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `service`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(10) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'tian', 'tian2255');

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE `barang` (
  `no` varchar(5) NOT NULL,
  `jenis sparepart` varchar(20) NOT NULL,
  `pk` varchar(5) NOT NULL,
  `harga` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`no`, `jenis sparepart`, `pk`, `harga`) VALUES
('1', 'Tambah Freon', '0.5-1', 'Rp 175.000'),
('2', 'Isi Freon R22', '0.5-2', 'Rp 200.000'),
('3', 'Isi Freon R22', '1.5-2', 'Rp 250.000'),
('4', 'Capasitor 20 Mf', 'Unit', 'Rp 250.000'),
('5', 'Capasitor 30 Mf', 'Unit', 'Rp 350/000'),
('6', 'Capasitor 35 MF', 'Unit', 'Rp 375.000'),
('7', 'Capasitor 40 Mf', 'Unit', 'Rp 400.000'),
('8', 'Thermistor', 'Unit', 'Rp 250.000'),
('9', 'Pipa AC', '', 'Rp 60.000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `booking`
--

CREATE TABLE `booking` (
  `service` varchar(30) NOT NULL,
  `keluhan` varchar(50) NOT NULL,
  `pk` varchar(10) NOT NULL,
  `merk` varchar(20) NOT NULL,
  `jumlah` varchar(20) NOT NULL,
  `properti` varchar(30) NOT NULL,
  `descripsi` varchar(50) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `email` varchar(20) NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `ponsel` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `booking`
--

INSERT INTO `booking` (`service`, `keluhan`, `pk`, `merk`, `jumlah`, `properti`, `descripsi`, `nama`, `email`, `alamat`, `ponsel`) VALUES
('cuci ac split', 'sdasd', '0.5', 'asdasdsdasdas', '', 'rumah', 'asdasdas', 'sdasfdssdasd', 'sdadfds@asasa', 'dsfsdfdaasd', '213124324');

-- --------------------------------------------------------

--
-- Struktur dari tabel `booking1`
--

CREATE TABLE `booking1` (
  `sparepart` varchar(30) NOT NULL,
  `pk` varchar(20) NOT NULL,
  `merk` varchar(20) NOT NULL,
  `jumlah` varchar(20) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `ponsel` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `daftar`
--

CREATE TABLE `daftar` (
  `no` varchar(5) NOT NULL,
  `jasa` varchar(40) NOT NULL,
  `pk` varchar(22) NOT NULL,
  `harga` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `daftar`
--

INSERT INTO `daftar` (`no`, `jasa`, `pk`, `harga`) VALUES
('1', 'cuci AC', '0.5-1', 'Rp 85.000'),
('2', 'cuci AC', '1.5-2', 'Rp 90.000'),
('3', 'isi Freon', '0.5-1', 'Rp 100.000'),
('4', 'isi Freon', '1.5 - 2', 'Rp 150.000'),
('5', 'Service OVER HAUL (indoor)', '0.5-2', 'Rp 300.000'),
('6', 'Service OVER HAUL(in+out)', '0.5-2', 'Rp 600.000'),
('7', 'Service OVER HAUL(stand)', '3-5', 'Rp 250.000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
