<?php
namespace App\Models\Templates\Docs\Player\Manage;

/**
 */
trait PlayerManageDocTrait
{
    /** 項目一覧 */
    protected $properties = [
        "player_id",
        "type",
        "public_id",
        "login_id",
        "login_pw",
        "birthday",
        "logincount_total",
        "logincount_today",
        "logintime_last",
        "logintime_pre",
        "created",
        "modified",
    ];


    /** @var int  */
    public $player_id = 0;

    /** @var int  */
    public $type = 0;

    /** @var string  */
    public $public_id = "0";

    /** @var string  */
    public $login_id = "";

    /** @var string  */
    public $login_pw = "";

    /** @var int  */
    public $birthday = 0;

    /** @var int  */
    public $logincount_total = 0;

    /** @var int  */
    public $logincount_today = 0;

    /** @var string  */
    public $logintime_last = NULL;

    /** @var string  */
    public $logintime_pre = NULL;

    /** @var string  */
    public $created = NULL;

    /** @var string  */
    public $modified = NULL;

}
