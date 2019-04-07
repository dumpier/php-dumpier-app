<?php
namespace App\Services\Game\Player;

use App\Models\Daos\Player\Manage\PlayerManageModel;
use App\Models\Repositories\Player\PlayerDeckRepository;
use App\Models\Repositories\Master\MasterTutorialCharacterRepository;
use App\Models\Repositories\Master\MasterCharacterRepository;
use App\Models\Daos\Master\MasterCharacterModel;

class PlayerRegistService extends \Service
{
    protected $repositories = [
        MasterTutorialCharacterRepository::class,
        MasterCharacterRepository::class,

        PlayerDeckRepository::class,
    ];

    protected $services = [
        PlayerCharacterService::class,
        PlayerDeckService::class,
    ];

    /**
     * プレイヤーマネージデータの作成
     * @param string $uuid
     * @param string $device_id
     * @param int $type
     * @return \App\Models\Daos\Player\Manage\PlayerManageModel
     */
    public function regist(string $uuid, string $device_id, int $type, int $character_type=0)
    {
        // プレイヤーデータ作成
        $PlayerManage = PlayerManageModel::regist($uuid, $device_id, $type);

        // 初期キャラーのドロップ
        $MasterCharacter = $this->dropCharacter($character_type);
        // 初期キャラの付与
        $PlayerCharacter = $this->PlayerCharacterService->grant($PlayerManage->player_id, $MasterCharacter->character_id);

        // 初期デッキの作成
        $PlayerDeck = $this->PlayerDeckService->regist($PlayerManage->player_id);
        // デッキキャラの設定
        $PlayerDeck->player_character_id_1 = $PlayerCharacter->id;
        $PlayerDeck->slot_count = 1;
        $PlayerDeck->save();

        return $PlayerManage;
    }


    /**
     *
     * @param int $character_type
     * @return MasterCharacterModel
     */
    public function dropCharacter(int $character_type=0)
    {
        // ドロップ可能なキャラ一覧
        $characters = $this->MasterTutorialCharacter->find();
        $character = lottery()->drop($characters);

        // TODO drop
        $character_id = $character["character_id"];
        $MasterCharacter = $this->MasterCharacter->getByCharacterId($character_id);

        return $MasterCharacter;
    }
}