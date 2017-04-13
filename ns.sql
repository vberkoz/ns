-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Апр 13 2017 г., 12:12
-- Версия сервера: 5.7.17-0ubuntu0.16.04.1
-- Версия PHP: 7.0.15-0ubuntu0.16.04.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `ns`
--

-- --------------------------------------------------------

--
-- Структура таблицы `ns_images`
--

CREATE TABLE `ns_images` (
  `id` int(6) NOT NULL,
  `product_id` int(6) NOT NULL,
  `image` varchar(255) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `ns_images`
--

INSERT INTO `ns_images` (`id`, `product_id`, `image`) VALUES
(1, 1, 'images/compaq_presario_cq57/01.jpg'),
(2, 1, 'images/compaq_presario_cq57/02.jpg'),
(3, 1, 'images/compaq_presario_cq57/03.jpg'),
(4, 1, 'images/compaq_presario_cq57/04.jpg'),
(5, 1, 'images/compaq_presario_cq57/05.jpg'),
(6, 1, 'images/compaq_presario_cq57/06.jpg'),
(7, 1, 'images/compaq_presario_cq57/07.jpg'),
(8, 2, 'images/dell_vostro_v13/01.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `ns_products`
--

CREATE TABLE `ns_products` (
  `id` int(6) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `description` varchar(255) CHARACTER SET utf8 NOT NULL,
  `processor` varchar(255) NOT NULL,
  `memory` varchar(255) NOT NULL,
  `hdd` varchar(255) NOT NULL,
  `display` varchar(255) NOT NULL,
  `graphics` varchar(255) NOT NULL,
  `optical` varchar(255) NOT NULL,
  `options` varchar(255) CHARACTER SET utf8 NOT NULL,
  `image` varchar(255) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `ns_products`
--

INSERT INTO `ns_products` (`id`, `name`, `price`, `description`, `processor`, `memory`, `hdd`, `display`, `graphics`, `optical`, `options`, `image`) VALUES
(1, 'COMPAQ PRESARIO CQ57', '4000', 'Цей ноутбук поєднує високі технології і чудовий дизайн,                 забезпечує високу продуктивність і дозволяє завжди залишатися                 на зв\'язку. Він гарантує надійну роботу за доступною ціною.', 'Intel® Celeron® Processor B800 (1.50 GHz)', '2 GB', '320 GB', '15.6"', 'intel hd graphics', 'DVD RW', 'ноутбук, блок живлення, акумуляторна батарея', 'images/compaq_presario_cq57/01.jpg'),
(2, 'DELL VOSTRO V13', '5500', 'Ноутбук Vostro V13 створений для розбірливих співробітників малих підприємств, які часто бувають у відрядженнях. Він відрізняється надійною і легкою конструкцією, а також ціною, яка не дозволить вийти за рамки бюджету.', 'Intel® Core™ i3-380UM (1.33 GHz)', '4 GB', '320 GB', '13.3"', 'intel hd graphics', 'DVD RW', 'ноутбук, блок живлення, акумуляторна батарея', 'images/dell_vostro_v13/01.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `ns_user`
--

CREATE TABLE `ns_user` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `ns_user`
--

INSERT INTO `ns_user` (`id`, `name`, `email`, `password`, `role`) VALUES
(6, ' admin', 'admin@mail.com', '111111', ''),
(7, ' Sergey', 'sergey@mail.com', '222222', ''),
(8, 'Dima', 'dima@mail.com', '333333', '');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `ns_images`
--
ALTER TABLE `ns_images`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `ns_products`
--
ALTER TABLE `ns_products`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `ns_user`
--
ALTER TABLE `ns_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `ns_images`
--
ALTER TABLE `ns_images`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT для таблицы `ns_products`
--
ALTER TABLE `ns_products`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT для таблицы `ns_user`
--
ALTER TABLE `ns_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
