<?php
namespace App\Models\Entities\Battle\Log;

use App\Models\Entities\Battle\Log\Traits\BattleLogTowable;

class BattleLogManage
{
    use BattleLogTowable;

    /** @var BattleLogRound[] */
    public $logs = [];

    /** @return BattleLogRound */
    private function getCurrentRound() { return end($this->logs); }

    /** @return BattleLogTurn */
    private function getCurrentTurn() { return end($this->getCurrentRound()->Turns); }

    /** @return BattleLogEffectBuff TODO BuffEffectとSkillEffectの区分 */
    private function getCurrentBuffEffect() { return end($this->getCurrentTurn()->Effects); }
    /** @return BattleLogAction */
    private function getCurrentBuffAction() { return end($this->getCurrentBuffEffect()->Actions); }

    /** @return BattleLogEffectSkill TODO BuffEffectとSkillEffectの区分 */
    private function getCurrentSkillEffect() { return end($this->getCurrentTurn()->Effects); }
    /** @return BattleLogAction */
    private function getCurrentSkillAction() { return end($this->getCurrentSkillEffect()->Actions); }


    public function opening()
    {
        // $this->logs[] = [];
    }

    public function ending()
    {
        // $this->logs[] = [];
    }

    public function roundStart(int $round)
    {
        $Round = new BattleLogRound();
        $Round->round = $round;

        $this->logs[] = $Round;
    }


    public function roundEnd()
    {
        $this->getCurrentRound()->Turns[] = [];
    }


    public function turn(int $actor_id, int $turn)
    {
        $Turn = new BattleLogTurn();
        $Turn->actor_id = $actor_id;
        $Turn->turn = $turn;

        $this->getCurrentRound()->Turns[] = $Turn;
    }


    public function setSkill(int $skill_id)
    {
        $SkillEffect = new BattleLogEffectSkill();
        $SkillEffect->skill_id = $skill_id;

        $this->getCurrentTurn()->Effects[] = $SkillEffect;
    }


    public function skillAction(int $actor_id, int $target_id)
    {
        $Action = new BattleLogAction();
        $Action->actor_id = $actor_id;
        $Action->target_id = $target_id;

        $this->getCurrentSkillEffect()->Actions[] = $Action;
    }


    public function setBuff(int $buff_id)
    {
        $Buff = new BattleLogEffectBuff();
        $Buff->buff_id = $buff_id;

        $this->getCurrentTurn()->Effects[] = $Buff;
    }


    public function buffAction()
    {
        $Action = new BattleLogAction();

        $this->getCurrentBuffEffect()->Actions[] = $Action;
    }


    public function action(int $actor_id, int $target_id, array $statuses=[], array $buffs=[])
    {

    }


    public function toJson()
    {
        return json_encode($this->toArray());
    }
}