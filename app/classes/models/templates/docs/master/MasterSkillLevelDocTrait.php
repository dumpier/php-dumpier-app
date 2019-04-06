<?php
namespace App\Models\Templates\Docs\Master;

/**
 */
trait MasterSkillLevelDocTrait
{
    /** 項目一覧 */
    protected $properties = [
        "id",
        "level",
        "character_id",
        "muscle",
        "stamina",
        "speed",
        "intellect",
        "hp",
        "attack",
        "defense",
        "name",
        "created",
        "modified",
    ];


    /** @var int  */
    public $id = 0;

    /** @var int レベル */
    public $level = 0;

    /** @var int レアリティID */
    public $character_id = 0;

    /** @var int 筋力 */
    public $muscle = 0;

    /** @var int 体力 */
    public $stamina = 0;

    /** @var int 素早さ */
    public $speed = 0;

    /** @var int 知力 */
    public $intellect = 0;

    /** @var int HP */
    public $hp = 0;

    /** @var int HP */
    public $attack = 0;

    /** @var int HP */
    public $defense = 0;

    /** @var string  */
    public $name = "";

    /** @var string  */
    public $created = "";

    /** @var string  */
    public $modified = "";

}
