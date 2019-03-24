<?php
namespace App\Models\Entities\Battle;

use Presto\Core\Utilities\Collection;

class SkillManageEntity
{
    /** @var Collection|SkillEntity[] */
    public $skills;

    /** @var int スキル発動回数 */
    public $use_skill_count = 0;


    /**
     * TODO 発動するスキルの取得
     * @return \App\Models\Entities\Battle\SkillEntity
     */
    public function getSkill()
    {

    }

    /**
     * スキルの取得
     * @param int $skill_id
     * @return \App\Models\Entities\Battle\SkillEntity
     */
    public function getBySkillId(int $skill_id)
    {
        /* @var $skill SkillEntity */
        $skill = $this->skills->where("skill_id", $skill_id)->first();

        return $skill;
    }
}