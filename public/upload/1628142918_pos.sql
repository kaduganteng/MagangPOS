-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 05, 2021 at 05:17 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pos`
--

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
-- Table structure for table `inventory`
--

CREATE TABLE `inventory` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kategori_id` int(11) NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sn` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `merk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kelengkapan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_masuk` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` enum('ada','tidak') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'ada'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `inventory`
--

INSERT INTO `inventory` (`id`, `kategori_id`, `nama`, `sn`, `merk`, `kelengkapan`, `tgl_masuk`, `created_at`, `updated_at`, `status`) VALUES
(1, 1, 'gugu', 'gugu', 'gugu', '<p>gugug</p>', '1211-02-12', '2021-07-25 17:42:37', '2021-07-30 02:06:43', 'ada'),
(2, 1, 'alienware', '00968429', 'HP', '<p>ad aja</p>', '2021-07-26', '2021-07-26 00:19:28', '2021-07-26 00:42:42', 'tidak');

-- --------------------------------------------------------

--
-- Table structure for table `kategori_inventory`
--

CREATE TABLE `kategori_inventory` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_kategori` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kategori_inventory`
--

INSERT INTO `kategori_inventory` (`id`, `nama_kategori`, `created_at`, `updated_at`) VALUES
(1, 'laptop', NULL, NULL),
(2, 'dekstop', NULL, NULL),
(3, 'printer', NULL, NULL),
(4, 'webcam', NULL, NULL),
(5, 'scanner', NULL, NULL),
(6, 'bukanaset', NULL, NULL),
(9, 'barcodescanner', '2021-07-27 13:58:34', '2021-07-27 13:58:34');

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
(4, '2021_04_07_084157_create_inventory_table', 1),
(5, '2021_04_09_101831_create_pengajuan_barang_table', 1),
(6, '2021_04_15_053219_create_kategori_inventory_table', 1),
(7, '2021_04_26_063339_add_role_id_to_users_table', 1),
(8, '2021_04_26_065722_add_nippos_to_users_table', 1),
(9, '2021_04_30_070048_create_pemasangan_table', 1),
(10, '2021_04_30_070136_create_peminjaman_table', 1),
(11, '2021_04_30_070152_create_pengembalian_table', 1),
(12, '2021_05_21_062944_add_status_to_inventory_table', 1),
(13, '2021_05_21_063548_add_status_to_peminjaman_table', 1),
(14, '2021_05_21_073051_add_fields_to_users_table', 1),
(15, '2021_06_23_031853_add_waktu_pengembalian_to_peminjaman_table', 1),
(16, '2021_06_25_071650_add_field_to_users_table', 1);

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
('matrozapse@yevme.com', '$2y$10$XAZkzMAmzzCfdKlD3crE2epJMC2Hp/DPUQH9Tr/lYnUJ/2lmm3NTi', '2021-07-25 07:23:49'),
('rayhanjundi77@gmail.com', '$2y$10$RVM1VDMNo67zsJElIH8pGOdpSjouDOI8Bt668sOgklsl7E7xFO.Dq', '2021-07-30 01:52:25');

-- --------------------------------------------------------

--
-- Table structure for table `pemasangan`
--

CREATE TABLE `pemasangan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `inv_id` int(11) NOT NULL,
  `tgl_pemasangan` date NOT NULL,
  `ruangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `peminjaman`
--

CREATE TABLE `peminjaman` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `inv_id` int(11) NOT NULL,
  `nippos` int(11) NOT NULL,
  `tgl_peminjaman` date NOT NULL,
  `surat_peminjaman` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` enum('sudah dibalikan','belum dikembalikan') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'belum dikembalikan',
  `tgl_pengembalian` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `peminjaman`
--

INSERT INTO `peminjaman` (`id`, `inv_id`, `nippos`, `tgl_peminjaman`, `surat_peminjaman`, `created_at`, `updated_at`, `status`, `tgl_pengembalian`) VALUES
(1, 1, 1234, '2021-07-26', 'upload/1627260907_struk-peminjaman-pdf-_16_.html', '2021-07-25 17:55:07', '2021-07-25 17:58:52', 'sudah dibalikan', NULL),
(2, 1, 1234, '2021-07-26', 'upload/1627260915_struk-peminjaman-pdf-_16_.html', '2021-07-25 17:55:15', '2021-07-25 17:58:42', 'sudah dibalikan', NULL),
(3, 1, 1234, '2021-07-26', 'upload/1627283865_vicon.png', '2021-07-26 00:17:45', '2021-07-30 02:06:42', 'sudah dibalikan', NULL),
(4, 2, 123454, '2021-07-26', 'upload/1627285362_barcode.jpg', '2021-07-26 00:42:42', '2021-08-04 19:58:39', 'belum dikembalikan', NULL),
(5, 2, 123454, '2021-07-26', 'upload/1627285431_barcode.jpg', '2021-07-26 00:43:51', '2021-07-26 00:43:51', 'belum dikembalikan', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pengajuan_barang`
--

