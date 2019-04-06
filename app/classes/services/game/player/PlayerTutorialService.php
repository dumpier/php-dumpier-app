<?php
namespace App\Services\Game\Player;

use App\Models\Repositories\Player\PlayerDeckRepository;
use App\Models\Repositories\Master\MasterTutorialCharacterRepository;

class PlayerTutorialService extends \Service
{
    protected $repositories = [
        MasterTutorialCharacterRepository::class,

        PlayerDeckRepository::class,
    ];


}