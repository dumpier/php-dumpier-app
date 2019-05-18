<?php
namespace App\Models\Entities\Battle\Log;


use Presto\Core\Traits\Instanceable;
use App\Models\Entities\Battle\Log\Traits\BattleLogTowable;

class BattleLogTurn
{
    use Instanceable;
    use BattleLogTowable;

    public $turn;

    public $actor_id;

    /** @var BattleLogEffectSkill[]|BattleLogEffectBuff[] */
    public $Effects = [];


    public function __construct(int $actor_id, int $turn)
    {
        $this->actor_id = $actor_id;
        $this->turn = $turn;
    }

}