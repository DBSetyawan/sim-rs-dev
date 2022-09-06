-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: mysql
-- Generation Time: Sep 06, 2022 at 06:31 PM
-- Server version: 8.0.1-dmr
-- PHP Version: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_saim`
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
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `history_pui`
--

CREATE TABLE `history_pui` (
  `id` int(11) UNSIGNED NOT NULL,
  `pui` varchar(150) NOT NULL,
  `user_sim` varchar(50) NOT NULL,
  `tanggal` varchar(50) NOT NULL,
  `query` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `history_pui`
--

INSERT INTO `history_pui` (`id`, `pui`, `user_sim`, `tanggal`, `query`) VALUES
(2, 'PUI-190715-0004', 'daniel staff', '2021-08-12 02:53:26', 'select * from `kristest`.`purchaseinvoiceh` where `DocNo` in (\'PUI-190715-0004\')'),
(3, 'PUI-200518-0001', 'head finance', '2021-08-20 08:49:36', 'select * from `kristest`.`purchaseinvoiceh` where `DocNo` in (\'PUI-200518-0001\')'),
(4, 'PUI-190715-0007', 'Arrix Pradana Frima', '2021-08-23 04:00:22', 'select * from `kristest`.`purchaseinvoiceh` where `DocNo` in (\'PUI-190715-0007\')');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_08_02_071352_create_permission_tables', 2);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(3, 'App\\Models\\User', 5),
(3, 'App\\Models\\User', 6),
(4, 'App\\Models\\User', 7),
(6, 'App\\Models\\User', 8),
(5, 'App\\Models\\User', 9);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'role-list', 'web', '2021-08-03 04:52:04', '2021-08-03 04:52:04'),
(2, 'role-create', 'web', '2021-08-03 04:52:05', '2021-08-03 04:52:05'),
(3, 'role-edit', 'web', '2021-08-03 04:52:06', '2021-08-03 04:52:06'),
(4, 'role-delete', 'web', '2021-08-03 04:52:07', '2021-08-03 04:52:07');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(3, 'administrator', 'web', '2021-08-03 06:08:25', '2021-08-03 06:59:21'),
(4, 'head finance', 'web', '2021-08-20 01:19:46', '2021-08-20 01:19:46'),
(5, 'staff finance', 'web', '2021-08-20 01:20:11', '2021-08-20 01:20:11'),
(6, 'manager finance', 'web', '2021-08-20 01:22:29', '2021-08-20 01:22:29');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 3),
(2, 3),
(3, 3),
(4, 3),
(1, 4),
(2, 4),
(3, 4),
(4, 4),
(1, 5),
(2, 5),
(3, 5),
(4, 5),
(1, 6),
(2, 6),
(3, 6),
(4, 6);

-- --------------------------------------------------------

--
-- Table structure for table `tb_barang`
--

CREATE TABLE `tb_barang` (
  `id` int(10) UNSIGNED NOT NULL,
  `sai` varchar(150) DEFAULT NULL,
  `kode` varchar(150) NOT NULL,
  `nama` varchar(160) DEFAULT NULL,
  `unit` varchar(160) DEFAULT NULL,
  `harga` int(12) UNSIGNED NOT NULL,
  `jumlah` int(12) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_barang`
--

