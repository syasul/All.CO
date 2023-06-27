-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 27, 2023 at 06:01 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `all.co`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_log`
--

CREATE TABLE `tb_log` (
  `id_log` int(11) NOT NULL,
  `date_log` varchar(25) NOT NULL,
  `log_data` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_log`
--

INSERT INTO `tb_log` (`id_log`, `date_log`, `log_data`) VALUES
(9, '2023-06-10 15:36:43', ' menambahkan data '),
(10, '2023-06-10 15:40:15', ' menambahkan data {, 1131, customer, }'),
(11, '2023-06-10 15:41:34', 'sa1 menambahkan data {sa1, 131, admin, }'),
(12, '2023-06-10 15:50:28', 'dada menambahkan data {dada, dasda, customer, }'),
(13, '2023-06-10 17:05:07', 'admin menambahkan data {admin, fix, customer, }'),
(14, '2023-06-10 17:06:24', 'admin menambahkan data {admin, adadaa, admin, }'),
(15, '2023-06-10 17:07:19', 'admin menambahkan data {admin, daafdasfa, customer, }'),
(16, '2023-06-10 17:08:57', 'admin menambahkan data {halo, siapa, customer, }'),
(17, '2023-06-11 15:45:27', 'admin menambahkan data user : {saadasfa, fsafasfa, customer}'),
(18, '2023-06-11 16:03:10', 'admin menambahkan data user : {fsd, fsd, customer}'),
(19, '2023-06-11 18:00:41', 'admin menghapus data user '),
(20, '2023-06-11 18:01:54', 'admin update data user : {aku, 123, admin}'),
(21, '2023-06-11 18:02:04', 'admin update data user : {adakamu, 123, admin}'),
(22, '2023-06-11 18:02:04', 'admin update data user : {adakamu, 123, admin}'),
(23, '2023-06-13 08:01:04', 'sa menambahkan data user : {slatem1, asw, admin}'),
(24, '2023-06-13 08:01:26', 'sa menghapus data user '),
(25, '2023-06-14 09:15:13', 'sa menambahkan data user : {cus, cus, customer}'),
(26, '2023-06-18 16:11:43', 'cus order : {62, 38, 1, 2023-06-01, 2023-06-03, 3, 162, 0}'),
(27, '2023-06-18 16:13:11', 'aku order : {63, 36, 1, 2023-06-01, 2023-06-02, 2, 24000, 0}'),
(28, '2023-06-19 14:11:13', 'sa update data user : {badut\\, 123, admin}'),
(29, '2023-06-19 14:57:23', 'sa menghapus data user '),
(30, '2023-06-19 14:57:29', 'sa menghapus data user '),
(31, '2023-06-19 14:57:31', 'sa menghapus data user '),
(32, '2023-06-19 14:57:32', 'sa menghapus data user '),
(33, '2023-06-19 14:57:33', 'sa menghapus data user '),
(34, '2023-06-19 14:57:33', 'sa menghapus data user '),
(35, '2023-06-19 14:57:34', 'sa menghapus data user '),
(36, '2023-06-19 14:57:36', 'sa menghapus data user '),
(37, '2023-06-19 14:57:36', 'sa menghapus data user '),
(38, '2023-06-19 14:57:37', 'sa menghapus data user '),
(39, '2023-06-19 14:57:38', 'sa menghapus data user '),
(40, '2023-06-19 14:57:39', 'sa menghapus data user '),
(41, '2023-06-19 14:57:40', 'sa menghapus data user '),
(42, '2023-06-19 14:57:57', 'sa menambahkan data user : {admin, admin, admin}'),
(43, '2023-06-19 21:39:51', 'sa update data user : {sasad, sa2e22, customer}'),
(44, '2023-06-19 22:08:38', 'sa menghapus data user '),
(45, '2023-06-19 22:08:39', 'sa menghapus data user '),
(46, '2023-06-19 22:09:21', 'sa menghapus data user '),
(47, '2023-06-19 22:09:22', 'sa menghapus data user '),
(48, '2023-06-19 22:09:23', 'sa menghapus data user '),
(49, '2023-06-19 22:10:50', 'sa menghapus data user '),
(50, '2023-06-19 22:10:51', 'sa menghapus data user '),
(51, '2023-06-19 22:10:51', 'sa menghapus data user '),
(52, '2023-06-19 22:10:51', 'sa menghapus data user '),
(53, '2023-06-19 22:10:52', 'sa menghapus data user '),
(54, '2023-06-19 22:10:52', 'sa menghapus data user '),
(55, '2023-06-19 22:10:52', 'sa menghapus data user '),
(56, '2023-06-19 22:10:53', 'sa menghapus data user '),
(57, '2023-06-19 22:10:53', 'sa menghapus data user '),
(58, '2023-06-19 22:10:54', 'sa menghapus data user '),
(59, '2023-06-19 22:10:55', 'sa menghapus data user '),
(60, '2023-06-19 22:11:50', 'sa menghapus data user '),
(61, '2023-06-19 22:11:51', 'sa menghapus data user '),
(62, '2023-06-19 22:11:51', 'sa menghapus data user '),
(63, '2023-06-19 22:11:54', 'sa menghapus data user '),
(64, '2023-06-19 22:12:02', 'sa menambahkan data user : {user, user, customer}'),
(65, '2023-06-19 23:20:05', 'admin menambahkan data user : {sa, sa, customer}'),
(66, '2023-06-19 23:22:03', 'sa order : {67, 45, 5, 2023-06-21, 2023-06-23, 3, 22500000, 0}'),
(67, '2023-06-23 22:26:00', 'user order : {66, 43, 40, 2023-06-15, 2023-06-30, 16, 2560000000, 0}'),
(68, '2023-06-24 14:44:27', 'user order : {66, 45, 4, 2023-06-24, 2023-06-29, 6, 36000000, 0}'),
(69, '2023-06-24 15:48:39', 'admin menambahkan data room : {test, C:\\xampp\\tmp\\php77D.tmp, asasa, 32, 32}'),
(70, '2023-06-24 15:49:02', 'admin update data room : {testf}'),
(71, '2023-06-24 15:49:02', 'admin update data room : {testf}'),
(72, '2023-06-24 15:49:19', 'admin menghapus data Room '),
(73, '2023-06-24 22:16:54', 'admin menambahkan data user : {test, test, customer}'),
(74, '2023-06-24 22:21:10', 'admin menambahkan data user : {r_emang_horor, 123, customer}'),
(75, '2023-06-24 22:29:29', 'admin menghapus data user '),
(76, '2023-06-24 22:56:08', 'user order : {66, 45, 5, 2023-06-13, 2023-06-29, 17, 127500000, 0}'),
(77, '2023-06-24 23:03:58', 'user order : {66, 45, 12, 2023-06-26, 2023-06-29, 4, 72000000, 0}'),
(78, '2023-06-25 07:27:56', 'sa order : {67, 45, 12, 2023-06-26, 2023-06-28, 3, 54000000, 0}'),
(79, '2023-06-25 07:28:48', 'sa order : {67, 45, 12, 2023-06-26, 2023-06-28, 3, 54000000, 0}'),
(80, '2023-06-25 08:35:52', 'a order : {68, 43, 1, 2023-06-28, 2023-06-30, 3, 12000000, 0}'),
(81, '2023-06-25 14:17:49', 'sliwik order : {73, 43, 2, 2023-06-21, 2023-06-25, 5, 40000000, 0}'),
(82, '2023-06-26 11:07:38', ' order : {, 45, 21, 2023-06-23, 2023-07-08, 16, 504000000, 0}'),
(83, '2023-06-27 06:00:20', 'SAIFUL order : {77, 45, 5, 2023-06-28, 2023-06-30, 3, 22500000, 0}');

