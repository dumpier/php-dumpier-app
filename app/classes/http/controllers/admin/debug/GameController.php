<?php
namespace App\Http\Controllers\Admin\Debug;

use App\Models\Repositories\PlayerManage\PlayerManageRepository;

class GameController extends \App\Http\Controllers\Admin\Controller
{
    protected static $breadcrumb = [
        ["name"=>"管理者TOP", "url"=>"/admin/",],
        ["name"=>"デバッグ", "url"=>"/admin/debug/",],
    ];

    protected $repositories = [
        PlayerManageRepository::class,
    ];


    public function index()
    {

        return $this->response();
    }


    // ダミーアカウント一覧
    public function account()
    {
        $this->layout = "html/layouts/empty";
        $playerPaginate = $this->PlayerManage->pagingDummy();

        $this->content("playerPaginate", $playerPaginate);
        return $this->response();
    }


    // 新規ダミーアカウントの作成
    public function regist()
    {
        $this->layout = "html/layouts/empty";
        $count = (int)input("count", 1);


        return $this->response();
    }
}