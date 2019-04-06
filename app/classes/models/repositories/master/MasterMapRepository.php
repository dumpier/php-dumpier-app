<?php
namespace App\Models\Repositories\Master;

use Presto\Core\Databases\Model\Repository;
use App\Models\Daos\Master\MasterMapModel;

/**
 * master_map
 */
class MasterMapRepository extends Repository
{
    protected $model = MasterMapModel::class;
}
