<?php
namespace App\Models\Entities\Battle\Log;

use App\Models\Entities\Battle\Log\Traits\BattleLogTowable;
use App\Models\Entities\Battle\ActorEntity;

class BattleLogManage
{
    use BattleLogTowable;

    /** @var BattleLogRound[] */
    public $Rounds = [];

    /** @return BattleLogRound */
    private function getCurrentRound() { return end($this->Rounds); }

    /** @return BattleLogTurn */
    private function getCurrentTurn() { return end($this->getCurrentRound()->Turns); }

    /** @return BattleLogEffect */
    private function getCurrentEffect() { return end($this->getCurrentTurn()->Effects); }

    /** @return BattleLogAction */
    private function getCurrentAction(int $actor_id, int $target_id)
    {
        if(empty($this->getCurrentEffect()->Actions))
        {
            $this->getCurrentEffect()->Actions[] = new BattleLogAction($actor_id, $target_id);
        }

        return end($this->getCurrentEffect()->Actions);
    }



    // 開幕処理
    public function opening()
    {
        // $this->Rounds[] = [];
    }

    // 閉幕処理
    public function ending()
    {
        // $this->Rounds[] = [];
    }

    // ラウンド開始
    public function roundStart(int $round)
    {
        $Round = new BattleLogRound();
        $Round->round = $round;

        $this->Rounds[] = $Round;
    }

    // ラウンド終了
    public function roundEnd()
    {
        $this->getCurrentRound()->Turns[] = [];
    }


    // ターン開始
    public function turn(int $actor_id, int $turn)
    {
        $Turn = new BattleLogTurn($actor_id, $turn);

        $this->getCurrentRound()->Turns[] = $Turn;
    }


    // スキル発動
    public function setSkill(int $skill_id)
    {
        $SkillEffect = new BattleLogEffect();
        $SkillEffect->skill_id = $skill_id;

        $this->getCurrentTurn()->Effects[] = $SkillEffect;
    }

    // 状態異常発動
    public function setBuff(int $buff_id)
    {
        $Buff = new BattleLogEffect();
        $Buff->buff_id = $buff_id;

        $this->getCurrentTurn()->Effects[] = $Buff;
    }


    public function action(int $actor_id, int $target_id, array $statuses=[], array $buffs=[])
    {
        $Action = new BattleLogAction($actor_id, $target_id);
        $this->getCurrentEffect()->Actions[] = $Action;
    }

    public function damage(int $actor_id, int $target_id, int $damage)
    {
        $Status = new BattleLogStatus();
        $Status->name = "damage";
        $Status->value = $damage;

        $Action = new BattleLogAction($actor_id, $target_id);
        $Action->Statuses[] = $Status;

        $this->getCurrentEffect()->Actions[] = $Action;
    }

    public function debugAction(ActorEntity $Actor, ActorEntity $Target)
    {
        $this->getCurrentAction()->debug($Actor, $Target);
    }



    public function toJson()
    {
        $array = $this->toArray();
        return json_encode($array["Rounds"]);
    }
}