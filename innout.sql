-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 02, 2020 at 12:42 PM
-- Server version: 8.0.20
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `innout`
--

-- --------------------------------------------------------

--
-- Table structure for table `emails`
--

CREATE TABLE `emails` (
  `id` bigint UNSIGNED NOT NULL,
  `from` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `to` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `emails`
--

INSERT INTO `emails` (`id`, `from`, `to`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(1, '1', 'test@test.com', 'kjsdsjh', '<p>sdsdsd</p>', '2020-10-01 00:42:12', '2020-10-01 00:42:12'),
(2, '1', 'test@test.com', 'kjsdsjh', '<p>gsfsdf</p>', '2020-10-01 00:43:18', '2020-10-01 00:43:18'),
(3, '1', 'test@test.com', 'sdsd', '<p>sdjkshdsjkdh</p>', '2020-10-01 00:47:32', '2020-10-01 00:47:32'),
(4, '1', 'test@test.com', 'sdsds', '<p>sdsdsd</p>', '2020-10-01 00:50:42', '2020-10-01 00:50:42'),
(5, '1', 'test@test.com', 'dfdfd', '<p>ssdsdsds</p>', '2020-10-01 05:35:39', '2020-10-01 05:35:39'),
(6, '1', 'test@test.com', 'afsfd', '<p>sfdsfsdf</p>', '2020-10-01 05:37:58', '2020-10-01 05:37:58'),
(7, '1', 'test@test.com', 'afsfd', '<p>sdsdsd</p>', '2020-10-01 05:39:11', '2020-10-01 05:39:11'),
(8, '1', 'test@test.com', 'afsfd', '<p>dfsfsdfsdf</p>', '2020-10-01 05:47:52', '2020-10-01 05:47:52');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `how_works`
--

CREATE TABLE `how_works` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `how_works`
--

INSERT INTO `how_works` (`id`, `name`, `body`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Rent', '<p class=\"pt-3\">consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et doloreconsetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore </p>\r\n<p>consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et doloreconsetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore  </p>', '2020-10-01 08:18:43', '2020-10-01 08:18:43', NULL),
(2, 'Buy', '<p class=\"pt-3\">consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et doloreconsetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore </p>\r\n<p>consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et doloreconsetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore  </p>', '2020-10-01 08:30:33', '2020-10-01 08:30:33', NULL),
(3, 'Construction', '<p class=\"pt-3\">consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et doloreconsetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore </p>\r\n<p>consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et doloreconsetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore  </p>', '2020-10-01 08:30:33', '2020-10-01 08:30:33', NULL),
(4, 'Rental', '<p class=\"pt-3\">consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et doloreconsetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore </p>\r\n<p>consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et doloreconsetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore  </p>', '2020-10-01 08:30:33', '2020-10-01 08:30:33', NULL),
(5, 'Sales', '<p class=\"pt-3\">consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et doloreconsetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore </p>\r\n<p>consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et doloreconsetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore  </p>', '2020-10-01 08:30:33', '2020-10-01 08:30:33', NULL),
(6, 'Distress Sales', '<p class=\"pt-3\">consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et doloreconsetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore </p>\r\n<p>consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et doloreconsetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore  </p>', '2020-10-01 08:30:33', '2020-10-01 08:30:33', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` bigint UNSIGNED NOT NULL,
  `sender_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `receiver_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `sender_id`, `receiver_id`, `created_at`, `updated_at`) VALUES
(1, '1', '3', '2020-09-30 11:36:28', '2020-09-30 11:36:28'),
(2, '1', '5', '2020-09-30 11:16:10', '2020-09-30 11:16:10'),
(3, '3', '3', '2020-09-30 15:48:29', '2020-09-30 15:48:29'),
(4, '1', '4', '2020-10-01 17:48:47', '2020-10-01 17:48:47'),
(5, '4', '3', '2020-10-01 17:49:10', '2020-10-01 17:49:10');

-- --------------------------------------------------------

--
-- Table structure for table `message_comments`
--

CREATE TABLE `message_comments` (
  `id` bigint UNSIGNED NOT NULL,
  `message_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `message_comments`
--

INSERT INTO `message_comments` (`id`, `message_id`, `user_id`, `message`, `created_at`, `updated_at`) VALUES
(1, '1', '1', 'sdsdsdsd', '2020-09-30 10:42:55', '2020-09-30 10:42:55'),
(2, '1', '3', 'sdsdsdsdsdfsdf', '2020-09-30 10:48:38', '2020-09-30 10:48:38'),
(3, '1', '1', 'dfsdfsdffsdfds', '2020-09-30 10:55:54', '2020-09-30 10:55:54'),
(4, '1', '1', 'dfsdfsdfsdf', '2020-09-30 10:56:46', '2020-09-30 10:56:46'),
(5, '1', '1', 'how u doing?', '2020-09-30 23:16:11', '2020-09-30 23:16:11'),
(6, '1', '3', 'am fine and you?', '2020-09-30 23:16:20', '2020-09-30 23:16:20'),
(7, '1', '1', 'hello user?', '2020-10-01 07:58:20', '2020-10-01 07:58:20'),
(8, '1', '3', 'am fine admin and you?', '2020-10-01 07:58:33', '2020-10-01 07:58:33'),
(9, '1', '1', 'hello test', '2020-10-01 17:48:53', '2020-10-01 17:48:53'),
(10, '1', '4', 'am fine and you admin', '2020-10-01 17:49:24', '2020-10-01 17:49:24'),
(11, '4', '1', 'wassup', '2020-10-01 18:09:09', '2020-10-01 18:09:09'),
(12, '4', '4', 'am fine and u', '2020-10-01 18:09:18', '2020-10-01 18:09:18');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2014_10_12_100000_create_password_resets_table', 2),
(5, '2016_06_01_000001_create_oauth_auth_codes_table', 3),
(6, '2016_06_01_000002_create_oauth_access_tokens_table', 3),
(7, '2016_06_01_000003_create_oauth_refresh_tokens_table', 3),
(8, '2016_06_01_000004_create_oauth_clients_table', 3),
(9, '2016_06_01_000005_create_oauth_personal_access_clients_table', 3),
(10, '2020_09_30_110304_create_messages_table', 3),
(11, '2020_09_30_110325_create_message_comments_table', 3),
(13, '2020_09_30_171620_create_emails_table', 4),
(14, '2020_09_27_140615_create_user_requests_table', 5),
(15, '2020_10_01_080719_create_how_works_table', 6);

-- --------------------------------------------------------

--
-- Table structure for table `oauth_access_tokens`
--

CREATE TABLE `oauth_access_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `client_id` bigint UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_auth_codes`
--

CREATE TABLE `oauth_auth_codes` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `client_id` bigint UNSIGNED NOT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_clients`
--

CREATE TABLE `oauth_clients` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `secret` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `redirect` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_access_client` tinyint(1) NOT NULL,
  `password_client` tinyint(1) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_personal_access_clients`
--

CREATE TABLE `oauth_personal_access_clients` (
  `id` bigint UNSIGNED NOT NULL,
  `client_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_refresh_tokens`
--

CREATE TABLE `oauth_refresh_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `access_token_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `last_name`, `email`, `phone_number`, `role`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Ayo', 'Joshua', 'admin@admin.com', '090824444', 'Admin', NULL, '$2y$10$ih.vPa7.i93X0KVh1I3VHuneInY4pGzsth8YKR9LooE2Rc8dYhsO2', NULL, '2020-09-27 15:23:53', '2020-09-27 15:23:53', NULL),
(3, 'John', 'Doe', 'user@user.com', '090824444', 'User', NULL, '$2y$10$ih.vPa7.i93X0KVh1I3VHuneInY4pGzsth8YKR9LooE2Rc8dYhsO2', NULL, '2020-09-27 15:23:53', '2020-09-27 15:23:53', NULL),
(4, 'Test', 'Test Last name', 'test@test.com', '090824444', 'User', NULL, '$2y$10$CNw8.UmgKou/GmovRrR70esE8UL4jGy4rqMMHc0yKTQFsZ6MXjMPO', NULL, '2020-10-01 17:47:42', '2020-10-01 17:47:42', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_requests`
--

CREATE TABLE `user_requests` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `request_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `requests` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_requests`
--

INSERT INTO `user_requests` (`id`, `user_id`, `request_type`, `requests`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 3, 'Construction', '{\"country\":\"Country\",\"about_project\":\"sfshafjkhfkjhfadff\",\"have_land\":\"Yes\"}', 'Pending', '2020-10-01 06:16:56', '2020-10-01 06:54:20', NULL),
(2, 3, 'Construction', '{\"country\":\"Country\",\"about_project\":\"skdjsdklsjdk\",\"have_land\":\"Yes\"}', 'Completed', '2020-10-01 07:47:04', '2020-10-01 07:48:38', NULL),
(3, 4, 'Construction', '{\"country\":\"Country\",\"about_project\":\"submisson\",\"have_land\":\"No\"}', 'Completed', '2020-10-01 17:47:42', '2020-10-01 17:49:46', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `emails`
--
ALTER TABLE `emails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `how_works`
--
ALTER TABLE `how_works`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `message_comments`
--
ALTER TABLE `message_comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oauth_access_tokens`
--
ALTER TABLE `oauth_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_access_tokens_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_auth_codes`
--
ALTER TABLE `oauth_auth_codes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_auth_codes_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_clients_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oauth_refresh_tokens`
--
ALTER TABLE `oauth_refresh_tokens`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_requests`
--
ALTER TABLE `user_requests`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_requests_user_id_foreign` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `emails`
--
ALTER TABLE `emails`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `how_works`
--
ALTER TABLE `how_works`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `message_comments`
--
ALTER TABLE `message_comments`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user_requests`
--
ALTER TABLE `user_requests`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `user_requests`
--
ALTER TABLE `user_requests`
  ADD CONSTRAINT `user_requests_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
