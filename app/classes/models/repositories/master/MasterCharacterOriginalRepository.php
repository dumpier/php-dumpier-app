<?php
namespace App\Models\Repositories\Master;

use Presto\Core\Databases\Model\Repository;
use App\Models\Daos\Master\MasterCharacterOriginalModel;

/**
 * master_character_original
 */
class MasterCharacterOriginalRepository extends Repository
{
    protected $class = MasterCharacterOriginalModel::class;
}
