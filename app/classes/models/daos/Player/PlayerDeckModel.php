<?php
namespace App\Models\Daos\Player;

use App\Models\Daos\BasePlayerModel;

class PlayerDeckModel extends BasePlayerModel
{
    protected $table = "player_deck";

    const PLAYER_CHARACTER_ID_COUNT = 6;
}