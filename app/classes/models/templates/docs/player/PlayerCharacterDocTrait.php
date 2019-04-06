<?php
namespace App\Models\Templates\Docs\Player;

/**
 */
trait PlayerCharacterDocTrait
{
    /** テーブル名 */
    protected $table = "player_character";

    /** 項目一覧 */
    protected $properties = [
        "id",
        "player_id",
        "character_id",
        "level",
        "is_protected",
        "created",
        "modified",
    ];


    /** @var int  */
    public $id = 0;

    /** @var int  */
    public $player_id = 0;

    /** @var int  */
    public $character_id = 0;

    /** @var int  */
    public $level = 0;

    /** @var int 保護フラグ */
    public $is_protected = 0;

    /** @var string  */
    public $created = NULL;

    /** @var string  */
    public $modified = NULL;

}
