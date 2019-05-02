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
        $hp = $BattleEntity->Target->hp();

        // TODO
        $damage = mt_rand(10,50);
        $damage = ($damage > $hp) ? $hp : $damage;

        return $damage;
    }
}