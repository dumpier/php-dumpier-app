<?php
namespace App\Models\Daos\Player;

use App\Models\Daos\BasePlayerModel;
use App\Models\Templates\Docs\Player\PlayerCharacterDocTrait;

class PlayerCharacterModel extends BasePlayerModel
{
    use PlayerCharacterDocTrait;

    const PLAYER_WEAPON_ID_COUNT = 6;


    /**
     * 新規作成
     * @param int $player_id
     * @param int $character_id
     * @param int $level
     * @return \App\Models\Daos\Player\PlayerCharacterModel
     */
    public static function regist(int $player_id, int $character_id, int $level=0)
    {
        $self = static::instance();

        $self->player_id = $player_id;
        $self->character_id = $character_id;
        $self->level = $level;

        $self->save();

        return $self;
    }
}