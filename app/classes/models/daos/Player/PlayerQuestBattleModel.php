<?php
namespace App\Models\Daos\Player;

use App\Models\Templates\Docs\Player\PlayerQuestBattleDocTrait;
use App\Models\Entities\Battle\BattleEntity;

/**
 * player_quest_battle
 */
class PlayerQuestBattleModel extends \App\Models\Daos\BasePlayerModel
{
    use PlayerQuestBattleDocTrait;

    protected $table = "player_quest_battle";


    /**
     * 新規作成
     * @param int $player_id
     * @param BattleEntity $BattleEntity
     * @return \App\Models\Daos\Player\PlayerQuestBattleModel
     */
    public static function regist(int $player_id, BattleEntity $BattleEntity)
    {
        $self = static::instance();

        $self->player_id = $player_id;

        $self->save();
        return $self;
    }
}
