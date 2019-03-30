<?php
namespace App\Http\Controllers\Game\Quest;

use App\Models\Entities\Battle\BattleEntity;

class MainController extends \App\Http\Controllers\Game\Controller
{
    // メインクエストトップ（マップ一覧）
    public function index()
    {
        $maps = [
            ["id"=>1, "name"=>"MAP#1", ],
            ["id"=>2, "name"=>"MAP#2", ],
            ["id"=>3, "name"=>"MAP#3", ],
            ["id"=>4, "name"=>"MAP#4", ],
        ];

        $this->content("maps", $maps);
        return $this->response();
    }


    // 指定マップのエリア一覧
    public function areas()
    {
        $areas = [
            ["id"=>1, "name"=>"AREA#1", ],
            ["id"=>2, "name"=>"AREA#2", ],
            ["id"=>3, "name"=>"AREA#3", ],
            ["id"=>4, "name"=>"AREA#4", ],
            ["id"=>5, "name"=>"AREA#5", ],
        ];

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
        $allies = $this->playerDeckService->get($this->player_id);

        // 対戦デッキの抽出
        $oppenents = $this->masterDeckService->get($area_id, $is_boss);

        // バトルの実施
        $battle = $this->battleService->battle($allies, $oppenents);

        // 結果の更新
        $quest = $this->questService->result($this->player_id, $area_id, $is_boss, $battle);

        $this->content("is_boss", $is_boss);
        $this->content("battle", $battle);
        $this->content("quest", $quest);

        return $this->response();
    }
}