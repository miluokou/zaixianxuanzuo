/*
 Navicat Premium Data Transfer

 Source Server         : sjdfi
 Source Server Type    : MySQL
 Source Server Version : 100139
 Source Host           : localhost:3306
 Source Schema         : test

 Target Server Type    : MySQL
 Target Server Version : 100139
 File Encoding         : 65001

 Date: 15/05/2019 00:27:48
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for class_room
-- ----------------------------
DROP TABLE IF EXISTS `class_room`;
CREATE TABLE `class_room`  (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET latin1 COLLATE latin1_bin NULL DEFAULT NULL,
  `created_at` datetime(6) NULL DEFAULT NULL,
  `updated_at` datetime(6) NULL DEFAULT NULL,
  `deleted_at` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of class_room
-- ----------------------------
INSERT INTO `class_room` VALUES (1, '001', '2019-05-14 23:25:35.000000', '2019-05-14 23:25:40.000000', NULL);

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
