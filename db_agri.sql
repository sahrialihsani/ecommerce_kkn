-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 06, 2021 at 04:37 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_agri`
--

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE `ci_sessions` (
  `id` varchar(128) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `data` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ci_sessions`
--

INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES
('pf2ek0cq3fud1dck1tfjeiksl790mspj', '::1', 1627214262, 0x5f5f63695f6c6173745f726567656e65726174657c693a313632373231343236323b636172745f636f6e74656e74737c613a333a7b733a31303a22636172745f746f74616c223b643a353030303b733a31313a22746f74616c5f6974656d73223b643a313b733a33323a223962663331633766663036323933366139366433633862643166386632666633223b613a363a7b733a323a226964223b733a323a223135223b733a333a22717479223b643a313b733a353a227072696365223b643a353030303b733a343a226e616d65223b733a343a2253617769223b733a353a22726f776964223b733a33323a223962663331633766663036323933366139366433633862643166386632666633223b733a383a22737562746f74616c223b643a353030303b7d7d5f74656d705f636f75706f6e7c733a303a22223b5f74656d705f7175616e746974797c613a313a7b733a33323a223962663331633766663036323933366139366433633862643166386632666633223b733a313a2231223b7d7265646972656374696f6e7c4e3b6c6f67696e5f666c6173687c733a36303a22557365722064656e67616e20757365726e616d65203c623e7361687269616c697368616b40676d613c2f623e20746964616b20746572646166746172223b5f5f63695f766172737c613a313a7b733a31313a226c6f67696e5f666c617368223b733a333a226f6c64223b7d),
('q8vtnr2l0atkjtftnk64fp0m6kdaq8nv', '::1', 1627214712, 0x5f5f63695f6c6173745f726567656e65726174657c693a313632373231343731323b7265646972656374696f6e7c4e3b5f5f4143544956455f53455353494f4e5f444154417c733a3235363a2262383032636539623663366337646137333935626366353336336333313561376639333165346337343032363365643963373561366233306439396334323064396261623235363736623764623663336534376266373935383234303730613937666464326364613165366264356437643265326663666331336632383338345039455032744c395068744d6e474b524732675764465a5767306c455850712f705a4656587268474a6a4557515364765253336d5a4348622b47324232786d697836637a6a736f34316165786e41776d5336514448395a584f4b7773756470596966523542493935635733545444355831582b506369596b7066346261427636223b),
('tsceg7465b6ed9qtetdb00bspuoeh9vu', '::1', 1627215067, 0x5f5f63695f6c6173745f726567656e65726174657c693a313632373231353036373b7265646972656374696f6e7c4e3b),
('11ee0mdnspj4501vf0js17e4ha5q0b8o', '::1', 1627218795, 0x5f5f63695f6c6173745f726567656e65726174657c693a313632373231383739353b636172745f636f6e74656e74737c613a333a7b733a31303a22636172745f746f74616c223b643a333030303b733a31313a22746f74616c5f6974656d73223b643a313b733a33323a226337346439376230316561653235376534346161396435626164653937626166223b613a363a7b733a323a226964223b733a323a223136223b733a333a22717479223b643a313b733a353a227072696365223b643a333030303b733a343a226e616d65223b733a383a224b616e676b756e67223b733a353a22726f776964223b733a33323a226337346439376230316561653235376534346161396435626164653937626166223b733a383a22737562746f74616c223b643a333030303b7d7d5f5f4143544956455f53455353494f4e5f444154417c733a3235363a2264333166646532373234623834616338316464656266396332373133363864623135636563613362373461666466343532306265613233343430396337313238663139326333666239363634313836306364363765313531313139356139376236666233633663623362633730646462613138303533663761666335373961346463645048636673486c5a67704971754e38644f502f48554f63597656772b6c5068376b635143396671636e664b3438787a4a61577a476454484e504e75736f76325a72506b387341656e61506f69763674764e527468676d69335a47672f4f4a4f6c57396f73616a4a4d6565473947614d6f676570304f617272505556646d223b6f726465725f7175616e746974797c613a313a7b693a31363b613a323a7b733a333a22717479223b643a313b733a353a227072696365223b643a333030303b7d7d746f74616c5f70726963657c643a363030303b),
('itu384kn7up8a5p8scshjo7n44nrc5oa', '::1', 1627220803, 0x5f5f63695f6c6173745f726567656e65726174657c693a313632373232303830333b636172745f636f6e74656e74737c613a333a7b733a31303a22636172745f746f74616c223b643a333030303b733a31313a22746f74616c5f6974656d73223b643a313b733a33323a226337346439376230316561653235376534346161396435626164653937626166223b613a363a7b733a323a226964223b733a323a223136223b733a333a22717479223b643a313b733a353a227072696365223b643a333030303b733a343a226e616d65223b733a383a224b616e676b756e67223b733a353a22726f776964223b733a33323a226337346439376230316561653235376534346161396435626164653937626166223b733a383a22737562746f74616c223b643a333030303b7d7d5f5f4143544956455f53455353494f4e5f444154417c733a3235363a2264333166646532373234623834616338316464656266396332373133363864623135636563613362373461666466343532306265613233343430396337313238663139326333666239363634313836306364363765313531313139356139376236666233633663623362633730646462613138303533663761666335373961346463645048636673486c5a67704971754e38644f502f48554f63597656772b6c5068376b635143396671636e664b3438787a4a61577a476454484e504e75736f76325a72506b387341656e61506f69763674764e527468676d69335a47672f4f4a4f6c57396f73616a4a4d6565473947614d6f676570304f617272505556646d223b6f726465725f7175616e746974797c613a313a7b693a31363b613a323a7b733a333a22717479223b643a313b733a353a227072696365223b643a333030303b7d7d746f74616c5f70726963657c643a363030303b),
('sm75uoa6nnrbloqonsoom2a0q32hpe45', '::1', 1627222039, 0x5f5f63695f6c6173745f726567656e65726174657c693a313632373232323033393b636172745f636f6e74656e74737c613a333a7b733a31303a22636172745f746f74616c223b643a333030303b733a31313a22746f74616c5f6974656d73223b643a313b733a33323a226337346439376230316561653235376534346161396435626164653937626166223b613a363a7b733a323a226964223b733a323a223136223b733a333a22717479223b643a313b733a353a227072696365223b643a333030303b733a343a226e616d65223b733a383a224b616e676b756e67223b733a353a22726f776964223b733a33323a226337346439376230316561653235376534346161396435626164653937626166223b733a383a22737562746f74616c223b643a333030303b7d7d5f5f4143544956455f53455353494f4e5f444154417c733a3235363a2264333166646532373234623834616338316464656266396332373133363864623135636563613362373461666466343532306265613233343430396337313238663139326333666239363634313836306364363765313531313139356139376236666233633663623362633730646462613138303533663761666335373961346463645048636673486c5a67704971754e38644f502f48554f63597656772b6c5068376b635143396671636e664b3438787a4a61577a476454484e504e75736f76325a72506b387341656e61506f69763674764e527468676d69335a47672f4f4a4f6c57396f73616a4a4d6565473947614d6f676570304f617272505556646d223b6f726465725f7175616e746974797c613a313a7b693a31363b613a323a7b733a333a22717479223b643a313b733a353a227072696365223b643a333030303b7d7d746f74616c5f70726963657c643a363030303b),
('t4kqpl2momotil8dshgm1meu41f44pav', '::1', 1627222216, 0x5f5f63695f6c6173745f726567656e65726174657c693a313632373232323033393b636172745f636f6e74656e74737c613a333a7b733a31303a22636172745f746f74616c223b643a333030303b733a31313a22746f74616c5f6974656d73223b643a313b733a33323a226337346439376230316561653235376534346161396435626164653937626166223b613a363a7b733a323a226964223b733a323a223136223b733a333a22717479223b643a313b733a353a227072696365223b643a333030303b733a343a226e616d65223b733a383a224b616e676b756e67223b733a353a22726f776964223b733a33323a226337346439376230316561653235376534346161396435626164653937626166223b733a383a22737562746f74616c223b643a333030303b7d7d5f5f4143544956455f53455353494f4e5f444154417c733a3235363a2264333166646532373234623834616338316464656266396332373133363864623135636563613362373461666466343532306265613233343430396337313238663139326333666239363634313836306364363765313531313139356139376236666233633663623362633730646462613138303533663761666335373961346463645048636673486c5a67704971754e38644f502f48554f63597656772b6c5068376b635143396671636e664b3438787a4a61577a476454484e504e75736f76325a72506b387341656e61506f69763674764e527468676d69335a47672f4f4a4f6c57396f73616a4a4d6565473947614d6f676570304f617272505556646d223b6f726465725f7175616e746974797c613a313a7b693a31363b613a323a7b733a333a22717479223b643a313b733a353a227072696365223b643a333030303b7d7d746f74616c5f70726963657c643a363030303b),
('6qpte87p2t5nr5gns66ooulrqeqg8ph6', '::1', 1627230053, 0x5f5f63695f6c6173745f726567656e65726174657c693a313632373233303035323b),
('mdjnjiv16soup4j041d9dj1qc1n75cl3', '::1', 1627271607, 0x5f5f63695f6c6173745f726567656e65726174657c693a313632373237313630373b),
('b0hupmq2sdt88m6iu6dh84fpehi5l6sp', '::1', 1627271611, 0x5f5f63695f6c6173745f726567656e65726174657c693a313632373237313630373b7265646972656374696f6e7c4e3b),
('sujes03mqqrg15m9a4qqjemvhgmu7177', '::1', 1627565106, 0x5f5f63695f6c6173745f726567656e65726174657c693a313632373536353130343b);

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(10) NOT NULL,
  `parent_id` int(10) DEFAULT NULL,
  `name` varchar(32) NOT NULL,
  `subject` varchar(128) DEFAULT NULL,
  `email` varchar(64) NOT NULL,
  `message` mediumtext NOT NULL,
  `contact_date` datetime DEFAULT NULL,
  `status` tinyint(1) DEFAULT 1,
  `reply_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `parent_id`, `name`, `subject`, `email`, `message`, `contact_date`, `status`, `reply_at`) VALUES
(1, NULL, 'Agung Tri Saputra', 'Pengiriman kok lama?', 'martinms.za@gmail.com', 'pengiriman pesanan saya kok lama ya', '2020-03-29 07:40:13', 2, NULL),
(2, NULL, 'Sahrial Ihsani Ishak', 'Pemesanan', 'sahrialishak@gmail.com', 'Mau dong pesan', '2021-07-25 09:41:43', 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `coupons`
--

CREATE TABLE `coupons` (
  `id` bigint(20) NOT NULL,
  `name` varchar(191) NOT NULL,
  `code` varchar(32) NOT NULL,
  `credit` decimal(8,2) NOT NULL,
  `start_date` date NOT NULL,
  `expired_date` date NOT NULL,
  `is_active` tinyint(4) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `coupons`
--

INSERT INTO `coupons` (`id`, `name`, `code`, `credit`, `start_date`, `expired_date`, `is_active`) VALUES
(1, '#DiRumahAja', 'DIRUMAHAJA19', '5000.00', '2020-03-27', '2020-04-03', 1),
(2, 'Buah Merah Meriah', 'BUAHMERAH', '5000.00', '2020-03-27', '2020-03-30', 0);

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` bigint(20) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(191) NOT NULL,
  `phone_number` varchar(32) DEFAULT NULL,
  `address` varchar(191) NOT NULL,
  `profile_picture` varchar(191) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `user_id`, `name`, `phone_number`, `address`, `profile_picture`) VALUES
