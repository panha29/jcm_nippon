-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 26, 2023 at 12:35 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nippon`
--

-- --------------------------------------------------------

--
-- Table structure for table `career`
--

CREATE TABLE `career` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `career_title` varchar(255) NOT NULL,
  `career_position` varchar(255) NOT NULL,
  `career_image` varchar(255) DEFAULT NULL,
  `career_date` varchar(255) NOT NULL,
  `career_detail` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `category_date` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `category_date`, `created_at`, `updated_at`) VALUES
(22, 'Home Paint', '26.10.2023', '2023-10-26 03:28:34', '2023-10-26 03:28:34'),
(23, 'WaterProofing', '26.10.2023', '2023-10-26 03:29:23', '2023-10-26 03:29:23'),
(24, 'Protective Paint & Industry', '26.10.2023', '2023-10-26 03:30:04', '2023-10-26 03:30:04'),
(25, 'Painting Tools', '26.10.2023', '2023-10-26 03:30:08', '2023-10-26 03:30:08');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `event_title` varchar(255) NOT NULL,
  `event_image` varchar(255) DEFAULT NULL,
  `event_date` varchar(255) NOT NULL,
  `event_detail` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `media_title` varchar(255) NOT NULL,
  `media_image` varchar(255) DEFAULT NULL,
  `media_date` varchar(255) NOT NULL,
  `media_detail` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2023_10_23_112244_categories_migration', 1),
(5, '2023_10_24_140338_product_migration', 2),
(6, '2023_10_24_161812_news_migration', 3),
(7, '2023_10_24_161822_event_migration', 3),
(8, '2023_10_24_161833_career_migration', 3),
(9, '2023_10_24_161842_media_migration', 3);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `news_title` varchar(255) NOT NULL,
  `news_image` varchar(255) DEFAULT NULL,
  `news_date` varchar(255) NOT NULL,
  `news_detail` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_date` varchar(255) NOT NULL,
  `product_category` varchar(255) NOT NULL,
  `product_detail` varchar(255) DEFAULT NULL,
  `product_image` varchar(250) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `product_name`, `product_date`, `product_category`, `product_detail`, `product_image`, `created_at`, `updated_at`) VALUES
