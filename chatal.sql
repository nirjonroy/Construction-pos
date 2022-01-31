-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 31, 2022 at 01:09 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chatal`
--

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `name`, `description`, `status`, `created_at`, `updated_at`) VALUES
(2, 'Nazirshail', 'Excellent  Brand', 1, NULL, '2022-01-24 23:11:07');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `description`, `status`, `created_at`, `updated_at`) VALUES
(2, 'Rice', 'Rice Description', 1, NULL, '2022-01-24 05:50:40'),
(3, 'Corn', 'dsafjl', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `phone`, `address`, `description`, `created_at`, `updated_at`) VALUES
(2, 'Customer 1', '0123456', 'Dhaka', 'dkdk', NULL, '2022-01-24 04:38:14');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2022_01_23_052835_create_permission_tables', 1),
(5, '2022_01_24_062010_create_suppliers_table', 2),
(6, '2022_01_24_092702_create_customers_table', 3),
(7, '2022_01_24_110741_create_categories_table', 4),
(8, '2022_01_24_123030_create_brands_table', 5),
(9, '2022_01_25_054822_create_units_table', 6),
(10, '2022_01_25_075019_create_products_table', 7),
(11, '2022_01_25_104648_create_purchases_table', 8),
(12, '2022_01_26_112212_create_purchase_details_table', 9),
(13, '2022_01_30_060745_create_quantity_stores_table', 10),
(14, '2022_01_31_091346_create_sells_table', 11),
(15, '2022_01_31_091917_create_sell_details_table', 11);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'blog.create', 'web', '2022-01-23 05:36:08', '2022-01-23 05:36:08'),
(2, 'blog.view', 'web', '2022-01-23 05:36:08', '2022-01-23 05:36:08'),
(3, 'blog.edit', 'web', '2022-01-23 05:36:08', '2022-01-23 05:36:08'),
(4, 'blog.delete', 'web', '2022-01-23 05:36:09', '2022-01-23 05:36:09'),
(5, 'blog.approve', 'web', '2022-01-23 05:36:09', '2022-01-23 05:36:09'),
(6, 'admin.create', 'web', '2022-01-23 05:36:09', '2022-01-23 05:36:09'),
(7, 'admin.view', 'web', '2022-01-23 05:36:09', '2022-01-23 05:36:09'),
(8, 'admin.edit', 'web', '2022-01-23 05:36:09', '2022-01-23 05:36:09'),
(9, 'admin.delete', 'web', '2022-01-23 05:36:09', '2022-01-23 05:36:09'),
(10, 'admin.approve', 'web', '2022-01-23 05:36:09', '2022-01-23 05:36:09'),
(11, 'role.create', 'web', '2022-01-23 05:36:09', '2022-01-23 05:36:09'),
(12, 'role.view', 'web', '2022-01-23 05:36:09', '2022-01-23 05:36:09'),
(13, 'role.edit', 'web', '2022-01-23 05:36:09', '2022-01-23 05:36:09'),
(14, 'role.delete', 'web', '2022-01-23 05:36:09', '2022-01-23 05:36:09'),
(15, 'role.approve', 'web', '2022-01-23 05:36:09', '2022-01-23 05:36:09'),
(16, 'profile.create', 'web', '2022-01-23 05:36:09', '2022-01-23 05:36:09'),
(17, 'profile.view', 'web', '2022-01-23 05:36:09', '2022-01-23 05:36:09'),
(18, 'profile.edit', 'web', '2022-01-23 05:36:09', '2022-01-23 05:36:09'),
(19, 'profile.delete', 'web', '2022-01-23 05:36:09', '2022-01-23 05:36:09'),
(20, 'profile.approve', 'web', '2022-01-23 05:36:09', '2022-01-23 05:36:09');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int(11) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `unit_id` int(11) NOT NULL,
  `price` decimal(5,2) DEFAULT NULL,
  `description` varchar(225) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `category_id`, `brand_id`, `unit_id`, `price`, `description`, `created_at`, `updated_at`) VALUES
(2, 'Palkiwala Nazirshail Rice1', 2, 2, 2, '80.00', 'Product Description is here....................', NULL, '2022-01-25 04:09:07'),
(3, 'Miniket Rice', 2, 2, 2, '65.00', 'dd', NULL, NULL),
(4, 'Rice 3', 2, 2, 2, '75.00', 'sdfasfs', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `purchases`
--

CREATE TABLE `purchases` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `supplier_id` int(11) NOT NULL,
  `invoice_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` date NOT NULL,
  `total_quantity` decimal(20,2) NOT NULL DEFAULT 0.00,
  `total_price` decimal(20,2) NOT NULL DEFAULT 0.00,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_by` int(11) DEFAULT NULL,
  `deleted_at` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `purchases`
