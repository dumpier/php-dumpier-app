<?php
namespace App\Models\Entities\Battle\Log;


use Presto\Core\Traits\Instanceable;

class BattleLogAction
{
    use Instanceable;

    public $actor_id;
    public $target_id;
    public $Statuses;
    public $Buffs;

    public function ActorId()
    {

        return $this;
    }


    public function TargetId()
    {
        return $this;
    }


    public function Status()
    {

        return $this;
    }


    public function Buff()
    {

        return $this;
    }


    public function toArray()
    {

    }


}