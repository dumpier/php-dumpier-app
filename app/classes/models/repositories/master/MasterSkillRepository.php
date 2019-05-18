<?php
namespace App\Models\Repositories\Master;

use Presto\Core\Databases\Model\Repository;
use App\Models\Daos\Master\MasterSkillModel;

/**
 * master_skill
 */
class MasterSkillRepository extends Repository
{
    protected $class = MasterSkillModel::class;
}
