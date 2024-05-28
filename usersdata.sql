-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Май 28 2024 г., 08:06
-- Версия сервера: 10.4.32-MariaDB
-- Версия PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `newbdraduga`
--

-- --------------------------------------------------------

--
-- Структура таблицы `usersdata`
--

CREATE TABLE `usersdata` (
  `id` int(11) NOT NULL,
  `name` varchar(16) NOT NULL,
  `login` varchar(16) NOT NULL,
  `password` varchar(16) NOT NULL,
  `data` date NOT NULL,
  `about` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `usersdata`
--

INSERT INTO `usersdata` (`id`, `name`, `login`, `password`, `data`, `about`) VALUES
(1, 'Ksusha', 'Admin', 'Admin', '2011-07-13', 'Няшка-рисовашка.'),
(2, 'Ponchick', 'pon', 'pon', '1900-08-14', '고객은 매우 행복합니다'),
(3, 'Александрова Ксе', 'Riba339', 'AdekvatnyuParol', '2033-06-09', 'Lorem ipsum dolor sit amet'),
(4, 'Имя Имевич', 'Namew', 'TriDoubleY', '1488-12-02', 'Ksusha... Sie schÖn'),
(5, 'Кулешов Егор', 'EgaGo', 'PASHALKO', '2001-09-12', 'Мен закоку уурдадым :/');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `usersdata`
--
ALTER TABLE `usersdata`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `usersdata`
--
ALTER TABLE `usersdata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
