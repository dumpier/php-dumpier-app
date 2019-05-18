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
CREATE DATABASE IF NOT EXISTS `presto_player` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `presto_player`;

--  テーブル presto_player.player_character の構造をダンプしています
DROP TABLE IF EXISTS `player_character`;
CREATE TABLE IF NOT EXISTS `player_character` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `player_id` int(10) unsigned NOT NULL DEFAULT '0',
  `character_id` int(10) unsigned NOT NULL DEFAULT '0',
  `level` int(10) unsigned NOT NULL DEFAULT '1',
  `is_protected` tinyint(3) unsigned NOT NULL DEFAULT '0' COMMENT '保護フラグ',
  `created` timestamp NULL DEFAULT NULL,
  `modified` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=104 DEFAULT CHARSET=utf8 COMMENT='プレイヤーキャラクター';

-- エクスポートするデータが選択されていません
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
) ENGINE=InnoDB AUTO_INCREMENT=104 DEFAULT CHARSET=utf8 COMMENT='プレイヤーデッキ';

-- エクスポートするデータが選択されていません
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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COMMENT='プレイヤークエスト';

-- エクスポートするデータが選択されていません
--  テーブル presto_player.player_quest_battle の構造をダンプしています
DROP TABLE IF EXISTS `player_quest_battle`;
CREATE TABLE IF NOT EXISTS `player_quest_battle` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `player_id` int(10) unsigned NOT NULL,
  `timesecond` int(10) unsigned NOT NULL,
  `log` text CHARACTER SET latin1 NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='プレイヤーバトル';

-- エクスポートするデータが選択されていません

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
  `login_id` varchar(64) CHARACTER SET latin1 NOT NULL,
  `login_pw` varchar(64) CHARACTER SET latin1 NOT NULL,
  `birthday` int(11) unsigned NOT NULL DEFAULT '0',
  `logincount_total` int(11) unsigned NOT NULL DEFAULT '0',
  `logincount_today` int(11) unsigned NOT NULL DEFAULT '0',
  `logintime_last` timestamp NULL DEFAULT NULL,
  `logintime_pre` timestamp NULL DEFAULT NULL,
  `created` timestamp NULL DEFAULT NULL,
  `modified` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`player_id`)
) ENGINE=InnoDB AUTO_INCREMENT=111 DEFAULT CHARSET=utf8;

-- エクスポートするデータが選択されていません
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
