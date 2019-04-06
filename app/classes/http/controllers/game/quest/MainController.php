<?php
namespace App\Http\Controllers\Game\Quest;

use App\Services\Game\Player\PlayerDeckService;
use App\Services\Game\Master\MasterDeckService;
use App\Services\Game\Battle\BattleService;
use App\Services\Game\Player\Quest\PlayerMainQuestService;

class MainController extends \App\Http\Controllers\Game\Controller
{
    protected $services = [
        PlayerMainQuestService::class,
        PlayerDeckService::class,
        MasterDeckService::class,
        BattleService::class,
    ];

    // メインクエストトップ（マップ一覧）
    public function index()
    {
        $maps = $this->PlayerMainQuestService->maps($this->player_id);

        $this->content("maps", $maps);
        return $this->response();
    }


    // 指定マップのエリア一覧
    public function areas()
    {
        $map_id = request()->input("map_id");
        $areas = $this->PlayerMainQuestService->areas($this->player_id, $map_id);

        $this->content("areas", $areas);

        return $this->response();
    }


    // エリア詳細（敵、Lv等）
    public function area()
    {
        $area = ["id"=>1, "name"=>"AREA#1", ];

        $this->content("area", $area);
        return $this->response();
    }


    // バトル
    public function battle()
    {
        $area_id = (int)input("area_id", 0);
        $is_boss = (int)input("is_boss", 0);

        // プレイヤーデッキの抽出
        $allies = $this->PlayerDeckService->get($this->player_id);

        // 対戦デッキの抽出
        $oppenents = $this->MasterDeckService->get($area_id, $is_boss);

        // バトルの実施
        $battle = $this->BattleService->battle($allies, $oppenents);

        // 結果の更新
        $quest = $this->PlayerMainQuestService->result($this->player_id, $area_id, $is_boss, $battle);

        $this->content("is_boss", $is_boss);
        $this->content("battle", $battle);
        $this->content("quest", $quest);

        return $this->response();
    }
}