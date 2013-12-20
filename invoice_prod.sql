/*
Navicat MySQL Data Transfer

Source Server         : my_local_mysql
Source Server Version : 50171
Source Host           : localhost:3306
Source Database       : invoice_prod

Target Server Type    : MYSQL
Target Server Version : 50171
File Encoding         : 65001

Date: 2013-10-29 17:33:51
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `cards`
-- ----------------------------
DROP TABLE IF EXISTS `cards`;
CREATE TABLE `cards` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `company_id` int(11) NOT NULL,
  `cart_number` varchar(20) DEFAULT NULL,
  `phone_number` varchar(20) DEFAULT NULL,
  `cart_status` int(1) DEFAULT '1',
  `activation_date` int(15) DEFAULT NULL,
  `cart_ballance` int(6) unsigned DEFAULT '0',
  `ballance_date` int(15) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of cards
-- ----------------------------

-- ----------------------------
-- Table structure for `cardstats`
-- ----------------------------
DROP TABLE IF EXISTS `cardstats`;
CREATE TABLE `cardstats` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of cardstats
-- ----------------------------
INSERT INTO `cardstats` VALUES ('1', 'Не активна');
INSERT INTO `cardstats` VALUES ('2', 'Активирована');
INSERT INTO `cardstats` VALUES ('3', 'Блокирована');

-- ----------------------------
-- Table structure for `companies`
-- ----------------------------
DROP TABLE IF EXISTS `companies`;
CREATE TABLE `companies` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(90) DEFAULT NULL,
  `firm_code` int(10) DEFAULT NULL,
  `vat_code` varchar(15) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `firm_street` varchar(90) DEFAULT NULL,
  `firm_index` varchar(10) DEFAULT NULL,
  `firm_city` varchar(40) DEFAULT NULL,
  `firm_country` varchar(60) DEFAULT NULL,
  `firm_deliv_street` varchar(90) DEFAULT NULL,
  `firm_deliv_index` varchar(10) DEFAULT NULL,
  `firm_deliv_city` varchar(40) DEFAULT NULL,
  `firm_deliv_country` varchar(60) DEFAULT NULL,
  `firm_account` varchar(40) DEFAULT NULL,
  `firm_bank` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of companies
-- ----------------------------

-- ----------------------------
-- Table structure for `invoices`
-- ----------------------------
DROP TABLE IF EXISTS `invoices`;
CREATE TABLE `invoices` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `company_id` int(11) DEFAULT NULL,
  `date` int(15) DEFAULT NULL,
  `period_from` int(15) NOT NULL,
  `period_to` int(15) NOT NULL,
  `person` varchar(20) NOT NULL,
  `invoice_number` varchar(11) DEFAULT NULL,
  `lng` varchar(6) DEFAULT NULL,
  `vat` int(2) DEFAULT NULL,
  `invoice_sent` varchar(10) DEFAULT NULL,
  `file` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of invoices
-- ----------------------------

-- ----------------------------
-- Table structure for `operations`
-- ----------------------------
DROP TABLE IF EXISTS `operations`;
CREATE TABLE `operations` (
  `id` int(30) NOT NULL AUTO_INCREMENT,
  `card_id` int(11) DEFAULT NULL,
  `company_id` int(11) DEFAULT NULL,
  `data` int(15) DEFAULT NULL,
  `operation_id` int(11) DEFAULT NULL,
  `operation_type` int(1) DEFAULT '0',
  `person` varchar(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=61 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of operations
-- ----------------------------

-- ----------------------------
-- Table structure for `opnames`
-- ----------------------------
DROP TABLE IF EXISTS `opnames`;
CREATE TABLE `opnames` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `op_name` varchar(255) NOT NULL,
  `op_code` varchar(255) NOT NULL,
  `op_description` varchar(255) NOT NULL,
  `op_description_eng` varchar(100) DEFAULT NULL,
  `op_cost_eur` float NOT NULL,
  `op_cost_full_eur` float DEFAULT NULL,
  `op_cost_lit` float NOT NULL,
  `op_flag` int(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of opnames
-- ----------------------------
INSERT INTO `opnames` VALUES ('1', 'TRAVEL SIM CARD COMBO', 'COMBO', 'Aktyvavimas', 'Activation', '1.45', '1.75', '5.01', '0');
INSERT INTO `opnames` VALUES ('2', 'TRAVEL SIM PREPAID CARD RECHARGE', 'CSC20', 'Papildymas', 'Recharge', '16.53', '20', '57.07', '1');
INSERT INTO `opnames` VALUES ('3', 'TRAVEL SIM PREPAID CARD RECHARGE', 'CSC50', 'Papildymas', 'Recharge', '41.32', '50', '142.67', '1');
INSERT INTO `opnames` VALUES ('4', 'TRAVEL SIM PREPAID CARD RECHARGE', 'CSC100', 'Papildymas', 'Recharge', '82.65', '100', '285.37', '1');
