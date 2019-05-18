<?php
namespace App\Services\Game\Battle;

use App\Models\Entities\Battle\BattleEntity;
use App\Models\Entities\Battle\ActorEntity;

class BuffService extends \Service
{
    // スキルの状態異常操作の反映
    public function reflectBuff(BattleEntity $battleEntity, ActorEntity $target, int $timing)
    {

    }
}