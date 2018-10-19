-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- 主機: 127.0.0.1
-- 產生時間： 2018-10-19 03:01:41
-- 伺服器版本: 10.1.34-MariaDB
-- PHP 版本： 5.6.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `coustmer`
--
CREATE DATABASE IF NOT EXISTS `coustmer` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `coustmer`;

-- --------------------------------------------------------

--
-- 資料表結構 `coustmer`
--

CREATE TABLE `coustmer` (
  `cu_id` varchar(8) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `cu_password` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `cu_email` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `cu_phone` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `cu_name` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `cu_showname` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `cu_address` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `cu_creditcard` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `cu_membercard` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `cu_singuptime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `autoformnumber` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=COMPACT;

--
-- 資料表的匯出資料 `coustmer`
--

INSERT INTO `coustmer` (`cu_id`, `cu_password`, `cu_email`, `cu_phone`, `cu_name`, `cu_showname`, `cu_address`, `cu_creditcard`, `cu_membercard`, `cu_singuptime`, `autoformnumber`) VALUES
('c000001', '0', '123@nknu.com', '091234567', '李芃芃', '澎澎', '高師大門口', '11111', '66666', '2018-10-09 17:46:17', 1),
('c000002', '0', '456@nknu.com', '071234567', '戴姿姿', '國手', '高師大後門口', '22222', '77777', '2018-10-09 17:46:17', 2),
('c000003', '0', '5566@nknu.com', '0212345678', '柯醫生', 'Dr.Kao', '市政府', '33333', '88888', '2018-10-09 17:46:17', 3),
('c000004', '0', '9487@nknu.com', '077654321', '賈伯斯', 'Jobs', '公園路一號', '44444', '99999', '2018-10-09 17:46:17', 4),
('c000005', '0', '8917@nknu.com', '0912345678', '谷劈柴', 'G社CEO', '山景城', '55555', '10101', '2018-10-09 17:46:17', 5),
('c000006', '65939', '6', '6', '6', '', '', '', '', '2018-10-18 14:10:15', 6),
('c000007', '7773104', '7777', '77777777777', '777777777777777', '', '', '', '', '2018-10-18 14:26:56', 7),
('c000008', '77777777777777777', '777777777777', '777777777777777777', '77777777777777777777', '', '', '', '', '2018-10-18 14:29:47', 8);

-- --------------------------------------------------------

--
-- 資料表結構 `employee`
--

CREATE TABLE `employee` (
  `emp_id` varchar(6) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `emp_level` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `emp_name` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `emp_sname` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `emp_phone` varchar(15) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=COMPACT;

--
-- 資料表的匯出資料 `employee`
--

INSERT INTO `employee` (`emp_id`, `emp_level`, `emp_name`, `emp_sname`, `emp_phone`) VALUES
('e0001', '店長', '彭李李', 'PONG', '09111111'),
('e0002', '經理', '費卿卿', '小哥', '09222222'),
('e0003', '正職店員', '范冰冰', '范爺', '09333333'),
('e0004', '工讀生', '李冰冰', '小小兵', '09444444'),
('e0005', '工讀生', '白冰冰', '流星拳', '09555555');

-- --------------------------------------------------------

--
-- 資料表結構 `menu`
--

CREATE TABLE `menu` (
  `menu_id` varchar(6) COLLATE utf8_unicode_ci NOT NULL,
  `menu_group` varchar(6) COLLATE utf8_unicode_ci NOT NULL,
  `menu_name` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `menu_price` int(5) NOT NULL,
  `menu_daysell` int(5) DEFAULT NULL,
  `menu_daylave` int(5) DEFAULT NULL,
  `menu_canbesell` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT;

--
-- 資料表的匯出資料 `menu`
--

INSERT INTO `menu` (`menu_id`, `menu_group`, `menu_name`, `menu_price`, `menu_daysell`, `menu_daylave`, `menu_canbesell`) VALUES
('me001', '蛋餅', '原味蛋餅', 20, 20, NULL, NULL),
('me002', '蛋餅', '肉鬆蛋餅', 25, 20, NULL, NULL),
('me001', '蛋餅', '原味蛋餅', 20, 20, NULL, NULL),
('me003', '蛋餅', '九層塔蛋餅', 25, 20, NULL, NULL),
('me002', '蛋餅', '肉鬆蛋餅', 25, 20, NULL, NULL),
('me004', '蛋餅', '玉米蛋餅', 30, 20, NULL, NULL),
('me003', '蛋餅', '九層塔蛋餅', 25, 20, NULL, NULL),
('me005', '蛋餅', '蔬菜蛋餅', 30, 20, NULL, NULL),
('me004', '蛋餅', '玉米蛋餅', 30, 20, NULL, NULL),
('me006', '蛋餅', '火腿蛋餅', 30, 20, NULL, NULL),
('me005', '蛋餅', '蔬菜蛋餅', 30, 20, NULL, NULL),
('me007', '蛋餅', '起司蛋餅', 30, 20, NULL, NULL),
('me006', '蛋餅', '火腿蛋餅', 30, 20, NULL, NULL),
('me008', '蛋餅', '培根蛋餅', 35, 20, NULL, NULL),
('me007', '蛋餅', '起司蛋餅', 30, 20, NULL, NULL),
('me009', '蛋餅', '燻雞蛋餅', 40, 20, NULL, NULL),
('me008', '蛋餅', '培根蛋餅', 35, 20, NULL, NULL),
('me010', '蛋餅', '薯餅起司蛋餅', 45, 20, NULL, NULL),
('me009', '蛋餅', '燻雞蛋餅', 40, 20, NULL, NULL),
('me011', '蛋餅', '招牌蛋餅', 45, 20, NULL, NULL),
('me010', '蛋餅', '薯餅起司蛋餅', 45, 20, NULL, NULL),
('me012', '漢堡', '蔬菜堡', 30, 20, NULL, NULL),
('me011', '蛋餅', '招牌蛋餅', 45, 20, NULL, NULL),
('me013', '漢堡', '香雞堡', 30, 20, NULL, NULL),
('me012', '漢堡', '蔬菜堡', 30, 20, NULL, NULL),
('me014', '漢堡', '招牌豬肉堡', 30, 20, NULL, NULL),
('me013', '漢堡', '香雞堡', 30, 20, NULL, NULL),
('me015', '漢堡', '培根堡', 35, 20, NULL, NULL),
('me014', '漢堡', '招牌豬肉堡', 30, 20, NULL, NULL),
('me016', '漢堡', '燻雞堡', 40, 20, NULL, NULL),
('me015', '漢堡', '培根堡', 35, 20, NULL, NULL),
('me017', '漢堡', '照燒豬肉堡', 40, 20, NULL, NULL),
('me016', '漢堡', '燻雞堡', 40, 20, NULL, NULL),
('me018', '漢堡', '里肌堡', 45, 20, NULL, NULL),
('me017', '漢堡', '照燒豬肉堡', 40, 20, NULL, NULL),
('me019', '漢堡', '炸豬排堡', 50, 20, NULL, NULL),
('me018', '漢堡', '里肌堡', 45, 20, NULL, NULL),
('me020', '漢堡', '卡啦雞腿堡', 50, 20, NULL, NULL),
('me019', '漢堡', '炸豬排堡', 50, 20, NULL, NULL),
('me021', '漢堡', '勁辣雞腿堡', 50, 20, NULL, NULL),
('me020', '漢堡', '卡啦雞腿堡', 50, 20, NULL, NULL),
('me022', '果醬吐司厚片', '草莓吐司', 15, 20, NULL, NULL),
('me021', '漢堡', '勁辣雞腿堡', 50, 20, NULL, NULL),
('me023', '果醬吐司厚片', '花生吐司', 15, 20, NULL, NULL),
('me024', '果醬吐司厚片', '巧克力吐司', 15, 20, NULL, NULL),
('me022', '果醬吐司厚片', '草莓吐司', 15, 20, NULL, NULL),
('me025', '果醬吐司厚片', '藍莓吐司', 15, 20, NULL, NULL),
('me023', '果醬吐司厚片', '花生吐司', 15, 20, NULL, NULL),
('me026', '果醬吐司厚片', '抹茶吐司', 15, 20, NULL, NULL),
('me024', '果醬吐司厚片', '巧克力吐司', 15, 20, NULL, NULL),
('me027', '果醬吐司厚片', '奶酥吐司', 15, 20, NULL, NULL),
('me025', '果醬吐司厚片', '藍莓吐司', 15, 20, NULL, NULL),
('me028', '果醬吐司厚片', '草莓厚片', 25, 20, NULL, NULL),
('me026', '果醬吐司厚片', '抹茶吐司', 15, 20, NULL, NULL),
('me029', '果醬吐司厚片', '花生厚片', 25, 20, NULL, NULL),
('me027', '果醬吐司厚片', '奶酥吐司', 15, 20, NULL, NULL),
('me030', '果醬吐司厚片', '巧克力厚片', 25, 20, NULL, NULL),
('me028', '果醬吐司厚片', '草莓厚片', 25, 20, NULL, NULL),
('me031', '果醬吐司厚片', '藍莓厚片', 25, 20, NULL, NULL),
('me029', '果醬吐司厚片', '花生厚片', 25, 20, NULL, NULL),
('me032', '果醬吐司厚片', '抹茶厚片', 25, 20, NULL, NULL),
('me030', '果醬吐司厚片', '巧克力厚片', 25, 20, NULL, NULL),
('me033', '果醬吐司厚片', '奶酥厚片', 25, 20, NULL, NULL),
('me031', '果醬吐司厚片', '藍莓厚片', 25, 20, NULL, NULL),
('me034', '吐司', '煎蛋吐司', 20, 20, NULL, NULL),
('me032', '果醬吐司厚片', '抹茶厚片', 25, 20, NULL, NULL),
('me035', '吐司', '起司吐司', 25, 20, NULL, NULL),
('me033', '果醬吐司厚片', '奶酥厚片', 25, 20, NULL, NULL),
('me036', '吐司', '蔬菜吐司', 25, 20, NULL, NULL),
('me034', '吐司', '煎蛋吐司', 20, 20, NULL, NULL),
('me037', '吐司', '肉鬆吐司', 25, 20, NULL, NULL),
('me035', '吐司', '起司吐司', 25, 20, NULL, NULL),
('me038', '吐司', '火腿吐司', 25, 20, NULL, NULL),
('me036', '吐司', '蔬菜吐司', 25, 20, NULL, NULL),
('me039', '吐司', '豬肉吐司', 25, 20, NULL, NULL),
('me037', '吐司', '肉鬆吐司', 25, 20, NULL, NULL),
('me040', '吐司', '培根吐司', 30, 20, NULL, NULL),
('me038', '吐司', '火腿吐司', 25, 20, NULL, NULL),
('me041', '吐司', '鮪魚吐司', 30, 20, NULL, NULL),
('me039', '吐司', '豬肉吐司', 25, 20, NULL, NULL),
('me042', '吐司', '薯餅吐司', 30, 20, NULL, NULL),
('me040', '吐司', '培根吐司', 30, 20, NULL, NULL),
('me043', '吐司', '香雞吐司', 30, 20, NULL, NULL),
('me041', '吐司', '鮪魚吐司', 30, 20, NULL, NULL),
('me044', '吐司', '法國土司', 35, 20, NULL, NULL),
('me042', '吐司', '薯餅吐司', 30, 20, NULL, NULL),
('me045', '吐司', '燻雞吐司', 35, 20, NULL, NULL),
('me043', '吐司', '香雞吐司', 30, 20, NULL, NULL),
('me046', '吐司', '里肌吐司', 40, 20, NULL, NULL),
('me044', '吐司', '法國土司', 35, 20, NULL, NULL),
('me047', '吐司', '卡啦吐司', 50, 20, NULL, NULL),
('me045', '吐司', '燻雞吐司', 35, 20, NULL, NULL),
('me048', '吐司', '勁辣吐司', 50, 20, NULL, NULL),
('me046', '吐司', '里肌吐司', 40, 20, NULL, NULL),
('me049', '焗烤厚片', '火腿玉米', 45, 20, NULL, NULL),
('me047', '吐司', '卡啦吐司', 50, 20, NULL, NULL),
('me050', '焗烤厚片', '培根', 45, 20, NULL, NULL),
('me048', '吐司', '勁辣吐司', 50, 20, NULL, NULL),
('me051', '焗烤厚片', '鮪魚', 50, 20, NULL, NULL),
('me049', '焗烤厚片', '火腿玉米', 45, 20, NULL, NULL),
('me052', '焗烤厚片', '燻雞', 50, 20, NULL, NULL),
('me050', '焗烤厚片', '培根', 45, 20, NULL, NULL),
('me053', '熱壓吐司', '巧克力', 30, 20, NULL, NULL),
('me051', '焗烤厚片', '鮪魚', 50, 20, NULL, NULL),
('me054', '熱壓吐司', '草莓', 30, 20, NULL, NULL),
('me052', '焗烤厚片', '燻雞', 50, 20, NULL, NULL),
('me055', '熱壓吐司', '花生', 30, 20, NULL, NULL),
('me053', '熱壓吐司', '巧克力', 30, 20, NULL, NULL),
('me056', '熱壓吐司', '奶酥', 30, 20, NULL, NULL),
('me054', '熱壓吐司', '草莓', 30, 20, NULL, NULL),
('me057', '熱壓吐司', '抹茶', 30, 20, NULL, NULL),
('me055', '熱壓吐司', '花生', 30, 20, NULL, NULL),
('me058', '熱壓吐司', '豬肉起司蛋', 50, 20, NULL, NULL),
('me056', '熱壓吐司', '奶酥', 30, 20, NULL, NULL),
('me059', '熱壓吐司', '鮪魚玉米', 50, 20, NULL, NULL),
('me057', '熱壓吐司', '抹茶', 30, 20, NULL, NULL),
('me060', '熱壓吐司', '培根起司', 50, 20, NULL, NULL),
('me058', '熱壓吐司', '豬肉起司蛋', 50, 20, NULL, NULL),
('me061', '熱壓吐司', '火腿起司蛋', 50, 20, NULL, NULL),
('me059', '熱壓吐司', '鮪魚玉米', 50, 20, NULL, NULL),
('me062', '燒餅', '蔬菜燒餅', 30, 20, NULL, NULL),
('me060', '熱壓吐司', '培根起司', 50, 20, NULL, NULL),
('me063', '燒餅', '香雞燒餅', 35, 20, NULL, NULL),
('me061', '熱壓吐司', '火腿起司蛋', 50, 20, NULL, NULL),
('me064', '燒餅', '鮪魚燒餅', 45, 20, NULL, NULL),
('me062', '燒餅', '蔬菜燒餅', 30, 20, NULL, NULL),
('me065', '燒餅', '培根燒餅', 45, 20, NULL, NULL),
('me063', '燒餅', '香雞燒餅', 35, 20, NULL, NULL),
('me066', '燒餅', '里肌燒餅', 50, 20, NULL, NULL),
('me064', '燒餅', '鮪魚燒餅', 45, 20, NULL, NULL),
('me067', '總匯', '蔬菜總匯', 55, 20, NULL, NULL),
('me065', '燒餅', '培根燒餅', 45, 20, NULL, NULL),
('me068', '總匯', '招牌豬肉總匯', 55, 20, NULL, NULL),
('me066', '燒餅', '里肌燒餅', 50, 20, NULL, NULL),
('me069', '總匯', '培根總匯', 60, 20, NULL, NULL),
('me067', '總匯', '蔬菜總匯', 55, 20, NULL, NULL),
('me070', '總匯', '鮪魚總匯', 60, 20, NULL, NULL),
('me068', '總匯', '招牌豬肉總匯', 55, 20, NULL, NULL),
('me071', '總匯', '燻雞總匯', 65, 20, NULL, NULL),
('me069', '總匯', '培根總匯', 60, 20, NULL, NULL),
('me072', '總匯', '里肌總匯', 65, 20, NULL, NULL),
('me070', '總匯', '鮪魚總匯', 60, 20, NULL, NULL),
('me073', '總匯', '炸豬排總匯', 70, 20, NULL, NULL),
('me071', '總匯', '燻雞總匯', 65, 20, NULL, NULL),
('me074', '總匯', '卡啦雞腿總匯', 70, 20, NULL, NULL),
('me072', '總匯', '里肌總匯', 65, 20, NULL, NULL),
('me075', '總匯', '勁辣雞腿總匯', 70, 20, NULL, NULL),
('me073', '總匯', '炸豬排總匯', 70, 20, NULL, NULL),
('me074', '總匯', '卡啦雞腿總匯', 70, 20, NULL, NULL),
('me076', '單品', '荷包蛋', 10, 20, NULL, NULL),
('me075', '總匯', '勁辣雞腿總匯', 70, 20, NULL, NULL),
('me077', '單品', '薯餅', 15, 20, NULL, NULL),
('me076', '單品', '荷包蛋', 10, 20, NULL, NULL),
('me078', '單品', '熱狗', 15, 20, NULL, NULL),
('me077', '單品', '薯餅', 15, 20, NULL, NULL),
('me079', '單品', '熱狗蛋捲', 25, 20, NULL, NULL),
('me078', '單品', '熱狗', 15, 20, NULL, NULL),
('me080', '單品', '蔥抓餅', 25, 20, NULL, NULL),
('me079', '單品', '熱狗蛋捲', 25, 20, NULL, NULL),
('me081', '單品', '蔥肉餅', 30, 20, NULL, NULL),
('me080', '單品', '蔥抓餅', 25, 20, NULL, NULL),
('me082', '單品', '薯條', 30, 20, NULL, NULL),
('me081', '單品', '蔥肉餅', 30, 20, NULL, NULL),
('me083', '單品', '蘿蔔糕', 30, 20, NULL, NULL),
('me082', '單品', '薯條', 30, 20, NULL, NULL),
('me084', '單品', '小不點雞塊', 30, 20, NULL, NULL),
('me083', '單品', '蘿蔔糕', 30, 20, NULL, NULL),
('me085', '單品', '雞米花', 30, 20, NULL, NULL),
('me084', '單品', '小不點雞塊', 30, 20, NULL, NULL),
('me086', '單品', '洋蔥圈', 30, 20, NULL, NULL),
('me085', '單品', '雞米花', 30, 20, NULL, NULL),
('me087', '單品', '雞塊', 30, 20, NULL, NULL),
('me086', '單品', '洋蔥圈', 30, 20, NULL, NULL),
('me088', '單品', '煎餃', 35, 20, NULL, NULL),
('me087', '單品', '雞塊', 30, 20, NULL, NULL),
('me089', '單品', '脆薯', 40, 20, NULL, NULL),
('me088', '單品', '煎餃', 35, 20, NULL, NULL),
('me090', '加料', '蛋', 5, 20, NULL, NULL),
('me089', '單品', '脆薯', 40, 20, NULL, NULL),
('me091', '加料', '起司', 10, 20, NULL, NULL),
('me090', '加料', '蛋', 5, 20, NULL, NULL),
('me092', '加料', '起司條', 10, 20, NULL, NULL),
('me091', '加料', '起司', 10, 20, NULL, NULL),
('me093', '加料', '豬肉片', 10, 20, NULL, NULL),
('me092', '加料', '起司條', 10, 20, NULL, NULL),
('me094', '鍋燒類', '炒泡麵', 60, 20, NULL, NULL),
('me093', '加料', '豬肉片', 10, 20, NULL, NULL),
('me095', '鍋燒類', '鍋燒冬粉', 65, 20, NULL, NULL),
('me094', '鍋燒類', '炒泡麵', 60, 20, NULL, NULL),
('me096', '鍋燒類', '鍋燒雞絲', 65, 20, NULL, NULL),
('me095', '鍋燒類', '鍋燒冬粉', 65, 20, NULL, NULL),
('me097', '鍋燒類', '鍋燒烏龍', 65, 20, NULL, NULL),
('me096', '鍋燒類', '鍋燒雞絲', 65, 20, NULL, NULL),
('me098', '鍋燒類', '鍋燒泡麵', 65, 20, NULL, NULL),
('me097', '鍋燒類', '鍋燒烏龍', 65, 20, NULL, NULL),
('me099', '鍋燒類', '鍋燒意麵', 65, 20, NULL, NULL),
('me098', '鍋燒類', '鍋燒泡麵', 65, 20, NULL, NULL),
('me100', '中杯飲料', '紅茶', 15, 20, NULL, NULL),
('me099', '鍋燒類', '鍋燒意麵', 65, 20, NULL, NULL),
('me101', '中杯飲料', '奶茶', 20, 20, NULL, NULL),
('me100', '中杯飲料', '紅茶', 15, 20, NULL, NULL),
('me102', '中杯飲料', '豆漿', 20, 20, NULL, NULL),
('me101', '中杯飲料', '奶茶', 20, 20, NULL, NULL),
('me103', '中杯飲料', '紅茶豆漿', 25, 20, NULL, NULL),
('me102', '中杯飲料', '豆漿', 20, 20, NULL, NULL),
('me104', '中杯飲料', '鮮奶茶', 35, 20, NULL, NULL),
('me103', '中杯飲料', '紅茶豆漿', 25, 20, NULL, NULL),
('me105', '中杯飲料', '咖啡', 25, 20, NULL, NULL),
('me104', '中杯飲料', '鮮奶茶', 35, 20, NULL, NULL),
('me106', '中杯飲料', '鮮奶咖啡', 35, 20, NULL, NULL),
('me105', '中杯飲料', '咖啡', 25, 20, NULL, NULL),
('me107', '中杯飲料', '阿華田', 30, 20, NULL, NULL),
('me106', '中杯飲料', '鮮奶咖啡', 35, 20, NULL, NULL),
('me108', '中杯飲料', '柳橙汁', 25, 20, NULL, NULL),
('me107', '中杯飲料', '阿華田', 30, 20, NULL, NULL),
('me109', '中杯飲料', '蔓越莓', 25, 20, NULL, NULL),
('me108', '中杯飲料', '柳橙汁', 25, 20, NULL, NULL),
('me110', '大杯飲料', '紅茶', 20, 20, NULL, NULL),
('me109', '中杯飲料', '蔓越莓', 25, 20, NULL, NULL),
('me111', '大杯飲料', '奶茶', 25, 20, NULL, NULL),
('me110', '大杯飲料', '紅茶', 20, 20, NULL, NULL),
('me112', '大杯飲料', '豆漿', 25, 20, NULL, NULL),
('me111', '大杯飲料', '奶茶', 25, 20, NULL, NULL),
('me112', '大杯飲料', '豆漿', 25, 20, NULL, NULL),
('me113', '大杯飲料', '紅茶豆漿', 30, 20, NULL, NULL),
('me113', '大杯飲料', '紅茶豆漿', 30, 20, NULL, NULL),
('me114', '大杯飲料', '鮮奶茶', 40, 20, NULL, NULL),
('me114', '大杯飲料', '鮮奶茶', 40, 20, NULL, NULL),
('me115', '大杯飲料', '咖啡', 30, 20, NULL, NULL),
('me115', '大杯飲料', '咖啡', 30, 20, NULL, NULL),
('me116', '大杯飲料', '鮮奶咖啡', 40, 20, NULL, NULL),
('me116', '大杯飲料', '鮮奶咖啡', 40, 20, NULL, NULL),
('me117', '大杯飲料', '阿華田', 35, 20, NULL, NULL),
('me117', '大杯飲料', '阿華田', 35, 20, NULL, NULL),
('me118', '大杯飲料', '柳橙汁', 30, 20, NULL, NULL),
('me118', '大杯飲料', '柳橙汁', 30, 20, NULL, NULL),
('me119', '大杯飲料', '蔓越莓', 30, 20, NULL, NULL),
('me119', '大杯飲料', '蔓越莓', 30, 20, NULL, NULL);

-- --------------------------------------------------------

--
-- 資料表結構 `news`
--

CREATE TABLE `news` (
  `titel` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `content` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `footer` mediumtext COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `oorder`
--

CREATE TABLE `oorder` (
  `or_num` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `or_from` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `or_total` int(10) NOT NULL,
  `or_sat` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `cu_id` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `or_id` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `listtime` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `autonumber` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT;

--
-- 資料表的匯出資料 `oorder`
--

INSERT INTO `oorder` (`or_num`, `or_from`, `or_total`, `or_sat`, `cu_id`, `or_id`, `listtime`, `autonumber`) VALUES
('o201810161', '店內下單', 115, '已成立清單', '', 'e0001', '2018-10-16 02:59:00', 1),
('o201810182', '線上下單', 30, '已成立清單', 'c000001', 'c000001', '2018-10-18 14:31:09', 2);

-- --------------------------------------------------------

--
-- 資料表結構 `oorder_detail`
--

CREATE TABLE `oorder_detail` (
  `menu` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `csid` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `number` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `price` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `sum` int(20) NOT NULL,
  `id` int(11) NOT NULL,
  `listtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT;

--
-- 資料表的匯出資料 `oorder_detail`
--

INSERT INTO `oorder_detail` (`menu`, `csid`, `number`, `price`, `sum`, `id`, `listtime`) VALUES
('肉鬆蛋餅,蔬菜蛋餅,玉米蛋餅,蔬菜蛋餅', ',e0001', '1,1,1,1', '25,30,30,30', 115, 1, '2018-10-16 02:59:00'),
('蔬菜堡', 'c000001', '1', '30', 30, 2, '2018-10-18 14:31:09');

--
-- 已匯出資料表的索引
--

--
-- 資料表索引 `coustmer`
--
ALTER TABLE `coustmer`
  ADD PRIMARY KEY (`autoformnumber`);

--
-- 資料表索引 `oorder`
--
ALTER TABLE `oorder`
  ADD PRIMARY KEY (`autonumber`);

--
-- 資料表索引 `oorder_detail`
--
ALTER TABLE `oorder_detail`
  ADD PRIMARY KEY (`id`);

--
-- 在匯出的資料表使用 AUTO_INCREMENT
--

--
-- 使用資料表 AUTO_INCREMENT `coustmer`
--
ALTER TABLE `coustmer`
  MODIFY `autoformnumber` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- 使用資料表 AUTO_INCREMENT `oorder`
--
ALTER TABLE `oorder`
  MODIFY `autonumber` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- 使用資料表 AUTO_INCREMENT `oorder_detail`
--
ALTER TABLE `oorder_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
