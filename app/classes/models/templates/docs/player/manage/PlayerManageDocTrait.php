<?php
namespace App\Models\Templates\Docs\Player\Manage;

/**
 */
trait PlayerManageDocTrait
{
    protected $table = "player_manage";

    protected $properties = [
        "player_id",
        "type",
        "public_id",
        "uuid",
        "device_id",
        "birthday",
        "logincount_total",
        "logincount_today",
        "logintime_last",
        "logintime_pre",
        "modified",
        "created",
    ];


    /** @var int  */
    public $player_id = 0;

    /** @var int  */
    public $type = 0;

    /** @var string  */
    public $public_id = "0";

    /** @var string  */
    public $uuid = "";

    /** @var string  */
    public $device_id = "";

    /** @var int  */
    public $birthday = 0;

    /** @var int  */
    public $logincount_total = 0;

    /** @var int  */
    public $logincount_today = 0;

    /** @var string  */
    public $logintime_last = "";

    /** @var string  */
    public $logintime_pre = "";

    /** @var string  */
    public $modified = "";

    /** @var string  */
    public $created = "";

}
