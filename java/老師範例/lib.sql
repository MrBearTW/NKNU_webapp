-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- 主機: 127.0.0.1
-- 產生日期: 2018 年 09 月 28 日 09:28
-- 伺服器版本: 5.5.27
-- PHP 版本: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 資料庫: `lib`
--

-- --------------------------------------------------------

--
-- 表的結構 `book`
--

CREATE TABLE IF NOT EXISTS `book` (
  `id` varchar(20) NOT NULL,
  `title` varchar(50) NOT NULL,
  `borrower` varchar(20) NOT NULL,
  `price` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 轉存資料表中的資料 `book`
--

INSERT INTO `book` (`id`, `title`, `borrower`, `price`) VALUES
('01', 'Master Sea''s Precious Words ', 'john', 1000),
('02', 'About Getting Beyond', 'john', 800),
('03', 'What a Beautiful Day', 'tom', 500);

-- --------------------------------------------------------

--
-- 表的結構 `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `account` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`account`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 轉存資料表中的資料 `user`
--

INSERT INTO `user` (`account`, `password`, `phone`, `address`) VALUES
('john', 'abc', '1234567', 'ppp'),
('mary', 'def', '7654321', NULL),
('tom', '123', '0800112', ' ');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
