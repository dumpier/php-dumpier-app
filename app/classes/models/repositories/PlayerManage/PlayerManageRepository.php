<?php
namespace App\Models\Repositories\PlayerManage;

use App\Models\Daos\PlayerManage\PlayerManageModel;
use Presto\Model\Repository;

class PlayerManageRepository extends Repository
{
    protected $class = PlayerManageModel::class;


    /**
     * @param int $player_id
     * @return PlayerManageModel
     */
    public function getByPlayerId(int $player_id)
    {
        return $this->findByPk($player_id);
    }
}
