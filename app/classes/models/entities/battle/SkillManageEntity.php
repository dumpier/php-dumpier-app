<?php
namespace App\Models\Entities\Battle;

use Presto\Core\Utilities\Collection;

class SkillManageEntity
{
    /** @var Collection|SkillEntity[] */
    public $Skills;

    /** @var int スキル発動回数 */
    public $use_skill_count = 0;


    public function __construct()
    {
        $this->Skills = collection();
    }

    /**
     * 発動するスキルの取得
     * @return \App\Models\Entities\Battle\SkillEntity
     */
    public function getSkill()
    {
        // TODO
        return new SkillEntity();
    }


    /**
     * スキルの取得
     * @param int $skill_id
     * @return \App\Models\Entities\Battle\SkillEntity
     */
    public function getBySkillId(int $skill_id)
    {
        /* @var $skill SkillEntity */
        $Skill = $this->Skills->where("skill_id", $skill_id)->first();

        return $Skill;
    }
}