-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Авг 23 2016 г., 15:35
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

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`id`, `name`, `name_ro`, `name_en`, `description`, `description_ro`, `description_en`, `description_short`, `description_short_ro`, `description_short_en`, `menu_type_id`, `enabled`, `top`, `views`, `sort`, `slug`, `created_at`, `updated_at`) VALUES
(40, 'Кассовые аппараты', 'Case de marcat', '', '', '', '', '', '', '', 0, 1, 0, 0, 0, 'kassovye-apparaty', '2016-08-01 21:00:00', '2016-08-03 09:55:02'),
(41, 'Купюросчетные машинки', 'Masini de numarat bancnote', '', '', '', '', '', '', '', 0, 1, 0, 0, 0, 'kupyuroschetnye-mashinki', '2016-08-01 21:00:00', '2016-08-03 03:59:54'),
(42, 'Детекторы валют ', 'Detectoare de valută ', '', '', '', '', '', '', '', 0, 1, 0, 0, 0, 'detektory-valyut', '2016-08-02 21:00:00', '2016-08-10 09:56:47'),
(43, 'Сканеры', 'Scanere', '', '', '', '', '', '', '', 0, 1, 0, 0, 0, 'skanery', '2016-08-02 21:00:00', '2016-08-03 02:25:46'),
(44, 'Весы', 'Balanța', '', '', '', '', '', '', '', 0, 1, 0, 0, 0, 'vesy', '2016-08-02 21:00:00', '2016-08-03 02:26:01'),
(47, 'Денежные ящики', 'Sertare de bani', '', '', '', '', '', '', '', 0, 1, 0, 0, 0, 'denezhnye-yashhiki', '2016-08-02 21:00:00', '2016-08-03 02:26:44'),
(48, 'Чековая лента', 'Bandă de primire', '', '', '', '', '', '', '', 0, 1, 0, 0, 0, 'chekovaya-lenta', '2016-08-02 21:00:00', '2016-08-03 02:27:14'),
(49, 'Все в одном ( ПК+Монитор )', 'Toate într-un singur (PC + monitor)', '', '', '', '', '', '', '', 0, 1, 0, 0, 0, 'vse-v-odnom-pkmonitor', '2016-08-02 21:00:00', '2016-08-03 03:58:35');

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
(10, 'Техническое обслуживание', '', 'Intretinerea', '<p>страница техническое обслуживание</p>\r\n', '', '<p>Pagina&nbsp;Intretinerea</p>\r\n', 1, 0, 'tech-support', '2016-06-25 21:00:00', '2016-08-03 06:18:28'),
(11, 'Ремонт', '', 'Reparație', '<p>Страница ремонта</p>\r\n', '', '<p>Pagina reparatie</p>\r\n', 1, 0, 'repair', '2016-08-02 21:00:00', '2016-08-03 06:18:11'),
(12, 'Снятие с учета', '', 'Îndepărtarea din registru', '<p>Страница снятие с учета</p>\r\n', '', '<p>Pagina indepartarii din registru</p>\r\n', 1, 0, 'remove', '2016-08-02 21:00:00', '2016-08-03 06:17:54'),
(13, 'Регистрации', '', 'Înregistrare', '<p>Страница регистрации</p>\r\n', '', '<p>Pagina inregistrarii</p>\r\n', 1, 0, 'registration', '2016-08-02 21:00:00', '2016-08-03 06:17:32'),
(14, 'Законодательство', '', 'Legislație', '<p><strong><a href="http://lex.justice.md/viewdoc.php?action=view&amp;view=doc&amp;id=296361&amp;lang=2">1. ПОСТАНОВЛЕНИЕ Nr. 474 от 28.04.1998 о применении контрольно-кассовых машин с фискальнойпамятью при расчетах наличными</a></strong></p>\r\n\r\n<p><strong><a href="http://lex.justice.md/index.php?action=view&amp;view=doc&amp;lang=2&amp;id=313445">2. ПОЛОЖЕНИЕ Nr. 2407 on 24.07.1998 о порядке эксплуатации контрольно-кассовых машин с фискальной памятью</a></strong></p>\r\n\r\n<p>3. Единый реестр контрольно-кассовых машин (обновлено 28.09.2015)</p>\r\n\r\n<p>4. Приказ Министрa финансов № 146 с 23 октября 2014 oб утверждении Положения о порядке регистрации и осуществления контроля за использованием контрольно-кассовых машин</p>\r\n', '', '<p>Pagina legislatie</p>\r\n', 1, 0, 'legislation', '2016-08-02 21:00:00', '2016-08-22 08:24:03'),
(15, 'Инструкции', '', 'Instrucțiuni', '<p>Страница инструкции</p>\r\n', '', '<p>Pagina instructiunii</p>\r\n', 1, 0, 'instructions', '2016-08-02 21:00:00', '2016-08-03 06:16:42'),
(16, 'Бланки', '', 'Blancuri', '<p>Страница бланки</p>\r\n', '', '<p>Pagina blancuri</p>\r\n', 1, 0, 'forms', '2016-08-02 21:00:00', '2016-08-03 06:16:19'),
(17, 'Драйверы', '', 'Driverii', '<p>Страница драйверы</p>\r\n', '', '<p>Pagina driverii</p>\r\n', 1, 0, 'drivers', '2016-08-02 21:00:00', '2016-08-03 06:16:02'),
(18, 'Программы', '', 'Programe', '<p>Страница программы</p>\r\n', '', '<p>Pagine programe</p>\r\n', 1, 0, 'programs', '2016-08-02 21:00:00', '2016-08-03 06:15:43'),
(19, 'Автоматизация торговли', '', 'Automatizarea comerțului', '<p>Страница автоматизации&nbsp;торговли</p>\r\n', '', '<p>Pagina automatizarea comerțului</p>\r\n', 1, 0, 'trade-automation', '2016-08-02 21:00:00', '2016-08-03 06:13:53');

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
(1, 'Ширина ленты', 'Lăţimea benzii', '', '', '', '', 1, 0, NULL, NULL),
(2, 'Тип аппарата', 'Tipul de vehicul', '', '', '', '', 1, 0, NULL, NULL),
(3, 'Питание', 'Putere', '', '', '', '', 1, 0, NULL, NULL),
(4, 'Интерфейс', 'Interfață', '', '', '', '', 1, 0, NULL, NULL),
(5, 'Бренд', 'Brand', '', '', '', '', 1, 0, NULL, NULL);

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
(5, 7, 5, 8),
(6, 22, 1, 1),
(7, 22, 2, 12),
(8, 22, 3, 15),
(9, 22, 4, 17),
(10, 22, 5, 8),
(11, 23, 1, 0),
(12, 23, 2, 0),
(13, 23, 3, 0),
(14, 23, 4, 0),
(15, 23, 5, 0),
(16, 24, 1, 4),
(17, 24, 2, 13),
(18, 24, 3, 15),
(19, 24, 4, 19),
(20, 24, 5, 7),
(21, 25, 1, 4),
(22, 25, 2, 12),
(23, 25, 3, 15),
(24, 25, 4, 17),
(25, 25, 5, 8),
(26, 26, 1, 1),
(27, 26, 2, 14),
(28, 26, 3, 15),
(29, 26, 4, 17),
(30, 26, 5, 8),
(37, 27, 4, 18),
(38, 27, 4, 17),
(39, 27, 1, 1),
(40, 27, 2, 12),
(41, 27, 3, 15),
(42, 27, 5, 7);

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
(11, 5, 'Aclas', 'Aclas', 'Aclas'),
(12, 2, 'портативный', 'portabil', 'портативный'),
(13, 2, 'стационарный', 'staționar', 'стационарный'),
(14, 2, 'фискальный регистратор', 'aparat fiscal', 'фискальный регистратор'),
(15, 3, 'с АКБ', 'с АКБ', 'с АКБ'),
(16, 3, 'без АКБ', 'без АКБ', 'без АКБ'),
(17, 4, 'USB', 'USB', 'USB'),
(18, 4, 'LAN', 'LAN', 'LAN'),
(19, 4, 'rs232', 'rs232', 'rs232');

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
(4, 'Баннеры', '', '', '', '', '', '', '', '', 0, 1, 0, 0, 'banners', '2016-08-02 21:00:00', '2016-08-03 05:14:03'),
(5, 'Партнеры', '', '', '', '', '', '', '', '', 0, 1, 0, 0, 'partners', '2016-08-02 21:00:00', '2016-08-03 05:14:19'),
(6, 'banner-left', '', '', '', '', '', 'xsort.md', 'xsort.md', '', 4, 1, 0, 0, 'banner-left', '2016-08-02 21:00:00', '2016-08-03 07:57:05'),
(7, 'MIcrosoft', '', '', '', '', '', 'xsort.md', 'xsort.md', '', 5, 1, 0, 0, 'microsoft', '2016-08-02 21:00:00', '2016-08-03 07:44:20'),
(8, 'banner-red', '', '', '', '', '', 'google.ru', 'google.ru', '', 4, 1, 0, 0, 'bannerred', '2016-08-02 21:00:00', '2016-08-03 07:53:49'),
(9, 'Тестовый заголовок', 'Title test', '', '', '', '', 'Тестовое описание', 'Descrierea test', '', 1, 1, 0, 0, 'testovyj-zagolovok', '2016-08-02 21:00:00', '2016-08-03 09:56:02'),
(10, 'Заголовок 2', '', '', '', '', '', 'описание лрпшгыыв авы агш ывршщга', '', '', 1, 1, 0, 0, 'zagolovok2', '2016-08-03 21:00:00', '2016-08-04 11:29:16'),
(11, 'Simpals', 'Simpals', '', '', '', '', 'test.md', 'test.md', '', 5, 1, 0, 0, 'simpals', '2016-08-15 21:00:00', '2016-08-16 04:18:51'),
(12, 'Сопутствующие товары', '', '', '', '', '', '', '', '', 0, 1, 0, 0, 'additional-products', '2016-08-16 21:00:00', '2016-08-17 09:13:28'),
(13, 'Технический журнал', 'Registru asistenta tehnica MCC', '', '', '', '', '30', '30', '', 12, 1, 0, 0, 'm-journal', '2016-08-16 21:00:00', '2016-08-22 07:44:29'),
(18, 'Пломба', 'Sigiliu', '', '', '', '', '15', '15', '', 12, 1, 0, 0, 'm-plomb', '2016-08-16 21:00:00', '2016-08-22 07:44:03'),
(19, 'Журнал кассира', 'Registru masini de casa si control', '', '', '', '', '30', '30', '', 12, 1, 0, 0, 'm-cashier', '2016-08-16 21:00:00', '2016-08-22 07:44:16'),
(20, 'Ввод в эксплуатацию', 'Dare in exploatare MCC', '', '', '', '', '320', '320', '', 12, 1, 0, 0, 'm-exploitation', '2016-08-16 21:00:00', '2016-08-22 07:44:41'),
(21, 'Текстовые характеристики', '', '', '', '', '', '', '', '', 0, 1, 0, 0, 'features-custom', '2016-08-22 21:00:00', '2016-08-23 09:57:33'),
(22, 'Длина', '', '', '', '', '', '', '', '', 21, 1, 0, 0, 'dlina', '2016-08-22 21:00:00', '2016-08-23 09:59:20'),
(23, 'Ширина', '', '', '', '', '', '', '', '', 21, 1, 0, 0, 'shirina', '2016-08-22 21:00:00', '2016-08-23 09:59:28');

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

