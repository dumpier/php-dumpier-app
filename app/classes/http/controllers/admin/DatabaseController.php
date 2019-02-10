<?php
namespace App\Http\Controllers\Admin;

class DatabaseController extends \App\Http\Controllers\Admin\Controller
{
    public function index()
    {
        $databases = config("database", "connections");

        $this->setContent("databases", $databases);
        return $this->response();
    }


    public function tables()
    {
        $conn = input("conn", "default");

        $tables = database($conn)->tables();

        $this->setContent("conn", $conn);
        $this->setContent("tables", $tables);
        return $this->response();
    }


    public function datas()
    {
        $this->layout = "html/layouts/empty";

        $conn = input("conn");
        $table = input("table");

        $rows = database($conn)->paging($table);

        $this->setContent("rows", $rows);
        return $this->response();
    }


    // csvアップロード
    public function upload()
    {
        $conn = input("conn");
        $table = input("table");
        $csvfile = input("csvfile");


    }


    // csv出力
    public function download()
    {
        $conn = input("conn");
        $table = input("table");

    }
}