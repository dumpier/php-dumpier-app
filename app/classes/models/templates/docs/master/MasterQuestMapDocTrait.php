<?php
namespace App\Models\Templates\Docs\Master;

/**
 */
trait MasterQuestMapDocTrait
{
    /** 項目一覧 */
    protected $properties = [
        "map_id",
        "next_map_id",
        "name",
        "caption",
    ];


    /** @var int  */
    public $map_id = 0;

    /** @var int  */
    public $next_map_id = 0;

    /** @var string  */
    public $name = "";

    /** @var string  */
    public $caption = "";

}