(6, 'Solid Gold Paint', '26.10.2023', 'Home Paint', NULL, '202310261604npd1.png', '2023-10-26 09:04:54', '2023-10-26 09:04:54'),
(7, 'Watex', '26.10.2023', 'Home Paint', NULL, '202310261605npd2.png', '2023-10-26 09:05:23', '2023-10-26 09:05:23'),
(8, 'Matex', '26.10.2023', 'Home Paint', NULL, '202310261605npd3.png', '2023-10-26 09:05:35', '2023-10-26 09:05:35'),
(9, 'Odour Less Super Easy Wash', '26.10.2023', 'Home Paint', NULL, '202310261606npd4.png', '2023-10-26 09:06:25', '2023-10-26 09:06:25'),
(10, 'Odour Less', '26.10.2023', 'Home Paint', NULL, '202310261606npd5.png', '2023-10-26 09:06:59', '2023-10-26 09:06:59'),
(11, 'SolaReflect', '26.10.2023', 'Home Paint', NULL, '202310261607npd7.png', '2023-10-26 09:07:50', '2023-10-26 09:07:50'),
(12, 'Matex Premium', '26.10.2023', 'Home Paint', NULL, '202310261608npd8.png', '2023-10-26 09:08:02', '2023-10-26 09:08:02'),
(13, 'WeatherBond', '26.10.2023', 'Home Paint', NULL, '202310261608npd9.png', '2023-10-26 09:08:28', '2023-10-26 09:54:48'),
(14, 'WeatherGard', '26.10.2023', 'Home Paint', NULL, '202310261608npd10.png', '2023-10-26 09:08:47', '2023-10-26 09:54:39'),
(15, 'StoCrete Thinplast Finish White', '26.10.2023', 'WaterProofing', NULL, '202310261701npd11.png', '2023-10-26 10:01:10', '2023-10-26 10:01:10'),
(16, 'StoPox EPA-P', '26.10.2023', 'WaterProofing', NULL, '202310261701npd12.png', '2023-10-26 10:01:36', '2023-10-26 10:01:36'),
(17, 'StoPx WL100', '26.10.2023', 'WaterProofing', NULL, '202310261701npd13.png', '2023-10-26 10:01:54', '2023-10-26 10:01:54'),
(18, 'Sto Jet IHL', '26.10.2023', 'WaterProofing', NULL, '202310261702npd14.png', '2023-10-26 10:02:24', '2023-10-26 10:02:24'),
(19, 'StoCrete NSG', '26.10.2023', 'WaterProofing', NULL, '202310261702npd16.png', '2023-10-26 10:02:58', '2023-10-26 10:02:58'),
(20, 'Sto Bit Seal 99', '26.10.2023', 'WaterProofing', NULL, '202310261704npd17.png', '2023-10-26 10:04:11', '2023-10-26 10:04:11'),
(21, 'StoCrete Plug', '26.10.2023', 'WaterProofing', NULL, '202310261704npd18.png', '2023-10-26 10:04:41', '2023-10-26 10:04:41'),
(22, 'StoCrete SBR HD', '26.10.2023', 'WaterProofing', NULL, '202310261704npd19.png', '2023-10-26 10:04:57', '2023-10-26 10:04:57'),
(23, 'StoCrete 4222', '26.10.2023', 'WaterProofing', NULL, '202310261705npd20.png', '2023-10-26 10:05:11', '2023-10-26 10:06:20'),
(24, 'StoCrete CCW Elastic', '26.10.2023', 'WaterProofing', NULL, '202310261705npd21.png', '2023-10-26 10:05:49', '2023-10-26 10:05:49'),
(25, 'StoCry I Elastocoat II', '26.10.2023', 'WaterProofing', NULL, '202310261706npd22.png', '2023-10-26 10:06:09', '2023-10-26 10:06:09'),
(26, 'Newspapers', '26.10.2023', 'Painting Tools', NULL, '202310261707t1.png', '2023-10-26 10:07:13', '2023-10-26 10:07:13'),
(27, 'Cleaning Rags', '26.10.2023', 'Painting Tools', NULL, '202310261707t3.png', '2023-10-26 10:07:23', '2023-10-26 10:07:23'),
(28, 'Container', '26.10.2023', 'Painting Tools', NULL, '202310261707t7.png', '2023-10-26 10:07:33', '2023-10-26 10:07:33'),
(29, 'Glove', '26.10.2023', 'Painting Tools', NULL, '202310261707t5.png', '2023-10-26 10:07:41', '2023-10-26 10:08:23'),
(30, 'Roller Tray', '26.10.2023', 'Painting Tools', NULL, '202310261707t8.png', '2023-10-26 10:07:49', '2023-10-26 10:08:30'),
(31, 'Sandpaper/Sanding Block', '26.10.2023', 'Painting Tools', NULL, '202310261710t10.png', '2023-10-26 10:10:18', '2023-10-26 10:10:18'),
(32, 'Scrapper', '26.10.2023', 'Painting Tools', NULL, '202310261710t2.png', '2023-10-26 10:10:26', '2023-10-26 10:10:26'),
(33, 'Rollers', '26.10.2023', 'Painting Tools', NULL, '202310261710t4.png', '2023-10-26 10:10:33', '2023-10-26 10:10:33'),
(34, 'Brushes', '26.10.2023', 'Painting Tools', NULL, '202310261710t6.png', '2023-10-26 10:10:41', '2023-10-26 10:11:10'),
(35, 'Masking Tape', '26.10.2023', 'Painting Tools', NULL, '202310261710t9.png', '2023-10-26 10:10:47', '2023-10-26 10:10:47'),
(36, 'Selleys RTV Red', '26.10.2023', 'Protective Paint & Industry', NULL, '202310261717ind12.png', '2023-10-26 10:17:56', '2023-10-26 10:17:56'),
(37, 'Selleys RTV Gray', '26.10.2023', 'Protective Paint & Industry', NULL, '202310261718ind6.png', '2023-10-26 10:18:25', '2023-10-26 10:18:25'),
(38, 'Selleys No More Gaps', '26.10.2023', 'Protective Paint & Industry', NULL, '202310261719ind8.png', '2023-10-26 10:19:43', '2023-10-26 10:19:43'),
(39, 'Selleys Blockade', '26.10.2023', 'Protective Paint & Industry', NULL, '202310261720ind3.png', '2023-10-26 10:20:14', '2023-10-26 10:20:14'),
(40, 'PU Recoatable', '26.10.2023', 'Protective Paint & Industry', NULL, '202310261720ind4.png', '2023-10-26 10:20:40', '2023-10-26 10:20:40'),
(41, 'EA9 Finish', '26.10.2023', 'Protective Paint & Industry', NULL, '202310261720ind2.png', '2023-10-26 10:20:49', '2023-10-26 10:20:49'),
(42, 'EA4 Finish', '26.10.2023', 'Protective Paint & Industry', NULL, '202310261721ind5.png', '2023-10-26 10:21:02', '2023-10-26 10:21:02'),
(43, 'Road Line', '26.10.2023', 'Home Paint', NULL, '202310261721ind9.png', '2023-10-26 10:21:23', '2023-10-26 10:21:23');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT 0,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `password_confirmation` varchar(100) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `is_admin`, `email_verified_at`, `password`, `password_confirmation`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@admin', 1, NULL, '$2y$10$Z2QZ9TUV7eAKvLQoJf1zDembGJZwLmHDaSIB6y91H57MHbgeJPsQa', '', NULL, '2023-10-24 04:09:09', '2023-10-26 10:34:08'),
(2, 'admin', 'user@user', 0, NULL, '$2y$10$zg5sSJwQDXMCVjUL5NmgjuHwawBILrm6ql4mXzfvKgAIy0gqw2sW2', '', NULL, '2023-10-25 09:01:24', '2023-10-25 09:49:40'),
(3, 'admin123', 'admin123@admin', 0, NULL, '$2y$10$XUXB7tR1T/WLZHHzF8LrIeQraQwxhvOoG58hpVHlSfE9RPjy4/ioa', 'admin', NULL, '2023-10-25 09:21:08', '2023-10-25 09:21:08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `career`
--
ALTER TABLE `career`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
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
-- AUTO_INCREMENT for table `career`
--
ALTER TABLE `career`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