-- --------------------------------------------------------

--
-- Table structure for table `tb_order`
--

CREATE TABLE `tb_order` (
  `id_order` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_room` int(11) NOT NULL,
  `ktp` varchar(60) NOT NULL,
  `total_room` int(20) NOT NULL,
  `check_in` date NOT NULL,
  `check_out` date NOT NULL,
  `total_day` int(1) NOT NULL,
  `total_price` bigint(20) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_order`
--

INSERT INTO `tb_order` (`id_order`, `id_user`, `id_room`, `ktp`, `total_room`, `check_in`, `check_out`, `total_day`, `total_price`, `status`) VALUES
(5, 66, 45, '', 4, '2023-06-24', '2023-06-29', 6, 36000000, 0),
(6, 66, 45, '', 5, '2023-06-13', '2023-06-29', 17, 127500000, 0),
(7, 66, 45, '', 12, '2023-06-26', '2023-06-29', 4, 72000000, 0),
(8, 67, 45, 'download (8).jpg', 12, '2023-06-26', '2023-06-28', 3, 54000000, 0),
(9, 68, 43, 'download (8).jpg', 1, '2023-06-28', '2023-06-30', 3, 12000000, 0),
(10, 73, 43, 'WIN_20230525_09_50_27_Pro.jpg', 2, '2023-06-21', '2023-06-25', 5, 40000000, 0),
(11, 77, 45, 'Screenshot (40).png', 5, '2023-06-28', '2023-06-30', 3, 22500000, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tb_room`
--

CREATE TABLE `tb_room` (
  `id_room` int(11) NOT NULL,
  `name_room` varchar(30) NOT NULL,
  `image` varchar(40) NOT NULL,
  `description` varchar(255) NOT NULL,
  `total_room` int(9) NOT NULL,
  `price` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_room`
--

INSERT INTO `tb_room` (`id_room`, `name_room`, `image`, `description`, `total_room`, `price`) VALUES
(43, 'Green Mountain', 'pexels-pixabay-262048.jpg', 'Lorem Ipsum is simply dummy text of the printing and  typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s', 6, 4000000),
(45, 'Tropical Forest', 'pexels-pixabay-271643.jpg', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s', 5, 1500000);

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(12) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(10) NOT NULL,
  `role` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `username`, `password`, `role`) VALUES
(64, 'admin', 'admin', 'admin'),
(66, 'user', 'user', 'customer'),
(67, 'sa', 'sa', 'customer'),
(68, 'a', '$2y$10$PD6', 'customer'),
(69, 'test', 'test', 'customer'),
(71, 'samsul', '$2y$10$mbF', 'customer'),
(72, 'a', '$2y$10$WGz', 'customer'),
(73, 'sliwik', '$2y$10$s7w', 'customer'),
(76, 'Achmad Syamsul Arifi', '$2y$10$HgN', 'customer'),
(77, 'SAIFUL', '$2y$10$RHd', 'customer'),
(78, 'freyr', '$2y$10$QE5', 'customer'),
(79, 'hasbi', '$2y$10$JiV', 'customer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_log`
--
ALTER TABLE `tb_log`
  ADD PRIMARY KEY (`id_log`);

--
-- Indexes for table `tb_order`
--
ALTER TABLE `tb_order`
  ADD PRIMARY KEY (`id_order`);

--
-- Indexes for table `tb_room`
--
ALTER TABLE `tb_room`
  ADD PRIMARY KEY (`id_room`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_log`
--
ALTER TABLE `tb_log`
  MODIFY `id_log` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT for table `tb_order`
--
ALTER TABLE `tb_order`
  MODIFY `id_order` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tb_room`
--
ALTER TABLE `tb_room`
  MODIFY `id_room` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
