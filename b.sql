-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 27, 2023 at 06:38 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `b`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jabatan`
--

CREATE TABLE `jabatan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jabatan`
--

INSERT INTO `jabatan` (`id`, `nama`) VALUES
(1, 'F&B Manager'),
(2, 'Asistant F&B Manager'),
(3, 'Restaurant Manager'),
(4, 'Assistant Restaurant Manager'),
(5, 'Supervisor'),
(6, 'Head Waiter'),
(7, 'Waiter'),
(8, 'Bar Manager'),
(9, 'Steward'),
(10, 'Assistant Bar Manager'),
(11, 'Captain'),
(12, 'Banquet Manager'),
(13, 'Steward Supervisor'),
(14, 'Chief Steward'),
(15, 'Coffe Shop Manager'),
(16, 'Assistant Coffe Shop Manager'),
(17, 'Room Service Manager'),
(18, 'Assistant Room Service Manager'),
(19, 'Assistant Banquet Manager'),
(20, 'Bakery'),
(21, 'CDP Cold Kitchen'),
(22, 'CDP Hot Kitchen'),
(23, 'Cashier'),
(24, 'Head Cashier'),
(25, 'Part Timer'),
(26, 'Training Officer'),
(27, 'Sales Officer'),
(28, 'Sales Manager'),
(29, 'Sales Executive'),
(30, 'Marketing');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(12, '2014_10_12_000000_create_users_table', 1),
(13, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(14, '2019_08_19_000000_create_failed_jobs_table', 1),
(15, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(16, '2023_05_25_113029_create_jabatan_table', 1),
(17, '2023_05_25_113153_create_user_table', 1),
(18, '2023_05_25_113201_create_perusahaan_table', 1),
(19, '2023_05_25_113440_create_pegawai_table', 1),
(37, '2023_05_25_113654_create_tugas_table', 2),
(38, '2023_05_25_114532_add_foreignkey_tugas_table', 2),
(39, '2023_05_27_032353_create_tugas_pegawai_table', 3),
(40, '2023_05_27_032542_add_foreignkey_tugas_pegawai_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nip` varchar(255) NOT NULL,
  `id_perusahaan` bigint(20) UNSIGNED NOT NULL,
  `id_jabatan` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`id`, `nama`, `nip`, `id_perusahaan`, `id_jabatan`) VALUES
(51, 'Dio Ferdinan', '211111', 12, 6),
(52, 'Vaza Aprilian Habar', '211112', 13, 6),
(53, 'Dinda Nur Octaviany', '211113', 12, 1),
(54, 'Fitri Damanhuri', '211114', 13, 1),
(55, 'Eko ', '211115', 13, 2),
(59, 'pina', '21119', 12, 5),
(60, 'nanda', '211120', 12, 7),
(61, 'zaidan', '211121', 12, 11),
(62, 'lika', '211122', 12, 12),
(63, 'ferdinan', '211123', 12, 13),
(64, 'habar', '211124', 12, 14),
(65, 'aprilian', '211125', 12, 15),
(66, 'nibros', '211126', 12, 16),
(67, 'kiki', '211127', 12, 17),
(68, 'pradana', '211128', 12, 18),
(69, 'rifki', '211129', 12, 19),
(70, 'maulana', '211130', 12, 19),
(71, 'riza', '211131', 12, 20),
(72, 'yuda', '211132', 12, 21),
(73, 'adji', '211133', 12, 22),
(74, 'panji', '211134', 12, 23),
(75, 'ari', '211135', 12, 24),
(76, 'aca', '211141', 13, 2),
(77, 'junyar', '211142', 13, 1),
(78, 'Muhammad Alviansyah', '211143', 13, 4),
(79, 'oid', '211144', 13, 4),
(80, 'dimas', '211150', 13, 3),
(81, 'erlangga', '211151', 13, 5),
(82, 'wawan', '1345', 13, 14),
(83, 'hendra', '213112', 13, 7);

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `perusahaan`
--

