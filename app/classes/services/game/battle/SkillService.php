<?php
namespace App\Services\Game\Battle;

use App\Models\Entities\Battle\BattleEntity;
use App\Models\Entities\Battle\ActorEntity;
use App\Defines\Game\BATTLE;

class SkillService extends \Service
{
    /**
     * スキルの発動ターゲット一覧の取得
     * @param BattleEntity $BattleEntity
     * @return ActorEntity[]
     */
    public function getTargets(BattleEntity $BattleEntity)
    {
        $Actor = $BattleEntity->getActor();
        $Skill = $BattleEntity->getSkill();
        $target_count = $Skill->getTargetCount();
        $target_team_id = ($Actor->team_id == BATTLE::TEAM_ID_ALLY) ? BATTLE::TEAM_ID_OPPENENT : BATTLE::TEAM_ID_ALLY;

        $actors = $BattleEntity->getActorListByAlive($target_team_id);
        shuffle($actors);

        return array_slice( $actors,0, $target_count );
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