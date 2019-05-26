<?php
namespace App\Models\Entities\Battle;

class SkillEntity
{
    /** @var int スキルID */
    public $skill_id = 0;

    /** @var int スキルレベル */
    public $level = 0;

    /** @var int 消費MP */
    public $use_mp = 0;

    /** @var int ターゲット数 */
    public $target_count = 1;

    /** @var int 行動回数 */
    public $action_count = 1;

    public $Statuses;

    public $Buffs;


    public function __construct(array $skill)
    {
        $this->skill_id = $skill["skill_id"];
        $this->level = $skill["level"];
        $this->use_mp = $skill["use_mp"];
    }


    /**
     * ターゲッティング回数を取得
     * @return number
     */
    public function getTargetingCount()
    {
        return mt_rand(1, mt_rand(1,2));
        return $this->targeting_count;
    }

    /**
     * ターゲット数を取得
     * @return number
     */
    public function getTargetCount()
    {
        return mt_rand(1, mt_rand(1, mt_rand(1,3)));
        return $this->target_count;
    }

    /**
     * アクション回数を取得
     * @return number
     */
    public function getActionCount()
    {
        return mt_rand(1, mt_rand(1, mt_rand(1,3)));
        return $this->action_count;
    }

}