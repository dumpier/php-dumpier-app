<?php
namespace App\Models\Repositories\Master;

use Presto\Core\Databases\Model\Repository;
use App\Models\Daos\Master\MasterCharacterLevelModel;

/**
 * master_character_level
 */
class MasterCharacterLevelRepository extends Repository
{
    protected $class = MasterCharacterLevelModel::class;
}
