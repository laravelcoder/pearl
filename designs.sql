/*
Navicat MySQL Data Transfer

Source Server         : HOMESTEAD
Source Server Version : 50717
Source Host           : localhost:33060
Source Database       : pearl

Target Server Type    : MYSQL
Target Server Version : 50717
File Encoding         : 65001

Date: 2017-08-13 17:18:38
*/

SET FOREIGN_KEY_CHECKS=0;

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
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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
INSERT INTO `designs` VALUES ('1', null, '1', 'Forever Love', 'forever-love', 'a:1:{i:0;s:16:\"SPDOUBHEART1.jpg\";}', 'https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=6UCU5V4HZZDGQ', 'The Forever Heart pendant is silver plated.  This setting includes the pendant, a sterling silver necklace and 1 oyster opening.', null, '35.00', 'Available', '2017-08-05 09:39:21', '2017-08-06 23:00:04', null);
INSERT INTO `designs` VALUES ('2', null, '1', 'Sea Star', 'sea-star', 'a:1:{i:0;s:18:\"SPDOUBSTAR1-lg.png\";}', 'https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=6UCU5V4HZZDGQ', 'The Sea Star pendant is silver plated.  The setting includes the pendant, a sterling silver necklace and 1 oyster opening.', null, '35.00', 'Available', '2017-08-05 09:50:37', '2017-08-06 23:06:23', null);
INSERT INTO `designs` VALUES ('3', null, '1', 'Never Forget', 'never-forget', 'a:1:{i:0;s:17:\"SPELEPHANT-lg.png\";}', 'https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=6UCU5V4HZZDGQ', 'The Never Forget #33 pendant is silver plated.  This setting includes the pendant, a sterling silver chain and 1 oyster opening.', null, '35.00', 'Available', '2017-08-05 10:09:29', '2017-08-06 23:02:02', null);
INSERT INTO `designs` VALUES ('4', null, '1', 'Celtic Swirl', 'celtic-swirl', 'a:1:{i:0;s:16:\"SPFLOWER1-lg.jpg\";}', 'https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=6UCU5V4HZZDGQ', 'The Celtic Swirl pendant is silver plated.  This setting includes the pendant, a sterling silver necklace and 1 oyster opening.', null, '35.00', 'Available', '2017-08-05 10:10:22', '2017-08-06 23:02:53', null);
INSERT INTO `designs` VALUES ('5', null, '1', 'Monkey Love', 'monkey-love', 'a:2:{i:0;s:16:\"1-MONKEY1-lg.png\";i:1;s:13:\"SPMONKEY1.JPG\";}', 'https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=6UCU5V4HZZDGQ', 'The Monkey Love is a silver plated pendant.  This setting includes the pendant, a sterling silver necklace and 1 oyster opening.', null, '35.00', 'Available', '2017-08-05 10:11:07', '2017-08-13 23:14:49', null);
INSERT INTO `designs` VALUES ('6', null, '1', 'The Messenger', 'the-messenger', 'a:1:{i:0;s:13:\"SPOWL1-lg.png\";}', 'https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=6UCU5V4HZZDGQ', 'The Messenger is a silver plated pendant.  This setting includes the pendant, a sterling silver chain and 1 oyster opening.', null, '35.00', 'Available', '2017-08-05 10:11:49', '2017-08-06 23:04:41', null);
INSERT INTO `designs` VALUES ('7', null, '1', 'Paw Print', 'paw-print', 'a:1:{i:0;s:12:\"SSPAW-lg.png\";}', 'https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=6UCU5V4HZZDGQ', 'The Paw Print #30 is a silver plated pendant.  This setting includes the pendant, a sterling silver necklace and 1 oyster opening.', null, '35.00', 'Available', '2017-08-05 10:12:30', '2017-08-06 23:05:37', null);
INSERT INTO `designs` VALUES ('8', null, '1', 'Shooting Star', 'shooting-star', 'a:1:{i:0;s:14:\"SPSTAR1-lg.png\";}', 'https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=6UCU5V4HZZDGQ', 'The Shooting Star is a silver plated pendant.  This setting includes the pendant, a sterling silver necklace and 1 oyster opening.', null, '35.00', 'Available', '2017-08-05 10:17:29', '2017-08-06 23:07:17', null);
INSERT INTO `designs` VALUES ('9', null, '1', 'Best Mom', 'best-mom', 'a:1:{i:0;s:16:\"SPBESTMOM-lg.jpg\";}', 'https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=6UCU5V4HZZDGQ', 'The Best Mom is a silver plated pendant.  This setting includes the pendant, a sterling silver necklace and 1 oyster opening.', null, '35.00', 'Available', '2017-08-05 22:27:17', '2017-08-06 23:08:01', null);
INSERT INTO `designs` VALUES ('10', null, '1', 'Life\'s Anchor', 'life-s-anchor', 'a:1:{i:0;s:15:\"SPANCHOR-lg.jpg\";}', 'https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=6UCU5V4HZZDGQ', 'The Life\'s Anchor is a silver plated pendant.  This setting includes the pendant, a sterling silver necklace and 1 oyster opening.', null, '35.00', 'Available', '2017-08-05 22:28:21', '2017-08-06 23:08:46', null);
INSERT INTO `designs` VALUES ('11', null, '1', 'Butterfly Kisses', 'butterfly-kisses', 'a:1:{i:0;s:19:\"SPBUTTERFLY2-lg.jpg\";}', 'https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=6UCU5V4HZZDGQ', 'The Butterfly Kisses is a silver plated pendant.  This setting includes the pendant, a sterling silver necklace and 1 oyster opening.', null, '35.00', 'Available', '2017-08-05 22:29:29', '2017-08-06 23:09:38', null);
INSERT INTO `designs` VALUES ('12', '42', '1', 'MIdnight Ride', 'midnight-ride', 'a:4:{i:0;s:14:\"1-carriage.jpg\";i:1;s:12:\"carriage.jpg\";i:2;s:14:\"carriage-2.jpg\";i:3;s:28:\"Pearl-Cage-Carriage-Open.jpg\";}', 'https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=6UCU5V4HZZDGQ', 'The Midnight Ride is a silver plated pendant.  This setting includes the pendant, a sterling silver necklace and 1 oyster opening.', null, '35.00', 'Available', '2017-08-05 22:30:41', '2017-08-12 01:55:03', null);
INSERT INTO `designs` VALUES ('13', null, '1', 'The Sunflower', 'the-sunflower', 'a:1:{i:0;s:19:\"SPSUNFLOWER1-lg.png\";}', 'https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=6UCU5V4HZZDGQ', 'The Sunflower is a silver plated pendant.  This setting includes the pendant, a sterling silver necklace and 1 oyster opening.', null, '35.00', 'Available', '2017-08-05 22:37:06', '2017-08-06 23:11:20', null);
INSERT INTO `designs` VALUES ('14', null, '1', 'Dolphin\'s Cove', 'dolphin-s-cove', 'a:1:{i:0;s:17:\"SPDOLPHIN1-lg.jpg\";}', 'https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=6UCU5V4HZZDGQ', 'The Dolphin\'s Cove is a silver plated pendant.  This setting includes the pendant, a sterling silver necklace and 1 oyster opening.', null, '35.00', 'Available', '2017-08-05 22:37:33', '2017-08-06 23:12:11', null);
INSERT INTO `designs` VALUES ('15', null, '1', 'Dole Whip', 'dole-whip', 'a:2:{i:0;s:13:\"pinnapple.jpg\";i:1;s:18:\"pineapplepearl.jpg\";}', 'https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=6UCU5V4HZZDGQ', 'The Dole Whip is a sterling silver pendant.  This setting includes the pendant, a sterling silver necklace and 1 oyster opening.', null, '45.00', 'Available', '2017-08-06 23:13:27', '2017-08-12 06:05:06', null);
INSERT INTO `designs` VALUES ('16', null, '1', 'Rain Drop', 'rain-dro', 'a:1:{i:0;s:19:\"tear drop pearl.jpg\";}', 'https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=6UCU5V4HZZDGQ', 'The Rain Drop is a sterling silver pendant.  This setting includes the pendant, a sterling silver necklace and 1 oyster opening.', null, '45.00', 'Available', '2017-08-06 23:14:39', '2017-08-12 03:05:03', null);
INSERT INTO `designs` VALUES ('17', null, '1', 'The Lantern', 'the-lantern', 'a:1:{i:0;s:8:\"tube.jpg\";}', 'https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=6UCU5V4HZZDGQ', 'The Lantern is a sterling silver pendant.  This setting includes the pendant, a sterling silver necklace and 1 oyster opening.', null, '45.00', 'Available', '2017-08-06 23:15:32', '2017-08-12 04:49:20', null);
INSERT INTO `designs` VALUES ('18', null, '1', 'Secret Garden', 'secret-garden', 'a:1:{i:0;s:10:\"flower.jpg\";}', 'https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=6UCU5V4HZZDGQ', 'The Secret Garden is a sterling silver pendant.  This setting includes the pendant, a sterling silver necklace and 1 oyster opening.', null, '45.00', 'Available', '2017-08-06 23:16:22', '2017-08-12 03:05:54', null);
INSERT INTO `designs` VALUES ('19', null, '1', 'The Lotus', 'the-lotus', 'a:1:{i:0;s:11:\"SSLOTUS.JPG\";}', 'https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=6UCU5V4HZZDGQ', 'The Lotus is a sterling silver pendant.  This setting includes the pendant, a sterling silver necklace and 1 oyster opening.', null, '45.00', 'Available', '2017-08-06 23:26:11', '2017-08-12 03:09:06', null);
INSERT INTO `designs` VALUES ('20', null, '1', 'Queen of Hearts', 'queen-of-hearts', 'a:1:{i:0;s:16:\"double-heart.jpg\";}', 'https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=6UCU5V4HZZDGQ', 'The Queen of Hearts is a sterling silver pendant.  This setting includes the pendant, a sterling silver necklace and 1 oyster opening.', null, '45.00', 'Available', '2017-08-06 23:27:15', '2017-08-12 03:52:38', null);
INSERT INTO `designs` VALUES ('21', '07', '1', 'Never Forget', 'never-forget', 'a:1:{i:0;s:12:\"elephant.jpg\";}', 'https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=6UCU5V4HZZDGQ', 'The Never Forget #07 is a sterling silver pendant.  This setting includes the pendant, a sterling silver necklace and 1 oyster opening.', null, '45.00', 'Available', '2017-08-06 23:28:22', '2017-08-12 02:57:22', null);
INSERT INTO `designs` VALUES ('22', null, '1', 'Infinity Wings', 'infinity-wings', 'a:1:{i:0;s:11:\"sswings.png\";}', 'https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=6UCU5V4HZZDGQ', 'The Infinity Wings is a sterling silver pendant.  This setting includes the pendant, a sterling silver necklace and 1 oyster opening.', null, '45.00', 'Available', '2017-08-06 23:33:41', '2017-08-12 03:12:52', null);
INSERT INTO `designs` VALUES ('23', null, '1', 'Olympic Love', 'olympic-love', 'a:1:{i:0;s:16:\"circle-heart.jpg\";}', 'https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=6UCU5V4HZZDGQ', 'The Olympic Love is a sterling silver pendant.  This setting includes the pendant, a sterling silver necklace and 1 oyster opening.', null, '45.00', 'Available', '2017-08-06 23:34:30', '2017-08-12 03:54:07', null);
INSERT INTO `designs` VALUES ('24', null, '1', 'Honu', 'honu', 'a:3:{i:0;s:10:\"turtle.jpg\";i:1;s:12:\"1-turtle.jpg\";i:2;s:10:\"turtle.jpg\";}', 'https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=6UCU5V4HZZDGQ', 'The Honu is a sterling silver pendant.  This setting includes the pendant, a sterling silver necklace and 1 oyster opening.', null, '45.00', 'Available', '2017-08-06 23:36:37', '2017-08-12 04:00:55', null);
INSERT INTO `designs` VALUES ('25', null, '1', 'Luck of the Irish', 'luck-of-the-irish', 'a:1:{i:0;s:12:\"SSCLOVER.JPG\";}', 'https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=6UCU5V4HZZDGQ', 'The Luck of the Irish is a sterling silver pendant.  This setting includes the pendant, a sterling silver necklace and 1 oyster opening.', null, '45.00', 'Available', '2017-08-06 23:37:30', '2017-08-12 03:10:02', null);
INSERT INTO `designs` VALUES ('26', null, '1', 'French Twist', 'french-twist', 'a:3:{i:0;s:11:\"1-twist.jpg\";i:1;s:9:\"twist.jpg\";i:2;s:9:\"twist.jpg\";}', 'https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=6UCU5V4HZZDGQ', 'The French Twist is a sterling silver pendant.  This setting includes the pendant, a sterling silver necklace and 1 oyster opening.', null, '45.00', 'Available', '2017-08-06 23:51:35', '2017-08-12 02:06:01', null);
INSERT INTO `designs` VALUES ('27', null, '1', 'Minnie Mouse', 'minnie-mouse', 'a:2:{i:0;s:12:\"1-minnie.jpg\";i:1;s:10:\"minnie.jpg\";}', 'https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=6UCU5V4HZZDGQ', 'The Minnie Mouse is a sterling silver pendant.  This setting includes the pendant, a sterling silver necklace and 1 oyster opening.', null, '45.00', 'Available', '2017-08-06 23:53:45', '2017-08-12 03:03:28', null);
INSERT INTO `designs` VALUES ('28', null, '1', 'Midnight Ride', 'midnight-ride', 'a:1:{i:0;s:21:\"princess carriage.jpg\";}', 'https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=6UCU5V4HZZDGQ', 'The Midnight Ride #12 is a sterling silver pendant.  This setting includes the pendant, a sterling silver necklace and 1 oyster opening.', null, '45.00', 'Available', '2017-08-06 23:54:58', '2017-08-06 23:54:58', null);
INSERT INTO `designs` VALUES ('29', null, '1', 'All My Love', 'all-my-love', 'a:1:{i:0;s:12:\"SP4HEART.JPG\";}', 'https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=6UCU5V4HZZDGQ', 'The All My Love is a silver plated pendant.  This setting includes the pendant, a sterling silver necklace and 1 oyster opening.', null, '35.00', 'Available', '2017-08-06 23:59:48', '2017-08-07 00:05:32', null);
SET FOREIGN_KEY_CHECKS=1;
