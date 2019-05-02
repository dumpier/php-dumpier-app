<?php
namespace App\Models\Entities\Battle\Log;


use Presto\Core\Traits\Instanceable;
use App\Models\Entities\Battle\Log\Traits\BattleLogTowable;

class BattleLogBuff
{
    use Instanceable;
    use BattleLogTowable;

    public $buff_id;
    public $turn;

    /** @var BattleLogStatus[] */
    public $Statuses;

}