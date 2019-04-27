<?php
namespace App\Services\Game\Quest;

use App\Models\Entities\Battle\BattleEntity;
use App\Models\Repositories\Master\MasterQuestMapRepository;
use App\Models\Repositories\Master\MasterQuestAreaRepository;
use App\Models\Daos\Player\PlayerQuestModel;
use App\Models\Repositories\Player\PlayerQuestRepository;
use App\Models\Repositories\Master\MasterQuestStageRepository;
use App\Models\Daos\Master\MasterQuestMapModel;
use Presto\Core\Utilities\Collection;
use App\Models\Daos\Master\MasterQuestAreaModel;
use App\Models\Daos\Master\MasterQuestStageModel;

class PlayerQuestService extends \Service
{
    protected $repositories = [
        MasterQuestMapRepository::class,
        MasterQuestAreaRepository::class,
        MasterQuestStageRepository::class,

        PlayerQuestRepository::class,
    ];


    /**
     * 解放済みのマップ一覧
     * @param int $player_id
     * @return Collection|MasterQuestMapModel[]
     */
    public function getMapList(int $player_id)
    {
        // 最終クエストの取得
        $Quest = $this->getPlayerLastOpenQuest($player_id);

        // 最終クエスト以下のマップ一覧の取得
        $Maps = $this->MasterQuestMap->getListByMapId($Quest->map_id);

        return $Maps;
    }

    /**
     * 解放済みのエリア一覧
     * @param int $player_id
     * @return Collection|MasterQuestAreaModel[]
     */
    public function getAreaList(int $player_id, int $map_id)
    {
        // 指定マップの最終クエストの取得
        $Quest = $this->PlayerQuest->getLastOpenQuestByMapId($player_id, $map_id);

        $Areas = $this->MasterQuestArea->getListByMapId($Quest->map_id);

        return $Areas;
    }


    /**
     * 指定エリア情報の取得
     * @param int $player_id
     * @param int $area_id
     * @return Collection|MasterQuestStageModel[]|NULL
     */
    public function getStageList(int $player_id, int $area_id=0)
    {
        // 指定マップの最終クエストの取得
        $Quest = $this->PlayerQuest->getLastOpenQuestByAreaId($player_id, $area_id);

        $Stages = $this->MasterQuestStage->getListByAreaId($Quest->area_id);

        return $Stages;
    }


    /**
     * 指定エリア情報の取得
     * @param int $player_id
     * @param int $area_id
     * @return \App\Models\Daos\Master\MasterQuestAreaModel|NULL
     */
    public function getStage(int $player_id, int $stage_id=0)
    {
        // 指定マップの最終クエストの取得
        $Quest = $this->PlayerQuest->getPlayerQuest($player_id, $stage_id);

        $Stage = $this->MasterQuestStage->getByStageId($Quest->stage_id);

        return $Stage;
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
        $Quest = $this->PlayerQuest->getLastOpenQuest($player_id);

        if(empty($Quest))
        {
            // 解放されたエリアがまったくない場合
            $MasterStage = $this->MasterQuestStage->getFirstStage();

            $Quest = PlayerQuestModel::regist($player_id, $MasterStage->map_id, $MasterStage->area_id, $MasterStage->stage_id);
        }

        return $Quest;
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
        $Quest = $this->PlayerQuest->getPlayerQuest($player_id, $area_id);

        return $Quest;
    }

    public function result(int $player_id, int $area_id=0, int $is_boss=0, BattleEntity $Battle)
    {

    }

}