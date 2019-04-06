<?php
namespace App\Models\Daos\Player\Manage;


use App\Models\Daos\BasePlayerManageModel;
use App\Defines\Game\PLAYER;
use App\Models\Templates\Docs\Player\Manage\PlayerManageDocTrait;

class PlayerManageModel extends BasePlayerManageModel
{
    use PlayerManageDocTrait;

    const PRIMARY_KEY = "player_id";


    /**
     * プレイヤーマネージデータの作成
     * @param string $uuid
     * @param string $device_id
     * @param int $type
     * @return \App\Models\Daos\Player\Manage\PlayerManageModel
     */
    public function regist(string $uuid, string $device_id, int $type)
    {
        $self = PlayerManageModel::instance();
        $self->uuid = $uuid;
        $self->device_id = $device_id;
        $self->public_id = encrypter()->random(PLAYER::PUBLIC_ID_LENGTH);
        $self->type = $type;

        $self->save();

        return $self;
    }

}