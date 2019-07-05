-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 05, 2019 at 04:42 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `new_blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default.png',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `image`, `created_at`, `updated_at`) VALUES
(5, 'Laravel update2', 'laravel-update2', 'laravel-update2-2019-06-01-5cf2a40fc120d-jpg', '2019-06-01 08:43:19', '2019-06-01 09:13:04'),
(6, 'php', 'php', 'php-2019-06-03-5cf52dd54b039-jpg', '2019-06-03 07:25:31', '2019-06-03 07:25:31'),
(7, 'html', 'html', 'html-2019-06-03-5cf52df8b8a05-jpg', '2019-06-03 07:26:01', '2019-06-03 07:26:01');

-- --------------------------------------------------------

--
-- Table structure for table `category_post`
--

CREATE TABLE `category_post` (
  `id` int(10) UNSIGNED NOT NULL,
  `post_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category_post`
--

INSERT INTO `category_post` (`id`, `post_id`, `category_id`, `created_at`, `updated_at`) VALUES
(2, 3, 6, '2019-06-03 07:31:59', '2019-06-03 07:31:59'),
(3, 3, 7, '2019-06-03 07:47:11', '2019-06-03 07:47:11'),
(4, 4, 6, '2019-06-03 09:17:55', '2019-06-03 09:17:55'),
(8, 6, 6, '2019-06-11 07:15:39', '2019-06-11 07:15:39'),
(9, 7, 5, '2019-06-12 07:38:20', '2019-06-12 07:38:20'),
(10, 7, 7, '2019-06-12 07:38:20', '2019-06-12 07:38:20'),
(11, 8, 6, '2019-06-12 07:39:55', '2019-06-12 07:39:55'),
(12, 8, 7, '2019-06-12 07:39:55', '2019-06-12 07:39:55'),
(13, 9, 6, '2019-06-15 04:57:41', '2019-06-15 04:57:41'),
(14, 9, 7, '2019-06-15 04:57:41', '2019-06-15 04:57:41'),
(15, 11, 6, '2019-06-15 05:06:02', '2019-06-15 05:06:02'),
(16, 12, 5, '2019-06-15 05:13:02', '2019-06-15 05:13:02'),
(17, 13, 5, '2019-06-15 05:16:04', '2019-06-15 05:16:04'),
(18, 14, 6, '2019-06-15 05:23:08', '2019-06-15 05:23:08'),
(19, 15, 6, '2019-06-15 05:28:14', '2019-06-15 05:28:14'),
(20, 16, 5, '2019-06-15 05:31:55', '2019-06-15 05:31:55'),
(21, 17, 5, '2019-06-15 05:40:24', '2019-06-15 05:40:24'),
(22, 19, 5, '2019-06-15 05:43:27', '2019-06-15 05:43:27'),
(23, 20, 6, '2019-06-15 07:01:19', '2019-06-15 07:01:19'),
(24, 22, 6, '2019-06-15 07:03:48', '2019-06-15 07:03:48'),
(25, 24, 5, '2019-06-15 07:08:40', '2019-06-15 07:08:40'),
(26, 25, 5, '2019-06-15 07:26:26', '2019-06-15 07:26:26'),
(27, 26, 6, '2019-06-15 07:37:28', '2019-06-15 07:37:28'),
(28, 27, 5, '2019-06-15 22:27:50', '2019-06-15 22:27:50'),
(29, 29, 6, '2019-06-15 22:29:27', '2019-06-15 22:29:27'),
(30, 30, 6, '2019-06-15 22:38:38', '2019-06-15 22:38:38'),
(31, 31, 5, '2019-06-15 22:46:13', '2019-06-15 22:46:13'),
(32, 32, 6, '2019-06-26 20:58:45', '2019-06-26 20:58:45');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(10) UNSIGNED NOT NULL,
  `post_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `post_id`, `user_id`, `comment`, `created_at`, `updated_at`) VALUES
