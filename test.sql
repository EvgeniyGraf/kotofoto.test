-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июл 29 2022 г., 12:57
-- Версия сервера: 5.7.29
-- Версия PHP: 7.3.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `test`
--

-- --------------------------------------------------------

--
-- Структура таблицы `price_table`
--

CREATE TABLE `price_table` (
  `price_table_id` int(11) NOT NULL,
  `price_table_region` int(11) NOT NULL,
  `price_table_product` int(11) NOT NULL,
  `price_table_price_purchase` varchar(128) NOT NULL,
  `price_table_price_selling` varchar(128) NOT NULL,
  `price_table_price_discount` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `price_table`
--

INSERT INTO `price_table` (`price_table_id`, `price_table_region`, `price_table_product`, `price_table_price_purchase`, `price_table_price_selling`, `price_table_price_discount`) VALUES
(401, 1, 1001001, '10001', '12001', '11001'),
(402, 2, 1001001, '10002', '12002', '11002'),
(403, 3, 1001001, '10003', '12003', '11003'),
(404, 4, 1001001, '10004', '12004', '11004'),
(405, 5, 1001001, '10005', '12005', '11005'),
(406, 6, 1001001, '10006', '12006', '11006'),
(407, 7, 1001001, '10007', '12007', '11007'),
(408, 8, 1001001, '10008', '12008', '11008'),
(409, 9, 1001001, '10009', '12009', '11009'),
(410, 10, 1001001, '10010', '12010', '11010'),
(411, 11, 1001001, '10011', '12011', '11011'),
(412, 12, 1001001, '10012', '12012', '11012'),
(413, 13, 1001001, '10013', '12013', '11013'),
(414, 14, 1001001, '10014', '12014', '11014'),
(415, 15, 1001001, '10015', '12015', '11015'),
(416, 16, 1001001, '10016', '12016', '11016'),
(417, 17, 1001001, '10017', '12017', '11017'),
(418, 18, 1001001, '10018', '12018', '11018'),
(419, 19, 1001001, '10019', '12019', '11019'),
(420, 20, 1001001, '10020', '12020', '11020'),
(421, 1, 1001002, '20001', '22001', '21001'),
(422, 2, 1001002, '20002', '22002', '21002'),
(423, 3, 1001002, '20003', '22003', '21003'),
(424, 4, 1001002, '20004', '22004', '21004'),
(425, 5, 1001002, '20005', '22005', '21005'),
(426, 6, 1001002, '20006', '22006', '21006'),
(427, 7, 1001002, '20007', '22007', '21007'),
(428, 8, 1001002, '20008', '22008', '21008'),
(429, 9, 1001002, '20009', '22009', '21009'),
(430, 10, 1001002, '20010', '22010', '21010'),
(431, 11, 1001002, '20011', '22011', '21011'),
(432, 12, 1001002, '20012', '22012', '21012'),
(433, 13, 1001002, '20013', '22013', '21013'),
(434, 14, 1001002, '20014', '22014', '21014'),
(435, 15, 1001002, '20015', '22015', '21015'),
(436, 16, 1001002, '20016', '22016', '21016'),
(437, 17, 1001002, '20017', '22017', '21017'),
(438, 18, 1001002, '20018', '22018', '21018'),
(439, 19, 1001002, '20019', '22019', '21019'),
(440, 20, 1001002, '20020', '22020', '21020');

-- --------------------------------------------------------

--
-- Структура таблицы `product_table`
--

CREATE TABLE `product_table` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `product_table`
--

INSERT INTO `product_table` (`product_id`, `product_name`) VALUES
(1001001, '1001001'),
(1001002, '1001002');

-- --------------------------------------------------------

--
-- Структура таблицы `user_table`
--

CREATE TABLE `user_table` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(32) NOT NULL,
  `user_password` varchar(32) NOT NULL,
  `user_key` varchar(64) NOT NULL,
  `user_session` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `user_table`
--

INSERT INTO `user_table` (`user_id`, `user_name`, `user_password`, `user_key`, `user_session`) VALUES
(1, 'test', 'test', '76561198263364899', '');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `price_table`
--
ALTER TABLE `price_table`
  ADD PRIMARY KEY (`price_table_id`),
  ADD KEY `price_table_product` (`price_table_product`);

--
-- Индексы таблицы `product_table`
--
ALTER TABLE `product_table`
  ADD PRIMARY KEY (`product_id`);

--
-- Индексы таблицы `user_table`
--
ALTER TABLE `user_table`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `user_name` (`user_name`),
  ADD UNIQUE KEY `user_key` (`user_key`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `price_table`
--
ALTER TABLE `price_table`
  MODIFY `price_table_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=441;

--
-- AUTO_INCREMENT для таблицы `product_table`
--
ALTER TABLE `product_table`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1001003;

--
-- AUTO_INCREMENT для таблицы `user_table`
--
ALTER TABLE `user_table`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `price_table`
--
ALTER TABLE `price_table`
  ADD CONSTRAINT `price_table_ibfk_1` FOREIGN KEY (`price_table_product`) REFERENCES `product_table` (`product_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
