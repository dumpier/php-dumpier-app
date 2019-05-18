<?php
namespace App\Models\Repositories\Master;

use Presto\Core\Databases\Model\Repository;
use App\Models\Daos\Master\MasterBuffModel;

/**
 * master_buff
 */
class MasterBuffRepository extends Repository
{
    protected $class = MasterBuffModel::class;
}
