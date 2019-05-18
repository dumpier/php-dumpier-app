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
        $damage = mt_rand(25,60);

        return $damage;
    }
}