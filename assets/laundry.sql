-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 10, 2022 at 12:35 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laundry`
--

-- --------------------------------------------------------

--
-- Table structure for table `login_app`
--

CREATE TABLE `login_app` (
  `id` int(11) NOT NULL,
  `id_login` varchar(11) NOT NULL,
  `id_customer` varchar(20) NOT NULL,
  `name` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` varchar(60) NOT NULL,
  `no_hp` int(20) NOT NULL,
  `alamat` text NOT NULL,
  `role_id` int(11) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login_app`
--

INSERT INTO `login_app` (`id`, `id_login`, `id_customer`, `name`, `email`, `password`, `no_hp`, `alamat`, `role_id`, `date_created`) VALUES
(1, 'PGS001', '', 'Panos', 'adminrpl1@gmail.com', '12345', 0, '', 1, 1642482259),
(21, '', 'CTS001', 'D', 'devvanpk799@gmail.com', '123', 890, 'bwi', 3, 1642581711),
(24, 'PGS002', '', 'De', 'devvanpk788@gmail.com', '12345', 0, '', 2, 1643761678);

-- --------------------------------------------------------

--
-- Table structure for table `role_id`
--

CREATE TABLE `role_id` (
  `id_role` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `role_id`
--

INSERT INTO `role_id` (`id_role`, `role`) VALUES
(1, 'Admin'),
(2, 'Petugas');

-- --------------------------------------------------------

--
-- Table structure for table `tb_detail_pemesanan`
--

CREATE TABLE `tb_detail_pemesanan` (
  `id_detail_pemesanan` int(11) NOT NULL,
  `id_pemesanan` int(5) NOT NULL,
  `id_pakaian` varchar(10) NOT NULL,
  `jumlah_pakaian` int(11) NOT NULL,
  `harga_total` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_detail_pemesanan`
--

INSERT INTO `tb_detail_pemesanan` (`id_detail_pemesanan`, `id_pemesanan`, `id_pakaian`, `jumlah_pakaian`, `harga_total`) VALUES
(120, 83, 'PKA002', 12, '600'),
(121, 84, 'PKA002', 12, '600');

-- --------------------------------------------------------

--
-- Table structure for table `tb_laporan`
--

CREATE TABLE `tb_laporan` (
  `id` int(11) NOT NULL,
  `id_pemesanan` int(11) NOT NULL,
  `id_customer` varchar(100) NOT NULL,
  `jenis_pakaian` varchar(100) NOT NULL,
  `jumlah_pakaian` int(11) NOT NULL,
  `harga_total` int(11) NOT NULL,
  `tgl_pesan` date NOT NULL,
  `tgl_kembali` date NOT NULL,
  `status_pesan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_pakaian`
--

CREATE TABLE `tb_pakaian` (
  `id` int(11) NOT NULL,
  `id_pakaian` varchar(20) NOT NULL,
  `jenis_pakaian` varchar(128) NOT NULL,
  `harga_pakaian` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_pakaian`
--

INSERT INTO `tb_pakaian` (`id`, `id_pakaian`, `jenis_pakaian`, `harga_pakaian`) VALUES
(6, 'PKA001', 'Baju', 500),
(8, 'PKA002', 'Celana', 50);

-- --------------------------------------------------------

--
-- Table structure for table `tb_pemesanan`
--

CREATE TABLE `tb_pemesanan` (
  `id_pemesanan` int(11) NOT NULL,
  `id_customer` varchar(10) NOT NULL,
  `tgl_pesan` date NOT NULL,
  `tgl_eksekusi` date NOT NULL,
  `tgl_kembali` date NOT NULL,
  `status_pesan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_pemesanan`
--

INSERT INTO `tb_pemesanan` (`id_pemesanan`, `id_customer`, `tgl_pesan`, `tgl_eksekusi`, `tgl_kembali`, `status_pesan`) VALUES
(83, 'CTS001', '2022-02-19', '2022-02-10', '0000-00-00', 'Menuju Alamat Anda'),
(84, 'CTS001', '2022-02-03', '2022-02-03', '0000-00-00', 'Proses');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Administrator'),
(2, 'Petugas'),
(3, 'Customer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login_app`
--
ALTER TABLE `login_app`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_id`
--
ALTER TABLE `role_id`
  ADD PRIMARY KEY (`id_role`);

--
-- Indexes for table `tb_detail_pemesanan`
--
ALTER TABLE `tb_detail_pemesanan`
  ADD PRIMARY KEY (`id_detail_pemesanan`);

--
-- Indexes for table `tb_laporan`
--
ALTER TABLE `tb_laporan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_pakaian`
--
ALTER TABLE `tb_pakaian`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_pemesanan`
--
ALTER TABLE `tb_pemesanan`
  ADD PRIMARY KEY (`id_pemesanan`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login_app`
--
ALTER TABLE `login_app`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `role_id`
--
ALTER TABLE `role_id`
  MODIFY `id_role` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_detail_pemesanan`
--
ALTER TABLE `tb_detail_pemesanan`
  MODIFY `id_detail_pemesanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123;

--
-- AUTO_INCREMENT for table `tb_laporan`
--
ALTER TABLE `tb_laporan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_pakaian`
--
ALTER TABLE `tb_pakaian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tb_pemesanan`
--
ALTER TABLE `tb_pemesanan`
  MODIFY `id_pemesanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
