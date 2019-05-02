<?php
namespace App\Models\Entities\Battle;

class ActorEntity
{
    public $team_id;
    public $actor_id;
    /** @var int 編成番号 */
    public $sort_id = 0;

    public $is_boss = false;
    public $is_enemy = false;


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

    /** 生死の判定 @return boolean */
    public function isAlive() { return $this->StatusManage->isAlive(); }
    public function isDead() { return $this->StatusManage->isDead(); }
    /** 行動可能判定 @return boolean */
    public function isActable() { return $this->StatusManage->isAlive() && $this->BuffManage->isActable(); }
    public function isInactable() { return ! $this->isActable(); }


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