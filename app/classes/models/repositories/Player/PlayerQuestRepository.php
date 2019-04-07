<?php
namespace App\Models\Repositories\Player;

use Presto\Core\Databases\Model\Repository;
use App\Models\Daos\Player\PlayerQuestModel;

/**
 * player_quest
 */
class PlayerQuestRepository extends Repository
{
    protected $class = PlayerQuestModel::class;


    // TODO デフォルト
    public function getDefaultQuest(int $player_id)
    {
        return $this->getPlayingQuest($player_id);
    }

    // 最終プレイしたクエストの取得
    public function getLastQuest(int $player_id)
    {
        $cond = [];
        $cond["condition"]["player_id"] = $player_id;

        $row = $this->findFirst($cond);

        return $row;
    }


    // 現在プレイ中のクエストの取得 TODO
    public function getPlayingQuest(int $player_id)
    {
        $cond = [];
        $cond["condition"]["player_id"] = $player_id;

        $row = $this->findFirst($cond);

        return $row;
    }

}
