<?php
namespace App\Models\Repositories\Master;

use Presto\Core\Databases\Model\Repository;
use App\Models\Daos\Master\MasterCharacterModel;

/**
 * master_character
 */
class MasterCharacterRepository extends Repository
{
    protected $class = MasterCharacterModel::class;
}
