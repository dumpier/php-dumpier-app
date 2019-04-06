<?php
namespace App\Models\Daos\Player;

use App\Models\Daos\BasePlayerModel;
use App\Models\Templates\Docs\Player\PlayerCharacterDocTrait;

class PlayerCharacterModel extends BasePlayerModel
{
    use PlayerCharacterDocTrait;

    const PLAYER_WEAPON_ID_COUNT = 6;
}