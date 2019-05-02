<?php
namespace App\Models\Repositories\Player;

use Presto\Core\Databases\Model\Repository;
use App\Models\Daos\Player\PlayerQuestBattleModel;

/**
 * player_quest_battle
 */
class PlayerQuestBattleRepository extends Repository
{
    protected $class = PlayerQuestBattleModel::class;
}