CREATE TABLE `perusahaan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `perusahaan`
--

INSERT INTO `perusahaan` (`id`, `nama`) VALUES
(12, 'Coffee Delima Pulu'),
(13, 'Coffee & Bar Matt');

-- --------------------------------------------------------

--
-- Table structure for table `tugas`
--

CREATE TABLE `tugas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `jobdesk` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tugas`
--

INSERT INTO `tugas` (`id`, `jobdesk`) VALUES
(771, 'mengarahkan, memimpin, melakukan koordinasi, serta melakukan berbagai pengembangan dalam rangka mencapai tujuan perusahaan.'),
(881, 'Membuat kreasi makanan sesuai dengan bidang keahliannya masing-masing.'),
(882, 'Memasak sesuai dengan order atau pesanan.'),
(883, 'Bertanggung jawab pada pengelolaan dapur.'),
(991, 'Bertanggung jawab pada pengelolaan Minuman'),
(992, 'Melakukan tugas kebersihan, seperti membersihkan peralatan untuk membuat kopi, area pembuatan kopi, dll.');

-- --------------------------------------------------------

--
-- Table structure for table `tugas_pegawai`
--

CREATE TABLE `tugas_pegawai` (
  `id_pegawai` bigint(20) UNSIGNED NOT NULL,
  `id_tugas` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tugas_pegawai`
--

