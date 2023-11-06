-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 06, 2023 at 11:38 AM
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
(9, '2023_10_24_161842_media_migration', 3),
(11, '2023_11_06_152312_projectreference', 4);

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
-- Table structure for table `project_reference`
--

CREATE TABLE `project_reference` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `project_reference_name` varchar(255) NOT NULL,
  `project_reference_startDate` varchar(255) DEFAULT NULL,
  `project_reference_endDate` varchar(255) DEFAULT NULL,
  `project_reference_area` varchar(255) DEFAULT NULL,
  `project_reference_exterior` varchar(255) DEFAULT NULL,
  `project_reference_interior` varchar(255) DEFAULT NULL,
  `project_reference_image1` varchar(255) DEFAULT NULL,
  `project_reference_image2` varchar(255) DEFAULT NULL,
  `project_reference_image3` varchar(255) DEFAULT NULL,
  `project_reference_image4` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `project_reference`
--

INSERT INTO `project_reference` (`id`, `project_reference_name`, `project_reference_startDate`, `project_reference_endDate`, `project_reference_area`, `project_reference_exterior`, `project_reference_interior`, `project_reference_image1`, `project_reference_image2`, `project_reference_image3`, `project_reference_image4`, `created_at`, `updated_at`) VALUES
(2, 'Aeon Mall', '01.04.2014', '03.07.2017', 'ជិតមាត់ទន្លេ', 'WB 145, WB 590, WB 134, WB 569', 'MA 569, 2005-Y30A, 73A-1A', '202311061609aeon.jpg', '202311061609aeon1.jpg', '202311061609aeon2.jpg', NULL, '2023-11-06 09:09:08', '2023-11-06 09:09:08'),
(3, 'La Seine', NULL, NULL, 'នៅក្នុងកោះពេជ្រ', 'WB 145, WB 27B-1P, WB 363 WB 569', NULL, '202311061643laseine.jpg', '202311061643laseine1.jpg', '202311061643laseine2.jpg', NULL, '2023-11-06 09:43:26', '2023-11-06 09:43:26'),
(4, 'Central Market', '19.04.2010', '20.10.2010', 'WB 145', 'WB 2034, WB 28C-3T, WB 145 WB 73C-1P', 'WB 145', '202311061644cm.jpg', '202311061644cm1.jpg', '202311061644cm2.jpg', NULL, '2023-11-06 09:44:17', '2023-11-06 09:44:17'),
(5, 'Independent Monument', '07.07.2011', '25.06.2012', 'វិមានឯករាជ្យ', NULL, 'WB 145', '202311061646im.jpg', '202311061646im1.jpg', '202311061646im2.jpg', NULL, '2023-11-06 09:46:01', '2023-11-06 09:46:01'),
(6, 'Orkede Villa', '21.02.2015', '24.06.2017', 'សែនសុខ', 'WG NPY 01168I, NPOW 1001P NPN 2046P, NPN 1919D', 'Matex 9102', '202311061646orkide10001.jpg', '202311061646orkide10002.jpg', '202311061646orkide10003.jpg', NULL, '2023-11-06 09:46:55', '2023-11-06 09:46:55'),
(7, 'Chip Mong Land', '03.08.2015', '09.05.2017', 'សែនសុខ', 'WG S3501. WGG 3501. WG N2003D', 'MA 9102', '202311061647cml10001.jpg', '202311061647cml10002.jpg', '202311061647cml10003.jpg', NULL, '2023-11-06 09:47:41', '2023-11-06 09:47:41'),
(8, 'Bodaiju', '09.09.2016', '15.01.2018', 'ពោចិនតុង', 'WB 145, WB 13A-2P, WB 39-2T WB 13C-3D', 'MA 9102, WG 13A-3P', '202311061648bodaiju10001.jpg', '202311061648bodaiju10002.jpg', '202311061648bodaiju10003.jpg', NULL, '2023-11-06 09:48:17', '2023-11-06 09:48:17'),
(9, 'CASA ( Maradian )', '16.07.2016', '24.06.2017', 'កោះពេជ្រ', 'WB 13C-2T. WB 13C-4D. WB 145', 'WB 145', '202311061649casa10001.jpg', '202311061649casa10002.jpg', '202311061649casa10003.jpg', NULL, '2023-11-06 09:49:11', '2023-11-06 09:49:11'),
(10, 'Maline', '02.08.2013', '20.01.2015', 'ដូនពេញ', 'NPP1064, WB 416, WB 145', 'MA 9102, MA 560, PL20102', '202311061649maline10001.jpg', '202311061649maline10002.jpg', '202311061649maline10003.jpg', NULL, '2023-11-06 09:49:46', '2023-11-06 09:49:46'),
(11, 'Mekong Royal', '28.01.2016', '08.02.2017', 'ផ្លូវជាតិលេខ6', 'WG 47A-2P. WG 24A-2P. WG 39C-2T', 'MA NPP 776', '202311061652mekong10001.jpg', '202311061652mekong10002.jpg', '202311061652mekong10003.jpg', NULL, '2023-11-06 09:52:17', '2023-11-06 09:52:17'),
(12, 'Nan Jin Resturant', '20.04.2015', '14.07.2016', 'ជិតផ្សារថ្មី', 'NPP 12127, WB 145, SRC 13B-1P', NULL, '202311061652nanjing10001.jpg', '202311061652nanjing10002.jpg', '202311061652nanjing10003.jpg', NULL, '2023-11-06 09:52:51', '2023-11-06 09:52:51'),
(13, 'Millennium', '23.07.2012', '03.07.2017', 'បឹងកេងកង', 'WB NPP 927. NPP 926. MA 353', 'MA 1112. WB 416. WB 589. MA 703', '202311061654Millennium10001.jpg', '202311061654Millennium10002.jpg', '202311061654Millennium10003.jpg', NULL, '2023-11-06 09:54:38', '2023-11-06 09:54:38'),
(14, 'Phnom Penh Land Tower', '04.05.2015', '14.07.2016', 'Phnom Penh', 'WG NPP 12101, WB 145', 'Matex 0658, Matex NPN 12101', '202311061706Phnom_Penh_Land_Tower10001.jpg', '202311061706Phnom_Penh_Land_Tower10002.jpg', '202311061706Phnom_Penh_Land_Tower10003.jpg', NULL, '2023-11-06 10:06:53', '2023-11-06 10:06:53'),
(15, 'Kim Mengsrun', NULL, NULL, NULL, 'WB 145. WB 816', 'WB 145', '202311061707Kim_Mengsrun10001.jpg', '202311061707Kim_Mengsrun10002.jpg', '202311061707Kim_Mengsrun10003.jpg', NULL, '2023-11-06 10:07:22', '2023-11-06 10:07:22'),
(16, 'សំណាង សីម៉ា', NULL, NULL, NULL, 'WB 145, WB 1139', 'WB 145', '202311061707សំណាង_សីម៉ា10001.jpg', '202311061707សំណាង_សីម៉ា10002.jpg', '202311061707សំណាង_សីម៉ា10003.jpg', NULL, '2023-11-06 10:07:46', '2023-11-06 10:07:46'),
(17, 'Aquarius Hotel', NULL, NULL, 'នៅជិតវិមានឯករាជ្យ', 'WB 1510, WB 569', 'WB 145, WB 1112, WB 416', '202311061708Aquarius_Hotel10001.jpg', '202311061708Aquarius_Hotel10002.jpg', '202311061708Aquarius_Hotel10003.jpg', NULL, '2023-11-06 10:08:17', '2023-11-06 10:08:17'),
(18, 'Trust Tower', NULL, NULL, 'នៅជិតសាលាបាក់ទូក', 'WB 145', 'WB 145', '202311061708Trust_Tower10001.jpg', '202311061708Trust_Tower10002.jpg', '202311061708Trust_Tower10003.jpg', NULL, '2023-11-06 10:08:50', '2023-11-06 10:08:50'),
(19, 'ISL. Modern Apartment & Hotel', '09.05.2011', '11.05.2011', NULL, 'WB 39A-2P, WB 39C-1P, Roadline', 'Yellow, White', '202311061709ISL._Modern_Apartment_Hotel10001.jpg', '202311061709ISL._Modern_Apartment_Hotel10002.jpg', '202311061709ISL._Modern_Apartment_Hotel10003.jpg', NULL, '2023-11-06 10:09:28', '2023-11-06 10:09:28'),
(20, 'Pacific Phnom Penh Hospital', '23.07.2012', '22.01.2013', 'ស្ពានអាកាស 7មករា', 'WB 78A-1A, NPP 325, NPP 328', 'MA 561, MA 9102, MA 587, MA 070', '202311061710Pacific_Phnom_Penh_Hospital10001.jpg', '202311061710Pacific_Phnom_Penh_Hospital10002.jpg', '202311061710Pacific_Phnom_Penh_Hospital10003.jpg', NULL, '2023-11-06 10:10:28', '2023-11-06 10:10:28'),
(21, 'Phnom Penh Institute Nursing & Paramedical Sciences', '23.07.2012', '22.01.2013', 'ទួលគោក', 'WB 76C-3D, WB 602, INDEPENDENT', 'MA 9102, MA 456, MA 587', '202311061711Phnom_Penh_Institute_Nursing_Paramedical_Sciences10001.jpg', '202311061711Phnom_Penh_Institute_Nursing_Paramedical_Sciences10002.jpg', '202311061711Phnom_Penh_Institute_Nursing_Paramedical_Sciences10003.jpg', NULL, '2023-11-06 10:11:22', '2023-11-06 10:11:22'),
(22, 'Apartment HM', '06.07.2015', '01.12.2016', 'ទួលគោក', 'WB 916, WGG 6673, WB 913, WB 145', 'MA 3145, MA 590, MA 9102', '202311061712Apartment_HM10001.jpg', '202311061712Apartment_HM10002.jpg', '202311061712Apartment_HM10003.jpg', NULL, '2023-11-06 10:12:10', '2023-11-06 10:12:10'),
(23, 'Tha Da Tra', NULL, NULL, NULL, 'WB 707, WB 145', 'WB 145', '202311061712Tha_Da_Tra10001.jpg', '202311061712Tha_Da_Tra10002.jpg', '202311061712Tha_Da_Tra10003.jpg', NULL, '2023-11-06 10:12:46', '2023-11-06 10:12:46'),
(24, 'The Diamond Home', NULL, NULL, NULL, 'WB 709, WG 66609, WB 145', 'WB 145', '202311061713The_Diamond_Home10001.jpg', '202311061713The_Diamond_Home10002.jpg', '202311061713The_Diamond_Home10003.jpg', NULL, '2023-11-06 10:13:11', '2023-11-06 10:13:11'),
(25, 'CA And SA', '20.10.2015', '23.04.2016', 'កោះពេជ្រ', 'WB 3145. WB 569. WB 416', 'WB 145', '202311061713CA_And_SA10001.jpg', '202311061713CA_And_SA10002.jpg', '202311061713CA_And_SA10003.jpg', NULL, '2023-11-06 10:13:50', '2023-11-06 10:13:50'),
(26, 'Ly Hout Condo', '19.11.2014', '28.03.2016', 'ខណ្ឌ័ 7 មករា', 'WB 416, WB 145, WB 307, WG 66626', 'MA 584, MA 560, MA 1199, MA 9102', '202311061729Ly_Hout_Condo10001.jpg', '202311061729Ly_Hout_Condo10002.jpg', '202311061729Ly_Hout_Condo10003.jpg', NULL, '2023-11-06 10:29:15', '2023-11-06 10:29:15'),
(27, 'Silvertown', NULL, NULL, 'Close to Boeng Keng Kang Market', 'WB 145, WB 1510', 'WB 145, WB 1112', '202311061730Silvertown10001.jpg', '202311061730Silvertown10002.jpg', '202311061730Silvertown10003.jpg', NULL, '2023-11-06 10:30:12', '2023-11-06 10:30:12'),
(28, 'Koh Santepheap Daily', '29.10.2013', '05.08.2015', 'Phsar Derm Thkov', 'WB NPP 962, WB NPN 963, WB 145', NULL, '202311061730Koh_Santepheap_Daily10001.jpg', '202311061730Koh_Santepheap_Daily10002.jpg', '202311061730Koh_Santepheap_Daily10003.jpg', NULL, '2023-11-06 10:30:46', '2023-11-06 10:30:46'),
(29, 'Prasac Microfinance', '10.05.2015', '12.01.2016', 'Phnom Penh', 'WB 45A-1A, WB 13A-3P', 'Matex 13A-3P', '202311061733Prasac_Microfinance10001.jpg', '202311061733Prasac_Microfinance10002.jpg', '202311061733Prasac_Microfinance10003.jpg', NULL, '2023-11-06 10:33:08', '2023-11-06 10:33:08'),
(30, 'Camko City', '08.12.2009', '31.12.2013', 'Camko Roundabout', 'WB 39C-3D, WB 51B-3D, WB 33C-3D', 'MA 589, MA 9102', '202311061734Camko_City10001.jpg', '202311061734Camko_City10002.jpg', '202311061734Extraordinary_Chamber10003.jpg', NULL, '2023-11-06 10:34:03', '2023-11-06 10:34:03'),
(31, 'Vanda Institute', '08.12.2009', '31.12.2015', 'St. Mao Zedong', 'WB 37YY61/867, WB 18A-1A', 'Watex 145', '202311061734Vanda_Institute_10001.jpg', '202311061734Vanda_Institute_10002.jpg', '202311061734Vanda_Institute_10003.jpg', NULL, '2023-11-06 10:34:38', '2023-11-06 10:34:38'),
(32, 'Heng Asia', '28.12.2009', '31.12.2013', 'Close to Bokor Street', 'WB NPP 1131, WB NPP 1132 WB 416, WB 145', 'MA 9102, MA 78A-17A, WB 307', '202311061735Heng_Asia10001.jpg', '202311061735Heng_Asia10002.jpg', '202311061735Heng_Asia10003.jpg', NULL, '2023-11-06 10:35:13', '2023-11-06 10:35:13'),
(33, 'Thunborey Hotel', NULL, NULL, NULL, 'WB 555, WB 17A-1A, WB 145', 'WB 145', '202311061735Thunborey_Hotel10001.jpg', '202311061735Thunborey_Hotel10002.jpg', '202311061735Thunborey_Hotel10003.jpg', NULL, '2023-11-06 10:35:45', '2023-11-06 10:35:45'),
(34, 'Peari Of Asia', NULL, NULL, NULL, 'WB 145, WB 134, WB 825', 'WB 145', '202311061736Peari_Of_Asia10001.jpg', '202311061736Peari_Of_Asia10002.jpg', '202311061736Peari_Of_Asia10003.jpg', NULL, '2023-11-06 10:36:17', '2023-11-06 10:36:17'),
(35, 'Asia Palace Hotel', '22.05.2012', '11.08.2012', 'Close to Central Market', 'WB 145, WB 134', 'Watex 416, Watex 040', '202311061736Asia_Palace_Hotel10001.jpg', '202311061736Asia_Palace_Hotel10002.jpg', '202311061736Asia_Palace_Hotel10003.jpg', NULL, '2023-11-06 10:36:44', '2023-11-06 10:36:44'),
(36, 'OCIC', '07.05.2014', '04.12.2014', 'Canadia Street 6A', 'WG M 451, WG M 569, WG M 416', 'Matex NPP 0548', '202311061737OCIC10001.jpg', '202311061737OCIC10002.jpg', '202311061737OCIC10003.jpg', NULL, '2023-11-06 10:37:21', '2023-11-06 10:37:21'),
(37, 'Rong Roeung Condo', '17.05.2014', '04.12.2014', 'Canadia Street 6A', 'WGG 2996P, WGG SEMI 6681 WB 145', 'Matex NPP 0589', '202311061738Rong_Roeung_Condo10001.jpg', '202311061738Rong_Roeung_Condo10002.jpg', '202311061738Rong_Roeung_Condo10003.jpg', NULL, '2023-11-06 10:38:06', '2023-11-06 10:38:06');

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
(1, 'admin', 'admin@admin', 1, NULL, '$2y$10$Z2QZ9TUV7eAKvLQoJf1zDembGJZwLmHDaSIB6y91H57MHbgeJPsQa', '', NULL, '2023-10-24 04:09:09', '2023-11-06 10:38:06'),
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
-- Indexes for table `project_reference`
--
ALTER TABLE `project_reference`
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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

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
-- AUTO_INCREMENT for table `project_reference`
--
ALTER TABLE `project_reference`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
