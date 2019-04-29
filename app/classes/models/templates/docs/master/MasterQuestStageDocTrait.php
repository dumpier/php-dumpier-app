<?php
namespace App\Models\Templates\Docs\Master;

/**
 */
trait MasterQuestStageDocTrait
{
    /** 項目一覧 */
    protected $properties = [
        "stage_id",
        "serial_id",
        "map_id",
        "area_id",
        "next_map_id",
        "next_area_id",
        "next_stage_id",
        "is_boss",
        "enemy_id",
        "enemy_level_min",
        "enemy_level_max",
        "enemy_count",
    ];


    /** @var int  */
    public $stage_id = 0;

    /** @var int  */
    public $serial_id = 0;

    /** @var int  */
    public $map_id = 0;

    /** @var int  */
    public $area_id = 0;

    /** @var int  */
    public $next_map_id = 0;

    /** @var int  */
    public $next_area_id = 0;

    /** @var int  */
    public $next_stage_id = 0;

    /** @var int  */
    public $is_boss = 0;

    /** @var int  */
    public $enemy_id = 0;

    /** @var int  */
    public $enemy_level_min = 0;

    /** @var int  */
    public $enemy_level_max = 0;

    /** @var int  */
    public $enemy_count = 0;

}
