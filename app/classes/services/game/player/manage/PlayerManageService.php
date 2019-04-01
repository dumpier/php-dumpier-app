<?php
namespace App\Services\Game\Player\Manage;

use App\Models\Daos\Player\Manage\PlayerManageModel;
use App\Defines\Game\PLAYER;

class PlayerManageService extends \Service
{
    protected $repositories = [

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
        $PlayerManage = PlayerManageModel::instance();
        $PlayerManage->uuid = $uuid;
        $PlayerManage->device_id = $device_id;
        $PlayerManage->public_id = encrypter()->random(PLAYER::PUBLIC_ID_LENGTH);
        $PlayerManage->type = $type;

        $PlayerManage->save();

        return $PlayerManage;
    }
}