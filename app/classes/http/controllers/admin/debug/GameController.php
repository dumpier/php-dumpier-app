<?php
namespace App\Http\Controllers\Admin\Debug;

class GameController extends \App\Http\Controllers\Admin\Controller
{
    protected static $breadcrumb = [
        ["name"=>"管理者TOP", "url"=>"/admin/",],
        ["name"=>"デバッグ", "url"=>"/admin/debug/",],
    ];


    public function index()
    {

        return $this->response();
    }

}