# ************************************************************
# Sequel Pro SQL dump
# Version 4500
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.6.27)
# Database: yii2advanced
# Generation Time: 2016-04-14 09:20:32 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table article
# ------------------------------------------------------------

CREATE TABLE `article` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(256) DEFAULT '',
  `area` int(11) DEFAULT NULL,
  `publish_time` datetime DEFAULT NULL,
  `question` varchar(512) DEFAULT NULL,
  `has_question` int(11) DEFAULT NULL,
  `answers` varchar(512) DEFAULT '',
  `created_at` datetime DEFAULT NULL,
  `created_by` varchar(128) DEFAULT 'SYS',
  `updated_at` datetime DEFAULT NULL,
  `updated_by` varchar(128) DEFAULT 'SYS',
  `answer` varchar(128) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `article` WRITE;
/*!40000 ALTER TABLE `article` DISABLE KEYS */;

INSERT INTO `article` (`id`, `title`, `area`, `publish_time`, `question`, `has_question`, `answers`, `created_at`, `created_by`, `updated_at`, `updated_by`, `answer`)
VALUES
	(2,'上海市限制临牌',2,'2016-04-11 00:00:00','你认为这是个好主意吗？',1,'是,否','2016-04-11 08:12:00','SYS','2016-04-12 07:12:15','SYS','1'),
	(5,'证监会放大招',1,'2016-04-12 00:00:00','你认为这是个好主意吗？',1,'是,否','2016-04-11 08:12:00','SYS','2016-04-11 08:31:21','SYS','1'),
	(6,'3月CPI同比增长2.3%',3,'2016-04-13 00:00:00','你认为这是个好主意吗？',1,'是,否','2016-04-11 08:12:00','SYS','2016-04-11 08:31:21','SYS','1'),
	(7,'打击海淘',4,'2016-04-03 00:00:00','你认为这是个好主意吗？',1,'是,否','2016-04-11 08:12:00','SYS','2016-04-11 08:31:21','SYS','1'),
	(8,'菜价疯狂',2,'2016-04-05 00:00:00','你认为这是个好主意吗？',0,'','2016-04-11 08:12:00','SYS','2016-04-11 08:31:21','SYS',''),
	(9,'/>test',1,'2016-04-23 00:00:00',NULL,0,'','2016-04-14 09:07:19','SYS','2016-04-14 09:07:19','SYS',NULL);

/*!40000 ALTER TABLE `article` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table article_tags
# ------------------------------------------------------------

CREATE TABLE `article_tags` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `article_id` int(11) DEFAULT NULL,
  `tag_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `article_id_index` (`article_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `article_tags` WRITE;
/*!40000 ALTER TABLE `article_tags` DISABLE KEYS */;

INSERT INTO `article_tags` (`id`, `article_id`, `tag_id`)
VALUES
	(1,2,0),
	(2,2,1),
	(3,2,2),
	(4,2,3);

/*!40000 ALTER TABLE `article_tags` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table auth_assignment
# ------------------------------------------------------------

CREATE TABLE `auth_assignment` (
  `item_name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`item_name`,`user_id`),
  CONSTRAINT `auth_assignment_ibfk_1` FOREIGN KEY (`item_name`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `auth_assignment` WRITE;
/*!40000 ALTER TABLE `auth_assignment` DISABLE KEYS */;

INSERT INTO `auth_assignment` (`item_name`, `user_id`, `created_at`)
VALUES
	('超级管理员','1',1457335941);

/*!40000 ALTER TABLE `auth_assignment` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table auth_item
# ------------------------------------------------------------

CREATE TABLE `auth_item` (
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `type` int(11) NOT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `rule_name` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `data` text COLLATE utf8_unicode_ci,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`name`),
  KEY `rule_name` (`rule_name`),
  KEY `idx-auth_item-type` (`type`),
  CONSTRAINT `auth_item_ibfk_1` FOREIGN KEY (`rule_name`) REFERENCES `auth_rule` (`name`) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `auth_item` WRITE;
/*!40000 ALTER TABLE `auth_item` DISABLE KEYS */;

INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`)
VALUES
	('/*',2,NULL,NULL,NULL,1457335219,1457335219),
	('/article/*',2,NULL,NULL,NULL,1460361978,1460361978),
	('/article/create',2,NULL,NULL,NULL,1460362043,1460362043),
	('/article/delete',2,NULL,NULL,NULL,1460362043,1460362043),
	('/article/index',2,NULL,NULL,NULL,1460362043,1460362043),
	('/article/update',2,NULL,NULL,NULL,1460362043,1460362043),
	('/article/view',2,NULL,NULL,NULL,1460362043,1460362043),
	('/nav/*',2,NULL,NULL,NULL,1457350112,1457350112),
	('/nav/index',2,NULL,NULL,NULL,1457350112,1457350112),
	('/rbac/*',2,NULL,NULL,NULL,1457350112,1457350112),
	('/rbac/index',2,NULL,NULL,NULL,1457350112,1457350112),
	('/site/login',2,NULL,NULL,NULL,1457353907,1457353907),
	('/site/logout',2,NULL,NULL,NULL,1457353907,1457353907),
	('/widget/*',2,NULL,NULL,NULL,1457407876,1457407876),
	('/widget/bootstrap',2,NULL,NULL,NULL,1457407876,1457407876),
	('/widget/jui',2,NULL,NULL,NULL,1457407876,1457407876),
	('超级管理员',1,NULL,NULL,NULL,1457335192,1457335949);

/*!40000 ALTER TABLE `auth_item` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table auth_item_child
# ------------------------------------------------------------

CREATE TABLE `auth_item_child` (
  `parent` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `child` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`parent`,`child`),
  KEY `child` (`child`),
  CONSTRAINT `auth_item_child_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `auth_item_child_ibfk_2` FOREIGN KEY (`child`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `auth_item_child` WRITE;
/*!40000 ALTER TABLE `auth_item_child` DISABLE KEYS */;

INSERT INTO `auth_item_child` (`parent`, `child`)
VALUES
	('超级管理员','/*');

/*!40000 ALTER TABLE `auth_item_child` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table auth_rule
# ------------------------------------------------------------

CREATE TABLE `auth_rule` (
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `data` text COLLATE utf8_unicode_ci,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;



# Dump of table menu
# ------------------------------------------------------------

CREATE TABLE `menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(128) NOT NULL,
  `parent` int(11) DEFAULT NULL,
  `route` varchar(256) DEFAULT NULL,
  `order` int(11) DEFAULT NULL,
  `data` text,
  PRIMARY KEY (`id`),
  KEY `parent` (`parent`),
  CONSTRAINT `menu_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `menu` (`id`) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `menu` WRITE;
/*!40000 ALTER TABLE `menu` DISABLE KEYS */;

INSERT INTO `menu` (`id`, `name`, `parent`, `route`, `order`, `data`)
VALUES
	(1,'RBAC权限',NULL,'/rbac/index',10,NULL),
	(2,'Nav左导航栏',NULL,'/nav/index',20,NULL),
	(4,'登出',NULL,'/site/logout',10000,NULL),
	(5,'Widget',NULL,NULL,30,NULL),
	(6,'表单样例',5,'/article/index',10,NULL);

/*!40000 ALTER TABLE `menu` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table migration
# ------------------------------------------------------------

CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `migration` WRITE;
/*!40000 ALTER TABLE `migration` DISABLE KEYS */;

INSERT INTO `migration` (`version`, `apply_time`)
VALUES
	('m000000_000000_base',1456999540),
	('m130524_201442_init',1456999560),
	('m140506_102106_rbac_init',1457333354),
	('m140602_111327_create_menu_table',1457321531);

/*!40000 ALTER TABLE `migration` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table user
# ------------------------------------------------------------

CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `password_reset_token` (`password_reset_token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;

INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`)
VALUES
	(1,'admin','','$2y$13$AJS8y8JeTOCnyM.POUbwtu7ctr4KUNjcquWeFwfq7qhE9w.o0HVwK',NULL,'',10,0,0);

/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
