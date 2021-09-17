-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Сен 17 2021 г., 08:50
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
(9, 'Часы', 'chasy', '2021-09-01 03:13:54', '2021-09-01 03:13:54'),
(10, 'Другое', 'drugoe', '2021-09-01 08:56:11', '2021-09-01 08:56:11');

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
(2, 'Серебро', 'serebro', '2021-08-27 07:11:54', '2021-08-27 07:11:54'),
(3, 'Другое', 'drugoe', '2021-09-15 10:19:22', '2021-09-15 10:19:22');

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
(43, 'Кольцо из серебра', 'kolco-iz-serebra', '1', '90-01-7513-06', '2', '14', '1.25', '18.0', '700', 'images/zhenskie-kolca/90_01_7513_06.jpg', '2021-09-15 10:08:17', '2021-09-15 10:08:17'),
(44, 'Кольцо из золота SOKOLOV', 'kolco-iz-zolota-sokolov', '1', '716717', '1', '15', '1.54', '17.0', '8840', 'images/zhenskie-kolca/716717.jpg', '2021-09-15 10:13:26', '2021-09-15 10:13:26'),
(45, 'Кольцо из серебра', 'kolco-iz-serebra-1', '1', '90-01-7241-00', '2', '4', '0.9', '16.5', '567', 'images/zhenskie-kolca/90_01_7241_00.jpg', '2021-09-15 10:16:10', '2021-09-15 10:16:10'),
(46, 'Кольцо из серебра Янтарная волна', 'kolco-iz-serebra-yantarnaya-volna', '1', '820040', '2', '20', '1.65', '17.0', '636', 'images/zhenskie-kolca/820040.jpg', '2021-09-15 10:17:20', '2021-09-15 10:17:20'),
(47, 'А07-64рАжурное Кольцо с бриллиантом Помельников А07-64р\"Ажурное\"', 'a07-64razhurnoe-kolco-s-brilliantom-pomelnikov-a07-64r-azhurnoe', '1', 'А07-64р\"Ажурное\"', '1', '13', '8.36', '17.2', '913500', 'images/zhenskie-kolca/a07_64r.jpg', '2021-09-15 10:18:49', '2021-09-15 10:18:49'),
(48, 'Кольцо UNOde50 ANI0390BPLMTL0M', 'kolco-unode50-ani0390bplmtl0m', '1', 'ANI0390BPLMTL0M', '3', '4', '0', NULL, '7210', 'images/zhenskie-kolca/ani0390bplmtl0m.jpg', '2021-09-15 10:21:49', '2021-09-15 10:21:49'),
(49, 'Запонки из серебра', 'zaponki-iz-serebra', '2', '141205р', '2', '16', '10.8', NULL, '3780', 'images/zaponki/141205r.jpg', '2021-09-15 10:24:25', '2021-09-15 10:24:25'),
(50, 'Запонки из серебра', 'zaponki-iz-serebra-1', '2', '37-ЗПЛ105-04', '2', '4', '10.43', NULL, '3640', 'images/zaponki/37_zpl105_04.jpg', '2021-09-15 10:26:03', '2021-09-15 10:26:03'),
(51, 'Запонки из золота DEL\'TA', 'zaponki-iz-zolota-del-ta', '2', '660041', '1', '4', '5.51', NULL, '31627', 'images/zaponki/660041.jpg', '2021-09-15 10:27:08', '2021-09-15 10:27:08'),
(52, 'А05-17 Клетка Запонки с бриллиантом Помельников А05-17 \"Клетка\"', 'a05-17-kletka-zaponki-s-brilliantom-pomelnikov-a05-17-kletka', '2', 'А05-17 \"Клетка\"', '1', '5', '23.3', NULL, '392700', 'images/zaponki/a05_17_kletka_zaponki_a05_17.jpg', '2021-09-15 10:28:09', '2021-09-15 10:28:09'),
(53, 'Кольцо мужское из серебра Маршал', 'kolco-muzhskoe-iz-serebra-marshal', '3', 'КМ-284 Родир_с', '2', '12', '3.71', '20.5', '1948', 'images/muzhskie-kolca/km_284_rodir_s.jpg', '2021-09-15 10:43:37', '2021-09-15 10:43:37'),
(54, 'Кольцо мужское из серебра Ив.Ю.Ко.', 'kolco-muzhskoe-iz-serebra-iv-yu-ko', '3', '3330604р', '2', '18', '5.21', '19.5', '2553', 'images/muzhskie-kolca/3330604r.jpg', '2021-09-15 10:45:03', '2021-09-15 10:45:03'),
(55, 'Кольцо мужское из золота', 'kolco-muzhskoe-iz-zolota', '3', 'И112', '1', '11', '9.99', '20.0', '74825', 'images/muzhskie-kolca/i112.jpg', '2021-09-15 10:47:27', '2021-09-15 10:47:27'),
(56, 'Кольцо мужское с бриллиантом ГАЛЕРЕЯ ЭКСКЛЮЗИВА', 'kolco-muzhskoe-s-brilliantom-galereya-eksklyuziva', '3', 'КШМ-90500', '1', '5', '8.9', '20.5', '190050', 'images/muzhskie-kolca/kshm_90500.jpg', '2021-09-15 10:48:35', '2021-09-15 10:48:35');

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблицы `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `materials`
--
ALTER TABLE `materials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

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
