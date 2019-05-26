<?php
namespace App\Models\Repositories\Player;

use Presto\Core\Databases\Model\Repository;
use App\Models\Daos\Player\PlayerCharacterModel;
use Presto\Core\Databases\Model\Model;
use App\Models\Repositories\Master\MasterCharacterLevelRepository;
use App\Models\Repositories\Master\MasterSkillRepository;

class PlayerCharacterRepository extends Repository
{
    protected $class = PlayerCharacterModel::class;

    protected $relations = [
        MasterCharacterLevelRepository::class=>[
            "type"=>Model::HAS_ONE,
            "repository"=>MasterCharacterLevelRepository::class,

            "join"=>[
                "MasterCharacterLevel"=>[
                    "character_id"=>"character_id",
                    "level"=>"level",
                ],
            ],
        ],

        // TODO
        MasterSkillRepository::class=>[
            "type"=>Model::HAS_MANY,
            "repository"=>MasterSkillRepository::class,
            "join"=>[
                "MasterSkill"=>[],
            ],
        ],
    ];


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

