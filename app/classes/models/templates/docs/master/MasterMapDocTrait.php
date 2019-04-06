<?php
namespace App\Models\Templates\Docs\Master;

/**
 */
trait MasterMapDocTrait
{
    /** 項目一覧 */
    protected $properties = [
        "map_id",
        "name",
        "caption",
    ];


    /** @var int  */
    public $map_id = 0;

    /** @var string  */
    public $name = "";

    /** @var string  */
    public $caption = "";

}
