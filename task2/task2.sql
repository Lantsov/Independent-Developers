-- phpMyAdmin SQL Dump
-- version 4.4.15.5
-- http://www.phpmyadmin.net
--
-- Хост: localhost:3306
-- Время создания: Дек 19 2016 г., 00:42
-- Версия сервера: 5.5.49-log
-- Версия PHP: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `task2`
--
CREATE DATABASE IF NOT EXISTS `task2` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `task2`;

-- --------------------------------------------------------

--
-- Структура таблицы `courier`
--
-- Создание: Дек 18 2016 г., 23:04
--

CREATE TABLE IF NOT EXISTS `courier` (
  `id` int(11) NOT NULL,
  `name` text,
  `phone` text,
  `mail` text NOT NULL,
  `other` text NOT NULL,
  `adress` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `menu`
--
-- Создание: Дек 18 2016 г., 19:26
--

CREATE TABLE IF NOT EXISTS `menu` (
  `id` int(11) NOT NULL COMMENT 'id',
  `url` text NOT NULL COMMENT 'url',
  `text` text NOT NULL COMMENT 'отображаемый текст',
  `parent` int(11) NOT NULL COMMENT 'id родителя / 0 для корневого пункта'
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `menu`
--

INSERT INTO `menu` (`id`, `url`, `text`, `parent`) VALUES
(1, 'bluetooth', 'Блютуз наушники', 0),
(2, 'micro', 'Микронаушники', 0),
(3, 'loudspeakers', 'Блютуз колонки', 0),
(4, 'accessories', 'Аксессуары', 0),
(5, 'delivery_and_paid', 'Доставка и Оплата', 0),
(6, 'guarantee', 'Гарантия', 0),
(7, 'about', 'О нас', 0),
(8, 'contact', 'Контакты', 0),
(9, 'lorem', 'Lorem', 5),
(10, 'ipsum', 'Ipsum', 5),
(11, 'do_ler_si_amet', 'Et cetra terra terra', 5),
(12, 'lorem', 'Lorem', 11),
(13, 'ipsum', 'Ipsum', 11);

-- --------------------------------------------------------

--
-- Структура таблицы `pickup`
--
-- Создание: Дек 18 2016 г., 23:06
--

CREATE TABLE IF NOT EXISTS `pickup` (
  `id` int(11) NOT NULL,
  `name` text,
  `phone` text,
  `mail` text NOT NULL,
  `other` text NOT NULL,
  `point` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `courier`
--
ALTER TABLE `courier`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `pickup`
--
ALTER TABLE `pickup`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `courier`
--
ALTER TABLE `courier`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id',AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT для таблицы `pickup`
--
ALTER TABLE `pickup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
