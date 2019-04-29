<?php
namespace App\Models\Entities\Battle\Log;


use Presto\Core\Traits\Instanceable;

class BattleLogTurn
{
    use Instanceable;

    public $turn;

    public $actor_id;

    /** @var BattleLogEffectSkill[]|BattleLogEffectBuff[] */
    public $Effects = [];

}