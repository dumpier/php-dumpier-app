<?php
namespace App\Models\Templates\Docs\Master;

/**
 */
trait MasterSkillOriginalDocTrait
{
    /** 項目一覧 */
    protected $properties = [
        "id",
        "rarity_min",
        "rarity_max",
        "level_min",
        "level_max",
        "name",
        "created",
        "modified",
    ];


    /** @var int  */
    public $id = 0;

    /** @var int 最低レア度 */
    public $rarity_min = 0;

    /** @var int 最大レア度 */
    public $rarity_max = 0;

    /** @var int 最低レベル */
    public $level_min = 0;

    /** @var int 最大レベル */
    public $level_max = 0;

    /** @var string 名前 */
    public $name = "";

    /** @var string  */
    public $created = "";

    /** @var string  */
    public $modified = "";

}
