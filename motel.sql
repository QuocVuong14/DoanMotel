-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 12, 2022 at 08:09 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `motel`
--

-- --------------------------------------------------------

--
-- Table structure for table `addresses`
--

CREATE TABLE `addresses` (
  `id` int(10) UNSIGNED NOT NULL,
  `street` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ward_id` int(11) DEFAULT NULL,
  `district_id` int(11) DEFAULT NULL,
  `apartment_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `addresses`
--

INSERT INTO `addresses` (`id`, `street`, `ward_id`, `district_id`, `apartment_number`, `created_at`, `updated_at`) VALUES
(23, '12 Nam Ky kn', 20323, 497, NULL, '2022-05-28 03:45:22', '2022-05-28 22:07:26'),
(24, '12121 abc xyz', 20323, 497, NULL, '2022-05-28 22:28:22', '2022-05-28 22:28:22'),
(25, '12 Nam Ky kn', 20323, 496, NULL, '2022-05-28 22:45:55', '2022-05-28 22:45:55'),
(26, '12 Nam Ky', 20272, 493, NULL, '2022-05-28 22:48:37', '2022-05-28 22:48:37'),
(27, '12121 abc xyz', 27373, 775, NULL, '2022-05-28 22:49:37', '2022-05-28 22:49:37'),
(28, '12 Nam Ky kn', 20221, 491, NULL, '2022-05-31 07:57:31', '2022-05-31 07:57:31'),
(29, '48ct', 20203, 491, NULL, '2022-05-31 08:02:54', '2022-05-31 08:02:54'),
(30, '48ct', 20203, 491, NULL, '2022-05-31 08:03:11', '2022-05-31 08:03:11'),
(31, '48ct', 20203, 491, NULL, '2022-05-31 08:03:38', '2022-05-31 08:03:38'),
(32, '12 Nam Ky kn', 20236, 492, NULL, '2022-05-31 08:06:36', '2022-05-31 08:06:36'),
(33, '12121 abc xyz', 20207, 491, NULL, '2022-05-31 08:10:31', '2022-05-31 08:10:31'),
(34, '12 Nam Ky', 4612, 139, NULL, '2022-05-31 08:15:39', '2022-05-31 08:15:39'),
(35, '48ct', 20233, 492, NULL, '2022-05-31 08:36:31', '2022-05-31 08:36:31'),
(36, '48ct', 2419, 74, NULL, '2022-05-31 08:51:26', '2022-05-31 08:51:26'),
(37, '12 Nam Ky', 20275, 493, NULL, '2022-05-31 09:10:06', '2022-05-31 09:10:06'),
(38, '48ct', 20275, 493, NULL, '2022-05-31 09:12:08', '2022-05-31 09:12:08'),
(39, 'Đường Mộc Sơn 4', 20290, 494, NULL, '2022-05-31 09:35:58', '2022-05-31 09:35:58'),
(40, 'Đường Mộc Sơn 4', 20290, 494, NULL, '2022-05-31 09:37:26', '2022-05-31 09:37:26'),
(41, 'Đường Mộc Sơn 2', 20227, 492, NULL, '2022-05-31 09:40:34', '2022-06-06 09:21:48'),
(42, '168-05 Đường Hà Tông Quyền', 20260, 495, NULL, '2022-06-01 09:43:56', '2022-06-01 09:43:56'),
(43, '168-05 Đường Hà Tông Quyền', NULL, NULL, NULL, '2022-06-01 09:44:56', '2022-06-01 09:44:56'),
(44, '168-05 Đường Hà Tông Quyền', 20260, 495, NULL, '2022-06-01 09:46:59', '2022-06-01 09:46:59'),
(45, 'Nguyễn Xuân Hữu', 20312, 495, NULL, '2022-06-01 09:49:34', '2022-06-01 09:49:34'),
(46, 'Nguyễn Xuân Hữu', 20312, 495, NULL, '2022-06-01 09:51:42', '2022-06-01 09:51:42'),
(47, '06 Tạ Hiện', 20257, 492, NULL, '2022-06-01 09:59:46', '2022-06-01 09:59:46'),
(48, 'K48/H02 Đường Lê Độ', 20215, 491, NULL, '2022-06-01 10:19:01', '2022-06-01 10:19:01'),
(49, 'Phan Tứ', 20284, 494, NULL, '2022-06-01 17:11:57', '2022-06-01 17:11:57'),
(50, 'Mai Am', 20230, 492, NULL, '2022-06-03 02:21:57', '2022-06-03 02:21:57'),
(51, '48ct', 20293, 497, NULL, '2022-06-06 09:26:47', '2022-06-06 09:26:47'),
(52, 'Đường Mộc Sơn 4', 20197, 490, NULL, '2022-06-07 17:50:34', '2022-06-07 17:50:34'),
(53, 'Đường Mộc Sơn 4', 20284, 494, NULL, '2022-06-07 18:14:14', '2022-06-07 18:14:14'),
(54, '48ct', 20227, 492, NULL, '2022-06-07 18:21:29', '2022-06-07 18:31:23'),
(55, '12 Nam Ky', 20227, 492, NULL, '2022-06-07 18:32:42', '2022-06-07 18:32:42'),
(56, 'Đường Mộc Sơn 4', 20194, 490, NULL, '2022-06-09 03:05:50', '2022-06-09 03:05:50'),
(57, 'Đường Mộc Sơn 4', 20221, 491, NULL, '2022-06-09 03:25:22', '2022-06-09 03:25:22'),
(58, '12 Nam Ky kn', 20221, 491, NULL, '2022-06-09 04:06:47', '2022-06-09 04:06:47'),
(59, '12 Nam Ky kn', 20194, 490, NULL, '2022-06-09 04:12:56', '2022-06-09 04:12:56'),
(60, '999', 20312, 495, NULL, '2022-06-09 07:48:00', '2022-06-09 07:48:00'),
(61, '343434343', 20218, 491, NULL, '2022-06-09 07:48:23', '2022-06-09 09:07:52'),
(62, '1000 Cao Thắng', 20254, 492, NULL, '2022-06-09 20:03:20', '2022-06-09 20:03:20'),
(63, '97 Cù Chính Lan', 20197, 490, NULL, '2022-06-11 08:22:14', '2022-06-11 22:57:26'),
(64, '493 đường Tôn Đức Thắng', 20195, 490, NULL, '2022-06-11 16:27:42', '2022-06-11 16:27:42'),
(65, 'Đường Hà Huy Tập', 20225, 491, NULL, '2022-06-11 16:30:57', '2022-06-11 16:30:57'),
(66, 'Tô Hiến Thành', 20275, 493, NULL, '2022-06-11 16:36:57', '2022-06-11 16:36:57'),
(67, 'K48/H02/12 Lê Độ', 20215, 491, NULL, '2022-06-11 16:44:39', '2022-06-11 16:44:39'),
(68, 'K45 Lê Độ', 20203, 491, NULL, '2022-06-11 17:06:35', '2022-06-11 17:06:35'),
(69, 'K45 Lê Độ', 20203, 491, NULL, '2022-06-11 17:12:59', '2022-06-11 17:12:59'),
(70, 'Tôn Thất Đảng', 20311, 495, NULL, '2022-06-11 17:36:35', '2022-06-11 17:36:35'),
(71, 'Nguyễn Hữu Thọ', 20260, 495, NULL, '2022-06-11 17:40:59', '2022-06-11 17:40:59'),
(72, 'Đường Mộc Sơn 4', 20305, 495, NULL, '2022-06-11 22:12:03', '2022-06-11 22:12:03');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `names` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `names`, `created_at`, `updated_at`) VALUES
(1, 'Cho thuê phòng trọ', NULL, NULL),
(2, 'Cho thuê nhà nguyên căn', NULL, NULL),
(3, 'Tìm người ở ghép', NULL, NULL),
(4, 'Cho thuê căn hộ', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(10) UNSIGNED NOT NULL,
  `content` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `content`, `created_by`, `created_at`, `updated_at`) VALUES
(3, 'aswaw', 51, '2022-06-10 08:15:42', '2022-06-10 08:15:42'),
(4, 'aswaw', 51, '2022-06-10 08:16:51', '2022-06-10 08:16:51'),
(5, 'aswaw', 51, '2022-06-10 08:18:13', '2022-06-10 08:18:13'),
(6, 'asasas', 51, '2022-06-10 08:21:43', '2022-06-10 08:21:43'),
(7, 'asasas', 51, '2022-06-10 08:23:04', '2022-06-10 08:23:04'),
(8, 'âsâsâs', 51, '2022-06-10 08:27:55', '2022-06-10 08:27:55'),
(9, 'ttttttttttttttttttttttttt', 51, '2022-06-10 08:30:04', '2022-06-10 08:30:04'),
(10, 'lag vcl', 51, '2022-06-10 08:32:14', '2022-06-10 08:32:14'),
(11, 'lagggggggggggggggg', 51, '2022-06-10 08:32:20', '2022-06-10 08:32:20'),
(12, 'lagdasadadadada', 51, '2022-06-10 08:36:36', '2022-06-10 08:36:36'),
(13, 'final commentttttttttttttttttt', 51, '2022-06-10 08:54:04', '2022-06-10 08:54:04'),
(14, 'khá đẹp', 58, '2022-06-10 10:02:44', '2022-06-10 10:02:44'),
(15, 'khá đẹp', 58, '2022-06-10 10:02:50', '2022-06-10 10:02:50'),
(16, 'khá đẹp', 58, '2022-06-10 10:02:58', '2022-06-10 10:02:58'),
(17, 'khá đẹp', 58, '2022-06-10 10:02:59', '2022-06-10 10:02:59'),
(18, 'khá đẹp', 58, '2022-06-10 10:02:59', '2022-06-10 10:02:59'),
(19, 'khá đẹp', 58, '2022-06-10 10:02:59', '2022-06-10 10:02:59'),
(20, 'đẹp', 58, '2022-06-11 03:07:23', '2022-06-11 03:07:23'),
(21, 'ổn', 58, '2022-06-11 03:07:57', '2022-06-11 03:07:57'),
(22, 'rất tốt', 58, '2022-06-11 03:14:02', '2022-06-11 03:14:02'),
(23, 'Phòng an ninh tốt', 58, '2022-06-11 03:15:29', '2022-06-11 03:15:29'),
(24, 'tốt', 58, '2022-06-11 09:41:35', '2022-06-11 09:41:35'),
(25, 'Đẹp', 61, '2022-06-11 18:02:51', '2022-06-11 18:02:51'),
(26, 'Đẹp', 61, '2022-06-11 18:02:53', '2022-06-11 18:02:53'),
(27, 'Khá tốt', 61, '2022-06-11 18:05:07', '2022-06-11 18:05:07'),
(28, 'An ninh tốt', 66, '2022-06-11 18:06:29', '2022-06-11 18:06:29');

-- --------------------------------------------------------

--
-- Table structure for table `districts`
--

CREATE TABLE `districts` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ward_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `genders`
--

CREATE TABLE `genders` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `genders`
--

