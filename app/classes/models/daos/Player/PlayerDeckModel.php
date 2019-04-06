<?php
namespace App\Models\Daos\Player;

use App\Models\Daos\BasePlayerModel;
use App\Models\Templates\Docs\Player\PlayerDeckDocTrait;

class PlayerDeckModel extends BasePlayerModel
{
    use PlayerDeckDocTrait;

    const PLAYER_CHARACTER_ID_COUNT = 6;
}