INSERT INTO `tb_barang` (`id`, `sai`, `kode`, `nama`, `unit`, `harga`, `jumlah`, `created_at`, `updated_at`) VALUES
(19, 'SAI-190513-0011', 'ET.0189.0008', 'Bale Label Sampoerna A Volution 100g DHX 20 SSL (63.G068)', 'PCS', 4560, 4421, NULL, NULL),
(20, 'SAI-190513-0011', 'CD', 'K.060.0450.PLN.029', 'RIM', 3451, 4512, NULL, NULL),
(21, 'SAI-210802-0001', 'TC.0021.0210', 'Pepsodent White ALADDIN 225G', 'PCS', 988, 9877, NULL, NULL),
(22, 'SAA-191030-0001', 'BP.001.338', 'PLATE AGFA AIYINDA 1030mm x800mm-50', 'LBR', 0, 21453, NULL, NULL),
(23, 'SAA-191030-0001', '4dyds', 'PLATE AGFA AIYINDA 1030mm x800mm-50', 'lbr', 7567, 878, NULL, NULL),
(24, 'SAI-190513-0011', 'ET.0189.0008', 'Bale Label Sampoerna A Volution 100g DHX 20 SSL (63.G068)', 'PCS', 23400, 80000, NULL, NULL),
(25, 'SAI-190513-0011', '', 'Bale Label Sampoerna A Volution 100g DHX 20 SSL (63.G068)', '', 3423, 3500, NULL, NULL),
(26, 'SAB-200203-0001', 'K.060.0400.PLN.082', 'DPC 400 / 69.5 x 91.5 LG -- IK', 'RIM', 54000, 40, NULL, NULL),
(27, 'SAB-200203-0001', 'K.060.0400.PLN.082', 'DPC 400 / 69.5 x 91.5 LG -- IK', 'RIM', 5234, 3, NULL, NULL),
(28, 'SAB-200218-0002', 'BP.001.190', 'PLATE ACHIEVE EM 1030x770x0.30 -30 CD4', 'LBR', 25600, 0, NULL, NULL),
(29, 'SAB-200218-0002', 'BP.001.190', 'PLATE ACHIEVE EM  1030x770x0.30 -30 CD4', 'LBR', 121, 1, NULL, NULL),
(30, 'SAB-200218-0002', 'BP.001.190', 'PLATE ACHIEVE EM  1030x770x0.30 -30 CD4', 'LBR', 12344, 0, NULL, NULL),
(33, 'SAB-200218-0004', 'BP.001.190', 'PLATE ACHIEVE EM 1030x770x0.30 -30 CD4', 'LBR', 164000, 1, NULL, NULL),
(34, 'SAB-200218-0004', 'BP.001.190', 'PLATE ACHIEVE EM  1030x770x0.30 -30 CD4', 'LBR', 1022, 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_po`
--

CREATE TABLE `tb_po` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_sai` varchar(150) DEFAULT NULL,
  `po_no` varchar(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_po`
--

INSERT INTO `tb_po` (`id`, `id_sai`, `po_no`, `created_at`) VALUES
(17, 'SAB-200203-0001', 'PO1912-0019', NULL),
(18, 'SAB-200203-0001', 'PO1912-3423', NULL),
(19, 'SAB-200203-0001', 'PO129102-10201', NULL),
(20, 'SAB-200203-0001', 'POI-20192-20131', NULL),
(25, 'SAI-190513-0011', 'PO-2031231', NULL),
(31, 'SAI-190513-0011', 'PO-352623', NULL),
(32, 'SAI-190513-0011', 'PO-5262342', NULL),
(35, 'SAA-191030-0001', '1910-163', NULL),
(36, 'SAA-191030-0001', 'POSD-20121', NULL),
(37, 'SAI-190513-0011', '4501558323', NULL),
(38, 'SAB-200203-0001', 'PO1912-0019', NULL),
(39, 'SAB-200218-0002', 'POI-200211-0001', NULL),
(40, 'SAB-200218-0002', 'POI-200211-0002', NULL),
(41, 'SAB-200218-0004', 'POI-200207-0001', NULL),
(42, 'SAB-200218-0004', 'POI-200207-0001', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_saim`
--

CREATE TABLE `tb_saim` (
  `id` int(10) UNSIGNED NOT NULL,
  `sai` varchar(150) DEFAULT NULL,
  `KodeCus` varchar(150) NOT NULL,
  `NamaCus` varchar(200) NOT NULL,
  `printed` varchar(150) DEFAULT NULL,
  `CreatedDate` varchar(100) NOT NULL,
  `ApprovedBy` varchar(100) NOT NULL,
  `CreatedBy` varchar(100) DEFAULT NULL,
  `ChangedDate` varchar(100) DEFAULT NULL,
  `ChangedBy` varchar(100) CHARACTER SET latin1 COLLATE latin1_bin DEFAULT NULL,
  `arc` varchar(100) DEFAULT NULL,
  `ard` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status_docs` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_saim`
--

INSERT INTO `tb_saim` (`id`, `sai`, `KodeCus`, `NamaCus`, `printed`, `CreatedDate`, `ApprovedBy`, `CreatedBy`, `ChangedDate`, `ChangedBy`, `arc`, `ard`, `created_at`, `updated_at`, `status_docs`) VALUES
(8, 'SAA-191030-0001', '', 'PT. Imperial Nusantara', 'DELETED', '', 'ffitrotul', 'mwaluyo', '2021-08-20', 'Arrix Pradana Frima', NULL, NULL, NULL, '2021-08-24 10:10:58', 'dissaproved'),
(9, 'SAI-190513-0011', 'SUB.0189', 'PT. Hanjaya Mandala Sampoerna Tbk', 'PAID', '', 'unknown', 'sutami', '2019-06-26 15:25:04', 'Arrix Pradana Frima', NULL, NULL, NULL, '2021-08-24 05:02:32', 'approved'),
(12, 'SAB-200203-0001', 'BKA.0028', 'PT. Serunigraf Jaya Sentosa', 'PAID', '', 'ffitrotul', 'mwaluyo', '2020-02-04 11:09:15', 'Arrix Pradana Frima', NULL, NULL, NULL, '2021-08-24 07:24:04', 'approved'),
(13, 'SAB-200218-0002', 'SUB.0213', 'CV. Gemilang Multi Kreasi', 'PAID', '', 'ffitrotul', 'sutami', '2020-02-19 16:13:41', 'Arrix Pradana Frima', NULL, NULL, NULL, '2021-08-24 02:24:51', 'approved'),
(15, 'SAB-200218-0004', 'SUB.0213', 'CV. Gemilang Multi Kreasi', 'PAID', '', 'ffitrotul', 'sutami', '2020-02-19 16:20:20', 'Arrix Pradana Frima', NULL, NULL, NULL, '2021-08-25 04:51:22', 'approved');

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
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_sim` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `user_sim`) VALUES
(5, 'Daniel', 'daniel@staff.co.id', NULL, '$2y$10$azkVoiyQeLNpQtAOrYeWm.3GjgJxs3C4v17/MuFmvKn3qj.jPaeQq', NULL, '2021-08-03 06:10:02', '2021-08-03 06:10:02', 'dsetyawan'),
(6, 'EDP', 'edp@krisanthium.com', NULL, '$2y$10$azkVoiyQeLNpQtAOrYeWm.3GjgJxs3C4v17/MuFmvKn3qj.jPaeQq', NULL, '2021-08-03 07:09:38', '2021-08-03 07:09:38', 'EDP'),
(7, 'Bimo Prasetya', 'head@finance.tech', NULL, '$2y$10$azkVoiyQeLNpQtAOrYeWm.3GjgJxs3C4v17/MuFmvKn3qj.jPaeQq', NULL, '2021-08-20 01:53:24', '2021-08-20 01:53:24', 'afrima'),
(8, 'Ratna Yani Astuty', 'manager@finance.tech', NULL, '$2y$10$azkVoiyQeLNpQtAOrYeWm.3GjgJxs3C4v17/MuFmvKn3qj.jPaeQq', NULL, '2021-08-20 01:54:23', '2021-08-20 01:54:23', 'rastuty'),
(9, 'Mita Wahyu Waluyo', 'staff@finance.tech', NULL, '$2y$10$azkVoiyQeLNpQtAOrYeWm.3GjgJxs3C4v17/MuFmvKn3qj.jPaeQq', NULL, '2021-08-20 01:55:23', '2021-08-20 01:55:23', 'mwaluyo');

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
-- Indexes for table `history_pui`
--
ALTER TABLE `history_pui`
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
-- Indexes for table `tb_barang`
--
ALTER TABLE `tb_barang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_po`
--
ALTER TABLE `tb_po`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_saim`
--
ALTER TABLE `tb_saim`
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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `history_pui`
--
ALTER TABLE `history_pui`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_barang`
--
ALTER TABLE `tb_barang`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `tb_po`
--
ALTER TABLE `tb_po`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `tb_saim`
--
ALTER TABLE `tb_saim`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
