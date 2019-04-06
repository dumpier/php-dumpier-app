<?php
namespace App\Models\Templates\Docs\Master;

/**
 */
trait MasterCharacterOriginalDocTrait
{
    /** 項目一覧 */
    protected $properties = [
        "character_original_id",
        "serial_id",
        "type",
        "occupation",
        "personarity",
        "attribute",
        "position",
        "rank_min",
        "rank_max",
        "name",
        "caption",
    ];


    /** @var int  */
    public $character_original_id = 0;

    /** @var int 連番 */
    public $serial_id = 0;

    /** @var int 区分 */
    public $type = 0;

    /** @var int 職種 */
    public $occupation = 0;

    /** @var int 性格 */
    public $personarity = 0;

    /** @var int 属性 */
    public $attribute = 0;

    /** @var int ポジション */
    public $position = 0;

    /** @var int  */
    public $rank_min = 0;

    /** @var int  */
    public $rank_max = 0;

    /** @var string キャラ名 */
    public $name = "";

    /** @var string  */
    public $caption = "";

}
