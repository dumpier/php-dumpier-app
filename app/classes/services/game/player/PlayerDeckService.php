<?php
namespace App\Services\Game\Player;

use App\Models\Repositories\Player\PlayerDeckRepository;
use App\Models\Daos\Player\PlayerDeckModel;
use App\Models\Repositories\Player\PlayerCharacterRepository;

class PlayerDeckService extends \Service
{
    protected $repositories = [
        PlayerDeckRepository::class,
        PlayerCharacterRepository::class,
    ];


    /**
     * デッキの登録
     * @param int $player_id
     * @param int $deck_id
     * @param int $slot_count デッキのキャラの解放数
     * @return PlayerDeckModel
     */
    public function regist(int $player_id, int $deck_id=1, int $slot_count=1)
    {
        // TODO デッキ数の確認

        $PlayerDeck = PlayerDeckModel::regist($player_id, $deck_id, $slot_count);

        return $PlayerDeck;
    }


    /**
     * プレイヤーデッキ
     * @param int $player_id
     * @param int $deck_id
     * @return array|\App\Models\Daos\Player\PlayerDeckModel
     */
    public function getPlayerDeck(int $player_id, int $deck_id=1)
    {
        $PlayerDeck = $this->PlayerDeck->getPlayerDeck($player_id, $deck_id);

        // TODO キャラ一覧
        $Characters = $this->PlayerCharacter->getPlayerCharacterList($player_id);

        return $PlayerDeck;
    }



}