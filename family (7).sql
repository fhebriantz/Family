-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 01, 2018 at 10:21 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `family`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` int(10) UNSIGNED NOT NULL,
  `caption` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `caption`, `title`, `desc`, `created_at`, `created_by`, `updated_at`, `updated_by`) VALUES
(4, 'LEADERSHIP', '\"Why we are the industry leader”', 'JAKARTA TUNGGAL CITRA’s usage of raw materials & components: metal frames, polypolymer, copolymer and others are of the finest quality materials that make us superiorly different than other manufacturers. Our Research & Development team works hard to meet the tough requirements needed to fulfill the Tricycle and Babywalker’s standard. All of our customers will certainly benefit from the high performance and value of our Tricycle and Babywalker. And we don’t stop there, no..no, we won’t rest till we got it perfect. We want to know our customer’s satisfactory and listen to their complaints. After that, it is back to the workshop and work on those complaints into compliments.', '2018-02-16 15:16:03', '', '2018-02-23 08:51:29', NULL),
(5, 'RESULTS', '“We know our customer’s needs”', 'At www.family-trike.com, we always update the customers with our latest news and products. From the services provided after sale, we know what customers want and need, because we want them to tell us directly or contact us thru: www.family-trike.com and we meet those requirements at lightning speed.', '2018-02-16 15:16:03', '', '2018-02-23 08:53:16', NULL),
(6, 'GLOBAL', '“We treat our customer, just like WE ARE FAMILY”', 'Our global strategy is to be the premier manufacturers of Tricycles and Babywalker’s customers and potential customers. With manufacturing facilities, sales offices in Shantou and our busy and tight schedule to constantly visit our customers, we still feel close to our distant customers, wherever they are. And we use our expert understanding of the products, after sales services and direct relationship to meet the unique needs of those customers one at a time. So, join us at the BIG FAMILY.', '2018-02-16 15:16:03', '', '2018-02-23 08:53:04', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `category_products`
--

CREATE TABLE `category_products` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category_products`
--

