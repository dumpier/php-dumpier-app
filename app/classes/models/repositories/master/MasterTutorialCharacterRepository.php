<?php
namespace App\Models\Repositories\Master;

use Presto\Core\Databases\Model\Repository;
use App\Models\Daos\Player\MasterTutorialCharacterModel;

class MasterTutorialCharacterRepository extends Repository
{
    protected $class = MasterTutorialCharacterModel::class;


}