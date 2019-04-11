<?php
namespace App\Models\Repositories\Master;

use Presto\Core\Databases\Model\Repository;
use App\Models\Daos\Master\MasterQuestMapModel;

/**
 * master_quest_map
 */
class MasterQuestMapRepository extends Repository
{
    protected $class = MasterQuestMapModel::class;


    /**
     *
     * @param int $map_id
     * @return array|MasterQuestMapModel[]
     */
    public function getListByMapId(int $map_id)
    {
        $cond = [];
        $cond["condition"]["map_id"]["<="] = $map_id;

        return $this->find($cond);
    }



}
