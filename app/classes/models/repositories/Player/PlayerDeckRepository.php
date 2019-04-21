<?php
namespace App\Models\Repositories\Player;

use Presto\Core\Databases\Model\Repository;
use Presto\Core\Databases\Model\Model;
use App\Models\Daos\Player\PlayerDeckModel;
use App\Exceptions\AppException;
use Presto\Core\Utilities\Collection;

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

            // TODO
            "slice"=>["player_character_id"=>10],
        ],
    ];


    /**
     * プレイヤーデッキ一覧の取得
     * @param int $player_id
     * @return array|Collection|PlayerDeckModel[]
     */
    public function getPlayerDeckList(int $player_id)
    {
        $cond = [];
        $cond["condition"]["player_id"] = $player_id;

        return $this->find($cond);
    }


    /**
     * プレイヤーデッキの取得
     * @param int $player_id
     * @param int $deck_id
     * @throws AppException
     * @return array|PlayerDeckModel
     */
    public function getPlayerDeck(int $player_id, int $deck_id)
    {
        $cond = [];
        $cond["condition"]["player_id"] = $player_id;
        $cond["condition"]["deck_id"] = $deck_id;

        $row = $this->findFirst($cond, 1);

        if(empty($row))
        {
            throw new AppException("デッキが見つからない[player_id:{$player_id}, deck_id:{$deck_id}]");
        }

        return $row;
    }
}
