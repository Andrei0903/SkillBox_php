-- phpMyAdmin SQL Dump
-- version 4.7.1
-- https://www.phpmyadmin.net/
--
-- Хост: sql10.freemysqlhosting.net
-- Время создания: Июн 12 2021 г., 18:13
-- Версия сервера: 5.5.62-0ubuntu0.14.04.1
-- Версия PHP: 7.0.33-0ubuntu0.16.04.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `sql10418488`
--
CREATE DATABASE IF NOT EXISTS `sql10418488` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `sql10418488`;

-- --------------------------------------------------------

--
-- Структура таблицы `resume_db`
--

CREATE TABLE `resume_db` (
  `id` int(11) NOT NULL,
  `date_start` date NOT NULL,
  `job` varchar(100) COLLATE utf8_danish_ci NOT NULL,
  `salary` int(10) NOT NULL,
  `workle_ex` int(5) NOT NULL,
  `years` int(5) NOT NULL,
  `sity` varchar(100) COLLATE utf8_danish_ci NOT NULL,
  `last_place_of_work` text COLLATE utf8_danish_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8_danish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_danish_ci;

--
-- Дамп данных таблицы `resume_db`
--

INSERT INTO `resume_db` (`id`, `date_start`, `job`, `salary`, `workle_ex`, `years`, `sity`, `last_place_of_work`, `photo`) VALUES
(1, '2021-06-09', 'PHP - программист', 150000, 2, 34, 'Москва', 'ООО Рога и копыта', '1'),
(2, '2021-06-14', 'JS Developer', 120000, 1, 24, 'Питер', 'ООО Программист', '2');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `resume_db`
--
ALTER TABLE `resume_db`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `resume_db`
--
ALTER TABLE `resume_db`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
