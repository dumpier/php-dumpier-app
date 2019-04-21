<?php
namespace App\Models\Daos\Player\Manage;


use App\Models\Daos\BasePlayerManageModel;
use App\Defines\Game\PLAYER;
use App\Models\Templates\Docs\Player\Manage\PlayerManageDocTrait;

class PlayerManageModel extends BasePlayerManageModel
{
    use PlayerManageDocTrait;

    const PRIMARY_KEY = "player_id";

    protected $table = "player_manage";


    /**
     * プレイヤーマネージデータの作成
     * @param string $loginid
     * @param string $loginpw
     * @param int $type
     * @return \App\Models\Daos\Player\Manage\PlayerManageModel
     */
    public static function regist(string $loginid, string $loginpw, int $type)
    {
        $self = static::instance();

        $self->login_id = $loginid;
        $self->login_pw = $loginpw;
        $self->public_id = encrypter()->random(PLAYER::PUBLIC_ID_LENGTH);
        $self->type = $type;

        $self->save();

        return $self;
    }

}