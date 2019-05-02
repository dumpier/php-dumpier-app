<?php
namespace App\Models\Templates\Docs\Player;

/**
 */
trait PlayerQuestBattleDocTrait
{
    /** 項目一覧 */
    protected $properties = [
        "id",
        "player_id",
        "timesecond",
        "log",
        "created",
        "modified",
    ];


    /** @var int  */
    public $id = 0;

    /** @var int  */
    public $player_id = 0;

    /** @var int  */
    public $timesecond = 0;

    /** @var string  */
    public $log = "";

    /** @var string  */
    public $created = NULL;

    /** @var string  */
    public $modified = NULL;

}
