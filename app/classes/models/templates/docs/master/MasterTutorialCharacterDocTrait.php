<?php
namespace App\Models\Templates\Docs\Master;

/**
 */
trait MasterTutorialCharacterDocTrait
{
    /** 項目一覧 */
    protected $properties = [
        "id",
        "character_type",
        "character_id",
        "weight",
        "created",
        "modified",
    ];


    /** @var int  */
    public $id = 0;

    /** @var int  */
    public $character_type = 0;

    /** @var int  */
    public $character_id = 0;

    /** @var int 重み */
    public $weight = 0;

    /** @var string  */
    public $created = "";

    /** @var string  */
    public $modified = "";

}
