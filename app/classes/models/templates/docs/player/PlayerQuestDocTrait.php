<?php
namespace App\Models\Templates\Docs\Player;

/**
 */
trait PlayerQuestDocTrait
{
    /** 項目一覧 */
    protected $properties = [
        "id",
        "player_id",
        "map_id",
        "area_id",
        "stage_id",
        "play_count",
        "complete_count",
        "created",
        "modified",
    ];


    /** @var int  */
    public $id = 0;

    /** @var int  */
    public $player_id = 0;

    /** @var int  */
    public $map_id = 0;

    /** @var int  */
    public $area_id = 0;

    /** @var int プレイ中のステージID */
    public $stage_id = 0;

    /** @var int プレイ回数 */
    public $play_count = 0;

    /** @var int 勝利回数 */
    public $complete_count = 0;

    /** @var string  */
    public $created = NULL;

    /** @var string  */
    public $modified = NULL;

}
