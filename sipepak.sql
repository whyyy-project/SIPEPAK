-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 10, 2023 at 11:37 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sipepak`
--

-- --------------------------------------------------------

--
-- Table structure for table `auth_activation_attempts`
--

CREATE TABLE `auth_activation_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups`
--

CREATE TABLE `auth_groups` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `auth_groups`
--

INSERT INTO `auth_groups` (`id`, `name`, `description`) VALUES
(1, 'atasan', 'Sesi Atasan'),
(2, 'admin', 'Administrator'),
(3, 'user', 'Mahasiswa atau Pengaju');

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups_permissions`
--

CREATE TABLE `auth_groups_permissions` (
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `permission_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `auth_groups_permissions`
--

INSERT INTO `auth_groups_permissions` (`group_id`, `permission_id`) VALUES
(1, 1),
(2, 1),
(3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups_users`
--

CREATE TABLE `auth_groups_users` (
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `auth_groups_users`
--

INSERT INTO `auth_groups_users` (`group_id`, `user_id`) VALUES
(1, 4),
(2, 2),
(3, 3),
(3, 5);

-- --------------------------------------------------------

--
-- Table structure for table `auth_logins`
--

CREATE TABLE `auth_logins` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `user_id` int(11) UNSIGNED DEFAULT NULL,
  `date` datetime NOT NULL,
  `success` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `auth_logins`
--

INSERT INTO `auth_logins` (`id`, `ip_address`, `email`, `user_id`, `date`, `success`) VALUES
(4, '::1', 'whyyyproject@gmail.com', 2, '2023-06-06 23:57:46', 1),
(5, '::1', 'whyyyproject@gmail.com', 2, '2023-06-07 00:02:57', 1),
(6, '::1', 'whyyyproject@gmail.com', 2, '2023-06-07 00:13:09', 1),
(7, '::1', 'whyyyproject@gmail.com', 2, '2023-06-07 00:13:47', 1),
(8, '::1', 'whyyyproject@gmail.com', 2, '2023-06-07 00:15:02', 1),
(9, '::1', 'whyyyproject@gmail.com', 2, '2023-06-07 00:16:12', 1),
(10, '::1', 'whyyyproject@gmail.com', 2, '2023-06-07 00:16:44', 1),
(11, '::1', 'whyyyproject@gmail.com', 2, '2023-06-07 00:18:04', 1),
(12, '::1', 'whyyyproject@gmail.com', 2, '2023-06-07 00:18:49', 1),
(13, '::1', 'whyyyproject@gmail.com', 2, '2023-06-07 00:20:02', 1),
(14, '::1', 'whyyyproject@gmail.com', 2, '2023-06-07 00:27:56', 1),
(15, '::1', 'whyyyproject@gmail.com', 2, '2023-06-07 00:29:06', 1),
(16, '::1', 'whyyyproject@gmail.com', 2, '2023-06-07 00:30:20', 1),
(17, '::1', 'whyyyproject@gmail.com', 2, '2023-06-07 00:32:36', 1),
(18, '::1', 'whyyyproject@gmail.com', 2, '2023-06-07 00:34:25', 1),
(19, '::1', 'whyyyproject@gmail.com', 2, '2023-06-07 00:36:55', 1),
(20, '::1', 'whyyyproject@gmail.com', 2, '2023-06-07 00:48:20', 1),
(21, '::1', 'whyyyproject@gmail.com', 2, '2023-06-07 00:50:08', 1),
(22, '::1', 'whyyyproject@gmail.com', 2, '2023-06-07 00:52:09', 1),
(23, '::1', 'whyyyproject@gmail.com', 2, '2023-06-07 01:13:46', 1),
(24, '::1', 'whyyyproject@gmail.com', 2, '2023-06-07 01:15:04', 1),
(25, '::1', 'whyyyproject@gmail.com', 2, '2023-06-07 01:15:26', 1),
(26, '::1', 'wahyuuser@gmail.com', 3, '2023-06-07 01:16:50', 1),
(27, '::1', 'whyyyproject@gmail.com', 2, '2023-06-07 01:19:24', 1),
(28, '::1', 'whyyyproject@gmail.com', 2, '2023-06-07 01:21:52', 1),
(29, '::1', 'whyyyproject@gmail.com', 2, '2023-06-07 09:33:44', 1),
(30, '::1', 'whyyyproject@gmail.com', 2, '2023-06-07 09:45:47', 1),
(31, '::1', 'wahyuuser@gmail.com', 3, '2023-06-07 09:46:06', 1),
(32, '::1', 'wahyuuser@gmail.com', 3, '2023-06-07 09:50:58', 1),
(33, '::1', 'whyyyproject@gmail.com', 2, '2023-06-07 11:33:10', 1),
(34, '::1', 'whyyyproject@gmail.com', 2, '2023-06-07 13:06:09', 1),
(35, '::1', 'whyyyproject@gmail.com', 2, '2023-06-07 13:09:09', 1),
(36, '::1', 'wahyuuser@gmail.com', 3, '2023-06-07 13:09:40', 1),
(37, '::1', 'wahyuuser@gmail.com', 3, '2023-06-07 13:15:17', 1),
(38, '::1', 'whyyyproject@gmail.com', 2, '2023-06-07 13:15:34', 1),
(39, '::1', 'whyyyproject@gmail.com', 2, '2023-06-07 13:18:03', 1),
(40, '::1', 'wahyuuser@gmail.com', 3, '2023-06-07 13:18:17', 1),
(41, '::1', 'whyyyproject@gmail.com', 2, '2023-06-07 13:18:37', 1),
(42, '::1', 'wahyuuser@gmail.com', 3, '2023-06-07 13:21:07', 1),
(43, '::1', 'wahyuuser@gmail.com', 3, '2023-06-08 16:40:11', 1),
(44, '::1', 'wahyuuser@gmail.com', 3, '2023-06-09 15:07:14', 1),
(45, '::1', 'wahyuuser@gmail.com', 3, '2023-06-09 15:21:37', 1),
(46, '::1', 'wahyuatasan@gmail.com', 4, '2023-06-09 15:26:08', 1),
(47, '::1', 'whyyyproject@gmail.com', 2, '2023-06-09 15:26:51', 1),
(48, '::1', 'wahyuuser@gmail.com', 3, '2023-06-09 15:27:21', 1),
(49, '::1', 'wahyuuser@gmail.com', 3, '2023-06-09 19:17:57', 1),
(50, '::1', 'wahyuuser@gmail.com', 3, '2023-06-10 15:16:43', 1),
(51, '::1', 'wahyuuser@gmail.com', 3, '2023-06-10 19:11:30', 1),
(53, '::1', 'wahyuatasan@gmail.com', 4, '2023-06-10 19:36:59', 1),
(54, '::1', 'wahyuuser@gmail.com', 3, '2023-06-10 19:38:17', 1),
(55, '::1', 'wahyuuser@gmail.com', 3, '2023-06-10 19:39:34', 1),
(56, '::1', 'wahyuuser@gmail.com', 3, '2023-06-10 19:46:27', 1),
(57, '::1', 'wahyuuser@gmail.com', 3, '2023-06-10 19:56:50', 1),
(58, '::1', 'wahyuuser@gmail.com', 3, '2023-06-10 19:56:58', 1),
(59, '::1', 'wahyuuser@gmail.com', 3, '2023-06-10 19:57:29', 1),
(60, '::1', 'wahyuuser@gmail.com', 3, '2023-06-10 19:57:42', 1),
(61, '::1', 'xrplb111@gmail.com', 5, '2023-06-10 20:00:35', 1),
(62, '::1', 'wahyuuser1', NULL, '2023-06-10 20:04:16', 0),
(63, '::1', 'xrplb111@gmail.com', 5, '2023-06-10 20:05:22', 1),
(64, '::1', 'xrplb111@gmail.com', 5, '2023-06-10 23:10:52', 1);

-- --------------------------------------------------------

--
-- Table structure for table `auth_permissions`
--

CREATE TABLE `auth_permissions` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `auth_permissions`
--

INSERT INTO `auth_permissions` (`id`, `name`, `description`) VALUES
(1, 'dashboard', 'Dashboard Page');

-- --------------------------------------------------------

--
-- Table structure for table `auth_reset_attempts`
--

CREATE TABLE `auth_reset_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `auth_tokens`
--

CREATE TABLE `auth_tokens` (
  `id` int(11) UNSIGNED NOT NULL,
  `selector` varchar(255) NOT NULL,
  `hashedValidator` varchar(255) NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `expires` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `auth_users_permissions`
--

CREATE TABLE `auth_users_permissions` (
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `permission_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2017-11-20-223112', 'Myth\\Auth\\Database\\Migrations\\CreateAuthTables', 'default', 'Myth\\Auth', 1685816559, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_atasan`
--

CREATE TABLE `tb_atasan` (
  `id_atasan` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `nama_atasan` varchar(255) NOT NULL,
  `jabatan` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `status_atasan` enum('0','1') NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_atasan`
--

INSERT INTO `tb_atasan` (`id_atasan`, `id`, `slug`, `nama_atasan`, `jabatan`, `email`, `status_atasan`, `created_at`, `updated_at`) VALUES
(1, 0, 'guiniver-m.si', 'Guinever M.Si', 'Dekan Fakultas Teknik', 'johndoe@gmail.com', '1', '2023-06-03 11:23:24', '2023-06-03 11:23:24'),
(2, 2, 'dr.-ir.-h-khaleed-s.kom-m.kom', 'Dr. Ir. H Khaleed S.Kom M.Kom', 'Rektorat 1', 'whyyyproject@gmail.com', '1', '2023-06-03 11:26:31', '2023-06-03 11:26:31'),
(3, 100, 'ir-zilong-mpd', 'Ir. Zilong M.pd', 'Wakil Rektorat', 'zilong@mlbb.com', '1', '2023-06-09 00:55:48', '2023-06-09 00:55:48');

-- --------------------------------------------------------

--
-- Table structure for table `tb_data_section`
--

CREATE TABLE `tb_data_section` (
  `id_data_section` int(11) NOT NULL,
  `id_section` int(11) NOT NULL,
  `id_atasan` int(11) NOT NULL,
  `no_urut` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_data_section`
--

INSERT INTO `tb_data_section` (`id_data_section`, `id_section`, `id_atasan`, `no_urut`, `created_at`, `updated_at`) VALUES
(1, 2, 1, 1, '2023-06-03 11:31:03', '2023-06-03 11:31:03'),
(2, 2, 2, 2, '2023-06-03 11:31:03', '2023-06-03 11:31:03'),
(3, 3, 1, 1, '2023-06-09 17:41:18', '2023-06-09 17:41:18'),
(4, 3, 3, 2, '2023-06-09 17:41:18', '2023-06-09 17:41:18'),
(5, 3, 2, 3, '2023-06-09 17:41:42', '2023-06-09 17:41:42'),
(6, 1, 1, 1, '2023-06-10 20:01:56', '2023-06-10 20:01:56'),
(7, 1, 3, 2, '2023-06-10 20:01:56', '2023-06-10 20:01:56');

-- --------------------------------------------------------

--
-- Table structure for table `tb_mahasiswa`
--

CREATE TABLE `tb_mahasiswa` (
  `id_mhs` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `nim` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_mahasiswa`
--

INSERT INTO `tb_mahasiswa` (`id_mhs`, `nama`, `nim`, `alamat`, `id`) VALUES
(1, 'John Doe', '211103002', 'bojonegoro', 3);

-- --------------------------------------------------------

--
-- Table structure for table `tb_pengajuan`
--

CREATE TABLE `tb_pengajuan` (
  `id_pengajuan` varchar(255) NOT NULL,
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `mulai` date NOT NULL,
  `selesai` date NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `pdf` varchar(255) NOT NULL,
  `status` enum('draft','filed') NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_pengajuan`
--

INSERT INTO `tb_pengajuan` (`id_pengajuan`, `id`, `judul`, `mulai`, `selesai`, `keterangan`, `pdf`, `status`, `created_at`, `updated_at`) VALUES
('16863995883saber_roamer', 3, 'Saber Junggler', '2023-06-10', '2023-06-10', 'proposal untuk pengajuan saber roamer', '2023-06-10_19-19-48_wahyuuser@gmail.com_saber_roamer_proposal-lkmtd-2pdf.pdf', 'filed', '2023-06-10 19:19:48', '2023-06-10 19:19:48'),
('16864013773selena_roamer', 3, 'Selena Roamer', '2023-06-10', '2023-06-20', 'Hero mage untuk bermain di roamer', '2023-06-10_19-49-37_wahyuuser@gmail.com_selena_roamer_proposal-lkmtd-2pdf.pdf', 'draft', '2023-06-10 19:49:37', '2023-06-10 19:49:37');

-- --------------------------------------------------------

--
-- Table structure for table `tb_section`
--

CREATE TABLE `tb_section` (
  `id_section` int(11) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `bidang` varchar(255) NOT NULL,
  `ket_section` varchar(255) NOT NULL,
  `status_section` enum('1','0') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_section`
--

INSERT INTO `tb_section` (`id_section`, `slug`, `bidang`, `ket_section`, `status_section`) VALUES
(1, 'hima-ti', 'HIMA TI', 'Himpunan Mahasiswa Teknik Informatika', '1'),
(2, 'bem-unugiri', 'BEM UNUGIRI', 'Badan Eksekutif Mahasiswa', '1'),
(3, 'proposal-kkn', 'Proposal KKN', 'Upload pengajuan Proposal KKN', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tb_status_pengajuan`
--

CREATE TABLE `tb_status_pengajuan` (
  `id_status` int(11) NOT NULL,
  `id_data_section` int(11) NOT NULL,
  `id_pengajuan` varchar(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `status` enum('pending','progress','acc','reject','revision') NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_status_pengajuan`
--

INSERT INTO `tb_status_pengajuan` (`id_status`, `id_data_section`, `id_pengajuan`, `keterangan`, `status`, `created_at`, `updated_at`) VALUES
(20, 3, '16863995883saber_roamer', 'Keren', 'acc', '2023-06-10 19:19:48', '2023-06-10 19:19:59'),
(21, 4, '16863995883saber_roamer', 'saya merekomendasikan untuk junggler', 'acc', '2023-06-10 19:19:48', '2023-06-10 19:22:59'),
(22, 5, '16863995883saber_roamer', 'mending pick Lancelot', 'reject', '2023-06-10 19:19:48', '2023-06-10 19:29:48'),
(23, 3, '16864013773selena_roamer', '', 'pending', '2023-06-10 19:49:37', '2023-06-10 19:49:37'),
(24, 4, '16864013773selena_roamer', '', 'pending', '2023-06-10 19:49:37', '2023-06-10 19:49:37'),
(25, 5, '16864013773selena_roamer', '', 'pending', '2023-06-10 19:49:37', '2023-06-10 19:49:37');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `password_hash` varchar(255) NOT NULL,
  `reset_hash` varchar(255) DEFAULT NULL,
  `reset_at` datetime DEFAULT NULL,
  `reset_expires` datetime DEFAULT NULL,
  `activate_hash` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `status_message` varchar(255) DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 0,
  `force_pass_reset` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `username`, `password_hash`, `reset_hash`, `reset_at`, `reset_expires`, `activate_hash`, `status`, `status_message`, `active`, `force_pass_reset`, `created_at`, `updated_at`, `deleted_at`) VALUES
(2, 'whyyyproject@gmail.com', 'wahyuadmin', '$2y$10$KccTdj1Tu99qIBkjAilnzeUDzZllICPgz2a1nJ46Ac1sIfFOBTRwa', '465476a212712836e952ece15de98051', NULL, '2023-06-09 21:47:56', NULL, NULL, NULL, 1, 0, '2023-06-06 23:57:40', '2023-06-09 20:47:56', NULL),
(3, 'wahyuuser@gmail.com', 'wahyuuser', '$2y$10$5xtNPcSOYAtc9QZnq9fLm.GE.jTQ2DRwsYqQ9K8JL4wf/5qx0LxCy', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2023-06-07 01:16:43', '2023-06-07 01:16:43', NULL),
(4, 'wahyuatasan@gmail.com', 'wahyuatasan', '$2y$10$6aYhfoINtIzp0fNYtKc93.EXCL5inR34fixkEV7kv9PZBGsoqYsG2', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2023-06-09 15:26:03', '2023-06-09 15:26:03', NULL),
(5, 'xrplb111@gmail.com', 'wahyuuser1', '$2y$10$ApS/DcDck4XjP9AGZZiS1ONsd/7eoU1lsYCLQny3lX4PTKypI/xJi', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2023-06-10 20:00:26', '2023-06-10 20:00:26', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_groups`
--
ALTER TABLE `auth_groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD KEY `auth_groups_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `group_id_permission_id` (`group_id`,`permission_id`);

--
-- Indexes for table `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD KEY `auth_groups_users_user_id_foreign` (`user_id`),
  ADD KEY `group_id_user_id` (`group_id`,`user_id`);

--
-- Indexes for table `auth_logins`
--
ALTER TABLE `auth_logins`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `auth_permissions`
--
ALTER TABLE `auth_permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `auth_tokens_user_id_foreign` (`user_id`),
  ADD KEY `selector` (`selector`);

--
-- Indexes for table `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD KEY `auth_users_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `user_id_permission_id` (`user_id`,`permission_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_atasan`
--
ALTER TABLE `tb_atasan`
  ADD PRIMARY KEY (`id_atasan`),
  ADD KEY `users` (`id`);

--
-- Indexes for table `tb_data_section`
--
ALTER TABLE `tb_data_section`
  ADD PRIMARY KEY (`id_data_section`),
  ADD KEY `tb_section` (`id_section`),
  ADD KEY `tb_atasan` (`id_atasan`);

--
-- Indexes for table `tb_mahasiswa`
--
ALTER TABLE `tb_mahasiswa`
  ADD PRIMARY KEY (`id_mhs`),
  ADD KEY `users` (`id`);

--
-- Indexes for table `tb_pengajuan`
--
ALTER TABLE `tb_pengajuan`
  ADD PRIMARY KEY (`id_pengajuan`),
  ADD KEY `users` (`id`);

--
-- Indexes for table `tb_section`
--
ALTER TABLE `tb_section`
  ADD PRIMARY KEY (`id_section`);

--
-- Indexes for table `tb_status_pengajuan`
--
ALTER TABLE `tb_status_pengajuan`
  ADD PRIMARY KEY (`id_status`),
  ADD KEY `tb_data_section` (`id_data_section`),
  ADD KEY `tb_pengajuan` (`id_pengajuan`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `auth_groups`
--
ALTER TABLE `auth_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `auth_logins`
--
ALTER TABLE `auth_logins`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `auth_permissions`
--
ALTER TABLE `auth_permissions`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `auth_tokens`
--
ALTER TABLE `auth_tokens`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_atasan`
--
ALTER TABLE `tb_atasan`
  MODIFY `id_atasan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_data_section`
--
ALTER TABLE `tb_data_section`
  MODIFY `id_data_section` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tb_mahasiswa`
--
ALTER TABLE `tb_mahasiswa`
  MODIFY `id_mhs` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_section`
--
ALTER TABLE `tb_section`
  MODIFY `id_section` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_status_pengajuan`
--
ALTER TABLE `tb_status_pengajuan`
  MODIFY `id_status` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD CONSTRAINT `auth_groups_permissions_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_groups_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD CONSTRAINT `auth_groups_users_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_groups_users_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD CONSTRAINT `auth_tokens_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD CONSTRAINT `auth_users_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_users_permissions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `tb_data_section`
--
ALTER TABLE `tb_data_section`
  ADD CONSTRAINT `tb_data_section_ibfk_1` FOREIGN KEY (`id_atasan`) REFERENCES `tb_atasan` (`id_atasan`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `tb_data_section_ibfk_2` FOREIGN KEY (`id_section`) REFERENCES `tb_section` (`id_section`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
