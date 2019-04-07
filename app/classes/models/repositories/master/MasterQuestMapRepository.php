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
     * エリアの取得
     * @param int $area_id
     * @return MasterQuestMapModel|NULL
     */
    public function getByAreaId(int $area_id)
    {
        $row = $this->findByPk($area_id);

        return $row;
    }




}
