<?php
namespace App\Models\Repositories\Player;

use Presto\Model\Repository;
use App\Models\Daos\Player\PlayerCharacterModel;

class PlayerCharacterRepository extends Repository
{
    protected $class = PlayerCharacterModel::class;

    protected $relations = [
        PlayerWeaponRepository::class=>[
            "repository"=>PlayerWeaponRepository::class,
            "type"=>Repository::HAS_ONE,

            // JOIN条件
            "join"=>["id"=>"player_character_id", ],

            // 子テーブルのソート
            "order"=>["part_id"=>"ASC"],
        ],
    ];

}
