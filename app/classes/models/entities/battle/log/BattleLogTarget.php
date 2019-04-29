<?php
namespace App\Models\Entities\Battle\Log;


use Presto\Core\Traits\Instanceable;

class BattleLogTargeting
{
    use Instanceable;

    public $target_id;

    /** @var BattleLogAction[] */
    public $Actions = [];
}