--
-- Дамп данных таблицы `meta`
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
(30, '', '', '', '', '', '', '', '', '', 9, 'lists'),
(31, '', '', '', '', '', '', '', '', '', 10, 'lists'),
(32, '', '', '', '', '', '', '', '', '', 24, 'products'),
(33, '', '', '', '', '', '', '', '', '', 25, 'products'),
(34, '', '', '', '', '', '', '', '', '', 11, 'lists'),
(35, '', '', '', '', '', '', '', '', '', 12, 'lists'),
(36, '', '', '', '', '', '', '', '', '', 13, 'lists'),
(37, '', '', '', '', '', '', '', '', '', 14, 'lists'),
(38, '', '', '', '', '', '', '', '', '', 15, 'lists'),
(39, '', '', '', '', '', '', '', '', '', 16, 'lists'),
(40, '', '', '', '', '', '', '', '', '', 17, 'lists'),
(41, '', '', '', '', '', '', '', '', '', 18, 'lists'),
(42, '', '', '', '', '', '', '', '', '', 19, 'lists'),
(43, '', '', '', '', '', '', '', '', '', 20, 'lists'),
(44, '', '', '', '', '', '', '', '', '', 26, 'products'),
(45, '', '', '', '', '', '', '', '', '', 27, 'products'),
(46, '', '', '', '', '', '', '', '', '', 21, 'lists'),
(47, '', '', '', '', '', '', '', '', '', 22, 'lists'),
(48, '', '', '', '', '', '', '', '', '', 23, 'lists');

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
('2016_08_01_114433_create_lists', 7),
('2016_08_04_132810_update_products', 8),
('2016_08_16_105545_create_orders', 9);

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
-- Структура таблицы `orders`
--

