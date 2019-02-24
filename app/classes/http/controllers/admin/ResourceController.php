<?php
namespace App\Http\Controllers\Admin;

class ResourceController extends \App\Http\Controllers\Admin\Controller
{
    protected static $breadcrumb = [
        ["name"=>"管理者TOP", "url"=>"/admin/",],
        ["name"=>"リソース一覧", "url"=>"/admin/",],
    ];

    public function index()
    {
        $path = input("path", path("app/resources"));

        list($directories, $files) = directory()->list($path);

        $this->content('directories', $directories);
        $this->content('files', $files);
        return $this->response();
    }


    public function view()
    {
        $this->layout = "html/layouts/empty";

        $path = input("path");
        $page = (int)input("page", 1);
        $parameters = input("parameters", []);

        if(! csv()->isCsv($path))
        {
            throw new \Exception("CSV以外は未対応");
        }

        if(!empty($parameters["type"]) && $parameters['type']=="reset")
        {
            $parameters = [];
        }

        list($rows, $count, $fields) = csv()->paging($path, $page, $parameters);

        $this->content("parameters", $parameters);
        $this->content("count", $count);
        $this->content("fields", $fields);
        $this->content("rows", $rows);
        return $this->response();
    }
}