(7, 8, 'Abdul Kholiq', '089647583033', 'Jln AHmad Yani 6 Jember', NULL),
(8, 9, 'Sahrial Ihsani Ishak', '+6282373052455', 'Komplek Perumahan guru, RT 13, RW 001 Kelurahan bentiring, Kecamatan muara Bangkahulu', 'users.png'),
(9, 10, 'Rendy Juniawan', '082373052455', 'Bentiring', 'users.png');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `coupon_id` bigint(20) DEFAULT NULL,
  `order_number` varchar(16) NOT NULL,
  `order_status` enum('1','2','3','4','5') DEFAULT '1',
  `order_date` datetime NOT NULL,
  `total_price` decimal(8,2) DEFAULT NULL,
  `total_items` int(10) DEFAULT NULL,
  `payment_method` int(11) DEFAULT 1,
  `delivery_data` text DEFAULT NULL,
  `delivered_date` datetime DEFAULT NULL,
  `finish_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `coupon_id`, `order_number`, `order_status`, `order_date`, `total_price`, `total_items`, `payment_method`, `delivery_data`, `delivered_date`, `finish_date`) VALUES
(9, 9, NULL, 'SCY2372119298', '1', '2021-07-23 19:52:49', '260000.00', 1, 2, '{\"customer\":{\"name\":\"Sahrial Ihsani Ishak\",\"phone_number\":\"+6282373052455\",\"address\":\"Komplek Perumahan guru, RT 13, RW 001 Kelurahan bentiring, Kecamatan muara Bangkahulu\"},\"note\":\"\"}', NULL, NULL),
(10, 10, NULL, 'CQB25721110497', '1', '2021-07-25 13:59:00', '8000.00', 1, 1, '{\"customer\":{\"name\":\"Rendy Juniawan\",\"phone_number\":\"082373052455\",\"address\":\"Bentiring\"},\"note\":\"\"}', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `order_item`
--

CREATE TABLE `order_item` (
  `id` bigint(20) NOT NULL,
  `order_id` bigint(20) DEFAULT NULL,
  `product_id` bigint(20) DEFAULT NULL,
  `order_qty` int(10) NOT NULL,
  `order_price` decimal(8,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_item`
