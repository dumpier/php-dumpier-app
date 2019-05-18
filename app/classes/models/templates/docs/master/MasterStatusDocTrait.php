<?php
namespace App\Models\Templates\Docs\Master;

/**
 */
trait MasterStatusDocTrait
{
    /** 項目一覧 */
    protected $properties = [
        "status_id",
        "status_type",
        "serial_id",
        "evaluation",
        "property",
        "name",
        "caption",
    ];


    /** @var int  */
    public $status_id = 0;

    /** @var int  */
    public $status_type = 0;

    /** @var int  */
    public $serial_id = 0;

    /** @var float  */
    public $evaluation = 0;

    /** @var string  */
    public $property = "";

    /** @var string  */
    public $name = "";

    /** @var string  */
    public $caption = "";

}
