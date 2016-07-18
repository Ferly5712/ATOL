/*
Navicat MySQL Data Transfer

Source Server         : Lokal
Source Server Version : 50141
Source Host           : localhost:3306
Source Database       : atol_finall

Target Server Type    : MYSQL
Target Server Version : 50141
File Encoding         : 65001

Date: 2016-07-18 13:29:35
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for jadwal
-- ----------------------------
DROP TABLE IF EXISTS `jadwal`;
CREATE TABLE `jadwal` (
  `kd_jadwal` char(5) NOT NULL,
  `kd_lokasi_asal` char(5) DEFAULT NULL,
  `kd_lokasi_tujuan` char(5) DEFAULT NULL,
  `jam_pergi` time DEFAULT NULL,
  `jam_berangkat` time DEFAULT NULL,
  `harga` int(11) DEFAULT NULL,
  PRIMARY KEY (`kd_jadwal`),
  KEY `fr1` (`kd_lokasi_asal`),
  KEY `fr2` (`kd_lokasi_tujuan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of jadwal
-- ----------------------------
INSERT INTO `jadwal` VALUES ('BJ001', 'BDG01', 'JKT01', '00:00:00', '09:30:00', '0');
INSERT INTO `jadwal` VALUES ('BJ002', 'BDG02', 'JKT01', '08:00:00', '10:20:00', '135000');

-- ----------------------------
-- Table structure for lokasi
-- ----------------------------
DROP TABLE IF EXISTS `lokasi`;
CREATE TABLE `lokasi` (
  `kd_lokasi` char(5) NOT NULL,
  `kota` varchar(255) DEFAULT NULL,
  `lokasi` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`kd_lokasi`),
  KEY `kd_lokasi` (`kd_lokasi`),
  KEY `kd_lokasi_2` (`kd_lokasi`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of lokasi
-- ----------------------------
INSERT INTO `lokasi` VALUES ('BDG01', 'Bandung', 'Jalan Dipatiukur No.95');
INSERT INTO `lokasi` VALUES ('BDG02', 'Bandung', 'Jl. Cihampelas No.143');
INSERT INTO `lokasi` VALUES ('JKT01', 'Jakarta', 'FX Sudirman, Jalan Jenderal Sudirman, Pintu Satu Senayan');

-- ----------------------------
-- Table structure for pelanggan
-- ----------------------------
DROP TABLE IF EXISTS `pelanggan`;
CREATE TABLE `pelanggan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `no_hp` varchar(255) DEFAULT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`,`username`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of pelanggan
-- ----------------------------
INSERT INTO `pelanggan` VALUES ('1', 'Arthur', 'arthur@chest.com', '087594562144', 'arthur', '68830aef4dbfad181162f9251a1da51b');
INSERT INTO `pelanggan` VALUES ('2', 'Fox', 'asd@dfs.com', '08456874321', 'fox', '2b95d1f09b8b66c5c43622a4d9ec9a04');

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(40) DEFAULT NULL,
  `priv` int(11) DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of user
-- ----------------------------
