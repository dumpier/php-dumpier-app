<?php
namespace App\Services\Game\Quest;

use App\Models\Entities\Battle\BattleEntity;
use App\Models\Repositories\Master\MasterQuestMapRepository;
use App\Models\Repositories\Master\MasterQuestAreaRepository;
use App\Models\Daos\Player\PlayerQuestModel;
use App\Models\Repositories\Player\PlayerQuestRepository;

class PlayerQuestService extends \Service
{
    protected $repositories = [
        MasterQuestMapRepository::class,
        MasterQuestAreaRepository::class,

        PlayerQuestRepository::class,
    ];


    /**
     * 解放済みのマップ一覧
     * @param int $player_id
     * @return array
     */
    public function getMapList(int $player_id)
    {
        // 最終クエストの取得
        $quest = $this->getPlayerLastOpenQuest($player_id);

        // 最終クエスト以下のマップ一覧の取得
        $maps = $this->MasterQuestMap->getListByMapId($quest->map_id);

        return $maps;
    }

    /**
     * 解放済みのエリア一覧
     * @param int $player_id
     * @return array
     */
    public function getAreaList(int $player_id, int $map_id)
    {
        // 指定マップの最終クエストの取得
        $quest = $this->PlayerQuest->getLastOpenQuestByMapId($player_id, $map_id);

        $areas = $this->MasterQuestArea->getListByMapId($quest->map_id);

        return $areas;
    }


    /**
     * 指定エリア情報の取得
     * @param int $player_id
     * @param int $area_id
     * @return \App\Models\Daos\Master\MasterQuestAreaModel|NULL
     */
    public function getArea(int $player_id, int $area_id=0)
    {
        // 指定マップの最終クエストの取得
        $quest = $this->PlayerQuest->getPlayerQuest($player_id, $area_id);

        $area = $this->MasterQuestArea->getByAreaId($quest->area_id);

        return $area;
    }


    /**
     * 最終エリアの取得
     *  第1エリアのクエスト情報がない場合、解放する
     * @param int $player_id
     * @return \App\Models\Daos\Player\PlayerQuestModel|NULL
     */
    public function getPlayerLastOpenQuest(int $player_id)
    {
        // 最終エリアの取得
        $quest = $this->PlayerQuest->getLastOpenQuest($player_id);

        if(empty($quest))
        {
            // 解放されたエリアがまったくない場合
            $area = $this->MasterQuestArea->getFirstArea();

            $quest = PlayerQuestModel::regist($player_id, $area->map_id, $area->area_id);
        }

        return $quest;
    }


    /**
     * クエスト情報の取得
     * @param int $player_id
     * @param number $area_id
     * @param number $stage_id
     * @return \App\Models\Daos\Player\PlayerQuestModel|array|mixed
     */
    public function getPlayerQuest(int $player_id, $area_id)
    {
        $quest = $this->PlayerQuest->getPlayerQuest($player_id, $area_id);


        return $quest;
    }

    public function result(int $player_id, int $area_id=0, int $is_boss=0, BattleEntity $battle)
    {

    }

}