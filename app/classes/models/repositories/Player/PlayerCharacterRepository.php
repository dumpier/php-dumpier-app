<?php
namespace App\Models\Repositories\Player;

use Presto\Core\Databases\Model\Repository;
use App\Models\Daos\Player\PlayerCharacterModel;

class PlayerCharacterRepository extends Repository
{
    protected $class = PlayerCharacterModel::class;


    public function getPlayerCharacterList(int $player_id, array $characterIds=[])
    {
        $cond = [];
        $cond["condition"]["player_id"] = $player_id;

        if($characterIds)
        {
            $cond["condition"]["id"]["in"] = $characterIds;
        }

        return $this->find($cond);
    }
}

