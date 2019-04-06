<?php
namespace App\Services\Game\Player\Quest;

use App\Models\Repositories\Master\MasterMapAreaRepository;
use App\Models\Repositories\Master\MasterMapRepository;
use App\Models\Entities\Battle\BattleEntity;

class PlayerMainQuestService extends \Service
{
    protected $repositories = [
        MasterMapRepository::class,
        MasterMapAreaRepository::class,
    ];

    /**
     * マップ一覧
     *  TODO 解放済みのみ表示する
     * @param int $player_id
     * @return array
     */
    public function getMapList(int $player_id)
    {
        $maps = $this->MasterMap->find();


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
        $maps = $this->MasterMapArea->getListByMapId($map_id);


        return $maps;
    }



    public function getPlayerQuest(int $player_id, int $area_id=0)
    {

    }


    public function result(int $player_id, int $area_id=0, int $is_boss=0, BattleEntity $battle)
    {

    }

}