(2, 31, 1, 'another comment', '2019-06-20 20:23:45', '2019-06-20 20:23:45'),
(3, 32, 2, 'this comment', '2019-06-26 21:02:10', '2019-06-26 21:02:10');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `queue`, `payload`, `attempts`, `reserved_at`, `available_at`, `created_at`) VALUES
(1, 'default', '{\"displayName\":\"App\\\\Notifications\\\\NewPostNotify\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"timeout\":null,\"timeoutAt\":null,\"data\":{\"commandName\":\"Illuminate\\\\Notifications\\\\SendQueuedNotifications\",\"command\":\"O:48:\\\"Illuminate\\\\Notifications\\\\SendQueuedNotifications\\\":11:{s:11:\\\"notifiables\\\";O:44:\\\"Illuminate\\\\Notifications\\\\AnonymousNotifiable\\\":1:{s:6:\\\"routes\\\";a:1:{s:4:\\\"mail\\\";s:25:\\\"wahyuhidayat889@gmail.com\\\";}}s:12:\\\"notification\\\";O:31:\\\"App\\\\Notifications\\\\NewPostNotify\\\":9:{s:4:\\\"post\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":4:{s:5:\\\"class\\\";s:8:\\\"App\\\\Post\\\";s:2:\\\"id\\\";i:31;s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";}s:2:\\\"id\\\";s:36:\\\"743bff1d-ac1e-4fde-a2eb-6452a50c003d\\\";s:6:\\\"locale\\\";N;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:5:\\\"delay\\\";N;s:7:\\\"chained\\\";a:0:{}}s:8:\\\"channels\\\";a:1:{i:0;s:4:\\\"mail\\\";}s:5:\\\"tries\\\";N;s:7:\\\"timeout\\\";N;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:5:\\\"delay\\\";N;s:7:\\\"chained\\\";a:0:{}}\"}}', 0, NULL, 1560663976, 1560663976),
(2, 'default', '{\"displayName\":\"App\\\\Notifications\\\\NewAuthorPost\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"timeout\":null,\"timeoutAt\":null,\"data\":{\"commandName\":\"Illuminate\\\\Notifications\\\\SendQueuedNotifications\",\"command\":\"O:48:\\\"Illuminate\\\\Notifications\\\\SendQueuedNotifications\\\":11:{s:11:\\\"notifiables\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":4:{s:5:\\\"class\\\";s:8:\\\"App\\\\User\\\";s:2:\\\"id\\\";i:1;s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";}s:12:\\\"notification\\\";O:31:\\\"App\\\\Notifications\\\\NewAuthorPost\\\":9:{s:4:\\\"post\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":4:{s:5:\\\"class\\\";s:8:\\\"App\\\\Post\\\";s:2:\\\"id\\\";i:32;s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";}s:2:\\\"id\\\";s:36:\\\"00923fb4-c6be-4bd3-b3fe-25d8c48723bf\\\";s:6:\\\"locale\\\";N;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:5:\\\"delay\\\";N;s:7:\\\"chained\\\";a:0:{}}s:8:\\\"channels\\\";a:1:{i:0;s:4:\\\"mail\\\";}s:5:\\\"tries\\\";N;s:7:\\\"timeout\\\";N;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:5:\\\"delay\\\";N;s:7:\\\"chained\\\";a:0:{}}\"}}', 0, NULL, 1561607941, 1561607941),
(3, 'default', '{\"displayName\":\"App\\\\Notifications\\\\AuthorPostApproved\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"timeout\":null,\"timeoutAt\":null,\"data\":{\"commandName\":\"Illuminate\\\\Notifications\\\\SendQueuedNotifications\",\"command\":\"O:48:\\\"Illuminate\\\\Notifications\\\\SendQueuedNotifications\\\":11:{s:11:\\\"notifiables\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":4:{s:5:\\\"class\\\";s:8:\\\"App\\\\User\\\";s:2:\\\"id\\\";i:2;s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";}s:12:\\\"notification\\\";O:36:\\\"App\\\\Notifications\\\\AuthorPostApproved\\\":9:{s:4:\\\"post\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":4:{s:5:\\\"class\\\";s:8:\\\"App\\\\Post\\\";s:2:\\\"id\\\";i:9;s:9:\\\"relations\\\";a:1:{i:0;s:4:\\\"user\\\";}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";}s:2:\\\"id\\\";s:36:\\\"541f67f8-88d7-4637-8802-5315b1f35202\\\";s:6:\\\"locale\\\";N;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:5:\\\"delay\\\";N;s:7:\\\"chained\\\";a:0:{}}s:8:\\\"channels\\\";a:1:{i:0;s:4:\\\"mail\\\";}s:5:\\\"tries\\\";N;s:7:\\\"timeout\\\";N;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:5:\\\"delay\\\";N;s:7:\\\"chained\\\";a:0:{}}\"}}', 0, NULL, 1561608014, 1561608014),
(4, 'default', '{\"displayName\":\"App\\\\Notifications\\\\NewPostNotify\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"timeout\":null,\"timeoutAt\":null,\"data\":{\"commandName\":\"Illuminate\\\\Notifications\\\\SendQueuedNotifications\",\"command\":\"O:48:\\\"Illuminate\\\\Notifications\\\\SendQueuedNotifications\\\":11:{s:11:\\\"notifiables\\\";O:44:\\\"Illuminate\\\\Notifications\\\\AnonymousNotifiable\\\":1:{s:6:\\\"routes\\\";a:1:{s:4:\\\"mail\\\";s:25:\\\"wahyuhidayat889@gmail.com\\\";}}s:12:\\\"notification\\\";O:31:\\\"App\\\\Notifications\\\\NewPostNotify\\\":9:{s:4:\\\"post\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":4:{s:5:\\\"class\\\";s:8:\\\"App\\\\Post\\\";s:2:\\\"id\\\";i:9;s:9:\\\"relations\\\";a:1:{i:0;s:4:\\\"user\\\";}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";}s:2:\\\"id\\\";s:36:\\\"c083b306-0738-49f3-9e67-ba7ee2f8ee3f\\\";s:6:\\\"locale\\\";N;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:5:\\\"delay\\\";N;s:7:\\\"chained\\\";a:0:{}}s:8:\\\"channels\\\";a:1:{i:0;s:4:\\\"mail\\\";}s:5:\\\"tries\\\";N;s:7:\\\"timeout\\\";N;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:5:\\\"delay\\\";N;s:7:\\\"chained\\\";a:0:{}}\"}}', 0, NULL, 1561608014, 1561608014),
(5, 'default', '{\"displayName\":\"App\\\\Notifications\\\\AuthorPostApproved\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"timeout\":null,\"timeoutAt\":null,\"data\":{\"commandName\":\"Illuminate\\\\Notifications\\\\SendQueuedNotifications\",\"command\":\"O:48:\\\"Illuminate\\\\Notifications\\\\SendQueuedNotifications\\\":11:{s:11:\\\"notifiables\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":4:{s:5:\\\"class\\\";s:8:\\\"App\\\\User\\\";s:2:\\\"id\\\";i:2;s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";}s:12:\\\"notification\\\";O:36:\\\"App\\\\Notifications\\\\AuthorPostApproved\\\":9:{s:4:\\\"post\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":4:{s:5:\\\"class\\\";s:8:\\\"App\\\\Post\\\";s:2:\\\"id\\\";i:11;s:9:\\\"relations\\\";a:1:{i:0;s:4:\\\"user\\\";}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";}s:2:\\\"id\\\";s:36:\\\"3156556a-28fc-4334-8aac-1a49d9cc8ab5\\\";s:6:\\\"locale\\\";N;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:5:\\\"delay\\\";N;s:7:\\\"chained\\\";a:0:{}}s:8:\\\"channels\\\";a:1:{i:0;s:4:\\\"mail\\\";}s:5:\\\"tries\\\";N;s:7:\\\"timeout\\\";N;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:5:\\\"delay\\\";N;s:7:\\\"chained\\\";a:0:{}}\"}}', 0, NULL, 1561608023, 1561608023),
(6, 'default', '{\"displayName\":\"App\\\\Notifications\\\\NewPostNotify\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"timeout\":null,\"timeoutAt\":null,\"data\":{\"commandName\":\"Illuminate\\\\Notifications\\\\SendQueuedNotifications\",\"command\":\"O:48:\\\"Illuminate\\\\Notifications\\\\SendQueuedNotifications\\\":11:{s:11:\\\"notifiables\\\";O:44:\\\"Illuminate\\\\Notifications\\\\AnonymousNotifiable\\\":1:{s:6:\\\"routes\\\";a:1:{s:4:\\\"mail\\\";s:25:\\\"wahyuhidayat889@gmail.com\\\";}}s:12:\\\"notification\\\";O:31:\\\"App\\\\Notifications\\\\NewPostNotify\\\":9:{s:4:\\\"post\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":4:{s:5:\\\"class\\\";s:8:\\\"App\\\\Post\\\";s:2:\\\"id\\\";i:11;s:9:\\\"relations\\\";a:1:{i:0;s:4:\\\"user\\\";}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";}s:2:\\\"id\\\";s:36:\\\"0ee2642f-a77a-454f-be49-183c3150ad8f\\\";s:6:\\\"locale\\\";N;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:5:\\\"delay\\\";N;s:7:\\\"chained\\\";a:0:{}}s:8:\\\"channels\\\";a:1:{i:0;s:4:\\\"mail\\\";}s:5:\\\"tries\\\";N;s:7:\\\"timeout\\\";N;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:5:\\\"delay\\\";N;s:7:\\\"chained\\\";a:0:{}}\"}}', 0, NULL, 1561608023, 1561608023),
(7, 'default', '{\"displayName\":\"App\\\\Notifications\\\\AuthorPostApproved\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"timeout\":null,\"timeoutAt\":null,\"data\":{\"commandName\":\"Illuminate\\\\Notifications\\\\SendQueuedNotifications\",\"command\":\"O:48:\\\"Illuminate\\\\Notifications\\\\SendQueuedNotifications\\\":11:{s:11:\\\"notifiables\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":4:{s:5:\\\"class\\\";s:8:\\\"App\\\\User\\\";s:2:\\\"id\\\";i:2;s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";}s:12:\\\"notification\\\";O:36:\\\"App\\\\Notifications\\\\AuthorPostApproved\\\":9:{s:4:\\\"post\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":4:{s:5:\\\"class\\\";s:8:\\\"App\\\\Post\\\";s:2:\\\"id\\\";i:12;s:9:\\\"relations\\\";a:1:{i:0;s:4:\\\"user\\\";}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";}s:2:\\\"id\\\";s:36:\\\"e958118c-3c96-4205-8344-2702c61a74f7\\\";s:6:\\\"locale\\\";N;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:5:\\\"delay\\\";N;s:7:\\\"chained\\\";a:0:{}}s:8:\\\"channels\\\";a:1:{i:0;s:4:\\\"mail\\\";}s:5:\\\"tries\\\";N;s:7:\\\"timeout\\\";N;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:5:\\\"delay\\\";N;s:7:\\\"chained\\\";a:0:{}}\"}}', 0, NULL, 1561608052, 1561608052),
(8, 'default', '{\"displayName\":\"App\\\\Notifications\\\\NewPostNotify\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"timeout\":null,\"timeoutAt\":null,\"data\":{\"commandName\":\"Illuminate\\\\Notifications\\\\SendQueuedNotifications\",\"command\":\"O:48:\\\"Illuminate\\\\Notifications\\\\SendQueuedNotifications\\\":11:{s:11:\\\"notifiables\\\";O:44:\\\"Illuminate\\\\Notifications\\\\AnonymousNotifiable\\\":1:{s:6:\\\"routes\\\";a:1:{s:4:\\\"mail\\\";s:25:\\\"wahyuhidayat889@gmail.com\\\";}}s:12:\\\"notification\\\";O:31:\\\"App\\\\Notifications\\\\NewPostNotify\\\":9:{s:4:\\\"post\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":4:{s:5:\\\"class\\\";s:8:\\\"App\\\\Post\\\";s:2:\\\"id\\\";i:12;s:9:\\\"relations\\\";a:1:{i:0;s:4:\\\"user\\\";}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";}s:2:\\\"id\\\";s:36:\\\"57f3c525-24e8-473e-b3cf-1abb8a5b7c66\\\";s:6:\\\"locale\\\";N;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:5:\\\"delay\\\";N;s:7:\\\"chained\\\";a:0:{}}s:8:\\\"channels\\\";a:1:{i:0;s:4:\\\"mail\\\";}s:5:\\\"tries\\\";N;s:7:\\\"timeout\\\";N;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:5:\\\"delay\\\";N;s:7:\\\"chained\\\";a:0:{}}\"}}', 0, NULL, 1561608053, 1561608053);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(4, '2014_10_12_000000_create_users_table', 1),
(5, '2014_10_12_100000_create_password_resets_table', 1),
(6, '2019_05_15_140421_create_roles_table', 1),
(7, '2019_05_20_113822_create_tags_table', 2),
(8, '2019_06_01_134058_create_categories_table', 3),
(9, '2019_06_02_115528_create_category_post_table', 4),
(10, '2019_06_02_120205_create_posts_table', 4),
(11, '2019_06_02_121130_create_post_tag_table', 4),
(12, '2019_06_15_081142_create_subscribers_table', 5),
(13, '2019_06_15_144258_create_jobs_table', 6),
(14, '2019_06_18_081832_create_post_user_table', 7),
(15, '2019_06_21_020823_create_comments_table', 8);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default.png',
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `view_count` int(11) NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `is_approved` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `title`, `slug`, `image`, `body`, `view_count`, `status`, `is_approved`, `created_at`, `updated_at`) VALUES
(3, 1, 'testing 2 update', 'testing-2-update', 'testing-2-update-2019-06-03-5cf54476f2cdc.jpg', '<p>testing body 2 update</p>', 0, 1, 1, '2019-06-03 07:31:59', '2019-06-03 09:02:04'),
(4, 1, 'testing 4', 'testing-4', 'testing-4-2019-06-03-5cf5482db9262.jpg', '<p>testing 4</p>', 2, 1, 1, '2019-06-03 09:17:54', '2019-06-27 04:38:29'),
(6, 2, 'author 2', 'author-2', 'author-2-2019-06-11-5cffb7871ae31.jpg', '<p>update 2</p>', 0, 1, 1, '2019-06-11 07:15:38', '2019-06-12 07:24:51'),
(7, 2, 'configuration sweetalert', 'configuration-sweetalert', 'configuration-sweetalert-2019-06-12-5d010e5679267.jpg', '<h3 id=\"configuration\" style=\"text-align: center;\">Configuration</h3>\r\n<p class=\"center\" style=\"text-align: center;\">Here are the keys that you can use if you pass an object into sweetAlert2:</p>\r\n<table>\r\n<tbody>\r\n<tr class=\"titles\">\r\n<th>Argument</th>\r\n<th>Default value</th>\r\n<th>Description</th>\r\n</tr>\r\n<tr>\r\n<td><strong>title</strong></td>\r\n<td><em>null</em></td>\r\n<td>The title of the modal, as HTML. It can either be added to the object under the key \"title\" or passed as the first parameter of the function.</td>\r\n</tr>\r\n<tr>\r\n<td><strong>titleText</strong></td>\r\n<td><em>null</em></td>\r\n<td>The title of the modal, as text. Useful to avoid HTML injection.</td>\r\n</tr>\r\n<tr>\r\n<td><strong>html</strong></td>\r\n<td><em>null</em></td>\r\n<td>A HTML description for the modal. It can either be added to the object under the key \"html\" or passed as the second parameter of the function.</td>\r\n</tr>\r\n<tr>\r\n<td><strong>text</strong></td>\r\n<td><em>null</em></td>\r\n<td>A description for the modal. If \"text\" and \"html\" parameters are provided in the same time, \"text\" will be used.</td>\r\n</tr>\r\n<tr>\r\n<td><strong>type</strong></td>\r\n<td><em>null</em></td>\r\n<td>The type of the modal. SweetAlert2 comes with 5 built-in types which will show a corresponding icon animation: <strong>warning</strong>, <strong>error</strong>, <strong>success</strong>, <strong>info</strong>, and <strong>question</strong>. It can either be put in the array under the key \"type\" or passed as the third parameter of the function.</td>\r\n</tr>\r\n<tr>\r\n<td><strong>footer</strong></td>\r\n<td><em>null</em></td>\r\n<td>The footer of the modal. Can be either plain text or HTML.</td>\r\n</tr>\r\n<tr>\r\n<td><strong>backdrop</strong></td>\r\n<td><em>true</em></td>\r\n<td>Whether or not SweetAlert2 should show a full screen click-to-dismiss backdrop. Can be either a <strong>boolean</strong> or a <strong>string</strong> which will be assigned to the CSS <strong>background</strong> property.</td>\r\n</tr>\r\n<tr>\r\n<td><strong>toast</strong></td>\r\n<td><em>false</em></td>\r\n<td>Whether or not an alert should be treated as a toast notification. This option is normally coupled with the <strong>position</strong> parameter and a timer. Toasts are NEVER autofocused.</td>\r\n</tr>\r\n<tr>\r\n<td><strong>target</strong></td>\r\n<td><em>\'body\'</em></td>\r\n<td>The container element for adding modal into.</td>\r\n</tr>\r\n<tr id=\"input-parameter\">\r\n<td><strong>input</strong></td>\r\n<td><em>null</em></td>\r\n<td>Input field type, can be <strong>text</strong>, <strong>email</strong>, <strong>password</strong>, <strong>number</strong>, <strong>tel</strong>, <strong>range</strong>, <strong>textarea</strong>, <strong>select</strong>, <strong>radio</strong>, <strong>checkbox</strong>, <strong>file</strong> and <strong>url</strong>.</td>\r\n</tr>\r\n<tr>\r\n<td><strong>width</strong></td>\r\n<td><em>null</em></td>\r\n<td>Modal window width, including paddings (<em>box-sizing: border-box</em>). Can be in <strong>px</strong> or <strong>%</strong>. The default width is <strong>32rem</strong>.</td>\r\n</tr>\r\n<tr>\r\n<td><strong>padding</strong></td>\r\n<td><em>null</em></td>\r\n<td>Modal window padding. The default padding is <strong>1.25rem</strong>.</td>\r\n</tr>\r\n<tr>\r\n<td><strong>background</strong></td>\r\n<td><em>null</em></td>\r\n<td>Modal window background (CSS background property). The default background is <strong>\'#fff\'</strong>.</td>\r\n</tr>\r\n<tr>\r\n<td><strong>position</strong></td>\r\n<td><em>\'center\'</em></td>\r\n<td>Modal window position, can be <strong>\'top\'</strong>, <strong>\'top-start\'</strong>, <strong>\'top-end\'</strong>, <strong>\'center\'</strong>, <strong>\'center-start\'</strong>, <strong>\'center-end\'</strong>, <strong>\'bottom\'</strong>, <strong>\'bottom-start\'</strong>, or <strong>\'bottom-end\'</strong>.</td>\r\n</tr>\r\n<tr>\r\n<td><strong>grow</strong></td>\r\n<td><em>\'false\'</em></td>\r\n<td>Paired with window position, sets the direction the modal should grow in, can be set to <strong>\'row\'</strong>, <strong>\'column\'</strong>, <strong>\'fullscreen\'</strong>, or <strong>false</strong>.</td>\r\n</tr>\r\n<tr id=\"custom-class\">\r\n<td><strong>customClass</strong></td>\r\n<td><em>\'\'</em></td>\r\n<td>\r\n<p>A custom CSS class for the modal. If a string value is provided, the classname will be applied to the popup. If an object is provided, the classnames will be applied to the corresponding fields:</p>\r\n<table>\r\n<tbody>\r\n<tr id=\"custom-class\">\r\n<td><code class=\"hljs javascript\">customClass: { <span class=\"hljs-attr\">container</span>: <span class=\"hljs-string\">\'container-class\'</span>, <span class=\"hljs-attr\">popup</span>: <span class=\"hljs-string\">\'popup-class\'</span>, <span class=\"hljs-attr\">header</span>: <span class=\"hljs-string\">\'header-class\'</span>, <span class=\"hljs-attr\">title</span>: <span class=\"hljs-string\">\'title-class\'</span>, <span class=\"hljs-attr\">closeButton</span>: <span class=\"hljs-string\">\'close-button-class\'</span>, <span class=\"hljs-attr\">image</span>: <span class=\"hljs-string\">\'image-class\'</span>, <span class=\"hljs-attr\">content</span>: <span class=\"hljs-string\">\'content-class\'</span>, <span class=\"hljs-attr\">input</span>: <span class=\"hljs-string\">\'input-class\'</span>, <span class=\"hljs-attr\">actions</span>: <span class=\"hljs-string\">\'actions-class\'</span>, <span class=\"hljs-attr\">confirmButton</span>: <span class=\"hljs-string\">\'confirm-button-class\'</span>, <span class=\"hljs-attr\">cancelButton</span>: <span class=\"hljs-string\">\'cancel-button-class\'</span>, <span class=\"hljs-attr\">footer</span>: <span class=\"hljs-string\">\'footer-class\'</span> }</code></td>\r\n</tr>\r\n<tr>\r\n<td><strong>customContainerClass</strong></td>\r\n<td><em>\'\'</em></td>\r\n<td><strong>Deprecated and will be removed in the next major release, use <a href=\"https://sweetalert2.github.io/#custom-class\">customClass</a> instead.</strong> <br />A custom CSS class for the container of the modal.</td>\r\n</tr>\r\n<tr id=\"timer\">\r\n<td><strong>timer</strong></td>\r\n<td><em>null</em></td>\r\n<td>Auto close timer of the modal. Set in ms (milliseconds). See also <a href=\"https://sweetalert2.github.io/#getTimerLeft\">Swal.getTimerLeft()</a>, <a href=\"https://sweetalert2.github.io/#stopTimer\">Swal.stopTimer()</a>, <a href=\"https://sweetalert2.github.io/#resumeTimer\">Swal.resumeTimer()</a>, <a href=\"https://sweetalert2.github.io/#toggleTimer\">Swal.toggleTimer()</a>, <a href=\"https://sweetalert2.github.io/#isTimerRunning\">Swal.isTimerRunning()</a> and <a href=\"https://sweetalert2.github.io/#increaseTimer\">Swal.increaseTimer()</a>.</td>\r\n</tr>\r\n<tr>\r\n<td><strong>animation</strong></td>\r\n<td><em>true</em></td>\r\n<td>If set to <strong>false</strong>, modal CSS animation will be disabled.</td>\r\n</tr>\r\n<tr>\r\n<td><strong>heightAuto</strong></td>\r\n<td><em>true</em></td>\r\n<td>By default, SweetAlert2 sets html\'s and body\'s CSS <strong>height</strong> to <strong>auto !important</strong>. If this behavior isn\'t compatible with your project\'s layout, set <strong>heightAuto</strong> to <strong>false</strong>.</td>\r\n</tr>\r\n<tr id=\"allow-outside-click\">\r\n<td><strong>allowOutsideClick</strong></td>\r\n<td><em>true</em></td>\r\n<td>If set to <strong>false</strong>, the user can\'t dismiss the modal by clicking outside it.<br />You can also pass a custom function returning a boolean value, e.g. if you want to disable outside clicks for the loading state of a modal.</td>\r\n</tr>\r\n<tr id=\"allow-escape-key\">\r\n<td><strong>allowEscapeKey</strong></td>\r\n<td><em>true</em></td>\r\n<td>If set to <strong>false</strong>, the user can\'t dismiss the modal by pressing the <kbd>Esc</kbd> key. You can also pass a custom function returning a boolean value, e.g. if you want to disable the <kbd>Esc</kbd> key for the loading state of a modal.</td>\r\n</tr>\r\n<tr id=\"allow-enter-key\">\r\n<td><strong>allowEnterKey</strong></td>\r\n<td><em>true</em></td>\r\n<td>If set to <strong>false</strong>, the user can\'t confirm the modal by pressing the Enter or Space keys, unless they manually focus the confirm button. You can also pass a custom function returning a boolean value.</td>\r\n</tr>\r\n<tr id=\"stop-keydown-propagation\">\r\n<td><strong>stopKeydownPropagation</strong></td>\r\n<td><em>true</em></td>\r\n<td>If set to <strong>false</strong>, SweetAlert2 will allow <strong>keydown</strong> events propagation to the document.</td>\r\n</tr>\r\n<tr id=\"keydown-listener-capture\">\r\n<td><strong>keydownListenerCapture</strong></td>\r\n<td><em>false</em></td>\r\n<td>Useful for those who are using SweetAlert2 along with Bootstrap modals. By default <strong>keydownListenerCapture</strong> is <strong>false</strong> which means when a user hits <kbd>Esc</kbd>, both SweetAlert2 and Bootstrap modals will be closed. Set <strong>keydownListenerCapture</strong> to <strong>true</strong> to fix that behavior.</td>\r\n</tr>\r\n<tr>\r\n<td><strong>showConfirmButton</strong></td>\r\n<td><em>true</em></td>\r\n<td>If set to <strong>false</strong>, a \"Confirm\"-button will not be shown. It can be useful when you\'re using custom HTML description.</td>\r\n</tr>\r\n<tr id=\"show-cancel-button\">\r\n<td><strong>showCancelButton</strong></td>\r\n<td><em>false</em></td>\r\n<td>If set to <strong>true</strong>, a \"Cancel\"-button will be shown, which the user can click on to dismiss the modal.</td>\r\n</tr>\r\n<tr>\r\n<td><strong>confirmButtonText</strong></td>\r\n<td><em>\'OK\'</em></td>\r\n<td>Use this to change the text on the \"Confirm\"-button.</td>\r\n</tr>\r\n<tr>\r\n<td><strong>cancelButtonText</strong></td>\r\n<td><em>\'Cancel\'</em></td>\r\n<td>Use this to change the text on the \"Cancel\"-button.</td>\r\n</tr>\r\n<tr>\r\n<td><strong>confirmButtonColor</strong></td>\r\n<td><em>null</em></td>\r\n<td>Use this to change the background color of the \"Confirm\"-button. The default color is <strong>#3085d6</strong></td>\r\n</tr>\r\n<tr>\r\n<td><strong>cancelButtonColor</strong></td>\r\n<td><em>null</em></td>\r\n<td>Use this to change the background color of the \"Cancel\"-button. The default color is <strong>#aaa</strong></td>\r\n</tr>\r\n<tr>\r\n<td><strong>confirmButtonClass</strong></td>\r\n<td><em>\'\'</em></td>\r\n<td><strong>Deprecated and will be removed in the next major release, use <a href=\"https://sweetalert2.github.io/#custom-class\">customClass</a> instead.</strong> <br />A custom CSS class for the \"Confirm\"-button.</td>\r\n</tr>\r\n<tr>\r\n<td><strong>cancelButtonClass</strong></td>\r\n<td><em>\'\'</em></td>\r\n<td><strong>Deprecated and will be removed in the next major release, use <a href=\"https://sweetalert2.github.io/#custom-class\">customClass</a> instead.</strong> <br />A custom CSS class for the \"Cancel\"-button.</td>\r\n</tr>\r\n<tr>\r\n<td><strong>confirmButtonAriaLabel</strong></td>\r\n<td><em>\'\'</em></td>\r\n<td>Use this to change the <strong>aria-label</strong> for the \"Confirm\"-button.</td>\r\n</tr>\r\n<tr>\r\n<td><strong>cancelButtonAriaLabel</strong></td>\r\n<td><em>\'\'</em></td>\r\n<td>Use this to change the <strong>aria-label</strong> for the \"Cancel\"-button.</td>\r\n</tr>\r\n<tr>\r\n<td><strong>buttonsStyling</strong></td>\r\n<td><em>true</em></td>\r\n<td>Apply default styling to buttons. If you want to use your own classes (e.g. Bootstrap classes) set this parameter to <strong>false</strong>.</td>\r\n</tr>\r\n<tr>\r\n<td><strong>reverseButtons</strong></td>\r\n<td><em>false</em></td>\r\n<td>Set to <strong>true</strong> if you want to invert default buttons positions (\"Confirm\"-button on the right side).</td>\r\n</tr>\r\n<tr>\r\n<td><strong>focusConfirm</strong></td>\r\n<td><em>true</em></td>\r\n<td>Set to <strong>false</strong> if you want to focus the first element in tab order instead of \"Confirm\"-button by default.</td>\r\n</tr>\r\n<tr>\r\n<td><strong>focusCancel</strong></td>\r\n<td><em>false</em></td>\r\n<td>Set to <strong>true</strong> if you want to focus the \"Cancel\"-button by default.</td>\r\n</tr>\r\n<tr id=\"show-close-button\">\r\n<td><strong>showCloseButton</strong></td>\r\n<td><em>false</em></td>\r\n<td>Set to <strong>true</strong> to show close button in top right corner of the modal.</td>\r\n</tr>\r\n<tr>\r\n<td><strong>closeButtonAriaLabel</strong></td>\r\n<td><em>\'Close this dialog\'</em></td>\r\n<td>Use this to change the <strong>aria-label</strong> for the close button.</td>\r\n</tr>\r\n<tr>\r\n<td><strong>showLoaderOnConfirm</strong></td>\r\n<td><em>false</em></td>\r\n<td>Set to <strong>true</strong> to disable buttons and show that something is loading. Use it in combination with the <a href=\"https://sweetalert2.github.io/#pre-confirm\"><strong>preConfirm</strong></a> parameter.</td>\r\n</tr>\r\n<tr id=\"scrollbar-padding\">\r\n<td><strong>scrollbarPadding</strong></td>\r\n<td><em>true</em></td>\r\n<td>Set to <strong>false</strong> to disable body padding adjustment when the page scrollbar gets hidden while the modal is shown</td>\r\n</tr>\r\n<tr id=\"pre-confirm\">\r\n<td><strong>preConfirm</strong></td>\r\n<td><em>null</em></td>\r\n<td>Function to execute before confirm, may be async (Promise-returning) or sync, see <a href=\"https://sweetalert2.github.io/#ajax-request\">usage example</a>.</td>\r\n</tr>\r\n<tr id=\"image\">\r\n<td><strong>imageUrl</strong></td>\r\n<td><em>null</em></td>\r\n<td>Add a customized icon for the modal. Should contain a string with the path or URL to the image.</td>\r\n</tr>\r\n<tr>\r\n<td><strong>imageWidth</strong></td>\r\n<td><em>null</em></td>\r\n<td>If imageUrl is set, you can specify imageWidth to describes image width in px.</td>\r\n</tr>\r\n<tr>\r\n<td><strong>imageHeight</strong></td>\r\n<td><em>null</em></td>\r\n<td>Custom image height in px.</td>\r\n</tr>\r\n<tr>\r\n<td><strong>imageAlt</strong></td>\r\n<td><em>\'\'</em></td>\r\n<td>An alternative text for the custom image icon.</td>\r\n</tr>\r\n<tr>\r\n<td><strong>imageClass</strong></td>\r\n<td><em>\'\'</em></td>\r\n<td><strong>Deprecated and will be removed in the next major release, use <a href=\"https://sweetalert2.github.io/#custom-class\">customClass</a> instead.</strong> <br />A custom CSS class for the customized icon.</td>\r\n</tr>\r\n<tr id=\"input-placeholder\">\r\n<td><strong>inputPlaceholder</strong></td>\r\n<td><em>\'\'</em></td>\r\n<td>Input field placeholder.</td>\r\n</tr>\r\n<tr id=\"input-value\">\r\n<td><strong>inputValue</strong></td>\r\n<td><em>\'\'</em></td>\r\n<td>Input field initial value. <br /><br /> If the input type is <strong>checkbox</strong>, <strong>inputValue</strong> will represent the <strong>checked</strong> state. <br /><br /> If the input type is <strong>text</strong>, <strong>email</strong>, <strong>number</strong>, <strong>tel</strong> or <strong>textarea</strong> a Promise can be accepted as <strong>inputValue</strong>.</td>\r\n</tr>\r\n<tr id=\"input-options\">\r\n<td><strong>inputOptions</strong></td>\r\n<td><em>{}</em></td>\r\n<td>If <strong>input</strong> parameter is set to <strong>\"select\"</strong> or <strong>\"radio\"</strong>, you can provide options. Can be a Map or a plain object, with keys that represent option values and values that represent option text, or a Promise that resolves with one of those types.</td>\r\n</tr>\r\n<tr id=\"input-auto-trim\">\r\n<td><strong>inputAutoTrim</strong></td>\r\n<td><em>true</em></td>\r\n<td>Automatically remove whitespaces from both ends of a result string. Set this parameter to <strong>false</strong> to disable auto-trimming.</td>\r\n</tr>\r\n<tr id=\"input-attributes\">\r\n<td><strong>inputAttributes</strong></td>\r\n<td><em>{}</em></td>\r\n<td>HTML input attributes (e.g. <strong>min</strong>, <strong>max</strong>, <strong>autocomplete</strong>, <strong>accept</strong>), that are added to the input field. Object keys will represent attributes names, object values will represent attributes values.</td>\r\n</tr>\r\n<tr id=\"input-validator\">\r\n<td><strong>inputValidator</strong></td>\r\n<td><em>null</em></td>\r\n<td>Validator for input field, may be async (Promise-returning) or sync, see <a href=\"https://sweetalert2.github.io/#input-select\">usage example</a>.</td>\r\n</tr>\r\n<tr id=\"validation-message\">\r\n<td><strong>validationMesage</strong></td>\r\n<td><em>null</em></td>\r\n<td>A custom validation message for default validators (email, url).</td>\r\n</tr>\r\n<tr id=\"input-class\">\r\n<td><strong>inputClass</strong></td>\r\n<td><em>\'\'</em></td>\r\n<td><strong>Deprecated and will be removed in the next major release, use <a href=\"https://sweetalert2.github.io/#custom-class\">customClass</a> instead.</strong> <br />A custom CSS class for the input field.</td>\r\n</tr>\r\n<tr>\r\n<td><strong>progressSteps</strong></td>\r\n<td><em>[]</em></td>\r\n<td>Progress steps, useful for modal queues, see <a href=\"https://sweetalert2.github.io/#chaining-modals\">usage example</a>.</td>\r\n</tr>\r\n<tr>\r\n<td><strong>currentProgressStep</strong></td>\r\n<td><em>null</em></td>\r\n<td>Current active progress step. The default is <strong>Swal.getQueueStep()</strong></td>\r\n</tr>\r\n<tr>\r\n<td><strong>progressStepsDistance</strong></td>\r\n<td><em>\'40px\'</em></td>\r\n<td>Distance between progress steps.</td>\r\n</tr>\r\n<tr>\r\n<td><strong>onBeforeOpen</strong></td>\r\n<td><em>null</em></td>\r\n<td>Function to run when modal built, but not shown yet. Provides modal DOM element as the first argument.</td>\r\n</tr>\r\n<tr>\r\n<td><strong>onOpen</strong></td>\r\n<td><em>null</em></td>\r\n<td>Function to run when modal opens, provides modal DOM element as the first argument.</td>\r\n</tr>\r\n<tr>\r\n<td><strong>onClose</strong></td>\r\n<td><em>null</em></td>\r\n<td>Function to run when modal closes, provides modal DOM element as the first argument.</td>\r\n</tr>\r\n<tr>\r\n<td><strong>onAfterClose</strong></td>\r\n<td><em>null</em></td>\r\n<td>Function to run after modal has been disposed.</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<p class=\"center\">You can easily reuse configuration by creating your own `Swal` with <strong>Swal.mixin({ ...options })</strong>:</p>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<p>&nbsp;</p>', 1, 1, 1, '2019-06-12 07:38:19', '2019-06-27 04:37:13'),
(8, 2, 'Handling Dismissals', 'handling-dismissals', 'handling-dismissals-2019-06-12-5d010eba14772.jpg', '<h3 id=\"handling-dismissals\" style=\"text-align: center;\">Handling Dismissals</h3>\r\n<p class=\"center\" style=\"text-align: justify;\">When an alert is dismissed by the user, the Promise returned by <strong>Swal.fire()</strong> will be resolved with an object <strong class=\"nowrap\">{ dismiss: reason }</strong> documenting the reason it was dismissed:</p>\r\n<table class=\"dismiss-reasons\">\r\n<tbody>\r\n<tr class=\"titles\">\r\n<th>Reason</th>\r\n<th>Description</th>\r\n<th>Related configuration</th>\r\n</tr>\r\n<tr>\r\n<td><strong class=\"nowrap\">Swal.DismissReason.backdrop</strong></td>\r\n<td>The user clicked the backdrop.</td>\r\n<td><a href=\"https://sweetalert2.github.io/#allow-outside-click\">allowOutsideClick</a></td>\r\n</tr>\r\n<tr>\r\n<td><strong class=\"nowrap\">Swal.DismissReason.cancel</strong></td>\r\n<td>The user clicked the cancel button.</td>\r\n<td><a href=\"https://sweetalert2.github.io/#show-cancel-button\">showCancelButton</a></td>\r\n</tr>\r\n<tr>\r\n<td><strong class=\"nowrap\">Swal.DismissReason.close</strong></td>\r\n<td>The user clicked the close button.</td>\r\n<td><a href=\"https://sweetalert2.github.io/#show-close-button\">showCloseButton</a></td>\r\n</tr>\r\n<tr>\r\n<td><strong class=\"nowrap\">Swal.DismissReason.esc</strong></td>\r\n<td>The user clicked the <kbd>Esc</kbd> key.</td>\r\n<td><a href=\"https://sweetalert2.github.io/#allow-escape-key\">allowEscapeKey</a></td>\r\n</tr>\r\n<tr>\r\n<td><strong class=\"nowrap\">Swal.DismissReason.timer</strong></td>\r\n<td>The timer ran out, and the alert closed automatically.</td>\r\n<td><a href=\"https://sweetalert2.github.io/#timer\">timer</a></td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<p>&nbsp;</p>', 1, 1, 1, '2019-06-12 07:39:55', '2019-06-27 04:38:21'),
(9, 2, 'installation', 'installation', 'installation-2019-06-15-5d04dd317defd.jpg', '<h3>Server Requirements</h3>\r\n<p>The Laravel framework has a few system requirements. All of these requirements are satisfied by the <a href=\"https://laravel.com/docs/5.8/homestead\">Laravel Homestead</a> virtual machine, so it\'s highly recommended that you use Homestead as your local Laravel development environment.</p>\r\n<p>However, if you are not using Homestead, you will need to make sure your server meets the following requirements:</p>\r\n<div class=\"content-list\">\r\n<ul>\r\n<li>PHP &gt;= 7.1.3</li>\r\n<li>BCMath PHP Extension</li>\r\n<li>Ctype PHP Extension</li>\r\n<li>JSON PHP Extension</li>\r\n<li>Mbstring PHP Extension</li>\r\n<li>OpenSSL PHP Extension</li>\r\n<li>PDO PHP Extension</li>\r\n<li>Tokenizer PHP Extension</li>\r\n<li>XML PHP Extension</li>\r\n</ul>\r\n</div>\r\n<p><a name=\"installing-laravel\"></a></p>\r\n<h3>Installing Laravel</h3>\r\n<p>Laravel utilizes <a href=\"https://getcomposer.org\">Composer</a> to manage its dependencies. So, before using Laravel, make sure you have Composer installed on your machine.</p>\r\n<h4>Via Laravel Installer</h4>\r\n<p>First, download the Laravel installer using Composer:</p>\r\n<pre class=\" language-php\"><code class=\" language-php\">composer <span class=\"token keyword\">global</span> <span class=\"token keyword\">require</span> laravel<span class=\"token operator\">/</span>installer</code></pre>\r\n<p>Make sure to place composer\'s system-wide vendor bin directory in your <code class=\" language-php\"><span class=\"token variable\">$PATH</span></code> so the laravel executable can be located by your system. This directory exists in different locations based on your operating system; however, some common locations include:</p>\r\n<div class=\"content-list\">\r\n<ul>\r\n<li>macOS: <code class=\" language-php\"><span class=\"token variable\">$HOME</span><span class=\"token operator\">/</span><span class=\"token punctuation\">.</span>composer<span class=\"token operator\">/</span>vendor<span class=\"token operator\">/</span>bin</code></li>\r\n<li>GNU / Linux Distributions: <code class=\" language-php\"><span class=\"token variable\">$HOME</span><span class=\"token operator\">/</span><span class=\"token punctuation\">.</span>config<span class=\"token operator\">/</span>composer<span class=\"token operator\">/</span>vendor<span class=\"token operator\">/</span>bin</code></li>\r\n<li>Windows: <code class=\" language-php\"><span class=\"token operator\">%</span><span class=\"token constant\">USERPROFILE</span><span class=\"token operator\">%</span>\\<span class=\"token package\">AppData<span class=\"token punctuation\">\\</span>Roaming<span class=\"token punctuation\">\\</span>Composer<span class=\"token punctuation\">\\</span>vendor<span class=\"token punctuation\">\\</span>bin</span></code></li>\r\n</ul>\r\n</div>\r\n<p>Once installed, the <code class=\" language-php\">laravel <span class=\"token keyword\">new</span></code> command will create a fresh Laravel installation in the directory you specify. For instance, <code class=\" language-php\">laravel <span class=\"token keyword\">new</span> <span class=\"token class-name\">blog</span></code> will create a directory named <code class=\" language-php\">blog</code> containing a fresh Laravel installation with all of Laravel\'s dependencies already installed:</p>\r\n<pre class=\" language-php\"><code class=\" language-php\">laravel <span class=\"token keyword\">new</span> <span class=\"token class-name\">blog</span></code></pre>\r\n<h4>Via Composer Create-Project</h4>\r\n<p>Alternatively, you may also install Laravel by issuing the Composer <code class=\" language-php\">create<span class=\"token operator\">-</span>project</code> command in your terminal:</p>\r\n<pre class=\" language-php\"><code class=\" language-php\">composer create<span class=\"token operator\">-</span>project <span class=\"token operator\">--</span>prefer<span class=\"token operator\">-</span>dist laravel<span class=\"token operator\">/</span>laravel blog</code></pre>\r\n<h4>Local Development Server</h4>\r\n<p>If you have PHP installed locally and you would like to use PHP\'s built-in development server to serve your application, you may use the <code class=\" language-php\">serve</code> Artisan command. This command will start a development server at <code class=\" language-php\">http<span class=\"token punctuation\">:</span><span class=\"token operator\">/</span><span class=\"token operator\">/</span>localhost<span class=\"token punctuation\">:</span><span class=\"token number\">8000</span></code>:</p>\r\n<pre class=\" language-php\"><code class=\" language-php\">php artisan serve</code></pre>\r\n<p>More robust local development options are available via <a href=\"https://laravel.com/docs/5.8/homestead\">Homestead</a> and <a href=\"https://laravel.com/docs/5.8/valet\">Valet</a>.</p>', 0, 1, 1, '2019-06-15 04:57:41', '2019-06-26 21:00:13'),
(11, 2, 'hsadhja', 'hsadhja', 'hsadhja-2019-06-15-5d04df265429c.jpg', '<p>xcvcx</p>', 0, 1, 1, '2019-06-15 05:06:01', '2019-06-26 21:00:23'),
(12, 2, 'bvbv', 'bvbv', 'bvbv-2019-06-15-5d04e0cadf65e.jpg', '<p>fdhdf fhfhf</p>', 1, 1, 1, '2019-06-15 05:13:02', '2019-06-27 04:39:47'),
(13, 2, 'vccxv', 'vccxv', 'vccxv-2019-06-15-5d04e1822db74.jpg', '<p>cxvcxv&nbsp; cxcvxc</p>', 0, 1, 0, '2019-06-15 05:16:04', '2019-06-15 05:16:04'),
(14, 2, 'gfdfhdf', 'gfdfhdf', 'gfdfhdf-2019-06-15-5d04e32b4ae36.jpg', '<p>sadas asdasdas sdasd</p>', 0, 1, 1, '2019-06-15 05:23:08', '2019-06-15 06:43:06'),
(15, 2, 'vxc', 'vxc', 'vxc-2019-06-15-5d04e45b4026b.jpg', '<p>cvcxx cvxc&nbsp; fdfdf</p>', 0, 1, 1, '2019-06-15 05:28:13', '2019-06-15 06:39:15'),
(16, 2, 'la la', 'la-la', 'la-la-2019-06-15-5d04e53797c07.jpg', '<p>asdas asdas</p>', 0, 1, 1, '2019-06-15 05:31:55', '2019-06-15 06:36:45'),
(17, 2, 'jjhbj', 'jjhbj', 'jjhbj-2019-06-15-5d04e732f0698.jpg', '<p>jj jkhkj</p>', 0, 1, 1, '2019-06-15 05:40:23', '2019-06-15 06:35:27'),
(19, 2, 'uyeah', 'uyeah', 'uyeah-2019-06-15-5d04e7ee0d62e.jpg', '<p>djh kdjhdj kjd d</p>', 0, 1, 1, '2019-06-15 05:43:26', '2019-06-15 06:31:36'),
(20, 1, 'nottify', 'nottify', 'nottify-2019-06-15-5d04fa2b8cace.jpg', '<p>fgdfg dfgdfgd dfgfd</p>', 0, 1, 1, '2019-06-15 07:01:19', '2019-06-15 07:01:19'),
(22, 1, 'nyoba', 'nyoba', 'nyoba-2019-06-15-5d04fac3370d2.jpg', '<p>dsd asdasd</p>', 0, 1, 1, '2019-06-15 07:03:48', '2019-06-15 07:03:48'),
(24, 1, 'fsdfsd', 'fsdfsd', 'fsdfsd-2019-06-15-5d04fbe70cbcf.jpg', '<p>dsfsd sdfsd</p>', 0, 1, 1, '2019-06-15 07:08:39', '2019-06-15 07:08:39'),
(25, 1, 'vvxvxcv', 'vvxvxcv', 'vvxvxcv-2019-06-15-5d05000c90017.jpg', '<p>vxv xvcx cxvx</p>', 0, 1, 1, '2019-06-15 07:26:25', '2019-06-15 07:26:25'),
(26, 2, 'ghj', 'ghj', 'ghj-2019-06-15-5d0502a4ad225.jpg', '<p>nhv hhgj mj</p>', 0, 1, 1, '2019-06-15 07:37:27', '2019-06-15 22:35:27'),
(27, 1, 'queue', 'queue', 'queue-2019-06-16-5d05d3521237d.jpg', '<p>dfdsfdsfsd sdfsdfsd sdfsdf</p>', 0, 0, 1, '2019-06-15 22:27:50', '2019-06-15 22:27:50'),
(29, 1, 'queue2', 'queue2', 'queue2-2019-06-16-5d05d3b51ed00.jpg', '<p>dssd sdfsd dsfsd sdfds</p>', 0, 1, 1, '2019-06-15 22:29:27', '2019-06-15 22:29:27'),
(30, 1, 'lalala 2', 'lalala-2', 'lalala-2-2019-06-16-5d05d5dc2ac0d.jpg', '<p>sd sdsd sdds</p>', 2, 1, 1, '2019-06-15 22:38:38', '2019-06-27 05:00:15'),
(31, 1, 'mnbv', 'mnbv', 'mnbv-2019-06-16-5d05d7a287bfb.jpg', '<p>dsfsd sdfds dssd ds</p>', 5, 1, 1, '2019-06-15 22:46:13', '2019-07-03 03:01:57'),
(32, 2, 'comment author', 'comment-author', 'comment-author-2019-06-27-5d143ee69b1d6.jpg', '<p>author comment</p>', 2, 1, 0, '2019-06-26 20:58:44', '2019-06-27 04:36:14');

