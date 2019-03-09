<?php
namespace App\Http\Controllers\Admin;

use App\Models\Repositories\Player\PlayerDeckRepository;

class TopController extends \App\Http\Controllers\Admin\Controller
{
    protected $repositories = [
        PlayerDeckRepository::class,
    ];

    public function index()
    {
        return $this->response();
    }


    public function test()
    {
        $cond = [];
        // $cond["conditions"]["player_id"] = 1;
        // $playerDecks = $this->playerDeck->find($cond, $recursion=1);

        //$this->content("playerDecks", $playerDecks);
        return $this->response();
    }
}