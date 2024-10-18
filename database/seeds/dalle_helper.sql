-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 21, 2024 at 05:11 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

-- SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
-- START TRANSACTION;
-- SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: "dalle_helper"
--

-- --------------------------------------------------------

--
-- Dumping data for table "parameters"
--

INSERT INTO "parameters" ("id", "user_id", "name", "type", "image", "text_color", "custom", "created_at", "updated_at") VALUES
(1, 1, 'Close-up', 'Camera: proximity', NULL, '', FALSE, '2024-08-09 04:41:08', '2024-08-09 04:41:08'),
(2, 1, 'Bright, Colorful, Vibrant', 'Vibes', 'parameters/0eKQWJjMCCE7r5sXgLD3HhNkDZiJoS7I8zubeDjV.png', NULL, FALSE, '2024-08-09 04:43:09', '2024-08-13 03:33:43'),
(3, 1, 'Low angle', 'Camera: angle', NULL, '', FALSE, '2024-08-09 04:44:23', '2024-08-09 04:44:23'),
(4, 1, 'Extreme Long Shot', 'Camera: proximity', NULL, '', FALSE, '2024-08-09 04:45:08', '2024-08-09 04:45:08'),
(5, 1, 'Long Shot', 'Camera: proximity', NULL, '', FALSE, '2024-08-09 04:45:44', '2024-08-09 04:45:44'),
(6, 1, 'Full Frame', 'Camera: proximity', NULL, '', FALSE, '2024-08-09 04:46:07', '2024-08-09 04:46:07'),
(7, 1, 'Medium Shot', 'Camera: proximity', NULL, '', FALSE, '2024-08-09 04:46:32', '2024-08-09 04:46:32'),
(8, 1, 'Eye Level Shot', 'Camera: angle', NULL, '', FALSE, '2024-08-09 04:47:20', '2024-08-09 04:47:20'),
(9, 1, 'High Angle Shot', 'Camera: angle', NULL, '', FALSE, '2024-08-09 04:47:29', '2024-08-09 04:47:29'),
(10, 1, 'Hip Level Shot', 'Camera: angle', NULL, '', FALSE, '2024-08-09 04:47:47', '2024-08-09 04:47:47'),
(11, 1, 'Knee Level Shot', 'Camera: angle', NULL, '', FALSE, '2024-08-09 04:48:02', '2024-08-09 04:48:02'),
(12, 1, 'Shoulder Level Shot', 'Camera: angle', NULL, '', FALSE, '2024-08-09 04:48:17', '2024-08-09 04:48:17'),
(13, 1, 'Dutch Angle Shot', 'Camera: angle', NULL, '', FALSE, '2024-08-09 04:48:24', '2024-08-09 04:48:24'),
(14, 1, 'Overhead Shot', 'Camera: angle', NULL, '', FALSE, '2024-08-09 04:48:32', '2024-08-09 04:48:32'),
(15, 1, 'Aerial Shot', 'Camera: angle', NULL, '', FALSE, '2024-08-09 04:48:38', '2024-08-09 04:48:38'),
(16, 1, 'Fisheye', 'Camera: lens', NULL, '', FALSE, '2024-08-09 04:49:39', '2024-08-09 04:49:39'),
(17, 1, 'Wide angle', 'Camera: lens', NULL, '', FALSE, '2024-08-09 04:49:56', '2024-08-09 04:49:56'),
(18, 1, 'Standard lens', 'Camera: lens', NULL, '', FALSE, '2024-08-09 04:50:32', '2024-08-09 04:50:32'),
(19, 1, 'Medium telephoto', 'Camera: lens', NULL, '', FALSE, '2024-08-09 04:50:38', '2024-08-09 04:50:38'),
(20, 1, 'Super telephoto', 'Camera: lens', NULL, '', FALSE, '2024-08-09 04:51:00', '2024-08-09 04:51:00'),
(21, 1, 'Macro', 'Camera: lens', NULL, '', FALSE, '2024-08-09 04:51:08', '2024-08-09 04:51:08'),
(22, 1, 'Fast shutter speed', 'Camera: settings', NULL, '', FALSE, '2024-08-09 04:52:54', '2024-08-09 04:52:54'),
(23, 1, 'Slow shutter speed', 'Camera: settings', NULL, '', FALSE, '2024-08-09 04:53:10', '2024-08-09 04:53:10'),
(24, 1, 'Blur Background', 'Camera: settings', NULL, '', FALSE, '2024-08-09 04:54:43', '2024-08-09 04:54:43'),
(25, 1, 'Motion Blur', 'Camera: settings', NULL, '', FALSE, '2024-08-09 04:56:11', '2024-08-09 04:56:11'),
(26, 1, 'Kodachrome', 'Film types', 'parameters/IFI2SCjSDostTBLsvyPz7LpQ1kAjritL3d7vpV8D.png', NULL, FALSE, '2024-08-09 04:57:24', '2024-08-09 06:32:02'),
(27, 1, 'Autochrome', 'Film types', 'parameters/umoXMlqCi4hfKRiQYHHaFth3vvBId8J0qky7XOKy.png', NULL, FALSE, '2024-08-09 04:57:34', '2024-08-09 06:31:50'),
(28, 1, 'Lomography', 'Film types', 'parameters/W4DKp9yIsbHpep4uuzs0vMiM4yJZ1TJ7ShHQT8R6.png', NULL, FALSE, '2024-08-09 04:57:43', '2024-08-09 06:31:37'),
(29, 1, 'Polaroid', 'Film types', 'parameters/uzeWy8ZLGEobidcBOObrQnXfPMfFxvUW47sZbOUd.png', NULL, FALSE, '2024-08-09 04:57:53', '2024-08-09 06:31:26'),
(30, 1, 'Camera phone', 'Film types', 'parameters/IFGknmj7FNQoTJvok9CSaHkUGWg6jA2dsroOoNTS.png', NULL, FALSE, '2024-08-09 04:58:14', '2024-08-09 06:31:18'),
(31, 1, 'CCTV', 'Film types', 'parameters/8FpSAshljD38kmpd9LkahvoYWKJqj1AOvuZkSctZ.png', NULL, FALSE, '2024-08-09 04:58:35', '2024-08-09 06:31:05'),
(32, 1, 'Disposable Camera', 'Film types', 'parameters/DTU56RPv3SiKIYPmY8GFnFGN05i1trzMFpfHC09y.png', NULL, FALSE, '2024-08-09 04:58:53', '2024-08-09 06:30:56'),
(33, 1, 'Daguerrotype', 'Film types', 'parameters/5x10HF4yyhtR0C9xBe4mLr0onTmV4ilDsvCMTBX9.png', NULL, FALSE, '2024-08-09 04:59:11', '2024-08-09 06:30:46'),
(34, 1, 'Camera obscura', 'Film types', 'parameters/JGXPgFJdRfSGrh7JihBTzcK7ybQmHgAfPxME1wPN.png', NULL, FALSE, '2024-08-09 04:59:29', '2024-08-09 06:29:55'),
(35, 1, 'Cyanotype', 'Film types', 'parameters/ApZEvEby9HFjFBioGtehGogucZvB4v7FhBtIZs2J.png', NULL, FALSE, '2024-08-09 04:59:54', '2024-08-09 06:30:32'),
(36, 1, 'Black and white', 'Film types', 'parameters/0S0ZXCnBghnmD4YOxoPWghac15nVHLHyCsE3hSD2.png', NULL, FALSE, '2024-08-09 05:00:11', '2024-08-09 06:29:30'),
(37, 1, 'Redscale photography', 'Film types', 'parameters/D0CsVdtZVd3PM0ouEN8YFG15iwJiQjVzGCj1tTcC.png', NULL, FALSE, '2024-08-09 05:00:32', '2024-08-09 05:42:15'),
(38, 1, 'Infrared photography', 'Film types', 'parameters/OZXrayzi3aTtIIwo61egeLCJxOAUzsgGb5DPyCRR.png', NULL, FALSE, '2024-08-09 05:00:47', '2024-08-09 05:04:35'),
(39, 1, '3D Art Style', 'Styles', 'parameters/3d-art-style.png', '', FALSE, '2024-08-13 03:20:03', '2024-08-13 03:20:03'),
(40, 1, '1940s Fashion', 'Styles', 'parameters/1940s-fashion.png', '', FALSE, '2024-08-13 03:20:41', '2024-08-13 03:20:41'),
(41, 1, '1950s Fashion', 'Styles', 'parameters/1950s-fashion.png', '', FALSE, '2024-08-13 03:20:56', '2024-08-13 03:20:56'),
(42, 1, 'Anime', 'Styles', 'parameters/anime.png', '', FALSE, '2024-08-13 03:21:13', '2024-08-13 03:21:13'),
(43, 1, 'Blueprint style', 'Styles', 'parameters/blueprint-style.png', '', FALSE, '2024-08-13 03:21:29', '2024-08-13 03:21:29'),
(44, 1, 'Comic Style', 'Styles', 'parameters/comic-style.png', '', FALSE, '2024-08-13 03:21:45', '2024-08-13 03:21:45'),
(45, 1, 'Cubism', 'Styles', 'parameters/cubism.png', NULL, FALSE, '2024-08-13 03:21:51', '2024-08-13 03:21:59'),
(46, 1, 'Cyberpunk', 'Styles', 'parameters/cyberpunk.png', '', FALSE, '2024-08-13 03:25:44', '2024-08-13 03:25:44'),
(47, 1, 'Gothic Fashion', 'Styles', 'parameters/gothic-fashion.png', '', FALSE, '2024-08-13 03:25:58', '2024-08-13 03:25:58'),
(48, 1, 'Graffiti', 'Styles', 'parameters/graffiti.png', '', FALSE, '2024-08-13 03:26:06', '2024-08-13 03:26:06'),
(49, 1, 'Minimalist Style', 'Styles', 'parameters/minimalist-style.png', '', FALSE, '2024-08-13 03:26:22', '2024-08-13 03:26:22'),
(50, 1, 'Pixel art', 'Styles', 'parameters/pixel-art.png', '', FALSE, '2024-08-13 03:29:08', '2024-08-13 03:29:08'),
(51, 1, 'Pop art', 'Styles', 'parameters/pop-art.png', '', FALSE, '2024-08-13 03:29:21', '2024-08-13 03:29:21'),
(52, 1, 'Storybook Illustration', 'Styles', 'parameters/storybook-illustration.png', '', FALSE, '2024-08-13 03:29:52', '2024-08-13 03:29:52'),
(53, 1, 'Surrealism', 'Styles', 'parameters/surrealism.png', NULL, FALSE, '2024-08-13 03:30:02', '2024-08-13 03:30:09'),
(54, 1, 'Vienna Secession', 'Styles', 'parameters/vienna-secession.png', '', FALSE, '2024-08-13 03:30:20', '2024-08-13 03:30:20'),
(55, 1, 'Watercolor', 'Styles', 'parameters/watercolor.png', '', FALSE, '2024-08-13 03:30:33', '2024-08-13 03:30:33'),
(56, 1, 'Peaceful, Calm, Light, Serene', 'Vibes', 'parameters/peaceful,-calm,-light,-serene.png', '', FALSE, '2024-08-13 03:35:34', '2024-08-13 03:35:34'),
(57, 1, 'Dark, Ominous', 'Vibes', 'parameters/dark,-ominous.png', '', FALSE, '2024-08-13 04:03:41', '2024-08-13 04:03:41'),
(58, 1, 'Somber, Sad', 'Vibes', 'parameters/somber,-sad.png', '', FALSE, '2024-08-13 04:03:57', '2024-08-13 04:03:57'),
(59, 1, 'Detailed', 'Vibes', 'parameters/detailed.png', '', FALSE, '2024-08-13 04:04:05', '2024-08-13 04:04:05'),
(60, 1, 'Imposing', 'Vibes', 'parameters/imposing.png', '', FALSE, '2024-08-13 04:04:12', '2024-08-13 04:04:12'),
(61, 1, 'Swirling', 'Vibes', 'parameters/swirling.png', '', FALSE, '2024-08-13 04:04:23', '2024-08-13 04:04:23'),
(62, 1, 'Golden Hour Lighting', 'Lighting', 'parameters/golden-hour.png', NULL, FALSE, '2024-08-13 04:07:33', '2024-08-13 04:09:07'),
(63, 1, 'Blue Hour Lighting', 'Lighting', 'parameters/blue-hour.png', NULL, FALSE, '2024-08-13 04:07:48', '2024-08-13 04:08:59'),
(64, 1, 'Low key lighting', 'Lighting', 'parameters/low-key-lighting.png', '', FALSE, '2024-08-13 04:08:49', '2024-08-13 04:08:49'),
(65, 1, 'Natural Lighting', 'Lighting', 'parameters/natural-lighting.png', '', FALSE, '2024-08-13 04:09:26', '2024-08-13 04:09:26'),
(66, 1, 'Flat Lighting', 'Lighting', 'parameters/flat-lighting.png', '', FALSE, '2024-08-13 04:09:47', '2024-08-13 04:09:47'),
(67, 1, 'Alex Ross Style', 'Artists', 'parameters/alex-ross-style.png', '', FALSE, '2024-08-13 04:26:03', '2024-08-13 04:26:03'),
(68, 1, 'Banksy Style', 'Artists', 'parameters/banksy-style.png', '', FALSE, '2024-08-13 04:26:13', '2024-08-13 04:26:13'),
(69, 1, 'Basquiat Style', 'Artists', 'parameters/basquiat-style.png', '', FALSE, '2024-08-13 04:26:32', '2024-08-13 04:26:32'),
(70, 1, 'Edward Hopper Style', 'Artists', 'parameters/edward-hopper-style.png', NULL, FALSE, '2024-08-13 04:26:43', '2024-08-13 04:28:00'),
(71, 1, 'Hieronymus Bosch Style', 'Artists', 'parameters/hieronymus-bosch-style.png', NULL, FALSE, '2024-08-13 04:26:57', '2024-08-13 04:27:56'),
(72, 1, 'HR Giger Style', 'Artists', 'parameters/hr-giger-style.png', NULL, FALSE, '2024-08-13 04:27:12', '2024-08-13 04:27:44'),
(73, 1, 'Keith Haring Style', 'Artists', 'parameters/keith-haring.png', NULL, FALSE, '2024-08-13 04:27:21', '2024-08-13 04:27:51'),
(74, 1, 'Lisa Frank Style', 'Artists', 'parameters/lisa-frank-style.png', NULL, FALSE, '2024-08-13 04:27:35', '2024-08-13 04:27:46'),
(75, 1, 'Piet Mondrian Style', 'Artists', 'parameters/piet-mondrian-style.png', '', FALSE, '2024-08-13 04:28:15', '2024-08-13 04:28:15'),
(76, 1, 'Salvador Dali Style', 'Artists', 'parameters/salvador-dali-style.png', '', FALSE, '2024-08-13 04:28:30', '2024-08-13 04:28:30'),
(77, 1, 'Simon Stålenhag Style', 'Artists', 'parameters/simon-stålenhag-style.png', '', FALSE, '2024-08-13 04:29:01', '2024-08-13 04:29:01'),
(78, 1, 'Vincent Van Gogh Style', 'Artists', 'parameters/vincent-van-gogh-style.png', '', FALSE, '2024-08-13 04:29:13', '2024-08-13 04:29:13'),
(79, 1, 'Baby Blue Color', 'Colors', 'parameters/baby-blue-color.png', '', FALSE, '2024-08-13 04:37:44', '2024-08-13 04:37:44'),
(80, 1, 'Brown Color', 'Colors', 'parameters/brown-color.png', '', FALSE, '2024-08-13 04:37:52', '2024-08-13 04:37:52'),
(81, 1, 'Cyan Color', 'Colors', 'parameters/cyan-color.png', '', FALSE, '2024-08-13 04:37:59', '2024-08-13 04:37:59'),
(82, 1, 'Gold Color', 'Colors', 'parameters/gold-color.png', '', FALSE, '2024-08-13 04:38:07', '2024-08-13 04:38:07'),
(83, 1, 'Grayscale Color', 'Colors', 'parameters/grayscale-color.png', '', FALSE, '2024-08-13 04:38:17', '2024-08-13 04:38:17'),
(84, 1, 'Green Color', 'Colors', 'parameters/green-color.png', '', FALSE, '2024-08-13 04:38:28', '2024-08-13 04:38:28'),
(85, 1, 'Hot Pink Color', 'Colors', 'parameters/hot-pink-color.png', '', FALSE, '2024-08-13 04:38:37', '2024-08-13 04:38:37'),
(86, 1, 'Lavender Color', 'Colors', 'parameters/lavender-color.png', '', FALSE, '2024-08-13 04:38:45', '2024-08-13 04:38:45'),
(87, 1, 'Mint Color', 'Colors', 'parameters/mint-color.png', '', FALSE, '2024-08-13 04:38:51', '2024-08-13 04:38:51'),
(88, 1, 'Brick Material', 'Materials', 'parameters/brick-material.png', '', FALSE, '2024-08-13 04:48:13', '2024-08-13 04:48:13'),
(89, 1, 'Ceramic', 'Materials', 'parameters/ceramic-material.png', NULL, FALSE, '2024-08-13 04:48:23', '2024-08-16 23:25:29'),
(90, 1, 'Cotton Material', 'Materials', 'parameters/cotton-material.png', '', FALSE, '2024-08-13 04:48:32', '2024-08-13 04:48:32'),
(91, 1, 'Emerald Material', 'Materials', 'parameters/emerald-material.png', '', FALSE, '2024-08-13 04:48:47', '2024-08-13 04:48:47'),
(92, 1, 'Leather Material', 'Materials', 'parameters/leather-material.png', '', FALSE, '2024-08-13 04:49:05', '2024-08-13 04:49:05'),
(93, 1, 'Paper Material', 'Materials', 'parameters/paper-material.png', '', FALSE, '2024-08-13 04:49:13', '2024-08-13 04:49:13'),
(94, 1, 'Quartz Material', 'Materials', 'parameters/quartz-material.png', '', FALSE, '2024-08-13 04:49:23', '2024-08-13 04:49:23'),
(95, 1, 'Wood material', 'Materials', 'parameters/wood-material.png', '', FALSE, '2024-08-13 04:49:44', '2024-08-13 04:49:44');
--
-- Dumping data for table "posts"
--

