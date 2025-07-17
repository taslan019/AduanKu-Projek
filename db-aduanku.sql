-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 17 Jul 2025 pada 05.51
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db-aduanku`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `aduans`
--

CREATE TABLE `aduans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `no_hp` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `id_layanan` int(11) NOT NULL,
  `id_organisasi` int(11) NOT NULL,
  `deskripsi` text NOT NULL,
  `no_tiket` varchar(255) DEFAULT NULL,
  `status` enum('baru','proses','menunggu_informasi','selesai','ditolak') NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `aduans`
--

INSERT INTO `aduans` (`id`, `nama`, `no_hp`, `email`, `id_layanan`, `id_organisasi`, `deskripsi`, `no_tiket`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Taslan', '082271026996', 'taslan@gmail.com', 3, 1, 'erfghb', 'TIKET-0001', 'baru', '2025-07-04 00:19:42', '2025-07-07 18:00:06'),
(2, 'Rosianti', '676748', 'drakertaslan@gmail.com', 3, 1, 'ogufxjtfh', 'TIKET-0002', 'baru', '2025-07-08 00:21:56', '2025-07-08 00:21:56'),
(3, 'TASLAN', '676748', 'rosianti@gmail.com', 3, 1, 'ASDFGHJKIJHGFD', 'TIKET-0003', 'baru', '2025-07-08 17:38:15', '2025-07-08 17:38:15'),
(4, 'Wa Ode Cahyani', '082271026995', 'taslanitkom@gmail.com', 5, 6, 'saya capeh', 'TIKET-0004', 'proses', '2025-07-08 23:45:30', '2025-07-08 23:55:14'),
(5, 'TASLAN', '676748', 'rosianti@gmail.com', 4, 5, 'khfkutdik', 'TIKET-0005', 'ditolak', '2025-07-08 23:57:22', '2025-07-08 23:59:57'),
(6, 'Wa Ode Cahyani', '082271026995', 'taslan@gmail.com', 4, 5, 'azffzd hfzhz f', 'TIKET-0006', 'baru', '2025-07-09 00:13:07', '2025-07-09 00:13:07'),
(7, 'Wa Ode Cahyani', '676748', 'www.taslan111@gmail.com', 4, 3, '1cdxehchdfcd', 'TIKET-0007', 'baru', '2025-07-09 00:14:28', '2025-07-09 00:14:28'),
(8, 'Muhammad Arif', '676748', 'drakertaslan@gmail.com', 3, 3, 'kjjvvhdrycj', 'TIKET-0008', 'baru', '2025-07-09 00:16:38', '2025-07-09 00:16:38'),
(9, 'TASLAN', '676748', 'taslan@gmail.com', 3, 8, 'taslan.lkbiuvslkvhskus jt mygs bk.ush mbliab.skjkz k,ugs skuki', 'TIKET-0009', 'baru', '2025-07-09 00:23:23', '2025-07-09 00:23:23'),
(10, 'Wa Ode Cahyani', '676748', 'drakertaslan@gmail.com', 4, 7, 'gfrxjfvvdv snfnsfsnf  fbefnefn ef er grng', 'TIKET-0010', 'baru', '2025-07-09 00:29:41', '2025-07-09 00:29:41'),
(11, 'Wa Ode Cahyani', '676748', 'drakertaslan@gmail.com', 5, 5, 'bwdefbff efdbnfef', 'TIKET-0011', 'baru', '2025-07-09 00:32:09', '2025-07-09 00:32:09'),
(12, 'Wa Ode Cahyani', '082271026995', 'drakertaslan@gmail.com', 3, 3, 'acvebnmy dfrfg g refnf ', 'TIKET-0012', 'baru', '2025-07-09 00:33:14', '2025-07-09 00:33:14'),
(13, 'Wa Ode Cahyani', '676748', 'drakertaslan@gmail.com', 3, 5, 'asv  ebf ebfnef ', 'TIKET-0013', 'baru', '2025-07-09 00:34:38', '2025-07-09 00:34:38'),
(14, 'TASLAN', '082271026995', 'rosianti@gmail.com', 3, 4, 'sya capeh ajah', 'TIKET-0014', 'baru', '2025-07-09 22:50:36', '2025-07-09 22:50:36');

-- --------------------------------------------------------

--
-- Struktur dari tabel `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `cache`
--

INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
('laravel_cache_livewire-rate-limiter:a17961fa74e9275d529f489537f179c05d50c2f3', 'i:1;', 1751945995),
('laravel_cache_livewire-rate-limiter:a17961fa74e9275d529f489537f179c05d50c2f3:timer', 'i:1751945995;', 1751945995),
('laravel_cache_livewire-rate-limiter:c249f2149727eeb79f1792b01e586e68c4ec6608', 'i:1;', 1751945111),
('laravel_cache_livewire-rate-limiter:c249f2149727eeb79f1792b01e586e68c4ec6608:timer', 'i:1751945111;', 1751945111);

-- --------------------------------------------------------

--
-- Struktur dari tabel `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
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
-- Struktur dari tabel `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `layanans`
--

CREATE TABLE `layanans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `layanans`
--

INSERT INTO `layanans` (`id`, `nama`, `created_at`, `updated_at`) VALUES
(3, 'Aduan Infrastruktur Jaringan', '2025-07-03 23:18:20', '2025-07-03 23:18:20'),
(4, 'Aduan Perangkat Keras (Hardware)', '2025-07-03 23:18:42', '2025-07-03 23:18:42'),
(5, 'Aduan Perangkat Lunak (Software)', '2025-07-03 23:18:56', '2025-07-03 23:18:56'),
(6, 'Aduan Website/Aplikasi Daerah', '2025-07-03 23:19:11', '2025-07-03 23:19:11'),
(7, 'Aduan Layanan Informasi Publik', '2025-07-03 23:19:25', '2025-07-03 23:19:25'),
(8, 'Aduan Lain-lain', '2025-07-03 23:19:38', '2025-07-03 23:19:38');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2025_07_04_051143_create_organisasis_table', 2),
(5, '2025_07_04_060357_create_layanans_table', 3),
(6, '2025_07_04_063028_create_aduans_table', 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `organisasis`
--

CREATE TABLE `organisasis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `organisasis`
--

INSERT INTO `organisasis` (`id`, `nama`, `created_at`, `updated_at`) VALUES
(1, 'Dinas Kominfo', '2025-07-03 22:53:12', '2025-07-03 22:53:12'),
(2, 'Dinas BAPENDA', '2025-07-03 22:55:50', '2025-07-03 22:55:50'),
(3, 'Dinas Perhubungan', '2025-07-03 22:57:22', '2025-07-03 22:57:22'),
(4, 'Dinas Kesehatan', '2025-07-03 22:57:47', '2025-07-03 22:57:47'),
(5, 'Dinas Pertanian', '2025-07-03 22:59:25', '2025-07-03 22:59:25'),
(6, 'Dinas Sosial', '2025-07-03 23:00:58', '2025-07-03 23:00:58'),
(7, 'Inspektorat Daerah', '2025-07-03 23:01:16', '2025-07-03 23:01:16'),
(8, 'Rumah Sakit Umum Daerah (RSUD)', '2025-07-03 23:01:46', '2025-07-03 23:01:46');

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('28mefxn3Zhz8GRzbkCgLSNyy5vzcve9RGRywwNqh', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/137.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiVHpiSkY0TmJQZ2hrWVZmZk9KOTdSWDJmQldwNzZUZklhT2toV1NaTiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMCI7fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7czoxNzoicGFzc3dvcmRfaGFzaF93ZWIiO3M6NjA6IiQyeSQxMiRaNVoueVNUY1FVY3hkZ3RjRXg1cXUudjE0b2VLM3cycW1iclpqMzY0bC53UTF5NGdKc0NiMiI7fQ==', 1751960123),
('3asushuZ5iFnIFTkxGKu3Tn2uXY4qlLZvCoS1Iby', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/137.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiT25hczd5QXlCVDBDYkx3Y3NXWmM0OVRPNW5GUzRBbW5WYkE5MWMwbCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzQ6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9hZG1pbi9hZHVhbnMiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO3M6MTc6InBhc3N3b3JkX2hhc2hfd2ViIjtzOjYwOiIkMnkkMTIkWjVaLnlTVGNRVWN4ZGd0Y0V4NXF1LnYxNG9lSzN3MnFtYnJaajM2NGwud1ExeTRnSnNDYjIiO30=', 1752043621),
('7nIq1jqqEPzj7VZqJLIthdKnZhKKA0bRBAH5ioqp', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/137.0.0.0 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiUDMyTmpEOElsOGxjZFBTQWZ5SU5oRXVRd0dwcjNWWkh5WVZPdmRzUCI7czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTtzOjE3OiJwYXNzd29yZF9oYXNoX3dlYiI7czo2MDoiJDJ5JDEyJFo1Wi55U1RjUVVjeGRndGNFeDVxdS52MTRvZUszdzJxbWJyWmozNjRsLndRMXk0Z0pzQ2IyIjtzOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czozNDoiaHR0cDovL2xvY2FsaG9zdDo4MDAwL2FkbWluL2FkdWFucyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6ODoiZmlsYW1lbnQiO2E6MDp7fX0=', 1752046619),
('CQ17hMgqKCPCDUJBacKqELv79731Y9QmFVGLdTPp', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/137.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiSXlLMDJsNjRNVU1vSHR5S0MwUnFDOFFxdzgyOHFNV2poQlAxaHl3cCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1752126766),
('ndWwk9zMOVrs6OLHTpiitVxwIpSswbb9q2KsdM9i', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/137.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiZlE5Rm9sRkhMd1hRWE81UDVIbkZHS0pCSTV6c3AxT0ZSbUU2RE85ViI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7czoxNzoicGFzc3dvcmRfaGFzaF93ZWIiO3M6NjA6IiQyeSQxMiRaNVoueVNUY1FVY3hkZ3RjRXg1cXUudjE0b2VLM3cycW1iclpqMzY0bC53UTF5NGdKc0NiMiI7fQ==', 1752022726),
('Ta7UkqmhVdSZ0EBMVwHz1yg9M6swozi83WRVfcwx', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiUW5GaEpGZjZyOWppbW5DajVVZFVWT3p5REFGUXluV3JIQ2dpOVFZUCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1752543265),
('wjpsqnSuqF2qbD9LkJUkKek0A02UuhdjpWpNFQDC', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/137.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiUGN4WTBodmNYSVhOZVpJOEhyNEo1V2g1Q0oySDdYNUh0TVBBaUx0WiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzM6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9hZG1pbi9sb2dpbiI7fX0=', 1751944758);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
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
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Taslan', 'taslan@gmail.com', NULL, '$2y$12$Z5Z.ySTcQUcxdgtcEx5qu.v14oeK3w2qmbrZj364l.wQ1y4gJsCb2', 'w4CRIrFMzC9njXZ828woENsCEm1Ql8AjC2TdxtpUxQbg0RmP9zaDTrXmRn66', '2025-07-03 21:57:26', '2025-07-03 21:57:26'),
(2, 'Umar', 'umar@gmail.com', NULL, '$2y$12$ZIQGQpP7L1smIe7Jl3VdDuy8GYKSHhSil32RYn/8Qm4ubkp/T8Yk.', NULL, '2025-07-07 20:24:12', '2025-07-07 20:24:12');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `aduans`
--
ALTER TABLE `aduans`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indeks untuk tabel `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indeks untuk tabel `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `layanans`
--
ALTER TABLE `layanans`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `organisasis`
--
ALTER TABLE `organisasis`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `aduans`
--
ALTER TABLE `aduans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `layanans`
--
ALTER TABLE `layanans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `organisasis`
--
ALTER TABLE `organisasis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
