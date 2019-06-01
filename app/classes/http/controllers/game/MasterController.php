<?php
namespace App\Http\Controllers\Game;

class MasterController extends \App\Http\Controllers\Game\Controller
{
    public function index()
    {
        $table = input("table");

        return $this->response();
    }
}