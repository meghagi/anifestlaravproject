-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 04, 2024 at 08:02 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `anifestlaravproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `eventid` bigint(20) UNSIGNED NOT NULL,
  `EventName` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Dress` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CreationDate` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cost` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`eventid`, `EventName`, `Dress`, `CreationDate`, `cost`, `type`, `created_at`, `updated_at`) VALUES
(1, 'wedding', 'informal', '12/1/24', '25', 'single', '2024-03-21 08:52:12', '2024-03-21 08:52:12'),
(2, 'birthday', 'informal', '15/1/2023', '25', 'single', '2024-03-21 08:53:17', '2024-03-21 08:53:17'),
(3, 'ceremony', 'informal', '12/1/24', '25', 'single', '2024-03-21 08:54:14', '2024-03-21 08:54:14'),
(4, 'dancing', 'informal', '12/1/24', '25', 'single', '2024-03-21 09:33:30', '2024-03-21 09:33:30');

-- --------------------------------------------------------

--
-- Table structure for table `events1`
--

CREATE TABLE `events1` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `EventName` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Dress` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Creation Date` varchar(6) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cost` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `venue` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
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
(5, '2024_02_15_095528_create_registration_table', 2),
(11, '2014_10_12_000000_create_users_table', 3),
(12, '2014_10_12_100000_create_password_resets_table', 3),
(13, '2019_08_19_000000_create_failed_jobs_table', 3),
(14, '2019_12_14_000001_create_personal_access_tokens_table', 3),
(15, '2024_02_22_054223_add_coloumns_to_users_table', 3),
(16, '2024_02_26_074617_create_admin_table', 3),
(17, '2024_03_07_111729_create_events_table', 4),
(18, '2024_03_21_103938_add_venue_to_events_table', 4),
(19, '2024_03_21_140016_create_events1_table', 4),
(20, '2024_03_29_120345_create_ticketsold_table', 5),
(21, '2024_04_01_063936_create_speaker_table', 6),
(22, '2024_04_01_120929_create__web_traffic_table', 7),
(23, '2024_04_01_123705_create__web_traffic_table', 8);

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

-- --------------------------------------------------------

--
-- Table structure for table `speaker`
--

CREATE TABLE `speaker` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bio` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `adderess` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sessiontype` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sessiontitle` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `eventid` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `speaker`
--

INSERT INTO `speaker` (`id`, `Name`, `bio`, `email`, `adderess`, `city`, `phone`, `description`, `sessiontype`, `sessiontitle`, `eventid`, `image`) VALUES
(1, 'chery ashley', 'Administration', 'ashley@gmail.com', 'Sw 59Court', 'Indore', '9826029620', 'control or act managing something', 'Keynote speeches', 'Management Workshop', 1, '1.jpg'),
(2, 'Warren Brasington', 'Wellness', 'WarrenBrasington@gmail.com', '50 Main Street\r\nindore', NULL, '9856321120', 'healthiness', 'Q &A session', 'Operational Workshop', 2, '2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `ticketsold`
--

CREATE TABLE `ticketsold` (
  `ticketid` bigint(20) UNSIGNED NOT NULL,
  `eventid` bigint(20) UNSIGNED NOT NULL,
  `cost` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Quantity` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `startDate` varchar(6) COLLATE utf8mb4_unicode_ci NOT NULL,
  `endDate` varchar(6) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ticketsold`
--

INSERT INTO `ticketsold` (`ticketid`, `eventid`, `cost`, `Quantity`, `type`, `startDate`, `endDate`) VALUES
(1, 1, '5000', '80', 'general admission', '1/3/20', '1/4/20'),
(2, 2, '6000', '50', 'VIP', '2/6/20', '2/8/20');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `language` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phonenumber` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `adderess` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` enum('m','f','o') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` enum('admin','user','','') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `created_at` timestamp(6) NULL DEFAULT NULL,
  `updated_at` timestamp(6) NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `language`, `phonenumber`, `adderess`, `gender`, `role`, `created_at`, `updated_at`) VALUES
(1, 'megha', 'megha@gmail.com', '12345678', 'indian', '9826030053', 'neminagar', 'f', 'user', NULL, NULL),
(2, 'megha', 'gangwal@gmail.com', '$2y$10$6hQHw7t0glUCUwq4Pm6g6eEZ2iTzXgALkLAxXYiF83FkRR072mI.W', 'indian', '9977505460', 'aq44 babu nagar', 'f', 'user', '2024-03-21 06:04:30.000000', '2024-03-21 06:04:30.000000'),
(3, 'ganesh', 'admin12@gmail.com', '$2y$10$h4bNqqQLJ85iUBlpHgafV.zm4UhTKfUgJXWqSh.FyEquh1ZCWnrwe', 'indian', '8208297876', 'mahadir', 'm', 'admin', '2024-03-21 06:07:11.000000', '2024-03-21 06:07:11.000000');

-- --------------------------------------------------------

--
-- Table structure for table `webtraffic`
--

CREATE TABLE `webtraffic` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `CompanyName` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Product` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `NumberofVisitor` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `NumberofVisit` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cost` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `BounceRate` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(6) NULL DEFAULT NULL,
  `updated_at` timestamp(6) NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `webtraffic`
--

INSERT INTO `webtraffic` (`id`, `CompanyName`, `Product`, `NumberofVisitor`, `NumberofVisit`, `cost`, `BounceRate`, `created_at`, `updated_at`) VALUES
(1, 'JBL', 'speaker', '10', '3', '9000', '20%', '2024-04-01 08:39:03.000000', '2024-04-01 08:39:03.000000'),
(2, 'JBL', 'speaker', '10', '3', '9000', '20%', '2024-04-01 08:39:06.000000', '2024-04-01 08:39:06.000000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`eventid`);

--
-- Indexes for table `events1`
--
ALTER TABLE `events1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `speaker`
--
ALTER TABLE `speaker`
  ADD PRIMARY KEY (`id`),
  ADD KEY `speaker_eventid_foreign` (`eventid`);

--
-- Indexes for table `ticketsold`
--
ALTER TABLE `ticketsold`
  ADD PRIMARY KEY (`ticketid`),
  ADD KEY `ticketsold_eventid_foreign` (`eventid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `webtraffic`
--
ALTER TABLE `webtraffic`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `eventid` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `events1`
--
ALTER TABLE `events1`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `speaker`
--
ALTER TABLE `speaker`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ticketsold`
--
ALTER TABLE `ticketsold`
  MODIFY `ticketid` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `webtraffic`
--
ALTER TABLE `webtraffic`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `speaker`
--
ALTER TABLE `speaker`
  ADD CONSTRAINT `speaker_eventid_foreign` FOREIGN KEY (`eventid`) REFERENCES `events` (`eventid`);

--
-- Constraints for table `ticketsold`
--
ALTER TABLE `ticketsold`
  ADD CONSTRAINT `ticketsold_eventid_foreign` FOREIGN KEY (`eventid`) REFERENCES `events` (`eventid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
