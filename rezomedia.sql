-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 03, 2016 at 06:01 PM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 7.0.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rezomedia`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `name_ro` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `name_en` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `description_ro` text COLLATE utf8_unicode_ci NOT NULL,
  `description_en` text COLLATE utf8_unicode_ci NOT NULL,
  `description_short` text COLLATE utf8_unicode_ci NOT NULL,
  `description_short_ro` text COLLATE utf8_unicode_ci NOT NULL,
  `description_short_en` text COLLATE utf8_unicode_ci NOT NULL,
  `menu_type_id` tinyint(4) NOT NULL,
  `enabled` tinyint(1) NOT NULL DEFAULT '1',
  `top` tinyint(1) NOT NULL,
  `views` int(11) NOT NULL,
  `sort` int(11) NOT NULL,
  `slug` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `name_ro`, `name_en`, `description`, `description_ro`, `description_en`, `description_short`, `description_short_ro`, `description_short_en`, `menu_type_id`, `enabled`, `top`, `views`, `sort`, `slug`, `created_at`, `updated_at`) VALUES
(40, 'Кассовые аппараты', 'Case de marcat', '', '', '', '', '', '', '', 0, 1, 0, 0, 0, 'kassovye-apparaty', '2016-08-01 21:00:00', '2016-08-03 09:55:02'),
(41, 'Купюросчетные машинки', 'Masini de numarat bancnote', '', '', '', '', '', '', '', 0, 1, 0, 0, 0, 'kupyuroschetnye-mashinki', '2016-08-01 21:00:00', '2016-08-03 03:59:54'),
(42, 'Детекторы валют', 'Detectoare de valută', '', '', '', '', '', '', '', 0, 1, 0, 0, 0, 'detektory-valyut', '2016-08-02 21:00:00', '2016-08-03 03:59:16'),
(43, 'Сканеры', 'Scanere', '', '', '', '', '', '', '', 0, 1, 0, 0, 0, 'skanery', '2016-08-02 21:00:00', '2016-08-03 02:25:46'),
(44, 'Весы', 'Balanța', '', '', '', '', '', '', '', 0, 1, 0, 0, 0, 'vesy', '2016-08-02 21:00:00', '2016-08-03 02:26:01'),
(47, 'Денежные ящики', 'Sertare de bani', '', '', '', '', '', '', '', 0, 1, 0, 0, 0, 'denezhnye-yashhiki', '2016-08-02 21:00:00', '2016-08-03 02:26:44'),
(48, 'Чековая лента', 'Bandă de primire', '', '', '', '', '', '', '', 0, 1, 0, 0, 0, 'chekovaya-lenta', '2016-08-02 21:00:00', '2016-08-03 02:27:14'),
(49, 'Все в одном ( ПК+Монитор )', 'Toate într-un singur (PC + monitor)', '', '', '', '', '', '', '', 0, 1, 0, 0, 0, 'vse-v-odnom-pkmonitor', '2016-08-02 21:00:00', '2016-08-03 03:58:35');

-- --------------------------------------------------------

--
-- Table structure for table `categories_xref`
--

CREATE TABLE `categories_xref` (
  `id` int(10) UNSIGNED NOT NULL,
  `parent_id` int(11) NOT NULL,
  `child_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `constants`
--

