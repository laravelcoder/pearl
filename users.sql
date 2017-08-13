/*
Navicat MySQL Data Transfer

Source Server         : HOMESTEAD
Source Server Version : 50717
Source Host           : localhost:33060
Source Database       : pearl

Target Server Type    : MYSQL
Target Server Version : 50717
File Encoding         : 65001

Date: 2017-08-13 17:12:17
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('1', 'phillipmadsen', 'wecodelaravel@gmail.com', '$2y$10$PHnAu/qQNx4AkDYaFWdXKuj80oRrxJyGHaKb2i3okTTfDd1x.XOJ6', null, '2017-06-12 23:17:45', '2017-06-12 23:17:45');
INSERT INTO `users` VALUES ('2', 'andpar79', 'contact@orderpearlessence.com', '$2y$10$5byiRIqZJc26IByLlnxv4uqLLqDSMZsjz29XvemRJTaztGdvLOxLq', null, '2017-06-12 23:17:45', '2017-06-12 23:17:45');
INSERT INTO `users` VALUES ('3', 'rob', 'rohitpmodi@gmail.com', '$2y$10$9dREVlKKWljrHsxhnV3Y6OtcHgOKHeCmXTMGImk2nxhYXhps6qlx6', null, '2017-06-12 23:17:45', '2017-06-12 23:17:45');
SET FOREIGN_KEY_CHECKS=1;
