<?php
namespace App\Http\Controllers\Admin;

class DatabaseController extends \App\Http\Controllers\Admin\Controller
{
    protected static $breadcrumb = [
        ["name"=>"管理者TOP", "url"=>"/admin/",],
        ["name"=>"DB一覧", "url"=>"/admin/database/",],
    ];

    public function index()
    {
        $databases = config("database", "connections");

        $this->content("databases", $databases);
        return $this->response();
    }


    public function tables()
    {
        $connection = input("conn", "default");
        $this->breadcrumb("テーブル一覧::{$connection}");

        $tables = database($connection)->tables();

        $this->content("conn", $connection);
        $this->content("tables", $tables);
        return $this->response();
    }


    public function datas()
    {
        $this->layout = "html/layouts/admin/empty";

        $connection = input("conn");
        $table = input("table");

        $rows = database($connection)->paging($table);

        $this->content("rows", $rows);
        return $this->response();
    }


    // csvアップロード
    public function upload()
    {
        $connection = input("conn");
        $table = input("table");
        $csvfile = input("csvfile");


    }


    // csv出力
    public function download()
    {
        $connection = input("conn");
        $table = input("table");

    }
}