--

INSERT INTO `order_item` (`id`, `order_id`, `product_id`, `order_qty`, `order_price`) VALUES
(3, 4, 2, 1, '31000.00'),
(4, 4, 8, 13, '20000.00'),
(5, 5, 2, 1, '31000.00'),
(6, 5, 13, 12, '20000.00'),
(7, 6, 9, 10, '35000.00'),
(8, 7, 10, 1, '12000.00'),
(9, 7, 9, 1, '35000.00'),
(10, 7, 2, 1, '31000.00'),
(11, 8, 9, 1, '35000.00'),
(12, 8, 1, 5, '65000.00'),
(13, 9, 1, 4, '65000.00'),
(14, 10, 15, 1, '5000.00');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` bigint(20) NOT NULL,
  `order_id` bigint(20) DEFAULT NULL,
  `payment_price` decimal(8,2) DEFAULT NULL,
  `payment_date` datetime NOT NULL,
  `picture_name` varchar(191) DEFAULT NULL,
  `payment_status` enum('1','2','3') DEFAULT '1',
  `confirmed_date` datetime DEFAULT NULL,
  `payment_data` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `order_id`, `payment_price`, `payment_date`, `picture_name`, `payment_status`, `confirmed_date`, `payment_data`) VALUES
(4, 5, '271000.00', '2020-03-29 08:20:39', 'category-1.jpg', '1', NULL, '{\"transfer_to\":\"bri\",\"source\":{\"bank\":\"Bank BRI\",\"name\":\"Agung Tri Saputra\",\"number\":\"12-345-678-9\"}}'),
(5, 7, '78000.00', '2020-03-30 08:51:08', 'html5.jpg', '2', NULL, '{\"transfer_to\":\"btn\",\"source\":{\"bank\":\"BANK BCA\",\"name\":\"MMS\",\"number\":\"123-456\"}}');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) NOT NULL,
  `category_id` int(10) DEFAULT NULL,
  `sku` varchar(32) DEFAULT NULL,
  `name` varchar(191) NOT NULL,
  `description` varchar(191) DEFAULT NULL,
  `picture_name` varchar(191) DEFAULT NULL,
  `price` decimal(8,2) NOT NULL,
  `current_discount` decimal(8,2) DEFAULT 0.00,
  `stock` int(10) NOT NULL,
  `product_unit` varchar(32) DEFAULT NULL,
  `is_available` tinyint(1) DEFAULT 1,
  `add_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `sku`, `name`, `description`, `picture_name`, `price`, `current_discount`, `stock`, `product_unit`, `is_available`, `add_date`) VALUES
