<?php
namespace App\Http\Controllers\Game;

class HomeController extends \App\Http\Controllers\Game\Controller
{
    public function index()
    {
        $this->content('test', 'aaaaaaa');
        return $this->response();
    }
}