<?php
namespace App\Models\Repositories\Master;

use Presto\Core\Databases\Model\Repository;
use App\Models\Daos\Master\MasterTutorialCharacterModel;

/**
 * master_tutorial_character
 */
class MasterTutorialCharacterRepository extends Repository
{
    protected $class = MasterTutorialCharacterModel::class;
}
