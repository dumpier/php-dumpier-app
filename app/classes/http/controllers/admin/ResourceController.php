<?php
namespace App\Http\Controllers\Admin;

class ResourceController extends \App\Http\Controllers\Admin\Controller
{
    public function index()
    {
        $path = input("path", path("app/resources"));

        list($directories, $files) = directory()->list($path);

        $this->setContent('directories', $directories);
        $this->setContent('files', $files);
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

        $this->setContent("parameters", $parameters);
        $this->setContent("count", $count);
        $this->setContent("fields", $fields);
        $this->setContent("rows", $rows);
        return $this->response();
    }
}