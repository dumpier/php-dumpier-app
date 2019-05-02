<?php
namespace App\Models\Entities\Battle\Log;


use Presto\Core\Traits\Instanceable;
use App\Models\Entities\Battle\Log\Traits\BattleLogTowable;

class BattleLogRound
{
    use Instanceable;
    use BattleLogTowable;

    public $round;

    /** @var BattleLogTurn[] */
    public $Turns = [];


}