CREATE TABLE `pengajuan_barang` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nip` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_pegawai` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `barang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pengembalian`
--

CREATE TABLE `pengembalian` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `peminjaman_id` int(11) NOT NULL,
  `tgl_pengembalian` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pengembalian`
--

INSERT INTO `pengembalian` (`id`, `peminjaman_id`, `tgl_pengembalian`, `created_at`, `updated_at`) VALUES
(1, 2, '2021-07-26', '2021-07-25 17:58:42', '2021-07-25 17:58:42'),
(2, 1, '2021-07-26', '2021-07-25 17:58:52', '2021-07-25 17:58:52'),
(3, 3, '2021-07-30', '2021-07-30 02:06:42', '2021-07-30 02:06:42');

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
  `role_id` int(11) NOT NULL,
  `nippos` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `no_telepon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jabatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bagian` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `divisi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `direktorat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `role_id`, `nippos`, `created_at`, `updated_at`, `no_telepon`, `jabatan`, `bagian`, `divisi`, `direktorat`) VALUES
(1, 'Admin1', 'rayhanjundi77@gmail.com', NULL, '$2y$10$6TAVzva39/F8HQeu4I9EJOLo.0rogklrtX/WeqJ0zGeBJ74kdGbOC', 'rT92lZc9eecvHinpEJSoGDAUIHm0CLTOzwDJXXzyPFb7hZrFxpm326LID37z', 1, 1234, NULL, '2021-07-27 08:18:07', '085888250528', 'Admin', 'Admin', 'IT', NULL),
(2, 'Admin2', 'hudanur0509@gmail.com', NULL, '$2y$10$wHQmTqUpohNIirBQCloguetRvCV/FBcbPFWG/2jbRLpdQN33itMVu', NULL, 1, 1233, NULL, NULL, '082210905501', 'Admin', 'Admin', 'IT', NULL),
(3, 'jamblang', 'matrozapse@yevme.com', NULL, '$2y$10$WSNkUiBdHpgi.05bmwA9r.IYqPSNnnAeiCKK5fmgRrLd6UCOjXgNa', NULL, 2, 123454, '2021-07-25 07:00:58', '2021-07-25 07:00:58', '12212121', 'it', 'it', 'it', 'it'),
(4, 'Asep Pacul', 'aseppacul@gmail.com', NULL, '$2y$10$kSfgVY4UqUmWMdi1Dv.O8OPUvik3tfcSVFYuCVTLTWqTjfyvPkW7G', NULL, 2, 223123, '2021-07-26 00:25:07', '2021-07-26 00:25:07', '0889282292', 'Dirut', 'Infratek', 'inftratek', 'asd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inventory`
--
ALTER TABLE `inventory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori_inventory`
--
ALTER TABLE `kategori_inventory`
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
-- Indexes for table `pemasangan`
--
ALTER TABLE `pemasangan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengajuan_barang`
--
ALTER TABLE `pengajuan_barang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengembalian`
--
ALTER TABLE `pengembalian`
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
-- AUTO_INCREMENT for table `inventory`
--
ALTER TABLE `inventory`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `kategori_inventory`
--
ALTER TABLE `kategori_inventory`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `pemasangan`
--
ALTER TABLE `pemasangan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `peminjaman`
--
ALTER TABLE `peminjaman`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pengajuan_barang`
--
ALTER TABLE `pengajuan_barang`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pengembalian`
--
ALTER TABLE `pengembalian`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
