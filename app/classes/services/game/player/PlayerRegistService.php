<?php
namespace App\Services\Game\Player;

use App\Models\Daos\Player\Manage\PlayerManageModel;
use App\Models\Repositories\Player\PlayerDeckRepository;
use App\Models\Repositories\Master\MasterTutorialCharacterRepository;

class PlayerRegistService extends \Service
{
    protected $repositories = [
        MasterTutorialCharacterRepository::class,

        PlayerDeckRepository::class,
    ];

    /**
     * プレイヤーマネージデータの作成
     * @param string $uuid
     * @param string $device_id
     * @param int $type
     * @return \App\Models\Daos\Player\Manage\PlayerManageModel
     */
    public function regist(string $uuid, string $device_id, int $type)
    {
        $PlayerManage = PlayerManageModel::instance()->regist($uuid, $device_id, $type);


        return $PlayerManage;
    }

}