INSERT INTO `genders` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Nam', NULL, NULL),
(2, 'Nữ', NULL, NULL),
(3, 'Nam và Nữ', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(10) UNSIGNED NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `url`, `created_at`, `updated_at`) VALUES
(20, '/posts/1653734721KSDATN1.png', '2022-05-28 03:45:21', '2022-05-28 03:45:21'),
(21, '/posts/1653734721KSDATN2.png', '2022-05-28 03:45:21', '2022-05-28 03:45:21'),
(22, '/posts/1653802102KSDATN1.png', '2022-05-28 22:28:22', '2022-05-28 22:28:22'),
(23, '/posts/1653803155KSDATN1.png', '2022-05-28 22:45:55', '2022-05-28 22:45:55'),
(24, '/posts/1653803317KSDATN1.png', '2022-05-28 22:48:37', '2022-05-28 22:48:37'),
(25, '/posts/1653803377KSDATN1.png', '2022-05-28 22:49:37', '2022-05-28 22:49:37'),
(26, '/posts/1654009051IMG_7101.jpg', '2022-05-31 07:57:31', '2022-05-31 07:57:31'),
(27, 'public/admin/images/1654009358z2334534536466_f58753e64a368193c1e42c2804d5c31d.jpg', '2022-05-31 08:02:38', '2022-05-31 08:02:38'),
(28, 'public/admin/images/1654009374z2334534536466_f58753e64a368193c1e42c2804d5c31d.jpg', '2022-05-31 08:02:54', '2022-05-31 08:02:54'),
(29, 'public/admin/images/1654009391z2334534536466_f58753e64a368193c1e42c2804d5c31d.jpg', '2022-05-31 08:03:11', '2022-05-31 08:03:11'),
(30, 'public/admin/images/1654009418z2334534536466_f58753e64a368193c1e42c2804d5c31d.jpg', '2022-05-31 08:03:38', '2022-05-31 08:03:38'),
(31, 'public/admin/images/1654009596linh sam.jpg', '2022-05-31 08:06:36', '2022-05-31 08:06:36'),
(32, '/posts/1654009830IMG_7230.jpg', '2022-05-31 08:10:30', '2022-05-31 08:10:30'),
(33, '/admin/images/posts1654010138z2334534536466_f58753e64a368193c1e42c2804d5c31d.jpg', '2022-05-31 08:15:39', '2022-05-31 08:15:39'),
(34, '/admin/images/posts1654011390IMG_7101.jpg', '2022-05-31 08:36:30', '2022-05-31 08:36:30'),
(35, '/admin/images/posts1654011391IMG_7230.jpg', '2022-05-31 08:36:31', '2022-05-31 08:36:31'),
(36, '/admin/images/posts1654012286IMG_7101 - Copy.jpg', '2022-05-31 08:51:26', '2022-05-31 08:51:26'),
(37, '/admin/images/posts1654012286IMG_7230.jpg', '2022-05-31 08:51:26', '2022-05-31 08:51:26'),
(38, '/admin/images/posts1654012286linh sam.jpg', '2022-05-31 08:51:26', '2022-05-31 08:51:26'),
(39, '/admin/images/posts1654012286z2334534536466_f58753e64a368193c1e42c2804d5c31d.jpg', '2022-05-31 08:51:26', '2022-05-31 08:51:26'),
(40, '/admin/images/posts/1654013405IMG_7101 - Copy.jpg', '2022-05-31 09:10:05', '2022-05-31 09:10:05'),
(41, '/admin/images/posts/1654013406z2334534536466_f58753e64a368193c1e42c2804d5c31d.jpg', '2022-05-31 09:10:06', '2022-05-31 09:10:06'),
(42, '/admin/images/posts/1654013528linh sam.jpg', '2022-05-31 09:12:08', '2022-05-31 09:12:08'),
(43, '/admin/images/posts/1654102301img-20220420-231628_1650471601.jpg', '2022-05-31 09:35:57', '2022-05-31 09:35:57'),
(44, '/admin/images/posts/1654014957z3456708123522-7bb2867f24948f1b406902cea9d6d139_1653992005.jpg', '2022-05-31 09:35:58', '2022-05-31 09:35:58'),
(45, '/admin/images/posts/1654015045z3456708057812-d6682f718dc9473e2ed30c098c3fd576_1653992016.jpg', '2022-05-31 09:37:25', '2022-05-31 09:37:25'),
(46, '/admin/images/posts/1654015045z3456708123522-7bb2867f24948f1b406902cea9d6d139_1653992005.jpg', '2022-05-31 09:37:25', '2022-05-31 09:37:25'),
(47, '/admin/images/posts/1654015234z3456708057812-d6682f718dc9473e2ed30c098c3fd576_1653992016.jpg', '2022-05-31 09:40:34', '2022-05-31 09:40:34'),
(48, '/admin/images/posts/1654015234z3456708123522-7bb2867f24948f1b406902cea9d6d139_1653992005.jpg', '2022-05-31 09:40:34', '2022-05-31 09:40:34'),
(49, '/admin/images/posts/1654101835img-5695_1588559806.jpg', '2022-06-01 09:43:55', '2022-06-01 09:43:55'),
(50, '/admin/images/posts/1654101836img-5693_1588559781.jpg', '2022-06-01 09:43:56', '2022-06-01 09:43:56'),
(51, '/admin/images/posts/1654101836img-5692_1588559782.jpg', '2022-06-01 09:43:56', '2022-06-01 09:43:56'),
(52, '/admin/images/posts/1654101896img-5695_1588559806.jpg', '2022-06-01 09:44:56', '2022-06-01 09:44:56'),
(53, '/admin/images/posts/1654101896img-5693_1588559781.jpg', '2022-06-01 09:44:56', '2022-06-01 09:44:56'),
(54, '/admin/images/posts/1654101896img-5692_1588559782.jpg', '2022-06-01 09:44:56', '2022-06-01 09:44:56'),
(55, '/admin/images/posts/1654102019img-5695_1588559806.jpg', '2022-06-01 09:46:59', '2022-06-01 09:46:59'),
(56, '/admin/images/posts/1654102019img-5693_1588559781.jpg', '2022-06-01 09:46:59', '2022-06-01 09:46:59'),
(57, '/admin/images/posts/1654102173img-20220420-231628_1650471601.jpg', '2022-06-01 09:49:33', '2022-06-01 09:49:33'),
(58, '/admin/images/posts/1654102173img-20220420-231621_1650471589.jpg', '2022-06-01 09:49:33', '2022-06-01 09:49:33'),
(59, '/admin/images/posts/1654102301img-20220420-231628_1650471601.jpg', '2022-06-01 09:51:42', '2022-06-01 09:51:42'),
(60, '/admin/images/posts/1654102302img-20220420-231621_1650471589.jpg', '2022-06-01 09:51:42', '2022-06-01 09:51:42'),
(61, '/admin/images/posts/1654102785ef63c6a3-3b25-4d0e-8403-945fa862b877_1653899617.jpg', '2022-06-01 09:59:45', '2022-06-01 09:59:45'),
(62, '/admin/images/posts/1654102786bf3c8a53-e503-4c8c-85f4-1eab02582f51_1653899814.jpg', '2022-06-01 09:59:46', '2022-06-01 09:59:46'),
(63, '/admin/images/posts/16541027866a7816fd-b8fe-4605-9fde-078e6cc72fdc_1653899617.jpg', '2022-06-01 09:59:46', '2022-06-01 09:59:46'),
(64, '/admin/images/posts/16541039400e5daa64-a68f-4d87-9f50-b5d51ed99c99_1646999779.jpg', '2022-06-01 10:19:00', '2022-06-01 10:19:00'),
(65, '/admin/images/posts/1654103941411d10dd-98cb-4810-a804-866d31671389_1646999776.jpg', '2022-06-01 10:19:01', '2022-06-01 10:19:01'),
(66, '/admin/images/posts/16541039415880f77f-9d7f-41be-8167-8e774b62a92b_1646999775.jpg', '2022-06-01 10:19:01', '2022-06-01 10:19:01'),
(67, '/admin/images/posts/1654102301img-20220420-231628_1650471601.jpg', '2022-06-01 17:11:57', '2022-06-01 17:11:57'),
(68, '/admin/images/posts/1654128717982070c232c8fc96a5d912_1649231330.jpg', '2022-06-01 17:11:57', '2022-06-01 17:11:57'),
(69, '/admin/images/posts/1654248117z3453184489533-b576b2312dce500d53cb2e1b314be452_1653886365.jpg', '2022-06-03 02:21:57', '2022-06-03 02:21:57'),
(70, '/admin/images/posts/165424811752b647ff04f5caab93e45_1649231329.jpg', '2022-06-03 02:21:57', '2022-06-03 02:21:57'),
(71, '/admin/images/posts/1654248117982070c232c8fc96a5d912_1649231330.jpg', '2022-06-03 02:21:57', '2022-06-03 02:21:57'),
(72, '/admin/images/posts/1654532807z3453184489533-b576b2312dce500d53cb2e1b314be452_1653886365.jpg', '2022-06-06 09:26:47', '2022-06-06 09:26:47'),
(73, '/admin/images/posts/1654649340z3453184489533-b576b2312dce500d53cb2e1b314be452_1653886365.jpg', '2022-06-07 17:49:00', '2022-06-07 17:49:00'),
(74, '/admin/images/posts/1654649434z3453184489533-b576b2312dce500d53cb2e1b314be452_1653886365.jpg', '2022-06-07 17:50:34', '2022-06-07 17:50:34'),
(75, '/admin/images/posts/165465085452b647ff04f5caab93e45_1649231329.jpg', '2022-06-07 18:14:14', '2022-06-07 18:14:14'),
(76, '/admin/images/posts/16546512880e5daa64-a68f-4d87-9f50-b5d51ed99c99_1646999779.jpg', '2022-06-07 18:21:29', '2022-06-07 18:21:29'),
(77, '/admin/images/posts/16546519620e5daa64-a68f-4d87-9f50-b5d51ed99c99_1646999779.jpg', '2022-06-07 18:32:42', '2022-06-07 18:32:42'),
(78, '/admin/images/posts/1654769150z3453184489533-b576b2312dce500d53cb2e1b314be452_1653886365.jpg', '2022-06-09 03:05:50', '2022-06-09 03:05:50'),
(79, '/admin/images/posts/165476915052b647ff04f5caab93e45_1649231329.jpg', '2022-06-09 03:05:50', '2022-06-09 03:05:50'),
(80, '/admin/images/posts/1654770322edesdsqm.jpg', '2022-06-09 03:25:22', '2022-06-09 03:25:22'),
(81, '/admin/images/posts/1654772806edesdsqm.jpg', '2022-06-09 04:06:46', '2022-06-09 04:06:46'),
(82, '/admin/images/posts/165477317652b647ff04f5caab93e45_1649231329.jpg', '2022-06-09 04:12:56', '2022-06-09 04:12:56'),
(83, '/admin/images/posts/1654786080logo.jpg', '2022-06-09 07:48:00', '2022-06-09 07:48:00'),
(84, '/admin/images/posts/1654786103logo.jpg', '2022-06-09 07:48:23', '2022-06-09 07:48:23'),
(85, '/admin/images/posts/1654790562Screenshot (32).png', '2022-06-09 09:02:42', '2022-06-09 09:02:42'),
(86, '/admin/images/posts/1654790563Screenshot (33).png', '2022-06-09 09:02:43', '2022-06-09 09:02:43'),
(87, '/admin/images/posts/1654790826Screenshot (32).png', '2022-06-09 09:07:06', '2022-06-09 09:07:06'),
(88, '/admin/images/posts/1654790826Screenshot (33).png', '2022-06-09 09:07:06', '2022-06-09 09:07:06'),
(89, '/admin/images/posts/1654790843Screenshot (32).png', '2022-06-09 09:07:23', '2022-06-09 09:07:23'),
(90, '/admin/images/posts/1654790843Screenshot (33).png', '2022-06-09 09:07:23', '2022-06-09 09:07:23'),
(91, '/admin/images/posts/1654830199z3453184489533-b576b2312dce500d53cb2e1b314be452_1653886365.jpg', '2022-06-09 20:03:19', '2022-06-09 20:03:19'),
(92, '/admin/images/posts/165483020052b647ff04f5caab93e45_1649231329.jpg', '2022-06-09 20:03:20', '2022-06-09 20:03:20'),
(93, '/admin/images/posts/165496093420200518-115532_1624614582.jpg', '2022-06-11 08:22:14', '2022-06-11 08:22:14'),
(94, '/admin/images/posts/165496093420200518-115527_1624614579.jpg', '2022-06-11 08:22:14', '2022-06-11 08:22:14'),
(95, '/admin/images/posts/1654990062a5_1654673646.png', '2022-06-11 16:27:42', '2022-06-11 16:27:42'),
(96, '/admin/images/posts/1654990062a3_1654673644.png', '2022-06-11 16:27:42', '2022-06-11 16:27:42'),
(97, '/admin/images/posts/1654990062a2_1654673644.png', '2022-06-11 16:27:42', '2022-06-11 16:27:42'),
(98, '/admin/images/posts/1654990062a1_1654673644.png', '2022-06-11 16:27:42', '2022-06-11 16:27:42'),
(99, '/admin/images/posts/1654990256z3474849637120-593130a0ba61b153107d777b397d8b81_1654606822.jpg', '2022-06-11 16:30:56', '2022-06-11 16:30:56'),
(100, '/admin/images/posts/1654990257z3474849635582-affa7d44a06e7a4f763ec403cf50e5be_1654606821.jpg', '2022-06-11 16:30:57', '2022-06-11 16:30:57'),
(101, '/admin/images/posts/1654990257z3474849635396-38c8a8db11cc65ca19350083a3b36b65_1654606821.jpg', '2022-06-11 16:30:57', '2022-06-11 16:30:57'),
(102, '/admin/images/posts/1654990617z3474849637120-593130a0ba61b153107d777b397d8b81_1654606822.jpg', '2022-06-11 16:36:57', '2022-06-11 16:36:57'),
(103, '/admin/images/posts/1654990617z3474849635582-affa7d44a06e7a4f763ec403cf50e5be_1654606821.jpg', '2022-06-11 16:36:57', '2022-06-11 16:36:57'),
(104, '/admin/images/posts/1654990617z3474849635396-38c8a8db11cc65ca19350083a3b36b65_1654606821.jpg', '2022-06-11 16:36:57', '2022-06-11 16:36:57'),
(105, '/admin/images/posts/1654991079fac516eb-cbee-4ff6-8a7a-d9f95ab13833_1654415975.jpg', '2022-06-11 16:44:39', '2022-06-11 16:44:39'),
(106, '/admin/images/posts/1654991079fccfae19-0127-4080-b8cf-217c115021b4_1654415974.jpg', '2022-06-11 16:44:39', '2022-06-11 16:44:39'),
(107, '/admin/images/posts/16549910791e976662-1648-4a64-b870-1cfa08d59f31_1654415974.jpg', '2022-06-11 16:44:39', '2022-06-11 16:44:39'),
(108, '/admin/images/posts/16549910798e2c1b28-f4f7-43eb-a192-e945c6484167_1654415973.jpg', '2022-06-11 16:44:39', '2022-06-11 16:44:39'),
(109, '/admin/images/posts/1654992395nha-k45-le-do-03_1654156891.jpg', '2022-06-11 17:06:35', '2022-06-11 17:06:35'),
(110, '/admin/images/posts/1654992395nha-k45-le-do-02_1654156890.jpg', '2022-06-11 17:06:35', '2022-06-11 17:06:35'),
(111, '/admin/images/posts/1654992395nha-k45-le-do-06_1654156891.jpg', '2022-06-11 17:06:35', '2022-06-11 17:06:35'),
(112, '/admin/images/posts/1654992779nha-k45-le-do-03_1654156891.jpg', '2022-06-11 17:12:59', '2022-06-11 17:12:59'),
(113, '/admin/images/posts/1654992779nha-k45-le-do-02_1654156890.jpg', '2022-06-11 17:12:59', '2022-06-11 17:12:59'),
(114, '/admin/images/posts/1654992779nha-k45-le-do-06_1654156891.jpg', '2022-06-11 17:12:59', '2022-06-11 17:12:59'),
(115, '/admin/images/posts/1654994195z3474849635582-affa7d44a06e7a4f763ec403cf50e5be_1654606821.jpg', '2022-06-11 17:36:35', '2022-06-11 17:36:35'),
(116, '/admin/images/posts/1654994195z3474849635396-38c8a8db11cc65ca19350083a3b36b65_1654606821.jpg', '2022-06-11 17:36:35', '2022-06-11 17:36:35'),
(117, '/admin/images/posts/1654994459z3453184489533-b576b2312dce500d53cb2e1b314be452_1653886365.jpg', '2022-06-11 17:40:59', '2022-06-11 17:40:59'),
(118, '/admin/images/posts/165499445952b647ff04f5caab93e45_1649231329.jpg', '2022-06-11 17:40:59', '2022-06-11 17:40:59'),
(119, '/admin/images/posts/1655010723nha-k45-le-do-03_1654156891.jpg', '2022-06-11 22:12:03', '2022-06-11 22:12:03');

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
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2021_07_12_095050_create_role_user_table', 1),
(6, '2021_07_12_100441_create_roles_table', 1),
(7, '2021_07_14_055007_create_user_details_table', 1),
(8, '2022_05_20_141110_create_motels_table', 2),
(9, '2022_05_20_141140_create_categories_table', 2),
(10, '2022_05_20_141152_create_addresses_table', 2),
(11, '2022_05_20_141206_create_districts_table', 2),
(12, '2022_05_20_141217_create_genders_table', 2),
(13, '2022_05_20_141228_create_images_table', 2),
(14, '2022_05_20_141238_create_wards_table', 2),
(15, '2022_06_09_133618_create_comments_table', 3),
(16, '2022_06_10_134256_create_motel_comments_table', 3),
(17, '2022_06_11_005356_create_ratings_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `motels`
--

CREATE TABLE `motels` (
  `id` int(10) UNSIGNED NOT NULL,
  `address_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_id` int(11) NOT NULL,
  `information` varchar(2555) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `acreage` double(8,2) NOT NULL,
  `gender_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `is_active` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `iframe` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `motels`
--

INSERT INTO `motels` (`id`, `address_id`, `user_id`, `title`, `image_id`, `information`, `price`, `acreage`, `gender_id`, `category_id`, `is_active`, `status`, `iframe`, `created_at`, `updated_at`) VALUES
(34, 44, 58, 'Nhà trọ Cao cấp Mới xây rất đẹp thoáng mát, Gần Nguyễn Hữu Thọ Và Lê Đại Hành Đà Nẵng', 1, 'Nhà trọ Cao cấp Mới xây rất đẹp thoáng mát, Gần Nguyễn Hữu Thọ Và Lê Đại Hành Đà Nẵng', '3500000', 50.00, 1, 1, 1, 0, '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3834.805422596099!2d108.20303741468354!3d16.023641388909095!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31421987c34eefa1%3A0xcd7ae040b3928003!2zTMOqIMSQ4bqhaSBIw6BuaCwgS2h1w6ogVHJ1bmcsIEPhuqltIEzhu4csIMSQw6AgTuG6tW5nIDU1MDAwMCwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1654792099911!5m2!1svi!2s\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', '2022-06-01 09:46:59', '2022-06-11 22:29:51'),
(35, 46, 58, 'Cho thuê phòng trọ quận Cẩm Lệ. Phòng trọ 20m2, có gác lửng, bếp riêng, có bình nóng lạnh', 1, 'Phòng trọ 20m2, có gác lửng, bếp riêng, có bình nóng lạnh, gạch ốp tới trần nên sạch sẽ và thoáng mát. Cả dãy trọ chỉ có 4 phòng, có sân phơi đồ và chỗ để xe riêng. Gần chợ và trường học, khu dân cư đông đúc. Liên hệ Chú Ánh 0913.430.519/ A An 0905.229.886. Giá 1500k/ tháng', '5000000', 70.00, 2, 1, 0, 0, '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3834.8966205118363!2d108.21869691468343!3d16.018896188912016!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31421a1df77e64a3%3A0x3b1b1d4daacf9a7!2zNDUgVMO0biBUaOG6pXQgxJAuIEvhu7UsIEhvw6AgWHXDom4sIEPhuqltIEzhu4csIMSQw6AgTuG6tW5nLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1654792032853!5m2!1svi!2s\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', '2022-06-01 09:51:42', '2022-06-03 08:28:59'),
(36, 47, 58, 'Phòng trọ 50m2 Trung tâm tp Hải Châu. Giá Mềm chỉ 2,5 Triệu/Tháng', 1, 'Cho thuê phòng trọ tại 06  Tạ Hiện, Phường Hòa Cường Bắc, Quận Hải Châu, Đà Nẵng\r\n\r\nDiện tích rộng rãi 50m2 thoáng mát vệ sinh sạch sẽ\r\n\r\nKhu vực an ninh tốt, có chổ để xe rộng rãi an toàn\r\n\r\nGần chợ Hòa Cường 30m\r\n\r\nGiá thuê 2,5 Triệu/Tháng', '2500000', 50.00, 3, 2, 0, 1, '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3834.436819308646!2d108.21589731468372!3d16.04280658889724!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x314219c1c152c7eb%3A0x395d415fa028b856!2zMDYgxJAuIFThuqEgSGnhu4duLCBIb8OgIEPGsOG7nW5nIELhuq9jLCBI4bqjaSBDaMOidSwgxJDDoCBO4bq1bmcgNTUwMDAwLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1654791913814!5m2!1svi!2s\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', '2022-06-01 09:59:46', '2022-06-03 08:28:59'),
(37, 48, 59, 'Cho thuê phòng đầy đủ tiện nghi tại K48/H02 Lê Độ, Phường Chính Gián, Quận Thanh Khê, Đà Nẵng', 1, 'Cho thuê phòng tại K48/H02 Lê Độ, Phường Chính Gián, Quận Thanh Khê, Đà Nẵng\r\n\r\nPhòng mới đầy đủ tiện nghi, sạch sẽ và yên tĩnh.\r\n\r\nNhà có ban công rộng, có toilét riêng, có máy lạnh.\r\n\r\nDiện tích phòng: 35m2\r\n\r\nGiá cho thuê: 2tr/tháng\r\n\r\nXem phòng liên hệ: 0903395202', '2000000', 35.00, 3, 3, 0, 0, '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3833.949345163463!2d108.19934671468411!3d16.06811818888156!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31421852877a1d31%3A0x5dcee24136b718e6!2zTMOqIMSQ4buZLCBDaMOtbmggR2nDoW4sIFRoYW5oIEtow6osIMSQw6AgTuG6tW5nIDU1MDAwMCwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1654791885586!5m2!1svi!2s\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', '2022-06-01 10:19:01', '2022-06-03 08:28:57'),
(38, 49, 60, 'Cho thuê phòng trọ phường Mỹ An, quận Ngũ Hành Sơn Đà Nẵng', 1, '- Phòng sạch sẽ thoáng mát, gần trường đại học kinh tế Đà Nẵng, trường văn hóa nghệ thuật quân đội, gần đường Phan Tứ, các RESORT ven biển đường Võ Nguyên Giáp như Premier Village, purama, casino, cầu tiên sơn ,chợ Bắc Mỹ An với nhiều dịch vụ tiện ích cho đời sống sinh hoạt , học tập và làm việc, trật tự an ninh rất tốt.\r\n\r\n- Ưu tiên dành cho người độc thân đi học hoặc làm việc văn phòng . Giờ giấc tự do ,chỗ để xe miễn phí, điện giá bình dân ,nước 50.000đ/người. Phòng chất lượng , giá mềm từ 1.500.000đ đến 1.900.000đ tùy phòng.\r\n\r\n- Liên hệ số điện thoại 0934822269', '1500000', 18.00, 3, 1, 0, 0, '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3834.374269682423!2d108.24229981468383!3d16.04605658889525!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x314217640973a58f%3A0xd5f5fcfb83084e22!2zUGhhbiBU4bupLCBN4bu5IEFuLCBOZ8WpIEjDoG5oIFPGoW4sIMSQw6AgTuG6tW5nIDU1MDAwMCwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1654791756702!5m2!1svi!2s\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', '2022-06-01 17:11:57', '2022-06-03 08:28:56'),
(46, 57, 58, 'te', 1, 'te', '121212', 141414.00, 1, 1, 0, 0, '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1916.9442191473229!2d108.19204466726285!3d16.071277988327804!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x314218543b3f4da3%3A0x5be995ae44b6cb7d!2zNTcyIFRy4bqnbiBDYW8gVsOibiwgWHXDom4gSMOgLCBRLiBUaGFuaCBLaMOqLCDEkMOgIE7hurVuZyA1NTAwMDAsIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1654791669614!5m2!1svi!2s\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', '2022-06-09 03:25:22', '2022-06-09 03:25:58'),
(49, 61, 58, 'aaasasa', 1, 'asasas', '111', 222.00, 1, 1, 0, 0, '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3838.3256151673627!2d108.14016961468097!3d15.839474589023206!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x314207d85583ce47%3A0x6571654a5d7b0a97!2zQ8ahIHPhu58gZ-G6oW8gY8O0IMSQw6E!5e0!3m2!1svi!2s!4v1654769619807!5m2!1svi!2s\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', '2022-06-09 07:48:23', '2022-06-09 07:48:23'),
(50, 62, 58, 'phòng trọ giá rẻ', 1, 'phòng trọ giá rẻ', '100000', 30.00, 3, 1, 0, 0, '<iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3838.325614958732!2d108.1401696!3d15.8394746!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x314207d85583ce47%3A0x6571654a5d7b0a97!2zQ8ahIHPhu58gZ-G6oW8gY8O0IMSQw6E!5e0!3m2!1svi!2s!4v1654772777410!5m2!1svi!2s\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', '2022-06-09 20:03:20', '2022-06-09 20:03:41'),
(51, 63, 58, 'Cho thuê phòng trọ (riêng chủ) gần chợ, gần trường học tại Thanh Khê', 1, 'Cho thuê phòng trọ 2 tầng, tổng diện tích 24m2 ; có các điều kiện tốt như sau:\r\n\r\n- Sàn, tường gạch men sạch sẽ.\r\n\r\n- Nhà vệ sinh, bếp riêng, sân phơi riêng.\r\n\r\n- Chỗ để xe rộng rãi, đảm bảo an tòan\r\n\r\n- Tiền điện và nước tính theo giá hợp lý nhất.\r\n\r\n- Có internet wifi.\r\n\r\n- Phòng thích hợp cho khoảng 3 SV ở trọ, hoặc 1 gia đình nhỏ.\r\n\r\nTiền thuê phòng: 1.500.000 đồng.\r\n\r\nĐịa chỉ phòng trọ: k123/H97/58 Cù Chính Lan, Q. Thanh Khê, TP Đà Nẵng (có thể đi vào bằng k282 Hà Huy Tập, gần chợ Thanh Khê)\r\n\r\nĐT liên hê: cô Chín: 0772.452.365 (không bảy bảy hai bốn năm hai ba sáu năm) hoặc chú Hoàng 0934.784.691', '1500000', 25.00, 3, 1, 0, 0, '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2672.183527790001!2d108.18384195602736!3d16.065203891444842!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31421901a4c7d32f%3A0xd8d0965b907f123!2zazEyMywgOTcgQ8O5IENow61uaCBMYW4sIFRoYW5oIEtow6ogxJDDtG5nLCBUaGFuaCBLaMOqLCDEkMOgIE7hurVuZyA1NTAwMDAsIFZpZXRuYW0!5e0!3m2!1sen!2s!4v1654960865376!5m2!1sen!2s\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', '2022-06-11 08:22:15', '2022-06-11 22:55:13'),
(52, 64, 60, 'Cho thuê phòng trọ full nội thất đẹp. Giá: từ 3,2Tr đến 3,3Tr tuỳ phòng', 1, 'Cho thuê các phòng dạng căn hộ mặt tiền\r\n\r\nVị trí thuận tiện gần các trường đại học, chợ Hoà Khánh, trung tâm y tế quận Liên Chiểu.\r\n\r\nDiện tích: 30-40 m2 tuỳ phòng.\r\n\r\nMới xây toàn bộ, nội thất đẹp, thoáng mát.\r\n\r\nTiện ích: giường tủ gỗ, kệ bếp, hút mùi, máy lạnh, máy nước nóng, sân phơi trong phòng.\r\n\r\nThích hợp gia đình hoặc 2 bạn ở chung.\r\n\r\nGiá: từ 3,2-3,3tr tuỳ phòng.TT 3 tháng/ lần. Cọc 1 tháng.', '3200000', 40.00, 3, 2, 0, 0, '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3834.0281706242477!2d108.15458181468405!3d16.064027888884155!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3142192677dc597b%3A0xdf78c3d1c37e060!2zNDkzIFTDtG4gxJDhu6ljIFRo4bqvbmcsIEhvw6AgS2jDoW5oIE5hbSwgTGnDqm4gQ2hp4buDdSwgxJDDoCBO4bq1bmcgNTUwMDAwLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1654989957464!5m2!1svi!2s\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', '2022-06-11 16:27:43', '2022-06-11 16:27:43'),
(53, 65, 60, 'Cho thuê phòng trọ giá rẻ, gần trường học. Rộng 25m2 giá thuê 1,7 Triệu/Tháng', 1, 'Cho thuê phòng trọ diện tích 25m2, dãy có 3 phòng tiện cho gia đình, yên tĩnh. gần trường tiểu học Lê Quang Sung. gần chợ\r\n\r\nDiện tích: 25m2\r\n\r\nGiá thuê 1,7 Triệu/Tháng', '1700000', 25.00, 3, 2, 0, 0, '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3833.9370964888813!2d108.18915961442775!3d16.068753688881184!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x314218556e198075%3A0x3b8728195f9ddc3!2zMjQ5LCA2MiBIw6AgSHV5IFThuq1wLCBIw7JhIEtow6osIFRoYW5oIEtow6osIMSQw6AgTuG6tW5nIDU1MDAwMCwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1654990216690!5m2!1svi!2s\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', '2022-06-11 16:30:57', '2022-06-11 16:30:57'),
(54, 66, 60, 'Cho thuê phòng trọ giá rẻ, gần trường học. Rộng 25m2 giá thuê 1,7 Triệu/Tháng', 1, 'Cho thuê phòng trọ diện tích 25m2, dãy có 3 phòng tiện cho gia đình, yên tĩnh. gần trường tiểu học Lê Quang Sung. gần chợ\r\n\r\nDiện tích: 25m2\r\n\r\nGiá thuê 1,7 Triệu/Tháng', '30000000', 40.00, 3, 0, 0, 0, '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1225.2294892834761!2d108.24205753739396!3d16.060682611326126!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3142177f3a475d75%3A0xb4a2e17c735ac5c4!2zOTUgVMO0IEhp4bq_biBUaMOgbmgsIFBoxrDhu5tjIE3hu7ksIFPGoW4gVHLDoCwgxJDDoCBO4bq1bmcgNTUwMDAwLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1654990596064!5m2!1svi!2s\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', '2022-06-11 16:36:57', '2022-06-11 16:37:59'),
(55, 67, 60, 'Phòng trọ tiện nghi, sạch sẽ và giá rẻ đường Lê Độ chỉ 2,5 Triệu/Tháng', 1, 'Phòng trọ sạch sẽ, tiện nghi có máy lạnh.\r\n\r\nĐịa chỉ: K48/H02/12 Lê Độ, Phường Chính Gián, Quận Thanh Khê, Đà Nẵng\r\n\r\nPhòng có toilét riêng, có máy nước nóng và có ban công rộng rãi.\r\n\r\nCó thể ở 2 người và chỉ cho nữ thuê.\r\n\r\nDiện tích: 35m2 rất rộng rãi \r\n\r\nGiá thuê 2,5 Triệu/Tháng', '1900000', 35.00, 2, 1, 0, 0, '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3833.9227752531624!2d108.1993439144277!3d16.069496688880736!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31421852877a1d31%3A0x5dcee24136b718e6!2zTMOqIMSQ4buZLCBUaGFuaCBLaMOqLCDEkMOgIE7hurVuZyA1NTAwMDAsIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1654991042844!5m2!1svi!2s\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', '2022-06-11 16:44:39', '2022-06-11 16:44:39'),
(56, 68, 60, 'Cho thuê phòng trọ tại K45 Lê Độ, Phường Tam Thuận, Quận Thanh Khê, Đà Nẵng', 1, '- Nhà có 5 phòng cho thuê, lắp máy lạnh, phòng tắm và vệ sinh từng phòng, diện tích 1 phòng 12 đến 14m2, ở 2 người\r\n\r\n- Khu vự an ninh, trật tự\r\n\r\n- Giá thuê từ 2 Triệu/Tháng', '1200000', 21.00, 3, 1, 0, 0, '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3833.9227752531624!2d108.1993439144277!3d16.069496688880736!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31421852877a1d31%3A0x5dcee24136b718e6!2zTMOqIMSQ4buZLCBUaGFuaCBLaMOqLCDEkMOgIE7hurVuZyA1NTAwMDAsIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1654992382345!5m2!1svi!2s\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', '2022-06-11 17:06:35', '2022-06-11 17:06:35'),
(57, 69, 60, 'Cho thuê phòng trọ tại K45 Lê Độ, Phường Tam Thuận, Quận Thanh Khê, Đà Nẵng', 1, '- Nhà có 5 phòng cho thuê, lắp máy lạnh, phòng tắm và vệ sinh từng phòng, diện tích 1 phòng 12 đến 14m2, ở 2 người\r\n\r\n- Khu vự an ninh, trật tự\r\n\r\n- Giá thuê từ 2 Triệu/Tháng', '1300000', 55.00, 3, 2, 0, 0, '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3833.9227752531624!2d108.1993439144277!3d16.069496688880736!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31421852877a1d31%3A0x5dcee24136b718e6!2zTMOqIMSQ4buZLCBUaGFuaCBLaMOqLCDEkMOgIE7hurVuZyA1NTAwMDAsIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1654992382345!5m2!1svi!2s\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', '2022-06-11 17:12:59', '2022-06-11 17:12:59'),
(58, 70, 60, 'Cho thuê phòng trọ quận Cẩm Lệ. Phòng trọ 20m2, có gác lửng, bếp riêng, có bình nóng lạnh', 1, 'Phòng trọ 20m2, có gác lửng, bếp riêng, có bình nóng lạnh, gạch ốp tới trần nên sạch sẽ và thoáng mát. Cả dãy trọ chỉ có 4 phòng, có sân phơi đồ và chỗ để xe riêng. Gần chợ và trường học, khu dân cư đông đúc. Liên hệ Chú Ánh 0913.430.519/ A An 0905.229.886.', '2500000', 35.00, 1, 1, 0, 0, '<iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7669.79324828402!2d108.220886!3d16.018896!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31421a1df77e64a3%3A0x3b1b1d4daacf9a7!2zNDUgVMO0biBUaOG6pXQgxJAuIEvhu7UsIEhvw6AgWHXDom4sIEPhuqltIEzhu4csIMSQw6AgTuG6tW5nLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2sus!4v1654994158084!5m2!1svi!2sus\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', '2022-06-11 17:36:35', '2022-06-11 21:56:44'),
(59, 71, 60, 'Nhà trọ Cao cấp Mới xây rất đẹp thoáng mát, Gần Nguyễn Hữu Thọ Và Lê Đại Hành Đà Nẵng', 1, 'Nhà trọ Cao cấp Mới xây rất đẹp thoáng mát, Gần Nguyễn Hữu Thọ Và Lê Đại Hành Đà Nẵng', '6000000', 35.00, 3, 1, 0, 0, '<iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7669.610860143247!2d108.205226!3d16.023641!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31421987c34eefa1%3A0xcd7ae040b3928003!2zTMOqIMSQ4bqhaSBIw6BuaCwgS2h1w6ogVHJ1bmcsIEPhuqltIEzhu4csIMSQw6AgTuG6tW5nIDU1MDAwMCwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2sus!4v1654994443356!5m2!1svi!2sus\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', '2022-06-11 17:40:59', '2022-06-11 21:56:13');

-- --------------------------------------------------------

--
-- Table structure for table `motel_comments`
--

CREATE TABLE `motel_comments` (
  `id` int(10) UNSIGNED NOT NULL,
  `motel_id` int(11) NOT NULL,
  `comment_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `motel_comments`
--

INSERT INTO `motel_comments` (`id`, `motel_id`, `comment_id`, `created_at`, `updated_at`) VALUES
(3, 37, 3, '2022-06-10 08:15:42', '2022-06-10 08:15:42'),
(4, 37, 4, '2022-06-10 08:16:51', '2022-06-10 08:16:51'),
(5, 37, 5, '2022-06-10 08:18:13', '2022-06-10 08:18:13'),
(6, 37, 6, '2022-06-10 08:21:43', '2022-06-10 08:21:43'),
(7, 37, 7, '2022-06-10 08:23:04', '2022-06-10 08:23:04'),
(8, 37, 8, '2022-06-10 08:27:56', '2022-06-10 08:27:56'),
(9, 37, 9, '2022-06-10 08:30:05', '2022-06-10 08:30:05'),
(10, 37, 10, '2022-06-10 08:32:15', '2022-06-10 08:32:15'),
(11, 37, 11, '2022-06-10 08:32:20', '2022-06-10 08:32:20'),
(12, 10000, 12, '2022-06-10 08:36:36', '2022-06-10 08:36:36'),
(13, 37, 13, '2022-06-10 08:54:04', '2022-06-10 08:54:04'),
(14, 50, 14, '2022-06-10 10:02:44', '2022-06-10 10:02:44'),
(15, 50, 15, '2022-06-10 10:02:51', '2022-06-10 10:02:51'),
(16, 50, 16, '2022-06-10 10:02:58', '2022-06-10 10:02:58'),
(17, 50, 17, '2022-06-10 10:02:59', '2022-06-10 10:02:59'),
(18, 50, 18, '2022-06-10 10:02:59', '2022-06-10 10:02:59'),
(19, 50, 19, '2022-06-10 10:02:59', '2022-06-10 10:02:59'),
(20, 50, 20, '2022-06-11 03:07:23', '2022-06-11 03:07:23'),
(21, 50, 21, '2022-06-11 03:07:57', '2022-06-11 03:07:57'),
(22, 50, 22, '2022-06-11 03:14:02', '2022-06-11 03:14:02'),
(23, 46, 23, '2022-06-11 03:15:29', '2022-06-11 03:15:29'),
(24, 38, 24, '2022-06-11 09:41:35', '2022-06-11 09:41:35'),
(25, 59, 25, '2022-06-11 18:02:51', '2022-06-11 18:02:51'),
(26, 59, 26, '2022-06-11 18:02:53', '2022-06-11 18:02:53'),
(27, 59, 27, '2022-06-11 18:05:07', '2022-06-11 18:05:07'),
(28, 59, 28, '2022-06-11 18:06:29', '2022-06-11 18:06:29');

-- --------------------------------------------------------

--
-- Table structure for table `motel_image`
--

CREATE TABLE `motel_image` (
  `id` int(11) NOT NULL,
  `motel_id` int(11) NOT NULL,
  `image_id` int(11) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `motel_image`
--

INSERT INTO `motel_image` (`id`, `motel_id`, `image_id`, `updated_at`, `created_at`) VALUES
(15, 18, 20, '2022-05-28 03:45:22', '2022-05-28 03:45:22'),
(16, 18, 21, '2022-05-28 03:45:22', '2022-05-28 03:45:22'),
(17, 19, 22, '2022-05-28 22:28:22', '2022-05-28 22:28:22'),
(18, 20, 23, '2022-05-28 22:45:55', '2022-05-28 22:45:55'),
(19, 21, 24, '2022-05-28 22:48:37', '2022-05-28 22:48:37'),
(20, 22, 25, '2022-05-28 22:49:37', '2022-05-28 22:49:37'),
(21, 23, 26, '2022-05-31 07:57:32', '2022-05-31 07:57:32'),
(22, 24, 28, '2022-05-31 08:02:55', '2022-05-31 08:02:55'),
(23, 25, 29, '2022-05-31 08:03:11', '2022-05-31 08:03:11'),
(24, 26, 30, '2022-05-31 08:03:38', '2022-05-31 08:03:38'),
(25, 27, 31, '2022-05-31 08:06:36', '2022-05-31 08:06:36'),
(26, 28, 32, '2022-05-31 08:10:31', '2022-05-31 08:10:31'),
(27, 29, 33, '2022-05-31 08:15:39', '2022-05-31 08:15:39'),
(28, 30, 36, '2022-05-31 08:51:27', '2022-05-31 08:51:27'),
(29, 30, 37, '2022-05-31 08:51:27', '2022-05-31 08:51:27'),
(30, 30, 38, '2022-05-31 08:51:27', '2022-05-31 08:51:27'),
(31, 30, 39, '2022-05-31 08:51:27', '2022-05-31 08:51:27'),
(32, 31, 40, '2022-05-31 09:10:06', '2022-05-31 09:10:06'),
(33, 31, 41, '2022-05-31 09:10:06', '2022-05-31 09:10:06'),
(34, 32, 42, '2022-05-31 09:12:08', '2022-05-31 09:12:08'),
(35, 33, 47, '2022-05-31 09:40:35', '2022-05-31 09:40:35'),
(36, 33, 48, '2022-05-31 09:40:35', '2022-05-31 09:40:35'),
(37, 34, 55, '2022-06-01 09:47:00', '2022-06-01 09:47:00'),
(38, 34, 56, '2022-06-01 09:47:00', '2022-06-01 09:47:00'),
(39, 35, 59, '2022-06-01 09:51:42', '2022-06-01 09:51:42'),
(40, 35, 60, '2022-06-01 09:51:42', '2022-06-01 09:51:42'),
(41, 36, 61, '2022-06-01 09:59:46', '2022-06-01 09:59:46'),
(42, 36, 62, '2022-06-01 09:59:46', '2022-06-01 09:59:46'),
(43, 36, 63, '2022-06-01 09:59:46', '2022-06-01 09:59:46'),
(44, 37, 64, '2022-06-01 10:19:01', '2022-06-01 10:19:01'),
(45, 37, 65, '2022-06-01 10:19:01', '2022-06-01 10:19:01'),
(46, 37, 66, '2022-06-01 10:19:01', '2022-06-01 10:19:01'),
(47, 38, 67, '2022-06-01 17:11:57', '2022-06-01 17:11:57'),
(48, 38, 68, '2022-06-01 17:11:57', '2022-06-01 17:11:57'),
(49, 39, 69, '2022-06-03 02:21:57', '2022-06-03 02:21:57'),
(50, 39, 70, '2022-06-03 02:21:57', '2022-06-03 02:21:57'),
(51, 39, 71, '2022-06-03 02:21:57', '2022-06-03 02:21:57'),
(52, 40, 72, '2022-06-06 09:26:47', '2022-06-06 09:26:47'),
(53, 41, 74, '2022-06-07 17:50:34', '2022-06-07 17:50:34'),
(54, 42, 75, '2022-06-07 18:14:14', '2022-06-07 18:14:14'),
(55, 43, 76, '2022-06-07 18:21:29', '2022-06-07 18:21:29'),
(56, 44, 77, '2022-06-07 18:32:42', '2022-06-07 18:32:42'),
(57, 45, 78, '2022-06-09 03:05:50', '2022-06-09 03:05:50'),
(58, 45, 79, '2022-06-09 03:05:50', '2022-06-09 03:05:50'),
(59, 46, 80, '2022-06-09 03:25:22', '2022-06-09 03:25:22'),
(60, 47, 81, '2022-06-09 04:06:47', '2022-06-09 04:06:47'),
(61, 48, 82, '2022-06-09 04:12:56', '2022-06-09 04:12:56'),
(67, 49, 89, '2022-06-09 09:07:23', '2022-06-09 09:07:23'),
(68, 49, 90, '2022-06-09 09:07:24', '2022-06-09 09:07:24'),
(69, 50, 91, '2022-06-09 20:03:20', '2022-06-09 20:03:20'),
(70, 50, 92, '2022-06-09 20:03:20', '2022-06-09 20:03:20'),
(71, 51, 93, '2022-06-11 08:22:15', '2022-06-11 08:22:15'),
(72, 51, 94, '2022-06-11 08:22:15', '2022-06-11 08:22:15'),
(73, 52, 95, '2022-06-11 16:27:43', '2022-06-11 16:27:43'),
(74, 52, 96, '2022-06-11 16:27:43', '2022-06-11 16:27:43'),
(75, 52, 97, '2022-06-11 16:27:43', '2022-06-11 16:27:43'),
(76, 52, 98, '2022-06-11 16:27:43', '2022-06-11 16:27:43'),
(77, 53, 99, '2022-06-11 16:30:57', '2022-06-11 16:30:57'),
(78, 53, 100, '2022-06-11 16:30:57', '2022-06-11 16:30:57'),
(79, 53, 101, '2022-06-11 16:30:57', '2022-06-11 16:30:57'),
(80, 54, 102, '2022-06-11 16:36:58', '2022-06-11 16:36:58'),
(81, 54, 103, '2022-06-11 16:36:58', '2022-06-11 16:36:58'),
(82, 54, 104, '2022-06-11 16:36:58', '2022-06-11 16:36:58'),
(83, 55, 105, '2022-06-11 16:44:39', '2022-06-11 16:44:39'),
(84, 55, 106, '2022-06-11 16:44:39', '2022-06-11 16:44:39'),
(85, 55, 107, '2022-06-11 16:44:39', '2022-06-11 16:44:39'),
(86, 55, 108, '2022-06-11 16:44:39', '2022-06-11 16:44:39'),
(87, 56, 109, '2022-06-11 17:06:35', '2022-06-11 17:06:35'),
(88, 56, 110, '2022-06-11 17:06:35', '2022-06-11 17:06:35'),
(89, 56, 111, '2022-06-11 17:06:35', '2022-06-11 17:06:35'),
(90, 57, 112, '2022-06-11 17:13:00', '2022-06-11 17:13:00'),
(91, 57, 113, '2022-06-11 17:13:00', '2022-06-11 17:13:00'),
(92, 57, 114, '2022-06-11 17:13:00', '2022-06-11 17:13:00'),
(93, 58, 115, '2022-06-11 17:36:35', '2022-06-11 17:36:35'),
(94, 58, 116, '2022-06-11 17:36:35', '2022-06-11 17:36:35'),
(95, 59, 117, '2022-06-11 17:41:00', '2022-06-11 17:41:00'),
(96, 59, 118, '2022-06-11 17:41:00', '2022-06-11 17:41:00'),
(97, 60, 119, '2022-06-11 22:12:03', '2022-06-11 22:12:03');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `personal_access_tokens`
--

INSERT INTO `personal_access_tokens` (`id`, `tokenable_type`, `tokenable_id`, `name`, `token`, `abilities`, `last_used_at`, `created_at`, `updated_at`) VALUES
(1, 'App\\Models\\User', 51, 'my-app-token', 'fa4bdcac6f005dfb32bae35185e951e37ba2827e1adcf1270f31147159b214d4', '[\"*\"]', NULL, '2022-05-20 07:00:46', '2022-05-20 07:00:46'),
(2, 'App\\Models\\User', 3, 'my-app-token', '4deb394a91a292086fb17e5acbfbc8733d1dfe4a2e9b23ef4790e4d3eb9f722f', '[\"*\"]', NULL, '2022-05-20 07:50:44', '2022-05-20 07:50:44'),
(3, 'App\\Models\\User', 51, 'my-app-token', 'd420d16f19f360e419a291759f4943717366ff6940378e4a0b6c71d38805886f', '[\"*\"]', NULL, '2022-05-20 20:32:14', '2022-05-20 20:32:14'),
(4, 'App\\Models\\User', 51, 'my-app-token', '566093a88807b470bd8647f404548f2fa401cddbabf225fe4118c0382d723a0d', '[\"*\"]', NULL, '2022-05-20 20:49:37', '2022-05-20 20:49:37'),
(5, 'App\\Models\\User', 52, 'my-app-token', '29d94f76bf3e4b7a9f6c2a49df1558721b93af9987bd62d4d44bbc0fd85dba41', '[\"*\"]', NULL, '2022-05-20 20:49:59', '2022-05-20 20:49:59'),
(6, 'App\\Models\\User', 51, 'my-app-token', '2c628b3eb6edfb4281386a0110454c43fdfaa71d84a5627c7698dcb3e4c60c0c', '[\"*\"]', NULL, '2022-05-21 02:50:59', '2022-05-21 02:50:59'),
(7, 'App\\Models\\User', 51, 'my-app-token', 'd729085077efc24bafae77f432c71b90ea97e14cee89206152378961b34b8b6c', '[\"*\"]', NULL, '2022-05-21 07:01:10', '2022-05-21 07:01:10'),
(8, 'App\\Models\\User', 3, 'my-app-token', '1d53823c3bb85c99f1bfdedd9af1a73873caff34a86bd4aff3c5f9c1c04cc1f2', '[\"*\"]', NULL, '2022-05-21 07:07:48', '2022-05-21 07:07:48'),
(9, 'App\\Models\\User', 57, 'my-app-token', '700f9231ce28fbce6a4a228c0ae65384bdafc0ab4abdfa53bebdec53878d120b', '[\"*\"]', NULL, '2022-05-21 08:52:16', '2022-05-21 08:52:16'),
(10, 'App\\Models\\User', 51, 'my-app-token', '00c3b6c7a30a4cdb6647363a47829d5eff4031dbd92938c9d1408225f484af1a', '[\"*\"]', NULL, '2022-05-21 08:52:37', '2022-05-21 08:52:37'),
(11, 'App\\Models\\User', 51, 'my-app-token', 'e8911baacfcb6abafed0e180c0cf5eee29dbf65420549c365c619888a0df274a', '[\"*\"]', NULL, '2022-05-21 08:54:11', '2022-05-21 08:54:11'),
(12, 'App\\Models\\User', 51, 'my-app-token', '68c58399697d0b7687e5383f196ed859394819cc082dc8866d329b6c1cf6a94d', '[\"*\"]', NULL, '2022-05-21 08:55:35', '2022-05-21 08:55:35'),
(13, 'App\\Models\\User', 57, 'my-app-token', 'bb027b707234e59a15692d667132038c69ffb12e47abf3d631a2d4114686d6fd', '[\"*\"]', NULL, '2022-05-21 08:55:50', '2022-05-21 08:55:50'),
(14, 'App\\Models\\User', 57, 'my-app-token', 'b5133ee861123e74ef37d98170fefd9fdcfb2e481793653a5f97a073faecbac0', '[\"*\"]', NULL, '2022-05-21 08:56:34', '2022-05-21 08:56:34'),
(15, 'App\\Models\\User', 57, 'my-app-token', '98a36ec87c163bfa0824570b88e45b4f1a64a82ee9e2319937e1162c4ac7d968', '[\"*\"]', NULL, '2022-05-21 08:58:01', '2022-05-21 08:58:01'),
(16, 'App\\Models\\User', 51, 'my-app-token', '3ba8daf3991726e60eab0577bc4b787847f2856736dabbf3e4443a8e5c32670b', '[\"*\"]', NULL, '2022-05-25 06:18:46', '2022-05-25 06:18:46'),
(17, 'App\\Models\\User', 51, 'my-app-token', '73a3186325e160b96fc7300c53987c1317022cc7870250181f24fdad7cced359', '[\"*\"]', NULL, '2022-05-25 06:23:52', '2022-05-25 06:23:52'),
(18, 'App\\Models\\User', 58, 'my-app-token', '085f76f63fc00773263130c000dd5b4560ec78445171a04191aca32cec650071', '[\"*\"]', NULL, '2022-05-25 06:32:30', '2022-05-25 06:32:30'),
(19, 'App\\Models\\User', 51, 'my-app-token', 'daa8240b853d399ca78977a9edfa3485b7a1a06f27eca01ebbc587a89e79c9b0', '[\"*\"]', NULL, '2022-05-25 06:37:12', '2022-05-25 06:37:12'),
(20, 'App\\Models\\User', 58, 'my-app-token', 'a6e8e5fc4fe0e7a4ce30537706fa45631e2a83611b18f9b5e3436148e69dee80', '[\"*\"]', NULL, '2022-05-25 07:05:22', '2022-05-25 07:05:22'),
(21, 'App\\Models\\User', 58, 'my-app-token', 'd370444578f308b776d2eb7b25ed22b244bfea0f76c1cb2abb533eb240d87d2b', '[\"*\"]', NULL, '2022-05-26 13:08:25', '2022-05-26 13:08:25'),
(22, 'App\\Models\\User', 58, 'my-app-token', '64ba74e69c2520152e046bd5ec2c89d52c8f0bf0951a54ec6d40d3620311d6e3', '[\"*\"]', NULL, '2022-05-26 18:23:24', '2022-05-26 18:23:24'),
(23, 'App\\Models\\User', 58, 'my-app-token', '3ab1bad6f0ba72b308003ab0698d969bc37de09a18cf8a9f8f32ee0d85063b5d', '[\"*\"]', NULL, '2022-05-27 05:18:07', '2022-05-27 05:18:07'),
(24, 'App\\Models\\User', 58, 'my-app-token', 'bce0dfae82c3f40672a73b86e8aa0b6fcce8e51f5f92334bfa5f0f90705c1150', '[\"*\"]', NULL, '2022-05-28 00:29:42', '2022-05-28 00:29:42'),
(25, 'App\\Models\\User', 51, 'my-app-token', '975e4562384fa93f47ba55d1ef4503db7e17794b0beebe4c55c746095db57999', '[\"*\"]', NULL, '2022-05-28 00:31:04', '2022-05-28 00:31:04'),
(26, 'App\\Models\\User', 58, 'my-app-token', 'a4b613cf88c150b42dafc76fa3d8272ac42f4cf3d25b3f16e0e846544b099b1d', '[\"*\"]', NULL, '2022-05-28 00:32:22', '2022-05-28 00:32:22'),
(27, 'App\\Models\\User', 58, 'my-app-token', '9947ca02eb1a308cd2229d950835ba12e55a29241d33d90856a0a2a092d9a0ad', '[\"*\"]', NULL, '2022-05-28 19:55:36', '2022-05-28 19:55:36'),
(28, 'App\\Models\\User', 51, 'my-app-token', '84b875b8462a453da6761c085afc25d6b2b634ce6c07d5ecd87c1397bde17b86', '[\"*\"]', NULL, '2022-05-28 19:55:52', '2022-05-28 19:55:52'),
(29, 'App\\Models\\User', 58, 'my-app-token', '3a7607fa438f73225695217cedaa9f66774b26909997f9ffabdf9dd46e5c423d', '[\"*\"]', NULL, '2022-05-28 21:26:08', '2022-05-28 21:26:08'),
(30, 'App\\Models\\User', 51, 'my-app-token', '458ddc5c58f9e03cd553c8417f9e5cb284c59046c2f8b5a4a6cb441c3418ee6e', '[\"*\"]', NULL, '2022-05-28 23:16:48', '2022-05-28 23:16:48'),
(31, 'App\\Models\\User', 58, 'my-app-token', 'd75e22a1fb2a029d84835c7867b8ac7f6320af0f1642f39ca3cfca50f9aeacdc', '[\"*\"]', NULL, '2022-05-28 23:19:58', '2022-05-28 23:19:58'),
(32, 'App\\Models\\User', 58, 'my-app-token', 'bc9f5d01dfbff730141675d6857928ab7a70aec362b5ec37633673f1d18a44c5', '[\"*\"]', NULL, '2022-05-29 17:06:47', '2022-05-29 17:06:47'),
(33, 'App\\Models\\User', 58, 'my-app-token', '46d83321a8b0035b2ed4808fef65f7aaad7e50d7012273cc3a2eee87d2d010ee', '[\"*\"]', NULL, '2022-05-30 16:31:58', '2022-05-30 16:31:58'),
(34, 'App\\Models\\User', 58, 'my-app-token', '76a40630b76d26d4961483326481d838ba64ca7f3474475c33dc1fc5e0873801', '[\"*\"]', NULL, '2022-05-30 16:42:38', '2022-05-30 16:42:38'),
(35, 'App\\Models\\User', 58, 'my-app-token', '4f5df3a7c20619d9511169cbd94c1859541c589d4f218f725f63aa169924ef2d', '[\"*\"]', NULL, '2022-05-30 16:58:55', '2022-05-30 16:58:55'),
(36, 'App\\Models\\User', 58, 'my-app-token', '735125ca88aee3745c48cbefcd01f26ff1d9302bb081097a194e8a721f01a66e', '[\"*\"]', NULL, '2022-05-30 17:24:35', '2022-05-30 17:24:35'),
(37, 'App\\Models\\User', 58, 'my-app-token', '3390543066d9da2535c81b203f9499e6e55cc6d8f7e3f470e503b5dced14f8cf', '[\"*\"]', NULL, '2022-05-31 06:49:19', '2022-05-31 06:49:19'),
(38, 'App\\Models\\User', 58, 'my-app-token', '24ea3af371fa2fc3da98f491a2cc061c693f86ee433fc3e2ec7cbe179a73c374', '[\"*\"]', NULL, '2022-05-31 07:56:21', '2022-05-31 07:56:21'),
(39, 'App\\Models\\User', 51, 'my-app-token', '77e50c8ba8d2b576ce6f55570321a873e42a7b565bfd824d5452e946b4332924', '[\"*\"]', NULL, '2022-05-31 07:56:34', '2022-05-31 07:56:34'),
(40, 'App\\Models\\User', 58, 'my-app-token', 'b7dfc0c5d925e44f976e1458ca832d505fdfeb2cdc9cac78a4455282a34a72ae', '[\"*\"]', NULL, '2022-05-31 07:56:54', '2022-05-31 07:56:54'),
(41, 'App\\Models\\User', 51, 'my-app-token', '2ed23d4bb96937072ff852e6261852b88de7378eda1b2aed3a2a33ef8cc717cf', '[\"*\"]', NULL, '2022-06-01 09:14:33', '2022-06-01 09:14:33'),
(42, 'App\\Models\\User', 58, 'my-app-token', 'f2afcf0dae2e76f4bfb42534e616bff02d2a14e8057fa59d8ffa31d9461f4a4a', '[\"*\"]', NULL, '2022-06-01 09:14:45', '2022-06-01 09:14:45'),
(43, 'App\\Models\\User', 58, 'my-app-token', '3cf535d71eb18b793d7dc5fd313d381aa3cfc7304891410fab0134fea0604d97', '[\"*\"]', NULL, '2022-06-01 17:13:39', '2022-06-01 17:13:39'),
(44, 'App\\Models\\User', 60, 'my-app-token', 'dc57272d924713219ed3ff56457ab2fa046434b47e430a4b2eff2d96ec30d572', '[\"*\"]', NULL, '2022-06-01 17:34:55', '2022-06-01 17:34:55'),
(45, 'App\\Models\\User', 60, 'my-app-token', '5f50f744d15582ee49aaee91cad09aeaa234ee644144f48bfdb29bf681465230', '[\"*\"]', NULL, '2022-06-01 17:35:30', '2022-06-01 17:35:30'),
(46, 'App\\Models\\User', 58, 'my-app-token', '5df5db44ed59cc8b323c9ead10af4ff3ad222a95fd39aa0f03393b0c8310080d', '[\"*\"]', NULL, '2022-06-02 18:57:56', '2022-06-02 18:57:56'),
(47, 'App\\Models\\User', 58, 'my-app-token', 'e5bc1bc62e525fe51d655cf9cd466aa1f5dce76b1bf6b805f2cd8bd0a9c09c12', '[\"*\"]', NULL, '2022-06-02 21:38:21', '2022-06-02 21:38:21'),
(48, 'App\\Models\\User', 59, 'my-app-token', '0bfff8a5cd2fc1b9fdcace9dcff01df677e0d60db5b1a09680813d53c50fdc19', '[\"*\"]', NULL, '2022-06-02 21:54:15', '2022-06-02 21:54:15'),
(49, 'App\\Models\\User', 58, 'my-app-token', 'd483caf3eb42456cd6317e3dfa4d615fb40002006fd3aff95cd3618d964ebec1', '[\"*\"]', NULL, '2022-06-03 01:13:34', '2022-06-03 01:13:34'),
(50, 'App\\Models\\User', 51, 'my-app-token', 'd10d62a635ac348479b8b2974d18583535ce46cd943b9542ba850ca1993e374f', '[\"*\"]', NULL, '2022-06-03 01:39:06', '2022-06-03 01:39:06'),
(51, 'App\\Models\\User', 58, 'my-app-token', '22be1701da863b89729184610e52caba14fc3b5f6132c4701f100ec7afa15d92', '[\"*\"]', NULL, '2022-06-03 01:43:01', '2022-06-03 01:43:01'),
(52, 'App\\Models\\User', 62, 'my-app-token', '433e5507b93827ff6820fed9be431ddd989a55fdee7a2072c279d795a526e7e9', '[\"*\"]', NULL, '2022-06-03 02:03:51', '2022-06-03 02:03:51'),
(53, 'App\\Models\\User', 58, 'my-app-token', 'da8129bcd24c06a23ba146ebf4835c4c8e6239014f69f2590027d0e4098d0c0b', '[\"*\"]', NULL, '2022-06-03 02:13:39', '2022-06-03 02:13:39'),
(54, 'App\\Models\\User', 58, 'my-app-token', '87a57ef6ab1e1f96136d9577df6b6e69b38ec3838a7c4d80acb493fb011211cf', '[\"*\"]', NULL, '2022-06-03 02:21:01', '2022-06-03 02:21:01'),
(55, 'App\\Models\\User', 58, 'my-app-token', 'fc4a9b3ea8f7c6f95593c07b533252e88c3f4c1289fe9fff87d54a746a5c999a', '[\"*\"]', NULL, '2022-06-03 08:27:54', '2022-06-03 08:27:54'),
(56, 'App\\Models\\User', 51, 'my-app-token', '5d79e669217b07b5fade6c9adab3cc8d543305a4eb7c965279ade02e457ed976', '[\"*\"]', NULL, '2022-06-03 08:28:06', '2022-06-03 08:28:06'),
(57, 'App\\Models\\User', 58, 'my-app-token', '4c6dd2b699e6e1307926ae0f2b61d977b9d7526faa15ba54f5b71e07f874bf12', '[\"*\"]', NULL, '2022-06-04 06:14:04', '2022-06-04 06:14:04'),
(58, 'App\\Models\\User', 58, 'my-app-token', '16ca38d945f353c4dd8c9db4b57e577bab1e575b9d5d77262f2c31a53f0211f9', '[\"*\"]', NULL, '2022-06-05 08:52:02', '2022-06-05 08:52:02'),
(59, 'App\\Models\\User', 51, 'my-app-token', '2573f2305cb280f163742bdf75178dee997b2092581952deebef4436e929b5f0', '[\"*\"]', NULL, '2022-06-05 09:37:03', '2022-06-05 09:37:03'),
(60, 'App\\Models\\User', 58, 'my-app-token', 'c9ec737b13f7b0d55c6a3aa33549527de6b9254f58686b3abcaeba694c4d23f5', '[\"*\"]', NULL, '2022-06-05 11:22:34', '2022-06-05 11:22:34'),
(61, 'App\\Models\\User', 51, 'my-app-token', 'eaa751119089c10b2f53718b55ead8a86e9dd91fd531f4ecb378e003604153f1', '[\"*\"]', NULL, '2022-06-06 08:11:52', '2022-06-06 08:11:52'),
(62, 'App\\Models\\User', 58, 'my-app-token', '8115e8d85a565bceaf23ca1ae995444e4bbfe39f92a80f0b8377c1ac96635639', '[\"*\"]', NULL, '2022-06-06 08:12:11', '2022-06-06 08:12:11'),
(63, 'App\\Models\\User', 58, 'my-app-token', '7253589400c144b138269e5946840b76f2e1c0b3d053007574ec7ea42d91616b', '[\"*\"]', NULL, '2022-06-06 18:01:44', '2022-06-06 18:01:44'),
(64, 'App\\Models\\User', 51, 'my-app-token', 'e87b460d144db72ffa3a5efefa3160811dcb09c8cb2c0860b6512ff24a533e0b', '[\"*\"]', NULL, '2022-06-06 18:27:54', '2022-06-06 18:27:54'),
(65, 'App\\Models\\User', 51, 'my-app-token', '37ce86193aa2db45629fcc5e310bc05cd7715e527fe9a9d565c99413b3aadca2', '[\"*\"]', NULL, '2022-06-06 23:48:16', '2022-06-06 23:48:16'),
(66, 'App\\Models\\User', 58, 'my-app-token', '09c34bf8fe7ad2728cd74a179b9e0889cfc60012a40cc4ac0c9221311b60881f', '[\"*\"]', NULL, '2022-06-07 05:59:25', '2022-06-07 05:59:25'),
(67, 'App\\Models\\User', 58, 'my-app-token', '6fe61e72988b5816c8ff70d31ccd1a3f621db4d3924c86a4b705b7bdb5cf2cf0', '[\"*\"]', NULL, '2022-06-07 17:48:20', '2022-06-07 17:48:20'),
(68, 'App\\Models\\User', 51, 'my-app-token', '1714c788b218bce2ed6e8fd0c998cd24cdad46251a62d0aff0e8a04ece0b73d8', '[\"*\"]', NULL, '2022-06-07 18:06:46', '2022-06-07 18:06:46'),
(69, 'App\\Models\\User', 51, 'my-app-token', '732d3af82e2aac004df0a64ca4f686354641a9636422a0d0213deb72e959ba51', '[\"*\"]', NULL, '2022-06-07 18:33:05', '2022-06-07 18:33:05'),
(70, 'App\\Models\\User', 58, 'my-app-token', '0b03d9182acee5c70aa034fb7824bd8825b34c602015352745b88a189c309dd7', '[\"*\"]', NULL, '2022-06-08 00:46:44', '2022-06-08 00:46:44'),
(71, 'App\\Models\\User', 51, 'my-app-token', '908b77a8c58b5d982b8f25b2dad1959f030adc8a716cf17d190e7c3ed69080a6', '[\"*\"]', NULL, '2022-06-08 16:57:29', '2022-06-08 16:57:29'),
(72, 'App\\Models\\User', 58, 'my-app-token', '47b979414801024d51668a442d4010f70c61c32d8b527bd0a517876bfddcf921', '[\"*\"]', NULL, '2022-06-09 03:03:01', '2022-06-09 03:03:01'),
(73, 'App\\Models\\User', 51, 'my-app-token', '5275cf77338683e74252b0b6bb8ecb9072716a00754bcf5b7a7abf72ef237371', '[\"*\"]', NULL, '2022-06-09 03:10:27', '2022-06-09 03:10:27'),
(74, 'App\\Models\\User', 58, 'my-app-token', '08dce1679ed15097a3abf44881c9766ed94975dc5c22d1a091ebc4c65f74aab3', '[\"*\"]', NULL, '2022-06-09 19:39:14', '2022-06-09 19:39:14'),
(75, 'App\\Models\\User', 51, 'my-app-token', 'a5a25513a89d00c67f5a97ebe958584a3244a9b54f2f0616f811d7116b0de625', '[\"*\"]', NULL, '2022-06-09 19:40:15', '2022-06-09 19:40:15'),
(76, 'App\\Models\\User', 51, 'my-app-token', 'b3295ecb9e334766ddfd166ad1c2409f2573644eb754cc05fb8972d3087940e3', '[\"*\"]', NULL, '2022-06-10 00:46:30', '2022-06-10 00:46:30'),
(77, 'App\\Models\\User', 51, 'my-app-token', 'e45afdb71271d4d2a4cea1c3ca4ac4cf0121a76e5f1e9e347b87266166d69ebf', '[\"*\"]', NULL, '2022-06-10 08:10:55', '2022-06-10 08:10:55'),
(78, 'App\\Models\\User', 58, 'my-app-token', '137e3c9d2ff157e35ba8b5673bc4fc07fd0bb6b36b4933a77e3bca38c6fb8f57', '[\"*\"]', NULL, '2022-06-10 10:01:14', '2022-06-10 10:01:14'),
(79, 'App\\Models\\User', 58, 'my-app-token', '871fd6446612a5282ffd497e2b75c95855c799f17c8c12f03b89f11fd87965b2', '[\"*\"]', NULL, '2022-06-11 03:06:57', '2022-06-11 03:06:57'),
(80, 'App\\Models\\User', 58, 'my-app-token', 'e846c2af369b5e18ffa58f12988fba37675300713081ccea2a9f44b85f5cae08', '[\"*\"]', NULL, '2022-06-11 03:16:19', '2022-06-11 03:16:19'),
(81, 'App\\Models\\User', 58, 'my-app-token', 'e508b819557836818dde694c59830067e46074117dfa0be0cbebad35b15762b8', '[\"*\"]', NULL, '2022-06-11 07:29:16', '2022-06-11 07:29:16'),
(82, 'App\\Models\\User', 51, 'my-app-token', '35186e5c7a6d9754b43b78ed52431f3ee787ca37b1574e011f7b0e2b41f66f1f', '[\"*\"]', NULL, '2022-06-11 11:01:38', '2022-06-11 11:01:38'),
(83, 'App\\Models\\User', 60, 'my-app-token', '60de3384b73cb73921c31530a0b6148fbbe5b53f86a7db8ba1c505bf0dbcbef7', '[\"*\"]', NULL, '2022-06-11 16:24:03', '2022-06-11 16:24:03'),
(84, 'App\\Models\\User', 61, 'my-app-token', 'e79a36d7a23792752b274fafc6d192276d7a5f318345ba74948b8e58497ef9b6', '[\"*\"]', NULL, '2022-06-11 17:45:54', '2022-06-11 17:45:54'),
(85, 'App\\Models\\User', 61, 'my-app-token', '1de72618d51481e04d619eb47e9a3d67fc26503ff25e44d87ece6ef83d80ff4c', '[\"*\"]', NULL, '2022-06-11 18:02:24', '2022-06-11 18:02:24'),
(86, 'App\\Models\\User', 61, 'my-app-token', '75dd02ce61b2a2eec0ab21b9aada857954d644bdd40efbe3bdf33a954d0e04d1', '[\"*\"]', NULL, '2022-06-11 18:04:39', '2022-06-11 18:04:39'),
(87, 'App\\Models\\User', 66, 'my-app-token', '913e2f143139937d8fe705923e9c992057eecf51aaabad8de3bb210894f43330', '[\"*\"]', NULL, '2022-06-11 18:05:33', '2022-06-11 18:05:33'),
(88, 'App\\Models\\User', 51, 'my-app-token', 'b58de8cf02c619d4d7b5cfd5abd431ed4e34461e5840ed4a7029dd284068b037', '[\"*\"]', NULL, '2022-06-11 18:53:42', '2022-06-11 18:53:42'),
(89, 'App\\Models\\User', 51, 'my-app-token', '89bf6039e447c8cf0cbc4789d3129acee3a44fe0e4b1448f1cb6f298e5a3a63c', '[\"*\"]', NULL, '2022-06-11 18:54:29', '2022-06-11 18:54:29'),
(90, 'App\\Models\\User', 51, 'my-app-token', '5b9ccdd426426aed14c559c3adc8bec33ec379a1ea35b1e7838c456bfcc86371', '[\"*\"]', NULL, '2022-06-11 19:06:39', '2022-06-11 19:06:39'),
(91, 'App\\Models\\User', 58, 'my-app-token', 'f37664bbbde165995168c8126c183bb74a72681775d4ba1f4190fc8b3ae80f80', '[\"*\"]', NULL, '2022-06-11 22:01:49', '2022-06-11 22:01:49'),
(92, 'App\\Models\\User', 58, 'my-app-token', 'bb6782271996603efd919da3c7bbe9264f7f946cc8f86a8deb5a56d7bdea9e58', '[\"*\"]', NULL, '2022-06-11 22:54:56', '2022-06-11 22:54:56');

-- --------------------------------------------------------

--
-- Table structure for table `ratings`
--

CREATE TABLE `ratings` (
  `id` int(10) UNSIGNED NOT NULL,
  `motel_id` int(11) NOT NULL,
  `rating` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ratings`
--

INSERT INTO `ratings` (`id`, `motel_id`, `rating`, `created_at`, `updated_at`) VALUES
(1, 37, 4, NULL, NULL),
(2, 37, 2, NULL, NULL),
(3, 50, 4, '2022-06-11 03:11:45', '2022-06-11 03:11:45'),
(4, 50, 4, '2022-06-11 03:11:52', '2022-06-11 03:11:52'),
(5, 50, 1, '2022-06-11 03:12:19', '2022-06-11 03:12:19'),
(6, 46, 5, '2022-06-11 03:14:44', '2022-06-11 03:14:44'),
(7, 46, 2, '2022-06-11 03:15:06', '2022-06-11 03:15:06'),
(8, 50, 1, '2022-06-11 03:16:42', '2022-06-11 03:16:42'),
(9, 50, 1, '2022-06-11 03:16:53', '2022-06-11 03:16:53'),
(10, 38, 4, '2022-06-11 07:29:53', '2022-06-11 07:29:53'),
(11, 38, 2, '2022-06-11 09:41:23', '2022-06-11 09:41:23'),
(12, 56, 4, '2022-06-11 17:54:43', '2022-06-11 17:54:43'),
(13, 59, 4, '2022-06-11 18:00:57', '2022-06-11 18:00:57'),
(14, 59, 1, '2022-06-11 18:01:08', '2022-06-11 18:01:08'),
(15, 59, 1, '2022-06-11 18:04:53', '2022-06-11 18:04:53'),
(16, 59, 5, '2022-06-11 18:06:10', '2022-06-11 18:06:10'),
(17, 52, 5, '2022-06-11 21:43:34', '2022-06-11 21:43:34');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Administrator', '', '2021-08-17 23:00:17', '2021-08-17 23:00:17'),
(2, 'Host', '', '2021-08-17 23:00:30', '2021-08-17 23:00:30'),
(3, 'Guest', '', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `id` int(10) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`id`, `role_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2021-08-18 02:27:56', '2021-08-18 02:27:56'),
(3, 2, 3, '2021-08-18 23:36:17', '2021-08-18 23:36:17'),
(32, 1, 51, '2022-05-20 06:56:34', '2022-05-20 06:56:34'),
(33, 3, 52, NULL, NULL),
(36, 2, 55, '2022-05-21 08:31:34', '2022-05-21 08:31:34'),
(37, 3, 56, '2022-05-21 08:32:31', '2022-05-21 08:32:31'),
(38, 2, 57, '2022-05-21 08:33:40', '2022-05-21 08:33:40'),
(39, 2, 58, '2022-05-25 06:20:26', '2022-05-25 06:20:26'),
(40, 2, 59, '2022-06-01 10:16:11', '2022-06-01 10:16:11'),
(41, 2, 60, '2022-06-01 17:05:53', '2022-06-01 17:05:53'),
(42, 3, 61, '2022-06-02 21:39:15', '2022-06-02 21:39:15'),
(43, 2, 62, '2022-06-03 02:01:51', '2022-06-03 02:01:51'),
(44, 2, 63, '2022-06-03 02:19:15', '2022-06-03 02:19:15'),
(45, 2, 66, '2022-06-05 11:41:15', '2022-06-05 11:41:15'),
(46, 2, 67, '2022-06-07 00:15:19', '2022-06-07 00:15:19'),
(47, 2, 68, '2022-06-07 00:24:00', '2022-06-07 00:24:00'),
(48, 2, 69, '2022-06-07 00:25:19', '2022-06-07 00:25:19'),
(49, 2, 70, '2022-06-07 01:10:00', '2022-06-07 01:10:00'),
(50, 2, 71, '2022-06-07 01:45:59', '2022-06-07 01:45:59'),
(51, 2, 72, '2022-06-07 01:47:02', '2022-06-07 01:47:02');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fb_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_active` int(11) DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `fb_id`, `email_id`, `current_team_id`, `profile_photo_path`, `is_active`, `created_at`, `updated_at`) VALUES
(51, 'mustard', 'mustard@gmail.com', '2022-05-04 13:56:57', '$2y$10$9mWplubtVVoh0HEPTf8DYekYhCiUcyptxC8p7ZGFy1vh24ZUm.y3e', 'QzBRy1a1NUdSKIuX0uhOKomcs9ZJlKyzaNY8uRRBkAtbYQmB56dywnFWxxmD', NULL, NULL, NULL, NULL, 0, '2022-05-20 06:56:34', '2022-06-11 22:01:05'),
(58, 'Vương Nguyễn', 'vuongnguyen142000@gmail.com', '2022-05-25 06:21:43', '$2y$10$9PxUQyTHWfDnIl9JUR889eVA8GlmKLOCT8Wz8xL5SUpLTKih5wDsu', 'IekIWBI5F8Zv4zPuSYFPyyJct18jbOmSq1QcheDnYvorFp1ioyedXrWzomva', NULL, NULL, NULL, NULL, 0, '2022-05-25 06:20:26', '2022-06-11 22:01:05'),
(59, 'Quoc Vuong', 'vuongacma14@gmail.com', '2022-05-25 06:21:43', '$2y$10$oNFE43ndqhh485SIkXfQrOCYu5sJzKku.lQdeyefIMxFMvM8zjrUe', 'X0MYSFW7BUFNEmVw0RuZQRbI1cQUg9KINnPhhPcQ6uw7QT4oBNuh6PZNLbuL', NULL, NULL, NULL, NULL, 0, '2022-06-01 10:16:10', '2022-06-11 22:01:05'),
(60, 'Hồng Sương', 'suong5004@gmail.com', '2022-05-25 06:21:43', '$2y$10$G5/ACdZ.o3febHxUCJuYsOn8p62jsEZLzRk/MHi0uLQn/5LFAM41W', 'QghjQ36nWAltBBX3F6EdrWKsRsxXVd8TS5ADnQvbaLgCWKVziEAoUzKtQ6nV', NULL, NULL, NULL, NULL, 0, '2022-06-01 17:05:52', '2022-06-11 22:01:06'),
(61, 'Thu Sương', 'Suongnguyen92@gmail.com', '2022-05-26 01:03:29', '$2y$10$83cJC6sJKjwwSPwlS/iW/e.gSO070ijLgJ.Gdj4PTtNCIItK7vTQu', '472Z4jVo3tE5izKLiLJvNhBIDLwfLfp27QBNekjQVX9IvN9tXlvPfqJ6dUqw', NULL, NULL, NULL, NULL, 0, '2022-06-02 21:39:14', '2022-06-11 22:01:06'),
(62, 'hfhn', 'ntlv2006@gmail.com', '2022-05-25 06:21:43', '$2y$10$7ffByASLLbn4nRwtviZ16u.oD7XkoRDI5.r8Xov5VcddU1FZfQjXe', 'EzPBvNrnOZNhBP4hlzKo9WR3QUv4hVmj7FTt97i5tWyBCFGZtmetk3sGSrlE', NULL, NULL, NULL, NULL, 0, '2022-06-03 02:01:51', '2022-06-11 22:01:07'),
(63, 'Nguyễn Văn Phát', 'Phat@gmail.com', '2022-05-25 06:21:43', '$2y$10$zk7cOwU6ouOyuxT5.k2PnexHWMfyvlUi.y3Qs4Tj35/aEqR1tAgd.', 'NMJqHNrzEy7o7EcspipGa26YtsH0SwIJK4GXf30VBgjuhNNav1Ek98xs6pi0', NULL, NULL, NULL, NULL, 1, '2022-06-03 02:19:15', '2022-06-03 02:19:15'),
(66, 'abc', 'abc@gmail.com', NULL, '$2y$10$83cJC6sJKjwwSPwlS/iW/e.gSO070ijLgJ.Gdj4PTtNCIItK7vTQu', '8HNiGIvV4DPECmOIwcnNaE77zjQXHS1GI8Yc0aD6A4plMJAO9wDAgF2TOEPM', NULL, NULL, NULL, NULL, 1, '2022-06-05 11:41:15', '2022-06-05 11:41:15');

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE `user_details` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `images` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` tinyint(1) NOT NULL DEFAULT 1,
  `birthday` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`id`, `user_id`, `images`, `address`, `gender`, `birthday`, `phone`, `avatar`, `created_at`, `updated_at`) VALUES
(30, 51, NULL, 'Hoa Hai, Ngu Hanh Son', 1, '', '012345678', '/admin/images/posts/1654012286IMG_7230.jpg', '2022-05-20 06:56:34', '2022-05-20 06:56:34'),
(31, 52, NULL, 'Quảng Nam', 1, NULL, '0932422840', NULL, NULL, NULL),
(32, 53, NULL, NULL, 1, '', '', '', '2022-05-21 08:29:00', '2022-05-21 08:29:00'),
(33, 54, NULL, NULL, 1, '', '', '', '2022-05-21 08:29:54', '2022-05-21 08:29:54'),
(34, 55, NULL, NULL, 1, '', '', '', '2022-05-21 08:31:34', '2022-05-21 08:31:34'),
(35, 56, NULL, NULL, 1, '', '', '', '2022-05-21 08:32:31', '2022-05-21 08:32:31'),
(36, 57, NULL, NULL, 1, '', '', '', '2022-05-21 08:33:40', '2022-05-21 08:33:40'),
(37, 58, NULL, NULL, 1, '', '0932422840', '/admin/images/posts/logo.jpg', '2022-05-25 06:20:26', '2022-06-07 08:42:50'),
(38, 59, NULL, NULL, 1, '', '0986277602', '/admin/images/posts/1654012286IMG_7230.jpg', '2022-06-01 10:16:11', '2022-06-01 10:16:11'),
(39, 60, NULL, NULL, 1, '', '0369142163', '/admin/images/posts/1654013406z2334534536466_f58753e64a368193c1e42c2804d5c31d.jpg', '2022-06-01 17:05:53', '2022-06-01 17:05:53'),
(40, 61, NULL, NULL, 1, '', '', '', '2022-06-02 21:39:15', '2022-06-02 21:39:15'),
(41, 62, NULL, NULL, 1, '', '', '', '2022-06-03 02:01:51', '2022-06-03 02:01:51'),
(42, 63, NULL, NULL, 1, '', '', '', '2022-06-03 02:19:15', '2022-06-03 02:19:15'),
(43, 64, NULL, NULL, 1, '', '', '', '2022-06-05 11:33:32', '2022-06-05 11:33:32'),
(44, 65, NULL, NULL, 1, '', '', '', '2022-06-05 11:39:45', '2022-06-05 11:39:45'),
(45, 66, NULL, NULL, 1, '', '', '', '2022-06-05 11:41:15', '2022-06-05 11:41:15'),
(46, 67, NULL, NULL, 1, '', '', '', '2022-06-07 00:15:19', '2022-06-07 00:15:19'),
(47, 68, NULL, NULL, 1, '', '', '', '2022-06-07 00:24:01', '2022-06-07 00:24:01'),
(48, 69, NULL, NULL, 1, '', '', '', '2022-06-07 00:25:19', '2022-06-07 00:25:19'),
(49, 70, NULL, NULL, 1, '', '', '', '2022-06-07 01:10:00', '2022-06-07 01:10:00'),
(50, 71, NULL, NULL, 1, '', '', '', '2022-06-07 01:45:59', '2022-06-07 01:45:59'),
(51, 72, NULL, NULL, 1, '', '', '', '2022-06-07 01:47:02', '2022-06-07 01:47:02');

-- --------------------------------------------------------

--
-- Table structure for table `wards`
--

CREATE TABLE `wards` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addresses`
--
ALTER TABLE `addresses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `districts`
--
ALTER TABLE `districts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `genders`
--
ALTER TABLE `genders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `motels`
--
ALTER TABLE `motels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `motel_comments`
--
ALTER TABLE `motel_comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `motel_image`
--
ALTER TABLE `motel_image`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `ratings`
--
ALTER TABLE `ratings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_details`
--
ALTER TABLE `user_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wards`
--
ALTER TABLE `wards`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addresses`
--
ALTER TABLE `addresses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `districts`
--
ALTER TABLE `districts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `genders`
--
ALTER TABLE `genders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=120;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `motels`
--
ALTER TABLE `motels`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `motel_comments`
--
ALTER TABLE `motel_comments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `motel_image`
--
ALTER TABLE `motel_image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;

--
-- AUTO_INCREMENT for table `ratings`
--
ALTER TABLE `ratings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `role_user`
--
ALTER TABLE `role_user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT for table `user_details`
--
ALTER TABLE `user_details`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `wards`
--
ALTER TABLE `wards`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
