-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 22, 2020 at 04:06 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `digital_trading_options`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

DROP TABLE IF EXISTS `admins`;
CREATE TABLE IF NOT EXISTS `admins` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `admins_email_unique` (`email`),
  UNIQUE KEY `admins_username_unique` (`username`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `username`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Administrator', 'admin@email.com', 'admin', NULL, '$2y$12$uzgJwASoDqzc67TuQNyxPemUZIwtxmulXJCYxw/3OfevucVr2hiZS', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `investments`
--

DROP TABLE IF EXISTS `investments`;
CREATE TABLE IF NOT EXISTS `investments` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `invest_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `investment_package_id` int(10) UNSIGNED DEFAULT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `amount` int(11) NOT NULL,
  `is_approved` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `investments_investment_package_id_index` (`investment_package_id`),
  KEY `investments_user_id_index` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `investments`
--

INSERT INTO `investments` (`id`, `invest_id`, `investment_package_id`, `user_id`, `amount`, `is_approved`, `created_at`, `updated_at`) VALUES
(1, 'DMI-36103', 1, 5, 35, 0, '2020-06-06 09:16:05', '2020-06-06 09:16:05'),
(2, 'DMI-89297', 2, 5, 500, 0, '2020-06-06 09:22:02', '2020-06-06 09:22:02'),
(3, 'DMI-52306', 3, 6, 55555, 0, '2020-10-04 06:03:55', '2020-10-04 06:03:55'),
(4, 'DMI-82931', 2, 5, 30000, 0, '2020-10-15 11:26:38', '2020-10-15 11:26:38'),
(5, 'DMI-81073', 2, 10, 30000, 1, '2020-10-16 11:18:01', '2020-10-16 12:09:08'),
(6, 'DMI-84118', 2, 10, 30000, 1, '2020-10-16 11:21:05', '2020-10-16 12:05:46'),
(7, 'DMI-24112', 2, 10, 30000, 1, '2020-10-16 11:22:26', '2020-10-16 12:03:38'),
(8, 'DMI-12832', 1, 10, 10000, 1, '2020-10-16 11:31:01', '2020-10-16 11:59:15');

-- --------------------------------------------------------

--
-- Table structure for table `investment_packages`
--

DROP TABLE IF EXISTS `investment_packages`;
CREATE TABLE IF NOT EXISTS `investment_packages` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `min` int(11) DEFAULT NULL,
  `max` int(11) DEFAULT NULL,
  `referral_bonus` int(11) DEFAULT NULL,
  `monthly_profit` int(11) DEFAULT NULL,
  `days_turnover` int(11) DEFAULT NULL,
  `expert_advice` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deposit_bonus` int(11) DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `roi` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `compound_roi` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `investment_packages`
--

INSERT INTO `investment_packages` (`id`, `name`, `min`, `max`, `referral_bonus`, `monthly_profit`, `days_turnover`, `expert_advice`, `deposit_bonus`, `description`, `roi`, `compound_roi`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'Starter / Regular Funding', 500, 4900, 5, NULL, NULL, '24/7 Support: YES', NULL, 'Build an emergency fund so you can weather any storm. We recommend this for every client, because life happens.', ' ROI: 10% Monthly', NULL, 1, NULL, NULL),
(2, 'Structured Funding', 5000, 49000, 5, NULL, NULL, '24/7 Support: YES', NULL, 'Helps investors lower risk; whether you’re saving for a purchase, short-term goal or a payment plan. This plan will help you achieve it Faster', ' ROI: 14% Monthly', ' Compound ROI: 35% monthl', 1, NULL, NULL),
(3, 'Professional Funding', 50000, 199999, 10, NULL, NULL, '24/7 Support: YES', NULL, 'Start on the path of financial freedom. It may seem far away, but starting sooner makes it easier to get the retirement lifestyle you want.\r\n            (You can make daily/weekly/Monthly deposits till you get to the minimum investment)\r\n            ', '  ROI: 18% Monthly', ' Compound ROI: 55% Monthly', 1, NULL, NULL),
(4, 'Ultimate Funding', 200000, NULL, 10, NULL, NULL, '24/7 Support: YES', NULL, 'Feel free to tell us the structure of investment you desire and we fix you into a custom plan that suits your demand\r\n            ', '  ROI: 20% Mothly', NULL, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_05_30_200519_create_wallets_table', 1),
(5, '2020_05_30_200548_create_admins_table', 1),
(6, '2020_05_30_200614_create_investments_table', 1),
(7, '2020_06_03_082900_create_investment_packages_table', 1),
(9, '2020_10_16_004759_create_transactions_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

DROP TABLE IF EXISTS `transactions`;
CREATE TABLE IF NOT EXISTS `transactions` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `debit` int(11) DEFAULT NULL,
  `credit` int(11) DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`id`, `user_id`, `debit`, `credit`, `description`, `created_at`, `updated_at`) VALUES
(1, 10, 10000, 0, 'You made an investment request', '2020-10-16 11:31:01', '2020-10-16 11:31:01'),
(2, 10, 0, 10000, 'Congratulations, Your Investment Has Been Approved', '2020-10-16 11:59:15', '2020-10-16 11:59:15'),
(3, 10, 0, 30000, 'Congratulations, Your Investment Has Been Approved', '2020-10-16 12:03:38', '2020-10-16 12:03:38'),
(4, 10, 0, 30000, 'Congratulations, Your Investment Has Been Approved', '2020-10-16 12:05:46', '2020-10-16 12:05:46'),
(5, 10, 0, 30000, 'Congratulations, Your Investment Has Been Approved', '2020-10-16 12:09:08', '2020-10-16 12:09:08');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password_backup` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `wallet_id` int(10) UNSIGNED NOT NULL,
  `mobile` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bitcoin_wallet` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 0,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  KEY `users_wallet_id_index` (`wallet_id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `password_backup`, `image`, `wallet_id`, `mobile`, `country`, `state`, `address`, `bitcoin_wallet`, `is_active`, `remember_token`, `created_at`, `updated_at`) VALUES
(10, 'Dexter Neutron', 'ching@nourishingafrica.com', NULL, '$2y$10$jDKlmm1ZuMuSO.aieU0Dwe91IvqDtvU17ACKfEHh4VxB6bCPMp/sC', '11111111', '1602805343WhatsApp Image 2020-09-24 at 11.20.41 AM.jpeg', 13, NULL, 'Australia', 'South Australia', NULL, NULL, 1, NULL, '2020-10-15 22:42:23', '2020-10-15 23:11:18'),
(12, 'Emy Sedde', 'chidng@nourishingafrica.com', NULL, '$2y$10$a6OjlENpUt7zdN7SL9.7O.dMUeHYLJ6mcTuD8digyZYnuZFCrk5Vu', '11111111', '1602968296teju_intense.png', 15, NULL, 'Ashmore and Cartier Island', 'Ashmore and Cartier Island', NULL, NULL, 0, NULL, '2020-10-17 19:58:16', '2020-10-17 19:58:16'),
(11, 'Emy Mba', 'xeddtech@gmail.com', NULL, '$2y$10$k8x4grjIBP07hnCRvRJbuOtqSs/p21Z7h53HXMW3m9g3pdc8U/qhG', '11111111', '1602805547262d208f065b212aa9a40f3b92e04179.jpg', 14, NULL, 'Armenia', 'Lorri', NULL, 'rirnrpr epenrperner rjrprnrjror', 1, NULL, '2020-10-15 22:45:47', '2020-10-15 23:45:39');

-- --------------------------------------------------------

--
-- Table structure for table `wallets`
--

DROP TABLE IF EXISTS `wallets`;
CREATE TABLE IF NOT EXISTS `wallets` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `amount` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wallets`
--

INSERT INTO `wallets` (`id`, `amount`, `created_at`, `updated_at`) VALUES
(11, 0, '2020-10-15 22:37:34', '2020-10-15 22:37:34'),
(10, 0, '2020-10-15 22:33:35', '2020-10-15 22:33:35'),
(9, 0, '2020-10-15 22:32:41', '2020-10-15 22:32:41'),
(8, 0, '2020-10-15 22:30:37', '2020-10-15 22:30:37'),
(7, 0, '2020-10-04 05:59:23', '2020-10-04 05:59:23'),
(6, 723, '2020-06-03 21:51:09', '2020-06-13 10:08:47'),
(12, 0, '2020-10-15 22:39:25', '2020-10-15 22:39:25'),
(13, 0, '2020-10-15 22:42:23', '2020-10-15 22:42:23'),
(14, 0, '2020-10-15 22:45:47', '2020-10-15 22:45:47'),
(15, 0, '2020-10-17 19:58:16', '2020-10-17 19:58:16');

-- --------------------------------------------------------

--
-- Table structure for table `withdrawals`
--

DROP TABLE IF EXISTS `withdrawals`;
CREATE TABLE IF NOT EXISTS `withdrawals` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `bitcoin_address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` int(11) NOT NULL,
  `is_approved` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `withdrawals_user_id_index` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `withdrawals`
--

INSERT INTO `withdrawals` (`id`, `user_id`, `bitcoin_address`, `amount`, `is_approved`, `created_at`, `updated_at`) VALUES
(1, 5, '', 20, 0, '2020-07-20 13:35:43', '2020-07-20 15:53:26'),
(2, 5, '', 20, 1, '2020-07-20 13:36:30', '2020-07-20 16:06:11'),
(3, 5, '', 230, 1, '2020-07-20 13:41:19', '2020-07-20 15:57:52'),
(4, 5, 'kkkkkkkkkkkkkkkkkkkkkkkkkkk', 50, 0, '2020-09-20 21:17:59', '2020-09-20 21:17:59'),
(5, 5, 'kkkkkkkkkkkkkkkkkkkkkkkkkkk', 344, 0, '2020-10-15 14:07:44', '2020-10-15 14:07:44');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