(15, 1, 'SS520816', 'Sawi', 'Sawi Putih', 'sawi.png', '5000.00', '0.00', 19, 'Ikat', 1, '2021-07-25 08:50:16'),
(16, 1, 'KS320710', 'Kangkung', 'Kangkung Air', 'kangkung.png', '3000.00', '0.00', 20, 'Ikat', 1, '2021-07-25 09:05:10'),
(17, 1, 'BS220738', 'Bayam', 'Sayur Bayam', 'bayam.png', '2500.00', '0.00', 20, 'Ikat', 1, '2021-07-25 09:05:38'),
(18, 2, 'MBTMH120541', 'Minuman Bunga Telang', 'Minuman herbal dari Bunga Telang', 'telang1.png', '10000.00', '0.00', 20, 'Botol', 1, '2021-07-25 09:19:01'),
(19, 3, 'YSMM110160', 'YumBox Sambal Matah', 'Rice box dengan varian Sambal Matah', 'sambalmatah.png', '12000.00', '0.00', 10, 'Kotak', 1, '2021-07-25 09:29:20');

-- --------------------------------------------------------

--
-- Table structure for table `product_category`
--

CREATE TABLE `product_category` (
  `id` int(10) NOT NULL,
  `name` varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_category`
--

INSERT INTO `product_category` (`id`, `name`) VALUES
(1, 'Sayuran'),
(2, 'Minuman Herbal'),
(3, 'Makanan');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` bigint(20) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `order_id` bigint(20) DEFAULT NULL,
  `title` varchar(191) DEFAULT NULL,
  `review_text` mediumtext NOT NULL,
  `review_date` datetime NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `user_id`, `order_id`, `title`, `review_text`, `review_date`, `status`) VALUES
