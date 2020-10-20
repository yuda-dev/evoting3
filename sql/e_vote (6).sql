-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 20, 2020 at 04:06 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e_vote`
--

-- --------------------------------------------------------

--
-- Table structure for table `kandidat`
--

CREATE TABLE `kandidat` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `visi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `misi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah_suara` int(11) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kandidat`
--

INSERT INTO `kandidat` (`id`, `nama`, `visi`, `misi`, `photo`, `jumlah_suara`, `created_at`, `updated_at`) VALUES
(33, 'calon2', '11', '11', 'Untitled-1.jpg', 1, '2020-10-19 17:45:05', '2020-10-19 17:50:03');

-- --------------------------------------------------------

--
-- Table structure for table `logos`
--

CREATE TABLE `logos` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `logos`
--

INSERT INTO `logos` (`id`, `nama`, `photo`, `created_at`, `updated_at`) VALUES
(1, 'STT BANDUNG', '1603065790-sttb.png', NULL, '2020-10-18 17:03:10');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2020_06_10_024812_create_roles_table', 1),
(4, '2020_06_12_082820_create_table_kandidat', 2),
(8, '2020_06_12_082934_create_table_status', 3),
(9, '2020_06_12_082853_create_table_pemilih', 4),
(10, '2020_10_17_124627_create_table_users', 5),
(11, '2020_10_17_124725_create_table_pemilih', 5),
(12, '2020_10_18_233116_create_logos_table', 6);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pemilih`
--

CREATE TABLE `pemilih` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `username` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_id` int(11) DEFAULT 2,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pemilih`
--

INSERT INTO `pemilih` (`id`, `user_id`, `username`, `status_id`, `created_at`, `updated_at`) VALUES
(430, NULL, '1AUDX4CPWZ', 1, '2020-10-19 17:34:26', '2020-10-19 17:35:49'),
(431, NULL, 'LTOU4PYCKI', 1, '2020-10-19 17:34:26', '2020-10-19 17:37:59'),
(432, NULL, '6RK3SNRYHZ', 2, '2020-10-19 17:40:27', '2020-10-19 17:40:27'),
(433, NULL, '5J1R063PTH', 2, '2020-10-19 17:40:27', '2020-10-19 17:40:27'),
(434, NULL, '748B3MYEUD', 1, '2020-10-19 17:40:27', '2020-10-19 17:41:38'),
(435, NULL, '49SONUP59U', 2, '2020-10-19 17:40:28', '2020-10-19 17:40:28'),
(436, NULL, '39B7JKNTL1', 2, '2020-10-19 17:40:28', '2020-10-19 17:40:28'),
(437, NULL, '5LRE6UZDR2', 2, '2020-10-19 17:40:28', '2020-10-19 17:40:28'),
(438, NULL, 'BNPY0N0CAO', 1, '2020-10-19 17:40:28', '2020-10-19 17:50:03'),
(439, NULL, 'QKC0O32G7P', 1, '2020-10-19 17:40:28', '2020-10-19 17:52:43'),
(440, NULL, 'APF76Q0DNX', 2, '2020-10-19 17:40:28', '2020-10-19 17:40:28'),
(441, NULL, '5P56M61YPI', 2, '2020-10-19 17:40:28', '2020-10-19 17:40:28');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `nama`, `created_at`, `updated_at`) VALUES
(1, 'Admin', NULL, NULL),
(2, 'Panitia', NULL, NULL),
(3, 'Pemilih', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_status`
--

CREATE TABLE `tb_status` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_status`
--

INSERT INTO `tb_status` (`id`, `nama`, `created_at`, `updated_at`) VALUES
(1, 'Sudah Voting', NULL, NULL),
(2, 'Belum Voting', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_id` int(11) NOT NULL DEFAULT 3,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'default.png',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status_pilih` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role_id`, `name`, `email`, `email_verified_at`, `password`, `photo`, `remember_token`, `status_pilih`, `created_at`, `updated_at`) VALUES
(1, 1, 'Yuda Muhtar ( Owner )', 'mangyuda@spektaweb.com', NULL, '$2y$10$RljajV82brm7hVJj0Azwau86HlVbfgNdMAzs/CcerfgC1aA4erMSq', '3-1.jpg', NULL, 1, '2020-06-12 02:05:41', '2020-10-18 17:44:42'),
(11, 3, 'test', 'test123@gmail.com', NULL, '$2y$10$u5Gp7FN9TQ6.2qeTTBQb1ufhoznOG8wcpd177q94DY2TzZhrKj54e', 'default.png', NULL, 1, '2020-10-19 18:37:13', '2020-10-19 18:37:13'),
(12, 3, 'yudayy', 'a@gmail.com', NULL, '$2y$10$uSyI6H.C5WhrD6cxx9UoAOdMOiquPQMfsNz.RLlhvUoHELFO9qOO.', 'default.png', NULL, 0, '2020-10-19 18:44:09', '2020-10-19 18:44:09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kandidat`
--
ALTER TABLE `kandidat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logos`
--
ALTER TABLE `logos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `pemilih`
--
ALTER TABLE `pemilih`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pemilih_username_unique` (`username`),
  ADD KEY `pemilih_user_id_foreign` (`user_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_status`
--
ALTER TABLE `tb_status`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `kandidat`
--
ALTER TABLE `kandidat`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `logos`
--
ALTER TABLE `logos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `pemilih`
--
ALTER TABLE `pemilih`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=442;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_status`
--
ALTER TABLE `tb_status`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pemilih`
--
ALTER TABLE `pemilih`
  ADD CONSTRAINT `pemilih_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
