<?php
namespace App\Models\Entities\Battle\Log;


use Presto\Core\Traits\Instanceable;
use App\Models\Entities\Battle\Log\Traits\BattleLogTowable;

class BattleLogStatus
{
    use Instanceable;
    use BattleLogTowable;

    public $status_id;
    public $name;
    public $value;

}