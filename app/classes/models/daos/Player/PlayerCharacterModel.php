<?php
namespace App\Models\Daos\Player;

use App\Models\Daos\BasePlayerModel;

class PlayerCharacterModel extends BasePlayerModel
{
    protected $table = 'player_character';

    const PLAYER_WEAPON_ID_COUNT = 6;
}