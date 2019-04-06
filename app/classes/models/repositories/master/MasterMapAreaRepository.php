<?php
namespace App\Models\Repositories\Master;

use Presto\Core\Databases\Model\Repository;
use App\Models\Daos\Master\MasterMapAreaModel;

/**
 * master_map_area
 */
class MasterMapAreaRepository extends Repository
{
    protected $model = MasterMapAreaModel::class;
}
