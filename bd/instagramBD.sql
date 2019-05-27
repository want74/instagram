-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 27 2019 г., 16:10
-- Версия сервера: 5.6.38
-- Версия PHP: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `instagramBD`
--

-- --------------------------------------------------------

--
-- Структура таблицы `ref`
--

CREATE TABLE `ref` (
  `img` varchar(355) NOT NULL,
  `text` varchar(355) NOT NULL,
  `user_id` varchar(355) NOT NULL,
  `id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `ref`
--

INSERT INTO `ref` (`img`, `text`, `user_id`, `id`) VALUES
('img1.jpg', 'privet', '1', 26),
('img2.jpg', 'hello', '18', 27),
('2.png', 'еуче', '23', 56),
('1.png', '123', '1', 57),
('img1.jpg', 'lol', '19', 58),
('img1.jpg', 'lol', '19', 59),
('img1.jpg', 's', '19', 60),
('img1.jpg', 's', '19', 61),
('img1.jpg', 's', '19', 62),
('img1.jpg', 'good', '20', 63);

-- --------------------------------------------------------

--
-- Структура таблицы `reg`
--

CREATE TABLE `reg` (
  `mail` varchar(355) NOT NULL,
  `fio` varchar(355) NOT NULL,
  `password` varchar(355) NOT NULL,
  `login` varchar(355) NOT NULL,
  `id` int(10) NOT NULL,
  `logo` varchar(355) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `reg`
--

INSERT INTO `reg` (`mail`, `fio`, `password`, `login`, `id`, `logo`) VALUES
('want74@rambler.ru', 'KychAnd', 'Parol12', 'log', 1, '1.png'),
('mail', 'Name Surname Fathername', 'Password', 'Login123', 17, '2.png'),
('want72@rambler.ru', 's', 'Password', 'KANinNET', 18, '1.png'),
('want74@rambler.ru', 'Kychkin Andrey', 'password', 'want74', 19, 'img1.jpg'),
('dddd@ram.ru', 'www', 'Parol12', 'cpo_status_dir', 20, '2.png');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `ref`
--
ALTER TABLE `ref`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `reg`
--
ALTER TABLE `reg`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `ref`
--
ALTER TABLE `ref`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT для таблицы `reg`
--
ALTER TABLE `reg`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
