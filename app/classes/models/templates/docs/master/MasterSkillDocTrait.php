<?php
namespace App\Models\Templates\Docs\Master;

/**
 */
trait MasterSkillDocTrait
{
    /** 項目一覧 */
    protected $properties = [
        "skill_id",
        "skill_original_id",
        "level",
        "level_next",
        "use_mp",
    ];


    /** @var int  */
    public $skill_id = 0;

    /** @var int  */
    public $skill_original_id = 0;

    /** @var int  */
    public $level = 0;

    /** @var int  */
    public $level_next = 0;

    /** @var int  */
    public $use_mp = 0;

}