INSERT INTO "posts" ("id", "user_id", "image", "title", "slug", "body", "category", "height", "width", "ai_model", "version", "published_at", "featured", "deleted_at", "created_at", "updated_at", "views") VALUES
(1, 1, 'uploads/hdtU6ii0UwGkLlSgiUq2zhITxnWYCA2cjEcCL7gP.png', 'Disneys Merida will-o-the-wisp', 'hdtu6ii0-niji-v6-disneys-merida-will-o-the-wisp-faerietale-couture-dramatis-personae-figures-made-of-swirling-mist-sparklecore-jean-maurice-tibbet-in-a-beautiful-sparkly', 'Disneys Merida will-o-the-wisp Faerietale Couture, dramatis personae, figures made of swirling mist, sparklecore, jean maurice tibbet in a beautiful sparkly wonder woman costume, in the style of ethereal symbolism, light indigo and silver, colorized ferrotype, clamp, 1920s, nell dorr, Corinthian, asymmetric designs --ar 2:3 --niji 6 --s 250** --Upscaled', 'Character Design', 1344, 896, 'Midjourney', 'Niji V6', '2024-08-13 04:54:55', FALSE, NULL, '2024-08-13 04:54:55', '2024-08-16 06:22:20', 60),
(2, 3, 'uploads/gMbWabTYEf2K7B9Gl1d4gM7D9DfjQD3iHP9VoJ21.png', NULL, 'gmbwabty-midjourney-6-sun-dog-my-neighbor-kikis-delivery-service-spirited-away-princess-mononoke-porco-rosso-the-red-turtle-studio-ghibli-by-hayao', 'Sun dog my neighbor kikis delivery service spirited away princess mononoke porco rosso the red turtle studio ghibli by hayao miyazaki --ar 2:3', 'Anime', 1344, 896, 'Midjourney', '6', '2024-08-13 04:57:29', FALSE, NULL, '2024-08-13 04:57:29', '2024-08-20 17:26:14', 16),
(3, 2, 'uploads/qn7L4tW8rFDes3WfuXnjXxVIXU74cozINmwOlISp.jpg', 'Dramatic Character', 'qn7l4tw8-dalle-2-central-figure-of-a-dramatic-character-rendered-in-black-and-white-appearing-heroic-after-an-adventure-photorealistic-illustration-woodcut-painting', 'Central figure of a dramatic character, rendered in black and white, appearing heroic after an adventure (photorealistic illustration woodcut-painting', 'Character Design', 1024, 1024, 'DALL•E', '2', '2024-08-13 05:01:50', FALSE, NULL, '2024-08-13 05:01:50', '2024-08-15 03:11:15', 7),
(4, 2, 'uploads/mcQKMHfpuIs2RXw1bKT5o2Zgywc5D5owVos8ZO1B.png', NULL, 'mcqkmhfp-dalle-3-s-flash-photo-mm-iso-dust-and-scratches-light-leak-slow-shutter-speed-motion-blur-shes-got-a-bowl-of', '90s flash photo 35mm iso 200 dust and scratches light leak slow shutter speed motion blur shes got a bowl of cereal at midnight with some friends candid shot life in 1996', 'Photography', 1024, 1024, 'DALL•E', '3', '2024-08-13 05:06:20', true, NULL, '2024-08-13 05:06:20', '2024-08-20 17:39:02', 20),
(5, 2, 'uploads/VNxuuHDMrkZwtcpj0lZ1XJclDoQHMUDH7e9YYSOC.png', 'Lesser-Known Merit Badge', 'vnxuuhdm-dalle-2-sewn-circle-shaped-merit-badge-for-fighting-a-bear-showing-a-boy-fighting-a-bear-and-with-the-text-fighting-at', 'Sewn circle-shaped merit badge for \"Fighting a Bear\" showing a boy fighting a bear and with the text \"Fighting\" at the top and \"A Bear\" at the bottom', 'Logos, Icons, & Design', 1024, 1024, 'DALL•E', '2', '2024-08-13 05:08:31', false, NULL, '2024-08-13 05:08:31', '2024-08-15 03:11:17', 5),
(6, 3, 'uploads/B06XqUIBKRVFd0MoD5Cr85OVQv8rKxO1rTQzIVj8.jpg', '\"Remember that race we had when we were kids?\"', 'b06xquib-dalle-3-a-beautiful-watercolor-painting-of-an-elderly-anthropomorphic-hare-and-an-elderly-anthropomorphic-tortoise-sitting-next-to-each-other-at', 'A beautiful watercolor painting of an elderly anthropomorphic hare and an elderly anthropomorphic tortoise sitting next to each other at a tavern. They are looking at each other and laughing fondly, both with drinks in their hands. The setting is cozy and warm, with wooden tables and chairs, soft lighting, and a sense of camaraderie between the two. The hare has a light grey fur with a slight hunch and the tortoise has a textured shell with a wise expression. Both are dressed in comfortable, rustic clothing, creating a friendly and nostalgic atmosphere', 'Character Design', 1024, 1024, 'DALL•E', '3', '2024-08-13 05:12:53', false, NULL, '2024-08-13 05:12:53', '2024-08-20 19:09:42', 10),
(7, 3, 'uploads/YhDWzWDtHkMA7X3FelN2RdHozT3LGVS5I3Qok5qM.png', NULL, 'yhdwzwdt-dalle-3-anime-style-scene-with-a-beautiful-woman-in-a-light-summer-dress-set-on-commonwealth-avenue-in-brighton-the-woman-is', 'Anime-style scene with a beautiful woman in a light summer dress, set on Commonwealth Avenue in Brighton, 1938. The woman is depicted discovering a dandelion. She has a look of gentle surprise and delight on her face as she kneels or bends down to examine the dandelion closely. The background includes vintage cars and streetcars, with people in 1930s attire walking along the sidewalks. The architecture reflects the 1930s Boston street. The scene captures a sunny, warm day with a clear sky, emphasizing a moment of simple beauty amidst the bustling city life', 'Anime', 617, 1080, 'DALL•E', '3', '2024-08-13 05:14:44', true, NULL, '2024-08-13 05:14:44', '2024-08-20 17:35:08', 7),
(8, 4, 'uploads/Tp1HKEBe6aigDYTszbB5PzJcevtcE3bokZZ5GdrU.png', 'Garfield x Venom', 'tp1hkebe-dalle-2-a-four-panel-garfield-comic-in-the-top-left-panel-garfield-is-alone-and-says-i-hate-mondays-in-the', 'a four panel Garfield comic. In the top left panel Garfield is alone and says \"I hate Mondays.\" In the top right panel Garfield is getting enveloped by the symbiote black goo and Garfield says \"ugh!\". In the bottom left panel the symbiote black goo completely covers Garfield except for his face and Garfield says \"gaah!\". In the bottom right panel Venom says \"We hate Mondays.\"', 'Character Design', 1024, 1024, 'DALL•E', '2', '2024-08-13 05:18:34', false, NULL, '2024-08-13 05:18:34', '2024-08-13 05:56:39', 3),
(9, 1, 'uploads/gbs0O4FfD4u9qKkOaBGr9XPJbt29n3kDoU57ZazF.png', 'Nikola Tesla Pixel Art', 'gbs0o4ff-dalle-3-style-of-a-s-jprg-nikola-tesla-strikes-a-dramatic-pose-a-text-box-has-the-characters-name-and-reads', 'style of a 90s JPRG, Nikola Tesla strikes a dramatic pose, a text box has the characters name and reads \"How Shocking\", dynamic lighting, 90s JRPG, pixel art style', 'Character Design', 1024, 1024, 'DALL•E', '3', '2024-08-13 05:22:41', false, NULL, '2024-08-13 05:22:41', '2024-08-14 01:02:34', 4),
(10, 2, 'uploads/gXadwPHShLZVQeAov7U8IWFQrk9jYIWXMshRI6dH.png', NULL, 'gxadwphs-midjourney-6-a-piece-of-artwork-that-contains-multiple-birds-a-woman-and-a-lady-in-the-style-of-bertil-nilsson-dark', 'A piece of artwork that contains multiple birds, a woman and a lady, in the style of bertil nilsson, dark brown and azure, patricia piccinini, album covers, kerem beyit, powerful and emotive portraiture, 8k resolution --v 6. 0 --ar 5:7', 'Portraits', 1312, 928, 'Midjourney', '6', '2024-08-13 05:25:21', true, NULL, '2024-08-13 05:25:21', '2024-08-14 22:04:01', 4),
(11, 4, 'uploads/Md2dapG6PUiCruDFRa1V1mm9FNQZoxWrXOO1KhBX.png', 'Colorful chess', 'md2dapg6-midjourney-6-a-colorful-chess-playing-card-with-items-on-it-in-the-style-of-r-kenton-nelson-marie-bashkirtseff-konstantin-yuon', 'a colorful chess playing card with items on it, in the style of r. kenton nelson, marie bashkirtseff, konstantin yuon, red and magenta, meticulously detailed still life, silkscreening, realistic detail --ar 35:54 --v 6.0', 'Concept Art', 1360, 880, 'Midjourney', '6', '2024-08-13 05:28:57', true, NULL, '2024-08-13 05:28:57', '2024-08-14 02:13:16', 3),
(12, 4, 'uploads/f1KO5IAIgwBE13BjsXhJZSsXpGTtJ3kNRtbGh7yO.png', 'Impressionist painting of an octopus', 'f1ko5iai-dalle-3-an-impressionist-painting-of-an-octopus-attempting-to-make-a-self-portrait-the-scene-is-set-underwater-with-soft-dappled-light', 'An impressionist painting of an octopus attempting to make a self-portrait. The scene is set underwater, with soft, dappled light filtering down, highlighting the octopus determined yet clumsy efforts. The self-portrait it is creating is incredibly basic and crude, reminiscent of a stick figure, but in this case, an octopus version, showcasing its lack of artistic skill. The background is blurred with swirls of color, emphasizing the impressionist style, with no other characters in the picture. The focus is on the octopus, its tentacles holding brushes and attempting to paint on a canvas, capturing the essence of determination and innocence in its endeavor', 'Concept Art', 1024, 1024, 'DALL•E', '3', '2024-08-13 05:35:16', false, NULL, '2024-08-13 05:35:16', '2024-08-16 06:04:24', 21),
(13, 2, 'uploads/2r5BoptOI8vT12nT9euiSOsqRxqBnVIi6oT2yOLF.png', 'Gothic Mansion', '2r5bopto-3-a-dark-opulent-gothic-mansion-with-an-enormous-staircase', 'A dark opulent Gothic mansion with an enormous staircase', 'Interior Design', 1184, 960, 'DALL•E', '3', '2024-08-13 05:38:19', false, NULL, '2024-08-13 05:38:19', '2024-08-20 17:36:21', 13),
(14, 1, 'uploads/zTebor8GGU7O70B7tG97Mvqd6vqt87XOSrB3VB35.png', NULL, 'ztebor8g-dalle-3-the-moon-a-silver-boat-sails-through-the-sea-of-stars-painting-dreams-on-the-night-sky-suffering-hillside-cubism', 'The moon, a silver boat, sails through the sea of stars, painting dreams on the night sky, Suffering, hillside, Cubism, side lit, Selective focus, Kodachrome, gilded technique, Batik, sophisticated composition, artistic, detailed, sharp, very coherent, calm, complimentary colors', 'Landscapes', 1024, 1024, 'DALL•E', '3', '2024-08-13 05:41:19', false, NULL, '2024-08-13 05:41:19', '2024-08-15 04:22:23', 2),
(15, 1, 'uploads/72icPjkCuvjMyeDwjzqOtRixUoFpQhsFqJGm6vfk.png', 'Dreaming cat', '72icpjkc-midjourney-6-a-cinematic-shot-of-a-fluffy-white-could-foating-in-the-air-a-geogeous-cat-is-comfortably-sleeping-on-the', 'A cinematic shot of a fluffy white could foating in the air, a geogeous cat is comfortably sleeping on the cloud, the backdrop is a sunset beach, the sky is full of colors, dramatis personae, hyper realistic, 8k --ar 16:9 --style raw', '3D / Renders', 816, 1456, 'Midjourney', '6', '2024-08-13 05:44:05', false, NULL, '2024-08-13 05:44:05', '2024-08-16 06:06:44', 4),
(16, 4, 'uploads/YVufp8HexUaMQseq4X8Zm6THJ6Li0qBgNAYAiXoN.png', NULL, 'yvufp8he-midjourney-niji-v6-photorealistic-in-the-style-of-shun-saeki-and-artgerm-cartoon-strip-featuring-the-beauteous-aztec-queen-miahuaxihuitl-as-a-prisoner', 'Photorealistic, in the style of Shun Saeki and Artgerm, cartoon strip featuring the beauteous Aztec Queen Miahuaxihuitl as a prisoner of the demonic Camazotz inside a large Chichimeca temple, 8k, UHD, digital --ar 3:2 --s 999 --style raw --niji 6', 'Anime', 896, 1344, 'Midjourney', 'Niji V6', '2024-08-13 05:46:34', false, NULL, '2024-08-13 05:46:34', '2024-08-15 03:12:05', 4),
(17, 4, 'uploads/Zh849wOkLUuWuZWzMTa13lD6e4QfSeccHisMLTQ8.png', NULL, 'zh849wok-dalle-3-a-desert-environment-the-desert-at-night-with-distant-sandstorms-on-the-horizon-leica-unreal-engine-ultra-detailed-cinematic-movie', 'A desert environment, the desert at night with distant sandstorms on the horizon, Leica, unreal engine, ultra detailed, cinematic, movie poster', 'Landscapes', 1024, 1024, 'DALL•E', '3', '2024-08-13 05:47:51', false, NULL, '2024-08-13 05:47:51', '2024-08-14 00:10:42', 2),
(18, 2, 'uploads/7IpQRGgc8bn9aMuoK5dh2Ht7MyNxRp5pV22ey0hQ.png', 'Native Gothic Fashion', '7ipqrggc-dalle-3-a-little-girl-with-pale-skin-blue-eyes-and-white-hair-in-buns-wearing-black-decorated-with-gold-embroidery-ornament', 'A little girl with pale skin, blue eyes and white hair in buns wearing black decorated with gold embroidery ornament of stars. She has horns on her head. In the style of detailed character illustrations and fantasy-inspired art. Hyper-realistic portraits in the style of toycore, princesses and gothic fashion', 'Fashion', 1312, 928, 'DALL•E', '3', '2024-08-13 05:50:10', true, NULL, '2024-08-13 05:50:10', '2024-08-20 08:17:09', 7),
(19, 1, 'uploads/86JsJL8s29z4439jGGPf2TWC0Ega0R3MQ6rLpjG1.png', 'Demon slayer blue hair', '86jsjl8s-dalle-3-a-young-man-with-blue-hair-and-blue-eyes-in-the-art-style-of-demon-slayer', 'A young man with blue hair and blue eyes, in the art style of demon slayer', 'Anime', 1024, 1024, 'DALL•E', '3', '2024-08-13 05:56:01', false, NULL, '2024-08-13 05:56:01', '2024-08-16 23:24:06', 10),
(20, 3, 'uploads/769HA0ASR7mpaq9FxRth4armEwEV6vFwfhBJlqS1.png', 'Corporate Logo', '769ha0as-dalle-3-corporate-lettermark-bichromatic-logo-with-graphic-symbols-house-roof-sun-sea-logo-design-vector-logo-modern-clean-minimalism', 'Corporate lettermark bichromatic logo with graphic symbols, house roof, Sun, Sea, logo design, vector logo, modern, clean, minimalism', 'Logos, Icons, & Design', 1024, 1024, 'DALL•E', '3', '2024-08-13 19:42:38', true, NULL, '2024-08-13 19:42:38', '2024-08-20 14:16:37', 5),
(21, 4, 'uploads/sf2fxjD6JLfzvKs8zfOUOtKlMXHMDJy5XkOo2HoX.png', NULL, 'sf2fxjd6-stable-diffusion-xl-turbo-cleopatra-reading-a-book-lying-under-a-palm-tree-on-the-banks-of-the-nile-neutral-colors-beige-white-ar-32', 'Cleopatra reading a book lying under a palm tree on the banks of the Nile, neutral colors, beige, white --ar 3:2', 'Concept Art', 896, 1344, 'Stable Diffusion', 'XL Turbo', '2024-08-14 00:09:55', false, NULL, '2024-08-14 00:09:55', '2024-08-14 02:13:24', 4),
(22, 5, 'uploads/QKDO5JKZVDOpMdQq6BF2pcRemdKb5YleEGGVAb9T.png', 'Minimal kitchen design', 'qkdo5jkz-dalle-3-minimal-and-organic-interior-design-kitchen-sleek-and-polished-surfaces-rounded-and-bulbous-shapes-simple-pastel-colors-harmonious-designs-and', 'Minimal and organic interior design kitchen, sleek and polished surfaces, rounded and bulbous shapes, simple pastel colors, harmonious designs and tableware, photograph', 'Interior Design', 896, 1344, 'DALL•E', '3', '2024-08-14 00:22:54', false, NULL, '2024-08-14 00:22:54', '2024-08-20 17:30:29', 7),
(23, 1, 'uploads/DA8EWqK2gsJ5s7BfPxlHU1ekxamU3n2pNp5cnGRY.png', NULL, 'da8ewqk2-dalle-2-a-girl-stands-with-her-head-in-a-box-surrounded-by-butterflies-and-falling-pieces-of-paper-the-illustration-style', 'A girl stands with her head in a box, surrounded by butterflies and falling pieces of paper. The illustration style is simple and colorful. She wears blue shorts and an orange T-shirt, has long hair, looks sad but determined as she walks forward, while outside there is a vast expanse of darkness around her.', 'Character Design', 1344, 896, 'DALL•E', '2', '2024-08-14 00:33:39', false, NULL, '2024-08-14 00:33:39', '2024-08-20 07:55:41', 99);
(24, 4, 'uploads/zZvF7hp4k59RfMcWqBIFfGNgiBHWjQWTyH2O75JM.png', 'Cleopatra', 'zzvf7hp4-midjourney-4-goddess-cleopatra-walking-in-desert-epic-cinematic-scene-cinematography-anime-style-noon-time-strong-scorching-sunlight-long-shadow-white-backdrops', 'Goddess Cleopatra walking in desert, epic, cinematic scene, cinematography, anime style, noon time, strong scorching sunlight, long shadow, white backdrops, Close up image, portrait, front view', 'Portraits', 960, 1200, 'Midjourney', '4', '2024-08-14 01:02:05', false, NULL, '2024-08-14 01:02:05', '2024-08-20 18:36:52', 27),
(25, 2, 'uploads/SeLMNRQvslwbgZ0Dvzt87boxOYv7ffeErO2HSDcD.png', NULL, 'selmnrqv-midjourney-6-a-girl-is-riding-bicycle-sunflowers-beside-the-road-a-bus-stand-the-sun-is-shining-bright-the-girl-is', 'A girl is riding bicycle. Sunflowers beside the road. A bus stand. The sun is shining bright. The girl is wearing a bucket hat. Ghibli style. HAYAO Miyazaki Style', 'Anime', 1024, 1024, 'Midjourney', '6', '2024-08-14 01:05:07', false, NULL, '2024-08-14 01:05:07', '2024-08-20 17:36:20', 18);

