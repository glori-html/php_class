-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2021-04-07 05:06:01
-- 伺服器版本： 10.4.18-MariaDB
-- PHP 版本： 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `mydata`
--

-- --------------------------------------------------------

--
-- 資料表結構 `address_book`
--

CREATE TABLE `address_book` (
  `sid` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `birthday` date NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `mobile` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 傾印資料表的資料 `address_book`
--

INSERT INTO `address_book` (`sid`, `name`, `birthday`, `email`, `mobile`, `address`, `created_at`) VALUES
(1, '李小明', '1992-05-21', 'ming@gmail.com', '0922660678', '台北市', '2021-04-07 10:35:28'),
(2, '王小露', '1993-02-16', 'lu@gmail.com', '0921660635', '台北市', '2021-04-07 10:36:28'),
(3, '陳小明', '1992-05-21', 'ming@gmail.com', '0922660678', '台北市', '0000-00-00 00:00:00'),
(4, '董小明', '1992-05-21', 'ming@gmail.com', '0922660678', '台北市', '0000-00-00 00:00:00'),
(5, '吳小明', '1992-05-21', 'ming@gmail.com', '0922660678', '台北市', '0000-00-00 00:00:00'),
(6, '葉小明', '1992-05-21', 'ming@gmail.com', '0922660678', '台北市', '2021-04-07 11:00:34'),
(7, '黃小明', '1992-05-21', 'ming@gmail.com', '0922660678', '台北市', '2021-04-07 11:00:34'),
(8, '顧小明', '1992-05-21', 'ming@gmail.com', '0922660678', '台北市', '2021-04-07 11:00:34');

UPDATE `address_book` SET `sid`='5',`name`='新人',`address`='台南市' WHERE sid = 5

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `address_book`
--
ALTER TABLE `address_book`
  ADD PRIMARY KEY (`sid`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `address_book`
--
ALTER TABLE `address_book`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