--

INSERT INTO `purchases` (`id`, `supplier_id`, `invoice_no`, `date`, `total_quantity`, `total_price`, `description`, `payment`, `created_by`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, NULL, '2022-01-29', '3.00', '220.00', NULL, '0', NULL, NULL, '2022-01-29 03:44:30', '2022-01-29 03:44:30'),
(2, 1, NULL, '2022-01-29', '3.00', '220.00', NULL, '0', NULL, NULL, '2022-01-29 03:45:09', '2022-01-29 03:45:09'),
(3, 1, NULL, '2022-01-29', '1.00', '80.00', NULL, '0', NULL, NULL, '2022-01-29 04:49:51', '2022-01-29 04:49:51'),
(4, 1, NULL, '2022-01-29', '3.00', '195.00', NULL, '0', NULL, NULL, '2022-01-29 04:57:23', '2022-01-29 04:57:23'),
(5, 1, NULL, '2022-01-29', '4.00', '320.00', NULL, '0', NULL, NULL, '2022-01-29 05:00:18', '2022-01-29 05:00:18'),
(6, 1, NULL, '2022-01-29', '3.00', '195.00', NULL, '0', NULL, NULL, '2022-01-29 05:01:51', '2022-01-29 05:01:51'),
(7, 1, NULL, '2022-01-29', '1.00', '65.00', NULL, '0', NULL, NULL, '2022-01-29 05:36:13', '2022-01-29 05:36:13'),
(8, 1, NULL, '2022-01-29', '1.00', '80.00', NULL, '0', NULL, NULL, '2022-01-29 05:36:54', '2022-01-29 05:36:54'),
(9, 1, NULL, '2022-01-29', '1.00', '80.00', NULL, '0', NULL, NULL, '2022-01-29 05:38:34', '2022-01-29 05:38:34'),
(10, 3, NULL, '2022-01-30', '4.00', '260.00', NULL, '260', NULL, NULL, '2022-01-29 23:27:02', '2022-01-29 23:27:02'),
(11, 3, NULL, '2022-01-30', '1.00', '65.00', NULL, '65', NULL, NULL, '2022-01-30 00:35:17', '2022-01-30 00:35:17'),
(12, 3, '46544310', '2022-01-31', '2.00', '130.00', NULL, '100', NULL, NULL, '2022-01-30 23:39:06', '2022-01-30 23:39:06'),
(13, 3, '26731350', '2022-01-31', '5.00', '325.00', 'dded', '300', NULL, NULL, '2022-01-31 00:58:40', '2022-01-31 00:58:40');

-- --------------------------------------------------------

--
-- Table structure for table `purchase_details`
--

CREATE TABLE `purchase_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `invoice_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `purchase_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `quantity` decimal(20,2) NOT NULL DEFAULT 0.00,
  `price` decimal(20,2) NOT NULL DEFAULT 0.00,
  `total_price` decimal(20,2) NOT NULL DEFAULT 0.00,
  `created_by` int(11) DEFAULT NULL,
  `deleted_at` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `purchase_details`
--

INSERT INTO `purchase_details` (`id`, `invoice_no`, `purchase_id`, `product_id`, `quantity`, `price`, `total_price`, `created_by`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, NULL, 1, 2, '1.00', '0.00', '0.00', NULL, NULL, NULL, NULL),
(2, NULL, NULL, 3, '0.00', '0.00', '0.00', NULL, NULL, NULL, NULL),
(3, NULL, NULL, 4, '0.00', '0.00', '0.00', NULL, NULL, NULL, NULL),
(4, NULL, 2, 2, '1.00', '80.00', '0.00', NULL, NULL, NULL, NULL),
(5, NULL, 2, 3, '1.00', '65.00', '0.00', NULL, NULL, NULL, NULL),
(6, NULL, 2, 4, '1.00', '75.00', '0.00', NULL, NULL, NULL, NULL),
(7, NULL, 3, NULL, '1.00', '80.00', '0.00', NULL, NULL, NULL, NULL),
(8, NULL, 4, NULL, '3.00', '65.00', '0.00', NULL, NULL, NULL, NULL),
(9, NULL, 5, NULL, '4.00', '80.00', '0.00', NULL, NULL, NULL, NULL),
(10, NULL, 6, NULL, '3.00', '65.00', '0.00', NULL, NULL, NULL, NULL),
(11, NULL, 7, NULL, '1.00', '65.00', '0.00', NULL, NULL, NULL, NULL),
(12, NULL, 9, 2, '1.00', '80.00', '0.00', NULL, NULL, NULL, NULL),
(13, NULL, 10, 3, '4.00', '65.00', '0.00', NULL, NULL, NULL, NULL),
(14, NULL, 11, 3, '1.00', '65.00', '0.00', NULL, NULL, NULL, NULL),
(15, NULL, 12, 3, '2.00', '65.00', '0.00', NULL, NULL, NULL, NULL),
(16, NULL, 13, 3, '5.00', '65.00', '0.00', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `quantity_stores`
--

CREATE TABLE `quantity_stores` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` smallint(6) NOT NULL,
  `quantity_available` decimal(20,2) DEFAULT 0.00,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'web', '2022-01-23 05:36:08', '2022-01-23 05:36:08'),
