<?php
namespace App\Models\Entities\Battle\Log;


use Presto\Core\Traits\Instanceable;

class BattleLogRound
{
    use Instanceable;


    public $round;

    /** @var BattleLogTurn[] */
    public $Turns = [];
}