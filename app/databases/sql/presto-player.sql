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


-- presto_player のデータベース構造をダンプしています
DROP DATABASE IF EXISTS `presto_player`;
CREATE DATABASE IF NOT EXISTS `presto_player` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `presto_player`;

--  テーブル presto_player.player_character の構造をダンプしています
DROP TABLE IF EXISTS `player_character`;
CREATE TABLE IF NOT EXISTS `player_character` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `player_id` int(10) unsigned NOT NULL DEFAULT '0',
  `character_id` int(10) unsigned NOT NULL DEFAULT '0',
  `level` int(10) unsigned NOT NULL DEFAULT '0',
  `is_protected` tinyint(3) unsigned NOT NULL DEFAULT '0' COMMENT '保護フラグ',
  `created` timestamp NULL DEFAULT NULL,
  `modified` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=latin1 COMMENT='プレイヤーキャラクター';

-- テーブル presto_player.player_character: ~41 rows (約) のデータをダンプしています
DELETE FROM `player_character`;
/*!40000 ALTER TABLE `player_character` DISABLE KEYS */;
INSERT INTO `player_character` (`id`, `player_id`, `character_id`, `level`, `is_protected`, `created`, `modified`) VALUES
	(1, 106, 100101001, 0, 0, NULL, NULL),
	(2, 107, 100101001, 0, 0, NULL, NULL),
	(3, 108, 100101001, 0, 0, NULL, NULL),
	(4, 109, 100101001, 0, 0, NULL, NULL),
	(5, 110, 100101001, 0, 0, NULL, NULL),
	(6, 1, 100101001, 0, 0, NULL, NULL),
	(7, 2, 100101001, 0, 0, NULL, NULL),
	(8, 3, 100101001, 0, 0, NULL, NULL),
	(9, 4, 100101001, 0, 0, NULL, NULL),
	(10, 5, 100101001, 0, 0, NULL, NULL),
	(11, 6, 100101001, 0, 0, NULL, NULL),
	(12, 7, 100101001, 0, 0, NULL, NULL),
	(13, 8, 100101001, 0, 0, NULL, NULL),
	(14, 9, 100101001, 0, 0, NULL, NULL),
	(15, 10, 100101001, 0, 0, NULL, NULL),
	(16, 11, 100101001, 0, 0, NULL, NULL),
	(17, 12, 100101001, 0, 0, NULL, NULL),
	(18, 13, 100101001, 0, 0, NULL, NULL),
	(19, 14, 100101001, 0, 0, NULL, NULL),
	(20, 15, 100101001, 0, 0, NULL, NULL),
	(21, 16, 100101001, 0, 0, NULL, NULL),
	(22, 22, 100301001, 0, 0, NULL, NULL),
	(23, 23, 100301001, 0, 0, NULL, NULL),
	(24, 24, 100201001, 0, 0, NULL, NULL),
	(25, 25, 100401001, 0, 0, NULL, NULL),
	(26, 26, 100801001, 0, 0, NULL, NULL),
	(27, 27, 100301001, 0, 0, NULL, NULL),
	(28, 28, 100901001, 0, 0, NULL, NULL),
	(29, 29, 100701001, 0, 0, NULL, NULL),
	(30, 33, 100601001, 0, 0, NULL, NULL),
	(31, 34, 101001001, 0, 0, NULL, NULL),
	(32, 35, 100601001, 0, 0, NULL, NULL),
	(33, 36, 100601001, 0, 0, NULL, NULL),
	(34, 37, 100301001, 0, 0, NULL, NULL),
	(35, 38, 100401001, 0, 0, NULL, NULL),
	(36, 39, 101001001, 0, 0, NULL, NULL),
	(37, 40, 100201001, 0, 0, NULL, NULL),
	(38, 41, 100501001, 0, 0, NULL, NULL),
	(39, 42, 100101001, 0, 0, NULL, NULL),
	(40, 43, 100901001, 0, 0, NULL, NULL),
	(41, 44, 100601001, 0, 0, NULL, NULL);
/*!40000 ALTER TABLE `player_character` ENABLE KEYS */;

