-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 30, 2022 at 05:16 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `booking_hotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` bigint(20) UNSIGNED NOT NULL,
  `perfer_method` tinyint(1) NOT NULL,
  `number_of_guests` int(11) NOT NULL,
  `number_of_rooms` int(11) NOT NULL,
  `check_in` date NOT NULL,
  `check_out` date NOT NULL,
  `additional_comments` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
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
(1, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(2, '2022_01_27_110251_create_bookings_table', 1),
(3, '2022_01_27_203130_create_rooms_table', 1),
(4, '2022_01_29_205027_create_save_contacts_table', 1);

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
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_room` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`id`, `name_room`, `description`, `details`, `image`, `created_at`, `updated_at`) VALUES
(1, 'STANDARD SINGLE ROOM\r\n', 'Our standard rooms designed for guests looking to spend a night tasting relaxation and a peace of mind.', 'Our standard single room is comprised of a king sized bed, a minibar, a seating area, one TV backed by a multitude of satellite channels, it\'s very own balcony which you can use to relax and enjoy a breath of fresh air. It\'s amenities include: A shower, bath, telephone, air conditioning, hairdryer, free toiletries, toilet, private bathroom, slippers, ironing machine and table, wake-up service, electric kettle and a wardrobe/closet. The room\'s freshness and cleanliness topped with our highest grade service allows you to enjoy an experience that is unparalleled. ', 'STANDARD.jpg', '2022-01-27 17:44:32', '2022-01-27 17:44:34'),
(2, 'JUNIOR SUITE', 'A more sophisticated setting targeted at guests staying for business.\r\n', 'Our Junior Suite is designed to meet the requirements of those individuals here on stay for business. Featuring it\'s own sitting area that holds up to five people, a working desk, a King sized bed, two TV\'s, with it\'s own balcony view for a refreshing breath of air after a long day\'s work, our Junior Suite encompasses your needs. It\'s amenities include: A shower, bath, safety deposit box, telephone, air conditioning, hairdryer, kitchenette, bathrobe, free toiletries, toilet, microwave, private bathroom, slippers, ironing machine and table, carpeted, sofa, wake-up service, electric kettle, kitchenware, wardrobe/closet, and a dining table.\r\nNothing is better than a great night\'s sleep after a long and tiresome day of work, bearing that in mind, we have accustomed our Junior Suite to meet such criteria\'s. ', 'JUNIOR.jpg', '2022-01-11 17:44:35', '2022-01-27 17:44:53'),
(3, 'STANDARD TWIN ROOM\r\n', 'Our standard rooms designed for guests looking to spend a night tasting relaxation and a peace of mind alongside a friend or family member.', 'Our standard twin room is comprised of a two single sized beds, a minibar, a seating area, one TV backed by a multitude of satellite channels, it\'s very own balcony which you can use to relax and enjoy a breath of fresh air. It\'s amenities include: A shower, bath, telephone, air conditioning, hairdryer, free toiletries, toilet, private bathroom, ironing machine and table, slippers, wake-up service, electric kettle and a wardrobe/closet. The room\'s freshness and cleanliness topped with our highest grade service allows you to enjoy an experience that is unparalleled alongside a friend or family member.', 'TWIN_ROOM.jpg', '2022-01-02 17:44:39', '2022-01-27 17:44:54');

-- --------------------------------------------------------

--
-- Table structure for table `save_contacts`
--

CREATE TABLE `save_contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `bookings_email_unique` (`email`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `save_contacts`
--
ALTER TABLE `save_contacts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `save_contacts_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `save_contacts`
--
ALTER TABLE `save_contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
