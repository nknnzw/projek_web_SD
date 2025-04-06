-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 06, 2025 at 08:45 AM
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
-- Database: `sd_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `extras`
--

CREATE TABLE `extras` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `foto` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `keterangan` text NOT NULL,
  `hari` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `extras`
--

INSERT INTO `extras` (`id`, `foto`, `nama`, `keterangan`, `hari`, `created_at`, `updated_at`) VALUES
(2, '1723197751.png', 'pramuka', '....,,,,,,..', 'jumat', NULL, NULL);

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
-- Table structure for table `jadwals`
--

CREATE TABLE `jadwals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `foto` varchar(255) NOT NULL,
  `keterangan` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jadwals`
--

INSERT INTO `jadwals` (`id`, `foto`, `keterangan`, `created_at`, `updated_at`) VALUES
(1, '1723218085.png', 'Jadwal Kelas 1', '2024-08-09 08:41:25', '2024-08-09 08:42:02');

-- --------------------------------------------------------

--
-- Table structure for table `kegiatans`
--

CREATE TABLE `kegiatans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `media` varchar(255) NOT NULL,
  `keterangan` text NOT NULL,
  `hari` varchar(255) NOT NULL,
  `tanggal` int(11) NOT NULL,
  `bulan` int(11) NOT NULL,
  `tahun` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kegiatans`
--

INSERT INTO `kegiatans` (`id`, `media`, `keterangan`, `hari`, `tanggal`, `bulan`, `tahun`, `created_at`, `updated_at`) VALUES
(1, '1724067685.jpg', 'hhhh', 'senin', 10, 10, 2024, '2024-08-19 04:41:25', '2024-08-19 04:41:40');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_06_24_034534_tabel_guru', 2),
(6, '2024_08_08_060427_create_posts_table', 3),
(7, '2024_08_08_060640_create_tabel_ekstras_table', 3),
(8, '2024_08_08_074120_create_extras_table', 4),
(9, '2024_08_09_133420_create_strukturs_table', 5),
(10, '2024_08_09_151244_create_jadwals_table', 6),
(11, '2024_08_19_093427_create_kegiatans_table', 7),
(12, '2024_08_27_063917_create_prestasis_table', 8);

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
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image_path` varchar(255) NOT NULL,
  `sentence` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `prestasis`
--

CREATE TABLE `prestasis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `foto` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `keterangan` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `prestasis`
--

INSERT INTO `prestasis` (`id`, `foto`, `nama`, `keterangan`, `created_at`, `updated_at`) VALUES
(2, '1724741360.jpg', 'nik nazz', 'Juara 3 lomba menjadi kucing', '2024-08-26 23:49:20', '2024-08-26 23:49:20');

-- --------------------------------------------------------

--
-- Table structure for table `strukturs`
--

CREATE TABLE `strukturs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `nama` varchar(255) NOT NULL,
  `jabatan` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `strukturs`
--

INSERT INTO `strukturs` (`id`, `foto`, `nama`, `jabatan`, `created_at`, `updated_at`) VALUES
(1, '1723211386.png', 'ok', 'kj', '2024-08-09 06:49:46', '2024-08-09 06:50:58');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_ekstras`
--

CREATE TABLE `tabel_ekstras` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `foto` varchar(255) NOT NULL,
  `kalimat` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tabel_gr`
--

