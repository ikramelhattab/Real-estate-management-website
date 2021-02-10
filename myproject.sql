-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 10, 2021 at 11:32 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `parent_id` int(10) UNSIGNED DEFAULT NULL,
  `order` int(11) NOT NULL DEFAULT 1,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `parent_id`, `order`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, NULL, 1, 'S0', 'S0', '2020-10-20 21:28:23', '2020-10-20 21:43:17'),
(2, NULL, 1, 'S1', 's1', '2020-10-20 21:28:23', '2020-10-20 21:43:31'),
(3, NULL, 1, 'S2', 's2', '2020-10-20 21:43:43', '2020-10-20 21:43:43'),
(4, NULL, 1, 'condo', 'condo', '2020-10-20 21:43:51', '2020-10-20 21:43:51'),
(5, NULL, 1, 'cottage', 'cottage', '2020-10-20 21:44:00', '2020-10-20 21:44:00'),
(6, NULL, 1, 'Villa', 'villa', '2020-10-20 21:44:29', '2020-10-20 21:44:29'),
(7, NULL, 1, 'house', 'house', '2020-10-20 21:44:38', '2020-10-20 21:44:38');

-- --------------------------------------------------------

--
-- Table structure for table `compteurs`
--

CREATE TABLE `compteurs` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `id_local` int(11) DEFAULT NULL,
  `id_type` int(11) DEFAULT NULL,
  `num_compteur` bigint(20) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `compteurs`
--