(2, 7, 6, 'Sangat puas', 'Pengiriman cepat dan sayur segar', '2020-03-30 08:31:31', 1),
(3, 7, 5, 'Buah segar', 'Buah segar dan kualitasnya sangat bagus', '2020-03-30 08:33:10', 1);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) NOT NULL,
  `role_name` varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `role_name`) VALUES
(1, 'Admin'),
(2, 'Customer');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(10) NOT NULL,
  `key` varchar(32) NOT NULL,
  `content` varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `key`, `content`) VALUES
(1, 'current_theme_name', 'vegefoods'),
(2, 'store_name', 'UMKM PERUMAHAN GURU'),
(3, 'store_phone_number', '082281666584'),
(4, 'store_email', 'tokosayur22@gmail.com'),
(5, 'store_tagline', 'Belanja Sayur Segar 24 Jam'),
(6, 'store_logo', 'Logo.png'),
(7, 'max_product_image_size', '20000'),
(8, 'store_description', 'Belanja sayur dan buah dengan murah, mudah dan cepat'),
(9, 'store_address', 'Komplek Perumahan Guru RT 13, RW 001 Kelurahan Bentiring, Kecamatan Muara Bangkahulu, Kota Bengkulu'),
(10, 'min_shop_to_free_shipping_cost', '20000'),
(11, 'shipping_cost', '3000'),
(12, 'payment_banks', '{\"bri\":{\"bank\":\"BRI\",\"name\":\"Martin Mulyo Syahidin\",\"number\":\"9999-999-99-9\"},\"btn\":{\"bank\":\"BNI\",\"name\":\"Martin Mulyo Syahidin\",\"number\":\"4444-444-44-4\"},\"bni\":{\"bank\":\"BTN\",\"name\":\"Martin M');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `username` varchar(16) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profile_picture` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role_id` int(10) DEFAULT 0,
  `register_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `username`, `password`, `profile_picture`, `role_id`, `register_date`) VALUES
(1, 'Mulyo Jr.', 'mulyosyahidin95@gmail.com', NULL, 'admin', '$2y$10$nQ.J0QlWLynYZOTtZdtePOWSUycOzU1riUXXTBcwUUAXyphSjK5F2', 'agung1.png', 1, NULL),
(8, NULL, 'kholiqbisnis@gmail.com', NULL, 'kholiq', '$2y$10$MXNU0yw4drSclahZu.Pz..BRa6rYhMNZ0sDl/7dhXjg3D4LvxPhjO', NULL, 2, '2020-12-28 07:18:23'),
(9, NULL, 'sahrialishak@gmail.com', NULL, 'sahrial17', '$2y$10$iCMuryPpFUjwcbTw9KvUfONnXQ7lO9KJPsepo1RtWkyCFGGjZb5LO', 'users.png', 2, '2021-07-23 19:51:19'),
(10, NULL, 'rendy@gmail.com', NULL, 'rendyajo', '$2y$10$zTqy2G7q0PhADUsNXJaZxuemjVLHf3fUDk32sJTI2.0QUv9txjlnG', 'users.png', 2, '2021-07-25 13:58:34');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ci_sessions`
--
ALTER TABLE `ci_sessions`
  ADD KEY `ci_sessions_timestamp` (`timestamp`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_contacts_contacts` (`parent_id`);

--
-- Indexes for table `coupons`
--
ALTER TABLE `coupons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_customers_users` (`user_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_orders_users` (`user_id`),
  ADD KEY `FK_orders_coupons` (`coupon_id`);

--
-- Indexes for table `order_item`
--
ALTER TABLE `order_item`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_id` (`order_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_id` (`order_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_products_product_category` (`category_id`);

--
-- Indexes for table `product_category`
--
ALTER TABLE `product_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_reviews_users` (`user_id`),
  ADD KEY `FK_reviews_orders` (`order_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD UNIQUE KEY `users_email_unique` (`email`) USING BTREE,
  ADD KEY `role_id` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `coupons`
--
ALTER TABLE `coupons`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `order_item`
--
ALTER TABLE `order_item`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `product_category`
--
ALTER TABLE `product_category`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `contacts`
--
ALTER TABLE `contacts`
  ADD CONSTRAINT `FK_contacts_contacts` FOREIGN KEY (`parent_id`) REFERENCES `contacts` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `customers`
--
ALTER TABLE `customers`
  ADD CONSTRAINT `FK_customers_users` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `FK_orders_coupons` FOREIGN KEY (`coupon_id`) REFERENCES `coupons` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_orders_users` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `payments`
--
ALTER TABLE `payments`
  ADD CONSTRAINT `FK_payments_orders` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
