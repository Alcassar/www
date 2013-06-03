-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Июн 03 2013 г., 20:57
-- Версия сервера: 5.5.25
-- Версия PHP: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `alcassar`
--

-- --------------------------------------------------------

--
-- Структура таблицы `brj8_category`
--

CREATE TABLE IF NOT EXISTS `brj8_category` (
  `category_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Дамп данных таблицы `brj8_category`
--

INSERT INTO `brj8_category` (`category_id`, `title`) VALUES
(1, 'Новости'),
(2, 'Статьи'),
(3, 'Страницы');

-- --------------------------------------------------------

--
-- Структура таблицы `brj8_page`
--

CREATE TABLE IF NOT EXISTS `brj8_page` (
  `page_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `author` varchar(255) NOT NULL,
  `created` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  PRIMARY KEY (`page_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Дамп данных таблицы `brj8_page`
--

INSERT INTO `brj8_page` (`page_id`, `title`, `content`, `author`, `created`, `category_id`) VALUES
(1, 'О компании', 'Компания «ЭНСО»  находит правильные решения  для Вашего бизнеса в области юриспруденции с 2003 года. Офисы компании располагаются в Москве и Екатеринбурге.  «ЭНСО» имеет обширную партнерскую сеть в 55 странах, что позволяет оперативно реагировать на запросы наших Доверителей, защищать правовые интересы и бизнес.', 'Дмитрий Сеничев', 2062013, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `brj8_user`
--

CREATE TABLE IF NOT EXISTS `brj8_user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` int(2) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
