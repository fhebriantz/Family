-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2018 at 11:33 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

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
(4, 'KEPEMIMPINAN', '\"Mengapa kita adalah pemimpin industri\"', 'JAKARTA TUNGGAL CITRA menggunakan bahan baku & komponen: rangka logam, polypolymer, kopolimer dan lain-lain adalah bahan kualitas terbaik yang membuat kita lebih unggul dari produsen lain. Tim Riset & Pengembangan kami bekerja keras untuk memenuhi persyaratan yang dibutuhkan untuk memenuhi standar Tricycle dan Baby. Semua pelanggan kami akan mendapatkan keuntungan dari kinerja dan nilai tinggi dari Tricycle dan Babywalker kami. Dan kita tidak berhenti di situ, tidak. Tidak, kami tidak akan beristirahat sampai sempurna. Kami ingin tahu pelanggan kami memuaskan dan mendengarkan keluhan mereka. Setelah itu, kembali ke bengkel dan bekerja pada keluhan-keluhan itu menjadi pujian.', '2018-02-16 15:16:03', '', '2018-11-01 20:19:42', 'Admin'),
(5, 'HASIL', '“Kami tahu kebutuhan pelanggan kami”', 'Di www.family-trike.com, kami selalu memperbarui pelanggan dengan berita dan produk terbaru kami. Dari layanan yang disediakan setelah penjualan, kami tahu apa yang diinginkan dan dibutuhkan pelanggan, karena kami ingin mereka memberi tahu kami secara langsung atau menghubungi kami melalui: www.family-trike.com dan kami memenuhi persyaratan tersebut secepat kilat', '2018-02-16 15:16:03', '', '2018-10-18 22:56:12', 'Admin'),
(6, 'GLOBAL', '“Kami memperlakukan pelanggan kami, sama seperti KAMI ADALAH KELUARGA”', 'Strategi global kami adalah menjadi produsen utama pelanggan Tricycles dan Babywalker serta calon pelanggan. Dengan fasilitas manufaktur, kantor penjualan di Shantou dan jadwal kami yang padat dan padat untuk terus mengunjungi pelanggan kami, kami masih merasa dekat dengan pelanggan kami yang jauh, di mana pun mereka berada. Dan kami menggunakan pemahaman ahli kami tentang produk, layanan purna jual, dan hubungan langsung untuk memenuhi kebutuhan unik pelanggan tersebut satu per satu. Jadi, bergabunglah dengan kami di KELUARGA BESAR.', '2018-02-16 15:16:03', '', '2018-10-18 22:57:30', 'Admin');

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
(3, 'Tricycle', '2018-02-16 15:17:58', '', '2018-10-08 20:49:37', 'Admin'),
(4, 'Baby Walker', '2018-02-16 15:17:58', '', '2018-10-08 20:49:40', 'Admin'),
(5, 'Bicycle', '2018-02-16 15:17:58', '', '2018-10-08 20:49:44', 'Admin'),
(6, 'Ride on Car', '2018-02-16 15:17:58', '', '2018-10-08 20:49:18', 'Admin'),
(8, 'Baby Series', '2018-02-16 15:17:58', '', '2018-10-08 21:33:39', 'Admin');

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
(2, 'Maskot (NEW)', 3, '2018-02-16 15:23:37', '', '2018-11-21 01:46:46', 'Admin'),
(3, 'Robot', 3, '2018-02-16 15:23:37', '', '2018-10-14 20:47:27', 'Admin'),
(4, 'Lebah', 3, '2018-02-16 15:23:37', '', '2018-10-16 19:54:49', 'Admin'),
(5, 'Poni', 3, '2018-02-16 15:23:37', '', '2018-11-04 19:40:14', 'Admin'),
(6, 'Gurita (NEW)', 3, '2018-02-16 15:23:37', '', '2018-11-22 01:56:49', 'Admin'),
(7, 'Beruang (NEW)', 4, '2018-02-16 15:23:37', '', '2018-11-22 01:57:25', 'Admin'),
(8, 'Bola-Bola', 4, '2018-02-16 15:23:37', '', '2018-11-05 02:45:28', NULL),
(9, 'Bunga Ulir', 4, '2018-02-16 15:23:37', '', '2018-11-05 02:45:59', NULL),
(10, 'Burung Hantu (NEW)', 4, '2018-02-16 15:23:37', '', '2018-11-22 01:58:19', 'Admin'),
(11, 'Drum', 4, '2018-02-16 15:23:37', '', '2018-11-05 02:46:07', NULL),
(12, 'Folding', 5, '2018-02-16 15:23:37', '', '2018-11-05 02:52:07', NULL),
(13, 'Battery Chair', 6, '2018-02-16 15:23:37', '', '2018-11-05 02:53:57', NULL),
(20, 'tambah 2', 10, '2018-02-18 21:46:32', 'lutfi', '2018-02-18 21:46:32', NULL),
(25, 'seri 1', 12, '2018-03-01 00:22:41', 'lutfi', '2018-03-01 00:22:41', NULL),
(26, 'sseri 1', 11, '2018-03-01 00:23:24', 'lutfi', '2018-03-01 00:23:24', NULL),
(27, 'Aero (NEW)', 3, '2018-10-04 02:13:58', 'lutfi', '2018-11-21 20:22:01', 'Admin'),
(28, 'Kelinci', 3, '2018-10-04 02:14:41', 'lutfi', '2018-11-04 19:40:31', 'Admin'),
(29, 'Kuda', 3, '2018-10-04 02:14:58', 'lutfi', '2018-11-04 19:40:37', 'Admin'),
(30, 'Rio', 3, '2018-10-04 02:15:28', 'lutfi', '2018-11-04 19:40:42', 'Admin'),
(31, 'Ranger', 3, '2018-10-04 02:15:42', 'lutfi', '2018-11-04 19:40:50', 'Admin'),
(32, 'Cosmo', 3, '2018-10-04 02:15:59', 'lutfi', '2018-11-04 19:40:56', 'Admin'),
(33, 'Standard', 3, '2018-10-04 02:16:22', 'lutfi', '2018-11-04 19:41:03', 'Admin'),
(34, 'Ban Karet Chrome', 3, '2018-10-04 02:16:43', 'lutfi', '2018-11-04 19:41:21', 'Admin'),
(35, 'Ban Karet Cat', 3, '2018-10-04 02:22:21', 'lutfi', '2018-11-04 19:41:31', 'Admin'),
(36, 'Gantungan', 4, '2018-11-04 19:46:39', 'Admin', '2018-11-04 19:46:39', NULL),
(37, 'Gasing', 4, '2018-11-04 19:46:49', 'Admin', '2018-11-04 19:46:49', NULL),
(39, 'Hippo', 4, '2018-11-04 19:49:31', 'Admin', '2018-11-04 19:49:31', NULL),
(40, 'Kereta', 4, '2018-11-04 19:49:41', 'Admin', '2018-11-04 19:49:41', NULL),
(41, 'Lalin', 4, '2018-11-04 19:49:55', 'Admin', '2018-11-04 19:49:55', NULL),
(42, 'Mobil', 4, '2018-11-04 19:50:03', 'Admin', '2018-11-04 19:50:03', NULL),
(43, 'Rolex', 4, '2018-11-04 19:50:12', 'Admin', '2018-11-04 19:50:12', NULL),
(44, 'Sapi (NEW)', 4, '2018-11-04 19:50:20', 'Admin', '2018-11-22 01:59:00', 'Admin'),
(45, 'Ukuran 12 Inch', 5, '2018-11-04 19:52:26', 'Admin', '2018-11-04 19:52:26', NULL),
(46, 'Ukuran 16 Inch', 5, '2018-11-04 19:52:35', 'Admin', '2018-11-04 19:52:35', NULL),
(47, 'Ukuran 18 Inch', 5, '2018-11-04 19:52:43', 'Admin', '2018-11-04 19:52:43', NULL),
(48, 'Ukuran 20 Inch', 5, '2018-11-04 19:52:51', 'Admin', '2018-11-04 19:52:51', NULL),
(49, 'Tolo Car', 6, '2018-11-04 19:54:11', 'Admin', '2018-11-04 19:54:11', NULL),
(50, 'High Chair', 8, '2018-11-04 19:55:35', 'Admin', '2018-11-04 19:55:35', NULL),
(51, 'Chair Stroller', 8, '2018-11-04 21:09:59', 'Admin', '2018-11-04 21:09:59', NULL),
(52, 'Baby Stroller', 8, '2018-11-04 21:10:20', 'Admin', '2018-11-04 21:10:20', NULL),
(55, 'Octopus', 4, '2018-11-23 01:56:01', 'Admin', '2018-11-23 01:56:01', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(11) NOT NULL,
  `title` varchar(256) NOT NULL,
  `desc` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` varchar(2556) NOT NULL,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_by` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `title`, `desc`, `created_at`, `created_by`, `updated_at`, `updated_by`) VALUES
