<?php
namespace App\Models\Entities\Battle;

class ActorEntity
{
    public $id;
    public $is_boss = false;
    public $is_enemy = false;

    /** @var int 編成番号 */
    public $sort_id = 0;

    /** @var StatusManageEntity ステータス管理 */
    public $statusManage;

    /** @var SkillManageEntity 状態異常の管理 */
    public $skillManage;

    /** @var BuffManageEntity 状態異常の管理 */
    public $buffManage;


    /**
     * 行動可能かの判定
     *      - 生きている
     *      - 動けない状態異常にかかってない
     *      - TODO アクションポイント（AP）がある
     * @return boolean
     */
    public function isActable()
    {
        return $this->statusManage->isAlive() && $this->buffManage->isActable();
    }


    public function getSkill()
    {
        $skill = $this->skillManage->getSkill();

        // スキルポイントが足りない場合、通常攻撃にする
        if ( $this->statusManage->status->mp < $skill->use_mp )
        {
            return new SkillEntity();
        }

        return $skill;
    }
}