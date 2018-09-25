/*
 Navicat Premium Data Transfer

 Source Server         : localhost_3306
 Source Server Type    : MySQL
 Source Server Version : 100132
 Source Host           : localhost:3306
 Source Schema         : student

 Target Server Type    : MySQL
 Target Server Version : 100132
 File Encoding         : 65001

 Date: 25/09/2018 15:25:38
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for student
-- ----------------------------
DROP TABLE IF EXISTS `student`;
CREATE TABLE `student`  (
  `st_id` varchar(4) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `st_na` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `st_gender` varchar(1) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `st_email` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `st_tel` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `st_addr` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`st_id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of student
-- ----------------------------
INSERT INTO `student` VALUES ('s001', '李笑來', '男', '46@6846.ciojp', '064684684', '高雄市高師大');
INSERT INTO `student` VALUES ('s002', '尼克洋', '男', '4684@6846.6854', '064646468', '高雄市高醫大');
INSERT INTO `student` VALUES ('s003', '揪團王', '女', '4684@6886.46', '084849684', '高雄市高科大');

SET FOREIGN_KEY_CHECKS = 1;