(2, 'superadmin', 'web', '2022-01-23 05:36:08', '2022-01-23 05:36:08'),
(3, 'edit', 'web', '2022-01-23 05:36:08', '2022-01-23 05:36:08'),
(4, 'user', 'web', '2022-01-23 05:36:08', '2022-01-23 05:36:08');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 2),
(2, 2),
(3, 2),
(4, 2),
(5, 2),
(6, 2),
(7, 2),
(8, 2),
(9, 2),
(10, 2),
(11, 2),
(12, 2),
(13, 2),
(14, 2),
(15, 2),
(16, 2),
(17, 2),
(18, 2),
(19, 2),
(20, 2);

-- --------------------------------------------------------

--
-- Table structure for table `sells`
--

CREATE TABLE `sells` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer_id` int(11) NOT NULL,
  `invoice_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` date NOT NULL,
  `total_quantity` decimal(20,2) NOT NULL DEFAULT 0.00,
  `total_price` decimal(20,2) NOT NULL DEFAULT 0.00,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `created_by` int(11) DEFAULT NULL,
  `deleted_at` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sells`
--

INSERT INTO `sells` (`id`, `customer_id`, `invoice_no`, `date`, `total_quantity`, `total_price`, `description`, `payment`, `created_by`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 2, '81162139', '2022-01-31', '3.00', '240.00', NULL, '200', NULL, NULL, '2022-01-31 04:08:49', '2022-01-31 04:08:49');

-- --------------------------------------------------------

--
-- Table structure for table `sell_details`
--

CREATE TABLE `sell_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `invoice_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sell_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `quantity` decimal(20,2) NOT NULL DEFAULT 0.00,
  `price` decimal(20,2) NOT NULL DEFAULT 0.00,
  `total_price` decimal(20,2) NOT NULL DEFAULT 0.00,
  `created_by` int(11) DEFAULT NULL,
  `deleted_at` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sell_details`
--

INSERT INTO `sell_details` (`id`, `invoice_no`, `sell_id`, `product_id`, `quantity`, `price`, `total_price`, `created_by`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, NULL, 1, 2, '3.00', '80.00', '0.00', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `suppliers`
--

CREATE TABLE `suppliers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `suppliers`
--

INSERT INTO `suppliers` (`id`, `name`, `phone`, `address`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Admin', '01518652451', 'ss', '55', NULL, '2022-01-24 02:02:37'),
(3, 'new', '000', 'dsaf', 'dfd', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `units`
--

CREATE TABLE `units` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `units`
--

INSERT INTO `units` (`id`, `name`, `description`, `status`, `created_at`, `updated_at`) VALUES
(2, 'KG', 'Kilograms', 1, NULL, '2022-01-25 01:12:26');

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
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', NULL, '$2y$10$FpvYQ3njU9b/9zIQU8M2WuEoI5uNYB9u1.r6pjFQ9hpU5.RdMdpkq', NULL, '2022-01-23 05:36:08', '2022-01-23 05:36:08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `purchases`
--
ALTER TABLE `purchases`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `purchase_details`
--
ALTER TABLE `purchase_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quantity_stores`
--
ALTER TABLE `quantity_stores`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `sells`
--
ALTER TABLE `sells`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sell_details`
--
ALTER TABLE `sell_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `suppliers`
--
ALTER TABLE `suppliers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `units`
--
ALTER TABLE `units`
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
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `purchases`
--
ALTER TABLE `purchases`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `purchase_details`
--
ALTER TABLE `purchase_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `quantity_stores`
--
ALTER TABLE `quantity_stores`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sells`
--
ALTER TABLE `sells`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sell_details`
--
ALTER TABLE `sell_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `suppliers`
--
ALTER TABLE `suppliers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `units`
--
ALTER TABLE `units`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
