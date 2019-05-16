/*
 Navicat Premium Data Transfer

 Source Server         : qweqw
 Source Server Type    : MySQL
 Source Server Version : 100139
 Source Host           : localhost:3306
 Source Schema         : test

 Target Server Type    : MySQL
 Target Server Version : 100139
 File Encoding         : 65001

 Date: 17/05/2019 02:03:45
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
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `name`(`name`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 42 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of class_room
-- ----------------------------
INSERT INTO `class_room` VALUES (2, '0003', '{\'cccccccccc\',\'cccccccccc\',\'__________\',\'cccccccc__\',\'cccccccccc\',\'cccccccccc\',\'cccccccccc\',\'cccccccccc\',\'cccccccccc\',\'cc__cc__cc\'}', NULL, NULL, NULL);
INSERT INTO `class_room` VALUES (4, '1123', 'a:12:{i:0;s:12:\"cccccccccccc\";i:1;s:12:\"cccccccccccc\";i:2;s:12:\"cccc_ccccccc\";i:3;s:12:\"cccc_ccccccc\";i:4;s:12:\"cccc_ccccccc\";i:5;s:12:\"cccccccccccc\";i:6;s:12:\"cccccccccccc\";i:7;s:12:\"cccccccccccc\";i:8;s:12:\"cccccccccccc\";i:9;s:12:\"cccccccccccc\";i:10;s:12', NULL, NULL, NULL);
INSERT INTO `class_room` VALUES (5, '112343', 'a:12:{i:0;s:12:\"cccccccccccc\";i:1;s:12:\"cccccccccccc\";i:2;s:12:\"cccc_ccccccc\";i:3;s:12:\"cccc_ccccccc\";i:4;s:12:\"cccc_ccccccc\";i:5;s:12:\"cccccccccccc\";i:6;s:12:\"cccccccccccc\";i:7;s:12:\"cccccccccccc\";i:8;s:12:\"cccccccccccc\";i:9;s:12:\"cccccccccccc\";i:10;s:12', '2018-01-01 04:00:00.000000', '2018-01-01 04:00:00.000000', NULL);
INSERT INTO `class_room` VALUES (41, '寂寞的教室', 'a:3:{i:0;s:1:\"c\";i:1;s:1:\"c\";i:2;s:1:\"_\";}', '2018-01-01 04:00:00.000000', '2018-03-01 04:00:00.000000', NULL);

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

SET FOREIGN_KEY_CHECKS = 1;
