-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 20 Agu 2021 pada 22.59
-- Versi server: 8.0.26-0ubuntu0.20.04.2
-- Versi PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `siola`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(87, '2014_10_12_000000_create_users_table', 1),
(88, '2014_10_12_100000_create_password_resets_table', 1),
(89, '2019_08_19_000000_create_failed_jobs_table', 1),
(90, '2021_08_14_060739_create_table_pemberhentian', 1),
(91, '2021_08_14_111338_create_table_pengangkatan', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `table_kabupaten`
--

CREATE TABLE `table_kabupaten` (
  `id` int NOT NULL,
  `kabupaten` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `table_kabupaten`
--

INSERT INTO `table_kabupaten` (`id`, `kabupaten`) VALUES
(1, 'Kabupaten Bombana'),
(2, 'Kabupaten Buton'),
(3, 'Kabupaten Buton Selatan'),
(4, 'Kabupaten Buton Tengah'),
(5, 'Kabupaten Buton Utara'),
(6, 'Kabupaten Kolaka'),
(7, 'Kabupaten Kolaka Timur'),
(8, 'Kabupaten Kolaka Utara'),
(9, 'Kabupaten Konawe'),
(10, 'Kabupaten Konawe Kepulauan'),
(11, 'Kabupaten Konawe Selatan'),
(12, 'Kabupaten Konawe Utara'),
(13, 'Kabupaten Muna'),
(14, 'Kabupaten Muna Barat'),
(15, 'Kabupaten Wakatobi'),
(16, 'Kota Baubau'),
(17, 'Kota Kendari');

-- --------------------------------------------------------

--
-- Struktur dari tabel `table_objekkdh`
--

CREATE TABLE `table_objekkdh` (
  `id` int NOT NULL,
  `objekkdh` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `table_objekkdh`
--

INSERT INTO `table_objekkdh` (`id`, `objekkdh`) VALUES
(1, 'Walikota'),
(2, 'Wakil Walikota'),
(3, 'Bupati'),
(4, 'Wakil Bupati');

-- --------------------------------------------------------

--
-- Struktur dari tabel `table_pemberhentian`
--

CREATE TABLE `table_pemberhentian` (
  `id` bigint UNSIGNED NOT NULL,
  `noreg` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jk` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `provinsi` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kabupaten` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `objekkdh` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `penyebabkdh` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kategori_permohonan` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_permohonan` enum('pending','approve','disapprove') COLLATE utf8mb4_unicode_ci NOT NULL,
  `upload1` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `upload2` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `upload3` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `upload4` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `upload5` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `upload6` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `upload7` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `table_pemberhentian`
--

INSERT INTO `table_pemberhentian` (`id`, `noreg`, `nama`, `jk`, `provinsi`, `kabupaten`, `objekkdh`, `penyebabkdh`, `kategori_permohonan`, `status_permohonan`, `upload1`, `upload2`, `upload3`, `upload4`, `upload5`, `upload6`, `upload7`, `created_at`, `updated_at`) VALUES
(1, '4980015624', 'samsul marif', 'Laki-Laki', 'sulawesi tenggara', 'Kabupaten Buton Utara', 'Walikota', 'Pengesahan Pemberhentian Bupati Dan/Atau Wakil Bupati Atau Walikota Dan/Atau Wakil Walikota Karena Berakhir Masa Jabatan : ', 'pemberhentian', 'approve', 'PROPOSAL_PENGADAAN_KOMPUTER_DI_LAB_KOMPU.pdf', 'PEMPROGRAMAN MID MODUL.pdf', 'PEMPROGRAMAN MID MODUL.pdf', 'PEMPROGRAMAN MID MODUL.pdf', 'PROPOSAL_PENGADAAN_KOMPUTER_DI_LAB_KOMPU.pdf', 'PROPOSAL_PENGADAAN_KOMPUTER_DI_LAB_KOMPU.pdf', 'null', '2021-08-20 00:18:56', '2021-08-20 00:18:56'),
(2, '1316290207', 'usercoba', 'Laki-Laki', 'sulawesi tenggara', 'Kabupaten Wakatobi', 'Bupati', 'Pemberhentian Bupati Dan/Atau Wakil Bupati Atau Walikota Dan/Atau Wakil Walikota Karena Meninggal Dunia : ', 'pemberhentian', 'approve', 'MID FISIKA DASAR UNDRIANI.pdf', 'PROPOSAL_PENGADAAN_KOMPUTER_DI_LAB_KOMPU.pdf', 'PEMPROGRAMAN MID MODUL.pdf', 'MID FISIKA DASAR UNDRIANI.pdf', 'PROPOSAL_PENGADAAN_KOMPUTER_DI_LAB_KOMPU.pdf', 'PEMPROGRAMAN MID MODUL.pdf', 'PEMPROGRAMAN MID MODUL.pdf', '2021-08-20 00:36:07', '2021-08-20 00:36:07');

-- --------------------------------------------------------

--
-- Struktur dari tabel `table_pengangkatan`
--

CREATE TABLE `table_pengangkatan` (
  `id` bigint UNSIGNED NOT NULL,
  `noreg` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jk` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `provinsi` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kabupaten` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `objekkdh` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `penyebabkdh` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kategori_permohonan` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_permohonan` enum('pending','approve','disapprove') COLLATE utf8mb4_unicode_ci NOT NULL,
  `upload1` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `upload2` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `upload3` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `upload4` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `upload5` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `upload6` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `upload7` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `upload8` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `upload9` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `upload10` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `upload11` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `upload12` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `upload13` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `table_pengangkatan`
--

INSERT INTO `table_pengangkatan` (`id`, `noreg`, `nama`, `jk`, `provinsi`, `kabupaten`, `objekkdh`, `penyebabkdh`, `kategori_permohonan`, `status_permohonan`, `upload1`, `upload2`, `upload3`, `upload4`, `upload5`, `upload6`, `upload7`, `upload8`, `upload9`, `upload10`, `upload11`, `upload12`, `upload13`, `created_at`, `updated_at`) VALUES
(1, '7181263314', 'arwan piranto mangidi', 'Laki-Laki', 'sulawesi tenggara', 'Kabupaten Konawe Utara', 'Bupati', 'Pengangkatan Pasangan Calon Bupati Dan Wakil Bupati Atau Walikota Dan Wakil Walikota Terpilih Hasil Pilkada', 'pengangkatan', 'approve', 'PEMPROGRAMAN MID MODUL.pdf', 'FINAL MTK DISKRIT.pdf', 'MID FISIKA DASAR UNDRIANI.pdf', '1-s2.0-S1877705817311761-main.pdf', 'PROPOSAL_PENGADAAN_KOMPUTER_DI_LAB_KOMPU.pdf', 'MID FISIKA DASAR UNDRIANI.pdf', '1-s2.0-S1877705817311761-main.pdf', '1-s2.0-S1877705817311761-main.pdf', 'PROPOSAL_PENGADAAN_KOMPUTER_DI_LAB_KOMPU.pdf', 'PEMPROGRAMAN MID MODUL.pdf', 'PEMPROGRAMAN MID MODUL.pdf', 'PROPOSAL_PENGADAAN_KOMPUTER_DI_LAB_KOMPU.pdf', 'PROPOSAL_PENGADAAN_KOMPUTER_DI_LAB_KOMPU.pdf', '2021-08-20 04:41:43', '2021-08-20 04:41:43'),
(2, '5630371899', 'farhan nur al afandy', 'Laki-Laki', 'sulawesi tenggara', 'Kabupaten Kolaka Utara', 'Wakil Walikota', 'Pengangkatan Wakil Bupati Atau Wakil Walikota Hasil Pemilihan DPRD (Pengisian  Kekosongan) : ', 'pengangkatan', 'approve', 'PEMPROGRAMAN MID MODUL.pdf', 'PROPOSAL_PENGADAAN_KOMPUTER_DI_LAB_KOMPU.pdf', 'MID FISIKA DASAR UNDRIANI.pdf', 'PEMPROGRAMAN MID MODUL.pdf', 'MID FISIKA DASAR UNDRIANI.pdf', '1-s2.0-S1877705817311761-main.pdf', '1-s2.0-S1877705817311761-main.pdf', '1-s2.0-S1877705817311761-main.pdf', 'PEMPROGRAMAN MID MODUL.pdf', 'PEMPROGRAMAN MID MODUL.pdf', 'null', 'null', 'null', '2021-08-20 04:45:23', '2021-08-20 04:45:23');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `noreg` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_kirim_permohonan` enum('belum','sudah') COLLATE utf8mb4_unicode_ci NOT NULL,
  `kategori_permohonan` enum('default','pemberhentian','pengangkatan') COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `noreg`, `role`, `password`, `status_kirim_permohonan`, `kategori_permohonan`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'samsul marif', 'samsul.marif100@gmail.com', NULL, '4980015624', 'user', '$2y$10$Xy7B1pVaBTv2yL1cy2m51OPttX4jw5yVD3hJ3qilEA/RsEnpn9Zei', 'sudah', 'pemberhentian', NULL, '2021-08-20 00:18:10', '2021-08-20 00:18:10'),
(2, 'adminsiola', 'adminsiola@gmail.com', NULL, '2721040096', 'admin', '$2y$10$ZkkP4yZYpegMpTUq1j7WGupW8vdxK3395qUQkgRkq1N5./Zfl4fv6', 'belum', 'default', NULL, '2021-08-20 00:20:29', '2021-08-20 00:20:29'),
(3, 'usercoba', 'usercoba@gmail.com', NULL, '1316290207', 'user', '$2y$10$8ujOJfavVFc26ncls/QLm.G7MuqF9CjqykNZMjf1vHYy8Ez/o2grG', 'sudah', 'pemberhentian', NULL, '2021-08-20 00:35:17', '2021-08-20 00:35:17'),
(4, 'arwan piranto mangidi', 'arwan@gmail.com', NULL, '7181263314', 'user', '$2y$10$UUamUR9rJpEfLcLeEfKg6.xXrnBnvR2GXOcOdA/dNCr7.eVVOHvZK', 'sudah', 'pengangkatan', NULL, '2021-08-20 00:57:19', '2021-08-20 00:57:19'),
(5, 'farhan nur al afandy', 'farhan@gmail.com', NULL, '5630371899', 'user', '$2y$10$LoCjNBxHoc5REugqjczfGef404xxY780/RAke6PYy4SuZOuYhGi6a', 'sudah', 'pengangkatan', NULL, '2021-08-20 04:43:43', '2021-08-20 04:43:43');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `table_kabupaten`
--
ALTER TABLE `table_kabupaten`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `table_objekkdh`
--
ALTER TABLE `table_objekkdh`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `table_pemberhentian`
--
ALTER TABLE `table_pemberhentian`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `table_pemberhentian_noreg_unique` (`noreg`);

--
-- Indeks untuk tabel `table_pengangkatan`
--
ALTER TABLE `table_pengangkatan`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `table_pengangkatan_noreg_unique` (`noreg`);

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
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;

--
-- AUTO_INCREMENT untuk tabel `table_kabupaten`
--
ALTER TABLE `table_kabupaten`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `table_objekkdh`
--
ALTER TABLE `table_objekkdh`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `table_pemberhentian`
--
ALTER TABLE `table_pemberhentian`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `table_pengangkatan`
--
ALTER TABLE `table_pengangkatan`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