INSERT INTO `category_products` (`id`, `category_product_name`, `created_at`, `created_by`, `updated_at`, `updated_by`) VALUES
(3, 'Tricycle ', '2018-02-16 15:17:58', '', '2018-02-16 15:17:58', NULL),
(4, 'Baby Walker ', '2018-02-16 15:17:58', '', '2018-02-16 15:17:58', NULL),
(5, 'Bicycle ', '2018-02-16 15:17:58', '', '2018-02-16 15:17:58', NULL),
(6, 'Ride on Car ', '2018-02-16 15:17:58', '', '2018-02-16 15:17:58', NULL),
(7, 'Battery Car ', '2018-02-16 15:17:58', '', '2018-02-16 15:17:58', NULL),
(8, 'Baby Stroller ', '2018-02-16 15:17:58', '', '2018-02-16 15:17:58', NULL),
(11, 'test', '2018-02-28 22:57:25', 'lutfi', '2018-02-28 22:57:25', NULL),
(12, 'yudi', '2018-03-01 00:22:24', 'lutfi', '2018-03-01 00:22:24', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `category_subproducts`
--

CREATE TABLE `category_subproducts` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_subproduct_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_category` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category_subproducts`
--

INSERT INTO `category_subproducts` (`id`, `category_subproduct_name`, `id_category`, `created_at`, `created_by`, `updated_at`, `updated_by`) VALUES
(2, 'F1 Series', 3, '2018-02-16 15:23:37', '', '2018-02-19 03:52:30', NULL),
(3, 'F5 Series', 3, '2018-02-16 15:23:37', '', '2018-02-19 03:52:35', NULL),
(4, 'F7 Series', 3, '2018-02-16 15:23:37', '', '2018-02-19 03:52:38', NULL),
(5, 'F8 Series', 3, '2018-02-16 15:23:37', '', '2018-02-19 03:52:42', NULL),
(6, 'F9 series', 3, '2018-02-16 15:23:37', '', '2018-02-19 03:52:45', NULL),
(7, 'FB - 1 Series', 4, '2018-02-16 15:23:37', '', '2018-02-19 03:52:48', NULL),
(8, 'FB - 2 Series', 4, '2018-02-16 15:23:37', '', '2018-02-19 03:52:51', NULL),
(9, 'FB - 3 Series', 4, '2018-02-16 15:23:37', '', '2018-02-19 03:52:53', NULL),
(10, 'FB - 5 Series', 4, '2018-02-16 15:23:37', '', '2018-02-19 03:52:55', NULL),
(11, 'FB - 7 Series', 4, '2018-02-16 15:23:37', '', '2018-02-19 03:52:58', NULL),
(12, 'Family bike', 5, '2018-02-16 15:23:37', '', '2018-02-19 03:53:03', NULL),
(13, 'FT Series', 6, '2018-02-16 15:23:37', '', '2018-02-19 03:53:07', NULL),
(14, 'FM Series', 7, '2018-02-16 15:23:37', '', '2018-02-19 03:53:10', NULL),
(15, 'CS Series', 8, '2018-02-16 15:23:37', '', '2018-02-19 03:53:13', NULL),
(16, 'FS Series', 8, '2018-02-16 15:23:37', '', '2018-02-19 03:53:16', NULL),
(20, 'tambah 2', 10, '2018-02-18 21:46:32', 'lutfi', '2018-02-18 21:46:32', NULL),
(24, 'test aja', 9, '2018-02-27 21:58:04', 'lutfi', '2018-02-27 21:58:04', NULL),
(25, 'seri 1', 12, '2018-03-01 00:22:41', 'lutfi', '2018-03-01 00:22:41', NULL),
(26, 'sseri 1', 11, '2018-03-01 00:23:24', 'lutfi', '2018-03-01 00:23:24', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_by` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `updated_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `faqs`
--

INSERT INTO `faqs` (`id`, `title`, `desc`, `created_at`, `created_by`, `updated_at`, `updated_by`) VALUES
(5, 'asdasdasdas', '<p>asdasdasd</p>', '2018-02-21 21:30:02', 'lutfi', '2018-02-21 21:30:02', NULL),
(6, 'qwweq', '<p>qweqwe</p>', '2018-02-21 21:32:17', 'lutfi', '2018-02-21 21:32:17', NULL),
(7, 'asds', '<p>asd</p>', '2018-02-21 21:32:31', 'lutfi', '2018-02-21 21:32:31', NULL),
(8, 'ddd', '<p>dd</p>', '2018-02-21 21:33:26', 'lutfi', '2018-02-21 21:33:26', NULL),
(9, 'asd', '<p>asd</p>', '2018-02-21 21:33:41', 'lutfi', '2018-02-21 21:33:41', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `highlight`
--

CREATE TABLE `highlight` (
  `id` int(10) UNSIGNED NOT NULL,
  `namefile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `flag` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `highlight`
--

INSERT INTO `highlight` (`id`, `namefile`, `flag`, `created_by`, `created_at`, `updated_by`, `updated_at`) VALUES
(2, 'content2.jpg', '1', 'lutfi', '2018-02-26 21:14:19', 'lutfi', '2018-02-27 01:43:36'),
(9, 'bg2.jpg', '2', 'lutfi', '2018-02-26 22:58:07', NULL, '2018-02-27 01:43:47'),
(10, 'bg3.jpg', '3', 'lutfi', '2018-02-26 22:59:13', NULL, '2018-02-27 01:43:56');

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
(1, '2018_02_15_080333_bikin_tabel_about', 1),
(2, '2018_02_15_080414_bikin_tabel_product', 1),
(3, '2018_02_15_080426_bikin_tabel_subproduct', 1),
(4, '2018_02_15_080436_bikin_tabel_detail', 1),
(5, '2018_02_15_080449_bikin_tabel_question', 1),
(6, '2018_02_15_080504_bikin_tabel_faq', 1),
(7, '2018_02_23_091109_bikin_tabel_news', 2),
(8, '2018_02_26_090105_bikin_tabel_highlight', 3);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `images` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `desc`, `images`, `created_by`, `created_at`, `updated_by`, `updated_at`) VALUES
(1, 'test aja', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet officiis est velit tenetur quod quae esse ab repellat veritatis. Placeat quasi voluptate hic, doloribus cum ab consequatur ullam corporis enim.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque accusantium qui aspernatur, ducimus quia quaerat dolore, similique eum iure eos excepturi aperiam dolorum ut. Dolores officiis eum, sapiente tempore molestias!Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>', 'bg2.jpg', 'lutfi', '2018-02-23 03:03:18', 'lutfi', '2018-02-26 00:01:01'),
(2, 'Lorem Ipsum Dolorr', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet officiis est velit tenetur quod quae esse ab repellat veritatis. Placeat quasi voluptate hic, doloribus cum ab consequatur ullam corporis enim.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque accusantium qui aspernatur, ducimus quia quaerat dolore, similique eum iure eos excepturi aperiam dolorum ut. Dolores officiis eum, sapiente tempore molestias!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci similique perspiciatis minus itaque natus, pariatur assumenda commodi odio quisquam tempora. Mollitia repellat saepe numquam optio commodi consectetur a voluptas distinctio. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet officiis est velit tenetur quod quae esse ab repellat veritatis. Placeat quasi voluptate hic, doloribus cum ab consequatur ullam corporis enim.Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet officiis est velit tenetur quod quae esse ab repellat veritatis. Placeat quasi voluptate hic, doloribus cum ab consequatur ullam corporis enim.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque accusantium qui aspernatur, ducimus quia quaerat dolore, similique eum iure eos excepturi aperiam dolorum ut. Dolores officiis eum, sapiente tempore molestias!Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>', 'bg3.jpg', 'lutfi', '2018-02-23 03:04:22', 'lutfi', '2018-02-25 23:56:39'),
(6, 'asdasdasdasdasdasdasdasd', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet officiis est velit tenetur quod quae esse ab repellat veritatis. Placeat quasi voluptate hic, doloribus cum ab consequatur ullam corporis enim.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque accusantium qui aspernatur, ducimus quia quaerat dolore, similique eum iure eos excepturi aperiam dolorum ut. Dolores officiis eum, sapiente tempore molestias!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci similique perspiciatis minus itaque natus, pariatur assumenda commodi odio quisquam tempora. Mollitia repellat saepe numquam optio commodi consectetur a voluptas distinctio. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet officiis est velit tenetur quod quae esse ab repellat veritatis. Placeat quasi voluptate hic, doloribus cum ab consequatur ullam corporis enim.Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet officiis est velit tenetur quod quae esse ab repellat veritatis. Placeat quasi voluptate hic, doloribus cum ab consequatur ullam corporis enim.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque accusantium qui aspernatur, ducimus quia quaerat dolore, similique eum iure eos excepturi aperiam dolorum ut. Dolores officiis eum, sapiente tempore molestias!Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>', 'content1.jpg', 'lutfi', '2018-02-26 01:02:02', NULL, '2018-02-26 01:02:02'),
(7, 'asdasdasd', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet officiis est velit tenetur quod quae esse ab repellat veritatis. Placeat quasi voluptate hic, doloribus cum ab consequatur ullam corporis enim.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque accusantium qui aspernatur, ducimus quia quaerat dolore, similique eum iure eos excepturi aperiam dolorum ut. Dolores officiis eum, sapiente tempore molestias!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci similique perspiciatis minus itaque natus, pariatur assumenda commodi odio quisquam tempora. Mollitia repellat saepe numquam optio commodi consectetur a voluptas distinctio. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet officiis est velit tenetur quod quae esse ab repellat veritatis. Placeat quasi voluptate hic, doloribus cum ab consequatur ullam corporis enim.Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet officiis est velit tenetur quod quae esse ab repellat veritatis. Placeat quasi voluptate hic, doloribus cum ab consequatur ullam corporis enim.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque accusantium qui aspernatur, ducimus quia quaerat dolore, similique eum iure eos excepturi aperiam dolorum ut. Dolores officiis eum, sapiente tempore molestias!Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>', 'content2.jpg', 'lutfi', '2018-02-26 01:03:01', 'lutfi', '2018-02-26 01:52:48');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product_details`
--

CREATE TABLE `product_details` (
  `id` int(10) UNSIGNED NOT NULL,
  `name_product` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_category` int(11) NOT NULL,
  `id_category_sub` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `frame` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fork` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brakes_rear` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brakes_levers` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pedals` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `crankset` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bottom_bracket` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `chain` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cassete` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rim` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `saddle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seatpot` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stem` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `handlebar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image5` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_details`
--

INSERT INTO `product_details` (`id`, `name_product`, `id_category`, `id_category_sub`, `price`, `frame`, `fork`, `brakes_rear`, `brakes_levers`, `pedals`, `crankset`, `bottom_bracket`, `chain`, `cassete`, `rim`, `saddle`, `seatpot`, `stem`, `handlebar`, `image1`, `image2`, `image3`, `image4`, `image5`, `created_at`, `created_by`, `updated_at`, `updated_by`) VALUES
(3, 'Silver Bikes', 5, 12, 9000000, 'Gold', 'sand', 'iron', 'sand', 'metal', 'iron', 'gold', 'metal', 'Wood', 'wood', 'gold', 'wood', 'rock', 'metal', 'content1.jpg', 'content2.jpg', 'content3.jpg', 'content2.jpg', 'content1.jpg', '2018-02-16 15:34:36', '', '2018-02-28 10:07:48', 'lutfi'),
(4, 'Iron Bike', 5, 12, 5600000, 'Gold', 'metal', 'Sand', 'gold', 'sand', 'iron', 'gold', 'metal', 'stone', 'wood', 'gold', 'wood', 'rock', 'metal', 'content1.jpg', 'jok.jpg', 'stang.jpg', 'ban.jpg', 'bike.jpg', '2018-02-16 15:34:29', '', '2018-02-28 10:07:52', 'lutfi'),
(5, 'Bronze Bike', 5, 12, 5400000, 'Gold', 'metal', 'iron', 'gold', 'metal', 'sand', 'gold', 'Wood', 'stone', 'wood', 'Wood', 'wood', 'rock', 'metal', 'content2.jpg', 'jok.jpg', 'stang.jpg', 'ban.jpg', 'bike.jpg', '2018-02-16 15:34:36', '', '2018-02-28 10:07:55', 'lutfi'),
(6, 'Wood Bike', 5, 12, 3400000, 'Gold', 'metal', 'iron', 'gold', 'metal', 'iron', 'gold', 'metal', 'stone', 'wood', 'gold', 'wood', 'Wock', 'metal', 'content3.jpg', 'jok.jpg', 'stang.jpg', 'ban.jpg', 'bike.jpg', '2018-02-16 15:34:29', '', '2018-02-23 03:30:07', 'lutfi'),
(7, 'Steel Bike', 5, 12, 8000000, 'Gold', 'metal', 'iron', 'gold', 'metal', 'iron', 'Wood', 'metal', 'stone', 'wood', 'gold', 'wood', 'rock', 'metal', 'content1.jpg', 'jok.jpg', 'stang.jpg', 'ban.jpg', 'bike.jpg', '2018-02-16 15:34:36', '', '2018-02-23 03:30:16', 'lutfi'),
(8, 'Platinum Bike', 5, 12, 6000000, 'Gold', 'metal', 'iron', 'gold', 'metal', 'iron', 'gold', 'metal', 'stone', 'wood', 'gold', 'wood', 'rock', 'metal', 'content1.jpg', 'bg3.jpg', 'stang.jpg', 'ban.jpg', 'bike.jpg', '2018-02-16 15:34:29', '', '2018-02-27 00:12:11', 'lutfi'),
(9, '3asd', 4, 7, 3, '3', '3', '3', '3', '3', '3', '3', '3', '3', '3', '3', '3', '3', '3', 'bg1.jpg', '1.jpg', NULL, NULL, NULL, '2018-02-26 00:32:14', 'lutfi', '2018-02-27 23:26:23', 'lutfi'),
(10, '3asds', 3, 2, 3, '3', '3', '3', '3', '3', '3', '3', '3', '3', '3', '3', '3', '3', '3', 'e-KTPSementara.jpg', 'e-KTPSementara.jpg', 'inta-6-smallsize.jpg', NULL, NULL, '2018-02-28 23:48:32', 'lutfi', '2018-02-28 23:55:42', 'lutfi');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int(10) UNSIGNED NOT NULL,
  `question` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `question`, `email`, `created_at`, `updated_at`) VALUES
(1, 'Berapa harga sepeda?', 'all_email@ymail.com', '2018-02-16 04:22:11', '2018-02-16 04:22:11'),
(2, 'Siapa nama saya? berapa harga sepeda semut? hahahaha', 'asd@gmail.com', '2018-02-28 20:33:00', '2018-02-28 20:33:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'lutfi', 'lutfi.febrianto@gmail.com', '$2y$10$ghiHFDe.fJxyvCURXrLpxOzNN7/rGD9RrNSkHbVO/wx/4g/CkD4hi', '8w4Hp5grQzWvKFDlsQ3qw2dxM5U7h9rv714LDzBqElB6FTZ5ozbdcwiq5NXL', '2018-02-15 00:49:31', '2018-02-18 20:26:46'),
(2, 'asd', 'asd@gmail.com', '$2y$10$ghiHFDe.fJxyvCURXrLpxOzNN7/rGD9RrNSkHbVO/wx/4g/CkD4hi', 'DJGkrhUvhU34GNFsyVmeYu0Lhc7EaXncF0iq1UavuRxjhLkqzmN7GoDknFMD', '2018-02-15 10:56:31', '2018-02-18 20:24:08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category_products`
--
ALTER TABLE `category_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category_subproducts`
--
ALTER TABLE `category_subproducts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `highlight`
--
ALTER TABLE `highlight`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_details`
--
ALTER TABLE `product_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `category_products`
--
ALTER TABLE `category_products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `category_subproducts`
--
ALTER TABLE `category_subproducts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `highlight`
--
ALTER TABLE `highlight`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `product_details`
--
ALTER TABLE `product_details`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
