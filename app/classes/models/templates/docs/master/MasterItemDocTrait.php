<?php
namespace App\Models\Templates\Docs\Master;

/**
 */
trait MasterItemDocTrait
{
    /** 項目一覧 */
    protected $properties = [
        "id",
        "category",
        "type",
        "name",
        "created",
        "modified",
    ];


    /** @var int  */
    public $id = 0;

    /** @var int カテゴリ */
    public $category = 0;

    /** @var int 分類 */
    public $type = 0;

    /** @var string 名前 */
    public $name = "";

    /** @var string  */
    public $created = "";

    /** @var string  */
    public $modified = "";

}
