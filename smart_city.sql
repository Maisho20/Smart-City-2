-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 10, 2024 at 05:34 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smart city`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `role`, `password`) VALUES
(1, 'admin', 'admin', '$2y$12$O1015nJtcKnPlenC3t9Tgulpf8Gsd31RDBlw/RsbVVXbY1iv6.bPS');

-- --------------------------------------------------------

--
-- Table structure for table `data_beritas`
--

CREATE TABLE `data_beritas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `data_beritas`
--

INSERT INTO `data_beritas` (`id`, `gambar`, `deskripsi`, `link`, `created_at`, `updated_at`) VALUES
(1, 'berita/template.jpg', 'Some quick example text to build on the card title and make up the bulk of the card\'s content.', 'https://malangkab.go.id/Berita/index/malangkab-pusat-opd%203507-wakil-bupati-malang-hadiri-pelantikan-dan-pengambilan-sumpah-panitia-pemilihan-kecamatan-se-kabupaten-malang-pada-pemilihan-umum-tahun-2024', NULL, NULL),
(2, 'berita/1717650457.jpg', 'STUDI TIRU LMPLEMENTASI DESA DIGITAL DAN SMART CITY DI PEMERINTAH KABUPATEN BANYUWANGI', 'https://kominfo.malangkab.go.id/pd/detail?title=kominfo-opd@3507-studi-tiru-lmplementasi-desa-digital-dan-sistem-pemerintahan-berbasis-elektronik-spbe-di-pemerintah-kabupaten-banyuwangi', '2024-06-05 22:07:38', '2024-06-05 22:08:37');

-- --------------------------------------------------------

--
-- Table structure for table `data_dokumens`
--

CREATE TABLE `data_dokumens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `file` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `data_dokumens`
--

INSERT INTO `data_dokumens` (`id`, `image`, `judul`, `deskripsi`, `file`, `created_at`, `updated_at`) VALUES
(1, 'docs/tampilan dokumen.jpg', 'Dokumen 1', 'Deskripsi Dokumen 1', 'docs/Dokumen berisikan tentang informasi Smart City.pdf', NULL, NULL),
(2, 'docs/tampilan dokumen.jpg', 'Dokumen 2', 'Deskripsi Dokumen 2', 'docs/Dokumen berisikan tentang informasi Smart City.pdf', NULL, NULL),
(3, 'docs/tampilan dokumen.jpg', 'Dokumen 3', 'Deskripsi Dokumen 3', 'docs/LAPORAN_EVALUASI_SC_2022_Kab Malang.pdf', NULL, NULL),
(4, 'docs/tampilan dokumen.jpg', 'Dokumen 4', 'Deskripsi Dokumen 4', 'docs/LAPORAN_EVALUASI_SC_2022_Kab Malang.pdf', NULL, NULL);

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
-- Table structure for table `homes`
--

CREATE TABLE `homes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `smartIco` varchar(255) NOT NULL,
  `smartImg` varchar(255) NOT NULL,
  `routes` varchar(255) NOT NULL,
  `judulSmart` varchar(255) NOT NULL,
  `subJudulSmart` varchar(255) NOT NULL,
  `smartDesc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `homes`
--

INSERT INTO `homes` (`id`, `smartIco`, `smartImg`, `routes`, `judulSmart`, `subJudulSmart`, `smartDesc`) VALUES
(1, 'envIcn.png', 'environment.jpg', 'SmartEnv', 'Smart Environment', 'Wisata Edukasi & Edu Sampah Cipta Kerja', 'Penerapan proyek untuk mengelola energi, pengurangan limbah, pengawasan kualitas udara,\n            dan pengembangan kota cerdas.'),
(2, 'govIcn.png', 'gov.jpg', 'SmartGov', 'Smart Governance', 'DESAKU TUNTAS', 'Konsep pemerintahan berbasis Teknologi yang membahas suatu tata kelola serta pelayanan.'),
(3, 'brndIcn.png', 'bran.jpg', 'SmartBrand', 'Smart Branding', 'MATIC', 'Menampilkan identitas kota dengan mengoptimalkan pemasaran melalui teknologi\n            untuk lingkup regional dan global.'),
(4, 'ecoIcn.png', 'eco.jpg', 'SmartEco', 'Smart Economy', 'E-AGRIPROP', 'Perekonomian berdasarkan inovasi teknologi berkonsep sumber daya, daya saing,\n            pembayaran dan infrastruktur informasi teknologi.'),
(5, 'livIcn.png', 'living.jpg', 'SmartLiv', 'Smart Living', 'Smart health', 'Mewujudkan tempat tinggal yang nyaman, layak dan efisien dengan mengkolaborasikan\n            penggunaan teknologi dan akses fasilitas yang memadai.'),
(6, 'socIcn.png', 'p.jpg', 'SmartSoc', 'Smart Society', 'CONTRA WAR', 'Pemanfaatan penggunaan teknologi untuk menghubungkan masyarakat dengan fokus\n            ekonomi, kesejahteraan dan efektivitas institusi.');

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
(5, '2024_04_16_130530_create_homes_table', 1),
(6, '2024_04_30_131440_create_data_dokumens_table', 1),
(7, '2024_05_12_090024_create_data_beritas_table', 1),
(8, '2024_05_30_051120_admin_account', 1);

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
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admin_username_unique` (`username`);

--
-- Indexes for table `data_beritas`
--
ALTER TABLE `data_beritas`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `data_beritas_id_unique` (`id`);

--
-- Indexes for table `data_dokumens`
--
ALTER TABLE `data_dokumens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `data_dokumens_id_unique` (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `homes`
--
ALTER TABLE `homes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `homes_id_unique` (`id`);

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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `data_beritas`
--
ALTER TABLE `data_beritas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `data_dokumens`
--
ALTER TABLE `data_dokumens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `homes`
--
ALTER TABLE `homes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
