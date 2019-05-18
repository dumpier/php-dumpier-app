<?php
namespace App\Models\Templates\Docs\Master;

/**
 */
trait MasterBuffDocTrait
{
    /** 項目一覧 */
    protected $properties = [
        "buff_id",
        "buff_type",
        "is_positive",
        "timing",
        "rate",
        "status_id",
        "status_value",
        "impact_buff_id",
        "special_effect_json",
        "name",
        "caption",
    ];


    /** @var int  */
    public $buff_id = 0;

    /** @var int 状態異常区分 */
    public $buff_type = 0;

    /** @var int 有利 */
    public $is_positive = 0;

    /** @var int 発動タイミング */
    public $timing = 0;

    /** @var int 発動確率 */
    public $rate = 0;

    /** @var int ステータスID */
    public $status_id = 0;

    /** @var string ステータス値 */
    public $status_value = "";

    /** @var int  */
    public $impact_buff_id = 0;

    /** @var string  */
    public $special_effect_json = "";

    /** @var string  */
    public $name = "";

    /** @var string  */
    public $caption = "";

}
