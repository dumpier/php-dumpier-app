<?php
namespace App\Models\Entities\Battle\Log;


use Presto\Core\Traits\Instanceable;
use App\Models\Entities\Battle\Log\Traits\BattleLogTowable;
use App\Models\Entities\Battle\ActorEntity;

class BattleLogAction
{
    use Instanceable;
    use BattleLogTowable;

    public $actor_id;
    public $target_id;

    /** @var BattleLogStatus[] */
    public $Statuses = [];

    /** @var BattleLogBuff[] */
    public $Buffs = [];


    public function __construct(int $actor_id, int $target_id)
    {
        $this->actor_id = $actor_id;
        $this->target_id = $target_id;
    }

    // ----------------------------------------------------
    // TODO debug用
    // ----------------------------------------------------
    public $debug = [];
    public function debug(ActorEntity $Actor, ActorEntity $Target, string $key="")
    {
        $key = empty($key) ? count($this->debug) : $key;

        $this->debug[$key] = [
            "actor"=> $Actor->StatusManage->Status->hp,
            "target"=> $Target->StatusManage->Status->hp,
        ];
    }
    // ----------------------------------------------------

}