(1, 'Family Trike Pusat', '<div>Jl. Kapuk Indah No. 6, Penjaringan&nbsp;</div><div>Jakarta Utara</div><div><br></div><div>021345678&nbsp;</div><div><i>famili_trike@gmail.com</i></div>', '2018-10-11 07:09:48', 'lutfi', '2018-10-16 06:36:05', 'Admin');

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
(5, 'Bisakah saya mendapatkan suku cadang dari Sepeda Family?', 'Iya nih! Kami memiliki banyak suku cadang. Silakan hubungi dealer Sepeda Keluarga setempat atau distributor nasional jika dealer Anda tidak dapat membantu.', '2018-12-03 09:57:41', 'lutfi', '2018-12-03 02:57:41', 'Admin'),
(6, 'Apakah saya perlu mendaftarkan sepeda baru saya?', 'Selama Anda menyimpan bukti pembelian yang menunjukkan Anda sebagai pemilik asli, sepeda Anda akan memenuhi syarat untuk garansi atau penggantian kecelakaan jika Anda membutuhkannya.', '2018-10-19 06:03:58', 'lutfi', '2018-10-18 23:03:59', 'Admin'),
(7, 'Apakah Anda memiliki decals pengganti untuk sepeda?', 'Maaf kami tidak memiliki decals untuk Sepeda Keluarga Anda.', '2018-10-19 06:04:31', 'lutfi', '2018-10-18 23:04:31', 'Admin'),
(8, 'Bagaimana prosedur garansi?', 'Hubungi dealer Sepeda Keluarga resmi Anda. Bawa sepeda rakitan untuk diperiksa ke dealer Sepeda Keluarga resmi Anda. Pastikan Anda membawa faktur asli', '2018-10-19 06:04:57', 'lutfi', '2018-10-18 23:04:57', 'Admin'),
(9, 'Apakah ada Garansi untuk sepeda bekas?', 'Kami tidak dapat menawarkan jaminan apa pun untuk sepeda bekas.', '2018-10-19 06:05:26', 'Admin', '2018-10-18 23:05:26', 'Admin'),
(10, 'Apa status klaim garansi saya?', 'Silakan periksa dealer dealer kami dealer Sepeda Keluarga di mana Anda mengklaim produk.', '2018-10-19 06:06:12', 'Admin', '2018-10-18 23:06:12', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(10) UNSIGNED NOT NULL,
  `namefile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `flag` int(11) NOT NULL COMMENT 'master foto',
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci,
  `is_hide` int(11) DEFAULT '1',
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `namefile`, `flag`, `type`, `text`, `is_hide`, `description`, `created_by`, `created_at`, `updated_by`, `updated_at`) VALUES
(2, 'c1539760033.png', 4, 'Slide 1', 'Kami membuat keceriaan anak-anak, sebagaimana seharusnya', 1, 'Image Slider 1', 'Admin', '2018-02-26 21:14:19', 'Admin', '2018-11-20 23:03:52'),
(9, 'c1539697407.jpg', 5, 'Slide 2', 'Kami menjadi bagian dari Anda', 1, 'Image Slider 2', 'Admin', '2018-02-26 22:58:07', 'Admin', '2018-11-20 23:05:16'),
(10, 'c1539697447.jpg', 6, 'Slide 3', 'Kami memperlakukan pelanggan kami, seperti KELUARGA', 1, 'Image Slider 3', 'Admin', '2018-02-26 22:59:13', 'Admin', '2018-11-20 23:02:33'),
(11, 'c1539697474.jpg', 1, 'News', NULL, 1, 'Highlights News at dashboard', 'Admin', '2018-10-10 07:25:17', NULL, '2018-10-16 06:44:34'),
(12, 'c1539700166.png', 2, 'Product', NULL, 1, 'Highlights About at dashboard', 'Admin', '2018-10-10 07:25:17', NULL, '2018-10-16 07:29:26'),
(13, 'c1539700534.jpg', 3, 'About', NULL, 1, 'Highlights About at dashboard', 'Admin', '2018-10-10 07:28:37', NULL, '2018-10-16 07:35:34'),
(14, 'c1543826251.jpg', 7, 'Our Story', NULL, 1, 'Image beside \"Our Story\"', 'Admin', '2018-10-10 07:28:37', NULL, '2018-12-03 01:37:31'),
(15, 'c1542858852.png', 8, 'Brand Ambassador', NULL, 1, 'Image on the bottom left corner', 'Admin', '2018-10-18 04:19:43', 'Admin', '2018-12-07 03:13:18'),
(16, 'c1539844168.png', 9, 'sponsor1', NULL, 1, 'Sponsor Image 1', 'Admin', '2018-10-18 06:27:44', NULL, '2018-10-17 23:29:28'),
(17, 'c1539844181.png', 10, 'sponsor2', NULL, 1, 'Sponsor Image 2', 'Admin', '2018-10-18 06:27:44', NULL, '2018-10-17 23:29:41'),
(18, 'c1539844193.png', 11, 'sponsor3', NULL, 1, 'Sponsor Image 3', 'Admin', '2018-10-18 06:27:44', NULL, '2018-10-17 23:29:53'),
(19, 'c1539844203.png', 12, 'sponsor4', NULL, 1, 'Sponsor Image 4', 'Admin', '2018-10-18 06:27:44', NULL, '2018-10-17 23:30:03'),
(20, 'c1539844246.png', 13, 'sponsor5', NULL, 1, 'Sponsor Image 5', 'Admin', '2018-10-18 06:27:44', NULL, '2018-10-17 23:30:46');

-- --------------------------------------------------------

--
-- Table structure for table `master_ban`
--

CREATE TABLE `master_ban` (
  `id` int(11) NOT NULL,
  `nama_ban` varchar(256) NOT NULL,
  `id_category` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` varchar(256) NOT NULL,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_by` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `master_ban`
--

INSERT INTO `master_ban` (`id`, `nama_ban`, `id_category`, `created_at`, `created_by`, `updated_at`, `updated_by`) VALUES
(1, 'Seri Racing', 3, '2018-09-27 10:43:26', '', '2018-12-06 08:19:55', 'Admin'),
(2, 'Seri 9', 3, '2018-09-27 10:43:26', '', '2018-12-06 03:07:14', 'Superadmin'),
(3, 'Seri 5', 3, '2018-10-03 09:29:33', '', '2018-12-06 03:07:19', 'Superadmin'),
(4, 'Seri Karet', 3, '2018-10-04 09:40:04', '', '2018-12-06 08:20:08', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `master_mainan`
--

CREATE TABLE `master_mainan` (
  `id` int(11) NOT NULL,
  `nama_mainan` varchar(256) NOT NULL,
  `id_category` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` varchar(256) NOT NULL,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_by` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `master_mainan`
--

INSERT INTO `master_mainan` (`id`, `nama_mainan`, `id_category`, `created_at`, `created_by`, `updated_at`, `updated_by`) VALUES
(1, 'Maskot', 3, '2018-09-27 10:43:51', '', '2018-12-06 03:09:22', 'Superadmin'),
(2, 'Robot', 3, '2018-10-03 09:30:44', '', '2018-12-06 07:42:37', NULL),
(3, 'Lebah', 3, '2018-09-27 04:16:02', 'lutfi', '2018-12-06 07:42:40', NULL),
(4, 'Poni', 3, '2018-10-04 09:37:07', '', '2018-12-06 07:42:55', NULL),
(5, 'Gurita', 3, '2018-10-04 09:37:07', '', '2018-12-06 07:42:58', NULL),
(6, 'Aero', 3, '2018-10-04 09:37:07', '', '2018-10-04 09:37:07', NULL),
(7, 'Kelinci', 3, '2018-10-04 09:37:07', '', '2018-11-04 21:15:36', 'Admin'),
(8, 'Kuda', 3, '2018-10-04 09:37:07', '', '2018-10-04 09:37:07', NULL),
(9, 'Rio', 3, '2018-10-04 09:37:07', '', '2018-10-04 09:37:07', NULL),
(10, 'Ranger', 3, '2018-10-04 09:37:07', '', '2018-10-04 09:37:07', NULL),
(11, 'Cosmo', 3, '2018-10-04 09:37:07', '', '2018-10-04 09:37:07', NULL),
(12, 'Standard', 3, '2018-10-04 09:37:07', '', '2018-10-04 09:37:07', NULL),
(13, 'Speedo', 3, '2018-10-04 09:37:07', '', '2018-10-04 09:37:07', NULL),
(14, 'Tebeng 3D', 3, '2018-10-04 09:37:07', '', '2018-10-04 09:37:07', NULL),
(15, 'Beruang', 4, '2018-11-01 20:05:05', 'Admin', '2018-12-07 07:41:55', 'Admin'),
(16, 'Bunga Ulir', 4, '2018-11-04 21:12:23', 'Admin', '2018-12-07 07:41:58', NULL),
(17, 'Bola-Bola', 4, '2018-11-04 21:12:35', 'Admin', '2018-12-07 07:42:00', NULL),
(18, 'Burung Hantu', 4, '2018-11-04 21:12:48', 'Admin', '2018-12-07 07:42:02', NULL),
(19, 'Drum', 4, '2018-11-04 21:13:24', 'Admin', '2018-12-07 07:42:04', NULL),
(20, 'Gantungan', 4, '2018-11-04 21:13:30', 'Admin', '2018-12-07 07:42:06', NULL),
(21, 'Gasing', 4, '2018-11-04 21:13:35', 'Admin', '2018-12-07 07:42:08', NULL),
(22, 'Hippo', 4, '2018-11-04 21:13:41', 'Admin', '2018-12-07 07:42:10', NULL),
(23, 'Kereta', 4, '2018-11-04 21:13:46', 'Admin', '2018-12-07 07:42:12', NULL),
(24, 'Lalin', 4, '2018-11-04 21:13:52', 'Admin', '2018-12-07 07:42:13', NULL),
(25, 'Mobil', 4, '2018-11-04 21:14:10', 'Admin', '2018-12-07 07:42:15', NULL),
(26, 'Rolex', 4, '2018-11-04 21:16:42', 'Admin', '2018-12-07 07:42:20', NULL),
(27, 'Sapi', 4, '2018-11-04 21:16:50', 'Admin', '2018-12-07 07:42:36', NULL),
(28, 'Octopus', 4, '2018-11-23 01:58:59', 'Admin', '2018-12-07 07:42:39', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `master_sandaran`
--

CREATE TABLE `master_sandaran` (
  `id` int(11) NOT NULL,
  `nama_sandaran` varchar(256) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` varchar(256) NOT NULL,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_by` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `master_sandaran`
--

INSERT INTO `master_sandaran` (`id`, `nama_sandaran`, `created_at`, `created_by`, `updated_at`, `updated_by`) VALUES
(1, 'Sandaran Mobil', '2018-09-27 10:49:50', '', '2018-10-09 00:17:36', 'Admin'),
(2, 'Pesawat', '2018-09-27 10:49:50', '', '2018-10-04 09:42:17', NULL),
(3, 'Jumbo', '2018-10-03 09:31:22', '', '2018-10-04 09:42:29', NULL),
(4, 'Bintang', '2018-10-04 09:45:48', '', '2018-10-04 09:45:48', NULL),
(5, 'Standard', '2018-10-04 09:45:48', '', '2018-10-04 09:45:48', NULL),
(6, 'Busa', '2018-10-04 09:45:48', '', '2018-10-04 09:45:48', NULL),
(7, 'Body Motor', '2018-10-04 09:45:48', '', '2018-10-04 09:45:48', NULL),
(8, 'Frame Cover', '2018-10-04 09:45:48', '', '2018-10-04 09:45:48', NULL),
(9, 'Tanpa Sandaran', '2018-10-09 02:14:49', 'Admin', '2018-10-09 02:14:49', NULL);

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
(8, '2018_02_26_090105_bikin_tabel_highlight', 3),
(9, '2014_04_02_193005_create_translations_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `negara`
--

CREATE TABLE `negara` (
  `provinsi` varchar(255) NOT NULL,
  `kota` varchar(255) NOT NULL,
  `daerah` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `negara`
--

INSERT INTO `negara` (`provinsi`, `kota`, `daerah`) VALUES
('jabar', 'bogor', 'cipaku'),
('jabar', 'bogor', 'layungsari'),
('jabar', 'jakarta', 'utan kayu'),
('jabar', 'jakarta', 'blok m'),
('jatim', 'solo', 'purwakarta');

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
(7, 'asdasdasd', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet officiis est velit tenetur quod quae esse ab repellat veritatis. Placeat quasi voluptate hic, doloribus cum ab consequatur ullam corporis enim.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque accusantium qui aspernatur, ducimus quia quaerat dolore, similique eum iure eos excepturi aperiam dolorum ut. Dolores officiis eum, sapiente tempore molestias!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci similique perspiciatis minus itaque natus, pariatur assumenda commodi odio quisquam tempora. Mollitia repellat saepe numquam optio commodi consectetur a voluptas distinctio. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet officiis est velit tenetur quod quae esse ab repellat veritatis. Placeat quasi voluptate hic, doloribus cum ab consequatur ullam corporis enim.Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet officiis est velit tenetur quod quae esse ab repellat veritatis. Placeat quasi voluptate hic, doloribus cum ab consequatur ullam corporis enim.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque accusantium qui aspernatur, ducimus quia quaerat dolore, similique eum iure eos excepturi aperiam dolorum ut. Dolores officiis eum, sapiente tempore molestias!Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>', 'content2.jpg', 'lutfi', '2018-02-26 01:03:01', 'lutfi', '2018-02-26 01:52:48'),
(8, 'MAINAN RIOs', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet officiis est velit tenetur quod quae esse ab repellat veritatis. Placeat quasi voluptate hic, doloribus cum ab consequatur ullam corporis enim.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque accusantium qui aspernatur, ducimus quia quaerat dolore, similique eum iure eos excepturi aperiam dolorum ut. Dolores officiis eum, sapiente tempore molestias!Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>', 'n1539315934.jpg', 'Admin', '2018-10-11 20:39:35', 'Admin', '2018-10-11 20:45:34'),
(9, 'Can I get spare parts from Family Bikes?', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet officiis est velit tenetur quod quae esse ab repellat veritatis. Placeat quasi voluptate hic, doloribus cum ab consequatur ullam corporis enim.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque accusantium qui aspernatur, ducimus quia quaerat dolore, similique eum iure eos excepturi aperiam dolorum ut. Dolores officiis eum, sapiente tempore molestias!Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>', '(B2) F-845F T 4.jpg', 'Admin', '2018-10-11 20:39:45', NULL, '2018-10-11 20:39:45'),
(10, 'sdaaaa', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet officiis est velit tenetur quod quae esse ab repellat veritatis. Placeat quasi voluptate hic, doloribus cum ab consequatur ullam corporis enim.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque accusantium qui aspernatur, ducimus quia quaerat dolore, similique eum iure eos excepturi aperiam dolorum ut. Dolores officiis eum, sapiente tempore molestias!Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>', '(B2) F-845F T 4.jpg', 'Admin', '2018-10-11 20:40:07', NULL, '2018-10-11 20:40:07'),
(11, 'sasd', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet officiis est velit tenetur quod quae esse ab repellat veritatis. Placeat quasi voluptate hic, doloribus cum ab consequatur ullam corporis enim.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque accusantium qui aspernatur, ducimus quia quaerat dolore, similique eum iure eos excepturi aperiam dolorum ut. Dolores officiis eum, sapiente tempore molestias!Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>', '(B2) F-845F T 2.jpg', 'Admin', '2018-10-11 20:40:16', NULL, '2018-10-11 20:40:16'),
(12, 'asdadada', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet officiis est velit tenetur quod quae esse ab repellat veritatis. Placeat quasi voluptate hic, doloribus cum ab consequatur ullam corporis enim.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque accusantium qui aspernatur, ducimus quia quaerat dolore, similique eum iure eos excepturi aperiam dolorum ut. Dolores officiis eum, sapiente tempore molestias!Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>', '(B2) F-845F T 2.jpg', 'Admin', '2018-10-11 20:40:32', NULL, '2018-10-11 20:40:32');

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
  `description` text COLLATE utf8mb4_unicode_ci,
  `price` int(11) DEFAULT NULL,
  `hide_price` int(11) DEFAULT '0',
  `id_mainan` int(11) DEFAULT NULL,
  `id_sandaran` int(11) DEFAULT NULL,
  `id_ban` int(11) DEFAULT NULL,
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

INSERT INTO `product_details` (`id`, `name_product`, `id_category`, `id_category_sub`, `description`, `price`, `hide_price`, `id_mainan`, `id_sandaran`, `id_ban`, `image1`, `image2`, `image3`, `image4`, `image5`, `created_at`, `created_by`, `updated_at`, `updated_by`) VALUES
(3, 'F – 845FT', 3, 3, '<p class=\"Standard\"><span lang=\"IN\">- Roda Seri Racing<o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Mainan “ROBOT”<o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Sandaran Tangan “BINTANG”<o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Gagang Dorongan<o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Kanopi<o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Keranjang Belakang<o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Sistem Suspensi<o:p></o:p></span></p><p class=\"Standard\">\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n</p><p class=\"Standard\"><span lang=\"IN\">- Tatakan Kaki<o:p></o:p></span></p><p></p>', 910000, 1, 2, 4, 1, '1539253912a.jpg', '1539074096b.jpg', '1539074096c.jpg', '1539074096d.jpg', '1539074096e.jpg', '2018-02-16 15:34:36', '', '2018-12-05 04:08:38', 'Admin'),
(4, 'F – 823FT', 3, 3, '<p class=\"Standard\"><span lang=\"IN\">- Roda Seri Racing<o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Mainan “ROBOT”<o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Sandaran Tangan “PESAWAT”<o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Gagang Dorongan<o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Kanopi<o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Keranjang Belakang<o:p></o:p></span></p><p>\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n</p><p class=\"Standard\"><i><span lang=\"IN\">- </span></i><span lang=\"IN\">Tatakan Kaki<i><o:p></o:p></i></span></p>', 5600000, 1, 2, 2, 1, '1539074174a.jpg', '1539074174b.jpg', '1539074174c.jpg', '1539074174d.jpg', '1539074174e.jpg', '2018-02-16 15:34:29', '', '2018-12-05 04:08:38', 'Admin'),
(5, 'F – 853DT', 3, 4, '<p class=\"Standard\"><span lang=\"IN\">- Roda Seri Racing<o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Mainan “LEBAH”<o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Sandaran Tangan “MOBIL”<o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Gagang Dorongan<o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Kanopi<o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Keranjang Belakang<o:p></o:p></span></p><p>\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n</p><p class=\"Standard\"><span lang=\"IN\">- Tatakan Kaki<o:p></o:p></span></p>', 5400000, 1, 3, 1, 1, '1539074555a.jpg', '1539074555b.jpg', '1539074555c.jpg', '1539074555d.jpg', '1539074555e.jpg', '2018-02-16 15:34:36', '', '2018-12-05 04:08:38', 'Admin'),
(6, 'F – 845DT', 3, 4, '<p class=\"Standard\"><span lang=\"IN\">- Roda Seri Racing<o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Mainan “LEBAH”<o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Sandaran Tangan “BINTANG”<o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Sistem Suspensi<o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Gagang Dorongan<o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Kanopi<o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Keranjang Belakang<o:p></o:p></span></p><p>\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n</p><p class=\"Standard\"><span lang=\"IN\">- Tatakan Kaki<o:p></o:p></span></p>', 3400000, 1, 3, 4, 1, '1539074620a.jpg', '1539074620b.jpg', '1539074620c.jpg', '1539074620d.jpg', '1539074620e.jpg', '2018-02-16 15:34:29', '', '2018-12-05 04:08:38', 'Admin'),
(7, 'F – 923DT', 3, 4, '<p class=\"Standard\"><span lang=\"IN\">- Roda Seri 9<o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Mainan “LEBAH”<o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Sandaran Tangan “PESAWAT”<o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Gagang Dorongan<o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Kanopi<o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Keranjang Belakang<o:p></o:p></span></p><p>\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n</p><p class=\"Standard\"><span lang=\"IN\">- Tatakan Kaki<o:p></o:p></span></p>', 8000000, 1, 3, 2, 2, '1539074711a.jpg', '1539074711b.jpg', '1539074711c.jpg', '1539074711d.jpg', '1539074711e.jpg', '2018-02-16 15:34:36', '', '2018-12-05 04:08:38', 'Admin'),
(8, 'F – 993DT', 3, 4, '<p class=\"Standard\"><span lang=\"IN\">- Roda Seri 9<o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Mainan “LEBAH”<o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Sandaran Tangan “JUMBO”<o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Gagang Dorongan<o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Kanopi<o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Keranjang Belakang<o:p></o:p></span></p><p>\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n</p><p class=\"Standard\"><span lang=\"IN\">- Tatakan Kaki<o:p></o:p></span></p>', 6000000, 1, 3, 3, 2, '1539074780a.jpg', '1539074780b.jpg', '1539074780c.jpg', '1539074780d.jpg', '1539074780e.jpg', '2018-02-16 15:34:29', '', '2018-12-05 04:08:38', 'Admin'),
(9, 'F – 993MT', 3, 2, '<p class=\"Standard\"><span lang=\"IN\">- Roda Seri 9<o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Mainan “MASKOT”<o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">-&nbsp;<o:p></o:p></span>Sandaran Tangan “JUMBO”</p><p class=\"Standard\"><span lang=\"IN\">- Kipas Angin<o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Gagang Dorongan<o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Kanopi<o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Keranjang Belakang<o:p></o:p></span></p><p>\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n</p><p class=\"Standard\"><span lang=\"IN\">- Tatakan Kaki<o:p></o:p></span></p>', 500000, 1, 1, 3, 2, '1539074385a.jpg', '1539074385b.jpg', '1539074385c.jpg', '1539074385d.jpg', '1539074385e.jpg', '2018-02-26 00:32:14', 'lutfi', '2018-12-05 04:08:38', 'Admin'),
(10, 'F – 853MT', 3, 2, '<p class=\"Standard\"><span lang=\"IN\">- Roda Seri Racing<o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Mainan “MASKOT”<o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">-&nbsp;<o:p></o:p></span>Sandaran Tangan “MOBIL”</p><p class=\"Standard\"><span lang=\"IN\">- Kipas Angin<o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Gagang Dorongan<o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Kanopi<o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Keranjang Belakang<o:p></o:p></span></p><p>\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n</p><p class=\"Standard\"><span lang=\"IN\">- Tatakan Kaki<o:p></o:p></span></p>', 5000000, 1, 1, 1, 1, '1539074414a.jpg', '1539074414b.jpg', '1539074414c.jpg', '1539074414d.jpg', '1539074414e.jpg', '2018-02-28 23:48:32', 'lutfi', '2018-12-05 04:08:38', 'Admin'),
(11, 'F – 823MT', 3, 2, '<p class=\"Standard\"><span lang=\"IN\">- Roda Seri Racing<o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Mainan “MASKOT”<o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">-&nbsp;<o:p></o:p></span>Sandaran Tangan “PESAWAT”</p><p class=\"Standard\"><span lang=\"IN\">- Kipas Angin<o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Gagang Dorongan<o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Kanopi<o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Keranjang Belakang<o:p></o:p></span></p><p>\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n</p><p class=\"Standard\"><span lang=\"IN\">- Tatakan Kaki<o:p></o:p></span></p>', 50000, 1, 1, 2, 1, '1539317886a.jpg', '1539317886b.jpg', '1539317886c.jpg', '1539074437d.jpg', '1539317886e.jpg', '2018-09-02 21:40:29', 'lutfi', '2018-12-05 04:08:39', 'Admin'),
(12, 'F – 853FT', 3, 3, '<p class=\"Standard\"><span lang=\"IN\">- Roda Seri Racing<o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Mainan “ROBOT”<o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Sandaran Tangan “MOBIL”<o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Gagang Dorongan<o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Kanopi<o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Keranjang Belakang<o:p></o:p></span></p><p>\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n</p><p class=\"Standard\"><span lang=\"IN\">- Tatakan Kaki<o:p></o:p></span></p>', 532100, 1, 2, 1, 1, '1539074213a.jpg', '1539074213b.jpg', '1539074213c.jpg', '1539074213d.jpg', '1539074213e.jpg', '2018-09-27 03:26:08', 'lutfi', '2018-12-05 04:08:38', 'Admin'),
(14, 'F – 853GT', 3, 5, '<p class=\"Standard\"><span lang=\"IN\">- Roda Seri Racing<o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Mainan “PONI”<o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Sandaran Tangan “MOBIL”<o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Gagang Dorongan<o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Kanopi<o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Keranjang Belakang<o:p></o:p></span></p><p>\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n</p><p class=\"Standard\"><span lang=\"IN\">- Tatakan Kaki<o:p></o:p></span></p>', 510000, 1, 4, 1, 1, '1539074998a.jpg', '1539074998b.jpg', '1539074998c.jpg', '1539074998d.jpg', '1539074998e.jpg', '2018-10-09 01:49:58', 'Admin', '2018-12-05 04:08:39', 'Admin'),
(15, 'F – 845GT', 3, 5, '<p class=\"Standard\"><span lang=\"IN\">- Roda Seri Racing<o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Mainan “PONI”<o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Sandaran Tangan “BINTANG”<o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Sistem Suspensi<o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Gagang Dorongan<o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Kanopi<o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Keranjang Belakang<o:p></o:p></span></p><p>\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n</p><p class=\"Standard\"><span lang=\"IN\">- Tatakan Kaki<o:p></o:p></span></p>', 510000, 1, 4, 4, 1, '1539075061a.jpg', '1539075061b.jpg', '1539075061c.jpg', '1539075061d.jpg', '1539075061e.jpg', '2018-10-09 01:51:01', 'Admin', '2018-12-05 04:08:39', 'Admin'),
(16, 'F – 993GT', 3, 5, '<p class=\"Standard\"><span lang=\"IN\">- Roda Seri 9<o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Mainan “PONI”<o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Sandaran Tangan “STANDARD”<o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Gagang Dorongan<o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Kanopi<o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Keranjang Belakang<o:p></o:p></span></p><p>\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n</p><p class=\"Standard\"><span lang=\"IN\">- Tatakan Kaki<o:p></o:p></span></p>', 500000, 1, 4, 5, 2, '1539075119a.jpg', '1539075119b.jpg', '1539075119c.jpg', '1539075119d.jpg', '1539075119e.jpg', '2018-10-09 01:51:59', 'Admin', '2018-12-05 04:08:39', 'Admin'),
(17, 'F – 943KT', 3, 6, '<p class=\"Standard\"><span lang=\"IN\">- Roda Seri 9<o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Mainan “GURITA”<o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Sandaran Tangan “BINTANG”<o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Gagang Dorongan<o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Kanopi<o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Keranjang Belakang<o:p></o:p></span></p><p>\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n</p><p class=\"Standard\"><span lang=\"IN\">- Tatakan Kaki<o:p></o:p></span></p>', 12345, 1, 5, 4, 2, '1539075182a.jpg', '1539075182b.jpg', '1539075182c.jpg', '1539075182d.jpg', '1539075182e.jpg', '2018-10-09 01:53:02', 'Admin', '2018-12-05 04:08:39', 'Admin'),
(18, 'F – 923KT', 3, 6, '<p class=\"Standard\"><span lang=\"IN\">- Roda Seri 9<o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Mainan “GURITA”<o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Sandaran Tangan “PESAWAT”<o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Gagang Dorongan<o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Kanopi<o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Keranjang Belakang<o:p></o:p></span></p><p>\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n</p><p class=\"Standard\"><span lang=\"IN\">- Tatakan Kaki<o:p></o:p></span></p>', 532100, 1, 5, 2, 2, '1539075241a.jpg', '1539075241b.jpg', '1539075241c.jpg', '1539075241d.jpg', '1539075241e.jpg', '2018-10-09 01:54:01', 'Admin', '2018-12-05 04:08:39', 'Admin'),
(19, 'F – 993KT', 3, 6, '<p class=\"Standard\"><span lang=\"IN\">- Roda Seri 9<o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Mainan “GURITA”<o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Sandaran Tangan “JUMBO”<o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Gagang Dorongan<o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Kanopi<o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Keranjang Belakang<o:p></o:p></span></p><p>\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n</p><p class=\"Standard\"><span lang=\"IN\">- Tatakan Kaki<o:p></o:p></span></p>', 500000, 1, 5, 3, 2, '1539075308a.jpg', '1539075308b.jpg', '1539075308c.jpg', '1539075308d.jpg', '1539075308e.jpg', '2018-10-09 01:55:08', 'Admin', '2018-12-05 04:08:39', 'Admin'),
(20, 'F – 902K', 3, 6, '<p class=\"Standard\"><span lang=\"IN\">- Roda Seri 9<o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Mainan “GURITA”<o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Sandaran Tangan “PESAWAT”<o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Gagang Dorongan<o:p></o:p></span></p><p>\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n</p><p class=\"Standard\"><span lang=\"IN\">- Boncengan&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<o:p></o:p></span></p>', 5000000, 1, 5, 2, 2, '1539075379a.jpg', '1539075379b.jpg', '1539075379c.jpg', '1539075379d.jpg', '1539075379e.jpg', '2018-10-09 01:56:19', 'Admin', '2018-12-05 04:08:39', 'Admin'),
(21, 'F – 923PT', 3, 27, '<p class=\"Standard\"><span lang=\"IN\">- Roda Seri 9<o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Mainan “AERO”<o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Sandaran Tangan “PESAWAT”<o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Gagang Dorongan<o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Kanopi<o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Keranjang Depan<o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Keranjang Belakang<o:p></o:p></span></p><p>\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n</p><p class=\"Standard\"><span lang=\"IN\">- Tatakan Kaki<o:p></o:p></span></p>', 510000, 1, 6, 2, 2, '1539075449a.jpg', '1539075449b.jpg', '1539075449c.jpg', '1539075449d.jpg', '1539075449e.jpg', '2018-10-09 01:57:29', 'Admin', '2018-12-05 04:08:38', 'Admin'),
(22, 'F – 993PT', 3, 27, '<p class=\"Standard\"><span lang=\"IN\">- Roda Seri 9<o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Mainan “AERO”<o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Sandaran Tangan “STANDARD”<o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Gagang Dorongan<o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Kanopi<o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Keranjang Belakang<o:p></o:p></span></p><p>\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n</p><p class=\"Standard\"><span lang=\"IN\">- Tatakan Kaki<o:p></o:p></span></p>', 12345, 1, 6, 5, 2, '1539075527a.jpg', '1539075527b.jpg', '1539075527c.jpg', '1539075527d.jpg', '1539075527e.jpg', '2018-10-09 01:58:47', 'Admin', '2018-12-05 04:08:38', 'Admin'),
(23, 'F – 598P', 3, 27, '<p class=\"Standard\"><span lang=\"IN\">- Roda Seri 5<o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Mainan “AERO”<o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Sandaran Tangan “STANDARD”<o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Gagang Dorongan<o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Keranjang Depan<o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Keranjang Belakang<o:p></o:p></span></p><p>\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n</p><p class=\"Standard\"><span lang=\"IN\">- Tatakan Kaki<o:p></o:p></span></p>', 510000, 1, 6, 5, 3, '1539075585a.jpg', '1539075585b.jpg', '1539075585c.jpg', '1539075585d.jpg', '1539075585e.jpg', '2018-10-09 01:59:45', 'Admin', '2018-12-05 04:08:38', 'Admin'),
(24, 'F – 9236T', 3, 28, '<p class=\"Standard\"><span lang=\"IN\">- Roda Seri 9<o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Mainan “KELINCI”<o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Sandaran Tangan “PESAWAT”<o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Gagang Dorongan<o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Kanopi<o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Keranjang Belakang<o:p></o:p></span></p><p>\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n</p><p class=\"Standard\"><span lang=\"IN\">- Tatakan Kaki<o:p></o:p></span></p>', 500000, 1, 7, 2, 2, '1539075646a.jpg', '1539075646b.jpg', '1539075646c.jpg', '1539075646d.jpg', '1539075646e.jpg', '2018-10-09 02:00:46', 'Admin', '2018-12-05 04:08:39', 'Admin'),
(25, 'F – 9231T', 3, 29, '<p class=\"Standard\"><span lang=\"IN\">- Roda Seri 9<o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Mainan “KUDA”<o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Sandaran Tangan “PESAWAT”<o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Gagang Dorongan<o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Kanopi<o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Keranjang Belakang<o:p></o:p></span></p><p>\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n</p><p class=\"Standard\"><span lang=\"IN\">- Tatakan Kaki<o:p></o:p></span></p>', 12345, 1, 8, 2, 2, '1539075708a.jpg', '1539075708b.jpg', '1539075708c.jpg', '1539075708d.jpg', '1539075708e.jpg', '2018-10-09 02:01:48', 'Admin', '2018-12-05 04:08:39', 'Admin'),
(26, 'F – 9931T', 3, 29, '<p class=\"Standard\"><span lang=\"IN\">- Roda Seri 9<o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Mainan “KUDA”<o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Sandaran Tangan “STANDARD”<o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Gagang Dorongan<o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Kanopi<o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Keranjang Belakang<o:p></o:p></span></p><p>\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n</p><p class=\"Standard\"><span lang=\"IN\">- Tatakan Kaki<o:p></o:p></span></p>', 510000, 1, 8, 5, 2, '1539075786a.jpg', '1539075786b.jpg', '1539075786c.jpg', '1539075786d.jpg', '1539075786e.jpg', '2018-10-09 02:03:06', 'Admin', '2018-12-05 04:08:39', 'Admin'),
(27, 'F – 9061T', 3, 29, '<p class=\"Standard\"><span lang=\"IN\">- Roda Seri 9<o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Mainan “KUDA”<o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Sandaran Tangan “STANDARD”<o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Gagang Dorongan<o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Kanopi</span></p><p class=\"Standard\"><span lang=\"IN\"><o:p></o:p></span></p><p><span lang=\"IN\" style=\"font-size:12.0pt;font-family:\" liberation=\"\" serif\",serif;=\"\" mso-fareast-font-family:simsun;mso-bidi-font-family:mangal;mso-ansi-language:=\"\" in;mso-fareast-language:zh-cn;mso-bidi-language:hi\"=\"\">- Boncengan</span><br></p>', 500000, 1, 8, 5, 2, '1539075859a.jpg', '1539075859b.jpg', '1539075859c.jpg', '1539075859d.jpg', '1539075859e.jpg', '2018-10-09 02:04:19', 'Admin', '2018-12-05 04:08:39', 'Admin'),
(28, 'F – 853AT', 3, 30, '<p class=\"Standard\"><span lang=\"IN\">- Roda Seri Racing<o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Mainan “RIO”<o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Sandaran Tangan “MOBIL”<o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Gagang Dorongan<o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Kanopi&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Keranjang Belakang<o:p></o:p></span></p><p>\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n</p><p class=\"Standard\"><span lang=\"IN\">- Tatakan Kaki<o:p></o:p></span></p>', 12345, 1, 9, 1, 1, '1539075916a.jpg', '1539075916b.jpg', '1539075916c.jpg', '1539075916d.jpg', '1539075916e.jpg', '2018-10-09 02:05:16', 'Admin', '2018-12-05 04:08:39', 'Admin'),
(29, 'F – 823AT', 3, 30, '<p class=\"Standard\"><span lang=\"IN\">- Roda Seri Racing<o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Mainan “RIO”<o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Sandaran Tangan “PESAWAT”<o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Gagang Dorongan<o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Kanopi<o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Keranjang Belakang<o:p></o:p></span></p><p>\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n</p><p class=\"Standard\"><span lang=\"IN\">- Tatakan Kaki<o:p></o:p></span></p>', 510000, 1, 9, 2, 1, '1539075989a.jpg', '1539075989b.jpg', '1539075989c.jpg', '1539075989d.jpg', '1539075989e.jpg', '2018-10-09 02:06:29', 'Admin', '2018-12-05 04:08:39', 'Admin'),
(30, 'F – 893AT', 3, 30, '<p class=\"Standard\"><span lang=\"IN\">- Roda Seri Racing<o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Mainan “RIO”<o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Sandaran Tangan “JUMBO”<o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Gagang Dorongan<o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Kanopi<o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Keranjang Belakang<o:p></o:p></span></p><p>\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n</p><p class=\"Standard\"><span lang=\"IN\">- Tatakan Kaki<o:p></o:p></span></p>', 12345, 1, 9, 3, 1, '1539076043a.jpg', '1539076043b.jpg', '1539076043c.jpg', '1539076043d.jpg', '1539076043e.jpg', '2018-10-09 02:07:23', 'Admin', '2018-12-05 04:08:39', 'Admin'),
(31, 'F – 993AT', 3, 30, '<p class=\"Standard\"><span lang=\"IN\">- Roda Seri 9<o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Mainan “RIO”<o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Sandaran Tangan “STANDARD”<o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Gagang Dorongan<o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Kanopi<o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Keranjang Belakang<o:p></o:p></span></p><p>\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n<span lang=\"IN\" style=\"font-size:12.0pt;font-family:\" liberation=\"\" serif\",serif;=\"\" mso-fareast-font-family:simsun;mso-bidi-font-family:mangal;mso-ansi-language:=\"\" in;mso-fareast-language:zh-cn;mso-bidi-language:hi\"=\"\">- Tatakan Kaki</span><br></p>', 500000, 1, 9, 5, 2, '1539076098a.jpg', '1539076098b.jpg', '1539076098c.jpg', '1539076098d.jpg', '1539076098e.jpg', '2018-10-09 02:08:18', 'Admin', '2018-12-05 04:08:40', 'Admin'),
(32, 'F – 7233T', 3, 31, '<p class=\"Standard\"><span lang=\"IN\">- Roda Seri 9<o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Mainan “RANGER”<o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Sandaran Tangan “PESAWAT”<o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Gagang Dorongan<o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Kanopi<o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Keranjang Belakang<o:p></o:p></span></p><p>\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n</p><p class=\"Standard\"><span lang=\"IN\">- Tatakan Kaki<o:p></o:p></span></p>', 500000, 1, 10, 2, 2, '1539076156a.jpg', '1539076156b.jpg', '1539076156c.jpg', '1539076156d.jpg', '1539076156e.jpg', '2018-10-09 02:09:16', 'Admin', '2018-12-05 04:08:39', 'Admin'),
(33, 'F – 7973T', 3, 31, '<p class=\"Standard\"><span lang=\"IN\">- Roda Seri 9<o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Mainan “RANGER”<o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Sandaran Tangan Busa<o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Gagang Dorongan<o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Kanopi<o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Keranjang Belakang<o:p></o:p></span></p><p>\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n</p><p class=\"Standard\"><span lang=\"IN\">- Tatakan Kaki<o:p></o:p></span></p>', 510000, 1, 10, 6, 2, '1539076205a.jpg', '1539076205b.jpg', '1539076205c.jpg', '1539076205d.jpg', '1539076205e.jpg', '2018-10-09 02:10:05', 'Admin', '2018-12-05 04:08:39', 'Admin'),
(34, 'F – 9933T', 3, 31, '<p class=\"Standard\"><span lang=\"IN\">- Roda Seri 9<o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Mainan “RANGER”<o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Sandaran Tangan “STANDARD”<o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Gagang Dorongan<o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Kanopi<o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Keranjang Belakang<o:p></o:p></span></p><p>\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n</p><p class=\"Standard\"><span lang=\"IN\">- Tatakan Kaki<o:p></o:p></span></p>', 510000, 1, 10, 5, 2, '1539076255a.jpg', '1539076255b.jpg', '1539076255c.jpg', '1539076255d.jpg', '1539076255e.jpg', '2018-10-09 02:10:55', 'Admin', '2018-12-05 04:08:39', 'Admin'),
(35, 'F – 7763', 3, 31, '<p class=\"Standard\"><span lang=\"IN\">- Roda Seri 9<o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Mainan “RANGER”<o:p></o:p></span></p><p class=\"Standard\">\r\n\r\n\r\n\r\n</p><p class=\"Standard\"><span lang=\"IN\">- Body Motor<o:p></o:p></span></p>', 12345, 1, 10, 7, 2, '1539076344a.jpg', '1539076344b.jpg', '1539076344c.jpg', '1539076344d.jpg', '1539076344e.jpg', '2018-10-09 02:12:24', 'Admin', '2018-12-05 04:08:40', 'Admin'),
(36, 'F – 5923', 3, 31, '<p class=\"Standard\"><span lang=\"IN\">- Roda Seri 5<o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Mainan “RANGER”<o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Sandaran Tangan “STANDARD”<o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Keranjang Depan<o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Keranjang Belakang<o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Gagang Dorongan<o:p></o:p></span></p><p>\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n</p><p class=\"Standard\"><span lang=\"IN\">- Tatakan Kaki<o:p></o:p></span></p>', 12345, 1, 10, 5, 3, '1539076399a.jpg', '1539076399b.jpg', '1539076399c.jpg', '1539076399d.jpg', '1539076399e.jpg', '2018-10-09 02:13:19', 'Admin', '2018-12-05 04:08:40', 'Admin'),
(37, 'F – 5973', 3, 31, '<p class=\"Standard\"><span lang=\"IN\">- Roda Seri 5<o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Mainan “RANGER”<o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Keranjang Depan<o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Keranjang Belakang<o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Gagang Dorongan<o:p></o:p></span></p><p>\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n</p><p class=\"Standard\"><span lang=\"IN\">- Tatakan Kaki<o:p></o:p></span></p>', 510000, 1, 10, 9, 3, '1539076581a.jpg', '1539076581b.jpg', '1539076581c.jpg', '1539076581d.jpg', '1539076581e.jpg', '2018-10-09 02:16:21', 'Admin', '2018-12-05 04:08:40', 'Admin'),
(38, 'F – 5963', 3, 31, '<p class=\"Standard\"><span lang=\"IN\">- Roda Seri 5<o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Mainan “RANGER”<o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Sandaran Tangan “JUMBO”<o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Fungsi Ayunan<o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Gagang Dorongan<o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Keranjang Belakang<o:p></o:p></span></p><p>\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n<span lang=\"IN\" style=\"font-size:12.0pt;font-family:\" liberation=\"\" serif\",serif;=\"\" mso-fareast-font-family:simsun;mso-bidi-font-family:mangal;mso-ansi-language:=\"\" in;mso-fareast-language:zh-cn;mso-bidi-language:hi\"=\"\">- Tatakan Kaki</span><br></p>', 12345, 1, 10, 3, 3, '1539076636a.jpg', '1539076636b.jpg', '1539076636c.jpg', '1539076636d.jpg', '1539076636e.jpg', '2018-10-09 02:17:16', 'Admin', '2018-12-05 04:08:40', 'Admin'),
(39, 'F – 5863', 3, 31, '<p class=\"Standard\"><span lang=\"IN\">- Roda Seri 5<o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Mainan “RANGER”<o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Keranjang Depan<o:p></o:p></span></p><p>\r\n\r\n\r\n\r\n\r\n\r\n</p><p class=\"Standard\"><span lang=\"IN\">- Keranjang Belakang<o:p></o:p></span></p>', 500000, 1, 10, 9, 3, '1539076689a.jpg', '1539076689b.jpg', '1539076689c.jpg', '1539076689d.jpg', '1539076689e.jpg', '2018-10-09 02:18:09', 'Admin', '2018-12-05 04:08:40', 'Admin'),
(40, 'F – 893CT', 3, 32, '<p class=\"Standard\"><span lang=\"IN\">- Roda Seri Racing<o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Mainan “COSMO”<o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Sandaran Tangan “JUMBO”<o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Gagang Dorongan<o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Kanopi<o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Keranjang Belakang<o:p></o:p></span></p><p>\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n</p><p class=\"Standard\"><span lang=\"IN\">- Tatakan Kaki<o:p></o:p></span></p>', 12345, 1, 11, 3, 1, '1539076743a.jpg', '1539076743b.jpg', '1539076743c.jpg', '1539076743d.jpg', '1539076743e.jpg', '2018-10-09 02:19:03', 'Admin', '2018-12-05 04:08:40', 'Admin'),
(41, 'F – 831C', 3, 32, '<p class=\"Standard\"><span lang=\"IN\">- Roda Seri Racing<o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Mainan “COSMO”<o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Penutup Rangka<o:p></o:p></span></p><p>\r\n\r\n\r\n\r\n\r\n\r\n</p><p class=\"Standard\"><span lang=\"IN\">- Keranjang Belakang<o:p></o:p></span></p>', 510000, 1, 11, 8, 1, '1539076826a.jpg', '1539076826b.jpg', '1539076826c.jpg', '1539076826d.jpg', '1539076826e.jpg', '2018-10-09 02:20:26', 'Admin', '2018-12-05 04:08:40', 'Admin'),
(42, 'F – 586', 3, 33, '<p class=\"Standard\"><span lang=\"IN\">- Roda Seri 5<o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Mainan Standard<o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Keranjang Depan<o:p></o:p></span></p><p>\r\n\r\n\r\n\r\n\r\n\r\n</p><p class=\"Standard\"><span lang=\"IN\">- Keranjang Belakang<o:p></o:p></span></p>', 12345, 1, 12, 9, 3, '1539076887a.jpg', '1539076887b.jpg', '1539076887c.jpg', '1539076887d.jpg', '1539076887e.jpg', '2018-10-09 02:21:27', 'Admin', '2018-12-05 04:08:40', 'Admin'),
(43, 'F – 776', 3, 33, '<p class=\"Standard\"><span lang=\"IN\">- Roda Seri 9<o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Mainan Standard<o:p></o:p></span></p><p class=\"Standard\">\r\n\r\n\r\n\r\n</p><p class=\"Standard\"><span lang=\"IN\">- Body Motor<o:p></o:p></span></p>', 510000, 1, 12, 9, 2, '1539076954a.jpg', '1539076955b.jpg', '1539076955c.jpg', '1539076955d.jpg', '1539076955e.jpg', '2018-10-09 02:22:35', 'Admin', '2018-12-05 04:08:40', 'Admin'),
(44, 'F – 906', 3, 33, '<p class=\"Standard\"><span lang=\"IN\">- Roda 9<o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Mainan Standard<o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Keranjang Depan<o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Gagang Dorongan<o:p></o:p></span></p><p>\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n</p><p class=\"Standard\"><span lang=\"IN\">- Boncengan<o:p></o:p></span></p>', 12345, 1, 12, 9, 2, '1539077007a.jpg', '1539077007b.jpg', '1539077007c.jpg', '1542878381d.jpg', '1539077007e.jpg', '2018-10-09 02:23:27', 'Admin', '2018-12-05 04:08:41', 'Admin'),
(45, 'F – 919HT', 3, 34, '<p class=\"Standard\"><span lang=\"IN\">- Roda Karet Asli<o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Mainan “SPEEDO”<o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Sandaran Tangan Busa<o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Keranjang Depan<o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Gagang Dorongan<o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Kanopi<o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Sandaran Jok Jumbo<o:p></o:p></span></p><p>\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n</p><p class=\"Standard\"><span lang=\"IN\">- Pedal Pijakan Kaki (dapat dilipat)<o:p></o:p></span></p>', 510000, 1, 13, 6, 4, '1539077077a.jpg', '1539077077b.jpg', '1539077077c.jpg', '1539077077d.jpg', '1542878302e.jpg', '2018-10-09 02:24:37', 'Admin', '2018-12-05 04:08:41', 'Admin'),
(46, 'F – 918', 3, 34, '<p class=\"Standard\"><span lang=\"IN\">- Roda Karet Asli<o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Tebeng 3 Dimensi<o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Sandaran Tangan Busa<o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Gagang Dorongan<o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Sandaran Jok Jumbo<o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Bel<o:p></o:p></span></p><p>\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n</p><p class=\"Standard\"><span lang=\"IN\">- Pedal Pijakan Kaki (dapat dilipat)<o:p></o:p></span></p>', 510000, 1, 14, 6, 4, '1539077145a.jpg', '1539077145b.jpg', '1539077145c.jpg', '1539077145d.jpg', '1539077145e.jpg', '2018-10-09 02:25:45', 'Admin', '2018-12-05 04:08:36', 'Admin'),
(47, 'F – 938', 3, 34, '<p class=\"Standard\"><span lang=\"IN\">- Roda Karet Asli<o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Mainan “RIO”<o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Bel<o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Sandaran Jok Jumbo</span></p>', 12345, 1, 9, 9, 4, '1539077202a.jpg', '1542878264b.jpg', '1539077202c.jpg', '1539077202d.jpg', '1539077202e.jpg', '2018-10-09 02:26:42', 'Admin', '2018-12-05 04:08:41', 'Admin'),
(48, 'F – 319HT', 3, 35, '<p class=\"Standard\"><span lang=\"IN\">- Roda Karet Asli<o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Mainan “SPEEDO”<o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Sandaran Tangan Busa<o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Keranjang Depan<o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Gagang Dorongan<o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Kanopi<o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Sandaran Jok Jumbo<o:p></o:p></span></p><p>\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n</p><p class=\"Standard\"><span lang=\"IN\">- Pedal Pijakan Kaki (dapat dilipat)<o:p></o:p></span></p>', 510000, 1, 13, 6, 4, '1540362001a.jpg', '1539077366b.jpg', '1539077366c.jpg', '1539077366d.jpg', '1539077366e.jpg', '2018-10-09 02:29:26', 'Admin', '2018-12-05 04:08:36', 'Admin'),
(49, 'F – 318', 3, 35, '<p class=\"Standard\"><span lang=\"IN\">- Roda Karet Asli<o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Tebeng 3 Dimensi<o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Sandaran Tangan Busa<o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Gagang Dorongan<o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Sandaran Jok Jumbo<o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Bel<o:p></o:p></span></p><p>\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n</p><p class=\"Standard\"><span lang=\"IN\">- Pedal Pijakan Kaki (dapat dilipat)<o:p></o:p></span></p>', 12345, 1, 14, 6, 4, '1539077418a.jpg', '1539077418b.jpg', '1539077418c.jpg', '1539077418d.jpg', '1539077418e.jpg', '2018-10-09 02:30:18', 'Admin', '2018-12-05 04:08:36', NULL),
(50, 'F – 339H', 3, 35, '<p class=\"Standard\"><span lang=\"IN\">- Roda Karet Asli<o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Mainan ‘SPEEDO”<o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Sandaran Jok Jumbo<o:p></o:p></span></p><p>\r\n\r\n\r\n\r\n\r\n\r\n</p><p class=\"Standard\"><span lang=\"IN\">- Keranjang Depan<o:p></o:p></span></p>', 510000, 1, 13, 9, 4, '1539077460a.jpg', '1539077460b.jpg', '1539077460c.jpg', '1539077460d.jpg', '1539077460e.jpg', '2018-10-09 02:31:00', 'Admin', '2018-12-05 04:08:36', NULL),
(51, 'F – 339A', 3, 35, '<p class=\"Standard\"><span lang=\"IN\">- Roda Karet Asli<o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Mainan “RIO”<o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Bel<o:p></o:p></span></p><p>\r\n\r\n\r\n\r\n\r\n\r\n</p><p class=\"Standard\"><span lang=\"IN\">- Sandaran Jok Jumbo<o:p></o:p></span></p>', 510000, 1, 9, 9, 4, '1539077516a.jpg', '1539077516b.jpg', '1539077516c.jpg', '1539077516d.jpg', '1539077516e.jpg', '2018-10-09 02:31:56', 'Admin', '2018-12-05 04:08:36', NULL),
(52, 'F - 738', 3, 35, '<p class=\"Standard\"><span lang=\"IN\">- Roda Karet Asli<o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Tebeng 3 Dimensi<o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Bel<o:p></o:p></span></p><p>\r\n\r\n\r\n\r\n\r\n\r\n</p><p class=\"Standard\"><span lang=\"IN\">- Sandaran Jok Jumbo<o:p></o:p></span></p>', 510000, 1, 14, 9, 4, '1539077561a.jpg', '1539077561b.jpg', '1539077561c.jpg', '1539077561d.jpg', '1539077561e.jpg', '2018-10-09 02:32:41', 'Admin', '2018-12-05 04:08:36', NULL),
(53, 'F - 338', 3, 35, '<p class=\"Standard\"><span lang=\"IN\">- Roda Karet Asli<o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Tebeng 3 Dimensi<o:p></o:p></span></p><p>\r\n\r\n\r\n\r\n</p><p class=\"Standard\"><span lang=\"IN\">- Bel<o:p></o:p></span></p>', 510000, 1, 14, 9, 4, '1539077640a.jpg', '1539077640b.jpg', '1539077640c.jpg', '1539077640d.jpg', '1539077640e.jpg', '2018-10-09 02:34:00', 'Admin', '2018-12-05 04:08:36', NULL),
(55, 'FB-211F', 4, 7, '<p class=\"Standard\"><span lang=\"IN\">- Mainan Musik \"BERUANG\"<o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Gagang Dorongan<o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Sistem Ayun</span></p><p class=\"Standard\">- Rem Pengaman</p><p class=\"Standard\"><span lang=\"IN\">- Tatakan Kaki<o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- 8 Roda</span></p>', NULL, 1, 15, NULL, NULL, '1541390642a.jpg', '1541391010b.jpg', '1541391010c.jpg', '1541391010d.jpg', '1541391010e.jpg', '2018-11-04 21:04:02', 'Admin', '2018-12-05 04:08:40', 'Admin'),
(56, 'FB-181F', 4, 7, '<p class=\"Standard\"><span lang=\"IN\">- Mainan Musik \"BERUANG\"<o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Gagang Dorongan<o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Jok Tebal</span></p><p class=\"Standard\"><span lang=\"IN\">- Tatakan Kaki<o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- 8 Roda</span></p>', NULL, 1, 15, NULL, NULL, '1541390690a.jpg', '1541391037b.jpg', '1541391037c.jpg', '1541391037d.jpg', '1541391037e.jpg', '2018-11-04 21:04:50', 'Admin', '2018-12-05 04:08:40', 'Admin'),
(57, 'FB-173', 4, 8, '<p class=\"Standard\"><span lang=\"IN\">- Mainan \"BOLA-BOLA\"<o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Mainan \"GARPU\"<o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Mainan \"KEMBANG\"</span></p><p class=\"Standard\">- Mainan \"KURA\"</p><p class=\"Standard\"><span lang=\"IN\">- 8 Roda</span></p>', NULL, 1, 17, NULL, NULL, '1541390768a.jpg', '1541391060b.jpg', '1541391082c.jpg', '', NULL, '2018-11-04 21:06:08', 'Admin', '2018-12-05 04:08:40', 'Admin'),
(58, 'FB-1738', 4, 8, '<p class=\"Standard\"><span lang=\"IN\">- Mainan Musik Pencet<br></span></p><p class=\"Standard\"><span lang=\"IN\">- Mainan \"BOLA-BOLA\"<o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Mainan \"GARPU\"<o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Mainan \"KURA\"</span></p><p class=\"Standard\"><span lang=\"IN\">- 8 Roda</span></p>', NULL, 1, 17, NULL, NULL, '1541390804a.jpg', '1541391104b.jpg', '1541391104c.jpg', '1541391104d.jpg', NULL, '2018-11-04 21:06:44', 'Admin', '2018-12-05 04:08:40', 'Admin'),
(59, 'FB-136', 4, 9, '<p class=\"Standard\"><span lang=\"IN\">- Mainan Musik Pencet<br></span></p><p class=\"Standard\"><span lang=\"IN\">- Mainan \"BUNGA ULIR\"<o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Mainan \"KEMBANG\"<o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Mainan \"KURA\"</span></p><p class=\"Standard\"><span lang=\"IN\">- Jok Tebal</span></p><p class=\"Standard\"><span lang=\"IN\">- 6 Roda</span></p>', NULL, 1, 16, NULL, NULL, '1541390844a.jpg', '1541391626b.jpg', '1541391626c.jpg', '1541391626d.jpg', '1541391626e.jpg', '2018-11-04 21:07:24', 'Admin', '2018-12-05 04:08:40', 'Admin'),
(60, 'FB-2218', 4, 9, '<p class=\"Standard\"><span lang=\"IN\">- Mainan Musik Pencet<br></span></p><p class=\"Standard\"><span lang=\"IN\">- Mainan \"BUNGA ULIR\"</span></p><p class=\"Standard\"><span lang=\"IN\">- Mainan \"KURA\"</span></p><p class=\"Standard\"><span lang=\"IN\">- 8 Roda</span></p>', NULL, 1, 16, NULL, NULL, '1541390866a.jpg', '1541391654b.jpg', '1541391654c.jpg', '1541391654d.jpg', NULL, '2018-11-04 21:07:46', 'Admin', '2018-12-05 04:08:40', 'Admin'),
(61, 'FB-5519', 4, 9, '<p class=\"Standard\">- Mainan Musik \"BUNGA ULIR\"<br></p><p class=\"Standard\"><span lang=\"IN\">- Gagang Dorongan<o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Tatakan Kaki</span></p><p class=\"Standard\"><span lang=\"IN\">- Bottle Holder</span></p><p class=\"Standard\"><span lang=\"IN\">- 6 Roda</span></p>', NULL, 1, 16, NULL, NULL, '1541390895a.jpg', '1541391685b.jpg', '1541391685c.jpg', '1541391685d.jpg', '1541391685e.jpg', '2018-11-04 21:08:15', 'Admin', '2018-12-05 04:08:41', 'Admin'),
(62, 'FB-6619', 4, 9, '<p class=\"Standard\"><span lang=\"IN\">- Mainan Musik \"BUNGA ULIR\"<br></span></p><p class=\"Standard\"><span lang=\"IN\">- Gagang Dorongan<o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Tatakan Kaki<o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Bottle Holder</span></p><p class=\"Standard\"><span lang=\"IN\">- 8 Roda</span></p>', NULL, 1, 16, NULL, NULL, '1541391744a.jpg', '1541391744b.jpg', '1541391744c.jpg', '1541391744d.jpg', '1541391744e.jpg', '2018-11-04 21:22:24', 'Admin', '2018-12-05 04:08:41', 'Admin'),
(63, 'FB-7718', 4, 9, '<p class=\"Standard\"><span style=\"color: rgb(255, 0, 0);\">(Khusus Untuk Wilayah Tertentu)</span></p><p class=\"Standard\"><span lang=\"IN\">- Mainan Musik Pencet<br></span></p><p class=\"Standard\"><span lang=\"IN\">- Mainan \"BUNGA ULIR\"<o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Mainan \"KEMBANG\"</span></p><p class=\"Standard\"><span lang=\"IN\">- Jok Tebal</span></p>', NULL, 1, 16, NULL, NULL, '1541391781a.jpg', '1541391781b.jpg', '1541391781c.jpg', '1541391782d.jpg', '1541391782e.jpg', '2018-11-04 21:23:02', 'Admin', '2018-12-05 04:08:41', 'Admin'),
(64, 'FB-7758', 4, 9, '<p class=\"Standard\"><span lang=\"IN\" style=\"color: rgb(255, 0, 0);\">(Khusus Untuk Wilayah Tertentu)</span></p><p class=\"Standard\"><span lang=\"IN\">- Mainan Musik Pencet<br></span></p><p class=\"Standard\"><span lang=\"IN\">- Mainan \"BUNGA ULIR\"<o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Mainan \"KEMBANG\"<o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Gagang Dorongan</span></p><p class=\"Standard\"><span lang=\"IN\">- Tatakan Kaki</span></p><p class=\"Standard\"><span lang=\"IN\">- 6 Roda</span></p>', NULL, 1, 16, NULL, NULL, '1541391833a.jpg', '1541391833b.jpg', '1541391833c.jpg', '1541391833d.jpg', '1541391833e.jpg', '2018-11-04 21:23:53', 'Admin', '2018-12-05 04:08:41', 'Superadmin'),
(65, 'FB-2158', 4, 9, '<p class=\"Standard\"><span lang=\"IN\">- Mainan Musik Pencet<br></span></p><p class=\"Standard\"><span lang=\"IN\">- Mainan \"BUNGA ULIR\"<o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Mainan \"KEMBANG\"<o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Gagang Dorongan</span></p><p class=\"Standard\"><span lang=\"IN\">- Tatakan Kaki</span></p><p class=\"Standard\"><span lang=\"IN\">- Bottle Holder</span></p><p class=\"Standard\"><span lang=\"IN\"></span></p><p class=\"Standard\"><span lang=\"IN\">- Good Design Awards</span></p><div><span lang=\"IN\"><br></span></div>', NULL, 1, 16, NULL, NULL, '1542875118a.JPG', '1542875118b.JPG', '1542875420c.JPG', '1541391902d.jpg', '1542875420e.jpg', '2018-11-04 21:25:02', 'Admin', '2018-12-05 04:08:41', 'Admin'),
(66, 'FB-211E', 4, 10, '<p class=\"Standard\"><span lang=\"IN\">- Mainan Musik \"BURUNG HANTU\"<o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Gagang Dorongan<o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Sistem Ayun</span></p><p class=\"Standard\"><span lang=\"IN\">- Rem Pengaman<o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Tatakan Kaki</span></p><p class=\"Standard\"><span lang=\"IN\">- 8 Roda<br></span></p>', NULL, 1, 18, NULL, NULL, '1541391957a.jpg', '1541391957b.jpg', '1541391957c.jpg', '1541391957d.jpg', '1541391957e.jpg', '2018-11-04 21:25:57', 'Admin', '2018-12-05 04:08:41', 'Admin'),
(67, 'FB-181E', 4, 10, '<p class=\"Standard\"><span lang=\"IN\">- Mainan Musik \"BURUNG HANTU\"<o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Gagang Dorongan</span></p><p class=\"Standard\"><span lang=\"IN\">- Jok Tebal<o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Tatakan Kaki</span></p><p class=\"Standard\"><span lang=\"IN\">- 8 Roda</span></p>', NULL, 1, 18, NULL, NULL, '1541391990a.jpg', '1541391990b.jpg', '1541391990c.jpg', '1541391990d.jpg', '1541391990e.jpg', '2018-11-04 21:26:30', 'Admin', '2018-12-05 04:08:41', 'Admin'),
(68, 'FB-203E', 4, 10, '<p>- Mainan Musik \"BURUNG HANTU\"<br></p><p class=\"Standard\"><span lang=\"IN\">- Gagang Dorongan</span></p><p class=\"Standard\"><span lang=\"IN\">- Sistem Ayun</span></p><p class=\"Standard\"><span lang=\"IN\">- Tatakan Kaki</span></p><p class=\"Standard\"><span lang=\"IN\">- Bottle Holder</span></p><p class=\"Standard\"><span lang=\"IN\">- Anti Slip (Tangga)<br></span></p>', NULL, 1, 18, NULL, NULL, '1541392025a.jpg', '1541392025b.jpg', '1541392025c.jpg', '1541392025d.jpg', '1541392025e.jpg', '2018-11-04 21:27:05', 'Admin', '2018-12-05 04:08:41', 'Admin'),
(69, 'FB-781A', 4, 11, '<p class=\"Standard\"><span lang=\"IN\">- Mainan Musik \"DRUM\"<o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Gagang Dorongan</span></p><p class=\"Standard\"><span lang=\"IN\">- Tatakan Kaki<o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Bottle Holder</span></p>', NULL, 1, 19, NULL, NULL, '1541392071a.jpg', '1541392071b.jpg', '1541392071c.jpg', '1541392071d.jpg', '1541392071e.jpg', '2018-11-04 21:27:51', 'Admin', '2018-12-05 04:08:41', 'Admin'),
(70, 'FB-218A', 4, 11, '<p class=\"Standard\"><span lang=\"IN\">- Mainan Musik \"DRUM\"</span></p><p class=\"Standard\"><span lang=\"IN\">- Gagang Dorongan</span></p><p class=\"Standard\"><span lang=\"IN\">- Sistem Ayun</span></p><p class=\"Standard\">- Rem Pengaman</p><p class=\"Standard\">- Tatakan Kaki<br></p><p class=\"Standard\">- Bottle Holder<br></p><p class=\"Standard\"><span lang=\"IN\">- 8 Roda</span></p>', NULL, 1, 19, NULL, NULL, '1541392112a.jpg', '1541392112b.jpg', '1541392112c.jpg', '1541392112d.jpg', '1541392112e.jpg', '2018-11-04 21:28:32', 'Admin', '2018-12-05 04:08:41', 'Admin'),
(71, 'FB-2068', 4, 36, '<p class=\"Standard\"><span lang=\"IN\">- Mainan Musik Pencet<br></span></p><p class=\"Standard\"><span lang=\"IN\">- Mainan \"GANTUNG\"</span></p><p class=\"Standard\"><span lang=\"IN\"><o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Gagang Dorongan<o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Sistem Ayun</span></p><p class=\"Standard\">- Rem Pengaman</p><p class=\"Standard\"><span lang=\"IN\">- Tatakan Kaki<o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- 8 Roda</span></p>', NULL, 1, 20, NULL, NULL, '1541392399a.jpg', '1541392399b.jpg', '1541392399c.jpg', '1541392399d.jpg', '1541392399e.jpg', '2018-11-04 21:33:19', 'Admin', '2018-12-05 04:08:40', 'Admin'),
(72, 'FB-1858', 4, 36, '<p class=\"Standard\"><span lang=\"IN\">- Mainan Musik Pencet<br></span></p><p class=\"Standard\"><span lang=\"IN\">- Mainan \"GANTUNG\"</span></p><p class=\"Standard\"><span lang=\"IN\">- Mainan \"KURA\"</span></p><p class=\"Standard\"><span lang=\"IN\"><o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Gagang Dorongan</span></p><p class=\"Standard\"><span lang=\"IN\">- Tatakan Kaki<o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- 8 Roda</span></p>', NULL, 1, 20, NULL, NULL, '1541392443a.jpg', '1541392443b.jpg', '1541392443c.jpg', '1541392443d.jpg', '1541392443e.jpg', '2018-11-04 21:34:03', 'Admin', '2018-12-05 04:08:41', 'Admin');
INSERT INTO `product_details` (`id`, `name_product`, `id_category`, `id_category_sub`, `description`, `price`, `hide_price`, `id_mainan`, `id_sandaran`, `id_ban`, `image1`, `image2`, `image3`, `image4`, `image5`, `created_at`, `created_by`, `updated_at`, `updated_by`) VALUES
(73, 'FB-1868', 4, 36, '<p class=\"Standard\"><span lang=\"IN\">- Mainan Musik Pencet<br></span></p><p class=\"Standard\"><span lang=\"IN\">- Mainan \"GANTUNG\"</span></p><p class=\"Standard\"><span lang=\"IN\"><o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Mainan \"KURA\"<o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Jok Tebal</span></p><p class=\"Standard\"><span lang=\"IN\">- 8 Roda</span></p>', NULL, 1, 20, NULL, NULL, '1541392478a.jpg', '1541392478b.jpg', '1541392478c.jpg', '1541392478d.jpg', NULL, '2018-11-04 21:34:38', 'Admin', '2018-12-05 04:08:41', 'Admin'),
(74, 'FB-3712', 4, 37, '<p class=\"Standard\"><span lang=\"IN\">- Mainan Musik \"ABC\"<br></span></p><p class=\"Standard\"><span lang=\"IN\">- Mainan \"GASING\"</span></p><p class=\"Standard\"><span lang=\"IN\"><o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Gagang Dorongan</span></p><p class=\"Standard\"><span lang=\"IN\">- Tatakan Kaki</span></p>', NULL, 1, 21, NULL, NULL, '1541399031a.jpg', '1541399031b.jpg', '1541399031c.jpg', '1541399031d.jpg', NULL, '2018-11-04 23:23:51', 'Admin', '2018-12-05 04:08:40', 'Admin'),
(75, 'FB-551B', 4, 55, '<p class=\"Standard\"><span lang=\"IN\">- Mainan Musik \"OCTO\"</span></p><p class=\"Standard\"><span lang=\"IN\"><o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Gagang Dorongan</span></p><p class=\"Standard\"><span lang=\"IN\">- Tatakan Kaki</span></p>', NULL, 1, 28, NULL, NULL, '1541399092a.jpg', '1541399092b.jpg', '1541399092c.jpg', '1541399092d.jpg', '1541399092e.jpg', '2018-11-04 23:24:52', 'Admin', '2018-12-05 04:08:41', 'Admin'),
(76, 'FB-661B', 4, 55, '<p class=\"Standard\">- Mainan Musik \"OCTO\"<br></p><p class=\"Standard\"><span lang=\"IN\"><o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Gagang Dorongan<o:p></o:p></span></p><p class=\"Standard\">- Body Samping</p><p class=\"Standard\"><span lang=\"IN\">- Tatakan Kaki<o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- 8 Roda</span></p>', NULL, 1, 28, NULL, NULL, '1541399221a.jpg', '1541399221b.jpg', '1541399221c.jpg', '1541399221d.jpg', '1541399221e.jpg', '2018-11-04 23:27:01', 'Admin', '2018-12-05 04:08:41', 'Admin'),
(77, 'FB-2211', 4, 39, '<p class=\"Standard\"><span lang=\"IN\">- Mainan Musik \"HIPPO\"</span></p><p class=\"Standard\"><span lang=\"IN\"><o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Gagang Dorongan<o:p></o:p></span></p><p class=\"Standard\">- Tatakan Kaki</p>', NULL, 1, 22, NULL, NULL, '1541399488a.jpg', '1541399488b.jpg', '1541399488c.jpg', '1541399488d.jpg', NULL, '2018-11-04 23:31:28', 'Admin', '2018-12-05 04:08:40', 'Admin'),
(78, 'FB-2116', 4, 40, '<p class=\"Standard\"><span lang=\"IN\">- Mainan Musik \"KERETA\"</span></p><p class=\"Standard\"><span lang=\"IN\"><o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Gagang Dorongan<o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Sistem Ayun</span></p><p class=\"Standard\">- Rem Pengaman</p><p class=\"Standard\"><span lang=\"IN\">- Tatakan Kaki<o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- 8 Roda</span></p>', NULL, 1, 23, NULL, NULL, '1541399538a.jpg', '1541399538b.jpg', '1541399538c.jpg', '1541399538d.jpg', '1541399538e.jpg', '2018-11-04 23:32:18', 'Admin', '2018-12-05 04:08:40', 'Admin'),
(79, 'FB-1816', 4, 40, '<p class=\"Standard\"><span lang=\"IN\">- Mainan Musik \"KERETA\"</span></p><p class=\"Standard\"><span lang=\"IN\"><o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Gagang Dorongan<o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Jok Tebal</span></p><p class=\"Standard\"><span lang=\"IN\">- Tatakan Kaki<o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- 8 Roda</span></p>', NULL, 1, 23, NULL, NULL, '1541399574a.jpg', '1541399574b.jpg', '1541399574c.jpg', '1541399574d.jpg', '1541399574e.jpg', '2018-11-04 23:32:54', 'Admin', '2018-12-05 04:08:40', 'Admin'),
(80, 'FB-2213', 4, 41, '<p class=\"Standard\"><span lang=\"IN\">- Mainan Musik \"LALIN\"</span></p><p class=\"Standard\"><span lang=\"IN\"><o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Gagang Dorongan</span></p><p class=\"Standard\"><span lang=\"IN\">- Tatakan Kaki</span></p>', NULL, 1, 24, NULL, NULL, '1541399621a.jpg', '1541399621b.jpg', '1541399621c.jpg', '1541399621d.jpg', '1541399621e.jpg', '2018-11-04 23:33:41', 'Admin', '2018-12-05 04:08:40', 'Admin'),
(81, 'FB-2121', 4, 42, '<p class=\"Standard\"><span lang=\"IN\">- Mainan Musik \"MOBIL\"</span></p><p class=\"Standard\"><span lang=\"IN\"><o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Gagang Dorongan<o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Sistem Ayun</span></p><p class=\"Standard\">- Rem Pengaman</p><p class=\"Standard\"><span lang=\"IN\">- Tatakan Kaki</span></p><p class=\"Standard\">- Bottle Holder<br></p><p class=\"Standard\"><span lang=\"IN\">- 8 Roda</span></p>', NULL, 1, 25, NULL, NULL, '1541399690a.jpg', '1541399690b.jpg', '1541399690c.jpg', '1541399690d.jpg', '1541399690e.jpg', '2018-11-04 23:34:50', 'Admin', '2018-12-05 04:08:41', 'Admin'),
(82, 'FB-1827', 4, 42, '<p class=\"Standard\"><span lang=\"IN\">- Mainan Musik \"MOBIL\"<br></span></p><p class=\"Standard\"><span lang=\"IN\">- Mainan \"BUNGA ULIR\"</span></p><p class=\"Standard\"><span lang=\"IN\"><o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Gagang Dorongan<o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Canopy</span></p><p class=\"Standard\"><span lang=\"IN\">- Tatakan Kaki</span></p>', NULL, 1, 25, NULL, NULL, '1541399820a.jpg', '1541399820b.jpg', '1541399820c.jpg', '1541399820d.jpg', '1541399820e.jpg', '2018-11-04 23:37:00', 'Admin', '2018-12-05 04:08:40', 'Admin'),
(83, 'FB-1817', 4, 42, '<p class=\"Standard\"><span lang=\"IN\">- Mainan Musik \"MOBIL\"<br></span></p><p class=\"Standard\"><span lang=\"IN\">- Mainan \"BUNGA ULIR\"</span></p><p class=\"Standard\"><span lang=\"IN\"><o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Gagang Dorongan</span></p><p class=\"Standard\"><span lang=\"IN\">- Tatakan Kaki<o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- 8 Roda</span></p>', NULL, 1, 25, NULL, NULL, '1541399860a.jpg', '1541399860b.jpg', '1541399860c.jpg', '1541399860d.jpg', '1541399860e.jpg', '2018-11-04 23:37:40', 'Admin', '2018-12-05 04:08:40', 'Admin'),
(84, 'FB-2017', 4, 42, '<p class=\"Standard\"><span lang=\"IN\">- Mainan Musik \"MOBIL\"<br></span></p><p class=\"Standard\"><span lang=\"IN\">- Mainan \"BUNGA ULIR\"</span></p><p class=\"Standard\"><span lang=\"IN\"><o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Gagang Dorongan<o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Sistem Ayun</span></p><p class=\"Standard\"><span lang=\"IN\">- Tatakan Kaki</span></p><p class=\"Standard\"><span lang=\"IN\"><o:p>- Bottle Holder</o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- 8 Roda</span></p>', NULL, 1, 25, NULL, NULL, '1541399906a.jpg', '1541399906b.jpg', '1541399906c.jpg', '1541399906d.jpg', '1541399906e.jpg', '2018-11-04 23:38:26', 'Admin', '2018-12-05 04:08:41', 'Admin'),
(85, 'FB-2117', 4, 42, '<p class=\"Standard\"><span lang=\"IN\">- Mainan Musik \"MOBIL\"<br></span></p><p class=\"Standard\"><span lang=\"IN\">- Mainan \"BUNGA ULIR\"</span></p><p class=\"Standard\"><span lang=\"IN\"><o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Gagang Dorongan<o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Sistem Ayun</span></p><p class=\"Standard\">- Rem Pengaman</p><p class=\"Standard\"><span lang=\"IN\">- Tatakan Kaki</span></p>', NULL, 1, 25, NULL, NULL, '1541399945a.jpg', '1541399945b.jpg', '1541399945c.jpg', '1541399945d.jpg', '1541399945e.jpg', '2018-11-04 23:39:05', 'Admin', '2018-12-05 04:08:40', 'Admin'),
(86, 'FB-2115', 4, 43, '<p class=\"Standard\"><span lang=\"IN\">- Mainan Musik \"ROLEX\"</span></p><p class=\"Standard\"><span lang=\"IN\"><o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Gagang Dorongan<o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Sistem Ayun</span></p><p class=\"Standard\">- Rem Pengaman</p><p class=\"Standard\"><span lang=\"IN\">- Tatakan Kaki</span></p><p class=\"Standard\"><span lang=\"IN\"><o:p>- Bottle Holder</o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- 8 Roda</span></p>', NULL, 1, 26, NULL, NULL, '1541399990a.jpg', '1541399990b.jpg', '1541399990c.jpg', '1541399990d.jpg', '1541399990e.jpg', '2018-11-04 23:39:50', 'Admin', '2018-12-05 04:08:41', 'Admin'),
(87, 'FB-1815', 4, 43, '<p class=\"Standard\"><span lang=\"IN\">- Mainan Musik \"ROLEX\"</span></p><p class=\"Standard\"><span lang=\"IN\"><o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Gagang Dorongan<o:p></o:p></span></p><p class=\"Standard\">- Jok Tebal</p><p class=\"Standard\"><span lang=\"IN\">- Tatakan Kaki<o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- 8 Roda</span></p>', NULL, 1, 26, NULL, NULL, '1541400034a.jpg', '1541400034b.jpg', '1541400034c.jpg', '1541400034d.jpg', '1541400034e.jpg', '2018-11-04 23:40:34', 'Admin', '2018-12-05 04:08:40', 'Admin'),
(88, 'FB-211C', 4, 44, '<p class=\"Standard\"><span lang=\"IN\">- Mainan Musik \"SAPI\"</span></p><p class=\"Standard\"><span lang=\"IN\"><o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Gagang Dorongan<o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Sistem Ayun</span></p><p class=\"Standard\">- Rem Pengaman</p><p class=\"Standard\"><span lang=\"IN\">- Tatakan Kaki<o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- 8 Roda</span></p>', NULL, 1, 27, NULL, NULL, '1541400073a.jpg', '1541400073b.jpg', '1541400073c.jpg', '1541400073d.jpg', '1541400073e.jpg', '2018-11-04 23:41:13', 'Admin', '2018-12-05 04:08:40', 'Admin'),
(89, 'FB-181C', 4, 44, '<p class=\"Standard\"><span lang=\"IN\">- Mainan Musik \"SAPI\"</span></p><p class=\"Standard\"><span lang=\"IN\"><o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Gagang Dorongan<o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Jok Tebal</span></p><p class=\"Standard\"><span lang=\"IN\">- Tatakan Kaki<o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- 8 Roda</span></p>', NULL, 1, 27, NULL, NULL, '1541400118a.jpg', '1541400118b.jpg', '1541400118c.jpg', '1541400118d.jpg', '1541400118e.jpg', '2018-11-04 23:41:58', 'Admin', '2018-12-05 04:08:40', 'Admin'),
(90, 'Folding', 5, 12, NULL, NULL, 1, NULL, NULL, NULL, '1541400188a.jpg', '1541400188b.jpg', NULL, NULL, NULL, '2018-11-04 23:43:08', 'Admin', '2018-12-05 04:08:37', NULL),
(91, 'APACHE', 5, 45, NULL, NULL, 1, NULL, NULL, NULL, '1541400282a.jpg', NULL, NULL, NULL, NULL, '2018-11-04 23:44:42', 'Admin', '2018-12-05 04:08:37', NULL),
(92, 'POWER X', 5, 45, NULL, NULL, 1, NULL, NULL, NULL, '1541400308a.jpg', NULL, NULL, NULL, NULL, '2018-11-04 23:45:08', 'Admin', '2018-12-05 04:08:37', NULL),
(93, 'MONSTA', 5, 45, NULL, NULL, 1, NULL, NULL, NULL, '1541400357a.jpg', NULL, NULL, NULL, NULL, '2018-11-04 23:45:57', 'Admin', '2018-12-05 04:08:37', NULL),
(94, 'OMEGA MAN', 5, 45, NULL, NULL, 1, NULL, NULL, NULL, '1541400394a.jpg', NULL, NULL, NULL, NULL, '2018-11-04 23:46:34', 'Admin', '2018-12-05 04:08:37', NULL),
(95, 'SURF', 5, 45, NULL, NULL, 1, NULL, NULL, NULL, '1541400415a.jpg', NULL, NULL, NULL, NULL, '2018-11-04 23:46:55', 'Admin', '2018-12-05 04:08:37', NULL),
(96, 'TURBO', 5, 45, NULL, NULL, 1, NULL, NULL, NULL, '1541400445a.jpg', NULL, NULL, NULL, NULL, '2018-11-04 23:47:25', 'Admin', '2018-12-05 04:08:36', NULL),
(97, 'RANGER X', 5, 45, NULL, NULL, 1, NULL, NULL, NULL, '1541400466a.jpg', NULL, NULL, NULL, NULL, '2018-11-04 23:47:46', 'Admin', '2018-12-05 04:08:36', NULL),
(98, 'SPORT', 5, 45, NULL, NULL, 1, NULL, NULL, NULL, '1541400487a.jpg', NULL, NULL, NULL, NULL, '2018-11-04 23:48:07', 'Admin', '2018-12-05 04:08:37', NULL),
(99, 'CHAMPION', 5, 45, NULL, NULL, 1, NULL, NULL, NULL, '1541400505a.jpg', NULL, NULL, NULL, NULL, '2018-11-04 23:48:25', 'Admin', '2018-12-05 04:08:37', NULL),
(100, 'SPEED TRUCK', 5, 45, NULL, NULL, 1, NULL, NULL, NULL, '1541400533a.jpg', NULL, NULL, NULL, NULL, '2018-11-04 23:48:53', 'Admin', '2018-12-05 04:08:37', 'Admin'),
(101, 'INFERNO BOY', 5, 45, NULL, NULL, 1, NULL, NULL, NULL, '1541400571a.jpg', NULL, NULL, NULL, NULL, '2018-11-04 23:49:31', 'Admin', '2018-12-05 04:08:37', 'Admin'),
(102, 'TRINITY', 5, 45, NULL, NULL, 1, NULL, NULL, NULL, '1541400592a.jpg', NULL, NULL, NULL, NULL, '2018-11-04 23:49:52', 'Admin', '2018-12-05 04:08:37', NULL),
(103, 'ROBOTICS', 5, 45, NULL, NULL, 1, NULL, NULL, NULL, '1541400631a.jpg', NULL, NULL, NULL, NULL, '2018-11-04 23:50:31', 'Admin', '2018-12-05 04:08:37', NULL),
(104, 'SHIELD', 5, 45, NULL, NULL, 1, NULL, NULL, NULL, '1541400654a.jpg', NULL, NULL, NULL, NULL, '2018-11-04 23:50:54', 'Admin', '2018-12-05 04:08:37', NULL),
(105, 'FIBER', 5, 45, NULL, NULL, 1, NULL, NULL, NULL, '1541400676a.jpg', NULL, NULL, NULL, NULL, '2018-11-04 23:51:16', 'Admin', '2018-12-05 04:08:37', NULL),
(106, 'MANTIS', 5, 45, NULL, NULL, 1, NULL, NULL, NULL, '1541400698a.jpg', NULL, NULL, NULL, NULL, '2018-11-04 23:51:38', 'Admin', '2018-12-05 04:08:37', NULL),
(107, 'SPARK', 5, 45, NULL, NULL, 1, NULL, NULL, NULL, '1541400756a.jpg', NULL, NULL, NULL, NULL, '2018-11-04 23:52:36', 'Admin', '2018-12-05 04:08:37', 'Admin'),
(108, 'DAISY', 5, 45, NULL, NULL, 1, NULL, NULL, NULL, '1541400829a.jpg', NULL, NULL, NULL, NULL, '2018-11-04 23:53:49', 'Admin', '2018-12-05 04:08:37', NULL),
(109, 'GLAMOUR', 5, 45, NULL, NULL, 1, NULL, NULL, NULL, '1541400846a.jpg', NULL, NULL, NULL, NULL, '2018-11-04 23:54:06', 'Admin', '2018-12-05 04:08:37', NULL),
(110, 'IMPERIAL', 5, 45, NULL, NULL, 1, NULL, NULL, NULL, '1541400878a.jpg', NULL, NULL, NULL, NULL, '2018-11-04 23:54:38', 'Admin', '2018-12-05 04:08:37', NULL),
(111, 'GIRL POWER', 5, 45, NULL, NULL, 1, NULL, NULL, NULL, '1541400957a.jpg', NULL, NULL, NULL, NULL, '2018-11-04 23:55:57', 'Admin', '2018-12-05 04:08:37', NULL),
(112, 'MAGENTA', 5, 45, NULL, NULL, 1, NULL, NULL, NULL, '1541401004a.jpg', NULL, NULL, NULL, NULL, '2018-11-04 23:56:44', 'Admin', '2018-12-05 04:08:37', NULL),
(113, 'LILLIES', 5, 45, NULL, NULL, 1, NULL, NULL, NULL, '1541401045a.jpg', NULL, NULL, NULL, NULL, '2018-11-04 23:57:25', 'Admin', '2018-12-05 04:08:37', NULL),
(114, 'FLUBBER', 5, 45, NULL, NULL, 1, NULL, NULL, NULL, '1541401069a.jpg', NULL, NULL, NULL, NULL, '2018-11-04 23:57:49', 'Admin', '2018-12-05 04:08:37', NULL),
(115, 'APACHE', 5, 46, NULL, NULL, 1, NULL, NULL, NULL, '1541401525a.jpg', NULL, NULL, NULL, NULL, '2018-11-05 00:01:18', 'Admin', '2018-12-05 04:08:37', 'Admin'),
(116, 'POWER X', 5, 46, NULL, NULL, 1, NULL, NULL, NULL, '1541401515a.jpg', NULL, NULL, NULL, NULL, '2018-11-05 00:01:50', 'Admin', '2018-12-05 04:08:37', 'Admin'),
(117, 'MONSTA', 5, 46, NULL, NULL, 1, NULL, NULL, NULL, '1541401503a.jpg', NULL, NULL, NULL, NULL, '2018-11-05 00:03:47', 'Admin', '2018-12-05 04:08:37', 'Admin'),
(118, 'OMEGA MAN', 5, 46, NULL, NULL, 1, NULL, NULL, NULL, '1541401486a.jpg', NULL, NULL, NULL, NULL, '2018-11-05 00:04:01', 'Admin', '2018-12-05 04:08:37', 'Admin'),
(119, 'SURF', 5, 46, NULL, NULL, 1, NULL, NULL, NULL, '1541401467a.jpg', NULL, NULL, NULL, NULL, '2018-11-05 00:04:27', 'Admin', '2018-12-05 04:08:38', NULL),
(120, 'SPORT', 5, 46, NULL, NULL, 1, NULL, NULL, NULL, '1541401567a.jpg', NULL, NULL, NULL, NULL, '2018-11-05 00:06:07', 'Admin', '2018-12-05 04:08:38', NULL),
(121, 'CHAMPION', 5, 46, NULL, NULL, 1, NULL, NULL, NULL, '1541401583a.jpg', NULL, NULL, NULL, NULL, '2018-11-05 00:06:23', 'Admin', '2018-12-05 04:08:38', NULL),
(122, 'FORMULA GP', 5, 46, NULL, NULL, 1, NULL, NULL, NULL, '1541401596a.jpg', NULL, NULL, NULL, NULL, '2018-11-05 00:06:36', 'Admin', '2018-12-05 04:08:38', NULL),
(123, 'INFERNO BOY', 5, 46, NULL, NULL, 1, NULL, NULL, NULL, '1541401614a.jpg', NULL, NULL, NULL, NULL, '2018-11-05 00:06:54', 'Admin', '2018-12-05 04:08:38', 'Admin'),
(124, 'SPEED TRUCK', 5, 46, NULL, NULL, 1, NULL, NULL, NULL, '1541401630a.jpg', NULL, NULL, NULL, NULL, '2018-11-05 00:07:10', 'Admin', '2018-12-05 04:08:38', NULL),
(125, 'RANGER X', 5, 46, NULL, NULL, 1, NULL, NULL, NULL, '1541401642a.jpg', NULL, NULL, NULL, NULL, '2018-11-05 00:07:22', 'Admin', '2018-12-05 04:08:38', NULL),
(126, 'SUPER BIKE', 5, 46, NULL, NULL, 1, NULL, NULL, NULL, '1541401662a.jpg', NULL, NULL, NULL, NULL, '2018-11-05 00:07:42', 'Admin', '2018-12-05 04:08:38', NULL),
(127, 'TURBO', 5, 46, NULL, NULL, 1, NULL, NULL, NULL, '1541401703a.jpg', NULL, NULL, NULL, NULL, '2018-11-05 00:08:23', 'Admin', '2018-12-05 04:08:38', NULL),
(128, 'ROBOTICS', 5, 46, NULL, NULL, 1, NULL, NULL, NULL, '1541401713a.jpg', NULL, NULL, NULL, NULL, '2018-11-05 00:08:33', 'Admin', '2018-12-05 04:08:38', NULL),
(129, 'SHIELD', 5, 46, NULL, NULL, 1, NULL, NULL, NULL, '1541401724a.jpg', NULL, NULL, NULL, NULL, '2018-11-05 00:08:44', 'Admin', '2018-12-05 04:08:38', NULL),
(130, 'FIBER', 5, 46, NULL, NULL, 1, NULL, NULL, NULL, '1541401738a.jpg', NULL, NULL, NULL, NULL, '2018-11-05 00:08:58', 'Admin', '2018-12-05 04:08:38', NULL),
(131, 'MANTIS', 5, 46, NULL, NULL, 1, NULL, NULL, NULL, '1541401751a.jpg', NULL, NULL, NULL, NULL, '2018-11-05 00:09:11', 'Admin', '2018-12-05 04:08:38', NULL),
(132, 'SPARK', 5, 46, NULL, NULL, 1, NULL, NULL, NULL, '1541401769a.jpg', NULL, NULL, NULL, NULL, '2018-11-05 00:09:29', 'Admin', '2018-12-05 04:08:38', 'Admin'),
(133, 'DAISY', 5, 46, NULL, NULL, 1, NULL, NULL, NULL, '1541401796a.jpg', NULL, NULL, NULL, NULL, '2018-11-05 00:09:56', 'Admin', '2018-12-05 04:08:38', NULL),
(134, 'GLAMOUR', 5, 46, NULL, NULL, 1, NULL, NULL, NULL, '1541401816a.jpg', NULL, NULL, NULL, NULL, '2018-11-05 00:10:16', 'Admin', '2018-12-05 04:08:38', NULL),
(135, 'IMPERIAL', 5, 46, NULL, NULL, 1, NULL, NULL, NULL, '1541401837a.jpg', NULL, NULL, NULL, NULL, '2018-11-05 00:10:37', 'Admin', '2018-12-05 04:08:38', NULL),
(136, 'GIRL POWER', 5, 46, NULL, NULL, 1, NULL, NULL, NULL, '1541401860a.jpg', NULL, NULL, NULL, NULL, '2018-11-05 00:11:00', 'Admin', '2018-12-05 04:08:38', NULL),
(137, 'MAGENTA', 5, 46, NULL, NULL, 1, NULL, NULL, NULL, '1541401881a.jpg', NULL, NULL, NULL, NULL, '2018-11-05 00:11:21', 'Admin', '2018-12-05 04:08:38', NULL),
(138, 'LILLIES', 5, 46, NULL, NULL, 1, NULL, NULL, NULL, '1541401896a.jpg', NULL, NULL, NULL, NULL, '2018-11-05 00:11:36', 'Admin', '2018-12-05 04:08:38', NULL),
(139, 'FLUBBER', 5, 46, NULL, NULL, 1, NULL, NULL, NULL, '1541401913a.jpg', NULL, NULL, NULL, NULL, '2018-11-05 00:11:53', 'Admin', '2018-12-05 04:08:39', NULL),
(140, 'INFERNO BOY', 5, 47, NULL, NULL, 1, NULL, NULL, NULL, '1541401987a.jpg', NULL, NULL, NULL, NULL, '2018-11-05 00:13:07', 'Admin', '2018-12-05 04:08:39', NULL),
(141, 'SPEED TRUCK', 5, 47, NULL, NULL, 1, NULL, NULL, NULL, '1541402008a.jpg', NULL, NULL, NULL, NULL, '2018-11-05 00:13:28', 'Admin', '2018-12-05 04:08:39', NULL),
(142, 'GLAMOUR', 5, 47, NULL, NULL, 1, NULL, NULL, NULL, '1541402017a.jpg', NULL, NULL, NULL, NULL, '2018-11-05 00:13:37', 'Admin', '2018-12-05 04:08:39', NULL),
(143, 'GIRL POWER', 5, 47, NULL, NULL, 1, NULL, NULL, NULL, '1541402027a.jpg', NULL, NULL, NULL, NULL, '2018-11-05 00:13:47', 'Admin', '2018-12-05 04:08:39', NULL),
(144, 'MAGENTA', 5, 47, NULL, NULL, 1, NULL, NULL, NULL, '1541402036a.jpg', NULL, NULL, NULL, NULL, '2018-11-05 00:13:56', 'Admin', '2018-12-05 04:08:39', NULL),
(145, 'LILLIES', 5, 47, NULL, NULL, 1, NULL, NULL, NULL, '1541402047a.jpg', NULL, NULL, NULL, NULL, '2018-11-05 00:14:07', 'Admin', '2018-12-05 04:08:39', NULL),
(146, 'FLUBBER', 5, 47, NULL, NULL, 1, NULL, NULL, NULL, '1541402057a.jpg', NULL, NULL, NULL, NULL, '2018-11-05 00:14:17', 'Admin', '2018-12-05 04:08:39', NULL),
(147, 'SPORT', 5, 48, NULL, NULL, 1, NULL, NULL, NULL, '1541402106a.jpg', NULL, NULL, NULL, NULL, '2018-11-05 00:15:06', 'Admin', '2018-12-05 04:08:39', NULL),
(148, 'INFERNO BOY', 5, 48, NULL, NULL, 1, NULL, NULL, NULL, '1541402164a.jpg', NULL, NULL, NULL, NULL, '2018-11-05 00:16:04', 'Admin', '2018-12-05 04:08:39', NULL),
(149, 'SPEED TRUCK', 5, 48, NULL, NULL, 1, NULL, NULL, NULL, '1541402217a.jpg', NULL, NULL, NULL, NULL, '2018-11-05 00:16:57', 'Admin', '2018-12-05 04:08:39', NULL),
(150, 'FIBER', 5, 48, NULL, NULL, 1, NULL, NULL, NULL, '1541402234a.jpg', NULL, NULL, NULL, NULL, '2018-11-05 00:17:14', 'Admin', '2018-12-05 04:08:39', NULL),
(151, 'SWAT', 5, 48, NULL, NULL, 1, NULL, NULL, NULL, '1541402251a.jpg', NULL, NULL, NULL, NULL, '2018-11-05 00:17:31', 'Admin', '2018-12-05 04:08:39', NULL),
(152, 'EAGLEHAWK', 5, 48, NULL, NULL, 1, NULL, NULL, NULL, '1541402284a.jpg', NULL, NULL, NULL, NULL, '2018-11-05 00:18:04', 'Admin', '2018-12-05 04:08:39', NULL),
(153, 'MOJO', 5, 48, NULL, NULL, 1, NULL, NULL, NULL, '1541402310a.jpg', NULL, NULL, NULL, NULL, '2018-11-05 00:18:30', 'Admin', '2018-12-05 04:08:39', NULL),
(154, 'DAISY', 5, 48, NULL, NULL, 1, NULL, NULL, NULL, '1541402324a.jpg', NULL, NULL, NULL, NULL, '2018-11-05 00:18:44', 'Admin', '2018-12-05 04:08:39', NULL),
(155, 'GLAMOUR', 5, 48, NULL, NULL, 1, NULL, NULL, NULL, '1541402339a.jpg', NULL, NULL, NULL, NULL, '2018-11-05 00:18:59', 'Admin', '2018-12-05 04:08:39', NULL),
(156, 'GIRL POWER', 5, 48, NULL, NULL, 1, NULL, NULL, NULL, '1541402357a.jpg', NULL, NULL, NULL, NULL, '2018-11-05 00:19:17', 'Admin', '2018-12-05 04:08:39', NULL),
(157, 'LILLIES', 5, 48, NULL, NULL, 1, NULL, NULL, NULL, '1541402377a.jpg', NULL, NULL, NULL, NULL, '2018-11-05 00:19:37', 'Admin', '2018-12-05 04:08:39', NULL),
(158, 'FLUBBER', 5, 48, NULL, NULL, 1, NULL, NULL, NULL, '1541402398a.jpg', NULL, NULL, NULL, NULL, '2018-11-05 00:19:58', 'Admin', '2018-12-05 04:08:39', NULL),
(159, 'SPARK', 5, 48, NULL, NULL, 1, NULL, NULL, NULL, '1541402423a.jpg', NULL, NULL, NULL, NULL, '2018-11-05 00:20:23', 'Admin', '2018-12-05 04:08:39', NULL),
(160, 'INSANE', 5, 48, NULL, NULL, 1, NULL, NULL, NULL, '1541402445a.jpg', NULL, NULL, NULL, NULL, '2018-11-05 00:20:45', 'Admin', '2018-12-05 04:08:39', NULL),
(161, 'STARTROOPER', 5, 48, NULL, NULL, 1, NULL, NULL, NULL, '1541402469a.jpg', NULL, NULL, NULL, NULL, '2018-11-05 00:21:09', 'Admin', '2018-12-05 04:08:39', NULL),
(162, 'CS-8288', 8, 51, '<p class=\"Standard\"><span lang=\"IN\">- Mainan Musik Pencet \"PESAWAT\"<br></span></p><p class=\"Standard\"><span lang=\"IN\">- Dudukan Botol</span></p><p class=\"Standard\"><span lang=\"IN\"><o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Kantong Bawah Besar<o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Mudah Dilipat</span></p><p class=\"Standard\">- Sistem Penguncian Ban</p>', NULL, 1, NULL, NULL, NULL, '1541656951a.jpg', '1541656951b.jpg', '1541656951c.jpg', '1541656951d.jpg', NULL, '2018-11-07 23:02:31', 'Admin', '2018-12-05 04:08:40', 'Admin'),
(163, 'FS-138', 8, 52, '<p class=\"Standard\"><span lang=\"IN\">- Kanopi + Tirai Anti Serangga<br></span></p><p class=\"Standard\"><span lang=\"IN\">- Dudukan Botol</span></p><p class=\"Standard\"><span lang=\"IN\"><o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Kantong Bawah Besar<o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Mudah Dilipat</span></p><p class=\"Standard\">- Ban Besar Dengan Sistem Penguncian yang Mudah</p>', NULL, 1, NULL, NULL, NULL, '1541657017a.jpg', '1541657017b.jpg', '1541657017c.jpg', '1541657017d.jpg', NULL, '2018-11-07 23:03:37', 'Admin', '2018-12-05 04:08:40', 'Admin'),
(164, 'FS-238', 8, 52, '<p class=\"Standard\"><span lang=\"IN\">- Kanopi Besar + Tirai Anti Serangga<br></span></p><p class=\"Standard\"><span lang=\"IN\">- Dudukan Botol</span></p><p class=\"Standard\"><span lang=\"IN\"><o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Kantong Bawah Besar<o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Mudah Dilipat</span></p><p class=\"Standard\">- Ban Besar Dengan Sistem Penguncian yang Mudah</p>', NULL, 1, NULL, NULL, NULL, '1541657091a.jpg', '1541657091b.jpg', '1541657091c.jpg', '1541657091d.jpg', NULL, '2018-11-07 23:04:51', 'Admin', '2018-12-05 04:08:40', 'Admin'),
(165, 'HC-101', 8, 50, '<p class=\"Standard\"><span lang=\"IN\">- Mainan Musik Pencet \"PESAWAT\"<br></span></p><p class=\"Standard\"><span lang=\"IN\">- Kursi Makan Bayi</span></p><p class=\"Standard\"><span lang=\"IN\"><o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Dudukan Botol<o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Mudah Dilipat</span></p>', NULL, 1, NULL, NULL, NULL, '1541657172a.jpg', '1541657172b.jpg', '1541657172c.jpg', '1541657172d.jpg', NULL, '2018-11-07 23:06:12', 'Admin', '2018-12-05 04:08:40', 'Admin'),
(166, 'FM-323', 6, 13, '<p class=\"Standard\"><span lang=\"IN\">- Mainan Musik Karakter \"JERAPAH\"<br></span></p><p class=\"Standard\"><span lang=\"IN\">- Tuas Kemudi 4 Arah (Maju-Mundur, Kanan-Kiri)</span></p><p class=\"Standard\"><span lang=\"IN\"><o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Daya Tahan Battery Kuat</span></p>', NULL, 1, NULL, NULL, NULL, '1541657319a.jpg', '1541657319b.jpg', NULL, NULL, NULL, '2018-11-07 23:08:39', 'Admin', '2018-12-05 04:08:41', 'Admin'),
(167, 'FT-128', 6, 49, '<p class=\"Standard\"><span lang=\"IN\">- Ringan Mudah Dibawa<br></span></p><p class=\"Standard\"><span lang=\"IN\">- Banyak Pilihan</span></p>', NULL, 1, NULL, NULL, NULL, '1541657377a.jpg', '1541657377b.jpg', '1541657377c.jpg', '1541657377d.jpg', '1541657377e.jpg', '2018-11-07 23:09:37', 'Admin', '2018-12-05 04:08:41', 'Admin'),
(168, 'FT-6413', 6, 49, '<p class=\"Standard\"><span lang=\"IN\">- Musik Boneka \"ALIEN\"<br></span></p><p class=\"Standard\"><span lang=\"IN\">- Gagang Dorongan</span></p><p class=\"Standard\"><span lang=\"IN\"><o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Tatakan Kaki</span></p>', NULL, 1, NULL, NULL, NULL, '1541657430a.jpg', '1541657430b.jpg', NULL, NULL, NULL, '2018-11-07 23:10:30', 'Admin', '2018-12-05 04:08:41', 'Admin'),
(169, 'FT-6316', 6, 49, '<p class=\"Standard\"><span lang=\"IN\">- Musik Karakter \"KUDA\"<br></span></p><p class=\"Standard\"><span lang=\"IN\">- Gagang Dorongan</span></p><p class=\"Standard\"><span lang=\"IN\"><o:p></o:p></span></p><p class=\"Standard\"><span lang=\"IN\">- Tatakan Kaki</span></p>', NULL, 1, NULL, NULL, NULL, '1541657508a.jpg', '1541657508b.jpg', NULL, NULL, NULL, '2018-11-07 23:11:48', 'Admin', '2018-12-05 04:08:40', 'Admin');

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
(5, 'Bisa order ban custom tidak?', 'lutfi.febrianto@gmail.com', '2018-10-11 03:50:47', '2018-10-11 03:50:47');

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
(1, 'lutfi', 'lutfi.febrianto@gmail.com', '$2y$10$ms.CFHfEVncKyNxjAVM5G..KfijLwuU1t6llJXaQ4bmUTD.t0Jbmu', 'k4ztd2zoiJweV1X08SHTNvDGp0NvKxuTXGivr6usamiCIGXXxe0DTGbpvTgc', '2018-02-15 00:49:31', '2018-08-19 20:51:07'),
(2, 'asd', 'asd@gmail.com', '$2y$10$ghiHFDe.fJxyvCURXrLpxOzNN7/rGD9RrNSkHbVO/wx/4g/CkD4hi', 'DJGkrhUvhU34GNFsyVmeYu0Lhc7EaXncF0iq1UavuRxjhLkqzmN7GoDknFMD', '2018-02-15 10:56:31', '2018-02-18 20:24:08'),
(3, 'asd', 'lord_trafo@gmail.com', '$2y$10$LeBmW9NcL/5OgLZpj9E6JOEhjQTYsoQ9MU/rBXKCR2K3ZitV5uoiq', NULL, '2018-03-14 00:27:23', '2018-03-14 00:27:23');

-- --------------------------------------------------------

--
-- Table structure for table `user_management`
--

CREATE TABLE `user_management` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `id_usergroup` int(11) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_by` varchar(255) DEFAULT NULL,
  `updated_by` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_management`
--

INSERT INTO `user_management` (`id`, `username`, `name`, `password`, `id_usergroup`, `remember_token`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 'superadmin', 'Superadmin', '1234', 1, NULL, 'Admin', NULL, '2018-10-08 05:42:51', '2018-12-03 03:27:15'),
(2, 'admin-local', 'Samsul', '1234', 3, NULL, 'Admin', NULL, '2018-11-23 10:13:21', '2018-12-03 03:30:30'),
(3, 'admin-global', 'Paul', '1234', 2, NULL, 'Admin', NULL, '2018-11-23 10:13:21', '2018-12-03 03:30:52');

-- --------------------------------------------------------

--
-- Table structure for table `widget`
--

CREATE TABLE `widget` (
  `id` int(11) NOT NULL,
  `embed_text` text NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_by` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `widget`
--

INSERT INTO `widget` (`id`, `embed_text`, `description`, `updated_at`, `updated_by`) VALUES
(1, '<!-- SnapWidget -->\r\n<script src=\"https://snapwidget.com/js/snapwidget.js\"></script>\r\n<iframe src=\"https://snapwidget.com/embed/633258\" class=\"snapwidget-widget\" allowtransparency=\"true\" frameborder=\"0\" scrolling=\"no\" style=\"border:none; overflow:hidden; width:100%; \"></iframe>', 'Instagram', '2018-12-09 21:31:58', 'Superadmin'),
(2, '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/SjDNG5jsjK8\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'YouTube', '2018-12-04 01:41:10', 'Superadmin');

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
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `master_ban`
--
ALTER TABLE `master_ban`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `master_mainan`
--
ALTER TABLE `master_mainan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `master_sandaran`
--
ALTER TABLE `master_sandaran`
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
-- Indexes for table `user_management`
--
ALTER TABLE `user_management`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `widget`
--
ALTER TABLE `widget`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `category_products`
--
ALTER TABLE `category_products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `category_subproducts`
--
ALTER TABLE `category_subproducts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `master_ban`
--
ALTER TABLE `master_ban`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `master_mainan`
--
ALTER TABLE `master_mainan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `master_sandaran`
--
ALTER TABLE `master_sandaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `product_details`
--
ALTER TABLE `product_details`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=170;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_management`
--
ALTER TABLE `user_management`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `widget`
--
ALTER TABLE `widget`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
