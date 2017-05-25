-- phpMyAdmin SQL Dump
-- version 4.4.13.1
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Сен 26 2015 г., 21:57
-- Версия сервера: 5.5.23
-- Версия PHP: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `sotrud_db`
--

-- --------------------------------------------------------

--
-- Структура таблицы `conditats`
--

CREATE TABLE IF NOT EXISTS `conditats` (
  `ID_SOTR` int(11) NOT NULL,
  `Name` varchar(200) COLLATE utf8_bin DEFAULT NULL,
  `Famaly` varchar(200) COLLATE utf8_bin DEFAULT NULL,
  `Othestvo` varchar(200) COLLATE utf8_bin DEFAULT NULL,
  `pas_ser` varchar(2) COLLATE utf8_bin DEFAULT NULL,
  `pas_num` varchar(10) COLLATE utf8_bin DEFAULT NULL,
  `pas_date` date DEFAULT NULL,
  `pas_orden` varchar(200) COLLATE utf8_bin DEFAULT NULL,
  `Obrazovan` varchar(200) COLLATE utf8_bin DEFAULT NULL,
  `Date_rozh` date DEFAULT NULL,
  `Otnoshenye` varchar(200) COLLATE utf8_bin DEFAULT NULL,
  `dolgnost` varchar(200) COLLATE utf8_bin DEFAULT NULL,
  `phone` varchar(13) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Дамп данных таблицы `conditats`
--

INSERT INTO `conditats` (`ID_SOTR`, `Name`, `Famaly`, `Othestvo`, `pas_ser`, `pas_num`, `pas_date`, `pas_orden`, `Obrazovan`, `Date_rozh`, `Otnoshenye`, `dolgnost`, `phone`) VALUES
(1, 'Ð’Ð°Ð»ÐµÐ½Ñ‚Ð¸Ð½Ð°', 'ÐšÐ¾Ð»ÐµÐ½Ñ‡ÑƒÐº', 'ÐÐ¸ÐºÐ¾Ð»Ð°ÐµÐ²Ð½Ð°', '', '', NULL, '', '', '1961-01-01', '29-131-13-93', 'ÑÑ‚Ð¾Ñ€Ð¾Ð¶', NULL),
(2, 'Ð“Ð°Ð»Ð¸Ð½Ð°', 'Ð¤ÐµÐ´Ð¾Ñ€Ð¾Ð²Ð°', 'ÐÐ¸ÐºÐ¾Ð»Ð°ÐµÐ²Ð½Ð°', '', '', NULL, '', '', '1969-01-01', '29-111-07-37', 'ÑÑ‚Ð¾Ñ€Ð¾Ð¶', NULL),
(3, 'ÐŸÐ¾Ð»Ð¸Ð½Ð°', 'ÐŸÐ¾Ð»Ð¸Ð½Ð°', 'ÐŸÐ¾Ð»Ð¸Ð½Ð°', '', '', NULL, '', '', '1955-01-01', '25-667-27-69', 'ÑÑ‚Ð¾Ñ€Ð¾Ð¶', NULL),
(4, 'Ð•Ð»ÐµÐ½Ð°', 'Ð•Ð»ÐµÐ½Ð°', 'Ð¤ÐµÐ´Ð¾Ñ€Ð¾Ð²Ð½Ð°', '', '', NULL, '', '', '1961-01-01', '29-314-07-37', 'ÑÑ‚Ð¾Ñ€Ð¾Ð¶', NULL),
(5, 'Ð¡Ð²ÐµÑ‚Ð»Ð°Ð½Ð°', 'Ð¡Ð²ÐµÑ‚Ð»Ð°Ð½Ð°', 'ÐÐ¸ÐºÐ¾Ð»Ð°ÐµÐ²Ð½Ð°', '', '', NULL, '', '', '1960-01-01', '29-193-04-31', 'ÑÑ‚Ð¾Ñ€Ð¾Ð¶', NULL),
(6, 'Ð”Ð¸Ð½Ð°', 'Ð”Ð¸Ð½Ð°', 'Ð”Ð¼Ð¸Ñ‚Ñ€Ð¸ÐµÐ²Ð½Ð°', '', '', NULL, '', '', '1962-01-01', '29-624-06-60', 'ÑÑ‚Ð¾Ñ€Ð¾Ð¶', NULL),
(7, 'Ð¢ÐµÑ€ÐµÐ·Ð°', 'Ð¢ÐµÑ€ÐµÐ·Ð°', 'Ð¢ÐµÑ€ÐµÐ·Ð°', '', '', NULL, '', '', '1960-01-01', '44-708-92-50', 'ÑÑ‚Ð¾Ñ€Ð¾Ð¶', NULL),
(8, 'ÐœÐ°Ñ€Ð¸Ñ', 'Ð’ÐµÑ€ÐµÐ¼ÐµÐµÐ½ÐºÐ¾', 'ÐŸÐµÑ‚Ñ€Ð¾Ð²Ð½Ð°', '', '', NULL, '', '', '1959-01-01', '44-735-56-91', 'ÑÑ‚Ð¾Ñ€Ð¾Ð¶', NULL),
(9, 'Ð’Ð¸ÐºÑ‚Ð¾Ñ€', 'Ð’Ð¸ÐºÑ‚Ð¾Ñ€', 'Ð’Ð¸ÐºÑ‚Ð¾Ñ€', '', '', '0000-00-00', '', '', NULL, 'ÑÑ‚Ð°Ð¶ 30 Ð»ÐµÑ‚ 44-7094749', 'Ð¡Ð²Ð°Ñ€Ñ‰Ð¸Ðº', NULL),
(10, 'ÐÐ»ÐµÐºÑÐµÐ¹', 'Ð ÑƒÐ±Ð°Ð½Ð¾Ð²', 'ÐÐ»ÐµÐºÑÐµÐ¹', '', '', '0000-00-00', '', '', NULL, '232-36-21-28 ÑÑ‚Ð°Ð¶ 7 Ð»ÐµÑ‚', 'Ð­Ð»ÐµÐºÑ‚Ñ€Ð¾Ð³Ð°Ð·Ð¾ÑÐ²Ð°Ñ€Ñ‰Ð¸Ðº', NULL),
(11, 'ÐÐ½Ð´Ñ€ÐµÐ¹', 'ÐÐ·Ð°Ñ€ÐµÐ½ÐºÐ¾Ð²', 'ÐÐ½Ð´Ñ€ÐµÐ¹', '', '', '0000-00-00', '', '', NULL, '5 Ð»ÐµÑ‚ ÑÑ‚Ð°Ð¶ 25-922-52-40', 'Ð­Ð»ÐµÐºÑ‚Ñ€Ð¾Ð³Ð°Ð·Ð¾ÑÐ²Ð°Ñ€Ñ‰Ð¸Ðº', NULL),
(12, 'Ð ÑƒÑÐ»Ð°Ð½', 'Ð ÑƒÑÐ»Ð°Ð½', 'Ð ÑƒÑÐ»Ð°Ð½', '', '', '0000-00-00', '', '', NULL, 'ÑÑ‚Ð°Ð¶ 2 Ð³Ð¾Ð´Ð° 44-754-49-17', 'ÐÐ»ÑŒÐ¿Ð¸Ð½Ð¸ÑÑ‚', NULL),
(13, 'ÐÐ¸ÐºÐ¾Ð»Ð°Ð¹', 'Ð§ÐµÑ€Ð²Ð°Ð½Ð¾Ð²', 'Ð¡ÐµÑ€Ð³ÐµÐµÐ²Ð¸Ñ‡', '', '', '0000-00-00', '', '', NULL, '29-136-45-26', 'Ð­Ð»ÐµÐºÑ‚Ñ€Ð¾Ð³Ð°Ð·Ð¾ÑÐ²Ð°Ñ€Ñ‰Ð¸Ðº', NULL),
(14, 'Ð˜Ð²Ð°Ð½', 'Ð˜Ð²Ð°Ð½', 'Ð˜Ð²Ð°Ð½', '', '', '0000-00-00', '', '', NULL, 'ÑÑ‚Ð°Ð¶ 5 Ð»ÐµÑ‚. 29-231-88-13', 'ÐÐ»ÑŒÐ¿Ð¸Ð½Ð¸ÑÑ‚', NULL),
(15, 'Ð ÑƒÑÐ»Ð°Ð½', 'Ð ÑƒÑÐ»Ð°Ð½', 'ÐÐ½Ð¾Ñ„Ñ€Ð¸ÐµÐ²Ð¸Ñ‡', '', '', '0000-00-00', '', '', NULL, '025-953-32-60', 'Ð’Ð¾Ð´Ð¸Ñ‚ÐµÐ»ÑŒ Ð¿Ð¾Ð³Ñ€ÑƒÐ·Ñ‡Ð¸ÐºÐ°', NULL),
(16, 'Ð’Ð¸Ñ‚Ð°Ð»Ð¸Ð¹', 'ÐœÐ¾ÑÐºÐ°Ð»ÐµÐ²', 'Ð’Ð¸Ñ‚Ð°Ð»ÑŒÐµÐ²Ð¸Ñ‡', '', '', NULL, '', '', '1977-01-01', '3 Ð³Ð¾Ð´Ð° ÑÑ‚Ð°Ð¶. 44-7839411', 'Ð’Ð¾Ð´Ð¸Ñ‚ÐµÐ»ÑŒ Ð¿Ð¾Ð³Ñ€ÑƒÐ·Ñ‡Ð¸ÐºÐ°', NULL),
(17, 'ÐÐ½Ð´Ñ€ÐµÐ¹', 'ÐÐ½Ð´Ñ€ÐµÐ¹', 'ÐÐ½Ð´Ñ€ÐµÐ¹', '', '', '0000-00-00', '', '', NULL, 'Ð¡Ñ‚Ð°Ð¶ 5 Ð»ÐµÑ‚. 44-557-83-31', 'Ð­Ð»ÐµÐºÑ‚Ñ€Ð¾Ð³Ð°Ð·Ð¾ÑÐ²Ð°Ñ€Ñ‰Ð¸Ðº', NULL),
(18, 'ÐÐ»ÐµÐºÑÐ°Ð½Ð´Ñ€', 'Ð¨ÐºÐ¾Ð»ÑŒÐ½Ñ‹Ð¹', 'ÐÐ»ÐµÐºÑÐ°Ð½Ð´Ñ€', '', '', '0000-00-00', '', '', NULL, 'ÑÑ‚Ð°Ð¶ 10 Ð»ÐµÑ‚. 44-731-11-09', 'Ð’Ð¾Ð´Ð¸Ñ‚ÐµÐ»ÑŒ Ð¿Ð¾Ð³Ñ€ÑƒÐ·Ñ‡Ð¸ÐºÐ°', NULL),
(19, 'Ð”Ð¼Ð¸Ñ‚Ñ€Ð¸Ð¹', 'Ð ÑƒÐ±Ð°Ð½Ð¾Ð²', 'Ð’Ð¸ÐºÑ‚Ð¾Ñ€Ð¾Ð²Ð¸Ñ‡', '', '', '0000-00-00', '', '', NULL, 'ÑÑ‚Ð°Ð¶ 3 Ð³Ð¾Ð´Ð°. 29-356-32-83', 'Ð’Ð¾Ð´Ð¸Ñ‚ÐµÐ»ÑŒ Ð¿Ð¾Ð³Ñ€ÑƒÐ·Ñ‡Ð¸ÐºÐ°', NULL),
(20, 'Ð›ÐµÐ¾Ð½Ð¸Ð´', 'Ð’Ð¾Ð´Ð¸ÐµÐ²', 'ÐÐ»ÐµÐºÑÐµÐµÐ²Ð¸Ñ‡', '', '', '0000-00-00', '', '', NULL, 'ÑÑ‚Ð°Ð¶ 2 Ð³Ð¾Ð´Ð°. 25-904-45-75', 'Ð’Ð¾Ð´Ð¸Ñ‚ÐµÐ»ÑŒ Ð¿Ð¾Ð³Ñ€ÑƒÐ·Ñ‡Ð¸ÐºÐ°', NULL),
(21, 'Ð ÑƒÑÐ»Ð°Ð½', 'Ð˜Ð²Ð°Ð½Ð¾Ð²Ð¸Ñ‡', 'Ð¨ÐµÐ»ÑŽÑ‚Ð¾', '', '', '0000-00-00', '', '', NULL, 'ÑÑ‚Ð°Ð¶ 5 Ð»ÐµÑ‚. 29-685-19-79', 'Ð’Ð¾Ð´Ð¸Ñ‚ÐµÐ»ÑŒ Ð¿Ð¾Ð³Ñ€ÑƒÐ·Ñ‡Ð¸ÐºÐ°', NULL),
(22, 'Ð•Ð²Ð³ÐµÐ½Ð¸Ð¹', 'Ð•Ð²Ð³ÐµÐ½Ð¸Ð¹', 'Ð•Ð²Ð³ÐµÐ½Ð¸Ð¹', '', '', NULL, '', '', '1992-01-01', '', 'Ð­Ð»ÐµÐºÑ‚Ñ€Ð¾Ð³Ð°Ð·Ð¾ÑÐ²Ð°Ñ€Ñ‰Ð¸Ðº', NULL),
(23, 'ÐÐ»ÐµÐºÑÐµÐ¹', 'ÐšÐ°Ð»Ð¸Ð½ÐºÐ¾Ð²', 'Ð˜Ð²Ð°Ð½Ð¾Ð²Ð¸Ñ‡', '', '', NULL, '', '', '1978-01-01', 'ÑÑ‚Ð°Ð¶ 15 Ð»ÐµÑ‚. 44-708-55-49', 'Ð­Ð»ÐµÐºÑ‚Ñ€Ð¾Ð³Ð°Ð·Ð¾ÑÐ²Ð°Ñ€Ñ‰Ð¸Ðº', NULL),
(24, 'ÐÐ½Ð´Ñ€ÐµÐ¹', 'ÐÐ»ÑÐ±Ñ‡Ð¸ÐºÐ¾Ð²', 'Ð”Ð¼Ð¸Ñ‚Ñ€Ð¸ÐµÐ²Ð¸Ñ‡', '', '', NULL, '', '', '1980-01-01', 'ÑÑ‚Ð°Ð¶ 5 Ð»ÐµÑ‚, 4 Ñ€Ð°Ð·Ñ€ÑÐ´. 25-922-52-40', 'Ð­Ð»ÐµÐºÑ‚Ñ€Ð¾Ð³Ð°Ð·Ð¾ÑÐ²Ð°Ñ€Ñ‰Ð¸Ðº', NULL),
(25, 'Ð’Ð»Ð°Ð´Ð¸Ð¼Ð¸Ñ€', 'ÐšÑƒÑ†Ñ‹Ñ€ÐµÐ²', 'ÐÐ»ÐµÐºÑÐ°Ð½Ð´Ñ€Ð¾Ð²Ð¸Ñ‡', '', '', '0000-00-00', '', '', NULL, 'Ð¡Ñ‚Ð°Ð¶ 10 Ð»ÐµÑ‚. 29-133-24-61', 'Ð’Ð¾Ð´Ð¸Ñ‚ÐµÐ»ÑŒ Ð¿Ð¾Ð³Ñ€ÑƒÐ·Ñ‡Ð¸ÐºÐ°', NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `dismissed`
--

CREATE TABLE IF NOT EXISTS `dismissed` (
  `ID_SOTR` int(11) NOT NULL,
  `Name` varchar(200) COLLATE utf8_bin DEFAULT NULL,
  `Famaly` varchar(200) COLLATE utf8_bin DEFAULT NULL,
  `Othestvo` varchar(200) COLLATE utf8_bin DEFAULT NULL,
  `pas_ser` varchar(2) COLLATE utf8_bin DEFAULT NULL,
  `pas_num` varchar(10) COLLATE utf8_bin DEFAULT NULL,
  `pas_date` date DEFAULT NULL,
  `pas_orden` varchar(200) COLLATE utf8_bin DEFAULT NULL,
  `Obrazovan` varchar(200) COLLATE utf8_bin DEFAULT NULL,
  `Date_rozh` date DEFAULT NULL,
  `Otnoshenye` varchar(200) COLLATE utf8_bin DEFAULT NULL,
  `dolgnost` varchar(200) COLLATE utf8_bin DEFAULT NULL,
  `Status` varchar(9) COLLATE utf8_bin DEFAULT NULL,
  `Date_work` date DEFAULT NULL,
  `Prikaz` varchar(20) COLLATE utf8_bin DEFAULT NULL,
  `phone` varchar(13) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Дамп данных таблицы `dismissed`
--

INSERT INTO `dismissed` (`ID_SOTR`, `Name`, `Famaly`, `Othestvo`, `pas_ser`, `pas_num`, `pas_date`, `pas_orden`, `Obrazovan`, `Date_rozh`, `Otnoshenye`, `dolgnost`, `Status`, `Date_work`, `Prikaz`, `phone`) VALUES
(1, 'ÐÐ»ÐµÐºÑÐ°Ð½Ð´Ñ€', 'Ð¢Ð°Ð³Ð°Ð¹', 'ÐœÐ¸Ñ…Ð°Ð¹Ð»Ð¾Ð²Ð¸Ñ‡', '', '', NULL, '', '', NULL, '', '', NULL, '2015-02-02', '', NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `UserID` int(11) NOT NULL,
  `Login` varchar(32) COLLATE utf8_bin DEFAULT NULL,
  `pas_hash` varchar(32) COLLATE utf8_bin DEFAULT NULL,
  `UserName` varchar(64) COLLATE utf8_bin DEFAULT NULL,
  `Role` bit(1) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Дамп данных таблицы `login`
--

INSERT INTO `login` (`UserID`, `Login`, `pas_hash`, `UserName`, `Role`) VALUES
(1, 'Olegko', '21ee07df94a7f9cee4cd94bbf447e48a', 'Oleg', b'1'),
(2, 'yura', 'bc759e17ff6499e8537e1f34eac176f5', 'Ð®Ñ€Ð¸Ð¹', b'0');

-- --------------------------------------------------------

--
-- Структура таблицы `sotrudniki`
--

CREATE TABLE IF NOT EXISTS `sotrudniki` (
  `ID_SOTR` int(11) NOT NULL,
  `Name` varchar(200) COLLATE utf8_bin DEFAULT NULL,
  `Famaly` varchar(200) COLLATE utf8_bin DEFAULT NULL,
  `Othestvo` varchar(200) COLLATE utf8_bin DEFAULT NULL,
  `pas_ser` varchar(2) COLLATE utf8_bin DEFAULT NULL,
  `pas_num` varchar(10) COLLATE utf8_bin DEFAULT NULL,
  `pas_date` date DEFAULT NULL,
  `pas_orden` varchar(200) COLLATE utf8_bin DEFAULT NULL,
  `Obrazovan` varchar(200) COLLATE utf8_bin DEFAULT NULL,
  `Date_rozh` date DEFAULT NULL,
  `Otnoshenye` varchar(200) COLLATE utf8_bin DEFAULT NULL,
  `dolgnost` varchar(200) COLLATE utf8_bin DEFAULT NULL,
  `Date_work` date DEFAULT NULL,
  `Prikaz` varchar(20) COLLATE utf8_bin DEFAULT NULL,
  `phone` varchar(13) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Дамп данных таблицы `sotrudniki`
--

INSERT INTO `sotrudniki` (`ID_SOTR`, `Name`, `Famaly`, `Othestvo`, `pas_ser`, `pas_num`, `pas_date`, `pas_orden`, `Obrazovan`, `Date_rozh`, `Otnoshenye`, `dolgnost`, `Date_work`, `Prikaz`, `phone`) VALUES
(1, 'ÐžÐ»ÐµÐ³', 'ÐšÑƒÑ€Ð½Ð¸Ñ†Ð¾Ð²', 'Ð’Ð»Ð°Ð´Ð¸Ð¼Ð¸Ñ€Ð¾Ð²Ð¸Ñ‡', '', '', NULL, '', 'ÐœÐ°Ð³Ð¸ÑÑ‚Ñ€ Ð½Ð°ÑƒÐº', '1987-01-17', '', 'Ð¿Ñ€Ð¾Ð³Ñ€Ð°Ð¼Ð¼Ð¸ÑÑ‚', '2015-09-07', '', '+375293333444'),
(2, 'Ð®Ñ€Ð¸Ð¹', 'ÐœÐ¸Ñ…Ð°Ð¹Ð»Ð¾Ð²Ð¸Ñ‡', 'Ð§ÐµÐ¿Ð¸ÐºÐ¾Ð²', '', '', NULL, '', '', NULL, '', 'Ð—Ð°Ð¼ÐµÑÑ‚Ð¸Ñ‚ÐµÐ»ÑŒ Ð´Ð¸Ñ€ÐµÐºÑ‚Ð¾Ñ€Ð°', '2013-04-01', '', NULL),
(3, 'Ð˜Ñ€Ð¸Ð½Ð°', 'Ð Ð¸Ð·Ð½Ð¸Ñ‡ÑƒÐº', 'Ð¡Ñ‚ÐµÐ¿Ð°Ð½Ð¾Ð²Ð½Ð°', '', '', NULL, '', 'Ð’Ñ‹ÑÑˆÐµÐµ', NULL, '', 'Ð‘ÑƒÑ…Ð³Ð°Ð»Ñ‚ÐµÑ€', '2014-05-02', '', NULL),
(4, 'ÐœÐ°Ñ€Ð¸Ñ', 'Ð’Ð¾Ð»Ð¾Ñ‚Ð¾Ð²ÑÐºÐ°Ñ', 'ÐœÐ°Ñ€Ð¸Ñ', '', '', NULL, '', 'Ð’Ñ‹ÑÑˆÐµÐµ', NULL, '', '', '2015-09-11', '', NULL),
(5, 'ÐÐ½Ñ‚Ð¾Ð½', 'ÐšÐ¾Ñ€ÑˆÑƒÐ½Ð¾Ð²', 'Ð›ÐµÐ¾Ð½Ð¸Ð´Ð¾Ð²Ð¸Ñ‡', '', '', NULL, '', 'Ð’Ñ‹ÑÑˆÐµÐµ', NULL, '', 'Ð˜Ð½Ð¶ÐµÐ½ÐµÑ€ ÐŸÐ¢Ðž', '2013-11-25', '', NULL),
(6, 'Ð¡ÐµÑ€Ð³ÐµÐ¹', 'Ð¡Ð¸Ð¼Ð°Ð½Ñ‡ÑƒÐº', 'Ð¡ÐµÑ€Ð³ÐµÐµÐ²Ð¸Ñ‡', '', '', NULL, '', 'Ð’Ñ‹ÑÑˆÐµÐµ', NULL, '', 'Ð¡Ð½Ð°Ð±Ð¶ÐµÐ½ÐµÑ†', '2012-01-13', '', NULL),
(7, 'ÐÐ½Ð½Ð°', 'Ð¨ÐµÑ€ÑˆÐ½ÐµÐ²Ð°', 'ÐÐ¸ÐºÐ¾Ð»Ð°ÐµÐ²Ð½Ð°', '', '', NULL, '', 'Ð’Ñ‹ÑÑˆÐµÐµ', NULL, '', 'Ð˜Ð½Ð¶ÐµÐ½ÐµÑ€ ÐŸÐ¢Ðž', '2014-06-04', '', NULL),
(8, 'Ð®Ñ€Ð¸Ð¹', 'Ð“Ð°Ð¿Ð¾Ð½', 'Ð®Ñ€Ð¸Ð¹', '', '', NULL, '', '', NULL, '', 'Ð½Ðµ Ð¿Ñ€Ð¸Ð½ÑÑ‚', '2000-01-01', '', NULL),
(9, 'Ð®Ð»Ð¸Ñ', 'ÐšÐ¾Ð²Ð°Ð»ÐµÐ²Ð°', 'Ð®Ð»Ð¸Ñ', '', '', NULL, '', 'Ð²Ñ‹ÑÑˆÐµÐµ', NULL, '', 'ÑÐºÐ¾Ð½Ð¾Ð¼Ð¸ÑÑ‚', '2015-08-13', '', NULL),
(10, 'ÐÐ½Ð´Ñ€ÐµÐ¹', 'Ð“ÑƒÐ½ÐµÐ²', 'ÐÐ½Ð´Ñ€ÐµÐ¹', '', '', NULL, '', 'Ð’Ñ‹ÑÑˆÐµÐµ', NULL, '', 'Ð®Ñ€Ð¸ÑÑ‚', '2015-01-05', '', NULL),
(11, 'Ð’Ð»Ð°Ð´Ð¸Ð¼Ð¸Ñ€', 'Ð‘ÑƒÐ»Ð°Ð²ÐºÐ¸Ð½', 'Ð’Ð»Ð°Ð´Ð¸Ð¼Ð¸Ñ€Ð¾Ð²Ð¸Ñ‡', '', '', NULL, '', '', NULL, '', 'Ð—Ð°Ð².Ð¥Ð¾Ð·.', '2015-08-03', '', NULL),
(12, 'Ð’Ð»Ð°Ð´', 'Ð›Ð°ÑˆÐºÐµÐ²Ð¸Ñ‡', 'ÐÐ¸ÐºÐ¾Ð»Ð°ÐµÐ²Ð¸Ñ‡', '', '', NULL, '', '', NULL, '', 'Ð’Ð¾Ð´Ð¸Ñ‚ÐµÐ»ÑŒ Ð¿Ð¾Ð³Ñ€ÑƒÐ·Ñ‡Ð¸ÐºÐ°', '2015-08-03', '', NULL),
(13, 'Ð¡ÐµÑ€Ð³ÐµÐ¹', 'ÐšÐ¾ÑÑ‚ÑŒÑÐ½Ð¾Ð²', 'Ð’Ð»Ð°Ð´Ð¸Ð¼Ð¸Ñ€Ð¾Ð²Ð¸Ñ‡', '', '', NULL, '', '', NULL, '', 'ÑÐ»ÐµÐºÑ‚Ñ€Ð¸Ðº', '2014-03-03', '', NULL),
(14, 'Ð’ÑÑ‡ÐµÑÐ»Ð°Ð²', 'Ð’Ð°ÑÐ¸Ð»ÑŒÐµÐ²Ð¸Ñ‡', 'Ð’Ð¾Ñ€Ð¾Ð½Ð¾Ð²', '', '', NULL, '', '', NULL, '', 'ÐœÐ°ÑÑ‚ÐµÑ€', '2014-03-03', '', NULL),
(15, 'ÐÐ»ÐµÐºÑÐ°Ð½Ð´Ñ€', 'Ð¥Ñ€Ð°Ð¿Ð¾Ð²Ð¸Ñ†ÐºÐ¸Ð¹', 'Ð“ÐµÐ½Ð½Ð°Ð´ÑŒÐµÐ²Ð¸Ñ‡', '', '', NULL, '', '', NULL, '', 'ÐŸÑ€Ð¾Ñ€Ð°Ð±', '2013-07-01', '', NULL),
(17, 'Ð’Ð°ÑÐ¸Ð»Ð¸Ð¹', 'Ð›ÑƒÑ†ÐºÐ¾', 'Ð’Ð°ÑÐ¸Ð»ÑŒÐµÐ²Ð¸Ñ‡', '', '', NULL, '', '', NULL, '', 'Ð’Ð¾Ð´Ð¸Ñ‚ÐµÐ»ÑŒ', '2013-01-01', '', NULL),
(18, 'ÐžÐ»ÐµÐ³', 'ÐœÐ°ÑÐ»Ð¾Ð²', 'ÐÐ¸ÐºÐ¾Ð»Ð°ÐµÐ²Ð¸Ñ‡', '', '', NULL, '', '', NULL, '', 'Ð’Ð¾Ð´Ð¸Ñ‚ÐµÐ»ÑŒ Ð¿Ð¾Ð³Ñ€ÑƒÐ·Ñ‡Ð¸ÐºÐ°', '2014-04-01', '', NULL),
(19, 'ÐÐ»ÐµÐºÑÐ°Ð½Ð´Ñ€', 'ÐŸÐ°Ð²Ð»Ð¾Ð²', 'Ð’Ð°Ð»ÐµÑ€ÑŒÐµÐ²Ð¸Ñ‡', '', '', NULL, '', '', NULL, '', 'Ð¿Ñ€Ð¾Ñ€Ð°Ð± ÑÐ°Ð½Ñ‚ÐµÑ…Ð½Ð¸ÐºÐ¾Ð²', '2015-04-06', '', NULL),
(20, 'ÐÐ»ÐµÐºÑÐ°Ð½Ð´Ñ€', 'ÐšÐ¾Ð¿ÐµÐ»ÐµÐ²Ð¸Ñ‡', 'Ð’Ð°Ð»ÐµÑ€ÑŒÐµÐ²Ð¸Ñ‡', '', '', NULL, '', '', NULL, '', 'Ð”Ð¸Ñ€ÐµÐºÑ‚Ð¾Ñ€', '2013-03-01', '', NULL),
(21, 'ÐÐ»ÐµÐºÑÐµÐ¹', 'Ð”Ñ€Ð¾Ð·Ð´Ð¾Ð²', 'ÐÐ»ÐµÐºÑÐµÐ¹', '', '', NULL, '', 'Ð½Ðµ Ð¿Ñ€Ð¸Ð½ÑÑ‚', NULL, '', 'ÐŸÑ€Ð¾Ñ€Ð°Ð±', '2000-01-01', '', NULL),
(22, 'ÐœÐ¸Ñ…Ð°Ð¸Ð»', 'Ð”Ð²Ð¾Ñ€Ð½Ð¸Ðº', 'ÐœÐ¸Ñ…Ð°Ð¸Ð»', '', '', NULL, '', 'Ð½Ðµ Ð¿Ñ€Ð¸Ð½ÑÑ‚', NULL, '', 'ÐŸÑ€Ð¾Ñ€Ð°Ð±', '2000-01-01', '', NULL),
(23, 'Ð­Ð´ÑƒÐ°Ñ€Ð´', 'ÐŸÐ¾Ð¿Ð¾Ð²', 'Ð­Ð´ÐµÐ°Ñ€Ð´', '', '', NULL, '', 'Ð½Ðµ Ð¿Ñ€Ð¸Ð½ÑÑ‚', NULL, '', 'ÐœÐ°ÑÑ‚ÐµÑ€', '2000-01-01', '', NULL),
(24, 'Ð®Ñ€Ð¸Ð¹', 'Ð—Ð¸Ð½Ñ‡ÐµÐ½ÐºÐ¾', 'Ð®Ñ€Ð¸Ð¹', '', '', NULL, '', 'Ð½Ðµ Ð¿Ñ€Ð¸Ð½ÑÑ‚', NULL, '', 'Ð¿Ñ€Ð¾Ñ€Ð°Ð±', '2000-01-01', '', NULL);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `conditats`
--
ALTER TABLE `conditats`
  ADD PRIMARY KEY (`ID_SOTR`),
  ADD UNIQUE KEY `ID_SOTR` (`ID_SOTR`);

--
-- Индексы таблицы `dismissed`
--
ALTER TABLE `dismissed`
  ADD PRIMARY KEY (`ID_SOTR`),
  ADD UNIQUE KEY `ID_SOTR` (`ID_SOTR`);

--
-- Индексы таблицы `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`UserID`);

--
-- Индексы таблицы `sotrudniki`
--
ALTER TABLE `sotrudniki`
  ADD PRIMARY KEY (`ID_SOTR`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `conditats`
--
ALTER TABLE `conditats`
  MODIFY `ID_SOTR` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT для таблицы `dismissed`
--
ALTER TABLE `dismissed`
  MODIFY `ID_SOTR` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT для таблицы `login`
--
ALTER TABLE `login`
  MODIFY `UserID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT для таблицы `sotrudniki`
--
ALTER TABLE `sotrudniki`
  MODIFY `ID_SOTR` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=29;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
