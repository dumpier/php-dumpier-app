<?php
namespace App\Http\Controllers\Admin;

class ResourceController extends \App\Http\Controllers\Admin\Controller
{
    protected static $breadcrumb = [
        ["name"=>"管理者TOP", "url"=>"/admin/",],
        ["name"=>"リソース一覧", "url"=>"/admin/resource/index",],
    ];

    public function index()
    {
        $path = input("path", "");
        $this->addPathBreadcrumb($path);
        // $this->breadcrumb("path::{$path}", "/admin/resource/index/?path={$path}");

        list($directories, $files) = directory()->list(resource_path(), $path);

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

        $this->breadcrumb($path, "/admin/resource/view/?path={$path}");

        $full_path = resource_path($path);

        if(! csv()->isCsv($full_path))
        {
            throw new \Exception("CSV以外は未対応");
        }

        if(!empty($parameters["type"]) && $parameters['type']=="reset")
        {
            $parameters = [];
        }

        list($rows, $count, $fields) = csv()->paging($full_path, $page, $parameters);

        $this->content("parameters", $parameters);
        $this->content("count", $count);
        $this->content("fields", $fields);
        $this->content("rows", $rows);
        return $this->response();
    }


    private function addPathBreadcrumb($path)
    {
        $path = trim($path, "/");

        if (empty($path) )
        {
            return ;
        }

        $array = explode("/", $path);
        $current = "";
        foreach ($array as $string)
        {
            $current .= "/{$string}";
            $this->breadcrumb($string, "/admin/resource/index/?path={$current}");
        }
    }
}