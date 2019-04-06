<?php
namespace App\Services\Game\Player;

use App\Models\Repositories\Player\PlayerCharacterRepository;
use App\Models\Daos\Player\PlayerCharacterModel;
use App\Models\Repositories\Master\MasterCharacterRepository;

class PlayerCharacterService extends \Service
{
    protected $repositories = [
        MasterCharacterRepository::class,
        PlayerCharacterRepository::class,
    ];


    public function grant(int $player_id, int $character_id, $level=0)
    {
        // マスターデータの確認
        $this->MasterCharacter->getById($character_id);

        // プレイヤーキャラを作成
        $PlayerCharacter = PlayerCharacterModel::regist($player_id, $character_id, $level);

        return $PlayerCharacter;
    }
}