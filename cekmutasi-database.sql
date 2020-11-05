-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 02, 2020 at 11:28 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cekmutasi-database`
--

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(3, '2020_07_07_101712_new_migration_bro', 2),
(4, '2020_07_07_102410_create_contoh_ada_migrations_table', 2),
(7, '2014_10_12_000000_create_users_table', 3),
(8, '2014_10_12_100000_create_password_resets_table', 3),
(846, '2014_10_12_000000_create_users_table', 1),
(847, '2014_10_12_100000_create_password_resets_table', 1),
(848, '2019_08_19_000000_create_failed_jobs_table', 1),
(849, '2020_06_18_151304_create_materials_table', 1),
(850, '2020_06_18_151518_create_komponens_table', 1),
(851, '2020_06_18_151544_create_laporans_table', 1),
(852, '2020_06_18_151620_create_jadwal_padams_table', 1),
(853, '2020_06_18_152137_create_trafos_table', 1),
(854, '2020_06_18_153033_create_kebutuhan_materials_table', 1),
(855, '2020_06_18_162500_create_petugas_table', 1),
(856, '2020_07_03_105231_create_photos_table', 1),
(857, '2020_07_08_032322_create_akun_petugas_table', 1),
(858, '2020_10_04_100734_add_login_info_to_users', 4);

-- --------------------------------------------------------

--
-- Table structure for table `mutasi_bca`
--

CREATE TABLE `mutasi_bca` (
  `id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `nominal_mutasi` varchar(50) NOT NULL,
  `tipe_mutasi` varchar(50) NOT NULL,
  `total` varchar(50) NOT NULL,
  `bank` varchar(3) NOT NULL,
  `tanggal_diakses` date NOT NULL,
  `id_nasabah` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `mutasi_btn`
--

CREATE TABLE `mutasi_btn` (
  `id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `nominal_mutasi` varchar(50) NOT NULL,
  `tipe_mutasi` varchar(50) NOT NULL,
  `total` varchar(50) NOT NULL,
  `bank` varchar(3) NOT NULL,
  `tanggal_diakses` date NOT NULL,
  `id_nasabah` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `mutasi_nasabah`
--

CREATE TABLE `mutasi_nasabah` (
  `id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `nominal_mutasi` varchar(50) NOT NULL,
  `tipe_mutasi` varchar(50) NOT NULL,
  `total` varchar(50) NOT NULL,
  `bank` varchar(50) NOT NULL,
  `tanggal_diakses` date NOT NULL,
  `id_nasabah` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mutasi_nasabah`
--

INSERT INTO `mutasi_nasabah` (`id`, `tanggal`, `nominal_mutasi`, `tipe_mutasi`, `total`, `bank`, `tanggal_diakses`, `id_nasabah`) VALUES
(1, '2020-10-16', '7,500.00', 'DB', '32,500.00', 'bca', '2020-11-02', 1),
(2, '2020-09-14', '40,000.00', 'CR', '47,500.00', 'bca', '2020-11-02', 1),
(3, '2020-09-18', '7,500.00', 'DB', '40,000.00', 'bca', '2020-11-02', 1),
(4, '2020-07-10', '50,000.00', 'CR', '50,000.00', 'btn', '2020-11-02', 1),
(5, '2020-07-12', '20,000.00', 'DB', '30,000.00', 'btn', '2020-11-02', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `last_login_at` datetime DEFAULT NULL,
  `last_login_ip` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`, `last_login_at`, `last_login_ip`) VALUES
(1, 'Ningrum', 'ningrum@user.com', NULL, '$2y$10$Jmidq8YiZzWVrf6OFuq1E.p6kY/QmLOUaVMLO7m2CinCT0nQzHjvC', 'nasabah', NULL, '2020-09-21 00:51:53', '2020-11-01 17:51:40', '2020-11-02 00:51:40', '127.0.0.1'),
(2, 'Fadillah', 'fadillah@admin.com', NULL, '$2y$10$ZEONS0ajvzuATbGTZ8FFOOQXRLtVMcuQhs7ia5.3U1b6XX1NG.eIS', 'admin', NULL, '2020-09-21 00:52:37', '2020-10-09 07:26:15', '2020-10-09 14:26:15', '127.0.0.1'),
(3, 'Nabil', 'nabil@admin.com', NULL, '$2y$10$y0CyP3Xz/lhzxk1CJEYFG.RhpbAOiclYRs25bzzpQ/jpi2bcCMEcK', 'admin', NULL, '2020-09-21 10:20:58', '2020-10-04 03:31:01', '2020-10-04 10:31:01', '127.0.0.1'),
(4, 'Tamami', 'tamami@user.com', NULL, '$2y$10$O6ZXfx73hXqWuLT2xvEHRezK3Ged4l32kPQHfIKsVr.CFu.2uPn/i', 'nasabah', NULL, '2020-09-21 23:45:23', '2020-10-04 03:29:45', '2020-10-04 10:29:45', '127.0.0.1'),
(5, 'Nata', 'nata@user.com', NULL, '$2y$10$Qtt9DAmUHayeEYDaOjGApeP2LH6EL9CyzVVtJUTFMofMv7Mq2Kqzy', 'nasabah', NULL, '2020-09-29 22:43:49', '2020-10-17 08:21:31', '2020-10-17 15:21:31', '127.0.0.1'),
(6, 'Nita', 'nita@user.com', NULL, '$2y$10$7fkcpThoRufhq6v9kA.x..HbzA1qUTxGHbjscUmz20duPUFwaGRzS', 'nasabah', NULL, '2020-10-08 08:01:27', '2020-10-10 02:03:11', '2020-10-10 09:03:11', '127.0.0.1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mutasi_bca`
--
ALTER TABLE `mutasi_bca`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mutasi_btn`
--
ALTER TABLE `mutasi_btn`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mutasi_nasabah`
--
ALTER TABLE `mutasi_nasabah`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=859;

--
-- AUTO_INCREMENT for table `mutasi_bca`
--
ALTER TABLE `mutasi_bca`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mutasi_btn`
--
ALTER TABLE `mutasi_btn`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mutasi_nasabah`
--
ALTER TABLE `mutasi_nasabah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
