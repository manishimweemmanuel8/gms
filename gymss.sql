-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Mar 16, 2020 at 09:39 PM
-- Server version: 5.7.26
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `gms`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendances`
--

CREATE TABLE `attendances` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `payment_id` int(11) NOT NULL,
  `receptionist_id` int(11) NOT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `attendances`
--

INSERT INTO `attendances` (`id`, `payment_id`, `receptionist_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(15, 7, 1, '2020-03-16', '2020-03-16 19:36:51', NULL),
(16, 26, 3, '2020-03-16', '2020-03-16 19:39:17', NULL),
(17, 26, 3, '2020-03-16', '2020-03-16 19:39:19', NULL),
(18, 26, 3, '2020-03-16', '2020-03-16 19:39:20', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `corporates`
--

CREATE TABLE `corporates` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `names` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `representative` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `corporates`
--

INSERT INTO `corporates` (`id`, `names`, `email`, `representative`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'mtn', 'mtn@gmail.com', NULL, '2020-03-13 00:18:09', '2020-03-13 00:18:09', NULL),
(2, 'braliirwaaaa', 'bralirwa@gmail.com', NULL, '2020-03-13 00:20:35', '2020-03-13 00:26:33', NULL),
(3, 'MANISHIMWE emmauel', 'manishimweemmanuel8@gmail.com', NULL, '2020-03-13 00:21:43', '2020-03-13 00:21:46', '2020-03-13 00:21:46'),
(4, 'self', 'self@gmail.com', NULL, '2020-03-13 04:46:04', '2020-03-13 04:46:04', NULL),
(5, 'hello', 'hello@gmail.com', NULL, '2020-03-16 16:31:17', '2020-03-16 16:31:17', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `corporate_attendances`
--

CREATE TABLE `corporate_attendances` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `paymentcorporate_id` int(11) NOT NULL,
  `receptionist_id` int(11) NOT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `corporate_attendances`
--

INSERT INTO `corporate_attendances` (`id`, `paymentcorporate_id`, `receptionist_id`, `created_at`, `updated_at`) VALUES
(4, 6, 3, '2020-03-16', '2020-03-16 19:29:24');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `names` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cardCode` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `corporate_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `names`, `cardCode`, `phone`, `type`, `corporate_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(4, 'irakoze', '1111111', '', 'corporate', '1', '2020-03-13 12:51:20', NULL, NULL),
(5, 'muneza', '222222', '', 'corporate', '1', '2020-03-13 12:51:20', NULL, NULL),
(6, 'karenzi', '328346124', '', 'corporate', '1', '2020-03-13 12:51:20', NULL, NULL),
(14, 'irakoze blaise', '3283461', '', 'committed', '4', '2020-03-15 08:45:27', '2020-03-15 08:45:27', NULL),
(20, 'manishimwe emmanuel', '250788574', '', 'committed', '4', '2020-03-15 09:19:17', '2020-03-15 09:26:44', '2020-03-15 09:26:44'),
(21, 'manishimwe emmanuel', '32834612', '0788574596', 'committed', '4', '2020-03-15 09:45:38', '2020-03-15 09:46:06', '2020-03-15 09:46:06'),
(24, 'manishimwe kalisa', '873788574596', '0788574596', 'committed', '4', '2020-03-15 09:47:19', '2020-03-15 09:52:51', NULL),
(25, 'session', '1', '328346124', 'session', '4', '2020-03-16 15:47:31', '2020-03-16 15:47:31', NULL),
(27, 'session', '', '32834612', 'session', '4', '2020-03-16 16:03:11', '2020-03-16 16:56:22', '2020-03-16 16:56:22'),
(29, 'session', 'Y2c6KocyUu8efM0', '32834619', 'session', '4', '2020-03-16 16:08:40', '2020-03-16 16:08:40', NULL),
(30, 'session', 'GD2d0Uy9Cyj9Uif', '3283461', 'session', '4', '2020-03-16 16:08:50', '2020-03-16 16:08:50', NULL),
(31, 'ngabire 97te', '12334455', '07885745736', 'committed', '4', '2020-03-16 16:54:32', '2020-03-16 16:56:02', '2020-03-16 16:56:02'),
(32, 'session', 'BuL8yKBWE9XvH1Q', '0781194127', 'session', '4', '2020-03-16 19:37:44', '2020-03-16 19:37:44', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `managers`
--

CREATE TABLE `managers` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `managers`
--

INSERT INTO `managers` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'manager1', 'manager@gmail.com', NULL, '$2y$10$wzPyX2D0r76difLbv8Mff.FCjou0uzfVNHDRTB3H9NO502eOP/uJe', NULL, '2020-03-12 04:01:31', '2020-03-12 04:01:31'),
(2, 'manager2', 'manager2@gmail.com', NULL, '$2y$10$PUNV116q5t1kLi6P4olrgu7ksIo6dvzXzlKdbr2D7ID5TOCPKJT9e', NULL, '2020-03-12 04:02:06', '2020-03-12 04:02:06');

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
(3, '2020_03_12_032034_create_managers_table', 1),
(4, '2020_03_12_032048_create_receptionists_table', 1),
(5, '2020_03_12_032750_create_customers_table', 1),
(6, '2020_03_12_032819_create_attendances_table', 1),
(7, '2020_03_12_032835_create_payments_table', 1),
(8, '2020_03_12_032959_create_subscriptions_table', 1),
(9, '2020_03_12_033058_create_corporates_table', 1),
(10, '2020_03_12_033116_create_payment_corporates_table', 2),
(11, '2020_03_12_034007_create_corporate_attendances_table', 3);

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
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer_id` int(11) NOT NULL,
  `receptionist_id` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subscription_id` int(11) NOT NULL,
  `expirydate` date NOT NULL,
  `amount` int(50) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `customer_id`, `receptionist_id`, `subscription_id`, `expirydate`, `amount`, `created_at`, `updated_at`, `deleted_at`) VALUES
(2, 4, 'receptionist1', 3, '2020-04-15', 40000, '2020-03-15 08:43:44', '2020-03-15 08:43:44', NULL),
(3, 14, 'receptionist1', 3, '2020-04-15', 40000, '2020-03-15 08:45:27', '2020-03-15 08:45:27', NULL),
(4, 14, 'receptionist1', 3, '2020-04-15', 40000, '2020-03-15 08:46:14', '2020-03-15 08:46:14', NULL),
(5, 20, 'receptionist1', 3, '2020-04-15', 40000, '2020-03-15 09:19:17', '2020-03-15 09:19:17', NULL),
(6, 20, 'receptionist1', 3, '2020-04-15', 40000, '2020-03-15 09:26:22', '2020-03-15 09:26:22', NULL),
(7, 21, 'receptionist1', 6, '2020-04-15', 380000, '2020-03-15 09:45:38', '2020-03-15 10:22:07', NULL),
(8, 24, 'receptionist1', 3, '2020-04-15', 40000, '2020-03-15 09:47:19', '2020-03-15 10:08:49', '2020-03-15 10:08:49'),
(9, 25, 'receptionist1', 2, '2020-03-16', 5000, '2020-03-16 15:47:31', '2020-03-16 15:47:31', NULL),
(10, 25, 'receptionist1', 2, '2020-03-16', 5000, '2020-03-16 15:49:43', '2020-03-16 15:49:43', NULL),
(11, 25, 'receptionist1', 2, '2020-03-16', 5000, '2020-03-16 15:51:34', '2020-03-16 15:51:34', NULL),
(12, 25, 'receptionist1', 2, '2020-03-16', 5000, '2020-03-16 15:52:14', '2020-03-16 15:52:14', NULL),
(13, 25, 'receptionist1', 2, '2020-03-16', 5000, '2020-03-16 15:55:56', '2020-03-16 15:55:56', NULL),
(14, 25, 'receptionist1', 2, '2020-03-16', 5000, '2020-03-16 15:59:08', '2020-03-16 15:59:08', NULL),
(15, 25, 'receptionist1', 2, '2020-03-16', 5000, '2020-03-16 15:59:41', '2020-03-16 15:59:41', NULL),
(16, 25, 'receptionist1', 2, '2020-03-16', 5000, '2020-03-16 16:00:49', '2020-03-16 16:00:49', NULL),
(17, 25, 'receptionist1', 2, '2020-03-16', 5000, '2020-03-16 16:00:55', '2020-03-16 16:00:55', NULL),
(18, 27, 'receptionist1', 2, '2020-03-16', 5000, '2020-03-16 16:03:11', '2020-03-16 16:03:11', NULL),
(19, 27, 'receptionist1', 2, '2020-03-16', 5000, '2020-03-16 16:03:16', '2020-03-16 16:03:16', NULL),
(20, 29, 'receptionist1', 2, '2020-03-16', 5000, '2020-03-16 16:08:40', '2020-03-16 16:08:40', NULL),
(21, 29, 'receptionist1', 2, '2020-03-16', 5000, '2020-03-16 16:08:42', '2020-03-16 16:08:42', NULL),
(22, 29, 'receptionist1', 2, '2020-03-16', 5000, '2020-03-16 16:08:45', '2020-03-16 16:08:45', NULL),
(23, 30, 'receptionist1', 2, '2020-03-16', 5000, '2020-03-16 16:08:50', '2020-03-16 16:08:50', NULL),
(24, 30, 'receptionist1', 2, '2020-03-16', 5000, '2020-03-16 16:08:52', '2020-03-16 16:08:52', NULL),
(25, 31, 'receptionist1', 4, '2020-06-16', 100000, '2020-03-16 16:54:32', '2020-03-16 16:59:33', '2020-03-16 16:59:33'),
(26, 32, 'receptionist3', 2, '2020-03-16', 5000, '2020-03-16 19:39:17', '2020-03-16 19:39:17', NULL),
(27, 32, 'receptionist3', 2, '2020-03-16', 5000, '2020-03-16 19:39:19', '2020-03-16 19:39:19', NULL),
(28, 32, 'receptionist3', 2, '2020-03-16', 5000, '2020-03-16 19:39:20', '2020-03-16 19:39:20', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `payment_corporates`
--

CREATE TABLE `payment_corporates` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `corporate_id` int(11) NOT NULL,
  `month` int(11) NOT NULL,
  `amount` double NOT NULL,
  `expirydate` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payment_corporates`
--

INSERT INTO `payment_corporates` (`id`, `corporate_id`, `month`, `amount`, `expirydate`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 2, 6, 1000000, '2020-06-13', '2020-03-13 01:23:27', '2020-03-13 01:51:27', NULL),
(2, 1, 5, 1000000, '2020-06-13', '2020-03-13 01:30:25', '2020-03-13 01:37:28', '2020-03-13 01:37:28');

-- --------------------------------------------------------

--
-- Table structure for table `receptionists`
--

CREATE TABLE `receptionists` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `card_code` bigint(20) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `receptionists`
--

INSERT INTO `receptionists` (`id`, `name`, `email`, `card_code`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'receptionist1', 'receptionist1@gmail.com', 123, NULL, '$2y$10$dSJrpRKRTplt3.x3A.cqme9VUmCWYbXPGOgrUAE1VwMdJfRELMZVW', NULL, '2020-03-12 04:03:08', '2020-03-12 04:03:08'),
(2, 'receptionist2', 'receptionist2@gmail.com', 123, NULL, '$2y$10$lVTegfwlcEMQC1f8jeRyxuvxhXFubkmPDR9WPtV2qf7rKIgmTlgDW', NULL, '2020-03-12 04:03:48', '2020-03-12 04:03:48'),
(3, 'receptionist3', 'receptionist3@gmail.com', 123, NULL, '$2y$10$NwjScLRYGks9oUVQbHRlH.8xLoDaDMsRSvwQiyWkQd5RzNTlDOrsG', NULL, '2020-03-12 04:04:19', '2020-03-12 04:04:19');

-- --------------------------------------------------------

--
-- Table structure for table `subscriptions`
--

CREATE TABLE `subscriptions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` decimal(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subscriptions`
--

INSERT INTO `subscriptions` (`id`, `name`, `amount`, `created_at`, `updated_at`, `deleted_at`) VALUES
(2, 'day', '5000.00', '2020-03-13 12:48:59', '2020-03-13 12:48:59', NULL),
(3, 'month', '40000.00', '2020-03-13 12:49:19', '2020-03-13 12:49:19', NULL),
(4, '3 months', '100000.00', '2020-03-13 12:49:57', '2020-03-13 12:51:28', NULL),
(5, '6 months', '200000.00', '2020-03-13 12:50:24', '2020-03-13 12:51:34', NULL),
(6, '12 months', '380000.00', '2020-03-13 12:51:14', '2020-03-13 12:51:42', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendances`
--
ALTER TABLE `attendances`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `corporates`
--
ALTER TABLE `corporates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `corporate_attendances`
--
ALTER TABLE `corporate_attendances`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `cardCode` (`cardCode`);

--
-- Indexes for table `managers`
--
ALTER TABLE `managers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `managers_email_unique` (`email`);

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
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment_corporates`
--
ALTER TABLE `payment_corporates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `receptionists`
--
ALTER TABLE `receptionists`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `receptionists_email_unique` (`email`);

--
-- Indexes for table `subscriptions`
--
ALTER TABLE `subscriptions`
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
-- AUTO_INCREMENT for table `attendances`
--
ALTER TABLE `attendances`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `corporates`
--
ALTER TABLE `corporates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `corporate_attendances`
--
ALTER TABLE `corporate_attendances`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `managers`
--
ALTER TABLE `managers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `payment_corporates`
--
ALTER TABLE `payment_corporates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `receptionists`
--
ALTER TABLE `receptionists`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `subscriptions`
--
ALTER TABLE `subscriptions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
