<?php
namespace App\Models\Templates\Docs\Player;

/**
 */
trait PlayerWeaponDocTrait
{
    /** テーブル名 */
    protected $table = "player_weapon";

    /** 項目一覧 */
    protected $properties = [
        "id",
        "player_id",
        "player_character_id",
        "weapon_id",
        "level",
    ];


    /** @var int  */
    public $id = 0;

    /** @var int  */
    public $player_id = 0;

    /** @var int  */
    public $player_character_id = 0;

    /** @var int  */
    public $weapon_id = 0;

    /** @var int  */
    public $level = 1;

}
