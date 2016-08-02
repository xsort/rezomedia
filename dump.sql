-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Авг 02 2016 г., 14:48
-- Версия сервера: 10.1.10-MariaDB
-- Версия PHP: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `rezomedia`
--

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
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

-- --------------------------------------------------------

--
-- Структура таблицы `categories_xref`
--

CREATE TABLE `categories_xref` (
  `id` int(10) UNSIGNED NOT NULL,
  `parent_id` int(11) NOT NULL,
  `child_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `constants`
--

CREATE TABLE `constants` (
  `id` int(10) UNSIGNED NOT NULL,
  `key` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `value` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `content`
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
-- Дамп данных таблицы `content`
--

INSERT INTO `content` (`id`, `name`, `name_en`, `name_ro`, `description`, `description_en`, `description_ro`, `enabled`, `views`, `slug`, `created_at`, `updated_at`) VALUES
(3, 'Об Allevents', 'Об Allevents', 'Об Allevents', '<p>Здесь будет описание о сайте Allevents</p>\r\n', '<p>Здесь будет описание о сайте Allevents EN</p>\r\n', '<p>Здесь будет описание о сайте Allevents RO</p>\r\n', 1, 0, 'about', '2016-06-26 21:00:00', '2016-08-02 05:07:46'),
(4, 'Отчеты', '', '', '<p>Здесь будут отчеты</p>\r\n', '<p>Здесь будут отчеты</p>\r\n', '<p>Здесь будут отчеты</p>\r\n', 1, 0, 'reports', '2016-06-26 09:59:26', '2016-06-26 09:59:26'),
(5, 'Акции', '', '', '<p>Здесь будут акции</p>\r\n', '<p>Здесь будут акции</p>\r\n', '<p>Здесь будут акции</p>\r\n', 1, 0, 'promo', '2016-06-26 10:00:07', '2016-06-26 10:00:07'),
(6, 'Экслюзив', 'Экслюзив', 'Экслюзив', '<p>Здесь будет выводиться экслюзив</p>\r\n', '<p>Здесь будет выводиться экслюзив</p>\r\n', '<p>Здесь будет выводиться экслюзив</p>\r\n', 1, 0, 'exclusive', '2016-06-26 10:00:55', '2016-06-26 10:00:55'),
(7, 'Контакты', 'Контакты', 'Контакты', '<p>Здесь будет информация наши&nbsp;контакты</p>\r\n', '<p>Здесь будет информация наши&nbsp;контакты</p>\r\n', '<p>Здесь будет информация наши&nbsp;контакты</p>\r\n', 1, 0, 'contacts', '2016-06-26 10:04:29', '2016-06-26 10:04:29'),
(8, 'Реклама', 'Реклама', 'Реклама', '<p>Сдесь будет реклама</p>\r\n', '<p>Сдесь будет реклама</p>\r\n', '<p>Сдесь будет реклама</p>\r\n', 1, 0, 'advert', '2016-06-26 10:04:56', '2016-06-26 10:04:56'),
(9, 'Права', 'Права', 'Права', '<p>здесь будут права</p>\r\n', '<p>здесь будут права</p>\r\n', '<p>здесь будут права</p>\r\n', 1, 0, 'copyright', '2016-06-26 10:06:19', '2016-06-26 10:06:19'),
(10, 'Карта сайта', 'Карта сайта', 'Карта сайта', '<p>Сдесь будет карта сайта</p>\r\n', '<p>Сдесь будет карта сайта</p>\r\n', '<p>Сдесь будет карта сайта</p>\r\n', 1, 0, 'sitemap', '2016-06-26 10:07:09', '2016-06-26 10:07:09');

-- --------------------------------------------------------

--
-- Структура таблицы `features`
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
-- Дамп данных таблицы `features`
--

INSERT INTO `features` (`id`, `name`, `name_ro`, `name_en`, `description`, `description_ro`, `description_en`, `enabled`, `sort`, `created_at`, `updated_at`) VALUES
(1, 'Ширина ленты', '', '', '', '', '', 1, 0, NULL, NULL),
(2, 'Тип аппарата', '', '', '', '', '', 1, 0, NULL, NULL),
(3, 'Питание', '', '', '', '', '', 1, 0, NULL, NULL),
(4, 'Интерфейс', '', '', '', '', '', 1, 0, NULL, NULL),
(5, 'Бренд', '', '', '', '', '', 1, 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `features_products`
--

CREATE TABLE `features_products` (
  `id` int(10) UNSIGNED NOT NULL,
  `products_id` int(10) UNSIGNED NOT NULL,
  `features_id` int(10) UNSIGNED NOT NULL,
  `value` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `features_products`
--

INSERT INTO `features_products` (`id`, `products_id`, `features_id`, `value`) VALUES
(1, 7, 1, 3),
(2, 7, 2, 0),
(3, 7, 3, 0),
(4, 7, 4, 0),
(5, 7, 5, 8);

-- --------------------------------------------------------

--
-- Структура таблицы `features_values`
--

CREATE TABLE `features_values` (
  `id` int(10) UNSIGNED NOT NULL,
  `features_id` int(11) NOT NULL,
  `name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `name_ro` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `name_en` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `features_values`
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
-- Структура таблицы `galleries`
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
-- Структура таблицы `galleries_xref`
--

CREATE TABLE `galleries_xref` (
  `id` int(10) UNSIGNED NOT NULL,
  `galleries_id` int(10) UNSIGNED NOT NULL,
  `table_id` int(11) NOT NULL,
  `table` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `lists`
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
-- Дамп данных таблицы `lists`
--

INSERT INTO `lists` (`id`, `name`, `name_ro`, `name_en`, `description`, `description_ro`, `description_en`, `description_short`, `description_short_ro`, `description_short_en`, `parent_id`, `enabled`, `views`, `sort`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Слайдер', '', '', '<p>123</p>\r\n', '<p>456</p>\r\n', '<p>789</p>\r\n', 'dsaasdasdas', '', '', 0, 1, 0, 0, 'slider', '2016-08-01 21:00:00', '2016-08-02 04:45:06'),
(2, 'Слайд 1', '', '', '', '', '', '', '', '', 1, 1, 0, 0, 'slide1', '2016-08-01 21:00:00', '2016-08-02 04:45:39'),
(3, 'Слайд 2', '', '', '', '', '', '', '', '', 1, 1, 0, 0, 'slide2', '2016-08-01 21:00:00', '2016-08-02 04:46:19');

-- --------------------------------------------------------

--
-- Структура таблицы `menu_categories`
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
-- Структура таблицы `menu_products`
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
-- Структура таблицы `meta`
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

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `migrations`
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
-- Структура таблицы `news`
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
-- Структура таблицы `news_tags`
--

CREATE TABLE `news_tags` (
  `id` int(10) UNSIGNED NOT NULL,
  `news_id` int(10) UNSIGNED NOT NULL,
  `tags_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `news_types`
--

CREATE TABLE `news_types` (
  `id` int(10) UNSIGNED NOT NULL,
  `news_id` int(10) UNSIGNED NOT NULL,
  `types_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `photos`
--

CREATE TABLE `photos` (
  `id` int(10) UNSIGNED NOT NULL,
  `source` text COLLATE utf8_unicode_ci NOT NULL,
  `table_id` int(11) NOT NULL,
  `table` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `sort` int(11) NOT NULL,
  `token` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `products`
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

-- --------------------------------------------------------

--
-- Структура таблицы `products_categories`
--

CREATE TABLE `products_categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `products_id` int(10) UNSIGNED NOT NULL,
  `categories_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `products_news`
--

CREATE TABLE `products_news` (
  `id` int(10) UNSIGNED NOT NULL,
  `products_id` int(10) UNSIGNED NOT NULL,
  `news_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `recommended_xref`
--

CREATE TABLE `recommended_xref` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` int(11) NOT NULL,
  `recommended_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `tags`
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
-- Структура таблицы `types`
--

CREATE TABLE `types` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `name_ro` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `name_en` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `users`
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
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `rights`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Xsort', 'support@xsort.md', '$2y$10$twmlb5YlgimkrTIwnKqeauX9JusORUAVWnjjK1jBhM0AQwJW/3RIy', 1, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `videos`
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
-- Структура таблицы `videos_xref`
--

CREATE TABLE `videos_xref` (
  `id` int(10) UNSIGNED NOT NULL,
  `videos_id` int(10) UNSIGNED NOT NULL,
  `table_id` int(11) NOT NULL,
  `table` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_slug` (`slug`);

--
-- Индексы таблицы `categories_xref`
--
ALTER TABLE `categories_xref`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_parent_id` (`parent_id`),
  ADD KEY `idx_child_id` (`child_id`);

--
-- Индексы таблицы `constants`
--
ALTER TABLE `constants`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `constants_key_unique` (`key`);

--
-- Индексы таблицы `content`
--
ALTER TABLE `content`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_slug` (`slug`);

--
-- Индексы таблицы `features`
--
ALTER TABLE `features`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `features_products`
--
ALTER TABLE `features_products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `features_products_products_id_foreign` (`products_id`),
  ADD KEY `features_products_features_id_foreign` (`features_id`),
  ADD KEY `features_products_value_index` (`value`);

--
-- Индексы таблицы `features_values`
--
ALTER TABLE `features_values`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_slug` (`slug`);

--
-- Индексы таблицы `galleries_xref`
--
ALTER TABLE `galleries_xref`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_table_id` (`table_id`),
  ADD KEY `idx_table` (`table`);

--
-- Индексы таблицы `lists`
--
ALTER TABLE `lists`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lists_parent_id_index` (`parent_id`),
  ADD KEY `lists_slug_index` (`slug`);

--
-- Индексы таблицы `menu_categories`
--
ALTER TABLE `menu_categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_slug` (`slug`);

--
-- Индексы таблицы `menu_products`
--
ALTER TABLE `menu_products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_slug` (`slug`),
  ADD KEY `product_id` (`product_id`);

--
-- Индексы таблицы `meta`
--
ALTER TABLE `meta`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_table_id` (`table_id`),
  ADD KEY `idx_table` (`table`);

--
-- Индексы таблицы `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_slug` (`slug`);

--
-- Индексы таблицы `news_tags`
--
ALTER TABLE `news_tags`
  ADD PRIMARY KEY (`id`),
  ADD KEY `news_tags_news_id_foreign` (`news_id`),
  ADD KEY `news_tags_tags_id_foreign` (`tags_id`);

--
-- Индексы таблицы `news_types`
--
ALTER TABLE `news_types`
  ADD PRIMARY KEY (`id`),
  ADD KEY `news_types_news_id_foreign` (`news_id`),
  ADD KEY `news_types_types_id_foreign` (`types_id`);

--
-- Индексы таблицы `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Индексы таблицы `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_table_id` (`table_id`),
  ADD KEY `idx_table` (`table`),
  ADD KEY `idx_sort` (`sort`),
  ADD KEY `photos_token_index` (`token`);

--
-- Индексы таблицы `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_slug` (`slug`);

--
-- Индексы таблицы `products_categories`
--
ALTER TABLE `products_categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_categories_products_id_foreign` (`products_id`),
  ADD KEY `products_categories_categories_id_foreign` (`categories_id`);

--
-- Индексы таблицы `products_news`
--
ALTER TABLE `products_news`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_news_products_id_foreign` (`products_id`),
  ADD KEY `products_news_news_id_foreign` (`news_id`);

--
-- Индексы таблицы `recommended_xref`
--
ALTER TABLE `recommended_xref`
  ADD PRIMARY KEY (`id`),
  ADD KEY `recommended_xref_product_id_index` (`product_id`),
  ADD KEY `recommended_xref_recommended_id_index` (`recommended_id`);

--
-- Индексы таблицы `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tags_name_unique` (`name`),
  ADD KEY `idx_slug` (`slug`);

--
-- Индексы таблицы `types`
--
ALTER TABLE `types`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Индексы таблицы `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `videos_xref`
--
ALTER TABLE `videos_xref`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_table_id` (`table_id`),
  ADD KEY `idx_table` (`table`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
--
-- AUTO_INCREMENT для таблицы `categories_xref`
--
ALTER TABLE `categories_xref`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `constants`
--
ALTER TABLE `constants`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `content`
--
ALTER TABLE `content`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT для таблицы `features`
--
ALTER TABLE `features`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT для таблицы `features_products`
--
ALTER TABLE `features_products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT для таблицы `features_values`
--
ALTER TABLE `features_values`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT для таблицы `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT для таблицы `galleries_xref`
--
ALTER TABLE `galleries_xref`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `lists`
--
ALTER TABLE `lists`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT для таблицы `menu_categories`
--
ALTER TABLE `menu_categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT для таблицы `menu_products`
--
ALTER TABLE `menu_products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT для таблицы `meta`
--
ALTER TABLE `meta`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `news`
--
ALTER TABLE `news`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT для таблицы `news_tags`
--
ALTER TABLE `news_tags`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT для таблицы `news_types`
--
ALTER TABLE `news_types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `photos`
--
ALTER TABLE `photos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT для таблицы `products_categories`
--
ALTER TABLE `products_categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `products_news`
--
ALTER TABLE `products_news`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `recommended_xref`
--
ALTER TABLE `recommended_xref`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `tags`
--
ALTER TABLE `tags`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT для таблицы `types`
--
ALTER TABLE `types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT для таблицы `videos`
--
ALTER TABLE `videos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT для таблицы `videos_xref`
--
ALTER TABLE `videos_xref`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `features_products`
--
ALTER TABLE `features_products`
  ADD CONSTRAINT `features_products_features_id_foreign` FOREIGN KEY (`features_id`) REFERENCES `features` (`id`);

--
-- Ограничения внешнего ключа таблицы `news_tags`
--
ALTER TABLE `news_tags`
  ADD CONSTRAINT `news_tags_news_id_foreign` FOREIGN KEY (`news_id`) REFERENCES `news` (`id`),
  ADD CONSTRAINT `news_tags_tags_id_foreign` FOREIGN KEY (`tags_id`) REFERENCES `tags` (`id`);

--
-- Ограничения внешнего ключа таблицы `news_types`
--
ALTER TABLE `news_types`
  ADD CONSTRAINT `news_types_news_id_foreign` FOREIGN KEY (`news_id`) REFERENCES `news` (`id`),
  ADD CONSTRAINT `news_types_types_id_foreign` FOREIGN KEY (`types_id`) REFERENCES `types` (`id`);

--
-- Ограничения внешнего ключа таблицы `products_categories`
--
ALTER TABLE `products_categories`
  ADD CONSTRAINT `products_categories_categories_id_foreign` FOREIGN KEY (`categories_id`) REFERENCES `categories` (`id`),
  ADD CONSTRAINT `products_categories_products_id_foreign` FOREIGN KEY (`products_id`) REFERENCES `products` (`id`);

--
-- Ограничения внешнего ключа таблицы `products_news`
--
ALTER TABLE `products_news`
  ADD CONSTRAINT `products_news_news_id_foreign` FOREIGN KEY (`news_id`) REFERENCES `news` (`id`),
  ADD CONSTRAINT `products_news_products_id_foreign` FOREIGN KEY (`products_id`) REFERENCES `products` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
