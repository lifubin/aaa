/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50155
Source Host           : localhost:3306
Source Database       : hunlian

Target Server Type    : MYSQL
Target Server Version : 50155
File Encoding         : 65001

Date: 2015-06-28 19:30:13
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for access
-- ----------------------------
DROP TABLE IF EXISTS `access`;
CREATE TABLE `access` (
  `role_id` smallint(6) unsigned NOT NULL,
  `node_id` smallint(6) unsigned NOT NULL,
  `level` tinyint(1) NOT NULL,
  `pid` smallint(6) NOT NULL,
  `module` varchar(50) DEFAULT NULL,
  KEY `groupId` (`role_id`),
  KEY `nodeId` (`node_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of access
-- ----------------------------
INSERT INTO `access` VALUES ('2', '1', '1', '0', null);
INSERT INTO `access` VALUES ('2', '40', '2', '1', null);
INSERT INTO `access` VALUES ('2', '30', '2', '1', null);
INSERT INTO `access` VALUES ('3', '1', '1', '0', null);
INSERT INTO `access` VALUES ('2', '69', '2', '1', null);
INSERT INTO `access` VALUES ('2', '50', '3', '40', null);
INSERT INTO `access` VALUES ('3', '50', '3', '40', null);
INSERT INTO `access` VALUES ('3', '7', '2', '1', null);
INSERT INTO `access` VALUES ('3', '39', '3', '30', null);
INSERT INTO `access` VALUES ('2', '39', '3', '30', null);
INSERT INTO `access` VALUES ('2', '49', '3', '30', null);
INSERT INTO `access` VALUES ('4', '1', '1', '0', null);
INSERT INTO `access` VALUES ('4', '2', '2', '1', null);
INSERT INTO `access` VALUES ('4', '3', '2', '1', null);
INSERT INTO `access` VALUES ('4', '4', '2', '1', null);
INSERT INTO `access` VALUES ('4', '5', '2', '1', null);
INSERT INTO `access` VALUES ('4', '6', '2', '1', null);
INSERT INTO `access` VALUES ('4', '7', '2', '1', null);
INSERT INTO `access` VALUES ('4', '11', '2', '1', null);
INSERT INTO `access` VALUES ('5', '25', '1', '0', null);
INSERT INTO `access` VALUES ('5', '51', '2', '25', null);
INSERT INTO `access` VALUES ('3', '69', '2', '1', null);
INSERT INTO `access` VALUES ('3', '30', '2', '1', null);
INSERT INTO `access` VALUES ('3', '40', '2', '1', null);
INSERT INTO `access` VALUES ('1', '97', '3', '6', null);
INSERT INTO `access` VALUES ('1', '98', '3', '2', null);
INSERT INTO `access` VALUES ('1', '96', '3', '2', null);
INSERT INTO `access` VALUES ('2', '32', '3', '30', null);
INSERT INTO `access` VALUES ('2', '31', '3', '30', null);
INSERT INTO `access` VALUES ('7', '1', '1', '0', null);
INSERT INTO `access` VALUES ('7', '30', '2', '1', null);
INSERT INTO `access` VALUES ('7', '40', '2', '1', null);
INSERT INTO `access` VALUES ('7', '69', '2', '1', null);
INSERT INTO `access` VALUES ('7', '50', '3', '40', null);
INSERT INTO `access` VALUES ('7', '39', '3', '30', null);
INSERT INTO `access` VALUES ('7', '49', '3', '30', null);
INSERT INTO `access` VALUES ('9', '97', '3', '6', null);
INSERT INTO `access` VALUES ('9', '98', '3', '2', null);
INSERT INTO `access` VALUES ('9', '96', '3', '2', null);

-- ----------------------------
-- Table structure for attention
-- ----------------------------
DROP TABLE IF EXISTS `attention`;
CREATE TABLE `attention` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `member_id` int(11) NOT NULL,
  `attention_id` int(11) NOT NULL COMMENT '被关注人的id',
  `attention_time` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of attention
-- ----------------------------

-- ----------------------------
-- Table structure for group
-- ----------------------------
DROP TABLE IF EXISTS `group`;
CREATE TABLE `group` (
  `id` smallint(3) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(25) NOT NULL,
  `title` varchar(50) NOT NULL,
  `create_time` int(11) unsigned NOT NULL,
  `update_time` int(11) unsigned NOT NULL DEFAULT '0',
  `status` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `sort` smallint(3) unsigned NOT NULL DEFAULT '0',
  `show` tinyint(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of group
-- ----------------------------
INSERT INTO `group` VALUES ('2', 'App', '应用中心', '1222841259', '0', '1', '0', '0');

-- ----------------------------
-- Table structure for label
-- ----------------------------
DROP TABLE IF EXISTS `label`;
CREATE TABLE `label` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `addtime` int(11) DEFAULT NULL,
  `status` tinyint(4) DEFAULT '1',
  PRIMARY KEY (`id`,`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of label
-- ----------------------------

-- ----------------------------
-- Table structure for member
-- ----------------------------
DROP TABLE IF EXISTS `member`;
CREATE TABLE `member` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `account` varchar(64) NOT NULL,
  `password` varchar(64) NOT NULL,
  `nickname` varchar(64) NOT NULL,
  `register_time` int(11) DEFAULT NULL,
  `last_login_time` int(11) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `mobile` varchar(32) DEFAULT NULL,
  `status` tinyint(4) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of member
-- ----------------------------
INSERT INTO `member` VALUES ('8', 'test', '098f6bcd4621d373cade4e832627b4f6', 'test', null, null, 'lifubin1985@126.com', '18210354073', '1');

-- ----------------------------
-- Table structure for member_info
-- ----------------------------
DROP TABLE IF EXISTS `member_info`;
CREATE TABLE `member_info` (
  `member_id` int(11) NOT NULL,
  `description` varchar(255) DEFAULT NULL COMMENT '个人简介',
  `birthday` int(11) DEFAULT NULL,
  `sex` tinyint(4) DEFAULT NULL,
  `pic` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of member_info
-- ----------------------------
INSERT INTO `member_info` VALUES ('8', null, '631123200', '1', null);

-- ----------------------------
-- Table structure for member_label
-- ----------------------------
DROP TABLE IF EXISTS `member_label`;
CREATE TABLE `member_label` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `member_id` int(11) NOT NULL,
  `label_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of member_label
-- ----------------------------

-- ----------------------------
-- Table structure for mood
-- ----------------------------
DROP TABLE IF EXISTS `mood`;
CREATE TABLE `mood` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `member_id` int(11) NOT NULL,
  `content` text,
  `addtime` int(11) DEFAULT NULL,
  `mood_value` int(11) DEFAULT NULL COMMENT '心情',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of mood
-- ----------------------------

-- ----------------------------
-- Table structure for node
-- ----------------------------
DROP TABLE IF EXISTS `node`;
CREATE TABLE `node` (
  `id` smallint(6) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `title` varchar(50) DEFAULT NULL,
  `status` tinyint(1) DEFAULT '0',
  `remark` varchar(255) DEFAULT NULL,
  `sort` smallint(6) unsigned DEFAULT NULL,
  `pid` smallint(6) unsigned NOT NULL,
  `level` tinyint(1) unsigned NOT NULL,
  `type` tinyint(1) NOT NULL DEFAULT '0',
  `group_id` tinyint(3) unsigned DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `level` (`level`),
  KEY `pid` (`pid`),
  KEY `status` (`status`),
  KEY `name` (`name`)
) ENGINE=MyISAM AUTO_INCREMENT=103 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of node
-- ----------------------------
INSERT INTO `node` VALUES ('100', 'edit', '编辑后台用户', '1', null, '0', '7', '3', '7', '0');
INSERT INTO `node` VALUES ('101', 'front', '前台管理', '1', null, '0', '0', '1', '8', '0');
INSERT INTO `node` VALUES ('102', 'Member', '会员管理', '1', null, '0', '101', '2', '9', '0');
INSERT INTO `node` VALUES ('7', 'User', '后台用户', '1', '', '4', '1', '2', '7', '2');
INSERT INTO `node` VALUES ('6', 'Role', '角色管理', '1', '', '3', '1', '2', '6', '2');
INSERT INTO `node` VALUES ('2', 'Node', '节点管理', '1', '', '2', '1', '2', '2', '2');
INSERT INTO `node` VALUES ('1', 'App', '后台管理', '1', '', null, '0', '1', '1', '2');
INSERT INTO `node` VALUES ('97', 'add', '添加角色', '1', null, '0', '6', '3', '6', '0');
INSERT INTO `node` VALUES ('99', 'add', '添加后台用户', '1', null, '0', '7', '3', '7', '0');
INSERT INTO `node` VALUES ('96', 'add', '添加节点', '1', null, '0', '2', '3', '2', '0');
INSERT INTO `node` VALUES ('98', 'edit', '修改节点', '1', null, '0', '2', '3', '2', '0');

-- ----------------------------
-- Table structure for role
-- ----------------------------
DROP TABLE IF EXISTS `role`;
CREATE TABLE `role` (
  `id` smallint(6) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `pid` smallint(6) DEFAULT NULL,
  `status` tinyint(1) unsigned DEFAULT NULL,
  `remark` varchar(255) DEFAULT NULL,
  `ename` varchar(5) DEFAULT NULL,
  `create_time` int(11) unsigned NOT NULL,
  `update_time` int(11) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `parentId` (`pid`),
  KEY `ename` (`ename`),
  KEY `status` (`status`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of role
-- ----------------------------
INSERT INTO `role` VALUES ('1', '领导组', '0', '1', '', 'leade', '1208784792', '1435065073');
INSERT INTO `role` VALUES ('2', '员工组', '0', '1', '', '', '1215496283', '1254325566');
INSERT INTO `role` VALUES ('7', '演示组', '0', '1', '', null, '1254325787', '0');
INSERT INTO `role` VALUES ('9', 'aaa', null, '1', null, 'aaa', '0', '1435064974');

-- ----------------------------
-- Table structure for role_user
-- ----------------------------
DROP TABLE IF EXISTS `role_user`;
CREATE TABLE `role_user` (
  `role_id` mediumint(9) unsigned DEFAULT NULL,
  `user_id` char(32) DEFAULT NULL,
  KEY `group_id` (`role_id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of role_user
-- ----------------------------
INSERT INTO `role_user` VALUES ('4', '27');
INSERT INTO `role_user` VALUES ('4', '26');
INSERT INTO `role_user` VALUES ('4', '30');
INSERT INTO `role_user` VALUES ('5', '31');
INSERT INTO `role_user` VALUES ('3', '22');
INSERT INTO `role_user` VALUES ('3', '1');
INSERT INTO `role_user` VALUES ('1', '4');
INSERT INTO `role_user` VALUES ('2', '3');
INSERT INTO `role_user` VALUES ('7', '2');
INSERT INTO `role_user` VALUES ('3', '35');
INSERT INTO `role_user` VALUES ('3', '1');

-- ----------------------------
-- Table structure for talk
-- ----------------------------
DROP TABLE IF EXISTS `talk`;
CREATE TABLE `talk` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `member_id` int(11) NOT NULL,
  `to_id` int(11) NOT NULL,
  `to_time` int(11) NOT NULL,
  `content` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of talk
-- ----------------------------

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `account` varchar(64) NOT NULL,
  `nickname` varchar(50) NOT NULL,
  `password` char(32) NOT NULL,
  `bind_account` varchar(50) NOT NULL,
  `last_login_time` int(11) unsigned DEFAULT '0',
  `last_login_ip` varchar(40) DEFAULT NULL,
  `login_count` mediumint(8) unsigned DEFAULT '0',
  `verify` varchar(32) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `remark` varchar(255) NOT NULL,
  `create_time` int(11) unsigned NOT NULL,
  `update_time` int(11) unsigned NOT NULL,
  `status` tinyint(1) DEFAULT '0',
  `type_id` tinyint(2) unsigned DEFAULT '0',
  `info` text NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `account` (`account`)
) ENGINE=MyISAM AUTO_INCREMENT=36 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('1', 'admin', '管理员', '21232f297a57a5a743894a0e4a801fc3', '', '1435371608', '127.0.0.1', '902', '8888', 'liu21st@gmail.com', '备注信息', '1222907803', '1326266696', '1', '0', '');
INSERT INTO `user` VALUES ('2', 'demo', '演示', 'fe01ce2a7fbac8fafaed7c982a04e229', '', '1435046196', '127.0.0.1', '92', '8888', '', '', '1239783735', '1254325770', '1', '0', '');
INSERT INTO `user` VALUES ('3', 'member', '员工', 'aa08769cdcb26674c6706093503ff0a3', '', '1326266720', '127.0.0.1', '17', '', '', '', '1253514375', '1254325728', '1', '0', '');
INSERT INTO `user` VALUES ('4', 'leader', '领导', 'c444858e0aaeb727da73d2eae62321ad', '', '1434960935', '127.0.0.1', '16', '', '', '领导', '1253514575', '1254325705', '1', '0', '');
