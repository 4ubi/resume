-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Мар 19 2019 г., 15:52
-- Версия сервера: 10.3.13-MariaDB
-- Версия PHP: 7.1.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `4ubi`
--

-- --------------------------------------------------------

--
-- Структура таблицы `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `news`
--

INSERT INTO `news` (`id`, `text`) VALUES
(1, 'PWA – это веб-приложения, которые по ощущениям и пользовательскому опыту напоминают мобильные приложения. Они собирают новейшие веб-технологии в удобной для пользователей форме, доступ к которым пользователь может получить в любое время с помощью закладок или панели расширений браузера. Чтобы лучше понять суть прогрессивных веб-приложений, мы собрали список их главных свойств'),
(2, 'Суть технологии блокчейн заключается в использовании общей базы данных, которая постоянно согласовывается. Миллионы компьютеров содержат записи базы данных, которые обновляются каждые десять минут. Поскольку данные разбросаны по большому количеству компьютеров, и нет никакой команды, контролирующей , буквально невозможно испортить или нарушить функционирование системы. Чтобы уничтожить блокчейн, вам придется уничтожать все возможные ПК, которые могут хранить данные или же отключать Интернет на планете Земля.'),
(3, 'Черты Motion UI, которые делают его одним из ключевых направлений развития веб дизайна, – его простота, гибкость и универсальный характер. Прежде всего, кодирование Motion UI легко понять, если у вас есть базовые знания CSS и JavaScript. Во-вторых, Motion UI предоставляет пользователям возможность задавать множество параметров, с помощью которых можно заставить анимации вести себя в точности так, как они хотят. Кроме того, вы, как пользователи, можете применять переходы и анимации Motion для почти любого элемента вашего сайта, что обеспечивает превосходство этой технологии над другими библиотеками.  ');

-- --------------------------------------------------------

--
-- Структура таблицы `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `content` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `login` varchar(100) NOT NULL,
  `passwd` varchar(150) NOT NULL,
  `admin` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `passwd`, `admin`) VALUES
(1, 'pikachu', '1234', 0),
(5, '4ubaka', 'id82807426', 0);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
