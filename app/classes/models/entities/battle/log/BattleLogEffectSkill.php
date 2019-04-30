<?php
namespace App\Models\Entities\Battle\Log;


use Presto\Core\Traits\Instanceable;
use App\Models\Entities\Battle\Log\Traits\BattleLogTowable;

class BattleLogEffectSkill
{
    use Instanceable;
    use BattleLogTowable;

    public $skill_id;

    /** @var BattleLogAction[] */
    public $Actions = [];

}