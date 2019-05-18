<?php
namespace App\Models\Repositories\Master;

use Presto\Core\Databases\Model\Repository;
use App\Models\Daos\Master\MasterSkillEffectModel;

/**
 * master_skill_effect
 */
class MasterSkillEffectRepository extends Repository
{
    protected $class = MasterSkillEffectModel::class;
}
