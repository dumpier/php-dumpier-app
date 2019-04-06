<?php
namespace App\Services\Game\Player;

use App\Models\Repositories\Player\PlayerDeckRepository;
use App\Models\Daos\Player\PlayerDeckModel;

class PlayerDeckService extends \Service
{
    protected $repositories = [
        PlayerDeckRepository::class,
    ];


    public function get(int $player_id, int $deck_id=0)
    {
        $PlayerDeck = $this->PlayerDeck->getDefault($player_id);

    }


    /**
     *
     * @param int $player_id
     * @param int $deck_id
     * @return PlayerDeckModel
     */
    public function regist(int $player_id, int $deck_id=1, int $slot_count=1)
    {
        // TODO デッキ数の確認

        $PlayerDeck = PlayerDeckModel::regist($player_id, $deck_id, $slot_count);

        return $PlayerDeck;
    }
}