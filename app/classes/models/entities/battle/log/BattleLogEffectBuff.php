<?php
namespace App\Models\Entities\Battle\Log;


use Presto\Core\Traits\Instanceable;
use App\Models\Entities\Battle\Log\Traits\BattleLogTowable;

class BattleLogEffectBuff
{
    use Instanceable;
    use BattleLogTowable;

    public $buff_id;

    /** @var BattleLogAction[] */
    public $Actions = [];
}