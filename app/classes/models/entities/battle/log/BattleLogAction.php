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

    public $Statuses;

    public $Buffs;



}