<?php
namespace App\Services\Game\Battle;

use App\Models\Entities\Battle\BattleEntity;
use App\Models\Entities\Battle\ActorEntity;

class SkillService extends \Service
{
    /**
     * スキルの発動ターゲット一覧の取得
     * @param BattleEntity $BattleEntity
     * @return ActorEntity[]
     */
    public function getTargets(BattleEntity $BattleEntity)
    {
        $Skill = $BattleEntity->getSkill();
        $target_count = $Skill->getTargetCount();

        // TODO
        return $BattleEntity->OppenentDeck->Actors->merge($BattleEntity->AllyDeck->Actors)->shuffle()->all(1);
    }

    // スキルのステータス操作の反映
    public function reflectStatus(BattleEntity $battleEntity, ActorEntity $target, int $timing)
    {

    }

    // スキルの状態異常操作の反映
    public function reflectBuff(BattleEntity $battleEntity, ActorEntity $target, int $timing)
    {

    }
}