CREATE TABLE `player_manage` (
    `player_id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
    `type` TINYINT(3) UNSIGNED NOT NULL DEFAULT '0',
    `public_id` VARCHAR(12) NOT NULL DEFAULT '0',
    `uuid` VARCHAR(64) NOT NULL,
    `device_id` VARCHAR(64) NOT NULL,
    `birthday` INT(11) UNSIGNED NOT NULL DEFAULT '0',
    `logincount_total` INT(11) UNSIGNED NOT NULL DEFAULT '0',
    `logincount_today` INT(11) UNSIGNED NOT NULL DEFAULT '0',
    `logintime_last` TIMESTAMP NULL DEFAULT NULL,
    `logintime_pre` TIMESTAMP NULL DEFAULT NULL,
    `created` TIMESTAMP NULL DEFAULT NULL,
    `modified` TIMESTAMP NULL DEFAULT NULL,
    PRIMARY KEY (`player_id`)
)
COLLATE='latin1_swedish_ci'
ENGINE=InnoDB
;
