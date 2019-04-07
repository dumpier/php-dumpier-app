<?php
namespace App\Http\Controllers\Game\Quest;

use App\Services\Game\Player\PlayerDeckService;
use App\Services\Game\Battle\BattleService;
use App\Services\Game\Quest\QuestService;
use App\Services\Game\Quest\PlayerQuestService;

class MainController extends \App\Http\Controllers\Game\Controller
{
    protected $services = [
        PlayerQuestService::class,
        PlayerDeckService::class,
        QuestService::class,
        BattleService::class,
    ];

    // メインクエストトップ（マップ一覧）
    public function index()
    {
        $maps = $this->PlayerQuestService->getMapList($this->player_id);

        $this->content("maps", $maps);
        return $this->response();
    }


    // 指定マップのエリア一覧
    public function areas()
    {
        $map_id = input("map_id");

        $areas = $this->PlayerQuestService->getAreaList($this->player_id, $map_id);

        $this->content("areas", $areas);
        return $this->response();
    }


    // エリア詳細（敵、Lv等）
    public function area()
    {
        $area_id = input("area_id");

        $area = $this->PlayerQuestService->getArea($this->player_id, $area_id);

        $this->content("area", $area->toArray());
        return $this->response();
    }


    // バトル
    public function battle()
    {
        $area_id = (int)input("area_id", 0);
        $is_boss = (int)input("is_boss", 0);

        // 指定クエストの取得
        $quest = $this->PlayerQuestService->getPlayerQuest($this->player_id, $area_id);

        // プレイヤーデッキの抽出
        $allies = $this->PlayerDeckService->getPlayerDeck($this->player_id);

        // 対戦デッキの抽出
        $oppenents = $this->QuestService->getEnemyDeck($area_id, $is_boss);

        // バトルの実施
        $battle = $this->BattleService->battle($allies, $oppenents);

        // 結果の更新
        $quest = $this->PlayerQuestService->result($this->player_id, $area_id, $is_boss, $battle);

        $this->content("is_boss", $is_boss);
        $this->content("battle", $battle);
        $this->content("quest", $quest);

        return $this->response();
    }
}