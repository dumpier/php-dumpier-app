<?php
namespace App\Services\Game\Battle;

use App\Models\Entities\Battle\BattleEntity;

class DamageService extends \Service
{
    /**
     * ダメージの取得
     * @param BattleEntity $BattleEntity
     * @return int
     */
    public function damage(BattleEntity $BattleEntity)
    {
        // TODO
        $damage = mt_rand(15,40);

        // HPをカット
        $damage = $BattleEntity->Target->damage($damage);

        $BattleEntity->LogManage->damage($BattleEntity->Actor->actor_id, $BattleEntity->Target->actor_id, $damage);
    }
}