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
    public $StatusManage;

    /** @var SkillManageEntity 状態異常の管理 */
    public $SkillManage;

    /** @var BuffManageEntity 状態異常の管理 */
    public $BuffManage;

    public function __construct(array $status, array $skills, array $buffs)
    {
        $this->StatusManage = new StatusManageEntity($status);

        // TODO パッシブスキルによるバフ設定
        $this->SkillManage = new SkillManageEntity($skills);
        $this->BuffManage = new BuffManageEntity($buffs);
    }

    /**
     * 行動可能かの判定
     *      - 生きている
     *      - 動けない状態異常にかかってない
     *      - TODO アクションポイント（AP）がある
     * @return boolean
     */
    public function isActable()
    {
        return $this->StatusManage->isAlive() && $this->BuffManage->isActable();
    }


    public function getSkill()
    {
        $Skill = $this->SkillManage->getSkill();

        // スキルポイントが足りない場合、通常攻撃にする
        if ( $this->StatusManage->status->mp < $Skill->use_mp )
        {
            return new SkillEntity();
        }

        return $Skill;
    }
}