INSERT INTO "post_like" ("id", "user_id", "post_id", "created_at", "updated_at") VALUES
(1, 3, 4, '2024-08-13 05:09:10', '2024-08-13 05:09:10'),
(2, 3, 1, '2024-08-13 05:09:18', '2024-08-13 05:09:18'),
(5, 4, 1, '2024-08-13 05:16:49', '2024-08-13 05:16:49'),
(6, 4, 4, '2024-08-13 05:16:54', '2024-08-13 05:16:54'),
(7, 4, 6, '2024-08-13 05:16:58', '2024-08-13 05:16:58'),
(8, 4, 7, '2024-08-13 05:17:06', '2024-08-13 05:17:06'),
(9, 1, 8, '2024-08-13 05:19:09', '2024-08-13 05:19:09'),
(10, 1, 3, '2024-08-13 05:19:13', '2024-08-13 05:19:13'),
(11, 1, 4, '2024-08-13 05:19:14', '2024-08-13 05:19:14'),
(12, 1, 6, '2024-08-13 05:19:22', '2024-08-13 05:19:22'),
(13, 1, 19, '2024-08-13 05:56:31', '2024-08-13 05:56:31'),
(25, 3, 19, '2024-08-13 18:14:21', '2024-08-13 18:14:21'),
(26, 3, 13, '2024-08-13 18:14:30', '2024-08-13 18:14:30'),
(27, 1, 13, '2024-08-13 21:17:59', '2024-08-13 21:17:59'),
(28, 1, 18, '2024-08-13 21:18:30', '2024-08-13 21:18:30'),
(29, 4, 19, '2024-08-14 00:10:53', '2024-08-14 00:10:53'),
(30, 4, 9, '2024-08-14 00:10:58', '2024-08-14 00:10:58'),
(31, 4, 11, '2024-08-14 00:57:25', '2024-08-14 00:57:25'),
(33, 4, 16, '2024-08-14 00:57:52', '2024-08-14 00:57:52'),
(34, 2, 25, '2024-08-14 01:08:21', '2024-08-14 01:08:21'),
(35, 2, 1, '2024-08-14 01:08:33', '2024-08-14 01:08:33'),
(36, 2, 4, '2024-08-14 01:08:36', '2024-08-14 01:08:36'),
(37, 2, 11, '2024-08-14 01:08:44', '2024-08-14 01:08:44'),
(38, 2, 15, '2024-08-14 01:08:49', '2024-08-14 01:08:49'),
(40, 3, 23, '2024-08-15 20:38:03', '2024-08-15 20:38:03');


