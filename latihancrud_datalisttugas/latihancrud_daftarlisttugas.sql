/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : latihancrud_daftarlisttugas

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2022-03-22 19:55:01
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for `tabeltugas`
-- ----------------------------
DROP TABLE IF EXISTS `tabeltugas`;
CREATE TABLE `tabeltugas` (
  `Id` int(11) NOT NULL,
  `matkul` varchar(255) DEFAULT NULL,
  `namatugas` varchar(255) NOT NULL,
  `deadline` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of tabeltugas
-- ----------------------------
INSERT INTO `tabeltugas` VALUES ('23232', 'bintang', 'jiasjdiaj', '0044-03-04');
