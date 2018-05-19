-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 17, 2018 at 04:04 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel_form`
--

-- --------------------------------------------------------

--
-- Table structure for table `channels`
--

CREATE TABLE `channels` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `channels`
--

INSERT INTO `channels` (`id`, `title`, `created_at`, `updated_at`) VALUES
(1, 'Laravel', '2018-05-13 20:53:00', '2018-05-13 20:53:00'),
(2, 'Vuejs', '2018-05-13 20:53:00', '2018-05-13 20:53:00'),
(3, 'CSS3', '2018-05-13 20:53:00', '2018-05-13 20:53:00'),
(4, 'Javascript', '2018-05-13 20:53:00', '2018-05-13 20:53:00'),
(5, 'Php Testing', '2018-05-13 20:53:00', '2018-05-13 20:53:00'),
(6, 'Spark', '2018-05-13 20:53:00', '2018-05-13 20:53:00'),
(7, 'Lumen', '2018-05-13 20:53:00', '2018-05-13 20:53:00'),
(8, 'Forge', '2018-05-13 20:53:00', '2018-05-13 20:53:00');

-- --------------------------------------------------------

--
-- Table structure for table `discussions`
--

CREATE TABLE `discussions` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `channel_id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `discussions`
--

INSERT INTO `discussions` (`id`, `user_id`, `channel_id`, `title`, `slug`, `content`, `created_at`, `updated_at`) VALUES
(1, 2, 1, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'lorem-ipsum-dolor-sit-amet-consectetur-adipiscing-elit', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam nulla lectus, ultricies ac purus nec, ultricies sodales nisi. Pellentesque magna enim, sagittis at posuere in, tempus vitae dolor. Praesent at arcu in nunc sagittis consequat.', '2018-05-13 20:53:00', '2018-05-13 20:53:00'),
(2, 2, 2, 'Sed tristique nibh eu elit elementum facilisis.', 'sed-tristique-nibh-eu-elit-elementum-facilisis', 'Etiam pellentesque, turpis sed tempus suscipit, est est porttitor turpis, eget accumsan sem ipsum nec nisl. Quisque quis lobortis risus.', '2018-05-13 20:53:00', '2018-05-13 20:53:00'),
(3, 1, 3, 'Mauris hendrerit nibh id ligula accumsan eleifend.', 'mauris-hendrerit-nibh-id-ligula-accumsan-eleifend', 'a porta arcu. Maecenas nec blandit mi. Fusce in ante cursus, aliquet purus vehicula, malesuada tellus. Nunc cursus orci tortor, non tincidunt leo accumsan nec.', '2018-05-13 20:53:00', '2018-05-13 20:53:00'),
(4, 1, 4, 'Aliquam viverra sapien ac eros pellentesque, ac fringilla arcu molestie.', 'aliquam-viverra-sapien-ac-eros-pellentesque-ac-fringilla-arcu-molestie', 'Nulla non pellentesque lorem. Aliquam fringilla aliquam risus a aliquet. Suspendisse in tempor quam. Fusce scelerisque tristique nulla eget posuere. Sed hendrerit nibh in arcu porttitor gravida.', '2018-05-13 20:53:00', '2018-05-13 20:53:00'),
(5, 2, 5, 'Nunc maximus eros sit amet magna efficitur aliquet.', 'nunc-maximus-eros-sit-amet-magna-efficitur-aliquet', 'In malesuada, mauris eu tempus laoreet, nunc ligula facilisis ante, id tincidunt sapien purus sit amet ligula. Integer tempor faucibus lacinia.', '2018-05-13 20:53:00', '2018-05-13 20:53:00');

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

CREATE TABLE `likes` (
  `id` int(10) UNSIGNED NOT NULL,
  `reply_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `likes`
--

INSERT INTO `likes` (`id`, `reply_id`, `user_id`, `created_at`, `updated_at`) VALUES
(2, 2, 1, NULL, NULL),
(3, 7, 1, '2018-05-16 13:03:27', '2018-05-16 13:03:27'),
(4, 1, 1, '2018-05-16 13:29:12', '2018-05-16 13:29:12'),
(6, 3, 1, '2018-05-16 19:40:47', '2018-05-16 19:40:47'),
(7, 6, 1, '2018-05-16 19:41:11', '2018-05-16 19:41:11');

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
(49, '2014_10_12_000000_create_users_table', 1),
(50, '2014_10_12_100000_create_password_resets_table', 1),
(51, '2018_05_05_140620_create_oauth_identities_table', 1),
(52, '2018_05_05_164110_create_channels_table', 1),
(53, '2018_05_05_164413_create_discussions_table', 1),
(54, '2018_05_05_164452_create_replies_table', 1),
(55, '2018_05_15_011117_create_likes_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `oauth_identities`
--

CREATE TABLE `oauth_identities` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `provider_user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `provider` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `access_token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_identities`
--

INSERT INTO `oauth_identities` (`id`, `user_id`, `provider_user_id`, `provider`, `access_token`, `created_at`, `updated_at`) VALUES
(1, 3, '19898280', 'github', 'b260d6356c4a9c6c45e177a84d44c1985b18378e', '2018-05-14 19:12:12', '2018-05-14 19:12:12');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `replies`
--

CREATE TABLE `replies` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `discussion_id` int(10) UNSIGNED NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `replies`
--

INSERT INTO `replies` (`id`, `user_id`, `discussion_id`, `content`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'Donec eu ligula risus. Ut eleifend in lectus quis vestibulum. Nullam id laoreet orci, pharetra pretium ex. Nunc pellentesque, sapien at malesuada consequat.', '2018-05-13 20:53:00', '2018-05-13 20:53:00'),
(2, 1, 2, 'tortor massa scelerisque enim, a lacinia mauris diam non libero. Praesent auctor dolor vel nisi placerat pellentesque. Cras gravida.', '2018-05-13 20:53:00', '2018-05-13 20:53:00'),
(3, 2, 3, 'quam a justo bibendum dapibus non vel tellus. Suspendisse id volutpat ligula. Duis varius elit ut porta cursus. Sed venenatis augue eget.', '2018-05-13 20:53:00', '2018-05-13 20:53:00'),
(4, 2, 4, 'Aenean ultrices odio at dapibus ullamcorper. Vivamus pretium congue urna at ultrices. Morbi non erat ex. Cras ut nunc risus. Nullam porttitor.', '2018-05-13 20:53:00', '2018-05-13 20:53:00'),
(5, 1, 5, 'Nunc tellus felis, bibendum non eleifend eget, ultricies vitae dolor. Nunc posuere egestas eleifend. Maecenas mattis risus quis ipsum rhoncus maximus.', '2018-05-13 20:53:00', '2018-05-13 20:53:00'),
(6, 1, 3, 'good', '2018-05-14 19:01:47', '2018-05-14 19:01:47'),
(7, 1, 1, 'good', '2018-05-14 19:03:07', '2018-05-14 19:03:07'),
(8, 1, 1, 'm ipsum dolor sit amet, consectetur adipiscing elit. Nam nulla lectus, ultricies ac purus nec, ultricies sodales nisi. Pellentesque magna enim, sagittis at posuere in, tempus vitae dolor. Praesent at arcu in nunc sagittis consequat.m ipsum dolor sit amet, consectetur adipiscing elit. Nam nulla lectus, ultricies ac purus nec, ultricies sodales nisi. Pellentesque magna enim, sagittis at posuere in, tempus vitae dolor. Praesent at arcu in nunc sagittis consequat.m ipsum dolor sit amet, consectetur adipiscing elit. Nam nulla lectus, ultricies ac purus nec, ultricies sodales nisi. Pellentesque magna enim, sagittis at posuere in, tempus vitae dolor. Praesent at arcu in nunc sagittis consequat.m ipsum dolor sit amet, consectetur adipiscing elit. Nam nulla lectus, ultricies ac purus nec, ultricies sodales nisi. Pellentesque magna enim, sagittis at posuere in, tempus vitae dolor. Praesent at arcu in nunc sagittis consequat.', '2018-05-14 19:07:12', '2018-05-14 19:07:12');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin` tinyint(1) NOT NULL DEFAULT '0',
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `avatar`, `admin`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'avatars/avatar.jpg', 1, 'lelinbabu784@gmail.com', '$2y$10$0RWrysBaQ2/fUe0T1ZqMS.lFT6VyfmghMpDsh9l6GubUgv4UaZCdq', '7DVbcxsFwNdQeTuuOcdXSd1nMao3A6ghAD1LuWAzXIhNKAxF3Aslp4sgbNkC', '2018-05-13 20:52:59', '2018-05-13 20:52:59'),
(2, 'rashed', 'avatars/avatar.jpg', 0, 'diitrashed@gmail.com', '$2y$10$l2dfvD3/yDf5fnZrzIsSTe149DpdST3G3N.jELwPmcgzwxlBko542', NULL, '2018-05-13 20:53:00', '2018-05-13 20:53:00'),
(3, 'Md. Rashedul Islam', 'https://avatars0.githubusercontent.com/u/19898280?v=4', 0, 'lelin.rashed784@gmail.com', NULL, 'l8yuzoo4o6EjH5lXP6xO4x1afN390AMYlmqscERoSjUsAylptdavN28BNQEh', '2018-05-14 19:12:12', '2018-05-14 19:12:12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `channels`
--
ALTER TABLE `channels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `discussions`
--
ALTER TABLE `discussions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oauth_identities`
--
ALTER TABLE `oauth_identities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `replies`
--
ALTER TABLE `replies`
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
-- AUTO_INCREMENT for table `channels`
--
ALTER TABLE `channels`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `discussions`
--
ALTER TABLE `discussions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `likes`
--
ALTER TABLE `likes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `oauth_identities`
--
ALTER TABLE `oauth_identities`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `replies`
--
ALTER TABLE `replies`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
