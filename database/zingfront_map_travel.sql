/*
Navicat MySQL Data Transfer

Source Server         : homestead
Source Server Version : 50722
Source Host           : localhost:33060
Source Database       : mi-shop

Target Server Type    : MYSQL
Target Server Version : 50722
File Encoding         : 65001

Date: 2019-02-12 22:48:17
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for zingfront_map_travel
-- ----------------------------
DROP TABLE IF EXISTS `zingfront_map_travel`;
CREATE TABLE `zingfront_map_travel` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '名称',
  `is_travel` tinyint(3) unsigned DEFAULT '0' COMMENT '是否旅行过',
  `remarks` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '旅行备注',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of zingfront_map_travel
-- ----------------------------
INSERT INTO `zingfront_map_travel` VALUES ('1', '北京', '0', null, null, null);
INSERT INTO `zingfront_map_travel` VALUES ('2', '天津', '0', null, null, null);
INSERT INTO `zingfront_map_travel` VALUES ('3', '上海', '0', null, null, null);
INSERT INTO `zingfront_map_travel` VALUES ('4', '重庆', '0', null, null, null);
INSERT INTO `zingfront_map_travel` VALUES ('5', '河北', '0', null, null, null);
INSERT INTO `zingfront_map_travel` VALUES ('6', '河南', '0', null, null, null);
INSERT INTO `zingfront_map_travel` VALUES ('7', '云南', '1', '计划2019五一期间旅行', null, '2019-02-12 22:22:35');
INSERT INTO `zingfront_map_travel` VALUES ('8', '辽宁', '0', null, null, null);
INSERT INTO `zingfront_map_travel` VALUES ('9', '黑龙江', '0', null, null, null);
INSERT INTO `zingfront_map_travel` VALUES ('10', '湖南', '0', null, null, null);
INSERT INTO `zingfront_map_travel` VALUES ('11', '安徽', '0', null, null, null);
INSERT INTO `zingfront_map_travel` VALUES ('12', '山东', '0', null, null, null);
INSERT INTO `zingfront_map_travel` VALUES ('13', '新疆', '0', null, null, null);
INSERT INTO `zingfront_map_travel` VALUES ('14', '江苏', '0', null, null, null);
INSERT INTO `zingfront_map_travel` VALUES ('15', '浙江', '0', null, null, null);
INSERT INTO `zingfront_map_travel` VALUES ('16', '江西', '0', null, null, null);
INSERT INTO `zingfront_map_travel` VALUES ('17', '湖北', '1', '计划2019五一期间旅行', null, '2019-02-12 22:33:02');
INSERT INTO `zingfront_map_travel` VALUES ('18', '广西', '0', null, null, null);
INSERT INTO `zingfront_map_travel` VALUES ('19', '甘肃', '0', null, null, null);
INSERT INTO `zingfront_map_travel` VALUES ('20', '山西', '0', null, null, null);
INSERT INTO `zingfront_map_travel` VALUES ('21', '内蒙古', '0', null, null, null);
INSERT INTO `zingfront_map_travel` VALUES ('22', '陕西', '0', null, null, null);
INSERT INTO `zingfront_map_travel` VALUES ('23', '吉林', '0', null, null, null);
INSERT INTO `zingfront_map_travel` VALUES ('24', '福建', '0', null, null, null);
INSERT INTO `zingfront_map_travel` VALUES ('25', '贵州', '0', null, null, null);
INSERT INTO `zingfront_map_travel` VALUES ('26', '广东', '0', null, null, null);
INSERT INTO `zingfront_map_travel` VALUES ('27', '青海', '0', null, null, null);
INSERT INTO `zingfront_map_travel` VALUES ('28', '西藏', '1', '计划2019五一期间旅行', null, '2019-02-12 22:23:44');
INSERT INTO `zingfront_map_travel` VALUES ('29', '四川', '0', null, null, null);
INSERT INTO `zingfront_map_travel` VALUES ('30', '宁夏', '0', null, null, null);
INSERT INTO `zingfront_map_travel` VALUES ('31', '海南', '0', null, null, null);
INSERT INTO `zingfront_map_travel` VALUES ('32', '台湾', '0', null, null, null);
INSERT INTO `zingfront_map_travel` VALUES ('33', '香港', '0', null, null, null);
INSERT INTO `zingfront_map_travel` VALUES ('34', '澳门', '0', null, null, null);
