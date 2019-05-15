-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3307
-- Время создания: Май 12 2019 г., 17:42
-- Версия сервера: 8.0.15
-- Версия PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `geekbrains`
--

-- --------------------------------------------------------

--
-- Структура таблицы `img_info`
--

CREATE TABLE `img_info` (
  `id` int(64) NOT NULL,
  `url_min` varchar(128) NOT NULL,
  `url_max` varchar(128) NOT NULL,
  `width` varchar(32) NOT NULL,
  `name` varchar(32) NOT NULL,
  `rating` int(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `img_info`
--

INSERT INTO `img_info` (`id`, `url_min`, `url_max`, `width`, `name`, `rating`) VALUES
(1, 'img/min/1.jpg', 'img/max/1.jpg', '300px', 'первое фото', 5),
(2, 'img/min/2.jpg', 'img/max/2.jpg', '300px', 'второе фото', 0),
(3, 'img/min/3.jpg', 'img/max/3.jpg', '300px', 'третье фото', 5),
(4, 'img/min/4.jpg', 'img/max/4.jpg', '300px', 'четвертое фото', 9);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `img_info`
--
ALTER TABLE `img_info`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
