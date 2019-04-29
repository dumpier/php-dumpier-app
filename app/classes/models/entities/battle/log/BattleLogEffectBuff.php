<?php
namespace App\Models\Entities\Battle\Log;


use Presto\Core\Traits\Instanceable;

class BattleLogEffectBuff
{
    use Instanceable;

    public $buff_id;

    /** @var BattleLogAction[] */
    public $Actions = [];
}