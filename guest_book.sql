-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Час створення: Сер 19 2017 р., 21:11
-- Версія сервера: 5.6.37
-- Версія PHP: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База даних: `guest_book`
--

-- --------------------------------------------------------

--
-- Структура таблиці `guest_book`
--

CREATE TABLE `guest_book` (
  `ID` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `homepage` varchar(100) NOT NULL,
  `captcha` varchar(100) NOT NULL,
  `message` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп даних таблиці `guest_book`
--

INSERT INTO `guest_book` (`ID`, `name`, `email`, `homepage`, `captcha`, `message`) VALUES
(58, 'Alex', 'Alex@mail.com', 'http://alexsite.ua', '', 'HI people! '),
(59, 'IgorNeyron', 'Neuron@gmail.com', 'http://mybusines.ua', '', 'Hi men! '),
(60, 'MainControl', 'maincon@mail.com', 'http://mainsite.com', '', 'What is your mood?'),
(61, 'MeanMashins', 'meanmashins@mti.com', 'http://blogmm.com', '', 'I am hungry!\r\n '),
(62, 'NeroHero', 'HeroNNN@mail.com', 'http://NeroBlog.com', '', 'I like pretty girls!)'),
(63, 'OpOpHeroina', 'heroina@mail.com', 'http://partyallday.com', '', 'I like pretty girls, too!)'),
(64, 'luckMen', 'lucky@mail.ua', 'http://luckydayforyou.com', '', 'Nice to meet you! '),
(65, 'VBRevil', 'VBR@mail.ua', 'http://lamVBRevil.com', '', 'Who wants to drink coffee?'),
(66, 'CrazyTank', 'Tank@mail.com', 'http://heavytank.com', '', 'I want!'),
(67, 'Chefcook', 'chefcook@mail.com', 'http://chefcook.ua', '', 'Who wants a cookie?'),
(68, 'Litlebutterfly', 'butterfly@mail.com', 'http://butterfly.ua', '', 'I want'),
(69, 'Chefcook', 'chefcook@mail.com', 'http://chefcook.ua', '', ' Then go to the market!'),
(70, 'Joker', 'jaker@mail.com', 'http://jokerkiller.ua', '', 'I love telling jokes'),
(71, 'LLL', 'lll@mail.com', 'http://lololo.com', '', 'Kek Lol Rofl!))) '),
(72, 'GarbageCollector', 'garbagecollector@mail.com', 'http://garbageforme.com', '', 'I like garbage very well'),
(73, 'mortis', 'mortisandmony@mail.com', 'http://morty.com', '', 'I like the world!'),
(74, 'NIck', 'NICK@mail.com', 'http://MegeMegeMEGOS.com', '', ' HI all!'),
(75, 'Marry', 'marry@mail.ua', 'http://marryvlog.com', '', 'Call me somebody tel: 067 678 52 34! '),
(76, 'Pain', 'pain@mail.com', 'http://painllamm.com', '', 'It is my message! '),
(77, 'Alexis', 'alexis@mail.com', 'http://blogmm.com', '', 'Tell me who I am? '),
(78, 'Mark', 'mark@mail.com', 'http://markavreliy.com', '', 'You are a spoiled little girl!'),
(79, 'Anton', 'Anton@mail.com', 'http://justanton.com', '', 'Who will watch soccer today?'),
(80, 'Andreotan', 'ant@mail.com', 'http://justant.com', '', 'I will watch'),
(81, 'TheBestPayer', 'payer@mail.com', 'http://payer.com', '', 'GO to pub!'),
(82, 'MONDGOMERY', 'mononm@mail.com', 'http://mmmooo.com', '', 'GO'),
(83, 'BigWolf', 'wofwof@mail.com', 'http://wolfick.ua', '', ' I locking for Red Riding Hood\r\n');

--
-- Індекси збережених таблиць
--

--
-- Індекси таблиці `guest_book`
--
ALTER TABLE `guest_book`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT для збережених таблиць
--

--
-- AUTO_INCREMENT для таблиці `guest_book`
--
ALTER TABLE `guest_book`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
