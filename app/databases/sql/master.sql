CREATE TABLE `master_character_original` (
    `character_original_id` INT(10) UNSIGNED NOT NULL DEFAULT '0',
    `serial_id` INT(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT '連番',
    `type` INT(11) NOT NULL DEFAULT '0' COMMENT '区分',
    `occupation` INT(11) NOT NULL DEFAULT '0' COMMENT '職種',
    `personarity` INT(11) NOT NULL DEFAULT '0' COMMENT '性格',
    `attribute` INT(11) NOT NULL DEFAULT '0' COMMENT '属性',
    `position` INT(11) NOT NULL DEFAULT '0' COMMENT 'ポジション',
    `rank_min` INT(11) NOT NULL,
    `rank_max` INT(11) NOT NULL,
    `name` VARCHAR(255) NOT NULL COMMENT 'キャラ名' COLLATE 'utf8mb4_unicode_ci',
    `caption` VARCHAR(1500) NOT NULL COLLATE 'utf8mb4_unicode_ci'
)
COMMENT='キャラクターオリジナルマスター'
COLLATE='utf8mb4_unicode_ci'
ENGINE=InnoDB
;


CREATE TABLE `master_character` (
    `character_id` INT(10) UNSIGNED NOT NULL,
    `character_original_id` INT(10) UNSIGNED NOT NULL,
    `rank` INT(11) UNSIGNED NOT NULL DEFAULT '0',
    `level` INT(11) UNSIGNED NOT NULL DEFAULT '0',
    `ap` INT(11) UNSIGNED NOT NULL DEFAULT '0',
    `mp` INT(11) UNSIGNED NOT NULL DEFAULT '0',
    `hp` INT(11) UNSIGNED NOT NULL DEFAULT '0',
    `power` INT(11) UNSIGNED NOT NULL DEFAULT '0',
    `stamina` INT(11) UNSIGNED NOT NULL DEFAULT '0',
    `speed` INT(11) UNSIGNED NOT NULL DEFAULT '0',
    `intellect` INT(11) UNSIGNED NOT NULL DEFAULT '0',
    `attack_min` INT(11) UNSIGNED NOT NULL DEFAULT '0',
    `attack_max` INT(11) UNSIGNED NOT NULL DEFAULT '0',
    `defence_min` INT(11) UNSIGNED NOT NULL DEFAULT '0',
    `defence_max` INT(11) UNSIGNED NOT NULL DEFAULT '0',
    `hit_value` INT(11) UNSIGNED NOT NULL DEFAULT '0',
    `hit_avoid_value` INT(11) UNSIGNED NOT NULL DEFAULT '0',
    `critical_hit_value` INT(11) UNSIGNED NOT NULL DEFAULT '0',
    `critical_hit_avoid_value` INT(11) UNSIGNED NOT NULL DEFAULT '0',
    `hp_reflect_damage_rate` INT(11) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'HP反射',
    `hp_sorption_value` INT(11) UNSIGNED NOT NULL DEFAULT '0',
    `debuff_resistance_value` INT(11) UNSIGNED NOT NULL DEFAULT '0' COMMENT '状態異常耐性',
    `hp_auto_recovery_min` INT(11) UNSIGNED NOT NULL DEFAULT '0',
    `hp_auto_recovery_max` INT(11) UNSIGNED NOT NULL DEFAULT '0',
    `mp_auto_recovery_min` INT(11) UNSIGNED NOT NULL DEFAULT '0',
    `mp_auto_recovery_max` INT(11) UNSIGNED NOT NULL DEFAULT '0',
    `ap_auto_recovery_min` INT(11) UNSIGNED NOT NULL DEFAULT '0',
    `ap_auto_recovery_max` INT(11) UNSIGNED NOT NULL DEFAULT '0'
)
COMMENT='キャラマスター'
COLLATE='utf8mb4_unicode_ci'
ENGINE=InnoDB
;


CREATE TABLE `master_tutorial_character` (
    `id` INT(10) UNSIGNED NULL DEFAULT NULL,
    `character_type` INT(10) UNSIGNED NULL DEFAULT NULL,
    `character_id` INT(10) UNSIGNED NULL DEFAULT NULL,
    `weight` INT(10) UNSIGNED NULL DEFAULT NULL COMMENT '重み',
    `created` TIMESTAMP NULL DEFAULT NULL,
    `modified` TIMESTAMP NULL DEFAULT NULL
)
COMMENT='チュートリアルで落ちるキャラ一覧'
COLLATE='utf8_general_ci'
ENGINE=InnoDB
;


CREATE TABLE `master_map` (
    `map_id` INT(10) UNSIGNED NULL DEFAULT NULL,
    `name` VARCHAR(50) NULL DEFAULT NULL,
    `caption` TEXT NULL
)
COMMENT='マップ一覧'
COLLATE='utf8_general_ci'
ENGINE=InnoDB
;


CREATE TABLE `master_map_area` (
    `area_id` INT(10) UNSIGNED NULL DEFAULT NULL,
    `map_id` INT(10) UNSIGNED NULL DEFAULT NULL,
    `serial_id` INT(10) UNSIGNED NULL DEFAULT NULL,
    `name` VARCHAR(50) NULL DEFAULT NULL,
    `caption` TEXT NULL
)
COMMENT='エリア一覧'
COLLATE='utf8_general_ci'
ENGINE=InnoDB
;
