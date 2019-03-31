<?php
namespace App\Services\Game\Player;

use App\Models\Repositories\Player\PlayerDeckRepository;

class PlayerDeckService extends \Service
{
    protected $repositories = [
        PlayerDeckRepository::class,
    ];


    public function get(int $player_id, int $deck_id=0)
    {
        $PlayerDeck = $this->PlayerDeck->getDefault($player_id);

    }
}