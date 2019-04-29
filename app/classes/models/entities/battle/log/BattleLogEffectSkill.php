<?php
namespace App\Models\Entities\Battle\Log;


use Presto\Core\Traits\Instanceable;

class BattleLogEffectSkill
{
    use Instanceable;

    public $skill_id;

    /** @var BattleLogTargeting[] */
    public $Targetings = [];
}