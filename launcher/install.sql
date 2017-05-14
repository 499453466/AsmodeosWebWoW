
DROP DATABASE IF EXISTS `launcher`;
CREATE DATABASE IF NOT EXISTS `launcher`;
USE `launcher`;

DROP TABLE IF EXISTS `data`;
CREATE TABLE IF NOT EXISTS `data` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `news` text NOT NULL,
  `news_link` varchar(150) NOT NULL DEFAULT '0' COMMENT 'http....',
  `changelog` text NOT NULL,
  `changelog_link` varchar(150) NOT NULL DEFAULT '0' COMMENT 'http....',
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;


DELETE FROM `data`;

INSERT INTO `data` (`id`, `news`, `news_link`, `changelog`, `changelog_link`) VALUES
  (1, '  A new PvP season has started, and the top spots on the leaderboards are once more up for grabs. Meet your foes in the arena and battlegrounds and earn the glory of the gladiators!', '0', '   Draenor Dungeons now have a new difficulty level designed to challenge even the most hardened adventurers. This difficulty requires a premade group, and pits you against powerful bosses \r\nwho offer high-level gear when defeated once per week.\r\n   The final chapter of your mission to assist Archmage Khadgar is now available! Track down Gul?dan and experience the epic conclusion to this quest, which will reward you with a legendary ring! If you haven?t started your journey yet, look for Khadgar?s Servant in your Garrison to get started.', '0');


DROP TABLE IF EXISTS `security`;
CREATE TABLE IF NOT EXISTS `security` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` char(50) NOT NULL,
  `password` tinytext NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `user` (`user`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


DELETE FROM `security`;


DROP TABLE IF EXISTS `settings`;
CREATE TABLE IF NOT EXISTS `settings` (
  `register` varchar(150) NOT NULL DEFAULT '0' COMMENT 'link',
  `account` varchar(150) NOT NULL DEFAULT '0' COMMENT 'link',
  `forum` varchar(150) NOT NULL DEFAULT '0' COMMENT 'link',
  `patch_version_1` int(11) NOT NULL DEFAULT '0' COMMENT 'current version',
  `patch_link_1` varchar(150) NOT NULL DEFAULT '0' COMMENT 'link',
  `patch_name_1` varchar(50) NOT NULL DEFAULT '0' COMMENT 'e.g. patch-A.mpq',
  `patch_version_2` int(11) NOT NULL DEFAULT '0',
  `patch_link_2` varchar(150) NOT NULL DEFAULT '0',
  `patch_name_2` varchar(50) NOT NULL DEFAULT '0',
  `patch_version_3` int(11) NOT NULL DEFAULT '0',
  `patch_link_3` varchar(150) NOT NULL DEFAULT '0',
  `patch_name_3` varchar(50) NOT NULL DEFAULT '0',
  `patch_version_4` int(11) NOT NULL DEFAULT '0',
  `patch_link_4` varchar(150) NOT NULL DEFAULT '0',
  `patch_name_4` varchar(50) NOT NULL DEFAULT '0',
  `patch_version_5` int(11) NOT NULL DEFAULT '0',
  `patch_link_5` varchar(150) NOT NULL DEFAULT '0',
  `patch_name_5` varchar(50) NOT NULL DEFAULT '0',
  KEY `patch_version` (`patch_version_1`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


DELETE FROM `settings`;

INSERT INTO `settings` (`register`, `account`, `forum`, `patch_version_1`, `patch_link_1`, `patch_name_1`, `patch_version_2`, `patch_link_2`, `patch_name_2`, `patch_version_3`, `patch_link_3`, `patch_name_3`, `patch_version_4`, `patch_link_4`, `patch_name_4`, `patch_version_5`, `patch_link_5`, `patch_name_5`) VALUES
  ('http://google.ro', 'http://google.ro', 'http://google.ro', 0, '0', '0', 0, '0', '0', 0, '0', '0', 0, '0', '0', 0, '0', '0');