CREATE TABLE `tabel_gr` (
  `id` int(11) NOT NULL,
  `gambar` varchar(250) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nip` int(50) NOT NULL,
  `tanggal_lahir` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(50) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `status_kepegawaian` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tabel_gr`
--

INSERT INTO `tabel_gr` (`id`, `gambar`, `nama`, `nip`, `tanggal_lahir`, `jenis_kelamin`, `jabatan`, `status_kepegawaian`) VALUES
(1, 'C:\\xampp\\tmp\\phpE50.tmp', 'gm12', 123, '2024-06-24', 'Laki-laki', 'ij', 'tj');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_guru`
--

CREATE TABLE `tabel_guru` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `nama` varchar(255) NOT NULL,
  `nip` varchar(255) NOT NULL,
  `tanggal_lahir` varchar(255) NOT NULL,
  `jenis_kelamin` varchar(255) NOT NULL,
  `jabatan` varchar(255) NOT NULL,
  `status_kepegawaian` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tabel_guru`
--

INSERT INTO `tabel_guru` (`id`, `foto`, `nama`, `nip`, `tanggal_lahir`, `jenis_kelamin`, `jabatan`, `status_kepegawaian`, `created_at`, `updated_at`) VALUES
(9, 'x3c4Y2RW0ET58ExfOtKoAdFQHqvqueh5N6Yvd2Rq.jpg', 'KASAN, S.Pd.SD', '196409281988061001', '1964-09-28', 'Laki-laki', 'Kepala Sekolah', 'PNS', NULL, NULL),
(12, 'sx0eviR37hiMWcXoOuDxI7Z3PVXeaq7Ecki7ll09.jpg', 'NANIK ZULAEKAH, S.Pd', '198512312024212042', '1985-12-31', 'Perempuan', 'Wali Kelas 1', 'PPPK', NULL, NULL),
(13, 'gDjOUvRso6KmxtKw9Y39nDi6KZflgPGOwHMEb0td.jpg', 'SITI MAIMUNAH FEBRIANI, S.Pd', '200002242024212010', '2000-02-24', 'Perempuan', 'Wali Kelas 3', 'PPPK', NULL, NULL),
(14, 'vR2Rodoev00ApQf4xGXPDJOpS4vRF5G0dRyhHVLz.jpg', 'ATI’ INDAH KUMALASARI, S.Pd', '199811252024212023', '1998-11-25', 'Perempuan', 'Wali Kelas 5', 'PPPK', NULL, NULL),
(15, 'GAcdwuPKqtqei0pfu2ZrTAznYe3OSMHwCRAzAbdc.jpg', 'ABDUL WAHID, S.Pd.SD.', '198508082022211023', '1985-08-08', 'Laki-laki', 'Wali Kelas 4', 'PPPK', NULL, NULL),
(16, 'gDClTK4G7zqXcnGoDc9cXfjZ2AIhuPkE2xBLUopS.jpg', 'M MIFTAHUL HUDA, S.Pd.SD.', '198705232022211010', '1987-05-23', 'Laki-laki', 'Wali Kelas 6', 'PPPK', NULL, NULL),
(18, 'g1rJYBvCoZzFpfBNSlluXcRvuJt5Qjz4LHW0c1g4.jpg', 'ENDAH WAHYUNINGSIH, S.Pd.I.', '198310142014062002', '1983-10-14', 'Perempuan', 'Guru PAI', 'PNS', NULL, NULL),
(19, 'FQniWlB5WePMuVnq1Ub1VwmQdaobBSmPaEHoeFm6.jpg', 'MUHAMMAD RIZQI, S.Pd', '-', '1999-09-14', 'Laki-laki', 'Guru PJOK', '-', NULL, NULL),
(20, 'yWltUnXjjjpgzBFS3oMJJli2J3W23oRW9qesfilo.jpg', 'SARIROH SABILMA, S.Pd', '-', '1998-03-11', 'Perempuan', 'Wali Kelas 2', 'GTT', NULL, NULL),
(21, 'UdJ1sE8au4ImvBuuI2xpPv0M3SOzZ6Db4BbbaSDf.jpg', 'ZULFAA MUYASSAROH, S.Pd', '-', '1999-10-22', 'Perempuan', 'Guru Mulok', 'GTT', NULL, NULL),
(22, 'weysKg2TgY3LX6DtUjd0N2K2ydnPzhScqrKbtQT0.jpg', 'Ma’ruf, SE.', '-', '1977-08-06', 'Laki-laki', 'Guru Bahasa Inggris', 'GTT', NULL, NULL);

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
(5, 'nazwa', 'nazwa@gmail.com', NULL, '$2y$10$LPma0LbCVF5EzYKUfebfTOn7GEz7k.bWFRiVh08ZAVTRTrujHQ5AO', NULL, '2024-07-14 20:35:23', '2024-07-14 20:35:23'),
(6, 'admin', 'adminsdrau@gmail.com', NULL, '$2y$10$X6q2DgVEyhagt9LySzpKVu4M6EYCWQ486z5oClkJOwsKGwH0dmH82', NULL, '2024-09-02 23:24:58', '2025-04-05 23:34:24'),
(7, 'niken', 'niken@gmail.com', NULL, '$2y$10$P9k7SHeYOKeE8prQ8usDTe2ES44NRf7SjicgbQKNM8Dl8QjRwGAmW', NULL, '2024-09-08 23:07:57', '2024-09-08 23:17:59');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `extras`
--
ALTER TABLE `extras`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jadwals`
--
ALTER TABLE `jadwals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kegiatans`
--
ALTER TABLE `kegiatans`
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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prestasis`
--
ALTER TABLE `prestasis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `strukturs`
--
ALTER TABLE `strukturs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tabel_ekstras`
--
ALTER TABLE `tabel_ekstras`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tabel_guru`
--
ALTER TABLE `tabel_guru`
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
-- AUTO_INCREMENT for table `extras`
--
ALTER TABLE `extras`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jadwals`
--
ALTER TABLE `jadwals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `kegiatans`
--
ALTER TABLE `kegiatans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `prestasis`
--
ALTER TABLE `prestasis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `strukturs`
--
ALTER TABLE `strukturs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tabel_ekstras`
--
ALTER TABLE `tabel_ekstras`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tabel_guru`
--
ALTER TABLE `tabel_guru`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
