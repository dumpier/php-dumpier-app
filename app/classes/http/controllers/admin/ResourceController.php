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
        $root = input("root", "res");
        $path = input("path", "");
        $this->addPathBreadcrumb($root, $path);

        list($directories, $files) = directory()->list(path()->switching($root), $path);

        $this->content("directories", $directories);
        $this->content("files", $files);
        $this->content("root", $root);
        return $this->response();
    }


    public function view()
    {
        $this->layout = "html/layouts/empty";

        $root = input("root", "res");
        $path = input("path");
        $page = (int)input("page", 1);
        $parameters = input("parameters", []);

        $this->addPathBreadcrumb($root, $path);

        $full_path = path()->switching($root, $path);
        if(! csv()->isCsv($full_path))
        {
            throw new \Exception("CSV以外は未対応");
        }

        if(!empty($parameters["type"]) && $parameters["type"]=="reset")
        {
            $parameters = [];
        }

        list($rows, $count, $fields) = csv()->paging($full_path, $page, $parameters);

        $this->content("parameters", $parameters);
        $this->content("count", $count);
        $this->content("fields", $fields);
        $this->content("rows", $rows);
        $this->content("root", $root);
        return $this->response();
    }


    private function addPathBreadcrumb($root, $path)
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
            $this->breadcrumb($string, "/admin/resource/index/?root={$root}&path={$current}");
        }
    }
}