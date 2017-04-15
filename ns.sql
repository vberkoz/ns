-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Время создания: Апр 15 2017 г., 09:17
-- Версия сервера: 10.1.21-MariaDB
-- Версия PHP: 5.6.30

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
-- Структура таблицы `ns_comments`
--

CREATE TABLE `ns_comments` (
  `id` int(6) NOT NULL,
  `comment_text` text CHARACTER SET utf8 NOT NULL,
  `comment_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_id` int(6) NOT NULL,
  `product_id` int(6) NOT NULL,
  `reply_to_comment` int(6) NOT NULL,
  `reply_to_user` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `ns_comments`
--

INSERT INTO `ns_comments` (`id`, `comment_text`, `comment_date`, `user_id`, `product_id`, `reply_to_comment`, `reply_to_user`) VALUES
(1, 'In in culpa nulla elit esse. Ex cillum enim aliquip sit sit ullamco ex eiusmod fugiat. Cupidatat ad minim officia mollit laborum magna dolor tempor cupidatat mollit. Est velit sit ad aliqua ullamco laborum excepteur dolore proident incididunt in labore elit.', '2017-04-13 15:45:28', 7, 2, 0, 1),
(3, 'Est velit sit ad aliqua ullamco laborum excepteur dolore proident incididunt in labore elit.', '2017-04-13 18:18:46', 6, 2, 0, 1),
(4, 'Fusce eu tempor erat. Praesent pharetra accumsan consectetur.', '2017-04-13 18:22:24', 6, 2, 0, 1),
(6, 'Sed vel orci ipsum. Integer at aliquam erat. Mauris at enim venenatis, tincidunt lorem eu, ornare metus.', '2017-04-13 18:28:25', 6, 1, 0, 1),
(15, 'Reply on fusce.', '2017-04-14 07:24:02', 6, 2, 4, 6),
(17, 'Reply on est velit sit ad aliqua.', '2017-04-14 07:45:45', 6, 2, 3, 6),
(19, 'Answer to In in culpa nulla elit esse.', '2017-04-14 10:01:23', 7, 2, 1, 7),
(20, 'Second reply on fusce.', '2017-04-14 12:25:49', 7, 2, 4, 0),
(21, 'Second reply on fusce.', '2017-04-14 12:29:45', 7, 2, 4, 0),
(22, 'Second reply on fusce.', '2017-04-14 12:34:50', 7, 2, 4, 0),
(23, 'Second reply on fusce.', '2017-04-14 12:37:13', 7, 2, 4, 0),
(24, 'Second reply on fusce.', '2017-04-14 12:38:52', 7, 2, 4, 0),
(25, 'qwertyuiop[qwertyuiop[qwertyuiop[qwertyuiop[', '2017-04-14 12:39:03', 7, 2, 0, 1),
(26, 'zdfvbxdbxzdfvbxdbxzdfvbxdbx', '2017-04-14 12:39:29', 7, 2, 25, 7),
(27, 'Praesent pharetra accumsan consectetur.', '2017-04-14 12:41:24', 7, 2, 4, 6),
(28, 'Mauris ne Mauris', '2017-04-14 12:51:30', 8, 1, 6, 6);

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
(1, 'COMPAQ PRESARIO CQ57', '4000', 'Цей ноутбук поєднує високі технології і чудовий дизайн,                 забезпечує високу продуктивність і дозволяє завжди залишатися                 на зв\'язку. Він гарантує надійну роботу за доступною ціною.', 'Intel® Celeron® Processor B800 (1.50 GHz)', '2 GB', '320 GB', '15.6\"', 'intel hd graphics', 'DVD RW', 'ноутбук, блок живлення, акумуляторна батарея', 'images/compaq_presario_cq57/01.jpg'),
(2, 'DELL VOSTRO V13', '5500', 'Ноутбук Vostro V13 створений для розбірливих співробітників малих підприємств, які часто бувають у відрядженнях. Він відрізняється надійною і легкою конструкцією, а також ціною, яка не дозволить вийти за рамки бюджету.', 'Intel® Core™ i3-380UM (1.33 GHz)', '4 GB', '320 GB', '13.3\"', 'intel hd graphics', 'DVD RW', 'ноутбук, блок живлення, акумуляторна батарея', 'images/dell_vostro_v13/01.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `ns_users`
--

CREATE TABLE `ns_users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Дамп данных таблицы `ns_users`
--

INSERT INTO `ns_users` (`id`, `name`, `email`, `password`, `role`) VALUES
(1, '', '', '', ''),
(6, 'admin', 'admin@mail.com', '111111', ''),
(7, ' Sergey', 'sergey@mail.com', '222222', ''),
(8, 'Dima', 'dima@mail.com', '333333', '');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `ns_comments`
--
ALTER TABLE `ns_comments`
  ADD PRIMARY KEY (`id`);

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
-- Индексы таблицы `ns_users`
--
ALTER TABLE `ns_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `ns_comments`
--
ALTER TABLE `ns_comments`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
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
-- AUTO_INCREMENT для таблицы `ns_users`
--
ALTER TABLE `ns_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