INSERT INTO `compteurs` (`id`, `id_user`, `id_local`, `id_type`, `num_compteur`, `date`, `photo`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 3, 0, '2020-10-15', 'WhatsApp-Image-2020-04-16-at-11.31.10-AM-3-1-82x60.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `message`, `created_at`, `updated_at`) VALUES
(10, 'Ikram', 'your@email.com', 'need help', '2020-10-22 20:51:29', '2020-10-22 20:51:29');

-- --------------------------------------------------------

--
-- Table structure for table `data_rows`
--

CREATE TABLE `data_rows` (
  `id` int(10) UNSIGNED NOT NULL,
  `data_type_id` int(10) UNSIGNED NOT NULL,
  `field` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `required` tinyint(1) NOT NULL DEFAULT 0,
  `browse` tinyint(1) NOT NULL DEFAULT 1,
  `read` tinyint(1) NOT NULL DEFAULT 1,
  `edit` tinyint(1) NOT NULL DEFAULT 1,
  `add` tinyint(1) NOT NULL DEFAULT 1,
  `delete` tinyint(1) NOT NULL DEFAULT 1,
  `details` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `data_rows`
--

INSERT INTO `data_rows` (`id`, `data_type_id`, `field`, `type`, `display_name`, `required`, `browse`, `read`, `edit`, `add`, `delete`, `details`, `order`) VALUES
(1, 1, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(2, 1, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, NULL, 2),
(3, 1, 'email', 'text', 'Email', 1, 1, 1, 1, 1, 1, NULL, 3),
(4, 1, 'password', 'password', 'Password', 1, 0, 0, 1, 1, 0, NULL, 4),
(5, 1, 'remember_token', 'text', 'Remember Token', 0, 0, 0, 0, 0, 0, NULL, 5),
(6, 1, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 0, 0, 0, NULL, 6),
(7, 1, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 7),
(8, 1, 'avatar', 'image', 'Avatar', 0, 1, 1, 1, 1, 1, NULL, 8),
(9, 1, 'user_belongsto_role_relationship', 'relationship', 'Role', 0, 1, 1, 1, 1, 0, '{\"model\":\"TCG\\\\Voyager\\\\Models\\\\Role\",\"table\":\"roles\",\"type\":\"belongsTo\",\"column\":\"role_id\",\"key\":\"id\",\"label\":\"display_name\",\"pivot_table\":\"roles\",\"pivot\":0}', 10),
(10, 1, 'user_belongstomany_role_relationship', 'relationship', 'Roles', 0, 1, 1, 1, 1, 0, '{\"model\":\"TCG\\\\Voyager\\\\Models\\\\Role\",\"table\":\"roles\",\"type\":\"belongsToMany\",\"column\":\"id\",\"key\":\"id\",\"label\":\"display_name\",\"pivot_table\":\"user_roles\",\"pivot\":\"1\",\"taggable\":\"0\"}', 11),
(11, 1, 'settings', 'hidden', 'Settings', 0, 0, 0, 0, 0, 0, NULL, 12),
(12, 2, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(13, 2, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, NULL, 2),
(14, 2, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 0, NULL, 3),
(15, 2, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 4),
(16, 3, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(17, 3, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, NULL, 2),
(18, 3, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 0, NULL, 3),
(19, 3, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 4),
(20, 3, 'display_name', 'text', 'Display Name', 1, 1, 1, 1, 1, 1, NULL, 5),
(21, 1, 'role_id', 'text', 'Role', 1, 1, 1, 1, 1, 1, NULL, 9),
(22, 4, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(23, 4, 'parent_id', 'select_dropdown', 'Parent', 0, 0, 1, 1, 1, 1, '{\"default\":\"\",\"null\":\"\",\"options\":{\"\":\"-- None --\"},\"relationship\":{\"key\":\"id\",\"label\":\"name\"}}', 2),
(24, 4, 'order', 'text', 'Order', 1, 1, 1, 1, 1, 1, '{\"default\":1}', 3),
(25, 4, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, NULL, 4),
(26, 4, 'slug', 'text', 'Slug', 1, 1, 1, 1, 1, 1, '{\"slugify\":{\"origin\":\"name\"}}', 5),
(27, 4, 'created_at', 'timestamp', 'Created At', 0, 0, 1, 0, 0, 0, NULL, 6),
(28, 4, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 7),
(29, 5, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(30, 5, 'author_id', 'text', 'Author', 1, 0, 1, 1, 0, 1, NULL, 2),
(31, 5, 'category_id', 'text', 'Category', 1, 0, 1, 1, 1, 0, NULL, 3),
(32, 5, 'title', 'text', 'Title', 1, 1, 1, 1, 1, 1, NULL, 4),
(33, 5, 'excerpt', 'text_area', 'Excerpt', 1, 0, 1, 1, 1, 1, NULL, 5),
(34, 5, 'body', 'rich_text_box', 'Body', 1, 0, 1, 1, 1, 1, NULL, 6),
(35, 5, 'image', 'image', 'Post Image', 0, 1, 1, 1, 1, 1, '{\"resize\":{\"width\":\"1000\",\"height\":\"null\"},\"quality\":\"70%\",\"upsize\":true,\"thumbnails\":[{\"name\":\"medium\",\"scale\":\"50%\"},{\"name\":\"small\",\"scale\":\"25%\"},{\"name\":\"cropped\",\"crop\":{\"width\":\"300\",\"height\":\"250\"}}]}', 7),
(36, 5, 'slug', 'text', 'Slug', 1, 0, 1, 1, 1, 1, '{\"slugify\":{\"origin\":\"title\",\"forceUpdate\":true},\"validation\":{\"rule\":\"unique:posts,slug\"}}', 8),
(37, 5, 'meta_description', 'text_area', 'Meta Description', 1, 0, 1, 1, 1, 1, NULL, 9),
(38, 5, 'meta_keywords', 'text_area', 'Meta Keywords', 1, 0, 1, 1, 1, 1, NULL, 10),
(39, 5, 'status', 'select_dropdown', 'Status', 1, 1, 1, 1, 1, 1, '{\"default\":\"DRAFT\",\"options\":{\"PUBLISHED\":\"published\",\"DRAFT\":\"draft\",\"PENDING\":\"pending\"}}', 11),
(40, 5, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 0, 0, 0, NULL, 12),
(41, 5, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 13),
(42, 5, 'seo_title', 'text', 'SEO Title', 0, 1, 1, 1, 1, 1, NULL, 14),
(43, 5, 'featured', 'checkbox', 'Featured', 1, 1, 1, 1, 1, 1, NULL, 15),
(44, 6, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(45, 6, 'author_id', 'text', 'Author', 1, 0, 0, 0, 0, 0, NULL, 2),
(46, 6, 'title', 'text', 'Title', 1, 1, 1, 1, 1, 1, NULL, 3),
(47, 6, 'excerpt', 'text_area', 'Excerpt', 1, 0, 1, 1, 1, 1, NULL, 4),
(48, 6, 'body', 'rich_text_box', 'Body', 1, 0, 1, 1, 1, 1, NULL, 5),
(49, 6, 'slug', 'text', 'Slug', 1, 0, 1, 1, 1, 1, '{\"slugify\":{\"origin\":\"title\"},\"validation\":{\"rule\":\"unique:pages,slug\"}}', 6),
(50, 6, 'meta_description', 'text', 'Meta Description', 1, 0, 1, 1, 1, 1, NULL, 7),
(51, 6, 'meta_keywords', 'text', 'Meta Keywords', 1, 0, 1, 1, 1, 1, NULL, 8),
(52, 6, 'status', 'select_dropdown', 'Status', 1, 1, 1, 1, 1, 1, '{\"default\":\"INACTIVE\",\"options\":{\"INACTIVE\":\"INACTIVE\",\"ACTIVE\":\"ACTIVE\"}}', 9),
(53, 6, 'created_at', 'timestamp', 'Created At', 1, 1, 1, 0, 0, 0, NULL, 10),
(54, 6, 'updated_at', 'timestamp', 'Updated At', 1, 0, 0, 0, 0, 0, NULL, 11),
(55, 6, 'image', 'image', 'Page Image', 0, 1, 1, 1, 1, 1, NULL, 12),
(56, 7, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(57, 7, 'name_loc', 'text', 'Name Loc', 0, 1, 1, 1, 1, 1, '{}', 2),
(58, 7, 'description', 'text', 'Description', 0, 1, 1, 1, 1, 1, '{}', 3),
(59, 7, 'photo', 'multiple_images', 'Photo', 0, 1, 1, 1, 1, 1, '{}', 4),
(60, 7, 'surface', 'text', 'Surface', 0, 1, 1, 1, 1, 1, '{}', 5),
(61, 7, 'longitude', 'text', 'Longitude', 0, 1, 1, 1, 1, 1, '{}', 6),
(62, 7, 'altitude', 'text', 'Altitude', 0, 1, 1, 1, 1, 1, '{}', 7),
(63, 7, 'prix', 'text', 'Prix', 0, 1, 1, 1, 1, 1, '{}', 8),
(64, 7, 'prix_s', 'text', 'Prix S', 0, 1, 1, 1, 1, 1, '{}', 9),
(65, 7, 'prix_j', 'text', 'Prix J', 0, 1, 1, 1, 1, 1, '{}', 10),
(66, 7, 'prix_h', 'text', 'Prix H', 0, 1, 1, 1, 1, 1, '{}', 11),
(67, 7, 'cautionnement', 'text', 'Cautionnement', 0, 1, 1, 1, 1, 1, '{}', 12),
(68, 7, 'gouvernaurat', 'text', 'Gouvernaurat', 0, 1, 1, 1, 1, 1, '{}', 13),
(69, 7, 'adress', 'text', 'Adress', 0, 1, 1, 1, 1, 1, '{}', 14),
(70, 7, 'Bedrooms', 'text', 'Bedrooms', 0, 1, 1, 1, 1, 1, '{}', 15),
(71, 7, 'Bathrooms', 'text', 'Bathrooms', 0, 1, 1, 1, 1, 1, '{}', 16),
(72, 7, 'Garages', 'text', 'Garages', 0, 1, 1, 1, 1, 1, '{}', 17),
(73, 7, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 18),
(74, 7, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 19),
(75, 7, 'id_user', 'text', 'Id User', 0, 1, 1, 1, 1, 1, '{}', 20),
(76, 7, 'idCategorie', 'text', 'IdCategorie', 0, 1, 1, 1, 1, 1, '{}', 21),
(77, 7, 'locale_belongsto_category_relationship', 'relationship', 'categories', 0, 1, 1, 1, 1, 1, '{\"model\":\"App\\\\Category\",\"table\":\"categories\",\"type\":\"belongsTo\",\"column\":\"idCategorie\",\"key\":\"id\",\"label\":\"slug\",\"pivot_table\":\"categories\",\"pivot\":\"0\",\"taggable\":\"0\"}', 22),
(78, 7, 'locale_belongsto_user_relationship', 'relationship', 'users', 0, 1, 1, 1, 1, 1, '{\"model\":\"App\\\\User\",\"table\":\"users\",\"type\":\"belongsTo\",\"column\":\"id_user\",\"key\":\"id\",\"label\":\"name\",\"pivot_table\":\"categories\",\"pivot\":\"0\",\"taggable\":\"0\"}', 23),
(79, 11, 'id', 'number', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(80, 11, 'id_locale', 'number', 'Id Locale', 0, 1, 1, 1, 1, 1, '{}', 2),
(81, 11, 'id_user', 'number', 'Id User', 0, 1, 1, 1, 1, 1, '{}', 3),
(82, 11, 'dateDemande', 'timestamp', 'DateDemande', 0, 1, 1, 1, 1, 1, '{}', 4),
(83, 11, 'dateDeb', 'date', 'DateDeb', 0, 1, 1, 1, 1, 1, '{}', 5),
(84, 11, 'datefin', 'date', 'Datefin', 0, 1, 1, 1, 1, 1, '{}', 6),
(85, 11, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 7),
(86, 11, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 8),
(87, 11, 'demande_belongsto_user_relationship', 'relationship', 'users', 0, 1, 1, 1, 1, 1, '{\"model\":\"App\\\\User\",\"table\":\"users\",\"type\":\"belongsTo\",\"column\":\"id_user\",\"key\":\"id\",\"label\":\"name\",\"pivot_table\":\"categories\",\"pivot\":\"0\",\"taggable\":\"0\"}', 9),
(88, 11, 'demande_belongsto_locale_relationship', 'relationship', 'locales', 0, 1, 1, 1, 1, 1, '{\"model\":\"App\\\\Locale\",\"table\":\"locales\",\"type\":\"belongsTo\",\"column\":\"id_locale\",\"key\":\"id\",\"label\":\"name_loc\",\"pivot_table\":\"categories\",\"pivot\":\"0\",\"taggable\":\"0\"}', 10),
(89, 12, 'id', 'number', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(90, 12, 'id_loc', 'number', 'Id Loc', 0, 1, 1, 1, 1, 1, '{}', 2),
(91, 12, 'id_user', 'number', 'Id User', 0, 1, 1, 1, 1, 1, '{}', 3),
(92, 12, 'subject', 'text', 'Subject', 0, 1, 1, 1, 1, 1, '{}', 4),
(93, 12, 'content', 'image', 'Content', 0, 1, 1, 1, 1, 1, '{}', 5),
(94, 12, 'description', 'text', 'Description', 0, 1, 1, 1, 1, 1, '{}', 6),
(95, 12, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 7),
(96, 12, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 8),
(97, 12, 'reclamation_belongsto_user_relationship', 'relationship', 'users', 0, 1, 1, 1, 1, 1, '{\"model\":\"App\\\\User\",\"table\":\"users\",\"type\":\"belongsTo\",\"column\":\"id_user\",\"key\":\"id\",\"label\":\"name\",\"pivot_table\":\"categories\",\"pivot\":\"0\",\"taggable\":\"0\"}', 9),
(98, 12, 'reclamation_belongsto_locale_relationship', 'relationship', 'locales', 0, 1, 1, 1, 1, 1, '{\"model\":\"App\\\\Locale\",\"table\":\"locales\",\"type\":\"belongsTo\",\"column\":\"id_loc\",\"key\":\"id\",\"label\":\"name_loc\",\"pivot_table\":\"categories\",\"pivot\":\"0\",\"taggable\":\"0\"}', 10),
(99, 13, 'id', 'number', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(100, 13, 'id_user', 'number', 'Id User', 0, 1, 1, 1, 1, 1, '{}', 2),
(101, 13, 'id_local', 'number', 'Id Local', 0, 1, 1, 1, 1, 1, '{}', 3),
(102, 13, 'date_deb', 'date', 'Date Deb', 0, 1, 1, 1, 1, 1, '{}', 4),
(103, 13, 'date_fin', 'date', 'Date Fin', 0, 1, 1, 1, 1, 1, '{}', 5),
(104, 13, 'montant', 'number', 'Montant', 0, 1, 1, 1, 1, 1, '{}', 6),
(105, 13, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 7),
(106, 13, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 8),
(107, 13, 'tranch_belongsto_user_relationship', 'relationship', 'users', 0, 1, 1, 1, 1, 1, '{\"model\":\"App\\\\User\",\"table\":\"users\",\"type\":\"belongsTo\",\"column\":\"id_user\",\"key\":\"id\",\"label\":\"name\",\"pivot_table\":\"categories\",\"pivot\":\"0\",\"taggable\":\"0\"}', 9),
(108, 13, 'tranch_belongsto_locale_relationship', 'relationship', 'locales', 0, 1, 1, 1, 1, 1, '{\"model\":\"App\\\\Locale\",\"table\":\"locales\",\"type\":\"belongsTo\",\"column\":\"id_local\",\"key\":\"id\",\"label\":\"name_loc\",\"pivot_table\":\"categories\",\"pivot\":\"0\",\"taggable\":\"0\"}', 10),
(109, 14, 'id', 'number', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(110, 14, 'type', 'text', 'Type', 0, 1, 1, 1, 1, 1, '{}', 2),
(111, 14, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 3),
(112, 14, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 4),
(113, 15, 'id', 'number', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(114, 15, 'id_user', 'number', 'Id User', 0, 1, 1, 1, 1, 1, '{}', 2),
(115, 15, 'id_local', 'number', 'Id Local', 0, 1, 1, 1, 1, 1, '{}', 3),
(116, 15, 'id_type', 'number', 'Id Type', 0, 1, 1, 1, 1, 1, '{}', 4),
(117, 15, 'num_compteur', 'number', 'Num Compteur', 0, 1, 1, 1, 1, 1, '{}', 5),
(118, 15, 'date', 'date', 'Date', 0, 1, 1, 1, 1, 1, '{}', 6),
(119, 15, 'photo', 'image', 'Photo', 0, 1, 1, 1, 1, 1, '{}', 7),
(120, 15, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 8),
(121, 15, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 9),
(122, 15, 'compteur_belongsto_user_relationship', 'relationship', 'users', 0, 1, 1, 1, 1, 1, '{\"model\":\"App\\\\User\",\"table\":\"users\",\"type\":\"belongsTo\",\"column\":\"id_user\",\"key\":\"id\",\"label\":\"name\",\"pivot_table\":\"categories\",\"pivot\":\"0\",\"taggable\":\"0\"}', 10),
(123, 15, 'compteur_belongsto_locale_relationship', 'relationship', 'locales', 0, 1, 1, 1, 1, 1, '{\"model\":\"App\\\\Locale\",\"table\":\"locales\",\"type\":\"belongsTo\",\"column\":\"id_local\",\"key\":\"id\",\"label\":\"name_loc\",\"pivot_table\":\"categories\",\"pivot\":\"0\",\"taggable\":\"0\"}', 11),
(124, 15, 'compteur_belongsto_types_compteur_relationship', 'relationship', 'types_compteurs', 0, 1, 1, 1, 1, 1, '{\"model\":\"App\\\\TypesCompteur\",\"table\":\"types_compteurs\",\"type\":\"belongsTo\",\"column\":\"id_type\",\"key\":\"id\",\"label\":\"type\",\"pivot_table\":\"categories\",\"pivot\":\"0\",\"taggable\":\"0\"}', 12),
(125, 16, 'id', 'number', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(126, 16, 'id_user', 'number', 'Id User', 0, 1, 1, 1, 1, 1, '{}', 2),
(127, 16, 'id_local', 'number', 'Id Local', 0, 1, 1, 1, 1, 1, '{}', 3),
(128, 16, 'id_type', 'number', 'Id Type', 0, 1, 1, 1, 1, 1, '{}', 4),
(129, 16, 'date_fact', 'date', 'Date Fact', 0, 1, 1, 1, 1, 1, '{}', 5),
(130, 16, 'date_limite', 'date', 'Date Limite', 0, 1, 1, 1, 1, 1, '{}', 6),
(131, 16, 'montant_fact', 'text', 'Montant Fact', 0, 1, 1, 1, 1, 1, '{}', 7),
(132, 16, 'photo', 'image', 'Photo', 0, 1, 1, 1, 1, 1, '{}', 8),
(133, 16, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 9),
(134, 16, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 10),
(135, 16, 'facture_belongsto_user_relationship', 'relationship', 'users', 0, 1, 1, 1, 1, 1, '{\"model\":\"App\\\\User\",\"table\":\"users\",\"type\":\"belongsTo\",\"column\":\"id_user\",\"key\":\"id\",\"label\":\"name\",\"pivot_table\":\"categories\",\"pivot\":\"0\",\"taggable\":\"0\"}', 11),
(136, 16, 'facture_belongsto_locale_relationship', 'relationship', 'locales', 0, 1, 1, 1, 1, 1, '{\"model\":\"App\\\\Locale\",\"table\":\"locales\",\"type\":\"belongsTo\",\"column\":\"id_local\",\"key\":\"id\",\"label\":\"name_loc\",\"pivot_table\":\"categories\",\"pivot\":\"0\",\"taggable\":\"0\"}', 12),
(137, 16, 'facture_belongsto_types_compteur_relationship', 'relationship', 'types_compteurs', 0, 1, 1, 1, 1, 1, '{\"model\":\"App\\\\TypesCompteur\",\"table\":\"types_compteurs\",\"type\":\"belongsTo\",\"column\":\"id_type\",\"key\":\"id\",\"label\":\"type\",\"pivot_table\":\"categories\",\"pivot\":\"0\",\"taggable\":\"0\"}', 13),
(138, 18, 'id', 'number', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(139, 18, 'from_id', 'number', 'From Id', 0, 1, 1, 1, 1, 1, '{}', 2),
(140, 18, 'to_id', 'number', 'To Id', 0, 1, 1, 1, 1, 1, '{}', 3),
(141, 18, 'message', 'text', 'Message', 0, 1, 1, 1, 1, 1, '{}', 4),
(142, 18, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 5),
(143, 18, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 6),
(144, 18, 'message_belongsto_user_relationship', 'relationship', 'users', 0, 1, 1, 1, 1, 1, '{\"model\":\"App\\\\User\",\"table\":\"users\",\"type\":\"belongsTo\",\"column\":\"from_id\",\"key\":\"id\",\"label\":\"name\",\"pivot_table\":\"categories\",\"pivot\":\"0\",\"taggable\":\"0\"}', 7),
(145, 18, 'message_belongsto_user_relationship_1', 'relationship', 'users', 0, 1, 1, 1, 1, 1, '{\"model\":\"App\\\\User\",\"table\":\"users\",\"type\":\"belongsTo\",\"column\":\"to_id\",\"key\":\"id\",\"label\":\"name\",\"pivot_table\":\"categories\",\"pivot\":\"0\",\"taggable\":\"0\"}', 8),
(146, 18, 'read_at', 'timestamp', 'Read At', 0, 1, 1, 1, 1, 1, '{}', 7),
(147, 11, 'status', 'number', 'Status', 0, 1, 1, 1, 1, 1, '{}', 9),
(148, 17, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(149, 17, 'name', 'text', 'Name', 0, 1, 1, 1, 1, 1, '{}', 2),
(150, 17, 'email', 'text', 'Email', 0, 1, 1, 1, 1, 1, '{}', 3),
(151, 17, 'message', 'text', 'Message', 0, 1, 1, 1, 1, 1, '{}', 4),
(152, 17, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 5),
(153, 17, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 6),
(154, 7, 'pays', 'text', 'Pays', 0, 1, 1, 1, 1, 1, '{}', 22);

-- --------------------------------------------------------

--
-- Table structure for table `data_types`
--

CREATE TABLE `data_types` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name_singular` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name_plural` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `model_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `policy_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `controller` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `generate_permissions` tinyint(1) NOT NULL DEFAULT 0,
  `server_side` tinyint(4) NOT NULL DEFAULT 0,
  `details` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `data_types`
--

INSERT INTO `data_types` (`id`, `name`, `slug`, `display_name_singular`, `display_name_plural`, `icon`, `model_name`, `policy_name`, `controller`, `description`, `generate_permissions`, `server_side`, `details`, `created_at`, `updated_at`) VALUES
(1, 'users', 'users', 'User', 'Users', 'voyager-person', 'TCG\\Voyager\\Models\\User', 'TCG\\Voyager\\Policies\\UserPolicy', 'TCG\\Voyager\\Http\\Controllers\\VoyagerUserController', '', 1, 0, NULL, '2020-10-20 21:28:02', '2020-10-20 21:28:02'),
(2, 'menus', 'menus', 'Menu', 'Menus', 'voyager-list', 'TCG\\Voyager\\Models\\Menu', NULL, '', '', 1, 0, NULL, '2020-10-20 21:28:02', '2020-10-20 21:28:02'),
(3, 'roles', 'roles', 'Role', 'Roles', 'voyager-lock', 'TCG\\Voyager\\Models\\Role', NULL, 'TCG\\Voyager\\Http\\Controllers\\VoyagerRoleController', '', 1, 0, NULL, '2020-10-20 21:28:02', '2020-10-20 21:28:02'),
(4, 'categories', 'categories', 'Category', 'Categories', 'voyager-categories', 'TCG\\Voyager\\Models\\Category', NULL, '', '', 1, 0, NULL, '2020-10-20 21:28:18', '2020-10-20 21:28:18'),
(5, 'posts', 'posts', 'Post', 'Posts', 'voyager-news', 'TCG\\Voyager\\Models\\Post', 'TCG\\Voyager\\Policies\\PostPolicy', '', '', 1, 0, NULL, '2020-10-20 21:28:25', '2020-10-20 21:28:25'),
(6, 'pages', 'pages', 'Page', 'Pages', 'voyager-file-text', 'TCG\\Voyager\\Models\\Page', NULL, '', '', 1, 0, NULL, '2020-10-20 21:28:30', '2020-10-20 21:28:30'),
(7, 'locales', 'locales', 'Locale', 'Locales', NULL, 'App\\Locale', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2020-10-20 21:41:37', '2020-10-25 13:48:58'),
(11, 'demandes', 'demandes', 'Demande', 'Demandes', NULL, 'App\\Demande', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2020-10-20 22:10:26', '2020-10-21 22:30:14'),
(12, 'reclamations', 'reclamations', 'Reclamation', 'Reclamations', NULL, 'App\\Reclamation', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2020-10-20 22:15:42', '2020-10-25 14:46:23'),
(13, 'tranches', 'tranches', 'Tranch', 'Tranches', NULL, 'App\\Tranch', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2020-10-20 22:23:06', '2020-10-20 22:24:23'),
(14, 'types_compteurs', 'types-compteurs', 'Types Compteur', 'Types Compteurs', NULL, 'App\\TypesCompteur', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null}', '2020-10-20 22:32:49', '2020-10-20 22:32:49'),
(15, 'compteurs', 'compteurs', 'Compteur', 'Compteurs', NULL, 'App\\Compteur', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2020-10-20 22:38:07', '2020-10-25 14:44:04'),
(16, 'factures', 'factures', 'Facture', 'Factures', NULL, 'App\\Facture', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2020-10-20 22:43:04', '2020-10-21 22:43:17'),
(17, 'contacts', 'contacts', 'Contact', 'Contacts', NULL, 'App\\Contact', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2020-10-20 22:55:27', '2020-10-22 19:06:03'),
(18, 'messages', 'messages', 'Message', 'Messages', NULL, 'App\\Message', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2020-10-20 22:58:21', '2020-10-20 23:01:42');

-- --------------------------------------------------------

--
-- Table structure for table `demandes`
--

CREATE TABLE `demandes` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_locale` int(11) DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL,
  `dateDemande` timestamp NULL DEFAULT NULL,
  `dateDeb` date DEFAULT NULL,
  `datefin` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `demandes`
--

INSERT INTO `demandes` (`id`, `id_locale`, `id_user`, `dateDemande`, `dateDeb`, `datefin`, `created_at`, `updated_at`, `status`) VALUES
(1, 1, 1, '2020-10-21 22:28:00', '2020-10-29', '2020-10-28', '2020-10-21 22:30:00', '2020-11-08 22:57:03', 1),
(2, 3, 2, '2020-11-08 22:37:00', '2020-11-08', '2021-03-02', '2020-11-08 22:38:39', '2020-11-08 22:38:39', 1);

-- --------------------------------------------------------

--
-- Table structure for table `factures`
--

CREATE TABLE `factures` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `id_local` int(11) DEFAULT NULL,
  `id_type` int(11) DEFAULT NULL,
  `date_fact` date DEFAULT NULL,
  `date_limite` date DEFAULT NULL,
  `montant_fact` float DEFAULT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `factures`
--

INSERT INTO `factures` (`id`, `id_user`, `id_local`, `id_type`, `date_fact`, `date_limite`, `montant_fact`, `photo`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 3, '2020-10-06', '2020-10-06', 120, 'WhatsApp-Image-2020-04-16-at-11.30.49-AM-1-744x386.jpg', NULL, NULL);

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
-- Table structure for table `locales`
--

CREATE TABLE `locales` (
  `id` int(10) UNSIGNED NOT NULL,
  `name_loc` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `surface` int(11) DEFAULT NULL,
  `longitude` int(11) DEFAULT NULL,
  `altitude` int(11) DEFAULT NULL,
  `prix` float DEFAULT NULL,
  `prix_s` float DEFAULT NULL,
  `prix_j` float DEFAULT NULL,
  `prix_h` float DEFAULT NULL,
  `cautionnement` float DEFAULT NULL,
  `gouvernaurat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `adress` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Bedrooms` int(11) DEFAULT NULL,
  `Bathrooms` int(11) DEFAULT NULL,
  `Garages` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL,
  `idCategorie` int(11) DEFAULT NULL,
  `pays` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `locales`
--

INSERT INTO `locales` (`id`, `name_loc`, `description`, `photo`, `surface`, `longitude`, `altitude`, `prix`, `prix_s`, `prix_j`, `prix_h`, `cautionnement`, `gouvernaurat`, `adress`, `Bedrooms`, `Bathrooms`, `Garages`, `created_at`, `updated_at`, `id_user`, `idCategorie`, `pays`) VALUES
(1, 'd1', 'villa au prés de cité oumrane', '[\"locales\\\\November2020\\\\ViAHTeYih2Xd4hr21hpL.jpg\",\"locales\\\\November2020\\\\vHI97sc87GjdTAnWNYTg.jpg\",\"locales\\\\November2020\\\\OMnMJ9dZT2jV5vlVlxja.jpg\",\"locales\\\\November2020\\\\QoTXayofDLI6qKLvNe8g.jpg\",\"locales\\\\November2020\\\\oth7v7ESTDeLPhzFXwJG.jpg\"]', 500, 23, 858, 2400, 500, 20, 10, 110, 'sousse', 'rue habib bourgiba', 5, 4, 3, '2020-11-08 22:27:00', '2020-11-08 22:27:19', 2, 6, 'Tunisia'),
(3, 'd4', 's2 disponible à 4 personnes', '[\"locales\\\\November2020\\\\YO5Q2XnKERdmHDPZ9KI9.jpg\",\"locales\\\\November2020\\\\98MMBfzUr6gCoHfKIAL2.jpg\",\"locales\\\\November2020\\\\LIxbGXcjiagLtHuMfBwy.jpg\",\"locales\\\\November2020\\\\rHj4tSlQ4ViJRSBZRQeY.jpg\",\"locales\\\\November2020\\\\o1EIB42lhD7LH2iLzagb.jpg\"]', 5000, 120, 12, 500, 12, 12, 12, 12, 'mmmm', 'mm', 5, 5, 5, '2020-11-08 22:26:00', '2020-11-08 22:40:32', 1, 3, 'Tunisia'),
(6, 'd3', 'Villa disponible aux 4 personnes prés de ISSATSO', '[\"locales\\\\October2020\\\\VwoQvt8dAPo2LMRhrs7h.jpg\",\"locales\\\\October2020\\\\6ScuJdoMfdQVdMT3tRli.jpg\",\"locales\\\\October2020\\\\JSwsdqTHQRfIZ6HzwnWg.jpg\",\"locales\\\\October2020\\\\3xEd4MiR2F7y3awKH1uW.jpg\",\"locales\\\\October2020\\\\jo5ySzfNw0aegoScaTIc.jpg\"]', 223, 23, 55, 2400, 500, 100, 50, 1400, 'Sousse', 'Rue Ibn Khaldoun', 4, 3, 2, '2020-10-29 20:39:00', '2020-10-29 22:08:07', 1, 6, 'tunisia');

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'admin', '2020-10-20 21:28:05', '2020-10-20 21:28:05');

-- --------------------------------------------------------

--
-- Table structure for table `menu_items`
--

CREATE TABLE `menu_items` (
  `id` int(10) UNSIGNED NOT NULL,
  `menu_id` int(10) UNSIGNED DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `target` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '_self',
  `icon_class` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `order` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `route` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parameters` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menu_items`
--

INSERT INTO `menu_items` (`id`, `menu_id`, `title`, `url`, `target`, `icon_class`, `color`, `parent_id`, `order`, `created_at`, `updated_at`, `route`, `parameters`) VALUES
(1, 1, 'Dashboard', '', '_self', 'voyager-boat', NULL, NULL, 1, '2020-10-20 21:28:06', '2020-10-20 21:28:06', 'voyager.dashboard', NULL),
(2, 1, 'Media', '', '_self', 'voyager-images', NULL, NULL, 4, '2020-10-20 21:28:06', '2020-11-08 20:51:37', 'voyager.media.index', NULL),
(3, 1, 'Users', '', '_self', 'voyager-person', NULL, NULL, 3, '2020-10-20 21:28:06', '2020-10-20 21:28:06', 'voyager.users.index', NULL),
(4, 1, 'Roles', '', '_self', 'voyager-lock', NULL, NULL, 2, '2020-10-20 21:28:06', '2020-10-20 21:28:06', 'voyager.roles.index', NULL),
(5, 1, 'Tools', '', '_self', 'voyager-tools', NULL, NULL, 18, '2020-10-20 21:28:07', '2020-11-08 20:52:21', NULL, NULL),
(6, 1, 'Menu Builder', '', '_self', 'voyager-list', NULL, 5, 1, '2020-10-20 21:28:07', '2020-11-08 20:51:37', 'voyager.menus.index', NULL),
(7, 1, 'Database', '', '_self', 'voyager-data', NULL, 5, 2, '2020-10-20 21:28:07', '2020-11-08 20:51:38', 'voyager.database.index', NULL),
(8, 1, 'Compass', '', '_self', 'voyager-compass', NULL, 5, 3, '2020-10-20 21:28:07', '2020-11-08 20:51:38', 'voyager.compass.index', NULL),
(9, 1, 'BREAD', '', '_self', 'voyager-bread', NULL, 5, 4, '2020-10-20 21:28:07', '2020-11-08 20:51:38', 'voyager.bread.index', NULL),
(10, 1, 'Settings', '', '_self', 'voyager-settings', NULL, NULL, 19, '2020-10-20 21:28:07', '2020-11-08 20:52:21', 'voyager.settings.index', NULL),
(11, 1, 'Categories', '', '_self', 'voyager-categories', NULL, NULL, 7, '2020-10-20 21:28:21', '2020-11-08 20:51:37', 'voyager.categories.index', NULL),
(12, 1, 'Posts', '', '_self', 'voyager-news', NULL, NULL, 6, '2020-10-20 21:28:28', '2020-11-08 20:52:36', 'voyager.posts.index', NULL),
(13, 1, 'Pages', '', '_self', 'voyager-file-text', NULL, NULL, 5, '2020-10-20 21:28:33', '2020-11-08 20:52:36', 'voyager.pages.index', NULL),
(14, 1, 'Hooks', '', '_self', 'voyager-hook', NULL, 5, 5, '2020-10-20 21:28:43', '2020-11-08 20:51:38', 'voyager.hooks', NULL),
(15, 1, 'Locales', '', '_self', 'voyager-home', '#000000', NULL, 8, '2020-10-20 21:41:38', '2020-11-08 20:51:37', 'voyager.locales.index', 'null'),
(19, 1, 'Demandes', '', '_self', 'voyager-file-text', '#000000', NULL, 9, '2020-10-20 22:10:26', '2020-11-08 20:51:43', 'voyager.demandes.index', 'null'),
(20, 1, 'Reclamations', '', '_self', 'voyager-exclamation', '#000000', NULL, 10, '2020-10-20 22:15:43', '2020-11-08 20:51:49', 'voyager.reclamations.index', 'null'),
(21, 1, 'Tranches', '', '_self', 'voyager-pie-chart', '#000000', NULL, 11, '2020-10-20 22:23:07', '2020-11-08 20:51:52', 'voyager.tranches.index', 'null'),
(22, 1, 'Types Compteurs', '', '_self', 'voyager-categories', '#000000', NULL, 12, '2020-10-20 22:32:49', '2020-11-08 20:52:07', 'voyager.types-compteurs.index', 'null'),
(23, 1, 'Compteurs', '', '_self', 'voyager-dashboard', '#000000', NULL, 13, '2020-10-20 22:38:08', '2020-11-08 20:52:07', 'voyager.compteurs.index', 'null'),
(24, 1, 'Factures', '', '_self', 'voyager-documentation', '#000000', NULL, 15, '2020-10-20 22:43:04', '2020-11-08 20:52:17', 'voyager.factures.index', 'null'),
(25, 1, 'Contacts', '', '_self', 'voyager-mail', '#000000', NULL, 16, '2020-10-20 22:55:28', '2020-11-08 20:52:17', 'voyager.contacts.index', 'null'),
(26, 1, 'Messages', '', '_self', 'voyager-chat', '#000000', NULL, 14, '2020-10-20 22:58:22', '2020-11-08 20:52:17', 'voyager.messages.index', 'null'),
(27, 1, 'Statistiques', '/admin/statistiques', '_self', 'voyager-pie-graph', '#000000', NULL, 17, '2020-10-20 23:14:13', '2020-11-08 20:52:21', NULL, '');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(10) UNSIGNED NOT NULL,
  `from_id` int(11) DEFAULT NULL,
  `to_id` int(11) DEFAULT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `read_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `from_id`, `to_id`, `message`, `created_at`, `updated_at`, `read_at`) VALUES
(2, 1, 2, 'Bonjour. Tout va bien?', '2020-11-08 06:35:00', NULL, '2020-11-15 17:20:00'),
(4, 2, 1, 'bonjour madame. Voici le loyer de l\'appartement d1 pour le mois prochain', '2020-11-08 06:01:00', NULL, '2020-11-08 18:29:00'),
(5, 2, 1, 'j’ai un petit problème. Le chauffe-eau ne marche pas', '2020-11-15 17:15:00', NULL, '2020-11-15 17:15:00'),
(9, 3, 1, 'salut Madame', NULL, NULL, NULL),
(10, 3, 1, '’ai un petit problème. Le chauffe-eau ne marche pas', NULL, NULL, NULL);

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
(2, '2016_01_01_000000_add_voyager_user_fields', 1),
(3, '2016_01_01_000000_create_data_types_table', 1),
(4, '2016_01_01_000000_create_pages_table', 1),
(5, '2016_01_01_000000_create_posts_table', 1),
(6, '2016_02_15_204651_create_categories_table', 1),
(7, '2016_05_19_173453_create_menu_table', 1),
(8, '2016_10_21_190000_create_roles_table', 1),
(9, '2016_10_21_190000_create_settings_table', 1),
(10, '2016_11_30_135954_create_permission_table', 1),
(11, '2016_11_30_141208_create_permission_role_table', 1),
(12, '2016_12_26_201236_data_types__add__server_side', 1),
(13, '2017_01_13_000000_add_route_to_menu_items_table', 1),
(14, '2017_01_14_005015_create_translations_table', 1),
(15, '2017_01_15_000000_make_table_name_nullable_in_permissions_table', 1),
(16, '2017_03_06_000000_add_controller_to_data_types_table', 1),
(17, '2017_04_11_000000_alter_post_nullable_fields_table', 1),
(18, '2017_04_21_000000_add_order_to_data_rows_table', 1),
(19, '2017_07_05_210000_add_policyname_to_data_types_table', 1),
(20, '2017_08_05_000000_add_group_to_settings_table', 1),
(21, '2017_11_26_013050_add_user_role_relationship', 1),
(22, '2017_11_26_015000_create_user_roles_table', 1),
(23, '2018_03_11_000000_add_user_settings', 1),
(24, '2018_03_14_000000_add_details_to_data_types_table', 1),
(25, '2018_03_16_000000_make_settings_value_nullable', 1),
(26, '2019_08_19_000000_create_failed_jobs_table', 1),
(27, '2020_04_04_000000_create_user_follower_table', 1),
(28, '2020_10_20_212629_locals', 2);

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(10) UNSIGNED NOT NULL,
  `author_id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `excerpt` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `body` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keywords` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('ACTIVE','INACTIVE') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'INACTIVE',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `author_id`, `title`, `excerpt`, `body`, `image`, `slug`, `meta_description`, `meta_keywords`, `status`, `created_at`, `updated_at`) VALUES
(1, 0, 'Hello World', 'Hang the jib grog grog blossom grapple dance the hempen jig gangway pressgang bilge rat to go on account lugger. Nelsons folly gabion line draught scallywag fire ship gaff fluke fathom case shot. Sea Legs bilge rat sloop matey gabion long clothes run a shot across the bow Gold Road cog league.', '<p>Hello World. Scallywag grog swab Cat o\'nine tails scuttle rigging hardtack cable nipper Yellow Jack. Handsomely spirits knave lad killick landlubber or just lubber deadlights chantey pinnace crack Jennys tea cup. Provost long clothes black spot Yellow Jack bilged on her anchor league lateen sail case shot lee tackle.</p>\n<p>Ballast spirits fluke topmast me quarterdeck schooner landlubber or just lubber gabion belaying pin. Pinnace stern galleon starboard warp carouser to go on account dance the hempen jig jolly boat measured fer yer chains. Man-of-war fire in the hole nipperkin handsomely doubloon barkadeer Brethren of the Coast gibbet driver squiffy.</p>', 'pages/page1.jpg', 'hello-world', 'Yar Meta Description', 'Keyword1, Keyword2', 'ACTIVE', '2020-10-20 21:28:36', '2020-10-20 21:28:36');

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `table_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `key`, `table_name`, `created_at`, `updated_at`) VALUES
(1, 'browse_admin', NULL, '2020-10-20 21:28:08', '2020-10-20 21:28:08'),
(2, 'browse_bread', NULL, '2020-10-20 21:28:08', '2020-10-20 21:28:08'),
(3, 'browse_database', NULL, '2020-10-20 21:28:08', '2020-10-20 21:28:08'),
(4, 'browse_media', NULL, '2020-10-20 21:28:08', '2020-10-20 21:28:08'),
(5, 'browse_compass', NULL, '2020-10-20 21:28:08', '2020-10-20 21:28:08'),
(6, 'browse_menus', 'menus', '2020-10-20 21:28:08', '2020-10-20 21:28:08'),
(7, 'read_menus', 'menus', '2020-10-20 21:28:09', '2020-10-20 21:28:09'),
(8, 'edit_menus', 'menus', '2020-10-20 21:28:09', '2020-10-20 21:28:09'),
(9, 'add_menus', 'menus', '2020-10-20 21:28:09', '2020-10-20 21:28:09'),
(10, 'delete_menus', 'menus', '2020-10-20 21:28:09', '2020-10-20 21:28:09'),
(11, 'browse_roles', 'roles', '2020-10-20 21:28:09', '2020-10-20 21:28:09'),
(12, 'read_roles', 'roles', '2020-10-20 21:28:10', '2020-10-20 21:28:10'),
(13, 'edit_roles', 'roles', '2020-10-20 21:28:10', '2020-10-20 21:28:10'),
(14, 'add_roles', 'roles', '2020-10-20 21:28:10', '2020-10-20 21:28:10'),
(15, 'delete_roles', 'roles', '2020-10-20 21:28:10', '2020-10-20 21:28:10'),
(16, 'browse_users', 'users', '2020-10-20 21:28:10', '2020-10-20 21:28:10'),
(17, 'read_users', 'users', '2020-10-20 21:28:10', '2020-10-20 21:28:10'),
(18, 'edit_users', 'users', '2020-10-20 21:28:10', '2020-10-20 21:28:10'),
(19, 'add_users', 'users', '2020-10-20 21:28:10', '2020-10-20 21:28:10'),
(20, 'delete_users', 'users', '2020-10-20 21:28:10', '2020-10-20 21:28:10'),
(21, 'browse_settings', 'settings', '2020-10-20 21:28:11', '2020-10-20 21:28:11'),
(22, 'read_settings', 'settings', '2020-10-20 21:28:11', '2020-10-20 21:28:11'),
(23, 'edit_settings', 'settings', '2020-10-20 21:28:11', '2020-10-20 21:28:11'),
(24, 'add_settings', 'settings', '2020-10-20 21:28:11', '2020-10-20 21:28:11'),
(25, 'delete_settings', 'settings', '2020-10-20 21:28:11', '2020-10-20 21:28:11'),
(26, 'browse_categories', 'categories', '2020-10-20 21:28:21', '2020-10-20 21:28:21'),
(27, 'read_categories', 'categories', '2020-10-20 21:28:21', '2020-10-20 21:28:21'),
(28, 'edit_categories', 'categories', '2020-10-20 21:28:22', '2020-10-20 21:28:22'),
(29, 'add_categories', 'categories', '2020-10-20 21:28:22', '2020-10-20 21:28:22'),
(30, 'delete_categories', 'categories', '2020-10-20 21:28:22', '2020-10-20 21:28:22'),
(31, 'browse_posts', 'posts', '2020-10-20 21:28:28', '2020-10-20 21:28:28'),
(32, 'read_posts', 'posts', '2020-10-20 21:28:28', '2020-10-20 21:28:28'),
(33, 'edit_posts', 'posts', '2020-10-20 21:28:29', '2020-10-20 21:28:29'),
(34, 'add_posts', 'posts', '2020-10-20 21:28:29', '2020-10-20 21:28:29'),
(35, 'delete_posts', 'posts', '2020-10-20 21:28:29', '2020-10-20 21:28:29'),
(36, 'browse_pages', 'pages', '2020-10-20 21:28:34', '2020-10-20 21:28:34'),
(37, 'read_pages', 'pages', '2020-10-20 21:28:35', '2020-10-20 21:28:35'),
(38, 'edit_pages', 'pages', '2020-10-20 21:28:35', '2020-10-20 21:28:35'),
(39, 'add_pages', 'pages', '2020-10-20 21:28:35', '2020-10-20 21:28:35'),
(40, 'delete_pages', 'pages', '2020-10-20 21:28:35', '2020-10-20 21:28:35'),
(41, 'browse_hooks', NULL, '2020-10-20 21:28:44', '2020-10-20 21:28:44'),
(42, 'browse_locales', 'locales', '2020-10-20 21:41:37', '2020-10-20 21:41:37'),
(43, 'read_locales', 'locales', '2020-10-20 21:41:37', '2020-10-20 21:41:37'),
(44, 'edit_locales', 'locales', '2020-10-20 21:41:37', '2020-10-20 21:41:37'),
(45, 'add_locales', 'locales', '2020-10-20 21:41:37', '2020-10-20 21:41:37'),
(46, 'delete_locales', 'locales', '2020-10-20 21:41:37', '2020-10-20 21:41:37'),
(62, 'browse_demandes', 'demandes', '2020-10-20 22:10:26', '2020-10-20 22:10:26'),
(63, 'read_demandes', 'demandes', '2020-10-20 22:10:26', '2020-10-20 22:10:26'),
(64, 'edit_demandes', 'demandes', '2020-10-20 22:10:26', '2020-10-20 22:10:26'),
(65, 'add_demandes', 'demandes', '2020-10-20 22:10:26', '2020-10-20 22:10:26'),
(66, 'delete_demandes', 'demandes', '2020-10-20 22:10:26', '2020-10-20 22:10:26'),
(67, 'browse_reclamations', 'reclamations', '2020-10-20 22:15:43', '2020-10-20 22:15:43'),
(68, 'read_reclamations', 'reclamations', '2020-10-20 22:15:43', '2020-10-20 22:15:43'),
(69, 'edit_reclamations', 'reclamations', '2020-10-20 22:15:43', '2020-10-20 22:15:43'),
(70, 'add_reclamations', 'reclamations', '2020-10-20 22:15:43', '2020-10-20 22:15:43'),
(71, 'delete_reclamations', 'reclamations', '2020-10-20 22:15:43', '2020-10-20 22:15:43'),
(72, 'browse_tranches', 'tranches', '2020-10-20 22:23:07', '2020-10-20 22:23:07'),
(73, 'read_tranches', 'tranches', '2020-10-20 22:23:07', '2020-10-20 22:23:07'),
(74, 'edit_tranches', 'tranches', '2020-10-20 22:23:07', '2020-10-20 22:23:07'),
(75, 'add_tranches', 'tranches', '2020-10-20 22:23:07', '2020-10-20 22:23:07'),
(76, 'delete_tranches', 'tranches', '2020-10-20 22:23:07', '2020-10-20 22:23:07'),
(77, 'browse_types_compteurs', 'types_compteurs', '2020-10-20 22:32:49', '2020-10-20 22:32:49'),
(78, 'read_types_compteurs', 'types_compteurs', '2020-10-20 22:32:49', '2020-10-20 22:32:49'),
(79, 'edit_types_compteurs', 'types_compteurs', '2020-10-20 22:32:49', '2020-10-20 22:32:49'),
(80, 'add_types_compteurs', 'types_compteurs', '2020-10-20 22:32:49', '2020-10-20 22:32:49'),
(81, 'delete_types_compteurs', 'types_compteurs', '2020-10-20 22:32:49', '2020-10-20 22:32:49'),
(82, 'browse_compteurs', 'compteurs', '2020-10-20 22:38:08', '2020-10-20 22:38:08'),
(83, 'read_compteurs', 'compteurs', '2020-10-20 22:38:08', '2020-10-20 22:38:08'),
(84, 'edit_compteurs', 'compteurs', '2020-10-20 22:38:08', '2020-10-20 22:38:08'),
(85, 'add_compteurs', 'compteurs', '2020-10-20 22:38:08', '2020-10-20 22:38:08'),
(86, 'delete_compteurs', 'compteurs', '2020-10-20 22:38:08', '2020-10-20 22:38:08'),
(87, 'browse_factures', 'factures', '2020-10-20 22:43:04', '2020-10-20 22:43:04'),
(88, 'read_factures', 'factures', '2020-10-20 22:43:04', '2020-10-20 22:43:04'),
(89, 'edit_factures', 'factures', '2020-10-20 22:43:04', '2020-10-20 22:43:04'),
(90, 'add_factures', 'factures', '2020-10-20 22:43:04', '2020-10-20 22:43:04'),
(91, 'delete_factures', 'factures', '2020-10-20 22:43:04', '2020-10-20 22:43:04'),
(92, 'browse_contacts', 'contacts', '2020-10-20 22:55:28', '2020-10-20 22:55:28'),
(93, 'read_contacts', 'contacts', '2020-10-20 22:55:28', '2020-10-20 22:55:28'),
(94, 'edit_contacts', 'contacts', '2020-10-20 22:55:28', '2020-10-20 22:55:28'),
(95, 'add_contacts', 'contacts', '2020-10-20 22:55:28', '2020-10-20 22:55:28'),
(96, 'delete_contacts', 'contacts', '2020-10-20 22:55:28', '2020-10-20 22:55:28'),
(97, 'browse_messages', 'messages', '2020-10-20 22:58:22', '2020-10-20 22:58:22'),
(98, 'read_messages', 'messages', '2020-10-20 22:58:22', '2020-10-20 22:58:22'),
(99, 'edit_messages', 'messages', '2020-10-20 22:58:22', '2020-10-20 22:58:22'),
(100, 'add_messages', 'messages', '2020-10-20 22:58:22', '2020-10-20 22:58:22'),
(101, 'delete_messages', 'messages', '2020-10-20 22:58:22', '2020-10-20 22:58:22');

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE `permission_role` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permission_role`
--

INSERT INTO `permission_role` (`permission_id`, `role_id`) VALUES
(1, 1),
(1, 2),
(2, 1),
(3, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(11, 1),
(12, 1),
(13, 1),
(14, 1),
(15, 1),
(16, 1),
(17, 1),
(18, 1),
(19, 1),
(20, 1),
(26, 1),
(27, 1),
(28, 1),
(29, 1),
(30, 1),
(42, 1),
(43, 1),
(44, 1),
(45, 1),
(46, 1),
(62, 1),
(63, 1),
(64, 1),
(65, 1),
(66, 1),
(67, 1),
(68, 1),
(69, 1),
(70, 1),
(71, 1),
(72, 1),
(73, 1),
(74, 1),
(75, 1),
(76, 1),
(77, 1),
(78, 1),
(79, 1),
(80, 1),
(81, 1),
(82, 1),
(83, 1),
(84, 1),
(85, 1),
(86, 1),
(87, 1),
(88, 1),
(89, 1),
(90, 1),
(91, 1),
(92, 1),
(93, 1),
(94, 1),
(95, 1),
(96, 1),
(97, 1),
(98, 1),
(99, 1),
(100, 1),
(101, 1);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `author_id` int(11) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seo_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `excerpt` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keywords` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('PUBLISHED','DRAFT','PENDING') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'DRAFT',
  `featured` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `author_id`, `category_id`, `title`, `seo_title`, `excerpt`, `body`, `image`, `slug`, `meta_description`, `meta_keywords`, `status`, `featured`, `created_at`, `updated_at`) VALUES
(1, 0, NULL, 'Lorem Ipsum Post', NULL, 'This is the excerpt for the Lorem Ipsum Post', '<p>This is the body of the lorem ipsum post</p>', 'posts/post1.jpg', 'lorem-ipsum-post', 'This is the meta description', 'keyword1, keyword2, keyword3', 'PUBLISHED', 0, '2020-10-20 21:28:29', '2020-10-20 21:28:29'),
(2, 0, NULL, 'My Sample Post', NULL, 'This is the excerpt for the sample Post', '<p>This is the body for the sample post, which includes the body.</p>\n                <h2>We can use all kinds of format!</h2>\n                <p>And include a bunch of other stuff.</p>', 'posts/post2.jpg', 'my-sample-post', 'Meta Description for sample post', 'keyword1, keyword2, keyword3', 'PUBLISHED', 0, '2020-10-20 21:28:29', '2020-10-20 21:28:29'),
(3, 0, NULL, 'Latest Post', NULL, 'This is the excerpt for the latest post', '<p>This is the body for the latest post</p>', 'posts/post3.jpg', 'latest-post', 'This is the meta description', 'keyword1, keyword2, keyword3', 'PUBLISHED', 0, '2020-10-20 21:28:30', '2020-10-20 21:28:30'),
(4, 0, NULL, 'Yarr Post', NULL, 'Reef sails nipperkin bring a spring upon her cable coffer jury mast spike marooned Pieces of Eight poop deck pillage. Clipper driver coxswain galleon hempen halter come about pressgang gangplank boatswain swing the lead. Nipperkin yard skysail swab lanyard Blimey bilge water ho quarter Buccaneer.', '<p>Swab deadlights Buccaneer fire ship square-rigged dance the hempen jig weigh anchor cackle fruit grog furl. Crack Jennys tea cup chase guns pressgang hearties spirits hogshead Gold Road six pounders fathom measured fer yer chains. Main sheet provost come about trysail barkadeer crimp scuttle mizzenmast brig plunder.</p>\n<p>Mizzen league keelhaul galleon tender cog chase Barbary Coast doubloon crack Jennys tea cup. Blow the man down lugsail fire ship pinnace cackle fruit line warp Admiral of the Black strike colors doubloon. Tackle Jack Ketch come about crimp rum draft scuppers run a shot across the bow haul wind maroon.</p>\n<p>Interloper heave down list driver pressgang holystone scuppers tackle scallywag bilged on her anchor. Jack Tar interloper draught grapple mizzenmast hulk knave cable transom hogshead. Gaff pillage to go on account grog aft chase guns piracy yardarm knave clap of thunder.</p>', 'posts/post4.jpg', 'yarr-post', 'this be a meta descript', 'keyword1, keyword2, keyword3', 'PUBLISHED', 0, '2020-10-20 21:28:30', '2020-10-20 21:28:30');

-- --------------------------------------------------------

--
-- Table structure for table `reclamations`
--

CREATE TABLE `reclamations` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_loc` int(11) DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reclamations`
--

INSERT INTO `reclamations` (`id`, `id_loc`, `id_user`, `subject`, `content`, `description`, `created_at`, `updated_at`) VALUES
(1, 1, 2, 'panne', 'photo1.jpg', 'hgvhghg', NULL, NULL),
(3, 1, 2, 'jtrjlrtjltt', 'reclamations\\October2020\\qxDhDzRZy0Dtv63gUUcW.jpg', 'tkgjtjhkmyhmyhfgkqd,ffng', '2020-10-25 18:41:51', '2020-10-25 18:41:51');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `display_name`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'Administrator', '2020-10-20 21:28:07', '2020-10-20 21:28:07'),
(2, 'user', 'Normal User', '2020-10-20 21:28:08', '2020-10-20 21:28:08');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `details` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order` int(11) NOT NULL DEFAULT 1,
  `group` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `key`, `display_name`, `value`, `details`, `type`, `order`, `group`) VALUES
(1, 'site.title', 'Site Title', 'Site Title', '', 'text', 1, 'Site'),
(2, 'site.description', 'Site Description', 'Site Description', '', 'text', 2, 'Site'),
(3, 'site.logo', 'Site Logo', '', '', 'image', 3, 'Site'),
(4, 'site.google_analytics_tracking_id', 'Google Analytics Tracking ID', '', '', 'text', 4, 'Site'),
(5, 'admin.bg_image', 'Admin Background Image', '', '', 'image', 5, 'Admin'),
(6, 'admin.title', 'Admin Title', 'Voyager', '', 'text', 1, 'Admin'),
(7, 'admin.description', 'Admin Description', 'Welcome to Voyager. The Missing Admin for Laravel', '', 'text', 2, 'Admin'),
(8, 'admin.loader', 'Admin Loader', '', '', 'image', 3, 'Admin'),
(9, 'admin.icon_image', 'Admin Icon Image', '', '', 'image', 4, 'Admin'),
(10, 'admin.google_analytics_client_id', 'Google Analytics Client ID (used for admin dashboard)', '', '', 'text', 1, 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `tranches`
--

CREATE TABLE `tranches` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `id_local` int(11) DEFAULT NULL,
  `date_deb` date DEFAULT NULL,
  `date_fin` date DEFAULT NULL,
  `montant` float DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tranches`
--

INSERT INTO `tranches` (`id`, `id_user`, `id_local`, `date_deb`, `date_fin`, `montant`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2020-10-16', '2020-10-10', 5000, '2020-11-08 22:40:00', '2020-11-08 22:40:59'),
(2, 2, 3, '2020-11-08', '2020-12-08', 500, '2020-11-08 22:40:48', '2020-11-08 22:40:48');

-- --------------------------------------------------------

--
-- Table structure for table `translations`
--

CREATE TABLE `translations` (
  `id` int(10) UNSIGNED NOT NULL,
  `table_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `column_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foreign_key` int(10) UNSIGNED NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `translations`
--

INSERT INTO `translations` (`id`, `table_name`, `column_name`, `foreign_key`, `locale`, `value`, `created_at`, `updated_at`) VALUES
(1, 'data_types', 'display_name_singular', 5, 'pt', 'Post', '2020-10-20 21:28:36', '2020-10-20 21:28:36'),
(2, 'data_types', 'display_name_singular', 6, 'pt', 'Página', '2020-10-20 21:28:36', '2020-10-20 21:28:36'),
(3, 'data_types', 'display_name_singular', 1, 'pt', 'Utilizador', '2020-10-20 21:28:36', '2020-10-20 21:28:36'),
(4, 'data_types', 'display_name_singular', 4, 'pt', 'Categoria', '2020-10-20 21:28:36', '2020-10-20 21:28:36'),
(5, 'data_types', 'display_name_singular', 2, 'pt', 'Menu', '2020-10-20 21:28:37', '2020-10-20 21:28:37'),
(6, 'data_types', 'display_name_singular', 3, 'pt', 'Função', '2020-10-20 21:28:37', '2020-10-20 21:28:37'),
(7, 'data_types', 'display_name_plural', 5, 'pt', 'Posts', '2020-10-20 21:28:37', '2020-10-20 21:28:37'),
(8, 'data_types', 'display_name_plural', 6, 'pt', 'Páginas', '2020-10-20 21:28:37', '2020-10-20 21:28:37'),
(9, 'data_types', 'display_name_plural', 1, 'pt', 'Utilizadores', '2020-10-20 21:28:37', '2020-10-20 21:28:37'),
(10, 'data_types', 'display_name_plural', 4, 'pt', 'Categorias', '2020-10-20 21:28:37', '2020-10-20 21:28:37'),
(11, 'data_types', 'display_name_plural', 2, 'pt', 'Menus', '2020-10-20 21:28:38', '2020-10-20 21:28:38'),
(12, 'data_types', 'display_name_plural', 3, 'pt', 'Funções', '2020-10-20 21:28:38', '2020-10-20 21:28:38'),
(13, 'categories', 'slug', 1, 'pt', 'categoria-1', '2020-10-20 21:28:38', '2020-10-20 21:28:38'),
(14, 'categories', 'name', 1, 'pt', 'Categoria 1', '2020-10-20 21:28:38', '2020-10-20 21:28:38'),
(15, 'categories', 'slug', 2, 'pt', 'categoria-2', '2020-10-20 21:28:38', '2020-10-20 21:28:38'),
(16, 'categories', 'name', 2, 'pt', 'Categoria 2', '2020-10-20 21:28:38', '2020-10-20 21:28:38'),
(17, 'pages', 'title', 1, 'pt', 'Olá Mundo', '2020-10-20 21:28:38', '2020-10-20 21:28:38'),
(18, 'pages', 'slug', 1, 'pt', 'ola-mundo', '2020-10-20 21:28:39', '2020-10-20 21:28:39'),
(19, 'pages', 'body', 1, 'pt', '<p>Olá Mundo. Scallywag grog swab Cat o\'nine tails scuttle rigging hardtack cable nipper Yellow Jack. Handsomely spirits knave lad killick landlubber or just lubber deadlights chantey pinnace crack Jennys tea cup. Provost long clothes black spot Yellow Jack bilged on her anchor league lateen sail case shot lee tackle.</p>\r\n<p>Ballast spirits fluke topmast me quarterdeck schooner landlubber or just lubber gabion belaying pin. Pinnace stern galleon starboard warp carouser to go on account dance the hempen jig jolly boat measured fer yer chains. Man-of-war fire in the hole nipperkin handsomely doubloon barkadeer Brethren of the Coast gibbet driver squiffy.</p>', '2020-10-20 21:28:39', '2020-10-20 21:28:39'),
(20, 'menu_items', 'title', 1, 'pt', 'Painel de Controle', '2020-10-20 21:28:39', '2020-10-20 21:28:39'),
(21, 'menu_items', 'title', 2, 'pt', 'Media', '2020-10-20 21:28:39', '2020-10-20 21:28:39'),
(22, 'menu_items', 'title', 12, 'pt', 'Publicações', '2020-10-20 21:28:39', '2020-10-20 21:28:39'),
(23, 'menu_items', 'title', 3, 'pt', 'Utilizadores', '2020-10-20 21:28:39', '2020-10-20 21:28:39'),
(24, 'menu_items', 'title', 11, 'pt', 'Categorias', '2020-10-20 21:28:39', '2020-10-20 21:28:39'),
(25, 'menu_items', 'title', 13, 'pt', 'Páginas', '2020-10-20 21:28:40', '2020-10-20 21:28:40'),
(26, 'menu_items', 'title', 4, 'pt', 'Funções', '2020-10-20 21:28:40', '2020-10-20 21:28:40'),
(27, 'menu_items', 'title', 5, 'pt', 'Ferramentas', '2020-10-20 21:28:40', '2020-10-20 21:28:40'),
(28, 'menu_items', 'title', 6, 'pt', 'Menus', '2020-10-20 21:28:40', '2020-10-20 21:28:40'),
(29, 'menu_items', 'title', 7, 'pt', 'Base de dados', '2020-10-20 21:28:40', '2020-10-20 21:28:40'),
(30, 'menu_items', 'title', 10, 'pt', 'Configurações', '2020-10-20 21:28:40', '2020-10-20 21:28:40');

-- --------------------------------------------------------

--
-- Table structure for table `types_compteurs`
--

CREATE TABLE `types_compteurs` (
  `id` int(10) UNSIGNED NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `types_compteurs`
--

INSERT INTO `types_compteurs` (`id`, `type`, `created_at`, `updated_at`) VALUES
(1, 'Water', '2020-10-20 22:33:03', '2020-10-20 22:33:03'),
(2, 'Gaz', '2020-10-20 22:33:10', '2020-10-20 22:33:10'),
(3, 'Elect', '2020-10-20 22:33:16', '2020-10-20 22:33:16');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `settings` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role_id`, `name`, `email`, `avatar`, `email_verified_at`, `password`, `remember_token`, `settings`, `created_at`, `updated_at`) VALUES
(1, 1, 'Admin', 'admin@admin.com', 'users\\October2020\\2QaqpbB7z9aVcXvHxbPS.JPG', NULL, '$2y$10$DdQGh4BRPW9SyC/odvqweOEbUBCbhLDO/M.cBX7yiQung6p7cHEgi', 'Hws7vQygvrwEZNcgRIQGSnk0bKx2DqyYn31C2BnKAgyumyuad3FiMg3aOQpY', '{\"locale\":\"en\"}', '2020-10-20 21:28:24', '2020-11-15 17:24:54'),
(2, 2, 'Ikram Hattab', 'ikramelhattab90@gmail.com', 'users\\October2020\\AM1DppCPV6415Pp6tQOi.jpg', NULL, '$2y$10$LH3Xh33L2/P2iERO.o/rzOdImB9/8zjXZ4X3gMkLWAlXFM79sm./2', NULL, '{\"locale\":\"en\"}', '2020-10-20 21:46:25', '2020-11-08 21:07:31'),
(3, 2, 'Islem ben Salah', 'islem@gmail.com', 'users\\November2020\\flv9wSeyQO3JCC8Vpqw9.jpg', NULL, '$2y$10$UXtiIvcVGeBQxuu8fw0T5O8t2zu8X6v.OMfXAyF7zvcHbFVvE0aWi', NULL, '{\"locale\":\"en\"}', '2020-11-15 17:23:47', '2020-11-15 17:23:47');

-- --------------------------------------------------------

--
-- Table structure for table `user_follower`
--

CREATE TABLE `user_follower` (
  `id` int(10) UNSIGNED NOT NULL,
  `following_id` bigint(20) UNSIGNED NOT NULL,
  `follower_id` bigint(20) UNSIGNED NOT NULL,
  `accepted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_roles`
--

CREATE TABLE `user_roles` (
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_roles`
--

INSERT INTO `user_roles` (`user_id`, `role_id`) VALUES
(3, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`),
  ADD KEY `categories_parent_id_foreign` (`parent_id`);

--
-- Indexes for table `compteurs`
--
ALTER TABLE `compteurs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_rows`
--
ALTER TABLE `data_rows`
  ADD PRIMARY KEY (`id`),
  ADD KEY `data_rows_data_type_id_foreign` (`data_type_id`);

--
-- Indexes for table `data_types`
--
ALTER TABLE `data_types`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `data_types_name_unique` (`name`),
  ADD UNIQUE KEY `data_types_slug_unique` (`slug`);

--
-- Indexes for table `demandes`
--
ALTER TABLE `demandes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `factures`
--
ALTER TABLE `factures`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `locales`
--
ALTER TABLE `locales`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `menus_name_unique` (`name`);

--
-- Indexes for table `menu_items`
--
ALTER TABLE `menu_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `menu_items_menu_id_foreign` (`menu_id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pages_slug_unique` (`slug`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `permissions_key_index` (`key`);

--
-- Indexes for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `permission_role_permission_id_index` (`permission_id`),
  ADD KEY `permission_role_role_id_index` (`role_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `posts_slug_unique` (`slug`);

--
-- Indexes for table `reclamations`
--
ALTER TABLE `reclamations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `settings_key_unique` (`key`);

--
-- Indexes for table `tranches`
--
ALTER TABLE `tranches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `translations`
--
ALTER TABLE `translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `translations_table_name_column_name_foreign_key_locale_unique` (`table_name`,`column_name`,`foreign_key`,`locale`);

--
-- Indexes for table `types_compteurs`
--
ALTER TABLE `types_compteurs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_role_id_foreign` (`role_id`);

--
-- Indexes for table `user_follower`
--
ALTER TABLE `user_follower`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_follower_following_id_index` (`following_id`),
  ADD KEY `user_follower_follower_id_index` (`follower_id`),
  ADD KEY `user_follower_accepted_at_index` (`accepted_at`);

--
-- Indexes for table `user_roles`
--
ALTER TABLE `user_roles`
  ADD PRIMARY KEY (`user_id`,`role_id`),
  ADD KEY `user_roles_user_id_index` (`user_id`),
  ADD KEY `user_roles_role_id_index` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `compteurs`
--
ALTER TABLE `compteurs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `data_rows`
--
ALTER TABLE `data_rows`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=155;

--
-- AUTO_INCREMENT for table `data_types`
--
ALTER TABLE `data_types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `demandes`
--
ALTER TABLE `demandes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `factures`
--
ALTER TABLE `factures`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `locales`
--
ALTER TABLE `locales`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `menu_items`
--
ALTER TABLE `menu_items`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `reclamations`
--
ALTER TABLE `reclamations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tranches`
--
ALTER TABLE `tranches`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `translations`
--
ALTER TABLE `translations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `types_compteurs`
--
ALTER TABLE `types_compteurs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_follower`
--
ALTER TABLE `user_follower`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `categories`
--
ALTER TABLE `categories`
  ADD CONSTRAINT `categories_parent_id_foreign` FOREIGN KEY (`parent_id`) REFERENCES `categories` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `data_rows`
--
ALTER TABLE `data_rows`
  ADD CONSTRAINT `data_rows_data_type_id_foreign` FOREIGN KEY (`data_type_id`) REFERENCES `data_types` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `menu_items`
--
ALTER TABLE `menu_items`
  ADD CONSTRAINT `menu_items_menu_id_foreign` FOREIGN KEY (`menu_id`) REFERENCES `menus` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);

--
-- Constraints for table `user_roles`
--
ALTER TABLE `user_roles`
  ADD CONSTRAINT `user_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_roles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
