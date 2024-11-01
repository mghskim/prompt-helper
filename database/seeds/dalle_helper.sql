-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 21, 2024 at 05:11 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dalle_helper`
--

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cache`
--


-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `post_id` bigint(20) UNSIGNED NOT NULL,
  `comment` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--



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
-- Table structure for table `jobs`
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
-- Table structure for table `job_batches`
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
(27, '0001_01_01_000000_create_users_table', 1),
(28, '0001_01_01_000001_create_cache_table', 1),
(29, '0001_01_01_000002_create_jobs_table', 1),
(30, '2024_05_19_233751_add_two_factor_columns_to_users_table', 1),
(31, '2024_05_19_233759_create_personal_access_tokens_table', 1),
(32, '2024_05_20_025432_create_posts_table', 1),
(33, '2024_05_20_030006_create_parameters_table', 1),
(34, '2024_08_02_042645_alter_posts_table_add_columns', 1),
(35, '2024_08_02_074616_remove_published_at_from_posts_table', 1),
(36, '2024_08_05_062659_add_reads_to_posts_table', 1),
(37, '2024_08_06_015735_create_post_like_table', 1),
(38, '2024_08_08_093657_create_comments_table', 1),
(42, '2024_08_08_131655_create_roles_table', 2),
(43, '2024_08_09_053457_create_role_user_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `parameters`
--

CREATE TABLE `parameters` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `text_color` varchar(255) DEFAULT NULL,
  `custom` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `parameters`
--
INSERT INTO `parameters` (`id`, `user_id`, `name`, `type`, `image`, `text_color`, `custom`, `created_at`, `updated_at`) VALUES
(1, 1, 'Close-up', 'Camera: proximity', NULL, '', 0, '2024-08-09 04:41:08', '2024-08-09 04:41:08'),
(2, 1, 'Bright, Colorful, Vibrant', 'Vibes', 'parameters/0eKQWJjMCCE7r5sXgLD3HhNkDZiJoS7I8zubeDjV.png', NULL, 0, '2024-08-09 04:43:09', '2024-08-13 03:33:43'),
(3, 1, 'Low angle', 'Camera: angle', NULL, '', 0, '2024-08-09 04:44:23', '2024-08-09 04:44:23'),
(4, 1, 'Extreme Long Shot', 'Camera: proximity', NULL, '', 0, '2024-08-09 04:45:08', '2024-08-09 04:45:08'),
(5, 1, 'Long Shot', 'Camera: proximity', NULL, '', 0, '2024-08-09 04:45:44', '2024-08-09 04:45:44'),
(6, 1, 'Full Frame', 'Camera: proximity', NULL, '', 0, '2024-08-09 04:46:07', '2024-08-09 04:46:07'),
(7, 1, 'Medium Shot', 'Camera: proximity', NULL, '', 0, '2024-08-09 04:46:32', '2024-08-09 04:46:32'),
(8, 1, 'Eye Level Shot', 'Camera: angle', NULL, '', 0, '2024-08-09 04:47:20', '2024-08-09 04:47:20'),
(9, 1, 'High Angle Shot', 'Camera: angle', NULL, '', 0, '2024-08-09 04:47:29', '2024-08-09 04:47:29'),
(10, 1, 'Hip Level Shot', 'Camera: angle', NULL, '', 0, '2024-08-09 04:47:47', '2024-08-09 04:47:47'),
(11, 1, 'Knee Level Shot', 'Camera: angle', NULL, '', 0, '2024-08-09 04:48:02', '2024-08-09 04:48:02'),
(12, 1, 'Shoulder Level Shot', 'Camera: angle', NULL, '', 0, '2024-08-09 04:48:17', '2024-08-09 04:48:17'),
(13, 1, 'Dutch Angle Shot', 'Camera: angle', NULL, '', 0, '2024-08-09 04:48:24', '2024-08-09 04:48:24'),
(14, 1, 'Overhead Shot', 'Camera: angle', NULL, '', 0, '2024-08-09 04:48:32', '2024-08-09 04:48:32'),
(15, 1, 'Aerial Shot', 'Camera: angle', NULL, '', 0, '2024-08-09 04:48:38', '2024-08-09 04:48:38'),
(16, 1, 'Fisheye', 'Camera: lens', NULL, '', 0, '2024-08-09 04:49:39', '2024-08-09 04:49:39'),
(17, 1, 'Wide angle', 'Camera: lens', NULL, '', 0, '2024-08-09 04:49:56', '2024-08-09 04:49:56'),
(18, 1, 'Standard lens', 'Camera: lens', NULL, '', 0, '2024-08-09 04:50:32', '2024-08-09 04:50:32'),
(19, 1, 'Medium telephoto', 'Camera: lens', NULL, '', 0, '2024-08-09 04:50:38', '2024-08-09 04:50:38'),
(20, 1, 'Super telephoto', 'Camera: lens', NULL, '', 0, '2024-08-09 04:51:00', '2024-08-09 04:51:00'),
(21, 1, 'Macro', 'Camera: lens', NULL, '', 0, '2024-08-09 04:51:08', '2024-08-09 04:51:08'),
(22, 1, 'Fast shutter speed', 'Camera: settings', NULL, '', 0, '2024-08-09 04:52:54', '2024-08-09 04:52:54'),
(23, 1, 'Slow shutter speed', 'Camera: settings', NULL, '', 0, '2024-08-09 04:53:10', '2024-08-09 04:53:10'),
(24, 1, 'Blur Background', 'Camera: settings', NULL, '', 0, '2024-08-09 04:54:43', '2024-08-09 04:54:43'),
(25, 1, 'Motion Blur', 'Camera: settings', NULL, '', 0, '2024-08-09 04:56:11', '2024-08-09 04:56:11'),
(26, 1, 'Kodachrome', 'Film types', 'parameters/IFI2SCjSDostTBLsvyPz7LpQ1kAjritL3d7vpV8D.png', NULL, 0, '2024-08-09 04:57:24', '2024-08-09 06:32:02'),
(27, 1, 'Autochrome', 'Film types', 'parameters/umoXMlqCi4hfKRiQYHHaFth3vvBId8J0qky7XOKy.png', NULL, 0, '2024-08-09 04:57:34', '2024-08-09 06:31:50'),
(28, 1, 'Lomography', 'Film types', 'parameters/W4DKp9yIsbHpep4uuzs0vMiM4yJZ1TJ7ShHQT8R6.png', NULL, 0, '2024-08-09 04:57:43', '2024-08-09 06:31:37'),
(29, 1, 'Polaroid', 'Film types', 'parameters/uzeWy8ZLGEobidcBOObrQnXfPMfFxvUW47sZbOUd.png', NULL, 0, '2024-08-09 04:57:53', '2024-08-09 06:31:26'),
(30, 1, 'Camera phone', 'Film types', 'parameters/IFGknmj7FNQoTJvok9CSaHkUGWg6jA2dsroOoNTS.png', NULL, 0, '2024-08-09 04:58:14', '2024-08-09 06:31:18'),
(31, 1, 'CCTV', 'Film types', 'parameters/8FpSAshljD38kmpd9LkahvoYWKJqj1AOvuZkSctZ.png', NULL, 0, '2024-08-09 04:58:35', '2024-08-09 06:31:05'),
(32, 1, 'Disposable Camera', 'Film types', 'parameters/DTU56RPv3SiKIYPmY8GFnFGN05i1trzMFpfHC09y.png', NULL, 0, '2024-08-09 04:58:53', '2024-08-09 06:30:56'),
(33, 1, 'Daguerrotype', 'Film types', 'parameters/5x10HF4yyhtR0C9xBe4mLr0onTmV4ilDsvCMTBX9.png', NULL, 0, '2024-08-09 04:59:11', '2024-08-09 06:30:46'),
(34, 1, 'Camera obscura', 'Film types', 'parameters/JGXPgFJdRfSGrh7JihBTzcK7ybQmHgAfPxME1wPN.png', NULL, 0, '2024-08-09 04:59:29', '2024-08-09 06:29:55'),
(35, 1, 'Cyanotype', 'Film types', 'parameters/ApZEvEby9HFjFBioGtehGogucZvB4v7FhBtIZs2J.png', NULL, 0, '2024-08-09 04:59:54', '2024-08-09 06:30:32'),
(36, 1, 'Black and white', 'Film types', 'parameters/0S0ZXCnBghnmD4YOxoPWghac15nVHLHyCsE3hSD2.png', NULL, 0, '2024-08-09 05:00:11', '2024-08-09 06:29:30'),
(37, 1, 'Redscale photography', 'Film types', 'parameters/D0CsVdtZVd3PM0ouEN8YFG15iwJiQjVzGCj1tTcC.png', NULL, 0, '2024-08-09 05:00:32', '2024-08-09 05:42:15'),
(38, 1, 'Infrared photography', 'Film types', 'parameters/OZXrayzi3aTtIIwo61egeLCJxOAUzsgGb5DPyCRR.png', NULL, 0, '2024-08-09 05:00:47', '2024-08-09 05:04:35'),
(39, 1, '3D Art Style', 'Styles', 'parameters/3d-art-style.png', '', 0, '2024-08-13 03:20:03', '2024-08-13 03:20:03'),
(40, 1, '1940s Fashion', 'Styles', 'parameters/1940s-fashion.png', '', 0, '2024-08-13 03:20:41', '2024-08-13 03:20:41'),
(41, 1, '1950s Fashion', 'Styles', 'parameters/1950s-fashion.png', '', 0, '2024-08-13 03:20:56', '2024-08-13 03:20:56'),
(42, 1, 'Anime', 'Styles', 'parameters/anime.png', '', 0, '2024-08-13 03:21:13', '2024-08-13 03:21:13'),
(43, 1, 'Blueprint style', 'Styles', 'parameters/blueprint-style.png', '', 0, '2024-08-13 03:21:29', '2024-08-13 03:21:29'),
(44, 1, 'Comic Style', 'Styles', 'parameters/comic-style.png', '', 0, '2024-08-13 03:21:45', '2024-08-13 03:21:45'),
(45, 1, 'Cubism', 'Styles', 'parameters/cubism.png', NULL, 0, '2024-08-13 03:21:51', '2024-08-13 03:21:59'),
(46, 1, 'Cyberpunk', 'Styles', 'parameters/cyberpunk.png', '', 0, '2024-08-13 03:25:44', '2024-08-13 03:25:44'),
(47, 1, 'Gothic Fashion', 'Styles', 'parameters/gothic-fashion.png', '', 0, '2024-08-13 03:25:58', '2024-08-13 03:25:58'),
(48, 1, 'Graffiti', 'Styles', 'parameters/graffiti.png', '', 0, '2024-08-13 03:26:06', '2024-08-13 03:26:06'),
(49, 1, 'Minimalist Style', 'Styles', 'parameters/minimalist-style.png', '', 0, '2024-08-13 03:26:22', '2024-08-13 03:26:22'),
(50, 1, 'Pixel art', 'Styles', 'parameters/pixel-art.png', '', 0, '2024-08-13 03:29:08', '2024-08-13 03:29:08'),
(51, 1, 'Pop art', 'Styles', 'parameters/pop-art.png', '', 0, '2024-08-13 03:29:21', '2024-08-13 03:29:21'),
(52, 1, 'Storybook Illustration', 'Styles', 'parameters/storybook-illustration.png', '', 0, '2024-08-13 03:29:52', '2024-08-13 03:29:52'),
(53, 1, 'Surrealism', 'Styles', 'parameters/surrealism.png', NULL, 0, '2024-08-13 03:30:02', '2024-08-13 03:30:09'),
(54, 1, 'Vienna Secession', 'Styles', 'parameters/vienna-secession.png', '', 0, '2024-08-13 03:30:20', '2024-08-13 03:30:20'),
(55, 1, 'Watercolor', 'Styles', 'parameters/watercolor.png', '', 0, '2024-08-13 03:30:33', '2024-08-13 03:30:33'),
(56, 1, 'Peaceful, Calm, Light, Serene', 'Vibes', 'parameters/peaceful,-calm,-light,-serene.png', '', 0, '2024-08-13 03:35:34', '2024-08-13 03:35:34'),
(57, 1, 'Dark, Ominous', 'Vibes', 'parameters/dark,-ominous.png', '', 0, '2024-08-13 04:03:41', '2024-08-13 04:03:41'),
(58, 1, 'Somber, Sad', 'Vibes', 'parameters/somber,-sad.png', '', 0, '2024-08-13 04:03:57', '2024-08-13 04:03:57'),
(59, 1, 'Detailed', 'Vibes', 'parameters/detailed.png', '', 0, '2024-08-13 04:04:05', '2024-08-13 04:04:05'),
(60, 1, 'Imposing', 'Vibes', 'parameters/imposing.png', '', 0, '2024-08-13 04:04:12', '2024-08-13 04:04:12'),
(61, 1, 'Swirling', 'Vibes', 'parameters/swirling.png', '', 0, '2024-08-13 04:04:23', '2024-08-13 04:04:23'),
(62, 1, 'Golden Hour Lighting', 'Lighting', 'parameters/golden-hour.png', NULL, 0, '2024-08-13 04:07:33', '2024-08-13 04:09:07'),
(63, 1, 'Blue Hour Lighting', 'Lighting', 'parameters/blue-hour.png', NULL, 0, '2024-08-13 04:07:48', '2024-08-13 04:08:59'),
(64, 1, 'Low key lighting', 'Lighting', 'parameters/low-key-lighting.png', '', 0, '2024-08-13 04:08:49', '2024-08-13 04:08:49'),
(65, 1, 'Natural Lighting', 'Lighting', 'parameters/natural-lighting.png', '', 0, '2024-08-13 04:09:26', '2024-08-13 04:09:26'),
(66, 1, 'Flat Lighting', 'Lighting', 'parameters/flat-lighting.png', '', 0, '2024-08-13 04:09:47', '2024-08-13 04:09:47'),
(67, 1, 'Alex Ross Style', 'Artists', 'parameters/alex-ross-style.png', '', 0, '2024-08-13 04:26:03', '2024-08-13 04:26:03'),
(68, 1, 'Banksy Style', 'Artists', 'parameters/banksy-style.png', '', 0, '2024-08-13 04:26:13', '2024-08-13 04:26:13'),
(69, 1, 'Basquiat Style', 'Artists', 'parameters/basquiat-style.png', '', 0, '2024-08-13 04:26:32', '2024-08-13 04:26:32'),
(70, 1, 'Edward Hopper Style', 'Artists', 'parameters/edward-hopper-style.png', NULL, 0, '2024-08-13 04:26:43', '2024-08-13 04:28:00'),
(71, 1, 'Hieronymus Bosch Style', 'Artists', 'parameters/hieronymus-bosch-style.png', NULL, 0, '2024-08-13 04:26:57', '2024-08-13 04:27:56'),
(72, 1, 'HR Giger Style', 'Artists', 'parameters/hr-giger-style.png', NULL, 0, '2024-08-13 04:27:12', '2024-08-13 04:27:44'),
(73, 1, 'Keith Haring Style', 'Artists', 'parameters/keith-haring.png', NULL, 0, '2024-08-13 04:27:21', '2024-08-13 04:27:51'),
(74, 1, 'Lisa Frank Style', 'Artists', 'parameters/lisa-frank-style.png', NULL, 0, '2024-08-13 04:27:35', '2024-08-13 04:27:46'),
(75, 1, 'Piet Mondrian Style', 'Artists', 'parameters/piet-mondrian-style.png', '', 0, '2024-08-13 04:28:15', '2024-08-13 04:28:15'),
(76, 1, 'Salvador Dali Style', 'Artists', 'parameters/salvador-dali-style.png', '', 0, '2024-08-13 04:28:30', '2024-08-13 04:28:30'),
(77, 1, 'Simon Stålenhag Style', 'Artists', 'parameters/simon-stålenhag-style.png', '', 0, '2024-08-13 04:29:01', '2024-08-13 04:29:01'),
(78, 1, 'Vincent Van Gogh Style', 'Artists', 'parameters/vincent-van-gogh-style.png', '', 0, '2024-08-13 04:29:13', '2024-08-13 04:29:13'),
(79, 1, 'Baby Blue Color', 'Colors', 'parameters/baby-blue-color.png', '', 0, '2024-08-13 04:37:44', '2024-08-13 04:37:44'),
(80, 1, 'Brown Color', 'Colors', 'parameters/brown-color.png', '', 0, '2024-08-13 04:37:52', '2024-08-13 04:37:52'),
(81, 1, 'Cyan Color', 'Colors', 'parameters/cyan-color.png', '', 0, '2024-08-13 04:37:59', '2024-08-13 04:37:59'),
(82, 1, 'Gold Color', 'Colors', 'parameters/gold-color.png', '', 0, '2024-08-13 04:38:07', '2024-08-13 04:38:07'),
(83, 1, 'Grayscale Color', 'Colors', 'parameters/grayscale-color.png', '', 0, '2024-08-13 04:38:17', '2024-08-13 04:38:17'),
(84, 1, 'Green Color', 'Colors', 'parameters/green-color.png', '', 0, '2024-08-13 04:38:28', '2024-08-13 04:38:28'),
(85, 1, 'Hot Pink Color', 'Colors', 'parameters/hot-pink-color.png', '', 0, '2024-08-13 04:38:37', '2024-08-13 04:38:37'),
(86, 1, 'Lavender Color', 'Colors', 'parameters/lavender-color.png', '', 0, '2024-08-13 04:38:45', '2024-08-13 04:38:45'),
(87, 1, 'Mint Color', 'Colors', 'parameters/mint-color.png', '', 0, '2024-08-13 04:38:51', '2024-08-13 04:38:51'),
(88, 1, 'Brick Material', 'Materials', 'parameters/brick-material.png', '', 0, '2024-08-13 04:48:13', '2024-08-13 04:48:13'),
(89, 1, 'Ceramic', 'Materials', 'parameters/ceramic-material.png', NULL, 0, '2024-08-13 04:48:23', '2024-08-16 23:25:29'),
(90, 1, 'Cotton Material', 'Materials', 'parameters/cotton-material.png', '', 0, '2024-08-13 04:48:32', '2024-08-13 04:48:32'),
(91, 1, 'Emerald Material', 'Materials', 'parameters/emerald-material.png', '', 0, '2024-08-13 04:48:47', '2024-08-13 04:48:47'),
(92, 1, 'Leather Material', 'Materials', 'parameters/leather-material.png', '', 0, '2024-08-13 04:49:05', '2024-08-13 04:49:05'),
(93, 1, 'Paper Material', 'Materials', 'parameters/paper-material.png', '', 0, '2024-08-13 04:49:13', '2024-08-13 04:49:13'),
(94, 1, 'Quartz Material', 'Materials', 'parameters/quartz-material.png', '', 0, '2024-08-13 04:49:23', '2024-08-13 04:49:23'),
(95, 1, 'Skin material', 'Materials', 'parameters/skin-material.png', '', 0, '2024-08-13 04:49:36', '2024-08-13 04:49:36'),
(96, 1, 'Wood material', 'Materials', 'parameters/wood-material.png', '', 0, '2024-08-13 04:49:44', '2024-08-13 04:49:44');


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
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `slug` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `category` varchar(255) DEFAULT NULL,
  `height` int(11) DEFAULT NULL,
  `width` int(11) DEFAULT NULL,
  `ai_model` varchar(255) NOT NULL,
  `version` varchar(255) NOT NULL,
  `published_at` timestamp NULL DEFAULT NULL,
  `featured` tinyint(1) NOT NULL DEFAULT 0,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `views` bigint(20) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--


-- --------------------------------------------------------

--
-- Table structure for table `post_like`
--

CREATE TABLE `post_like` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `post_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `post_like`
--


-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'admin', '2024-08-13 00:49:10', '2024-08-13 00:49:10'),
(2, 'editor', '2024-08-13 00:50:29', '2024-08-13 00:50:29'),
(3, 'author', '2024-08-13 00:53:43', '2024-08-13 00:53:43');

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`id`, `user_id`, `role_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
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
-- Dumping data for table `sessions`
--


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
  `two_factor_secret` text DEFAULT NULL,
  `two_factor_recovery_codes` text DEFAULT NULL,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@test.com', '2024-08-09 04:34:08', '$2y$12$FrBK7UKtl739ZfUoEDbdBOgOMcrLI8xe1/Wwweom1MDnF4dozazbW', NULL, NULL, NULL, 'DzL1DHcibQEVIJXhO144gqj9IBGBG5A4XsD30MVwun5QMeH42kGeGlK5h8pd', NULL, NULL, '2024-08-08 22:27:27', '2024-08-09 04:34:08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `parameters`
--
ALTER TABLE `parameters`
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
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `posts_slug_unique` (`slug`),
  ADD KEY `posts_user_id_foreign` (`user_id`),
  ADD KEY `posts_views_index` (`views`);

--
-- Indexes for table `post_like`
--
ALTER TABLE `post_like`
  ADD PRIMARY KEY (`id`),
  ADD KEY `post_like_user_id_index` (`user_id`),
  ADD KEY `post_like_post_id_index` (`post_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role_user_user_id_foreign` (`user_id`),
  ADD KEY `role_user_role_id_foreign` (`role_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

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
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `parameters`
--
ALTER TABLE `parameters`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `post_like`
--
ALTER TABLE `post_like`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `role_user`
--
ALTER TABLE `role_user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
