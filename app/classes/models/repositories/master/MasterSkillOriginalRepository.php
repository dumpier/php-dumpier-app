<?php
namespace App\Models\Repositories\Master;

use Presto\Core\Databases\Model\Repository;
use App\Models\Daos\Master\MasterSkillOriginalModel;

/**
 * master_skill_original
 */
class MasterSkillOriginalRepository extends Repository
{
    protected $class = MasterSkillOriginalModel::class;
}
