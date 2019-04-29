<?php
namespace App\Models\Entities\Battle\Log;

class BattleLogManage
{
    protected $logs = [];

    /** @return BattleLogRound */
    private function getCurrentRound() { return end($this->logs); }
    /** @return BattleLogTurn */
    private function getCurrentTurn() { return end($this->getCurrentRound()->Turns); }
    /** @return BattleLogEffectBuff|BattleLogEffectSkill */
    private function getCurrentEffect() { return end($this->getCurrentTurn()->Effects); }
    /** @return BattleLogEffectBuff|BattleLogEffectSkill */
    private function getCurrentAction() { return end($this->getCurrentTurn()->Effects); }

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
        $BattleLogRound = new BattleLogRound();
        $BattleLogRound->round = $round;

        $this->logs[] = $BattleLogRound;
    }


    public function roundEnd()
    {
        $BattleLogRound = $this->getCurrentRound();
        $BattleLogRound->Turns[] = [];
    }


    public function turn(int $actor_id)
    {
        $BattleLogRound = $this->getCurrentRound();
        $BattleLogTurn = new BattleLogTurn();
        $BattleLogTurn->actor_id = $actor_id;
        $BattleLogRound->Turns[] = $BattleLogTurn;
    }

    public function skillEffect()
    {

    }


    public function targeting()
    {

    }


    public function target()
    {

    }

    public function buffEffect()
    {

    }


    public function action(int $actor_id, int $target_id, array $statuses=[], array $buffs=[])
    {

    }


    public function result()
    {
        return $this->logs;
    }
}