CREATE TABLE `orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `phone` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `fiscal` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `company` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `filename` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `comments` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `orders`
--

INSERT INTO `orders` (`id`, `phone`, `fiscal`, `company`, `name`, `address`, `filename`, `comments`, `created_at`, `updated_at`) VALUES
(1, '3123123123', '12312312312312', '312312', '312312', '31233123123', '', '12312312312312', '2016-08-16 08:19:37', '2016-08-16 08:19:37'),
(2, '312321', '32131232', 'dasd', 'asdsads', 'adsad', '', 'dsadas', '2016-08-16 10:54:25', '2016-08-16 10:54:25'),
(3, '37369335875', '1008600098392131', 'Xsort SRL ', 'Антон', 'dssadsadasdasdas', '', 'dasdsadasdasdasdasdas выа ваыва ыва ыв', '2016-08-16 12:05:48', '2016-08-16 12:05:48'),
(4, '069308306', '1008600053395', 'Xsort', 'Alex', 'Pietrarilor 2', '', 'Segodnia', '2016-08-17 04:46:32', '2016-08-17 04:46:32'),
(5, '456546456', '345435435435', '', '', '', '', '', '2016-08-17 04:47:17', '2016-08-17 04:47:17'),
(6, '123123', '123213123', 'dasdasd', 'sadasd', 'asdasdad', '', 'dsadsad', '2016-08-17 04:47:18', '2016-08-17 04:47:18'),
(7, '456546456', '345435435435', '', '', '', '', '', '2016-08-17 04:47:42', '2016-08-17 04:47:42'),
(8, '069308306', '1008600053395', 'Xsort', 'Alex', '', '', '', '2016-08-17 04:48:52', '2016-08-17 04:48:52'),
(9, '12345', '12345678', '', '', '', '', '', '2016-08-17 04:48:59', '2016-08-17 04:48:59'),
(10, '37378584222', '222222222222', 'alexzc', 'алекс', '123', '', '134', '2016-08-17 08:59:19', '2016-08-17 08:59:19'),
(11, '069400040', '1007600000934', '', '', '', '', '', '2016-08-22 05:27:25', '2016-08-22 05:27:25'),
(12, '78646456746', '1007600000934', '', '', '', '', '', '2016-08-22 05:39:01', '2016-08-22 05:39:01'),
(13, '123333', '1111111111', 'alexzc', 'alexandru', '', '', '', '2016-08-22 06:33:03', '2016-08-22 06:33:03'),
(14, '123333', '1111111111', 'alexzc', 'alexandru', '', '', '', '2016-08-22 06:36:48', '2016-08-22 06:36:48'),
(15, '111111111111', '1111111111111', 'alex', 'alexandru', '', '', '', '2016-08-22 06:37:25', '2016-08-22 06:37:25'),
(16, '123455', '232323232', 'skkkk', 'sss', '', '', '', '2016-08-22 06:39:48', '2016-08-22 06:39:48'),
(17, '1111111', '1111111111', '', '', '', '', '', '2016-08-22 06:44:12', '2016-08-22 06:44:12'),
(18, '11111111111111', '11111111', '', '', '', '', '', '2016-08-22 06:44:52', '2016-08-22 06:44:52'),
(19, '11111111', '22222222222', '', '', '', '', '', '2016-08-22 08:04:35', '2016-08-22 08:04:35'),
(20, '222222', '222222222', 'sdadas', '', '', '', '', '2016-08-22 08:05:10', '2016-08-22 08:05:10'),
(21, '1111111111', '1111111111', '', '', '', '', '', '2016-08-22 09:02:36', '2016-08-22 09:02:36'),
(22, '1111111111', '1111111111', '', '', '', '', '', '2016-08-22 09:33:43', '2016-08-22 09:33:43'),
(23, '1111111111', '1111111111', '', '', '', '', '', '2016-08-22 09:44:19', '2016-08-22 09:44:19'),
(24, '1111111111', '1111111111', '', '', '', '', '', '2016-08-22 09:47:41', '2016-08-22 09:47:41'),
(25, '12312321', '3123123', '23123', '', '', '', '', '2016-08-22 09:48:25', '2016-08-22 09:48:25'),
(26, '12312321', '3123123', '23123', '', '', '', '', '2016-08-22 09:49:35', '2016-08-22 09:49:35'),
(27, '1111111111', '1111111111', '', '', '', '', '', '2016-08-22 09:50:02', '2016-08-22 09:50:02'),
(28, '3212312312', '312312312', 'asdad', '', '', '', '', '2016-08-22 09:51:11', '2016-08-22 09:51:11'),
(29, '1212121', '212121', '', '', '', '', '', '2016-08-22 09:59:05', '2016-08-22 09:59:05'),
(30, '12312312', '1231231233', '', '', '', '', '', '2016-08-22 10:00:30', '2016-08-22 10:00:30'),
(31, '12312312', '1231231233', '', '', '', '', '', '2016-08-22 10:05:19', '2016-08-22 10:05:19'),
(32, '12312312', '1231231233', '', '', '', '', '', '2016-08-22 10:05:56', '2016-08-22 10:05:56'),
(33, '12312312', '1231231233', '', '', '', '', '', '2016-08-22 10:06:16', '2016-08-22 10:06:16'),
(34, '12312312', '3123123', 'dasd', '', '', '', '', '2016-08-22 10:07:47', '2016-08-22 10:07:47'),
(35, '12312312', '1231231233', '', '', '', '', '', '2016-08-22 10:08:26', '2016-08-22 10:08:26'),
(36, '3123123', '12312312', '', '', '', '', '', '2016-08-22 10:34:41', '2016-08-22 10:34:41');

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

--
-- Дамп данных таблицы `photos`
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
(14, 'testovyj-zagolovok_14.jpg', 9, 'lists', 14, ''),
(15, 'zagolovok2_15.jpg', 10, 'lists', 15, ''),
(16, 'datecs-dpsd_16.jpg', 24, 'products', 16, ''),
(17, 'datecs-dpsd_17.jpg', 24, 'products', 17, ''),
(18, 'datecs-dpsd_18.jpg', 24, 'products', 18, ''),
(19, '57a9da33bb434.jpg', 0, 'products', 19, '79d086b87070da8b0269714678b7d81f25a935b3'),
(20, 'tremol-skl_20.jpg', 25, 'products', 20, ''),
(23, '57ab24b87b482.jpg', 0, 'products', 23, 'e2407315cf0bb037e48307a29a0473c93e648e46'),
(24, '57ab24b881ee0.jpg', 0, 'products', 24, 'f94d8b9dde35eac357936a7eb3575a1448d7e85f'),
(25, '57ab251285b18.jpg', 0, 'products', 25, '32c5ea9aaf211359b6690dfabc210101e365d21b'),
(26, '57ab251288a84.jpg', 0, 'products', 26, '51a682d07ea38e81ec012211ab5244bd6b6055ed'),
(27, '57ab25b0c6a45.jpg', 0, 'products', 27, 'ed8d2c2df790e0309564ec803b172d4ccdc91cf3'),
(28, '57ab25b0c952b.jpg', 0, 'products', 28, '4eef1420b09065b6f18821f3d9fec439a1df3eea'),
(29, '57ab25d35feea.jpg', 0, 'products', 29, 'ee56cd448516ab4d6c66f8cf4dc7e82f48f0f64e'),
(30, '57ab25d36a3a5.jpg', 0, 'products', 30, 'd6b4df3e0c976507b0737c47a95fce235b4138ba'),
(31, '57ab26a5d6ef7.jpg', 0, 'products', 32, '7af1331e2a85688636e9520bc4e82ed9df3d523e'),
(32, '57ab26a5d68eb.jpg', 0, 'products', 31, 'fd63ff6945bec44d1546e45f79cd0b6e12719afc'),
(33, '57ac424500485.jpg', 0, 'products', 33, '72d85aca082b1d140a6092525ee73c67e8ae8bf7'),
(34, '57ac4245004f9.jpg', 0, 'products', 34, 'faeb9dfd789642024a92873bf541511f9dd7374c'),
(35, '57ac44286d475.jpg', 0, 'products', 35, 'dd58936fd9653ba5c03948087adab952cd5b99f2'),
(36, '57ac44be42f90.jpg', 0, 'products', 36, '3e811a6e7f2ff57d6c106925d625066f3e9e02bf'),
(37, '57ac45f3f23e9.jpg', 0, 'products', 37, '997b2c0fb67e6e2f823f099a59ff37cbcfcce559'),
(38, '57ac4dbb46dab.jpg', 0, 'products', 38, '5379329daaf532c6bdd1ab07cf25fc83814e73a9'),
(39, '57b2b5ddcbbe7.jpg', 0, 'products', 39, 'df578d9779ef409146976a835a93e02d24725097'),
(40, 'simpals_40.png', 11, 'lists', 40, ''),
(41, '57bab38df3fd6.jpg', 0, 'products', 41, 'e9b92e22a0b1fb709ade1655ee45d8eebb02f23c'),
(42, '57babcd3c1a16.jpg', 0, 'products', 42, '978e358ffd1da9f27d4c88199c59400f1b3bd6a9'),
(43, 'kassovyj-apparat_43.jpg', 26, 'products', 43, '');

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
  `price_discount` double(8,2) NOT NULL,
  `instructions` text COLLATE utf8_unicode_ci NOT NULL,
  `soft` text COLLATE utf8_unicode_ci NOT NULL,
  `features_custom` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `name`, `name_ro`, `name_en`, `description`, `description_ro`, `description_en`, `description_short`, `description_short_ro`, `description_short_en`, `price`, `map`, `enabled`, `top`, `views`, `sort`, `slug`, `created_at`, `updated_at`, `price_discount`, `instructions`, `soft`, `features_custom`) VALUES
(22, 'DAISY EXPERT SX', 'DAISY EXPERT SX', '', '<p>Описание</p>\r\n', '<p>Descrierea</p>\r\n', '', 'Короткое описание', 'Descrierea short', '', 3200.00, '', 1, 1, 0, 0, 'daisy-expert-sx', '2016-08-01 21:00:00', '2016-08-10 09:30:50', 0.00, '<p>iiiii</p>\r\n', '<p>s<strong>sss</strong></p>\r\n', ''),
(23, 'Чековая лента 57 мм', 'Bandă de primire 57 mm', '', '<p><strong>Кассовая (чековая) лента в рулоне 57мм</strong>&nbsp;- термохимическая однослойная бумажная лента (термобумага) применяется в качестве чековой (контрольной) ленты. Печать чеков на термобумаге происходит на специальных термопринтерах, аналогичных тем, что используются в факс-аппаратах. Термопринтер просто нагревает термобумагу в нужных местах, в которых происходит потемнение термохимического слоя на поверхности бумаги. При этом бумажная лента быстро протягивается относительно нагревающих элементов принтера. Таким образом на термобумаге быстро и бесшумно появляется отчетливое изображение чека.</p>\r\n', '<p><strong>Numerar (cecuri) &icirc;n rola 44mm bandă</strong> - termochimic bandă de h&acirc;rtie cu un singur strat (h&acirc;rtie termică) este utilizată ca (cec) banda de verificare. Imprimați chitanțe pe h&acirc;rtie termică vine &icirc;n imprimantă termică specială, similare cu cele utilizate &icirc;n mașinile de fax. Termică pur și simplu &icirc;ncălzește h&acirc;rtia termică &icirc;n locurile potrivite, &icirc;n care există o &icirc;nchidere la culoare a stratului termo-chimic pe suprafața h&acirc;rtiei. &Icirc;n această bandă de h&acirc;rtie este tras rapid &icirc;n ceea ce privește elementele de &icirc;ncălzire ale imprimantei. Astfel, h&acirc;rtia termică apare rapid și &icirc;n liniște clar imaginea de verificare.</p>\r\n', '', 'Кассовая (чековая) лента в рулоне 57мм - термохимическая однослойная бумажная лента (термобумага) применяется в качестве чековой (контрольной) ленты.', 'Numerar (cecuri) în rola 44mm bandă - termochimic bandă de hârtie cu un singur strat (hârtie termică) este utilizată ca (cec) banda de verificare.', '', 5.00, '', 1, 1, 0, 0, 'chekovaya-lenta-mm', '2016-08-02 21:00:00', '2016-08-11 04:29:07', 0.00, '', '', ''),
(24, 'Datecs DP-25SD', 'Datecs DP-25SD', '', '', '', '', 'Кассовый аппарат Datecs DP - 25-SD предназначен для поддержки малого и среднего точки продаж и услуг . Он предлагает различные интерфейсы , что позволяет соединение с различной периферии , например, сканер штрих-кодов , цифровые весы , ящик. Хранение электронной контрольной ленты обеспечивает встроенный электронный журнал и SD Card.', '', '', 3800.00, '', 1, 1, 0, 0, 'datecs-dpsd', '2016-08-08 21:00:00', '2016-08-11 06:17:40', 0.00, '', '', ''),
(25, 'TREMOL - SKL', '', '', '<table>\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<p>Департаменты</p>\r\n			</td>\r\n			<td>\r\n			<p>до 40</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>Наименования</p>\r\n			</td>\r\n			<td>\r\n			<p>до 10 000</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>Операторы</p>\r\n			</td>\r\n			<td>\r\n			<p>до 20</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>Клиенты</p>\r\n			</td>\r\n			<td>\r\n			<p>1000 с возможностью выписывать счет-фактуры</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>Тип оплаты</p>\r\n			</td>\r\n			<td>\r\n			<p>Cash, Card, Bon de masa, программируемый.</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td rowspan="2">\r\n			<p>Лого</p>\r\n			</td>\r\n			<td>\r\n			<p>2 файла</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>*.bmp monochrome 384x80</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>Операции</p>\r\n			</td>\r\n			<td>\r\n			<p>Продажи (магазины, общепит),Программирование, Отчетность</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>Фискальная память</p>\r\n			</td>\r\n			<td>\r\n			<p>Минимально&nbsp; 5 лет&nbsp;</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>Электронный журнал</p>\r\n			</td>\r\n			<td>\r\n			<p>SD карта</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>Часы</p>\r\n			</td>\r\n			<td>\r\n			<p>Минимально 1500 часов без перезагрузки</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td rowspan="3">\r\n			<p>Дисплей оператора</p>\r\n			</td>\r\n			<td>\r\n			<p>LCD, двухлинейный</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>16 профилей</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>Подсветка</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td rowspan="2">\r\n			<p>Дисплей клиента</p>\r\n			</td>\r\n			<td>\r\n			<p>LCD, двухлинейный</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>16 профилей</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>Клавиатура</p>\r\n			</td>\r\n			<td>\r\n			<p>Силикон, 28 кнопок</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td rowspan="4">\r\n			<p>Принтер</p>\r\n			</td>\r\n			<td>\r\n			<p>Легкая перезагрузка&nbsp;</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>Fujitsu Printer</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>60 мм/сек</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>38 символов в ряд</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>Термобумага</p>\r\n			</td>\r\n			<td>\r\n			<p>57 мм &Oslash;40 мм</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td rowspan="2">\r\n			<p>Блок Питания</p>\r\n			</td>\r\n			<td>\r\n			<p>AC 100-240V ~ 50/60Hz 0.5A</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>DC 9.6В &ndash; 0.51A</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>Батарея</p>\r\n			</td>\r\n			<td>\r\n			<p>Li-Ion 7.4В / 2200 mAh</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>Размеры</p>\r\n			</td>\r\n			<td>\r\n			<p>103x210x60 мм, 0.505 кг</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n', '', '', 'Портативный кассовый аппарат, легкий и простой в обращении. Аппарат подходит для работы на открытом воздухе, для работы с доставкой на дом и в офисы, для открытых рынков, а также для магазинов с ограниченной площадью. Благодаря большой емкости зарядной батареи, аппарат может работать в местах с нестабильной электроэнергией. \r\nTremol S-KL смело можно назвать бестселлером из всей линейки кассовых аппаратов. Дизайн и функциональность были дополнены и улучшены, что увеличило качество самого аппарата. Аппарат легок в использовании. ', '', '', 3200.00, '', 1, 1, 0, 0, 'tremol-skl', '2016-08-08 21:00:00', '2016-08-10 09:44:49', 0.00, '', '', ''),
(26, 'Кассовый аппарат', 'Кассовый аппарат', '', '<p>Описание на русском</p>\r\n', '<p>Описание на рум</p>\r\n', '', 'Тест описание', 'Descrierea de test', '', 2000.00, '', 1, 1, 0, 0, 'kassovyj-apparat', '2016-08-21 21:00:00', '2016-08-22 05:51:40', 1900.00, '<p>1</p>\r\n', '<p>2</p>\r\n', ''),
(27, 'Тестовый товар', '', '', '', '', '', '', '', '', 0.00, '', 1, 1, 0, 0, 'testovyj-tovar', '2016-08-22 21:00:00', '2016-08-23 10:07:09', 0.00, '', '', 'a:2:{i:22;s:0:"";i:23;s:0:"";}');

-- --------------------------------------------------------

--
-- Структура таблицы `products_categories`
--

CREATE TABLE `products_categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `products_id` int(10) UNSIGNED NOT NULL,
  `categories_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `products_categories`
--

INSERT INTO `products_categories` (`id`, `products_id`, `categories_id`) VALUES
(1, 22, 40),
(2, 23, 48),
(3, 24, 40),
(4, 25, 40),
(5, 26, 40),
(6, 27, 40);

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

--
-- Дамп данных таблицы `recommended_xref`
--

INSERT INTO `recommended_xref` (`id`, `product_id`, `recommended_id`) VALUES
(3, 24, 23),
(4, 22, 24),
(5, 26, 24);

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
(1, 'Xsort', 'support@xsort.md', '$2y$10$twmlb5YlgimkrTIwnKqeauX9JusORUAVWnjjK1jBhM0AQwJW/3RIy', 1, '8RNbqi7f1HdHko6w8TjpI1VQmdfP5YxsVHMrsiwS7CQ5Y6xi6jOulrB0YlYl', NULL, '2016-08-05 10:09:28'),
(6, 'Rezomedia', 'info@rezomedia.md', '$2y$10$B/UX6oV835fIjOaqImlRjuWefQc5zllnWx26HvN0rPZ2yyA6u.196', 1, NULL, NULL, NULL);

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
-- Индексы таблицы `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT для таблицы `features`
--
ALTER TABLE `features`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT для таблицы `features_products`
--
ALTER TABLE `features_products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
--
-- AUTO_INCREMENT для таблицы `features_values`
--
ALTER TABLE `features_values`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT для таблицы `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `galleries_xref`
--
ALTER TABLE `galleries_xref`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `lists`
--
ALTER TABLE `lists`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT для таблицы `menu_categories`
--
ALTER TABLE `menu_categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `menu_products`
--
ALTER TABLE `menu_products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `meta`
--
ALTER TABLE `meta`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
--
-- AUTO_INCREMENT для таблицы `news`
--
ALTER TABLE `news`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `news_tags`
--
ALTER TABLE `news_tags`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `news_types`
--
ALTER TABLE `news_types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT для таблицы `photos`
--
ALTER TABLE `photos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT для таблицы `products_categories`
--
ALTER TABLE `products_categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT для таблицы `products_news`
--
ALTER TABLE `products_news`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `recommended_xref`
--
ALTER TABLE `recommended_xref`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT для таблицы `tags`
--
ALTER TABLE `tags`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `types`
--
ALTER TABLE `types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT для таблицы `videos`
--
ALTER TABLE `videos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
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
