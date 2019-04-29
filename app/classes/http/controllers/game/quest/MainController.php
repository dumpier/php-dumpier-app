<?php
namespace App\Http\Controllers\Game\Quest;

use App\Services\Game\Player\PlayerDeckService;
use App\Services\Game\Battle\BattleService;
use App\Services\Game\Quest\QuestService;
use App\Services\Game\Quest\PlayerQuestService;
use App\Models\Repositories\Master\MasterQuestAreaRepository;

class MainController extends \App\Http\Controllers\Game\Controller
{
    protected $services = [
        PlayerQuestService::class,
        PlayerDeckService::class,
        QuestService::class,
        BattleService::class,
    ];

    protected $repositories = [
        MasterQuestAreaRepository::class,
    ];

    // メインクエストトップ（マップ一覧）
    public function index()
    {
        $Maps = $this->PlayerQuestService->getMapList($this->player_id);

        $this->content("maps", $Maps);
        return $this->response();
    }


    // 指定マップのエリア一覧
    public function areas()
    {
        $map_id = input("map_id");

        $Areas = $this->PlayerQuestService->getAreaList($this->player_id, $map_id);

        $this->content("areas", $Areas);
        return $this->response();
    }


    // エリア一覧
    public function stages()
    {
        $area_id = input("area_id");

        $Area = $this->MasterQuestArea->getByAreaId($area_id);
        $Stages = $this->PlayerQuestService->getStageList($this->player_id, $area_id);

        $this->content("area", $Area->toArray());
        $this->content("stages", $Stages->toArray());
        return $this->response();
    }


    // ステージ詳細（敵、Lv等）
    public function stage()
    {
        $stage_id = input("stage_id");

        $Stage = $this->PlayerQuestService->getStage($this->player_id, $stage_id);

        $this->content("stage", $Stage->toArray());
        return $this->response();
    }


    // バトル
    public function battle()
    {
        $area_id = (int)input("area_id", 0);
        $is_boss = (int)input("is_boss", 0);

        // 指定クエストの取得
        $Quest = $this->PlayerQuestService->getPlayerQuest($this->player_id, $area_id);

        // プレイヤーデッキの抽出
        $AllyDeck = $this->PlayerDeckService->getPlayerDeck($this->player_id);

        // 対戦デッキの抽出 TODO
        // $OppenentDeck = $this->QuestService->getEnemyDeck($area_id, $is_boss);
        $OppenentDeck = $this->PlayerDeckService->getPlayerDeck($this->player_id);

        // バトルの実施
        $BattleEntity = $this->BattleService->battle($AllyDeck->toDeckEntity(), $OppenentDeck->toDeckEntity());

        // 結果の更新
        $Quest = $this->PlayerQuestService->result($this->player_id, $area_id, $is_boss, $BattleEntity);

        // 次のクエストの解放
        $NextQuest = $this->PlayerQuestService->openNextStage($this->player_id, $area_id, $is_boss, $BattleEntity);

        $this->content("is_boss", $is_boss);
        $this->content("Battle", $BattleEntity);
        $this->content("Quest", $Quest);
        $this->content("NextQuest", $NextQuest);

        return $this->response();
    }
}