<?php
namespace App\Models\Repositories\Player;

use Presto\Core\Databases\Model\Repository;
use App\Models\Daos\Player\PlayerQuestModel;
use App\Exceptions\AppException;

/**
 * player_quest
 */
class PlayerQuestRepository extends Repository
{
    protected $class = PlayerQuestModel::class;

    /**
     * 最後に解放されたクエストの取得
     * @param int $player_id
     * @return PlayerQuestModel|NULL
     */
    public function getLastOpenQuest(int $player_id)
    {
        $cond = [];
        $cond["condition"]["player_id"] = $player_id;
        $cond["order"][] = "id DESC";

        $row = $this->findFirst($cond);
        return $row;
    }


    /**
     * 指定マップIDの最後に解放されたクエストの取得
     * @param int $player_id
     * @param int $map_id
     * @return PlayerQuestModel|NULL
     */
    public function getLastOpenQuestByMapId(int $player_id, int $map_id)
    {
        $cond = [];
        $cond["condition"]["player_id"] = $player_id;
        $cond["condition"]["map_id"] = $map_id;
        $cond["order"][] = "id DESC";

        $row = $this->findFirst($cond);

        if(empty($row))
        {
            throw new AppException("未開放マップ[map_id:{$map_id}]");
        }

        return $row;
    }


    /**
     * 現在プレイ中のクエストの取得 TODO
     * @param int $player_id
     * @return PlayerQuestModel|NULL
     */
    public function getLastPlayQuest(int $player_id)
    {
        $cond = [];
        $cond["condition"]["player_id"] = $player_id;
        $cond["order"][] = "created DESC";

        $row = $this->findFirst($cond);
        return $row;
    }


    /**
     * 指定エリアのクエスト取得
     * @param int $player_id
     * @param int $area_id
     * @return PlayerQuestModel|NULL
     */
    public function getPlayerQuest(int $player_id, int $area_id)
    {
        $cond = [];
        $cond["condition"]["player_id"] = $player_id;
        $cond["condition"]["area_id"] = $area_id;
        $cond["order"][] = "created DESC";

        $row = $this->findFirst($cond);

        if(empty($row))
        {
            throw new AppException("未開放マップ[area_id:{$area_id}]");
        }

        return $row;
    }

}
