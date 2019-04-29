<?php
namespace App\Http\Controllers\Admin;

use Presto\Core\Utilities\Files\FileLoader;
use Presto\Core\Utilities\Files\JsonLoader;
use Presto\Core\Utilities\Files\CsvLoader;
use App\Exceptions\AppException;

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

        if(!empty($parameters["type"]) && $parameters["type"]=="reset")
        {
            $parameters = [];
        }

        $extension = FileLoader::instance()->extension($full_path);

        switch ($extension)
        {
            case "csv":
                list($rows, $count, $fields) = CsvLoader::instance()->paging($full_path, $page, $parameters);
                break;

            case "json":
                list($rows, $count, $fields) = JsonLoader::instance()->paging($full_path, $page, $parameters);
                break;

            default:
                throw new AppException("未対応ファイルタイプ");
        }

        $this->content("parameters", $parameters);
        $this->content("count", $count);
        $this->content("fields", $fields);
        $this->content("rows", $rows);
        $this->content("root", $root);
        $this->content("extension", $extension);
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