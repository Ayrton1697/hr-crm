-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 06-07-2022 a las 20:11:41
-- Versión del servidor: 5.7.31
-- Versión de PHP: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `safari`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `applicants`
--

DROP TABLE IF EXISTS `applicants`;
CREATE TABLE IF NOT EXISTS `applicants` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cv_path` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `linkedin_url` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `applicants_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `applicants`
--

INSERT INTO `applicants` (`id`, `name`, `email`, `phone`, `cv_path`, `created_at`, `updated_at`, `linkedin_url`) VALUES
(1, 'Shad Schuppe', 'bobby.kub@hettinger.info', '(681) 849-0777', NULL, '2022-05-05 17:34:17', '2022-05-05 17:34:17', NULL),
(2, 'Candida Beer', 'mckenzie.darian@hotmail.com', '323-456-1380', NULL, '2022-05-05 17:34:17', '2022-05-05 17:34:17', NULL),
(3, 'Prof. Dino Corkery MD', 'macejkovic.lexus@hotmail.com', '(770) 813-4931', NULL, '2022-05-05 17:34:17', '2022-05-05 17:34:17', NULL),
(4, 'Ms. Elisa Swift', 'micaela.ratke@hotmail.com', '+1-743-905-9428', NULL, '2022-05-05 17:34:17', '2022-05-05 17:34:17', NULL),
(5, 'King Hansen', 'kovacek.arvel@mckenzie.biz', '+19205879458', NULL, '2022-05-05 17:34:17', '2022-05-05 17:34:17', NULL),
(6, 'Kelly Sanford', 'leuschke.tanner@hotmail.com', '+1.315.573.3835', NULL, '2022-05-05 17:34:17', '2022-05-05 17:34:17', NULL),
(7, 'Gerry Fahey', 'lindgren.gaylord@hotmail.com', '928.707.6680', NULL, '2022-05-05 17:34:17', '2022-05-05 17:34:17', NULL),
(8, 'Jayda Lowe', 'dejon30@towne.info', '(346) 387-5237', NULL, '2022-05-05 17:34:17', '2022-05-05 17:34:17', NULL),
(9, 'Dr. Durward Greenholt III', 'emiliano.yost@yahoo.com', '+17315803804', NULL, '2022-05-05 17:34:17', '2022-05-05 17:34:17', NULL),
(10, 'Joshuah Wilderman Sr.', 'jeff.feest@hotmail.com', '1-979-237-3038', NULL, '2022-05-05 17:34:17', '2022-05-05 17:34:17', NULL),
(11, 'Katelynn Spinka I', 'pauline76@yahoo.com', '+1-307-854-8681', NULL, '2022-05-05 17:34:17', '2022-05-05 17:34:17', NULL),
(12, 'Cordia Nitzsche', 'metz.helen@hermann.org', '1-860-771-0556', NULL, '2022-05-05 17:34:17', '2022-05-05 17:34:17', NULL),
(13, 'Luciano Mayert DVM', 'gaylord.myrna@shields.info', '+1 (484) 316-6991', NULL, '2022-05-05 17:34:17', '2022-05-05 17:34:17', NULL),
(14, 'Mr. Berta Fadel', 'kirstin97@osinski.com', '417.571.6041', NULL, '2022-05-05 17:34:17', '2022-05-05 17:34:17', NULL),
(15, 'Verona Frami Sr.', 'gmarks@turcotte.com', '1-240-346-3379', NULL, '2022-05-05 17:34:17', '2022-05-05 17:34:17', NULL),
(16, 'Modesta Pagac', 'parisian.sincere@waelchi.biz', '872.944.9030', NULL, '2022-05-05 17:34:17', '2022-05-05 17:34:17', NULL),
(17, 'Mrs. Yessenia Wuckert DDS', 'wuckert.barton@kshlerin.org', '+1-240-774-0149', NULL, '2022-05-05 17:34:17', '2022-05-05 17:34:17', NULL),
(18, 'Meaghan Boehm', 'edietrich@collier.com', '570-361-5867', NULL, '2022-05-05 17:34:17', '2022-05-05 17:34:17', NULL),
(19, 'Ellie Kris', 'cartwright.easter@yahoo.com', '458-875-2720', NULL, '2022-05-05 17:34:17', '2022-05-05 17:34:17', NULL),
(20, 'Dawn Effertz DVM', 'prohaska.myrtis@gleichner.com', '(906) 864-0403', NULL, '2022-05-05 17:34:17', '2022-05-05 17:34:17', NULL),
(21, 'Lillian Borer', 'nannie45@yahoo.com', '+1 (862) 969-6441', NULL, '2022-05-05 17:34:17', '2022-05-05 17:34:17', NULL),
(22, 'Eldridge Effertz MD', 'huel.ryley@pouros.com', '+1-540-661-2420', NULL, '2022-05-05 17:34:17', '2022-05-05 17:34:17', NULL),
(23, 'Dr. Amy Lehner V', 'dickinson.rebeka@yahoo.com', '570.246.0701', NULL, '2022-05-05 17:34:17', '2022-05-05 17:34:17', NULL),
(24, 'Braulio Kassulke', 'daniel.jude@schroeder.com', '(224) 568-4675', NULL, '2022-05-05 17:34:17', '2022-05-05 17:34:17', NULL),
(25, 'Elise Stamm II', 'boyer.laila@yahoo.com', '239-875-7875', NULL, '2022-05-05 17:34:17', '2022-05-05 17:34:17', NULL),
(26, 'Maureen Hammes', 'willard.bogisich@hotmail.com', '+1-980-212-6007', NULL, '2022-05-05 17:34:17', '2022-05-05 17:34:17', NULL),
(27, 'Prof. Alexzander Mills PhD', 'kelly.effertz@tromp.com', '+1 (989) 698-5777', NULL, '2022-05-05 17:34:17', '2022-05-05 17:34:17', NULL),
(28, 'Jalen Pollich', 'sswaniawski@hotmail.com', '+1.951.836.4317', NULL, '2022-05-05 17:34:17', '2022-05-05 17:34:17', NULL),
(29, 'Dr. Novella Koepp Jr.', 'evie.okon@hotmail.com', '1-903-480-3597', NULL, '2022-05-05 17:34:17', '2022-05-05 17:34:17', NULL),
(30, 'Pink Keeling', 'sierra.renner@langworth.com', '(715) 233-3527', NULL, '2022-05-05 17:34:17', '2022-05-05 17:34:17', NULL),
(31, 'Ayrton Steffich', 'ayrton.steffich@gmail.com', '+5491136002930', 'http://localhost/safari_group/safari/storage/app/cvs/1652740181Ayrton\'s Resume.pdf', '2022-05-05 17:34:28', '2022-05-17 01:29:41', 'http://localhost/safari_group/safari/public/JobPostings'),
(32, 'Ayrton Steffich', 'ayrton.asasasas@gmail.com', '+5491136002930', NULL, '2022-05-06 01:32:21', '2022-05-06 01:32:21', NULL),
(33, 'Juan Lape', 'lape@llape.com', '12121212', NULL, '2022-05-06 04:09:06', '2022-05-06 04:09:06', NULL),
(34, 'Carlos pereiraca', 'carlos@pereira.com', '12121212', 'http://localhost/safari_group/safari/storage/app/cvs/1652141214STEAM-FIFA22.PNG', '2022-05-10 03:05:39', '2022-05-10 03:06:54', NULL),
(35, 'Testing', 'testing.testing@gmail.com', '11456789', 'http://localhost/safari_group/safari/storage/app/cvs1652231219Ayrton\'s Resume.pdf', '2022-05-11 04:06:59', '2022-05-11 04:06:59', NULL),
(36, 'Testing', 'Testing@testing.com', '11435679', 'http://localhost/safari_group/safari/storage/app/cvs/1652231419Ayrton\'s Resume.pdf', '2022-05-11 04:08:09', '2022-05-11 04:10:19', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `applicant_JobPosting`
--

DROP TABLE IF EXISTS `applicant_JobPosting`;
CREATE TABLE IF NOT EXISTS `applicant_JobPosting` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `applicant_id` int(11) NOT NULL,
  `JobPosting_id` int(11) NOT NULL,
  `status` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT 'Pendiente',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=125 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `applicant_JobPosting`
--

INSERT INTO `applicant_JobPosting` (`id`, `applicant_id`, `JobPosting_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '', NULL, NULL),
(2, 1, 14, '', NULL, NULL),
(3, 2, 1, '', NULL, NULL),
(4, 2, 4, '', NULL, NULL),
(5, 3, 2, 'Activo', NULL, NULL),
(6, 3, 19, '', NULL, NULL),
(7, 4, 4, '', NULL, NULL),
(8, 4, 13, '', NULL, NULL),
(9, 5, 6, '', NULL, NULL),
(10, 5, 20, 'Rechazado', NULL, NULL),
(11, 6, 8, '', NULL, NULL),
(12, 6, 20, '', NULL, NULL),
(13, 7, 1, '', NULL, NULL),
(14, 7, 14, '', NULL, NULL),
(15, 8, 4, '', NULL, NULL),
(16, 8, 18, '', NULL, NULL),
(17, 9, 2, 'Rechazado', NULL, NULL),
(18, 9, 17, '', NULL, NULL),
(19, 10, 3, '', NULL, NULL),
(20, 10, 5, 'Activo', NULL, NULL),
(21, 11, 12, '', NULL, NULL),
(22, 11, 16, '', NULL, NULL),
(23, 12, 7, '', NULL, NULL),
(24, 12, 12, '', NULL, NULL),
(25, 13, 1, 'Activo', NULL, NULL),
(26, 13, 11, '', NULL, NULL),
(27, 14, 12, '', NULL, NULL),
(28, 14, 18, '', NULL, NULL),
(29, 15, 8, '', NULL, NULL),
(30, 15, 2, 'Rechazado', NULL, NULL),
(31, 16, 4, '', NULL, NULL),
(32, 16, 12, '', NULL, NULL),
(33, 17, 3, '', NULL, NULL),
(34, 17, 20, '', NULL, NULL),
(35, 18, 3, '', NULL, NULL),
(36, 18, 6, '', NULL, NULL),
(37, 19, 15, '', NULL, NULL),
(38, 19, 19, '', NULL, NULL),
(39, 20, 3, '', NULL, NULL),
(40, 20, 20, '', NULL, NULL),
(41, 21, 9, '', NULL, NULL),
(42, 21, 15, '', NULL, NULL),
(43, 22, 11, '', NULL, NULL),
(44, 22, 19, '', NULL, NULL),
(45, 23, 1, '', NULL, NULL),
(46, 23, 11, '', NULL, NULL),
(47, 24, 7, '', NULL, NULL),
(48, 24, 11, '', NULL, NULL),
(49, 25, 6, '', NULL, NULL),
(50, 25, 18, '', NULL, NULL),
(51, 26, 6, '', NULL, NULL),
(52, 26, 11, '', NULL, NULL),
(53, 27, 6, '', NULL, NULL),
(54, 27, 11, '', NULL, NULL),
(55, 28, 1, '', NULL, NULL),
(56, 28, 5, 'Activo', NULL, NULL),
(57, 29, 7, '', NULL, NULL),
(58, 29, 18, '', NULL, NULL),
(59, 30, 9, '', NULL, NULL),
(60, 30, 11, '', NULL, NULL),
(104, 31, 5, 'Activo', NULL, NULL),
(108, 31, 8, '', NULL, NULL),
(109, 31, 10, '', NULL, NULL),
(110, 31, 3, 'Activo', NULL, NULL),
(111, 32, 5, 'Activo', NULL, NULL),
(112, 31, 1, '', NULL, NULL),
(113, 31, 18, '', NULL, NULL),
(114, 33, 10, '', NULL, NULL),
(115, 31, 9, '', NULL, NULL),
(116, 31, 2, 'Pendiente', NULL, NULL),
(117, 31, 20, '', NULL, NULL),
(118, 31, 6, '', NULL, NULL),
(119, 31, 4, NULL, NULL, NULL),
(120, 34, 20, 'Activo', NULL, NULL),
(121, 35, 23, 'Rechazado', NULL, NULL),
(123, 36, 23, 'Activo', NULL, NULL),
(124, 31, 24, 'Activo', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `JobPostings`
--

DROP TABLE IF EXISTS `JobPostings`;
CREATE TABLE IF NOT EXISTS `JobPostings` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `currency` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `requirements` text COLLATE utf8mb4_unicode_ci,
  `hiring_modality` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `work_modality` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `english_level` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Básico',
  `seniority` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  PRIMARY KEY (`id`),
  KEY `JobPostings_user_id_foreign` (`user_id`),
  KEY `JobPostings_id_index` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `JobPostings`
--

INSERT INTO `JobPostings` (`id`, `name`, `company_name`, `description`, `location`, `currency`, `status`, `requirements`, `hiring_modality`, `work_modality`, `english_level`, `seniority`, `created_at`, `updated_at`, `user_id`) VALUES
(2, 'Sr Data Engineer', 'Mueller Group', 'Iure impedit optio totam dolorem.', 'Bolivia', 'USD', 'active', 'Excelente nivel de ingles', NULL, NULL, 'Básico', NULL, '2019-04-02 03:00:00', '2005-06-24 03:00:00', 1),
(3, 'Ssr Data Scientist', 'Brekke-Beatty', 'Alias fugiat nemo praesentium voluptatem id.', 'Dominica', 'EUR', 'inactive', NULL, NULL, NULL, 'Básico', NULL, '2011-06-25 03:00:00', '1981-07-27 03:00:00', 1),
(4, 'Ssr Data Scientist', 'Keebler Inc', 'Nihil deleniti sunt labore veritatis.', 'Pitcairn Islands', 'USD', 'inactive', NULL, NULL, NULL, 'Básico', NULL, '2003-02-09 03:00:00', '1997-01-02 03:00:00', 1),
(5, 'Jr Fullstack', 'Green and Sons', 'Occaecati et non occaecati est impedit.', 'Korea', 'ARS', 'active', NULL, NULL, NULL, 'Básico', NULL, '1999-05-12 03:00:00', '1971-05-20 03:00:00', 1),
(6, 'Sr Fullstack', 'Kulas Ltd', 'Et exercitationem at est temporibus.', 'Djibouti', 'EUR', 'active', NULL, NULL, NULL, 'Básico', NULL, '1977-01-26 03:00:00', '1999-01-26 03:00:00', 1),
(7, 'Ssr Data Scientist', 'Mitchell Group', 'Reiciendis unde velit labore non fuga.', 'Bermuda', 'EUR', 'inactive', NULL, NULL, NULL, 'Básico', NULL, '1973-07-27 03:00:00', '1978-03-20 03:00:00', 1),
(8, 'Ssr Data Scientist', 'Ernser and Sons', 'Ex nam blanditiis earum sequi esse molestiae.', 'Switzerland', 'USD', 'inactive', NULL, NULL, NULL, 'Básico', NULL, '2015-05-20 03:00:00', '2022-04-12 03:00:00', 1),
(9, 'Jr Fullstack', 'Lakin and Sons', 'Et in natus odit sed sunt.', 'Tonga', 'ARS', 'active', NULL, NULL, NULL, 'Básico', NULL, '1982-03-04 03:00:00', '1996-12-08 03:00:00', 1),
(10, 'Jr Fullstack', 'Mueller-Stanton', 'Similique ducimus nihil vitae praesentium in id.', 'Yemen', 'USD', 'active', NULL, NULL, NULL, 'Básico', NULL, '1985-01-25 03:00:00', '2007-01-12 03:00:00', 1),
(11, 'Sr Data Scientist', 'Muller-Jast', 'Et quo sapiente assumenda et.', 'Northern Mariana Islands', 'USD', 'inactive', NULL, NULL, NULL, 'Básico', NULL, '2002-12-13 03:00:00', '1990-01-05 03:00:00', 1),
(12, 'Jr Data Scientist', 'Feil Ltd', 'Sit quia est quo commodi.', 'Belize', 'EUR', 'active', NULL, NULL, NULL, 'Básico', NULL, '1998-01-13 03:00:00', '1979-12-28 03:00:00', 1),
(13, 'Jr Fullstack', 'Mohr, Wolff and Cruickshank', 'Sint quod vitae maiores autem.', 'Seychelles', 'EUR', 'inactive', NULL, NULL, NULL, 'Básico', NULL, '1983-07-25 03:00:00', '1993-12-04 03:00:00', 1),
(14, 'Sr Data Scientist', 'Smitham and Sons', 'Repellendus nihil animi optio vel rerum.', 'Martinique', 'USD', 'inactive', NULL, NULL, NULL, 'Básico', NULL, '1971-12-02 03:00:00', '1980-09-20 03:00:00', 1),
(15, 'Ssr Fullstack', 'Crist-Turner', 'Ut velit omnis et quaerat.', 'Hungary', 'USD', 'inactive', NULL, NULL, NULL, 'Básico', NULL, '1987-09-20 03:00:00', '1985-07-09 03:00:00', 1),
(16, 'Jr Data Engineer', 'Hegmann, Orn and Swaniawski', 'Officiis sapiente voluptas animi velit.', 'Rwanda', 'USD', 'inactive', NULL, NULL, NULL, 'Básico', NULL, '1973-12-17 03:00:00', '2005-05-21 03:00:00', 1),
(17, 'Jr Fullstack', 'Schmidt PLC', 'Rerum ea eos commodi.', 'Namibia', 'USD', 'inactive', NULL, NULL, NULL, 'Básico', NULL, '1994-10-19 03:00:00', '2018-06-15 03:00:00', 1),
(18, 'Ssr Data Scientist', 'Schowalter Inc', 'Voluptate amet quis sit.', 'Albania', 'USD', 'Activa', NULL, NULL, NULL, 'Básico', NULL, '2015-09-07 03:00:00', '2022-05-06 03:14:21', 1),
(19, 'Ssr Data Scientist', 'Hodkiewicz-Wunsch', 'Quas dolor non sed.', 'Sierra Leone', 'ARS', 'No activa', NULL, NULL, NULL, 'Básico', NULL, '1986-01-17 03:00:00', '2022-05-06 03:17:14', 1),
(20, 'Jr Data Engineer', 'Balistreri-Bailey', 'In rerum expedita neque et.', 'Venezuela', 'USD', 'active', NULL, NULL, NULL, 'Básico', NULL, '2019-12-26 03:00:00', '2001-09-10 03:00:00', 1),
(21, 'Jr. Data Rocker', 'RKD', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s', 'Argentina', 'ARS', 'Activa', '[\"\"]', NULL, NULL, 'Básico', NULL, '2022-05-09 03:06:07', '2022-05-11 04:05:44', 1),
(22, 'Jr. Data Rocker', 'Feil Ltda', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum', 'Argentina', 'EUR', 'Activa', '[\"\"]', NULL, 'Remote', 'Básico', NULL, '2022-05-10 03:24:33', '2022-05-11 04:05:52', 1),
(23, 'SUPER SENIOR Data Rocker', 'RKD', 'Lorem Ipsum', 'Belizea', 'EUR', 'Activa', '[\"\",\"AWS<\\/p>\",\"Bases de datos<\\/p>\",\"Python<\\/p>\"]', NULL, NULL, 'Básico', NULL, '2022-06-07 03:17:14', '2022-06-07 03:19:59', 1),
(24, 'SUPER SENIOR Data Rocker', 'Feil Ltda', 'Lorem Ipsum', 'Argentina', 'EUR', 'Activa', '[\"\",\"DATAMART\",\"Argoworkflow\",\"snowflake\",\"airbyte\",\"Python\",\"AWS\",\"Scala\",\"Hadoop\",\"GCP<\\/p>\",\"BigQuery<\\/p>\",\"Ingles perfecto<\\/p>\"]', NULL, NULL, 'Básico', NULL, '2022-06-07 03:19:39', '2022-06-07 03:31:25', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_04_29_181048_create_JobPostings_table', 1),
(6, '2022_05_05_021421_create_applicants_table', 1),
(7, '2022_05_05_121858_latest', 1),
(8, '2022_05_05_123018_applicant_JobPosting_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `role`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Sabina Borer', 'admin', 'funk.esperanza@example.net', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'l0GHOym617', '2022-05-05 17:34:16', '2022-05-05 17:34:16'),
(2, 'admin', 'user', 'admin@admin', '$2y$10$ulgfkbHRhj/vNfpHhcT4nuNGKSj4Yj6jtOU5OFif6gQcurpk2bV7S', NULL, '2022-05-06 01:35:52', '2022-05-06 01:35:52'),
(3, 'Jessica', 'user', 'jesicalogioco@safari-group.com', '$2y$10$rWzGkjBtWYilSE3MuQ1tF.JUFqsFGyN/nVsngjNg5cvXLCTeDb15a', NULL, '2022-07-06 22:58:35', '2022-07-06 22:58:35');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `JobPostings`
--
ALTER TABLE `JobPostings`
  ADD CONSTRAINT `JobPostings_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
