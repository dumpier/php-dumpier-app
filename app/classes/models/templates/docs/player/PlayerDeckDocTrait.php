<?php
namespace App\Models\Templates\Docs\Player;

/**
 */
trait PlayerDeckDocTrait
{
    /** テーブル名 */
    protected $table = "player_deck";

    /** 項目一覧 */
    protected $properties = [
        "id",
        "player_id",
        "deck_id",
        "player_character_id_1",
        "player_character_id_2",
        "player_character_id_3",
        "player_character_id_4",
        "player_character_id_5",
        "player_character_id_6",
        "player_character_id_7",
        "player_character_id_8",
        "player_character_id_9",
        "player_character_id_10",
        "created",
        "modified",
    ];


    /** @var int  */
    public $id = 0;

    /** @var int  */
    public $player_id = 0;

    /** @var int  */
    public $deck_id = 0;

    /** @var int  */
    public $player_character_id_1 = 0;

    /** @var int  */
    public $player_character_id_2 = 0;

    /** @var int  */
    public $player_character_id_3 = 0;

    /** @var int  */
    public $player_character_id_4 = 0;

    /** @var int  */
    public $player_character_id_5 = 0;

    /** @var int  */
    public $player_character_id_6 = 0;

    /** @var int  */
    public $player_character_id_7 = 0;

    /** @var int  */
    public $player_character_id_8 = 0;

    /** @var int  */
    public $player_character_id_9 = 0;

    /** @var int  */
    public $player_character_id_10 = 0;

    /** @var string  */
    public $created = "CURRENT_TIMESTAMP";

    /** @var string  */
    public $modified = "CURRENT_TIMESTAMP";

}