CREATE TABLE `constants` (
  `id` int(10) UNSIGNED NOT NULL,
  `key` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `value` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `content`
--

CREATE TABLE `content` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `name_en` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `name_ro` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `description_en` text COLLATE utf8_unicode_ci NOT NULL,
  `description_ro` text COLLATE utf8_unicode_ci NOT NULL,
  `enabled` tinyint(1) NOT NULL DEFAULT '1',
  `views` int(11) NOT NULL,
  `slug` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `content`
--

INSERT INTO `content` (`id`, `name`, `name_en`, `name_ro`, `description`, `description_en`, `description_ro`, `enabled`, `views`, `slug`, `created_at`, `updated_at`) VALUES
(10, 'Техническое обслуживание', '', 'Intretinerea', '<p>страница техническое обслуживание</p>\r\n', '', '<p>Pagina&nbsp;Intretinerea</p>\r\n', 1, 0, 'tech-support', '2016-06-25 21:00:00', '2016-08-03 06:18:28'),
(11, 'Ремонт', '', 'Reparație', '<p>Страница ремонта</p>\r\n', '', '<p>Pagina reparatie</p>\r\n', 1, 0, 'repair', '2016-08-02 21:00:00', '2016-08-03 06:18:11'),
(12, 'Снятие с учета', '', 'Îndepărtarea din registru', '<p>Страница снятие с учета</p>\r\n', '', '<p>Pagina indepartarii din registru</p>\r\n', 1, 0, 'remove', '2016-08-02 21:00:00', '2016-08-03 06:17:54'),
(13, 'Регистрации', '', 'Înregistrare', '<p>Страница регистрации</p>\r\n', '', '<p>Pagina inregistrarii</p>\r\n', 1, 0, 'registration', '2016-08-02 21:00:00', '2016-08-03 06:17:32'),
(14, 'Законодательство', '', 'Legislație', '<p>Страница законодательство</p>\r\n', '', '<p>Pagina legislatie</p>\r\n', 1, 0, 'legislation', '2016-08-02 21:00:00', '2016-08-03 06:17:06'),
(15, 'Инструкции', '', 'Instrucțiuni', '<p>Страница инструкции</p>\r\n', '', '<p>Pagina instructiunii</p>\r\n', 1, 0, 'instructions', '2016-08-02 21:00:00', '2016-08-03 06:16:42'),
(16, 'Бланки', '', 'Blancuri', '<p>Страница бланки</p>\r\n', '', '<p>Pagina blancuri</p>\r\n', 1, 0, 'forms', '2016-08-02 21:00:00', '2016-08-03 06:16:19'),
(17, 'Драйверы', '', 'Driverii', '<p>Страница драйверы</p>\r\n', '', '<p>Pagina driverii</p>\r\n', 1, 0, 'drivers', '2016-08-02 21:00:00', '2016-08-03 06:16:02'),
(18, 'Программы', '', 'Programe', '<p>Страница программы</p>\r\n', '', '<p>Pagine programe</p>\r\n', 1, 0, 'programs', '2016-08-02 21:00:00', '2016-08-03 06:15:43'),
(19, 'Автоматизация торговли', '', 'Automatizarea comerțului', '<p>Страница автоматизации&nbsp;торговли</p>\r\n', '', '<p>Pagina automatizarea comerțului</p>\r\n', 1, 0, 'trade-automation', '2016-08-02 21:00:00', '2016-08-03 06:13:53');

-- --------------------------------------------------------

--
-- Table structure for table `features`
--

CREATE TABLE `features` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `name_ro` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `name_en` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `description_ro` text COLLATE utf8_unicode_ci NOT NULL,
  `description_en` text COLLATE utf8_unicode_ci NOT NULL,
  `enabled` tinyint(1) NOT NULL DEFAULT '1',
  `sort` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `features`
--

INSERT INTO `features` (`id`, `name`, `name_ro`, `name_en`, `description`, `description_ro`, `description_en`, `enabled`, `sort`, `created_at`, `updated_at`) VALUES
(1, 'Ширина ленты', '', '', '', '', '', 1, 0, NULL, NULL),
(2, 'Тип аппарата', '', '', '', '', '', 1, 0, NULL, NULL),
(3, 'Питание', '', '', '', '', '', 1, 0, NULL, NULL),
(4, 'Интерфейс', '', '', '', '', '', 1, 0, NULL, NULL),
(5, 'Бренд', '', '', '', '', '', 1, 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `features_products`
--

CREATE TABLE `features_products` (
  `id` int(10) UNSIGNED NOT NULL,
  `products_id` int(10) UNSIGNED NOT NULL,
  `features_id` int(10) UNSIGNED NOT NULL,
  `value` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `features_products`
--

INSERT INTO `features_products` (`id`, `products_id`, `features_id`, `value`) VALUES
(1, 7, 1, 3),
(2, 7, 2, 0),
(3, 7, 3, 0),
(4, 7, 4, 0),
(5, 7, 5, 8),
(6, 22, 1, 1),
(7, 22, 2, 0),
(8, 22, 3, 0),
(9, 22, 4, 0),
(10, 22, 5, 7),
(11, 23, 1, 0),
(12, 23, 2, 0),
(13, 23, 3, 0),
(14, 23, 4, 0),
(15, 23, 5, 0);

-- --------------------------------------------------------

--
-- Table structure for table `features_values`
--

CREATE TABLE `features_values` (
  `id` int(10) UNSIGNED NOT NULL,
  `features_id` int(11) NOT NULL,
  `name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `name_ro` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `name_en` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `features_values`
--

INSERT INTO `features_values` (`id`, `features_id`, `name`, `name_ro`, `name_en`) VALUES
(1, 1, '28+28', '28+28', '28+28'),
(2, 1, '35+20', '35+20', '35+20'),
(3, 1, '38+38', '38+38', '38+38'),
(4, 1, '57', '57', '57'),
(5, 1, '80', '80', '80'),
(7, 5, 'Datex', 'Datex', 'Datex'),
(8, 5, 'Tremol', 'Tremol', 'Tremol'),
(9, 5, 'Daisy', 'Daisy', 'Daisy'),
(10, 5, 'Elicom', 'Elicom', 'Elicom'),
(11, 5, 'Aclas', 'Aclas', 'Aclas');

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `name_ro` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `name_en` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `description_ro` text COLLATE utf8_unicode_ci NOT NULL,
  `description_en` text COLLATE utf8_unicode_ci NOT NULL,
  `description_short` text COLLATE utf8_unicode_ci NOT NULL,
  `description_short_ro` text COLLATE utf8_unicode_ci NOT NULL,
  `description_short_en` text COLLATE utf8_unicode_ci NOT NULL,
  `enabled` tinyint(1) NOT NULL DEFAULT '1',
  `views` int(11) NOT NULL,
  `sort` int(11) NOT NULL,
  `slug` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `galleries_xref`
--

CREATE TABLE `galleries_xref` (
  `id` int(10) UNSIGNED NOT NULL,
  `galleries_id` int(10) UNSIGNED NOT NULL,
  `table_id` int(11) NOT NULL,
  `table` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `lists`
--

CREATE TABLE `lists` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `name_ro` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `name_en` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `description_ro` text COLLATE utf8_unicode_ci NOT NULL,
  `description_en` text COLLATE utf8_unicode_ci NOT NULL,
  `description_short` text COLLATE utf8_unicode_ci NOT NULL,
  `description_short_ro` text COLLATE utf8_unicode_ci NOT NULL,
  `description_short_en` text COLLATE utf8_unicode_ci NOT NULL,
  `parent_id` int(11) NOT NULL,
  `enabled` tinyint(1) NOT NULL DEFAULT '1',
  `views` int(11) NOT NULL,
  `sort` int(11) NOT NULL,
  `slug` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `lists`
--

INSERT INTO `lists` (`id`, `name`, `name_ro`, `name_en`, `description`, `description_ro`, `description_en`, `description_short`, `description_short_ro`, `description_short_en`, `parent_id`, `enabled`, `views`, `sort`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Слайдер', '', '', '<p>123</p>\r\n', '<p>456</p>\r\n', '<p>789</p>\r\n', 'dsaasdasdas', '', '', 0, 1, 0, 0, 'slider', '2016-08-01 21:00:00', '2016-08-02 04:45:06'),
(4, 'Баннеры', '', '', '', '', '', '', '', '', 0, 1, 0, 0, 'banners', '2016-08-02 21:00:00', '2016-08-03 05:14:03'),
(5, 'Партнеры', '', '', '', '', '', '', '', '', 0, 1, 0, 0, 'partners', '2016-08-02 21:00:00', '2016-08-03 05:14:19'),
(6, 'banner-left', '', '', '', '', '', 'xsort.md', 'xsort.md', '', 4, 1, 0, 0, 'banner-left', '2016-08-02 21:00:00', '2016-08-03 07:57:05'),
(7, 'MIcrosoft', '', '', '', '', '', 'xsort.md', 'xsort.md', '', 5, 1, 0, 0, 'microsoft', '2016-08-02 21:00:00', '2016-08-03 07:44:20'),
(8, 'banner-red', '', '', '', '', '', 'google.ru', 'google.ru', '', 4, 1, 0, 0, 'bannerred', '2016-08-02 21:00:00', '2016-08-03 07:53:49'),
(9, 'Тестовый заголовок', 'Title test', '', '', '', '', 'Тестовое описание', 'Descrierea test', '', 1, 1, 0, 0, 'testovyj-zagolovok', '2016-08-02 21:00:00', '2016-08-03 09:56:02');

-- --------------------------------------------------------

--
-- Table structure for table `menu_categories`
--

CREATE TABLE `menu_categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `name_ro` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `name_en` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `description_ro` text COLLATE utf8_unicode_ci NOT NULL,
  `description_en` text COLLATE utf8_unicode_ci NOT NULL,
  `description_short` text COLLATE utf8_unicode_ci NOT NULL,
  `description_short_ro` text COLLATE utf8_unicode_ci NOT NULL,
  `description_short_en` text COLLATE utf8_unicode_ci NOT NULL,
  `parent_id` tinyint(4) NOT NULL,
  `enabled` tinyint(1) NOT NULL DEFAULT '1',
  `views` int(11) NOT NULL,
  `sort` int(11) NOT NULL,
  `slug` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `menu_products`
--

CREATE TABLE `menu_products` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `name_ro` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `name_en` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `description_ro` text COLLATE utf8_unicode_ci NOT NULL,
  `description_en` text COLLATE utf8_unicode_ci NOT NULL,
  `description_short` text COLLATE utf8_unicode_ci NOT NULL,
  `description_short_ro` text COLLATE utf8_unicode_ci NOT NULL,
  `description_short_en` text COLLATE utf8_unicode_ci NOT NULL,
  `category_id` tinyint(4) NOT NULL,
  `product_id` int(11) NOT NULL,
  `price` double(15,2) NOT NULL,
  `enabled` tinyint(1) NOT NULL DEFAULT '1',
  `views` int(11) NOT NULL,
  `sort` int(11) NOT NULL,
  `slug` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `meta`
--

CREATE TABLE `meta` (
  `id` int(10) UNSIGNED NOT NULL,
  `meta_description` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `meta_description_ro` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `meta_description_en` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `meta_keywords` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `meta_keywords_ro` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `meta_keywords_en` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `title_ro` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `title_en` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `table_id` int(11) NOT NULL,
  `table` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `meta`
--

INSERT INTO `meta` (`id`, `meta_description`, `meta_description_ro`, `meta_description_en`, `meta_keywords`, `meta_keywords_ro`, `meta_keywords_en`, `title`, `title_ro`, `title_en`, `table_id`, `table`) VALUES
(1, '', '', '', '', '', '', '', '', '', 40, 'categories'),
(2, 'Desc', '', '', '', 'Key', '', '', '', 'Title', 22, 'products'),
(3, '', '', '', '', '', '', '', '', '', 41, 'categories'),
(4, '', '', '', '', '', '', '', '', '', 42, 'categories'),
(5, '', '', '', '', '', '', '', '', '', 43, 'categories'),
(6, '', '', '', '', '', '', '', '', '', 44, 'categories'),
(7, '', '', '', '', '', '', '', '', '', 46, 'categories'),
(8, '', '', '', '', '', '', '', '', '', 45, 'categories'),
(9, '', '', '', '', '', '', '', '', '', 47, 'categories'),
(10, '', '', '', '', '', '', '', '', '', 48, 'categories'),
(11, '', '', '', '', '', '', '', '', '', 49, 'categories'),
(12, '', '', '', '', '', '', '', '', '', 2, 'lists'),
(13, '', '', '', '', '', '', '', '', '', 11, 'content'),
(14, '', '', '', '', '', '', '', '', '', 12, 'content'),
(15, '', '', '', '', '', '', '', '', '', 10, 'content'),
(16, '', '', '', '', '', '', '', '', '', 13, 'content'),
(17, '', '', '', '', '', '', '', '', '', 14, 'content'),
(18, '', '', '', '', '', '', '', '', '', 15, 'content'),
(19, '', '', '', '', '', '', '', '', '', 16, 'content'),
(20, '', '', '', '', '', '', '', '', '', 17, 'content'),
(21, '1', '', '', '', '2', '', '', '', '3', 18, 'content'),
(22, '', '', '', '', '', '', '', '', '', 19, 'content'),
(23, '', '', '', '', '', '', '', '', '', 4, 'lists'),
(24, '', '', '', '', '', '', '', '', '', 5, 'lists'),
(25, '', '', '', '', '', '', '', '', '', 6, 'lists'),
(26, '', '', '', '', '', '', '', '', '', 23, 'products'),
(27, '', '', '', '', '', '', '', '', '', 7, 'lists'),
(28, '', '', '', '', '', '', '', '', '', 8, 'lists'),
(29, '', '', '', '', '', '', '', '', '', 3, 'lists'),
(30, '', '', '', '', '', '', '', '', '', 9, 'lists');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2016_03_23_125704_create_news', 1),
('2016_04_08_084345_create_content_table', 1),
('2016_04_20_120053_create_tag_table', 1),
('2016_04_20_120306_create_news_tag_table', 1),
('2016_04_21_071344_create_constants', 1),
('2016_04_28_122305_create_photos_table', 1),
('2016_05_25_092458_create_products', 1),
('2016_05_25_103543_create_products_news', 1),
('2016_05_25_111243_create_meta', 1),
('2016_05_25_112336_create_types', 1),
('2016_05_25_112545_create_news_types', 1),
('2016_05_25_113258_create_galleries', 1),
('2016_05_25_113907_create_galleries_xref', 1),
('2016_05_25_115447_create_categories', 1),
('2016_05_25_120511_create_categories_xref', 1),
('2016_05_25_121927_create_videos', 1),
('2016_05_25_122240_menu_products', 1),
('2016_05_25_122425_menu_categories', 1),
('2016_06_06_080747_update_photos_table', 1),
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2016_03_23_125704_create_news', 1),
('2016_04_08_084345_create_content_table', 1),
('2016_04_20_120053_create_tag_table', 1),
('2016_04_20_120306_create_news_tag_table', 1),
('2016_04_21_071344_create_constants', 1),
('2016_04_28_122305_create_photos_table', 1),
('2016_05_25_092458_create_products', 1),
('2016_05_25_103543_create_products_news', 1),
('2016_05_25_111243_create_meta', 1),
('2016_05_25_112336_create_types', 1),
('2016_05_25_112545_create_news_types', 1),
('2016_05_25_113258_create_galleries', 1),
('2016_05_25_113907_create_galleries_xref', 1),
('2016_05_25_115447_create_categories', 1),
('2016_05_25_120511_create_categories_xref', 1),
('2016_05_25_121927_create_videos', 1),
('2016_05_25_122240_menu_products', 1),
('2016_05_25_122425_menu_categories', 1),
('2016_06_06_080747_update_photos_table', 1),
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2016_03_23_125704_create_news', 1),
('2016_04_08_084345_create_content_table', 1),
('2016_04_20_120053_create_tag_table', 1),
('2016_04_20_120306_create_news_tag_table', 1),
('2016_04_21_071344_create_constants', 1),
('2016_04_28_122305_create_photos_table', 1),
('2016_05_25_092458_create_products', 1),
('2016_05_25_103543_create_products_news', 1),
('2016_05_25_111243_create_meta', 1),
('2016_05_25_112336_create_types', 1),
('2016_05_25_112545_create_news_types', 1),
('2016_05_25_113258_create_galleries', 1),
('2016_05_25_113907_create_galleries_xref', 1),
('2016_05_25_115447_create_categories', 1),
('2016_05_25_120511_create_categories_xref', 1),
('2016_05_25_121927_create_videos', 1),
('2016_05_25_122240_menu_products', 1),
('2016_05_25_122425_menu_categories', 1),
('2016_06_06_080747_update_photos_table', 1),
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2016_03_23_125704_create_news', 1),
('2016_04_08_084345_create_content_table', 1),
('2016_04_20_120053_create_tag_table', 1),
('2016_04_20_120306_create_news_tag_table', 1),
('2016_04_21_071344_create_constants', 1),
('2016_04_28_122305_create_photos_table', 1),
('2016_05_25_092458_create_products', 1),
('2016_05_25_103543_create_products_news', 1),
('2016_05_25_111243_create_meta', 1),
('2016_05_25_112336_create_types', 1),
('2016_05_25_112545_create_news_types', 1),
('2016_05_25_113258_create_galleries', 1),
('2016_05_25_113907_create_galleries_xref', 1),
('2016_05_25_115447_create_categories', 1),
('2016_05_25_120511_create_categories_xref', 1),
('2016_05_25_121927_create_videos', 1),
('2016_05_25_122240_menu_products', 1),
('2016_05_25_122425_menu_categories', 1),
('2016_06_23_074721_products_categories', 2),
('2016_07_23_062337_create_videos_xref', 3),
('2016_08_01_083752_update_products', 4),
('2016_08_01_084150_create_recommended_xref', 5),
('2016_08_01_084433_create_features', 6),
('2016_08_01_084832_create_features_products', 6),
('2016_08_01_085333_create_features_values', 6),
('2016_08_01_114433_create_lists', 7);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `name_ro` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `name_en` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `description_ro` text COLLATE utf8_unicode_ci NOT NULL,
  `description_en` text COLLATE utf8_unicode_ci NOT NULL,
  `description_short` text COLLATE utf8_unicode_ci NOT NULL,
  `description_short_ro` text COLLATE utf8_unicode_ci NOT NULL,
  `description_short_en` text COLLATE utf8_unicode_ci NOT NULL,
  `enabled` tinyint(1) NOT NULL DEFAULT '1',
  `top` tinyint(1) NOT NULL,
  `views` int(11) NOT NULL,
  `sort` int(11) NOT NULL,
  `slug` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `news_tags`
--

CREATE TABLE `news_tags` (
  `id` int(10) UNSIGNED NOT NULL,
  `news_id` int(10) UNSIGNED NOT NULL,
  `tags_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `news_types`
--

CREATE TABLE `news_types` (
  `id` int(10) UNSIGNED NOT NULL,
  `news_id` int(10) UNSIGNED NOT NULL,
  `types_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `photos`
--

CREATE TABLE `photos` (
  `id` int(10) UNSIGNED NOT NULL,
  `source` text COLLATE utf8_unicode_ci NOT NULL,
  `table_id` int(11) NOT NULL,
  `table` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `sort` int(11) NOT NULL,
  `token` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `photos`
--

INSERT INTO `photos` (`id`, `source`, `table_id`, `table`, `sort`, `token`) VALUES
(1, 'daisy-expert-sx_1.png', 22, 'products', 1, ''),
(2, 'daisy-expert-sx_2.jpg', 22, 'products', 2, ''),
(4, 'chekovaya-lenta--mm_4.JPG', 23, 'products', 4, ''),
(5, 'microsoft_5.jpg', 7, 'lists', 5, ''),
(6, 'bannerred_6.jpg', 8, 'lists', 6, ''),
(7, 'banner-left_7.jpg', 6, 'lists', 7, ''),
(10, 'slide1_10.jpg', 2, 'lists', 10, ''),
(11, '57a1e67077a23.jpg', 3, 'lists', 11, ''),
(12, '57a1e7120d094.jpg', 0, 'lists', 12, 'bd6a42c8dd9de2f585a77fb8f82df4bcd1f355ba'),
(13, '57a1e749db3fa.jpg', 0, 'lists', 13, '489ffb6707c9bdf2189049cc752dc88905955963'),
(14, 'testovyj-zagolovok_14.jpg', 9, 'lists', 14, '');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `name_ro` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `name_en` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `description_ro` text COLLATE utf8_unicode_ci NOT NULL,
  `description_en` text COLLATE utf8_unicode_ci NOT NULL,
  `description_short` text COLLATE utf8_unicode_ci NOT NULL,
  `description_short_ro` text COLLATE utf8_unicode_ci NOT NULL,
  `description_short_en` text COLLATE utf8_unicode_ci NOT NULL,
  `price` double(15,2) NOT NULL,
  `map` text COLLATE utf8_unicode_ci NOT NULL,
  `enabled` tinyint(1) NOT NULL DEFAULT '1',
  `top` tinyint(1) NOT NULL,
  `views` int(11) NOT NULL,
  `sort` int(11) NOT NULL,
  `slug` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `price_discount` double(8,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `name_ro`, `name_en`, `description`, `description_ro`, `description_en`, `description_short`, `description_short_ro`, `description_short_en`, `price`, `map`, `enabled`, `top`, `views`, `sort`, `slug`, `created_at`, `updated_at`, `price_discount`) VALUES
(22, 'DAISY EXPERT SX', 'DAISY EXPERT SX', '', '<p>Описание</p>\r\n', '<p>Descrierea</p>\r\n', '', 'Короткое описание', 'Descrierea short', '', 1950.00, '', 1, 1, 0, 0, 'daisy-expert-sx', '2016-08-01 21:00:00', '2016-08-03 05:54:26', 1500.00),
(23, 'Чековая лента 44 мм', 'Bandă de primire 44 mm', '', '<p><strong>Кассовая (чековая) лента в рулоне 44мм</strong>&nbsp;- термохимическая однослойная бумажная лента (термобумага) применяется в качестве чековой (контрольной) ленты. Печать чеков на термобумаге происходит на специальных термопринтерах, аналогичных тем, что используются в факс-аппаратах. Термопринтер просто нагревает термобумагу в нужных местах, в которых происходит потемнение термохимического слоя на поверхности бумаги. При этом бумажная лента быстро протягивается относительно нагревающих элементов принтера. Таким образом на термобумаге быстро и бесшумно появляется отчетливое изображение чека.</p>\r\n', '<p><strong>Numerar (cecuri) &icirc;n rola 44mm bandă</strong> - termochimic bandă de h&acirc;rtie cu un singur strat (h&acirc;rtie termică) este utilizată ca (cec) banda de verificare. Imprimați chitanțe pe h&acirc;rtie termică vine &icirc;n imprimantă termică specială, similare cu cele utilizate &icirc;n mașinile de fax. Termică pur și simplu &icirc;ncălzește h&acirc;rtia termică &icirc;n locurile potrivite, &icirc;n care există o &icirc;nchidere la culoare a stratului termo-chimic pe suprafața h&acirc;rtiei. &Icirc;n această bandă de h&acirc;rtie este tras rapid &icirc;n ceea ce privește elementele de &icirc;ncălzire ale imprimantei. Astfel, h&acirc;rtia termică apare rapid și &icirc;n liniște clar imaginea de verificare.</p>\r\n', '', 'Кассовая (чековая) лента в рулоне 44мм - термохимическая однослойная бумажная лента (термобумага) применяется в качестве чековой (контрольной) ленты.', 'Numerar (cecuri) în rola 44mm bandă - termochimic bandă de hârtie cu un singur strat (hârtie termică) este utilizată ca (cec) banda de verificare.', '', 1518.00, '', 1, 1, 0, 0, 'chekovaya-lenta-mm', '2016-08-02 21:00:00', '2016-08-03 07:20:59', 0.00);

-- --------------------------------------------------------

--
-- Table structure for table `products_categories`
--

CREATE TABLE `products_categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `products_id` int(10) UNSIGNED NOT NULL,
  `categories_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `products_categories`
--

INSERT INTO `products_categories` (`id`, `products_id`, `categories_id`) VALUES
(1, 22, 40),
(2, 23, 48);

-- --------------------------------------------------------

--
-- Table structure for table `products_news`
--

CREATE TABLE `products_news` (
  `id` int(10) UNSIGNED NOT NULL,
  `products_id` int(10) UNSIGNED NOT NULL,
  `news_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `recommended_xref`
--

CREATE TABLE `recommended_xref` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` int(11) NOT NULL,
  `recommended_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `top` tinyint(1) NOT NULL,
  `slug` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `types`
--

CREATE TABLE `types` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `name_ro` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `name_en` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `rights` tinyint(4) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `rights`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Xsort', 'support@xsort.md', '$2y$10$twmlb5YlgimkrTIwnKqeauX9JusORUAVWnjjK1jBhM0AQwJW/3RIy', 1, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `name_ro` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `name_en` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `description_ro` text COLLATE utf8_unicode_ci NOT NULL,
  `description_en` text COLLATE utf8_unicode_ci NOT NULL,
  `description_short` text COLLATE utf8_unicode_ci NOT NULL,
  `description_short_ro` text COLLATE utf8_unicode_ci NOT NULL,
  `description_short_en` text COLLATE utf8_unicode_ci NOT NULL,
  `source` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `enabled` tinyint(1) NOT NULL DEFAULT '1',
  `views` int(11) NOT NULL,
  `sort` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `videos_xref`
--

CREATE TABLE `videos_xref` (
  `id` int(10) UNSIGNED NOT NULL,
  `videos_id` int(10) UNSIGNED NOT NULL,
  `table_id` int(11) NOT NULL,
  `table` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_slug` (`slug`);

--
-- Indexes for table `categories_xref`
--
ALTER TABLE `categories_xref`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_parent_id` (`parent_id`),
  ADD KEY `idx_child_id` (`child_id`);

--
-- Indexes for table `constants`
--
ALTER TABLE `constants`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `constants_key_unique` (`key`);

--
-- Indexes for table `content`
--
ALTER TABLE `content`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_slug` (`slug`);

--
-- Indexes for table `features`
--
ALTER TABLE `features`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `features_products`
--
ALTER TABLE `features_products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `features_products_products_id_foreign` (`products_id`),
  ADD KEY `features_products_features_id_foreign` (`features_id`),
  ADD KEY `features_products_value_index` (`value`);

--
-- Indexes for table `features_values`
--
ALTER TABLE `features_values`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_slug` (`slug`);

--
-- Indexes for table `galleries_xref`
--
ALTER TABLE `galleries_xref`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_table_id` (`table_id`),
  ADD KEY `idx_table` (`table`);

--
-- Indexes for table `lists`
--
ALTER TABLE `lists`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lists_parent_id_index` (`parent_id`),
  ADD KEY `lists_slug_index` (`slug`);

--
-- Indexes for table `menu_categories`
--
ALTER TABLE `menu_categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_slug` (`slug`);

--
-- Indexes for table `menu_products`
--
ALTER TABLE `menu_products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_slug` (`slug`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `meta`
--
ALTER TABLE `meta`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_table_id` (`table_id`),
  ADD KEY `idx_table` (`table`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_slug` (`slug`);

--
-- Indexes for table `news_tags`
--
ALTER TABLE `news_tags`
  ADD PRIMARY KEY (`id`),
  ADD KEY `news_tags_news_id_foreign` (`news_id`),
  ADD KEY `news_tags_tags_id_foreign` (`tags_id`);

--
-- Indexes for table `news_types`
--
ALTER TABLE `news_types`
  ADD PRIMARY KEY (`id`),
  ADD KEY `news_types_news_id_foreign` (`news_id`),
  ADD KEY `news_types_types_id_foreign` (`types_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_table_id` (`table_id`),
  ADD KEY `idx_table` (`table`),
  ADD KEY `idx_sort` (`sort`),
  ADD KEY `photos_token_index` (`token`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_slug` (`slug`);

--
-- Indexes for table `products_categories`
--
ALTER TABLE `products_categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_categories_products_id_foreign` (`products_id`),
  ADD KEY `products_categories_categories_id_foreign` (`categories_id`);

--
-- Indexes for table `products_news`
--
ALTER TABLE `products_news`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_news_products_id_foreign` (`products_id`),
  ADD KEY `products_news_news_id_foreign` (`news_id`);

--
-- Indexes for table `recommended_xref`
--
ALTER TABLE `recommended_xref`
  ADD PRIMARY KEY (`id`),
  ADD KEY `recommended_xref_product_id_index` (`product_id`),
  ADD KEY `recommended_xref_recommended_id_index` (`recommended_id`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tags_name_unique` (`name`),
  ADD KEY `idx_slug` (`slug`);

--
-- Indexes for table `types`
--
ALTER TABLE `types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `videos_xref`
--
ALTER TABLE `videos_xref`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_table_id` (`table_id`),
  ADD KEY `idx_table` (`table`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
--
-- AUTO_INCREMENT for table `categories_xref`
--
ALTER TABLE `categories_xref`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `constants`
--
ALTER TABLE `constants`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `content`
--
ALTER TABLE `content`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `features`
--
ALTER TABLE `features`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `features_products`
--
ALTER TABLE `features_products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `features_values`
--
ALTER TABLE `features_values`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `galleries_xref`
--
ALTER TABLE `galleries_xref`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `lists`
--
ALTER TABLE `lists`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `menu_categories`
--
ALTER TABLE `menu_categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `menu_products`
--
ALTER TABLE `menu_products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `meta`
--
ALTER TABLE `meta`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `news_tags`
--
ALTER TABLE `news_tags`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `news_types`
--
ALTER TABLE `news_types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `photos`
--
ALTER TABLE `photos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `products_categories`
--
ALTER TABLE `products_categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `products_news`
--
ALTER TABLE `products_news`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `recommended_xref`
--
ALTER TABLE `recommended_xref`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `types`
--
ALTER TABLE `types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `videos_xref`
--
ALTER TABLE `videos_xref`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `features_products`
--
ALTER TABLE `features_products`
  ADD CONSTRAINT `features_products_features_id_foreign` FOREIGN KEY (`features_id`) REFERENCES `features` (`id`);

--
-- Constraints for table `news_tags`
--
ALTER TABLE `news_tags`
  ADD CONSTRAINT `news_tags_news_id_foreign` FOREIGN KEY (`news_id`) REFERENCES `news` (`id`),
  ADD CONSTRAINT `news_tags_tags_id_foreign` FOREIGN KEY (`tags_id`) REFERENCES `tags` (`id`);

--
-- Constraints for table `news_types`
--
ALTER TABLE `news_types`
  ADD CONSTRAINT `news_types_news_id_foreign` FOREIGN KEY (`news_id`) REFERENCES `news` (`id`),
  ADD CONSTRAINT `news_types_types_id_foreign` FOREIGN KEY (`types_id`) REFERENCES `types` (`id`);

--
-- Constraints for table `products_categories`
--
ALTER TABLE `products_categories`
  ADD CONSTRAINT `products_categories_categories_id_foreign` FOREIGN KEY (`categories_id`) REFERENCES `categories` (`id`),
  ADD CONSTRAINT `products_categories_products_id_foreign` FOREIGN KEY (`products_id`) REFERENCES `products` (`id`);

--
-- Constraints for table `products_news`
--
ALTER TABLE `products_news`
  ADD CONSTRAINT `products_news_news_id_foreign` FOREIGN KEY (`news_id`) REFERENCES `news` (`id`),
  ADD CONSTRAINT `products_news_products_id_foreign` FOREIGN KEY (`products_id`) REFERENCES `products` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