INSERT INTO `tugas_pegawai` (`id_pegawai`, `id_tugas`) VALUES
(53, 771),
(54, 771),
(51, 992),
(51, 991),
(52, 991),
(52, 992),
(51, 771),
(52, 771),
(55, 771),
(59, 771),
(60, 771),
(61, 771),
(62, 771),
(63, 771),
(64, 771),
(65, 771),
(66, 771),
(67, 771),
(68, 771),
(78, 771),
(79, 771),
(80, 771),
(81, 771),
(82, 771),
(83, 771),
(51, 881),
(52, 881),
(53, 881),
(54, 881),
(55, 881),
(59, 881),
(60, 881),
(61, 881),
(62, 881),
(63, 881),
(64, 881),
(65, 881),
(70, 881),
(71, 881),
(72, 881),
(73, 881),
(76, 881),
(77, 881),
(78, 881),
(79, 881),
(51, 882),
(59, 882),
(60, 882),
(61, 882),
(64, 882),
(65, 882),
(67, 882),
(69, 882),
(72, 882),
(74, 882),
(75, 882),
(77, 882),
(78, 882),
(79, 882),
(81, 882),
(82, 882),
(83, 882),
(53, 883),
(54, 883),
(55, 883),
(59, 883),
(60, 883),
(61, 883),
(62, 883),
(63, 883),
(65, 883),
(66, 883),
(67, 883),
(69, 883),
(71, 883),
(72, 883),
(73, 883),
(74, 883),
(75, 883),
(76, 883),
(77, 883),
(78, 883),
(79, 883),
(80, 883),
(81, 883),
(82, 883),
(83, 883),
(53, 991),
(54, 991),
(55, 991),
(59, 991),
(60, 991),
(61, 991),
(62, 991),
(63, 991),
(64, 991),
(65, 991),
(66, 991),
(68, 991),
(70, 991),
(71, 991),
(72, 991),
(73, 991),
(75, 991),
(76, 991),
(77, 991),
(79, 991),
(80, 991),
(81, 991),
(82, 991),
(83, 991),
(53, 992),
(54, 992),
(55, 992),
(59, 992),
(61, 992),
(62, 992),
(63, 992),
(65, 992),
(66, 992),
(67, 992),
(70, 992),
(71, 992),
(73, 992),
(74, 992),
(75, 992),
(77, 992),
(78, 992),
(79, 992),
(80, 992),
(81, 992),
(82, 992),
(83, 992);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `id_pegawai` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Vaza April', 'vaza.aprilianhabar01@gmail.com', NULL, 'vazaganteng213', 'vazaganteng213', '2023-06-09 04:45:44', '2023-06-09 04:45:44'),
(2, 'Dinda Nur Octaviany', 'dindanuroctaviany99@gmail.com', NULL, 'dindacantik123', 'dindacantik123', '2023-06-26 12:41:39', '2023-06-26 12:41:39'),
(3, 'Fitri Damayanti', 'fitridmy@gmail.com', NULL, 'fitricantik234', 'fitricantik234', '2023-06-26 12:52:50', '2023-06-26 12:52:50'),
(4, 'Dio Ferdinan', 'Dioasoygeboy@gmail.com', NULL, 'dioganteng243', 'dioganteng243', '2023-06-26 12:54:10', '2023-06-26 12:54:10'),
(5, 'Eko Maulana', 'Ekoasik@gmail.com', NULL, 'ekoganteng345', 'ekoganteng345', '2023-06-26 12:54:10', '2023-06-26 12:54:10'),
(6, 'Aidan', 'aidanpalingoke@gmail.com', NULL, 'aidanganteng', 'aidanganteng', '2023-06-26 13:33:46', '2023-06-26 13:33:46'),
(7, 'Putri Angaraini', 'putriang@gmail.com', NULL, 'putricantik', 'putricantik', '2023-06-26 13:33:46', '2023-06-26 13:33:46'),
(8, 'Alana', 'alana.fatimah@gmail.com', NULL, 'alanacantik678', 'alanacantik678', '2023-06-26 13:35:03', '2023-06-26 13:35:03'),
(9, 'Amara', 'amaaraqwerty@gmail.com', NULL, 'amaracantik', 'amaracantik', '2023-06-26 13:35:03', '2023-06-26 13:35:03'),
(10, 'Amaya', 'amayadesey@gmail.com', NULL, 'amayacantikceunah', 'amayacantikceunah', '2023-06-26 13:36:33', '2023-06-26 13:36:33'),
(11, 'Arriana', 'arianagrande@gmail.com', NULL, 'ari.grader', 'ari.grader', '2023-06-26 13:36:33', '2023-06-26 13:36:33'),
(12, 'Camila', 'camiladahlia@gmail.com', NULL, 'camilaw', 'camilaw', '2023-06-26 13:38:29', '2023-06-26 13:38:29'),
(13, 'Dahlia Nur', 'nurdahlia@gmail.com', NULL, 'dahliaberbunga', 'dahliaberbunga', '2023-06-26 13:38:29', '2023-06-26 13:38:29'),
(14, 'Devina', 'devinabungaayu@gmail.com', NULL, 'deevinahe', 'deevinahe', '2023-06-26 13:39:43', '2023-06-26 13:39:43'),
(15, 'Daryana', 'daryanasule@gmail.com', NULL, 'sulesemakindidepan', 'sulesemakindidepan', '2023-06-26 13:39:43', '2023-06-26 13:39:43'),
(16, 'Ella Danastri', 'danaella@gmail.com', NULL, 'pakedanahemat', 'pakedanahemat', '2023-06-26 13:41:26', '2023-06-26 13:41:26'),
(17, 'Eva Safitri', 'evalistica@gmail.com', NULL, 'angelevasaf', 'angelevasaf', '2023-06-26 13:41:26', '2023-06-26 13:41:26'),
(18, 'Fiona fauzia', 'fionafauziah@gmail.com', NULL, 'fauziahfauziah', 'fauziahfauziah', '2023-06-26 13:43:44', '2023-06-26 13:43:44'),
(19, 'Fay Nabila', 'bilanabila@gmail.com', NULL, 'painab25', 'painab25', '2023-06-26 13:43:44', '2023-06-26 13:43:44'),
(20, 'Febby Rastanty', 'febbyceribell@gmail.com', NULL, 'febianggotaceribel', 'febianggotaceribel', '2023-06-26 13:45:43', '2023-06-26 13:45:43'),
(21, 'Gayatri Giselle', 'giselagaya@gmail.com', NULL, 'gabolehbanyakgaya', 'gabolehbanyakgaya', '2023-06-26 13:45:43', '2023-06-26 13:45:43'),
(22, 'Gauri Felicia', 'feliciagau@gmail.com', NULL, 'gaurigauriindia', 'gaurigauriindia', '2023-06-26 13:47:52', '2023-06-26 13:47:52'),
(23, 'Harumi Hasea', 'harumihosh@gmail.com', NULL, 'harumbunga', 'harumbunga', '2023-06-26 13:47:52', '2023-06-26 13:47:52'),
(24, 'Hariana', 'hariaharia@gmail.com', NULL, 'temennyamaria', 'temennyamaria', '2023-06-26 13:55:56', '2023-06-26 13:55:56'),
(25, 'Halina Hailey', 'haileyjedar@gmail.com', NULL, 'haileylove', 'haileylove', '2023-06-26 13:55:56', '2023-06-26 13:55:56'),
(26, 'Hanessa', 'hanessa2802@gmail.com', NULL, 'hannes2', 'hannes2', '2023-06-26 13:58:52', '2023-06-26 13:58:52'),
(27, 'Zayyan', 'zaymalik@gmail.com', NULL, 'zayanaja', 'zayanaja', '2023-06-26 13:58:52', '2023-06-26 13:58:52'),
(28, 'Dita', 'ditakarangtunggal@gmail.com', NULL, 'ditasecret', 'ditasecret', '2023-06-26 14:00:11', '2023-06-26 14:00:11'),
(29, 'Karina', 'karinaadoeh@gmail.com', NULL, 'karinasecret', 'karinasecret', '2023-06-26 14:00:11', '2023-06-26 14:00:11'),
(30, 'Yoonaa', 'yonasnsd@gmail.com', NULL, 'akucantikaja', 'akucantikaja', '2023-06-26 14:01:25', '2023-06-26 14:01:25'),
(36, 'dio', 'dio.ferdinan5@gmail.com', NULL, '$2y$10$YtT3w4opqOhgAeu9CtsLme6a/3G6npKpq30WaVU4VsTU8iikx2tPa', NULL, '2023-06-26 20:20:42', '2023-06-26 20:20:42');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jabatan`
--
ALTER TABLE `jabatan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pegawai_id_perusahaan_foreign` (`id_perusahaan`),
  ADD KEY `pegawai_id_jabatan_foreign` (`id_jabatan`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `perusahaan`
--
ALTER TABLE `perusahaan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tugas`
--
ALTER TABLE `tugas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tugas_pegawai`
--
ALTER TABLE `tugas_pegawai`
  ADD KEY `tugas_pegawai_id_pegawai_foreign` (`id_pegawai`),
  ADD KEY `tugas_pegawai_id_tugas_foreign` (`id_tugas`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id_pegawai_foreign` (`id_pegawai`);

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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jabatan`
--
ALTER TABLE `jabatan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `perusahaan`
--
ALTER TABLE `perusahaan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tugas`
--
ALTER TABLE `tugas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=995;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD CONSTRAINT `pegawai_id_jabatan_foreign` FOREIGN KEY (`id_jabatan`) REFERENCES `jabatan` (`id`),
  ADD CONSTRAINT `pegawai_id_perusahaan_foreign` FOREIGN KEY (`id_perusahaan`) REFERENCES `perusahaan` (`id`);

--
-- Constraints for table `tugas_pegawai`
--
ALTER TABLE `tugas_pegawai`
  ADD CONSTRAINT `tugas_pegawai_id_pegawai_foreign` FOREIGN KEY (`id_pegawai`) REFERENCES `pegawai` (`id`),
  ADD CONSTRAINT `tugas_pegawai_id_tugas_foreign` FOREIGN KEY (`id_tugas`) REFERENCES `tugas` (`id`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_id_pegawai_foreign` FOREIGN KEY (`id_pegawai`) REFERENCES `pegawai` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
