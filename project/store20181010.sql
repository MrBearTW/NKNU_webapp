/*
 Navicat Premium Data Transfer

 Source Server         : MySQL
 Source Server Type    : MySQL
 Source Server Version : 100134
 Source Host           : localhost:3306
 Source Schema         : store

 Target Server Type    : MySQL
 Target Server Version : 100134
 File Encoding         : 65001

 Date: 10/10/2018 02:17:05
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for coustmer
-- ----------------------------
DROP TABLE IF EXISTS `coustmer`;
CREATE TABLE `coustmer`  (
  `cu_id` varchar(8) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `cu_email` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `cu_phone` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `cu_name` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `cu_showname` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `cu_address` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `cu_creditcard` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `cu_membercard` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `cu_singuptime` timestamp(0) NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP(0)
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of coustmer
-- ----------------------------
INSERT INTO `coustmer` VALUES ('c000001', '123@nknu.com', '091234567', '李芃芃', '澎澎', '高師大門口', '11111', '66666', '2018-10-10 01:46:17');
INSERT INTO `coustmer` VALUES ('c000002', '456@nknu.com', '071234567', '戴姿姿', '國手', '高師大後門口', '22222', '77777', '2018-10-10 01:46:17');
INSERT INTO `coustmer` VALUES ('c000003', '5566@nknu.com', '0212345678', '柯醫生', 'Dr.Kao', '市政府', '33333', '88888', '2018-10-10 01:46:17');
INSERT INTO `coustmer` VALUES ('c000004', '9487@nknu.com', '077654321', '賈伯斯', 'Jobs', '公園路一號', '44444', '99999', '2018-10-10 01:46:17');
INSERT INTO `coustmer` VALUES ('c000005', '8917@nknu.com', '0912345678', '谷劈柴', 'G社CEO', '山景城', '55555', '10101', '2018-10-10 01:46:17');

-- ----------------------------
-- Table structure for employee
-- ----------------------------
DROP TABLE IF EXISTS `employee`;
CREATE TABLE `employee`  (
  `emp_id` varchar(6) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `emp_level` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `emp_name` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `emp_sname` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `emp_phone` varchar(15) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of employee
-- ----------------------------
INSERT INTO `employee` VALUES ('e0001', '店長', '彭李李', 'PONG', '09111111');
INSERT INTO `employee` VALUES ('e0002', '經理', '費卿卿', '小哥', '09222222');
INSERT INTO `employee` VALUES ('e0003', '正職店員', '范冰冰', '范爺', '09333333');
INSERT INTO `employee` VALUES ('e0004', '工讀生', '李冰冰', '小小兵', '09444444');
INSERT INTO `employee` VALUES ('e0005', '工讀生', '白冰冰', '流星拳', '09555555');

-- ----------------------------
-- Table structure for menu
-- ----------------------------
DROP TABLE IF EXISTS `menu`;
CREATE TABLE `menu`  (
  `menu_id` varchar(6) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `menu_group` varchar(6) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `menu_name` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `menu_price` int(5) NOT NULL,
  `menu_daysell` int(5) NULL DEFAULT NULL,
  `menu_daylave` int(5) NULL DEFAULT NULL,
  `menu_canbesell` int(5) NULL DEFAULT NULL
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of menu
-- ----------------------------
INSERT INTO `menu` VALUES ('me001', '蛋餅', '原味蛋餅', 20, 20, NULL, NULL);
INSERT INTO `menu` VALUES ('me002', '蛋餅', '肉鬆蛋餅', 25, 20, NULL, NULL);
INSERT INTO `menu` VALUES ('me001', '蛋餅', '原味蛋餅', 20, 20, NULL, NULL);
INSERT INTO `menu` VALUES ('me003', '蛋餅', '九層塔蛋餅', 25, 20, NULL, NULL);
INSERT INTO `menu` VALUES ('me002', '蛋餅', '肉鬆蛋餅', 25, 20, NULL, NULL);
INSERT INTO `menu` VALUES ('me004', '蛋餅', '玉米蛋餅', 30, 20, NULL, NULL);
INSERT INTO `menu` VALUES ('me003', '蛋餅', '九層塔蛋餅', 25, 20, NULL, NULL);
INSERT INTO `menu` VALUES ('me005', '蛋餅', '蔬菜蛋餅', 30, 20, NULL, NULL);
INSERT INTO `menu` VALUES ('me004', '蛋餅', '玉米蛋餅', 30, 20, NULL, NULL);
INSERT INTO `menu` VALUES ('me006', '蛋餅', '火腿蛋餅', 30, 20, NULL, NULL);
INSERT INTO `menu` VALUES ('me005', '蛋餅', '蔬菜蛋餅', 30, 20, NULL, NULL);
INSERT INTO `menu` VALUES ('me007', '蛋餅', '起司蛋餅', 30, 20, NULL, NULL);
INSERT INTO `menu` VALUES ('me006', '蛋餅', '火腿蛋餅', 30, 20, NULL, NULL);
INSERT INTO `menu` VALUES ('me008', '蛋餅', '培根蛋餅', 35, 20, NULL, NULL);
INSERT INTO `menu` VALUES ('me007', '蛋餅', '起司蛋餅', 30, 20, NULL, NULL);
INSERT INTO `menu` VALUES ('me009', '蛋餅', '燻雞蛋餅', 40, 20, NULL, NULL);
INSERT INTO `menu` VALUES ('me008', '蛋餅', '培根蛋餅', 35, 20, NULL, NULL);
INSERT INTO `menu` VALUES ('me010', '蛋餅', '薯餅起司蛋餅', 45, 20, NULL, NULL);
INSERT INTO `menu` VALUES ('me009', '蛋餅', '燻雞蛋餅', 40, 20, NULL, NULL);
INSERT INTO `menu` VALUES ('me011', '蛋餅', '招牌蛋餅', 45, 20, NULL, NULL);
INSERT INTO `menu` VALUES ('me010', '蛋餅', '薯餅起司蛋餅', 45, 20, NULL, NULL);
INSERT INTO `menu` VALUES ('me012', '漢堡', '蔬菜堡', 30, 20, NULL, NULL);
INSERT INTO `menu` VALUES ('me011', '蛋餅', '招牌蛋餅', 45, 20, NULL, NULL);
INSERT INTO `menu` VALUES ('me013', '漢堡', '香雞堡', 30, 20, NULL, NULL);
INSERT INTO `menu` VALUES ('me012', '漢堡', '蔬菜堡', 30, 20, NULL, NULL);
INSERT INTO `menu` VALUES ('me014', '漢堡', '招牌豬肉堡', 30, 20, NULL, NULL);
INSERT INTO `menu` VALUES ('me013', '漢堡', '香雞堡', 30, 20, NULL, NULL);
INSERT INTO `menu` VALUES ('me015', '漢堡', '培根堡', 35, 20, NULL, NULL);
INSERT INTO `menu` VALUES ('me014', '漢堡', '招牌豬肉堡', 30, 20, NULL, NULL);
INSERT INTO `menu` VALUES ('me016', '漢堡', '燻雞堡', 40, 20, NULL, NULL);
INSERT INTO `menu` VALUES ('me015', '漢堡', '培根堡', 35, 20, NULL, NULL);
INSERT INTO `menu` VALUES ('me017', '漢堡', '照燒豬肉堡', 40, 20, NULL, NULL);
INSERT INTO `menu` VALUES ('me016', '漢堡', '燻雞堡', 40, 20, NULL, NULL);
INSERT INTO `menu` VALUES ('me018', '漢堡', '里肌堡', 45, 20, NULL, NULL);
INSERT INTO `menu` VALUES ('me017', '漢堡', '照燒豬肉堡', 40, 20, NULL, NULL);
INSERT INTO `menu` VALUES ('me019', '漢堡', '炸豬排堡', 50, 20, NULL, NULL);
INSERT INTO `menu` VALUES ('me018', '漢堡', '里肌堡', 45, 20, NULL, NULL);
INSERT INTO `menu` VALUES ('me020', '漢堡', '卡啦雞腿堡', 50, 20, NULL, NULL);
INSERT INTO `menu` VALUES ('me019', '漢堡', '炸豬排堡', 50, 20, NULL, NULL);
INSERT INTO `menu` VALUES ('me021', '漢堡', '勁辣雞腿堡', 50, 20, NULL, NULL);
INSERT INTO `menu` VALUES ('me020', '漢堡', '卡啦雞腿堡', 50, 20, NULL, NULL);
INSERT INTO `menu` VALUES ('me022', '果醬吐司厚片', '草莓吐司', 15, 20, NULL, NULL);
INSERT INTO `menu` VALUES ('me021', '漢堡', '勁辣雞腿堡', 50, 20, NULL, NULL);
INSERT INTO `menu` VALUES ('me023', '果醬吐司厚片', '花生吐司', 15, 20, NULL, NULL);
INSERT INTO `menu` VALUES ('me024', '果醬吐司厚片', '巧克力吐司', 15, 20, NULL, NULL);
INSERT INTO `menu` VALUES ('me022', '果醬吐司厚片', '草莓吐司', 15, 20, NULL, NULL);
INSERT INTO `menu` VALUES ('me025', '果醬吐司厚片', '藍莓吐司', 15, 20, NULL, NULL);
INSERT INTO `menu` VALUES ('me023', '果醬吐司厚片', '花生吐司', 15, 20, NULL, NULL);
INSERT INTO `menu` VALUES ('me026', '果醬吐司厚片', '抹茶吐司', 15, 20, NULL, NULL);
INSERT INTO `menu` VALUES ('me024', '果醬吐司厚片', '巧克力吐司', 15, 20, NULL, NULL);
INSERT INTO `menu` VALUES ('me027', '果醬吐司厚片', '奶酥吐司', 15, 20, NULL, NULL);
INSERT INTO `menu` VALUES ('me025', '果醬吐司厚片', '藍莓吐司', 15, 20, NULL, NULL);
INSERT INTO `menu` VALUES ('me028', '果醬吐司厚片', '草莓厚片', 25, 20, NULL, NULL);
INSERT INTO `menu` VALUES ('me026', '果醬吐司厚片', '抹茶吐司', 15, 20, NULL, NULL);
INSERT INTO `menu` VALUES ('me029', '果醬吐司厚片', '花生厚片', 25, 20, NULL, NULL);
INSERT INTO `menu` VALUES ('me027', '果醬吐司厚片', '奶酥吐司', 15, 20, NULL, NULL);
INSERT INTO `menu` VALUES ('me030', '果醬吐司厚片', '巧克力厚片', 25, 20, NULL, NULL);
INSERT INTO `menu` VALUES ('me028', '果醬吐司厚片', '草莓厚片', 25, 20, NULL, NULL);
INSERT INTO `menu` VALUES ('me031', '果醬吐司厚片', '藍莓厚片', 25, 20, NULL, NULL);
INSERT INTO `menu` VALUES ('me029', '果醬吐司厚片', '花生厚片', 25, 20, NULL, NULL);
INSERT INTO `menu` VALUES ('me032', '果醬吐司厚片', '抹茶厚片', 25, 20, NULL, NULL);
INSERT INTO `menu` VALUES ('me030', '果醬吐司厚片', '巧克力厚片', 25, 20, NULL, NULL);
INSERT INTO `menu` VALUES ('me033', '果醬吐司厚片', '奶酥厚片', 25, 20, NULL, NULL);
INSERT INTO `menu` VALUES ('me031', '果醬吐司厚片', '藍莓厚片', 25, 20, NULL, NULL);
INSERT INTO `menu` VALUES ('me034', '吐司', '煎蛋吐司', 20, 20, NULL, NULL);
INSERT INTO `menu` VALUES ('me032', '果醬吐司厚片', '抹茶厚片', 25, 20, NULL, NULL);
INSERT INTO `menu` VALUES ('me035', '吐司', '起司吐司', 25, 20, NULL, NULL);
INSERT INTO `menu` VALUES ('me033', '果醬吐司厚片', '奶酥厚片', 25, 20, NULL, NULL);
INSERT INTO `menu` VALUES ('me036', '吐司', '蔬菜吐司', 25, 20, NULL, NULL);
INSERT INTO `menu` VALUES ('me034', '吐司', '煎蛋吐司', 20, 20, NULL, NULL);
INSERT INTO `menu` VALUES ('me037', '吐司', '肉鬆吐司', 25, 20, NULL, NULL);
INSERT INTO `menu` VALUES ('me035', '吐司', '起司吐司', 25, 20, NULL, NULL);
INSERT INTO `menu` VALUES ('me038', '吐司', '火腿吐司', 25, 20, NULL, NULL);
INSERT INTO `menu` VALUES ('me036', '吐司', '蔬菜吐司', 25, 20, NULL, NULL);
INSERT INTO `menu` VALUES ('me039', '吐司', '豬肉吐司', 25, 20, NULL, NULL);
INSERT INTO `menu` VALUES ('me037', '吐司', '肉鬆吐司', 25, 20, NULL, NULL);
INSERT INTO `menu` VALUES ('me040', '吐司', '培根吐司', 30, 20, NULL, NULL);
INSERT INTO `menu` VALUES ('me038', '吐司', '火腿吐司', 25, 20, NULL, NULL);
INSERT INTO `menu` VALUES ('me041', '吐司', '鮪魚吐司', 30, 20, NULL, NULL);
INSERT INTO `menu` VALUES ('me039', '吐司', '豬肉吐司', 25, 20, NULL, NULL);
INSERT INTO `menu` VALUES ('me042', '吐司', '薯餅吐司', 30, 20, NULL, NULL);
INSERT INTO `menu` VALUES ('me040', '吐司', '培根吐司', 30, 20, NULL, NULL);
INSERT INTO `menu` VALUES ('me043', '吐司', '香雞吐司', 30, 20, NULL, NULL);
INSERT INTO `menu` VALUES ('me041', '吐司', '鮪魚吐司', 30, 20, NULL, NULL);
INSERT INTO `menu` VALUES ('me044', '吐司', '法國土司', 35, 20, NULL, NULL);
INSERT INTO `menu` VALUES ('me042', '吐司', '薯餅吐司', 30, 20, NULL, NULL);
INSERT INTO `menu` VALUES ('me045', '吐司', '燻雞吐司', 35, 20, NULL, NULL);
INSERT INTO `menu` VALUES ('me043', '吐司', '香雞吐司', 30, 20, NULL, NULL);
INSERT INTO `menu` VALUES ('me046', '吐司', '里肌吐司', 40, 20, NULL, NULL);
INSERT INTO `menu` VALUES ('me044', '吐司', '法國土司', 35, 20, NULL, NULL);
INSERT INTO `menu` VALUES ('me047', '吐司', '卡啦吐司', 50, 20, NULL, NULL);
INSERT INTO `menu` VALUES ('me045', '吐司', '燻雞吐司', 35, 20, NULL, NULL);
INSERT INTO `menu` VALUES ('me048', '吐司', '勁辣吐司', 50, 20, NULL, NULL);
INSERT INTO `menu` VALUES ('me046', '吐司', '里肌吐司', 40, 20, NULL, NULL);
INSERT INTO `menu` VALUES ('me049', '焗烤厚片', '火腿玉米', 45, 20, NULL, NULL);
INSERT INTO `menu` VALUES ('me047', '吐司', '卡啦吐司', 50, 20, NULL, NULL);
INSERT INTO `menu` VALUES ('me050', '焗烤厚片', '培根', 45, 20, NULL, NULL);
INSERT INTO `menu` VALUES ('me048', '吐司', '勁辣吐司', 50, 20, NULL, NULL);
INSERT INTO `menu` VALUES ('me051', '焗烤厚片', '鮪魚', 50, 20, NULL, NULL);
INSERT INTO `menu` VALUES ('me049', '焗烤厚片', '火腿玉米', 45, 20, NULL, NULL);
INSERT INTO `menu` VALUES ('me052', '焗烤厚片', '燻雞', 50, 20, NULL, NULL);
INSERT INTO `menu` VALUES ('me050', '焗烤厚片', '培根', 45, 20, NULL, NULL);
INSERT INTO `menu` VALUES ('me053', '熱壓吐司', '巧克力', 30, 20, NULL, NULL);
INSERT INTO `menu` VALUES ('me051', '焗烤厚片', '鮪魚', 50, 20, NULL, NULL);
INSERT INTO `menu` VALUES ('me054', '熱壓吐司', '草莓', 30, 20, NULL, NULL);
INSERT INTO `menu` VALUES ('me052', '焗烤厚片', '燻雞', 50, 20, NULL, NULL);
INSERT INTO `menu` VALUES ('me055', '熱壓吐司', '花生', 30, 20, NULL, NULL);
INSERT INTO `menu` VALUES ('me053', '熱壓吐司', '巧克力', 30, 20, NULL, NULL);
INSERT INTO `menu` VALUES ('me056', '熱壓吐司', '奶酥', 30, 20, NULL, NULL);
INSERT INTO `menu` VALUES ('me054', '熱壓吐司', '草莓', 30, 20, NULL, NULL);
INSERT INTO `menu` VALUES ('me057', '熱壓吐司', '抹茶', 30, 20, NULL, NULL);
INSERT INTO `menu` VALUES ('me055', '熱壓吐司', '花生', 30, 20, NULL, NULL);
INSERT INTO `menu` VALUES ('me058', '熱壓吐司', '豬肉起司蛋', 50, 20, NULL, NULL);
INSERT INTO `menu` VALUES ('me056', '熱壓吐司', '奶酥', 30, 20, NULL, NULL);
INSERT INTO `menu` VALUES ('me059', '熱壓吐司', '鮪魚玉米', 50, 20, NULL, NULL);
INSERT INTO `menu` VALUES ('me057', '熱壓吐司', '抹茶', 30, 20, NULL, NULL);
INSERT INTO `menu` VALUES ('me060', '熱壓吐司', '培根起司', 50, 20, NULL, NULL);
INSERT INTO `menu` VALUES ('me058', '熱壓吐司', '豬肉起司蛋', 50, 20, NULL, NULL);
INSERT INTO `menu` VALUES ('me061', '熱壓吐司', '火腿起司蛋', 50, 20, NULL, NULL);
INSERT INTO `menu` VALUES ('me059', '熱壓吐司', '鮪魚玉米', 50, 20, NULL, NULL);
INSERT INTO `menu` VALUES ('me062', '燒餅', '蔬菜燒餅', 30, 20, NULL, NULL);
INSERT INTO `menu` VALUES ('me060', '熱壓吐司', '培根起司', 50, 20, NULL, NULL);
INSERT INTO `menu` VALUES ('me063', '燒餅', '香雞燒餅', 35, 20, NULL, NULL);
INSERT INTO `menu` VALUES ('me061', '熱壓吐司', '火腿起司蛋', 50, 20, NULL, NULL);
INSERT INTO `menu` VALUES ('me064', '燒餅', '鮪魚燒餅', 45, 20, NULL, NULL);
INSERT INTO `menu` VALUES ('me062', '燒餅', '蔬菜燒餅', 30, 20, NULL, NULL);
INSERT INTO `menu` VALUES ('me065', '燒餅', '培根燒餅', 45, 20, NULL, NULL);
INSERT INTO `menu` VALUES ('me063', '燒餅', '香雞燒餅', 35, 20, NULL, NULL);
INSERT INTO `menu` VALUES ('me066', '燒餅', '里肌燒餅', 50, 20, NULL, NULL);
INSERT INTO `menu` VALUES ('me064', '燒餅', '鮪魚燒餅', 45, 20, NULL, NULL);
INSERT INTO `menu` VALUES ('me067', '總匯', '蔬菜總匯', 55, 20, NULL, NULL);
INSERT INTO `menu` VALUES ('me065', '燒餅', '培根燒餅', 45, 20, NULL, NULL);
INSERT INTO `menu` VALUES ('me068', '總匯', '招牌豬肉總匯', 55, 20, NULL, NULL);
INSERT INTO `menu` VALUES ('me066', '燒餅', '里肌燒餅', 50, 20, NULL, NULL);
INSERT INTO `menu` VALUES ('me069', '總匯', '培根總匯', 60, 20, NULL, NULL);
INSERT INTO `menu` VALUES ('me067', '總匯', '蔬菜總匯', 55, 20, NULL, NULL);
INSERT INTO `menu` VALUES ('me070', '總匯', '鮪魚總匯', 60, 20, NULL, NULL);
INSERT INTO `menu` VALUES ('me068', '總匯', '招牌豬肉總匯', 55, 20, NULL, NULL);
INSERT INTO `menu` VALUES ('me071', '總匯', '燻雞總匯', 65, 20, NULL, NULL);
INSERT INTO `menu` VALUES ('me069', '總匯', '培根總匯', 60, 20, NULL, NULL);
INSERT INTO `menu` VALUES ('me072', '總匯', '里肌總匯', 65, 20, NULL, NULL);
INSERT INTO `menu` VALUES ('me070', '總匯', '鮪魚總匯', 60, 20, NULL, NULL);
INSERT INTO `menu` VALUES ('me073', '總匯', '炸豬排總匯', 70, 20, NULL, NULL);
INSERT INTO `menu` VALUES ('me071', '總匯', '燻雞總匯', 65, 20, NULL, NULL);
INSERT INTO `menu` VALUES ('me074', '總匯', '卡啦雞腿總匯', 70, 20, NULL, NULL);
INSERT INTO `menu` VALUES ('me072', '總匯', '里肌總匯', 65, 20, NULL, NULL);
INSERT INTO `menu` VALUES ('me075', '總匯', '勁辣雞腿總匯', 70, 20, NULL, NULL);
INSERT INTO `menu` VALUES ('me073', '總匯', '炸豬排總匯', 70, 20, NULL, NULL);
INSERT INTO `menu` VALUES ('me074', '總匯', '卡啦雞腿總匯', 70, 20, NULL, NULL);
INSERT INTO `menu` VALUES ('me076', '單品', '荷包蛋', 10, 20, NULL, NULL);
INSERT INTO `menu` VALUES ('me075', '總匯', '勁辣雞腿總匯', 70, 20, NULL, NULL);
INSERT INTO `menu` VALUES ('me077', '單品', '薯餅', 15, 20, NULL, NULL);
INSERT INTO `menu` VALUES ('me076', '單品', '荷包蛋', 10, 20, NULL, NULL);
INSERT INTO `menu` VALUES ('me078', '單品', '熱狗', 15, 20, NULL, NULL);
INSERT INTO `menu` VALUES ('me077', '單品', '薯餅', 15, 20, NULL, NULL);
INSERT INTO `menu` VALUES ('me079', '單品', '熱狗蛋捲', 25, 20, NULL, NULL);
INSERT INTO `menu` VALUES ('me078', '單品', '熱狗', 15, 20, NULL, NULL);
INSERT INTO `menu` VALUES ('me080', '單品', '蔥抓餅', 25, 20, NULL, NULL);
INSERT INTO `menu` VALUES ('me079', '單品', '熱狗蛋捲', 25, 20, NULL, NULL);
INSERT INTO `menu` VALUES ('me081', '單品', '蔥肉餅', 30, 20, NULL, NULL);
INSERT INTO `menu` VALUES ('me080', '單品', '蔥抓餅', 25, 20, NULL, NULL);
INSERT INTO `menu` VALUES ('me082', '單品', '薯條', 30, 20, NULL, NULL);
INSERT INTO `menu` VALUES ('me081', '單品', '蔥肉餅', 30, 20, NULL, NULL);
INSERT INTO `menu` VALUES ('me083', '單品', '蘿蔔糕', 30, 20, NULL, NULL);
INSERT INTO `menu` VALUES ('me082', '單品', '薯條', 30, 20, NULL, NULL);
INSERT INTO `menu` VALUES ('me084', '單品', '小不點雞塊', 30, 20, NULL, NULL);
INSERT INTO `menu` VALUES ('me083', '單品', '蘿蔔糕', 30, 20, NULL, NULL);
INSERT INTO `menu` VALUES ('me085', '單品', '雞米花', 30, 20, NULL, NULL);
INSERT INTO `menu` VALUES ('me084', '單品', '小不點雞塊', 30, 20, NULL, NULL);
INSERT INTO `menu` VALUES ('me086', '單品', '洋蔥圈', 30, 20, NULL, NULL);
INSERT INTO `menu` VALUES ('me085', '單品', '雞米花', 30, 20, NULL, NULL);
INSERT INTO `menu` VALUES ('me087', '單品', '雞塊', 30, 20, NULL, NULL);
INSERT INTO `menu` VALUES ('me086', '單品', '洋蔥圈', 30, 20, NULL, NULL);
INSERT INTO `menu` VALUES ('me088', '單品', '煎餃', 35, 20, NULL, NULL);
INSERT INTO `menu` VALUES ('me087', '單品', '雞塊', 30, 20, NULL, NULL);
INSERT INTO `menu` VALUES ('me089', '單品', '脆薯', 40, 20, NULL, NULL);
INSERT INTO `menu` VALUES ('me088', '單品', '煎餃', 35, 20, NULL, NULL);
INSERT INTO `menu` VALUES ('me090', '加料', '蛋', 5, 20, NULL, NULL);
INSERT INTO `menu` VALUES ('me089', '單品', '脆薯', 40, 20, NULL, NULL);
INSERT INTO `menu` VALUES ('me091', '加料', '起司', 10, 20, NULL, NULL);
INSERT INTO `menu` VALUES ('me090', '加料', '蛋', 5, 20, NULL, NULL);
INSERT INTO `menu` VALUES ('me092', '加料', '起司條', 10, 20, NULL, NULL);
INSERT INTO `menu` VALUES ('me091', '加料', '起司', 10, 20, NULL, NULL);
INSERT INTO `menu` VALUES ('me093', '加料', '豬肉片', 10, 20, NULL, NULL);
INSERT INTO `menu` VALUES ('me092', '加料', '起司條', 10, 20, NULL, NULL);
INSERT INTO `menu` VALUES ('me094', '鍋燒類', '炒泡麵', 60, 20, NULL, NULL);
INSERT INTO `menu` VALUES ('me093', '加料', '豬肉片', 10, 20, NULL, NULL);
INSERT INTO `menu` VALUES ('me095', '鍋燒類', '鍋燒冬粉', 65, 20, NULL, NULL);
INSERT INTO `menu` VALUES ('me094', '鍋燒類', '炒泡麵', 60, 20, NULL, NULL);
INSERT INTO `menu` VALUES ('me096', '鍋燒類', '鍋燒雞絲', 65, 20, NULL, NULL);
INSERT INTO `menu` VALUES ('me095', '鍋燒類', '鍋燒冬粉', 65, 20, NULL, NULL);
INSERT INTO `menu` VALUES ('me097', '鍋燒類', '鍋燒烏龍', 65, 20, NULL, NULL);
INSERT INTO `menu` VALUES ('me096', '鍋燒類', '鍋燒雞絲', 65, 20, NULL, NULL);
INSERT INTO `menu` VALUES ('me098', '鍋燒類', '鍋燒泡麵', 65, 20, NULL, NULL);
INSERT INTO `menu` VALUES ('me097', '鍋燒類', '鍋燒烏龍', 65, 20, NULL, NULL);
INSERT INTO `menu` VALUES ('me099', '鍋燒類', '鍋燒意麵', 65, 20, NULL, NULL);
INSERT INTO `menu` VALUES ('me098', '鍋燒類', '鍋燒泡麵', 65, 20, NULL, NULL);
INSERT INTO `menu` VALUES ('me100', '中杯飲料', '紅茶', 15, 20, NULL, NULL);
INSERT INTO `menu` VALUES ('me099', '鍋燒類', '鍋燒意麵', 65, 20, NULL, NULL);
INSERT INTO `menu` VALUES ('me101', '中杯飲料', '奶茶', 20, 20, NULL, NULL);
INSERT INTO `menu` VALUES ('me100', '中杯飲料', '紅茶', 15, 20, NULL, NULL);
INSERT INTO `menu` VALUES ('me102', '中杯飲料', '豆漿', 20, 20, NULL, NULL);
INSERT INTO `menu` VALUES ('me101', '中杯飲料', '奶茶', 20, 20, NULL, NULL);
INSERT INTO `menu` VALUES ('me103', '中杯飲料', '紅茶豆漿', 25, 20, NULL, NULL);
INSERT INTO `menu` VALUES ('me102', '中杯飲料', '豆漿', 20, 20, NULL, NULL);
INSERT INTO `menu` VALUES ('me104', '中杯飲料', '鮮奶茶', 35, 20, NULL, NULL);
INSERT INTO `menu` VALUES ('me103', '中杯飲料', '紅茶豆漿', 25, 20, NULL, NULL);
INSERT INTO `menu` VALUES ('me105', '中杯飲料', '咖啡', 25, 20, NULL, NULL);
INSERT INTO `menu` VALUES ('me104', '中杯飲料', '鮮奶茶', 35, 20, NULL, NULL);
INSERT INTO `menu` VALUES ('me106', '中杯飲料', '鮮奶咖啡', 35, 20, NULL, NULL);
INSERT INTO `menu` VALUES ('me105', '中杯飲料', '咖啡', 25, 20, NULL, NULL);
INSERT INTO `menu` VALUES ('me107', '中杯飲料', '阿華田', 30, 20, NULL, NULL);
INSERT INTO `menu` VALUES ('me106', '中杯飲料', '鮮奶咖啡', 35, 20, NULL, NULL);
INSERT INTO `menu` VALUES ('me108', '中杯飲料', '柳橙汁', 25, 20, NULL, NULL);
INSERT INTO `menu` VALUES ('me107', '中杯飲料', '阿華田', 30, 20, NULL, NULL);
INSERT INTO `menu` VALUES ('me109', '中杯飲料', '蔓越莓', 25, 20, NULL, NULL);
INSERT INTO `menu` VALUES ('me108', '中杯飲料', '柳橙汁', 25, 20, NULL, NULL);
INSERT INTO `menu` VALUES ('me110', '大杯飲料', '紅茶', 20, 20, NULL, NULL);
INSERT INTO `menu` VALUES ('me109', '中杯飲料', '蔓越莓', 25, 20, NULL, NULL);
INSERT INTO `menu` VALUES ('me111', '大杯飲料', '奶茶', 25, 20, NULL, NULL);
INSERT INTO `menu` VALUES ('me110', '大杯飲料', '紅茶', 20, 20, NULL, NULL);
INSERT INTO `menu` VALUES ('me112', '大杯飲料', '豆漿', 25, 20, NULL, NULL);
INSERT INTO `menu` VALUES ('me111', '大杯飲料', '奶茶', 25, 20, NULL, NULL);
INSERT INTO `menu` VALUES ('me112', '大杯飲料', '豆漿', 25, 20, NULL, NULL);
INSERT INTO `menu` VALUES ('me113', '大杯飲料', '紅茶豆漿', 30, 20, NULL, NULL);
INSERT INTO `menu` VALUES ('me113', '大杯飲料', '紅茶豆漿', 30, 20, NULL, NULL);
INSERT INTO `menu` VALUES ('me114', '大杯飲料', '鮮奶茶', 40, 20, NULL, NULL);
INSERT INTO `menu` VALUES ('me114', '大杯飲料', '鮮奶茶', 40, 20, NULL, NULL);
INSERT INTO `menu` VALUES ('me115', '大杯飲料', '咖啡', 30, 20, NULL, NULL);
INSERT INTO `menu` VALUES ('me115', '大杯飲料', '咖啡', 30, 20, NULL, NULL);
INSERT INTO `menu` VALUES ('me116', '大杯飲料', '鮮奶咖啡', 40, 20, NULL, NULL);
INSERT INTO `menu` VALUES ('me116', '大杯飲料', '鮮奶咖啡', 40, 20, NULL, NULL);
INSERT INTO `menu` VALUES ('me117', '大杯飲料', '阿華田', 35, 20, NULL, NULL);
INSERT INTO `menu` VALUES ('me117', '大杯飲料', '阿華田', 35, 20, NULL, NULL);
INSERT INTO `menu` VALUES ('me118', '大杯飲料', '柳橙汁', 30, 20, NULL, NULL);
INSERT INTO `menu` VALUES ('me118', '大杯飲料', '柳橙汁', 30, 20, NULL, NULL);
INSERT INTO `menu` VALUES ('me119', '大杯飲料', '蔓越莓', 30, 20, NULL, NULL);
INSERT INTO `menu` VALUES ('me119', '大杯飲料', '蔓越莓', 30, 20, NULL, NULL);

-- ----------------------------
-- Table structure for oorder
-- ----------------------------
DROP TABLE IF EXISTS `oorder`;
CREATE TABLE `oorder`  (
  `or_num` varchar(15) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `or_from` varchar(15) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `or_peo` varchar(15) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `or_cofirm` varchar(15) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `or_total` int(10) NOT NULL,
  `or_sat` varchar(15) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `cu_id` varchar(15) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of oorder
-- ----------------------------
INSERT INTO `oorder` VALUES ('o201809240001', '手機預定', 'c000002', 'e0001', 0, '已出餐', 'c000002');
INSERT INTO `oorder` VALUES ('o201809250001', '店內點餐', 'e0003', 'e0003', 0, '退訂', '無會員');
INSERT INTO `oorder` VALUES ('o201810060001', '手機預定', 'c000004', 'e0002', 0, '等待確定', 'c000004');
INSERT INTO `oorder` VALUES ('o201810060002', '店內點餐', 'e0005', 'e0005', 0, '已出餐', 'c000005');
INSERT INTO `oorder` VALUES ('o201810060003', '店內點餐', 'e0005', 'e0005', 0, '餐點製作中', 'c000002');

-- ----------------------------
-- Table structure for oorder_detail
-- ----------------------------
DROP TABLE IF EXISTS `oorder_detail`;
CREATE TABLE `oorder_detail`  (
  `or_num` varchar(15) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `menu_id` varchar(15) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `or_quantity` int(5) NOT NULL
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of oorder_detail
-- ----------------------------
INSERT INTO `oorder_detail` VALUES ('o201809240001', 'me_001', 2);
INSERT INTO `oorder_detail` VALUES ('o201809240001', 'me_100', 1);
INSERT INTO `oorder_detail` VALUES ('o201809240001', 'me_043', 1);
INSERT INTO `oorder_detail` VALUES ('o201809250001', 'me_002', 3);
INSERT INTO `oorder_detail` VALUES ('o201809250001', 'me_026', 2);
INSERT INTO `oorder_detail` VALUES ('o201809250001', 'me_063', 4);
INSERT INTO `oorder_detail` VALUES ('o201809250001', 'me_094', 1);
INSERT INTO `oorder_detail` VALUES ('o201810060001', 'me_022', 3);
INSERT INTO `oorder_detail` VALUES ('o201810060001', 'me_119', 4);
INSERT INTO `oorder_detail` VALUES ('o201810060001', 'me_024', 2);
INSERT INTO `oorder_detail` VALUES ('o201810060001', 'me_055', 3);
INSERT INTO `oorder_detail` VALUES ('o201810060002', 'me_066', 4);
INSERT INTO `oorder_detail` VALUES ('o201810060002', 'me_009', 2);
INSERT INTO `oorder_detail` VALUES ('o201810060002', 'me_048', 1);
INSERT INTO `oorder_detail` VALUES ('o201810060002', 'me_029', 2);
INSERT INTO `oorder_detail` VALUES ('o201810060003', 'me_073', 2);
INSERT INTO `oorder_detail` VALUES ('o201810060003', 'me_005', 3);
INSERT INTO `oorder_detail` VALUES ('o201810060003', 'me_088', 1);
INSERT INTO `oorder_detail` VALUES ('o201810060003', 'me_103', 2);
INSERT INTO `oorder_detail` VALUES ('o201810060003', 'me_100', 2);

SET FOREIGN_KEY_CHECKS = 1;
