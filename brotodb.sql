-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 27, 2017 at 03:37 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `brotodb`
--

-- --------------------------------------------------------

--
-- Table structure for table `bahan_baku`
--

CREATE TABLE `bahan_baku` (
  `id_bahan_baku` int(11) NOT NULL,
  `nama_bahan_baku` varchar(50) NOT NULL,
  `stok` double DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `harga` int(11) DEFAULT NULL,
  `jenis` varchar(30) NOT NULL,
  `satuan` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bahan_baku`
--

INSERT INTO `bahan_baku` (`id_bahan_baku`, `nama_bahan_baku`, `stok`, `updated_at`, `created_at`, `harga`, `jenis`, `satuan`) VALUES
(1, 'Garam', 700, '2017-01-26 15:40:30', '0000-00-00 00:00:00', 2000, 'Bumbu', 'gram'),
(2, 'Roti Hambuger', 997, '2017-01-26 15:40:45', '0000-00-00 00:00:00', 7000, 'Bahan Pokok', 'biji'),
(3, 'Daging Sapi', 997, '2017-01-26 15:42:12', '0000-00-00 00:00:00', 2000, 'Daging', 'Kg'),
(4, 'Sawi', 1000, '2017-01-26 15:42:02', '0000-00-00 00:00:00', 1000, 'Sayuran', 'Kg'),
(5, 'Vanila', 1000, '2017-01-26 15:41:53', '0000-00-00 00:00:00', 1000, 'Rempah', 'gram'),
(6, 'Beras', 1000, '2017-01-26 15:41:34', '0000-00-00 00:00:00', 2000, 'Bahan Pokok', 'Kg');

-- --------------------------------------------------------

--
-- Table structure for table `detail_pesanan`
--

CREATE TABLE `detail_pesanan` (
  `id_detail_pesanan` int(11) NOT NULL,
  `id_pesanan` varchar(15) DEFAULT NULL,
  `id` int(11) DEFAULT '0',
  `status` int(2) DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `notification` int(2) DEFAULT NULL,
  `id_pelayan` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `jumlah_bayar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detail_pesanan`
--

INSERT INTO `detail_pesanan` (`id_detail_pesanan`, `id_pesanan`, `id`, `status`, `updated_at`, `created_at`, `notification`, `id_pelayan`, `total`, `jumlah_bayar`) VALUES
(70, 'i10120171315', 3, 5, '2017-01-27 03:57:31', '2017-01-09 23:46:54', 1, 6, 80000, 100000),
(72, 'i10120171416', 3, 3, '2017-01-10 00:26:01', '2017-01-10 00:06:27', 1, 6, 0, 0),
(74, 'i10120171417', 3, 3, '2017-01-10 00:30:48', '2017-01-10 00:22:33', 1, 6, 0, 0),
(76, 'i10120171418', 3, 3, '2017-01-10 00:34:56', '2017-01-10 00:32:39', 1, 6, 0, 0),
(78, 'i1012017141', 3, 3, '2017-01-10 00:38:19', '2017-01-10 00:37:43', 1, 6, 0, 0),
(80, 'i1012017147', 3, 3, '2017-01-10 00:46:20', '2017-01-10 00:45:34', 1, 6, 0, 0),
(81, 'i1012017171', 3, 1, '2017-01-10 03:41:23', '2017-01-10 03:41:21', 0, 6, 0, 0),
(82, 'i1012017171', 7, 0, '2017-01-10 03:41:21', '2017-01-10 03:41:21', 0, 6, 0, 0),
(83, 'i1912017202', 3, 3, '2017-01-20 04:14:03', '2017-01-19 06:03:46', 1, 6, 0, 0),
(84, 'i1912017202', 7, 0, '2017-01-19 06:05:33', '2017-01-19 06:03:46', 3, 6, 0, 0),
(85, 'i2412017171', 3, 3, '2017-01-24 03:14:43', '2017-01-24 03:13:50', 1, 6, 0, 0),
(86, 'i2412017171', 7, 0, '2017-01-24 03:14:40', '2017-01-24 03:13:50', 3, 6, 0, 0),
(87, 'i24120172210', 3, 1, '2017-01-26 02:07:08', '2017-01-24 08:17:19', 0, 6, 0, 0),
(88, 'i24120172210', 7, 0, '2017-01-24 08:17:19', '2017-01-24 08:17:19', 0, 6, 0, 0),
(89, 'i2512017141', 3, 1, '2017-01-26 02:07:09', '2017-01-25 00:53:51', 0, 6, 0, 0),
(90, 'i2512017141', 7, 0, '2017-01-25 00:53:51', '2017-01-25 00:53:51', 0, 6, 0, 0),
(91, 'i2612017132', 3, 1, '2017-01-26 02:07:11', '2017-01-25 23:04:31', 0, 6, 0, 0),
(92, 'i2612017132', 7, 0, '2017-01-25 23:04:31', '2017-01-25 23:04:31', 0, 6, 0, 0),
(93, 'i2612017131', 3, 1, '2017-01-26 02:07:13', '2017-01-25 23:31:01', 0, 6, 0, 0),
(94, 'i2612017131', 7, 0, '2017-01-25 23:31:01', '2017-01-25 23:31:01', 0, 6, 0, 0),
(95, 'i2612017134', 3, 1, '2017-01-26 02:07:15', '2017-01-25 23:37:07', 0, 6, 0, 0),
(96, 'i2612017134', 7, 0, '2017-01-25 23:37:07', '2017-01-25 23:37:07', 0, 6, 0, 0),
(97, 'i2612017135', 3, 1, '2017-01-26 02:07:17', '2017-01-25 23:38:22', 0, 6, 0, 0),
(98, 'i2612017135', 7, 0, '2017-01-25 23:38:22', '2017-01-25 23:38:22', 0, 6, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `meja`
--

CREATE TABLE `meja` (
  `nomor_meja` int(2) NOT NULL,
  `jumlah` int(2) DEFAULT NULL,
  `status` varchar(2) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `id_pesanan` varchar(70) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `meja`
--

INSERT INTO `meja` (`nomor_meja`, `jumlah`, `status`, `updated_at`, `created_at`, `id_pesanan`) VALUES
(1, 2, '1', '2017-01-26 06:17:36', '0000-00-00 00:00:00', 'i2612017131'),
(2, 2, '1', '2017-01-26 06:36:15', '0000-00-00 00:00:00', 'i2612017132'),
(3, 2, '1', '2017-01-26 06:12:32', '0000-00-00 00:00:00', 'i2612017133'),
(4, 2, '1', '2017-01-26 06:36:47', '0000-00-00 00:00:00', 'i2612017134'),
(5, 2, '1', '2017-01-26 06:37:30', '0000-00-00 00:00:00', 'i2612017135'),
(6, 2, '1', '2017-01-26 11:44:01', '0000-00-00 00:00:00', 'i2612017186'),
(7, 2, '1', '2017-01-26 09:59:19', '0000-00-00 00:00:00', 'i2612017167'),
(8, 2, '1', '2017-01-27 06:12:39', '0000-00-00 00:00:00', 'i2712017138'),
(9, 4, '0', '2017-01-24 15:13:40', '0000-00-00 00:00:00', '0'),
(10, 4, '1', '2017-01-24 15:15:20', '0000-00-00 00:00:00', 'i24120172210'),
(11, 4, '0', '2017-01-24 15:13:49', '0000-00-00 00:00:00', '0'),
(12, 4, '0', '2017-01-24 15:13:52', '0000-00-00 00:00:00', '0'),
(13, 4, '0', '2017-01-24 15:13:56', '0000-00-00 00:00:00', '0'),
(14, 4, '0', '2017-01-24 15:14:02', '0000-00-00 00:00:00', '0'),
(15, 4, '0', '2017-01-24 15:14:05', '0000-00-00 00:00:00', '0'),
(16, 4, '0', '2017-01-24 15:14:08', '0000-00-00 00:00:00', '0'),
(17, 8, '0', '2017-01-24 15:14:19', '0000-00-00 00:00:00', '0'),
(18, 6, '0', '2017-01-24 15:14:12', '0000-00-00 00:00:00', '0');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `kode_makanan_minuman` int(11) NOT NULL,
  `nama_makanan_minuman` varchar(60) NOT NULL,
  `harga_makanan_minuman` int(11) NOT NULL,
  `diskon` double DEFAULT NULL,
  `jenis_makanan_minuman` varchar(2) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`kode_makanan_minuman`, `nama_makanan_minuman`, `harga_makanan_minuman`, `diskon`, `jenis_makanan_minuman`, `updated_at`, `created_at`) VALUES
(1, 'Hamburger', 14000, 5, '2', '2017-01-26 13:58:50', '0000-00-00 00:00:00'),
(2, 'Spagety Bolougnais', 13000, 0, '2', '2017-01-26 13:58:50', '0000-00-00 00:00:00'),
(3, 'Piza ', 19000, 10, '2', '2017-01-26 13:58:50', '0000-00-00 00:00:00'),
(4, 'Orange Juice', 5000, 0, '5', '2017-01-26 13:58:50', '0000-00-00 00:00:00'),
(5, 'Lemon Juice', 6500, 0, '5', '2017-01-26 13:58:50', '0000-00-00 00:00:00'),
(6, 'Susi', 8000, 0, '1', '2017-01-26 13:58:50', '0000-00-00 00:00:00'),
(7, 'Brownies', 4000, 10, '3', '2017-01-26 13:58:50', '0000-00-00 00:00:00'),
(8, 'Green Tea', 6000, 10, '4', '2017-01-26 13:58:50', '0000-00-00 00:00:00'),
(9, '1', 1, NULL, '1', '2017-01-26 06:59:33', '2017-01-26 06:59:33'),
(10, '1d', 1, NULL, '1', '2017-01-26 08:30:42', '2017-01-26 08:30:42'),
(11, '21', 21, NULL, '21', '2017-01-26 18:18:49', '2017-01-26 18:18:49'),
(12, 'j', 9, NULL, '1', '2017-01-27 00:44:13', '2017-01-27 00:44:13'),
(13, 'd', 3, NULL, '1', '2017-01-27 00:46:31', '2017-01-27 00:46:31'),
(14, 's', 3, NULL, '1', '2017-01-27 00:47:04', '2017-01-27 00:47:04'),
(15, 'k', 90, NULL, '3', '2017-01-27 00:53:24', '2017-01-27 00:53:24');

-- --------------------------------------------------------

--
-- Table structure for table `pesanan`
--

CREATE TABLE `pesanan` (
  `id_pesanan` varchar(15) DEFAULT NULL,
  `kode_makanan_minuman` int(11) DEFAULT NULL,
  `nomor_meja` int(2) DEFAULT NULL,
  `jumlah` int(3) DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `status` int(2) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pesanan`
--

INSERT INTO `pesanan` (`id_pesanan`, `kode_makanan_minuman`, `nomor_meja`, `jumlah`, `updated_at`, `created_at`, `status`) VALUES
('i812017211', 6, 1, 11, '2017-01-08 08:45:25', '2017-01-08 07:17:50', 1),
('i812017211', 2, 1, 20, '2017-01-08 08:45:25', '2017-01-08 07:17:59', 1),
('i812017211', 1, 1, 10, '2017-01-08 08:45:25', '2017-01-08 07:32:09', 1),
('i812017211', 3, 1, 10, '2017-01-08 08:45:25', '2017-01-08 07:50:16', 1),
('i812017211', 7, 1, 10, '2017-01-08 08:45:25', '2017-01-08 08:03:56', 1),
('i1012017102', 6, 2, 20, '2017-01-09 20:39:24', '2017-01-09 20:35:05', 1),
('i1012017102', 1, 2, 10, '2017-01-09 20:39:24', '2017-01-09 20:35:17', 1),
('i1012017104', 2, 4, 10, '2017-01-09 21:14:47', '2017-01-09 20:37:30', 1),
('i1012017115', 6, 5, 1, '2017-01-09 21:13:15', '2017-01-09 21:02:05', 1),
('i1012017115', 1, 5, 1, '2017-01-09 21:13:15', '2017-01-09 21:02:07', 1),
('i1012017115', 2, 5, 1, '2017-01-09 21:13:15', '2017-01-09 21:02:10', 1),
('i1012017112', 1, 2, 10, '2017-01-09 21:18:35', '2017-01-09 21:18:01', 1),
('i1012017116', 3, 6, 10, '2017-01-09 21:20:34', '2017-01-09 21:19:08', 1),
('i1012017116', 7, 6, 1, '2017-01-09 21:20:34', '2017-01-09 21:19:09', 1),
('i1012017113', 6, 3, 10, '2017-01-09 21:25:25', '2017-01-09 21:24:14', 1),
('i1012017118', 6, 8, 10, '2017-01-09 21:31:56', '2017-01-09 21:26:38', 1),
('i1012017117', 6, 7, 1, '2017-01-09 21:33:25', '2017-01-09 21:33:05', 1),
('i1012017117', 1, 7, 1, '2017-01-09 21:33:25', '2017-01-09 21:33:08', 1),
('i10120171111', 6, 11, 10, '2017-01-09 21:35:37', '2017-01-09 21:35:03', 1),
('i10120171112', 6, 12, 1, '2017-01-09 21:42:41', '2017-01-09 21:37:39', 1),
('i1012017129', 6, 9, 10, '2017-01-09 22:14:55', '2017-01-09 22:14:37', 1),
('i10120171210', 6, 10, 10, '2017-01-09 22:58:15', '2017-01-09 22:52:18', 1),
('i10120171313', 6, 13, 10, '2017-01-09 23:22:04', '2017-01-09 23:21:03', 1),
('i10120171314', 6, 14, 10, '2017-01-09 23:36:04', '2017-01-09 23:35:11', 1),
('i10120171315', 6, 15, 10, '2017-01-09 23:56:42', '2017-01-09 23:46:48', 1),
('i10120171416', 6, 16, 10, '2017-01-10 00:10:21', '2017-01-10 00:06:21', 1),
('i10120171417', 6, 17, 10, '2017-01-10 00:23:07', '2017-01-10 00:22:27', 1),
('i10120171418', 6, 18, 1, '2017-01-10 00:33:03', '2017-01-10 00:32:33', 1),
('i1012017141', 6, 1, 10, '2017-01-10 00:38:17', '2017-01-10 00:37:36', 1),
('i1012017147', 6, 7, 1, '2017-01-10 00:46:16', '2017-01-10 00:45:27', 1),
('i1012017171', 6, 1, 10, '2017-01-10 03:41:06', '2017-01-10 03:41:06', 0),
('i1012017171', 1, 1, 10, '2017-01-10 03:41:17', '2017-01-10 03:41:17', 0),
('i1912017202', 6, 2, 10, '2017-01-19 06:05:33', '2017-01-19 06:03:26', 1),
('i1912017202', 1, 2, 11, '2017-01-19 06:05:33', '2017-01-19 06:03:35', 1),
('i1912017202', 2, 2, 3, '2017-01-19 06:05:33', '2017-01-19 06:03:38', 1),
('i2012017181', 6, 1, 10, '2017-01-20 04:12:58', '2017-01-20 04:12:58', 0),
('i2012017206', 6, 6, 10, '2017-01-20 06:53:41', '2017-01-20 06:53:41', 0),
('i2012017206', 1, 6, 1, '2017-01-20 06:54:39', '2017-01-20 06:54:39', 0),
('i2012017206', 2, 6, 1, '2017-01-20 06:54:49', '2017-01-20 06:54:49', 0),
('i2412017171', 6, 1, 10, '2017-01-24 03:14:40', '2017-01-24 03:13:31', 1),
('i2412017171', 1, 1, 1, '2017-01-24 03:14:40', '2017-01-24 03:13:33', 1),
('i2412017171', 2, 1, 1, '2017-01-24 03:14:40', '2017-01-24 03:13:36', 1),
('i2412017171', 3, 1, 0, '2017-01-24 03:14:40', '2017-01-24 03:13:38', 1),
('i2412017171', 3, 1, 10000, '2017-01-24 03:14:40', '2017-01-24 03:13:45', 1),
('i24120172210', 1, 10, 10, '2017-01-24 08:17:03', '2017-01-24 08:17:03', 0),
('i2512017141', 1, 1, 1, '2017-01-25 00:53:48', '2017-01-25 00:53:48', 0),
('i2612017132', 1, 2, 1, '2017-01-25 23:00:57', '2017-01-25 23:00:57', 0),
('i2612017132', 1, 2, 1, '2017-01-25 23:06:14', '2017-01-25 23:06:14', 0),
('i2612017133', 1, 3, 1, '2017-01-25 23:12:41', '2017-01-25 23:12:41', 0),
('i2612017131', 1, 1, 1, '2017-01-25 23:17:41', '2017-01-25 23:17:41', 0),
('i2612017134', 1, 4, 1, '2017-01-25 23:36:58', '2017-01-25 23:36:58', 0),
('i2612017135', 1, 5, 2, '2017-01-25 23:38:19', '2017-01-25 23:38:17', 0);

-- --------------------------------------------------------

--
-- Table structure for table `resep`
--

CREATE TABLE `resep` (
  `id_resep` int(11) NOT NULL,
  `kode_makanan_minuman` int(11) NOT NULL,
  `id_bahan_baku` int(11) NOT NULL,
  `qty` double DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `resep`
--

INSERT INTO `resep` (`id_resep`, `kode_makanan_minuman`, `id_bahan_baku`, `qty`, `updated_at`, `created_at`) VALUES
(1, 1, 1, 100, '2017-01-24 14:26:33', '0000-00-00 00:00:00'),
(2, 1, 2, 1, '2017-01-24 14:27:38', '0000-00-00 00:00:00'),
(3, 1, 3, 1, '2017-01-24 14:29:05', '0000-00-00 00:00:00'),
(20, 11, 1, 5, '2017-01-26 19:09:19', '2017-01-26 19:09:19'),
(21, 11, 2, 1, '2017-01-26 19:09:36', '2017-01-26 19:09:36'),
(22, 11, 3, 0.5, '2017-01-26 19:10:03', '2017-01-26 19:10:03'),
(23, 11, 4, 2, '2017-01-26 19:10:49', '2017-01-26 19:10:49'),
(24, 11, 6, 0.1, '2017-01-27 00:31:59', '2017-01-27 00:31:59'),
(25, 11, 5, 2, '2017-01-27 00:32:34', '2017-01-27 00:32:34');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `username` varchar(30) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `remember_token` varchar(225) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `role` varchar(15) DEFAULT NULL,
  `image` varchar(60) DEFAULT 'image.png'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `password`, `remember_token`, `created_at`, `updated_at`, `role`, `image`) VALUES
(3, 'faisal', NULL, 'faisaal.ishak921@outlook.com', '$2y$10$zlcoOfn9zN10S3gr8tJKmebuETAK7GqLMGhff9qqxoYlbt8Lh/QOK', 'Y43Fd6HrcGsphUErl17HLcRkLkRzztABjw7FKeLoFfo2ZwSVaGkx0z1hHDMg', '2017-01-27 12:48:55', '2017-01-27 05:48:55', 'koki', 'image.png'),
(4, 'Ronaldo', NULL, 'ronaldo@unikom.ac.id', '$2y$10$gOrXdqznkZJzr6FX3iQ2Fu7yBJZadStFDuhbAvC1E7Te4FE1EEsT6', 'p1OrDMV9Ol7cQIdM0ipPEBZ14qN1pxXG0zgW02BdckyC3CO9lOm93eYeL4pe', '2017-01-26 13:05:11', '2017-01-26 06:05:11', 'pantry', 'image.png'),
(5, 'faisalis', NULL, 'faisalishak@outlook.com', '$2y$10$KIRqje9ldaBXT1o8mRbMxOVGLGBBh.vYV4VT3KrJkt0fAcwLe4OIO', 'nWD2G7g4hTOiKOkfErCSd2MyNqwYpVaG1WAotChnd0EpUmOBG9d6VKWtyoC0', '2017-01-06 23:00:26', '2016-12-09 21:07:17', 'kasir', 'image.png'),
(6, 'Usman', NULL, 'usman@gmail.com', '$2y$10$DEY6Y6rHO7jVusd4nS8AiuSGILxkwC40NECiBzPjxwSSd5cDKXNW6', 'TpYnROhVbpHyr7PGE2ES6KL4w04Sr1Jp7yieidXbmLPNEpJDC12rXWKiXLlr', '2017-01-27 12:16:47', '2017-01-27 05:16:47', 'pelayan', 'image.png'),
(7, 'Jhon Doe', NULL, 'jhon@unikom.ac.id', '$2y$10$kUhRgVor5D5GHr45j0I2.urADg3JpxryYB3Aho35SAtKek5p7NMp2', 'a01b5V37NlIBRlr5FiXuc4IJAC9xZ7XYIn8tvo1tGt5ZJpnvWKC7mVMxzIVU', '2017-01-10 05:15:59', '2017-01-09 22:15:59', 'koki', 'image.png'),
(8, 'febry', NULL, 'febry@gmail.com', '$2y$10$w1HYYz9ickes/iIFmqqSr.rwpSjhhVB4pxzOJCgtu7yZNjrnBmuC6', 'CJqi1Pcv3cEa35uSd8w1ZN44E9WFzvn88MEyRnG3JIuedrYzLtxFutBPhO1T', '2017-01-10 06:21:17', '2017-01-09 23:21:17', 'pelayan', 'image.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bahan_baku`
--
ALTER TABLE `bahan_baku`
  ADD PRIMARY KEY (`id_bahan_baku`);

--
-- Indexes for table `detail_pesanan`
--
ALTER TABLE `detail_pesanan`
  ADD PRIMARY KEY (`id_detail_pesanan`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `meja`
--
ALTER TABLE `meja`
  ADD PRIMARY KEY (`nomor_meja`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`kode_makanan_minuman`);

--
-- Indexes for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD KEY `fk_kode_makanan_minuman` (`kode_makanan_minuman`),
  ADD KEY `fk_nomor_meja` (`nomor_meja`);

--
-- Indexes for table `resep`
--
ALTER TABLE `resep`
  ADD PRIMARY KEY (`id_resep`),
  ADD KEY `kode_makanan_minuman` (`kode_makanan_minuman`),
  ADD KEY `id_bahan_baku` (`id_bahan_baku`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bahan_baku`
--
ALTER TABLE `bahan_baku`
  MODIFY `id_bahan_baku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `detail_pesanan`
--
ALTER TABLE `detail_pesanan`
  MODIFY `id_detail_pesanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99;
--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `kode_makanan_minuman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `resep`
--
ALTER TABLE `resep`
  MODIFY `id_resep` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `detail_pesanan`
--
ALTER TABLE `detail_pesanan`
  ADD CONSTRAINT `detail_pesanan_ibfk_1` FOREIGN KEY (`id`) REFERENCES `users` (`id`);

--
-- Constraints for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD CONSTRAINT `fk_kode_makanan_minuman` FOREIGN KEY (`kode_makanan_minuman`) REFERENCES `menu` (`kode_makanan_minuman`),
  ADD CONSTRAINT `fk_nomor_meja` FOREIGN KEY (`nomor_meja`) REFERENCES `meja` (`nomor_meja`);

--
-- Constraints for table `resep`
--
ALTER TABLE `resep`
  ADD CONSTRAINT `resep_ibfk_1` FOREIGN KEY (`kode_makanan_minuman`) REFERENCES `menu` (`kode_makanan_minuman`),
  ADD CONSTRAINT `resep_ibfk_2` FOREIGN KEY (`id_bahan_baku`) REFERENCES `bahan_baku` (`id_bahan_baku`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
