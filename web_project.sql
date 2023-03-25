-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 21, 2023 at 09:34 AM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_tbls`
--

DROP TABLE IF EXISTS `admin_tbls`;
CREATE TABLE IF NOT EXISTS `admin_tbls` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `op_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `depart_from` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `depart_time` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `arrive_at` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `booked_seats` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=43 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin_tbls`
--

INSERT INTO `admin_tbls` (`id`, `username`, `op_name`, `depart_from`, `depart_time`, `arrive_at`, `booked_seats`, `price`, `total`, `created_at`, `updated_at`) VALUES
(42, 'idk', 'Virak Buntham', 'Phnom Penh', '07:00:00', 'Siem Reap', '1', '5', 5, '2023-02-21 02:27:50', '2023-02-21 02:27:50');

-- --------------------------------------------------------

--
-- Table structure for table `bus_tbl`
--

DROP TABLE IF EXISTS `bus_tbl`;
CREATE TABLE IF NOT EXISTS `bus_tbl` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `op_logo` varchar(255) NOT NULL,
  `op_name` varchar(255) NOT NULL,
  `op_review` int(11) NOT NULL,
  `depart_from` varchar(255) NOT NULL,
  `depart_time` time NOT NULL,
  `arrive_at` varchar(255) NOT NULL,
  `arrive_time` time NOT NULL,
  `time_diff` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `seat_avail` int(11) NOT NULL,
  `updated_at` timestamp NOT NULL,
  `created_at` timestamp NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bus_tbl`
--

INSERT INTO `bus_tbl` (`id`, `op_logo`, `op_name`, `op_review`, `depart_from`, `depart_time`, `arrive_at`, `arrive_time`, `time_diff`, `price`, `seat_avail`, `updated_at`, `created_at`) VALUES
(1, 'virak_buntham.png\n', 'Virak Buntham', 417, 'Phnom Penh', '07:00:00', 'Siem Reap', '13:00:00', 6, 5, 19, '2023-02-01 05:42:23', '2023-02-01 05:42:23'),
(2, 'virak_buntham.png', 'Virak Buntham', 417, 'Siem Reap', '11:00:00', 'Phnom Penh', '20:00:00', 9, 8, 20, '2023-02-01 06:26:46', '2023-02-01 06:26:46'),
(3, 'CamPost.png', 'Cambodia Post', 132, 'Phnom Penh', '14:00:00', 'Poipet', '21:00:00', 7, 8, 15, '2023-02-01 16:18:56', '2023-02-01 16:18:56'),
(4, 'Chan_Moly_Roth.png', 'Chan Moly Roth', 5, 'Sihanouk Ville', '09:00:00', 'Phnom Penh', '12:00:00', 8, 12, 25, '2023-02-01 16:23:09', '2023-02-01 16:23:09'),
(5, 'MB.png', 'MBUS', 1, 'Siem Reap', '07:00:00', 'Sihanouk Ville', '12:00:00', 5, 24, 10, '2023-02-01 16:25:53', '2023-02-01 16:25:53'),
(6, 'Mey_Hong.png', 'Mey Hong Transport', 963, 'Phnom Penh', '09:00:00', 'Sihanouk Ville', '17:00:00', 8, 10, 23, '2023-02-01 16:27:23', '2023-02-01 16:27:23'),
(7, 'seila-angkor.png', 'Seila Angkor Khmer Express', 1091, 'Siem Reap', '13:00:00', 'Phnom Penh', '16:00:00', 3, 12, 10, '2023-02-01 16:28:17', '2023-02-01 16:28:17'),
(8, 'Larryta.png', 'Larryta Express', 711, 'Phnom Penh', '10:00:00', 'Sihanouk Ville', '13:00:00', 8, 14, 13, '2023-02-01 16:29:25', '2023-02-01 16:29:25');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_02_20_170419_create_admin_tbls_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'idk', 'rithtkd@gmail.com', NULL, '$2y$10$4qHzypozraSdGGVIAqOUme1Vtml5kE8y9xF3N167H2mF1FiA/AKbK', NULL, '2023-02-20 10:13:09', '2023-02-20 10:13:09'),
(2, 'new', 'new@gmail.com', NULL, '$2y$10$IhiUVGLIvKRg90ue8Ad0D.z7L.6uQHxEPadFcH3pclNPdfe./0pZu', NULL, '2023-02-21 01:58:21', '2023-02-21 01:58:21');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
