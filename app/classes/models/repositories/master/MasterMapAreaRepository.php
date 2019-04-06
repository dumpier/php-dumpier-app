<?php
namespace App\Models\Repositories\Master;

use Presto\Core\Databases\Model\Repository;
use App\Models\Daos\Master\MasterMapAreaModel;

/**
 * master_map_area
 */
class MasterMapAreaRepository extends Repository
{
    protected $class = MasterMapAreaModel::class;


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
}
