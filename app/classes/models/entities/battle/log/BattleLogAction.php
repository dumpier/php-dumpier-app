<?php
namespace App\Models\Entities\Battle\Log;


use Presto\Core\Traits\Instanceable;
use App\Models\Entities\Battle\Log\Traits\BattleLogTowable;

class BattleLogAction
{
    use Instanceable;
    use BattleLogTowable;

    public $actor_id;
    public $target_id;

    public $Statuses = [];

    public $Buffs = [];


    public function __construct(int $actor_id, int $target_id)
    {
        $this->actor_id = $actor_id;
        $this->target_id = $target_id;
    }
}