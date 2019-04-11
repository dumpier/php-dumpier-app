-- --------------------------------------------------------
-- ホスト:                          presto.homestead.test
-- サーバーのバージョン:                   5.7.23-0ubuntu0.18.04.1 - (Ubuntu)
-- サーバー OS:                      Linux
-- HeidiSQL バージョン:               10.1.0.5464
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- presto_player_manage のデータベース構造をダンプしています
DROP DATABASE IF EXISTS `presto_player_manage`;
CREATE DATABASE IF NOT EXISTS `presto_player_manage` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `presto_player_manage`;

--  テーブル presto_player_manage.player_manage の構造をダンプしています
DROP TABLE IF EXISTS `player_manage`;
CREATE TABLE IF NOT EXISTS `player_manage` (
  `player_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `type` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `public_id` varchar(12) CHARACTER SET latin1 NOT NULL DEFAULT '0',
  `uuid` varchar(64) CHARACTER SET latin1 NOT NULL,
  `device_id` varchar(64) CHARACTER SET latin1 NOT NULL,
  `birthday` int(11) unsigned NOT NULL DEFAULT '0',
  `logincount_total` int(11) unsigned NOT NULL DEFAULT '0',
  `logincount_today` int(11) unsigned NOT NULL DEFAULT '0',
  `logintime_last` timestamp NULL DEFAULT NULL,
  `logintime_pre` timestamp NULL DEFAULT NULL,
  `created` timestamp NULL DEFAULT NULL,
  `modified` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`player_id`)
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=utf8;

-- テーブル presto_player_manage.player_manage: ~7 rows (約) のデータをダンプしています
DELETE FROM `player_manage`;
/*!40000 ALTER TABLE `player_manage` DISABLE KEYS */;
INSERT INTO `player_manage` (`player_id`, `type`, `public_id`, `uuid`, `device_id`, `birthday`, `logincount_total`, `logincount_today`, `logintime_last`, `logintime_pre`, `created`, `modified`) VALUES
	(38, 11, '3xblUyd1', 'aEhYlAw8uStPxGcyPc2ZrvsF0TA2YjBM', '5sl3pfNn4cAfCSdx5M6k3xVm8DKydBIC', 0, 0, 0, NULL, NULL, NULL, NULL),
	(39, 11, 'nq5lleWW', 'xK4q1oywPgWWQ5zlREWV5Lm8AL417bn9', 'Nl1kUDNMgE3VweuhSiQkf51h1LdR2MFO', 0, 0, 0, NULL, NULL, NULL, NULL),
	(40, 11, 'mhfFjnxW', 'eiIPi9EYTHm5gAFtabPmov8caU2ncG0x', 'LzlinnSJXR1DKgewmOCacsXh1HjlVApP', 0, 0, 0, NULL, NULL, NULL, NULL),
	(41, 11, 'KoRTmmrd', '26Yfbup2a6iEEh4v3Q3ugDNYWONINuvx', 'M9DE87iUDDGZCqTmCYm4zzpQIEwOKWZS', 0, 0, 0, NULL, NULL, NULL, NULL),
	(42, 11, 'S2K7pkp8', 'CkA3XMzAmMZsQGwEZIuLfMUWO3ygNCoz', 'GH8T1VfIm2Hggel2aEjsVId5UQdplKFC', 0, 0, 0, NULL, NULL, NULL, NULL),
	(43, 11, '0HiU0xEA', 'OGHCS2Bhmq3zw4Al3y3oKgjFsDz8u2Pn', 'KRDS5iC9dkNWyHu1eLdbdLwODZtiOG1P', 0, 0, 0, NULL, NULL, NULL, NULL),
	(44, 11, 'uCu1apFw', '0q76nXzYELoYkeRSjhgLgY1oLKbRaYma', 'Gj91ALFqqyzQaRedcZZFZfgfg24af6b1', 0, 0, 0, NULL, NULL, NULL, NULL);
/*!40000 ALTER TABLE `player_manage` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
