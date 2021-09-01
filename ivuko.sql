-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Сен 01 2021 г., 09:20
-- Версия сервера: 10.3.22-MariaDB
-- Версия PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `ivuko`
--

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`id`, `title`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Женские кольца', 'zhenskie-kolca', '2021-08-27 07:10:27', '2021-08-27 07:10:27'),
(2, 'Запонки', 'zaponki', '2021-08-27 07:10:36', '2021-08-27 07:10:36'),
(3, 'Мужские кольца', 'muzhskie-kolca', '2021-08-27 07:10:43', '2021-08-27 07:10:43'),
(4, 'Пирсинг', 'pirsing', '2021-08-27 07:10:51', '2021-08-27 07:10:51'),
(5, 'Подвески', 'podveski', '2021-08-27 07:10:59', '2021-08-27 07:10:59'),
(6, 'Пуссеты', 'pussety', '2021-08-27 07:11:07', '2021-08-27 07:11:07'),
(7, 'Серьги', 'sergi', '2021-08-27 07:11:14', '2021-08-27 07:11:14'),
(8, 'Бижутерия', 'bizhuteriya', '2021-09-01 02:41:29', '2021-09-01 02:42:45'),
(9, 'Часы', 'chasy', '2021-09-01 03:13:54', '2021-09-01 03:13:54');

-- --------------------------------------------------------

--
-- Структура таблицы `failed_jobs`
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
-- Структура таблицы `materials`
--

CREATE TABLE `materials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `materials`
--

INSERT INTO `materials` (`id`, `title`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Золото', 'zoloto', '2021-08-27 07:11:46', '2021-08-27 07:11:46'),
(2, 'Серебро', 'serebro', '2021-08-27 07:11:54', '2021-08-27 07:11:54');

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(13, '2014_10_12_000000_create_users_table', 1),
(14, '2019_08_19_000000_create_failed_jobs_table', 1),
(15, '2021_08_25_060421_create_categories_table', 1),
(16, '2021_08_26_052020_create_materials_table', 1),
(17, '2021_08_26_163515_create_stones_table', 1),
(18, '2021_08_27_053019_create_products_table', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vendor_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `material` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `weight` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `size` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `picture` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `title`, `slug`, `category_id`, `vendor_code`, `material`, `stone`, `weight`, `size`, `price`, `picture`, `created_at`, `updated_at`) VALUES
(22, 'Запонки', 'zaponki', '2', '660017', '2', '14', '3.64', NULL, '12 638', 'images/zaponki/660017.jpg', '2021-08-31 10:30:19', '2021-08-31 10:30:19'),
(23, 'Запонки', 'zaponki-1', '2', '160033', '1', '16', '6.49', NULL, '47994', 'images/zaponki/160033.jpg', '2021-08-31 10:32:12', '2021-08-31 10:32:12'),
(24, 'Подвеска из серебра SKAZKA', 'podveska-iz-serebra-skazka', '5', '52855', '2', '16', '0.66', NULL, '800', 'images/podveski/52855.jpg', '2021-08-31 10:38:03', '2021-08-31 10:38:03'),
(25, 'Подвеска из золота Золотий ВiК', 'podveska-iz-zolota-zolotiy-vik', '5', '1343269/цв', '1', '16', '1.09', NULL, '7783', 'images/podveski/1343269.jpg', '2021-08-31 10:39:21', '2021-08-31 10:39:21'),
(26, 'Кольцо мужское из золота', 'kolco-muzhskoe-iz-zolota', '3', '1200005149', '1', '16', '3.31', '20.5', '23071', 'images/muzhskie-kolca/1200005149.jpg', '2021-08-31 10:41:59', '2021-08-31 10:41:59'),
(27, 'Кольцо мужское из золота DEL\'TA', 'kolco-muzhskoe-iz-zolota-del-ta', '3', '040272', '1', '4', '4.57', '22.5', '31853', 'images/muzhskie-kolca/040272.jpg', '2021-08-31 10:43:17', '2021-08-31 10:43:17'),
(28, 'Кольцо мужское с бриллиантом Бриант', 'kolco-muzhskoe-s-brilliantom-briant', '3', 'RW63777D', '1', '5', '7.23', '21.5', '136510', 'images/muzhskie-kolca/rw63777d.jpg', '2021-08-31 10:44:49', '2021-08-31 10:44:49'),
(30, 'Часы SKAZKA', 'chasy-skazka', '9', '46533', '2', '4', '0', NULL, '1300', 'images/chasy/46533.jpg', '2021-09-01 03:15:14', '2021-09-01 03:15:14');

-- --------------------------------------------------------

--
-- Структура таблицы `stones`
--

CREATE TABLE `stones` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `stones`
--

INSERT INTO `stones` (`id`, `title`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Агат', 'agat', '2021-08-27 07:12:17', '2021-08-27 07:12:17'),
(2, 'Александрит', 'aleksandrit', '2021-08-27 07:12:24', '2021-08-27 07:12:24'),
(3, 'Аметист', 'ametist', '2021-08-27 07:12:30', '2021-08-27 07:12:30'),
(4, 'Без вставки', 'bez-vstavki', '2021-08-27 07:12:40', '2021-08-27 07:12:40'),
(5, 'Бриллиант', 'brilliant', '2021-08-27 07:12:49', '2021-08-27 07:12:49'),
(6, 'Гранат', 'granat', '2021-08-27 07:12:56', '2021-08-27 07:12:56'),
(7, 'Изумруд', 'izumrud', '2021-08-27 07:13:02', '2021-08-27 07:13:02'),
(8, 'Лондон топаз', 'london-topaz', '2021-08-27 07:13:10', '2021-08-27 07:13:10'),
(9, 'Малахит', 'malahit', '2021-08-27 07:13:16', '2021-08-27 07:13:16'),
(10, 'Наношпинель', 'nanoshpinel', '2021-08-27 07:13:23', '2021-08-27 07:13:23'),
(11, 'Оникс', 'oniks', '2021-08-27 07:13:30', '2021-08-27 07:13:30'),
(12, 'Раухтопаз', 'rauhtopaz', '2021-08-27 07:13:37', '2021-08-27 07:13:37'),
(13, 'Рубин', 'rubin', '2021-08-27 07:13:43', '2021-08-27 07:13:43'),
(14, 'Сапфир', 'sapfir', '2021-08-27 07:13:49', '2021-08-27 07:13:49'),
(15, 'Топаз', 'topaz', '2021-08-27 07:13:56', '2021-08-27 07:13:56'),
(16, 'Фианит', 'fianit', '2021-08-27 07:14:03', '2021-08-27 07:14:03'),
(17, 'Хризолит', 'hrizolit', '2021-08-27 07:14:10', '2021-08-27 07:14:10'),
(18, 'Хризопраз', 'hrizopraz', '2021-08-27 07:14:19', '2021-08-27 07:14:19'),
(19, 'Эмаль', 'emal', '2021-08-27 07:14:25', '2021-08-27 07:14:25'),
(20, 'Янтарь', 'yantar', '2021-08-27 07:14:32', '2021-08-27 07:14:32');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
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
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `materials`
--
ALTER TABLE `materials`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `stones`
--
ALTER TABLE `stones`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT для таблицы `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `materials`
--
ALTER TABLE `materials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT для таблицы `stones`
--
ALTER TABLE `stones`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
