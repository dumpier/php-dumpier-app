<?php
namespace App\Models\Entities\Battle;

class ActorEntity
{
    public $actor_id;
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


    public function hp() { return $this->StatusManage->Status->hp; }
    public function mp() { return $this->StatusManage->Status->mp; }
    public function ap() { return $this->StatusManage->Status->ap; }

    public function baseHp() { return $this->StatusManage->OriginalStatus->hp; }
    public function baseMp() { return $this->StatusManage->OriginalStatus->mp; }
    public function baseAp() { return $this->StatusManage->OriginalStatus->ap; }

    public function damage(int $damage)
    {
        $this->StatusManage->Status->hp -= $damage;
        if($this->StatusManage->Status->hp <= 0)
        {
            $this->StatusManage->Status->hp = 0;
        }
        return $this;
    }
}