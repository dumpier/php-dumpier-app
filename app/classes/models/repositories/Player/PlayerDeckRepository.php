<?php
namespace App\Models\Repositories\Player;

use Presto\Mvc\Model\Repository;
use App\Models\Daos\Player\PlayerDeckModel;
use Presto\Mvc\Model\Model;

class PlayerDeckRepository extends Repository
{
    protected $class = PlayerDeckModel::class;

    protected $slices = ["player_character_id"=>PlayerDeckModel::PLAYER_CHARACTER_ID_COUNT];

    protected $relations = [
        PlayerCharacterRepository::class=>[
            'type'=>Model::HAS_ONE,
            "repository"=>PlayerCharacterRepository::class,

            // 親テーブルが満たすべき条件
            'where'=>[
                "or"=>[
                    "player_character_id_1"=>['>'=> 0],
                    "player_character_id_2"=>['>'=> 0],
                    "player_character_id_3"=>['>'=> 0],
                    "player_character_id_4"=>['>'=> 0],
                    "player_character_id_5"=>['>'=> 0],
                    "player_character_id_6"=>['>'=> 0],
                ],
            ],

            // JOIN条件（foregin_name=>[colurmn=>foreign_column]）
            'join'=>[
                "player_character_1"=>["player_character_id_1"=>"id"],
                "player_character_2"=>["player_character_id_2"=>"id"],
                "player_character_3"=>["player_character_id_3"=>"id"],
                "player_character_4"=>["player_character_id_4"=>"id"],
                "player_character_5"=>["player_character_id_5"=>"id"],
                "player_character_6"=>["player_character_id_6"=>"id"],
            ],
        ],
    ];

}
