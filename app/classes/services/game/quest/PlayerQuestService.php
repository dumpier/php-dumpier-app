<?php
namespace App\Services\Game\Quest;

use App\Models\Entities\Battle\BattleEntity;
use App\Models\Repositories\Master\MasterQuestMapRepository;
use App\Models\Repositories\Master\MasterQuestAreaRepository;
use App\Models\Daos\Player\PlayerQuestModel;

class PlayerQuestService extends \Service
{
    protected $repositories = [
        MasterQuestMapRepository::class,
        MasterQuestAreaRepository::class,
    ];


    /**
     * マップ一覧
     *  TODO 解放済みのみ表示する
     * @param int $player_id
     * @return array
     */
    public function getMapList(int $player_id)
    {
        $maps = $this->MasterQuestMap->find();


        return $maps;
    }

    /**
     * エリア一覧
     *  TODO 解放済みのみ表示する
     * @param int $player_id
     * @return array
     */
    public function getAreaList(int $player_id, int $map_id)
    {
        $maps = $this->MasterQuestArea->getListByMapId($map_id);


        return $maps;
    }



    public function getArea(int $player_id, int $area_id=0)
    {
        $area = $this->MasterQuestArea->getByAreaId($area_id);

        return $area;
    }


    public function getPlayerQuest(int $player_id, $area_id=0, $stage_id=0)
    {
        $quest = $this->PlayerQuest->getDefaultQuest($player_id);

        if(empty($quest))
        {
            $area = $this->MasterQuestArea->getByAreaId($area_id);
            $quest = PlayerQuestModel::regist($player_id, $area->map_id, $area_id);
        }

        return $quest;
    }


    public function result(int $player_id, int $area_id=0, int $is_boss=0, BattleEntity $battle)
    {

    }

}