<?php
namespace App\Models\Templates\Docs\Master;

/**
 */
trait MasterSkillEffectDocTrait
{
    /** 項目一覧 */
    protected $properties = [
        "id",
        "skill_id",
        "skill_original_id",
        "level",
        "serial_id",
        "timing",
        "target_type",
        "target_count",
        "action_count",
        "status_id",
        "status_value",
        "buff_id",
        "buff_turn",
        "buff_value",
        "special_effect_json",
    ];


    /** @var int  */
    public $id = 0;

    /** @var int  */
    public $skill_id = 0;

    /** @var int  */
    public $skill_original_id = 0;

    /** @var int  */
    public $level = 0;

    /** @var int  */
    public $serial_id = 0;

    /** @var int  */
    public $timing = 0;

    /** @var int  */
    public $target_type = 0;

    /** @var int  */
    public $target_count = 0;

    /** @var int  */
    public $action_count = 0;

    /** @var int  */
    public $status_id = 0;

    /** @var string  */
    public $status_value = "";

    /** @var int  */
    public $buff_id = 0;

    /** @var int  */
    public $buff_turn = 0;

    /** @var string  */
    public $buff_value = "";

    /** @var string  */
    public $special_effect_json = "";

}
