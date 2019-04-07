CREATE TABLE `player_deck` (
    `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
    `player_id` INT(10) UNSIGNED NOT NULL DEFAULT '0',
    `deck_id` TINYINT(3) UNSIGNED NOT NULL DEFAULT '0',
    `slot_count` TINYINT(3) UNSIGNED NOT NULL DEFAULT '0' COMMENT '解放されたSLOT数',
    `player_character_id_1` INT(10) UNSIGNED NOT NULL DEFAULT '0',
    `player_character_id_2` INT(10) UNSIGNED NOT NULL DEFAULT '0',
    `player_character_id_3` INT(10) UNSIGNED NOT NULL DEFAULT '0',
    `player_character_id_4` INT(10) UNSIGNED NOT NULL DEFAULT '0',
    `player_character_id_5` INT(10) UNSIGNED NOT NULL DEFAULT '0',
    `player_character_id_6` INT(10) UNSIGNED NOT NULL DEFAULT '0',
    `player_character_id_7` INT(10) UNSIGNED NOT NULL DEFAULT '0',
    `player_character_id_8` INT(10) UNSIGNED NOT NULL DEFAULT '0',
    `player_character_id_9` INT(10) UNSIGNED NOT NULL DEFAULT '0',
    `player_character_id_10` INT(10) UNSIGNED NOT NULL DEFAULT '0',
    `created` TIMESTAMP NULL DEFAULT NULL,
    `modified` TIMESTAMP NULL DEFAULT NULL,
    PRIMARY KEY (`id`)
)
COMMENT='プレイヤーデッキ'
COLLATE='latin1_swedish_ci'
ENGINE=InnoDB
;


CREATE TABLE `player_character` (
    `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
    `player_id` INT(10) UNSIGNED NOT NULL DEFAULT '0',
    `character_id` INT(10) UNSIGNED NOT NULL DEFAULT '0',
    `level` INT(10) UNSIGNED NOT NULL DEFAULT '0',
    `is_protected` TINYINT(3) UNSIGNED NOT NULL DEFAULT '0' COMMENT '保護フラグ',
    `created` TIMESTAMP NULL DEFAULT NULL,
    `modified` TIMESTAMP NULL DEFAULT NULL,
    PRIMARY KEY (`id`)
)
COMMENT='プレイヤーキャラクター'
COLLATE='latin1_swedish_ci'
ENGINE=InnoDB
;
