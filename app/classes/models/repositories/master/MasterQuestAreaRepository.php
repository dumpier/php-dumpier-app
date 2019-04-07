<?php
namespace App\Models\Repositories\Master;

use Presto\Core\Databases\Model\Repository;
use App\Models\Daos\Master\MasterQuestAreaModel;

/**
 * master_quest_area
 */
class MasterQuestAreaRepository extends Repository
{
    protected $class = MasterQuestAreaModel::class;


    /**
     * 指定マップIDのエリア一覧の取得
     * @param int $map_id
     * @return array|mixed
     */
    public function getListByMapId(int $map_id)
    {
        $cond = [];
        $cond["condition"]["map_id"] = $map_id;

        return $this->find($cond);
    }


    /**
     * エリアの取得
     * @param int $area_id
     * @return MasterQuestAreaModel|NULL
     */
    public function getByAreaId(int $area_id)
    {
        $row = $this->findByPk($area_id);

        return $row;
    }


}
