<?php
namespace App\Http\Controllers\Admin\Debug;

use App\Models\Repositories\Player\Manage\PlayerManageRepository;
use App\Defines\Game\PLAYER;
use App\Services\Game\Player\Manage\PlayerManageService;
use App\Services\Game\Player\PlayerRegistService;

class GameController extends \App\Http\Controllers\Admin\Controller
{
    protected static $breadcrumb = [
        ["name"=>"管理者TOP", "url"=>"/admin/",],
        ["name"=>"デバッグ", "url"=>"/admin/debug/",],
    ];

    protected $repositories = [
        PlayerManageRepository::class,

    ];

    protected $services = [
        PlayerRegistService::class,
        PlayerManageService::class,
    ];


    // ゲームデバッグ起動画面
    public function index()
    {

        return $this->response();
    }


    // ダミーアカウント一覧
    public function account()
    {
        $this->layout = "html/layouts/admin/empty";
        $playerPaginate = $this->PlayerManage->pagingDummy(SORT_DESC);

        $this->content("playerPaginate", $playerPaginate);
        return $this->response();
    }


    // 新規ダミーアカウントの作成
    public function regist()
    {
        $this->layout = "html/layouts/admin/empty";

        // 100個以上作成できないようにする
        $count = (int)input("count", 1);
        $count = $count > 100 ? 100 : $count;

        $playerManages = [];

        for($i = 1; $i<= $count; $i++)
        {
            $loginid = encrypter()->random(32);
            $loginpw = encrypter()->random(32);
            $PlayerManage = $this->PlayerRegistService->regist($loginid, $loginpw, PLAYER::TYPE_DUMMY);

            $playerManages[] = $PlayerManage->toArray();
        }

        $this->content("playerManages", $playerManages);
        return $this->response();
    }
}