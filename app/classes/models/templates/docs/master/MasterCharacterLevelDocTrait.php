<?php
namespace App\Models\Templates\Docs\Master;

/**
 */
trait MasterCharacterLevelDocTrait
{
    /** 項目一覧 */
    protected $properties = [
        "id",
        "character_id",
        "character_original_id",
        "rank",
        "level",
        "ap",
        "mp",
        "hp",
        "power",
        "stamina",
        "speed",
        "intellect",
        "attack_min",
        "attack_max",
        "defence_min",
        "defence_max",
        "hit_value",
        "hit_avoid_value",
        "critical_hit_value",
        "critical_hit_avoid_value",
        "hp_reflect_damage_rate",
        "hp_sorption_value",
        "debuff_resistance_value",
        "hp_auto_recovery_min",
        "hp_auto_recovery_max",
        "mp_auto_recovery_min",
        "mp_auto_recovery_max",
        "ap_auto_recovery_min",
        "ap_auto_recovery_max",
    ];


    /** @var int  */
    public $id = 0;

    /** @var int  */
    public $character_id = 0;

    /** @var int  */
    public $character_original_id = 0;

    /** @var int  */
    public $rank = 0;

    /** @var int  */
    public $level = 0;

    /** @var int  */
    public $ap = 0;

    /** @var int  */
    public $mp = 0;

    /** @var int  */
    public $hp = 0;

    /** @var int  */
    public $power = 0;

    /** @var int  */
    public $stamina = 0;

    /** @var int  */
    public $speed = 0;

    /** @var int  */
    public $intellect = 0;

    /** @var int  */
    public $attack_min = 0;

    /** @var int  */
    public $attack_max = 0;

    /** @var int  */
    public $defence_min = 0;

    /** @var int  */
    public $defence_max = 0;

    /** @var int  */
    public $hit_value = 0;

    /** @var int  */
    public $hit_avoid_value = 0;

    /** @var int  */
    public $critical_hit_value = 0;

    /** @var int  */
    public $critical_hit_avoid_value = 0;

    /** @var int HP反射 */
    public $hp_reflect_damage_rate = 0;

    /** @var int  */
    public $hp_sorption_value = 0;

    /** @var int 状態異常耐性 */
    public $debuff_resistance_value = 0;

    /** @var int  */
    public $hp_auto_recovery_min = 0;

    /** @var int  */
    public $hp_auto_recovery_max = 0;

    /** @var int  */
    public $mp_auto_recovery_min = 0;

    /** @var int  */
    public $mp_auto_recovery_max = 0;

    /** @var int  */
    public $ap_auto_recovery_min = 0;

    /** @var int  */
    public $ap_auto_recovery_max = 0;

}
