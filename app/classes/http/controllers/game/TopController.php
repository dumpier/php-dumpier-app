<?php
namespace App\Http\Controllers\Game;

class TopController extends \App\Http\Controllers\Game\Controller
{
    public function index()
    {
        $this->setContent('test', 'aaaaaaa');
        return $this->response();
    }
}