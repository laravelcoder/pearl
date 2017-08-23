/*
Navicat MySQL Data Transfer

Source Server         : OrderPearlEssence
Source Server Version : 50634
Source Host           : mysql.orderpearlessence.com:3306
Source Database       : pearlywhite17

Target Server Type    : MYSQL
Target Server Version : 50634
File Encoding         : 65001

Date: 2017-08-22 18:31:16
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for categories
-- ----------------------------
DROP TABLE IF EXISTS `categories`;
CREATE TABLE `categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci,
  `banner` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lang` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of categories
-- ----------------------------
INSERT INTO `categories` VALUES ('1', 'Pearl Parties', 'Now you can host a pearl party online or at your house call us today.', '', 'pearl-party', 'en', '2017-08-04 20:30:35', '2017-08-04 20:30:42', null);

-- ----------------------------
-- Table structure for designs
-- ----------------------------
DROP TABLE IF EXISTS `designs`;
CREATE TABLE `designs` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `order_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `published` tinyint(1) NOT NULL DEFAULT '1',
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` text COLLATE utf8mb4_unicode_ci,
  `button_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_details` text COLLATE utf8mb4_unicode_ci,
  `details` text COLLATE utf8mb4_unicode_ci,
  `price` decimal(11,2) DEFAULT NULL,
  `availability` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of designs
-- ----------------------------
INSERT INTO `designs` VALUES ('1', '#39', '1', 'Forever Love', 'forever-love', 'a:1:{i:0;s:16:\"SPDOUBHEART1.jpg\";}', 'https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=6UCU5V4HZZDGQ', 'Forever Love Silver Plated Pendant #39', '<p>The Forever Love pendant is silver plated.  This setting includes the pendant, a sterling silver necklace and 1 oyster opening.  </p>', '35.00', 'Available', '2017-08-05 09:39:21', '2017-08-22 19:46:22', null);
INSERT INTO `designs` VALUES ('2', '#31', '1', 'Sea Star', 'sea-star', 'a:1:{i:0;s:18:\"SPDOUBSTAR1-lg.png\";}', 'https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=6UCU5V4HZZDGQ', 'Sea Star Pendant is Silver Plated #31.', '<p>The Sea Star pendant is silver plated. &nbsp;This setting includes the pendant, a sterling silver necklace and 1 oyster opening.<br></p>', '35.00', 'Available', '2017-08-05 09:50:37', '2017-08-14 02:20:35', null);
INSERT INTO `designs` VALUES ('3', '#33', '1', 'Never Forget', 'never-forget', 'a:1:{i:0;s:17:\"SPELEPHANT-lg.png\";}', 'https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=6UCU5V4HZZDGQ', 'Never Forget Silver Plated #33', '<p>The Never Forget is a silver plated pendant. &nbsp;This setting includes the pendant, a sterling silver necklace and 1 oyster opening. &nbsp;</p>', '35.00', 'Available', '2017-08-05 10:09:29', '2017-08-14 02:22:01', null);
INSERT INTO `designs` VALUES ('4', '#37', '1', 'Celtic Swirl', 'celtic-swirl', 'a:1:{i:0;s:16:\"SPFLOWER1-lg.jpg\";}', 'https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=6UCU5V4HZZDGQ', 'Celtin Swirl Silver Plated Pendant #37', '<p>The Celtic Swirl pendant is silver plated. &nbsp;This setting includes the pendant, a sterling silver necklace and 1 oyster opening<br></p>', '35.00', 'Available', '2017-08-05 10:10:22', '2017-08-14 02:22:55', null);
INSERT INTO `designs` VALUES ('5', '#38', '1', 'Monkey Love', 'monkey-love', 'a:1:{i:0;s:13:\"spmonkey1.jpg\";}', 'https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=6UCU5V4HZZDGQ', 'Monkey Love Silver Plated Setting #38.', '<p><br></p>', '35.00', 'Available', '2017-08-05 10:11:07', '2017-08-22 23:48:10', null);
INSERT INTO `designs` VALUES ('6', '#44', '1', 'The Messenger', 'the-messenger', 'a:1:{i:0;s:13:\"SPOWL1-lg.png\";}', 'https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=6UCU5V4HZZDGQ', 'The Messenger Silver Plated Pendant #44.', '<p>The Messenger is a silver plated pendant. &nbsp;This setting includes the pendant, a sterling silver chain and 1 oyster opening.<br></p>', '35.00', 'Available', '2017-08-05 10:11:49', '2017-08-14 02:39:21', null);
INSERT INTO `designs` VALUES ('7', '#30', '1', 'Paw Print', 'paw-print', 'a:1:{i:0;s:12:\"SSPAW-lg.png\";}', 'https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=6UCU5V4HZZDGQ', 'The Paw Print Pendant Silver Plated #30.', '<p>The Paw Print #30 is a silver plated pendant. &nbsp;This setting includes the pendant, a sterling silver necklace and 1 oyster opening.<br></p>', '35.00', 'Available', '2017-08-05 10:12:30', '2017-08-14 02:40:08', null);
INSERT INTO `designs` VALUES ('8', '#36', '1', 'Shooting Star', 'shooting-star', 'a:1:{i:0;s:14:\"SPSTAR1-lg.png\";}', 'https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=6UCU5V4HZZDGQ', 'Shooting Star Silver Plated Pendant #36.', '<p>The Shooting Star is a silver plated pendant. &nbsp;This setting includes the pendant, a sterling silver necklace and 1 oyster opening.<br></p>', '35.00', 'Available', '2017-08-05 10:17:29', '2017-08-14 02:40:55', null);
INSERT INTO `designs` VALUES ('9', '#46', '1', 'Best Mom', 'best-mom', 'a:1:{i:0;s:16:\"SPBESTMOM-lg.jpg\";}', 'https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=6UCU5V4HZZDGQ', 'Best Mom Silver Plated Pendant #46.', '<p>The Best Mom is a silver plated pendant. &nbsp;This setting includes the pendant, a sterling silver necklace and 1 oyster opening.<br></p>', '35.00', 'Available', '2017-08-05 22:27:17', '2017-08-14 02:41:45', null);
INSERT INTO `designs` VALUES ('10', '#40', '1', 'Life\'s Anchor', 'life-s-anchor', 'a:1:{i:0;s:15:\"SPANCHOR-lg.jpg\";}', 'https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=6UCU5V4HZZDGQ', 'Life\'s Anchor Silver Plated Pendant #40.', '<p>The Life\'s Anchor is a silver plated pendant. &nbsp;This setting includes the pendant, a sterling silver necklace and 1 oyster opening.<br></p>', '35.00', 'Available', '2017-08-05 22:28:21', '2017-08-14 02:48:46', null);
INSERT INTO `designs` VALUES ('11', '#34', '1', 'Butterfly Kisses', 'butterfly-kisses', 'a:1:{i:0;s:19:\"SPBUTTERFLY2-lg.jpg\";}', 'https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=6UCU5V4HZZDGQ', 'Butterfly Kisses Silver Plated Pendant #34.', '<p>The Butterfly Kisses is a silver plated pendant. &nbsp;This setting includes the pendant, a sterling silver necklace and 1 oyster opening.<br></p>', '35.00', 'Available', '2017-08-05 22:29:29', '2017-08-14 02:49:25', null);
INSERT INTO `designs` VALUES ('12', '#42', '1', 'MIdnight Ride', 'midnight-ride', 'a:4:{i:0;s:14:\"1-carriage.jpg\";i:1;s:12:\"carriage.jpg\";i:2;s:14:\"carriage-2.jpg\";i:3;s:28:\"Pearl-Cage-Carriage-Open.jpg\";}', 'https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=6UCU5V4HZZDGQ', 'Midnight Ride Silver Plated Pendant #42.', '<p>The Midnight Ride #42 is a silver plated pendant. &nbsp;This setting includes the pendant, a sterling silver necklace and 1 oyster opening.<br></p>', '35.00', 'Available', '2017-08-05 22:30:41', '2017-08-14 02:50:15', null);
INSERT INTO `designs` VALUES ('13', '#32', '1', 'The Sunflower', 'the-sunflower', 'a:1:{i:0;s:19:\"SPSUNFLOWER1-lg.png\";}', 'https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=6UCU5V4HZZDGQ', 'Sunflower Silver Plated Pendant #32.', '<p>The Sunflower is a silver plated pendant. &nbsp;This setting includes the pendant, a sterling silver necklace and 1 oyster opening.<br></p>', '35.00', 'Available', '2017-08-05 22:37:06', '2017-08-14 02:50:52', null);
INSERT INTO `designs` VALUES ('14', '#43', '1', 'Dolphin\'s Cove', 'dolphin-s-cove', 'a:1:{i:0;s:17:\"SPDOLPHIN1-lg.jpg\";}', 'https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=6UCU5V4HZZDGQ', 'Dolphin\'s Cove Silver Plated Pendant #43.', '<p>The Dolphin\'s Cove is a silver plated pendant. &nbsp;This setting includes the pendant, a sterling silver necklace and 1 oyster opening.<br></p>', '35.00', 'Available', '2017-08-05 22:37:33', '2017-08-14 02:51:30', null);
INSERT INTO `designs` VALUES ('15', '#1', '1', 'Dole Whip', 'dole-whip', 'a:2:{i:0;s:13:\"pinnapple.jpg\";i:1;s:18:\"pineapplepearl.jpg\";}', 'https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=6UCU5V4HZZDGQ', 'Dole Whip Sterling SIlver Pendant #1.', '<p>The Dole Whip is a sterling silver pendant.  This setting includes the pendant, a sterling silver necklace and 1 oyster opening.<br></p>', '45.00', 'Available', '2017-08-06 23:13:27', '2017-08-22 23:54:20', null);
INSERT INTO `designs` VALUES ('16', '#2', '1', 'Rain Drop', 'rain-dro', 'a:1:{i:0;s:13:\"rain-drop.jpg\";}', 'https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=6UCU5V4HZZDGQ', 'Rain Drop Sterling Silver Pendant #2.', '<p>The Rain Drop is a sterling silver pendant.  This setting includes the pendant, a sterling silver necklace and 1 oyster opening.<br></p>', '45.00', 'Available', '2017-08-06 23:14:39', '2017-08-23 00:23:46', null);
INSERT INTO `designs` VALUES ('17', '#3', '1', 'The Lantern', 'the-lantern', 'a:1:{i:0;s:8:\"tube.jpg\";}', 'https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=6UCU5V4HZZDGQ', 'Lantern Sterling Silver Pendant #3.', '<p>The Lantern is a sterling silver pendant.  This setting includes the pendant, a sterling silver necklace and 1 oyster opening.</p><p>**This pendant will hold up to 4 pearls.   This setting and price includes 1 oyster opening.  Additional openings can be purchased at any time.**</p>', '45.00', 'Available', '2017-08-06 23:15:32', '2017-08-22 23:56:15', null);
INSERT INTO `designs` VALUES ('18', '#4', '1', 'Secret Garden', 'secret-garden', 'a:1:{i:0;s:10:\"flower.jpg\";}', 'https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=6UCU5V4HZZDGQ', 'Secret Garden Sterling SIlver Pendant #4.', '<p>The Secret Garden is a sterling silver pendant.  This setting includes the pendant, a sterling silver necklace and 1 oyster opening.<br></p>', '45.00', 'Available', '2017-08-06 23:16:22', '2017-08-22 23:56:29', null);
INSERT INTO `designs` VALUES ('19', '#5', '1', 'The Lotus', 'the-lotus', 'a:1:{i:0;s:11:\"SSLOTUS.JPG\";}', 'https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=6UCU5V4HZZDGQ', 'Lotus Sterling Silver Pendant #5.', '<p>The Lotus is a sterling silver pendant. &nbsp;This setting includes the pendant, a sterling silver necklace and 1 oyster opening.<br></p>', '45.00', 'Available', '2017-08-06 23:26:11', '2017-08-14 02:55:29', null);
INSERT INTO `designs` VALUES ('20', '#6', '1', 'Queen of Hearts', 'queen-of-hearts', 'a:1:{i:0;s:16:\"double-heart.jpg\";}', 'https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=6UCU5V4HZZDGQ', 'Queen of Hearts Sterling Silver Pendant #6.', '<p>The Queen of Hearts is a sterling silver pendant.  This setting includes the pendant, a sterling silver necklace and 1 oyster opening.<br></p>', '45.00', 'Available', '2017-08-06 23:27:15', '2017-08-23 00:22:36', null);
INSERT INTO `designs` VALUES ('21', '#7', '1', 'Never Forget', 'never-forget', 'a:1:{i:0;s:14:\"1-elephant.jpg\";}', 'https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=6UCU5V4HZZDGQ', 'Never Forget Sterling Silver Pendant #7.', '<p>The Never Forget #7 is a sterling silver pendant.  This setting includes the pendant, a sterling silver necklace and 1 oyster opening.<br></p>', '45.00', 'Available', '2017-08-06 23:28:22', '2017-08-23 00:26:22', null);
INSERT INTO `designs` VALUES ('22', '#8', '1', 'Infinity Wings', 'infinity-wings', 'a:1:{i:0;s:18:\"infinity-wings.jpg\";}', 'https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=6UCU5V4HZZDGQ', 'Infinity Wings Sterling Silver Pendant #8.', '<p>The Infinity Wings is a sterling silver pendant.  This setting includes the pendant, a sterling silver necklace and 1 oyster opening.<br></p>', '45.00', 'Available', '2017-08-06 23:33:41', '2017-08-23 00:25:55', null);
INSERT INTO `designs` VALUES ('23', '#9', '1', 'Olympic Love', 'olympic-love', 'a:1:{i:0;s:16:\"cilcle-heart.jpg\";}', 'https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=6UCU5V4HZZDGQ', 'Olympic Love Sterling Silver Pendant #9.', '<p>The Olympic Love is a sterling silver pendant.  This setting includes the pendant, a sterling silver necklace and 1 oyster opening.<br></p>', '45.00', 'Available', '2017-08-06 23:34:30', '2017-08-23 00:22:23', null);
INSERT INTO `designs` VALUES ('24', '#10', '1', 'Honu', 'honu', 'a:1:{i:0;s:10:\"turtle.jpg\";}', 'https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=6UCU5V4HZZDGQ', 'Honu Sterling Silver Pendant #10.', '<p>The Honu is a sterling silver pendant.  This setting includes the pendant, a sterling silver necklace and 1 oyster opening.<br></p>', '45.00', 'Available', '2017-08-06 23:36:37', '2017-08-22 23:53:15', null);
INSERT INTO `designs` VALUES ('25', null, '1', 'Luck of the Irish', 'luck-of-the-irish', 'a:1:{i:0;s:10:\"clover.jpg\";}', 'https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=6UCU5V4HZZDGQ', 'The Luck of the Irish is a sterling silver pendant.  This setting includes the pendant, a sterling silver necklace and 1 oyster opening.', null, '45.00', 'Available', '2017-08-06 23:37:30', '2017-08-22 23:56:43', null);
INSERT INTO `designs` VALUES ('26', '#13', '1', 'French Twist', 'french-twist', 'a:3:{i:0;s:11:\"1-twist.jpg\";i:1;s:9:\"twist.jpg\";i:2;s:9:\"twist.jpg\";}', 'https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=6UCU5V4HZZDGQ', 'French Twist Sterling Silver Pendant #13.', '<p>The French Twist is a sterling silver pendant. &nbsp;This setting includes the pendant, a sterling silver necklace and 1 oyster opening.<br></p>', '45.00', 'Available', '2017-08-06 23:51:35', '2017-08-14 03:04:03', null);
INSERT INTO `designs` VALUES ('27', '#14', '1', 'Minnie Mouse', 'minnie-mouse', 'a:2:{i:0;s:12:\"1-minnie.jpg\";i:1;s:10:\"minnie.jpg\";}', 'https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=6UCU5V4HZZDGQ', 'Minnie Mouse Sterling Silver Pendant #14.', '<p>The Minnie Mouse is a sterling silver pendant. &nbsp;This setting includes the pendant, a sterling silver necklace and 1 oyster opening.<br></p>', '45.00', 'Available', '2017-08-06 23:53:45', '2017-08-14 03:04:43', null);
INSERT INTO `designs` VALUES ('28', '#12', '1', 'Midnight Ride', 'midnight-ride', 'a:1:{i:0;s:14:\"carriage-2.jpg\";}', 'https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=6UCU5V4HZZDGQ', 'Midnight Ride Sterling Silver Pendant #12.', '<p>The Midnight Ride is a sterling silver pendant.  This setting includes the pendant, a sterling silver necklace and 1 oyster opening.<br></p>', '45.00', 'Available', '2017-08-06 23:54:58', '2017-08-22 23:44:18', null);
INSERT INTO `designs` VALUES ('29', '#41', '1', 'All My Love', 'all-my-love', 'a:1:{i:0;s:15:\"all-my-love.jpg\";}', 'https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=6UCU5V4HZZDGQ', 'All My Love Silver Plated Pendant #41.', '<p>The All My Love is a silver plated pendant.  This setting includes the pendant, a sterling silver necklace and 1 oyster opening.<br></p>', '35.00', 'Available', '2017-08-06 23:59:48', '2017-08-23 00:28:54', null);

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES ('1', '2014_10_12_000000_create_users_table', '1');
INSERT INTO `migrations` VALUES ('2', '2014_10_12_100000_create_password_resets_table', '1');
INSERT INTO `migrations` VALUES ('3', '2016_12_29_000002_create_posts_table', '1');
INSERT INTO `migrations` VALUES ('4', '2017_06_12_232815_create_designs_table', '1');
INSERT INTO `migrations` VALUES ('5', '2017_06_20_000054_create_post_tag_pivot_table', '1');
INSERT INTO `migrations` VALUES ('6', '2017_06_20_222615_create_tags_table', '1');
INSERT INTO `migrations` VALUES ('7', '2017_06_27_223632_create_categories_table', '1');

-- ----------------------------
-- Table structure for password_resets
-- ----------------------------
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of password_resets
-- ----------------------------

-- ----------------------------
-- Table structure for posts
-- ----------------------------
DROP TABLE IF EXISTS `posts`;
CREATE TABLE `posts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `is_published` tinyint(1) DEFAULT NULL,
  `category_id` int(10) unsigned DEFAULT NULL,
  `user_id` int(10) unsigned DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subtitle` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci,
  `notes` text COLLATE utf8mb4_unicode_ci,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fb_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gp_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tw_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keywords` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `banner` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `view_count` int(10) unsigned DEFAULT '0',
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of posts
-- ----------------------------

-- ----------------------------
-- Table structure for posts_tags
-- ----------------------------
DROP TABLE IF EXISTS `posts_tags`;
CREATE TABLE `posts_tags` (
  `post_id` int(10) unsigned NOT NULL,
  `tag_id` int(10) unsigned NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`post_id`,`tag_id`),
  KEY `posts_tags_post_id_index` (`post_id`),
  KEY `posts_tags_tag_id_index` (`tag_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of posts_tags
-- ----------------------------

-- ----------------------------
-- Table structure for tags
-- ----------------------------
DROP TABLE IF EXISTS `tags`;
CREATE TABLE `tags` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `lang` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of tags
-- ----------------------------

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
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('1', 'phillipmadsen', 'wecodelaravel@gmail.com', '$2y$10$PHnAu/qQNx4AkDYaFWdXKuj80oRrxJyGHaKb2i3okTTfDd1x.XOJ6', null, '2017-06-12 23:17:45', '2017-06-12 23:17:45');
INSERT INTO `users` VALUES ('2', 'andpar79', 'contact@orderpearlessence.com', '$2y$10$vupx2g1p3KvOX5f/51orZ.6bepR3oASpSGjVIV4rqyhpEfIgWj1IC', null, '2017-06-12 23:17:45', '2017-06-12 23:17:45');
INSERT INTO `users` VALUES ('3', 'rob', 'rohitpmodi@gmail.com', '$2y$10$9dREVlKKWljrHsxhnV3Y6OtcHgOKHeCmXTMGImk2nxhYXhps6qlx6', null, '2017-06-12 23:17:45', '2017-06-12 23:17:45');
INSERT INTO `users` VALUES ('4', 'Andrea Partridge', 'orderpearlessence@gmail.com', '$2y$10$l2mNGAYJ3M7jjp30lljOKulY98/xrVgBU8BE3fx.GRZho4Q3claQu', null, '2017-08-14 02:17:21', '2017-08-14 02:17:21');
SET FOREIGN_KEY_CHECKS=1;
