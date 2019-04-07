<?php
namespace App\Models\Templates\Docs\Master;

/**
 */
trait MasterQuestStageDocTrait
{
    /** 項目一覧 */
    protected $properties = [
        "id",
        "stage_id",
        "map_id",
        "area_id",
    ];


    /** @var int  */
    public $id = 0;

    /** @var int  */
    public $stage_id = 0;

    /** @var int  */
    public $map_id = 0;

    /** @var int  */
    public $area_id = 0;

}