-- --------------------------------------------------------

--
-- Table structure for table `post_tag`
--

CREATE TABLE `post_tag` (
  `id` int(10) UNSIGNED NOT NULL,
  `post_id` int(11) NOT NULL,
  `tag_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `post_tag`
--

INSERT INTO `post_tag` (`id`, `post_id`, `tag_id`, `created_at`, `updated_at`) VALUES
(3, 3, 4, '2019-06-03 07:31:59', '2019-06-03 07:31:59'),
(4, 3, 5, '2019-06-03 07:31:59', '2019-06-03 07:31:59'),
(5, 3, 3, '2019-06-03 07:47:11', '2019-06-03 07:47:11'),
(6, 4, 5, '2019-06-03 09:17:56', '2019-06-03 09:17:56'),
(7, 4, 6, '2019-06-03 09:17:56', '2019-06-03 09:17:56'),
(10, 6, 3, '2019-06-11 07:15:39', '2019-06-11 07:15:39'),
(11, 7, 1, '2019-06-12 07:38:20', '2019-06-12 07:38:20'),
(12, 7, 5, '2019-06-12 07:38:20', '2019-06-12 07:38:20'),
(13, 7, 6, '2019-06-12 07:38:20', '2019-06-12 07:38:20'),
(14, 8, 1, '2019-06-12 07:39:55', '2019-06-12 07:39:55'),
(15, 8, 5, '2019-06-12 07:39:55', '2019-06-12 07:39:55'),
(16, 8, 6, '2019-06-12 07:39:55', '2019-06-12 07:39:55'),
(17, 9, 3, '2019-06-15 04:57:42', '2019-06-15 04:57:42'),
(18, 9, 5, '2019-06-15 04:57:42', '2019-06-15 04:57:42'),
(19, 11, 3, '2019-06-15 05:06:02', '2019-06-15 05:06:02'),
(20, 12, 6, '2019-06-15 05:13:02', '2019-06-15 05:13:02'),
(21, 13, 1, '2019-06-15 05:16:04', '2019-06-15 05:16:04'),
(22, 14, 4, '2019-06-15 05:23:08', '2019-06-15 05:23:08'),
(23, 15, 3, '2019-06-15 05:28:14', '2019-06-15 05:28:14'),
(24, 16, 3, '2019-06-15 05:31:55', '2019-06-15 05:31:55'),
(25, 17, 1, '2019-06-15 05:40:24', '2019-06-15 05:40:24'),
(26, 19, 1, '2019-06-15 05:43:27', '2019-06-15 05:43:27'),
(27, 20, 4, '2019-06-15 07:01:20', '2019-06-15 07:01:20'),
(28, 22, 3, '2019-06-15 07:03:48', '2019-06-15 07:03:48'),
(29, 24, 1, '2019-06-15 07:08:40', '2019-06-15 07:08:40'),
(30, 25, 4, '2019-06-15 07:26:26', '2019-06-15 07:26:26'),
(31, 26, 3, '2019-06-15 07:37:28', '2019-06-15 07:37:28'),
(32, 26, 4, '2019-06-15 07:37:28', '2019-06-15 07:37:28'),
(33, 27, 3, '2019-06-15 22:27:50', '2019-06-15 22:27:50'),
(34, 29, 1, '2019-06-15 22:29:27', '2019-06-15 22:29:27'),
(35, 30, 3, '2019-06-15 22:38:39', '2019-06-15 22:38:39'),
(36, 31, 1, '2019-06-15 22:46:13', '2019-06-15 22:46:13'),
(37, 32, 6, '2019-06-26 20:58:46', '2019-06-26 20:58:46');

-- --------------------------------------------------------

--
-- Table structure for table `post_user`
--

CREATE TABLE `post_user` (
  `id` int(10) UNSIGNED NOT NULL,
  `post_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `post_user`
--

INSERT INTO `post_user` (`id`, `post_id`, `user_id`, `created_at`, `updated_at`) VALUES
(5, 30, 1, '2019-06-18 06:13:22', '2019-06-18 06:13:22'),
(6, 26, 1, '2019-06-18 06:15:30', '2019-06-18 06:15:30'),
(9, 27, 2, '2019-06-18 07:25:18', '2019-06-18 07:25:18'),
(10, 25, 2, '2019-06-18 07:26:47', '2019-06-18 07:26:47'),
(11, 22, 1, '2019-06-27 05:00:57', '2019-06-27 05:00:57');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin', NULL, NULL),
(2, 'Author', 'author', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `subscribers`
--

CREATE TABLE `subscribers` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subscribers`
--

INSERT INTO `subscribers` (`id`, `email`, `created_at`, `updated_at`) VALUES
(2, 'wahyuhidayat889@gmail.com', '2019-06-15 06:45:02', '2019-06-15 06:45:02');

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Laravel', 'laravel', '2019-05-20 10:54:08', '2019-05-20 10:54:08'),
(3, 'vue js', 'vue-js', '2019-05-22 05:38:24', '2019-05-22 05:38:24'),
(4, 'php', 'php', '2019-06-03 07:15:01', '2019-06-03 07:15:01'),
(5, 'css', 'css', '2019-06-03 07:15:11', '2019-06-03 07:15:11'),
(6, 'html', 'html', '2019-06-03 07:15:22', '2019-06-03 07:15:22');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `role_id` int(11) NOT NULL DEFAULT '2',
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default.png',
  `about` text COLLATE utf8mb4_unicode_ci,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role_id`, `name`, `username`, `email`, `email_verified_at`, `password`, `image`, `about`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 1, 'MD.Admin blog', 'admin', 'adminblog@mail.com', NULL, '$2y$10$fu04yvv5kuEtKM2tIz94h.5xrII1uxxpRYiogbmQRr2lBShe3Snzq', 'mdadmin-blog-2019-06-18-5d0896ade925e.jpg', 'something', NULL, NULL, '2019-06-18 00:45:52'),
(2, 2, 'MD.Author', 'author', 'author@mail.com', NULL, '$2y$10$4hjq73xgp3N9ebr9zLG8TOcUDPGScnr1Csp1/ljMzoEwsMJjOcNFy', 'mdauthor-2019-06-18-5d089ba00cee9.png', 'author', NULL, '2019-06-29 17:00:00', '2019-06-18 01:06:58');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category_post`
--
ALTER TABLE `category_post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comments_post_id_foreign` (`post_id`),
  ADD KEY `comments_user_id_foreign` (`user_id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `post_slug_unique` (`slug`),
  ADD KEY `post_user_id_foreign` (`user_id`);

--
-- Indexes for table `post_tag`
--
ALTER TABLE `post_tag`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post_user`
--
ALTER TABLE `post_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `post_user_post_id_foreign` (`post_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscribers`
--
ALTER TABLE `subscribers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `category_post`
--
ALTER TABLE `category_post`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `post_tag`
--
ALTER TABLE `post_tag`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `post_user`
--
ALTER TABLE `post_user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `subscribers`
--
ALTER TABLE `subscribers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `comments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `post_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `post_user`
--
ALTER TABLE `post_user`
  ADD CONSTRAINT `post_user_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
