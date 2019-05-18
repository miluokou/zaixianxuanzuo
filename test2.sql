/*
 Navicat Premium Data Transfer

 Source Server         : 123123
 Source Server Type    : MySQL
 Source Server Version : 100139
 Source Host           : localhost:3306
 Source Schema         : test

 Target Server Type    : MySQL
 Target Server Version : 100139
 File Encoding         : 65001

 Date: 18/05/2019 19:41:54
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for class_room
-- ----------------------------
DROP TABLE IF EXISTS `class_room`;
CREATE TABLE `class_room`  (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `seat_formate` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `start_at` datetime(6) NULL DEFAULT NULL,
  `end_at` datetime(6) NULL DEFAULT NULL,
  `deleted_at` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `order_arr` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `name`(`name`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 68 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of class_room
-- ----------------------------
INSERT INTO `class_room` VALUES (42, '2312', '[\"cccccccccccc\",\"cccccccccccc\",\"cccccccccccc\",\"cccccccccccc\",\"ccccccccc_cc\",\"ccccccccc_cc\",\"cccccccccccc\",\"cccccccccccc\",\"cccccccccccc\",\"cccccccccccc\",\"cccccccccccc\"]', '2018-01-01 04:00:00.000000', '2018-03-01 04:00:00.000000', NULL, '[\"4_9\",\"5_9\",\"6_9\"]');
INSERT INTO `class_room` VALUES (43, '22', '[\"ccccccccccc\",\"ccccccccccc\",\"ccccccccccc\",\"ccccccccccc\",\"ccccccccccc\",\"cccccc__ccc\",\"cccccc_cccc\",\"ccccccccccc\"]', '2018-01-01 04:00:00.000000', '2018-03-01 04:00:00.000000', NULL, NULL);
INSERT INTO `class_room` VALUES (44, '中文名字', '[\"cccccccc\",\"ccccccc_\",\"cccc____\",\"ccc___cc\",\"cccccccc\",\"cccccccc\",\"cccccccc\",\"cccccccc\",\"cccccccc\",\"cccccccc\"]', '2018-01-01 04:00:00.000000', '2018-03-01 04:00:00.000000', NULL, NULL);
INSERT INTO `class_room` VALUES (46, '新建一个教室', '[\"cccccccc\",\"cccccccc\",\"_____ccc\",\"cccc_ccc\",\"cccc_ccc\",\"cccc_ccc\",\"cccc_ccc\",\"cccccccc\"]', '2018-01-01 04:00:00.000000', '2018-03-01 04:00:00.000000', NULL, NULL);
INSERT INTO `class_room` VALUES (47, '222', '[\"ccccc\",\"ccccc\",\"cccc_\",\"ccc__\",\"ccccc\"]', '2018-01-01 04:00:00.000000', '2018-03-01 04:00:00.000000', NULL, NULL);
INSERT INTO `class_room` VALUES (56, '3434', '[\"ccccc\",\"ccccc\",\"cccc_\",\"ccc__\",\"ccccc\"]', '2018-01-01 04:00:00.000000', '2018-03-01 04:00:00.000000', NULL, '[\"5_5\",\"5_4\"]');
INSERT INTO `class_room` VALUES (59, 'dfsdfs', '[\"ccccc\",\"ccccc\",\"cccc_\",\"ccc__\",\"ccccc\"]', '2018-01-01 04:00:00.000000', '2018-03-01 04:00:00.000000', NULL, '[\"5_5\",\"5_4\"]');
INSERT INTO `class_room` VALUES (61, '新建一个教室222', '[\"cccccc\",\"cccccc\",\"cccc_c\",\"cc___c\",\"cccccc\",\"cccccc\"]', '2018-01-01 04:00:00.000000', '2018-03-01 04:00:00.000000', NULL, '[\"1_5\",\"1_4\",\"1_3\"]');
INSERT INTO `class_room` VALUES (65, 'rgfdfg', '[\"cccc\",\"cccc\",\"c__c\",\"c__c\"]', '2018-01-01 04:00:00.000000', '2018-03-01 04:00:00.000000', NULL, NULL);
INSERT INTO `class_room` VALUES (66, '3123', '[\"cccc\",\"c__c\",\"c__c\",\"cccc\"]', '2018-01-01 04:00:00.000000', '2018-03-01 04:00:00.000000', NULL, '[\"1_3\",\"1_2\"]');
INSERT INTO `class_room` VALUES (67, '教学楼1', '[\"cccccccc\",\"cccccccc\",\"cccccccc\",\"ccc__ccc\",\"ccc__ccc\",\"cccccccc\",\"cccccccc\",\"cccccccc\"]', '2018-01-01 04:00:00.000000', '2018-03-01 04:00:00.000000', NULL, '[\"1_6\",\"1_7\",\"2_7\"]');

-- ----------------------------
-- Table structure for seat
-- ----------------------------
DROP TABLE IF EXISTS `seat`;
CREATE TABLE `seat`  (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `class_room_id` int(10) NULL DEFAULT NULL,
  `seat_type_id` int(10) NULL DEFAULT NULL,
  `created_at` datetime(5) NULL DEFAULT NULL,
  `updated_at` datetime(5) NULL DEFAULT NULL,
  `deleted_at` datetime(5) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `class_room_id`(`class_room_id`) USING BTREE,
  INDEX `seat_type_id`(`seat_type_id`) USING BTREE,
  CONSTRAINT `class_room_id` FOREIGN KEY (`class_room_id`) REFERENCES `class_room` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `seat_ibfk_1` FOREIGN KEY (`seat_type_id`) REFERENCES `seat_type` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for seat_type
-- ----------------------------
DROP TABLE IF EXISTS `seat_type`;
CREATE TABLE `seat_type`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `seat_format` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of seat_type
-- ----------------------------
INSERT INTO `seat_type` VALUES (1, '{\'cccccccccc\',\'cccccccccc\',\'__________\',\'cccccccc__\',\'cccccccccc\',\'cccccccccc\',\'cccccccccc\',\'cccccccccc\',\'cccccccccc\',\'cc__cc__cc\'}');

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user`  (
  `id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `level` tinyint(2) NULL DEFAULT NULL,
  `roomName` int(11) NULL DEFAULT NULL,
  `pass` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES (1, 'sudent', 1, 3434, '123');
INSERT INTO `user` VALUES (2, 'teacher', 2, 222, ' ');

SET FOREIGN_KEY_CHECKS = 1;
