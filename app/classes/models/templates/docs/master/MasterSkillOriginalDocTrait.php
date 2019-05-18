<?php
namespace App\Models\Templates\Docs\Master;

/**
 */
trait MasterSkillOriginalDocTrait
{
    /** 項目一覧 */
    protected $properties = [
        "skill_original_id",
        "rank_id",
        "skill_type",
        "round",
        "character_id",
        "character_type",
        "name",
        "caption",
    ];


    /** @var int  */
    public $skill_original_id = 0;

    /** @var int  */
    public $rank_id = 0;

    /** @var int  */
    public $skill_type = 0;

    /** @var int  */
    public $round = 0;

    /** @var int  */
    public $character_id = 0;

    /** @var int  */
    public $character_type = 0;

    /** @var string  */
    public $name = "";

    /** @var string  */
    public $caption = "";

}
