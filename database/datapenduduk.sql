-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 28 Jul 2022 pada 13.50
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `datapenduduk`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_activation_attempts`
--

CREATE TABLE `auth_activation_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_groups`
--

CREATE TABLE `auth_groups` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `auth_groups`
--

INSERT INTO `auth_groups` (`id`, `name`, `description`) VALUES
(1, 'Admin', 'Yang mengelola laporan'),
(2, 'Pimpinan', 'Yang menerima laporan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_groups_permissions`
--

CREATE TABLE `auth_groups_permissions` (
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `permission_id` int(11) UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_groups_users`
--

CREATE TABLE `auth_groups_users` (
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `auth_groups_users`
--

INSERT INTO `auth_groups_users` (`group_id`, `user_id`) VALUES
(1, 11),
(1, 12);

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_logins`
--

CREATE TABLE `auth_logins` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `user_id` int(11) UNSIGNED DEFAULT NULL,
  `date` datetime NOT NULL,
  `success` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `auth_logins`
--

INSERT INTO `auth_logins` (`id`, `ip_address`, `email`, `user_id`, `date`, `success`) VALUES
(1, '127.0.0.1', 'ejak221@gmail.com', 2, '2021-12-02 05:25:38', 0),
(2, '127.0.0.1', 'ejak221@gmail.com', NULL, '2021-12-02 05:28:25', 0),
(3, '127.0.0.1', 'hamzah.risvi10@gmail.com', 4, '2021-12-02 05:28:50', 0),
(4, '127.0.0.1', 'ejak221@gmail.com', NULL, '2021-12-02 20:23:46', 0),
(5, '127.0.0.1', 'hamzah.risvi10@gmail.com', 4, '2021-12-02 20:26:53', 0),
(6, '127.0.0.1', 'hamzahrisvi@gmail.com', NULL, '2021-12-02 20:27:06', 0),
(7, '127.0.0.1', 'hamzahrisvi@gmail.com', 5, '2021-12-02 20:27:19', 0),
(8, '127.0.0.1', 'hamzahrisvi@gmail.com', 5, '2021-12-02 20:36:28', 0),
(9, '127.0.0.1', 'hamzahrisvi@gmail.com', 5, '2021-12-02 20:39:27', 0),
(10, '127.0.0.1', 'hamzahrisvi@gmail.com', 5, '2021-12-02 20:47:44', 0),
(11, '127.0.0.1', 'ejak221@gmail.com', 7, '2021-12-02 21:03:35', 1),
(12, '127.0.0.1', 'ejak221@gmail.com', NULL, '2021-12-03 03:38:42', 0),
(13, '127.0.0.1', 'ejak221@gmail.com', NULL, '2021-12-03 03:38:58', 0),
(14, '127.0.0.1', 'risvi.muhammad10@gmail.com', 8, '2021-12-03 03:40:57', 1),
(15, '127.0.0.1', 'risvi.muhammad10@gmail.com', 8, '2021-12-03 05:27:22', 1),
(16, '127.0.0.1', 'hamzah.risvi10@gmail.com', 9, '2021-12-03 07:09:20', 1),
(17, '127.0.0.1', 'risvi.muhammad10@gmail.com', 8, '2021-12-03 22:28:37', 1),
(18, '127.0.0.1', 'risvi.muhammad10@gmail.com', 8, '2021-12-03 23:36:15', 1),
(19, '127.0.0.1', 'hamzah.risvi10@gmail.com', NULL, '2021-12-13 01:00:04', 0),
(20, '127.0.0.1', 'risvi.muhammad10@gmail.com', 8, '2021-12-13 01:00:15', 1),
(21, '127.0.0.1', 'risvi.muhammad10@gmail.com', 8, '2021-12-21 19:15:01', 1),
(22, '127.0.0.1', 'risvi.muhammad10@gmail.com', 8, '2021-12-21 19:35:10', 1),
(23, '127.0.0.1', 'risvi.muhammad10@gmail.com', NULL, '2021-12-22 07:42:02', 0),
(24, '127.0.0.1', 'risvi.muhammad10@gmail.com', 8, '2021-12-22 07:42:13', 1),
(25, '127.0.0.1', 'risvi.muhammad10@gmail.com', 8, '2021-12-22 07:52:54', 1),
(26, '127.0.0.1', 'risvi.muhammad10@gmail.com', 8, '2021-12-22 08:17:19', 1),
(27, '127.0.0.1', 'risvi.muhammad10@gmail.com', 8, '2021-12-22 08:31:50', 1),
(28, '127.0.0.1', 'risvi.muhammad10@gmail.com', 8, '2022-01-06 08:44:57', 1),
(29, '127.0.0.1', 'risvi.muhammad10@gmail.com', 8, '2022-01-13 19:13:12', 1),
(30, '127.0.0.1', 'risvi.muhammad10@gmail.com', 8, '2022-01-14 00:02:35', 1),
(31, '127.0.0.1', 'risvi.muhammad10@gmail.com', 8, '2022-01-16 07:42:54', 1),
(32, '127.0.0.1', 'risvi.muhammad10@gmail.com', 8, '2022-01-17 00:43:44', 1),
(33, '127.0.0.1', 'risvi.muhammad10@gmail.com', 8, '2022-01-17 00:59:41', 1),
(34, '127.0.0.1', 'risvi.muhammad10@gmail.com', 8, '2022-01-17 07:33:42', 1),
(35, '127.0.0.1', 'risvi.muhammad10@gmail.com', 8, '2022-01-17 07:36:48', 1),
(36, '127.0.0.1', 'risvi.muhammad10@gmail.com', 8, '2022-01-17 07:43:07', 1),
(37, '127.0.0.1', 'risvi.muhammad10@gmail.com', 8, '2022-01-18 06:44:32', 1),
(38, '127.0.0.1', 'risvi.muhammad10@gmail.com', 8, '2022-01-18 06:44:55', 1),
(39, '127.0.0.1', 'risvi.muhammad10@gmail.com', 8, '2022-01-19 20:30:31', 1),
(40, '127.0.0.1', 'risvi.muhammad10@gmail.com', 8, '2022-01-19 22:07:20', 1),
(41, '127.0.0.1', 'risvi.muhammad10@gmail.com', 8, '2022-01-20 00:09:11', 1),
(42, '127.0.0.1', 'risvi.muhammad10@gmail.com', 8, '2022-01-20 06:45:20', 1),
(43, '127.0.0.1', 'risvi.muhammad10@gmail.com', 8, '2022-01-28 04:32:52', 1),
(44, '127.0.0.1', 'risvi.muhammad10@gmail.com', 8, '2022-01-28 04:33:29', 1),
(45, '127.0.0.1', 'hamzah.risvi10@gmail.com', NULL, '2022-01-28 04:35:33', 0),
(46, '127.0.0.1', 'muhammadhamzah@gmail.com', 10, '2022-01-28 04:42:54', 1),
(47, '127.0.0.1', 'muhammadhamzah@gmail.com', 10, '2022-01-28 04:50:21', 1),
(48, '127.0.0.1', 'risvi.muhammad10@gmail.com', 8, '2022-01-28 04:51:07', 1),
(49, '127.0.0.1', 'risvi.muhammad10@gmail.com', 8, '2022-01-28 04:51:18', 1),
(50, '127.0.0.1', 'muhammadhamzah@gmail.com', 10, '2022-01-28 04:58:24', 1),
(51, '127.0.0.1', 'risvi.muhammad10@gmail.com', 8, '2022-01-28 04:59:33', 1),
(52, '127.0.0.1', 'muhammadhamzah@gmail.com', 10, '2022-01-28 05:01:43', 1),
(53, '127.0.0.1', 'risvi.muhammad10@gmail.com', 8, '2022-01-28 05:02:45', 1),
(54, '127.0.0.1', 'risvi.muhammad10@gmail.com', 8, '2022-01-28 05:31:51', 1),
(55, '127.0.0.1', 'muhammadhamzah@gmail.com', 10, '2022-01-28 05:32:06', 1),
(56, '127.0.0.1', 'risvi.muhammad10@gmail.com', 8, '2022-01-28 05:33:45', 1),
(57, '127.0.0.1', 'risvi.muhammad10@gmail.com', 8, '2022-01-28 05:34:33', 1),
(58, '127.0.0.1', 'muhammadhamzah@gmail.com', 10, '2022-01-28 05:34:49', 1),
(59, '127.0.0.1', 'risvi.muhammad10@gmail.com', 8, '2022-01-28 05:41:07', 1),
(60, '127.0.0.1', 'muhammadhamzah@gmail.com', 10, '2022-01-28 05:42:29', 1),
(61, '127.0.0.1', 'muhammadhamzah@gmail.com', 10, '2022-01-28 05:43:46', 1),
(62, '127.0.0.1', 'risvi.muhammad10@gmail.com', 8, '2022-01-28 05:46:51', 1),
(63, '127.0.0.1', 'risvi.muhammad10@gmail.com', 8, '2022-01-28 05:50:56', 1),
(64, '127.0.0.1', 'muhammadhamzah@gmail.com', 10, '2022-01-28 05:51:14', 1),
(65, '127.0.0.1', 'risvi.muhammad10@gmail.com', 8, '2022-01-28 21:16:33', 1),
(66, '127.0.0.1', 'risvi.muhammad10@gmail.com', 8, '2022-01-28 21:28:04', 1),
(67, '127.0.0.1', 'muhammadhamzah@gmail.com', 10, '2022-01-28 21:31:08', 1),
(68, '127.0.0.1', 'risvi.muhammad10@gmail.com', 8, '2022-01-28 21:39:24', 1),
(69, '127.0.0.1', 'muhammadhamzah@gmail.com', 10, '2022-01-28 21:58:31', 1),
(70, '127.0.0.1', 'risvi.muhammad10@gmail.com', 8, '2022-02-02 19:14:26', 1),
(71, '127.0.0.1', 'risvi.muhammad10@gmail.com', NULL, '2022-03-18 07:29:15', 0),
(72, '127.0.0.1', 'muhammadhamzah@gmail.com', NULL, '2022-03-18 07:29:26', 0),
(73, '127.0.0.1', 'hamzah.risvi10@gmail.com', NULL, '2022-03-18 07:29:36', 0),
(74, '127.0.0.1', 'risvi.muhammad10@gmail.com', NULL, '2022-03-18 07:29:43', 0),
(75, '127.0.0.1', 'muhammadhamzah@gmail.com', NULL, '2022-03-18 07:29:54', 0),
(76, '127.0.0.1', 'setiawanraflii@gmail.com', NULL, '2022-03-18 07:35:00', 0),
(77, '127.0.0.1', 'setiawanraflii@gmail.com', NULL, '2022-03-18 07:36:15', 0),
(78, '127.0.0.1', 'hamzah.risvi10@gmail.com', NULL, '2022-03-18 07:37:11', 0),
(79, '127.0.0.1', 'hamzah.risvi10@gmail.com', NULL, '2022-03-18 07:37:19', 0),
(80, '127.0.0.1', 'risvi.muhammad10@gmail.com', 8, '2022-03-18 07:37:42', 1),
(81, '127.0.0.1', 'risvi.muhammad10@gmail.com', 8, '2022-03-23 09:24:13', 1),
(82, '127.0.0.1', 'ejak221@gmail.com', NULL, '2022-06-19 09:16:20', 0),
(83, '127.0.0.1', 'hamzah.risvi10@gmail.com', NULL, '2022-06-19 09:16:34', 0),
(84, '127.0.0.1', 'hamzah.risvi10@gmail.com', NULL, '2022-06-19 09:16:50', 0),
(85, '127.0.0.1', 'muhammadhamzah@gmail.com', NULL, '2022-06-19 09:17:19', 0),
(86, '127.0.0.1', 'register@gmail.com', 11, '2022-06-19 09:18:53', 1),
(87, '127.0.0.1', 'register@gmail.com', NULL, '2022-07-23 04:14:04', 0),
(88, '127.0.0.1', 'register@gmail.com', NULL, '2022-07-23 04:14:12', 0),
(89, '127.0.0.1', 'register@gmail.com', NULL, '2022-07-23 04:14:24', 0),
(90, '127.0.0.1', 'hamzah@gmail.com', 12, '2022-07-23 04:16:06', 1),
(91, '127.0.0.1', 'hamzah@gmail.com', 12, '2022-07-23 05:15:12', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_permissions`
--

CREATE TABLE `auth_permissions` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_reset_attempts`
--

CREATE TABLE `auth_reset_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_tokens`
--

CREATE TABLE `auth_tokens` (
  `id` int(11) UNSIGNED NOT NULL,
  `selector` varchar(255) NOT NULL,
  `hashedValidator` varchar(255) NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `expires` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_users_permissions`
--

CREATE TABLE `auth_users_permissions` (
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `permission_id` int(11) UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2017-11-20-223112', 'Myth\\Auth\\Database\\Migrations\\CreateAuthTables', 'default', 'Myth\\Auth', 1638437018, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `penduduk`
--

CREATE TABLE `penduduk` (
  `id` int(25) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jenkel` varchar(25) NOT NULL,
  `usia` int(3) NOT NULL,
  `agama` varchar(25) NOT NULL,
  `alamat` text NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `penduduk`
--

INSERT INTO `penduduk` (`id`, `nama`, `tgl_lahir`, `jenkel`, `usia`, `agama`, `alamat`, `foto`) VALUES
(5, 'Maria', '2000-05-27', 'Perempuan', 21, 'islam', 'JL. ABCD Lorong EFGH', 'default.jpg'),
(6, 'Putri wulandari', '1999-11-10', 'Perempuan', 22, 'kristen', 'JL. Merpati Lr. Beringin', 'default.jpg'),
(9, 'Edie Suryanegara', '1990-02-03', 'Laki-laki', 31, 'kristen', 'JL. Merpati Lr. Beringin', 'default.jpg'),
(10, 'Ernawati', '1998-04-15', 'Perempuan', 23, 'islam', 'JL. Merpati', 'default.jpg'),
(11, 'Susilowati', '1997-02-03', 'Perempuan', 24, 'kristen', 'JL. Merpati', 'default.jpg'),
(12, 'Megawatie', '1999-07-27', 'Perempuan', 23, 'islam', 'JL Harapan Jaya', 'default.jpg'),
(13, 'Satria', '1998-12-13', 'Laki-laki', 23, 'islam', 'JL Harapan Jaya', 'default.jpg'),
(14, 'Mawar', '1980-02-23', 'Perempuan', 40, 'islam', 'Jl. Soekarno Hatta No.27', 'default.jpg'),
(15, 'John', '1990-08-10', 'Laki-laki', 31, 'kristen', 'Jl. Soekarno Hatta No.27', 'default.jpg'),
(16, 'Robin van persie', '1996-06-04', 'Laki-laki', 25, 'kristen', 'JL. Merpati', 'default.jpg'),
(17, 'Ibrahimvic', '1999-10-22', 'Laki-laki', 22, 'kristen', 'JL. Merpati', 'default.jpg'),
(18, 'Mahmud', '1992-02-22', 'Laki-laki', 29, 'islam', 'Jl. Soekarno Hatta No.27', 'default.jpg'),
(19, 'Putri Damayanti', '1989-09-20', 'Laki-laki', 32, 'islam', 'Jl. Produksim Kuto Batu', 'default.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `password_hash` varchar(255) NOT NULL,
  `reset_hash` varchar(255) DEFAULT NULL,
  `reset_at` datetime DEFAULT NULL,
  `reset_expires` datetime DEFAULT NULL,
  `activate_hash` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `status_message` varchar(255) DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '0',
  `force_pass_reset` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `email`, `username`, `password_hash`, `reset_hash`, `reset_at`, `reset_expires`, `activate_hash`, `status`, `status_message`, `active`, `force_pass_reset`, `created_at`, `updated_at`, `deleted_at`) VALUES
(11, 'register@gmail.com', 'userguest', '$2y$10$..gVDFysc8YGRUfBTsZDOOAQAukz/pBmFwp98jtc4QvvP3JGyjUBG', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2022-06-19 09:18:28', '2022-06-19 09:18:28', NULL),
(12, 'hamzah@gmail.com', 'hamzah risvi', '$2y$10$/3cZgBHUrnWuR/P.Y5sZgOo0A3qFaitzYFVQei5si/1LUAUysGGuG', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2022-07-23 04:15:44', '2022-07-23 04:15:44', NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `auth_groups`
--
ALTER TABLE `auth_groups`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD KEY `auth_groups_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `group_id_permission_id` (`group_id`,`permission_id`);

--
-- Indeks untuk tabel `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD KEY `auth_groups_users_user_id_foreign` (`user_id`),
  ADD KEY `group_id_user_id` (`group_id`,`user_id`);

--
-- Indeks untuk tabel `auth_logins`
--
ALTER TABLE `auth_logins`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`),
  ADD KEY `user_id` (`user_id`);

--
-- Indeks untuk tabel `auth_permissions`
--
ALTER TABLE `auth_permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `auth_tokens_user_id_foreign` (`user_id`),
  ADD KEY `selector` (`selector`);

--
-- Indeks untuk tabel `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD KEY `auth_users_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `user_id_permission_id` (`user_id`,`permission_id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `penduduk`
--
ALTER TABLE `penduduk`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `auth_groups`
--
ALTER TABLE `auth_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `auth_logins`
--
ALTER TABLE `auth_logins`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;

--
-- AUTO_INCREMENT untuk tabel `auth_permissions`
--
ALTER TABLE `auth_permissions`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `auth_tokens`
--
ALTER TABLE `auth_tokens`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `penduduk`
--
ALTER TABLE `penduduk`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD CONSTRAINT `auth_groups_permissions_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_groups_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD CONSTRAINT `auth_groups_users_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_groups_users_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD CONSTRAINT `auth_tokens_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD CONSTRAINT `auth_users_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_users_permissions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