--  テーブル presto_player.player_deck の構造をダンプしています
DROP TABLE IF EXISTS `player_deck`;
CREATE TABLE IF NOT EXISTS `player_deck` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `player_id` int(10) unsigned NOT NULL DEFAULT '0',
  `deck_id` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `slot_count` tinyint(3) unsigned NOT NULL DEFAULT '0' COMMENT '解放されたSLOT数',
  `player_character_id_1` int(10) unsigned NOT NULL DEFAULT '0',
  `player_character_id_2` int(10) unsigned NOT NULL DEFAULT '0',
  `player_character_id_3` int(10) unsigned NOT NULL DEFAULT '0',
  `player_character_id_4` int(10) unsigned NOT NULL DEFAULT '0',
  `player_character_id_5` int(10) unsigned NOT NULL DEFAULT '0',
  `player_character_id_6` int(10) unsigned NOT NULL DEFAULT '0',
  `player_character_id_7` int(10) unsigned NOT NULL DEFAULT '0',
  `player_character_id_8` int(10) unsigned NOT NULL DEFAULT '0',
  `player_character_id_9` int(10) unsigned NOT NULL DEFAULT '0',
  `player_character_id_10` int(10) unsigned NOT NULL DEFAULT '0',
  `created` timestamp NULL DEFAULT NULL,
  `modified` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=latin1 COMMENT='プレイヤーデッキ';

-- テーブル presto_player.player_deck: ~41 rows (約) のデータをダンプしています
DELETE FROM `player_deck`;
/*!40000 ALTER TABLE `player_deck` DISABLE KEYS */;
INSERT INTO `player_deck` (`id`, `player_id`, `deck_id`, `slot_count`, `player_character_id_1`, `player_character_id_2`, `player_character_id_3`, `player_character_id_4`, `player_character_id_5`, `player_character_id_6`, `player_character_id_7`, `player_character_id_8`, `player_character_id_9`, `player_character_id_10`, `created`, `modified`) VALUES
	(1, 106, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL),
	(2, 107, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL),
	(3, 108, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL),
	(4, 109, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL),
	(5, 110, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL),
	(6, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL),
	(7, 2, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL),
	(8, 3, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL),
	(9, 4, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL),
	(10, 5, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL),
	(11, 6, 1, 0, 11, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL),
	(12, 7, 1, 0, 12, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL),
	(13, 8, 1, 0, 13, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL),
	(14, 9, 1, 0, 14, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL),
	(15, 10, 1, 0, 15, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL),
	(16, 11, 1, 0, 16, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL),
	(17, 12, 1, 0, 17, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL),
	(18, 13, 1, 0, 18, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL),
	(19, 14, 1, 0, 19, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL),
	(20, 15, 1, 0, 20, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL),
	(21, 16, 1, 0, 21, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL),
	(22, 22, 1, 0, 22, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL),
	(23, 23, 1, 0, 23, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL),
	(24, 24, 1, 0, 24, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL),
	(25, 25, 1, 0, 25, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL),
	(26, 26, 1, 0, 26, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL),
	(27, 27, 1, 0, 27, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL),
	(28, 28, 1, 0, 28, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL),
	(29, 29, 1, 0, 29, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL),
	(30, 33, 1, 1, 30, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL),
	(31, 34, 1, 1, 31, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL),
	(32, 35, 1, 1, 32, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL),
	(33, 36, 1, 1, 33, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL),
	(34, 37, 1, 1, 34, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL),
	(35, 38, 1, 1, 35, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL),
	(36, 39, 1, 1, 36, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL),
	(37, 40, 1, 1, 37, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL),
	(38, 41, 1, 1, 38, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL),
	(39, 42, 1, 1, 39, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL),
	(40, 43, 1, 1, 40, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL),
	(41, 44, 1, 1, 41, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL);
/*!40000 ALTER TABLE `player_deck` ENABLE KEYS */;

--  テーブル presto_player.player_quest の構造をダンプしています
DROP TABLE IF EXISTS `player_quest`;
CREATE TABLE IF NOT EXISTS `player_quest` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `player_id` int(10) unsigned NOT NULL DEFAULT '0',
  `map_id` int(10) unsigned NOT NULL DEFAULT '0',
  `area_id` int(10) unsigned NOT NULL DEFAULT '0',
  `stage_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT 'プレイ中のステージID',
  `play_count` int(10) unsigned NOT NULL DEFAULT '0' COMMENT 'プレイ回数',
  `complete_count` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '勝利回数',
  `created` timestamp NULL DEFAULT NULL,
  `modified` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='プレイヤークエスト';

-- テーブル presto_player.player_quest: ~0 rows (約) のデータをダンプしています
DELETE FROM `player_quest`;
/*!40000 ALTER TABLE `player_quest` DISABLE KEYS */;
/*!40000 ALTER TABLE `player_quest` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