--
-- Dumping data for table "roles"
--

INSERT INTO "roles" ("id", "name", "created_at", "updated_at") VALUES
(1, 'admin', '2024-08-13 00:49:10', '2024-08-13 00:49:10'),
(2, 'editor', '2024-08-13 00:50:29', '2024-08-13 00:50:29'),
(3, 'author', '2024-08-13 00:53:43', '2024-08-13 00:53:43');

-- --------------------------------------------------------

--
-- Table structure for table "role_user"
--

--
-- Dumping data for table "role_user"
--

INSERT INTO "role_user" ("id", "user_id", "role_id", "created_at", "updated_at") VALUES
(1, 1, 1, NULL, NULL),
(2, 3, 3, NULL, NULL),
(3, 2, 3, NULL, NULL),
(4, 2, 2, NULL, NULL),
(5, 2, 3, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table "sessions"
--



--
-- Dumping data for table "sessions"
--

-- INSERT INTO "sessions" ("id", "user_id", "ip_address", "user_agent", "payload", "last_activity") VALUES
-- ('6CQh1i4Ud5xYIv9xm3GNWbXbsLmI1c0ySHnec6TL', NULL, '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10.15; rv:128.0) Gecko/20100101 Firefox/128.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiWERDbEVURHR1aDJJdDhIZEtORGQ2aVN1Z3ZnWndKNTlaMFhJRkx3WiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDQ6Imh0dHA6Ly9sb2NhbGhvc3QvZGFsbGUtaGVscGVyLXByb2plY3QvcHVibGljIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1724201908),
-- ('b6Yy6B9CtpnYPgmECyJvbo653zBFUIlKrXeNJ0nX', NULL, '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10.15; rv:128.0) Gecko/20100101 Firefox/128.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoibklmNDU3RmxlRGxMYUduakp2M2tvbTFrTG9iQ1d3V3pDNURIT2wzUCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDQ6Imh0dHA6Ly9sb2NhbGhvc3QvZGFsbGUtaGVscGVyLXByb2plY3QvcHVibGljIjt9fQ==', 1724209795);

-- --------------------------------------------------------

--
-- Table structure for table "users"
--


--
-- Dumping data for table "users"
--

-- INSERT INTO "users" ("id", "name", "email", "email_verified_at", "password", "two_factor_secret", "two_factor_recovery_codes", "two_factor_confirmed_at", "remember_token", "current_team_id", "profile_photo_path", "created_at", "updated_at") VALUES
-- (1, 'Admin', 'admin@test.com', '2024-08-09 04:34:08', '$2y$12$FrBK7UKtl739ZfUoEDbdBOgOMcrLI8xe1/Wwweom1MDnF4dozazbW', NULL, NULL, NULL, 'DzL1DHcibQEVIJXhO144gqj9IBGBG5A4XsD30MVwun5QMeH42kGeGlK5h8pd', NULL, NULL, '2024-08-08 22:27:27', '2024-08-09 04:34:08'),
-- (2, 'Jane Doe', 'jdoe@test.com', NULL, '$2y$12$Enet7Cd7Pm3GJeUrAw56MOd/YBggRGmb7diQ0bOcKR6LGGfZB4x5y', NULL, NULL, NULL, NULL, NULL, 'profile-photos/3C3MgerdrGMKPwao3nCkEW4oMcv2dCgs1gjm8qtb.jpg', '2024-08-13 02:10:14', '2024-08-16 23:22:53'),
-- (3, 'Patty', 'patty@test.com', NULL, '$2y$12$IoSYEo2A1o/a29vkrn0mlOC0DvnC4MT1ppu5CKpTt2FN.ruQ7bNE2', NULL, NULL, NULL, NULL, NULL, 'profile-photos/n86k5q9t8Cz7dFwlMEpSGMiPjJBsuib034ioL1bI.jpg', '2024-08-13 02:12:16', '2024-08-15 20:36:37'),
-- (4, 'Stephan M.', 'steph@test.com', NULL, '$2y$12$vqmHvAFhzl1SdC/aySwvSuvZJ4BPbpktu7ZFTrsBtFKwlwmM/gCgm', NULL, NULL, NULL, NULL, NULL, NULL, '2024-08-13 05:16:33', '2024-08-13 21:19:15'),
-- (5, 'Jason', 'jason@test.com', NULL, '$2y$12$fiMCa7IQTEJ8TWCsvcFhIuxoCFXieMfprjopFaBV3NustdYyFEPWO', NULL, NULL, NULL, NULL, NULL, NULL, '2024-08-13 20:25:08', '2024-08-13 20:25:08');




/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
