-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 24, 2020 at 02:24 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `new-pro`
--

-- --------------------------------------------------------

--
-- Table structure for table `ciripenyakit`
--

CREATE TABLE `ciripenyakit` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `penyakit_id` bigint(20) UNSIGNED NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_11_05_171816_create_penyakit_table', 1),
(5, '2020_11_05_171932_create_ciripenyakit_table', 1),
(6, '2020_11_05_172044_create_solusipenyakit_table', 1),
(7, '2020_11_05_172452_create_permission_tables', 1),
(8, '2020_11_19_152329_create_penyakit_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\User', 6),
(2, 'App\\User', 5),
(2, 'App\\User', 7),
(2, 'App\\User', 8);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('janiimut@gmail.com', '$2y$10$3/K8rDG4CihVdvby7ua6p.YYg4/C0L3LN3w6qygotbCJ.Q2XDsy4K', '2020-11-06 02:54:41');

-- --------------------------------------------------------

--
-- Table structure for table `penyakit`
--

CREATE TABLE `penyakit` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `images` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ciri_penyakit` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `solusi_penyakit` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `penyakit`
--

INSERT INTO `penyakit` (`id`, `name`, `images`, `ciri_penyakit`, `solusi_penyakit`, `created_at`, `updated_at`) VALUES
(6, 'Blast', '655792603.jpg', '<h4><span style=\"background-color: rgb(247, 247, 247);\">1. Disebabkan oleh Jamur Pyricularia melalui benih.&nbsp;</span></h4><h4><span style=\"background-color: rgb(247, 247, 247);\">2. Penyakit blas menginfeksi tanaman padi pada setiap fase&nbsp;</span>pertumbuhan.</h4><h4><span style=\"background-color: rgb(247, 247, 247);\">3. Menyerang daun,batang dan malai padi (kecuali akar).</span></h4><h4><span style=\"background-color: rgb(247, 247, 247);\">4. Blast daun : lesi berbentuk belah ketupat,dimulai dengan</span>bercak kecil ungu pada daun muda,kemudian berkembang menjadi belah ketupat,dapat menyebabkan tanaman kerdil dan pertumbuhan malai yang kecil/abnormal</h4><h4><span style=\"background-color: rgb(247, 247, 247);\">5. Blast leher : lesi pada ruas antara batang dan malai berwarna cokelat,menghambat pengisian bulir pada malai (malai hampa dan patah)</span></h4><h4>6. Pemupukan nitrogen yang tinggi ,temperatur optimum 24-28 derajat celcius, cuaca basah dan lembab yang cukup lama,terutama musim hujan menguntungkan terjadinya infeksi</h4>', '<h4>Pratanam : sanitasi sisa tanaman,tidak menanam benih dari daerah endemis. </h4><h4>Vegetatif dan Generatif : tidak memupuk N berlebihan ,pupuk K,aplikasi fungisida binomil atau isoprotiolan pada anakan maksimum dan bunting/awal berbunga.</h4><p><br></p>', NULL, NULL),
(7, 'Bercak daun cokelat', '736638501.png', '<h4>oke</h4>', '<h4>Perkembangan penyakit daun coklat sangat erat hubungannya dengan keadaan unsur hara yang ada didalam tanah khususnya nitrogen, kalium, magnesium, dan mangan. Maka dari itu pilihlah tanaman padi yang bervarietas tahan terhadap hama dan penyakit. Untuk mengendalikan penyakit bercak daun coklat H.oryzae pada tanaman padi gunakan fungisida Rabcide 50 WP.</h4>', NULL, NULL),
(8, 'Keracunan Fe', '903535927.jpg', '<h3>1.&nbsp;Bintik-bintik coklat pada daun, mulai dari pucuk kemudian menyebar ke helai daun </h3><h3>2. Pertumbuhan tanaman kerdil </h3><h3>3.&nbsp;Anakan terbatas dan daun menyempit </h3><h3>4.Perakaran jarang, pendek, kasar dan terselaput warna coklat atau kemerahan </h3><h3>5.Pada keracunan besi yang parah, daun bagian bawah mengering dan bagian atas berwarna kuning kemerahan</h3><h3>6.Selain itu serapan hara terhambat akibat perakaran tidak berkembang karena diselimuti besi oksida</h3>', '<h4>1.&nbsp;Ciptakan kondisi kapasitas lapang sampai tanaman padi berumur 3 minggu setelah tanam (MST) </h4><h4>2.&nbsp;Genangilah dengan air dengan ketinggian 5 – 7 cm </h4><h4>3.Lakukanlah pengairan secara berselang umur 3 MST sampai umur 7 MST </h4><h4>4.&nbsp;Keringkanlah selama 7 – 10 hari, atau sampai umur tanaman 8 MST, kemudian digenangi sampai 2 MST sebelum panen </h4><h4>5.Buatlah drainase pada lahan sawah yang tergenang air terus menerus</h4>', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'web', '2020-11-09 22:05:08', '2020-11-09 22:05:08'),
(2, 'user', 'web', '2020-11-09 22:05:08', '2020-11-09 22:05:08');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `solusipenyakit`
--

CREATE TABLE `solusipenyakit` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `penyakit_id` bigint(20) UNSIGNED NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
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
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'jani', 'janiimut@gmail.com', NULL, '$2y$10$NTx0KINq6y90MLSkgO7qGOFr6BWjTOMHQWDsVEcEdcfFr9KezYrhe', NULL, '2020-11-06 02:12:38', '2020-11-06 02:12:38'),
(2, 'anjani', 'anjaniimut@gmail.com', NULL, '$2y$10$d1vV9zR/Qtituu40Y1hVOOg8Fq/UZdkxZ/lZz0nAc58.PSKOCiVQW', 'x871GSy2p6jZxV5S2UdAyqLAkFEfDuSDvhgoL6QdW88oREF59rd0J2Kh2qUS', '2020-11-06 02:56:31', '2020-11-06 03:11:04'),
(3, 'budi', 'budidoremi@gmail.com', '2020-11-06 03:28:50', '$2y$10$i8//N1APMH0i.JP9kJNX6euciKrt4fd0x66EgmE.1gvVKbEiiGRje', NULL, '2020-11-06 03:20:53', '2020-11-06 03:28:50'),
(4, 'niar', 'niar@gmail.com', '2020-11-09 22:10:44', '$2y$10$iLGc18r.PvmeBr5d2VVTIeIFRTa/P//uNHPZq2SZDfcnQqtlWf8W.', NULL, '2020-11-09 22:08:43', '2020-11-09 22:10:44'),
(5, 'imel', 'imel@gmail.com', '2020-11-09 22:26:06', '$2y$10$2kDceDIEnxoxiz01..Ep.e5bKlPe3xO1Y5tgAAlBHEVZfC0Nzrh3q', NULL, '2020-11-09 22:23:58', '2020-11-09 22:26:06'),
(6, 'Admin sistem pakar', 'admin@sistem.pakar', '2020-11-09 23:03:27', '$2y$10$SvR/XWOUcXNEXd5vTSiLze7U3oPiE7v3EhaLiyv2hJKUItbx4Le3e', 'nLjx2ME0QfKJpVs8BUlrEsnJ05oJzKyG0vgi3AfZRXGLtaDlqTDv3Lnn6fAx', '2020-11-09 22:49:11', '2020-12-17 23:07:53'),
(7, 'yola', 'yola@gmail.com', '2020-12-05 00:29:43', '$2y$10$JBmmaj33PhneTxQuWWpINeqa4D0Owd7g9lbj8RHGio7w0TqkT78ze', NULL, '2020-12-05 00:16:28', '2020-12-05 00:29:43'),
(8, 'Anjani', 'anjani@yahoo.com', '2020-12-24 00:05:18', '$2y$10$piVqF2JEBVOoCjRRZN6F8.wTrR3U.OfXE05jz3royo2xPokYwOUBa', NULL, '2020-12-24 00:01:12', '2020-12-24 00:05:18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ciripenyakit`
--
ALTER TABLE `ciripenyakit`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ciripenyakit_penyakit_id_foreign` (`penyakit_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `penyakit`
--
ALTER TABLE `penyakit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `solusipenyakit`
--
ALTER TABLE `solusipenyakit`
  ADD PRIMARY KEY (`id`),
  ADD KEY `solusipenyakit_penyakit_id_foreign` (`penyakit_id`);

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
-- AUTO_INCREMENT for table `ciripenyakit`
--
ALTER TABLE `ciripenyakit`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `penyakit`
--
ALTER TABLE `penyakit`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `solusipenyakit`
--
ALTER TABLE `solusipenyakit`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `ciripenyakit`
--
ALTER TABLE `ciripenyakit`
  ADD CONSTRAINT `ciripenyakit_penyakit_id_foreign` FOREIGN KEY (`penyakit_id`) REFERENCES `penyakit` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `solusipenyakit`
--
ALTER TABLE `solusipenyakit`
  ADD CONSTRAINT `solusipenyakit_penyakit_id_foreign` FOREIGN KEY (`penyakit_id`) REFERENCES `penyakit` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
